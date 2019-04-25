<!--Katherine Hecht
    Order Page-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" type="image/x-icon" href="images/icon.png" />
    <title>Home</title>
  </head>
  <body>
    <?php include("header.php") ?>
      <?php
	$name = $_GET['name'];
	$email = $_GET['email'];
	$size = $_GET['size'];
	$color = $_GET['color'];
	$monogram = $_GET['monogram'];
	$sweets = $_GET['sweets'];
        $cash = $_GET['cash'];
      $note = $_GET['message'];
      echo "<h1> Your order has been placed!</h1><br>";
      echo "<p><span>Thank you for your order, " . $name ."!";
      echo "<br> Here is a summary of your purchase: <br>";
      echo "<label> BOTTLE </label> <br> size: " . $size . "<br>color: " . $color . "<br>monogram: " .$monogram;
      echo "<br> <label> FILLINGS </label> <br> sweets: " . $sweets . "<br>cash: $" . $cash . "<br>message: " . $message;
     	echo "<br> Reach out for questions or concerns. Thank you for shopping with bottled!! </span> </p>";
	?>
    <?php include("footer.php") ?>
  </body>
</html>
