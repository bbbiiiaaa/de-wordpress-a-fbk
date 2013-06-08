<?php 
	if(isset($_POST['app_id'])){
		if( $_POST['app_id'] == ''){ delete_option( 'cltvo_fbk_app_id' ); }
		else{ update_option( 'cltvo_fbk_app_id', $_POST['app_id'] ); }
	}
	$app_id = get_option('cltvo_fbk_app_id');

?>

<h1>Configuración de los comentarios de Facebok</h1>

<form action="" method="post">
	<p>
		<label>Escribe el ID de tu app de Facebook. </label>
		<small><a href="https://developers.facebook.com/docs/opengraph/getting-started/#create-app" target="_blank">Cómo crear un app de Facebook</a></small>
	</p>
		<input type="text" name="app_id" value="<?php echo $app_id; ?>" /><br />
		
	<p><input type="submit" value="Guardar" class="button button-primary button-large" /></p>
</form>