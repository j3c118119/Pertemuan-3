<?php
    include "koneksi.php";

    $result = mysqli_query($kon,'SELECT * FROM mahasiswa');
    

?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Database Mahasiswa</title>
</head>
<body style="margin: 10px;" bg_color="yellow">
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
    <h2 style="text-align: center;">Data Mahasiswa</h2>
    <br>
    <table class="table table-hover">
        <thead class = "thead-dark" >
            <tr>
                <th scope="col">ID</th>
                <th scope="col">NIM</th>
                <th scope="col">Nama Lengkap</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Agama</th>
                <th scope="col">Olahraga Favorite</th>
                <th scope="col">Foto Profile</th>
                <th scope="col">Opsi</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                while ($row=mysqli_fetch_array($result))  // VARIABEL UNTUK CRUD GUNAKAN $row BUKAN $data
                {
                echo "<tr>";
                
                echo "<td>".$row['id']."</td>";
                echo "<td>".$row['nim']."</td>";
                echo "<td>".$row['nama']."</td>";
                echo "<td>".$row['jenis_kelamin']."</td>";
                echo "<td>".$row['agama']."</td>";
                echo "<td>".$row['or_favorite']."</td>";
                echo "<td><img src='images/".$row['foto']."' width='70' height='70'></td>";
                echo "<td>"?><a href="edit.php?id=<?php echo $row['id']; ?>" ><button type="button" name="sub" class="btn btn-warning">Edit</button></a> 
                             <a href="delete.php?id=<?php echo $row['id']; ?>"><button type="button" name="sub" class="btn btn-danger">Hapus</button></a> 
                <?php
                }
        
            ?>
        </tbody>
    </table>

</body>
</html>