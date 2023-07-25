CREATE TABLE IF NOT EXISTS  DadJokes (
    /*vbp37 It202-450 M23  july 24, 2023 */
    `id` INT AUTO_INCREMENT NOT NULL,
    `joke_id` VARCHAR(100),
    
    `setup` TEXT,
    `punchline` TEXT,
    `created` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,


    PRIMARY KEY (`id`),
    UNIQUE KEY (`joke_id`)
);
