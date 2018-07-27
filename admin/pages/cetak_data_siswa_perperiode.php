  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Cetak Data Siswa Perperiode
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Cetak Data Siswa Perperiode</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-body">
             <form role="form" method="post" action="pages/cetak/cetak_laporan_data_siswa.php" target="_blank">
              <!-- Date -->
              <div class="form-group">
                <label>Dari Tanggal :</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="glyphicon glyphicon-calendar"></i>
                  </div>
                  <input type="date" class="form-control pull-right" name="tawal" id="datepicker">
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->

              <!-- Date -->
              <div class="form-group">
                <label>Hingga Tanggal :</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="glyphicon glyphicon-calendar"></i>
                  </div>
                  <input type="date" class="form-control pull-right" name="takhir" id="datepicker">
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->
              
              <div class="box-footer">
                <button type="submit" class="btn btn-primary" title="Cetak Data"> <i class="glyphicon glyphicon-print"></i> Cetak</button>
              </div>
            </form>

            </div>
            <!-- /.box-body -->
          </div>
        </div>
      </div>
    </section>