# simple-calculator

Calculator application written in plain HTML+CSS+JavaScript+PHP

  - Pure HTML, CSS, JS, JQuery and PHP
  - Ajax is used to store values in Database

.
+-- db
|   +-- calci.sql
+-- save.php
+-- index.php

# DataBase comand
Create database *calci* in phpmyadmin. Choose *calci* database and write below code to create a table:
```
CREATE TABLE `calci_history` (
  `id` int(11) NOT NULL,
  `expression` text NOT NULL,
  `value` text NOT NULL,
  `created_at` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
```
