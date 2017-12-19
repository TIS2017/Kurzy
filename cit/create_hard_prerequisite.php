<?php
// create_hard_prerequisite.php <name>
require_once "bootstrap.php";

$newPrerequisite= $argv[1];
$newCourse= $argv[2];

$prereq = new Prereq();

$prereq->setCourse($newCourse);
$prereq->setPrerequisite($newPrerequisite);

$entityManager->persist($prereq);
$entityManager->flush();

echo "Created Hard Prerequisite with ID " . $prereq->getId() . "\n";