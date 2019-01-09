<form action="<?php echo base_url() ?>index.php/administrator/simpantabelbuku" method="post">
	<div class ="form-group">
		<label>Kode Buku</label><br>
		<input type="text" name="kodebuku" class="form-control" placeholder="kode buku">
	</div>

	<div class ="form-group">
		<label>Judul Buku</label><br>
		<input type="text" name="judulbuku" class="form-control" placeholder="Judul Buku">
	</div>

	<div class ="form-group">
		<label>Kode Jenis</label><br>
		<select name="kodejenis">
    	<option value="3001"> Fiksi
    	<option value="3002"> Non-Fiksi
   		</select>
	</div>

	<div class ="form-group">
		<label>Pengarang</label><br>
		<input type="text" name="pengarang" class="form-control" placeholder="Pengarang">
	</div>

	<div class ="form-group">
		<input type="submit" name="simpantabelbuku" class="btn btn-primary" value="simpan">
	</div>

</form>