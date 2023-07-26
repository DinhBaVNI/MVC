<?php 
   if (isset($_SESSION['ss_admin'])){


    $oder = $db ->get('oder', array());
    
}
else {
    header(" location: ?page=trangchu ");
}
    require "view/v_donhang.php";
?>