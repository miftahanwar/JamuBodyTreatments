<?php
?>
<hr><h3 align="center"><b>Our Services</b></h3><hr>
<!-- Booklet Menu Link -->
<div class="row" style="margin-bottom:15px;">
  <div class="col-md-12 text-center">
    <a href="https://drive.google.com/file/d/1jkL6XI-4qyYJywYMNNlopByPrt0DPUjc/view?usp=sharing" target="_blank" class="btn btn-success">
      <i class="fa fa-book"></i> Menu Booklet
    </a>
  </div>
</div>

<!-- Search Bar -->
<div class="row mb-3">
  <div class="col-md-6 col-md-offset-3">
    <input type="text" id="searchLayanan" class="form-control" placeholder="Search Services...">
  </div>
</div>

<div class="row">
  <div class="col-md-8 col-md-offset-2">
    <div class="panel-group" id="layananAccordion">
      <?php $i=0; foreach($layanan_new as $layanan){ $i++; ?>
        <div class="panel panel-default layanan-item" style="margin-bottom:20px; <?php if($i>4){echo 'display:none;';} ?>">
          <div class="panel-heading" style="cursor:pointer; display:flex; align-items:center;">
            <div style="flex-shrink:0;">
              <?php
              if(empty($layanan->foto)) {
                echo "<img class='img-responsive' style='width:60px;height:60px;object-fit:cover;border-radius:18px/16px;box-shadow:0 2px 8px rgba(0,0,0,0.04);margin-right:15px;' src='".base_url()."assets/images/no_image_thumb.png'>";
              } else {
                echo "<img class='img-responsive' style='width:60px;height:60px;object-fit:cover;border-radius:18px/16px;box-shadow:0 2px 8px rgba(0,0,0,0.04);margin-right:15px;' src='".base_url()."assets/images/layanan/".$layanan->foto."'>";
              }
              ?>
            </div>
            <div style="flex-grow:1;">
              <b><?php echo $layanan->nama_layanan ?></b>
            </div>
            <div>
              <a href="<?php echo base_url('cart/buy/').$layanan->id_layanan ?>" class="booking-link">
                <button class="btn btn-sm btn-primary"><i class="fa fa-shopping-cart"></i> Booking Sekarang!</button>
              </a>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
</div>

<script>
// Search filter
var layananItems = Array.from(document.querySelectorAll('.layanan-item'));
document.getElementById('searchLayanan').addEventListener('keyup', function() {
  var filter = this.value.toLowerCase();
  layananItems.forEach(function(item,i) {
    var text = item.innerText.toLowerCase();
    if(filter && text.indexOf(filter) === -1){
      item.style.display = 'none';
    }else if(filter){
      item.style.display = '';
    }else{
      item.style.display = (i<4)?'':'';
    }
  });
});

// Enable booking button only after layanan diklik
// Bagian script ini bisa dihapus karena tombol selalu aktif
</script>
