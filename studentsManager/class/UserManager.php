<?php


namespace Controller;
include_once "Manager.php";

class UserManager extends Manager
{

    public function add($user)
    {
        $listUser = $this->readFile();
        $data = [
            'username' => $user->username,
            'password' => $user->password,
            'email' => $user->email
        ];
        array_push($listUser, $data);
        $this->saveDataToFile($listUser);
    }


    public function checkLogin($username, $password)
    {
        $listUser = $this->readFile();
        foreach ($listUser as $user) {
            if ($user['username'] == $username && $user['password'] == $password) {
                header("location: ../index.php");
            }
        }
    }

}