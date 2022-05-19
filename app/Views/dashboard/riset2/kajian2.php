<?= $this->extend('dashboard/layout/main') ?>

<?= $this->section('css') ?>

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
    .download{
      font-size: 18px;
    }
    .download:hover{
      opacity: 50%;
    }
    .container-fluid .nav.nav-tabs .nav-item .nav-link{
      width: 200px;
      text-align: center;
      font-weight: bold;
      background-color: white;
      color: #0A5446;
      border-radius: 10px 10px 0px 0px;
    }
    .container-fluid .nav.nav-tabs .nav-item .nav-link.active{
      background-color: #0A5446;
      color: white;
    }
  </style>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid pl-4" style="color: rgb(0, 75, 60);">
        <div class="row mb-2 baris-judul-riset">
          <div class="col-sm-10">
            <h3 class="judul-riset">Karakteristik dan Faktor-Faktor yang Mempengaruhi Alih Fungsi Lahan Pertanian</h3>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content pl-4 mt-2">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item p-0" role="presentation">
                <a class="nav-link active" id="tab-1" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="true">Tujuan 1</a>
              </li>
              <li class="nav-item p-0" role="presentation">
                <a class="nav-link" id="tab-2" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false">Tujuan 2</a>
              </li>
            </ul>

            <div class="tab-content">
              <div class="tab-pane active p-2" id="tab1" role="tabpanel" aria-labelledby="tab-1">
                <div class="row">  
                  <div class="col-md-6">
                    <!-- Visualisasi 1 Pie Chart -->
                    <div class="card">
                      <div class="py-3 px-3 d-flex justify-content-between border-bottom">
                        <h3 class="card-title">Persentase (%) Petani Pelaku Alih Fungsi Lahan Menurut Usia di Kabupaten Bandung Barat</h3>
                        <i class="fas fa-download hover download" onclick="download(this)" data-id="visualisasi1" data-judul="Chart_Kajian2"></i>
                      </div>
                      <div class="card-body">
                        <div class="chart">
                          <canvas id="visualisasi1" style="min-height: 286px; height: 286px; max-height: 286px; max-width: 100%"></canvas>
                        </div>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>

                  <div class="col-md-6">
                    <!-- Visualisasi 2 Pie Chart -->
                    <div class="card">
                      <div class="py-3 px-3 d-flex justify-content-between border-bottom">
                        <h3 class="card-title">Persentase (%) Petani Pelaku Alih Fungsi Lahan<br>Menurut Usia di Kabupaten Purwakarta</h3>
                        <i class="fas fa-download hover download" onclick="download(this)" data-id="visualisasi2" data-judul="Chart_Kajian2"></i>
                      </div>
                      <div class="card-body">
                        <div class="chart">
                          <canvas id="visualisasi2" style="min-height: 286px; height: 286px; max-height: 286px; max-width: 100%"></canvas>
                        </div>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>


                  <div class="col-md-6">
                    <!-- Visualisasi 3 -->
                    <div class="card">
                      <div class="py-3 px-3 d-flex justify-content-between border-bottom">
                        <h3 class="card-title">Persentase (%) Jumlah Anggota Rumah Tangga Petani<br>Pelaku Alih Fungsi Lahan di Kabupaten Bandung Barat </h3>
                        <i class="fas fa-download hover download" onclick="download(this)" data-id="visualisasi3a" data-judul="Chart_Kajian2"></i>
                      </div>
                      <div class="card-body">
                        <div class="chart">
                          <canvas id="visualisasi3a" style="min-height: 286px; height: 286px; max-height: 286px; max-width: 100%"></canvas>
                        </div>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>

                  <div class="col-md-6">
                    <!-- Visualisasi 3 -->
                    <div class="card">
                      <div class="py-3 px-3 d-flex justify-content-between border-bottom">
                        <h3 class="card-title">Persentase (%) Jumlah Anggota Rumah Tangga Petani<br>Pelaku Alih Fungsi Lahan di Kabupaten Purwakarta</h3>
                        <i class="fas fa-download hover download" onclick="download(this)" data-id="visualisasi3b" data-judul="Chart_Kajian2"></i>
                      </div>
                      <div class="card-body">
                        <div class="chart">
                          <canvas id="visualisasi3b" style="min-height: 286px; height: 286px; max-height: 286px; max-width: 100%"></canvas>
                        </div>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>

                  <div class="col-md-6">
                    <!-- Visualisasi 4 Pie Chart -->
                    <div class="card">
                      <div class="py-3 px-3 d-flex justify-content-between border-bottom">
                        <h3 class="card-title">Persentase (%) Petani Pelaku Alih Fungsi Lahan Menurut Tingkat Pendidikan di Kabupaten Bandung Barat</h3>
                        <i class="fas fa-download hover download" onclick="download(this)" data-id="visualisasi4" data-judul="Chart_Kajian2"></i>
                      </div>
                      <div class="card-body">
                        <div class="chart">
                          <canvas id="visualisasi4" style="min-height: 286px; height: 286px; max-height: 286px; max-width: 100%"></canvas>
                        </div>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>

                  <div class="col-md-6">
                    <!-- Visualisasi 5 Pie Chart -->
                    <div class="card">
                      <div class="py-3 px-3 d-flex justify-content-between border-bottom">
                        <h3 class="card-title">Persentase (%) Petani Pelaku Alih Fungsi Lahan Menurut Tingkat Pendidikan di Kabupaten Purwakarta</h3>
                        <i class="fas fa-download hover download" onclick="download(this)" data-id="visualisasi5" data-judul="Chart_Kajian2"></i>
                      </div>
                      <div class="card-body">
                        <div class="chart">
                          <canvas id="visualisasi5" style="min-height: 286px; height: 286px; max-height: 286px; max-width: 100%"></canvas>
                        </div>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>

                  <div class="col-md-6">
                    <!-- Visualisasi 6 Pie Chart -->
                    <div class="card">
                      <div class="py-3 px-3 d-flex justify-content-between border-bottom">
                        <h3 class="card-title">Persentase (%) Petani Pelaku Alih Fungsi Lahan Menurut Lama Bertani di Kabupaten Bandung Barat</h3>
                        <i class="fas fa-download hover download" onclick="download(this)" data-id="visualisasi6" data-judul="Chart_Kajian2"></i>
                      </div>
                      <div class="card-body">
                        <div class="chart">
                          <canvas id="visualisasi6" style="min-height: 286px; height: 286px; max-height: 286px; max-width: 100%"></canvas>
                        </div>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>

                  <div class="col-md-6">
                    <!-- Visualisasi 7 Pie Chart-->
                    <div class="card">
                      <div class="py-3 px-3 d-flex justify-content-between border-bottom">
                        <h3 class="card-title">Persentase (%) Petani Pelaku Alih Fungsi Lahan Menurut Lama Bertani di Kabupaten Purwakarta</h3>
                        <i class="fas fa-download hover download" onclick="download(this)" data-id="visualisasi7" data-judul="Chart_Kajian2"></i>
                      </div>
                      <div class="card-body">
                        <div class="chart">
                          <canvas id="visualisasi7" style="min-height: 286px; height: 286px; max-height: 286px; max-width: 100%"></canvas>
                        </div>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>

                  <div class="col-md-6">
                    <!-- Visualisasi 8 Pie Chart -->
                    <div class="card">
                      <div class="py-3 px-3 d-flex justify-content-between border-bottom">
                        <h3 class="card-title">Persentase (%) Pekerjaan Utama Petani Setelah Melakukan Alih Fungsi Lahan di Kabupaten Bandung Barat</h3>
                        <i class="fas fa-download hover download" onclick="download(this)" data-id="visualisasi8" data-judul="Chart_Kajian2"></i>
                      </div>
                      <div class="card-body">
                        <div class="chart">
                          <canvas id="visualisasi8" style="min-height: 286px; height: 286px; max-height: 286px; max-width: 100%"></canvas>
                        </div>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>

                  <div class="col-md-6">
                    <!-- Visualisasi 9 Pie Chart-->
                    <div class="card">
                      <div class="py-3 px-3 d-flex justify-content-between border-bottom">
                        <h3 class="card-title">Persentase (%) Pekerjaan Utama Petani Setelah Melakukan Alih Fungsi Lahan di Kabupaten Purwakarta</h3>
                        <i class="fas fa-download hover download" onclick="download(this)" data-id="visualisasi9" data-judul="Chart_Kajian2"></i>
                      </div>
                      <div class="card-body">
                        <div class="chart">
                          <canvas id="visualisasi9" style="min-height: 286px; height: 286px; max-height: 286px; max-width: 100%"></canvas>
                        </div>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>

                  <div class="col-md-6">
                    <!-- Visualisasi 10 -->
                    <div class="card">
                      <div class="py-3 px-3 d-flex justify-content-between border-bottom">
                        <h3 class="card-title">Persentase (%) Alasan Petani Melakukan Alih Fungsi di Kabupaten Bandung Barat dan Purwakarta</h3>
                        <i class="fas fa-download hover download" onclick="download(this)" data-id="visualisasi10" data-judul="Chart_Kajian2"></i>
                      </div>
                      <div class="card-body">
                        <div class="chart">
                          <canvas id="visualisasi10" style="min-height: 286px; height: 286px; max-height: 286px; max-width: 100%"></canvas>
                        </div>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>

                  <div class="col-md-6">
                    <!-- Visualisasi 26 -->
                    <div class="card">
                      <div class="py-3 px-3 d-flex justify-content-between border-bottom">
                        <h3 class="card-title">Persentase (%) Mekanisme Alih Fungsi Lahan Menurut Interval Jumlah ART di Kabupaten Bandung Barat dan Purwakarta</h3>
                        <i class="fas fa-download hover download" onclick="download(this)" data-id="visualisasi26" data-judul="Chart_Kajian2"></i>
                      </div>
                      <div class="card-body">
                        <div class="chart">
                          <canvas id="visualisasi26" style="min-height: 286px; height: 286px; max-height: 286px; max-width: 100%"></canvas>
                        </div>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>

                  <div class="col-md-6">
                    <!-- Visualisasi 11 Grouped Bar Chart -->
                    <div class="card">
                      <div class="py-3 px-3 d-flex justify-content-between border-bottom">
                        <h3 class="card-title">Persentase (%) Lama Bertani Berdasarkan Perubahan Pekerjaan di Kabupaten Bandung Barat dan Purwakarta</h3>
                        <i class="fas fa-download hover download" onclick="download(this)" data-id="visualisasi11" data-judul="Chart_Kajian2"></i>
                      </div>
                      <div class="card-body">
                        <div class="chart">
                          <canvas id="visualisasi11" style="min-height: 286px; height: 286px; max-height: 286px; max-width: 100%;"></canvas>
                        </div>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>

                  <div class="col-md-6">
                    <!-- Visualisasi 12 Pie Chart -->
                    <div class="card">
                      <div class="py-3 px-3 d-flex justify-content-between border-bottom">
                        <h3 class="card-title">Persentase (%) Petani Pelaku Alih Fungsi Lahan Menurut Luas Kepemilikan Lahan di Kabupaten Bandung Barat</h3>
                        <i class="fas fa-download hover download" onclick="download(this)" data-id="visualisasi12" data-judul="Chart_Kajian2"></i>
                      </div>
                      <div class="card-body">
                        <div class="chart">
                          <canvas id="visualisasi12" style="min-height: 286px; height: 286px; max-height: 286px; max-width: 100%;"></canvas>
                        </div>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>

                  <div class="col-md-6">
                    <!-- Visualisasi 13 Pie Chart -->
                    <div class="card">
                      <div class="py-3 px-3 d-flex justify-content-between border-bottom">
                        <h3 class="card-title">Persentase (%) Petani Pelaku Alih Fungsi Lahan Menurut Luas Kepemilikan Lahan di Kabupaten Purwakarta</h3>
                        <i class="fas fa-download hover download" onclick="download(this)" data-id="visualisasi13" data-judul="Chart_Kajian2"></i>
                      </div>
                      <div class="card-body">
                        <div class="chart">
                          <canvas id="visualisasi13" style="min-height: 286px; height: 286px; max-height: 286px; max-width: 100%;"></canvas>
                        </div>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>

                  <div class="col-md-6">
                    <!-- Visualisasi 14 Pie Chart -->
                    <div class="card">
                      <div class="py-3 px-3 d-flex justify-content-between border-bottom">
                        <h3 class="card-title">Persentase (%) Petani Pelaku Alih Fungsi Lahan Menurut Asal Mula Lahan Pertanian di Kabupaten Bandung Barat</h3>
                        <i class="fas fa-download hover download" onclick="download(this)" data-id="visualisasi14" data-judul="Chart_Kajian2"></i>
                      </div>
                      <div class="card-body">
                        <div class="chart">
                          <canvas id="visualisasi14" style="min-height: 286px; height: 286px; max-height: 286px; max-width: 100%;"></canvas>
                        </div>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>

                  <div class="col-md-6">
                    <!-- Visualisasi 15 Pie Chart -->
                    <div class="card">
                      <div class="py-3 px-3 d-flex justify-content-between border-bottom">
                        <h3 class="card-title">Persentase (%) Petani Pelaku Alih Fungsi Lahan Menurut Asal Mula Lahan Pertanian di Kabupaten Purwakarta</h3>
                        <i class="fas fa-download hover download" onclick="download(this)" data-id="visualisasi15" data-judul="Chart_Kajian2"></i>
                      </div>
                      <div class="card-body">
                        <div class="chart">
                          <canvas id="visualisasi15" style="min-height: 286px; height: 286px; max-height: 286px; max-width: 100%;"></canvas>
                        </div>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>

                  <div class="col-md-6">
                    <!-- Visualisasi 16 Pie Chart -->
                    <div class="card">
                      <div class="py-3 px-3 d-flex justify-content-between border-bottom">
                        <h3 class="card-title">Persentase (%) Luas Lahan Alih Fungsi di Kabupaten Bandung Barat </h3>
                        <i class="fas fa-download hover download" onclick="download(this)" data-id="visualisasi16" data-judul="Chart_Kajian2"></i>
                      </div>
                      <div class="card-body">
                        <div class="chart">
                          <canvas id="visualisasi16" style="min-height: 286px; height: 286px; max-height: 286px; max-width: 100%;"></canvas>
                        </div>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>

                  <div class="col-md-6">
                    <!-- Visualisasi 17 Pie Chart-->
                    <div class="card">
                      <div class="py-3 px-3 d-flex justify-content-between border-bottom">
                        <h3 class="card-title">Persentase (%) Luas Lahan Alih Fungsi di Kabupaten Purwakarta</h3>
                        <i class="fas fa-download hover download" onclick="download(this)" data-id="visualisasi17" data-judul="Chart_Kajian2"></i>
                      </div>
                      <div class="card-body">
                        <div class="chart">
                          <canvas id="visualisasi17" style="min-height: 286px; height: 286px; max-height: 286px; max-width: 100%;"></canvas>
                        </div>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>

                  <div class="col-md-6">
                    <!-- Visualisasi 24 Pie Chart -->
                    <div class="card">
                      <div class="py-3 px-3 d-flex justify-content-between border-bottom">
                        <h3 class="card-title">Persentase (%) Mekanisme Alih Fungsi Lahan Pertanian di Kabupaten Bandung Barat</h3>
                        <i class="fas fa-download hover download" onclick="download(this)" data-id="visualisasi24" data-judul="Chart_Kajian2"></i>
                      </div>
                      <div class="card-body">
                        <div class="chart">
                          <canvas id="visualisasi24" style="min-height: 286px; height: 286px; max-height: 286px; max-width: 100%;"></canvas>
                        </div>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>

                  <div class="col-md-6 m-auto">
                    <!-- Visualisasi 25 Pie Chart -->
                    <div class="card">
                      <div class="py-3 px-3 d-flex justify-content-between border-bottom">
                        <h3 class="card-title">Persentase (%) Mekanisme Alih Fungsi Lahan Pertanian di Kabupaten Purwakarta</h3>
                        <i class="fas fa-download hover download" onclick="download(this)" data-id="visualisasi25" data-judul="Chart_Kajian2"></i>
                      </div>
                      <div class="card-body">
                        <div class="chart">
                          <canvas id="visualisasi25" style="min-height: 286px; height: 286px; max-height: 286px; max-width: 100%;"></canvas>
                        </div>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>

                  <div class="col-md-6">
                    <!-- Visualisasi 18 -->
                    <div class="card">
                      <div class="py-3 px-3 d-flex justify-content-between border-bottom">
                        <h3 class="card-title">Persentase (%) Harga Jual Lahan (ribu rupiah/m²) di Kabupaten Bandung Barat</h3>
                        <i class="fas fa-download hover download" onclick="download(this)" data-id="visualisasi18a" data-judul="Chart_Kajian2"></i>
                      </div>
                      <div class="card-body">
                        <div class="chart">
                          <canvas id="visualisasi18a" style="min-height: 286px; height: 286px; max-height: 286px; max-width: 100%;"></canvas>
                        </div>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>

                  <div class="col-md-6">
                    <!-- Visualisasi 18 -->
                    <div class="card">
                      <div class="py-3 px-3 d-flex justify-content-between border-bottom">
                        <h3 class="card-title">Persentase (%) Harga Jual Lahan (ribu rupiah/m²) di Kabupaten Bandung Barat</h3>
                        <i class="fas fa-download hover download" onclick="download(this)" data-id="visualisasi18b" data-judul="Chart_Kajian2"></i>
                      </div>
                      <div class="card-body">
                        <div class="chart">
                          <canvas id="visualisasi18b" style="min-height: 286px; height: 286px; max-height: 286px; max-width: 100%;"></canvas>
                        </div>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>

                  <div class="col-md-6">
                    <!-- Visualisasi 18 -->
                    <div class="card">
                      <!-- <div class="py-3 px-3 d-flex justify-content-between border-bottom">
                        <h3 class="card-title">Box Plot Harga Jual Lahan (ribu rupiah/m²) di Kabupaten Bandung Barat</h3>
                        <i class="fas fa-download hover download" onclick="download(this)" data-id="visualisasi18c" data-judul="Chart_Kajian2"></i>
                      </div> -->
                      <div class="card-body">
                        <div class="chart">
                          <!-- <canvas id="visualisasi18c" style="min-height: 286px; height: 286px; max-height: 286px; max-width: 100%;"></canvas> -->
                          <div id='visualisasi18c' style="min-height: 362px; height: 362px; max-height: 362px; max-width: 100%;"></div>
                        </div>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>

                  <div class="col-md-6">
                    <!-- Visualisasi 19 -->
                    <div class="card">
                      <div class="py-3 px-3 d-flex justify-content-between border-bottom">
                        <h3 class="card-title">Persentase (%) Harga Sewa Lahan (ribu rupiah/m²) di Kabupaten Bandung Barat</h3>
                        <i class="fas fa-download hover download" onclick="download(this)" data-id="visualisasi19a" data-judul="Chart_Kajian2"></i>
                      </div>
                      <div class="card-body">
                        <div class="chart">
                          <canvas id="visualisasi19a" style="min-height: 286px; height: 286px; max-height: 286px; max-width: 100%;"></canvas>
                        </div>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>

                  <div class="col-md-6">
                    <!-- Visualisasi 19 -->
                    <div class="card">
                      <div class="py-3 px-3 d-flex justify-content-between border-bottom">
                        <h3 class="card-title">Persentase (%) Harga Sewa Lahan (ribu rupiah/m²) di Kabupaten Purwakarta</h3>
                        <i class="fas fa-download hover download" onclick="download(this)" data-id="visualisasi19b" data-judul="Chart_Kajian2"></i>
                      </div>
                      <div class="card-body">
                        <div class="chart">
                          <canvas id="visualisasi19b" style="min-height: 286px; height: 286px; max-height: 286px; max-width: 100%;"></canvas>
                        </div>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>

                  <div class="col-md-6">
                    <!-- Visualisasi 19 -->
                    <div class="card">
                      <!-- <div class="py-3 px-3 d-flex justify-content-between border-bottom">
                        <h3 class="card-title">Persentase (%) Harga Jual Lahan (ribu rupiah/m²) di Kabupaten Purwakarta</h3>
                        <i class="fas fa-download hover download" onclick="download(this)" data-id="visualisasi19b" data-judul="Chart_Kajian2"></i>
                      </div> -->
                      <div class="card-body">
                        <div class="chart">
                          <div id="visualisasi19c" style="min-height: 362px; height: 362px; max-height: 362px; max-width: 100%;"></div>
                        </div>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>

                  <div class="col-md-6">
                    <!-- Visualisasi 20 Stacked Bar Chart -->
                    <div class="card">
                      <div class="py-3 px-3 d-flex justify-content-between border-bottom">
                        <h3 class="card-title">Persentase (%) Jenis Komoditas Pertanian Kabupaten Bandung Barat dan Purwakarta</h3>
                        <i class="fas fa-download hover download" onclick="download(this)" data-id="visualisasi20" data-judul="Chart_Kajian2"></i>
                      </div>
                      <div class="card-body">
                        <div class="chart">
                          <canvas id="visualisasi20" style="min-height: 286px; height: 286px; max-height: 286px; max-width: 100%;"></canvas>
                        </div>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>

                  <div class="col-md-6">
                    <!-- Visualisasi 21 Stacked Bar Chart-->
                    <div class="card">
                      <div class="py-3 px-3 d-flex justify-content-between border-bottom">
                        <h3 class="card-title" style="font-size: 16px;">Persentase (%) Luas Alih Fungsi Lahan (m&sup2;) Menurut Asal Mula Lahan di Kabupaten Bandung Barat dan Purwakarta</h3>
                        <i class="fas fa-download hover download" onclick="download(this)" data-id="visualisasi21" data-judul="Chart_Kajian2"></i>
                      </div>
                      <div class="card-body">
                        <div class="chart">
                          <canvas id="visualisasi21" style="min-height: 286px; height: 286px; max-height: 286px; max-width: 100%;"></canvas>
                        </div>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>

                  <div class="col-md-6">
                    <!-- Visualisasi 22 Stacked Bar Chart -->
                    <div class="card">
                      <div class="py-3 px-3 d-flex justify-content-between border-bottom">
                        <h3 class="card-title" style="font-size: 16px;">Persentase (%) Luas Alih Fungsi Lahan (m&sup2;) Menurut Mekanisme Alih Fungsi di Kabupaten Bandung Barat dan Purwakarta</h3>
                        <i class="fas fa-download hover download" onclick="download(this)" data-id="visualisasi22" data-judul="Chart_Kajian2"></i>
                      </div>
                      <div class="card-body">
                        <div class="chart">
                          <canvas id="visualisasi22" style="min-height: 286px; height: 286px; max-height: 286px; max-width: 100%;"></canvas>
                        </div>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>

                  <div class="col-md-8 m-auto">
                    <!-- Visualisasi 23 Column Bar Chart -->
                    <div class="card">
                      <div class="py-3 px-3 d-flex justify-content-between border-bottom">
                        <h3 class="card-title">Persentase (%) Harga Jual Lahan (ribu rupiah/m&sup2;) Menurut Jenis Komoditas di Kabupaten Bandung Barat dan Purwakarta</h3>
                        <i class="fas fa-download hover download" onclick="download(this)" data-id="visualisasi23" data-judul="Chart_Kajian2"></i>
                      </div>
                      <div class="card-body">
                        <div class="chart">
                          <canvas id="visualisasi23" style="min-height: 286px; height: 286px; max-height: 286px; max-width: 100%;"></canvas>
                        </div>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>
                </div>
              </div>

              <div class="tab-pane p-2" id="tab2" role="tabpanel" aria-labelledby="tab-2">
                <div class="row">  
                <div class="col-md-8 m-auto">
                    <!-- SCATTERPLOT MORAN RIDSON-->
                    <div class="card">
                      <div class="py-3 px-3 d-flex justify-content-between border-bottom">
                        <h3 class="card-title">Scatterplot Moran's I Laju Perubahan Lahan Sawah Tahunan</h3>
                        <i class="fas fa-download hover download" onclick="download(this)" data-id="moransc" data-judul="Chart_Kajian1"></i>
                      </div>
                      <div class="card-body">
                        <div class="chart">
                          <canvas id="moransc" style="min-height: 300px; height: 300px; max-height: 300px; max-width: 100%;"></canvas>
                        </div>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>

              </div>
            </div>
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?= $this->endSection() ?>

<?= $this->section('js') ?>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.1"></script> -->

<script>
  // Tujuan 1
  $(function () {
    ctx = document.getElementById('visualisasi1').getContext('2d');
    pieChart = new Chart(ctx, {
      type: 'pie',
      data: {
        labels: [
            ['Dewasa Awal (18-40 tahun)'], 
            ['Dewasa Madya (41-60 tahun)'], 
            ['Dewasa Akhir (> 60 tahun)'], 
        ],
        datasets: [
            {
              label: '# of Votes',
              data: [34.5, 37.6, 27.8],
              backgroundColor: [
                '#a9e9a4',
                '#77dd77',
                '#508d4f'
              ],
              borderWidth: 0
          },
        ],
      },
      options: {
        scales: {
          },
          "legend": {
            "display": true,
            "labels": {
                "fontSize": 15,
            },
            "position": "right"
        },
      }
    });

    ctx = document.getElementById('visualisasi2').getContext('2d');
    pieChart = new Chart(ctx, {
      type: 'pie',
      data: {
        labels: [
            ['Dewasa Awal (18-40 tahun)'], 
            ['Dewasa Madya (41-60 tahun)'], 
            ['Dewasa Akhir (> 60 tahun)'], 
        ],
        datasets: [
            {
              label: '# of Votes',
              data: [9.1, 55.6, 35.4],
              backgroundColor: [
                '#a9e9a4',
                '#77dd77',
                '#508d4f'
              ],
              borderWidth: 0
          },
        ],
      },
      options: {
        scales: {
          },
          "legend": {
            "display": true,
            "labels": {
                "fontSize": 15,
            },
            "position": "right"
        }
      }
    });

    ctx = document.getElementById('visualisasi3a').getContext('2d');
    barChart = new Chart(ctx, {
      type: 'pie',
      data: {
        labels: ['Di bawah rata-rata (1-2 orang)', 'Sekitar rata-rata (3-4 orang)', 'Di atas rata-rata (>4)'],
          datasets: [
            {
              label:  'Bandung Barat',
              data: [17.0, 58.2, 24.8],
              backgroundColor: [
                '#a9e9a4',
                '#77dd77',
                '#508d4f'
              ],
              borderWidth: 0
          }
        ],
      },
      options: {
          scales: {
          },
          "legend": {
            "display": true,
            "labels": {
                "fontSize": 15,
            },
            "position": "right"
        },
      }
    });

    ctx = document.getElementById('visualisasi3b').getContext('2d');
    barChart = new Chart(ctx, {
      type: 'pie',
      data: {
        labels: ['Di bawah rata-rata (1-2 orang)', 'Sekitar rata-rata (3-4 orang)', 'Di atas rata-rata (>4)'],
          datasets: [
            {
              label:  'Purwakarta',
              data: [24.2, 42.4, 33.4],
              backgroundColor: [
                '#a9e9a4',
                '#77dd77',
                '#508d4f'
              ],
              borderWidth: 0
          }
        ],
      },
      options: {
          scales: {
          },
          "legend": {
            "display": true,
            "labels": {
                "fontSize": 15,
            },
            "position": "right"
        },
      }
    });

    ctx = document.getElementById('visualisasi4').getContext('2d');
    pieChart = new Chart(ctx, {
      type: 'pie',
      data: {
        labels: [
            ['Pendidikan Dasar'], 
            ['Pendidikan Menengah'], 
            ['Pendidikan Tinggi'], 
        ],
        datasets: [
            {
              label: '# of Votes',
              data: [53.09, 41.75, 5.15],
              backgroundColor: [
                '#a9e9a4',
                '#77dd77',
                '#508d4f'
              ],
              borderWidth: 0
          },
        ],
      },
      options: {
        scales: {
          },
          "legend": {
            "display": true,
            "labels": {
                "fontSize": 15,
            },
            "position": "right"
        },
      }
    });

    ctx = document.getElementById('visualisasi5').getContext('2d');
    pieChart = new Chart(ctx, {
      type: 'pie',
      data: {
        labels: [
            ['Pendidikan Dasar'], 
            ['Pendidikan Menengah'], 
            ['Pendidikan Tinggi'], 
        ],
        datasets: [
            {
              label: '# of Votes',
              data: [73.74, 18.18, 8.08],
              backgroundColor: [
                '#a9e9a4',
                '#77dd77',
                '#508d4f'
              ],
              borderWidth: 0
          },
        ],
      },
      options: {
        scales: {
          },
          "legend": {
            "display": true,
            "labels": {
                "fontSize": 15,
            },
            "position": "right"
        },
      }
    });

  ctx = document.getElementById('visualisasi6').getContext('2d');
  pieChart = new Chart(ctx, {
      type: 'pie',
      data: {
        labels: [
            ['1-20 tahun'], 
            ['21-40 tahun'], 
            ['>40 tahun'], 
        ],
        datasets: [
            {
              label: '# of Votes',
              data: [55.15, 22.69, 22.16],
              backgroundColor: [
                '#a9e9a4',
                '#77dd77',
                '#508d4f'
              ],
              borderWidth: 0
          },
        ],
      },
      options: {
        scales: {
          },
          "legend": {
            "display": true,
            "labels": {
                "fontSize": 15,
            },
            "position": "right"
        },
      }
  });

  ctx = document.getElementById('visualisasi7').getContext('2d');
  pieChart = new Chart(ctx, {
      type: 'pie',
      data: {
        labels: [
            ['1-20 tahun'], 
            ['21-40 tahun'], 
            ['>40 tahun'], 
        ],
        datasets: [
            {
              label: '# of Votes',
              data: [45.46, 34.34, 20.2],
              backgroundColor: [
                '#a9e9a4',
                '#77dd77',
                '#508d4f'
              ],
              borderWidth: 0
          },
        ],
      },
      options: {
        scales: {
          },
          "legend": {
            "display": true,
            "labels": {
                "fontSize": 15,
            },
            "position": "right"
        },
      }
  });

  ctx = document.getElementById('visualisasi8').getContext('2d');
  barChart = new Chart(ctx, {
      type: 'pie',
      data: {
        labels: [
            'Pertanian', 
            'Usaha Lain', 
            'Tidak Bekerja' 
          ],
          datasets: [
            {
              label: 'Bandung Barat',
              data: [53.09, 32.99, 13.92],
              backgroundColor: [
                  '#508d4f',
                  '#77dd77',
                  '#a9e9a4',
              ],
              borderWidth: 0
          }]
      },
      options: {
          scales: {
          },
          "legend": {
            "display": true,
            "labels": {
                "fontSize": 15,
            },
            "position": "right"
        },
      }
    });

  ctx = document.getElementById('visualisasi9').getContext('2d');
  barChart = new Chart(ctx, {
      type: 'pie',
      data: {
        labels: [
            'Pertanian', 
            'Usaha Lain', 
            'Tidak Bekerja' 
          ],
          datasets: [
          {
            label: 'Purwakarta',
            data: [49.50, 34.34, 16.16],
              backgroundColor: [
                  '#508d4f',
                  '#77dd77',
                  '#a9e9a4',
              ],
              borderWidth: 0
          }]
      },
      options: {
          scales: {
          },
          "legend": {
            "display": true,
            "labels": {
                "fontSize": 15,
            },
            "position": "right"
        },
      }
    });

  ctx = document.getElementById('visualisasi10').getContext('2d');
  barChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ['Bandung Barat', 'Purwakarta'],
          datasets: [
            {
              label: 'Ekonomi',
              data: [73.95, 50.51],
              backgroundColor: '#d5f5d1',
              borderColor: '#1a2519',
              borderWidth: 1
          },
          {
            label: 'Sosial',
              data: [1.03, 0],
              backgroundColor: '#91e38e',
              borderColor: '#1a2519',
              borderWidth: 1
          },
          {
            label: 'Demografi',
              data: [3.61, 7.07],
              backgroundColor: '#77dd77',
              borderColor: '#1a2519',
              borderWidth: 1
          },
          {
            label: 'Kebijakan',
              data: [6.70, 7.07],
              backgroundColor: '#83d580',
              borderColor: '#1a2519',
              borderWidth: 1
          },
          {
            label: 'Teknis',
              data: [1.55, 2.02],
              backgroundColor: '#63b463',
              borderColor: '#1a2519',
              borderWidth: 1
          },
          {
            label: 'Lingkungan dan Geografis',
              data: [0,0],
              backgroundColor: '#508d4f',
              borderColor: '#1a2519',
              borderWidth: 1
          },
          {
            label: 'Lainnya',
              data: [13.92, 33.33],
              backgroundColor: '#2b452a',
              borderColor: '#1a2519',
              borderWidth: 1
          }
        ],
      },
      options: {
          legend: {
            display: true,
            position:'top',
            reverse: true
          },
          scales: {
            x: {
              grid: {
                display: false
              },
              ticks: {
                maxRotation: 0
              }
            },
            y: {
              grid: {
                display: false
              }
            }
          },
          // plugins:{
          //   tooltips: {
          //     callbacks: {
          //       title: (context) => {
          //         return context[0].label.replaceAll(',',' ');
          //       }
          //     }
          //   }
          // }
      }
    });

    // visualisasi 26
    ctx = document.getElementById('visualisasi26').getContext('2d');
    myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: [
                  ['Transaksi', 'Penjualan'],
                  ['Bukan Transaksi', 'Penjualan'], 
                  ['Transaksi', 'Penjualan'],
                  ['Bukan Transaksi', 'Penjualan']
                ],
                datasets: [{
                    label: 'Di bawah rata-rata (1-2 orang)',
                    data: [4.6, 12.4, 14.1, 10.1],
                    backgroundColor: '#a9e9a4',
                    borderColor: '#1a2519',
                    borderWidth: 1
                }, {
                    label: 'Sekitar rata-rata (3-4 orang)',
                    data: [14.4, 43.8, 24.2, 18.2],
                    backgroundColor: '#77dd77',
                    borderColor: '#1a2519',
                    borderWidth: 1
                },{
                    label: 'Di atas rata-rata (> 4 orang)',
                    data: [8.2, 16.5, 17.2, 16.2],
                    backgroundColor: '#508d4f',
                    borderColor: '#1a2519',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        grid:{
                            display:false
                        },
                        ticks: {beginAtZero: true},
                        max: 50
                    },
                    x :{
                        title: {
                          display: true,
                          text : 'BANDUNG BARAT                                                PURWAKARTA',
                          font : {weight: 'bold'}
                        },
                        grid:{
                            display:false
                        }
                    }
                }
            }
    });

    ctx = document.getElementById('visualisasi11').getContext('2d');
    myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Pertanian','Usaha lain', 'Tidak Bekerja','Pertanian','Usaha lain', 'Tidak Bekerja'],
                datasets: [{
                    label: '1-20 tahun',
                    data: [26.29, 22.16, 6.7, 14.14, 22.22, 9.1],
                    backgroundColor: '#a9e9a4',
                    borderColor: '#1a2519',
                    borderWidth: 1
                }, {
                    label: '21-40 tahun',
                    data: [11.86, 8.25, 2.58, 19.19, 10.1, 5.05],
                    backgroundColor: '#77dd77',
                    borderColor: '#1a2519',
                    borderWidth: 1
                },{
                    label: '>40 tahun',
                    data: [14.95,2.58,4.63,16.16,2.02,2.02],
                    backgroundColor: '#508d4f',
                    borderColor: '#1a2519',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        grid:{
                            display:false
                        },
                        ticks: {beginAtZero: true},
                        max: 50
                    },
                    x :{
                        title: {
                          display: true,
                          text : 'BANDUNG BARAT                                               PURWAKARTA',
                          font : {weight: 'bold'}
                        },
                        grid:{
                            display:false
                        }
                    }
                }
            }
    });

    ctx = document.getElementById('visualisasi12').getContext('2d');
    barChart = new Chart(ctx, {
      type: 'pie',
      data: {
        labels: [
            '1-1000 m²', 
            '1001-2000 m²', 
            '>2000 m²' 
          ],
          datasets: [
            {
              label: 'Bandung Barat',
              data: [65.46, 12.89, 21.65],
              backgroundColor: [
                  '#a9e9a4',
                  '#77dd77',
                  '#508d4f',
              ],
              borderWidth: 0
          }]
      },
      options: {
          scales: {
          },
          "legend": {
            "display": true,
            "labels": {
                "fontSize": 15,
            },
            "position": "right"
        },
      }
    });

    ctx = document.getElementById('visualisasi13').getContext('2d');
    barChart = new Chart(ctx, {
      type: 'pie',
      data: {
        labels: [
            '1-1000 m²', 
            '1001-2000 m²', 
            '>2000 m²' 
          ],
          datasets: [
            {
              label: 'Purwakarta',
              data: [48.48, 21.21, 30.3],
              backgroundColor: [
                  '#a9e9a4',
                  '#77dd77',
                  '#508d4f',
              ],
              borderWidth: 0
          }]
      },
      options: {
          scales: {
          },
          "legend": {
            "display": true,
            "labels": {
                "fontSize": 15,
            },
            "position": "right"
        },
      }
    });

    ctx = document.getElementById('visualisasi14').getContext('2d');
    barChart = new Chart(ctx, {
      type: 'pie',
      data: {
        labels: [
            'Beli', 
            'Warisan' 
          ],
          datasets: [
            {
              label: 'Bandung Barat',
              data: [38.14, 61.86],
              backgroundColor: [
                  '#77dd77',
                  '#508d4f'
              ],
              borderWidth: 0
          }]
      },
      options: {
          scales: {
          },
          "legend": {
            "display": true,
            "labels": {
                "fontSize": 15,
            },
            "position": "right"
        },
      }
    });

    ctx = document.getElementById('visualisasi15').getContext('2d');
    barChart = new Chart(ctx, {
      type: 'pie',
      data: {
        labels: [
            'Beli', 
            'Warisan' 
          ],
          datasets: [
            {
              label: 'Purwakarta',
              data: [46.46, 53.54],
              backgroundColor: [
                  '#77dd77',
                  '#508d4f'
              ],
              borderWidth: 0
          }]
      },
      options: {
          scales: {
          },
          "legend": {
            "display": true,
            "labels": {
                "fontSize": 15,
            },
            "position": "right"
        },
      }
    });

    ctx = document.getElementById('visualisasi16').getContext('2d');
    barChart = new Chart(ctx, {
      type: 'pie',
      data: {
        labels: ['Rendah (1-700 m²)', 'Sedang (701-1400 m²)', 'Tinggi (>1400 m²)'],
          datasets: [
          {
              label: '# of Votes',
              data: [81.96, 7.73, 10.31],
              backgroundColor: [
                  '#a9e9a4', 
                  '#77dd77',
                  '#508d4f'
              ],
              borderWidth: 0
          }
        ],
      },
      options: {
        scales: {
          },
          "legend": {
            "display": true,
            "labels": {
                "fontSize": 15,
            },
            "position": "right"
        },
      }
    });

    ctx = document.getElementById('visualisasi17').getContext('2d');
    barChart = new Chart(ctx, {
      type: 'pie',
      data: {
        labels: ['Rendah (1-700 m²)', 'Sedang (701-1400 m²)', 'Tinggi (>1400 m²)'],
          datasets: [
            {
              label: 'Purwakarta',
              data: [57.58, 13.13, 29.29],
              backgroundColor: [
                  '#a9e9a4', 
                  '#77dd77',
                  '#508d4f'
              ],
              borderWidth: 0
          }
        ],
      },
      options: {
        scales: {
          },
          "legend": {
            "display": true,
            "labels": {
                "fontSize": 15,
            },
            "position": "right"
        },
      }
    });

    ctx = document.getElementById('visualisasi24').getContext('2d');
    barChart = new Chart(ctx, {
      type: 'pie',
      data: {
        labels: ['Melalui Transaksi Penjualan', 'Bukan Melalui Transaksi Penjualan'],
          datasets: [
            {
              label: 'Bandung Barat',
              data: [27.32, 72.68],
              backgroundColor: [
                '#77dd77',
                '#508d4f'
              ],
              borderWidth: 0
          }
        ],
      },
      options: {
        scales: {
          },
          "legend": {
            "display": true,
            "labels": {
                "fontSize": 15,
            },
            "position": "right"
        },
      }
    });

    ctx = document.getElementById('visualisasi25').getContext('2d');
    barChart = new Chart(ctx, {
      type: 'pie',
      data: {
        labels: [ 'Melalui Transaksi Penjualan', 'Bukan Melalui Transaksi Penjualan'],
          datasets: [
          {
            label: 'Purwakarta',
              data: [55.56, 44.44],
              backgroundColor: [
                '#77dd77',
                '#508d4f'
              ],
              borderWidth: 0
          }
        ],
      },
      options: {
        scales: {
        },
        "legend": {
          "display": true,
          "labels": {
              "fontSize": 15,
          },
          "position": "right"
        },
      }
    });

    ctx = document.getElementById('visualisasi18a').getContext('2d');
    barChart = new Chart(ctx, {
      type: 'pie',
      data: {
        labels: ['Rendah (1-250)', 'Sedang (251-500)', 'Tinggi (>500)'],
          datasets: [
            {
              label:  'Bandung Barat',
              data: [59.28,25.77,14.95],
              backgroundColor: [
                '#a9e9a4', 
                '#77dd77',
                '#508d4f'
              ],
              borderWidth: 0
          }
        ],
      },
      options: {
          scales: {
          },
          "legend": {
            "display": true,
            "labels": {
                "fontSize": 15,
            },
            "position": "right"
        },
      }
    });


    //18b
    ctx = document.getElementById('visualisasi18b').getContext('2d');
    barChart = new Chart(ctx, {
      type: 'pie',
      data: {
        labels: ['Rendah (1-250)', 'Sedang (251-500)', 'Tinggi (>500)'],
          datasets: [
            {
              label:  'Purwakarta',
              data: [77.78, 15.15, 7.07],
              backgroundColor: [
                '#a9e9a4', 
                '#77dd77',
                '#508d4f'
              ],
              borderWidth: 0
          }
        ],
      },
      options: {
          scales: {
          },
          "legend": {
            "display": true,
            "labels": {
                "fontSize": 15,
            },
            "position": "right"
        },
      }
    });

    //18c boxplot harga jual
    var options = {
      series: [
        {
          name: 'box',
          type: 'boxPlot',
          data: [
            {
              x: 'Bandung Barat',
              y: [8, 100, 177, 357, 722]
            },
            {
              x: 'Purwakarta',
              y: [8, 100, 150, 250, 400]
            }
          ]
        },
        {
          name: 'Outlier',
          type: 'scatter',
          data: [
            {
              x: 'Bandung Barat',
              y: [750] 
            },
            {
              x: 'Purwakarta',
              y: [500] 
            }
          ]
        },
        {
          name: 'Outlier',
          type: 'scatter',
          data: [
            {
              x: 'Bandung Barat',
              y: [800] 
            },
          ]
        },
      ],
      chart: {
        type: 'boxPlot',
        width: '550',
        toolbar: {
          show: true,
          tools: {
            download: '<img src="<?=base_url("/img/dashboard/riset2/download.svg")?>", width= "20" />',
            zoom: false,
            zoomin: false,
            zoomout: false,
            pan: false,
            selection: false,
            reset: false
          }
        }
      },
      colors: ['#77dd77'],                    
      plotOptions: {
        bar:{
          columnWidth : '80%',

        },
        boxPlot:{
          colors: {
            upper: '#77dd77', 
            lower: '#77dd77'
          }
        }
      },
      legend: {
        show: false
      },
      grid:{
        show: false
      },
      title: {
          text: 'Harga Jual Lahan Sawah Kab. Bandung Barat dan Purwakarta',
          margin: 30,
          style: {
            fontSize:  '1.0em',
            fontWeight:  'light',
            fontFamily:  "Poppins, sans-serif",
          },
      },
      xaxis:{
        labels: {
          title: {
            text: 'Harga Jual Lahan (ribu rupiah/m2)'
          }
        }
      },
      tooltip: {
          shared: false,
          intersect: true
        }
    }

    var chart = new ApexCharts(document.querySelector("#visualisasi18c"), options);
    chart.render();

    //19a
    ctx = document.getElementById('visualisasi19a').getContext('2d');
    barChart = new Chart(ctx, {
      type: 'pie',
      data: {
        labels: ['Rendah (<=50)', 'Sedang (51-100)', 'Tinggi (>100)'],
          datasets: [
            {
              label:  'Bandung Barat',
              data: [75.77, 10.82, 13.40],
              backgroundColor: [
                '#a9e9a4', 
                '#77dd77',
                '#508d4f'
              ],
              borderWidth: 0
          }
        ],
      },
      options: {
          scales: {
          },
          "legend": {
            "display": true,
            "labels": {
                "fontSize": 15,
            },
            "position": "right"
        },
      }
    });

    //19b
    ctx = document.getElementById('visualisasi19b').getContext('2d');
    barChart = new Chart(ctx, {
      type: 'pie',
      data: {
        labels: ['Rendah (<=50)', 'Sedang (51-100)', 'Tinggi (>100)'],
          datasets: [
            {
              label:  'Purwakarta',
              data: [85.86, 7.07, 7.07],
              backgroundColor: [
                '#a9e9a4', 
                '#77dd77',
                '#508d4f'
              ],
              borderWidth: 0
          }
        ],
      },
      options: {
          scales: {
          },
          "legend": {
            "display": true,
            "labels": {
                "fontSize": 15,
            },
            "position": "right"
        },
      }
    });

    // 19c
    var options = {
      series: [
        {
          name: 'box',
          type: 'boxPlot',
          data: [
            {
              x: 'Bandung Barat',
              y: [0.3, 5, 15, 27.5, 57]
            },
            {
              x: 'Purwakarta',
              y: [0.18, 1.35, 4, 15, 33]
            }
          ]
        },
        {
          name: 'outliers',
          type: 'scatter',
          data: [
            {
              x: 'Bandung Barat',
              y: [71] 
            },
            {
              x: 'Purwakarta',
              y: [40] 
            }
          ]
        },
        {
          name: 'outliers',
          type: 'scatter',
          data: [
            {
              x: 'Bandung Barat',
              y: [74] 
            },
            {
              x: 'Purwakarta',
              y: [45] 
            }
          ]
        },
        {
          name: 'outliers',
          type: 'scatter',
          data: [
            {
              x: 'Bandung Barat',
              y: [75] 
            },
            {
              x: 'Purwakarta',
              y: [50] 
            }
          ]
        },
        {
          name: 'outliers',
          type: 'scatter',
          data: [
            {
              x: 'Bandung Barat',
              y: [80] 
            },
            {
              x: 'Purwakarta',
              y: [55] 
            }
          ]
        },
        {
          name: 'outliers',
          type: 'scatter',
          data: [
            {
              x: 'Bandung Barat',
              y: [93] 
            },
            {
              x: 'Purwakarta',
              y: [60] 
            }
          ]
        },
        {
          name: 'outliers',
          type: 'scatter',
          data: [
            {
              x: 'Purwakarta',
              y: [65] 
            },
          ]
        },
        {
          name: 'outliers',
          type: 'scatter',
          data: [
            {
              x: 'Purwakarta',
              y: [70] 
            }
          ]
        },
        {
          name: 'outliers',
          type: 'scatter',
          data: [
            {
              x: 'Purwakarta',
              y: [90] 
            },
          ]
        },
        {
          name: 'outliers',
          type: 'scatter',
          data: [
            {
              x: 'Purwakarta',
              y: [100] 
            },
          ]
        },
             ],
      chart: {
        width: '560',
        type: 'boxPlot',
        toolbar: {
          show: true,
          tools: {
            download: '<img src="<?=base_url("/img/dashboard/riset2/download.svg")?>", width= "20" />',
            zoom: false,
            zoomin: false,
            zoomout: false,
            pan: false,
            selection: false,
            reset: false
          }
        }
      },
      colors: ['#77dd77'],                 
      plotOptions: {
        boxPlot:{
          colors: {
            upper: '#77dd77', 
            lower: '#77dd77'
          }
        }
      },
      grid:{
        show: false
      },
      legend: {
        show: false
      },
      title: {
          text: ['Harga Sewa Lahan Sawah Kab. Bandung Barat dan Purwakarta'],
          margin: 30,
          style: {
            fontSize:  '1.0em',
            fontWeight:  'light',
            fontFamily:  "Poppins, sans-serif",
          },
      },
      tooltip: {
          shared: false,
          intersect: true
        }
    }

    var chart = new ApexCharts(document.querySelector("#visualisasi19c"), options);
    chart.render();

    // Visualisasi 20
    ctx = document.getElementById('visualisasi20').getContext('2d');
        myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Bandung Barat','Purwakarta'],
                datasets: [{
                    label: 'Padi',
                    data: [70.1, 86.87],
                    backgroundColor: '#508d4f',
                    borderColor: '#1a2519',
                    borderWidth: 1
                }, {
                    label: 'Palawija',
                    data: [19.07, 7.07],
                    backgroundColor: '#77dd77',
                    borderColor: '#1a2519',
                    borderWidth: 1
                },{
                    label: 'Holtikultura',
                    data: [5.67, 4.04],
                    backgroundColor: '#a9e9a4',
                    borderColor: '#1a2519',
                    borderWidth: 1
                },{
                    label: 'Lainnya',
                    data: [5.12, 2.02],
                    backgroundColor: '#eafae8',
                    borderColor: '#1a2519',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        grid:{
                            display:false
                        },
                        ticks: {beginAtZero: false},
                        stacked: true,
                        max: 100
                    },
                    x :{
                        stacked: true,
                        grid:{
                            display:false
                        }
                    }
                }
            }
        });

    // Visualisasi 21
    ctx = document.getElementById('visualisasi21').getContext('2d');
        myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Beli', 'Warisan', 'Beli', 'Warisan'],
                datasets: [{
                    label: 'Rendah (1-700 m²)',
                    data: [79.73, 83.33, 56.52, 58.49],
                    backgroundColor: '#a9e9a4',
                    borderColor: '#1a2519',
                    borderWidth: 1
                }, {
                    label: 'Sedang (701-1400 m²)',
                    data: [12.16,5,15.22,11.32],
                    backgroundColor: '#77dd77',
                    borderColor: '#1a2519',
                    borderWidth: 1
                },{
                    label: 'Tinggi (>1400 m²)',
                    data: [8.11,11.67,28.26,30.19],
                    backgroundColor: '#508d4f' ,
                    borderColor: '#1a2519',
                    borderWidth: 1
                }]
            },            
            options: {
              indexAxis: 'y',
                scales: {
                    y: {
                        grid:{
                            display:false
                        },
                        stacked: true,
                        title: {
                          display: true,
                          text : '       PURWAKARTA        BANDUNG BARAT',
                          font : {weight: 'bold', size: 12}
                        }
                    },
                    x :{
                        stacked: true,
                        max:100,
                        grid:{
                            display:false
                        },
                    }
                }
            }
        });

    // Visualisasi 22
    ctx = document.getElementById('visualisasi22').getContext('2d');
        myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: [
                    ['Transaksi', 'Penjualan'], 
                    ['Bukan', 'Transaksi', 'Penjualan'],
                    ['Transaksi', 'Penjualan'], 
                    ['Bukan', 'Transaksi', 'Penjualan']
                ],
                datasets: [{
                    label: 'Rendah (1-700 m²)',
                    data: [53.8, 92.9, 38.2, 81.8],
                    backgroundColor: '#a9e9a4',
                    borderColor: '#1a2519',
                    borderWidth: 1
                }, {
                    label: 'Sedang (701-1400 m²)',
                    data: [13.5, 5, 18.2, 6.8],
                    backgroundColor: '#77dd77',
                    borderColor: '#1a2519',
                    borderWidth: 1
                },{
                    label: 'Tinggi (>1400 m²)',
                    data: [32.7, 2.1, 43.6, 11.4],
                    backgroundColor: '#508d4f' ,
                    borderColor: '#1a2519',
                    borderWidth: 1
                }]
            },
            options: {
              indexAxis: 'y',
                scales: {
                    y: {
                        grid:{
                            display:false
                        },
                        stacked: true,
                        title: {
                          display: true,
                          text : '      PURWAKARTA       BANDUNG BARAT',
                          font : {weight: 'bold', size: 12}
                        }
                    },
                    x :{
                        stacked: true,
                        max:100,
                        grid:{
                            display:false
                        },
                    }
                }
            }
        });

    // Visualisasi 23
      ctx = document.getElementById('visualisasi23').getContext('2d');
        myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Padi', 'Palawija', 'Hortikultura', 'Lainnya', 'Padi', 'Palawija', 'Hortikultura', 'Lainnya'],
                datasets: [{
                    label: 'Rendah (1-250)',
                    data: [54.41, 70.27, 36.36, 100, 76.74, 100, 50, 100],
                    backgroundColor: '#a9e9a4',
                    borderColor: '#1a2519',
                    borderWidth: 1
                }, {
                    label: 'Sedang (251-500)',
                    data: [27.94,18.92,45.45,0,15.12,0,50,0],
                    backgroundColor: '#77dd77',
                    borderColor: '#1a2519',
                    borderWidth: 1
                },{
                    label: 'Tinggi (>500)',
                    data: [17.65,10.81,18.18,0,8.14,0,0,0],
                    backgroundColor: '#508d4f' ,
                    borderColor: '#1a2519',
                    borderWidth: 1
                }]
            },
            options: {
              indexAxis: 'y',
                scales: {
                    y: {
                        grid:{
                            display:false
                        },
                        stacked: true,
                        title: {
                          display: true,
                          text : '       PURWAKARTA       BANDUNG BARAT',
                          font : {weight: 'bold', size: 12}
                        }
                    },
                    x :{
                        stacked: true,
                        max:100,
                        grid:{
                            display:false
                        },
                    }
                }
            }
        });
  });

  // Tujuan 2 (BIVARIATE SCATTERPLOT MORAN)
  $(function () {
    ctx = document.getElementById('moransc').getContext('2d');
    
    const moran_pointSize = 3.5;
    const data_moran = {
        datasets: [{
            type: 'scatter',
            label: 'High-High',
            data: [
                {x: 0.642208384275586, y: 0.432790373971989, kab: "Bandung Barat", kec: "Cikalong Wetan"},
                {x: 0.872689246482549, y: 0.680299058982059, kab: "Bandung Barat", kec: "Cipeundeuy"}, 
                {x: 0.637560030752084, y: 0.366621276766493, kab: "Purwakarta", kec: "Babakancikao"}, 
                {x: 0.826851315903573, y: 0.242277820012821, kab: "Purwakarta", kec: "Bojong"}, 
                {x: 1.27993666351379, y: 0.547907064183063, kab: "Purwakarta", kec: "Bungursari"}, 
                {x: 1.0690821828505, y: 0.364533821711958, kab: "Purwakarta", kec: "Campaka"}, 
                {x: 0.453950066573763, y: 0.795862292413562, kab: "Purwakarta", kec: "Cibatu"}, 
                {x: 1.31015096141655, y: 0.510505034443035, kab: "Purwakarta", kec: "Darangdan"}, 
                {x: 1.21653828629047, y: 0.979924179851112, kab: "Purwakarta", kec: "Kiarapedes"}, 
                {x: 0.145609282848144, y: 0.604806354535557, kab: "Purwakarta", kec: "Maniis"}, 
                {x: 0.117848282638342, y: 0.566156155793848, kab: "Purwakarta", kec: "Plered"}, 
                {x: 0.400623121984701, y: 0.618837495726868, kab: "Purwakarta", kec: "Pondok Salam"}, 
                {x: 1.26328006338791, y: 0.197817179366734, kab: "Purwakarta", kec: "Sukasari"}, 
                {x: 0.564994067412973, y: 0.469739711875817, kab: "Purwakarta", kec: "Sukatani"}, 
                {x: 0.167818083015986, y: 0.27615054429982, kab: "Purwakarta", kec: "Tegal Waru"}, 
                {x: 1.50589829312846, y: 0.328857708419082, kab: "Purwakarta", kec: "Wanayasa"}
            ],
            borderColor: 'red',
            backgroundColor: 'red',
            pointRadius: moran_pointSize
        }, {
            type: 'scatter',
            label: 'High-Low',
            data: [
                {x: 1.25307950982245, y: -0.286635946465039, kab: "Bandung Barat", kec: "Cipatat"}, 
                {x: 0.0876339847355804, y: -0.426999006750632, kab: "Bandung Barat", kec: "Padalarang"}
            ],
            borderColor: 'orange',
            backgroundColor: 'orange',
            pointRadius: moran_pointSize
        }, {
            type: 'scatter',
            label: 'Low-High',
            data: [
                {x: -0.149432044963011, y: 0.0876339847355804, kab: "Bandung Barat", kec: "Batujajar"}, 
                {x: -1.2536742486571, y: 0.125692379209251, kab: "Bandung Barat", kec: "Parongpong"}, 
                {x: -0.117151812160915, y: 0.431784306716324, kab: "Purwakarta", kec: "Jatiluhur"}, 
                {x: -0.212830422186327, y: 0.348716507638931, kab: "Purwakarta", kec: "Pasawahan"}, 
                {x: -0.0629210210533942, y: 0.531319328553826, kab: "Purwakarta", kec: "Purwakarta"}
            ],
            borderColor: 'rgb(135, 206, 235)',
            backgroundColor: 'rgb(135, 206, 235)',
            pointRadius: moran_pointSize
        }, {
            type: 'scatter',
            label: 'Low-Low',
            data: [
                {x: -0.634022899788072, y: -1.01221810729743, kab: "Bandung Barat", kec: "Cihampelas"}, 
                {x: -1.01221810729743, y: -1.30166419475622, kab: "Bandung Barat", kec: "Cililin"}, 
                {x: -1.67783650767664, y: -0.804397968517534, kab: "Bandung Barat", kec: "Cipongkor"}, 
                {x: -1.15153959207127, y: -0.299083204233527, kab: "Bandung Barat", kec: "Cisarua"}, 
                {x: -1.17452311782636, y: -1.40422925444608, kab: "Bandung Barat", kec: "Gununghalu"}, 
                {x: -0.678440500123756, y: -1.2536742486571, kab: "Bandung Barat", kec: "Lembang"}, 
                {x: -1.79843545742527, y: -0.531952803667846, kab: "Bandung Barat", kec: "Ngamprah"}, 
                {x: -0.941718078857649, y: -1.4261798127515, kab: "Bandung Barat", kec: "Rongga"}, 
                {x: -1.35787484014227, y: -0.112374337706205, kab: "Bandung Barat", kec: "Saguling"}, 
                {x: -1.59313317680394, y: -1.28819257760014, kab: "Bandung Barat", kec: "Sindangkerta"}
            ],
            borderColor: 'rgb(16,78,139)',
            backgroundColor: 'rgb(16,78,139)',
            pointRadius: moran_pointSize
        }, {
            // horizontal line
            type: 'line',
            data: [
                {x: -3, y: 0},
                {x: 3, y: 0}
            ],
            pointRadius: 0,
            borderDash: [5, 5],
            borderColor: 'rgb(153,153,153)',
            borderWidth : 2
        }, {
            // vertical line
            type: 'line',
            data: [
                {x: 0, y: -2},
                {x: 0, y: 2}
            ],
            pointRadius: 0,
            borderDash: [5, 5],
            borderColor: 'rgb(153,153,153)',
            borderWidth : 2
        }, {
            // garis regresi -0.01937 0.50034 
            type: 'line',
            data: [
                {x: -2, y: -0.01937 + -2 *  0.50034},
                {x: 1.5, y: -0.01937 + 1.5 *  0.50034}
            ],
            pointRadius: 0,
            borderColor: 'maroon'
        }]
    };

    const moran_config = {
        type: 'scatter',
        data: data_moran,
        options: {
            scales : {
                yAxes: {
                    title: {
                        display: true,
                        text: 'Spatial Lag'
                    },
                    max: 1.3,
                    min: -1.8
                },
                xAxes: {
                    title: {
                        display: true,
                        text: 'Laju Alih Fungsi Lahan'
                    },
                    max: 1.7,
                    min: -2.2
                }
            }, 
            plugins : {
                legend : {
                    display : true,
                    position: 'right',
                    title : {
                        display: true,
                        text: 'Klaster'
                    },
                    labels : {
                        filter: function(item, chart) {
                            return item.text !== undefined;
                        },
                        boxWidth : 13
                    },
                    usePointStyle: true
                },
                tooltip: {
                    callbacks: {
                        label: function(t, d) {
                          var dat = t.raw;
                          var xlabel = dat.x.toFixed(3);
                          var ylabel = dat.y.toFixed(3);

                          return  ['Kab :  ' + dat.kab,  'Kec :  ' + dat.kec,  '(' + xlabel + ', ' + ylabel + ')'];
                        }
                    }
                },
                subtitle: {
                    display: true,
                    text: 'Indeks Moran: 0.5003',
                    align: 'start',
                    font : {
                        size: 15
                    },
                    padding:{
                        bottom: 20
                    }
                }
            }
        }
    };
    moranScPlot = new Chart(ctx, moran_config);

    // ctx = document.getElementById('pieChartKBB').getContext('2d');
    // pieChart = new Chart(ctx, {
    //   type: 'pie',
    //   data: {
    //       labels: ['Hutan', 'Sawah', 'Lahan terbangun', 'Badan air', 'Lahan kosong non-vegetatif'],
    //       datasets: [{
    //           label: '# of Votes',
    //           data: [55.55, 31.9, 11.01, 0.92, 0.62],
    //           backgroundColor: [
    //               '#508d4f',
    //               '#77dd77',
    //               '#a9e9a4',
    //               '#bfefbb',
    //               '#eafae8',
    //           ],
    //           borderWidth: 0
    //       }]
    //   },
    //   options: {
    //     scales: {
    //           y: {
    //               beginAtZero: true
    //           }
    //       },
    //       "legend": {
    //         "display": true,
    //         "labels": {
    //             "fontSize": 15,
    //         },
    //         "position": "right"
    //     },
    //   }
    // });

    // ctx = document.getElementById('barChartPWK').getContext('2d');
    // barChart = new Chart(ctx, {
    //   type: 'bar',
    //   data: {
    //       labels: ['Hutan', 'Sawah', 'Lahan Terbangun', 'Badan air', ['Lahan Kosong','non-vegetatif']],
    //       datasets: [{
    //           label: '# of Votes',
    //           data: [52164.11, 25377.16, 14268.91 , 6094.43, 1529.49],
    //           backgroundColor: [
    //               '#eafae8',
    //               '#77dd77',
    //               '#eafae8',
    //               '#eafae8',
    //               '#eafae8',
    //           ],
    //           borderColor: [
    //              '#508d4f',
    //               '#508d4f',
    //               '#508d4f',
    //               '#508d4f',
    //               '#508d4f'
    //           ],
    //           borderWidth: 1
    //       }]
    //   },
    //   options: {
    //         scales: {
    //               xAxes: [{
    //                 gridLines: {
    //                   drawOnChartArea: false
    //                 }
    //               }],
    //               yAxes: [{
    //                 gridLines: {
    //                   drawOnChartArea: false
    //                 },
    //                 beginAtZero: true
    //               }]
    //           },
    //         legend: {
    //           display: false
    //         }   
    //   }
    // });

    // ctx = document.getElementById('pieChartPWK').getContext('2d');
    // pieChart = new Chart(ctx, {
    //   type: 'pie',
    //   data: {
    //       labels: ['Hutan', 'Sawah', 'Lahan terbangun', 'Badan air', 'Lahan kering non-vegetatif'],
    //       datasets: [{
    //           label: '# of Votes',
    //           data: [52.46, 25.52, 14.35, 6.13, 1.54],
    //           backgroundColor: [
    //               '#508d4f',
    //               '#77dd77',
    //               '#a9e9a4',
    //               '#bfefbb',
    //               '#eafae8',
    //           ],
    //           borderWidth: 0
    //       }]
    //   },
    //   options: {
    //       scales: {
    //           y: {
    //               beginAtZero: true
    //           }
    //       },
    //       "legend": {
    //         "display": true,
    //         "labels": {
    //             "fontSize": 15,
    //         },
    //         "position": "right"
    //     },
    //   }
    // });
  });
</script>
<script>
  var download = function(e){
    let id = $(e).data('id');
    let judul = $(e).data('judul');
    var link = document.createElement('a');
    link.download = `${judul}.png`;
    link.href = document.getElementById(id).toDataURL()
    link.click();
  }
</script>
<?= $this->endSection() ?>