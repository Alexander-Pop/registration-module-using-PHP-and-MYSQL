The project is a registration system for people. It is developed using PHP and MYSQL. The database can be found under the database directory. 
The table structure
/////////////////////////////////

CREATE TABLE registration (
    registerID INT PRIMARY KEY AUTO_INCREMENT,
    name varchar(254) NOT NULL,
    age float(10) NOT NULL,
    phoneNo bigint(20) NOT NULL,
    dateCreate DATETIME DEFAULT NULL,
    dateModified TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    UNIQUE(name, age, phoneNo)
);

/////////////////////////////////
