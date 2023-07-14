<?php
   if(isset($_SESSION['ss_admin'])){
    unset($_SESSION['ss_admin']);
}
require "view/Wen_goc.php";
?>