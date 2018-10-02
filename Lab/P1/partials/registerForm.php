<main>
	<h1>GestiÓn de Usuarios </h1>
	<form class="fom_usuario" action="?action=registrar" method="POST">

		<legend>Datos básicos</legend>
		<br>
		<label for="nombre">Nombre</label>
		<br/>
		<input type="text" name="userName" class="item_requerid" size="20" maxlength="25" value="<?php print $userName ?>"
		 placeholder="Miguel" />
		<br>
		<label for="apellido">Apellidos</label>
		<br/>
		<input type="text" name="apellido" class="item_requerid" size="20" maxlength="25" value="<?php print $apellido ?>"
		 placeholder="Cervantes" />
		<br/>
			<label for="dni">dni</label>
		<br/>
		<input type="text" name="dni" class="item_requerid" size="20" maxlength="25" value="<?php print $dni ?>"
		 placeholder="12345678X" />
		<br/>
		<label for="email">Email</label>
		<br/>
		<input type="text" name="email" class="item_requerid" size="20" maxlength="25" value="<?php print $email ?>"
		 placeholder="kiko@ic.es" />
		<br/>
		<label for="passwd">Clave</label>
		<br/>
		<input type="password" name="passwd" class="item_requerid" size="8" maxlength="25" value="<?php print $passwd ?>"
		/>
		<br/>
		<label for="foto_file">foto</label>
		<br/>
		<input type="text" name="foto_file" class="item_requerid" size="20" maxlength="25" value="<?php print $foto_file ?>" 
		 />
		<br/>
		<br>
		<input type="submit" value="Enviar">
		<input type="reset" value="Deshacer">
	</form>
</main>