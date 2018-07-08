<div id="container">
  <main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3">
    <div class="container">
      <h2>Informasi Pengelolaan Sampah</h2><br>
      <div style="overflow-y: scroll;">
        <table class="table table-hover">
          <thead>
            <tr>
              <th>judul berita</th>
              <th>tanggal</th>
              <th>Komentar</th>
              <th><center>Aksi</center></th>
            </tr>
          </thead>
          <?php 
          foreach($user as $u){ 
            ?>
            <tr>
              <td><?php echo $u->judul_berita ?></td>
              <td><?php echo $u->tanggal ?></td>
              <td><?php echo $u->komentar; ?></td>
              <td>
                <center>
                   <a href="<?php echo base_url()."dashboard/hapuskomentar/".$u->no; ?>">hapus</a>
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