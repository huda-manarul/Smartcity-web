<!-- Page Content -->
<div class="container">

  <div class="row">
    <!-- Blog Entries Column -->
    <div class="col-md-8">
      <h1 class="my-4">Page Heading
        <small>Secondary Text</small>
      </h1>

      <?php 
      foreach($user as $u){ ?>
      <!-- Blog Post -->
      <div class="card mb-4">
        <img class="card-img-top" src="<?php echo base_url().'assets/images/'.$u->gambar_berita ?>" alt="Card image cap">
        <div class="card-body">
          <h2 class="card-title"><?php echo $u->judul_berita ?></h2>
          <p class="card-text"><?php 
          $ringkas = $u->isi_berita;
          $sub_ringkas= substr($ringkas,0,160);
          echo $sub_ringkas." . . ."; 
          ?>
        </p>
        <a href="<?php echo base_url()."pengelolaansampah/viewberita/".$u->id_berita; ?>" class="btn btn-primary">Read More</a>
      </div>
      <div class="card-footer text-muted">
        <?php echo $u->tanggal_berita ?>
        <!-- <a href="#">Start Bootstrap</a> -->
      </div>
    </div>
    <?php } ?>

    <!-- Pagination -->
    <br>
    <div class="row">
      <div class="col">
        <?php echo $this->pagination->create_links(); ?>
      </div>
    </div>

  </div>

  <!-- Sidebar Widgets Column -->
  <div class="col-md-4">
    <!-- Side Widget -->
    <div class="card my-4">
      <h5 class="card-header">Side Widget</h5>
      <div class="card-body">
        You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
      </div>
    </div>

  </div>

</div>
<!-- /.row -->

</div>
<!-- /.container -->
