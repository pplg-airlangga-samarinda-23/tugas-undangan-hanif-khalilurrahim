<?php
include 'koneksi.php';
        //koneksi ke database
      $host = "localhost";
      $username = "root";
      $password = "";
      $database = "undangan";

       $connection = new mysqli($host, $username, $password, $database);

       if ($connection->connect_error) {
        echo "koneksi gagal :(";
       }
       
       //kirim pesan
       if (isset($_POST)) { 

       $nama = @$_POST['nama'];
       $ucapan = @$_POST['ucapan'];
       $keterangan = @$_POST['keterangan'];

       if ($nama !="" and $ucapan !="" and $keterangan !=""){
        var_dump($_POST);
        $sql = "INSERT INTO buku_tamu (nama, ucapan, keterangan) VALUES ('$nama', '$ucapan', '$keterangan')";        
        $connection->query($sql);
       }

        header("location: http://localhost/ULTIMATE PROJECT WEDDING");
        
    }
        
?>