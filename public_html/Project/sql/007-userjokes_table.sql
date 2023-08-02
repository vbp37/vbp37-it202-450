CREATE TABLE IF NOT EXISTS `UserJokes`
(
    id INT AUTO_INCREMENT PRIMARY KEY,
    setup TEXT NOT NULL,
    punchline TEXT NOT NULL,
    username Text NOT NUll,
    creator VARCHAR(30)
);
/* user table for the users created jokes */
