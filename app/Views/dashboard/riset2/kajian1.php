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
            <h3 class="judul-riset">Pemetaan Klasifikasi dan Alih Fungsi Lahan Pertanian dengan Citra Satelit</h3>
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
                    <!-- BAR CHART KBB L81321 -->
                    <div class="card">
                      <div class="py-3 px-3 d-flex justify-content-between border-bottom">
                        <h3 class="card-title">Bar Chart KBB</h3>
                        <i class="fas fa-download hover download" onclick="download(this)" data-id="barChartKBB_L81321" data-judul="Chart_Area"></i>
                      </div>
                      <div class="card-body">
                        <div class="chart">
                          <canvas id="barChartKBB_L81321" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                        </div>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>

                  <div class="col-md-6">
                    <!-- BAR CHART PWK L81321  -->
                    <div class="card">
                      <div class="py-3 px-3 d-flex justify-content-between border-bottom">
                        <h3 class="card-title">Bar Chart KBB</h3>
                        <i class="fas fa-download hover download" onclick="download(this)" data-id="barChartPWK_L81321" data-judul="Chart_Area"></i>
                      </div>
                      <div class="card-body">
                        <div class="chart">
                          <canvas id="barChartPWK_L81321" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                        </div>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>

                  <div class="col-md-6">
                    <!-- BAR CHART KBB_PWK L813 -->
                    <div class="card">
                      <div class="py-3 px-3 d-flex justify-content-between border-bottom">
                        <h3 class="card-title">Bar Chart KBB</h3>
                        <i class="fas fa-download hover download" onclick="download(this)" data-id="barChartKBB_PWK_L813" data-judul="Chart_Area"></i>
                      </div>
                      <div class="card-body">
                        <div class="chart">
                          <canvas id="barChartKBB_PWK_L813" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                        </div>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>

                  <div class="col-md-6">
                    <!-- BAR CHART KBB PWK L821 -->
                    <div class="card">
                      <div class="py-3 px-3 d-flex justify-content-between border-bottom">
                        <h3 class="card-title">Bar Chart KBB</h3>
                        <i class="fas fa-download hover download" onclick="download(this)" data-id="barChartKBB_PWK_L821" data-judul="Chart_Area"></i>
                      </div>
                      <div class="card-body">
                        <div class="chart">
                          <canvas id="barChartKBB_PWK_L821" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                        </div>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>

                  <div class="col-md-6">
                    <!-- BAR CHART KBB PWK S2 -->
                    <div class="card">
                      <div class="py-3 px-3 d-flex justify-content-between border-bottom">
                        <h3 class="card-title">Bar Chart KBB</h3>
                        <i class="fas fa-download hover download" onclick="download(this)" data-id="barChartKBB_PWK_S2" data-judul="Chart_Area"></i>
                      </div>
                      <div class="card-body">
                        <div class="chart">
                          <canvas id="barChartKBB_PWK_S2" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
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
                    <!-- BAR CHART -->
                    <div class="card">
                      <div class="py-3 px-3 d-flex justify-content-between border-bottom">
                        <h3 class="card-title">Bar Chart KBB</h3>
                        <i class="fas fa-download hover download" onclick="download(this)" data-id="barChartKBB" data-judul="Chart_Area"></i>
                      </div>
                      <div class="card-body">
                        <div class="chart">
                          <canvas id="barChartKBB" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
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
                        <h3 class="card-title">Pie Chart KBB</h3>
                        <i class="fas fa-download hover download" onclick="download(this)" data-id="pieChartKBB" data-judul="Chart_Area"></i>
                      </div>
                      <div class="card-body">
                        <div class="chart">
                          <canvas id="pieChartKBB" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
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
                        <h3 class="card-title">Bar Chart PWK</h3>
                        <i class="fas fa-download hover download" onclick="download(this)" data-id="barChartPWK" data-judul="Chart_Area"></i>
                      </div>
                      <div class="card-body">
                        <div class="chart">
                          <canvas id="barChartPWK" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
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
                        <h3 class="card-title">Pie Chart PWK</h3>
                        <i class="fas fa-download hover download" onclick="download(this)" data-id="pieChartPWK" data-judul="Chart_Area"></i>
                      </div>
                      <div class="card-body">
                        <div class="chart">
                          <canvas id="pieChartPWK" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
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
<script>
  // Tujuan 1
  $(function () {
    ctx = document.getElementById('barChartKBB_L81321').getContext('2d');
    barChart = new Chart(ctx, {
      type: 'bar',
      data: {
          labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
          datasets: [
            {
              label: 'KBB',
              data: [12, 19, 3, 5, 2, 3],
              backgroundColor: [
                  'rgba(255, 99, 132, 0.2)',
                  'rgba(255, 99, 132, 0.2)',
                  'rgba(255, 99, 132, 0.2)',
                  'rgba(255, 99, 132, 0.2)',
                  'rgba(255, 99, 132, 0.2)',
                  'rgba(255, 99, 132, 0.2)',
              ],
              borderColor: [
                  'rgba(255, 99, 132, 1)',
                  'rgba(255, 99, 132, 1)',
                  'rgba(255, 99, 132, 1)',
                  'rgba(255, 99, 132, 1)',
                  'rgba(255, 99, 132, 1)',
                  'rgba(255, 99, 132, 1)',
              ],
              borderWidth: 1
          },
          {
            label: 'PWK',
              data: [12, 19, 3, 5, 2, 3],
              backgroundColor: [
                  'rgba(54, 162, 235, 0.2)',
                  'rgba(54, 162, 235, 0.2)',
                  'rgba(54, 162, 235, 0.2)',
                  'rgba(54, 162, 235, 0.2)',
                  'rgba(54, 162, 235, 0.2)',
                  'rgba(54, 162, 235, 0.2)',
              ],
              borderColor: [
                  'rgba(54, 162, 235, 1)',
                  'rgba(54, 162, 235, 1)',
                  'rgba(54, 162, 235, 1)',
                  'rgba(54, 162, 235, 1)',
                  'rgba(54, 162, 235, 1)',
                  'rgba(54, 162, 235, 1)',
              ],
              borderWidth: 1
          }
        ],
      },
      options: {
          scales: {
              y: {
                  beginAtZero: true
              }
          }
      }
    });

    ctx = document.getElementById('barChartPWK_L81321').getContext('2d');
    barChart = new Chart(ctx, {
      type: 'bar',
      data: {
          labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
          datasets: [
            {
              label: 'KBB',
              data: [12, 19, 3, 5, 2, 3],
              backgroundColor: [
                  'rgba(255, 99, 132, 0.2)',
                  'rgba(255, 99, 132, 0.2)',
                  'rgba(255, 99, 132, 0.2)',
                  'rgba(255, 99, 132, 0.2)',
                  'rgba(255, 99, 132, 0.2)',
                  'rgba(255, 99, 132, 0.2)',
              ],
              borderColor: [
                  'rgba(255, 99, 132, 1)',
                  'rgba(255, 99, 132, 1)',
                  'rgba(255, 99, 132, 1)',
                  'rgba(255, 99, 132, 1)',
                  'rgba(255, 99, 132, 1)',
                  'rgba(255, 99, 132, 1)',
              ],
              borderWidth: 1
          },
          {
            label: 'PWK',
              data: [12, 19, 3, 5, 2, 3],
              backgroundColor: [
                  'rgba(54, 162, 235, 0.2)',
                  'rgba(54, 162, 235, 0.2)',
                  'rgba(54, 162, 235, 0.2)',
                  'rgba(54, 162, 235, 0.2)',
                  'rgba(54, 162, 235, 0.2)',
                  'rgba(54, 162, 235, 0.2)',
              ],
              borderColor: [
                  'rgba(54, 162, 235, 1)',
                  'rgba(54, 162, 235, 1)',
                  'rgba(54, 162, 235, 1)',
                  'rgba(54, 162, 235, 1)',
                  'rgba(54, 162, 235, 1)',
                  'rgba(54, 162, 235, 1)',
              ],
              borderWidth: 1
          }
        ],
      },
      options: {
          scales: {
              y: {
                  beginAtZero: true
              }
          }
      }
    });

    ctx = document.getElementById('barChartKBB_PWK_L813').getContext('2d');
    barChart = new Chart(ctx, {
      type: 'bar',
      data: {
          labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
          datasets: [
            {
              label: 'KBB',
              data: [12, 19, 3, 5, 2, 3],
              backgroundColor: [
                  'rgba(255, 99, 132, 0.2)',
                  'rgba(255, 99, 132, 0.2)',
                  'rgba(255, 99, 132, 0.2)',
                  'rgba(255, 99, 132, 0.2)',
                  'rgba(255, 99, 132, 0.2)',
                  'rgba(255, 99, 132, 0.2)',
              ],
              borderColor: [
                  'rgba(255, 99, 132, 1)',
                  'rgba(255, 99, 132, 1)',
                  'rgba(255, 99, 132, 1)',
                  'rgba(255, 99, 132, 1)',
                  'rgba(255, 99, 132, 1)',
                  'rgba(255, 99, 132, 1)',
              ],
              borderWidth: 1
          },
          {
            label: 'PWK',
              data: [12, 19, 3, 5, 2, 3],
              backgroundColor: [
                  'rgba(54, 162, 235, 0.2)',
                  'rgba(54, 162, 235, 0.2)',
                  'rgba(54, 162, 235, 0.2)',
                  'rgba(54, 162, 235, 0.2)',
                  'rgba(54, 162, 235, 0.2)',
                  'rgba(54, 162, 235, 0.2)',
              ],
              borderColor: [
                  'rgba(54, 162, 235, 1)',
                  'rgba(54, 162, 235, 1)',
                  'rgba(54, 162, 235, 1)',
                  'rgba(54, 162, 235, 1)',
                  'rgba(54, 162, 235, 1)',
                  'rgba(54, 162, 235, 1)',
              ],
              borderWidth: 1
          }
        ],
      },
      options: {
          scales: {
              y: {
                  beginAtZero: true
              }
          }
      }
    });

    ctx = document.getElementById('barChartKBB_PWK_L821').getContext('2d');
    barChart = new Chart(ctx, {
      type: 'bar',
      data: {
          labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
          datasets: [
            {
              label: 'KBB',
              data: [12, 19, 3, 5, 2, 3],
              backgroundColor: [
                  'rgba(255, 99, 132, 0.2)',
                  'rgba(255, 99, 132, 0.2)',
                  'rgba(255, 99, 132, 0.2)',
                  'rgba(255, 99, 132, 0.2)',
                  'rgba(255, 99, 132, 0.2)',
                  'rgba(255, 99, 132, 0.2)',
              ],
              borderColor: [
                  'rgba(255, 99, 132, 1)',
                  'rgba(255, 99, 132, 1)',
                  'rgba(255, 99, 132, 1)',
                  'rgba(255, 99, 132, 1)',
                  'rgba(255, 99, 132, 1)',
                  'rgba(255, 99, 132, 1)',
              ],
              borderWidth: 1
          },
          {
            label: 'PWK',
              data: [12, 19, 3, 5, 2, 3],
              backgroundColor: [
                  'rgba(54, 162, 235, 0.2)',
                  'rgba(54, 162, 235, 0.2)',
                  'rgba(54, 162, 235, 0.2)',
                  'rgba(54, 162, 235, 0.2)',
                  'rgba(54, 162, 235, 0.2)',
                  'rgba(54, 162, 235, 0.2)',
              ],
              borderColor: [
                  'rgba(54, 162, 235, 1)',
                  'rgba(54, 162, 235, 1)',
                  'rgba(54, 162, 235, 1)',
                  'rgba(54, 162, 235, 1)',
                  'rgba(54, 162, 235, 1)',
                  'rgba(54, 162, 235, 1)',
              ],
              borderWidth: 1
          }
        ],
      },
      options: {
          scales: {
              y: {
                  beginAtZero: true
              }
          }
      }
    });

    ctx = document.getElementById('barChartKBB_PWK_S2').getContext('2d');
    barChart = new Chart(ctx, {
      type: 'bar',
      data: {
          labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
          datasets: [
            {
              label: 'KBB',
              data: [12, 19, 3, 5, 2, 3],
              backgroundColor: [
                  'rgba(255, 99, 132, 0.2)',
                  'rgba(255, 99, 132, 0.2)',
                  'rgba(255, 99, 132, 0.2)',
                  'rgba(255, 99, 132, 0.2)',
                  'rgba(255, 99, 132, 0.2)',
                  'rgba(255, 99, 132, 0.2)',
              ],
              borderColor: [
                  'rgba(255, 99, 132, 1)',
                  'rgba(255, 99, 132, 1)',
                  'rgba(255, 99, 132, 1)',
                  'rgba(255, 99, 132, 1)',
                  'rgba(255, 99, 132, 1)',
                  'rgba(255, 99, 132, 1)',
              ],
              borderWidth: 1
          },
          {
            label: 'PWK',
              data: [12, 19, 3, 5, 2, 3],
              backgroundColor: [
                  'rgba(54, 162, 235, 0.2)',
                  'rgba(54, 162, 235, 0.2)',
                  'rgba(54, 162, 235, 0.2)',
                  'rgba(54, 162, 235, 0.2)',
                  'rgba(54, 162, 235, 0.2)',
                  'rgba(54, 162, 235, 0.2)',
              ],
              borderColor: [
                  'rgba(54, 162, 235, 1)',
                  'rgba(54, 162, 235, 1)',
                  'rgba(54, 162, 235, 1)',
                  'rgba(54, 162, 235, 1)',
                  'rgba(54, 162, 235, 1)',
                  'rgba(54, 162, 235, 1)',
              ],
              borderWidth: 1
          }
        ],
      },
      options: {
          scales: {
              y: {
                  beginAtZero: true
              }
          }
      }
    });
  });

  // Tujuan 2
  $(function () {
    ctx = document.getElementById('barChartKBB').getContext('2d');
    barChart = new Chart(ctx, {
      type: 'bar',
      data: {
          labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
          datasets: [
            {
              label: 'KBB',
              data: [12, 19, 3, 5, 2, 3],
              backgroundColor: [
                  'rgba(255, 99, 132, 0.2)',
                  'rgba(255, 99, 132, 0.2)',
                  'rgba(255, 99, 132, 0.2)',
                  'rgba(255, 99, 132, 0.2)',
                  'rgba(255, 99, 132, 0.2)',
                  'rgba(255, 99, 132, 0.2)',
              ],
              borderColor: [
                  'rgba(255, 99, 132, 1)',
                  'rgba(255, 99, 132, 1)',
                  'rgba(255, 99, 132, 1)',
                  'rgba(255, 99, 132, 1)',
                  'rgba(255, 99, 132, 1)',
                  'rgba(255, 99, 132, 1)',
              ],
              borderWidth: 1
          },
          {
            label: 'PWK',
              data: [12, 19, 3, 5, 2, 3],
              backgroundColor: [
                  'rgba(54, 162, 235, 0.2)',
                  'rgba(54, 162, 235, 0.2)',
                  'rgba(54, 162, 235, 0.2)',
                  'rgba(54, 162, 235, 0.2)',
                  'rgba(54, 162, 235, 0.2)',
                  'rgba(54, 162, 235, 0.2)',
              ],
              borderColor: [
                  'rgba(54, 162, 235, 1)',
                  'rgba(54, 162, 235, 1)',
                  'rgba(54, 162, 235, 1)',
                  'rgba(54, 162, 235, 1)',
                  'rgba(54, 162, 235, 1)',
                  'rgba(54, 162, 235, 1)',
              ],
              borderWidth: 1
          }
        ],
      },
      options: {
          scales: {
              y: {
                  beginAtZero: true
              }
          }
      }
    });

    ctx = document.getElementById('pieChartKBB').getContext('2d');
    pieChart = new Chart(ctx, {
      type: 'pie',
      data: {
          labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
          datasets: [{
              label: '# of Votes',
              data: [12, 19, 3, 5, 2, 3],
              backgroundColor: [
                  'rgba(255, 99, 132, 0.2)',
                  'rgba(54, 162, 235, 0.2)',
                  'rgba(255, 206, 86, 0.2)',
                  'rgba(75, 192, 192, 0.2)',
                  'rgba(153, 102, 255, 0.2)',
                  'rgba(255, 159, 64, 0.2)'
              ],
              borderColor: [
                  'rgba(255, 99, 132, 1)',
                  'rgba(54, 162, 235, 1)',
                  'rgba(255, 206, 86, 1)',
                  'rgba(75, 192, 192, 1)',
                  'rgba(153, 102, 255, 1)',
                  'rgba(255, 159, 64, 1)'
              ],
              borderWidth: 1
          }]
      },
      options: {
          scales: {
              y: {
                  beginAtZero: true
              }
          }
      }
    });

    ctx = document.getElementById('barChartPWK').getContext('2d');
    barChart = new Chart(ctx, {
      type: 'bar',
      data: {
          labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
          datasets: [{
              label: '# of Votes',
              data: [12, 19, 3, 5, 2, 3],
              backgroundColor: [
                  'rgba(255, 99, 132, 0.2)',
                  'rgba(54, 162, 235, 0.2)',
                  'rgba(255, 206, 86, 0.2)',
                  'rgba(75, 192, 192, 0.2)',
                  'rgba(153, 102, 255, 0.2)',
                  'rgba(255, 159, 64, 0.2)'
              ],
              borderColor: [
                  'rgba(255, 99, 132, 1)',
                  'rgba(54, 162, 235, 1)',
                  'rgba(255, 206, 86, 1)',
                  'rgba(75, 192, 192, 1)',
                  'rgba(153, 102, 255, 1)',
                  'rgba(255, 159, 64, 1)'
              ],
              borderWidth: 1
          }]
      },
      options: {
          scales: {
              y: {
                  beginAtZero: true
              }
          }
      }
    });

    ctx = document.getElementById('pieChartPWK').getContext('2d');
    pieChart = new Chart(ctx, {
      type: 'pie',
      data: {
          labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
          datasets: [{
              label: '# of Votes',
              data: [12, 19, 3, 5, 2, 3],
              backgroundColor: [
                  'rgba(255, 99, 132, 0.2)',
                  'rgba(54, 162, 235, 0.2)',
                  'rgba(255, 206, 86, 0.2)',
                  'rgba(75, 192, 192, 0.2)',
                  'rgba(153, 102, 255, 0.2)',
                  'rgba(255, 159, 64, 0.2)'
              ],
              borderColor: [
                  'rgba(255, 99, 132, 1)',
                  'rgba(54, 162, 235, 1)',
                  'rgba(255, 206, 86, 1)',
                  'rgba(75, 192, 192, 1)',
                  'rgba(153, 102, 255, 1)',
                  'rgba(255, 159, 64, 1)'
              ],
              borderWidth: 1
          }]
      },
      options: {
          scales: {
              y: {
                  beginAtZero: true
              }
          }
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
  
