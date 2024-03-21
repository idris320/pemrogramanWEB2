<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cara 2 - Hitung luas segi Tiga</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
<body>
    <div class="container">
        <div class="col-lg-8 mx-auto">
            <div class="card mt-2">
               <div class="card-body">
                   <h2>Hitung Luas Segitiga</h2>
                   <form method="post">
                       <div class="mb-3">
                           <label for="exampleInputEmail1" class="form-label">Alas</label>
                           <input type="text" class="form-control" name="alas" id="exampleInputEmail1" aria-describedby="emailHelp">        
                       </div>
                       <div class="mb-3">
                           <label for="exampleInputPassword1" class="form-label">TInggi</label>
                           <input type="text" class="form-control" name="tinggi" id="exampleInputPassword1">
                       </div>        
                       <button type="submit" class="btn btn-primary" name="simpan">Submit</button>
                   </form>
               </div>
            </div>
        </div>
    </div>

    <div class="col-lg-6 mx-auto">
    <?php
    // Mulai session
    session_start();

    // Periksa apakah ada data di session, jika tidak, inisialisasi session sebagai array kosong
    $data = isset($_SESSION['data']) ? $_SESSION['data'] : array();

    // Periksa apakah formulir telah dikirim
    if (isset($_POST['simpan'])) {
        // Tangkap data dari formulir
        $alas = $_POST['alas'];
        $tinggi = $_POST['tinggi'];
        $luas = 0.5 * $alas * $tinggi;

        // Tambahkan data ke dalam array
        $data[] = array('alas' => $alas, 'tinggi' => $tinggi, 'luas' => $luas);

        // Simpan data ke dalam session
        $_SESSION['data'] = $data;
    }
    ?>
        <table class="table table-striped mt-2">
        <tr>
            <th>Alas</th>
            <th>Tinggi</th>
            <th>Luas</th>
        </tr>
        <?php foreach ($data as $row): ?>
        <tr>
            <td><?php echo $row['alas']; ?></td>
            <td><?php echo $row['tinggi']; ?></td>
            <td><?php echo $row['luas']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    </div>
  
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>