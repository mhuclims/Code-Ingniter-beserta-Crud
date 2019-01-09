<form action="<?php echo base_url() ?>index.php/administrator/simpantabeldistributor" method="post">
	<div class ="form-group">
		<label>ID Toko</label><br>
		<input type="text" name="idtoko" class="form-control" placeholder="Id Toko">
	</div>

	<div class ="form-group">
		<label>Nama Toko</label><br>
		<input type="text" name="namatoko" class="form-control" placeholder="Nama Toko">
	</div>

	<div class ="form-group">
		<label>Alamat</label><br>
		<input type="text" name="alamat" class="form-control" placeholder="Alamat">
	</div>

	<div class ="form-group">
		<label>HP</label><br>
		<input type="text" name="hp" class="form-control" placeholder="nomor handphone">
	</div>

	<div class ="form-group">
		<input type="submit" name="simpantabeldistributor" class="btn btn-primary" value="simpan">
	</div>

</form>