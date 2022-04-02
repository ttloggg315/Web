<div class="clear"></div>
<div class="main">
    <?php
        if(isset($_GET['action'])){
            $tmp = $_GET['action'];
        }else{
            $tmp = '';
        }
        if($tmp=='quanlydanhmucsanpham'){
            include("modules/quanlydanhmucsp/them.php");
        }
        else{
            include("modules/dashboard.php");
        }
    ?>
</div>