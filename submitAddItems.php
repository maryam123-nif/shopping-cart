<?php
    include_once 'config.php';
?>
<?php
    $name= $_POST["field1"];
    $price=$_POST["field2"];
    $qty=$_POST["field3"];
    $des=$_POST["field4"];

    //sql query
    $sql = "INSERT INTO item(Item_id, Item_name, Quantity, Price, Description)VALUES('','$name','$qty','$price','$des')";

    if(mysqli_query($conn,$sql)){
        echo"<script>alert('Record inserted successfully!')</script>";
        header("Location:index.php");
    }
    else{
        echo"<script>alert('Insertion Error')</script>";
    }
    //close the connection
    mysqli_close($conn);
?>