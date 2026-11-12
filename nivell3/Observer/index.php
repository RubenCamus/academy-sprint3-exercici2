<?php
require_once('Mentor.php');
require_once('Moodle.php');
require_once('Task.php');

$mentor = new Mentor("Joan");
$mentor2 = new Mentor("Kath");
$moodle = new Moodle();

$moodle->attach($mentor);
$moodle->attach($mentor2);
$moodle->setTask(new Task("Design Patterns"));

?>
