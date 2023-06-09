<?= $this->extend('template/admin_template') ?>

<?= $this->section('custom_js_header') ?>

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
        
        <!-- /.row -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"><?php echo $page_header; ?></h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>TT</th>
                      <th>Mã dân tộc</th>
                      <th>Tên dân tộc</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php if($dantocs): ?>
                    <?php foreach($dantocs as $dantoc): ?>
                        <tr>
                        <td><?php echo $dantoc['id']; ?></td>
                        <td><?php echo $dantoc['MaDanToc']; ?></td>
                        <td><?php echo $usdantocer['TenDanToc']; ?></td>
                        <td class="project-actions text-right">
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
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <?= $pager->makeLinks($page,$perPage, $total, 'custom_view') ?> 
      </div>

    </section>
    <!-- /.content -->
<?= $this->endSection() ?>

<?= $this->section('custom_js') ?>

<?= $this->endSection() ?>