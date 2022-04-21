@include('admin.layout.header')

<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Dashboard</h1>
    </div>

    <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-primary">
            <i class="far fa-user"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Konsumen</h4>
            </div>
            <div class="card-body">
              10
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-danger">
            <i class="far fa-newspaper"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Penyedia Jasa</h4>
            </div>
            <div class="card-body">
              42
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-warning">
            <i class="far fa-file"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Pemesanan</h4>
            </div>
            <div class="card-body">
              1,201
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-success">
            <i class="fas fa-circle"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Artikel</h4>
            </div>
            <div class="card-body">
              47
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-8 col-md-12 col-12 col-sm-12">
        <div id="container1"></div>
        <script type="text/javascript">
          // Create the chart
          Highcharts.chart('container1', {
            chart: {
              type: 'column'
            },
            title: {
              text: 'Statistik Servisin April, 2022'
            },
            accessibility: {
              announceNewData: {
                enabled: true
              }
            },
            xAxis: {
              type: 'category'
            },
            yAxis: {
              title: {
                text: 'Total Statistik Servisin'
              }

            },
            legend: {
              enabled: false
            },
            plotOptions: {
              series: {
                borderWidth: 0,
                dataLabels: {
                  enabled: true,
                  format: '{point.y:.1f}%'
                }
              }
            },

            tooltip: {
              headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
              pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
            },

            series: [{
              name: "Browsers",
              colorByPoint: true,
              data: [{
                  name: "Konsumen",
                  y: 62.74,

                },
                {
                  name: "Penyedia Jasa",
                  y: 10.57,

                },
                {
                  name: "Pemesanan",
                  y: 7.23,

                },
                {
                  name: "Artikel",
                  y: 5.58,

                }
              ]
            }],
            drilldown: {
              breadcrumbs: {
                position: {
                  align: 'right'
                }
              },
              series: [{
                  name: "Chrome",
                  id: "Chrome",
                  data: [
                    [
                      "v65.0",
                      0.1
                    ],
                    [
                      "v64.0",
                      1.3
                    ],
                    [
                      "v63.0",
                      53.02
                    ],
                    [
                      "v62.0",
                      1.4
                    ],
                    [
                      "v61.0",
                      0.88
                    ],
                    [
                      "v60.0",
                      0.56
                    ],
                    [
                      "v59.0",
                      0.45
                    ],
                    [
                      "v58.0",
                      0.49
                    ],
                    [
                      "v57.0",
                      0.32
                    ],
                    [
                      "v56.0",
                      0.29
                    ],
                    [
                      "v55.0",
                      0.79
                    ],
                    [
                      "v54.0",
                      0.18
                    ],
                    [
                      "v51.0",
                      0.13
                    ],
                    [
                      "v49.0",
                      2.16
                    ],
                    [
                      "v48.0",
                      0.13
                    ],
                    [
                      "v47.0",
                      0.11
                    ],
                    [
                      "v43.0",
                      0.17
                    ],
                    [
                      "v29.0",
                      0.26
                    ]
                  ]
                },
                {
                  name: "Firefox",
                  id: "Firefox",
                  data: [
                    [
                      "v58.0",
                      1.02
                    ],
                    [
                      "v57.0",
                      7.36
                    ],
                    [
                      "v56.0",
                      0.35
                    ],
                    [
                      "v55.0",
                      0.11
                    ],
                    [
                      "v54.0",
                      0.1
                    ],
                    [
                      "v52.0",
                      0.95
                    ],
                    [
                      "v51.0",
                      0.15
                    ],
                    [
                      "v50.0",
                      0.1
                    ],
                    [
                      "v48.0",
                      0.31
                    ],
                    [
                      "v47.0",
                      0.12
                    ]
                  ]
                },
                {
                  name: "Internet Explorer",
                  id: "Internet Explorer",
                  data: [
                    [
                      "v11.0",
                      6.2
                    ],
                    [
                      "v10.0",
                      0.29
                    ],
                    [
                      "v9.0",
                      0.27
                    ],
                    [
                      "v8.0",
                      0.47
                    ]
                  ]
                },
                {
                  name: "Safari",
                  id: "Safari",
                  data: [
                    [
                      "v11.0",
                      3.39
                    ],
                    [
                      "v10.1",
                      0.96
                    ],
                    [
                      "v10.0",
                      0.36
                    ],
                    [
                      "v9.1",
                      0.54
                    ],
                    [
                      "v9.0",
                      0.13
                    ],
                    [
                      "v5.1",
                      0.2
                    ]
                  ]
                },
                {
                  name: "Edge",
                  id: "Edge",
                  data: [
                    [
                      "v16",
                      2.6
                    ],
                    [
                      "v15",
                      0.92
                    ],
                    [
                      "v14",
                      0.4
                    ],
                    [
                      "v13",
                      0.1
                    ]
                  ]
                },
                {
                  name: "Opera",
                  id: "Opera",
                  data: [
                    [
                      "v50.0",
                      0.96
                    ],
                    [
                      "v49.0",
                      0.82
                    ],
                    [
                      "v12.1",
                      0.14
                    ]
                  ]
                }
              ]
            }
          });
        </script>
      </div>

      <div class="col-lg-4 col-md-12 col-12 col-sm-12">
        <div class="card">
          <div class="card-header">
            <h4>Recent Activities</h4>
          </div>
          <div class="card-body">
            <ul class="list-unstyled list-unstyled-border">
              <li class="media">
                <img class="mr-3 rounded-circle" width="50" src="../assets/img/avatar/avatar-1.png" alt="avatar">
                <div class="media-body">
                  <div class="float-right text-primary">Now</div>
                  <div class="media-title">Farhan A Mujib</div>
                  <span class="text-small text-muted">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.</span>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>

    </div>



    <div class="section-body">
    </div>
  </section>
</div>
<footer class="main-footer">
  <div class="footer-left">
    Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad Nauval Azhar</a>
  </div>
  <div class="footer-right">
    2.3.0
  </div>
</footer>
</div>
</div>

@include('admin.layout.footer')