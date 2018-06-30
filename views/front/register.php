<?php include ('templates/head.php'); ?>

<div class="login-reg">
	<img class="avatar" src="../../public/images/icon_reg_programador.png">
	<h1>REGISTRO</h1>
	<form name="register" method="post" action="http://localhost/webmail/app/Http/Controllers/registroController.php">
		<label form="username" >NOMBRE COMPLETO</label>
			<input type="text" id="nombre" name="nombre" placeholder="Nombre Completo" required>
		<center>

		<select name="genre" require style="color: #0004FF;">
			<option value="genero" selected>Genero</option>
			<option value="hombre">Hombre</option>
			<option value="mujer">Mujer</option>
	    </select>
	    </center>
		<label form="username">E-MAIL</label>

			<input type="text" name="correo" id="correo" placeholder="Correo Electronico" required>

    	<label form="username" >PASSWORD</label>

			<input type="password" name="password" id="password" placeholder="Contraseña"  
			pattern="^(?=.*\d)(?=.*[\u0021-\u002b\u003c-\u0040])(?=.*[A-Z])(?=.*[a-z])\S{8,16}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Debe contener entre 8 y 16 caracteres: (Digitos, minúsculas, mayúsculas y símbolos)' : ''); if(this.checkValidity()) form.confirm_password.pattern = this.value;" required>

		<label form="username" >CONFIRMAR  PASSWORD</label>

			<input type="password" name="conf_pass" placeholder="Confirma tu contraseña" pattern="^(?=.*\d)(?=.*[\u0021-\u002b\u003c-\u0040])(?=.*[A-Z])(?=.*[a-z])\S{8,16}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Por favor, ingresa la misma contraseña de arriba' : '');" required>

			<input type="submit" name="btn-register" value="Registrar usuario">

	<a href="http://localhost/webmail">Log In</a>

</form>
</div>
