<?= $this->include("admin/adminlayout/header") ?>
<div id="layoutSidenav_content">
  <main class="theme">
    <div class="container-fluid px-4">
      <h1 class="mt-4" style="font-style:italic;">Admin-Dashboard</h1>
      <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
      </ol>
      <div class="row">
        <div class="col-xl-3 col-md-6">
          <div class="card bg-primary text-white mb-4" style="background: linear-gradient(45deg,#4099ff,#73b4ff);">
            <div class="card-body">
              <div>
                <i class="fa fa-pen fa-xl"></i>
              </div>
              <div class="row">
                <div class="col-6">Total Content</div>
                <div class="col-6" style="text-align:end; font-size:20px;"><b>
                    <?= $totalContent; ?>
                  </b></div>
              </div>
            </div>
            <div class="card-footer d-flex align-items-center justify-content-between">
              <a class="small text-white stretched-link" href="<?= base_url("/showcontent") ?>">View Details</a>
              <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-md-6">
          <div class="card bg-warning text-white mb-4" style="background: linear-gradient(45deg,#FFB64D,#ffcb80);">
            <div class="card-body">
              <div>
                <i class="fa fa-file fa-xl"></i>
              </div>
              <div class="row">
                <div class="col-6">Total Pages</div>
                <div class="col-6" style="text-align:end; font-size:20px;"><b>
                    <?= $totalPage; ?>
                  </b></div>
              </div>

            </div>
            <div class="card-footer d-flex align-items-center justify-content-between">
              <a class="small text-white stretched-link" href="<?= base_url("/showpage") ?>">View Details</a>
              <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-md-6">
          <div class="card bg-success text-white mb-4" style="background: linear-gradient(45deg,#2ed8b6,#59e0c5);">
            <div class="card-body">
              <div>
                <i class="fa fa-user fa-xl"></i>
              </div>
              <div class="row">
                <div class="col-6">Total Users</div>
                <div class="col-6" style="text-align:end; font-size:20px;"><b>
                    <?= $totalUser; ?>
                  </b></div>
              </div>

            </div>
            <div class="card-footer d-flex align-items-center justify-content-between">
              <a class="small text-white stretched-link" href="<?= base_url("/content/view_all_users") ?>">View
                Details</a>
              <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-md-6">
          <div class="card bg-danger text-white mb-4" style="background: linear-gradient(45deg,#FF5370,#ff869a);">
            <div class="card-body">
              <div>
                <i class="fa fa-file fa-xl"></i>
              </div>
              <div class="row">
                <div class="col-6"> Active User</div>
                <div class="col-6" style="text-align:end; font-size:20px;"><b>
                    <?= $user_active; ?>
                  </b></div>
              </div>
            </div>
            <div class="card-footer d-flex align-items-center justify-content-between">
              <a class="small text-white stretched-link" href="#">View Details</a>
              <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
          </div>
        </div>
        
      </div>
      <div class="row">
        <div class="container col-6 mt-4 mb-4">
          <div class="card mb-4">
            <div class="card-header">
              <i class="fas fa-chart-bar me-1"></i>
              Project Total Data (Bar Chart)
            </div>
            <div class="card-body">
              <div id="barChart" style="width: 100%; height: 400px;"></div>
            </div>
          </div>
        </div>
        <div class="container col-6 mt-4 mb-4">
          <div class="card mb-4">
            <div class="card-header">
              <i class="fas fa-chart-pie me-1"></i>
              Project Total Data (Pie Chart)
            </div>
            <div class="card-body">
              <div id="pieChart" style="width: 100%; height: 400px;"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="container col-12 mt-4 mb-4">
        <div class="card mb-4">
          <div class="card-header">
            <i class="fas fa-clock me-1"></i>
            Project Total Data (Gauge Chart)
          </div>
          <div class="card-body">
            <div id="chart_div" style=" height: 300px;"></div>
          </div>
        </div>
      </div>
      <!-- <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    DataTable Example
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011/04/25</td>
                                <td>$320,800</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div> -->
    </div>
  </main>

  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">

    google.charts.load('current', { 'packages': ['bar', 'corechart', 'gauge'] });
    google.charts.setOnLoadCallback(drawCharts);

    function drawCharts() {
      // Bar Chart Data
      var barData = google.visualization.arrayToDataTable([
        ['Data', 'Percentage'],
        ["Total Content", <?= $totalContent; ?>],
        ["Total Pages", <?= $totalPage; ?>],
        ["Total Users", <?= $totalUser; ?>],
        ["Active Users", <?= $user_active; ?>],

      ]);

      var barOptions = {
        legend: { position: 'none' },
        bar: { groupWidth: "40%" }
      };

      // Pie Chart Data
      var pieData = google.visualization.arrayToDataTable([
        ['Task', 'Value'],
        ["Total Section-A", <?= $totalS_A; ?>],
        ["Total Section-B", <?= $totalS_B; ?>],
        ["Total Section-C", <?= $totalS_C; ?>],
        ["Total Section-D", <?= $totalS_D; ?>],
        ["Total Section-E", <?= $totalS_E; ?>],

      ]);

      var pieOptions = {
        title: 'Project Data',
        is3D: true,
      };

      // Gauge Chart
      var data = google.visualization.arrayToDataTable([
        ['Label', 'Value'],
        ["Total Content", <?= $totalContent; ?>],
        ["Total Pages", <?= $totalPage; ?>],
        ["Total Users", <?= $totalUser; ?>],
        ["Active Users", <?= $user_active; ?>],
      ]);

      var options = {

        redFrom: 90, redTo: 100,
        yellowFrom: 75, yellowTo: 90,
        minorTicks: 5
      };



      // setInterval(function() {
      //   data.setValue(0, 1, 40 + Math.round(60 * Math.random()));
      //   chart.draw(data, options);
      // }, 13000);
      // setInterval(function() {
      //   data.setValue(1, 1, 40 + Math.round(60 * Math.random()));
      //   chart.draw(data, options);
      // }, 5000);
      // setInterval(function() {
      //   data.setValue(2, 1, 60 + Math.round(20 * Math.random()));
      //   chart.draw(data, options);
      // }, 26000);

      // Bar Chart
      var barChart = new google.charts.Bar(document.getElementById('barChart'));
      barChart.draw(barData, google.charts.Bar.convertOptions(barOptions));

      // Pie Chart
      var pieChart = new google.visualization.PieChart(document.getElementById('pieChart'));
      pieChart.draw(pieData, pieOptions);

      //Gauge Chart
      var chart = new google.visualization.Gauge(document.getElementById('chart_div'));
      chart.draw(data, options);

    }
  </script>
  <?= $this->include("admin/adminlayout/footer") ?>