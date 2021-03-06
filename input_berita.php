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
                    <h1 class="m-0 text-dark">Berita</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Input Berita</li>
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
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Input Berita Kuliah</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" action="process/input_berita.php" method="POST" enctype="multipart/form-data">
                            <div class="card-body row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="kd_matakuliah">Judul Berita</label>
                                        <input type="text" name="judul" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="kd_matakuliah">Jadwal Terbit Berita</label>
                                        <input type="datetime-local" name="jadwal" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Sampul</label>
                                        <input type="file" class="form-control mb-2" name="gambar_sampul" accept="image/*" id="imgInp" required>
                                        <img class="img-fluid" id="blah" style='max-height: 500px'>
                                    </div>
                                </div>
                                
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Konten</label>
                                        <textarea class="textarea" name="konten" placeholder="Place some text here" style="width: 100%; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                                        </textarea>
                                    </div>
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
<script>
function readURL(input) {
    if (input.files && input.files[0]) {
    var reader = new FileReader();
    
        reader.onload = function(e) {
            $('#blah').attr('src', e.target.result);
        }
    
        reader.readAsDataURL(input.files[0]); // convert to base64 string
    }
}

$("#imgInp").change(function() {
    readURL(this);
});
</script>
<?php
include('footer.php');
?>
