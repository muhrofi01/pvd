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
                        <h3 class="card-title">Visualisasi 1 Pie Chart Hafizh (Usia Petani KBB)</h3>
                        <i class="fas fa-download hover download" onclick="download(this)" data-id="visualisasi1" data-judul="Chart_Kajian2"></i>
                      </div>
                      <div class="card-body">
                        <div class="chart">
                          <canvas id="visualisasi1" style="min-height: 362px; height: 362px; max-height: 362px; max-width: 100%;"></canvas>
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
                        <h3 class="card-title">Visualisasi 2 Pie Chart (Usia Petani PWK) Hafizh</h3>
                        <i class="fas fa-download hover download" onclick="download(this)" data-id="visualisasi2" data-judul="Chart_Kajian2"></i>
                      </div>
                      <div class="card-body">
                        <div class="chart">
                          <canvas id="visualisasi2" style="min-height: 362px; height: 362px; max-height: 362px; max-width: 100%;"></canvas>
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
                        <h3 class="card-title">Visualisasi 3 (Jumlah ART) Runi</h3>
                        <i class="fas fa-download hover download" onclick="download(this)" data-id="visualisasi 3" data-judul="Chart_Kajian2"></i>
                      </div>
                      <div class="card-body">
                        <div class="chart">
                          <canvas id="visualisasi3" style="min-height: 362px; height: 362px; max-height: 362px; max-width: 100%;"></canvas>
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
                        <h3 class="card-title">Visualisasi 4 Pie Chart (Tingkat Pendidikan KBB) Hafizh</h3>
                        <i class="fas fa-download hover download" onclick="download(this)" data-id="visualisasi4" data-judul="Chart_Kajian2"></i>
                      </div>
                      <div class="card-body">
                        <div class="chart">
                          <canvas id="visualisasi4" style="min-height: 362px; height: 362px; max-height: 362px; max-width: 100%;"></canvas>
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
                        <h3 class="card-title">Visualisasi 5 Pie Chart (Tingkat Pendidikan PWK) Hafizh</h3>
                        <i class="fas fa-download hover download" onclick="download(this)" data-id="visualisasi5" data-judul="Chart_Kajian2"></i>
                      </div>
                      <div class="card-body">
                        <div class="chart">
                          <canvas id="visualisasi5" style="min-height: 286px; height: 286px; max-height: 286px; max-width: 100%;"></canvas>
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
                        <h3 class="card-title">Visualisasi 6 Pie Chart (Lama Bertani KBB) Hafizh</h3>
                        <i class="fas fa-download hover download" onclick="download(this)" data-id="visualisasi6" data-judul="Chart_Kajian2"></i>
                      </div>
                      <div class="card-body">
                        <div class="chart">
                          <canvas id="visualisasi6" style="min-height: 286px; height: 286px; max-height: 286px; max-width: 100%;"></canvas>
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
                        <h3 class="card-title">Visualisasi 7 Pie Chart (Lama Bertani PWK) Hafizh</h3>
                        <i class="fas fa-download hover download" onclick="download(this)" data-id="visualisasi7" data-judul="Chart_Kajian2"></i>
                      </div>
                      <div class="card-body">
                        <div class="chart">
                          <canvas id="visualisasi7" style="min-height: 286px; height: 286px; max-height: 286px; max-width: 100%;"></canvas>
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
                        <h3 class="card-title">Visualisasi 8 Pie Chart (Pekerjaan Utama Petani KBB) Della</h3>
                        <i class="fas fa-download hover download" onclick="download(this)" data-id="visualisasi8" data-judul="Chart_Kajian2"></i>
                      </div>
                      <div class="card-body">
                        <div class="chart">
                          <canvas id="visualisasi8" style="min-height: 286px; height: 286px; max-height: 286px; max-width: 100%;"></canvas>
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
                        <h3 class="card-title">Visualisasi 9 Pie Chart (Pekerjaan Utama Petani PWK) Dina</h3>
                        <i class="fas fa-download hover download" onclick="download(this)" data-id="visualisasi9" data-judul="Chart_Kajian2"></i>
                      </div>
                      <div class="card-body">
                        <div class="chart">
                          <canvas id="visualisasi9" style="min-height: 286px; height: 286px; max-height: 286px; max-width: 100%;"></canvas>
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
                        <h3 class="card-title">Visualisasi 10 (Alasan Petani) Runi</h3>
                        <i class="fas fa-download hover download" onclick="download(this)" data-id="visualisasi10" data-judul="Chart_Kajian2"></i>
                      </div>
                      <div class="card-body">
                        <div class="chart">
                          <canvas id="visualisasi10" style="min-height: 286px; height: 286px; max-height: 286px; max-width: 100%;"></canvas>
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
                        <h3 class="card-title">Visualisasi 11 Grouped Bar Chart (Lama Bertani) Dina</h3>
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
                        <h3 class="card-title">Visualisasi 12 Pie Chart (Luas Kepemilikan Lahan KBB) Dina</h3>
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
                        <h3 class="card-title">Visualisasi 13 Pie Chart (Luas Kepemilikan Lahan PWK) Dina</h3>
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
                        <h3 class="card-title">Visualisasi 14 Pie Chart (Asal Mula Lahan KBB) Dina</h3>
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
                        <h3 class="card-title">Visualisasi 15 Pie Chart (Asal Mula Lahan PWK) Dina</h3>
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
                        <h3 class="card-title">Visualisasi 16 Pie Chart (Luas Lahan Alih Fungsi KBB) Runi</h3>
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
                        <h3 class="card-title">Visualisasi 17 Pie Chart (Luas Lahan Alih Fungsi PWK) Runi</h3>
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
                    <!-- Visualisasi 18 -->
                    <div class="card">
                      <div class="py-3 px-3 d-flex justify-content-between border-bottom">
                        <h3 class="card-title">Visualisasi 18 (Harga Jual Lahan) Runi</h3>
                        <i class="fas fa-download hover download" onclick="download(this)" data-id="visualisasi18" data-judul="Chart_Kajian2"></i>
                      </div>
                      <div class="card-body">
                        <div class="chart">
                          <canvas id="visualisasi18" style="min-height: 286px; height: 286px; max-height: 286px; max-width: 100%;"></canvas>
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
                        <h3 class="card-title">Visualisasi 19 (Harga Sewa Lahan) Runi</h3>
                        <i class="fas fa-download hover download" onclick="download(this)" data-id="visualisasi19" data-judul="Chart_Kajian2"></i>
                      </div>
                      <div class="card-body">
                        <div class="chart">
                          <canvas id="visualisasi19" style="min-height: 286px; height: 286px; max-height: 286px; max-width: 100%;"></canvas>
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
                        <h3 class="card-title">Visualisasi 20 Stacked Bar Chart (Jenis Komoditas) Della</h3>
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
                        <h3 class="card-title">Visualisasi 21 Stacked Bar Chart (Luas Kepemilikan Lahan Berdasar Asal Mula) Della</h3>
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
                        <h3 class="card-title">Visualisasi 22 Stacked Bar Chart (Luas Alih Fungsi Lahan) Della</h3>
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

                  <div class="col-md-6">
                    <!-- Visualisasi 23 Column Bar Chart -->
                    <div class="card">
                      <div class="py-3 px-3 d-flex justify-content-between border-bottom">
                        <h3 class="card-title">Visualisasi 23 Column Bar Chart (Harga Jual Lahan) Della</h3>
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

                  <div class="col-md-6">
                    <!-- Visualisasi 24 Pie Chart -->
                    <div class="card">
                      <div class="py-3 px-3 d-flex justify-content-between border-bottom">
                        <h3 class="card-title">Visualisasi 24 Pie Chart (Mekanisme Alih Fungsi KBB) Runi</h3>
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
                        <h3 class="card-title">Visualisasi 25 Pie Chart (Mekanisme Alih Fungsi PWK) Runi</h3>
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
                </div>
              </div>

              <div class="tab-pane p-2" id="tab2" role="tabpanel" aria-labelledby="tab-2">
                <div class="row">  
                  <div class="col-md-6">
                    <!-- SCATTERPLOT MORAN RIDSON-->
                    <div class="card">
                      <div class="py-3 px-3 d-flex justify-content-between border-bottom">
                        <h3 class="card-title">Scatterplot Moran Ridson</h3>
                        <i class="fas fa-download hover download" onclick="download(this)" data-id="barChartKBB" data-judul="Chart_Kajian1"></i>
                      </div>
                      <div class="card-body">
                        <div class="chart">
                          <canvas id="barChartKBB" style="min-height: 300px; height: 300px; max-height: 300px; max-width: 100%;"></canvas>
                        </div>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>

                  <div class="col-md-6">
                    <!-- PIE CHART -->
                    <div class="card">
                      <div class="py-3 px-3 d-flex justify-content-between border-bottom">
                        <h3 class="card-title">Luas Tutupan Lahan Bandung Barat (%)</h3>
                        <i class="fas fa-download hover download" onclick="download(this)" data-id="pieChartKBB" data-judul="Chart_Kajian1"></i>
                      </div>
                      <div class="card-body">
                        <div class="chart">
                          <canvas id="pieChartKBB" style="min-height: 300px; height: 300px; max-height: 300px; max-width: 100%;"></canvas>
                        </div>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>

                  <div class="col-md-6">
                    <!-- BAR CHART -->
                    <div class="card">
                      <div class="py-3 px-3 d-flex justify-content-between border-bottom">
                        <h3 class="card-title">Luas Tutupan Lahan Purwakarta 2021 (ha)</h3>
                        <i class="fas fa-download hover download" onclick="download(this)" data-id="barChartPWK" data-judul="Chart_Kajian1"></i>
                      </div>
                      <div class="card-body">
                        <div class="chart">
                          <canvas id="barChartPWK" style="min-height: 300px; height: 300px; max-height: 300px; max-width: 100%;"></canvas>
                        </div>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>

                  <div class="col-md-6">
                    <!-- PIE CHART -->
                    <div class="card">
                      <div class="py-3 px-3 d-flex justify-content-between border-bottom">
                        <h3 class="card-title">Luas Tutupan Lahan Purwakarta (%) </h3>
                        <i class="fas fa-download hover download" onclick="download(this)" data-id="pieChartPWK" data-judul="Chart_Kajian1"></i>
                      </div>
                      <div class="card-body">
                        <div class="chart">
                          <canvas id="pieChartPWK" style="min-height: 300px; height: 300px; max-height: 300px; max-width: 100%;"></canvas>
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

<script>
  // Tujuan 1
  $(function () {
    ctx = document.getElementById('visualisasi1').getContext('2d');
    barChart = new Chart(ctx, {
      type: 'bar',
      data: {
          labels: [
            ['Awan'], 
            ['Sawah'], 
            ['Lahan', 'Terbangun'], 
            ['Hutan'],
            ['Badan', 'Air'], 
            ['Lahan', 'Kosong', 'Non Vegetatif']
          ],
          datasets: [
            {
              label: 'Landsat-8 2013',
              data: [0.13, 31.03, 10.69, 54.49, 3.06, 0.61, 2.88, 1.92],
              backgroundColor: '#d5f5d1',
              borderColor: '#1a2519',
              borderWidth: 1
          },
          {
            label: 'Landsat-8 2021',
              data: [13.54, 18.10, 10.60, 52.97, 2.88, 1.92],
              backgroundColor: '#91e38e',
              // [
              //   '#91e38e',
              //   '#91e38e',
              //   '#91e38e',
              //   '#91e38e',
              //   '#91e38e',
              //   '#91e38e',
              // ],
              borderColor: '#1a2519',
              // [
              //   '#1a2519',
              //   '#1a2519',
              //   '#1a2519',
              //   '#1a2519',
              //   '#1a2519',
              //   '#1a2519',
              // ],
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
            xAxes: [{
              gridLines: {
                display: false
              },
              
            }],
            yAxes: [{
              gridLines: {
                drawOnChartArea: false
              }
            }]
          },
          tooltips: {
            callbacks: {
              title: (context) => {
                return context[0].label.replaceAll(',',' ');
              }
            }
          }
      }
    });

    ctx = document.getElementById('visualisasi2').getContext('2d');
    barChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: [
            ['Awan'], 
            ['Sawah'], 
            ['Lahan', 'Terbangun'], 
            ['Hutan'],
            ['Badan', 'Air'], 
            ['Lahan', 'Kosong', 'Non Vegetatif']
        ],
          datasets: [
            {
              label: 'Landsat-8 2013',
              data: [13.03, 16.12, 11.28, 47.32, 7.56, 4.68],
              backgroundColor: '#d5f5d1',
              borderColor: '#1a2519',
              borderWidth: 1
          },
          {
            label: 'Landsat-8 2021',
              data: [14.71, 20.70, 11.51, 41.18, 4.87, 7.02],
              backgroundColor: '#91e38e',
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
          xAxes: [{ 
            gridLines: { 
              drawOnChartArea: false 
            } 
          }], 
          yAxes: [{ 
            gridLines: { 
              drawOnChartArea: false 
            },
            ticks: {
              stepSize: 10
            }
          }] 
        },
          tooltips: {
            callbacks: {
              title: (context) => {
                return context[0].label.replaceAll(',',' ');
              }
            }
          } 
      }
    });

    ctx = document.getElementById('visualisasi3').getContext('2d');
    barChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: [
            ['Awan'], 
            ['Sawah'], 
            ['Lahan', 'Terbangun'], 
            ['Hutan'],
            ['Badan', 'Air'], 
            ['Lahan', 'Kosong', 'Non Vegetatif']
        ],
          datasets: [
            {
              label:  'Bandung Barat',
              data: [0.13, 31.03, 10.50, 54.49, 3.05, 0.51],
              backgroundColor: '#d5f5d1',
              borderColor: '#1a2519',
              borderWidth: 1
          },
          {
            label: 'Purwakarta',
              data: [15.03, 16.12, 11.28, 47.32, 7.56, 4.68],
              backgroundColor: '#91e38e',
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
              xAxes: [{
                gridLines: {
                  drawOnChartArea: false
                }
              }],
              yAxes: [{
                gridLines: {
                  drawOnChartArea: false
                }
              }]
          },
          tooltips: {
            callbacks: {
              title: (context) => {
                return context[0].label.replaceAll(',',' ');
              }
            }
          }
      }
    });

    ctx = document.getElementById('visualisasi4').getContext('2d');
    barChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: [
            ['Awan'], 
            ['Sawah'], 
            ['Lahan', 'Terbangun'], 
            ['Hutan'],
            ['Badan', 'Air'], 
            ['Lahan', 'Kosong', 'Non Vegetatif']
        ],
          datasets: [
            {
              label: 'Bandung Barat',
              data: [13.54, 18.10, 10.60, 52.97, 2.88, 1.92],
              backgroundColor: '#d5f5d1',
              borderColor: '#1a2519',
              borderWidth: 1
          },
          {
            label: 'Purwakarta',
              data: [14.71, 20.70, 11.51, 41.18, 4.87, 7.02],
              backgroundColor: '#91e38e',
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
            xAxes: [{
              gridLines: {
                drawOnChartArea: false
              }
            }],
            yAxes: [{
              gridLines: {
                drawOnChartArea: false
              }
            }]
          },
          tooltips: {
            callbacks: {
              title: (context) => {
                return context[0].label.replaceAll(',',' ');
              }
            }
          }
      }
    });

    ctx = document.getElementById('visualisasi5').getContext('2d');
    barChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: [
            ['Awan'], 
            ['Sawah'], 
            ['Lahan', 'Terbangun'], 
            ['Hutan'],
            ['Badan', 'Air'], 
            ['Lahan', 'Kosong', 'Non Vegetatif']
          ],
          datasets: [
            {
              label: 'Bandung Barat',
              data: [0.13, 31.03, 10.69, 54.49, 3.06, 0.61],
              backgroundColor: '#d5f5d1',
              borderColor: '#1a2519',
              borderWidth: 1
          },
          {
            label: 'Purwakarta',
              data: [0.39, 22.37, 17.44, 41.32, 10.88 ,7.61],
              backgroundColor: '#91e38e',
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
            xAxes: [{
              gridLines: {
                drawOnChartArea: false
              },
              maxRotation: 0
            }],
            yAxes: [{
              gridLines: {
                drawOnChartArea: false
              }
            }]
          },
          tooltips: {
            callbacks: {
              title: (context) => {
                return context[0].label.replaceAll(',',' ');
              }
            }
          }
      }
    });

  ctx = document.getElementById('visualisasi6').getContext('2d');
    barChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: [
            ['Awan'], 
            ['Sawah'], 
            ['Lahan', 'Terbangun'], 
            ['Hutan'],
            ['Badan', 'Air'], 
            ['Lahan', 'Kosong', 'Non Vegetatif']
          ],
          datasets: [
            {
              label: 'Bandung Barat',
              data: [0.13, 31.03, 10.69, 54.49, 3.06, 0.61],
              backgroundColor: '#d5f5d1',
              borderColor: '#1a2519',
              borderWidth: 1
          },
          {
            label: 'Purwakarta',
              data: [0.39, 22.37, 17.44, 41.32, 10.88 ,7.61],
              backgroundColor: '#91e38e',
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
            xAxes: [{
              gridLines: {
                drawOnChartArea: false
              },
              maxRotation: 0
            }],
            yAxes: [{
              gridLines: {
                drawOnChartArea: false
              }
            }]
          },
          tooltips: {
            callbacks: {
              title: (context) => {
                return context[0].label.replaceAll(',',' ');
              }
            }
          }
      }
    });

  ctx = document.getElementById('visualisasi7').getContext('2d');
    barChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: [
            ['Awan'], 
            ['Sawah'], 
            ['Lahan', 'Terbangun'], 
            ['Hutan'],
            ['Badan', 'Air'], 
            ['Lahan', 'Kosong', 'Non Vegetatif']
          ],
          datasets: [
            {
              label: 'Bandung Barat',
              data: [0.13, 31.03, 10.69, 54.49, 3.06, 0.61],
              backgroundColor: '#d5f5d1',
              borderColor: '#1a2519',
              borderWidth: 1
          },
          {
            label: 'Purwakarta',
              data: [0.39, 22.37, 17.44, 41.32, 10.88 ,7.61],
              backgroundColor: '#91e38e',
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
            xAxes: [{
              gridLines: {
                drawOnChartArea: false
              },
              maxRotation: 0
            }],
            yAxes: [{
              gridLines: {
                drawOnChartArea: false
              }
            }]
          },
          tooltips: {
            callbacks: {
              title: (context) => {
                return context[0].label.replaceAll(',',' ');
              }
            }
          }
      }
    });

  ctx = document.getElementById('visualisasi8').getContext('2d');
    barChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: [
            ['Awan'], 
            ['Sawah'], 
            ['Lahan', 'Terbangun'], 
            ['Hutan'],
            ['Badan', 'Air'], 
            ['Lahan', 'Kosong', 'Non Vegetatif']
          ],
          datasets: [
            {
              label: 'Bandung Barat',
              data: [0.13, 31.03, 10.69, 54.49, 3.06, 0.61],
              backgroundColor: '#d5f5d1',
              borderColor: '#1a2519',
              borderWidth: 1
          },
          {
            label: 'Purwakarta',
              data: [0.39, 22.37, 17.44, 41.32, 10.88 ,7.61],
              backgroundColor: '#91e38e',
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
            xAxes: [{
              gridLines: {
                drawOnChartArea: false
              },
              maxRotation: 0
            }],
            yAxes: [{
              gridLines: {
                drawOnChartArea: false
              }
            }]
          },
          tooltips: {
            callbacks: {
              title: (context) => {
                return context[0].label.replaceAll(',',' ');
              }
            }
          }
      }
    });

  ctx = document.getElementById('visualisasi9').getContext('2d');
    barChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: [
            ['Awan'], 
            ['Sawah'], 
            ['Lahan', 'Terbangun'], 
            ['Hutan'],
            ['Badan', 'Air'], 
            ['Lahan', 'Kosong', 'Non Vegetatif']
          ],
          datasets: [
            {
              label: 'Bandung Barat',
              data: [0.13, 31.03, 10.69, 54.49, 3.06, 0.61],
              backgroundColor: '#d5f5d1',
              borderColor: '#1a2519',
              borderWidth: 1
          },
          {
            label: 'Purwakarta',
              data: [0.39, 22.37, 17.44, 41.32, 10.88 ,7.61],
              backgroundColor: '#91e38e',
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
            xAxes: [{
              gridLines: {
                drawOnChartArea: false
              },
              maxRotation: 0
            }],
            yAxes: [{
              gridLines: {
                drawOnChartArea: false
              }
            }]
          },
          tooltips: {
            callbacks: {
              title: (context) => {
                return context[0].label.replaceAll(',',' ');
              }
            }
          }
      }
    });

  ctx = document.getElementById('visualisasi10').getContext('2d');
    barChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: [
            ['Awan'], 
            ['Sawah'], 
            ['Lahan', 'Terbangun'], 
            ['Hutan'],
            ['Badan', 'Air'], 
            ['Lahan', 'Kosong', 'Non Vegetatif']
          ],
          datasets: [
            {
              label: 'Bandung Barat',
              data: [0.13, 31.03, 10.69, 54.49, 3.06, 0.61],
              backgroundColor: '#d5f5d1',
              borderColor: '#1a2519',
              borderWidth: 1
          },
          {
            label: 'Purwakarta',
              data: [0.39, 22.37, 17.44, 41.32, 10.88 ,7.61],
              backgroundColor: '#91e38e',
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
            xAxes: [{
              gridLines: {
                drawOnChartArea: false
              },
              maxRotation: 0
            }],
            yAxes: [{
              gridLines: {
                drawOnChartArea: false
              }
            }]
          },
          tooltips: {
            callbacks: {
              title: (context) => {
                return context[0].label.replaceAll(',',' ');
              }
            }
          }
      }
    });

      ctx = document.getElementById('visualisasi11').getContext('2d');
    barChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: [
            ['Awan'], 
            ['Sawah'], 
            ['Lahan', 'Terbangun'], 
            ['Hutan'],
            ['Badan', 'Air'], 
            ['Lahan', 'Kosong', 'Non Vegetatif']
          ],
          datasets: [
            {
              label: 'Bandung Barat',
              data: [0.13, 31.03, 10.69, 54.49, 3.06, 0.61],
              backgroundColor: '#d5f5d1',
              borderColor: '#1a2519',
              borderWidth: 1
          },
          {
            label: 'Purwakarta',
              data: [0.39, 22.37, 17.44, 41.32, 10.88 ,7.61],
              backgroundColor: '#91e38e',
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
            xAxes: [{
              gridLines: {
                drawOnChartArea: false
              },
              maxRotation: 0
            }],
            yAxes: [{
              gridLines: {
                drawOnChartArea: false
              }
            }]
          },
          tooltips: {
            callbacks: {
              title: (context) => {
                return context[0].label.replaceAll(',',' ');
              }
            }
          }
      }
    });

    ctx = document.getElementById('visualisasi12').getContext('2d');
    barChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: [
            ['Awan'], 
            ['Sawah'], 
            ['Lahan', 'Terbangun'], 
            ['Hutan'],
            ['Badan', 'Air'], 
            ['Lahan', 'Kosong', 'Non Vegetatif']
          ],
          datasets: [
            {
              label: 'Bandung Barat',
              data: [0.13, 31.03, 10.69, 54.49, 3.06, 0.61],
              backgroundColor: '#d5f5d1',
              borderColor: '#1a2519',
              borderWidth: 1
          },
          {
            label: 'Purwakarta',
              data: [0.39, 22.37, 17.44, 41.32, 10.88 ,7.61],
              backgroundColor: '#91e38e',
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
            xAxes: [{
              gridLines: {
                drawOnChartArea: false
              },
              maxRotation: 0
            }],
            yAxes: [{
              gridLines: {
                drawOnChartArea: false
              }
            }]
          },
          tooltips: {
            callbacks: {
              title: (context) => {
                return context[0].label.replaceAll(',',' ');
              }
            }
          }
      }
    });

    ctx = document.getElementById('visualisasi13').getContext('2d');
    barChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: [
            ['Awan'], 
            ['Sawah'], 
            ['Lahan', 'Terbangun'], 
            ['Hutan'],
            ['Badan', 'Air'], 
            ['Lahan', 'Kosong', 'Non Vegetatif']
          ],
          datasets: [
            {
              label: 'Bandung Barat',
              data: [0.13, 31.03, 10.69, 54.49, 3.06, 0.61],
              backgroundColor: '#d5f5d1',
              borderColor: '#1a2519',
              borderWidth: 1
          },
          {
            label: 'Purwakarta',
              data: [0.39, 22.37, 17.44, 41.32, 10.88 ,7.61],
              backgroundColor: '#91e38e',
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
            xAxes: [{
              gridLines: {
                drawOnChartArea: false
              },
              maxRotation: 0
            }],
            yAxes: [{
              gridLines: {
                drawOnChartArea: false
              }
            }]
          },
          tooltips: {
            callbacks: {
              title: (context) => {
                return context[0].label.replaceAll(',',' ');
              }
            }
          }
      }
    });

    ctx = document.getElementById('visualisasi14').getContext('2d');
    barChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: [
            ['Awan'], 
            ['Sawah'], 
            ['Lahan', 'Terbangun'], 
            ['Hutan'],
            ['Badan', 'Air'], 
            ['Lahan', 'Kosong', 'Non Vegetatif']
          ],
          datasets: [
            {
              label: 'Bandung Barat',
              data: [0.13, 31.03, 10.69, 54.49, 3.06, 0.61],
              backgroundColor: '#d5f5d1',
              borderColor: '#1a2519',
              borderWidth: 1
          },
          {
            label: 'Purwakarta',
              data: [0.39, 22.37, 17.44, 41.32, 10.88 ,7.61],
              backgroundColor: '#91e38e',
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
            xAxes: [{
              gridLines: {
                drawOnChartArea: false
              },
              maxRotation: 0
            }],
            yAxes: [{
              gridLines: {
                drawOnChartArea: false
              }
            }]
          },
          tooltips: {
            callbacks: {
              title: (context) => {
                return context[0].label.replaceAll(',',' ');
              }
            }
          }
      }
    });

    ctx = document.getElementById('visualisasi15').getContext('2d');
    barChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: [
            ['Awan'], 
            ['Sawah'], 
            ['Lahan', 'Terbangun'], 
            ['Hutan'],
            ['Badan', 'Air'], 
            ['Lahan', 'Kosong', 'Non Vegetatif']
          ],
          datasets: [
            {
              label: 'Bandung Barat',
              data: [0.13, 31.03, 10.69, 54.49, 3.06, 0.61],
              backgroundColor: '#d5f5d1',
              borderColor: '#1a2519',
              borderWidth: 1
          },
          {
            label: 'Purwakarta',
              data: [0.39, 22.37, 17.44, 41.32, 10.88 ,7.61],
              backgroundColor: '#91e38e',
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
            xAxes: [{
              gridLines: {
                drawOnChartArea: false
              },
              maxRotation: 0
            }],
            yAxes: [{
              gridLines: {
                drawOnChartArea: false
              }
            }]
          },
          tooltips: {
            callbacks: {
              title: (context) => {
                return context[0].label.replaceAll(',',' ');
              }
            }
          }
      }
    });

    ctx = document.getElementById('visualisasi16').getContext('2d');
    barChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: [
            ['Awan'], 
            ['Sawah'], 
            ['Lahan', 'Terbangun'], 
            ['Hutan'],
            ['Badan', 'Air'], 
            ['Lahan', 'Kosong', 'Non Vegetatif']
          ],
          datasets: [
          {
              label: 'Bandung Barat',
              data: [0.13, 31.03, 10.69, 54.49, 3.06, 0.61],
              backgroundColor: '#d5f5d1',
              borderColor: '#1a2519',
              borderWidth: 1
          },
          {
            label: 'Purwakarta',
              data: [0.39, 22.37, 17.44, 41.32, 10.88 ,7.61],
              backgroundColor: '#91e38e',
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
            xAxes: [{
              gridLines: {
                drawOnChartArea: false
              },
              maxRotation: 0
            }],
            yAxes: [{
              gridLines: {
                drawOnChartArea: false
              }
            }]
          },
          tooltips: {
            callbacks: {
              title: (context) => {
                return context[0].label.replaceAll(',',' ');
              }
            }
          }
      }
    });

    ctx = document.getElementById('visualisasi17').getContext('2d');
    barChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: [
            ['Awan'], 
            ['Sawah'], 
            ['Lahan', 'Terbangun'], 
            ['Hutan'],
            ['Badan', 'Air'], 
            ['Lahan', 'Kosong', 'Non Vegetatif']
          ],
          datasets: [
            {
              label: 'Bandung Barat',
              data: [0.13, 31.03, 10.69, 54.49, 3.06, 0.61],
              backgroundColor: '#d5f5d1',
              borderColor: '#1a2519',
              borderWidth: 1
          },
          {
            label: 'Purwakarta',
              data: [0.39, 22.37, 17.44, 41.32, 10.88 ,7.61],
              backgroundColor: '#91e38e',
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
            xAxes: [{
              gridLines: {
                drawOnChartArea: false
              },
              maxRotation: 0
            }],
            yAxes: [{
              gridLines: {
                drawOnChartArea: false
              }
            }]
          },
          tooltips: {
            callbacks: {
              title: (context) => {
                return context[0].label.replaceAll(',',' ');
              }
            }
          }
      }
    });

    ctx = document.getElementById('visualisasi18').getContext('2d');
    barChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: [
            ['Awan'], 
            ['Sawah'], 
            ['Lahan', 'Terbangun'], 
            ['Hutan'],
            ['Badan', 'Air'], 
            ['Lahan', 'Kosong', 'Non Vegetatif']
          ],
          datasets: [
            {
              label: 'Bandung Barat',
              data: [0.13, 31.03, 10.69, 54.49, 3.06, 0.61],
              backgroundColor: '#d5f5d1',
              borderColor: '#1a2519',
              borderWidth: 1
          },
          {
            label: 'Purwakarta',
              data: [0.39, 22.37, 17.44, 41.32, 10.88 ,7.61],
              backgroundColor: '#91e38e',
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
            xAxes: [{
              gridLines: {
                drawOnChartArea: false
              },
              maxRotation: 0
            }],
            yAxes: [{
              gridLines: {
                drawOnChartArea: false
              }
            }]
          },
          tooltips: {
            callbacks: {
              title: (context) => {
                return context[0].label.replaceAll(',',' ');
              }
            }
          }
      }
    });

    ctx = document.getElementById('visualisasi19').getContext('2d');
    barChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: [
            ['Awan'], 
            ['Sawah'], 
            ['Lahan', 'Terbangun'], 
            ['Hutan'],
            ['Badan', 'Air'], 
            ['Lahan', 'Kosong', 'Non Vegetatif']
          ],
          datasets: [
            {
              label: 'Bandung Barat',
              data: [0.13, 31.03, 10.69, 54.49, 3.06, 0.61],
              backgroundColor: '#d5f5d1',
              borderColor: '#1a2519',
              borderWidth: 1
          },
          {
            label: 'Purwakarta',
              data: [0.39, 22.37, 17.44, 41.32, 10.88 ,7.61],
              backgroundColor: '#91e38e',
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
            xAxes: [{
              gridLines: {
                drawOnChartArea: false
              },
              maxRotation: 0
            }],
            yAxes: [{
              gridLines: {
                drawOnChartArea: false
              }
            }]
          },
          tooltips: {
            callbacks: {
              title: (context) => {
                return context[0].label.replaceAll(',',' ');
              }
            }
          }
      }
    });

    ctx = document.getElementById('visualisasi20').getContext('2d');
    barChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: [
            ['Awan'], 
            ['Sawah'], 
            ['Lahan', 'Terbangun'], 
            ['Hutan'],
            ['Badan', 'Air'], 
            ['Lahan', 'Kosong', 'Non Vegetatif']
          ],
          datasets: [
            {
              label: 'Bandung Barat',
              data: [0.13, 31.03, 10.69, 54.49, 3.06, 0.61],
              backgroundColor: '#d5f5d1',
              borderColor: '#1a2519',
              borderWidth: 1
          },
          {
            label: 'Purwakarta',
              data: [0.39, 22.37, 17.44, 41.32, 10.88 ,7.61],
              backgroundColor: '#91e38e',
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
            xAxes: [{
              gridLines: {
                drawOnChartArea: false
              },
              maxRotation: 0
            }],
            yAxes: [{
              gridLines: {
                drawOnChartArea: false
              }
            }]
          },
          tooltips: {
            callbacks: {
              title: (context) => {
                return context[0].label.replaceAll(',',' ');
              }
            }
          }
      }
    });

    ctx = document.getElementById('visualisasi21').getContext('2d');
    barChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: [
            ['Awan'], 
            ['Sawah'], 
            ['Lahan', 'Terbangun'], 
            ['Hutan'],
            ['Badan', 'Air'], 
            ['Lahan', 'Kosong', 'Non Vegetatif']
          ],
          datasets: [
            {
              label: 'Bandung Barat',
              data: [0.13, 31.03, 10.69, 54.49, 3.06, 0.61],
              backgroundColor: '#d5f5d1',
              borderColor: '#1a2519',
              borderWidth: 1
          },
          {
            label: 'Purwakarta',
              data: [0.39, 22.37, 17.44, 41.32, 10.88 ,7.61],
              backgroundColor: '#91e38e',
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
            xAxes: [{
              gridLines: {
                drawOnChartArea: false
              },
              maxRotation: 0
            }],
            yAxes: [{
              gridLines: {
                drawOnChartArea: false
              }
            }]
          },
          tooltips: {
            callbacks: {
              title: (context) => {
                return context[0].label.replaceAll(',',' ');
              }
            }
          }
      }
    });

    ctx = document.getElementById('visualisasi22').getContext('2d');
    barChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: [
            ['Awan'], 
            ['Sawah'], 
            ['Lahan', 'Terbangun'], 
            ['Hutan'],
            ['Badan', 'Air'], 
            ['Lahan', 'Kosong', 'Non Vegetatif']
          ],
          datasets: [
            {
              label: 'Bandung Barat',
              data: [0.13, 31.03, 10.69, 54.49, 3.06, 0.61],
              backgroundColor: '#d5f5d1',
              borderColor: '#1a2519',
              borderWidth: 1
          },
          {
            label: 'Purwakarta',
              data: [0.39, 22.37, 17.44, 41.32, 10.88 ,7.61],
              backgroundColor: '#91e38e',
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
            xAxes: [{
              gridLines: {
                drawOnChartArea: false
              },
              maxRotation: 0
            }],
            yAxes: [{
              gridLines: {
                drawOnChartArea: false
              }
            }]
          },
          tooltips: {
            callbacks: {
              title: (context) => {
                return context[0].label.replaceAll(',',' ');
              }
            }
          }
      }
    });

    ctx = document.getElementById('visualisasi23').getContext('2d');
    barChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: [
            ['Awan'], 
            ['Sawah'], 
            ['Lahan', 'Terbangun'], 
            ['Hutan'],
            ['Badan', 'Air'], 
            ['Lahan', 'Kosong', 'Non Vegetatif']
          ],
          datasets: [
            {
              label: 'Bandung Barat',
              data: [0.13, 31.03, 10.69, 54.49, 3.06, 0.61],
              backgroundColor: '#d5f5d1',
              borderColor: '#1a2519',
              borderWidth: 1
          },
          {
            label: 'Purwakarta',
              data: [0.39, 22.37, 17.44, 41.32, 10.88 ,7.61],
              backgroundColor: '#91e38e',
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
            xAxes: [{
              gridLines: {
                drawOnChartArea: false
              },
              maxRotation: 0
            }],
            yAxes: [{
              gridLines: {
                drawOnChartArea: false
              }
            }]
          },
          tooltips: {
            callbacks: {
              title: (context) => {
                return context[0].label.replaceAll(',',' ');
              }
            }
          }
      }
    });

    ctx = document.getElementById('visualisasi24').getContext('2d');
    barChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: [
            ['Awan'], 
            ['Sawah'], 
            ['Lahan', 'Terbangun'], 
            ['Hutan'],
            ['Badan', 'Air'], 
            ['Lahan', 'Kosong', 'Non Vegetatif']
          ],
          datasets: [
            {
              label: 'Bandung Barat',
              data: [0.13, 31.03, 10.69, 54.49, 3.06, 0.61],
              backgroundColor: '#d5f5d1',
              borderColor: '#1a2519',
              borderWidth: 1
          },
          {
            label: 'Purwakarta',
              data: [0.39, 22.37, 17.44, 41.32, 10.88 ,7.61],
              backgroundColor: '#91e38e',
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
            xAxes: [{
              gridLines: {
                drawOnChartArea: false
              },
              maxRotation: 0
            }],
            yAxes: [{
              gridLines: {
                drawOnChartArea: false
              }
            }]
          },
          tooltips: {
            callbacks: {
              title: (context) => {
                return context[0].label.replaceAll(',',' ');
              }
            }
          }
      }
    });

    ctx = document.getElementById('visualisasi25').getContext('2d');
    barChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: [
            ['Awan'], 
            ['Sawah'], 
            ['Lahan', 'Terbangun'], 
            ['Hutan'],
            ['Badan', 'Air'], 
            ['Lahan', 'Kosong', 'Non Vegetatif']
          ],
          datasets: [
            {
              label: 'Bandung Barat',
              data: [0.13, 31.03, 10.69, 54.49, 3.06, 0.61],
              backgroundColor: '#d5f5d1',
              borderColor: '#1a2519',
              borderWidth: 1
          },
          {
            label: 'Purwakarta',
              data: [0.39, 22.37, 17.44, 41.32, 10.88 ,7.61],
              backgroundColor: '#91e38e',
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
            xAxes: [{
              gridLines: {
                drawOnChartArea: false
              },
              maxRotation: 0
            }],
            yAxes: [{
              gridLines: {
                drawOnChartArea: false
              }
            }]
          },
          tooltips: {
            callbacks: {
              title: (context) => {
                return context[0].label.replaceAll(',',' ');
              }
            }
          }
      }
    });
  });


  // Tujuan 2 (BIVARIATE SCATTERPLOT MORAN)
  $(function () {
    ctx = document.getElementById('barChartKBB').getContext('2d');
    barChart = new Chart(ctx, {
      type: 'bar',
      data: {
          labels: ['Hutan', 'Sawah', 'Lahan terbangun', 'Badan air', ['Lahan Kosong','non-vegetatif']],
          datasets: [
            {
             // label: 'KBB',
              data: [69607.37, 39968.55, 13796.24, 1149.73, 784.51],
              backgroundColor: [
                  '#eafae8',
                  '#77dd77',
                  '#eafae8',
                  '#eafae8',
                  '#eafae8',
              ],
              borderColor: [
                  '#508d4f',
                  '#508d4f',
                  '#508d4f',
                  '#508d4f',
                  '#508d4f',
              ],
              borderWidth: 1
          }
        ],
      },
      options: {
        scales: {
                  xAxes: [{
                    gridLines: {
                      drawOnChartArea: false
                    }
                  }],
                  yAxes: [{
                    gridLines: {
                      drawOnChartArea: false
                    },
                    beginAtZero: true
                  }]
              },
            legend: {
              display: false
            }  
      }
      
    });

    ctx = document.getElementById('pieChartKBB').getContext('2d');
    pieChart = new Chart(ctx, {
      type: 'pie',
      data: {
          labels: ['Hutan', 'Sawah', 'Lahan terbangun', 'Badan air', 'Lahan kosong non-vegetatif'],
          datasets: [{
              label: '# of Votes',
              data: [55.55, 31.9, 11.01, 0.92, 0.62],
              backgroundColor: [
                  '#508d4f',
                  '#77dd77',
                  '#a9e9a4',
                  '#bfefbb',
                  '#eafae8',
              ],
              borderWidth: 0
          }]
      },
      options: {
        scales: {
              y: {
                  beginAtZero: true
              }
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

    ctx = document.getElementById('barChartPWK').getContext('2d');
    barChart = new Chart(ctx, {
      type: 'bar',
      data: {
          labels: ['Hutan', 'Sawah', 'Lahan Terbangun', 'Badan air', ['Lahan Kosong','non-vegetatif']],
          datasets: [{
              label: '# of Votes',
              data: [52164.11, 25377.16, 14268.91 , 6094.43, 1529.49],
              backgroundColor: [
                  '#eafae8',
                  '#77dd77',
                  '#eafae8',
                  '#eafae8',
                  '#eafae8',
              ],
              borderColor: [
                 '#508d4f',
                  '#508d4f',
                  '#508d4f',
                  '#508d4f',
                  '#508d4f'
              ],
              borderWidth: 1
          }]
      },
      options: {
            scales: {
                  xAxes: [{
                    gridLines: {
                      drawOnChartArea: false
                    }
                  }],
                  yAxes: [{
                    gridLines: {
                      drawOnChartArea: false
                    },
                    beginAtZero: true
                  }]
              },
            legend: {
              display: false
            }   
      }
    });

    ctx = document.getElementById('pieChartPWK').getContext('2d');
    pieChart = new Chart(ctx, {
      type: 'pie',
      data: {
          labels: ['Hutan', 'Sawah', 'Lahan terbangun', 'Badan air', 'Lahan kering non-vegetatif'],
          datasets: [{
              label: '# of Votes',
              data: [52.46, 25.52, 14.35, 6.13, 1.54],
              backgroundColor: [
                  '#508d4f',
                  '#77dd77',
                  '#a9e9a4',
                  '#bfefbb',
                  '#eafae8',
              ],
              borderWidth: 0
          }]
      },
      options: {
          scales: {
              y: {
                  beginAtZero: true
              }
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