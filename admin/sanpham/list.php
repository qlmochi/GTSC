<div class="row">
                <div class="row-frmtitle mb">
                    <h1>DANH SÁCH LOẠI HÀNG</h1>
                </div>
                <form action="index.php?act=listsp" method="post">
                            <input type="text" name="kyw">
                            <select name="iddanhmuc" >
                                <option value="0" selected>Tất cả</option>
                                <?php
                                    foreach ($listdanhmuc as $danhmuc) {
                                       extract($danhmuc);
                                        echo '<option value="'.$id.'">'.$name.'</option>';
                                    }
                                ?>
                            </select>
                            <input type="submit" name="listok" value="enter">
                </form>
                <div class="row-frmcontent">
                    <div class="row-mb10-frmdsloai">
                        
                        <table>
                            <tr>
                                <th></th>
                                <th>Mã Loại</th>
                                <th>Tên Sản Phẩm</th>
                                <th>Giá Sản Phẩm</th>
                                <th>Hình</th>
                                <th>Mô Tả</th>
                                <th>Lượt Xem</th>
                                <th></th>
                            </tr>
                            <?php
                                foreach ($listsanpham as $sanpham){
                                    extract($sanpham);
                                    $suadsp="index.php?act=suasp&id=".$id;
                                    $xoadsp="index.php?act=xoasp&id=".$id;
                                    $hinhpath="../upload/".$img;
                                    if(is_file($hinhpath)){
                                        $hinh="<img src='".$hinhpath."' height='100px'";
                                    }
                                    else{
                                        $hinh="loading";
                                    }
                                    echo '
                                        <tr>
                                            <td><input type="checkbox" name="" id=""></td>
                                            <td>' .$id.' </td>
                                            <td>'.$name.' </td>
                                            <td>'.$price.' </td>
                                            <td>'.$hinh.' </td>
                                            <td>'.$mota.' </td>
                                            <td>'.$luotxem.' </td>
                                           
                                            <td><a href ="'. $suadsp.'"><input type="button" value="Sửa"></a><a href ="'.$xoadsp.'"><input type="button" value="Xóa"></a></td>
                                        </tr>';
                                    
                                }
                            ?>
                           
                        </table>
                    </div>
                    <div class="row-mb10">
                        
                        <a href="index.php?act=addsp"><input type="button" value="Nhập thêm"></a>
                    </div>
                </div>
            </div>