
<?php $this->load->view('layout/sidebar'); ?>



<!-- Main Content -->
<div id="content">

<?php $this->load->view('layout/navbar'); ?>

  <!-- Begin Page Content -->
  <div class="container-fluid">

  <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo base_url("usuarios"); ?>">Usuários</a></li>
    <li class="breadcrumb-item active" aria-current="page"><?php echo $titulo; ?></li>
  </ol>
</nav>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <a title="Voltar" href="<?php echo base_url('usuarios')?>" class="btn btn-success btn-sm float-right"><i class="fas fa-arrow-left"></i></i>&nbspVoltar </a>
            </div>
            <div class="card-body">

                <form>
                  <div class="form-group row">
                      <div class="col-md-4">
                        <label >Name</label>
                        <input type="text" class="form-control" name="first_name" placeholder="Primeiro nome" value="<?php echo $usuario->first_name; ?>">
                        <small id="emailHelp" class="form-text">We'll never share your email with anyone else.</small>
                      </div>

                      <div class="col-md-4">
                        <label >Sobrenome</label>
                        <input type="text" class="form-control" name="last_name" placeholder="Sobrenome" value="<?php echo $usuario->last_name; ?>">
                        <small id="emailHelp" class="form-text">We'll never share your email with anyone else.</small>
                      </div>
                      <div class="col-md-4">
                        <label >Email&nbsp(login)</label>
                        <input type="email" class="form-control" name="email" placeholder="Seu email" value="<?php echo $usuario->email; ?>">
                        <small id="emailHelp" class="form-text">We'll never share your email with anyone else.</small>
                      </div>

                  </div>

                  <div class="form-group row">

                      <div class="col-md-4">
                        <label>Ativo</label>

                        <select class="form-control" name="active">
                            <option value="0" <?php echo ($usuario->active == 0) ? 'selected' : '' ?>>Não</option>
                            <option value="1" <?php echo ($usuario->active == 1) ? 'selected' : '' ?>>Sim</option>
                        </select>
                    </div>

                  </div>

                  <div class="form-group row">
                      <label for="exampleInputPassword1" class="form-label">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3 form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
          </div>



  </div>
  <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

