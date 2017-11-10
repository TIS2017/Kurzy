<?php
// list_products.php
require_once "bootstrap.php";

$prereqRepository = $entityManager->getRepository('Prereq');
$prereqs = $prereqRepository->findAll();

foreach ($prereqs as $pre) {
    echo sprintf("Hard prerequisity :course: %s", $pre->getCourse());
    echo sprintf(", prereq: %s\n", $pre->getPrerequisite());
}