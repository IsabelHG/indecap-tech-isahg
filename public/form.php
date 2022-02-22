<?php

echo '<form action="../db/Adddata.php" method="POST">
    <div class="formulario">
        <label class="visually-hidden" for="inputName">Nombre y Apellido</label>
        <input type="text" class="form-control" id="inputName" placeholder="Nombre y Apellido" name="name" required>
    </div>
    <div class="formulario">
        <label class="visually-hidden" for="inputEmail">Correo Electrónico</label>
        <input type="text" class="form-control" id="inputEmail" placeholder="Correo Electrónico" name="email" required>
    </div>
    <div class="formulario">
        <label class="visually-hidden" for="inputPhone">Teléfono</label>
        <input type="text" class="form-control" id="inputPhone" placeholder="Teléfono" name="phone" required>
    </div>
    <div class="formulario">
        <label for="" class="">Tipo de Documento</label>
        <select class="form-select" aria-label="Default select example" id="inputProgram" name="typedoc">
            <option selected>CC</option>
            <option value="TI">Desarrollo de Software</option>
            <option value="CC">Telecomunicaciones</option>
            <option value="CE">Ciberseguridad</option>
            <option value="PS">Marketing Digital</option>
            <option value="PEP">Animación 2D/3D</option>
        </select>
    </div>
    <div class="formulario">
        <label for="inputProgram" class="form-label visually-hidden">Programa de Interés</label>
        <select class="form-select" aria-label="Default select example" id="inputProgram" name="program">
            <option selected>Programa de Interés</option>
            <option value="Desarrollo de Software">Desarrollo de Software</option>
            <option value="Telecomunicaciones">Telecomunicaciones</option>
            <option value="Ciberseguridad">Ciberseguridad</option>
            <option value="Marketing Digital">Marketing Digital</option>
            <option value="Animación 2D/3D">Animación 2D/3D</option>
        </select>
    </div>
    <div class="form-check terminos">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="conditions">
        <label class="form-check-label" for="flexCheckDefault">
            He leído los términos y condiciones
        </label>
    </div>
    <div class="enviar col-auto">
        <button type="submit" class="btn">ENVIAR</button>
    </div>
</form>';

?>