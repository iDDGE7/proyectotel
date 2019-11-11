<!DOCTYPE html>
<html lang="en">

@include("../components/header")

@php
headerPages('SignIn');
@endphp

<body>
    <div class="wrapper">
        <div class="center-content">
            <div class="container-form">
                <form action="/signin" method="POST">
                {{ csrf_field() }}
                    <div class="field">
                        <label class="label">Nombre</label>
                        <div class="control">
                            <input class="input" type="text" placeholder="Nombre" name="nombre">
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Apellidos</label>
                        <div class="control">
                            <input class="input" type="text" placeholder="Apellidos" name="apellido">
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Direccion</label>
                        <div class="control">
                            <input class="input" type="text" placeholder="Direccion" name="direccion">
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Correo</label>
                        <div class="control">
                            <input class="input" type="text" placeholder="Correo" name="correo">
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Num. Cuenta</label>
                        <div class="control">
                            <input class="input" type="text" placeholder="Num. Cuenta" name="numCuenta">
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Contraseña</label>
                        <div class="control">
                            <input class="input" type="text" placeholder="Text input" name="contraseña">
                        </div>
                    </div>

                    <input type="submit" value="enviar">
                    <!-- <div class="field is-grouped">
                        <div class="control">
                            <button class="button is-link">Submit</button>
                        </div>
                        <div class="control">
                            <button class="button is-link is-light">Cancel</button>
                        </div>
                    </div> -->
                </form>

            </div>
        </div>
    </div>


</body>

</html>