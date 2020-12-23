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
                            
                            <p class="mb-0 font-weight-medium text-primary">No Of Active Requests</p>
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
                            
                            <p class="mb-0 font-weight-medium text-primary">No of Pending Requests</p>
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
                            
                            <p class="mb-0 font-weight-medium text-primary">No of <br>Experts</p>
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
                            
                            <p class="mb-0 font-weight-medium text-primary">No of <br> Clients</p>
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
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-12 grid-margin">
                    <div class="card">
                      <div class="card-body">
                        <div class="d-flex justify-content-between">
                          <h4 class="card-title mb-0">My Requests</h4>
                          <a href="myRequests"><small>Show All</small></a>
                        </div>
                        <p>Here are your Recent Requests</p>
                        <div class="col-12">
                          <table class="table table-striped table-hover">
                            <thead>
                              <tr>
                                <th>S/N</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Status</th>
                                <th>Date</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>1</td>
                                <td>Loan Request</td>
                                <td>Financial</td>
                                <td>
                            <label class="badge badge-danger">Pending</label>
                          </td>
                                <td>22/1/2020</td>

                              </tr>
                              <tr>
                              <td>2</td>
                                <td>Land Request</td>
                                <td>Financial</td>
                                <td>
                            <label class="badge badge-info">Completed</label>
                          </td>
                                <td>31/4/2020</td>

                              </tr>
                              <tr>
                              <td>3</td>
                                <td>Advisory</td>
                                <td>Admin</td>
                                <td>
                            <label class="badge badge-warning">In progress</label>
                          </td>
                               
                                <td>02/2/2020</td>

                              </tr>
                              <tr>
                              <td>4</td>
                                <td>Loan Request</td>
                                <td>Financial</td>
                                <td>
                            <label class="badge badge-info">Completed</label>
                          </td>
            
                                <td>12/11/2020</td>

                              </tr>
                              <tr>
                              <td>5</td>
                                <td>Advisory</td>
                                <td>Admin</td>
                                <td>
                            <label class="badge badge-danger">Pending</label>
                          </td>
                                <td>22/1/2020</td>

                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
               </div>
              </div>
            </div>
            <div class="row">
            <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex  pb-3">
                      <h4 class="card-title mb-0">News</h4>
                      
                    </div>
                    <ul class="timeline">
                      <li class="timeline-item">
                        <p class="timeline-content"><a href="#">Ben Tossell</a> as the board chairman. </p>
                        <p class="event-time">Just now</p>
                      </li>
                      <li class="timeline-item">
                        <p class="timeline-content"><a href="#">Tossell Ade,</a> won an award.</p>
                        <p class="event-time">Yesterday</p>
                      </li>
                      <li class="timeline-item">
                        <p class="timeline-content"><a href="#">Nigeria</a> to fight COVID </p>
                        <p class="event-time">Just now</p>
                      </li>
                      
                      <li class="timeline-item">
                        <p class="timeline-content"><a href="#">Ben Tossell</a> assign you a task</p>
                        <p class="event-time">Just now</p>
                      </li>
                      <li class="timeline-item">
                        <p class="timeline-content"><a href="#">Vic Mark</a> promoted to C.E.O.</p>
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
                    <h4 class="card-title mb-0">Recent Events</h4>
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
                    <h4 class="card-title mb-0">Upcoming Events</h4>
                    <div class="table-responsive">
                      <table class="table table-stretched">
                        <thead>
                          <tr>
                            <th>Event</th>
                            <th>Date</th>
                            
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              <p class="mb-1 text-dark font-weight-medium">Annual General Meeting</p><small class="font-weight-medium">Lagos, NG.</small>
                            </td>
                            <td class="font-weight-medium"> <small class="text-muted">Jan 14, 2020</small></td>
                            
                          </tr>
                          <tr>
                            <td>
                              <p class="mb-1 text-dark font-weight-medium">Exquiste Excursion </p><small class="font-weight-medium">Abuja, NG.</small>
                            </td>
                            <td class="font-weight-medium"><small class="text-muted">Mar 14, 2020</small></td>
                            
                          </tr>
                          <tr>
                            <td>
                              <p class="mb-1 text-dark font-weight-medium">Rafle Draws</p><small class="font-weight-medium">Jos, NG.</small>
                            </td>
                            <td class="font-weight-medium"><small class="text-muted">Nov 14, 2020</small></td>
                            
                          </tr>
                          <tr>
                            <td>
                              <p class="mb-1 text-dark font-weight-medium">End of the year's party</p><small class="font-weight-medium">Lagos, NG.</small>
                            </td>
                            <td class="font-weight-medium"><small class="text-muted">Dec 14, 2020</small></td>
                            
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

   