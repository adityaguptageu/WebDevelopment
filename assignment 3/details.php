<?php
include('config.php');
?>
<?php
     $sql="SELECT * FROM `users`";
     $res=mysqli_query($comm,$sql);
     if($res->num_rows > 0){
         ?>

        <table border='1px'>
        <thead>
            <tr style="color: purple">
                <th>I'd</th>
                <th>UserName</th>
                <th>E-mail</th>
                <th>Gender</th>
                <th>City</th>

            </tr>
        </thead>
        <tbody>
            <?php
            //while($row=$res->fetch_array()) {
            while($row=$res->fetch_assoc()) { ?>
            <tr>
                <td> <?php echo $row["I'd"] ?> </td>
                <td> <?php echo $row['Username'] ?> </td>
                <td> <?php echo $row['Email'] ?> </td>
                <td> <?php echo $row['Gender'] ?> </td>
                <td> <?php echo $row['City'] ?> </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>

<?php
    }
?>

<html>
    <head>
        <title>User details</title>
    </head>
</html>