<form action="<?= base_url("pasantes/guardar")?>" method="post">
    <div class="form-group">
        <label for="nombre">Cedula</label>
        <input type="text" class="form-control" name="cedula" id="cedula" placeholder="Cedula">
    </div>
    <div class="form-group">
        <label for="nombre">Nombres</label>
        <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre">
    </div>
    <div class="form-group">
        <label for="nombre">Paterno</label>
        <input type="text" class="form-control" name="paterno" id="paterno" placeholder="Paterno">
    </div>
    <div class="form-group">
        <label for="nombre">Materno</label>
        <input type="text" class="form-control" name="materno" id="materno" placeholder="Materno">
    </div>
    <div class="form-group">
        <label for="nombre">Registro Universitario</label>
        <input type="text" class="form-control" name="ru" id="ru" placeholder="Registro Universitario">
    </div>
    <div class="form-group">
        <label for="nombre">Celular</label>
        <input type="text" class="form-control" name="celular" id="celular" placeholder="celular">
    </div>
    <div class="row">

        <div class="col-sm-6">
            <div class="form-group">
                <label>AREA</label>
                <select class="form-control" name="area">
                    <?php foreach ($area as $row): ?>
                        <option value="<?= $row->id_area?>"><?= $row->area?></option>
                    <?php endforeach?>
                </select>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group" name="turno">
                <label>TURNO</label>
                <select class="form-control" name="turno">
                    <?php foreach($turno as $row): ?>
                        <option value="<?= $row->id_turno?>"><?= $row->turno?></option>
                    <?php endforeach ?>
                </select>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label>GESTION</label>
                <select class="form-control" name="gestion">
                    <?php foreach ($gestion as $row): ?>
                        <option value="<?= $row->id_gestion?>"><?= $row->gestion?></option>
                    <?php endforeach?>
                </select>
            </div>
        </div>
    </div>
    <input type="submit" class="btn btn-primary" value="Registrar">
    <button type="submit" class="btn btn-secondary" data-dismiss="modal">Salir</button>

</form>
