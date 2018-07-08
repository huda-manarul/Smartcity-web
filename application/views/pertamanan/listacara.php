<div class="container">
    <div class="page-header">
        <h1 id="timeline">Timeline</h1>
    </div>
    <ul class="timeline">
        <?php foreach($user as $u){ ?>
        <?php if ($u->id_acara%2==0) {  ?>        
        <li>
          <div class="timeline-badge danger"><i class="glyphicon glyphicon-check"></i></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title"><?php echo $u->nama_acara ?></h4>
              <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i><?php echo $u->tanggal ?></small></p>
          </div>
          <div class="timeline-body">
              <p><?php 
          $ringkas = $u->detail_acara;
          $sub_ringkas= substr($ringkas,0,150);
          echo $sub_ringkas." . . ."; 
          ?></p>
          </div>
          <br>
          <a href="<?php echo base_url()."pertamanan/viewacara/".$u->id_acara; ?>" class="btn btn-primary">Baca Lebih Lanjut</a>
      </div>
  </li>
 <?php }  else {?>
  <li class="timeline-inverted">
    <div class="timeline-badge info"><i class="glyphicon glyphicon-credit-card"></i></div>
    <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title"><?php echo $u->nama_acara ?></h4>
          <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i><?php echo $u->tanggal ?></small></p>
      </div>
      <div class="timeline-body">
          <p><?php 
          $ringkas = $u->detail_acara;
          $sub_ringkas= substr($ringkas,0,180);
          echo $sub_ringkas." . . ."; 
          ?></p>
      </div>
      <br>
      <a href="<?php echo base_url()."pertamanan/viewacara/".$u->id_acara; ?>" class="btn btn-primary">Baca Lebih Lanjut</a>
  </div>
</li>
<?php }?>
<?php } ?>
</ul>
</div>
<style type="text/css">
.timeline {
  list-style: none;
  padding: 20px 0 20px;
  position: relative;
}
.timeline:before {
  top: 0;
  bottom: 0;
  position: absolute;
  content: " ";
  width: 3px;
  background-color: #eeeeee;
  left: 50%;
  margin-left: -1.5px;
}
.timeline > li {
  margin-bottom: 20px;
  position: relative;
}
.timeline > li:before,
.timeline > li:after {
  content: " ";
  display: table;
}
.timeline > li:after {
  clear: both;
}
.timeline > li:before,
.timeline > li:after {
  content: " ";
  display: table;
}
.timeline > li:after {
  clear: both;
}
.timeline > li > .timeline-panel {
  width: 50%;
  float: left;
  border: 1px solid #d4d4d4;
  border-radius: 2px;
  padding: 20px;
  position: relative;
  -webkit-box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175);
  box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175);
}
.timeline > li.timeline-inverted + li:not(.timeline-inverted),
.timeline > li:not(.timeline-inverted) + li.timeline-inverted {
    margin-top: -60px;
}

.timeline > li:not(.timeline-inverted) {
    padding-right:90px;
}

.timeline > li.timeline-inverted {
    padding-left:90px;
}
.timeline > li > .timeline-panel:before {
  position: absolute;
  top: 26px;
  right: -15px;
  display: inline-block;
  border-top: 15px solid transparent;
  border-left: 15px solid #ccc;
  border-right: 0 solid #ccc;
  border-bottom: 15px solid transparent;
  content: " ";
}
.timeline > li > .timeline-panel:after {
  position: absolute;
  top: 27px;
  right: -14px;
  display: inline-block;
  border-top: 14px solid transparent;
  border-left: 14px solid #fff;
  border-right: 0 solid #fff;
  border-bottom: 14px solid transparent;
  content: " ";
}
.timeline > li > .timeline-badge {
  color: #fff;
  width: 50px;
  height: 50px;
  line-height: 50px;
  font-size: 1.4em;
  text-align: center;
  position: absolute;
  top: 16px;
  left: 50%;
  margin-left: -25px;
  background-color: #999999;
  z-index: 100;
  border-top-right-radius: 50%;
  border-top-left-radius: 50%;
  border-bottom-right-radius: 50%;
  border-bottom-left-radius: 50%;
}
.timeline > li.timeline-inverted > .timeline-panel {
  float: right;
}
.timeline > li.timeline-inverted > .timeline-panel:before {
  border-left-width: 0;
  border-right-width: 15px;
  left: -15px;
  right: auto;
}
.timeline > li.timeline-inverted > .timeline-panel:after {
  border-left-width: 0;
  border-right-width: 14px;
  left: -14px;
  right: auto;
}
.timeline-badge.primary {
  background-color: #2e6da4 !important;
}
.timeline-badge.success {
  background-color: #3f903f !important;
}
.timeline-badge.warning {
  background-color: #f0ad4e !important;
}
.timeline-badge.danger {
  background-color: #d9534f !important;
}
.timeline-badge.info {
  background-color: #5bc0de !important;
}
.timeline-title {
  margin-top: 0;
  color: inherit;
}
.timeline-body > p,
.timeline-body > ul {
  margin-bottom: 0;
}
.timeline-body > p + p {
  margin-top: 5px;
}
</style>