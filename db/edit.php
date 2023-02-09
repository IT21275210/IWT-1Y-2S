<?php
include 'connect.php';

// if ($link==true){
//     if(isset($_POST['register_user'])&&$_POST['register_user']==true){
//         $chk = "select * from users where email='".$row["email"]."'";
//         $result=mysqli_query($link,$chk);
//         $row = $result->fetch_assoc();
//         echo $row["email"];
//         if ($result->num_rows==0||($row["email"]==$_POST['email'])){
//             $fileimage="";
//             if ($_FILES['image']['name']!=null){
//                 $file = $_FILES['image'];

//                 $ext = pathinfo($file['name']);

//                 $fileimage = 'upload_image/' . uniqid() . time() . '.' . $ext['extension'];

//                 move_uploaded_file($file['tmp_name'], $fileimage);
//             }

//             if($fileimage==""){
//                 $sql = "UPDATE users SET fname= '".$_POST['fname']."',lname='".$_POST['lname']."',email='".$_POST['email']."',type='".$_POST['type']."',password='".$_POST['password']."' Where id='".$_POST['id']."'";
//             }else{
//                 $sql = "UPDATE users SET fname= '".$_POST['fname']."',lname='".$_POST['lname']."',email='".$_POST['email']."',type='".$_POST['type']."',password='".$_POST['password']."',image='".$fileimage."' Where id='".$_POST['id']."'";
//             }
            
//             if(mysqli_query($link,$sql)){

//                 $ins_id =$link->insert_id;

//                 header('location:../edit.php?status=success');

//             }else{
//                 header('location:../edit.php?status=Connection Error!');
//             }
//         }else{
//             header('location:../edit.php?status=Email is Already Exists!');
//         }
//     }
// }

//travel agent update
if ($link==true){
    if(isset($_POST['register_ta'])&&$_POST['register_ta']==true){ //change

        $chk = "select * from travel_agent where email='".$_POST["email"]."'"; //change
        $result=mysqli_query($link,$chk);
        $row = $result->fetch_assoc();
        echo $row["email"];
        if ($result->num_rows==0||($row["email"]==$_POST['email'])){

            //GET DB Data //change
            $id = $_POST['ta_id'];
            $name = $_POST['name'];
            $regno = $_POST['regno'];
            $tel = $_POST['tel'];
            $address = $_POST['address'];
            $email = $_POST['email'];
            // $image = $_POST['image'];
            $password = $_POST['password'];
        
            
            //image update
            $fileimage="";
            if ($_FILES['image']['name']!=null){
                $file = $_FILES['image'];

                $ext = pathinfo($file['name']);

                $fileimage = 'upload_image/travel_agent/' . uniqid() . time() . '.' . $ext['extension'];

                move_uploaded_file($file['tmp_name'], $fileimage);
            }
            //image update end
            
            //update data
            if($fileimage==""){
                $sql = "UPDATE travel_agent SET name= '$name',regno='$regno',email='$email',tel='$tel', address='$address', password='$password' Where id='$id'";
            }else{
                $sql = "UPDATE travel_agent SET name= '$name',regno='$regno',email='$email',tel='$tel', address='$address', password='$password',image='".$fileimage."' Where ta_id ='".$_POST['ta_id']."'";
            }
            //update data end

            //directing updated data to DB
            if(mysqli_query($link,$sql)){

                $ins_id =$link->insert_ta_id;//change

                // header('location:../edit.php?status=success');
                echo "<script>alert('Update Successful!'); window.location.href='../travel_agent_profile.php' ;</script>"; //change

            }else{
                // header('location:../edit.php?status=Connection Error!');
                echo "<script>alert('Connection Error!'); window.location.href='../edit.php' ;</script>";
            }
        }else{
            header('location:../edit.php?status=Email is Already Exists!');
            echo "<script>alert('Email is Already Exists!'); window.location.href='../edit.php' ;</script>";
        }
    }
}
//travel agent update end