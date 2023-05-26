<?= $this->extend('template/admin_template') ?>

<?= $this->section('custom_js_header') ?>

<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>General Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">General Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Thêm tỉnh</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" id="themtinh" name="them tinh" action="<?= site_url('/dashboard/tinh/themtinh/them') ?>">
                <div class="card-body">
                  <div class="form-group">
                    <label for="matinh">Mã tỉnh</label>
                    <input type="text" class="form-control" id="matinh" placeholder="Nhập mã tỉnh">
                  </div>
                  <div class="form-group">
                    <label for="tentinh">Tên tỉnh</label>
                    <input type="text" class="form-control" id="tentinh" placeholder="Tên tỉnh">
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Thêm</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    
<?= $this->endSection() ?>

<?= $this->section('custom_js') ?>

<?= $this->endSection() ?>