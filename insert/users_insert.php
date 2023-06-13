<?php
include("../src/conection.php");
if (isset($_POST['insert_user'])) {
    $fname = $_POST['Name'];
    $phone=$_POST['Phone'];
    $username=$_POST['UserName'];
    $password=$_POST['password'];
    $role= $_POST['Role'];

 


    
    $user_insert = mysqli_query($conection,"INSERT INTO `users`( `Name`, `Phone`, `UserName`, `Password`, `Role`) VALUES('$fname','$phone','$username','$password','$role')");

    if($user_insert){
        echo" <script>alert('insert successfully')</script>";
      echo "<script>window.location.href='../Users.php'</script>";


} else {
   
            echo" <script>alert(' Already exists this username!')</script>";
           echo "<script>window.location.href='../Users.php'</script>";
        //    echo $path;
        //    echo("<br>");
        //    echo $Name;
        //    echo("<br>");
        //    echo $Phone;
        //    echo("<br>");
        //    echo $Address;
        //    echo("<br>");
        //    echo $Gender;
        //    echo("<br>");
        //    echo $dep_name;
        //    echo("<br>");
        //    echo $sch;
        }
}
    

?>