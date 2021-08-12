DROP DATABASE IF EXISTS MyWallet
CREATE DATABASE MyWallet
USE MyWallet

Create TABLE Income (
    IncomeID TINYINT(3) AUTO_INCREMENT PRIMARY KEY,
    IncomeDate DATE,
    Amount INT,
    Category VARCHAR(20)
	
) Engine=InnoDB;

Create TABLE Expense (
    ExpenseID TINYINT(3) AUTO_INCREMENT PRIMARY KEY,
    ExpenseDate DATE,
    Amount INT,
    Category VARCHAR(20)
	
) Engine=InnoDB;

Create TABLE Users (
    UserID TINYINT(3) AUTO_INCREMENT PRIMARY KEY,
    UserName VARCHAR(20),
    Balance INT
	
) Engine=InnoDB;
