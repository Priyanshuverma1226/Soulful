<?php
session_start();
session_destroy();

echo '<script>alert("Logout Now");location.href = "../../index.php"</script>';

?>