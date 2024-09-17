<?php
session_start();
include_once "dbConnect.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order</title>
    <link rel="stylesheet" href="/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
    
<nav>
<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/images/s1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/images/s2.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
</div>

<?php
$aboutQ = mysqli_query($dbConnection, "SELECT * FROM `about`");
$about = mysqli_fetch_assoc($aboutQ);
echo $about['text'];
?>

<br>

<ul class="clientMenu">
    <li><a href="/">Home</a></li>
    <li><a href="/about.php">About Us</a></a></li>
</ul>
<ul class="staffMenu">
    <?php
    if ($_SESSION)
    {
        echo '
            <li><a href="/allOrders.php">All Order</a></li>
            <li><a href="/functions.php?op=logout">Logout</a></li>';
    }
    else
    {   echo '<li><a href="/login.php">Staff Login</a></li>';
    }
    ?>
</ul>
</nav>