<?php
session_start();
include 'db_conn.php'; 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $username = $_POST['username'];
    $password = $_POST['password'];

    if(!empty($username) && !empty($password)) {

        $query = "SELECT * FROM users WHERE username = '$username' LIMIT 1";
        $result = mysqli_query($conn, $query);

        if($result) {
            if($result && mysqli_num_rows($result) > 0) {
                $user_data = mysqli_fetch_assoc($result);

                if($user_data['password'] === $password)
                {
                    $_SESSION['user_id'] = $user_data['user_id'];
                    header("Location: index.php");
                    die;
                }
            }
        }   
    } else
        {
            echo "Unesite tačne informacije!";
        }
}
?>
