<?php
session_start();

$ID=$_SESSION["user"];

if (!isset($_SESSION['numberOfCup'])) {
    $_SESSION["numberOfCup"] =$_POST["numberOfCup"];
}
$numberOfCup = $_SESSION["numberOfCup"];
if (!isset($_SESSION['numberOfToothBrush'])) {
    $_SESSION["numberOfToothBrush"] =$_POST["numberOfToothBrush"];
}
$numberOfToothBrush = $_SESSION["numberOfToothBrush"];
if (!isset($_SESSION['numberOfToothPaste'])) {
    $_SESSION["numberOfToothPaste"] =$_POST["numberOfToothPaste"];
}
$numberOfToothPaste = $_SESSION["numberOfToothPaste"];
?>

<style>
    body{
        font-size:2.5em;
    }
</style>

<div id="div1">Your Shopping Cart here</div>
<p id='h1'></p>
<form action="checkOutPhp.php" method="POST">
    <table>
        <tr>
            <td>
                Name of item
            </td>
            <td>
                quantity of the item
            </td>
        </tr>
        <tr>
            <td>
                Cup
            </td>
            <td>
                <p id="p1" name="numberOfCup"></p>
            </td>
        </tr>
        <tr>
            <td>
                toothbrush
            </td>
            <td>
                <p id="p2" name="numberOfToothBrush"></p>
            </td>
        </tr>
        <tr>
            <td>
                toothpaste
            </td>
            <td>
                <p id="p3" name="numberOfToothPaste"></p>
            </td>
        </tr>
    </table>
    <p id="price"></p>
    <input type="submit" value="check out">
   <a href="mainPage.php" target="_self">Go to main page</a>
</form>
<script>
    numberOfCup = "<?php echo $numberOfCup; ?>";
    numberOfToothBrush = "<?php echo $numberOfToothBrush; ?>";
    numberOfToothPaste = "<?php echo $numberOfToothPaste; ?>";
    p1=document.getElementById('p1');
    p2=document.getElementById('p2');
    p3=document.getElementById('p3');
    p4=document.getElementById('price');
    PP=(numberOfCup*5+numberOfToothBrush*3+numberOfToothPaste*2);
    
    p4.innerHTML="The total price is "+PP;
    
    ID = "<?php echo $ID; ?>";
    id=document.getElementById('h1');
    id.innerHTML="Hi," +ID;ID = "<?php echo $ID; ?>";

    
    if(numberOfCup!=null){
        input1=document.createElement('input');
        input1.setAttribute('type', 'number');
        input1.placeholder=numberOfCup;
        p1.appendChild(input1);
    }
    
    if(numberOfToothBrush!=null){
        input2=document.createElement('input');
        input2.setAttribute('type', 'number');
        input2.placeholder=numberOfToothBrush;
        p2.appendChild(input2);
    }
    
    if(numberOfToothPaste!=null){
        input3=document.createElement('input');
        input3.setAttribute('type', 'number');
        input3.placeholder=numberOfToothPaste;
        p3.appendChild(input3);
    }
    
    
</script>


