<?php
require __DIR__.'/../config.php';
require __DIR__.'/../includes/functions.php';
require __DIR__.'/../includes/db.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    json_response(['success' => false, 'error' => 'Method not allowed'], 405);
}

$input = json_decode(file_get_contents('php://input'), true) ?? [];

$email = trim((string) ($input['email'] ?? ''));
$consentGiven = !empty($input['consent_given']);
$notRobot = !empty($input['not_robot']);

if ($email === '' || !is_valid_email($email)) {
    json_response(['success' => false, 'error' => 'Please enter a valid email address.'], 422);
}

if (!$notRobot) {
    json_response(['success' => false, 'error' => 'Please confirm you are not a robot.'], 422);
}

if (!$consentGiven) {
    json_response(['success' => false, 'error' => 'Please confirm you consent to receive marketing emails.'], 422);
}

try {
    $stmt = db()->prepare('SELECT id FROM newsletter_signups WHERE email = ?');
    $stmt->execute([$email]);
    if ($stmt->fetch()) {
        json_response(['success' => false, 'error' => "You're already on the list — hang tight."], 409);
    }

    $stmt = db()->prepare('INSERT INTO newsletter_signups (email, consent_given) VALUES (?, ?)');
    $stmt->execute([$email, 1]);
} catch (Throwable $e) {
    json_response(['success' => false, 'error' => 'An unexpected error occurred.'], 500);
}

$subject = 'New newsletter signup - '.SITE_NAME;
$body = "Email: $email\n";
$headers = "From: ".MAIL_FROM."\r\n"
    ."Content-Type: text/plain; charset=UTF-8\r\n"
    ."MIME-Version: 1.0";
mail(NOTIFY_EMAIL, $subject, $body, $headers);

json_response(['success' => true]);
