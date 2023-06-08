create database srsvst;
use srsvst;
CREATE TABLE srvtb (
  ID INT PRIMARY KEY AUTO_INCREMENT,
  Name VARCHAR(255),
  Email VARCHAR(255),
  Phoneno VARCHAR(20),
  Companyname VARCHAR(255),
  Position VARCHAR(255),
  Password VARCHAR(100),
  Feedback TEXT
);
CREATE TABLE survey_responses (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL,
  age INT,
  role VARCHAR(255),
  experience VARCHAR(255),
  user_rate VARCHAR(255),
  materials_rate VARCHAR(255),
  user_recommend VARCHAR(255),
  comment TEXT
);

CREATE TABLE survey_preferences (
  id INT AUTO_INCREMENT PRIMARY KEY,
  response_id INT,
  preference VARCHAR(255),
  FOREIGN KEY (response_id) REFERENCES survey_responses(id)
);
