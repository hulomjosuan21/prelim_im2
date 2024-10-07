<?php
$newConnection = new Connection();

class Connection
{
    private $server = "mysql:host=localhost;dbname=prelim";
    private $username = "root";
    private $password = "";
    private $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ];
    protected $conn;

    public function openConnection(): PDO
    {
        try {
            $this->conn = new PDO($this->server, $this->username, $this->password, $this->options);
            return $this->conn;
        } catch (PDOException $e) {
            echo "There is a problem is the connection: " . $e->getMessage();
        }
    }

    public function addProduct()
    {
        if (isset($_POST['add_product'])) {

            $product_name = $_POST['product_name'];
            $category = $_POST['category'];
            $price = $_POST['price'];
            $quantity = $_POST['quantity'];
            $created_at = $_POST['created_at'];isset($_POST['created_at']) && !empty($_POST['created_at']) ? $_POST['created_at'] : date('Y-m-d H:i:s');


            try {
                $connection = $this->openConnection();
                $query = "INSERT INTO products_table (`product_name`, `category`, `price`, `quantity`, `created_at`) VALUES (?, ?, ?, ?, ?)";
                $stmt = $connection->prepare($query);
                $stmt->execute([$product_name, $category, $price, $quantity, $created_at]);

                session_start();
                $_SESSION["create"] = "Product added successfully";

                header("Location: index.php");
                exit();
            } catch (PDOException $e) {
                session_start();
                $_SESSION["error"] = "Error: " . $e->getMessage();

                header("Location: index.php");
                exit();
            }
        }
    }

    public function editStudent() {
        if (isset($_POST['edit_product'])) {

            $product_id = $_POST['product_id'];
    
            $product_name = $_POST['product_name'];
            $category = $_POST['category'];
            $price = $_POST['price'];
            $quantity = $_POST['quantity'];
            $created_at = $_POST['created_at'];
    
            try {
                $connection = $this->openConnection();
                $query = "UPDATE products_table SET product_name = ?, category = ?, price = ?, quantity = ?, created_at = ? WHERE product_id = ?";
                $stmt = $connection->prepare($query);
                $stmt->execute([$product_name, $category, $price, $quantity, $created_at, $product_id]);
    
                session_start();
                $_SESSION["out"] = "Product edit successfully";
    
                header("Location: index.php");
                exit();
            } catch (PDOException $e) {
                session_start();
                $_SESSION["error"] = "Error: " . $e->getMessage();
    
                header("Location: index.php");
                exit();
            }
        }
    }    

    public function deleteProduct(){
        if(isset($_POST['delete_product'])){
            $product_id = $_POST['delete_product'];

            try {
                $connection = $this->openConnection();
                $query = "DELETE FROM products_table WHERE product_id = :product_id";
                $stmt = $connection->prepare($query);
                $stmt->execute(["product_id" => $product_id]);

                session_start();
                $_SESSION["out"] = "Product deleted successfully";
                
                header("Location: index.php");
                exit();
            } catch (PDOException $e) {
                session_start();
                $_SESSION["error"] = "Error: " . $e->getMessage();
        
                header("Location: index.php");
                exit();
            }
        }
    }
}
