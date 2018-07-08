<div class="container">
  <div class="row">
     <?php 
      foreach($user as $u){ ?>
    <div class="col-sm-4 my-4">
      <div class="card">
        <img class="card-img-top" src="<?php echo base_url().'assets/images/'.$u->gambar_taman ?>" alt=""><!-- http://placehold.it/300x200" -->
        <div class="card-body">
          <h4 class="card-title"><?php echo $u->nama_taman ?></h4>
          <p class="card-text"><?php 
          $ringkas = $u->detail_taman;
          $sub_ringkas= substr($ringkas,0,100);
          echo $sub_ringkas." . . ."; 
          ?></p>
        </div>
        <div class="card-footer">
          <a href="<?php echo base_url()."pertamanan/viewtaman/".$u->id_taman; ?>" class="btn btn-primary">Baca Lebih Lanjut</a>
        </div>
      </div>
    </div>
     <?php } ?>
  </div>
  <div class="row">
      <div class="col">
        <?php echo $this->pagination->create_links(); ?>
      </div>
    </div>
</div>
<style type="text/css">
  .card-img-top{
    width:349px;
    height: 200px; /* you can use % */
    /*height: auto;*/
}
</style>