<?php


use Model\DBConnection;
use Model\Product;
use Model\ProductDB;

class ProductController
{
    protected $productDB;

    public function __construct()
    {
        $db = new DBConnection("mysql:host=localhost;dbname=manage_product_mvc", "root", "Dieu1988");
        $this->productDB = new ProductDB($db->connect());
    }

    public function list()
    {
        $products = $this->productDB->getAll();
        include_once "view/list.php";
    }

    public function add()
    {
        if ($_SERVER["REQUEST_METHOD"] === "GET") {
            include_once "view/add.php";
        } else {
            $name = $_POST["name"];
            $price = $_POST["price"];
            $description = $_POST["description"];
            $manufacturer = $_POST["manufacturer"];
            $product = new Product($name, $price, $description, $manufacturer);
            $this->productDB->createProduct($product);
            $message = "Product Created";
            include_once "view/add.php";
        }

    }

    public function edit()
    {
        if ($_SERVER["REQUEST_METHOD"] === "GET") {
            $id = $_GET["id"];
            $product = $this->productDB->get($id);
            include_once "view/edit.php";
        } else {
            $id = $_POST["id"];
            $name = $_POST["name"];
            $price = $_POST["price"];
            $description = $_POST["description"];
            $manufacturer = $_POST["manufacturer"];
            $product = new Product($name, $price, $description, $manufacturer);
            $this->productDB->update($id, $product);
            header("Location:index.php");

        }
    }

    public function delete()
    {
        $id = $_GET["id"];
        $this->productDB->delete($id);
        header("Location:index.php");
    }

    public function search()
    {
//        $search = $_REQUEST["search"];
        $search = isset($_REQUEST["search"]) ? $_REQUEST["page"] : NULL;

        $products = $this->productDB->seach($search);
        include_once "view/list.php";
    }


}