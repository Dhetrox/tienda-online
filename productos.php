<?php include ("templade/cabecera.php");?>
 
<div class="seccion">
<hr class="my-2">
<h2 class="display-3">cremas, aceites</h2>
<hr class="my-2">
</div>


<div class="row">
<div class="col-md-3">
<div class="card mx-4">
    <img class="card-img-top" src="img/baño de crema.png">
    <div class="card-body">
        <h4 class="card-title">baño de crema</h4>
        <form class="product-form" action="config/agre_eli.php" method="post">
        <input type="hidden" name="producto_nombre" value="baño de crema" />
        <input type="hidden" name="producto_precio" value="200" />
        <input type="hidden" name="producto_id" value="1" />
        <input type="submit" value="Agregar al carrito" />
        </form>
    </div>
</div>
</div>



<div class="col-md-3">
<div class="card mx-4">
    <img class="card-img-top" src="img/aseite.png">
    <div class="card-body">
        <h4 class="card-title">Aceite</h4>
        <form class="product-form" action="config/agre_eli.php" method="post">
        <input type="hidden" name="producto_nombre" value="Aceite" />
        <input type="hidden" name="producto_precio" value="200" />
        <input type="hidden" name="producto_id" value="2" />
        <input type="submit" value="Agregar al carrito" />
        </form>
    </div>
</div>
</div>



<div class="col-md-3">
<div class="card mx-4">
    <img class="card-img-top" src="img/shampoo.png">
    <div class="card-body">
        <h4 class="card-title">shampoo</h4>
        <form class="product-form" action="config/agre_eli.php" method="post">
        <input type="hidden" name="producto_nombre" value="Shampoo" />
        <input type="hidden" name="producto_precio" value="200" />
        <input type="hidden" name="producto_id" value="3" />
        <input type="submit" value="Agregar al carrito" />
        </form>
    </div>
</div>
</div>
</div>


<div class="seccion">
<hr class="my-2">
<h2 class="display-3">maquillajes</h2>
<hr class="my-2">
</div>


<div class="row">
<div class="col-md-3">
<div class="card mx-4">
    <img class="card-img-top" src="img/maquillaje.png">
    <div class="card-body">
        <h4 class="card-title">combo de maquillaje</h4>
        <form class="product-form" action="config/agre_eli.php" method="post">
        <input type="hidden" name="producto_nombre" value="combo de maquillaje" />
        <input type="hidden" name="producto_precio" value="200" />
        <input type="hidden" name="producto_id" value="4" />
        <input type="submit" value="Agregar al carrito" />
        </form>
    </div>
</div>
</div>


<div class="col-md-3">
<div class="card mx-4">
    <img class="card-img-top" src="img/pulpito.png">
    <div class="card-body">
        <h4 class="card-title">pilpito</h4>
        <form class="product-form" action="config/agre_eli.php" method="post">
        <input type="hidden" name="producto_nombre" value="pilpito" />
        <input type="hidden" name="producto_precio" value="200" />
        <input type="hidden" name="producto_id" value="5" />
        <input type="submit" value="Agregar al carrito" />
        </form>
    </div>
</div>
</div>



<div class="col-md-3">
<div class="card mx-4">
    <img class="card-img-top" src="img/set de tintura.png">
    <div class="card-body">
        <h4 class="card-title">set de tintura</h4>
        <form class="product-form" action="config/agre_eli.php" method="post">
        <input type="hidden" name="producto_nombre" value="set de tinturaa" />
        <input type="hidden" name="producto_precio" value="200" />
        <input type="hidden" name="producto_id" value="6" />
        <input type="submit" value="Agregar al carrito" />
        </form>
    </div>
</div>
</div>
</div>

<?php include ("templade/pie.php") ?>