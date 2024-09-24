<!DOCTYPE html>
<html>
<head>
    <title>wedding</title>
    <link href="index.css" rel="stylesheet">
    <script src="script.js"></script>
    <style>
        body{background-color: rgb(224, 186, 163);}
        </style>
</head>
<body>
    <h1 class="ambasing">undangan pernikahan</h1>
    <h2 class="ambasing">penikahan yanqing dan yunli</h2>
    <h3 class="ambasing">Tanggal : senin 78</h3>
    <h3 class="ambasing">Tempat : SMK TI airlangga</h3>
    <br>
    <yunli><img style="margin-left: 550px;" src="yunqing.png" width="156"></yunli>
    <yanqing><img style="margin-right: 550px;" src="yanqing.png" width="160"></yanqing>
    <tyunli><h3>YUNLI</h3></tyunli>
    <heart>❤️</heart>
    <tyanqing><h3>YANQING</h3></tyanqing>
    </br>
    <br>
    <div class="carousel">
        <div class="carousel-inner">
            <img src="yunli1.png" alt="Image 1" class="active">
            <img src="yunli2.png" alt="Image 2">
            <img src="yunli3.png" alt="Image 3">
        </div>
        <button class="prev"><</button>
        <button class="next">></button>
    </div>
    </br>

    <div style="margin-left: 630px;">
        <form action="insert.php" method="POST">
            <label>NAMA</label> <br>
            <input name="nama" type="text" placeholder="nama" require> <br>
            <label>UCAPAN</label> <br>
            <textarea name="ucapan" cols="30" rows="4" placeholder="ucapan" require></textarea> <br>
            <label>KETERANGAN</label> <br>
            <select name="keterangan" required>
                    <option value="" selected disable hidden>konfirmasi kehadiran</option>
                    <option value="1">hadir</option>
                    <option value="2">tidak hadir</option>
                    <option value="3">berhalangan</option>
                    <option value="4">attam</option>
            </select> <br>
            <button type="submit">kirim</button> <br>
        </form>
    </div>
    <div>
    <?php
       include 'koneksi.php';
       //kirim pesan
       if (isset($_POST)) {
        $nama = @$_POST['nama'];
        $ucapan = @$_POST['ucapan'];
        $keterangan = @$_POST['keterangan'];

        $sql = "INSERT INTO buku_tamu (nama, ucapan, keterangan) VALUES ('$nama', '$ucapan', '$keterangan')";        
        
        $connection->query($sql);
       }

        //tampilkan data
        $sql2 = "SELECT * FROM buku_tamu ORDER BY id DESC";
        $hasil = $connection->query($sql2);
    ?>
     <div style="height:200px; width:300px; overflow:scroll; margin-left: 610px;">
    <?PHP
        while ($baris = $hasil->fetch_row()) {
    ?>
        <div style="border-style:solid; border-color:crimson; margin: 10px;">
          <p style="font-weight:bolt;"><?= $baris[1] ?></p>
          <p><?= $baris[2] ?></p>
        </div>
        
        <?php
        }
        
        $hasil->free_result();
     ?>
     </div>

    <br>
    <h3 class="ambasing">Wedding Location</h3>
    <map><iframe width="425" height="350" src="https://www.openstreetmap.org/export/embed.html?bbox=117.14631825685504%2C-0.48621973098855525%2C117.14976757764818%2C-0.48440930485147105&amp;layer=mapnik" style="border: 1px solid rgb(0, 0, 0)"></iframe></map>
    <migas><a href="https://www.openstreetmap.org/#map=19/-0.48531/117.14804">MAP UNDANGAN</a></migas>
    </br>
    
    <psu><h5>1.attam</h5></psu>
    <psu><h5>2.kohco</h5></psu>
    <psu><h5>3.bluhenry</h5></psu>
    <psu><h5>4.hazure</h5></psu>
    
    <lagu><audio controls autoplay loop src="Gawr Gura - Night Dancer (AI Cover).mp3"></audio></lagu>
    <script href="script.js"></script>

</body>
</html>