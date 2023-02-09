<?php
include 'connect.php';

function all_data($link,$user_id){

$sql ="SELECT * From users WHERE id!=".$user_id." and type='Type 1' ORDER BY id DESC";

$result=mysqli_query($link,$sql);

    foreach ($result as $val) {

        echo "<br/><br/>
        <div id='border1'>
            <img src='db/".$val['image']."' style='width:120px;height:120px' align='left' HSPACE='60' VSPACE='2' />
    
            <b>
                <h3><b></b> ".$val['fname']." ".$val['lname']."</b>
            </h3>
            <ul>
    
                <li> Email : ".$val['email']."</li>
                <li> Lanuages : German</li>
                <li> Tel : 0777810317</li>
                <li> Registration No : N-0463</li>
            </ul>
            <center> <button class='button' onclick='displaymsg()'>licence</button> </center>
            <p id='hiddenMesseage' style='display:none'>
                <b>Mr.Kumara's Validity status of licence: Valid till 31st December 2022   </b>
            </p>
    
            </b><br/>
    
        </div>";
    }

}
