<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tienda</title>
</head>
<body>
  <h1> Tienda</h1>

  <h2> Productos</h2>
  <ul>
  <?php foreach ($productos as $producto): ?>
  <li> <?php echo $producto['nombre']; ?> - <?php echo $producto['precio']; ?>  </li>
  <?php endforeach; ?>  
</ul>

  </body>
</html>