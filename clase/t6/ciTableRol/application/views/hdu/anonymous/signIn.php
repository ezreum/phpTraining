<div class="container">
<h1>Bienvenido a PAP</h1>
<h2>Si tienes cuenta, completa los campos acontinuación</h2>

<form class="form" action="<?=base_url() ?>hdu/anonymous/signInPost" method="post">

<label>nick</label>
<input type="text" name="nick" >
<br/>
<label>contraseña</label>
<input type="password" name="pwd" >
<br/>
<input type="submit" value="validar"/>
</form>

</div>