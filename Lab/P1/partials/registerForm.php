<main>
	<h1>GestiÓn de Usuarios </h1>
	<form class="fom_usuario" action="?action=registrar" method="POST">

		<legend>Datos básicos</legend>
		<label for="nombre">Nombre</label>
		<br/>
		<input type="text" name="name" class="item_requerid" size="20" maxlength="25" value="<?php print $name ?>"
		 placeholder="Nombre" />
		<br/>
		<label for="surname">Apellido</label>
		<br/>
		<input type="text" name="surname" class="item_requerid" size="20" maxlength="25" value="<?php print $surname ?>"
		 placeholder="Apellido" />
		<br/>
		<label for="address">Dirección</label>
		<br/>
		<input type="text" name="address" class="item_requerid" size="20" maxlength="25" value="<?php print $address ?>"
		 placeholder="" />
		<br/>
		<label for="city">Ciudad</label>
		<br/>
		<input type="text" name="city" class="item_requerid" size="8" maxlength="25" value="<?php print $city ?>"
		/>
		<br/>
		<label for="zip_code">Código Postal</label>
		<br/>
		<input type="text" name="zip_code" class="item_requerid" size="5" maxlength="5" value="<?php print $zip_code ?>"
		/>
		<br/>
		<label for="foto_file">Archivo fotográfico</label>
		<br/>
		<input type="text" name="foto_file" class="item_requerid" size="8" maxlength="25" value="<?php print $foto_file ?>"
		/>
		<br/>
		<p><input type="submit" value="Enviar">
		<input type="reset" value="Deshacer">
		</p>
	</form>
</main>