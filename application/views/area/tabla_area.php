<!-- /.row -->

<div class="row">
    <div class="col-2"></div>
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal_agregar">
                    Agregar Area
                </button>
            </div>
            <!-- /.card-header -->
            <div class="card-body text-center">
                <table class="table table-head-fixed text-nowrap table-striped" id="tabla_area">
                    <thead>
                        <tr>
                            <th>N#</th>
                            <th>AREA</th>
                            <th> ACCIONES </th>
                        </tr>
                    </thead>
                    <tbody><?php $i = 1; ?>
                        <?php foreach ($area as $row) : ?>
                            <tr>
                                <td><?= $i++; ?></td>
                                <td><?= $row->area ?></td>
                                <td>
                                    <div class="btn-group">
                                        <a href="<?= base_url() ?>area/editar/<?= $row->id_area ?>" class="btn btn-warning btn-sm"><i class="fas fa-pen text-white"></i></a>
                                        <a href="<?= base_url() ?>area/elimina/<?= $row->id_area ?>" onclick="return confirm(&quot;esta seguro? delete?&quot;)" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>

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
                <h5 class="modal-title">Agregar Area</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php $this->load->view('area/form_area'); ?>
            </div>

        </div>
    </div>
</div>