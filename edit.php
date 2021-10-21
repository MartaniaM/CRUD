<?php
include_once("koneksi.php");
$id = $_GET['id'];
$result = mysqli_query($con, "SELECT * FROM mahasiswa WHERE nim = $id");
while ($user_data = mysqli_fetch_array($result)){
    $nim = $user_data['nim'];
    $nama = $user_data['nama'];
    $gender= $user_data['gender'];
    $alamat = $user_data['alamat'];
    $tanggal_lahir = $user_data['tanggal_lahir'];
    $agama = $user_data['agama'];
    $prodi = $user_data['prodi'];
}
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
        <h1>Tambah Data Mahasiswa</h1>

        <a href="index.php" class="btn btn-info btn-sm m-2">Data</a>
        <div class="row">
            <div class="col-sm-6 offset-sm-3">
                <input type="hidden" name="id" value="<?= $_GET['id']?>">
                 <form action="" method="post">
                    <div class="form-group">
                        <label>Nim</label>
                        <input type="number" name="nim" value="<?= $nim ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="nama" value="<?= $nama ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Gender</label>
                        <input type="text" name="gender" value="<?= $gender ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" name="alamat" value="<?= $alamat ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                     <input type="date" name="tanggal_lahir" value="<?= $tanggal_lahir ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Agama</label>
                     <input type="text" name="agama" value="<?= $agama ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Prodi</label>
                     <input type="text" name="prodi" value="<?= $prodi ?>" class="form-control" required>
                    </div>
                    <button type="submit" name="Update" class="btn btn-success btn-sm mt-2">Update</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>
<?php
if (isset($_POST['Update'])) {
    $id = $_POST['id'];
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $gender = $_POST['gender'];
    $alamat = $_POST['alamat'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $agama = $_POST['agama'];
    $prodi = $_POST['prodi'];
    $result = mysqli_query($con, "UPDATE mahasiswa SET nama='$nama', gender='$gender', alamat='$alamat', tanggal_lahir='$tanggal_lahir', agama='$agama', prodi='$prodi' WHERE nim='$nim'");
    header("Location: index.php");
}
?>