<?php
use Controller\Student;
use Controller\StudentManager;
use Controller\GroupManager;
use Controller\Group;

include_once "../class/Student.php";
include_once "../class/StudentManager.php";
include_once "../class/Group.php";
include_once "../class/GroupManager.php";

$index = (int)$_GET['index'];
$path = "../group.json";
$listGroup  =  new \Controller\GroupManager($path);
$groups = $listGroup->getList();
$groupEdit = $groups[$index]->nameGroup;
$pathFile = "../data.json";
$studentManager  = new StudentManager($pathFile);
$students = $studentManager->getList();
foreach ($students as $student) {
    if ($student->group == $groupEdit)
        $student->group = '';
}
$studentManager->saveDataToFile($students);

$listGroup->delete($index);

header("Location: editGroup.php");