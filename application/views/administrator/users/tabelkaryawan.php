<table class="table table-bordered">
  <thead>
    <tr>
      <th>No.</th>
      <th>Kode Karyawan</th>
      <th>Nama Karyawan</th>
      <th>Jenis Kelamin</th>
      <th>Alamat</th>
      <th>HP</th>
    </tr>
  </thead>
  <tbody>
    <?php $no=0; foreach ($datauser->result_array() as $k) { $no++; ?>
    <tr>
      <td><?php echo $no ?></td>
      <td><?php echo $k['kodekaryawan']; ?></td>
      <td><?php echo $k['namakaryawan']; ?></td>
      <td><?php echo $k['jeniskelamin']; ?></td>
      <td><?php echo $k['alamat']; ?></td>
      <td><?php echo $k['hp']; ?></td>
      <td>
        <a href="<?php echo base_url('index.php/administrator/hapustabelkaryawan/'.$k['kodekaryawan'])?>" class="btn btn-danger">
          <span class="fa fa-trash"></span> Hapus
        </a>
      </td>
    </tr>
  </tbody>
  <?php } ?>
</table>
<section>
    <div class="box-footer">
    <a href="<?php echo base_url() ?>index.php/administrator/tambahtabelkaryawan/"><i class="btn btn-success">Tambah</i></a>
    </div>
</section>