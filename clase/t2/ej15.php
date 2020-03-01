<?php
$check=false;
$check = isset($_POST["name"])&&isset($_POST["pwd"])?true:$check;

$name = isset($_POST["name"])&&$_POST["name"]!=''?$_POST["name"]:'';

$pwd = isset($_POST["pwd"])?$_POST["pwd"]:'';
?>
<?php if (!$check):?>
<form method="post">
<label>Name:</label>
<input type="text" name="name"/>

<br/>
<label>Password:</label>
<input type="password" name="pwd"/>

<br/>
<input type="submit" value="login">
</form>
<?php endif;?>

<?php if ($check && $name !='' && ( strlen($pwd)>=6 && strlen($pwd)<=12 ) ):?>
<h1>Hi there user <?=$name?> your password is <?=$pwd?></h1>

<?php elseif ($check):?>
<form method="post">
<label>Name:</label>
<input type="text" name="name" <?= $name ==''?"style='color:red;' value='please, insert a name'":"value=$name";?> >

<br/>
<label <?= ( strlen($pwd)<6 && strlen($pwd)>12 )?'style="color:red"':"";?>
>Password: please, insert a password between 6 and 12 characters</label>
<input type="password" name="pwd" />

<br/>
<input type="submit" value="login">
</form>
<?php endif;?>