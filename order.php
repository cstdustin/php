<?php include_once("header.php");?>

<form action="/functions.php?op=createOrder" method="post">

    <label for="coffee_name"> Order Profuct Name </label>
    <input type="hidden" id="coffee_id" name="coffee_id" value="<?php echo $_GET['coffee_id'];?>">

    <h2>
    <?php
    $coffeeQ = mysqli_query($dbConnection, "SELECT * FROM `coffee` WHERE `coffee_id`='".$_GET['coffee_id']."'");
    $coffee = mysqli_fetch_assoc($coffeeQ);
    echo $coffee['name'].'</br>';
    echo '<img src="/images/' .$coffee['image'] .'" />';
    ?>
    </h2>

    <p>Order Detail</P>
    <label for="quantity">Packing:</label>
    <select name="quantity" id="quantity">
	<option value=""selected>Choose a packing size</option>
	<option value="100">100g</option>
	<option value="200">200g</option>
	<option value="300">300g</option>
    <option value="400">400g</option>
    <option value="500">500g</option>
    </select>
    <br>

    <label for="roast">Roast Level:</label>
    <select name="roast" id="roast">
	<option value=""selected>Choose a Roast Level</option>
	<option value="unroasted">Unroasted</option>
	<option value="light">Light roasts</option>
	<option value="medium">Medium roasts</option>
    <option value="mediumdark">Medium-dark roasts</option>
    <option value="dark">Dark roasts</option>
    </select>
    <br>

    <label for="grinding">Grinding:</label>
    <select name="grinding" id="grinding">
	<option value=""selected>Choose a Grinding Level</option>
	<option value="coarse">Coarse</option>
	<option value="mediumcoarse">Medium Coarse</option>
	<option value="medium">Medium</option>
    <option value="fine">Fine</option>
    <option value="extrafine">Extra Fine</option>
    </select>
    <br><br>
    
    <p>Contact Detail</P>
    <label for="name">Name:</label>
    <input type="text" id="name" name="name">

    <label for="email">E-mail:</label>
    <input type="email" id="email" name="email" placeholder="sample@coffee.com"require>

    <label for="phonenumber">Phone Number:</label>
    <input type="text" id="phonenumber" name="phonenumber" placeholder="0000-0000"require><br/><br/>

    <p>Shipping Detail</P>   
    <label for="receivername">Name:</label>
    <input type="text" id="receivername" name="receivername" require>

    <label for="receiverphonenumber">Phone Number:</label>
    <input type="text" id="receiverphonenumber" name="receiverphonenumber"placeholder="0000-0000" require>

    <label for="address">Shipping Address:</label>
    <input type="text" id="address" name="address" require><br/><br/>

    <p>Payment Detail</P>

    <label for="cardnumber">Card Number:</label>
    <input type="text" id="cardnumber" name="cardnumber" placeholder="0000 0000 0000 0000" require>

    <label for="nameoncard">Name on card:</label>
    <input type="text" id="nameoncard" name="nameoncard" require><br/>

    <label for="cvv">CVV:</label>
    <input type="text" id="cvv" name="cvv" placeholder="000" require>

    <label for="expirydate">Expiry date:</label>
    <input type="date" id="expirydate" name="expirydate" require><br/>

    <input class="buyBtn" type="submit" value="Submit">
</form>

<?php include_once("footer.php");?>