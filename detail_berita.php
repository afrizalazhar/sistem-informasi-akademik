<?php
  include('master.php');
  $berita = $jadwal_kuliah = $conn->query("SELECT * FROM master_berita WHERE id = '$_GET[id]'");
  while($row = $jadwal_kuliah->fetch_assoc()) {
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Detail berita</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">detail berita</li>
                </ol>
            </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                <h3 class="card-title"><?php echo $row["judul"]; ?></h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fas fa-times"></i></button>
                </div>
                </div>
                <div class="card-body">
                    <div class="col-12">
                        <img src="file/<?php echo $row['gambar_sampul']; ?>" style="max-height: 800px;" class="mx-auto d-block">
                    </div>
                    <?php echo $row["konten"]; ?>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    Tanggal dibuat: <?php echo $row["created_at"]; ?>
                </div>
                <!-- /.card-footer-->
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php
}
include('footer.php');
?>
