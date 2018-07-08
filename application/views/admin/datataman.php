<div id="container">
  <main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3">
    <div class="container">
      <h2>Informasi Pengelolaan Sampah</h2><br>
      <table class="table table-hover">
        <thead>
          <tr>
            <th>nama taman</th>
            <th>alamat</th>
            <th>detail</th>
            <th><center>Aksi</center></th>
          </tr>
        </thead>
        <?php 
        foreach($user as $u){ 
          ?>
          <tr>
            <td><?php echo $u->nama_taman ?></td>
            <td><?php echo $u->alamat ?></td>
            <td><?php 
            $ringkas = $u->detail_taman;
            $sub_ringkas= substr($ringkas,0,70);
            echo $sub_ringkas." . . ."; 
            ?></td>
            <td>
              <center>
                <a href="<?php echo base_url().'dashboard/tambahtaman' ?>">tulis</a> || <a href="<?php echo base_url()."dashboard/edittaman/".$u->id_taman; ?>">edit</a> || <a href="<?php echo base_url()."dashboard/hapustaman/".$u->id_taman; ?>">hapus</a>
              </center>
            </td>
          </tr>
          <?php } ?>
        </table>
        <div class="row">
          <div class="col">
            <!--Tampilkan pagination-->
            <?php echo $this->pagination->create_links(); ?>
          </div>
        </div>
      </div>
    </main>
  </div>
  <style type="text/css">
  #container{
    margin-top: -450px;
  }
</style>