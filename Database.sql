-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 3/14, 2020 at 08:35 AM



SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";




CREATE DATABASE IF NOT EXISTS chat_base;

CREATE TABLE IF NOT EXISTS users(
id integer PRIMARY KEY AUTO_INCREMENT,
username text NOT NULL,
password text NOT NULL
);

CREATE TABLE IF NOT EXISTS users_chat(
chat_id integer NOT NULL AUTO_INCREMENT,
chat_room_id integer NOT NULL,
chat_message VARCHAR(140) NOT NULL,
user_id integer NOT NULL,
chat_date datetime NOT NULL,
PRIMARY KEY(chat_id)
);

CREATE TABLE IF NOT EXISTS chat_rooms(
chat_id integer NOT NULL AUTO_INCREMENT,
room_name VARCHAR(40) NOT NULL,
PRIMARY KEY(chat_id)
);

INSERT INTO chat_rooms(room_name) VALUES
("FirstChat");




