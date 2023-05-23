<?= $this->extend('template/admin_template') ?>
<?= $this->section('custom_js_header') ?>
 <!-- DataTables -->
<link rel="stylesheet" href="<?= base_url() ?>plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="<?= base_url() ?>plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="<?= base_url() ?>plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

<?= $this->endSection() ?>

<?= $this->section('content') ?>

<!-- Content Header (Page header) -->
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><?php echo $page_header; ?></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><?php echo $page_header; ?></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
</section>

    <!-- Main content -->
<section class="content">
      <div class="container-fluid">
        
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Danh sách tên tỉnh</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Mã tỉnh</th>
                    <th>Tên tỉnh</th>
                    <th>Ngày thêm</th>
                    <th>Ngày cập nhật</th>
                    <th>Cập nhật</th>
                  </tr>
                  </thead>
                  <tbody>
				  <?php if($tinhs): ?>
				<?php foreach($tinhs as $user): ?>
                  <tr>
                    <td><?php echo $user['id']; ?></td>
					<td><?php echo $user['MaTinh']; ?></td>
					<td><?php echo $user['TenTinh']; ?></td>
                    <td>AAAAAAAAAAA</td>
                    <td>BBBBBBBBBBBBB</td>
					<td class="project-actions text-center">
						 <a class="btn btn-info btn-sm" href="#">
							<i class="fas fa-pencil-alt">
							</i>
							Edit
						</a>
						<a class="btn btn-danger btn-sm" href="#">
							<i class="fas fa-trash">
							</i>
							Delete
						</a>
					</td>
                  </tr>
				  <?php endforeach; ?>
                    <?php endif; ?>
                 </tbody>
                  <tfoot>
				  <tr>
                    <th>ID</th>
                    <th>Mã tỉnh</th>
                    <th>Tên tỉnh</th>
                    <th>Ngày thêm</th>
                    <th>Ngày cập nhật</th>
                    <th>Cập nhật</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
		  
          <!-- /.col -->
        </div>
        <!-- /.row -->

      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
<?= $this->endSection() ?>

<?= $this->section('custom_js') ?>
  <!-- DataTables  & Plugins -->
  <script src="<?= base_url() ?>plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="<?= base_url() ?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="<?= base_url() ?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="<?= base_url() ?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="<?= base_url() ?>plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="<?= base_url() ?>plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="<?= base_url() ?>plugins/jszip/jszip.min.js"></script>
  <script src="<?= base_url() ?>plugins/pdfmake/pdfmake.min.js"></script>
  <script src="<?= base_url() ?>plugins/pdfmake/vfs_fonts.js"></script>
  <script src="<?= base_url() ?>plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="<?= base_url() ?>plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="<?= base_url() ?>plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
  <!-- Page specific script -->
  <script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "pageLength": 20,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>
<?= $this->endSection() ?>
