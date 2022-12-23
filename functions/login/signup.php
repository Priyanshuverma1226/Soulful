<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require '../../conn.php';
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone_number=$_POST['phone_number'];

    $c_query = "SELECT * FROM `user` WHERE `email` = '$email' ";
    $run_2 = mysqli_query($conn, $c_query);

    if (mysqli_num_rows($run_2) > 0) {
        echo '<script>alert("Emal Already Exist ");location.href = "../../index.php"</script>';
    } else {


        $query = "INSERT INTO `user` (`id`, `name`, `email`, `password`, `date`, `number_p`) VALUES (NULL, '$name', '$email', '$password', current_timestamp(),'$phone_number');";
        $run = mysqli_query($conn, $query);

        if ($run) {
            echo '<script>alert("Signup Now");location.href = "../../index.php"</script>';
        }
    }
}
