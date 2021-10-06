
<?php
	$host='localhost';
    $user='root';
    $pass='';
    $database='login';
    
    $konek=mysqli_connect($id_user, $username, $password);
    
    mysqli_select_db($konek, $database);
    if ($konek){
    echo "success";
    } else {
    echo "failure";
    }
?>