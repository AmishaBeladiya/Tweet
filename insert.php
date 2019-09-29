<?php
    $con = mysqli_connect('localhost','root','','auto-refresh_tweet');
    $tweet = $_POST['tweet_val'];
    
    $sql = "insert into tweet(tweet) value('$tweet')";
   
    $run = mysqli_query($con,$sql);
    if($run){
        echo "successfull";
    }else
    {
        echo "unsuccessfull";
    }
   
?>