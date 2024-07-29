<div class="row">
            <div class="row-frmtitle">
                <h1>Thêm Mới Sản Phẩm</h1>
            </div>
            <div class="row-frmcontent">
                <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
                    <div class="row-mb10">
                        Danh mục sản phẩm thuộc về<br>
                        <select name="iddanhmuc" >
                            <option value="">
                                <?php
                                    foreach ($listdanhmuc as $danhmuc) {
                                       extract($danhmuc);
                                        echo '<option value="'.$id.'">'.$name.'</option>';
                                    }
                                ?>
                            </option>
                        </select>
                    </div>
                    <div class="row-mb10">
                        Tên sản phẩm<br>
                        <input type="text" name="tensp">
                    </div>
                    <div class="row-mb10">
                        Giá sản phẩm<br>
                        <input type="text" name="giasp">
                    </div>
                    <div class="row-mb10">
                        Hình sản phẩm<br>
                        <input type="file" name="hinhsp">
                    </div>
                    <div class="row-mb10">
                        Mô tả sản phẩm<br>
                        <textarea name="mota" cols="30" rows="10"></textarea>
                    </div>
                    
                    <div class="row-mb10">
                        <input type="submit" name="themmoi" value="Thêm Mới">
                        <input type="submit" value="Nhập Lại">
                        <a href="index.php?act=listsp"><input type="button" value="Danh Sách"></a>

                    </div>
               
                    <?php

                    if(isset($nofication)&&($nofication!="")){
                        echo $nofication;
                    }
                    ?>
                </form>
            </div>
        </div>
   </div>
</div>