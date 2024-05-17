<?php
include "db_koneksi.php";
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Tugas Pertemuan 12</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        <style>
            .gap{
                margin-right: 3px;
            }
        </style>
    </head>
    <body>
        <div class="continer">            
            <div class="card mt-2">                   
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="card mb-2">
                                    <div class="card-header">
                                        <div class="d-flex justify-content-between">
                                            <div class="p-2">                                                
                                                    <h5>Data Kategori</h5>
                                                </div>
                                                <div class="p-2">                                            
                                                    <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#formKategori">Tambah Kategori</button>                                                   
                                            </div>
                                        </div>                                        
                                    </div>
                                    <div class="card-body" style="height: 41vh; overflow: auto;">
                                        <table class="table table-hover text-center">
                                            <tr>
                                                <th>Id Kategori</th>
                                                <th>Nama Kategori</th>
                                                <th>Aksi</th>
                                            </tr>
                                            <?php                                            
                                            $no = 1;
                                            $data = mysqli_query($conn,"select * from tbl_kategori");
                                            while($d = mysqli_fetch_array($data)){
                                            ?>
                                                <tr>
                                                    <td><?= $no++?></td>
                                                    <td><?= $d['nama_kategori']?></td>
                                                    <td><button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#edit<?=$d['id_kategori']?>">EDIT</button> 
                                                    <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#hapus<?=$d['id_kategori']?>">HAPUS</button>
                                                </td>
                                                </tr>

                                            <?php
                                            }
                                            ?>                                            
                                        </table>                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="card mb-2">
                                    <div class="card-header">
                                        <div class="d-flex justify-content-between">
                                            <div class="p-2">                                                
                                                    <h5>Data Berita</h5>
                                                </div>
                                                <div class="p-2">                                            
                                                    <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#formBerita">Tambah Berita</button>                                                   
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="card-body">
                                        <table class="table table-hover">
                                            <tr>
                                                <th>NO</th>                                                
                                                <th>Nama Kategori</th>
                                                <th>Judul Berita </th>
                                                <th>Isi Berita</th>
                                                <th>Penulis</th>
                                                <th>Tanggal Publish</th>
                                                <th>Aksi</th>
                                            </tr>
                                            <?php 
                                            $no = 1;
                                            $data = mysqli_query($conn, "SELECT tbl_berita.*, tbl_kategori.nama_kategori from tbl_berita INNER JOIN tbl_kategori ON tbl_berita.id_kategori=tbl_kategori.id_kategori;");
                                            while($da = mysqli_fetch_array($data)){
                                            ?>
                                                <tr>
                                                    <td><?= $no++?></td>
                                                    <td><?= $da['nama_kategori']?></td>
                                                    <td><?= $da['judul_berita']?></td>
                                                    <td><?= substr($da['isi_berita'], 0, 25)?> ..... </td>
                                                    <td><?= $da['penulis']?></td>
                                                    <td><?= $da['tgl_publish']?></td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <button type="button" class="btn btn-primary btn-sm gap" data-bs-toggle="modal" data-bs-target="#formeditberita<?=$da['id_berita']?>">EDIT</button> 
                                                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#hapusberita<?=$da['id_berita']?>">HAPUS</button>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php 
                                            }
                                            ?>
                                        </table>                                
                                    </div>
                                </div>
                            </div>
                        </div>                    
                    </div>
            </div>            
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>

    <!-- Modal -->
<div class="modal fade" id="formKategori" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Kategori</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="kategori/input_kategori.php" method="post">
                    <div class="mb-3">
                        <label for="namaKategori" class="form-label">Nama Kategori</label>
                        <input type="text" class="form-control" id="namaKategori" name="namaKategori" placeholder="">
                    </div> 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
            </form>
        </div>
    </div>
</div>

<!-- data berita -->
<div class="modal fade modal-lg" id="formBerita" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Berita</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="berita/input_berita.php" method="post">
                    <div class="mb-3">
                        <label for="kategori" class="form-label">Kategori</label>
                        <select class="form-select" id="kategori" name="id_kategori">
                            <option>Kategori</option>
                            <?php
                            $data = mysqli_query($conn, "SELECT * FROM tbl_kategori");
                            while($d = mysqli_fetch_array($data)){
                            ?>
                            <option value="<?= $d['id_kategori']?>"><?= $d['nama_kategori']?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="judul_berita" class="form-label">Judul Berita</label>
                        <input type="text" class="form-control" id="judul_berita" name="judul_berita" maxlength="100">
                    </div>                     
                    <div class="mb-3">
                        <label for="penulis" class="form-label">Penulis</label>
                        <input type="text" class="form-control" id="penulis" name="penulis" maxlength="30">
                    </div>                     
                    <div class="mb-3">
                        <label for="tgl_publish" class="form-label">Tanggal Publish</label>
                        <input type="date" class="form-control" id="tgl_publish" name="tgl_publish">
                    </div>                     
                    <div class="mb-3">
                        <label for="isi_berita" class="form-label">Isi Berita</label>
                        <textarea type="textarea" class="form-control" id="isi_berita" name="isi_berita" maxlength="1000"></textarea>
                    </div>                     
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>                
            </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal edit data kategori -->
<?php
$data = mysqli_query($conn, "SELECT * FROM tbl_kategori");
while($d = mysqli_fetch_array($data)){
?>
<div class="modal fade" id="edit<?= $d['id_kategori']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data <?= $d['nama_kategori']?></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form action="kategori/edit_kategori.php" method="post">
                    <div class="mb-3">
                        <label for="namaKategori" class="form-label">Nama Kategori</label>
                        <input type="text" class="form-control" id="namaKategori" name="namaKategori" value="<?=$d['nama_kategori']?>">
                        <input type="hidden" name="id_kategori" value="<?= $d['id_kategori']?>">
                    </div> 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
            </form>
        </div>
    </div>
</div>
<?php
}
?>

<!-- Modal hapus data kategori -->
<?php
$data = mysqli_query($conn, "SELECT * FROM tbl_kategori");
while($d = mysqli_fetch_array($data)){
?>
<div class="modal fade" id="hapus<?= $d['id_kategori']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Data <?= $d['nama_kategori']?></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form action="kategori/hapus_kategori.php" method="post">
                    <div class="mb-3">
                        <h6>Yakin Ingin Meghapus Data <?= $d['nama_kategori']?> ini.?</h6>
                        <input type="hidden" name="id_kategori" value="<?= $d['id_kategori']?>">
                    </div> 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-danger">YES DELETE</button>
            </div>
            </form>
        </div>
    </div>
</div>
<?php
}
?>


<!-- Edit data berita -->
<?php
$kategori = mysqli_query($conn, "SELECT * FROM tbl_kategori");

$data = mysqli_query($conn, "SELECT tbl_berita.*, tbl_kategori.nama_kategori from tbl_berita INNER JOIN tbl_kategori ON tbl_berita.id_kategori=tbl_kategori.id_kategori");
while($d = mysqli_fetch_array($data)){
?>
<div class="modal fade modal-lg" id="formeditberita<?= $d['id_berita']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Berita</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="berita/edit_berita.php" method="post">
                    <input type="hidden" id="id_berita" name="id_berita" value="<?= $d['id_berita']?>">
                    <div class="mb-3">
                        <label for="kategori" class="form-label">Kategori</label>
                        <select class="form-select" id="kategori" name="id_kategori">   
                            <option value="">Kategori</option>                                                  
                            <?php foreach($kategori as $datas ) : ?>
                            <option value="<?= $datas['id_kategori']?>"<?= $d['id_kategori'] == $datas['id_kategori'] ? 'selected' : '' ?>> 
                                <?= $datas['nama_kategori']?>
                            </option>     
                            <?php endforeach ?>                                                                                  
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="judul_berita" class="form-label">Judul Berita</label>
                        <input type="text" class="form-control" id="judul_berita" name="judul_berita" value="<?= $d['judul_berita']?>" maxlength="100">
                    </div>                     
                    <div class="mb-3">
                        <label for="penulis" class="form-label">Penulis</label>
                        <input type="text" class="form-control" id="penulis" name="penulis" value="<?= $d['penulis']?>" maxlength="30">
                    </div>                     
                    <div class="mb-3">
                        <label for="tgl_publish" class="form-label">Tanggal Publish</label>
                        <input type="date" class="form-control" id="tgl_publish" value="<?= $d['tgl_publish']?>" name="tgl_publish">
                    </div>                     
                    <div class="mb-3">
                        <label for="isi_berita" class="form-label">Isi Berita</label>
                        <textarea type="textarea" class="form-control" id="isi_berita" name="isi_berita" maxlength="1000"><?= $d['isi_berita']?></textarea>
                    </div>                     
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>                
            </div>
            </form>
        </div>
    </div>
</div>
<?php
}
?>

<!-- Modal hapus data berita -->
<?php
$data = mysqli_query($conn, "SELECT * FROM tbl_berita");
while($d = mysqli_fetch_array($data)){
?>
<div class="modal fade" id="hapusberita<?= $d['id_berita']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Data Berita</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form action="berita/hapus_berita.php" method="post">
                    <div class="mb-3">
                        <h6>Yakin Ingin Meghapus Data <?= $d['judul_berita']?> ini.?</h6>
                        <input type="hidden" name="id_berita" value="<?= $d['id_berita']?>">
                    </div> 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-danger">YES DELETE</button>
            </div>
            </form>
        </div>
    </div>
</div>
<?php
}
?>
</html>