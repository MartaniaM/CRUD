<?php
include_once("koneksi.php");
$result = mysqli_query($con, "SELECT * FROM mahasiswa");
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>PWD 3</title>
  </head>
  <body>
    <div class="container">
        <h1>Data Mahasiswa</h1>

        <a href="tambah.php" class="btn btn-success btn-sm m-2">Tambah</a>

        <table class = "table table-bordered">
            <thead>
                <tr>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Gender</th>
                    <th>Alamat</th>
                    <th>Tanggal Lahir</th>
                    <th>Agama</th>
                    <th>Prodi</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($user_data = mysqli_fetch_array($result)) { ?>
                    <tr>
                        <td><?= $user_data['nim']; ?></td>
                        <td><?= $user_data['nama']; ?></td>
                        <td><?= $user_data['gender']; ?></td>
                        <td><?= $user_data['alamat']; ?></td>
                        <td><?= $user_data['tanggal_lahir']; ?></td>
                        <td><?= $user_data['agama']; ?></td>
                        <td><?= $user_data['prodi']; ?></td>
                        <td> 
                            <a href="edit.php?id=<?= $user_data['nim'] ?>"class="btn btn-warning btn-sm">Update</a>
                            <a href="hapus.php?id=<?= $user_data['nim'] ?>" onclick="return confirm('Yakin Menghapus Data?')" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
            </tbody>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html> 