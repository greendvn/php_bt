<?php
namespace Controller;
include_once "Manager.php";

class StudentManager extends Manager
{


    public function add($student)
    {
        $listStudent = $this->readFile();

        $data = [
            'name' => $student->name,
            'age' => $student->age,
            'address' => $student->address,
            'group' => $student->group,
            'image' =>$student->image
        ];
        array_push($listStudent, $data);
        $this->saveDataToFile($listStudent);
    }

    public function delete($index)
    {
        $students = $this->readFile();
        if (array_key_exists($index, $students)) {
            array_splice($students, $index, 1);
        }
        $this->saveDataToFile($students);
    }


    public function getList()
    {
        $data = $this->readFile();

        $arr = [];
        foreach ($data as $item) {
            $student = new Student(
                                    $item['name'],
                                    $item['age'],
                                    $item['address'],
                                    $item['group'],
                                    $item['image']
            );

            array_push($arr, $student);
        }

        return $arr;
    }

    public function findById($index)
    {
        $data = $this->readFile();
        if (array_key_exists($index, $data)) {
            $student = new Student(
                $data[$index]['name'],
                $data[$index]['age'],
                $data[$index]['address'],
                $data[$index]['group'],
                $data[$index]['image']
            );

            return $student;
        }
    }

    public function edit($student, $index) {
        $listStudent = $this->readFile();

        $data = [
            'name' => $student->name,
            'age' => $student->age,
            'address' => $student->address,
            'group' => $student->group,
            'image' =>$student->image
        ];

        $listStudent[$index] = $data;

        $this->saveDataToFile($listStudent);
    }
    public function search($search){
        $students  = $this->getList();
        if(empty($search)){
            return $students;
        }
        $filtered_students = [];
        foreach ($students as $student){
            if (!empty($search)&&($student->name==$search||$student->age==$search||$student->address==$search||$student->group ==$search)
            ||stripos($student->name,$search)!== false||stripos($student->age,$search)!== false||
            stripos($student->address,$search)!== false||stripos($student->group ,$search)!== false)
                $filtered_students[] = $student;
        }
        return $filtered_students;
    }


}