<?php


class PostDB
{
    protected $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }
    public function createPost($post){
        $sql = "INSERT INTO blogs(title, teaser, content, createDay) VALUES (?,?,?,?)";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(1,$post->getTitle());
        $stmt->bindParam(2,$post->getTeaser());
        $stmt->bindParam(3,$post->getContent());
        $stmt->bindParam(4,$post->getCreateDay());
        $stmt->execute();
    }

    public function getAll(){
        $sql = "SELECT * FROM blogs ORDER BY createDay DESC ";
        $stmt = $this->connection->query($sql);
        $result = $stmt->fetchAll();
        $arr = [];
        foreach ($result as $item){
            $post = new Post($item["title"],$item["teaser"],$item["content"]);
            $post->setId($item["id"]);
            $post->setCreateDay($item["createDay"]);
            array_push($arr,$post);
        }
        return $arr;
    }
    public function get($id){
        $sql = "SELECT * FROM blogs WHERE id = $id";
        $stmt = $this->connection->query($sql);
        $result = $stmt->fetch();
        $post = new Post($result["title"],$result["teaser"],$result["content"]);
        $post->setId($result["id"]);
        $post->setCreateDay($result["createDay"]);
        return $post;
    }

    public function delete($id){
        $sql = "DELETE FROM blogs WHERE id = ?";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(1,$id);
        $stmt->execute();
    }

    public function update($id,$post){
        $sql = "UPDATE blogs SET title = ?, teaser = ?, content = ?, createDay = ? WHERE id = ?";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(1,$post->getTitle());
        $stmt->bindParam(2,$post->getTeaser());
        $stmt->bindParam(3,$post->getContent());
        $stmt->bindParam(4,$post->getCreateDay());
        $stmt->bindParam(5,$id);
        $stmt->execute();

    }


}