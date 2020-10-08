<?php
session_start();
//$userid = filter_input(INPUT_POST, "userid", FILTER_SANITIZE_SPECIAL_CHARS);
if(!isset($_SESSION['user'])){
    $_SESSION["user"] = $_POST["userid"];
}
$ID=$_SESSION["user"];

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Main Page</title>
        <meta charset="UTF-8">
        <style>
            .images{
                width:25vw;
                height:52vh;
            }
            
            #bigDiv{
                display:grid;
                grid:
                'div1 div2 div3';
            }
            
            #div1{
                grid-area:div1;
            }
            
            #div2{
                grid-area:div2;
            }
            
            #div2{
                grid-area:div2;
            }
        </style>
    </head>
    <body>
        <div>E-shooping website</div>
        <div id='h1'></div>
        <div id="bigDiv">
            <div id="div1">
                <figure>
                    <image src="./images/cup.png" class="images">
                    <figcaption style="font-weight:bold">
                    This is the cup for tooth brushing</figcaption>
                    <a href="cupPhp.php" target="_self">Click here for details</a>
                    </figcaption>
                </figure>
            </div>
            
            <div id="div2">
                <figure>
                    <image src="./images/toothbrush.png" class="images">
                    <figcaption style="font-weight:bold">
                    This is the toothbrush</figcaption>
                    <a href="toothBrushPhp.php" target="_self">Click here for details</a>
                    </figcaption>
                </figure>
            </div>
            
            <div id="div3">
                <figure>
                    <image src="./images/toothpaste.png" class="images">
                    <figcaption style="font-weight:bold">
                    This is the toothpaste</figcaption>
                    <a href="toothPastePhp.php" target="_self">Click here for details</a>
                    </figcaption>
                </figure>
            </div>
        </div>
        
    <script>
        ID = "<?php echo $ID; ?>";
        id=document.getElementById('h1');
        id.innerHTML="Hi," +ID;
    </script>
    </body>
</html>

