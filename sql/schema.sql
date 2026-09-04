-- Art by Ashley database schema
-- Import this into your MySQL database (Hostinger: hPanel -> Databases -> phpMyAdmin -> Import)

CREATE TABLE IF NOT EXISTS newsletter_signups (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL UNIQUE,
    consent_given TINYINT(1) NOT NULL DEFAULT 0,
    subscribed_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Tracks signup attempts per IP so api/newsletter-submit.php can rate-limit
-- (max 5/hour) before hitting the DB insert or sending the notification email.
CREATE TABLE IF NOT EXISTS signup_attempts (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    ip_address VARCHAR(45) NOT NULL,
    attempted_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    INDEX idx_signup_attempts_ip_time (ip_address, attempted_at)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
