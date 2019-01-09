<form action="<?php echo base_url() ?>index.php/administrator/update" method="post">
	<input type="hidden" name="id_user" value="<?php echo $id ?>">
	<div class="form-group">
		<label>Nama Lengkap</label><br>
		<input type="text" name="fullname" class="form-control" placeholder="Nama lengkap" value="<?php echo $fullname ?>">
	</div>
	<div class="form-group">
		<label>Username</label><br>
		<input type="text" name="username" class="form-control" placeholder="Username" value="<?php echo $username ?>">
	</div>

	<div class ="form-group">
		<input type="submit" name="update" class="btn btn-primary" value="Update">
	</div>

</form>