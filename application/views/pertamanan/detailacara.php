<body>
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <?php 
        foreach($user as $u){ 
          ?>
          <h1 class="mt-4"><?php echo $u->nama_acara ?></h1>
          <hr>
          <p><?php echo $u->tanggal ?></p>
          <hr>
          <img class="img-fluid rounded" src="<?php echo base_url().'assets/images/'.$u->gambar_acara ?>" alt="">
          <hr>
          <p class="lead"><?php echo $u->detail_acara ?></p>
          <!-- <hr> -->
          <?php 
        }
        ?>
        <br>
      </div>
    </div>
  </body>


