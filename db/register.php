<?php
include 'connect.php';

//traveler/user register
// if ($link==true){
//     if(isset($_POST['register_user'])&&$_POST['register_user']==true){
//         $chk = "select * from users where email='".$_POST['email']."'";
//         $result=mysqli_query($link,$chk);
//         if ($result->num_rows==0){
//             $fileimage="";
//             if ($_FILES['image']['name']!=null){
//                 $file = $_FILES['image'];

//                 $ext = pathinfo($file['name']);

//                 $fileimage = 'upload_image/' . uniqid() . time() . '.' . $ext['extension'];

//                 move_uploaded_file($file['tmp_name'], $fileimage);
//             }
            
//             $sql = "INSERT INTO users (fname,lname,email,type,image,password) VALUES ('".$_POST['fname']."', '".$_POST['lname']."', '".$_POST['email']."', '".$_POST['type']."', '".$fileimage."', '".$_POST['password']."')";
//             if(mysqli_query($link,$sql)){

//                 $ins_id =$link->insert_id;

//                 header('location:../login.php?status=success');

//             }else{
//                 header('location:../register.php?status=Connection Error!');
//             }
//         }else{
//             header('location:../register.php?status=Email is Already Exists!');
//         }
//     }
// }
// //traveler/user register end

// //traveler/user register
// if ($link==true){
//     if(isset($_POST['register_user'])&&$_POST['register_user']==true){
//         $chk = "select * from users where email='".$_POST['email']."'";
//         $result=mysqli_query($link,$chk);
//         if ($result->num_rows==0){
//             $fileimage="";
//             if ($_FILES['image']['name']!=null){
//                 $file = $_FILES['image'];

//                 $ext = pathinfo($file['name']);

//                 $fileimage = 'upload_image/' . uniqid() . time() . '.' . $ext['extension'];

//                 move_uploaded_file($file['tmp_name'], $fileimage);
//             }
            
//             $sql = "INSERT INTO users (fname,lname,email,type,image,password)
//             VALUES ('".$_POST['fname']."', '".$_POST['lname']."', '".$_POST['email']."', '".$_POST['type']."', '".$fileimage."', '".$_POST['password']."')";
            
//             if(mysqli_query($link,$sql)){

//                 $ins_id =$link->insert_id;

//                 header('location:../forms/login-t.php?status=success');

//             }else{
//                 header('location:../forms/register-t.php?status=Connection Error!');
//             }
//         }else{
//             header('location:../forms/register-t.php?status=Email is Already Exists!');
//         }
//     }
// }
//traveler/user register end

// travel agent register
if ($link==true){
    if(isset($_POST['register_ta'])&&$_POST['register_ta']==true){ //change
        $chk = "select * from travel_agent where email='".$_POST['email']."'"; //change
        $result=mysqli_query($link,$chk);
        if ($result->num_rows==0){
            $fileimage="";
            if ($_FILES['image']['name']!=null){
                $file = $_FILES['image'];

                $ext = pathinfo($file['name']);

                $fileimage = 'upload_image/travel_agent/' . uniqid() . time() . '.' . $ext['extension']; //change

                move_uploaded_file($file['tmp_name'], $fileimage);
            }
            // change
            $sql = "INSERT INTO travel_agent (name,regno,tel,address,email,image,password) 
            VALUES ('".$_POST['name']."', '".$_POST['regno']."', '".$_POST['tel']."', '".$_POST['address']."', '".$_POST['email']."', '".$fileimage."', '".$_POST['password']."')"; //change
            
            if(mysqli_query($link,$sql)){

                $ins_id =$link->insert_ta_id; //change

                // header('location:../forms/login-ta.php?status=success'); //change
                echo "<script>alert('Registration Successful'); window.location.href='../forms/login-ta.php' ;</script>";//change

            }else{
                // header('location:../forms/register-ta.php?status=Connection Error!'); //change
                echo "<script>alert('Connection Error!'); window.location.href='../forms/register-ta.php' ;</script>";//change
            }
        }else{
            // header('location:../forms/register-ta.php?status=Email is Already Exists!'); //change
            echo "<script>alert('Email is Already Exists!'); window.location.href='../forms/register-ta.php' ;</script>";//change
        }
    }
}
// travel agent register end