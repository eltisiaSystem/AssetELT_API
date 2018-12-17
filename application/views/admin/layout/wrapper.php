<?php 

// cek login user
$this->auth->cek_login();
// wrapper berfungsi untuk menggabungkan file template atau layout yang telah dipisah kedalam beberapa file
require_once('head.php');
require_once('topbar.php');
// require_once('header.php');
require_once('nav.php');
require_once('content.php');
require_once('footer.php');