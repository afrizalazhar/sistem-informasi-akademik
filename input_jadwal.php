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
              <li class="breadcrumb-item active">Input Jadwal Kuliah</li>
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
            <div class="col-4">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Input Jadwal Kuliah</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="process/input_jadwal.php" method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label for="kd_matakuliah">Mata Kuliah</label>
                    <select class="form-control" id="kd_matakuliah" name="matkul" required>
                        <option value="" selected disabled>Pilih Matakuliah</option>
                        <option value="MK001|Pemrograman Web Enterprise">Pemrograman Web Enterprise</option>
                        <option value="MK002|Pemrograman Web">Pemrograman Web</option>
                        <option value="MK003|Analisis Berorientasi Objek">Analisis Berorientasi Objek</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="kd_dosen">Dosen</label>
                    <select class="form-control" id="kd_dosen" name="kd_dosen" required>
                        <option value="" selected disabled>Pilih Dosen</option>
                        <option value="DS001">Dosen 01</option>
                        <option value="DS002">Dosen 02</option>
                        <option value="DS003">Dosen 03</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Jam</label>
                    <select class="form-control" id="jam" name="jam" required>
                        <option value="" selected disabled>Pilih Jam</option>
                        <option value="07.00 - 09.30">07.00 - 09.30</option>
                        <option value="09.30 - 12.00">09.30 - 12.00</option>
                        <option value="12.00 - 14.30">12.00 - 14.30</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="ruang_kelas">Ruang Kelas</label>
                    <input type="text" class="form-control" name="ruang_kelas" placeholder="contoh. D-404" required>
                  </div>
                  <div class="form-group">
                    <label for="ruang_kelas">Jumlah Mahasiswa</label>
                    <input type="number" class="form-control" name="jml_mahasiswa" placeholder="Jumlah Mahasiswa" required>
                  </div>
                  
                  <div class="form-group">
                    <label for="ruang_kelas">Tanggal Mulai</label>
                    <input type="date" class="form-control" name="tanggal_mulai" required>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            </div>
          </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <?php
  include('footer.php');
  ?>
