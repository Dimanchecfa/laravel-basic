@extends('layouts.app')
@section('content')

<div class="container-fluid p-0">

  <div class="row mb-2 mb-xl-3">
    <div class="col-auto d-none d-sm-block">
      
    </div>

    <div class="col-auto ms-auto text-end mt-n1">
      <a href="index.html#" class="btn btn-light bg-white me-2">Invite a Friend</a>
      <a href="index.html#" class="btn btn-primary">New Project</a>
    </div>
  </div>
  <div class="row">
    <div class="col-xl-6 col-xxl-5 d-flex">
      <div class="w-100">
        <div class="row">
          <div class="col-sm-6">
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col mt-0">
                    <h5 class="card-title">Sales</h5>
                  </div>

                  <div class="col-auto">
                    <div class="stat text-primary">
                      <i class="align-middle" data-feather="truck"></i>
                    </div>
                  </div>
                </div>
                <h1 class="mt-1 mb-3">2.382</h1>
                <div class="mb-0">
                  <span class="badge badge-primary-light"> <i class="mdi mdi-arrow-bottom-right"></i> -3.65%
                  </span>
                  <span class="text-muted">Since last week</span>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col mt-0">
                    <h5 class="card-title">Visitors</h5>
                  </div>

                  <div class="col-auto">
                    <div class="stat text-primary">
                      <i class="align-middle" data-feather="users"></i>
                    </div>
                  </div>
                </div>
                <h1 class="mt-1 mb-3">14.212</h1>
                <div class="mb-0">
                  <span class="badge badge-success-light"> <i class="mdi mdi-arrow-bottom-right"></i> 5.25%
                  </span>
                  <span class="text-muted">Since last week</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col mt-0">
                    <h5 class="card-title">Earnings</h5>
                  </div>

                  <div class="col-auto">
                    <div class="stat text-primary">
                      <i class="align-middle" data-feather="dollar-sign"></i>
                    </div>
                  </div>
                </div>
                <h1 class="mt-1 mb-3">$21.300</h1>
                <div class="mb-0">
                  <span class="badge badge-success-light"> <i class="mdi mdi-arrow-bottom-right"></i> 6.65%
                  </span>
                  <span class="text-muted">Since last week</span>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col mt-0">
                    <h5 class="card-title">Orders</h5>
                  </div>

                  <div class="col-auto">
                    <div class="stat text-primary">
                      <i class="align-middle" data-feather="shopping-cart"></i>
                    </div>
                  </div>
                </div>
                <h1 class="mt-1 mb-3">64</h1>
                <div class="mb-0">
                  <span class="badge badge-danger-light"> <i class="mdi mdi-arrow-bottom-right"></i> -2.25%
                  </span>
                  <span class="text-muted">Since last week</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-6 col-xxl-7">
      <div class="card flex-fill w-100">
        <div class="card-header">
          <div class="float-end">
            <form class="row g-2">
              <div class="col-auto">
                <select class="form-select form-select-sm bg-light border-0">
                  <option>Jan</option>
                  <option value="1">Feb</option>
                  <option value="2">Mar</option>
                  <option value="3">Apr</option>
                </select>
              </div>
              <div class="col-auto">
                <input type="text" class="form-control form-control-sm bg-light rounded-2 border-0"
                  style="width: 100px;" placeholder="Search..">
              </div>
            </form>
          </div>
          <h5 class="card-title mb-0">Recent Movement</h5>
        </div>
        <div class="card-body pt-2 pb-3">
          <div class="chart chart-sm">
            <canvas id="chartjs-dashboard-line"></canvas>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-12 col-md-6 col-xxl-3 d-flex order-1 order-xxl-3">
      <div class="card flex-fill w-100">
        <div class="card-header">
          <div class="card-actions float-end">
            <div class="dropdown position-relative">
              <a href="index.html#" data-bs-toggle="dropdown" data-bs-display="static">
                <i class="align-middle" data-feather="more-horizontal"></i>
              </a>

              <div class="dropdown-menu dropdown-menu-end">
                <a class="dropdown-item" href="index.html#">Action</a>
                <a class="dropdown-item" href="index.html#">Another action</a>
                <a class="dropdown-item" href="index.html#">Something else here</a>
              </div>
            </div>
          </div>
          <h5 class="card-title mb-0">Browser Usage</h5>
        </div>
        <div class="card-body d-flex">
          <div class="align-self-center w-100">
            <div class="py-3">
              <div class="chart chart-xs">
                <canvas id="chartjs-dashboard-pie"></canvas>
              </div>
            </div>

            <table class="table mb-0">
              <tbody>
                <tr>
                  <td><i class="fas fa-circle text-primary fa-fw"></i> Chrome <span
                      class="badge badge-success-light">+12%</span></td>
                  <td class="text-end">4306</td>
                </tr>
                <tr>
                  <td><i class="fas fa-circle text-warning fa-fw"></i> Firefox <span
                      class="badge badge-danger-light">-3%</span></td>
                  <td class="text-end">3801</td>
                </tr>
                <tr>
                  <td><i class="fas fa-circle text-danger fa-fw"></i> Edge</td>
                  <td class="text-end">1689</td>
                </tr>
                <tr>
                  <td><i class="fas fa-circle text-dark fa-fw"></i> Other</td>
                  <td class="text-end">3251</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-12 col-xxl-6 d-flex order-3 order-xxl-2">
      <div class="card flex-fill w-100">
        <div class="card-header">
          <div class="card-actions float-end">
            <div class="dropdown position-relative">
              <a href="index.html#" data-bs-toggle="dropdown" data-bs-display="static">
                <i class="align-middle" data-feather="more-horizontal"></i>
              </a>

              <div class="dropdown-menu dropdown-menu-end">
                <a class="dropdown-item" href="index.html#">Action</a>
                <a class="dropdown-item" href="index.html#">Another action</a>
                <a class="dropdown-item" href="index.html#">Something else here</a>
              </div>
            </div>
          </div>
          <h5 class="card-title mb-0">Real-Time</h5>
        </div>
        <div class="card-body px-4">
          <div id="world_map" style="height:350px;"></div>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-6 col-xxl-3 d-flex order-2 order-xxl-1">
      <div class="card flex-fill">
        <div class="card-header">
          <div class="card-actions float-end">
            <div class="dropdown position-relative">
              <a href="index.html#" data-bs-toggle="dropdown" data-bs-display="static">
                <i class="align-middle" data-feather="more-horizontal"></i>
              </a>

              <div class="dropdown-menu dropdown-menu-end">
                <a class="dropdown-item" href="index.html#">Action</a>
                <a class="dropdown-item" href="index.html#">Another action</a>
                <a class="dropdown-item" href="index.html#">Something else here</a>
              </div>
            </div>
          </div>
          <h5 class="card-title mb-0">Calendar</h5>
        </div>
        <div class="card-body d-flex">
          <div class="align-self-center w-100">
            <div class="chart">
              <div id="datetimepicker-dashboard"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-12 col-lg-8 col-xxl-9 d-flex">
      <div class="card flex-fill">
        <div class="card-header">
          <div class="card-actions float-end">
            <div class="dropdown position-relative">
              <a href="index.html#" data-bs-toggle="dropdown" data-bs-display="static">
                <i class="align-middle" data-feather="more-horizontal"></i>
              </a>

              <div class="dropdown-menu dropdown-menu-end">
                <a class="dropdown-item" href="index.html#">Action</a>
                <a class="dropdown-item" href="index.html#">Another action</a>
                <a class="dropdown-item" href="index.html#">Something else here</a>
              </div>
            </div>
          </div>
          <h5 class="card-title mb-0">Latest Projects</h5>
        </div>
        <table class="table table-borderless my-0">
          <thead>
            <tr>
              <th>Name</th>
              <th class="d-none d-xxl-table-cell">Company</th>
              <th class="d-none d-xl-table-cell">Author</th>
              <th>Status</th>
              <th class="d-none d-xl-table-cell">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <div class="d-flex">
                  <div class="flex-shrink-0">
                    <div class="bg-light rounded-2">
                      <img class="p-2" src="img/icons/brand-1.svg">
                    </div>
                  </div>
                  <div class="flex-grow-1 ms-3">
                    <strong>Project Apollo</strong>
                    <div class="text-muted">
                      Web, UI/UX Design
                    </div>
                  </div>
                </div>
              </td>
              <td class="d-none d-xxl-table-cell">
                <strong>Lechters</strong>
                <div class="text-muted">
                  Real Estate
                </div>
              </td>
              <td class="d-none d-xl-table-cell">
                <strong>Vanessa Tucker</strong>
                <div class="text-muted">
                  HTML, JS, React
                </div>
              </td>
              <td>
                <div class="d-flex flex-column w-100">
                  <span class="me-2 mb-1 text-muted">65%</span>
                  <div class="progress progress-sm bg-success-light w-100">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 65%;"></div>
                  </div>
                </div>
              </td>
              <td class="d-none d-xl-table-cell">
                <a href="index.html#" class="btn btn-light">View</a>
              </td>
            </tr>
            <tr>
              <td>
                <div class="d-flex">
                  <div class="flex-shrink-0">
                    <div class="bg-light rounded-2">
                      <img class="p-2" src="img/icons/brand-2.svg">
                    </div>
                  </div>
                  <div class="flex-grow-1 ms-3">
                    <strong>Project Bongo</strong>
                    <div class="text-muted">
                      Web
                    </div>
                  </div>
                </div>
              </td>
              <td class="d-none d-xxl-table-cell">
                <strong>Cellophane Transportation</strong>
                <div class="text-muted">
                  Transportation
                </div>
              </td>
              <td class="d-none d-xl-table-cell">
                <strong>William Harris</strong>
                <div class="text-muted">
                  HTML, JS, Vue
                </div>
              </td>
              <td>
                <div class="d-flex flex-column w-100">
                  <span class="me-2 mb-1 text-muted">33%</span>
                  <div class="progress progress-sm bg-danger-light w-100">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 33%;"></div>
                  </div>
                </div>
              </td>
              <td class="d-none d-xl-table-cell">
                <a href="index.html#" class="btn btn-light">View</a>
              </td>
            </tr>
            <tr>
              <td>
                <div class="d-flex">
                  <div class="flex-shrink-0">
                    <div class="bg-light rounded-2">
                      <img class="p-2" src="img/icons/brand-3.svg">
                    </div>
                  </div>
                  <div class="flex-grow-1 ms-3">
                    <strong>Project Canary</strong>
                    <div class="text-muted">
                      Web, UI/UX Design
                    </div>
                  </div>
                </div>
              </td>
              <td class="d-none d-xxl-table-cell">
                <strong>Clemens</strong>
                <div class="text-muted">
                  Insurance
                </div>
              </td>
              <td class="d-none d-xl-table-cell">
                <strong>Sharon Lessman</strong>
                <div class="text-muted">
                  HTML, JS, Laravel
                </div>
              </td>
              <td>
                <div class="d-flex flex-column w-100">
                  <span class="me-2 mb-1 text-muted">50%</span>
                  <div class="progress progress-sm bg-warning-light w-100">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 50%;"></div>
                  </div>
                </div>
              </td>
              <td class="d-none d-xl-table-cell">
                <a href="index.html#" class="btn btn-light">View</a>
              </td>
            </tr>
            <tr>
              <td>
                <div class="d-flex">
                  <div class="flex-shrink-0">
                    <div class="bg-light rounded-2">
                      <img class="p-2" src="img/icons/brand-4.svg">
                    </div>
                  </div>
                  <div class="flex-grow-1 ms-3">
                    <strong>Project Edison</strong>
                    <div class="text-muted">
                      UI/UX Design
                    </div>
                  </div>
                </div>
              </td>
              <td class="d-none d-xxl-table-cell">
                <strong>Affinity Investment Group</strong>
                <div class="text-muted">
                  Finance
                </div>
              </td>
              <td class="d-none d-xl-table-cell">
                <strong>Vanessa Tucker</strong>
                <div class="text-muted">
                  HTML, JS, React
                </div>
              </td>
              <td>
                <div class="d-flex flex-column w-100">
                  <span class="me-2 mb-1 text-muted">80%</span>
                  <div class="progress progress-sm bg-success-light w-100">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 80%;"></div>
                  </div>
                </div>
              </td>
              <td class="d-none d-xl-table-cell">
                <a href="index.html#" class="btn btn-light">View</a>
              </td>
            </tr>
            <tr>
              <td>
                <div class="d-flex">
                  <div class="flex-shrink-0">
                    <div class="bg-light rounded-2">
                      <img class="p-2" src="img/icons/brand-5.svg">
                    </div>
                  </div>
                  <div class="flex-grow-1 ms-3">
                    <strong>Project Indigo</strong>
                    <div class="text-muted">
                      Web, UI/UX Design
                    </div>
                  </div>
                </div>
              </td>
              <td class="d-none d-xxl-table-cell">
                <strong>Konsili</strong>
                <div class="text-muted">
                  Retail
                </div>
              </td>
              <td class="d-none d-xl-table-cell">
                <strong>Christina Mason</strong>
                <div class="text-muted">
                  HTML, JS, Vue
                </div>
              </td>
              <td>
                <div class="d-flex flex-column w-100">
                  <span class="me-2 mb-1 text-muted">78%</span>
                  <div class="progress progress-sm bg-primary-light w-100">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 78%;"></div>
                  </div>
                </div>
              </td>
              <td class="d-none d-xl-table-cell">
                <a href="index.html#" class="btn btn-light">View</a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="col-12 col-lg-4 col-xxl-3 d-flex">
      <div class="card flex-fill w-100">
        <div class="card-header">
          <div class="card-actions float-end">
            <div class="dropdown position-relative">
              <a href="index.html#" data-bs-toggle="dropdown" data-bs-display="static">
                <i class="align-middle" data-feather="more-horizontal"></i>
              </a>

              <div class="dropdown-menu dropdown-menu-end">
                <a class="dropdown-item" href="index.html#">Action</a>
                <a class="dropdown-item" href="index.html#">Another action</a>
                <a class="dropdown-item" href="index.html#">Something else here</a>
              </div>
            </div>
          </div>
          <h5 class="card-title mb-0">Monthly Sales</h5>
        </div>
        <div class="card-body d-flex w-100">
          <div class="align-self-center chart chart-lg">
            <canvas id="chartjs-dashboard-bar"></canvas>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
<div class="card">
  <div class="card-header">
    <h5 class="card-title">Responsive DataTables</h5>
    <h6 class="card-subtitle text-muted">Highly flexible tool that many advanced features to any HTML table. See
      official
      documentation <a href="https://datatables.net/extensions/responsive/" target="_blank"
        rel="noopener noreferrer nofollow">here</a>.</h6>
  </div>
  <div class="card-body">
    <table id="datatables-reponsive" class="table table-striped" style="width:100%">
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
      <tbody>
        <tr>
          <td>Tiger Nixon</td>
          <td>System Architect</td>
          <td>Edinburgh</td>
          <td>61</td>
          <td>2023/04/25</td>
          <td>$320,800</td>
        </tr>
        <tr>
          <td>Garrett Winters</td>
          <td>Accountant</td>
          <td>Tokyo</td>
          <td>63</td>
          <td>2023/07/25</td>
          <td>$170,750</td>
        </tr>
        <tr>
          <td>Ashton Cox</td>
          <td>Junior Technical Author</td>
          <td>San Francisco</td>
          <td>66</td>
          <td>2019/01/12</td>
          <td>$86,000</td>
        </tr>
        <tr>
          <td>Cedric Kelly</td>
          <td>Senior Javascript Developer</td>
          <td>Edinburgh</td>
          <td>22</td>
          <td>2022/03/29</td>
          <td>$433,060</td>
        </tr>
        <tr>
          <td>Airi Satou</td>
          <td>Accountant</td>
          <td>Tokyo</td>
          <td>33</td>
          <td>2018/11/28</td>
          <td>$162,700</td>
        </tr>
        <tr>
          <td>Brielle Williamson</td>
          <td>Integration Specialist</td>
          <td>New York</td>
          <td>61</td>
          <td>2022/12/02</td>
          <td>$372,000</td>
        </tr>
        <tr>
          <td>Herrod Chandler</td>
          <td>Sales Assistant</td>
          <td>San Francisco</td>
          <td>59</td>
          <td>2022/08/06</td>
          <td>$137,500</td>
        </tr>
        <tr>
          <td>Rhona Davidson</td>
          <td>Integration Specialist</td>
          <td>Tokyo</td>
          <td>55</td>
          <td>2020/10/14</td>
          <td>$327,900</td>
        </tr>
        <tr>
          <td>Colleen Hurst</td>
          <td>Javascript Developer</td>
          <td>San Francisco</td>
          <td>39</td>
          <td>2019/09/15</td>
          <td>$205,500</td>
        </tr>
        <tr>
          <td>Sonya Frost</td>
          <td>Software Engineer</td>
          <td>Edinburgh</td>
          <td>23</td>
          <td>2018/12/13</td>
          <td>$103,600</td>
        </tr>
        <tr>
          <td>Jena Gaines</td>
          <td>Office Manager</td>
          <td>London</td>
          <td>30</td>
          <td>2018/12/19</td>
          <td>$90,560</td>
        </tr>
        <tr>
          <td>Quinn Flynn</td>
          <td>Support Lead</td>
          <td>Edinburgh</td>
          <td>22</td>
          <td>2023/03/03</td>
          <td>$342,000</td>
        </tr>
        <tr>
          <td>Charde Marshall</td>
          <td>Regional Director</td>
          <td>San Francisco</td>
          <td>36</td>
          <td>2018/10/16</td>
          <td>$470,600</td>
        </tr>
        <tr>
          <td>Haley Kennedy</td>
          <td>Senior Marketing Designer</td>
          <td>London</td>
          <td>43</td>
          <td>2022/12/18</td>
          <td>$313,500</td>
        </tr>
        <tr>
          <td>Tatyana Fitzpatrick</td>
          <td>Regional Director</td>
          <td>London</td>
          <td>19</td>
          <td>2020/03/17</td>
          <td>$385,750</td>
        </tr>
        <tr>
          <td>Michael Silva</td>
          <td>Marketing Designer</td>
          <td>London</td>
          <td>66</td>
          <td>2022/11/27</td>
          <td>$198,500</td>
        </tr>
        <tr>
          <td>Paul Byrd</td>
          <td>Chief Financial Officer (CFO)</td>
          <td>New York</td>
          <td>64</td>
          <td>2020/06/09</td>
          <td>$725,000</td>
        </tr>
        <tr>
          <td>Gloria Little</td>
          <td>Systems Administrator</td>
          <td>New York</td>
          <td>59</td>
          <td>2019/04/10</td>
          <td>$237,500</td>
        </tr>
        <tr>
          <td>Bradley Greer</td>
          <td>Software Engineer</td>
          <td>London</td>
          <td>41</td>
          <td>2022/10/13</td>
          <td>$132,000</td>
        </tr>
        <tr>
          <td>Dai Rios</td>
          <td>Personnel Lead</td>
          <td>Edinburgh</td>
          <td>35</td>
          <td>2022/09/26</td>
          <td>$217,500</td>
        </tr>
        <tr>
          <td>Jenette Caldwell</td>
          <td>Development Lead</td>
          <td>New York</td>
          <td>30</td>
          <td>2023/09/03</td>
          <td>$345,000</td>
        </tr>
        <tr>
          <td>Yuri Berry</td>
          <td>Chief Marketing Officer (CMO)</td>
          <td>New York</td>
          <td>40</td>
          <td>2019/06/25</td>
          <td>$675,000</td>
        </tr>
        <tr>
          <td>Caesar Vance</td>
          <td>Pre-Sales Support</td>
          <td>New York</td>
          <td>21</td>
          <td>2023/12/12</td>
          <td>$106,450</td>
        </tr>
        <tr>
          <td>Doris Wilder</td>
          <td>Sales Assistant</td>
          <td>Sidney</td>
          <td>23</td>
          <td>2020/09/20</td>
          <td>$85,600</td>
        </tr>
        <tr>
          <td>Angelica Ramos</td>
          <td>Chief Executive Officer (CEO)</td>
          <td>London</td>
          <td>47</td>
          <td>2019/10/09</td>
          <td>$1,200,000</td>
        </tr>
        <tr>
          <td>Gavin Joyce</td>
          <td>Developer</td>
          <td>Edinburgh</td>
          <td>42</td>
          <td>2020/12/22</td>
          <td>$92,575</td>
        </tr>
        <tr>
          <td>Jennifer Chang</td>
          <td>Regional Director</td>
          <td>Singapore</td>
          <td>28</td>
          <td>2020/11/14</td>
          <td>$357,650</td>
        </tr>
        <tr>
          <td>Brenden Wagner</td>
          <td>Software Engineer</td>
          <td>San Francisco</td>
          <td>28</td>
          <td>2023/06/07</td>
          <td>$206,850</td>
        </tr>
        <tr>
          <td>Fiona Green</td>
          <td>Chief Operating Officer (COO)</td>
          <td>San Francisco</td>
          <td>48</td>
          <td>2020/03/11</td>
          <td>$850,000</td>
        </tr>
        <tr>
          <td>Shou Itou</td>
          <td>Regional Marketing</td>
          <td>Tokyo</td>
          <td>20</td>
          <td>2023/08/14</td>
          <td>$163,000</td>
        </tr>
        <tr>
          <td>Michelle House</td>
          <td>Integration Specialist</td>
          <td>Sidney</td>
          <td>37</td>
          <td>2023/06/02</td>
          <td>$95,400</td>
        </tr>
        <tr>
          <td>Suki Burks</td>
          <td>Developer</td>
          <td>London</td>
          <td>53</td>
          <td>2019/10/22</td>
          <td>$114,500</td>
        </tr>
        <tr>
          <td>Prescott Bartlett</td>
          <td>Technical Author</td>
          <td>London</td>
          <td>27</td>
          <td>2023/05/07</td>
          <td>$145,000</td>
        </tr>
        <tr>
          <td>Gavin Cortez</td>
          <td>Team Leader</td>
          <td>San Francisco</td>
          <td>22</td>
          <td>2018/10/26</td>
          <td>$235,500</td>
        </tr>
        <tr>
          <td>Martena Mccray</td>
          <td>Post-Sales support</td>
          <td>Edinburgh</td>
          <td>46</td>
          <td>2023/03/09</td>
          <td>$324,050</td>
        </tr>
        <tr>
          <td>Unity Butler</td>
          <td>Marketing Designer</td>
          <td>San Francisco</td>
          <td>47</td>
          <td>2019/12/09</td>
          <td>$85,675</td>
        </tr>
        <tr>
          <td>Howard Hatfield</td>
          <td>Office Manager</td>
          <td>San Francisco</td>
          <td>51</td>
          <td>2018/12/16</td>
          <td>$164,500</td>
        </tr>
        <tr>
          <td>Hope Fuentes</td>
          <td>Secretary</td>
          <td>San Francisco</td>
          <td>41</td>
          <td>2020/02/12</td>
          <td>$109,850</td>
        </tr>
        <tr>
          <td>Vivian Harrell</td>
          <td>Financial Controller</td>
          <td>San Francisco</td>
          <td>62</td>
          <td>2019/02/14</td>
          <td>$452,500</td>
        </tr>
        <tr>
          <td>Timothy Mooney</td>
          <td>Office Manager</td>
          <td>London</td>
          <td>37</td>
          <td>2018/12/11</td>
          <td>$136,200</td>
        </tr>
        <tr>
          <td>Jackson Bradshaw</td>
          <td>Director</td>
          <td>New York</td>
          <td>65</td>
          <td>2018/09/26</td>
          <td>$645,750</td>
        </tr>
        <tr>
          <td>Olivia Liang</td>
          <td>Support Engineer</td>
          <td>Singapore</td>
          <td>64</td>
          <td>2023/02/03</td>
          <td>$234,500</td>
        </tr>
        <tr>
          <td>Bruno Nash</td>
          <td>Software Engineer</td>
          <td>London</td>
          <td>38</td>
          <td>2023/05/03</td>
          <td>$163,500</td>
        </tr>
        <tr>
          <td>Sakura Yamamoto</td>
          <td>Support Engineer</td>
          <td>Tokyo</td>
          <td>37</td>
          <td>2019/08/19</td>
          <td>$139,575</td>
        </tr>
        <tr>
          <td>Thor Walton</td>
          <td>Developer</td>
          <td>New York</td>
          <td>61</td>
          <td>2023/08/11</td>
          <td>$98,540</td>
        </tr>
        <tr>
          <td>Finn Camacho</td>
          <td>Support Engineer</td>
          <td>San Francisco</td>
          <td>47</td>
          <td>2019/07/07</td>
          <td>$87,500</td>
        </tr>
        <tr>
          <td>Serge Baldwin</td>
          <td>Data Coordinator</td>
          <td>Singapore</td>
          <td>64</td>
          <td>2022/04/09</td>
          <td>$138,575</td>
        </tr>
        <tr>
          <td>Zenaida Frank</td>
          <td>Software Engineer</td>
          <td>New York</td>
          <td>63</td>
          <td>2020/01/04</td>
          <td>$125,250</td>
        </tr>
        <tr>
          <td>Zorita Serrano</td>
          <td>Software Engineer</td>
          <td>San Francisco</td>
          <td>56</td>
          <td>2022/06/01</td>
          <td>$115,000</td>
        </tr>
        <tr>
          <td>Jennifer Acosta</td>
          <td>Junior Javascript Developer</td>
          <td>Edinburgh</td>
          <td>43</td>
          <td>2023/02/01</td>
          <td>$75,650</td>
        </tr>
        <tr>
          <td>Cara Stevens</td>
          <td>Sales Assistant</td>
          <td>New York</td>
          <td>46</td>
          <td>2023/12/06</td>
          <td>$145,600</td>
        </tr>
        <tr>
          <td>Hermione Butler</td>
          <td>Regional Director</td>
          <td>London</td>
          <td>47</td>
          <td>2023/03/21</td>
          <td>$356,250</td>
        </tr>
        <tr>
          <td>Lael Greer</td>
          <td>Systems Administrator</td>
          <td>London</td>
          <td>21</td>
          <td>2019/02/27</td>
          <td>$103,500</td>
        </tr>
        <tr>
          <td>Jonas Alexander</td>
          <td>Developer</td>
          <td>San Francisco</td>
          <td>30</td>
          <td>2020/07/14</td>
          <td>$86,500</td>
        </tr>
        <tr>
          <td>Shad Decker</td>
          <td>Regional Director</td>
          <td>Edinburgh</td>
          <td>51</td>
          <td>2018/11/13</td>
          <td>$183,000</td>
        </tr>
        <tr>
          <td>Michael Bruce</td>
          <td>Javascript Developer</td>
          <td>Singapore</td>
          <td>29</td>
          <td>2023/06/27</td>
          <td>$183,000</td>
        </tr>
        <tr>
          <td>Donna Snider</td>
          <td>Customer Support</td>
          <td>New York</td>
          <td>27</td>
          <td>2023/01/25</td>
          <td>$112,000</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
@endsection