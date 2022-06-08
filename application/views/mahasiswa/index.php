<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Mahasiswa</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">data</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
        <table class="table">
    <thead>
        <tr><th>NO</th><th>Nama Mahasiswa</th>
        <th>NIM</th><th>Gender</th><th>IPK</th>
        <th>Tempat Lahir</th>
        <th>tanggal Lahir</th>
        <th>Prodi Kode</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $nomor = 1;
    foreach($list_mahasiswa as $obj){
    ?>
            <tr>
                <td><?=$nomor?></td>
                <td><?=$obj->nama?></td>
                <td><?=$obj->nim?></td>
                <td><?=$obj->gender?></td>
                <td><?=$obj->ipk?></td>
                <td><?=$obj->tmp_lahir?></td>
                <td><?=$obj->tgl_lahir?></td>
                <td><?=$obj->prodi_kode?></td>
            
            </tr>    
    <?php
    $nomor++;
    }?>
</tbody>
</table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
