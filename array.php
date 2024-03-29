<?php
  /* Task 1
    Buatlah array multidimensi yang berisi data buah
    seperti nama, warna, stok, harga dan deskripsi
  */
  $buah = array(
    array('id' => 1, 'nama' => 'Apel', 'warna' => 'Merah', 'stok' => 50, 'harga' => 5000, 'deskripsi' => 'Buah yang kaya akan serat.'),
    array('id' => 2, 'nama' => 'Jeruk', 'warna' => 'Oranye', 'stok' => 30, 'harga' => 7000, 'deskripsi' => 'Buah yang kaya akan vitamin C.'),
    array('id' => 3, 'nama' => 'Pisang', 'warna' => 'Kuning', 'stok' => 40, 'harga' => 4000, 'deskripsi' => 'Buah yang mengandung kalium.'),
    array("id" => 4, "nama" => "Anggur", "warna" => "Ungu", "stok" => 90, "harga" => 10000, "deskripsi" => 'Buah yang mengandung antioksidan sangat tinggi.')
    // Tambahkan data buah lainnya sesuai kebutuhan
  );
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Array Table Buah</title>
</head>
<body>
  <div class="container">
    <h1 class="text-center mt-5 mb-4">Daftar Buah</h1>
    <table class="table table-striped table-hover">
      <thead class="thead-dark">
        <tr>
          <th>ID</th>
          <th>Nama</th>
          <th>Warna</th>
          <th>Stok</th>
          <th>Harga</th>
          <th>Deskripsi</th>
        </tr>
      </thead>

      <tbody>
        <?php
          /* Task 2
            Tampilkan data array tersebut disini dan buatlah menjadi sebuah table
          */
          foreach ($buah as $data) {
            echo "<tr>";
            echo "<td>{$data['id']}</td>";
            echo "<td>{$data['nama']}</td>";
            echo "<td>{$data['warna']}</td>";
            echo "<td>{$data['stok']}</td>";
            echo "<td>{$data['harga']}</td>";
            echo "<td>{$data['deskripsi']}</td>";
            echo "</tr>";
          }
        ?>
      </tbody>
    </table>
  </div>
</body>
</html>
