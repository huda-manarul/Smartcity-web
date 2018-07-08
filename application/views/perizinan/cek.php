<br>
<div class="container">
  <div class="col-md-8 col-md-offset-2">
    <h2>Form Pengaduan</h2><hr/>
    <form action="<?php echo base_url().'perizinan/cekin' ?>" method="post" >
      <select class="form-control " name="jenis">
        <option value="null">pilih bidang perizinan</option>
        <option value="tbl_angkutan">Angkutan</option>
        <option value="tbl_ruang">Ruang terbuka</option>
      </select>
      <br>
      <div class="form-group">
        <label for="nik">NIK</label>
        <input type="text" class="form-control" name="nik">
      </div>
      <button class="btn btn-primary btn-lg" type="submit">Kirim</button>
    </form>
  </div>
</div>