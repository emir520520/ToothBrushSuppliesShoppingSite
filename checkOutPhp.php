<?php
session_start();

$ID=$_SESSION["user"];

?>

<p id='h1'></p>
<h1>Please fill out following information</h1>
<form action="finalPagePhp.php" method="POST">
    <table>
        <tr>
            <td>First Name:</td>
            <td><input type="text" name="FirstName"></td>
        </tr>
        <tr>
             <td>Last Name:</td>
             <td><input type="text" name="LastName"></td>
        </tr>
        <tr>
            <td>Phone number:</td>
            <td><input type="text" name="PhoneNumber"></td>
        </tr>
        <tr>
          <td>Address:</td>
           <td><input type="text" name="Address"></td>
        </tr>
        <tr>
            <td>Credit Card Number:</td>
            <td><input type="text" name="CreditCardNumber"></td>
        </tr>
    </table>
    <input type="submit" value="Pay Now">
</form>

<script>
    ID = "<?php echo $ID; ?>";
    id=document.getElementById('h1');
    id.innerHTML="Hi," +ID;ID = "<?php echo $ID; ?>";
</script>