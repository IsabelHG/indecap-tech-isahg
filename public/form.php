<?php

echo '<form action="">
    <div class="formulario">
        <label class="visually-hidden" for="inputName">Nombre y Apellido</label>
        <input type="text" class="form-control" id="inputName" placeholder="Nombre y Apellido" name="nombre" required>
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
        <label for="inputProgram" class="form-label visually-hidden">Programa de Interés</label>
        <select class="form-select" aria-label="Default select example" id="inputProgram">
            <option selected>Programa de Interés</option>
            <option value="1">Desarrollo de Software</option>
            <option value="2">Telecomunicaciones</option>
            <option value="3">Ciberseguridad</option>
            <option value="4">Marketing Digital</option>
            <option value="5">Animación 2D/3D</option>
        </select>
    </div>
    <div class="form-check terminos">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
        <label class="form-check-label" for="flexCheckDefault">
            He leído los términos y condiciones
        </label>
    </div>
    <div class="enviar col-auto">
        <button type="submit" class="btn">ENVIAR</button>
    </div>
</form>';

?>