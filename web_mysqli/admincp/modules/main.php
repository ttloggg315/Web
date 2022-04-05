<div class="clear"></div>
<div class="main">
    <?php
        if(isset($_GET['action']) && $_GET['query']){
            $tmp = $_GET['action'];
            $query = $_GET['query'];
        }else{
            $tmp = '';
            $query = '';
        }
        if($tmp=='quanlydanhmucsanpham'&& $query=='them'){
            include("modules/quanlydanhmucsp/them.php");
            include("modules/quanlydanhmucsp/lietke.php");
        }
        elseif($tmp=='quanlydanhmucsanpham'&& $query=='sua'){
            include("modules/quanlydanhmucsp/sua.php");
        }
        elseif($tmp=='quanlysp'&& $query=='them'){
            include("modules/quanlysp/them.php");
            include("modules/quanlysp/lietke.php");
        }
        elseif($tmp=='quanlysp'&& $query=='sua'){
            include("modules/quanlysp/sua.php");
        }
        else{
            include("modules/dashboard.php");
        }
    ?>
</div>