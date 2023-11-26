
CREATE TABLE product_table (
    id INT PRIMARY KEY,
    name VARCHAR(255),
    invantory int(10),
    new price int(15),
    old price int(15),
    current price int(15),
    orders int(50),
    available time datetime,
    type varchar(15)
    
);

CREATE TABLE user_table (
    UserID INT PRIMARY KEY,
    FirstName VARCHAR(255),
    LastName VARCHAR(255),
    Email VARCHAR(255) UNIQUE,
    UserName VARCHAR(50) UNIQUE,
    DateOfBirth DATE,
    UserPassword VARCHAR(255),
    LastLogin DATETIME,
    PhoneNumber BIGINT,
);

