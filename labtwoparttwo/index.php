<?php
session_start();
require_once ("vendor/autoload.php");
$msg = array();
$name = $email="";
function get_default($myfield){
    if (isset($_POST[$myfield])){
        echo $_POST[$myfield];
    }
    else {
        echo "";
    }

}


if (isset($_POST["submit"])) {
    $id=0;
    $id++;
    foreach ($_POST as $field){
        if (empty($field)){
            $msg[]="all fields are required";
        }
    }
    $name =$_POST["name"];
    $email=$_POST["email"];
    if (strlen($name)< 5){
        $msg[]="enter a name which is greater than or equal 5 character<br>";
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $msg[]= "Invalid email format<br>";
    }
    if (empty($msg)){
        $_SESSION["name"]=$name;
        //echo "$name";
        $fp = fopen("mydata.txt","a+");
        $txt="$name,$email";
        $txtname="$name";
        $theid=++$id;
        echo "$theid";
        fwrite($fp,$txtname.PHP_EOL);
        fclose($fp);
        die("Thanks for contacting us <br>Name: $name <br>Email: $email ");
        //(new counter)->counts();

    }

}
//(new counter)->self::counts();
 counter::counts();




?>




<html lang="en">
<head>
    <title> contact form </title>
</head>

<body>
<h3>  </h3>
<h4><?php foreach ($msg as $line){
        echo "**$line";
        $msg[]="";
    } ?></h4>
<div id="after_submit">

</div>
<form id="contact_form" action="index.php" method="POST" enctype="multipart/form-data">

    <div class="row">
        <label class="required" for="name">user_id"unique_id":</label><br />
        <input id="name" class="input" name="name" type="text" value="<?php get_default("name");?>" size="30" /><br />

    </div>
    <div class="row">
        <label class="required" for="email">Your email:</label><br />
        <input id="email" class="input" name="email" type="text" value="<?php get_default("email");?>" size="30" /><br />

    </div>

    <input id="submit" name="submit" type="submit" value="Send email" />



</form>
</body>

</html>
