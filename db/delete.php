<?php
include 'connect.php';

// if ($link==true){
//     if(isset($_POST['delete'])&&$_POST['delete']==true){
        
//         $sql = "DELETE FROM users Where id='".$_POST['id']."'";
//         if(mysqli_query($link,$sql)){

//             header('location:../login.php?status=Delete Success');

//         }else{
//             header('location:../edit.php?status=Connection Error!');
//         }
//     }
// }

//travel agent delete
if ($link==true){
    if(isset($_POST['delete'])&&$_POST['delete']==true){
        
        $sql = "DELETE FROM travel_agent Where ta_id='".$_POST['ta_id']."'";
        if(mysqli_query($link,$sql)){

            // header('location:../login-ta.php?status=Delete Success');
            echo "<script>alert('Delete Success'); window.location.href='../forms/login-ta.php' ;</script>";

        }else{
            // header('location:../edit-ta.php?status=Connection Error!');
            echo "<script>alert('Connection Error!'); window.location.href='../travel_agent_profile.php' ;</script>";
        }
    }
}
//travel agent delete end
