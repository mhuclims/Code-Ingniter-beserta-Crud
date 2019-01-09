<table class="table table-bordered">
  <thead>
    <tr>
      <th>No.</th>
      <th>ID User</th>
      <th>Fullname</th>
      <th>Username</th>
      <th>Password</th>
      <th>Opsi</th>
    </tr>
  </thead>
  <tbody>
    <?php $no=0; foreach ($datauser->result_array() as $k) { $no++; ?>
    <tr>
      <td><?php echo $no ?></td>
      <td><?php echo $k['id_user']; ?></td>
      <td><?php echo $k['fullname']; ?></td>
      <td><?php echo $k['username']; ?></td>
      <td><?php echo $k['password']; ?></td>
      <td>
        <a href="<?php echo base_url('index.php/administrator/edit/'.$k['id_user']) ?>" class="btn btn-success">
          <span class="fa fa-edit"></span> Edit
        </a>
        <a href="<?php echo base_url('index.php/administrator/hapus/'.$k['id_user'])?>" class="btn btn-danger">
          <span class="fa fa-trash"></span> Hapus
        </a>
      </td>
    </tr>
  </tbody>
  <?php } ?>
</table>