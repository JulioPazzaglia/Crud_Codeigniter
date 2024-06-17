<h2>Listado de Productos</h2>

<a href="<?= base_url('productos/create') ?>">Guardar Producto</a>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Acciones</th>
    </tr>
    <?php foreach ($productos as $producto) : ?>
        <tr>
            <td><?= $producto['id'] ?></td>
            <td><?= $producto['nombre'] ?></td>
            <td><?= $producto['precio'] ?></td>
            <td>
            <a href="<?= base_url('productos/ver/' . $producto['id']) ?>">Ver más</a>
                <a href="<?= base_url('productos/edit/' . $producto['id']) ?>">Editar</a>
                <a href="<?= base_url('productos/delete/' . $producto['id']) ?>">Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
