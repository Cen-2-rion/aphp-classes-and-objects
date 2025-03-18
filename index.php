<?php
declare(strict_types=1);

require_once(__DIR__ . '/autoload.php');

use Object\Human\Student;
use Object\Technics\Televisor;
use Object\Technics\Transport\Car;

$student = new Student('иван', 'иванов');
$student->checkStudentAge(21);
$student1 = new Student('пётр', 'петров');
$student1->checkStudentAge(12);
$student2 = new Student('фёдор', 'фёдоров');
$student2->checkStudentAge(55);

$car = new Car();
$car->brand = 'BMV';
$car->color = 'black';
$car->model = 'X6';
$car->carInfo();
$car1 = new Car();
$car1->brand = 'Tayota';
$car1->color = 'white';
$car1->model = 'Camry';
$car1->carInfo();

$televisor = new Televisor('samsung', 'hd');
$televisor->getScreenResolution();
$televisor1 = new Televisor('sony', '4k');
$televisor1->getScreenResolution();
$televisor2 = new Televisor('philips', 'bug');
$televisor2->getScreenResolution();
