<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require '../../conn.php';

    $email = $_POST['email'];
    $password = $_POST['password'];

    $c_query = "SELECT * FROM `user` WHERE `email` = '$email' AND `password` = '$password'";
    $run_2 = mysqli_query($conn, $c_query);

    if (mysqli_num_rows($run_2) > 0) {

        $row=mysqli_fetch_assoc($run_2);
        session_start();
        $_SESSION['user'] = $row['name'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['id'] = $row['id'];
       
        echo '<script>alert("Login Now");location.href = "../../index.php"</script>';
    } else {


        echo '<script>alert("USER NOT EXIST");location.href = "../../index.php"</script>';
    }
}
