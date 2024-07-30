<?php
    function insert_sanpham($iddm, $tensp, $giasp, $hinhsp, $mota){
        $sql = "INSERT INTO sanpham (iddm, name, price, img, mota) VALUES ('$iddm', '$tensp', '$giasp', '$hinhsp', '$mota')";
        pdo_execute($sql);

    }
    
    function delete_sanpham($id){
        $sql = "DELETE FROM sanpham WHERE id = $id";
        pdo_execute($sql);
    }

    function loadall_sanpham($kyw, $iddm){
        $sql = "SELECT * FROM sanpham WHERE 1";
        if ($kyw != ""){
            $sql .= " AND name LIKE '%$kyw%'";
        }
        if ($iddm > 0){
            $sql .= " AND iddm = $iddm";
        }
        $sql .= " ORDER BY id DESC";
        $listsanpham = pdo_query($sql);
        return $listsanpham;
    }
  
    function loadone_sanpham($id){
        $sql = "SELECT * FROM sanpham WHERE id = $id";
        $dm = pdo_query_one($sql);
        return $dm;
    }

    
    function update_sanpham($id, $iddm, $name, $price, $img, $mota) {
        $sql = "UPDATE sanpham SET iddm='$iddm', name='$name', price='$price', mota='$mota'";
        if ($img != "") {
            $sql .= ", img='$img'";
        }
        $sql .= " WHERE id=".$id;
        pdo_execute($sql);
    }
    
    
    
?>