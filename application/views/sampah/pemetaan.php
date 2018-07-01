<br>
<div class="container">
  <center>
    <h4>Pemetaan lokasi</h4>
  </center>
  <br>
  <?php 
  foreach($user as $u){ 
    ?>
    <div class="card">
      <div class="card-header" id="<?php echo $u->id_berita ?>">
        <h5 class="mb-0">
          <button class="btn btn-link" data-toggle="collapse" data-target="#<?php echo "collapse".$u->id_berita; ?>" aria-expanded="true" aria-controls="<?php echo "collapse".$u->id_berita; ?>">
            <?php echo $u->judul_berita; ?>
          </button>
        </h5>
      </div>

      <div id="<?php echo "collapse".$u->id_berita; ?>" class="collapse" aria-labelledby="<?php echo $u->id_berita ?>" data-parent="#accordion">
        <div class="card-body">
          <p>
            <?php echo $u->isi_berita; ?>
          </p>
        </div>
      </div>
    </div>
    <br>
    <?php
  }
  ?>
</div>