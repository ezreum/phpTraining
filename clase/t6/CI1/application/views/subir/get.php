<form action="<?= base_url() ?>Upload/post" method="post" enctype="multipart/form-data">
<label>subir archivo</label>
<input type="hidden" name="MAX_FILE_SIZE" value="3108780" />
<input type="file" name="toUpload" />
<br/>
<input type="submit" value="enviar archivo" name="toUp"/>
</form>