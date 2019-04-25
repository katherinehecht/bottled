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
    <form action="action.php" method="GET">
      <h1>PLACE YOUR ORDER</h1>
      <div class="container" style="background-color:white">
        <h2>1. the basics</h2>
        <label> NAME & EMAIL </label> <br>
        <input type="text" placeholder="Name" name="name" required>
        <input type="text" placeholder="Email address" name="mail" required> <br>
        <h2>2. customize your bottle</h2>
        <label> SIZE </label> <br>
        <label>
            small.
            <input type="radio" name="size" value="small" required>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
            medium.
            <input type="radio" name="size" value="medium">
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
            large.
            <input type="radio" name="size"  value="large">
        </label> <br>
        <label> COLOR </label> <br>
        <label>
            red.
            <input type="radio" name="color" value="red" required>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
            orange.
            <input type="radio" name="color" value="orange">
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
            yellow.
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
            <input type="radio" name="color"  value="yellow">
            green.
            <input type="radio" name="color" value="green">
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
            blue.
            <input type="radio" name="color" value="blue">
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
            purple.
            <input type="radio" name="color"  value="purple">
        </label> <br>
        <label> MONOGRAM </label>
        <input type="text" placeholder="Monogram" name="monogram">
        <h2>3. add your fillings</h2> <br>
        <label> SWEETS </label> <br>
          chocolate.
          <input type="radio" name="sweets" value="chocolate" required>
          &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
          lollipops.
          <input type="radio" name="sweets" value="lollipops">
          &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
          bubblegum.
          <input type="radio" name="sweets" value="bubblegum">
          &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
          none.
          <input type="radio" name="sweets"  value="none">
        </label> <br> <br>
        <label> CASH </label> <br>
          $10
          <input type="radio" name="cash" value="ten" required>
          &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
          $20
          <input type="radio" name="cash" value="twenty">
          &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
          $50
          <input type="radio" name="cash" value="fifty">
          &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
          none.
          <input type="radio" name="cash" value="none">
          &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        </label>
        <br><br>
        <label>MESSAGE</label><br>
        <input type="text" placeholder="Enter your message here..." name="message">
      <div class="container">
        <input type="submit" value="Place Order">
      </div>
    </form>
    <?php include("footer.php") ?>
  </body>
</html>
