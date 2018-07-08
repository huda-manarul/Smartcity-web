<style type="text/css">
  #container{
    margin-top: -450px;
  }
</style>
<div id="container">
  <main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3">
<div class="container">
  <div class="col-md-8 col-md-offset-2">
    <h2>Form Pengaduan</h2><hr/>
    <form action="<?php echo base_url().'dashboard/ok' ?>" method="post" >
      <?php 
          foreach($user as $u){ 
            ?>
      <input type="text" name="id" value="<?php echo $u->id ?>" hidden=""><br/>
      <input type="text" name="judul" value="<?php echo $u->nik ?>" class="form-control" placeholder="Objek Pengaduan" required/><br/>
      <input type="text" name="judul" value="<?php echo $u->nama ?>" class="form-control" placeholder="Objek Pengaduan" required/><br/>
      <select class="form-control " name="jenis">
        <option value="disetujui">disetujui</option>
        <option value="ditolak">ditolak</option>
      </select>
      <br>
      <textarea id="ckeditor" name="persetujuan" class="form-control" required></textarea><br/>
      <?php 
          }
            ?>
      <button class="btn btn-primary btn-lg" type="submit">Kirim</button>
    </form>
  </div>
</div>
</main>
</div>
