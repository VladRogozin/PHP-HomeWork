CREATE TABLE IF NOT EXISTS `users`
(
    id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    phone_number INT NOT NULL,
    telegram CHAR(50),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    );

CREATE TABLE IF NOT EXISTS `cars`
(
    id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    user_id INT UNSIGNED,
    price DECIMAL(10,2) NOT NULL,
    model CHAR(50) NOT NULL,
    year INT NOT NULL,
    FOREIGN KEY (user_id) REFERENCES users(id)
    );


INSERT INTO users (phone_number, telegram) VALUES
    ('123546789', '@vlad_rogozin'),
    ('123456789', '@john_doe'),
    ('987654321', '@jane_smith');


INSERT INTO cars (user_id, price, model, year) VALUES
    (1, 25000.00, 'Toyota Camry', 2022),
    (2, 30000.00, 'Honda Accord', 2023),
    (3, 500.00, 'ZAZ', 1990);


SELECT * FROM cars WHERE price <= 500 ;
SELECT * FROM cars WHERE year > 2000 ;

UPDATE users SET phone_number = '111222333', telegram = '@test_user' WHERE id = 1;
UPDATE cars SET model = 'Honda Accord 2.0' WHERE model = 'Honda Accord';

DELETE FROM users WHERE id = 3;
