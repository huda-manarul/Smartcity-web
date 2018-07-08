<br>
<div class="container">
  <div class="col-md-8 col-md-offset-2">
    <h2>Form Pengaduan</h2><hr/>
    <form action="<?php echo base_url().'smartcity/tambahpengaduan' ?>" method="post" >
      <select class="form-control " name="jenis">
        <option value="null">pilih bidang pengaduan</option>
      </select>
      <br>
      <input type="text" name="judul" class="form-control" placeholder="Objek Pengaduan" required/><br/>
      <textarea id="ckeditor" name="pengaduan" class="form-control" required></textarea><br/>
      <button class="btn btn-primary btn-lg" type="submit">Kirim</button>
    </form>
  </div>
</div>