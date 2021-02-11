<html>
    <head>
        <title>HTML FORM FOR ADDITION OF TWO NUMBERS</title>
    </head>
<body>
    <form method="POST" action="sum.php">
        <h1>ENTER THE NUMBERS.</h1>
        NUMBER 1.  <input type="number" name="n1" value='0' placeholder="Enter First Number" ><br>
        NUMBER 2.  <input type="number" name="n2" value='0' placeholder="Enter Second Number"><br>
        <input type="SUBMIT" name="submit" value="SUBMIT">
    </form>
</body>
</html>

<?php
if(isset($_POST['submit']))
{
        $num1 = $_POST['n1'];
        $num2 = $_POST['n2'];
        $sum = $num1 + $num2;
        /*if($num1==0 && $num2==0)
        {
            echo "Enter The Numbers";
        }
        else if($num1==0)
        {
            echo "Enter The First Number";
        }
        else if($num2==0)
        {
            echo "Enter The Second Number";
        }
        else{
            echo "Sum of " . $num1 . " + " . $num2 . " is " . $sum;
        }*/
        echo "Sum of " . $num1 . " + " . $num2 . " is " . $sum;
}
else{
    echo "Please press the Submit Button To Get The Sum Of Two Numbers...";
}
?>
