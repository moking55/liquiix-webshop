<?php
session_start();
unset($_SESSION['Username']);
unset($_SESSION['isLogin']);
session_destroy();