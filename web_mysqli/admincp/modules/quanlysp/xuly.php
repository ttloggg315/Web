<?php
include('../../config/config.php')
$tensanpham = $_POST['tensanpham'];
$masp = $_POST['masp'];
$giasp = $_POST['giasp'];
$soluong = $_POST['soluong'];
        // xu ly hinh anh
$hinhanh = $_FILES['hinhanh']['name'];
$hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
$hinhanh = time().'_'.$hinhanh;
$tomtat = $_POST['tomtat'];
$noidung = $_POST['noidung'];
$tinhtrang = $_POST['tinhtrang']; 

   
    if(isset($_POST['themsanpham'])){
        $sql_them = "INSERT INTO tbl_sanpham(tensanpham,masp,giasp,soluong,hinhanh,tomtat,noidung,tinhtrang) VALUE('".$tensanpham."','".$masp."','".$giasp."','".$soluong."', '".$hinhanh."', '".$tomtat."', '".$noidung."', '".$tinhtrang."')";
        mysqli_query($mysqli,$sql_them);
        move_upload_file($hinhanh_tmp, 'uploads/'.$hinhanh);
        header('Location:../../index.php?action=quanlysanpham&query=them');
    }
    elseif(isset($_POST['suasanpham'])){
        $sql_update = "UPDATE tbl_suadanhmuc SET tendanhmuc='".$tenloaisp."', '".$thutu."' WHERE id_danhmuc='$_GET[iddanhmuc]'";
        mysqli_query($mysqli,$sql_update);
        header('Location:../../index.php?action=quanlydanhmucsanpham&query=them');
    }
    else{
        $id=$_GET['idsanpham'];
        // xoa anh trong uploads
        $sql = "SELECT * FROM tbl_sanpham WHERE id_sanpham= '$id' LIMIT 1"; 
        $query = mysqli_query($mysqli,$sql);
        while($row = mysqli_fetch_array($query)){
            unlink('uploads/'.$row['hinhanh']);
        }
        $sql_xoa = "DELETE FROM tbl_sanpham WHERE id_sanpham='".$id."'";
        mysqli_query($mysqli,$sql_xoa);
        header('Location:../../index.php?action=quanlysanpham&query=them');
    }

?>