<?php
  include('master.php');
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Daftar Berita Perkuliahan</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">daftar berita</li>
                </ol>
            </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Daftar berita perkuliahan Univ. Mercubuana</h3>
                        </div>
                <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Judul</th>
                                    <th>Konten</th>
                                    <th>Gambar Sampul</th>
                                    <th>Jadwal terbit</th>
                                    <th>Tanggal Dibuat</th>
                                    <th>Penulis</th>
                                    <th>Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $jadwal_kuliah = $conn->query("SELECT * FROM master_berita");
                                    $no = 1;
                                    while($row = $jadwal_kuliah->fetch_assoc()) {
                                    echo "<tr>";
                                    echo "<td>".$no."</td>";
                                    echo "<td style='text-overflow: ellipsis;max-width: 250px;overflow: hidden; white-space: nowrap;'>".$row["judul"]."</td>";
                                    echo "<td style='text-overflow: ellipsis;max-width: 250px;overflow: hidden; white-space: nowrap;'>".strip_tags($row["konten"])."</td>";
                                    echo "<td><img src='file/".$row["gambar_sampul"]."' class='img-fluid' style='max-width: 150px; max-height: 100px'></td>";
                                    echo "<td>".$row["jadwal_terbit"]."</td>";
                                    echo "<td>".$row["created_at"]."</td>";
                                    echo "<td>".$row["created_by"]."</td>";
                                ?>
                                    <td>
                                        <a href="detail_berita.php?id=<?php echo $row['id'] ?>" class="btn btn-success" title="detail"><i class="fa fa-eye"></i></a>
                                        <a href="update_berita.php?id=<?php echo $row['id'] ?>" class="btn btn-primary" title="edit"><i class="fa fa-edit"></i></a>
                                        <button class="btn btn-danger" data-toggle="modal" data-target="#modal-default" onclick="pushId('id_berita', <?php echo $row['id'] ?>)" title="delete"><i class="fa fa-trash"></i></button>
                                    </td>
                                <?php
                                    echo "</tr>";
                                    $no++;
                                    }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="modal-default">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Hapus Berita</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="process/hapus_berita.php" method="POST">
                        <div class="modal-body">
                            <p>Anda yakin ingin menghapus berita ini ?</p>
                            <input type="hidden" name="id_berita" required>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-danger">Ya, Hapus</button>
                        </div>
                        </form>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php
include('footer.php');
?>
