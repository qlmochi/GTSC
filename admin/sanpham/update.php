<?php
    if(is_array($sanpham)){
        extract($sanpham);
    }
    $hinhpath = "../upload/" . $img;
    if(is_file($hinhpath)){
        $hinh = "<img src='" . $hinhpath . "' height='100px'>";
    } else {
        $hinh = "loading";
    }
?>


<div class="row">
    <div class="row-frmtitle">
        <h1>Cập Nhật Loại Hàng Hóa</h1>
    </div>
    <div class="row-frmcontent">
        <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
            <div class="row-mb10">
            <select name="iddm" >
                                <option value="0" selected>Tất cả</option>
                                <?php
                                    foreach ($listdanhmuc as $danhmuc) {
                                       
                                       $dm_id = $danhmuc['id'];
                                       $dm_name = $danhmuc['name'];
                                       $selected = ($iddm == $dm_id) ? 'selected' : '';
                                       echo "<option value='$dm_id' $selected>$dm_name</option>";
                                    }
                                ?>
                            </select>
            </div>
            <div class="row-mb10">
                Tên sản phẩm<br>
                <input type="text" name="tensp" value="<?=$name?>">
            </div>
            <div class="row-mb10">
                Giá<br>
                <input type="text" name="giasp" value="<?=$price?>">
            </div>
            <div class="row-mb10">
                Hình<br>
                <input type="file" name="hinhsp">
                <?= $hinh ?>
            </div>
            <div class="row-mb10">
                Mô tả<br>
                <textarea name="mota" cols="30" rows="10"><?= $mota?></textarea>
            </div>
            <div class="row-mb10">
                <input type="hidden" name="id" value="<?=$id?>">
                <input type="submit" name="capnhap" value="Cập Nhật">
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
