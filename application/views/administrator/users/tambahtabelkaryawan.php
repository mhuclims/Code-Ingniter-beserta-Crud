<form action="<?php echo base_url() ?>index.php/administrator/simpantabelkaryawan" method="post">
	<div class ="form-group">
		<label>Kode Karyawan</label><br>
		<input type="text" name="kodekaryawan" class="form-control" placeholder="Kode Karyawan">
	</div>

	<div class ="form-group">
		<label>Nama Karyawan</label><br>
		<input type="text" name="namakaryawan" class="form-control" placeholder="Nama Karyawan">
	</div>

	<div class ="form-group">
		<label>Jenis Kelamin</label><br>
		<input type="text" name="jeniskelamin" class="form-control" placeholder="Jenis Kelamin">
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
		<input type="submit" name="simpantabelkaryawan" class="btn btn-primary" value="simpan">
	</div>

</form>