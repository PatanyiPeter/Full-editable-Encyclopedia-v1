<?php 
	$username = $_POST['username'];
	$password = $_POST['password'];

	if ($username =='root' and $password =='none')
{
    include 'admin-place.php';
}
else
{
    echo 'incorect password';

}
 ?>