<div class="container">
  <form action="<?php echo base_url().'perizinan/daftarruang' ?>" method="post" >
    <div class="form-group">
      <label for="nik">NIK</label>
      <input type="text" class="form-control" name="nik">
    </div>
    <div class="form-group">
      <label for="nama">Nama</label>
      <input type="text" class="form-control" name="nama">
    </div>
    <div class="form-group">
      <label for="instansi">Instansi</label>
      <input type="text" class="form-control" name="instansi">
    </div>
    <div class="form-group">
      <label for="tanggal">Tanggal</label>
      <input type="date" class="form-control" name="tanggal">
    </div>
    <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

