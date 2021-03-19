<!-- /.row -->

<div class="row">
  <div class="col-2"></div>
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal_agregar">
          Agregar Pasante
        </button>
      </div>
      <!-- /.card-header -->
      <div class="card-body text-center">
        <table class="table table-head-fixed text-nowrap table-striped" id="tabla">
          <thead>
            <tr>
              <th>N#</th>
              <th>CEDULA</th>
              <th>NOMBRE</th>
              <th>PATERNO</th>
              <th>MATERNO</th>
              <th>RU</th>
              <th>CELULAR</th>
              <th>AREA</th>
              <th>TURNO</th>
              <th>GESTION</th>
              <th> E y E </th>
            </tr>
          </thead>
          <tbody><?php $i=0; ?>
            <?php foreach ($pasantes as $row) : ?>
              <tr>
                <td><?= $i=$i+1; ?></td>
                <td><?= $row->cedula ?></td>
                <td><?= $row->nombre ?></td>
                <td><?= $row->paterno ?></td>
                <td><?= $row->materno ?></td>
                <td><?= $row->ru ?></td>
                <td><?= $row->celular ?></td>
                <td><?= $row->turno ?></td>
                <td><?= $row->area ?></td>
                <td><?= $row->gestion ?></td>
                <td>
                  <div class="btn-group">
                    <script type="text/javascript">
                      function confirm_delete() {
                        return confirm('are you sure?');
                      }
                    </script>
                    <a href="<?= base_url() ?>pasantes/editar/<?= $row->id_pasante ?>" class="btn btn-warning btn-sm"><i class="fas fa-pen text-white"></i></a>
                    <a href="<?= base_url() ?>pasantes/elimina/<?= $row->id_pasante ?>" onclick="return confirm_delete()" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>

                  </div>
                </td>
              </tr>
            <?php endforeach ?>
          </tbody>

        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
</div>

<!-- ModalAgregar -->
<div class="modal fade" id="modal_agregar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-info">
        <h5 class="modal-title">Agregar Pasante</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php $this->load->view('pasantes/form_pasante'); ?>
      </div>

    </div>
  </div>
</div>