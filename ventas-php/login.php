<?php
include_once "encabezado.php";
?>
<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="row shadow-lg" style="width: 100%; max-width: 900px;">
        <div class="col-md-6 d-none d-md-block p-0">
            <img src="logoS.png" class="img-fluid h-100" style="object-fit: cover;" />
        </div>
        <div class="col-md-6 bg-white p-5 d-flex flex-column justify-content-center">
            <h3 class="pb-3 text-center">Iniciar sesión</h3>
            <div>
                <form action="iniciar_sesion.php" method="post">
                    <div class="form-group pb-3">
                        <input type="text" placeholder="Usuario" class="form-control" name="usuario" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group pb-3">
                        <input type="password" placeholder="Contraseña" class="form-control" name="password" id="exampleInputPassword1">
                    </div>

                    <div class="pb-2">
                        <button type="submit" name="ingresar" class="btn btn-dark w-100 font-weight-bold mt-2">Ingresar</button>
                    </div>
                </form>
             </div>
        </div>
    </div>
</div>