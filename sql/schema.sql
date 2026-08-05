-- Art by Ashley database schema
-- Import this into your MySQL database (Hostinger: hPanel -> Databases -> phpMyAdmin -> Import)

CREATE TABLE IF NOT EXISTS newsletter_signups (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL UNIQUE,
    consent_given TINYINT(1) NOT NULL DEFAULT 0,
    subscribed_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
