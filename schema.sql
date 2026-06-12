
CREATE DATABASE IF NOT EXISTS school_fees_db;
USE school_fees_db;

CREATE TABLE users(
 id INT AUTO_INCREMENT PRIMARY KEY,
 username VARCHAR(50) UNIQUE,
 password VARCHAR(255),
 role ENUM('admin','accountant')
);

CREATE TABLE students(
 student_id INT AUTO_INCREMENT PRIMARY KEY,
 reg_no VARCHAR(30) UNIQUE,
 firstname VARCHAR(50),
 lastname VARCHAR(50),
 class_name VARCHAR(30),
 total_fee DECIMAL(10,2) DEFAULT 0
);

CREATE TABLE payments(
 payment_id INT AUTO_INCREMENT PRIMARY KEY,
 student_id INT,
 amount DECIMAL(10,2),
 payment_date DATE,
 FOREIGN KEY(student_id) REFERENCES students(student_id)
);
