<form action="<?php echo base_url() ?>index.php/administrator/simpantabelpenyewa" method="post">
	<div class ="form-group">
		<label>Kode Penyewa</label><br>
		<input type="text" name="kodepenyewa" class="form-control" placeholder="Kode Penyewa">
	</div>

	<div class ="form-group">
		<label>Nama Penyewa</label><br>
		<input type="text" name="namapenyewa" class="form-control" placeholder="Nama Penyewa">
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
		<input type="submit" name="simpantabelpenyewa" class="btn btn-primary" value="simpan">
	</div>

</form>