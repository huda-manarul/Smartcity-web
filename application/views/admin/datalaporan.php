<div id="container">
  <main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3">
    <div class="container">
      <h2></h2><br>
      <div style="overflow-y: scroll;">
        <table class="table table-hover">
          <thead>
            <tr>
              <th>nama taman</th>
              <th>judul laporan</th>
              <th>laporan</th>
              <th>tanggal</th>
              <th><center>Aksi</center></th>
            </tr>
          </thead>
          <?php 
          foreach($user as $u){ 
            ?>
            <tr>
              <td><?php echo $u->nama_taman ?></td>
              <td><?php echo $u->obj_lap ?></td>
              <td><?php echo $u->detail_lapporan; ?></td>
              <td><?php echo $u->tanggal; ?></td>
              <td>
                <center>
                   <a href="<?php echo base_url()."dashboard/hapuslaporan/".$u->id_laporan; ?>">hapus</a>
                </center>
              </td>
            </tr>
            <?php } ?>
          </table>
        </div>
      </div>
    </main>
  </div>
  <style type="text/css">
  #container{
    margin-top: -450px;
  }
</style>