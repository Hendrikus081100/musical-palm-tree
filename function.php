<?php
session_start();
//membuat konksi ke database
$conn = mysqli_connect("localhost","root","","stok barang");



//menambah Barang baru
if(isset($_POST['adnewbarang'])){
    $namabarang = $_POST['Nnama barang'];
    $deskripsi  = $_POST[ 'deskripsi'];
    $stock      =$_POST[ 'stock'];

    $addtotable = mysquli_query($conn,"insert into stock (namabarang, descripsi, stock)values('$namabarang','$descripsi','$stock')");
    if($addtotable){
        header('location:index.php');
    }else {
        echo 'gagal';
        header('location:index.php');
    }
};

//menambah Barang masuk
if(isset($_POST['barangmasuk'])){
    $namabarang = $_POST['barangnya'];
    $deskripsi  = $_POST[ 'penerima'];
   

    $addtotable = mysquli_query($conn,"insert into masuk(idbarang, keterangan)values('$barangnya','$penerima',)");
    if($addtotable){
        header('location:index.php');
    }else {
        echo 'brhasil';
        header('location:index.php');
        if($addtomasuk){
            header('location:index.php');
        }else {
            echo 'gagal';
            header('location:index.php');
        }
    }
};
?>