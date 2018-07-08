<body>
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <?php 
        foreach($user as $u){ 
          ?>
          <h1 class="mt-4"><?php echo $u->judul_berita ?></h1>
          <hr>
          <p><?php echo $u->tanggal_berita ?></p>
          <hr>
          <img class="img-fluid rounded" src="<?php echo base_url().'assets/images/'.$u->gambar_berita ?>" alt="">
          <hr>
          <p class="lead"><?php echo $u->isi_berita ?></p>
          <!-- <hr> -->
          <?php 
        }
        ?>
        <br>
        <h4 class="border-bottom border-gray pb-2 mb-0">Kolom Komentar</h4><br>
        <form action="<?php echo base_url().'pengelolaansampah/komentar' ?>" method="post">
          <div class="input-group mb-3">
            <?php 
            foreach($user as $u){ 
              ?>
              <input type="text" class="form-control" placeholder="Tulis Komentar Anda" name="id" value="<?php echo $u->id_berita ?>" hidden >
              <?php 
            }
            ?>

            <input type="text" name="user" value="<?php echo $this->session->userdata("user_nama"); ?>" hidden="">
            <input type="text" name="iduser" value="<?php echo $this->session->userdata("id_user"); ?>" hidden="">
            <input type="text" class="form-control" placeholder="Tulis Komentar Anda" name="pertanyaan" >
            <div class="input-group-append">
              <button class="btn btn-outline-primary" type="submit">Kirim</button>
            </div>
          </div>
        </form>
        <?php 
        foreach($komen as $u){ 
          ?>
          <div class="media comment-box">
            <div class="media-left">
              <a href="#">
                <img class="img-responsive user-photo" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
              </a>
            </div>
            <div class="media-body">
              <h4 class="media-heading"><?php echo $u->nama?></h4>
              <p><?php echo $u->komentar?></p>
            </div>
          </div>
          <?php 
        }
        ?>
      </div>
    </div>
  </body>
  <style type="text/css">
  .media {
    max-width: 730px;
  }
  /* CSS Test begin */
  .comment-box {
    margin-top: 30px !important;
  }
  /* CSS Test end */

  .comment-box img {
    width: 50px;
    height: 50px;
  }
  .comment-box .media-left {
    padding-right: 10px;
    width: 65px;
  }
  .comment-box .media-body p {
    border: 1px solid #ddd;
    padding: 10px;
  }
  .comment-box .media-body .media p {
    margin-bottom: 0;
    size:10px;
  }
  .comment-box .media-heading {
    background-color: #f5f5f5;
    border: 1px solid #ddd;
    padding: 7px 10px;
    position: relative;
    margin-bottom: -1px;
  }
  .comment-box .media-heading:before {
    content: "";
    width: 12px;
    height: 12px;
    background-color: #f5f5f5;
    border: 1px solid #ddd;
    border-width: 1px 0 0 1px;
    -webkit-transform: rotate(-45deg);
    transform: rotate(-45deg);
    position: absolute;
    top: 10px;
    left: -6px;
  }
</style>


