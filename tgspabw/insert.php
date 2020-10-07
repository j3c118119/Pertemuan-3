<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Tambah data mahasiswa</title>
</head>

<body style="margin: 10px;">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <ul class="navbar-nav mr-auto">
                <li>
                    <img src='images/indy.png' width='50' height='50'>
                </li>
            </ul>
            <a class="navbar-brand" href="#">Indy Arimurty</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="insert.php">Tambah</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<h2 style="text-align: center;">Form tambah data mahasiswa</h2>    

<form>

    <?php
    
    ?>

    <div class="form-group">
        <label for="exampleFormControlInput1">NIM</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="nim" value="">
    </div>

    <div class="form-group">
        <label for="exampleFormControlInput1">Nama</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="nama" value="">
    </div>
    
    Jenis Kelamin
    <br>
    <label><input type="radio" name="jenis_kelamin" value="Laki - laki">Laki - laki</label> 
    <label><input type="radio" name="jenis_kelamin" value="Perempuan" >Perempuan</label>

    <br>
   <div class="form-group">
    <label for="exampleFormControlSelect1">Agama</label>
    <select class="form-control" id="exampleFormControlSelect1" name="agama">
      <option value="Islam">Islam</option>
      <option value="Kristen">Kristen</option>
      <option value="Budha">Budha</option>
      <option value="Hindu">Hindu</option>
      <option value="Kong Hu Cu">Kong Hu Cu</option>
    </select>
    </div>
   <br>
    Olahraga Favorite
    <div class="form-check">
         <label><input type="checkbox" name="or_favorite[]" value="Softball">Softball</label><br>
         <label><input type="checkbox" name="or_favorite[]" value="Basket">Basket</label><br>
         <label><input type="checkbox" name="or_favorite[]" value="Futsal">Futsal</label><br>
         <label><input type="checkbox" name="or_favorite[]" value="Renang">Renang</label><br>
         <label><input type="checkbox" name="or_favorite[]" value="Badminton">Badminton</label><br>
    </div>
   
    <br>
    <div class="form-group">
        <label for="exampleFormControlFile1">Upload Foto Profil</label>
        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="foto">
    </div>


    <br>
    <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
    <a href="index.php" ><button type="button" class="btn btn-light">Kembali</button></a>
    <?php
        if (isset($_GET['submit'])){
            include "koneksi.php";
            $nim = $_GET['nim'];
            $nama = $_GET['nama'];
            $jenis_kelamin = $_GET['jenis_kelamin'];
            $agama = $_GET['agama'];
            $or_favorite = implode(",",$_GET['or_favorite']);
            $foto = $_GET['foto'];        
            mysqli_query($kon," INSERT INTO `mahasiswa` (`nim`, `nama`, `jenis_kelamin`, `agama`, `or_favorite`, `foto`) VALUES ('$nim','$nama','$jenis_kelamin','$agama','$or_favorite','$foto')");

            header("location:index.php");    
    //echo '<META HTTP-EQUIV="Refresh" Content="0; URL=tampil_data.php">';
    //exit;
            };
            
?>
   
</form>
</body>
</html>