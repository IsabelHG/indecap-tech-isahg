<?php

echo '<form action="https://indecaptech.com/db/Adddata.php" method="POST">
    <div class="formulario row">
        <div class="col">
            <label class="visually-hidden" for="inputName">Nombre</label>
            <input type="text" class="form-control" id="inputName" placeholder="Nombre" name="name" required>
        </div>
        <div class="col">
            <label class="visually-hidden" for="inputLastName">Apellido</label>
            <input type="text" class="form-control" id="inputLastName" placeholder="Apellido" name="lastname" required>
        </div>
    </div>
    <div class="formulario">
        <label class="visually-hidden" for="inputEmail">Correo Electrónico</label>
        <input type="text" class="form-control" id="inputEmail" placeholder="Correo Electrónico" name="email" required>
    </div>
    <div class="formulario">
        <label class="visually-hidden" for="inputPhone">Teléfono</label>
        <input type="text" class="form-control" id="inputPhone" placeholder="Teléfono" name="phone" required>
    </div>
    <div class="formulario row">
        <div class="col">
            <label for="inputTypeDoc" class="form-label visually-hidden">Tipo de Documento</label>
            <select class="form-select" required aria-label="select example" id="inputTypeDoc" name="typedoc">
                <option value="">Tipo de Documento</option>
                <option value="TI">T.I.</option>
                <option value="CC">C.C.</option>
                <option value="CE">C.E.</option>
                <option value="PS">P.S.</option>
                <option value="PEP">P.E.P.</option>
            </select>
        </div>
        <div class="col">
            <label class="visually-hidden" for="inputNumDoc">Número de Documento</label>
            <input type="text" class="form-control" id="inputNumDoc" placeholder="Número de Documento" name="numdoc" required>
        </div>
    </div>
    <div class="formulario">
        <label for="inputProgram" class="form-label visually-hidden">Programa de Interés</label>
        <select class="form-select" required aria-label="select example" id="inputProgram" name="program">
            <option value="">Programa de Interés</option>
            <option value="001">Desarrollo de Software</option>
            <option value="002">Telecomunicaciones</option>
            <option value="003">Ciberseguridad</option>
            <option value="004">Marketing Digital</option>
            <option value="005">Animación 2D/3D</option>
        </select>
    </div>
    <div class="form-check terminos">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="conditions" required>
        <label class="form-check-label" for="flexCheckDefault">
            He leído los <a href="../public/views/terminos.php" target="_blank" rel="noopener noreferrer">términos y condiciones</a>
        </label>
    </div>
    <div class="enviar col-auto bg-button">
        <div class="button-animation"></div>
        <button type="submit" class="button-animated btn">ENVIAR</button>
    </div>
</form>';

?>