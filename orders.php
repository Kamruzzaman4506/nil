<?php 
include_once 'config.php';
 if(isset($_POST['order']))
          {
			$pname=$_POST["pname"];
			$pmodel=$_POST["pmodel"];
			$pquantity=$_POST["pquantity"];
			$pcolor=$_POST["pcolor"];
			$plink=$_POST["plink"];
              

			$sql = "INSERT INTO ali (pname,pmodel,pquantity,pcolor,plink)
			VALUES ('$pname','$pmodel','$pquantity','$pcolor','$plink')";

              
                    if ($result = mysqli_query($con,$sql)) {

						  header("Location: payment.html");
                        } else{
                          echo "not insert";
                        }
}

?>