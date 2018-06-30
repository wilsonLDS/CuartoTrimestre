<?php include ('templates/head.php');  ?>

		<div class="login-box">
			<img class="avatar" src="http://localhost/webmail/public/images/icon_programador.png">
			<h1>LOGIN</h1>
			<form name="login" method="post" action="http://localhost/webmail/app/Http/Controllers/Auth/AuthController.php">

			<label form="username" >E-MAIL</label>
			<input type="text"  name="correo_log" placeholder="Correo electronico" required>


			<label form="username" >PASSWORD</label>
			<input type="password"  name="pass_log"placeholder="Contraseña"  
			pattern="^(?=.*\d)(?=.*[\u0021-\u002b\u003c-\u0040])(?=.*[A-Z])(?=.*[a-z])\S{8,16}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Debe contener entre 8 y 16 caracteres: (Digitos, minúsculas, mayúsculas y símbolos)' : ''); if(this.checkValidity()) form.confirm_password.pattern = this.value;" required>

									<p>
										<!-- Envio de datos ocultos -->
										<input type="hidden" name="genre" value="<?php echo $genre; ?>">
										<input type="hidden" name="nombre" value="<?php echo $nombre; ?>">
										<input type="hidden" name="correo" value="<?php echo $correo; ?>">
										<input type="hidden" name="password" value="<?php echo $password; ?>">


			<input type="submit" name="btn-login" value="Ingresar" >
			<a href="http://localhost/webmail/views/front/register.php" >Sign Up</a>
									</p>
		</form>
		</div>

