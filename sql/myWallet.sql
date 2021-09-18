DROP DATABASE IF EXISTS MyWallet;
CREATE DATABASE MyWallet;
USE MyWallet;

Create TABLE User (
    UserID INT AUTO_INCREMENT PRIMARY KEY,
    Email VARCHAR(20),
    Password VARCHAR(20),
    UserName VARCHAR(20)
	
) Engine=InnoDB;

Create TABLE Record (
    RecordID INT AUTO_INCREMENT PRIMARY KEY,
    UserID INT,
    RecordDate DATE,
    Amount FLOAT,
    Category VARCHAR(20),
    RecordType VARCHAR(10),
    FOREIGN KEY (UserID) REFERENCES User(UserID)
	
) Engine=InnoDB;

INSERT INTO User (UserID, UserName, Balance)
VALUES (1, "Haruka", 0);
