<?php    
     include 'database.php';
/*
 * @author Ashish Viltoriya             08/12/2016
 * 
 */
  

    $name  = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    //Commit Changes Ashish
    
    
    
    $sql = "insert into register_user (name, phone, email,password) values ('$name', $phone, '$email','$password')";
    
    $result = mysqli_query($conn,$sql);
    
    
    $output["Result"] = "success"; 
    
    
    print_r(json_encode($output));
    
    mysqli_close($conn);
    
?>
