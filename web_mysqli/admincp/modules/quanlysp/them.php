<p>Thêm Danh Mục Sản Phẩm</p>
    <table border="1" width="100% style="border-collapse: collapse;">
        <form method="POST" action="modules/quanlysp/xuly.php" enctype="multipart/form-data">
            <!--enctype="multipart/form-data" để gửi file vào form  -->
        <tr>
                <td>Tên sản phẩm</td>
                <td><input type="text" name="tensanpham"></td>
            </tr>
            <tr>
                <td>Mã sp</td>
                <td><input type="text" name="masp"></td>
            </tr>
            <tr>
                <td>Giá sp</td>
                <td><input type="text" name="giasp"></td>
            </tr>
            <tr>
                <td>Số lượng</td>
                <td><input type="text" name="soluong"></td>
            </tr>
            <tr>
                <td>Hình ảnh</td>
                <td><input type="file" name="hinhanh"></td>
            </tr>
            <tr>
                <td>Tóm Tắt</td>
                <td><textarea rows="10" style="resize:none;" name="tomtat"></textarea></td>
            </tr>
            <tr>
                <td>Nội dung</td>
                <td><textarea rows="10" style="resize:none;" name="noidung"></textarea></td>
            </tr>
            <tr>
                <td>Tình trạng</td>
                <td>
                    <select name="tinhtrang">
                        <option value="1"> Kích Hoạt </option>
                        <option value="0"> Ẩn </option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="themsanpham" value="Thêm sản phẩm"></td>
            </tr>
        </form>
    </table>
