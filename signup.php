<?php
echo "SIGNUP FORM </br></br>";
?>

<link rel="stylesheet" href="CSS/signup.css" type="text/css">
<link href='http://fonts.googleapis.com/css?family=Alegreya+Sans' rel='stylesheet' type='text/css'>

<form id="signup">
    <div class="tag_input_container"><div><input type="text" name="username" class="textfield" placeholder="Username"></div></div>
    <div class="tag_input_container"><input type="text" name="email" class="textfield" placeholder="Email"></div>
    <div class="tag_input_container"><input type="password" name="password" class="textfield" placeholder="Password"></div>
    <div class="tag_input_container"><input type="password" name="password_r" class="textfield" placeholder="Re-Enter Password"></div>
    <div class="tag_input_container">
         
        <select name="year">
            <?PHP
            for ($i = 1900; $i <= date("Y"); $i++) {
                echo "<option>$i</option>";
            }
            ?></select>
        <select name="month"><?PHP
            for ($i = 1; $i <= 12; $i++) {
                echo "<option>$i</option>";
            }
            ?></select>
        <select name="date"><?PHP
            for ($i = 1; $i <= 31; $i++) {
                echo "<option>$i</option>";
            }
            ?></select>
    </div>
    <div class="tag_input_container"><input type="radio" name="gender" value="male"><div id="gendertxt">Male</div><input type="radio" name="gender" value="female"><div id="gendertxt">Female</div></div>
    <div class="tag_input_container"><input type="checkbox" name="agreement" value="agreement"> <div id="text_normal">I have read and agreed to the terms and conditions</div></div>
    <input type="submit" value="Sign Up!"
</form>