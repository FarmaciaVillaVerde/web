<?php 
include 'global/config.php';
include 'global/conexion.php';
include 'carrito.php';
include 'templates/cabecera.php';

?>

        <br>
        <?php if ($mensaje!=""){?>
              
        <div class="alert alert-success">
        <?php echo $mensaje; ?>

            <a href="mostrarCarrito.php" class="badge badge-success"> Ver carrito </a>
        </div>

        <?php }?>

        <!-- Inicio de las cartas de productos --> 
        <div class="row" id="resultado-productos">

        <?php
            $sentencia=$pdo->prepare("SELECT * FROM `tblproductos`");
            $sentencia->execute();
            $listaProducto=$sentencia->fetchAll(PDO::FETCH_ASSOC);
            // print_r($listaProducto);
        ?>

        <?php foreach ($listaProducto as $producto){ ?>


            <div class="col-3"><br>
                <div class="card">


                    <img title="<?php echo $producto['nombre'];?>"
                         alt="<?php echo $producto['nombre'];?>" 
                         class="card-img-top" 
                         src="<?php echo $producto['imagen'];?>"
                         data-toggle="popover"
                         data-trigger="hover"
                         data-content="<?php echo $producto['descripcion'];?>"
                         height="255px"

                    >
                    <div class="card-body">
                        <span> <?php echo $producto['nombre'];?></span>
                        <h5 class="card-title"><?php echo $producto['precio'];?></h5>
                        <p class="card-text">Descripción</p>


                        <form action="" method="post">
                            <input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt($producto['id'],COD,KEY) ;?>">
                            <input type="hidden" name="nombre" id="nombre"value="<?php echo openssl_encrypt( $producto['nombre'],COD,KEY) ;?>">
                            <input type="hidden" name="precio" id="precio"value="<?php echo openssl_encrypt($producto['precio'],COD,KEY) ;?>">
                            <input type="hidden" name="cantidad" id="cantidad"value="<?php echo openssl_encrypt(1,COD,KEY) ;?>">

                        <button class="btn btn-primary" 
                            name="btnAccion" 
                            value="Agregar" 
                            type="submit"
                            > Agregar al carrito 
                        </button>

                        </form>


                    </div>
                </div>
            </div>
        
        <?php }  ?>

        </div>


         

    </div>

    <script>

        $(function () {
        $('[data-toggle="popover"]').popover()
        });

    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
    $(document).ready(function(){
        $('#buscador').on('input', function(){
        var texto = $(this).val();
        $.ajax({
            url: 'buscar.php',
            method: 'POST',
            data: { buscar: texto },
            success: function(respuesta){
            $('#resultado-productos').html(respuesta);
            }
        });
        });
    });
    </script>


<?php
include 'templates/pie.php';
?>