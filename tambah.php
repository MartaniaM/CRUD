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

    <title>CRUD PWD 3</title>
  </head>
  <body>
    <div class="container">
        <h1>Tambah Data Mahasiswa</h1>

        <a href="index.php" class="btn btn-info btn-sm m-2">Data</a>
        <div class="row">
            <div class="col-sm-6 offset-sm-3">
                 <form action="" method="post">
                    <div class="form-group">
                        <label>Nim</label>
                        <input type="number" name="nim" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>nama</label>
                        <input type="text" name="nama" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>gender</label>
                        <input type="text" name="gender" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>alamat</label>
                        <input type="text" name="alamat" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>tanggal lahir</label>
                     <input type="date" name="tanggal_lahir" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>agama</label>
                     <input type="text" name="agama" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>prodi</label>
                     <input type="text" name="prodi" class="form-control" required>
                    </div>
                    <button type="submit" name="Submit" class="btn btn-success btn-sm mt-2">Tambah</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>

<?php
 // Check If form submitted, insert form data into users table.
 if(isset($_POST['Submit'])) {
 $nim = $_POST['nim'];
 $nama = $_POST['nama'];
 $gender = $_POST['gender'];
 $alamat = $_POST['alamat'];
 $tanggal_lahir = $_POST['tanggal_lahir'];
 $agama = $_POST['agama'];
 $prodi = $_POST['prodi'];
 // include database connection file
 include_once("koneksi.php");
 // Insert user data into table
$result = mysqli_query($con, "INSERT INTO mahasiswa (nim,nama,gender,alamat,tanggal_lahir,agama,prodi) 
VALUES('$nim','$nama', '$gender','$alamat','$tanggal_lahir','$agama','$prodi')");
// Show message when user added
 echo "Data berhasil disimpan. <a href='index.php'>View Data</a>";
}
?>