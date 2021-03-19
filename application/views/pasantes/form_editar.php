<div class="container col-4">
    <div class="abs-center">
        <div class="card">
            <div class="card-header bg-info"><h5>tutlo</h5></div>
            <div class="card-body">
                <form action="<?= base_url("pasantes/actualizar") ?>" method="post" >
                    <div class="form-group">
                        <label for="nombre">Cedula</label>
                        <input type="text" class="form-control" name="cedula" id="cedula" placeholder="Cedula" value="<?=$pasante->cedula?>" required>
                    </div>
                    <div class="form-group">
                        <label for="nombre">Nombres</label>
                        <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre" value="<?=$pasante->nombre?>" required>
                    </div>
                    <div class="form-group">
                        <label for="nombre">Paterno</label>
                        <input type="text" class="form-control" name="paterno" id="paterno" placeholder="Paterno" value="<?=$pasante->paterno?>" required>
                    </div>
                    <div class="form-group">
                        <label for="nombre">Materno</label>
                        <input type="text" class="form-control" name="materno" id="materno" placeholder="Materno" value="<?=$pasante->materno?>" required>
                    </div>
                    <div class="form-group">
                        <label for="nombre">Registro Universitario</label>
                        <input type="text" class="form-control" name="ru" id="ru" placeholder="Registro Universitario" value="<?=$pasante->ru?>"required>
                    </div>
                    <div class="form-group">
                        <label for="nombre">Celular</label>
                        <input type="text" class="form-control" name="celular" id="celular" placeholder="celular" value="<?=$pasante->celular?>" required>
                    </div>
                    <div class="row">

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>AREA</label>
                                <select class="form-control" name="area" >
                                    <?php foreach ($area as $row) : ?>
                                        <option value="<?= $row->id_area ?>" <?=$pasante->id_area_fk== $row->id_area? 'selected':'' ?> ><?= $row->area ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group" name="turno">
                                <label>TURNO</label>
                                <select class="form-control" name="turno" >
                                    <?php foreach ($turno as $row) : ?>
                                        <option value="<?= $row->id_turno ?>" <?=$pasante->id_turno_fk== $row->id_turno? 'selected':'' ?>><?= $row->turno ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>GESTION</label>
                                <select class="form-control" name="gestion" >
                                    <?php foreach ($gestion as $row) : ?>
                                        <option value="<?= $row->id_gestion ?>" <?=$pasante->id_gestion_fk== $row->id_gestion? 'selected':'' ?> > <?= $row->gestion ?> </option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="id_pasante" value="<?=$pasante->id_pasante?>">
                    <input type="submit" class="btn btn-primary" value="guardar">
                    <input type="submit" class="btn btn-primary" value="salir">

                </form>
            </div>
        </div>
    </div>
</div>