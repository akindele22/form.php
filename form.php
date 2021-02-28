<!Doctype html>
<html>
<head>
<body>

<h3> Registration Form </h3>
<?php
$fullName = $_POST['fullName'];
$Email = $_POST['Email'];
$password = $_POST['password'];
$phoneNumber = $_POST['phoneNumber'];


if(empty($_POST['fullname'])){
    $fullNameErr = "fullname is required";
}else{
    $fullName = data_input($_POST['fullName']);
}

if(empty($_POST['Email'])){
    $EmailErr = "Please enter a valid email";
}else{
    $Email = data_input($_POST['Email']);
}

if(empty($_POST['password'])){
    $passwordErr = "password is required";
}else{
    $password = data_input($_POST['password']);
}


if(empty($_POST['phoneNumber'])){
    $fullNameErr = "phone number is required and must be integer";
}else{
    $phoneNumber = data_input($_POST['phoneNumber']);
}

function data_input($data){
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<form method="post" action="form.php">
<div>
    fullName: <input type="text" name="fullName" value="<?php echo $fullName;?>">
    <span class="data_input" ><?php if(isset($fullNameErr)) echo $fullNameErr ?></span>
    </div>
    <div>
    E-mail: <input type="text" name="email" value="<?php echo $Email;?>">
    <span class="data_input" ><?php if(isset($EmailErr)) echo $EmailErr?></span>
    </div>
    <div>
    password: <input type="text" name="password" value="<?php echo $password;?>">
    <span class="data_input" ><?php if(isset($passwordErr)) echo $passwordErr?></span>
    </div>
    <div>
    phoneNumber: <input type="text" name="phoneNumber" value="<?php echo $phoneNumber;?>">
    </div>

    <button type="submit" name="submit" value="submit"> submit </button>
</form>
</p>
<?php
echo "<h3> Your Input:</h2>";
echo $fullName;
echo "<br>";
echo $Email;
echo "<br>";
echo $password;
echo "<br>";
echo $phoneNumber;
?>
</body>
</html>