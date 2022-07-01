#####          #####
## PRIMARY WORK ##
#####        #####

### SHOW DATABASE 
    SHOW DATABASE;

### SHOW TABLES
    SHOW TABLES FROM database_name;

### SELECT DATABASE
    USE DatabaseName;

### CREATE DB
    CREATE DATABASE database_name;

### CREATE TABLE
    CREATE TABLE table_name (
    column1 datatype,
    column2 datatype,
    column3 datatype
    );

### SELECT DATABASE
    USE DatabaseName;

### REMOVE DATABASE
    DROP DATABASE databasename;

### REMOVE TABLE
    DROP TABLE table_name;

#####            #####
## WORK WITH TABLE ##
#####           #####

### SELECT DATA FROM TABLE
    SELECT column1, column2 FROM table_name;

    SELECT * FROM table_name;

### INSERT DATA TO TABLE
    INSERT INTO table_name (column1, column2, column3,...columnN) VALUES (value1, value2, value3,...valueN);

    INSERT INTO STUDENTS VALUES (7, 'ILIYA', 29, 'Indore', 10000.00 );

### MODIFY DATA FROM TABLE
    UPDATE table_name SET column1 = value1, column2 = value2 WHERE [condition];

### DELETE DATA FROM TABLE
    DELETE FROM table_name WHERE [condition];

    DELETE FROM CUSTOMERS WHERE ID = 6;

    DELETE FROM CUSTOMERS;

### PRIMARY KEY on CREATE TABLE
    CREATE TABLE Persons (
       ID int NOT NULL,
       LastName varchar(255) NOT NULL,
       FirstName varchar(255),
       Age int,
       PRIMARY KEY (ID)
    );




