<?php

session_start();

require('database.php');

session_destroy();

header('Location: ../frontend/form_log.html')




?>