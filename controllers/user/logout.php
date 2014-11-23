<?php
	session_start();
     unset($_SESSION['name']);
     redirect($base_url.'index.html');
                
