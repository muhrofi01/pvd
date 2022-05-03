<?= $this->extend('dashboard/layout/main') ?>

<?= $this->Section('css') ?>
<link rel="stylesheet" href="<?= base_url('assets/dist/css/peta/leaflet.css') ?>">
<link rel="stylesheet" href="<?= base_url('assets/dist/css/peta/qgis2web.css') ?>">
<link rel="stylesheet" href="<?= base_url('assets/dist/css/peta/fontawesome-all.min.css') ?>">
<style>
    #dropdown h1 {
      font-size: 1.5em;
    }
    #dropdown-riset h1::selection {
      color: rgb(0, 75, 60);
    }
    #dropdown-riset:hover {
      cursor: pointer;
    }
    .container-fluid > .nav-pills > .nav-item > .nav-link.active{
        width: 289.08px;
        height: 50px;
        background-color: #0A5446;
        border-radius: 20px 20px 0px 0px;
        border: none;
        font-size: 20px;
        color: #FFFFFF; 
        font-weight:bold;
    }
    .tab-content{
        width: 98%;
        margin-top: -16px;
        margin-left: 8px;
        padding: 15px;
        background: #FFFFFF;
        border-radius: 0px 8px 8px 8px;
    }
    .container-fluid > .nav-pills > .nav-item > .nav-link{
        width: 289.08px;
        height: 50px;
        background: #FFFFFF;
        border-radius: 10px 10px 0px 0px;
        border: none;
        font-size: 20px;
        color: #0A5446; 
        font-weight:bold;
    }
    .dropdown button.btn {
        width: 289.08px;
        height: 50px;
        background: #0A5446;
        border-radius: 10px 10px 0px 0px;
        border: none;
        font-size: 20px;
        color: #ffffff; 
        font-weight:bold;
    }
    #map {
      border: 5px solid #0A5446;
    }
  </style>
  
<?= $this->endSection() ?>

<?= $this->Section('content') ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid pl-4" style="color: rgb(0, 75, 60);">
        <div class="row mb-2 baris-judul-riset">
          <div class="col-sm-10">
            <h3 class="judul-riset">Pemetaan Klasifikasi dan Alih Fungsi Lahan Pertanian dengan Citra Satelit</h3>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content pl-4">
      <div class="container-fluid">
        <div class="d-flex">
          <div class="dropdown">
            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
              Tujuan 2
            </button>
            <div class="dropdown-menu" style="z-index: 10000000;" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item <?= ($peta['id'] == 5 || !isset($peta['nama'])) ? 'active' : '' ; ?>" href="/riset2/dashboard/peta1/5">Peta Klasifikasi Tutupan Lahan Bandung Barat</a>
              <a class="dropdown-item" href="#">Peta Klasifikasi Tutupan Lahan Purwakarta</a>
            </div>
          </div>
          <div class="dropdown">
            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
              Tujuan 3
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item <?= $peta['id'] == 1 ? 'active' : '' ; ?>" href="/riset2/dashboard/peta1/1">Peta Umum Perubahan Lahan Bandung Barat</a>
              <a class="dropdown-item <?= $peta['id'] == 2 ? 'active' : '' ; ?>" href="/riset2/dashboard/peta1/2">Peta Umum Perubahan Lahan Purwakarta</a>
              <a class="dropdown-item <?= $peta['id'] == 3 ? 'active' : '' ; ?>" href="/riset2/dashboard/peta1/3">Peta Khusus Perubahan Lahan Bandung Barat</a>
              <a class="dropdown-item <?= $peta['id'] == 4 ? 'active' : '' ; ?>" href="/riset2/dashboard/peta1/4">Peta Khusus Perubahan Lahan Purwakarta</a>
              <a class="dropdown-item" href="#">Peta Laju Alih Fungsi Lahan Bandung Barat</a>
              <a class="dropdown-item" href="#">Peta Laju Alih Fungsi Lahan Purwakarta</a>
            </div>
          </div>
        </div>
        <div class="content-peta w-100 mt-4">
          <?php if (isset($peta['nama'])) : ?>
            <h2 class="text-center"><?= $peta['nama'] ?></h2>
          <?php else : ?>
            <h2 class="text-center">Peta Klasifikasi Tutupan Lahan 2021 Sentinel-2 Lokus Bandung Barat</h2>
          <?php endif ?>
          <div id="map" style="height: 600px;"></div>
        </div>
        
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?= $this->endSection() ?>

<?= $this->Section('js') ?>
<script src="<?= base_url('/assets/dist/js/peta/qgis2web_expressions.js') ?>"></script>
<script src="<?= base_url('/assets/dist/js/peta/leaflet.js') ?>"></script>
<script src="<?= base_url('/assets/dist/js/peta/leaflet.rotatedMarker.js') ?>"></script>
<script src="<?= base_url('/assets/dist/js/peta/leaflet.pattern.js') ?>"></script>
<script src="<?= base_url('/assets/dist/js/peta/leaflet-hash.js') ?>"></script>
<script src="<?= base_url('/assets/dist/js/peta/Autolinker.min.js') ?>"></script>
<script src="<?= base_url('/assets/dist/js/peta/rbush.min.js') ?>"></script>
<script src="<?= base_url('/assets/dist/js/peta/labelgun.min.js') ?>"></script>
<script src="<?= base_url('/assets/dist/js/peta/labels.js') ?>"></script>

<?php if (isset($peta['nama'])) : ?>
  <script src="<?= base_url($peta['data']) ?>"></script>
  <script src="<?= base_url($peta['generate']) ?>"></script>
<?php else : ?>
  <script src="<?= base_url('/assets/peta_klasifikasi/bandung_barat/data/bandung_barat.js') ?>"></script>
  <script src="<?= base_url('/assets/peta_klasifikasi/bandung_barat/js/peta_klasifikasi_bandung_barat.js') ?>"></script>
<?php endif ?>


<script>
    let putar = function(e) {
      
      if ($(e).children().hasClass('fa-rotate-180')) {
        $(e).children().removeClass('fa-rotate-180');
      } else {
        if ($('#accordionTujuan2 .card .card-header button').children().hasClass('fa-rotate-180') && 
            $('#accordionTujuan2 .card').find('div.collapse').hasClass('show')) {
          $('#accordionTujuan2 .card .card-header button').children().removeClass('fa-rotate-180');
        }
        if ($('#accordionTujuan3 .card .card-header button').children().hasClass('fa-rotate-180')&& 
            $('#accordionTujuan3 .card').find('div.collapse').hasClass('show')) {
          $('#accordionTujuan3 .card .card-header button').children().removeClass('fa-rotate-180');
        }
        $(e).children().toggleClass('fa-rotate-180');
      }
    }
</script>
<?= $this->endSection() ?>