<<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
<body>
    <div class="container">
        <div class="col-lg-6">
            <div class="card position-absolute top-50 start-50 translate-middle">
                <div class="card-body">
                    <h2 class="mt-5">Form Buku Tamu</h2>
                    <form method="post">                       
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Tamu:</label>
                            <input type="text" class="form-control" id="nama" name="nama" required>
                        </div>

                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat:</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" required>
                        </div>

                        <div class="mb-3">
                            <label for="pesan" class="form-label">Pesan:</label>
                            <textarea class="form-control" id="pesan" name="pesan" rows="4"></textarea>
                        </div>

                        <button type="submit" name="kirim" class="btn btn-primary">Kirim Undangan</button>            
                    </form>

                    <?php
                    // Memeriksa apakah formulir dikirim
                    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['kirim'])) {
                        // Mengambil nilai dari formulir
                        $nama = $_POST['nama'];
                        $alamat = $_POST['alamat'];
                        $pesan = $_POST['pesan'];

                        // Menampilkan pesan undangan
                        echo "<h3 class='mt-5'>Undangan Dikirim:</h3>";
                        echo "<p>Nama Tamu: $nama</p>";
                        echo "<p>Alamat: $alamat</p>";
                        echo "<p>Pesan: $pesan</p>";
                    }
                    ?>
                </div>
            </div>
        </div>

        
    </div>

    <!-- Bootstrap Bundle with Popper -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>