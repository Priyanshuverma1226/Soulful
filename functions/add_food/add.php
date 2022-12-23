<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    require '../../conn.php';

    $f_id = $_GET['f_id'];

    session_start();
    $id = $_SESSION['id'];




    $c_query = "SELECT * FROM `orders`  WHERE `f_id` = '$f_id' AND `u_id` = '$id'";
    $run_2 = mysqli_query($conn, $c_query);


    if (mysqli_num_rows($run_2) > 0) {
        echo '<script>alert("Already Added");location.href = "../../index.php"</script>';
    } else {


        $c_query2 = "INSERT INTO `orders` (`id`, `u_id`, `f_id`, `date`) VALUES (NULL, '$id', '$f_id', current_timestamp());";
        $run = mysqli_query($conn, $c_query2);

        if ($run) {
            echo '<script>alert("Add Food");location.href = "../../index.php"</script>';

            # code...
        }
    }
}
