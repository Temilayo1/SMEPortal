@extends ('layouts.main1')

@section ('content')


        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <!-- Page Title Header Starts-->
            
            <!-- Page Title Header Ends-->
            <div class="row">
              <div class="col-md-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-lg-3 col-md-6">
                        <div class="d-flex">
                          <div class="wrapper">
                            
                            <h5 class="mb-0 font-weight-medium text-primary">No Of Active Requests</h5>
                            <h3 class="mb-0 font-weight-semibold">13</h3>
                          </div>
                          <div class="wrapper my-auto ml-auto ml-lg-4">
                           <canvas height="50" width="100" id="stats-line-graph-1" class="chartjs-render-monitor" style="display: flex;"></canvas>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-6 mt-md-0 mt-4">
                        <div class="d-flex">
                          <div class="wrapper">
                            
                            <h5 class="mb-0 font-weight-medium text-primary">No Of Pending Requests</h5>
                            <h3 class="mb-0 font-weight-semibold">5</h3>
                          </div>
                          <div class="wrapper my-auto ml-auto ml-lg-4">
                            <canvas height="50" width="100" id="stats-line-graph-2"></canvas>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-6 mt-md-0 mt-4">
                        <div class="d-flex">
                          <div class="wrapper">
                            
                            <h5 class="mb-0 font-weight-medium text-primary">No Of Experts</h5>
                            <h3 class="mb-0 font-weight-semibold">9</h3>
                          </div>
                          <div class="wrapper my-auto ml-auto ml-lg-4">
                            <canvas height="50" width="100" id="stats-line-graph-3"></canvas>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-6 mt-md-0 mt-4">
                        <div class="d-flex">
                          <div class="wrapper">
                            
                            <h5 class="mb-0 font-weight-medium text-primary">No Of Clients</h5>
                            <h3 class="mb-0 font-weight-semibold">9</h3>
                          </div>
                          <div class="wrapper my-auto ml-auto ml-lg-4">
                            <canvas height="50" width="100" id="stats-line-graph-3"></canvas>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="row">
              <div class="col-md-8">
                <div class="row">
                  {{-- <div class="col-md-5 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body pb-0">
                        <div class="d-flex justify-content-between">
                          <h4 class="card-title mb-0">Total Revenue</h4>
                          <p class="font-weight-semibold mb-0">+1.37%</p>
                        </div>
                        <h3 class="font-weight-medium mb-4">184.42K</h3>
                      </div>
                      <canvas class="mt-n4" height="90" id="total-revenue"></canvas>
                    </div>
                  </div>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <div class="col-md-5 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body pb-0">
                        <div class="d-flex justify-content-between">
                          <h4 class="card-title mb-0">Transaction</h4>
                          <p class="font-weight-semibold mb-0">-2.87%</p>
                        </div>
                        <h3 class="font-weight-medium">147.7K</h3>
                      </div>
                      <canvas class="mt-n3" height="90" id="total-transaction"></canvas>
                    </div>
                  </div> --}}
                  <div class="col-md-11 grid-margin">
                    <div class="card">
                      {{-- <div class="card-body">
                        <h4 class="card-title mb-0">Market Overview</h4>
                        <div class="d-flex align-items-center justify-content-between w-100">
                          <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                          <div class="dropdown">
                            <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dateSorter" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">This Month</button>
                            <div class="dropdown-menu" aria-labelledby="dateSorter">
                              <div class="dropdown-item" id="market-overview_1">Daily</div>
                              <div class="dropdown-item" id="market-overview_2">Weekly</div>
                              <div class="dropdown-item" id="market-overview_3">Monthly</div>
                            </div>
                          </div>
                        </div>
                        <div class="d-flex align-items-end">
                          <h3 class="mb-0 font-weight-semibold">$36,2531.00</h3>
                          <p class="mb-0 font-weight-medium mr-2 ml-2 mb-1">USD</p>
                          <p class="mb-0 text-success font-weight-semibold mb-1">(+1.37%)</p>
                        </div>
                        <canvas class="mt-4" height="100" id="market-overview-chart"></canvas>
                      </div> --}}
                    </div>
                  </div>
                  <div class="col-md-11 grid-margin">
                    <div class="card">
                      <div class="card-body">
                        <div class="d-flex justify-content-between">
                          <h4 class="card-title mb-0">My Requests</h4>
                          <a href="myRequests"><small>Show All</small></a>
                        </div>
                        <p>Here are your Recent Requests</p>
                        <div class="table-responsive">
                          <table class="table table-striped table-hover">
                            <thead>
                              <tr>
                                <th>Request ID</th>
                                <th>Subject</th>
                                <th>Status</th>
                                
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>INV-87239</td>
                                <td>Loan</td>
                                <td>Pending</td>
                                
                              </tr>
                              <tr>
                                <td>INV-87239</td>
                                <td>Suggestions</td>
                                <td>Completed</td>
                                
                              </tr>
                              <tr>
                                <td>INV-87239</td>
                                <td>Review</td>
                                <td>Fixed</td>
                                
                              </tr>
                              <tr>
                                <td>INV-87239</td>
                                <td>Loan</td>
                                <td>In progress</td>
                                
                              </tr>
                              <tr>
                                <td>INV-87239</td>
                                <td>Bugging</td>
                                <td>Completed</td>
                                
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 grid-margin stretch-card">
                    {{-- <div class="card">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="d-flex align-items-center pb-2">
                              <div class="dot-indicator bg-danger mr-2"></div>
                              <p class="mb-0">Total Sales</p>
                            </div>
                            <h4 class="font-weight-semibold">$7,590</h4>
                            <div class="progress progress-md">
                              <div class="progress-bar bg-danger" role="progressbar" style="width: 78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="78"></div>
                            </div>
                          </div>
                          <div class="col-md-6 mt-4 mt-md-0">
                            <div class="d-flex align-items-center pb-2">
                              <div class="dot-indicator bg-success mr-2"></div>
                              <p class="mb-0">Active Users</p>
                            </div>
                            <h4 class="font-weight-semibold">$5,460</h4>
                            <div class="progress progress-md">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="45"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 grid-margin stretch-card average-price-card">
                    <div class="card text-white">
                      <div class="card-body">
                        <div class="d-flex justify-content-between pb-2 align-items-center">
                          <h2 class="font-weight-semibold mb-0">4,624</h2>
                          <div class="icon-holder">
                            <i class="mdi mdi-briefcase-outline"></i>
                          </div>
                        </div>
                        <div class="d-flex justify-content-between">
                          <h5 class="font-weight-semibold mb-0">Average Price</h5>
                          <p class="text-white mb-0">Since last month</p>
                        </div>
                      </div>
                    </div> --}}
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="row">
                  <div class="col-md-12 grid-margin">
                    <div class="card">
                      <div class="card-body">
                        <h1 class="card-title mb-4">Website Audience Metrics</h1>
                        <div class="row">
                          <div class="col-5 col-md-5">
                            <div class="wrapper border-bottom mb-2 pb-2">
                              <h4 class="font-weight-semibold mb-0">523,200</h4>
                              <div class="d-flex align-items-center">
                                <p class="mb-0">Page Views</p>
                                <div class="dot-indicator bg-secondary ml-auto"></div>
                              </div>
                            </div>
                            <div class="wrapper">
                              <h4 class="font-weight-semibold mb-0">753,098</h4>
                              <div class="d-flex align-items-center">
                                <p class="mb-0">Bounce Rate</p>
                                <div class="dot-indicator bg-primary ml-auto"></div>
                              </div>
                            </div>
                          </div>
                          <div class="col-5 col-md-7 d-flex pl-4">
                            <div class="ml-auto">
                              <canvas height="100" id="realtime-statistics"></canvas>
                            </div>
                          </div>
                        </div>
                        <div class="row mt-5">
                          <div class="col-6">
                            <div class="d-flex align-items-center mb-2">
                              <div class="icon-holder bg-primary text-white py-1 px-3 rounded mr-2">
                                <i class="icon ion-logo-buffer icon-sm"></i>
                              </div>
                              <h2 class="font-weight-semibold mb-0">3,605</h2>
                            </div>
                            <p>Since last week</p>
                            <p><span class="font-weight-medium">0.51%</span> (30 days)</p>
                          </div>
                          <div class="col-6">
                            <div class="mt-n3 ml-auto" id="dashboard-guage-chart"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12 grid-margin">
                    <div class="card">
                      {{-- <div class="card-body">
                        <h4 class="card-title mb-4">World sellings</h4>
                        <div id="dashboard-vmap" class="vector-map"></div>
                        <div class="wrapper">
                          <div class="d-flex w-100 pt-2 mt-4">
                            <p class="mb-0 font-weight-semibold">California</p>
                            <div class="wrapper ml-auto d-flex align-items-center">
                              <p class="font-weight-semibold mb-0">26,437</p>
                              <p class="ml-1 mb-0">26%</p>
                            </div>
                          </div>
                          <div class="d-flex w-100 pt-2">
                            <p class="mb-0 font-weight-semibold">Washington</p>
                            <div class="wrapper ml-auto d-flex align-items-center">
                              <p class="font-weight-semibold mb-0">3252</p>
                              <p class="ml-1 mb-0">64%</p>
                            </div>
                          </div>
                          <div class="d-flex w-100 pt-2">
                            <p class="mb-0 font-weight-semibold">Michigan</p>
                            <div class="wrapper ml-auto d-flex align-items-center">
                              <p class="font-weight-semibold mb-0">4,987</p>
                              <p class="ml-1 mb-0">30%</p>
                            </div>
                          </div>
                        </div>
                      </div> --}}
                    </div>
                  </div>
                  <div class="col-md-12 grid-margin">
                    <div class="card">
                      {{-- <div class="card-body">
                        <h4 class="card-title mb-0">Top Performer</h4>
                        <div class="d-flex mt-3 py-2 border-bottom">
                          <img class="img-sm rounded-circle" src="../assets/images/faces/face3.jpg" alt="profile image">
                          <div class="wrapper ml-2">
                            <p class="mb-n1 font-weight-semibold">Ray Douglas</p>
                            <small>162543</small>
                          </div>
                          <small class="text-muted ml-auto">1 Hours ago</small>
                        </div>
                        <div class="d-flex py-2 border-bottom">
                          <span class="img-sm rounded-circle bg-warning text-white text-avatar">OH</span>
                          <div class="wrapper ml-2">
                            <p class="mb-n1 font-weight-semibold">Ora Hill</p>
                            <small>162543</small>
                          </div>
                          <small class="text-muted ml-auto">4 Hours ago</small>
                        </div>
                        <div class="d-flex py-2 border-bottom">
                          <img class="img-sm rounded-circle" src="../assets/images/faces/face4.jpg" alt="profile image">
                          <div class="wrapper ml-2">
                            <p class="mb-n1 font-weight-semibold">Brian Dean</p>
                            <small>162543</small>
                          </div>
                          <small class="text-muted ml-auto">4 Hours ago</small>
                        </div>
                        <div class="d-flex pt-2">
                          <span class="img-sm rounded-circle bg-success text-white text-avatar">OB</span>
                          <div class="wrapper ml-2">
                            <p class="mb-n1 font-weight-semibold">Olive Bridges</p>
                            <small>162543</small>
                          </div>
                          <small class="text-muted ml-auto">7 Hours ago</small>
                        </div>
                      </div> --}}
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title mb-0">Upcoming Events</h4>
                    <div class="d-flex py-2 border-bottom">
                      <div class="wrapper">
                        <small class="text-muted">Mar 14, 2019</small>
                        <p class="font-weight-semibold text-gray mb-0">Change in Directors</p>
                      </div>
                      
                    </div>
                    <div class="d-flex py-2 border-bottom">
                      <div class="wrapper">
                        <small class="text-muted">Mar 14, 2019</small>
                        <p class="font-weight-semibold text-gray mb-0">Other Events</p>
                      </div>
                      
                    </div>
                    <div class="d-flex py-2 border-bottom">
                      <div class="wrapper">
                        <small class="text-muted">Mar 14, 2019</small>
                        <p class="font-weight-semibold text-gray mb-0">Quarterly Report</p>
                      </div>
                    
                    </div>
                    <div class="d-flex pt-2">
                      <div class="wrapper">
                        <small class="text-muted">Mar 14, 2019</small>
                        <p class="font-weight-semibold text-gray mb-0">Change in Directors</p>
                      </div>
                      
                    </div>
                    <a class="d-block mt-5" href="#">Show all</a>
                  </div>
                </div>
              </div>
              <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex  pb-3">
                      <h4 class="card-title mb-0">Recent Events</h4>
                      
                    </div>
                    <ul class="timeline">
                      <li class="timeline-item">
                        <p class="timeline-content"><a href="#">Ben Tossell</a> assign you a task</p>
                        <p class="event-time">Just now</p>
                      </li>
                      <li class="timeline-item">
                        <p class="timeline-content"><a href="#">Ben Tossell</a> assign you a task</p>
                        <p class="event-time">Just now</p>
                      </li>
                      <li class="timeline-item">
                        <p class="timeline-content"><a href="#">Ben Tossell</a> assign you a task</p>
                        <p class="event-time">Just now</p>
                      </li>
                      
                      <li class="timeline-item">
                        <p class="timeline-content"><a href="#">Ben Tossell</a> assign you a task</p>
                        <p class="event-time">Just now</p>
                      </li>
                    </ul>
                    <a class="d-block mt-3" href="#">Show all</a>
                  </div>
                </div>
              </div>
              <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title mb-0">Experts Profile</h4>
                    <div class="table-responsive">
                      <table class="table table-stretched">
                        <thead>
                          <tr>
                            <th>Name</th>
                            <th>Experience</th>
                            <th>Area</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              <p class="mb-1 text-dark font-weight-medium">Joel Olayinka</p><small class="font-weight-medium">Netflix, Inc.</small>
                            </td>
                            <td class="font-weight-medium">5 years</td>
                            <td class="text-success font-weight-medium">Bio</td>
                          </tr>
                          <tr>
                            <td>
                              <p class="mb-1 text-dark font-weight-medium">David Alaba </p><small class="font-weight-medium">Tesla, Inc.</small>
                            </td>
                            <td class="font-weight-medium">1 year</td>
                            <td class="text-danger font-weight-medium">Chem</td>
                          </tr>
                          <tr>
                            <td>
                              <p class="mb-1 text-dark font-weight-medium">Niyi Sobole</p><small class="font-weight-medium">Alphabet, Inc.</small>
                            </td>
                            <td class="font-weight-medium">10 years</td>
                            <td class="text-danger font-weight-medium">Photo</td>
                          </tr>
                          <tr>
                            <td>
                              <p class="mb-1 text-dark font-weight-medium">Siji Bomi</p><small class="font-weight-medium">Amazon.com, Inc.</small>
                            </td>
                            <td class="font-weight-medium">1 years</td>
                            <td class="text-success font-weight-medium">tech</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <a class="d-block mt-3" href="/expertProfile">View all</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
   @endsection

   