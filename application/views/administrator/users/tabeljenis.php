<table class="table table-bordered">
  <thead>
    <tr>
      <th>No.</th>
      <th>Kode Jenis</th>
      <th>Nama Jenis</th>
    </tr>
  </thead>
  <tbody>
    <?php $no=0; foreach ($datauser->result_array() as $k) { $no++; ?>
    <tr>
      <td><?php echo $no ?></td>
      <td><?php echo $k['kodejenis']; ?></td>
      <td><?php echo $k['namajenis']; ?></td>
      <td>
        <a href="<?php echo base_url('index.php/administrator/hapustabeljenis/'.$k['kodejenis'])?>" class="btn btn-danger">
          <span class="fa fa-trash"></span> Hapus
        </a>
      </td>
    </tr>
  </tbody>
  <?php } ?>
</table>
<section>
    <div class="box-footer">
    <a href="<?php echo base_url() ?>index.php/administrator/tambahtabeljenis/"><i class="btn btn-success">Tambah</i></a>
    </div>
</section>