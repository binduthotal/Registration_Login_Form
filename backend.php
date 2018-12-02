<html>
<body>
<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "7141626z";
$dbname = "Lab4";
// connect to the database
$db = mysqli_connect($servername,$username,$password,$dbname);
// Check connection
if (!$db) 
{
    die("Connection failed: " . mysqli_connect_error());
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if($_POST['submit'] == "Register")
    {
        $email_val = $_POST['Email'];
        $userid_val = $_POST['Userid'];
        $username_val = $_POST['Username'];
        $password_val = $_POST['Password'];
        $date_val = date("Y/m/d");
        $encrypted_password = md5($password_val);
        $user_check_sql = "SELECT * FROM User 
                   WHERE username = '$username_val' 
                   OR user_id = '$userid_val'
                   OR email = '$email_val' ";

        $user_insert_sql = "INSERT INTO User (user_id, username, password, email ,registration_date,last_login_date)
                    VALUES ('$userid_val', '$username_val','$encrypted_password', '$email_val', '$date_val','$date_val')";
        $result = mysqli_query($db, $user_check_sql);
        $assoc_check = mysqli_fetch_assoc($result);
        if($assoc_check == NULL)
        {	
	        $result = mysqli_query($db,$user_insert_sql);
	        if( $result == TRUE ) 
		        echo 'Welcome '.$username_val;
        }
    }
    else if($_POST['submit'] == "Login")
    {
        $username_val = $_POST['Username'];
        $password_val = $_POST['Password'];
        $date_val = date("Y/m/d");
        $encrypted_password = md5($password_val);
        $user_check_sql= "SELECT * FROM User WHERE username = '$username_val' AND password = '$encrypted_password'";
        $result = mysqli_query($db, $user_check_sql);
        if (mysqli_num_rows($result) == 1) 
        {
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
            header('Location: index.html');
        }
        else 
        {
            echo 'Wrong Password/Username Combination';
        }
    }
    
}

//close connection at the end.
mysqli_close($db);
?> 
</body>
</html>
