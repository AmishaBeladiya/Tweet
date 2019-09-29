<?php
    $con = mysqli_connect('localhost','root','','auto-refresh_tweet');

    $sql = "SELECT * FROM tweet ORDER BY id DESC";
    $run = mysqli_query($con,$sql);

    if(mysqli_num_rows($run) > 0){
        while($record = mysqli_fetch_assoc($run)){
            echo '<p>'.$record['tweet'].'</p>';
        }
    }
?>