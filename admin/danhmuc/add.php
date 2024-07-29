<div class="row">
            <div class="row-frmtitle">
                <h1>Thêm Mới Loại Hàng Hóa</h1>
            </div>
            <div class="row-frmcontent">
                <form action="index.php?act=adddm" method="post">
                    <div class="row-mb10">
                        Mã loại<br>
                        <input type="text" name="maloai" disabled>
                    </div>
                    <div class="row-mb10">
                        Tên Loại<br>
                        <input type="text" name="tenloai">
                    </div>
                    <div class="row-mb10">
                        <input type="submit" name="themmoi" value="Thêm Mới">
                        <input type="submit" value="Nhập Lại">
                        <a href="index.php?act=listdm"><input type="button" value="Danh Sách"></a>

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