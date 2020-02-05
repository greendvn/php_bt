<?php


class PostController
{
    protected $postDB;

    public function __construct()
    {
        $db = new DBConnection("mysql:host=localhost;dbname=blog_mvc","root","Dieu1988");
        $this->postDB = new PostDB($db->connect());
    }

    public function list()
    {
        $posts = $this->postDB->getAll();
        include_once "view/list.php";
    }

    public function add(){
        if($_SERVER["REQUEST_METHOD"] === "GET"){
            include_once "view/add.php";
        }else{
            $title = $_POST["title"];
            $teaser = $_POST["teaser"];
            $content = $_POST["content"];
            $post = new Post($title,$teaser,$content);
            $post->setCreateDay(date('Y-m-d H:i:s'));
            $this->postDB->createPost($post);
            $message = "Published";
            include_once "view/add.php";
        }

    }
    public function view(){
            $id = $_GET["id"];
            $post = $this->postDB->get($id);
            include_once "view/view.php";
    }
    public function edit(){
        if($_SERVER["REQUEST_METHOD"] === "GET"){
            $id = $_GET["id"];
            $post = $this->postDB->get($id);
            include_once "view/edit.php";
        }else{
            $id = $_POST["id"];
            $title = $_POST["title"];
            $teaser = $_POST["teaser"];
            $content = $_POST["content"];
            $post  = new Post($title,$teaser,$content);
            $post->setId($id);
            $this->postDB->update($id,$post);
            header("Location:index.php");

        }
    }
    public function delete(){
        $id = $_GET["id"];
        $this->postDB->delete($id);
        header("Location:index.php");
    }

}