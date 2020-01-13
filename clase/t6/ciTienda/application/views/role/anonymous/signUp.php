<div class="container">
	
	<form action="<?= base_url().'role/anonymous/signUpPost'?>" enctype="multipart/form-data" method="POST">
    	<label>User name</label>
      <input type="text" name="name" id="">
      <br/>
      <label>User nick (it must be unique)</label>
      <input type="text" name="nick" id="">
      <br/>
      <label>User password</label>
      <input type="password" name="pwd" id="">
      <br/>
      <label>User password repeat</label>
      <input type="password" name="pwdCheck" id="">
      <br/>
      <label>Profile pic</label>
      <input type="file" name="pic" id="">
      <br/>
      <label>Country where he/she resides</label>
      <select name="country" id="">
    	<?php foreach ($countries as $country):?>
    	<option value="<?= $country->id?>"><?= $country->name?></option>
    	<?php endforeach;?>
      </select>
      <br/>
      <input type="submit" value="create user">
</form>

</div>