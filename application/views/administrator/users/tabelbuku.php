<table class="table table-bordered">
  <thead>
    <tr>
      <th>No.</th>
      <th>Kode Buku</th>
      <th>Judul Buku</th>
      <th>Kode Jenis</th>
      <th>Pengarang</th>
    </tr>
  </thead>
  <tbody>
    <?php $no=0; foreach ($datauser->result_array() as $k) { $no++; ?>
    <tr>
      <td><?php echo $no ?></td>
      <td><?php echo $k['kodebuku']; ?></td>
      <td><?php echo $k['judulbuku']; ?></td>
      <td><?php echo $k['kodejenis']; ?></td>
      <td><?php echo $k['pengarang']; ?></td>
      <td>
        <a href="<?php echo base_url('index.php/administrator/hapustabelbuku/'.$k['kodebuku'])?>" class="btn btn-danger">
          <span class="fa fa-trash"></span> Hapus
        </a>
      </td>
    </tr>
  </tbody>
  <?php } ?>
</table>
<section>
    <div class="box-footer">
    <a href="<?php echo base_url() ?>index.php/administrator/tambahtabelbuku/"><i class="btn btn-success">Tambah</i></a>
    </div>
</section>