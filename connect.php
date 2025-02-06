<?php
if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit'])){
    $conn= mysqli_connect('localhost', 'root', '', 'test_db') or die("connection failed: ".mysqli_connect_error());
    if(isset($_POST['customer_id']) && isset($_POST['payment_type_id']) && isset($_POST['card_application_id']) && isset($_POST['email'])){
        //FORM variables
        $cust_id = $_POST['customer_id'];
        $payment_id = $_POST['payment_type_id'];
        $card_id = $_POST['card_application_id'];
        $email_id = $_POST['email'];

        //insert into DB variables, from FORM (index.php) variables
        $stmt = $conn -> prepare("INSERT INTO dummypayment (customer_id, payment_type_id, card_application_id, email) VALUES (?, ?, ?, ?)");
        $stmt -> bind_param("iiis", $cust_id, $payment_id, $card_id, $email_id);

        if($stmt -> execute()){
            echo 'Entry Successful';
        }else{
            echo 'Error'. $stmt->error;
        }

        $stmt->close();
        $conn->close();
    }
}