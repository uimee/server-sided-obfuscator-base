<?php
include("api/c_api.php");
c_api::c_init("1.0", "FLc25OasozrIpXFTfHnV6vdMlgE9A1oWJUyY7Dl8885", "kappa");

//guide, create a program at cauth.me, put the version, program key and api key, done

if(isset($_SESSION["logged_in"]))
    header("Location: panel.php");

if(isset($_POST["sub"]) && c_api::c_all_in_one($_POST["token"])) {
    $_SESSION["logged_in"] = true;

    header("Location: panel.php");
}
?>

<form method="post">
    token : <br>
    <input type="text" name="token"> <br>
    <button name="sub">submit</button>
</form>
