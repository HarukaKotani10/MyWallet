DROP DATABASE IF EXISTS MyWallet
CREATE DATABASE MyWallet
USE MyWallet

Create TABLE Record (
    IncomeID TINYINT(3) AUTO_INCREMENT PRIMARY KEY,
    IncomeDate DATE,
    Amount INT,
    Category VARCHAR(20)
	
) Engine=InnoDB;

Create TABLE User (
    UserID TINYINT(3) AUTO_INCREMENT PRIMARY KEY,
    UserName VARCHAR(20),
    Balance INT
	
) Engine=InnoDB;
