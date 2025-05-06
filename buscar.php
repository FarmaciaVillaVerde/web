<?php
include 'global/config.php';
include 'global/conexion.php';

$busqueda = isset($_POST['buscar']) ? trim($_POST['buscar']) : '';

$sentencia = $pdo->prepare("SELECT * FROM tblproductos WHERE nombre LIKE :buscar OR descripcion LIKE :buscar");
$sentencia->bindValue(':buscar', '%' . $busqueda . '%');
$sentencia->execute();
$resultados = $sentencia->fetchAll(PDO::FETCH_ASSOC);

foreach ($resultados as $producto) { ?>
  <div class="col-3">
    <div class="card">
      <img title="<?php echo $producto['nombre']; ?>"
           alt="<?php echo $producto['nombre']; ?>" 
           class="card-img-top" 
           src="<?php echo $producto['imagen']; ?>"
           data-toggle="popover"
           data-trigger="hover"
           data-content="<?php echo $producto['descripcion']; ?>"
           height="255px">
      <div class="card-body">
        <span><?php echo $producto['nombre']; ?></span>
        <h5 class="card-title"><?php echo $producto['precio']; ?></h5>
        <p class="card-text">Descripción</p>
        <form action="" method="post">
          <input type="hidden" name="id" value="<?php echo openssl_encrypt($producto['id'], COD, KEY); ?>">
          <input type="hidden" name="nombre" value="<?php echo openssl_encrypt($producto['nombre'], COD, KEY); ?>">
          <input type="hidden" name="precio" value="<?php echo openssl_encrypt($producto['precio'], COD, KEY); ?>">
          <input type="hidden" name="cantidad" value="<?php echo openssl_encrypt(1, COD, KEY); ?>">
          <button class="btn btn-primary" name="btnAccion" value="Agregar" type="submit">
            Agregar al carrito
          </button>
        </form>
      </div>
    </div>
  </div>
<?php } ?>
