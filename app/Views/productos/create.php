<h2> Guardar Producto</h2>


<?= \Config\Services::validation()->listErrors() ?>

<form action="<?= base_url('productos/guardar') ?>" method="post">
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" required>
    <br><br>
    <label for="descripcion">Descripción:</label>
    <textarea id="descripcion" name="descripcion"></textarea>
    <br><br>
    <label for="precio">Precio:</label>
    <input type="number" id="precio" name="precio" step="0.01" required>
    <br><br>
    <button type="submit">Guardar Producto</button>
</form>