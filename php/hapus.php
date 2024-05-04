<?php
    include("./configDatabase.php");
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "DELETE FROM pesanan WHERE id=$id";
        $query = mysqli_query($db, $sql);
        if($query){
            header("Location:../html/list.php");
        } else{
            die("gagal menghapus...");
        }
    } else{
        die("akses dilarang...");
    }
?>