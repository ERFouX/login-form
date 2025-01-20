<?php
require_once('loader.php');
if (isset($_POST['signin'])){
    try {
        // Parameters
        $key = $_POST['key'];
        $password = $_POST['password'];

        // SQL Query
        $query = "SELECT * FROM `users` WHERE (username = :key OR mobile = :key OR email = :key) AND (password = :password)";

        $stmt = $conn->prepare($query);

        $stmt->bindValue(":key", $key);
        $stmt->bindValue(":password", $password);

        $stmt->execute();

        $hasUser = $stmt->rowCount();

        if ($hasUser){
            header ("Location: ./login_result.php?loginned=true");
        }else {
            header("Location: ./login_result.php?usernotfound=true");
        }

    } catch (PDOException $e) {
        echo "Your Error Message Is: " . $e->getMessage();
    }
}
?>
