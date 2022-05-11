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
  
<?= $this->endSection() ?>

<?= $this->section('content') ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid pl-4" style="color: rgb(0, 75, 60);">
        <div class="row mb-0 baris-judul-riset">
          <div class="col-sm-10">
            <h3 class="judul-riset">Pemetaan Klasifikasi dan Alih Fungsi Lahan Pertanian dengan Citra Satelit</h3>
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
                <li class="nav-item" role="presentation" style="margin-left:-7px; border-radius:10px;">
                    <button class="nav-link" id="pills-tujuan3-tab" data-bs-toggle="pill" data-bs-target="#pills-tujuan3" type="button" role="tab" aria-controls="pills-tujuan3" aria-selected="false">Tujuan 3</button>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-tujuan1" role="tabpanel" aria-labelledby="pills-tujuan1-tab">
                  <div class="row">  
                    <div class="card col-12" style="box-shadow: 0 0 10px black;">
                      <div class="card-header" style="margin: 0 auto;">
                        <h3 class="card-title" style="font-weight: bold; font-size: 1.2em;">Ukuran <i>Accuracy</i> Model Klasifikasi</h3>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                          <thead>
                            <tr>
                              <th class="text-center">Model</th>
                              <th class="text-center" colspan="6">Accuracy</th>
                            </tr>
                            <tr>
                              <th class="text-center">Lokus</th>
                              <th class="text-center">Sentinel 2 (Bandung Barat)</th>
                              <th class="text-center">Sentinel 2 (Purwakarta)</th>
                              <th class="text-center">Landsat-8 2013 (Bandung Barat)</th>
                              <th class="text-center">Landsat-8 2021 (Bandung Barat)</th>
                              <th class="text-center">Landsat-8 2013 (Purwakarta)</th>
                              <th class="text-center">Landsat-8 2021 (Purwakarta)</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>MLP</td>
                              <td class="text-right">0.915</td>
                              <td class="text-right">0.8952</td>
                              <td class="text-right">0.932</td>
                              <td class="text-right">0.7772</td>
                              <td class="text-right">0.780</td>
                              <td class="text-right">0.769</td>
                            </tr>
                            <tr>
                              <td>CNN</td>
                              <td class="text-right">0.957</td>
                              <td class="text-right">0.934</td>
                              <td class="text-right">0.926</td>
                              <td class="text-right">0.889</td>
                              <td class="text-right">0.879</td>
                              <td class="text-right">0.896</td>
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
                        <h3 class="card-title" style="font-weight: bold; font-size: 1.2em;">Ukuran <i>Precision</i> Model Klasifikasi</h3>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                        <table id="example2" class="table table-bordered table-striped">
                          <thead>
                            <tr>
                              <th class="text-center">Model</th>
                              <th class="text-center" colspan="6">Precision</th>
                            </tr>
                            <tr>
                              <th class="text-center">Lokus</th>
                              <th class="text-center">Sentinel 2 (Bandung Barat)</th>
                              <th class="text-center">Sentinel 2 (Purwakarta)</th>
                              <th class="text-center">Landsat-8 2013 (Bandung Barat)</th>
                              <th class="text-center">Landsat-8 2021 (Bandung Barat)</th>
                              <th class="text-center">Landsat-8 2013 (Purwakarta)</th>
                              <th class="text-center">Landsat-8 2021 (Purwakarta)</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>MLP</td>
                              <td class="text-right">0.915</td>
                              <td class="text-right">0.8952</td>
                              <td class="text-right">0.932</td>
                              <td class="text-right">0.777</td>
                              <td class="text-right">0.780</td>
                              <td class="text-right">0.769</td>
                            </tr>
                            <tr>
                              <td>CNN</td>
                              <td class="text-right">0.957</td>
                              <td class="text-right">0.934</td>
                              <td class="text-right">0.926</td>
                              <td class="text-right">0.889</td>
                              <td class="text-right">0.879</td>
                              <td class="text-right">0.896</td>
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
                        <h3 class="card-title" style="font-weight: bold; font-size: 1.2em;">Ukuran <i>Recall</i> Model Klasifikasi</h3>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                        <table id="example3" class="table table-bordered table-striped">
                          <thead>
                            <tr>
                              <th class="text-center">Model</th>
                              <th class="text-center" colspan="6">Recall</th>
                            </tr>
                            <tr>
                              <th class="text-center">Lokus</th>
                              <th class="text-center">Sentinel 2 (Bandung Barat)</th>
                              <th class="text-center">Sentinel 2 (Purwakarta)</th>
                              <th class="text-center">Landsat-8 2013 (Bandung Barat)</th>
                              <th class="text-center">Landsat-8 2021 (Bandung Barat)</th>
                              <th class="text-center">Landsat-8 2013 (Purwakarta)</th>
                              <th class="text-center">Landsat-8 2021 (Purwakarta)</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>MLP</td>
                              <td class="text-right">0.797</td>
                              <td class="text-right">0.844</td>
                              <td class="text-right">0.912</td>
                              <td class="text-right">0.641</td>
                              <td class="text-right">0.653</td>
                              <td class="text-right">0.634</td>
                            </tr>
                            <tr>
                              <td>CNN</td>
                              <td class="text-right">0.951</td>
                              <td class="text-right">0.914</td>
                              <td class="text-right">0.904</td>
                              <td class="text-right">0.845</td>
                              <td class="text-right">0.808</td>
                              <td class="text-right">0.836</td>
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
                        <h3 class="card-title" style="font-weight: bold; font-size: 1.2em;">Ukuran <i>F-1 Score</i> Model Klasifikasi</h3>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                        <table id="example4" class="table table-bordered table-striped">
                          <thead>
                            <tr>
                              <th class="text-center">Model</th>
                              <th class="text-center" colspan="6">F1-Score</th>
                            </tr>
                            <tr>
                              <th class="text-center">Lokus</th>
                              <th class="text-center">Sentinel 2 (Bandung Barat)</th>
                              <th class="text-center">Sentinel 2 (Purwakarta)</th>
                              <th class="text-center">Landsat-8 2013 (Bandung Barat)</th>
                              <th class="text-center">Landsat-8 2021 (Bandung Barat)</th>
                              <th class="text-center">Landsat-8 2013 (Purwakarta)</th>
                              <th class="text-center">Landsat-8 2021 (Purwakarta)</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>MLP</td>
                              <td class="text-right">0.817</td>
                              <td class="text-right">0.869</td>
                              <td class="text-right">0.922</td>
                              <td class="text-right">0.684</td>
                              <td class="text-right">0.702</td>
                              <td class="text-right">0.690</td>
                            </tr>
                            <tr>
                              <td class="text-right">CNN</td>
                              <td class="text-right">0.954</td>
                              <td class="text-right">0.924</td>
                              <td class="text-right">0.915</td>
                              <td class="text-right">0.866</td>
                              <td class="text-right">0.842</td>
                              <td class="text-right">0.865</td>
                            </tr>
                          </tbody>
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
                          <h3 class="card-title" style="font-weight: bold; font-size: 1.2em;">Hasil Estimasi Luas Tutupan Lahan</h3>
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
                              <td>1568.04</td>
                            </tr>
                            <tr>
                              <td>Bojong</td>
                              <td>1683.12</td>
                            </tr>
                            <tr>
                              <td>Bungursari</td>
                              <td>1332.23</td>
                            </tr>
                            <tr>
                              <td>Campaka</td>
                              <td>1705.62</td>
                            </tr>
                            <tr>
                              <td>Cibatu</td>
                              <td>1883.04</td>
                            </tr>
                            <tr>
                              <td>Darangdan</td>
                              <td>2195.93</td>
                            </tr>
                            <tr>
                              <td>Jatiluhur</td>
                              <td>834.76</td>
                            </tr>
                            <tr>
                              <td>Kiarapedes</td>
                              <td>1510.66</td>
                            </tr>
                            <tr>
                              <td>Maniis</td>
                              <td>962.38</td>
                            </tr>
                            <tr>
                              <td>Pasawahan</td>
                              <td>1239.71</td>
                            </tr>
                            <tr>
                              <td>Plered</td>
                              <td>1183.15</td>
                            </tr>
                            <tr>
                              <td>Pondoksalam</td>
                              <td>1620.91</td>
                            </tr>
                            <tr>
                              <td>Purwakarta</td>
                              <td>434.96</td>
                            </tr>
                            <tr>
                              <td>Sukasari</td>
                              <td>999.32</td>
                            </tr>
                            <tr>
                              <td>Sukatani</td>
                              <td>2781.48</td>
                            </tr>
                            <tr>
                              <td>Tegalwaru</td>
                              <td>1994.87</td>
                            </tr>
                            <tr>
                              <td>Wanayasa</td>
                              <td>1446.98</td>
                            </tr>
                            </tbody>
                            <tfoot>
                            <tr>
                              <th>Total</th>
                              <th>25377.16</th>
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
                              <td>1277.37</td>
                            </tr>
                            <tr>
                              <td>Cihampelas</td>
                              <td>1633.46</td>
                            </tr>
                            <tr>
                              <td>Cikalong Wetan</td>
                              <td>3748.17</td>
                            </tr>
                            <tr>
                              <td>Cililin</td>
                              <td>2142.93</td>
                            </tr>
                            <tr>
                              <td>Cipatat</td>
                              <td>3485.49</td>
                            </tr>
                            <tr>
                              <td>Cipeundeuy</td>
                              <td>2191.37</td>
                            </tr>
                            <tr>
                              <td>Cipongkor</td>
                              <td>2867.15</td>
                            </tr>
                            <tr>
                              <td>Cisarua</td>
                              <td>2144.75</td>
                            </tr>
                            <tr>
                              <td>Gununghalu</td>
                              <td>4911.88</td>
                            </tr>
                            <tr>
                              <td>Lembang</td>
                              <td>2601</td>
                            </tr>
                            <tr>
                              <td>Ngamprah</td>
                              <td>1395.41</td>
                            </tr>
                            <tr>
                              <td>Padalarang</td>
                              <td>1876.05</td>
                            </tr>
                            <tr>
                              <td>Parongpong</td>
                              <td>961.64</td>
                            </tr>
                            <tr>
                              <td>Rongga</td>
                              <td>3770.09</td>
                            </tr>
                            <tr>
                              <td>Saguling</td>
                              <td>2207.34</td>
                            </tr>
                            <tr>
                              <td>Sindangkerta</td>
                              <td>2754.45</td>
                            </tr>
                            </tbody>
                            <tfoot>
                            <tr>
                              <th>Total</th>
                              <th>39968.55</th>
                            </tr>
                            </tfoot>
                          </table>
                        </div>
                        <!-- /.card-body -->
                      </div>
                      <!-- /.card -->
                  </div>`
                </div>
                
                <div class="tab-pane fade show" id="pills-tujuan3" role="tabpanel" aria-labelledby="pills-tujuan3-tab">
                  ` <div class="row">  
                      <div class="card col-12" style="box-shadow: 0 0 10px black; margin-top: -17px;">
                        <div class="card-header m-auto">
                          <h3 class="card-title" style="font-weight: bold; font-size: 1.2em;">Estimasi Perubahan Luas Lahan</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                          <table id="example8" class="table table-bordered table-striped">
                          <thead>
                            <tr>
                              <th rowspan="3" class="text-center">Jenis tutupan lahan</th>
                              <th class="text-center" colspan="6">Bandung Barat</th>
                              <th class="text-center" colspan="6">Purwakarta</th>
                            </tr>
                            <tr>
                              <th class="text-center" colspan="2">2013</th>
                              <th class="text-center" colspan="2">2021</th>
                              <th class="text-center" colspan="2">Perubahan</th>
                              <th class="text-center" colspan="2">2013</th>
                              <th class="text-center" colspan="2">2021</th>
                              <th class="text-center" colspan="2">Perubahan</th>
                            </tr>
                            <tr>
                              <th class="text-center">m&sup2;</th>
                              <th class="text-center">%</th>
                              <th class="text-center">m&sup2;</th>
                              <th class="text-center">%</th>
                              <th class="text-center">m&sup2;</th>
                              <th class="text-center">%</th>
                              <th class="text-center">m&sup2;</th>
                              <th class="text-center">%</th>
                              <th class="text-center">m&sup2;</th>
                              <th class="text-center">%</th>
                              <th class="text-center">m&sup2;</th>
                              <th class="text-center">%</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                              <td>Lahan terbangun</td>
                              <td>15796.17</td>
                              <td>13.32</td>
                              <td>13488.48</td>
                              <td>11.51</td>
                              <td>2307.69</td>
                              <td>-14.61</td>
                              <td>10808.46</td>
                              <td>12.38</td>
                              <td>11948.13</td>
                              <td>14.31</td>
                              <td>1139.67</td>
                              <td>10.54</td>
                            </tr>
                            <tr>
                              <td>Sawah</td>
                              <td>29714.04</td>
                              <td>25.05</td>
                              <td>23534.19</td>
                              <td>20.07</td>
                              <td>6179.85</td>
                              <td>-20.80</td>
                              <td>12926.88</td>
                              <td>14.81</td>
                              <td>20585.79</td>
                              <td>24.65</td>
                              <td>7658.91</td>
                              <td>59.25</td>
                            </tr>
                            <tr>
                              <td>Hutan</td>
                              <td>67356.81</td>
                              <td>56.78</td>
                              <td>75170.25</td>
                              <td>64.12</td>
                              <td>7813.44</td>
                              <td>11.60</td>
                              <td>53127.27</td>
                              <td>60.85</td>
                              <td>44610.21</td>
                              <td>53.41</td>
                              <td>8517.06</td>
                              <td>-16.03</td>
                            </tr>
                            <tr>
                              <td>Lahan kering non-vegetatif</td>
                              <td>1797.84</td>
                              <td>1.52</td>
                              <td>1363.05</td>
                              <td>1.16</td>
                              <td>434.79</td>
                              <td>-24.18</td>
                              <td>2591.64</td>
                              <td>2.97</td>
                              <td>1363.05</td>
                              <td>1.63</td>
                              <td>1228.59</td>
                              <td>-47.41</td>
                            </tr>
                            <tr>
                              <td>Badan air</td>
                              <td>3957.48</td>
                              <td>3.34</td>
                              <td>3675.87</td>
                              <td>3.14</td>
                              <td>281.61</td>
                              <td>-7.12</td>
                              <td>7858.44</td>
                              <td>9.00</td>
                              <td>5012.91</td>
                              <td>6.00</td>
                              <td>2845.53</td>
                              <td>-36.21</td>
                            </tr>
                            </tbody>
                            <tfoot>
                            <tr>
                              <th>Total</th>
                              <td>118622.34</td>
                              <td>100</td>
                              <td>117231.84</td>
                              <td>100</td>
                              <td>0</td>
                              <td>0</td>
                              <td>87312.69</td>
                              <td>100</td>
                              <td>83520.09</td>
                              <td>100</td>
                              <td>-</td>
                              <td>-</td>
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
                          <h3 class="card-title" style="font-weight: bold; font-size: 1.2em;">Laju Alih Fungsi Lahan Lokus Kabupaten Purwakarta</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                          <table id="example9" class="table table-bordered table-striped">
                          <thead>
                            <tr>
                              <th class="text-center">Kecamatan</th>
                              <th class="text-center">Laju Alih Fungsi Lahan (ha)</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                              <td>Babakancikao</td>
                              <td>1568.04</td>
                            </tr>
                            <tr>
                              <td>Bojong</td>
                              <td>1683.12</td>
                            </tr>
                            <tr>
                              <td>Bungursari</td>
                              <td>1332.23</td>
                            </tr>
                            <tr>
                              <td>Campaka</td>
                              <td>1705.62</td>
                            </tr>
                            <tr>
                              <td>Cibatu</td>
                              <td>1883.04</td>
                            </tr>
                            <tr>
                              <td>Darangdan</td>
                              <td>2195.93</td>
                            </tr>
                            <tr>
                              <td>Jatiluhur</td>
                              <td>834.76</td>
                            </tr>
                            <tr>
                              <td>Kiarapedes</td>
                              <td>1510.66</td>
                            </tr>
                            <tr>
                              <td>Maniis</td>
                              <td>962.38</td>
                            </tr>
                            <tr>
                              <td>Pasawahan</td>
                              <td>1239.71</td>
                            </tr>
                            <tr>
                              <td>Plered</td>
                              <td>1183.15</td>
                            </tr>
                            <tr>
                              <td>Pondoksalam</td>
                              <td>1620.91</td>
                            </tr>
                            <tr>
                              <td>Purwakarta</td>
                              <td>434.96</td>
                            </tr>
                            <tr>
                              <td>Sukasari</td>
                              <td>999.32</td>
                            </tr>
                            <tr>
                              <td>Sukatani</td>
                              <td>2781.48</td>
                            </tr>
                            <tr>
                              <td>Tegalwaru</td>
                              <td>1994.87</td>
                            </tr>
                            <tr>
                              <td>Wanayasa</td>
                              <td>1446.98</td>
                            </tr>
                            </tbody>
                            <tfoot>
                            <tr>
                              <th>Total</th>
                              <th>25377.16</th>
                            </tr>
                            </tfoot>
                          </table>
                        </div>
                        <!-- /.card-body -->
                      </div>
                      <!-- /.card -->

                      <div class="card col-md-6" style="box-shadow: 0 0 10px black;">
                        <div class="card-header" style="margin: 0 auto;">
                          <h3 class="card-title" style="font-weight: bold; font-size: 1.2em;">Laju Alih Fungsi Lahan Lokus Kabupaten Bandung Barat</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                          <table id="example10" class="table table-bordered table-striped">
                          <thead>
                            <tr>
                              <th class="text-center">Kecamatan</th>
                              <th class="text-center">Laju Alih Fungsi Lahan (ha)</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                              <td>Batujajar</td>
                              <td>1277.37</td>
                            </tr>
                            <tr>
                              <td>Cihampelas</td>
                              <td>1633.46</td>
                            </tr>
                            <tr>
                              <td>Cikalong Wetan</td>
                              <td>3748.17</td>
                            </tr>
                            <tr>
                              <td>Cililin</td>
                              <td>2142.93</td>
                            </tr>
                            <tr>
                              <td>Cipatat</td>
                              <td>3485.49</td>
                            </tr>
                            <tr>
                              <td>Cipeundeuy</td>
                              <td>2191.37</td>
                            </tr>
                            <tr>
                              <td>Cipongkor</td>
                              <td>2867.15</td>
                            </tr>
                            <tr>
                              <td>Cisarua</td>
                              <td>2144.75</td>
                            </tr>
                            <tr>
                              <td>Gununghalu</td>
                              <td>4911.88</td>
                            </tr>
                            <tr>
                              <td>Lembang</td>
                              <td>2601</td>
                            </tr>
                            <tr>
                              <td>Ngamprah</td>
                              <td>1395.41</td>
                            </tr>
                            <tr>
                              <td>Padalarang</td>
                              <td>1876.05</td>
                            </tr>
                            <tr>
                              <td>Parongpong</td>
                              <td>961.64</td>
                            </tr>
                            <tr>
                              <td>Rongga</td>
                              <td>3770.09</td>
                            </tr>
                            <tr>
                              <td>Saguling</td>
                              <td>2207.34</td>
                            </tr>
                            <tr>
                              <td>Sindangkerta</td>
                              <td>2754.45</td>
                            </tr>
                            </tbody>
                            <tfoot>
                            <tr>
                              <th>Total</th>
                              <th>39968.55</th>
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
<script>
  $(function () {
    
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

    $("#example2").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example2_wrapper .col-md-6:eq(0)');

    $("#example3").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example3_wrapper .col-md-6:eq(0)');

    $("#example4").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example4_wrapper .col-md-6:eq(0)');

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
  
