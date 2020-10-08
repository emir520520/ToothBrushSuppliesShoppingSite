<?php

session_start();
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
if (!isset($_SESSION["FirstName"])) {
$_SESSION["FirstName"]=$_POST["FirstName"];
}
$FirstName=$_SESSION["FirstName"];
if (!isset($_SESSION["LastName"])) {
$_SESSION["LastName"]=$_POST["LastName"];
}
$LastName=$_SESSION["LastName"];
if (!isset($_SESSION["PhoneNumber"])) {
$_SESSION["PhoneNumber"]=$_POST["PhoneNumber"];
}
$PhoneNumber=$_SESSION["PhoneNumber"];
if (!isset($_SESSION["Address"])) {
$_SESSION["Address"]=$_POST["Address"];
}
$Address=$_SESSION["Address"];
if (!isset($_SESSION["CreditCardNumber"])) {
$_SESSION["CreditCardNumber"]=$_POST["CreditCardNumber"];
}
$CreditCardNumber=$_SESSION["CreditCardNumber"];

session_destroy();
?>

<h1>This is your final information of this shopping</h1>
<p>Item information</p>
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
                <p id="p1"></p>
            </td>
        </tr>
        <tr>
            <td>
                toothbrush
            </td>
            <td>
                <p id="p2"></p>
            </td>
        </tr>
        <tr>
            <td>
                toothpaste
            </td>
            <td>
                <p id="p3"></p>
            </td>
        </tr>
    </table>

<p>Payment Information</p>

<table>
    <tr>
        <td>First Name:</td>
        <td id="FirstName"></td>
    </tr>
    <tr>
        <td>Last Name:</td>
        <td id="LastName"></td>
    </tr>
    <tr>
        <td>Phone Number:</td>
        <td id="PhoneNumber"></td>
    </tr>
    <tr>
        <td>Address:</td>
        <td id="Address"></td>
    </tr>
    <tr>
        <td>Credit Card Number:</td>
        <td id="CreditCardNumber"></td>
    </tr>
</table>

<p id="price"></p>

<script>
    numberOfCup = "<?php echo $numberOfCup; ?>";
    numberOfToothBrush = "<?php echo $numberOfToothBrush; ?>";
    numberOfToothPaste = "<?php echo $numberOfToothPaste; ?>";
    aFirstName = "<?php echo $FirstName; ?>";
    aLastName = "<?php echo $LastName; ?>";
    aPhoneNumber = "<?php echo $PhoneNumber; ?>";
    aAddress = "<?php echo $Address; ?>";
    aCreditCardNumber = "<?php echo $CreditCardNumber; ?>";
    p1=document.getElementById('p1');
    p2=document.getElementById('p2');
    p3=document.getElementById('p3');
    p4=document.getElementById('price');
    FirstName=document.getElementById('FirstName');
    LastName=document.getElementById('LastName');
    PhoneNumber=document.getElementById('PhoneNumber');
    Address=document.getElementById('Address');
    CreditCardNumber=document.getElementById('CreditCardNumber');
    PP=(numberOfCup*5+numberOfToothBrush*3+numberOfToothPaste*2);
    
    p4.innerHTML="The total price is "+PP;
  
    if(numberOfCup!=null){
        input1=document.createElement('p');
        a=numberOfCup;
        input1.innerHTML=a;
        p1.appendChild(input1);
    }
    
    if(numberOfToothBrush!=null){
        input2=document.createElement('p');
        b=numberOfToothBrush;
        input2.innerHTML=b;
        p2.appendChild(input2);
    }
    
    if(numberOfToothPaste!=null){
        input3=document.createElement('p');
        c=numberOfToothPaste;
        input3.innerHTML=c;
        p2.appendChild(input3);
    }
    
    FirstName.innerHTML=aFirstName;
    LastName.innerHTML=aLastName;
    PhoneNumber.innerHTML=aPhoneNumber;
    Address.innerHTML=aAddress;
    CreditCardNumber.innerHTML=aCreditCardNumber;
    
    
</script>