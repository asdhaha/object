<?php
require_once('Model/Course.php');

use Model\Course;

$name = 'name';
$price = 'price';
$type = 'type';

$course = new Course($name, $price, $type);
$uuid = $course->getUUID();
$courseName = $course->getCourseName();

echo $uuid;
echo '<br>';
echo $courseName;
