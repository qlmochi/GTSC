<div class="row">
                <div class="row-frmtitle">
                    <h1>DANH SÁCH LOẠI HÀNG</h1>
                </div>
                <div class="row-frmcontent">
                    <div class="row-mb10-frmdsloai">
                        <table>
                            <tr>
                                <th></th>
                                <th>Mã Loại</th>
                                <th>Tên Loại</th>
                                <th></th>
                            </tr>
                            <?php
                                foreach ($listdanhmuc as $danhmuc){
                                    extract($danhmuc);
                                    $suadam="index.php?act=suadm&id=".$id;
                                    $xoadam="index.php?act=xoadm&id=".$id;
                                    echo '
                                        <tr>
                                         <td><input type="checkbox" name="" id=""></td>
                                         <td>' .$id.' </td>
                                         <td>'.$name.' </td>
                                        <td><a href ="'. $suadam.'"><input type="button" value="Sửa"></a><a href ="'.$xoadam.'"><input type="button" value="Xóa"></a></td>
                                        </tr>';
                                    
                                }
                            ?>
                           
                        </table>
                    </div>
                    <div class="row-mb10">
                        <!-- <input type="button" value="Chọn Tất Cả">
                        <input type="button" value="Bỏ chọn Tất Cả">
                        <input type="button" value="Xóa các mục đã"> -->
                        <a href="index.php?act=adddm"><input type="button" value="Nhập thêm"></a>
                    </div>
                </div>
            </div>