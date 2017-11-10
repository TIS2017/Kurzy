<?php
// create_types_of_courses.php <name>
require_once "bootstrap.php";

$newPrerequisite= $argv[1];
$newCourse= $argv[2];

$prereq = new Typeofcourses();

$prereq->setCourse($newCourse);
$prereq->setPrerequisite($newPrerequisite);

$entityManager->persist($prereq);
$entityManager->flush();

echo "Created Hard Prerequisite with ID " . $prereq->getId() . "\n";