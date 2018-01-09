DROP DATABASE socialnetwork;
CREATE DATABASE socialnetwork;

CREATE TABLE users (
user_id             INT NOT NULL AUTO_INCREMENT,
user_firstname      VARCHAR(20) NOT NULL,  
user_lastname       VARCHAR(20) NOT NULL,
user_nickname       VARCHAR(20),
user_password       VARCHAR(255) NOT NULL,
user_email          VARCHAR(255) NOT NULL,
user_gender         CHAR(1) NOT NULL,
user_birthdate      DATE NOT NULL,    
user_status         CHAR(1),
user_about          TEXT,
user_hometown       VARCHAR(255),
PRIMARY KEY (user_id)
);

CREATE TABLE friendship (
user1_id            INT NOT NULL,
user2_id            INT NOT NULL,
friendship_status   INT NOT NULL,
FOREIGN KEY (user1_id) REFERENCES users(user_id),
FOREIGN KEY (user2_id) REFERENCES users(user_id)
);

CREATE TABLE posts (
post_id             INT NOT NULL AUTO_INCREMENT,
post_caption        TEXT NOT NULL,
post_time           TIMESTAMP NOT NULL, 
post_public         CHAR(1) NOT NULL,
post_by             INT NOT NULL,
PRIMARY KEY (post_id),
FOREIGN KEY (post_by) REFERENCES users(user_id)
);

CREATE TABLE user_phone (
user_id         INT,
user_phone      INT,
FOREIGN KEY (user_id) REFERENCES users(user_id)
);