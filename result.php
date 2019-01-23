                         
                               <?php
                               $con= mysqli_connect("localhost","root","","rannaghara");
                              if($_REQUEST["submit"]){
                              $name = $_POST['name'];
                              if(empty($name)){
                                $make = '<h4>You must type a word to search!</h4>';
                              }else{
                                $make = '<h4>No match found!</h4>';
                                $sele = "SELECT * FROM home WHERE title LIKE '%$name%'";
                                $result = mysqli_query($sele);
                                
                                if($mak = mysql_num_rows($result) > 0){
                                  while($row = mysql_fetch_assoc($result)){
                                  echo '<h4> Id: '.$row['post_id'];
                                  echo '<br> name: '.$row['title'];
                                  echo '</h4>';
                                }
                              }else{
                              echo'<h2> Search Result</h2>';
                              print ($make);
                              }
                              mysql_free_result($result);
                              mysql_close($conn);
                              }
                              }
                              ?>