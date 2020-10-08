<?php
session_start();

$ID=$_SESSION["user"];
?>

<style>
    .h1{
        font-size:2.5em;
    }
    
    .image{
        width:66vw;
        height:66vh;
    }
    
    .h2{
        font-size:2em;
    }
</style>

<p>This is a <strong>very good</strong> cup for tooth brushing</p>
<p id='h1'></p>
<form action="shoppingCart.php" method="POST">
    <img src="./images/cup.png" id="image">
    <p class="h2">Price: 5 </p>
    <p class="h2">Choose quantity of this cup</p>
    <input type="number" name="numberOfCup" min="0" step="1">
    <input type="submit">
</form>
<div>
    <a href="mainPage.php">Go to main page</a>
</div>

<script>
        ID = "<?php echo $ID; ?>";
        id=document.getElementById('h1');
        id.innerHTML="Hi," +ID;
    </script>

