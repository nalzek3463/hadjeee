<?php
session_start();
include("./db_conn.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $username = $_POST['username'];
    $password = $_POST['password'];

    if(!empty($username) && !empty($password)) {

        $query = "SELECT * FROM users WHERE username = '$username' LIMIT 1";
        $result = mysqli_query($conn, $query);
        
        
            if($result && mysqli_num_rows($result) > 0) {
                $user_data = mysqli_fetch_assoc($result);
                
                if(password_verify($password, $user_data['password']))
                {      
                    
                    $_SESSION['id'] = $user_data['id'];
                    header("Location: ./index.php");
                    
                    die;
                }
            }
          
    } else
        {
            echo "Unesite tačne informacije!";
        }
}
?>
