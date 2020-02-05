<?php


namespace Model;


class ProductDB
{
    protected $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function createProduct($product){
        $sql = "INSERT INTO products(name, price, description, manufacturer) VALUES (?,?,?,?)";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(1,$product->getName());
        $stmt->bindParam(2,$product->getPrice());
        $stmt->bindParam(3,$product->getDescription());
        $stmt->bindParam(4,$product->getManufacturer());
        $stmt->execute();
    }

    public function getAll(){
        $sql = "SELECT * FROM products";
        $stmt = $this->connection->query($sql);
        $result = $stmt->fetchAll();
        $arr = [];
        foreach ($result as $item){
            $product = new Product($item["name"],$item["price"],$item["description"],$item["manufacturer"]);
            $product->setId($item["id"]);
            array_push($arr,$product);
        }
        return $arr;
    }
    public function get($id){
        $sql = "SELECT * FROM products WHERE id = $id";
        $stmt = $this->connection->query($sql);
        $result = $stmt->fetch();
        $product = new Product($result["name"],$result["price"],$result["description"],$result["manufacturer"]);
        $product->setId($result["id"]);
        return $product;
    }

    public function delete($id){
        $sql = "DELETE FROM products WHERE id = ?";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(1,$id);
        $stmt->execute();
    }

    public function update($id,$product){
        $sql = "UPDATE products SET name = ?, price = ?, description = ?, manufacturer = ? WHERE id = ?";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(1,$product->getName());
        $stmt->bindParam(2,$product->getPrice());
        $stmt->bindParam(3,$product->getDescription());
        $stmt->bindParam(4,$product->getManufacturer());
        $stmt->bindParam(5,$id);
        $stmt->execute();

    }
    public function seach($name){
        $sql = "SELECT * FROM products WHERE name LIKE '%$name%'";
        $stmt = $this->connection->query($sql);
        $result = $stmt->fetchAll();
        $arr = [];
        foreach ($result as $item){
            $product = new Product($item["name"],$item["price"],$item["description"],$item["manufacturer"]);
            $product->setId($item["id"]);
            array_push($arr,$product);
        }
        return $arr;

    }
}