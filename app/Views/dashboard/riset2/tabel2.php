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
    .container-fluid .nav.nav-pills .nav-item .nav-link{
      width: 200px;
      text-align: center;
      font-weight: bold;
      background-color: white;
      color: #0A5446;
      border-radius: 10px 10px 0px 0px;
      border: none;
    }
    .container-fluid .nav.nav-pills .nav-item .nav-link.active{
      background-color: #0A5446;
      color: white;
    }

    table tbody tr td, table thead tr th{
      border: 5px solid red;
    }  
    
  </style>
  <!-- DataTables -->
  <link rel="stylesheet" href="/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="/assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="/assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

<?= $this->endSection() ?>

<?= $this->section('content') ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid pl-4" style="color: rgb(0, 75, 60);">
        <div class="row mb-0 baris-judul-riset">
          <div class="col-sm-10" data-aos="fade-right" data-aos-duration="1200">
            <h3 class="judul-riset">Karakteristik dan Faktor-Faktor yang Mempengaruhi Alih Fungsi Lahan Pertanian</h3>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content pl-4 mt-4">
      <div class="container-fluid">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist" style="margin-left: -16px;">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-tujuan1-tab" data-bs-toggle="pill" data-bs-target="#pills-tujuan1" type="button" role="tab" aria-controls="pills-tujuan1" aria-selected="true">Tujuan 1</button>
                </li>
                <li class="nav-item" role="presentation" style="margin-left:-7px; border-radius:10px;">
                    <button class="nav-link" id="pills-tujuan2-tab" data-bs-toggle="pill" data-bs-target="#pills-tujuan2" type="button" role="tab" aria-controls="pills-tujuan2" aria-selected="false">Tujuan 2</button>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-tujuan1" role="tabpanel" aria-labelledby="pills-tujuan1-tab">
                  <div class="row">  
                    <div class="card col-12" style="box-shadow: 0 0 10px black;">
                      <div class="card-header" style="margin: 0 auto;">
                        <h3 class="card-title" style="font-weight: bold; font-size: 1.2em; margin-top: 1em;">Usia Petani Pelaku Alih Fungsi Lahan di Kabupaten Bandung Barat dan Purwakarta</h3>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                        <table id="tabulasi1" class="table table-bordered table-striped">
                          <thead>
                            <tr>
                              <th class="text-center" rowspan="3">Kabupaten</th>
                              <th class="text-center" colspan="6">Interval Usia</th>
                              <th class="text-center" colspan="2" rowspan="2">Total</th>
                            </tr>
                            <tr>
                              <th class="text-center" colspan="2">Dewasa Awal (18-40 tahun)</th>
                              <th class="text-center" colspan="2">Dewasa Madya (41-60 tahun)</th>
                              <th class="text-center" colspan="2">Dewasa Akhir (>60 tahun</th>
                            </tr>
                            <tr>
                              <th class="text-center">Jumlah</th>
                              <th class="text-center">%</th>
                              <th class="text-center">Jumlah</th>
                              <th class="text-center">%</th>
                              <th class="text-center">Jumlah</th>
                              <th class="text-center">%</th>
                              <th class="text-center">Jumlah</th>
                              <th class="text-center">%</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>Bandung Barat</td>
                              <td class="text-right">67</td>
                              <td class="text-right">34.5</td>
                              <td class="text-right">73</td>
                              <td class="text-right">37.6</td>
                              <td class="text-right">54</td>
                              <td class="text-right">27.8</td>
                              <td class="text-right">194</td>
                              <td class="text-right">100</td>
                            </tr>
                            <tr>
                              <td>Purwakarta</td>
                              <td class="text-right">9</td>
                              <td class="text-right">9.1</td>
                              <td class="text-right">55</td>
                              <td class="text-right">55.6</td>
                              <td class="text-right">35</td>
                              <td class="text-right">35.4</td>
                              <td class="text-right">99</td>
                              <td class="text-right">100</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>

                  <div class="row">  
                    <div class="card col-12" style="box-shadow: 0 0 10px black;">
                      <div class="card-header" style="margin: 0 auto;">
                        <h3 class="card-title" style="font-weight: bold; font-size: 1.2em; margin-top: 1em;">Jumlah Anggota Rumah Tangga Petani Pelaku Alih Fungsi Lahan di Kabupaten Bandung Barat dan Purwakarta</h3>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                        <table id="tabulasi2" class="table table-bordered table-striped">
                          <thead>
                            <tr>
                              <th class="text-center" rowspan="3">Kabupaten</th>
                              <th class="text-center" colspan="6">Interval Jumlah Anggota Rumah Tangga (Orang)</th>
                              <th class="text-center" colspan="2" rowspan="2">Total</th>
                            </tr>
                            <tr>
                              <th class="text-center" colspan="2">Di Bawah Rata-rata (1-2)</th>
                              <th class="text-center" colspan="2">Sekitar Rata-rata (3-4)</th>
                              <th class="text-center" colspan="2">Di Atas Rata-rata (>4)</th>
                            </tr>
                            <tr>
                              <th class="text-center">Jumlah</th>
                              <th class="text-center">%</th>
                              <th class="text-center">Jumlah</th>
                              <th class="text-center">%</th>
                              <th class="text-center">Jumlah</th>
                              <th class="text-center">%</th>
                              <th class="text-center">Jumlah</th>
                              <th class="text-center">%</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>Bandung Barat</td>
                              <td class="text-right">33</td>
                              <td class="text-right">17.0</td>
                              <td class="text-right">113</td>
                              <td class="text-right">58.2</td>
                              <td class="text-right">48</td>
                              <td class="text-right">24.8</td>
                              <td class="text-right">194</td>
                              <td class="text-right">100</td>
                            </tr>
                            <tr>
                              <td>Purwakarta</td>
                              <td class="text-right">24</td>
                              <td class="text-right">24.2</td>
                              <td class="text-right">42</td>
                              <td class="text-right">42.4</td>
                              <td class="text-right">33</td>
                              <td class="text-right">33.4</td>
                              <td class="text-right">99</td>
                              <td class="text-right">100</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>

                  <div class="row">  
                    <div class="card col-12" style="box-shadow: 0 0 10px black;">
                      <div class="card-header" style="margin: 0 auto;">
                        <h3 class="card-title text-center" style="font-weight: bold; font-size: 1.2em; margin-top: 1em;">Jumlah Anggota Rumah Tangga Petani Pelaku Alih Fungsi Lahan<br>Menurut Mekanismenya di Kabupaten Bandung Barat</h3>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                        <table id="tabulasi3KBB" class="table table-bordered table-striped">
                          <thead>
                            <tr>
                              <!-- <th class="text-center" rowspan="3">Kabupaten</th> -->
                              <th class="text-center" rowspan="3">Mekanisme Alih Fungsi</th>
                              <th class="text-center" colspan="6">Interval Jumlah Anggota Rumah Tangga (Orang)</th>
                              <th class="text-center" colspan="2" rowspan="2">Total</th>
                            </tr>
                            <tr>
                              <th class="text-center" colspan="2">Di Bawah Rata-rata (1-2)</th>
                              <th class="text-center" colspan="2">Sekitar Rata-rata (3-4)</th>
                              <th class="text-center" colspan="2">Di Atas Rata-rata (>4)</th>
                            </tr>
                            <tr>
                              <th class="text-center">Jml</th>
                              <th class="text-center">%</th>
                              <th class="text-center">Jml</th>
                              <th class="text-center">%</th>
                              <th class="text-center">Jml</th>
                              <th class="text-center">%</th>
                              <th class="text-center">Jml</th>
                              <th class="text-center">%</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <!-- <td rowspan="3">Bandung Barat</td> -->
                              <td class="text-left">Melalui Transaksi Penjualan</td>
                              <td class="text-right">9</td>
                              <td class="text-right">4.6</td>
                              <td class="text-right">28</td>
                              <td class="text-right">14.4</td>
                              <td class="text-right">16</td>
                              <td class="text-right">8.2</td>
                              <td class="text-right">53</td>
                              <td class="text-right">27.3</td>
                            </tr>
                            <tr>
                              <td class="text-left">Tidak Melalui Transaksi Penjualan</td>
                              <td class="text-right">24</td>
                              <td class="text-right">12.4</td>
                              <td class="text-right">85</td>
                              <td class="text-right">43.8</td>
                              <td class="text-right">32</td>
                              <td class="text-right">16.5</td>
                              <td class="text-right">141</td>
                              <td class="text-right">72.7</td>
                            </tr>
                          </tbody>
                          <tfoot>
                            <tr>
                              <td class="text-left">Total</td>
                              <td class="text-right">33</td>
                              <td class="text-right">17.0</td>
                              <td class="text-right">113</td>
                              <td class="text-right">58.2</td>
                              <td class="text-right">48</td>
                              <td class="text-right">24.8</td>
                              <td class="text-right">194</td>
                              <td class="text-right">100</td>
                            </tr>
                          </tfoot>
                        </table>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>

                  <div class="row">  
                    <div class="card col-12" style="box-shadow: 0 0 10px black;">
                      <div class="card-header" style="margin: 0 auto;">
                        <h3 class="card-title text-center" style="font-weight: bold; font-size: 1.2em; margin-top: 1em; margin-top: 1em;">Jumlah Anggota Rumah Tangga Petani Pelaku Alih Fungsi Lahan<br>Menurut Mekanismenya di Kabupaten Purwakarta</h3>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                        <table id="tabulasi3PWK" class="table table-bordered table-striped">
                          <thead>
                            <tr>
                              <!-- <th class="text-center" rowspan="3">Kabupaten</th> -->
                              <th class="text-center" rowspan="3">Mekanisme Alih Fungsi</th>
                              <th class="text-center" colspan="6">Interval Jumlah Anggota Rumah Tangga (Orang)</th>
                              <th class="text-center" colspan="2" rowspan="2">Total</th>
                            </tr>
                            <tr>
                              <th class="text-center" colspan="2">Di Bawah Rata-rata (1-2)</th>
                              <th class="text-center" colspan="2">Sekitar Rata-rata (3-4)</th>
                              <th class="text-center" colspan="2">Di Atas Rata-rata (>4)</th>
                            </tr>
                            <tr>
                              <th class="text-center">Jml</th>
                              <th class="text-center">%</th>
                              <th class="text-center">Jml</th>
                              <th class="text-center">%</th>
                              <th class="text-center">Jml</th>
                              <th class="text-center">%</th>
                              <th class="text-center">Jml</th>
                              <th class="text-center">%</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <!-- <td rowspan="3">Purwakarta</td> -->
                              <td class="text-left">Melalui Transaksi Penjualan</td>
                              <td class="text-right">14</td>
                              <td class="text-right">14.1</td>
                              <td class="text-right">24</td>
                              <td class="text-right">24.2</td>
                              <td class="text-right">17</td>
                              <td class="text-right">17.2</td>
                              <td class="text-right">55</td>
                              <td class="text-right">55.6</td>
                            </tr>
                            <tr>
                              <td class="text-left">Tidak Melalui Transaksi Penjualan</td>
                              <td class="text-right">10</td>
                              <td class="text-right">10.1</td>
                              <td class="text-right">18</td>
                              <td class="text-right">18.2</td>
                              <td class="text-right">16</td>
                              <td class="text-right">16.2</td>
                              <td class="text-right">44</td>
                              <td class="text-right">44.2</td>
                            </tr>
                          </tbody>
                          <tfoot>
                           <tr>
                              <td class="text-left">Total</td>
                              <td class="text-right">24</td>
                              <td class="text-right">24.2</td>
                              <td class="text-right">42</td>
                              <td class="text-right">42.4</td>
                              <td class="text-right">33</td>
                              <td class="text-right">33.4</td>
                              <td class="text-right">99</td>
                              <td class="text-right">100</td>
                            </tr>
                          </tfoot>
                        </table>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>

                  <div class="row">  
                    <div class="card col-12" style="box-shadow: 0 0 10px black;">
                      <div class="card-header" style="margin: 0 auto;">
                        <h3 class="card-title" style="font-weight: bold; font-size: 1.2em; margin-top: 1em;">Tingkat Pendidikan Petani Pelaku Alih Fungsi Lahan di Kabupaten Bandung Barat dan Purwakarta</h3>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                        <table id="tabulasi4" class="table table-bordered table-striped">
                          <thead>
                            <tr>
                              <th class="text-center" rowspan="3">Kabupaten</th>
                              <th class="text-center" colspan="6">Tingkat Pendidikan</th>
                              <th class="text-center" colspan="2" rowspan="2">Total</th>
                            </tr>
                            <tr>
                              <th class="text-center" colspan="2">Pendidikan Dasar</th>
                              <th class="text-center" colspan="2">Pendidikan Menengah</th>
                              <th class="text-center" colspan="2">Pendidikan Tinggi</th>
                            </tr>
                            <tr>
                              <th class="text-center">Jumlah</th>
                              <th class="text-center">%</th>
                              <th class="text-center">Jumlah</th>
                              <th class="text-center">%</th>
                              <th class="text-center">Jumlah</th>
                              <th class="text-center">%</th>
                              <th class="text-center">Jumlah</th>
                              <th class="text-center">%</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td class="text-left">Bandung Barat</td>
                              <td class="text-right">103</td>
                              <td class="text-right">53.09</td>
                              <td class="text-right">81</td>
                              <td class="text-right">41.75</td>
                              <td class="text-right">10</td>
                              <td class="text-right">5.15</td>
                              <td class="text-right">194</td>
                              <td class="text-right">100</td>
                            </tr>
                            <tr>
                              <td class="text-left">Purwakarta</td>
                              <td class="text-right">73</td>
                              <td class="text-right">73.74</td>
                              <td class="text-right">18</td>
                              <td class="text-right">18.18</td>
                              <td class="text-right">8</td>
                              <td class="text-right">8.08</td>
                              <td class="text-right">99</td>
                              <td class="text-right">100</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>

                  <div class="row">  
                    <div class="card col-12" style="box-shadow: 0 0 10px black;">
                      <div class="card-header" style="margin: 0 auto;">
                        <h3 class="card-title" style="font-weight: bold; font-size: 1.2em; margin-top: 1em;">Lama Bertani Petani Pelaku Alih Fungsi Lahan di Kabupaten Bandung Barat dan Purwakarta</h3>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                        <table id="tabulasi5" class="table table-bordered table-striped">
                          <thead>
                            <tr>
                              <th class="text-center" rowspan="3">Kabupaten</th>
                              <th class="text-center" colspan="6">Lama Bertani (tahun)</th>
                              <th class="text-center" colspan="2" rowspan="2">Total</th>
                            </tr>
                            <tr>
                              <th class="text-center" colspan="2">1-20</th>
                              <th class="text-center" colspan="2">21-40</th>
                              <th class="text-center" colspan="2">>40</th>
                            </tr>
                            <tr>
                              <th class="text-center">Jumlah</th>
                              <th class="text-center">%</th>
                              <th class="text-center">Jumlah</th>
                              <th class="text-center">%</th>
                              <th class="text-center">Jumlah</th>
                              <th class="text-center">%</th>
                              <th class="text-center">Jumlah</th>
                              <th class="text-center">%</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td class="text-left">Bandung Barat</td>
                              <td class="text-right">107</td>
                              <td class="text-right">55.15</td>
                              <td class="text-right">44</td>
                              <td class="text-right">22.69</td>
                              <td class="text-right">43</td>
                              <td class="text-right">22.16</td>
                              <td class="text-right">194</td>
                              <td class="text-right">100</td>
                            </tr>
                            <tr>
                              <td class="text-left">Purwakarta</td>
                              <td class="text-right">45</td>
                              <td class="text-right">45.46</td>
                              <td class="text-right">34</td>
                              <td class="text-right">34.34</td>
                              <td class="text-right">20</td>
                              <td class="text-right">20.2</td>
                              <td class="text-right">99</td>
                              <td class="text-right">100</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>

                  <div class="row">  
                    <div class="card col-12" style="box-shadow: 0 0 10px black;">
                      <div class="card-header" style="margin: 0 auto;">
                        <h3 class="card-title text-center" style="font-weight: bold; font-size: 1.2em; margin-top: 1em;">Pekerjaan Utama Petani Setelah Melakukan Alih Fungsi Lahan<br>di Kabupaten Bandung Barat dan Purwakarta</h3>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                        <table id="tabulasi6" class="table table-bordered table-striped">
                          <thead>
                            <tr>
                              <th class="text-center" rowspan="3">Kabupaten</th>
                              <th class="text-center" colspan="6">Pekerjaan Utama Setelah Alih Fungsi Lahan</th>
                              <th class="text-center" colspan="2" rowspan="2">Total</th>
                            </tr>
                            <tr>
                              <th class="text-center" colspan="2">Pertanian</th>
                              <th class="text-center" colspan="2">Usaha Lain</th>
                              <th class="text-center" colspan="2">Tidak Bekerja</th>
                            </tr>
                            <tr>
                              <th class="text-center">Jumlah</th>
                              <th class="text-center">%</th>
                              <th class="text-center">Jumlah</th>
                              <th class="text-center">%</th>
                              <th class="text-center">Jumlah</th>
                              <th class="text-center">%</th>
                              <th class="text-center">Jumlah</th>
                              <th class="text-center">%</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td class="text-left">Bandung Barat</td>
                              <td class="text-right">103</td>
                              <td class="text-right">53.09</td>
                              <td class="text-right">64</td>
                              <td class="text-right">32.99</td>
                              <td class="text-right">27</td>
                              <td class="text-right">13.92</td>
                              <td class="text-right">194</td>
                              <td class="text-right">100</td>
                            </tr>
                            <tr>
                              <td class="text-left">Purwakarta</td>
                              <td class="text-right">49</td>
                              <td class="text-right">45.50</td>
                              <td class="text-right">34</td>
                              <td class="text-right">34.34</td>
                              <td class="text-right">16</td>
                              <td class="text-right">16.16</td>
                              <td class="text-right">99</td>
                              <td class="text-right">100</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>

                  <div class="row">  
                    <div class="card col-12" style="box-shadow: 0 0 10px black;">
                      <div class="card-header" style="margin: 0 auto;">
                        <h3 class="card-title" style="font-weight: bold; font-size: 1.2em; margin-top: 1em;">Alasan Petani Melakukan Alih Fungsi Lahan di Kabupaten Bandung Barat dan Purwakarta</h3>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                      <table id="tabulasi7" class="table table-bordered table-striped" style="font-size: 0.9em;">
                          <thead>
                            <tr>
                              <th class="text-center" rowspan="3">Kabupaten</th>
                              <th class="text-center" colspan="14">Alasan Petani</th>
                              <th class="text-center" colspan="2" rowspan="2">Total</th>
                            </tr>
                            <tr>
                              <th class="text-center" colspan="2">Ekonomi</th>
                              <th class="text-center" colspan="2">Sosial</th>
                              <th class="text-center" colspan="2">Demografi</th>
                              <th class="text-center" colspan="2">Kebijakan</th>
                              <th class="text-center" colspan="2">Teknis</th>
                              <th class="text-center" colspan="2">Lingkungan & Geografis</th>
                              <th class="text-center" colspan="2">Lainnya</th>
                            </tr>
                            <tr>
                              <th class="text-center">Jml</th>
                              <th class="text-center">%</th>
                              <th class="text-center">Jml</th>
                              <th class="text-center">%</th>
                              <th class="text-center">Jml</th>
                              <th class="text-center">%</th>
                              <th class="text-center">Jml</th>
                              <th class="text-center">%</th>
                              <th class="text-center">Jml</th>
                              <th class="text-center">%</th>
                              <th class="text-center">Jml</th>
                              <th class="text-center">%</th>
                              <th class="text-center">Jml</th>
                              <th class="text-center">%</th>
                              <th class="text-center">Jml</th>
                              <th class="text-center">%</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td class="text-left">Bandung Barat</td>
                              <td class="text-right">142</td>
                              <td class="text-right">73.95</td>
                              <td class="text-right">2</td>
                              <td class="text-right">1.03</td>
                              <td class="text-right">7</td>
                              <td class="text-right">3.61</td>
                              <td class="text-right">13</td>
                              <td class="text-right">6.7</td>
                              <td class="text-right">3</td>
                              <td class="text-right">1.55</td>
                              <td class="text-right">0</td>
                              <td class="text-right">0</td>
                              <td class="text-right">27</td>
                              <td class="text-right">13.92</td>
                              <td class="text-right">194</td>
                              <td class="text-right">100</td>
                            </tr>
                            <tr>
                              <td class="text-left">Purwakarta</td>
                              <td class="text-right">50</td>
                              <td class="text-right">50.51</td>
                              <td class="text-right">0</td>
                              <td class="text-right">0</td>
                              <td class="text-right">7</td>
                              <td class="text-right">7.07</td>
                              <td class="text-right">7</td>
                              <td class="text-right">7.07</td>
                              <td class="text-right">2</td>
                              <td class="text-right">2.02</td>
                              <td class="text-right">0</td>
                              <td class="text-right">0</td>
                              <td class="text-right">33</td>
                              <td class="text-right">33.33</td>
                              <td class="text-right">99</td>
                              <td class="text-right">100</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>

                  <div class="row">  
                    <div class="card col-12" style="box-shadow: 0 0 10px black;">
                      <div class="card-header" style="margin: 0 auto;">
                        <h3 class="card-title" style="font-weight: bold; font-size: 1.2em; margin-top: 1em;">Lama Bertani Berdasarkan Perubahan Pekerjaan di Kabupaten Bandung Barat</h3>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                        <table id="tabulasi8KBB" class="table table-bordered table-striped">
                          <thead>
                            <tr>
                              <!-- <th class="text-center" rowspan="3">Kabupaten</th> -->
                              <th class="text-center" rowspan="3">Perubahan Pekerjaan</th>
                              <th class="text-center" colspan="6">Lama Bertani (tahun)</th>
                              <th class="text-center" colspan="2" rowspan="2">Total</th>
                            </tr>
                            <tr>
                              <th class="text-center" colspan="2">1-20</th>
                              <th class="text-center" colspan="2">21-40</th>
                              <th class="text-center" colspan="2">>40</th>
                            </tr>
                            <tr>
                              <th class="text-center">Jml</th>
                              <th class="text-center">%</th>
                              <th class="text-center">Jml</th>
                              <th class="text-center">%</th>
                              <th class="text-center">Jml</th>
                              <th class="text-center">%</th>
                              <th class="text-center">Jml</th>
                              <th class="text-center">%</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <!-- <td rowspan="3">Bandung Barat</td> -->
                              <td class="text-left">Pertanian</td>
                              <td class="text-right">51</td>
                              <td class="text-right">26.29</td>
                              <td class="text-right">23</td>
                              <td class="text-right">11.86</td>
                              <td class="text-right">29</td>
                              <td class="text-right">14.95</td>
                              <td class="text-right">103</td>
                              <td class="text-right">53.1</td>
                            </tr>
                            <tr>
                              <td class="text-left">Usaha Lain</td>
                              <td class="text-right">43</td>
                              <td class="text-right">22.16</td>
                              <td class="text-right">16</td>
                              <td class="text-right">8.25</td>
                              <td class="text-right">5</td>
                              <td class="text-right">2.58</td>
                              <td class="text-right">64</td>
                              <td class="text-right">32.99</td>
                            </tr>
                            <tr>
                              <td class="text-left">Tidak Bekerja</td>
                              <td class="text-right">13</td>
                              <td class="text-right">6.7</td>
                              <td class="text-right">5</td>
                              <td class="text-right">2.58</td>
                              <td class="text-right">9</td>
                              <td class="text-right">4.63</td>
                              <td class="text-right">27</td>
                              <td class="text-right">13.91</td>
                            </tr>
                          </tbody>
                          <tfoot>
                            <tr>
                              <td class="text-left">Total</td>
                              <td class="text-right">107</td>
                              <td class="text-right">55.15</td>
                              <td class="text-right">44</td>
                              <td class="text-right">22.69</td>
                              <td class="text-right">43</td>
                              <td class="text-right">22.16</td>
                              <td class="text-right">194</td>
                              <td class="text-right">100</td>
                            </tr>
                          </tfoot>
                        </table>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>

                  <div class="row">  
                    <div class="card col-12" style="box-shadow: 0 0 10px black;">
                      <div class="card-header" style="margin: 0 auto;">
                        <h3 class="card-title" style="font-weight: bold; font-size: 1.2em; margin-top: 1em;">Lama Bertani Berdasarkan Perubahan Pekerjaan di Kabupaten Purwakarta</h3>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                        <table id="tabulasi8PWK" class="table table-bordered table-striped">
                          <thead>
                            <tr>
                              <!-- <th class="text-center" rowspan="3">Kabupaten</th> -->
                              <th class="text-center" rowspan="3">Perubahan Pekerjaan</th>
                              <th class="text-center" colspan="6">Lama Bertani (tahun)</th>
                              <th class="text-center" colspan="2" rowspan="2">Total</th>
                            </tr>
                            <tr>
                              <th class="text-center" colspan="2">1-20</th>
                              <th class="text-center" colspan="2">21-40</th>
                              <th class="text-center" colspan="2">>40</th>
                            </tr>
                            <tr>
                              <th class="text-center">Jml</th>
                              <th class="text-center">%</th>
                              <th class="text-center">Jml</th>
                              <th class="text-center">%</th>
                              <th class="text-center">Jml</th>
                              <th class="text-center">%</th>
                              <th class="text-center">Jml</th>
                              <th class="text-center">%</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <!-- <td rowspan="3">Purwakarta</td> -->
                              <td class="text-left">Pertanian</td>
                              <td class="text-right">14</td>
                              <td class="text-right">14.14</td>
                              <td class="text-right">19</td>
                              <td class="text-right">19.19</td>
                              <td class="text-right">16</td>
                              <td class="text-right">16.16</td>
                              <td class="text-right">49</td>
                              <td class="text-right">49.5</td>
                            </tr>
                            <tr>
                              <td class="text-left">Usaha Lain</td>
                              <td class="text-right">22</td>
                              <td class="text-right">22.22</td>
                              <td class="text-right">10</td>
                              <td class="text-right">10.1</td>
                              <td class="text-right">2</td>
                              <td class="text-right">2.02</td>
                              <td class="text-right">34</td>
                              <td class="text-right">34.34</td>
                            </tr>
                            <tr>
                              <td class="text-left">Tidak Bekerja</td>
                              <td class="text-right">9</td>
                              <td class="text-right">9.1</td>
                              <td class="text-right">5</td>
                              <td class="text-right">5.05</td>
                              <td class="text-right">2</td>
                              <td class="text-right">2.02</td>
                              <td class="text-right">16</td>
                              <td class="text-right">16.16</td>
                            </tr>
                          </tbody>
                          <tfoot>
                            <tr>
                              <td class="text-left">Total</td>
                              <td class="text-right">45</td>
                              <td class="text-right">45.46</td>
                              <td class="text-right">34</td>
                              <td class="text-right">34.34</td>
                              <td class="text-right">20</td>
                              <td class="text-right">20.2</td>
                              <td class="text-right">99</td>
                              <td class="text-right">100</td>
                            </tr>
                          </tfoot>
                        </table>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>

                  <div class="row">  
                    <div class="card col-12" style="box-shadow: 0 0 10px black;">
                      <div class="card-header" style="margin: 0 auto;">
                        <h3 class="card-title text-center" style="font-weight: bold; font-size: 1.2em; margin-top: 1em;">Luas Kepemilikan Lahan Petani Pelaku Alih Fungsi Lahan<br>di Kabupaten Bandung Barat dan Purwakarta</h3>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                        <table id="tabulasi9" class="table table-bordered table-striped">
                          <thead>
                            <tr>
                              <th class="text-center" rowspan="3">Kabupaten</th>
                              <th class="text-center" colspan="6">Luas Kepemilikan Lahan (m&sup2;)</th>
                              <th class="text-center" colspan="2" rowspan="2">Total</th>
                            </tr>
                            <tr>
                              <th class="text-center" colspan="2">1-1000</th>
                              <th class="text-center" colspan="2">1001-5000</th>
                              <th class="text-center" colspan="2">>5000</th>
                            </tr>
                            <tr>
                              <th class="text-center">Jumlah</th>
                              <th class="text-center">%</th>
                              <th class="text-center">Jumlah</th>
                              <th class="text-center">%</th>
                              <th class="text-center">Jumlah</th>
                              <th class="text-center">%</th>
                              <th class="text-center">Jumlah</th>
                              <th class="text-center">%</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td class="text-left">Bandung Barat</td>
                              <td class="text-right">127</td>
                              <td class="text-right">65.46</td>
                              <td class="text-right">25</td>
                              <td class="text-right">12.89</td>
                              <td class="text-right">42</td>
                              <td class="text-right">21.65</td>
                              <td class="text-right">194</td>
                              <td class="text-right">100</td>
                            </tr>
                            <tr>
                              <td class="text-left">Purwakarta</td>
                              <td class="text-right">48</td>
                              <td class="text-right">48.48</td>
                              <td class="text-right">21</td>
                              <td class="text-right">21.21</td>
                              <td class="text-right">30</td>
                              <td class="text-right">30.3</td>
                              <td class="text-right">99</td>
                              <td class="text-right">100</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>

                  <div class="row">  
                    <div class="card col-12" style="box-shadow: 0 0 10px black;">
                      <div class="card-header" style="margin: 0 auto;">
                        <h3 class="card-title text-center" style="font-weight: bold; font-size: 1.2em; margin-top: 1em;">Asal Mula Lahan Pertanian Petani Pelaku Alih Fungsi Lahan<br>di Kabupaten Bandung Barat dan Purwakarta</h3>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                        <table id="tabulasi10" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                              <th class="text-center" rowspan="3">Kabupaten</th>
                              <th class="text-center" colspan="4">Asal Mula Lahan</th>
                              <th class="text-center" colspan="2" rowspan="2">Total</th>
                            </tr>
                            <tr>
                              <th class="text-center" colspan="2">Beli</th>
                              <th class="text-center" colspan="2">Warisan</th>
                            </tr>
                            <tr>
                              <th class="text-center">Jumlah</th>
                              <th class="text-center">%</th>
                              <th class="text-center">Jumlah</th>
                              <th class="text-center">%</th>
                              <th class="text-center">Jumlah</th>
                              <th class="text-center">%</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td class="text-left">Bandung Barat</td>
                              <td class="text-right">74</td>
                              <td class="text-right">38.14</td>
                              <td class="text-right">120</td>
                              <td class="text-right">61.86</td>
                              <td class="text-right">194</td>
                              <td class="text-right">100</td>
                            </tr>
                            <tr>
                              <td class="text-left">Purwakarta</td>
                              <td class="text-right">46</td>
                              <td class="text-right">46.46</td>
                              <td class="text-right">53</td>
                              <td class="text-right">53.54</td>
                              <td class="text-right">99</td>
                              <td class="text-right">100</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>

                  <div class="row">  
                    <div class="card col-12" style="box-shadow: 0 0 10px black;">
                      <div class="card-header" style="margin: 0 auto;">
                        <h3 class="card-title" style="font-weight: bold; font-size: 1.2em; margin-top: 1em;">Luas Lahan Alih Fungsi Kabupaten Bandung Barat dan Purwakarta</h3>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                        <table id="tabulasi11" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                              <th class="text-center" rowspan="3">Kabupaten</th>
                              <th class="text-center" colspan="6">Luas Alih Fungsi Lahan (m&sup2;)</th>
                              <th class="text-center" colspan="2" rowspan="2">Total</th>
                            </tr>
                            <tr>
                              <th class="text-center" colspan="2">Rendah</th>
                              <th class="text-center" colspan="2">Sedang</th>
                              <th class="text-center" colspan="2">Tinggi</th>
                            </tr>
                            <tr>
                              <th class="text-center">Jumlah</th>
                              <th class="text-center">%</th>
                              <th class="text-center">Jumlah</th>
                              <th class="text-center">%</th>
                              <th class="text-center">Jumlah</th>
                              <th class="text-center">%</th>
                              <th class="text-center">Jumlah</th>
                              <th class="text-center">%</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td class="text-left">Bandung Barat</td>
                              <td class="text-right">159</td>
                              <td class="text-right">81.96</td>
                              <td class="text-right">15</td>
                              <td class="text-right">7.73</td>
                              <td class="text-right">20</td>
                              <td class="text-right">10.31</td>
                              <td class="text-right">194</td>
                              <td class="text-right">100</td>
                            </tr>
                            <tr>
                              <td class="text-left">Purwakarta</td>
                              <td class="text-right">57</td>
                              <td class="text-right">57.58</td>
                              <td class="text-right">13</td>
                              <td class="text-right">13.13</td>
                              <td class="text-right">29</td>
                              <td class="text-right">29.29</td>
                              <td class="text-right">99</td>
                              <td class="text-right">100</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>

                  <div class="row">  
                    <div class="card col-12" style="box-shadow: 0 0 10px black;">
                      <div class="card-header" style="margin: 0 auto;">
                        <h3 class="card-title" style="font-weight: bold; font-size: 1.2em; margin-top: 1em;">Mekanisme Alih Fungsi Lahan Pertanian Kabupaten Bandung Barat dan Purwakarta</h3>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                        <table id="tabulasi12" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                              <th class="text-center" rowspan="3">Kabupaten</th>
                              <th class="text-center" colspan="4">Mekanisme Alih Fungsi Lahan</th>
                              <th class="text-center" colspan="2" rowspan="2">Total</th>
                            </tr>
                            <tr>
                              <th class="text-center" colspan="2">Dilakukan Melalui Transaksi</th>
                              <th class="text-center" colspan="2">Tidak Dilakukan Transaksi</th>
                            </tr>
                            <tr>
                              <th class="text-center">Jumlah</th>
                              <th class="text-center">%</th>
                              <th class="text-center">Jumlah</th>
                              <th class="text-center">%</th>
                              <th class="text-center">Jumlah</th>
                              <th class="text-center">%</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td class="text-left">Bandung Barat</td>
                              <td class="text-right">53</td>
                              <td class="text-right">27.32</td>
                              <td class="text-right">141</td>
                              <td class="text-right">72.68</td>
                              <td class="text-right">194</td>
                              <td class="text-right">100</td>
                            </tr>
                            <tr>
                              <td class="text-left">Purwakarta</td>
                              <td class="text-right">55</td>
                              <td class="text-right">55.56</td>
                              <td class="text-right">44</td>
                              <td class="text-right">44.44</td>
                              <td class="text-right">99</td>
                              <td class="text-right">100</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>

                  <div class="row">  
                    <div class="card col-12" style="box-shadow: 0 0 10px black;">
                      <div class="card-header" style="margin: 0 auto;">
                        <h3 class="card-title" style="font-weight: bold; font-size: 1.2em; margin-top: 1em;">Harga Jual Lahan Pertanian Kabupaten Bandung Barat dan Purwakarta</h3>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                        <table id="tabulasi13" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                              <th class="text-center" rowspan="3">Kabupaten</th>
                              <th class="text-center" colspan="6">Harga Jual Lahan (ribu rupiah/m&sup2;)</th>
                              <th class="text-center" colspan="2" rowspan="2">Total</th>
                            </tr>
                            <tr>
                              <th class="text-center" colspan="2">1-250</th>
                              <th class="text-center" colspan="2">251-500</th>
                              <th class="text-center" colspan="2">>500</th>
                            </tr>
                            <tr>
                              <th class="text-center">Jumlah</th>
                              <th class="text-center">%</th>
                              <th class="text-center">Jumlah</th>
                              <th class="text-center">%</th>
                              <th class="text-center">Jumlah</th>
                              <th class="text-center">%</th>
                              <th class="text-center">Jumlah</th>
                              <th class="text-center">%</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td class="text-left">Bandung Barat</td>
                              <td class="text-right">115</td>
                              <td class="text-right">59.28</td>
                              <td class="text-right">50</td>
                              <td class="text-right">25.77</td>
                              <td class="text-right">29</td>
                              <td class="text-right">14.95</td>
                              <td class="text-right">194</td>
                              <td class="text-right">100</td>
                            </tr>
                            <tr>
                              <td class="text-left">Purwakarta</td>
                              <td class="text-right">77</td>
                              <td class="text-right">77.78</td>
                              <td class="text-right">15</td>
                              <td class="text-right">15.15</td>
                              <td class="text-right">7</td>
                              <td class="text-right">7.07</td>
                              <td class="text-right">99</td>
                              <td class="text-right">100</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>

                  <div class="row">  
                    <div class="card col-12" style="box-shadow: 0 0 10px black;">
                      <div class="card-header" style="margin: 0 auto;">
                        <h3 class="card-title" style="font-weight: bold; font-size: 1.2em; margin-top: 1em;">Harga Sewa Lahan Pertanian Kabupaten Bandung Barat dan Purwakarta</h3>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                        <table id="tabulasi14" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                              <th class="text-center" rowspan="3">Kabupaten</th>
                              <th class="text-center" colspan="6">Harga Sewa Lahan (ribu rupiah/m&sup2;)</th>
                              <th class="text-center" colspan="2" rowspan="2">Total</th>
                            </tr>
                            <tr>
                              <th class="text-center" colspan="2"><=50</th>
                              <th class="text-center" colspan="2">51-100</th>
                              <th class="text-center" colspan="2">>100</th>
                            </tr>
                            <tr>
                              <th class="text-center">Jumlah</th>
                              <th class="text-center">%</th>
                              <th class="text-center">Jumlah</th>
                              <th class="text-center">%</th>
                              <th class="text-center">Jumlah</th>
                              <th class="text-center">%</th>
                              <th class="text-center">Jumlah</th>
                              <th class="text-center">%</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td class="text-left">Bandung Barat</td>
                              <td class="text-right">147</td>
                              <td class="text-right">75.77</td>
                              <td class="text-right">21</td>
                              <td class="text-right">10.82</td>
                              <td class="text-right">26</td>
                              <td class="text-right">13.40</td>
                              <td class="text-right">194</td>
                              <td class="text-right">100</td>
                            </tr>
                            <tr>
                              <td class="text-left">Purwakarta</td>
                              <td class="text-right">85</td>
                              <td class="text-right">85.86</td>
                              <td class="text-right">7</td>
                              <td class="text-right">7.07</td>
                              <td class="text-right">7</td>
                              <td class="text-right">7.07</td>
                              <td class="text-right">99</td>
                              <td class="text-right">100</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>

                  <div class="row">  
                    <div class="card col-12" style="box-shadow: 0 0 10px black;">
                      <div class="card-header" style="margin: 0 auto;">
                        <h3 class="card-title" style="font-weight: bold; font-size: 1.2em; margin-top: 1em;">Jenis Komoditas Pertanian Kabupaten Bandung Barat dan Purwakarta</h3>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                        <table id="tabulasi15" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                              <th class="text-center" rowspan="3">Kabupaten</th>
                              <th class="text-center" colspan="8">Jenis Komoditas Utama</th>
                              <th class="text-center" colspan="2" rowspan="2">Total</th>
                            </tr>
                            <tr>
                              <th class="text-center" colspan="2">Padi</th>
                              <th class="text-center" colspan="2">Palawija</th>
                              <th class="text-center" colspan="2">Hortikultura</th>
                              <th class="text-center" colspan="2">Lainnya</th>
                            </tr>
                            <tr>
                              <th class="text-center">Jumlah</th>
                              <th class="text-center">%</th>
                              <th class="text-center">Jumlah</th>
                              <th class="text-center">%</th>
                              <th class="text-center">Jumlah</th>
                              <th class="text-center">%</th>
                              <th class="text-center">Jumlah</th>
                              <th class="text-center">%</th>
                              <th class="text-center">Jumlah</th>
                              <th class="text-center">%</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td class="text-left">Bandung Barat</td>
                              <td class="text-right">136</td>
                              <td class="text-right">70.1</td>
                              <td class="text-right">37</td>
                              <td class="text-right">19.07</td>
                              <td class="text-right">11</td>
                              <td class="text-right">5.67</td>
                              <td class="text-right">10</td>
                              <td class="text-right">5.12</td>
                              <td class="text-right">194</td>
                              <td class="text-right">100</td>
                            </tr>
                            <tr>
                              <td class="text-left">Purwakarta</td>
                              <td class="text-right">86</td>
                              <td class="text-right">86.87</td>
                              <td class="text-right">7</td>
                              <td class="text-right">7.07</td>
                              <td class="text-right">4</td>
                              <td class="text-right">4.04</td>
                              <td class="text-right">2</td>
                              <td class="text-right">2.02</td>
                              <td class="text-right">99</td>
                              <td class="text-right">100</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>

                  <div class="row">  
                    <div class="card col-12" style="box-shadow: 0 0 10px black;">
                      <div class="card-header" style="margin: 0 auto;">
                        <h3 class="card-title" style="font-weight: bold; font-size: 1.2em; margin-top: 1em;">Luas Kepemilikan Lahan Berdasarkan Asal Mulanya di Kabupaten Bandung Barat</h3>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                        <table id="tabulasi16KBB" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                              <th class="text-center" rowspan="3">Asal Mula</th>
                              <th class="text-center" colspan="6">Luas Lahan (m&sup2;)</th>
                              <th class="text-center" colspan="2" rowspan="2">Total</th>
                            </tr>
                            <tr>
                              <th class="text-center" colspan="2">Rendah (1-700)</th>
                              <th class="text-center" colspan="2">Sedang (701-1400)</th>
                              <th class="text-center" colspan="2">Tinggi (>1400)</th>
                            </tr>
                            <tr>
                              <th class="text-center">Jumlah</th>
                              <th class="text-center">%</th>
                              <th class="text-center">Jumlah</th>
                              <th class="text-center">%</th>
                              <th class="text-center">Jumlah</th>
                              <th class="text-center">%</th>
                              <th class="text-center">Jumlah</th>
                              <th class="text-center">%</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td class="text-left">Beli</td>
                              <td class="text-right">59</td>
                              <td class="text-right">79.73</td>
                              <td class="text-right">9</td>
                              <td class="text-right">12.16</td>
                              <td class="text-right">6</td>
                              <td class="text-right">8.11</td>
                              <td class="text-right">74</td>
                              <td class="text-right">38.14</td>
                            </tr>
                            <tr>
                              <td class="text-left">Warisan</td>
                              <td class="text-right">100</td>
                              <td class="text-right">83.33</td>
                              <td class="text-right">6</td>
                              <td class="text-right">5.00</td>
                              <td class="text-right">14</td>
                              <td class="text-right">11.67</td>
                              <td class="text-right">120</td>
                              <td class="text-right">61.86</td>
                            </tr>
                          </tbody>
                          <tfoot>
                            <tr>
                                <td class="text-left">Total</td>
                                <td class="text-right">159</td>
                                <td class="text-right">81.96</td>
                                <td class="text-right">15</td>
                                <td class="text-right">7.73</td>
                                <td class="text-right">20</td>
                                <td class="text-right">10.31</td>
                                <td class="text-right">194</td>
                                <td class="text-right">100</td>
                              </tr>
                          </tfoot>
                        </table>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>

                  <div class="row">  
                    <div class="card col-12" style="box-shadow: 0 0 10px black;">
                      <div class="card-header" style="margin: 0 auto;">
                        <h3 class="card-title" style="font-weight: bold; font-size: 1.2em; margin-top: 1em;">Luas Kepemilikan Lahan Berdasarkan Asal Mulanya di Kabupaten Purwakarta</h3>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                        <table id="tabulasi16PWK" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                              <th class="text-center" rowspan="3">Asal Mula</th>
                              <th class="text-center" colspan="6">Luas Lahan (m&sup2;)</th>
                              <th class="text-center" colspan="2" rowspan="2">Total</th>
                            </tr>
                            <tr>
                              <th class="text-center" colspan="2">Rendah (1-700)</th>
                              <th class="text-center" colspan="2">Sedang (701-1400)</th>
                              <th class="text-center" colspan="2">Tinggi (>1400)</th>
                            </tr>
                            <tr>
                              <th class="text-center">Jumlah</th>
                              <th class="text-center">%</th>
                              <th class="text-center">Jumlah</th>
                              <th class="text-center">%</th>
                              <th class="text-center">Jumlah</th>
                              <th class="text-center">%</th>
                              <th class="text-center">Jumlah</th>
                              <th class="text-center">%</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td class="text-left">Beli</td>
                              <td class="text-right">26</td>
                              <td class="text-right">56.52</td>
                              <td class="text-right">7</td>
                              <td class="text-right">15.22</td>
                              <td class="text-right">13</td>
                              <td class="text-right">28.26</td>
                              <td class="text-right">46</td>
                              <td class="text-right">46.46</td>
                            </tr>
                            <tr>
                              <td class="text-left">Warisan</td>
                              <td class="text-right">31</td>
                              <td class="text-right">58.49</td>
                              <td class="text-right">6</td>
                              <td class="text-right">11.32</td>
                              <td class="text-right">16</td>
                              <td class="text-right">30.19</td>
                              <td class="text-right">53</td>
                              <td class="text-right">53.54</td>
                            </tr>
                          </tbody>
                          <tfoot>
                            <tr>
                              <td class="text-left">Total</td>
                              <td class="text-right">57</td>
                              <td class="text-right">57.58</td>
                              <td class="text-right">13</td>
                              <td class="text-right">13.13</td>
                              <td class="text-right">29</td>
                              <td class="text-right">29.29</td>
                              <td class="text-right">99</td>
                              <td class="text-right">100</td>
                            </tr>
                          </tfoot>
                        </table>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>

                  <div class="row">  
                    <div class="card col-12" style="box-shadow: 0 0 10px black;">
                      <div class="card-header" style="margin: 0 auto;">
                        <h3 class="card-title" style="font-weight: bold; font-size: 1.2em; margin-top: 1em;">Luas Alih Fungsi Lahan Berdasarkan Mekanisme Alih Fungsinya di Kabupaten Bandung Barat</h3>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                        <table id="tabulasi17KBB" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                              <th class="text-center" rowspan="3">Mekanisme Alih Fungsi</th>
                              <th class="text-center" colspan="6">Luas Alih Fungsi Lahan (m&sup2;)</th>
                              <th class="text-center" colspan="2" rowspan="2">Total</th>
                            </tr>
                            <tr>
                              <th class="text-center" colspan="2">1-1000</th>
                              <th class="text-center" colspan="2">1001-2000</th>
                              <th class="text-center" colspan="2">>2000</th>
                            </tr>
                            <tr>
                              <th class="text-center">Jumlah</th>
                              <th class="text-center">%</th>
                              <th class="text-center">Jumlah</th>
                              <th class="text-center">%</th>
                              <th class="text-center">Jumlah</th>
                              <th class="text-center">%</th>
                              <th class="text-center">Jumlah</th>
                              <th class="text-center">%</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td class="text-left">Melalui Transaksi Penjualan</td>
                              <td class="text-right">32</td>
                              <td class="text-right">61.54</td>
                              <td class="text-right">4</td>
                              <td class="text-right">7.69</td>
                              <td class="text-right">16</td>
                              <td class="text-right">30.77</td>
                              <td class="text-right">52</td>
                              <td class="text-right">26.9</td>
                            </tr>
                            <tr>
                              <td class="text-left">Tidak Melalui Transaksi Penjualan</td>
                              <td class="text-right">135</td>
                              <td class="text-right">95.74</td>
                              <td class="text-right">3</td>
                              <td class="text-right">2.13</td>
                              <td class="text-right">3</td>
                              <td class="text-right">2.13</td>
                              <td class="text-right">141</td>
                              <td class="text-right">73.1</td>
                            </tr>
                          </tbody>
                          <tfoot>
                            <tr>
                              <td class="text-left">Total</td>
                              <td class="text-right">167</td>
                              <td class="text-right">86.08</td>
                              <td class="text-right">7</td>
                              <td class="text-right">3.61</td>
                              <td class="text-right">19</td>
                              <td class="text-right">9.79</td>
                              <td class="text-right">194</td>
                              <td class="text-right">100</td>
                            </tr>
                          </tfoot>
                        </table>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>

                  <div class="row">  
                    <div class="card col-12" style="box-shadow: 0 0 10px black;">
                      <div class="card-header" style="margin: 0 auto;">
                        <h3 class="card-title" style="font-weight: bold; font-size: 1.2em; margin-top: 1em;">Luas Alih Fungsi Lahan Berdasarkan Mekanisme Alih Fungsinya di Kabupaten Purwakarta</h3>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                        <table id="tabulasi17PWK" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                              <th class="text-center" rowspan="3">Mekanisme Alih Fungsi</th>
                              <th class="text-center" colspan="6">Luas Alih Fungsi Lahan (m&sup2;)</th>
                              <th class="text-center" colspan="2" rowspan="2">Total</th>
                            </tr>
                            <tr>
                              <th class="text-center" colspan="2">1-1000</th>
                              <th class="text-center" colspan="2">1001-2000</th>
                              <th class="text-center" colspan="2">>2000</th>
                            </tr>
                            <tr>
                              <th class="text-center">Jumlah</th>
                              <th class="text-center">%</th>
                              <th class="text-center">Jumlah</th>
                              <th class="text-center">%</th>
                              <th class="text-center">Jumlah</th>
                              <th class="text-center">%</th>
                              <th class="text-center">Jumlah</th>
                              <th class="text-center">%</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td class="text-left">Melalui Transaksi Penjualan</td>
                              <td class="text-right">29</td>
                              <td class="text-right">52.73</td>
                              <td class="text-right">13</td>
                              <td class="text-right">23.64</td>
                              <td class="text-right">13</td>
                              <td class="text-right">23.64</td>
                              <td class="text-right">55</td>
                              <td class="text-right">55.6</td>
                            </tr>
                            <tr>
                              <td class="text-left">Tidak Melalui Transaksi Penjualan</td>
                              <td class="text-right">38</td>
                              <td class="text-right">86.36</td>
                              <td class="text-right">3</td>
                              <td class="text-right">6.82</td>
                              <td class="text-right">3</td>
                              <td class="text-right">6.82</td>
                              <td class="text-right">44</td>
                              <td class="text-right">44.4</td>
                            </tr>
                          </tbody>
                          <tfoot>
                            <tr>
                              <td class="text-left">Total</td>
                              <td class="text-right">67</td>
                              <td class="text-right">67.68</td>
                              <td class="text-right">16</td>
                              <td class="text-right">16.16</td>
                              <td class="text-right">16</td>
                              <td class="text-right">16.16</td>
                              <td class="text-right">99</td>
                              <td class="text-right">100</td>
                            </tr>
                          </tfoot>
                        </table>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>

                  <div class="row">  
                    <div class="card col-12" style="box-shadow: 0 0 10px black;">
                      <div class="card-header" style="margin: 0 auto;">
                        <h3 class="card-title" style="font-weight: bold; font-size: 1.2em; margin-top: 1em;">Harga Jual Lahan Berdasarkan Komoditas di Kabupaten Bandung Barat</h3>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                        <table id="tabulasi18KBB" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                              <th class="text-center" rowspan="3">No.</th>
                              <th class="text-center" rowspan="3">Komoditas</th>
                              <th class="text-center" colspan="6">Harga Jual Lahan (ribu rupiah/m&sup2;)</th>
                              <th class="text-center" colspan="2" rowspan="2">Total</th>
                            </tr>
                            <tr>
                              <th class="text-center" colspan="2">Rendah</th>
                              <th class="text-center" colspan="2">Sedang</th>
                              <th class="text-center" colspan="2">Tinggi</th>
                            </tr>
                            <tr>
                              <th class="text-center">Jumlah</th>
                              <th class="text-center">%</th>
                              <th class="text-center">Jumlah</th>
                              <th class="text-center">%</th>
                              <th class="text-center">Jumlah</th>
                              <th class="text-center">%</th>
                              <th class="text-center">Jumlah</th>
                              <th class="text-center">%</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td class="text-center">1.</td>
                              <td class="text-left">Padi</td>
                              <td class="text-right">74</td>
                              <td class="text-right">54.41</td>
                              <td class="text-right">38</td>
                              <td class="text-right">27.94</td>
                              <td class="text-right">24</td>
                              <td class="text-right">17.65</td>
                              <td class="text-right">136</td>
                              <td class="text-right">70.1</td>
                            </tr>
                            <tr>
                              <td class="text-center">2.</td>
                              <td class="text-left">Palawija</td>
                              <td class="text-right">26</td>
                              <td class="text-right">70.27</td>
                              <td class="text-right">7</td>
                              <td class="text-right">18.92</td>
                              <td class="text-right">4</td>
                              <td class="text-right">10.81</td>
                              <td class="text-right">37</td>
                              <td class="text-right">19.07</td>
                            </tr>
                            <tr>
                              <td class="text-center">3.</td>
                              <td class="text-left">Hortikultura</td>
                              <td class="text-right">4</td>
                              <td class="text-right">36.36</td>
                              <td class="text-right">5</td>
                              <td class="text-right">45.45</td>
                              <td class="text-right">2</td>
                              <td class="text-right">18.18</td>
                              <td class="text-right">11</td>
                              <td class="text-right">5.67</td>
                            </tr>
                            <tr>
                              <td class="text-center">4.</td>
                              <td class="text-left">Lainnya</td>
                              <td class="text-right">10</td>
                              <td class="text-right">100</td>
                              <td class="text-right">0</td>
                              <td class="text-right">0</td>
                              <td class="text-right">0</td>
                              <td class="text-right">0</td>
                              <td class="text-right">10</td>
                              <td class="text-right">5.15</td>
                            </tr>
                          </tbody>
                          <tfoot>
                            <tr>
                              <td class="text-center" colspan="2">Total</td>
                              <td class="text-right">114</td>
                              <td class="text-right">58.76</td>
                              <td class="text-right">50</td>
                              <td class="text-right">25.77</td>
                              <td class="text-right">30</td>
                              <td class="text-right">15.46</td>
                              <td class="text-right">194</td>
                              <td class="text-right">100</td>
                            </tr>
                          </tfoot>
                        </table>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>

                  <div class="row">  
                    <div class="card col-12" style="box-shadow: 0 0 10px black;">
                      <div class="card-header" style="margin: 0 auto;">
                        <h3 class="card-title" style="font-weight: bold; font-size: 1.2em; margin-top: 1em;">Harga Jual Lahan Berdasarkan Komoditas di Kabupaten Purwakarta</h3>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                        <table id="tabulasi18PWK" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                              <th class="text-center" rowspan="3">No.</th>
                              <th class="text-center" rowspan="3">Komoditas</th>
                              <th class="text-center" colspan="6">Harga Jual Lahan (ribu rupiah/m&sup2;)</th>
                              <th class="text-center" colspan="2" rowspan="2">Total</th>
                            </tr>
                            <tr>
                              <th class="text-center" colspan="2">Rendah</th>
                              <th class="text-center" colspan="2">Sedang</th>
                              <th class="text-center" colspan="2">Tinggi</th>
                            </tr>
                            <tr>
                              <th class="text-center">Jumlah</th>
                              <th class="text-center">%</th>
                              <th class="text-center">Jumlah</th>
                              <th class="text-center">%</th>
                              <th class="text-center">Jumlah</th>
                              <th class="text-center">%</th>
                              <th class="text-center">Jumlah</th>
                              <th class="text-center">%</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td class="text-center">1.</td>
                              <td class="text-left">Padi</td>
                              <td class="text-right">66</td>
                              <td class="text-right">76.74</td>
                              <td class="text-right">13</td>
                              <td class="text-right">15.12</td>
                              <td class="text-right">7</td>
                              <td class="text-right">8.14</td>
                              <td class="text-right">86</td>
                              <td class="text-right">86.87</td>
                            </tr>
                            <tr>
                              <td class="text-center">2.</td>
                              <td class="text-left">Palawija</td>
                              <td class="text-right">7</td>
                              <td class="text-right">100</td>
                              <td class="text-right">0</td>
                              <td class="text-right">0</td>
                              <td class="text-right">0</td>
                              <td class="text-right">0</td>
                              <td class="text-right">7</td>
                              <td class="text-right">7.07</td>
                            </tr>
                            <tr>
                              <td class="text-center">3.</td>
                              <td class="text-left">Hortikultura</td>
                              <td class="text-right">2</td>
                              <td class="text-right">50</td>
                              <td class="text-right">2</td>
                              <td class="text-right">50</td>
                              <td class="text-right">0</td>
                              <td class="text-right">0</td>
                              <td class="text-right">4</td>
                              <td class="text-right">4.04</td>
                            </tr>
                            <tr>
                              <td class="text-center">4.</td>
                              <td class="text-left">Lainnya</td>
                              <td class="text-right">2</td>
                              <td class="text-right">100</td>
                              <td class="text-right">0</td>
                              <td class="text-right">0</td>
                              <td class="text-right">0</td>
                              <td class="text-right">0</td>
                              <td class="text-right">2</td>
                              <td class="text-right">2.02</td>
                            </tr>
                          </tbody>
                          <tfoot>
                            <tr>
                              <td class="text-center" colspan="2">Total</td>
                              <td class="text-right">77</td>
                              <td class="text-right">77.78</td>
                              <td class="text-right">15</td>
                              <td class="text-right">15.15</td>
                              <td class="text-right">7</td>
                              <td class="text-right">7.07</td>
                              <td class="text-right">99</td>
                              <td class="text-right">100</td>
                            </tr>
                          </tfoot>
                        </table>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>
                </div>

                <div class="tab-pane fade show" id="pills-tujuan2" role="tabpanel" aria-labelledby="pills-tujuan2-tab">
                  <div class="row">  
                      <div class="card col-12" style="box-shadow: 0 0 10px black;">
                        <div class="card-header" style="margin: 0 auto;">
                          <h3 class="card-title" style="font-weight: bold; font-size: 1.2em; margin-top: 1em;">Hasil Estimasi Luas Tutupan Lahan</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                          <table id="example5" class="table table-bordered table-striped">
                          <thead>
                            <tr>
                              <th rowspan="2" class="text-center">Jenis Tutupan Lahan</th>
                              <th class="text-center" colspan="2">Luas Tutupan Lahan Bandung Barat 2021</th>
                              <th class="text-center" colspan="2">Luas Tutupan Lahan Purwakarta 2021</th>
                            </tr>
                            <tr>
                              <th class="text-center">ha</th>
                              <th class="text-center">%</th>
                              <th class="text-center">ha</th>
                              <th class="text-center">%</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                              <td>Lahan terbangun</td>
                              <td class="text-right">13796.24</td>
                              <td class="text-right">11.01000428</td>
                              <td class="text-right">14268.91</td>
                              <td class="text-right">14.35011731</td>
                            </tr>
                            <tr>
                              <td>Sawah</td>
                              <td class="text-right">39968.55</td>
                              <td class="text-right">31.89665492</td>
                              <td class="text-right">25377.16</td>
                              <td class="text-right">25.52158666</td>
                            </tr>
                            <tr>
                              <td>Hutan</td>
                              <td class="text-right">69607.37</td>
                              <td class="text-right">55.5497325</td>
                              <td class="text-right">52164.11</td>
                              <td class="text-right">52.46098672</td>
                            </tr>
                            <tr>
                              <td>Lahan kering non-vegetatif</td>
                              <td class="text-right">784.51</td>
                              <td class="text-right">0.626073369</td>
                              <td class="text-right">1529.49</td>
                              <td class="text-right">1.538194643</td>
                            </tr>
                            <tr>
                              <td>Badan air</td>
                              <td class="text-right">1149.73</td>
                              <td class="text-right">0.9175349384</td>
                              <td class="text-right">6094.43</td>
                              <td class="text-right">6.12911466</td>
                            </tr>
                            </tbody>
                            <tfoot>
                            <tr>
                              <th>Total</th>
                              <td class="text-right">125306.4</td>
                              <td class="text-right">100</td>
                              <td class="text-right">99434.1</td>
                              <td class="text-right">100</td>
                            </tr>
                            </tfoot>
                          </table>
                        </div>
                        <!-- /.card-body -->
                      </div>
                      <!-- /.card -->
                  </div>`

                  <div class="row">  
                      <div class="card col-md-6" style="box-shadow: 0 0 10px black;">
                        <div class="card-header" style="margin: 0 auto;">
                          <h3 class="card-title" style="font-weight: bold; font-size: 1.2em;">Hasil Estimasi Luas Tanam Padi Lokus Purwakarta</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                          <table id="example6" class="table table-bordered table-striped">
                          <thead>
                            <tr>
                              <th class="text-center">Kecamatan</th>
                              <th class="text-center">Luas Sawah (ha)</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                              <td>Babakancikao</td>
                              <td class="text-right">1568.04</td>
                            </tr>
                            <tr>
                              <td>Bojong</td>
                              <td class="text-right">1683.12</td>
                            </tr>
                            <tr>
                              <td>Bungursari</td>
                              <td class="text-right">1332.23</td>
                            </tr>
                            <tr>
                              <td>Campaka</td>
                              <td class="text-right">1705.62</td>
                            </tr>
                            <tr>
                              <td>Cibatu</td>
                              <td class="text-right">1883.04</td>
                            </tr>
                            <tr>
                              <td>Darangdan</td>
                              <td class="text-right">2195.93</td>
                            </tr>
                            <tr>
                              <td>Jatiluhur</td>
                              <td class="text-right">834.76</td>
                            </tr>
                            <tr>
                              <td>Kiarapedes</td>
                              <td class="text-right">1510.66</td>
                            </tr>
                            <tr>
                              <td>Maniis</td>
                              <td class="text-right">962.38</td>
                            </tr>
                            <tr>
                              <td>Pasawahan</td>
                              <td class="text-right">1239.71</td>
                            </tr>
                            <tr>
                              <td>Plered</td>
                              <td class="text-right">1183.15</td>
                            </tr>
                            <tr>
                              <td>Pondoksalam</td>
                              <td class="text-right">1620.91</td>
                            </tr>
                            <tr>
                              <td>Purwakarta</td>
                              <td class="text-right">434.96</td>
                            </tr>
                            <tr>
                              <td>Sukasari</td>
                              <td class="text-right">999.32</td>
                            </tr>
                            <tr>
                              <td>Sukatani</td>
                              <td class="text-right">2781.48</td>
                            </tr>
                            <tr>
                              <td>Tegalwaru</td>
                              <td class="text-right">1994.87</td>
                            </tr>
                            <tr>
                              <td>Wanayasa</td>
                              <td class="text-right">1446.98</td>
                            </tr>
                            </tbody>
                            <tfoot>
                            <tr>
                              <th>Total</th>
                              <th class="text-right">25377.16</th>
                            </tr>
                            </tfoot>
                          </table>
                        </div>
                        <!-- /.card-body -->
                      </div>
                      <!-- /.card -->

                      <div class="card col-md-6" style="box-shadow: 0 0 10px black;">
                        <div class="card-header" style="margin: 0 auto;">
                          <h3 class="card-title" style="font-weight: bold; font-size: 1.2em;">Hasil Estimasi Luas Tanam Padi Lokus Bandung Barat</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                          <table id="example7" class="table table-bordered table-striped">
                          <thead>
                            <tr>
                              <th class="text-center">Kecamatan</th>
                              <th class="text-center">Luas Sawah (ha)</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                              <td>Batujajar</td>
                              <td class="text-right">1277.37</td>
                            </tr>
                            <tr>
                              <td>Cihampelas</td>
                              <td class="text-right">1633.46</td>
                            </tr>
                            <tr>
                              <td>Cikalong Wetan</td>
                              <td class="text-right">3748.17</td>
                            </tr>
                            <tr>
                              <td>Cililin</td>
                              <td class="text-right">2142.93</td>
                            </tr>
                            <tr>
                              <td>Cipatat</td>
                              <td class="text-right">3485.49</td>
                            </tr>
                            <tr>
                              <td>Cipeundeuy</td>
                              <td> class="text-right"2191.37</td>
                            </tr>
                            <tr>
                              <td>Cipongkor</td>
                              <td class="text-right">2867.15</td>
                            </tr>
                            <tr>
                              <td>Cisarua</td>
                              <td class="text-right">2144.75</td>
                            </tr>
                            <tr>
                              <td>Gununghalu</td>
                              <td class="text-right">4911.88</td>
                            </tr>
                            <tr>
                              <td>Lembang</td>
                              <td class="text-right">2601</td>
                            </tr>
                            <tr>
                              <td>Ngamprah</td>
                              <td class="text-right">1395.41</td>
                            </tr>
                            <tr>
                              <td>Padalarang</td>
                              <td class="text-right">1876.05</td>
                            </tr>
                            <tr>
                              <td>Parongpong</td>
                              <td class="text-right">961.64</td>
                            </tr>
                            <tr>
                              <td>Rongga</td>
                              <td class="text-right">3770.09</td>
                            </tr>
                            <tr>
                              <td>Saguling</td>
                              <td class="text-right">2207.34</td>
                            </tr>
                            <tr>
                              <td>Sindangkerta</td>
                              <td class="text-right">2754.45</td>
                            </tr>
                            </tbody>
                            <tfoot>
                            <tr>
                              <th>Total</th>
                              <th class="text-right">39968.55</th>
                            </tr>
                            </tfoot>
                          </table>
                        </div>
                        <!-- /.card-body -->
                      </div>
                      <!-- /.card -->
                  </div>`
                </div>
            </div>
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?= $this->endSection() ?>

<?= $this->section('js') ?>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
  AOS.init({
    duration: 1200,
  })
</script>

<script>
  $(function () {
    
    $("#tabulasi1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#tabulasi1_wrapper .col-md-6:eq(0)');

    $("#tabulasi2").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#tabulasi2_wrapper .col-md-6:eq(0)');

    $("#tabulasi3KBB").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#tabulasi3KBB_wrapper .col-md-6:eq(0)');

    $("#tabulasi3PWK").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#tabulasi3PWK_wrapper .col-md-6:eq(0)');

    $("#tabulasi4").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#tabulasi4_wrapper .col-md-6:eq(0)');

    $("#tabulasi5").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#tabulasi5_wrapper .col-md-6:eq(0)');

    $("#tabulasi6").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#tabulasi6_wrapper .col-md-6:eq(0)');

    $("#tabulasi7").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#tabulasi7_wrapper .col-md-6:eq(0)');

    $("#tabulasi8KBB").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#tabulasi8KBB_wrapper .col-md-6:eq(0)');

    $("#tabulasi8PWK").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#tabulasi8PWK_wrapper .col-md-6:eq(0)');

    $("#tabulasi9").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#tabulasi9_wrapper .col-md-6:eq(0)');

    $("#tabulasi10").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#tabulasi10_wrapper .col-md-6:eq(0)');

    $("#tabulasi11").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#tabulasi11_wrapper .col-md-6:eq(0)');

    $("#tabulasi12").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#tabulasi12_wrapper .col-md-6:eq(0)');

    $("#tabulasi13").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#tabulasi13_wrapper .col-md-6:eq(0)');

    $("#tabulasi14").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#tabulasi14_wrapper .col-md-6:eq(0)');

    $("#tabulasi15").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#tabulasi15_wrapper .col-md-6:eq(0)');

    $("#tabulasi16KBB").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#tabulasi16KBB_wrapper .col-md-6:eq(0)');

    $("#tabulasi16PWK").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false, 
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#tabulasi16PWK_wrapper .col-md-6:eq(0)');

    $("#tabulasi17KBB").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#tabulasi17KBB_wrapper .col-md-6:eq(0)');

    $("#tabulasi17PWK").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#tabulasi17PWK_wrapper .col-md-6:eq(0)');

    $("#tabulasi18KBB").DataTable({
      "columnDefs": [
        { "orderable": false, "targets": [0] }, 
    ],
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#tabulasi18KBB_wrapper .col-md-6:eq(0)');

    $("#tabulasi18PWK").DataTable({
      "columnDefs": [
        { "orderable": false, "targets": [0] }, 
    ],
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#tabulasi18PWK_wrapper .col-md-6:eq(0)');

    $("#example5").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example5_wrapper .col-md-6:eq(0)');

    $("#example6").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example6_wrapper .col-md-6:eq(0)');
    
    $("#example7").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example7_wrapper .col-md-6:eq(0)');

    $("#example8").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example8_wrapper .col-md-6:eq(0)');

    $("#example9").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example9_wrapper .col-md-6:eq(0)');

    $("#example10").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example10_wrapper .col-md-6:eq(0)');
    
  });
</script>
<!-- DataTables  & Plugins -->
<script src="/assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="/assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="/assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="/assets/plugins/jszip/jszip.min.js"></script>
<script src="/assets/plugins/pdfmake/pdfmake.min.js"></script>
<script src="/assets/plugins/pdfmake/vfs_fonts.js"></script>
<script src="/assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="/assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="/assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<?= $this->endSection() ?>
  
