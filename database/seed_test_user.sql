-- Seed a test admin user for Portfolio Maker
-- Run this after importing db_freelance.sql into your MySQL/MariaDB
INSERT INTO `users` (`firstname`, `lastname`, `username`, `password`, `avatar`, `last_login`)
VALUES ('Test', 'Admin', 'testadmin', MD5('password123'), NULL, NULL);