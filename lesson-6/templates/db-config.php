<?php
const SERVER = "localhost";
const DB = "db_courses_online";
const LOGIN = "root";
const PASS = "root";

$connect = mysqli_connect(SERVER,LOGIN,PASS,DB) or die("Ошибка соединения с базой данных");
