<?php
/**
 * Global site configuration.
 * Copy this file to config.php and fill in real values — config.php is
 * gitignored so real DB credentials never get committed.
 */

define('SITE_NAME', 'Art by Ashley');
define('SITE_TAGLINE', 'Clay sculptures, abstract paintings, and handmade oddities, made to order.');
define('SITE_URL', 'https://ashleycamarneiro.ca');
define('SITE_EMAIL', 'hello@ashleycamarneiro.ca');
define('SITE_LOCATION', 'Canada');

// --- MySQL database (powers the launch-list signup form) ---
// On Hostinger: hPanel -> Databases -> MySQL Databases gives you the host
// (usually 'localhost'), database name, username, and password.
define('DB_HOST', 'localhost');
define('DB_NAME', 'REPLACE_ME');
define('DB_USER', 'REPLACE_ME');
define('DB_PASS', 'REPLACE_ME');

// Where signup notifications get emailed to (defaults to SITE_EMAIL).
define('NOTIFY_EMAIL', 'hello@ashleycamarneiro.ca');
// The "From" address used when sending notification emails. On Hostinger this
// should be a real mailbox on your domain so mail() delivers reliably.
define('MAIL_FROM', 'hello@ashleycamarneiro.ca');

// Social links — fill in real handles when ready, leave blank to hide the icon.
$SOCIAL_LINKS = [
    'instagram' => '',
    'tiktok'    => '',
];
