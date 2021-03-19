<div class="container col-6">
    <div class="abs-center">
        <div class="card">
            <div class="card-header bg-info"><h5>Agregar Area</h5></div>
            <div class="card-body">
                <form action="<?= base_url("area/actualizar") ?>" method="post">
                    <div class="form-group">
                        <label for="nombre">Area</label>
                        <input type="text" class="form-control" name="area" id="area" placeholder="Area" value="<?=$area->area?>" required>
                    </div>
                    <input type="hidden" name="id_area" value="<?=$area->id_area?>">
                    <input type="submit" class="btn btn-primary" value="guardar">
                    <input type="submit" class="btn btn-secondary" value="salir">

                </form>
            </div>
        </div>
    </div>
</div>