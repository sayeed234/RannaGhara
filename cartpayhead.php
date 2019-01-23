 <section>
            <div class="wrapper">
                <div class="row">
                  <div class="index">
                    <div class="col-1 col-m1 col-l1 header_top_height headercolor logo">
                        <img src="image/images.png">

                    </div>
                    <div class="col-3 col-m3 col-l3 header_top_height headercolor pname"> <li> <a href="index.php">RannaGhara</a></li></div>
                    <div class="col-6 col-m6 col-l6 header_top_height headercolor">
                        <div class="searchb">
                      <input type="text" name="sayeed" size="40px;">
                      <button><i class="fas fa-search"></i></button>
                     </div>
                    </div>
                    <div class="col-1 col-m1 col-l1 header_top_height headercolor"> 
                     <div class="menu2">
                        <a href="cart.php" class="badge1" data-badge= 
                         <?php 
                          global $con;
                          $pro_quantity="SELECT sum(quantity) as tol_quantity FROM cart";
                          $pro_quantity_result = mysqli_query($con, $pro_quantity);
                          while ($pro_quantity_row = mysqli_fetch_assoc($pro_quantity_result))
                          { 
                             $total_pro_quan =  $pro_quantity_row['tol_quantity'];

                          }
                          echo $total_pro_quan;
                            
                       ?>
                       ><i style="font-size:33px;color:#226853; margin-left: 10px; margin-top:20px;" class="fa">&#xf07a;</i></a>


                     </div> 
                    </div>
                    <div class="col-1 col-m1 col-l1 header_top_height headercolor">
                          <div class="sign">
                            <a href="twolog.php"><i class="fa fa-male" style="font-size:20px;"> Login</i></a>
                     </div>
                     </div>
                    
                </div></div>
            </div>
        </section>
        <br><br><br>
        <section>
            <div class="wrapper">
                <div class="row">
                    <div class="col-2 col-m2 col-l2 menu_height headercolor">
                     </div>
                    <div class="col-1 col-m1 col-l1 menu_height headercolor"> 
                     <div class="menu">
                        <a href="breakfast.php">Breakfast</a>

                     </div></div>
                    <div class="col-1 col-m1 col-l1 menu_height headercolor"> 
                        <div class="menu">
                        <a href="lunch.php">Lunch</a>

                     </div></div>
                    <div class="col-1 col-m1 col-l1 menu_height headercolor"> 
                        <div class="menu">
                        <a href="dinner.php">Dinner</a>

                     </div> </div>
                     <div class="col-1 col-m1 col-l1 menu_height headercolor"> 
                     <div class="menu">
                        <a href="pakage.php">Package</a>

                     </div></div>
                    <div class="col-1 col-m1 col-l1 menu_height headercolor"> 
                     <div class="menu">
                        <a href="shoph.php">Shop</a>

                    
                     
                 </div>
                </div>
                 <div class="col-5 col-m5 col-l5 menu_height headercolor"> 
                     </div>
            </div>
        </section>