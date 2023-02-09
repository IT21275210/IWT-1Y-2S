<?php
include 'connect.php';

//traveler/user login
// if ($link==true){
//     if(isset($_POST['login_user'])&&$_POST['login_user']==true){
//         $chk = "select * from users where email='".$_POST['email']."'";
//         $result=mysqli_query($link,$chk);
//         if ($result->num_rows==1){
//             $pass="";
//             $email="";
//             $userType="";
//             foreach ($result as $data){
//                 $pass=$data['password'];
//                 $id=$data['id'];
//                 $userType=$data['type'];
//                 $email=$data['email'];
//             }
//             if ($pass==$_POST['password']){

//                 session_start();

//                 $_SESSION['user_id']=$id;
//                 $_SESSION['type']=$userType;
//                 $_SESSION['email']=$email;
//                 if($userType=="Type 1"){
//                     header('location:../welcome.php?status=success');
//                 }else if($userType=="Type 2"){
//                     header('location:../welcome.php?status=success');
//                 }
//             }else{
//                 header('location:../login.php?status=Invalid Password!');
//             }
//         }else{
//             header('location:../login.php?status=No records!');
//         }
//     }
// }
//traveler/ user login end

//travel agent login
if ($link==true){
    if(isset($_POST['login_ta'])&&$_POST['login_ta']==true){ //change
        $chk = "select * from travel_agent where email='".$_POST['email']."'"; //change
        $result=mysqli_query($link,$chk);
        if ($result->num_rows==1){
            $pass="";
            $email="";
            foreach ($result as $data){
                $pass=$data['password'];
                $id=$data['ta_id']; //change
                $email=$data['email'];
            }
            if ($pass==$_POST['password']){

                session_start();

                $_SESSION['ta_id']=$id;
                $_SESSION['email']=$email;
                if($email==$data['email']){
                    echo "<script>alert('You are logged In!'); window.location.href='../travel_agent_profile.php' ;</script>";
                }else{
                echo "<script>alert('Invalid Email and Password!'); window.location.href='../forms/login-ta.php' ;</script>";
                }

            }else{
                echo "<script>alert('Invalid Password!'); window.location.href='../forms/login-ta.php' ;</script>";
            }
        }else{
            echo "<script>alert('No records!'); window.location.href='../forms/login-ta.php' ;</script>";
        }
    }    
}
//travel agent login end
