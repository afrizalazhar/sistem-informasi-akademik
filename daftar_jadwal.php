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
                <h1 class="m-0 text-dark">Jadwal Kuliah</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Jadwal Kuliah</li>
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
                            <h3 class="card-title">Jadwal Kuliah Universitas Mercubuana</h3>
                        </div>
                <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Kode Matkul</th>
                                    <th>Nama Matkul</th>
                                    <th>Kode Dosen</th>
                                    <th>Jam</th>
                                    <th>Ruang Kelas</th>
                                    <th>Jumlah Mahasiswa</th>
                                    <th>Tanggal Mulai</th>
                                    <th>Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $jadwal_kuliah = $conn->query("SELECT * FROM jadwal_kuliah");
                                    $no = 1;
                                    while($row = $jadwal_kuliah->fetch_assoc()) {
                                    echo "<tr>";
                                    echo "<td>".$no."</td>";
                                    echo "<td>".$row["kd_mkul"]."</td>";
                                    echo "<td>".$row["nama_mkul"]."</td>";
                                    echo "<td>".$row["kd_dosen"]."</td>";
                                    echo "<td>".$row["jam"]."</td>";
                                    echo "<td>".$row["ruang_kelas"]."</td>";
                                    echo "<td>".$row["jumlah_mhs"]."</td>";
                                    echo "<td>".$row["tanggal_mulai"]."</td>";
                                ?>
                                    <td>
                                        <a href="update_jadwal.php?id=<?php echo $row['id'] ?>" class="btn btn-primary">Update</a>
                                        <button class="btn btn-danger" data-toggle="modal" data-target="#modal-default" onclick="pushId(<?php echo $row['id'] ?>)">Delete</button>
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
                            <h4 class="modal-title">Hapus Jadwal</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="process/hapus_jadwal.php" method="POST">
                        <div class="modal-body">
                            <p>Anda yakin ingin menghapus jadwal ini ?</p>
                            <input type="hidden" name="id_jadwal" required>
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
