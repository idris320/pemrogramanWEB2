<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>web</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body> 
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <div class="card mb-3">
                        <div class="card-body">
                           <form action="" method="POST">
                                <div class="mb-1">
                                    <label for="select" class="form-label">Nama Negara</label>
                                    <select class="form-select" aria-label="Default select example" name="namanegara" id="select">
                                        <option value=""></option>
                                        <option value="Korea Selatan U-23">Korea Selatan U-23</option>
                                        <option value="Jepang U-23">Jepang U-23</option>
                                        <option value="Tiongkok U-23">Tiongkok U-23</option>
                                        <option value="Uni Emirat Arab U-23">Uni Emirat Arab U-23</option>
                                    </select>
                                <div class="mb-1">
                                    <label for="P" class="form-label">Jumlah Pertandingan</label>
                                    <input type="text" class="form-control" id="P" name="P">
                                </div>                
                                <div class="mb-1">
                                    <label for="M" class="form-label">Jumlah Menang</label>
                                    <input type="text" class="form-control" id="M" name="M">
                                </div>                
                                <div class="mb-1">
                                    <label for="S" class="form-label">Jumlah Seri</label>
                                    <input type="text" class="form-control" id="S" name="S">
                                </div>                
                                <div class="mb-1">
                                    <label for="K" class="form-label">Jumlah Kalah</label>
                                    <input type="text" class="form-control" id="K" name="K">
                                </div>                
                                <div class="mb-1">
                                    <label for="P" class="form-label">Jumlah Poin</label>
                                    <input type="text" class="form-control" id="poin" name="poin">
                                </div>                
                                <div class="mb-1">
                                    <label for="op" class="form-label">Nama Operator</label>
                                    <input type="text" class="form-control" id="op" name="op">
                                </div>                
                                <div class="mb-1">
                                    <label for="nim" class="form-label">Nim Mahasiswa</label>
                                    <input type="text" class="form-control" id="nim" name="nim">
                                </div>                
                                <button type="submit" class="btn btn-primary" name="simpan">Submit</button>
                                </form>
                        </div>
                    </div>
                </div>
                <?php
                    session_start();

                    $data = isset($_SESSION['data'])? $_SESSION['data']: array();

                    if(isset($_POST['simpan'])){
                        $nama = $_POST['namanegara'];
                        $p = $_POST['P'];
                        $m = $_POST['M'];
                        $s = $_POST['S'];
                        $k = $_POST['K'];
                        $poin = $_POST['poin'];
                        $op = $_POST['op'];
                        $nim = $_POST['nim'];

                        //input ke db.html
                        $file = fopen('db.html', 'a');
                        $text = "<p>Nama Negara : $nama \n
                                Jumlah Pertandingan : $p \n
                                Jumlah Menang : $m \n
                                Jumlah Seri : $s \n
                                Jumlah Kalah : $k \n
                                Jumlah Poin : $poin \n
                                Operator : $op \n
                                Nim : $nim \n </p>".
                                "<p>==========================================</p>";
                        fwrite($file, $text);
                        fclose($file);

                        $data[] = array('nama'=>$nama, 'p'=>$p, 'm'=>$m, 's'=>$s, 'k'=>$k, 'poin'=>$poin, 'op'=>$op, 'nim'=>$nim);

                        // var_dump($data);
                        $_SESSION['data'] = $data;
                    }
                ?>
                <div class="col">
                    <div class="card text-center">
                        <div class="card-body">
                            <h3>Data Group B Piala Asia Qatar U-23</h3>
                            <h3>Per <?= date("d M Y H:i:s")?></h3>
                            <h3><?= $op.'/'. $nim?></h3><br>

                            <table class="table table-striped mt-1">
                                <tr>
                                    <th>Negara</th>
                                    <th>P</th>
                                    <th>M</th>
                                    <th>S</th>
                                    <th>K</th>
                                    <th>POIN</th>
                                </tr>
                                <?php foreach($data as $row): ?>
                                <tr>
                                    <td><?= $row['nama']?></td>
                                    <td><?= $row['p']?></td>
                                    <td><?= $row['m']?></td>
                                    <td><?= $row['s']?></td>
                                    <td><?= $row['k']?></td>
                                    <td><?= $row['poin']?></td>
                                </tr>
                                <?php endforeach; ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
    </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  </body>
</html>