<main>
	<h1>Datos de registro: </h1>
	<form class="form_usuario" action="?action=registrar_usuario" method="POST">

		<legend>Datos básicos</legend>
		<label for="name">Nombre</label>
		<br/>
		<input type="text" name="name" class="item_requerid" size="20" maxlength="25" value=""
		 placeholder="Miguel Cervantes" />
		<br/>
		<label for="address">Dirección</label>
		<br/>
		<input type="text" name="email" class="item_requerid" size="20" maxlength="25" value=""
		 placeholder="kiko@ic.es" />
		<br/>
		<label for="city">Ciudad</label>
		<br/>
		<input type="password" name="passwd" class="item_requerid" size="8" maxlength="25" value=""
		/>
		<br/>
		<p><input type="submit" value="Enviar">
		<input type="reset" value="Deshacer">
		</p>
	</form>
</main>