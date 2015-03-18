<?php
//ini_set('session.save_path', 'tmp');
session_start();
//$id = $_REQUEST['id'];
include "include/config.php"; 
// if (isset($_SESSION['adminid'])) {
// 	header("Location: profile.php?id=$id");
// }     
if (isset($_SESSION['id'])) {
    header("Location: post.php");
}
if (isset($_POST['username'])) {
    
    $username = strip_tags($_POST['username']);
    $password = strip_tags($_POST['password']);
    $username = mysqli_real_escape_string($db, $username);
    $password = mysqli_real_escape_string($db, $password);
    $password = md5($password);
    
    $sql = "SELECT id, username, password, userrank FROM users WHERE username = '$username' LIMIT 1";

    $query = mysqli_query($db, $sql);
    $row = mysqli_fetch_row($query);
    $id = $row[0];
    $dbusername = $row[1];
    $dbPassword = $row[2];
    $userrank = $row[3];
    
    if ($username == $dbusername && $password == $dbPassword) {

        // if ($userrank == 2) {
        //     $_SESSION['username'] = $username;
        //     $_SESSION['adminid'] = $id;
        //     header("Location: profile.php?id=$id");
        // } else 
        if($userrank == 1){
	        $_SESSION['username'] = $username;
	        $_SESSION['id'] = $id;
	        header("Location: post.php");
         }    
    } else {
        echo '<script type="text/javascript">alert("Vitlaust Notendanafn eða Lykilorð")</script>';
    }
   
} ?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
        <form class="pure-form pure-form-stacked" action="login.php" method="POST" accept-charset="ISO-8859-1">
            <fieldset>
                <legend><h2>Innskrá</h2></legend>

                <label for="username">Notendanafn</label>
                <input id="username" type="text" name="username" placeholder="Notendanafn">

                <label for="password">Lykilorð</label>
                <input id="password" type="password" name="password" placeholder="Lykilorð">

                <button type="submit" name="Submit" class="pure-button pure-button-primary">Staðfesta!</button>
            </fieldset>
        </form>  
</body>
</html>