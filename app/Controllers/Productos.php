<?php

namespace App\Controllers;

use App\Models\ProductosModel;

class Productos extends BaseController
{
  public function index()
  {
    // Instanciar el modelo ProductosModel
    $productosModel = new ProductosModel();

    // Obtener todos los productos desde la base de datos
    $productos = $productosModel->findAll();

    // Cargar la vista 'index' y pasarle los datos de los productos
    return view('productos/index', ['productos' => $productos]);
  }

  public function ver($id)
  {
    // Cargar el modelo ProductosModel
    $productosModel = new ProductosModel();

    // Obtener el producto desde la base de datos por su ID
    $producto = $productosModel->find($id);

    // Verificar si el producto existe
    if ($producto === null) {
      // Producto no encontrado, puedes mostrar un error o redireccionar
      return redirect()->to(base_url('productos'))->with('error', 'Producto no encontrado.');
    }

    // Cargar la vista 'ver' y pasar los datos del producto
    return view('productos/ver', ['producto' => $producto]);
  }
  public function create()
  {
    return view('productos/create');
  }
  public function guardar()
  {
    // Obtener los datos del formulario
    $nombre = $this->request->getPost('nombre');
    $descripcion = $this->request->getPost('descripcion');
    $precio = $this->request->getPost('precio');

    // Validar los datos del formulario
    $rules = [
      'nombre' => 'required',
      'precio' => 'required|numeric',
    ];

    if (!$this->validate($rules)) {
      return redirect()->back()->withInput()->with('validation', $this->validator);
    }

    // Guardar el nuevo producto en la base de datos
    $productosModel = new ProductosModel();
    $productoData = [
      'nombre' => $nombre,
      'descripcion' => $descripcion,
      'precio' => $precio,
    ];
    $productosModel->insert($productoData);

    // Redirigir a la lista de productos con un mensaje de éxito
    return redirect()->to(base_url('productos'))->with('success', 'Producto creado correctamente.');
  }
}
