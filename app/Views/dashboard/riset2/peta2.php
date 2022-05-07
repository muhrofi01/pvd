<?= $this->extend('dashboard/layout/main') ?>

<?= $this->Section('css') ?>
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
  </style>
<?= $this->endSection() ?>

<?= $this->Section('content') ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid pl-4" style="color: rgb(0, 75, 60);">
        <div class="row mb-2 baris-judul-riset">
          <div class="col-sm-6">
            <h3 class="judul-riset">Karakteristik dan Faktor-Faktor yang Mempengaruhi Alih Fungsi Lahan Pertanian</h3>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content pl-4 mt-4">
      <div class="container-fluid" id="app">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-tujuan2-tab" data-bs-toggle="pill" data-bs-target="#pills-tujuan2" type="button" role="tab" aria-controls="pills-tujuan2" aria-selected="true">Tujuan 2</button>
                </li>
                <li class="nav-item" role="presentation" style="margin-left:-7px; border-radius:10px;">
                    <button class="nav-link" id="pills-tujuan3-tab" data-bs-toggle="pill" data-bs-target="#pills-tujuan3" type="button" role="tab" aria-controls="pills-tujuan3" aria-selected="false">Tujuan 3</button>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-tujuan2" role="tabpanel" aria-labelledby="pills-tujuan2-tab">
                    <div class="card-body p-0">
                      <div class="d-md-flex">
                        <div class="accordion w-100" id="accordionTujuan2">
                          <div class="card">
                            <div class="card-header" style="background-color: #0A5446;" id="heading1">
                              <h2 class="mb-0">
                                <button @click="togglePeta1" class="text-white btn btn-link btn-block text-left w-100 d-flex justify-content-between align-items-center" onclick="putar(this)" type="button" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                  Peta 1
                                  <i class="accordion-icon fas fa-chevron-circle-down"></i>
                                </button>
                              </h2>
                            </div>

                            <div v-if="isVisible1" id="collapse1" class="collapse" aria-labelledby="heading1" data-parent="#accordionTujuan2">
                              <div class="card-body">
                              Map akan digenerate disini
                              </div>
                            </div>
                          </div>
                          <div class="card">
                            <div class="card-header" style="background-color: #0A5446;" id="heading2">
                              <h2 class="mb-0">
                                <button @click="togglePeta2" class="text-white btn btn-link btn-block text-left d-flex justify-content-between align-items-center collapsed" onclick="putar(this)" type="button" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                  Peta 2
                                  <i class="accordion-icon fas fa-chevron-circle-down"></i>
                                </button>
                              </h2>
                            </div>
                            <div v-if="isVisible2" id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#accordionTujuan2">
                              <div class="card-body">
                              Map akan digenerate disini
                              </div>
                            </div>
                          </div>
                          <div class="card">
                            <div class="card-header" style="background-color: #0A5446;" id="heading3">
                              <h2 class="mb-0">
                                <button @click="togglePeta3" class="text-white btn btn-link btn-block text-left d-flex justify-content-between align-items-center collapsed" onclick="putar(this)" type="button" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                  Peta 3
                                  <i class="accordion-icon fas fa-chevron-circle-down"></i>
                                </button>
                              </h2>
                            </div>
                            <div v-if="isVisible3" id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordionTujuan2">
                              <div class="card-body">
                              Map akan digenerate disini
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <div class="tab-pane fade show" id="pills-tujuan3" role="tabpanel" aria-labelledby="pills-tujuan3-tab">
                    <div class="card-body p-0">
                      <div class="d-md-flex">
                        <div class="accordion w-100" id="accordionTujuan3">
                          <div class="card">
                            <div class="card-header" style="background-color: #0A5446;" id="headingOne">
                              <h2 class="mb-0">
                                <button @click="togglePeta4" class="text-white btn btn-link btn-block text-left d-flex justify-content-between align-items-center w-100" onclick="putar(this)" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                  Peta 1
                                  <i class="accordion-icon fas fa-chevron-circle-down"></i>
                                </button>
                              </h2>
                            </div>

                            <div v-if="isVisible4" id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionTujuan3">
                              <div class="card-body">
                              Map akan digenerate disini
                              </div>
                            </div>
                          </div>
                          <div class="card">
                            <div class="card-header" style="background-color: #0A5446;" id="headingTwo">
                              <h2 class="mb-0">
                                <button @click="togglePeta5" class="text-white btn btn-link btn-block text-left d-flex justify-content-between align-items-center collapsed" onclick="putar(this)" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                  Peta 2
                                  <i class="accordion-icon fas fa-chevron-circle-down"></i>
                                </button>
                              </h2>
                            </div>
                            <div v-if="isVisible5" id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionTujuan3">
                              <div class="card-body">
                              Map akan digenerate disini
                              </div>
                            </div>
                          </div>
                          <div class="card">
                            <div class="card-header" style="background-color: #0A5446;" id="headingThree">
                              <h2 class="mb-0">
                                <button @click="togglePeta6" class="text-white btn btn-link btn-block text-left d-flex justify-content-between align-items-center collapsed" onclick="putar(this)" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                  Peta 3
                                  <i class="accordion-icon fas fa-chevron-circle-down"></i>
                                </button>
                              </h2>
                            </div>
                            <div v-if="isVisible6" id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionTujuan3">
                              <div class="card-body">
                              Map akan digenerate disini
                              </div>
                            </div>
                          </div>
                          <div class="card">
                            <div class="card-header" style="background-color: #0A5446;" id="headingFour">
                              <h2 class="mb-0">
                                <button @click="togglePeta7" class="text-white btn btn-link btn-block text-left d-flex justify-content-between align-items-center collapsed" onclick="putar(this)" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                  Peta 4
                                  <i class="accordion-icon fas fa-chevron-circle-down"></i>
                                </button>
                              </h2>
                            </div>
                            <div v-if="isVisible7" id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionTujuan3">
                              <div class="card-body">
                              Map akan digenerate disini
                              </div>
                            </div>
                          </div>
                          <div class="card">
                            <div class="card-header" style="background-color: #0A5446;" id="headingFive">
                              <h2 class="mb-0">
                                <button @click="togglePeta8" class="text-white btn btn-link btn-block text-left d-flex justify-content-between align-items-center collapsed" onclick="putar(this)" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                  Peta 5
                                  <i class="accordion-icon fas fa-chevron-circle-down"></i>
                                </button>
                              </h2>
                            </div>
                            <div v-if="isVisible8" id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionTujuan3">
                              <div class="card-body">
                              Map akan digenerate disini
                              </div>
                            </div>
                          </div>
                          <div class="card">
                            <div class="card-header" style="background-color: #0A5446;" id="headingSix">
                              <h2 class="mb-0">
                                <button @click="togglePeta9" class="text-white btn btn-link btn-block text-left d-flex justify-content-between align-items-center collapsed" onclick="putar(this)" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                  Peta 6
                                  <i class="accordion-icon fas fa-chevron-circle-down"></i>
                                </button>
                              </h2>
                            </div>
                            <div v-if="isVisible9" id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionTujuan3">
                              <div class="card-body">
                              Map akan digenerate disini
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?= $this->endSection() ?>

<?= $this->Section('js') ?>
<!-- REQUIRED SCRIPTS -->

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="/assets/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="/assets/plugins/raphael/raphael.min.js"></script>
<script src="/assets/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="/assets/plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="/assets/plugins/chart.js/Chart.min.js"></script>

<!-- AdminLTE for demo purposes -->
<script src="/assets/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="/assets/dist/js/pages/dashboard2.js"></script>

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

<script src="https://unpkg.com/vue@next"></script>
<script>
  let app = Vue.createApp({
      data: function() {
          return {
              isVisible1: false,
              isVisible2: false,
              isVisible3: false,
              isVisible4: false,
              isVisible5: false,
              isVisible6: false,
              isVisible7: false,
              isVisible8: false,
              isVisible9: false,
          }
      },
      methods: {
          togglePeta1() {
            for (let i = 1; i <= 9; i++) {
                if (i != 1) {
                  this['isVisible' + i] = false;
                } else {
                  this['isVisible' + i] = true;
                }
            }
          },
          togglePeta2() {
            for (let i = 1; i <= 9; i++) {
                  if (i != 2) {
                    this['isVisible' + i] = false;
                  } else {
                    this['isVisible' + i] = true;
                  }
              }
          },
          togglePeta3() {
            for (let i = 1; i <= 9; i++) {
                  if (i != 3) {
                    this['isVisible' + i] = false;
                  } else {
                    this['isVisible' + i] = true;
                  }
              }
          },
          togglePeta4() {
            for (let i = 1; i <= 9; i++) {
                  if (i != 4) {
                    this['isVisible' + i] = false;
                  } else {
                    this['isVisible' + i] = true;
                  }
              }
          },
          togglePeta5() {
            for (let i = 1; i <= 9; i++) {
                  if (i != 5) {
                    this['isVisible' + i] = false;
                  } else {
                    this['isVisible' + i] = true;
                  }
              }
          },
          togglePeta6() {
            for (let i = 1; i <= 9; i++) {
                  if (i != 6) {
                    this['isVisible' + i] = false;
                  } else {
                    this['isVisible' + i] = true;
                  }
              }
          },
          togglePeta7() {
            for (let i = 1; i <= 9; i++) {
                  if (i != 7) {
                    this['isVisible' + i] = false;
                  } else {
                    this['isVisible' + i] = true;
                  }
              }
          },
          togglePeta8() {
            for (let i = 1; i <= 9; i++) {
                  if (i != 8) {
                    this['isVisible' + i] = false;
                  } else {
                    this['isVisible' + i] = true;
                  }
              }
          },
          togglePeta9() {
            for (let i = 1; i <= 9; i++) {
                  if (i != 9) {
                    this['isVisible' + i] = false;
                  } else {
                    this['isVisible' + i] = true;
                  }
              }
          },
      }
  })
  app.mount('#app')
</script>
<?= $this->endSection() ?>
