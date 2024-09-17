<?php
include 'dbConnect.php';

$op = "";
if(isset($_GET['op'])) $op = $_GET['op'];

if($op =='createOrder')
{
    createOrder();
}
if($op =='checkLogin')
{
    checkLogin($_POST['email'],$_POST['password']);
}
if($op =='logout')
{
    logout();
}
if($op =='updateAbout')
{
    updateAbout();
}

function isStaff()
{
    return isset($_SESSION['email']);
}

function logout()
{
    session_start();
    session_destroy();
    header("Location: /");
}

function checkLogin($email, $password)
{
    global $dbConnection;
    $staffQ = mysqli_query($dbConnection, "SELECT * FROM `staff` WHERE `email`='".$email."'");
    $staff = mysqli_fetch_assoc($staffQ);

    if($email == $staff['email'] && password_verify($password,$staff['password']))
    {
        session_start();
        $_SESSION['email'] = $email;

        header("Location: /allOrders.php");
    }
    else
    {
        header("Location: /login.php");
    }
}

function createOrder()
{
    global $dbConnection;
    $sql = "INSERT INTO `order` (
        `client_name`, 
        `client_email`,
        `client_phone`,
        `receiver_name`,
        `receiver_phone`,
        `address`,
        `card_number`,
        `name_on_card`,
        `cvv`,
        `expiry_date`,
        `quantity`, 
        `order_time`, 
        `grinding`,
        `roast`,
        `order_id`
        ) VALUES (
        '{$_POST['name']}', 
        '{$_POST['email']}',
        {$_POST['phonenumber']},
        '{$_POST['receivername']}',
        {$_POST['receiverphonenumber']},
        '{$_POST['address']}',
        '{$_POST['cardnumber']}',
        '{$_POST['nameoncard']}',
        {$_POST['cvv']},
        '{$_POST['expirydate']}',
        {$_POST['quantity']}, 
        '".date('Y-m-d H:i:s')."',
        '{$_POST['grinding']}',
        '{$_POST['roast']}',
        {$_POST['coffee_id']})";

        if(mysqli_query($dbConnection, $sql))
        {
            header("Location: /orderComplete.php");
        }
        else
        {
            header("Location: /orderFail.php");
        }
}

function updateAbout()
{
    global $dbConnection;
    
    $update = $_POST['update'];

    $sql = mysqli_query($dbConnection, "UPDATE about SET text='$update'");

    header("Location: /about.php");
}
?>