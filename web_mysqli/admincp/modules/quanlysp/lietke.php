<?php
    $sql_lietke_sp = "SELECT * FROM tbl_sanpham ORDER BY id_sanpham DESC";
    $query_lietke_sp = mysqli_query($mysqli,$sql_lietke_sp);
?>
<p>Liệt Kê Danh Mục Sản Phẩm</p>
<table border="1" style="width: 100%;" style="border-collapse: collapse;">
    <tr>
        <th>ID</th>
        <th>Tên Sản Phẩm</th>
        <th>Hình ảnh</th>
        <th>Giá sp</th>
        <th>Số lượng</th>
        <th>Mã sp</th>
        <th>Tóm tắt</th>
        <th>Trạng Thái</th>
        <th>Quản Lý</th>
    </tr>
    <?php
        $i = 0;
        while($row = mysqli_fetch_array($query_lietke_sp)){
            $i++;
        }
    ?>
    <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $row['tensanpham'] ?></td>
        <td><img src="modules/quanlysp/uploads" alt=""><?php echo $row['hinhanh'] ?></td>
        <td><?php echo $row['giasp'] ?></td>
        <td><?php echo $row['soluong'] ?></td>
        <td><?php echo $row['masp'] ?></td>
        <td><?php echo $row['tomtat'] ?></td>
        <td><?php if($row['tinhtrang']==1){
                    echo 'Kích hoạt';
                }else{
                    echo 'Ẩn';
                } 
            ?>
        </td>
        <td>
            <a href="modules/quanlysp/xuly.php?idsanpham=<?php echo $row['id_sanpham'] ?>">Xóa</a> | 
            <a href="?action=quanlysp&query=sua&idsanpham=<?php echo $row['id_sanpham'] ?>">Sửa</a>
        </td>
    </tr>
</table>