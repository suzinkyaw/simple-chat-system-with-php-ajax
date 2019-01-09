<?php
include 'db.php';
?>

<html>
    <head>
        <title>Chat Demo</title>
        <link rel="stylesheet" href="style.css" media="all">
        <script>
            function ajax(){
                var req = new XMLHttpRequest();
                req.onreadystatechange = function(){
                    if(req.readyState == 4 && req.status ==200){
                        document.getElementById('chat_box').innerHTML=req.responseText;
                    }
                }
                
                req.open('GET','chat.php',true);
                req.send();
            }
        </script>
    </head>
    <body onload="ajax();">
        <div id="container">
            <div id="chat_box">
               
            </div>
            <form method="post" action="index.php">
                <input type="text" name="name" placeholder="name">
                <textarea name="msg" placeholder="enter message"></textarea>
                <input type="submit" name="submit" value="Send it">
            </form>
            
            <?php
            if(isset($_POST['submit'])){
                $name=$_POST['name'];
                $msg=$_POST['msg'];
                 
                $query="insert into chat (name,msg) values ('$name','$msg')";
                
                $run= $con->query($query);
                if($run){
                   // echo "<embed loop='false' src='chat.way' hidden='true' autoplay='true' />";
                }
            }
           
            
            ?>
        </div>
    </body>
</html>