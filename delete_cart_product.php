
<?php
    $con=mysqli_connect("localhost","root","","rannaghara");


    $cart_delete = $_GET['cart_delete'];
    //echo "cart product id  : ".$cart_delete."<br>";
    header("Location: /rannaghara/cart.php");


    if ($con) {
        $sql = "DELETE FROM cart WHERE product_id = '$cart_delete'";
        
       if (mysqli_query($con, $sql)) {
          echo "Record deleted successfully";
       } else {
          echo "Error deleting record: " . mysqli_error($con);
       }
        $con->close();
    }

?>