<?php
require_once('database.php');
if (isset($_POST['signup'])){
    try{
        // Parameters
        $username = $_POST['username'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $password = $_POST['password'];

        // SQL Query
        $query = "INSERT INTO users SET username=?, email=?, mobile=?, password=?";

        $stmt = $conn->prepare($query);

        $stmt->bindValue(1, $username);
        $stmt->bindValue(2, $email);
        $stmt->bindValue(3, $mobile);
        $stmt->bindValue(4, $password);

        $stmt->execute();

        header('Location: ./login_result.php?account_created=true');

    } catch(PDOException $e){
        echo "Your Error Massage Is : " . $e->getMessage();
    }
}
?>