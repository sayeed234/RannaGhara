
<?php
    $con=mysqli_connect("localhost","root","","rannaghara");


    $cart_product_id = $_GET['cart_brk_bi'];
    header("Location: /rannaghara/breakfast.php");

    if ($con) {
        $check_pro_query = "SELECT * FROM cart WHERE product_id LIKE '%$cart_product_id%'";
        $result_query = mysqli_query($con, $check_pro_query);
        $count = mysqli_num_rows($result_query);
        
        if($count == 0){
            
            $check_cart_product_id = "SELECT * FROM breakfastbeefi WHERE post_idbr = '$cart_product_id'";
            $result = $con->query($check_cart_product_id);

            if ($result->num_rows > 0) {

                while($row = $result->fetch_assoc()) {
                   
                    $post_id =$row['post_idbr'];
                    $title =$row['titlebr'];
                    $taka =$row['tkbr'];

                    //echo $post_id. "   ".$title."   ". $taka ;
                }
                $sql = "INSERT INTO cart (product_id, title, product_price, quantity, amount) VALUES ('$post_id', '$title', '$taka', '1', '$taka')";

                if ($con->query($sql) === TRUE) {
                    echo "New record created successfully";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }

            } else {
                echo "0 results";
            }

        }
        else{
            $get_page="SELECT * from cart WHERE product_id='$cart_product_id'"; // GROUP BY title
            $run_page=mysqli_query($con, $get_page);
            while ($row_page=mysqli_fetch_array($run_page)) {
                $quantity = $row_page['quantity'];
                $pro_tk =  $row_page['product_price'];
            }

            $quan = $quantity + 1;
            $amnt = $quan * $pro_tk;
            $update_sql = "UPDATE cart SET quantity='$quan', amount='$amnt' WHERE product_id='$cart_product_id'";
            if ($con->query($update_sql) === TRUE) {
                echo "Record updated successfully";
            } else {
                echo "Error updating record: " . $conn->error;
            }
        }

        
        $con->close();
    }

?>