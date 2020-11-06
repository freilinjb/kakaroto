<div class="row justify-content-center">
    <div class="col-8">
        <form method="post">
            <label>Pruba</label>
            <div class="form-group">
                <input type="text" class="form-control" name="nombre" required>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="apellido" required>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="apodo" required>
            </div>
            <button type="submit" class="btn btn-primary">Click</button>
            <?php 
                $prueba = PruebaCrack::prueba();
            ?>
        </form>
    </div>
</div>