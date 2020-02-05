<?php


namespace Controller;
include_once 'Manager.php';

class GroupManager extends Manager
{
    public function add($group)
    {
        $listGroup = $this->readFile();
        $data = [
            'nameGroup' => $group->nameGroup
        ];
        array_push($listGroup, $data);
        $this->saveDataToFile($listGroup);
    }
    public function getList()
    {
        $data = $this->readFile();

        $arr = [];
        foreach ($data as $item) {
            $group = new Group(
                $item['nameGroup']
            );

            array_push($arr, $group);
        }
        return $arr;
    }
    public function delete($index)
    {
        $groups = $this->readFile();
        if (array_key_exists($index, $groups)) {
            array_splice($groups, $index, 1);
        }
        $this->saveDataToFile($groups);
    }
    public function edit($group, $index) {
        $listGroup = $this->readFile();

        $data = [
            'nameGroup' => $group->nameGroup
        ];

        $listGroup[$index] = $data;

        $this->saveDataToFile($listGroup);
    }
    public function findById($index)
    {
        $data = $this->readFile();
        if (array_key_exists($index, $data)) {
            $group= new Group(
                $data[$index]['nameGroup']
            );
            return $group;
        }
    }

}