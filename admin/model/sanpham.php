<?php
    function insert_sanpham($iddanhmuc, $tensp, $giasp, $hinhsp, $mota){
        $sql = "INSERT INTO sanpham (iddm, name, price, img, mota) VALUES ('$iddanhmuc', '$tensp', '$giasp', '$hinhsp', '$mota')";
        pdo_execute($sql);
    }
    
    function delete_sanpham($id){
        $sql = "DELETE FROM sanpham WHERE id = $id";
        pdo_execute($sql);
    }

    function loadall_sanpham($kyw, $iddanhmuc){
        $sql = "SELECT * FROM sanpham WHERE 1";
        if ($kyw != ""){
            $sql .= " AND name LIKE '%$kyw%'";
        }
        if ($iddanhmuc > 0){
            $sql .= " AND iddm = $iddanhmuc";
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

    function update_sanpham($id, $iddanhmuc, $tensp, $giasp, $hinhsp, $mota){
        if ($hinhsp != "") {
            $sql = "UPDATE sanpham SET iddm = '$iddanhmuc', name = '$tensp', price = '$giasp', img = '$hinhsp', mota = '$mota' WHERE id = $id";
        } else {
            $sql = "UPDATE sanpham SET iddm = '$iddanhmuc', name = '$tensp', price = '$giasp', mota = '$mota' WHERE id = $id";
        }
        pdo_execute($sql);
    }
    
?>