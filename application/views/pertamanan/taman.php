<!-- Page Content -->
<div class="container">
<?php foreach($user as $u){ ?>
  <!-- Portfolio Item Heading -->
  <h1 class="my-4"><?php echo $u->nama_taman ?>
    <!-- <small>Secondary Text</small> -->
  </h1>
  <p class="text-muted"><i class="glyphicon glyphicon-time"></i><?php echo $u->alamat ?></p>
  <!-- Portfolio Item Row -->
  <div class="row">
    <div class="col-md-8">
      <img class="img-fluid rounded mb-5" src="<?php echo base_url().'assets/images/'.$u->gambar_taman ?>" alt="">
      <!-- <img class="img-fluid" src="http://placehold.it/750x500" alt=""> -->
    </div>
    <div class="col-md-4">
      <!-- <h3 class="my-3">Project Description</h3> -->
      <p class="lead"><?php echo $u->detail_taman; ?></p>
    </div>
  </div>
  <!-- /.row -->
<?php }   ?>
  <!-- Related Projects Row -->
  <?php if ($komen!=NULL) {
    ?>
    <h3 class="my-4">Acara terkait</h3>
    <?php
  } ?>
  
  <div class="row">
    <?php  foreach($komen as $u){ ?>
    <div class="col-md-3 col-sm-6 mb-4">
      <a href="<?php echo base_url()."pertamanan/viewacara/".$u->id_acara; ?>">
        <img class="img-fluid rounded mb-3" src="<?php echo base_url().'assets/images/'.$u->gambar_acara ?>" alt="">
        <!-- <img class="img-fluid" src="http://placehold.it/500x300" alt=""> -->
      </a>
      <h5><?php echo $u->nama_acara ?></h5>
      <p style="font-size: 12px"><?php echo $u->tanggal ?></p>
    </div>
    <?php }   ?>
  </div>
</div>
