<div class="container">
	
	<form action="<?= base_url().'role/anonymous/signInPost'?>" method="POST">
    	
      <label>User nick</label>
      <input type="text" name="nick" id="">
      <br/>
      <label>User password</label>
      <input type="password" name="pwd" id="">
      <br/>
      
      <input type="submit" value="sign in">
</form>

</div>