<?php 
include 'global/config.php';
include 'global/conexion.php';
include 'carrito.php';
include 'templates/cabecera.php'
?>

<?php
if ($_POST) {
    
    $total=0;
    $SID=session_id();
    $Correo=$_POST['email'];

    foreach ($_SESSION['CARRITO'] as $indice => $producto) {
        
        $total=$total+($producto['PRECIO']*$producto['CANTIDAD']);
    }
        $sentencia=$pdo->prepare("INSERT INTO `tblventas` 
                            (`ID`, `ClaveTransaccion`, `PaypalDatos`, `Fecha`, `Correo`, `Total`, `status`) 
        VALUES (NULL, :ClaveTransaccion, '', NOW(), :Correo, :Total, 'pendiente');");

        $sentencia->bindParam(":ClaveTransaccion",$SID);
        $sentencia->bindParam(":Correo",$Correo);
        $sentencia->bindParam(":Total",$total);
        $sentencia->execute();
        $idVenta=$pdo->lastInsertId();

        

   // echo "<h3>".$total."</h3>";
}
?>
<script src="https://www.paypalobjects.com/api/checkout.js"></script>


<style>

    /* Media screen for mobile viewport */
    @media screen and (max-width: 400px) {
        #paypal-button-container{
            width: 100%;
        }
    }

    /* Media screen for desktop viewport */
    @media screen and (min-width: 400px) {
        #paypal-button-container{
            width: 240px;
            display: inline-block;
        }
    }

</style>


<div class="jumbotron text-center">
    <h1 class="display-4">!Paso Final¡</h1> 
    <hr class="my-4">
    <p class="lead"> estas a punto de pagar con paypal la cantidad de:
        <h4>$<?php echo number_format($total,2); ?></h4> 
        <div id="paypal-button-container"></div>   
    </p>
        <p>Los productos podran ser enviados una vez el pago este hecho...</p><br>
        <strong>(Para alguna duda contacte al siguiente correo: kevin1616fernandez@gmail.com)</strong>
</div>

<script>
    paypal.button.render({
        env:'sandbox',
        style: {
            label:'checkout', // checkout | credit | pay | buynow | generic
            size: 'renponsive', // small | medium | large | responsive
            shape: 'pill', // pill | rect
            color: 'gold' // silver
        },

        // PayPal Client IDs - replace with your own
        // Create a PayPal app https://developer.paypal.com/developer/applications/create

        client:{
            sandbox:  'AZDxjDScFpQtjWTOUtWKbyN_bDt4OgqaF4eYXlewfBP4-8aqX3PiV8e1GWU6liB2CUXlkA59kJXE7M6R',
            production: '<insert production client id>'
        },

        //wait for the PayPal button to be clicked

        Payment: function(data, actions) {
            return actions.Payment.create({
                payment: {
                    transactions: [
                        {
                            amount: { total: '<?php echo $total;?>', currency: 'USD'}
                        }
                    ]
                }
            });
            
        },

        //wait for the payment to be autorized by the customer

        onAuthorize: function(data, actions) {
            return actions.payment.execute().then(function() {
                window.alert('Payment completado');
            });
        }

    }, '#paypal--button-container' );


</script>





        




<?php include 'templates/pie.php'?>