<h2>Detalles del Producto</h2>

<p><strong>ID:</strong> <?= $producto['id'] ?></p>
<p><strong>Nombre:</strong> <?= $producto['nombre'] ?></p>
<p><strong>Descripción:</strong> <?= $producto['descripcion'] ?></p>
<p><strong>Precio:</strong> <?= $producto['precio'] ?></p>

<a href="<?= base_url('productos/edit/' . $producto['id']) ?>">Editar</a>
<a href="<?= base_url('productos/delete/' . $producto['id']) ?>">Eliminar</a>
