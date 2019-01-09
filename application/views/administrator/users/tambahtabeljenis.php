<form action="<?php echo base_url() ?>index.php/administrator/simpantabeljenis" method="post">
	<div class ="form-group">
		<label>Kode Jenis</label><br>
		<input type="text" name="kodejenis" class="form-control" placeholder="Kode Jenis">
	</div>

	<div class ="form-group">
		<label>Nama Jenis</label><br>
		<input type="text" name="namajenis" class="form-control" placeholder="Nama Jenis">
	</div>

	<div class ="form-group">
		<input type="submit" name="simpantabeljenis" class="btn btn-primary" value="simpan">
	</div>

</form>