@extends('dashboard.base')

@section('content')
@php
    use Faker\Factory as Faker;
@endphp
          <div class="container-fluid">
            <div class="fade-in">
              <div class="row">
                <div class="col-sm-6 col-lg-3">
                  <div class="card text-white bg-primary">
                    <div class="card-body pb-0">
                      <div class="btn-group float-right">
                        <button class="btn btn-transparent p-0 float-right" type="button">
                          <i class="c-icon c-icon-2xl cil-house"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a></div>
                      </div>
                      <div class="text-value-lg">{{ $data->all_user }}</div>
                      <div><strong>Total Unit Terjual</strong></div>
                    </div>
                    <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
                      <canvas class="chart" id="card-chart1" height="70"></canvas>
                    </div>
                  </div>
                </div>
                <!-- /.col-->
                <div class="col-sm-6 col-lg-3">
                  <div class="card text-white bg-info">
                    <div class="card-body pb-0">
                      <button class="btn btn-transparent p-0 float-right" type="button">
                        <i class="c-icon c-icon-2xl cib-zingat"></i>
                      </button>
                      <div class="text-value-lg">{{ $data->sj1_user }} <small class="text-value-sm text-muted">Unit Terjual</small></div>
                      <div><strong>SinghaJaya 1</strong></div>
                    </div>
                    <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
                      <canvas class="chart" id="card-chart2" height="70"></canvas>
                    </div>
                  </div>
                </div>
                <!-- /.col-->
                <div class="col-sm-6 col-lg-3">
                  <div class="card text-white bg-warning">
                    <div class="card-body pb-0">
                      <div class="btn-group float-right">
                        <button class="btn btn-transparent p-0 float-right" type="button">
                          <i class="c-icon c-icon-2xl cib-zingat"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a></div>
                      </div>
                      <div class="text-value-lg">{{ $data->sj2_user }} <small class="text-value-sm text-muted">Unit Terjual</small></div>
                      <div><strong>SinghaJaya 2</strong></div>
                    </div>
                    <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
                      <canvas class="chart" id="card-chart3" height="70"></canvas>
                    </div>
                  </div>
                </div>
                <!-- /.col-->
                <div class="col-sm-6 col-lg-3">
                  <div class="card text-white bg-success">
                    <div class="card-body pb-0">
                      <div class="btn-group float-right">
                        <button class="btn btn-transparent p-0 float-right" type="button">
                          <i class="c-icon c-icon-2xl cib-zingat"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a></div>
                      </div>
                      <div class="text-value-lg">{{ $data->boro_user }} <small class="text-value-sm text-muted">Unit Terjual</small></div>
                      <div><strong>Kavling Boro</strong></div>
                    </div>
                    <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
                      <canvas class="chart" id="card-chart4" height="70"></canvas>
                    </div>
                  </div>
                </div>
                <!-- /.col-->
              </div>
              <!-- /.row-->
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-5">
                      <h4 class="card-title mb-0">Penjualan Unit</h4>
                    </div>
                    <!-- /.col-->
                    <div class="col-sm-7 d-none d-md-block">
                      {{-- <button class="btn btn-primary float-right" type="button">
                        <svg class="c-icon">
                          <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-cloud-download"></use>
                        </svg>
                      </button> --}}
                      <div class="btn-group btn-group-toggle float-right mr-3" data-toggle="buttons">
                        <label class="btn btn-outline-secondary active">
                          <input id="option2" type="radio" name="options" autocomplete="off" checked=""> Tampilkan Semua
                        </label>
                        <label class="btn btn-outline-secondary">
                          <input id="option1" type="radio" name="options" autocomplete="off"> 2020
                        </label>
                        <label class="btn btn-outline-secondary">
                          <input id="option2" type="radio" name="options" autocomplete="off" checked=""> 2021
                        </label>
                        <label class="btn btn-outline-secondary">
                          <input id="option3" type="radio" name="options" autocomplete="off"> 2022
                        </label>
                      </div>
                    </div>
                    <!-- /.col-->
                  </div>
                  <!-- /.row-->
                  <div class="c-chart-wrapper" style="height:300px;margin-top:40px;">
                    <canvas class="chart" id="main-chart" height="300"></canvas>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="row text-center">
                    <div class="col-sm-12 col-md mb-sm-2 mb-0">
                      <div class="text-muted">Total Unit Terjual</div>
                      <strong>{{ $data->all_user }} Unit ({{ $data->all_user_p }}%)</strong><br>
                      <div class="progress progress-xs mt-2">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: {{ $data->all_user_p }}%" aria-valuenow="{{ $data->all_user_p }}" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                    <div class="col-sm-12 col-md mb-sm-2 mb-0">
                      <div class="text-muted">Unit Terjual SinghaJaya 1</div><strong>{{ $data->sj1_user }} Unit ({{ $data->sj1_user_p }}%)</strong>
                      <div class="progress progress-xs mt-2">
                        <div class="progress-bar bg-info" role="progressbar" style="width: {{ $data->sj1_user_p }}%" aria-valuenow="{{ $data->sj1_user_p }}" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                    <div class="col-sm-12 col-md mb-sm-2 mb-0">
                      <div class="text-muted">Unit Terjual SinghaJaya 2</div><strong>{{ $data->sj2_user }} Unit ({{ $data->sj2_user_p }}%)</strong>
                      <div class="progress progress-xs mt-2">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: {{ $data->sj2_user_p }}%" aria-valuenow="{{ $data->sj2_user_p }}" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                    <div class="col-sm-12 col-md mb-sm-2 mb-0">
                      <div class="text-muted">Unit Terjual Kavling Boro</div><strong>{{ $data->boro_user }} Unit ({{ $data->boro_user_p }}%)</strong>
                      <div class="progress progress-xs mt-2">
                        <div class="progress-bar bg-success" role="progressbar" style="width: {{ $data->boro_user_p }}%" aria-valuenow="{{ $data->boro_user_p }}" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                 
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-->
              
              <!-- /.row-->
              <div class="row">
                <div class="col-md-12">
                  <div class="card">
                    <div class="card-header">Detail Unit</div>
                    <div class="card-body">
                      <div class="row">
                        <div class="col-sm-12">
                          <div class="row">

                            <div class="col-3">
                              <div class="c-callout c-callout-primary"><small class="text-muted">Total Unit</small>
                                <div class="text-value-lg">{{ $data->all_unit }}</div>
                              </div>
                              <hr>
                              <div class="progress-group">
                                <div class="progress-group-header align-items-end">
                                  <i class="c-icon mr-1 fa-solid fa-circle-dollar-to-slot"></i>
                                  <div>Unit Terjual</div>
                                  <div class="ml-auto font-weight-bold mr-2">{{ $data->all_user }}</div>
                                  <div class="text-muted small">({{ $data->all_user_p }}%)</div>
                                </div>
                                <div class="progress-group-bars">
                                  <div class="progress progress-xs">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: {{ $data->all_user_p }}%" aria-valuenow="{{ $data->all_user_p }}" aria-valuemin="0" aria-valuemax="100"></div>
                                  </div>
                                </div>
                              </div>
                              <div class="progress-group">
                                <div class="progress-group-header align-items-end">
                                  <svg class="c-icon mr-1">
                                    <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-home"></use>
                                  </svg>
                                  <div>Unit Tersedia</div>
                                  <div class="ml-auto font-weight-bold mr-2">{{ $data->all_avail }}</div>
                                  <div class="text-muted small">({{ $data->all_avail_p }}%)</div>
                                </div>
                                <div class="progress-group-bars">
                                  <div class="progress progress-xs">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: {{ $data->all_avail_p }}%" aria-valuenow="{{ $data->all_avail_p }}" aria-valuemin="0" aria-valuemax="100"></div>
                                  </div>
                                </div>
                              </div>
                              <label class="mt-1 m-0 small">Metode Pembayaran</label>
                              <div class="progress-group">
                                <div class="progress-group-header align-items-end">
                                  <svg class="c-icon mr-1">
                                    <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-money"></use>
                                  </svg>
                                  <div>Cash</div>
                                  <div class="ml-auto font-weight-bold mr-2">{{ $data->all_cash}}</div>
                                  <div class="text-muted small">({{ $data->all_cash_p }}%)</div>
                                </div>
                                <div class="progress-group-bars">
                                  <div class="progress progress-xs">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: {{ $data->all_cash_p }}%" aria-valuenow="{{ $data->all_cash_p }}" aria-valuemin="0" aria-valuemax="100"></div>
                                  </div>
                                </div>
                              </div>
                              <div class="progress-group">
                                <div class="progress-group-header align-items-end">
                                  <svg class="c-icon mr-1">
                                    <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-money"></use>
                                  </svg>
                                  <div>Cash Bertahap</div>
                                  <div class="ml-auto font-weight-bold mr-2">{{ $data->all_cashbertahap}}</div>
                                  <div class="text-muted small">({{ $data->all_cashbertahap_p}}%)</div>
                                </div>
                                <div class="progress-group-bars">
                                  <div class="progress progress-xs">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: {{ $data->all_cashbertahap_p}}%" aria-valuenow="{{ $data->all_cashbertahap_p}}" aria-valuemin="0" aria-valuemax="100"></div>
                                  </div>
                                </div>
                              </div>
                              <div class="progress-group">
                                <div class="progress-group-header align-items-end">
                                  <svg class="c-icon mr-1">
                                    <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-money"></use>
                                  </svg>
                                  <div>Cash Keras</div>
                                  <div class="ml-auto font-weight-bold mr-2">{{ $data->all_cashkeras}}</div>
                                  <div class="text-muted small">({{ $data->all_cashkeras_p}}%)</div>
                                </div>
                                <div class="progress-group-bars">
                                  <div class="progress progress-xs">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: {{ $data->all_cashkeras_p}}%" aria-valuenow="{{ $data->all_cashkeras_p}}" aria-valuemin="0" aria-valuemax="100"></div>
                                  </div>
                                </div>
                              </div>
                              <div class="progress-group">
                                <div class="progress-group-header align-items-end">
                                  <svg class="c-icon mr-1">
                                    <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-money"></use>
                                  </svg>
                                  <div>InHouse</div>
                                  <div class="ml-auto font-weight-bold mr-2">{{ $data->all_inhouse}}</div>
                                  <div class="text-muted small">({{ $data->all_inhouse_p }}%)</div>
                                </div>
                                <div class="progress-group-bars">
                                  <div class="progress progress-xs">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: {{ $data->all_inhouse_p }}%" aria-valuenow="{{ $data->all_inhouse_p }}" aria-valuemin="0" aria-valuemax="100"></div>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div class="col-3">
                              <div class="c-callout c-callout-info"><small class="text-muted">SinghaJaya 1</small>
                                <div class="text-value-lg">{{ $data->sj1_unit }}</div>
                              </div>
                              <hr>
                              <div class="progress-group">
                                <div class="progress-group-header align-items-end">
                                  <i class="c-icon mr-1 fa-solid fa-circle-dollar-to-slot"></i>
                                  <div>Unit Terjual</div>
                                  <div class="ml-auto font-weight-bold mr-2">{{ $data->sj1_user }}</div>
                                  <div class="text-muted small">({{ $data->sj1_user_p }}%)</div>
                                </div>
                                <div class="progress-group-bars">
                                  <div class="progress progress-xs">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: {{ $data->sj1_user_p }}%" aria-valuenow="{{ $data->sj1_user_p }}" aria-valuemin="0" aria-valuemax="100"></div>
                                  </div>
                                </div>
                              </div>
                              <div class="progress-group">
                                <div class="progress-group-header align-items-end">
                                  <svg class="c-icon mr-1">
                                    <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-home"></use>
                                  </svg>
                                  <div>Unit Tersedia</div>
                                  <div class="ml-auto font-weight-bold mr-2">{{ $data->sj1_avail }}</div>
                                  <div class="text-muted small">({{ $data->sj1_avail_p }}%)</div>
                                </div>
                                <div class="progress-group-bars">
                                  <div class="progress progress-xs">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: {{ $data->sj1_avail_p }}%" aria-valuenow="{{ $data->sj1_avail_p }}" aria-valuemin="0" aria-valuemax="100"></div>
                                  </div>
                                </div>
                              </div>
                              <label class="mt-1 m-0 small">Metode Pembayaran</label>
                              <div class="progress-group">
                                <div class="progress-group-header align-items-end">
                                  <svg class="c-icon mr-1">
                                    <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-money"></use>
                                  </svg>
                                  <div>Cash</div>
                                  <div class="ml-auto font-weight-bold mr-2">{{ $data->sj1_cash}}</div>
                                  <div class="text-muted small">(40%)</div>
                                </div>
                                <div class="progress-group-bars">
                                  <div class="progress progress-xs">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                  </div>
                                </div>
                              </div>
                              <div class="progress-group">
                                <div class="progress-group-header align-items-end">
                                  <svg class="c-icon mr-1">
                                    <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-money"></use>
                                  </svg>
                                  <div>Cash Bertahap</div>
                                  <div class="ml-auto font-weight-bold mr-2">{{ $data->sj1_cashbertahap}}</div>
                                  <div class="text-muted small">({{ $data->sj1_cashbertahap_p}}%)</div>
                                </div>
                                <div class="progress-group-bars">
                                  <div class="progress progress-xs">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: {{ $data->sj1_cashbertahap_p}}%" aria-valuenow="{{ $data->sj1_cashbertahap_p}}" aria-valuemin="0" aria-valuemax="100"></div>
                                  </div>
                                </div>
                              </div>
                              <div class="progress-group">
                                <div class="progress-group-header align-items-end">
                                  <svg class="c-icon mr-1">
                                    <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-money"></use>
                                  </svg>
                                  <div>Cash Keras</div>
                                  <div class="ml-auto font-weight-bold mr-2">{{ $data->sj1_cashkeras}}</div>
                                  <div class="text-muted small">({{ $data->sj1_cashkeras_p}}%)</div>
                                </div>
                                <div class="progress-group-bars">
                                  <div class="progress progress-xs">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: {{ $data->sj1_cashkeras_p}}%" aria-valuenow="{{ $data->sj1_cashkeras_p}}" aria-valuemin="0" aria-valuemax="100"></div>
                                  </div>
                                </div>
                              </div>
                              <div class="progress-group">
                                <div class="progress-group-header align-items-end">
                                  <svg class="c-icon mr-1">
                                    <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-money"></use>
                                  </svg>
                                  <div>InHouse</div>
                                  <div class="ml-auto font-weight-bold mr-2">{{ $data->sj1_inhouse}}</div>
                                  <div class="text-muted small">({{ $data->sj1_inhouse_p }}%)</div>
                                </div>
                                <div class="progress-group-bars">
                                  <div class="progress progress-xs">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: {{ $data->sj1_inhouse_p }}%" aria-valuenow="{{ $data->sj1_inhouse_p }}" aria-valuemin="0" aria-valuemax="100"></div>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div class="col-3">
                              <div class="c-callout c-callout-warning"><small class="text-muted">SinghaJaya 2</small>
                                <div class="text-value-lg">{{ $data->sj2_unit }}</div>
                              </div>
                              <hr>
                              <div class="progress-group">
                                <div class="progress-group-header align-items-end">
                                  <i class="c-icon mr-1 fa-solid fa-circle-dollar-to-slot"></i>
                                  <div>Unit Terjual</div>
                                  <div class="ml-auto font-weight-bold mr-2">{{ $data->sj2_user }}</div>
                                  <div class="text-muted small">({{ $data->sj2_user_p }}%)</div>
                                </div>
                                <div class="progress-group-bars">
                                  <div class="progress progress-xs">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: {{ $data->sj2_user_p }}%" aria-valuenow="{{ $data->sj2_user_p }}" aria-valuemin="0" aria-valuemax="100"></div>
                                  </div>
                                </div>
                              </div>
                              <div class="progress-group">
                                <div class="progress-group-header align-items-end">
                                  <svg class="c-icon mr-1">
                                    <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-home"></use>
                                  </svg>
                                  <div>Unit Tersedia</div>
                                  <div class="ml-auto font-weight-bold mr-2">{{ $data->sj2_avail }}</div>
                                  <div class="text-muted small">({{ $data->sj2_avail_p }}%)</div>
                                </div>
                                <div class="progress-group-bars">
                                  <div class="progress progress-xs">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: {{ $data->sj2_avail_p }}%" aria-valuenow="{{ $data->sj2_avail_p }}" aria-valuemin="0" aria-valuemax="100"></div>
                                  </div>
                                </div>
                              </div>
                              <label class="mt-1 m-0 small">Metode Pembayaran</label>
                              <div class="progress-group">
                                <div class="progress-group-header align-items-end">
                                  <svg class="c-icon mr-1">
                                    <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-money"></use>
                                  </svg>
                                  <div>Cash</div>
                                  <div class="ml-auto font-weight-bold mr-2">{{ $data->sj2_cash}}</div>
                                  <div class="text-muted small">(40%)</div>
                                </div>
                                <div class="progress-group-bars">
                                  <div class="progress progress-xs">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                  </div>
                                </div>
                              </div>
                              <div class="progress-group">
                                <div class="progress-group-header align-items-end">
                                  <svg class="c-icon mr-1">
                                    <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-money"></use>
                                  </svg>
                                  <div>Cash Bertahap</div>
                                  <div class="ml-auto font-weight-bold mr-2">{{ $data->sj2_cashbertahap}}</div>
                                  <div class="text-muted small">({{ $data->sj2_cashbertahap_p}}%)</div>
                                </div>
                                <div class="progress-group-bars">
                                  <div class="progress progress-xs">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: {{ $data->sj2_cashbertahap_p}}%" aria-valuenow="{{ $data->sj2_cashbertahap_p}}" aria-valuemin="0" aria-valuemax="100"></div>
                                  </div>
                                </div>
                              </div>
                              <div class="progress-group">
                                <div class="progress-group-header align-items-end">
                                  <svg class="c-icon mr-1">
                                    <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-money"></use>
                                  </svg>
                                  <div>Cash Keras</div>
                                  <div class="ml-auto font-weight-bold mr-2">{{ $data->sj2_cashkeras}}</div>
                                  <div class="text-muted small">({{ $data->sj2_cashkeras_p}}%)</div>
                                </div>
                                <div class="progress-group-bars">
                                  <div class="progress progress-xs">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: {{ $data->sj2_cashkeras_p}}%" aria-valuenow="{{ $data->sj2_cashkeras_p}}" aria-valuemin="0" aria-valuemax="100"></div>
                                  </div>
                                </div>
                              </div>
                              <div class="progress-group">
                                <div class="progress-group-header align-items-end">
                                  <svg class="c-icon mr-1">
                                    <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-money"></use>
                                  </svg>
                                  <div>InHouse</div>
                                  <div class="ml-auto font-weight-bold mr-2">{{ $data->sj2_inhouse}}</div>
                                  <div class="text-muted small">({{ $data->sj2_inhouse_p }}%)</div>
                                </div>
                                <div class="progress-group-bars">
                                  <div class="progress progress-xs">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: {{ $data->sj2_inhouse_p }}%" aria-valuenow="{{ $data->sj2_inhouse_p }}" aria-valuemin="0" aria-valuemax="100"></div>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div class="col-3">
                              <div class="c-callout c-callout-success"><small class="text-muted">Kavling Boro</small>
                                <div class="text-value-lg">{{ $data->boro_unit }}</div>
                              </div>
                              <hr>
                              <div class="progress-group">
                                <div class="progress-group-header align-items-end">
                                  <i class="c-icon mr-1 fa-solid fa-circle-dollar-to-slot"></i>
                                  <div>Unit Terjual</div>
                                  <div class="ml-auto font-weight-bold mr-2">{{ $data->boro_user }}</div>
                                  <div class="text-muted small">({{ $data->boro_user_p }}%)</div>
                                </div>
                                <div class="progress-group-bars">
                                  <div class="progress progress-xs">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: {{ $data->boro_user_p }}%" aria-valuenow="{{ $data->boro_user_p }}" aria-valuemin="0" aria-valuemax="100"></div>
                                  </div>
                                </div>
                              </div>
                              <div class="progress-group">
                                <div class="progress-group-header align-items-end">
                                  <svg class="c-icon mr-1">
                                    <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-home"></use>
                                  </svg>
                                  <div>Unit Tersedia</div>
                                  <div class="ml-auto font-weight-bold mr-2">{{ $data->boro_avail }}</div>
                                  <div class="text-muted small">({{ $data->boro_avail_p }}%)</div>
                                </div>
                                <div class="progress-group-bars">
                                  <div class="progress progress-xs">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: {{ $data->boro_avail_p }}%" aria-valuenow="{{ $data->boro_avail_p }}" aria-valuemin="0" aria-valuemax="100"></div>
                                  </div>
                                </div>
                              </div>
                              <label class="mt-1 m-0 small">Metode Pembayaran</label>
                              <div class="progress-group">
                                <div class="progress-group-header align-items-end">
                                  <svg class="c-icon mr-1">
                                    <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-money"></use>
                                  </svg>
                                  <div>Cash</div>
                                  <div class="ml-auto font-weight-bold mr-2">{{ $data->boro_cash}}</div>
                                  <div class="text-muted small">(40%)</div>
                                </div>
                                <div class="progress-group-bars">
                                  <div class="progress progress-xs">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                  </div>
                                </div>
                              </div>
                              <div class="progress-group">
                                <div class="progress-group-header align-items-end">
                                  <svg class="c-icon mr-1">
                                    <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-money"></use>
                                  </svg>
                                  <div>Cash Bertahap</div>
                                  <div class="ml-auto font-weight-bold mr-2">{{ $data->boro_cashbertahap}}</div>
                                  <div class="text-muted small">({{ $data->boro_cashbertahap_p}}%)</div>
                                </div>
                                <div class="progress-group-bars">
                                  <div class="progress progress-xs">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: {{ $data->boro_cashbertahap_p}}%" aria-valuenow="{{ $data->boro_cashbertahap_p}}" aria-valuemin="0" aria-valuemax="100"></div>
                                  </div>
                                </div>
                              </div>
                              <div class="progress-group">
                                <div class="progress-group-header align-items-end">
                                  <svg class="c-icon mr-1">
                                    <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-money"></use>
                                  </svg>
                                  <div>Cash Keras</div>
                                  <div class="ml-auto font-weight-bold mr-2">{{ $data->boro_cashkeras}}</div>
                                  <div class="text-muted small">({{ $data->boro_cashkeras_p}}%)</div>
                                </div>
                                <div class="progress-group-bars">
                                  <div class="progress progress-xs">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: {{ $data->boro_cashkeras_p}}%" aria-valuenow="{{ $data->boro_cashkeras_p}}" aria-valuemin="0" aria-valuemax="100"></div>
                                  </div>
                                </div>
                              </div>
                              <div class="progress-group">
                                <div class="progress-group-header align-items-end">
                                  <svg class="c-icon mr-1">
                                    <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-money"></use>
                                  </svg>
                                  <div>InHouse</div>
                                  <div class="ml-auto font-weight-bold mr-2">{{ $data->boro_inhouse}}</div>
                                  <div class="text-muted small">({{ $data->boro_inhouse_p }}%)</div>
                                </div>
                                <div class="progress-group-bars">
                                  <div class="progress progress-xs">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: {{ $data->boro_inhouse_p }}%" aria-valuenow="{{ $data->boro_inhouse_p }}" aria-valuemin="0" aria-valuemax="100"></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.col-->
              </div>
              <!-- /.row-->
              <div class="row">
                <div class="col-md-12">
                  <div class="card">
                    <div class="card-header">Marketing</div>
                    <div class="card-body">
                      <table class="table table-responsive-sm table-hover table-outline mb-0">
                        <thead class="thead-light">
                          <tr>
                            <th class="text-center">
                              <svg class="c-icon">
                                <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-people"></use>
                              </svg>
                            </th>
                            <th>Nama</th>
                            <th class="text-center" width="20%">Penjualan Bulan Ini</th>
                            <th class="text-center" width="20%">Total Penjualan</th>
                            <th class="text-center" width="15%">Insentif Bulan Ini</th>
                          </tr>
                        </thead>
                        <tbody>
                          @for ($i = 0; $i <10 ; $i++)
                          @php
                              $name = Faker::create('id_ID')->name;
                          @endphp
                          <tr>
                            <td class="text-center">
                              <div class="c-avatar"><img class="c-avatar-img" src="https://ui-avatars.com/api/?name={{ $name }}&background=random&format=svg" alt="user@email.com"><span class="c-avatar-status bg-success"></span></div>
                            </td>
                            <td>
                              <div>{{ $name }}</div>
                              <div class="small text-muted">Alamat: {{ Faker::create('id_ID')->streetAddress  }}</div>
                            </td>
                            
                            <td>
                              <div class="clearfix">
                                <div class="float-left"><strong>{{ $rand=rand(1,100) }}%</strong></div>
                                <div class="float-right"><small class="text-muted">{{ $rand1=number_format(50*($rand/100),0,'','') }} Unit</small></div>
                              </div>
                              <div class="progress progress-xs">
                                <div class="progress-bar bg-info" role="progressbar" style="width: {{ $rand }}%" aria-valuenow="{{ $rand }}" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                            <td>
                              <div class="clearfix">
                                <div class="float-left"><strong>{{ $rand=rand(1,100) }}%</strong></div>
                                <div class="float-right"><small class="text-muted">{{ rand(1,2000) }}</small></div>
                              </div>
                              <div class="progress progress-xs">
                                <div class="progress-bar bg-success" role="progressbar" style="width: {{ $rand }}%" aria-valuenow="{{ $rand }}" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                            
                            <td><strong>Rp.
                              <span class="float-right"> {{ number_format($rand1*500000,0,'','.') }}</span></strong>
                            </td>
                          </tr>
                          @endfor
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <!-- /.col-->
              </div>
            </div>
          </div>

@endsection

@section('javascript')

    <script src="{{ asset('js/Chart.min.js') }}"></script>
    <script src="{{ asset('js/coreui-chartjs.bundle.js') }}"></script>
    <script src="{{ asset('js/main.js') }}" defer></script>
@endsection
