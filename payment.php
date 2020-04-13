<?php 
include_once 'config.php';
 if(isset($_POST['confirm']))
          {
              $name=$_POST["name"];
              $number=$_POST["number"];
              $code=$_POST["code"];
              

              $sql = "INSERT INTO payment (name,number,code)
              VALUES ('$name','$number', '$code')";

              
                    if ($result = mysqli_query($con,$sql)) {
                      
                          echo "
                          <script>alert ('You are successfully confirm your order. We will contact with you shortly');
                          window.location.href='home.html';
                          </script>";
                        } else{
                          echo "not insert";
                        }
}

?>