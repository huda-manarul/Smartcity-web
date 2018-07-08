<div class="container">
  <form action="<?php echo base_url().'smartcity/prosesdaftar' ?>" method="post" >
    <div class="form-group">
      <label for="nim">NIK:</label>
      <input type="text" class="form-control" name="nik">
    </div>
    <div class="form-group">
      <label for="nama">Nama:</label>
      <input type="text" class="form-control" name="nama">
    </div>
    <div class="form-group">
      <label for="alamat">Alamat:</label>
      <input type="text" class="form-control" name="alamat">
    </div>
    <div class="form-group">
      <label for="hp">No Hp</label>
      <input type="text" class="form-control" name="hp">
    </div>
    <div class="form-group">
      <label>username:</label>
      <input type="text" class="form-control" name="user">
    </div>
    <div class="form-group">
      <label>password:</label>
      <input type="text" class="form-control" name="password">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>