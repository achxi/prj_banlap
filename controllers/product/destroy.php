<?php

session_start();
unset($_SESSION['cart']);
redirect($base_url.'index.html');
exit();
?>