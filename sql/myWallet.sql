DROP DATABASE IF EXISTS MyWallet;
CREATE DATABASE MyWallet;
USE MyWallet;

Create TABLE Record (
    RecordID INT AUTO_INCREMENT PRIMARY KEY,
    RecordDate DATE,
    Amount INT,
    Category VARCHAR(20)
	
) Engine=InnoDB;

Create TABLE User (
    UserID INT AUTO_INCREMENT PRIMARY KEY,
    UserName VARCHAR(20),
    Balance INT
	
) Engine=InnoDB;
