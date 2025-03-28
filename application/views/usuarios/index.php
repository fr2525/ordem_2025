
<?php $this->load->view('layout/sidebar'); ?>



<!-- Main Content -->
<div id="content">

<?php $this->load->view('layout/navbar'); ?>

  <!-- Begin Page Content -->
  <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Tables</h1>
          <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Usuario</th>
                      <th>Login</th>
                      <th>Ativo</th>
                      <th>Acoes</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($usuarios as $usuario) :?>
                    <tr>
                      <td><?php echo $usuario->id ?></td>
                      <td><?php echo $usuario->username ?></td>
                      <td><?php echo $usuario->email ?></td>
                      <td><?php echo $usuario->active ?></td>
                      <td>
                        <a title="Editar" href="" class="btn btn-primary">Editar</a>
                        <a title="Excluir"  href="" class="btn btn-danger">Excluir</a>
                      </td> 
                    </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>



  </div>
  <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

