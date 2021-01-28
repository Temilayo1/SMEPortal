@extends ('layouts.app')

@section ('content')
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth register-bg-1 theme-one">
          <div class="row w-100">
            <div class="col-lg-4 mx-auto">
              <h4 class="text-center mb-4">Micheal Stevens SME Advisory Portal</h4>
              <p class="text-center mb-2">Fill in your business information to continue </p>
              <div class="auto-form-wrapper">
                <form action="#">
                <div class="form-group">
                <label class="label">What's your business name?</label>
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder=" Name">
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="mdi mdi-check-circle-outline"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                  <label class="label">Type of business?</label>

                    <div class="input-group">
                      <input type="text" class="form-control" placeholder=" Type">
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="mdi mdi-check-circle-outline"></i>
                        </span>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                  <label class="label">RC Number</label>

                    <div class="input-group">
                      <input type="text" class="form-control" placeholder=" RC Number">
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="mdi mdi-check-circle-outline"></i>
                        </span>
                      </div>
                    </div>
                  </div>   

                  
                  <div class="form-group">
                  <label class="label">Office Address</label>

                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="  Address">
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="mdi mdi-check-circle-outline"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                  <label class="label">Business Email Address</label>

                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Email Address">
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="mdi mdi-check-circle-outline"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                  <label class="label">Phone Number</label>
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="  Phone Number">
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="mdi mdi-check-circle-outline"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                 <div class="form-group">
                  <label class="label">Business Website</label>

                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="  Website">
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="mdi mdi-check-circle-outline"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                      <div class="col-md-4">
                          <div class="form-group column">
                          
                          <label class="label">What's your Customer Base?</label>
                            <div class="col-sm-0">
                              <select class="form-control">
                                <option>0 &nbsp;   > 100</option>
                                <option>100 > 400</option>
                                <option>500 > 1M</option>
                              </select>
                            </div>
                          </div>
                          
                        </div>
                        
                        &nbsp;
                        &nbsp;
                        &nbsp;
                       
                        
                        
                        &nbsp;&nbsp;
                        &nbsp;&nbsp;
                        &nbsp;&nbsp;
                        &nbsp;&nbsp;
                        &nbsp;&nbsp;
                        &nbsp;&nbsp;
                        
                        &nbsp;
                        
                        <div class="col-md-4">
                                          <div class="form-group column">
                                          <label class="label">Annual-Turn <br>Over ?</label>
                            <div class="col-sm-0">
                            
                              <select class="form-control">
                                <option>100k > 500k</option>
                                <option>500k > 1M</option>
                                <option>1M > 5M</option>
                              </select>
                            </div>
                          </div>
                        </div>     
                        </div>
                        </div> 
                  
                  
                  
                    
                  <div class="form-group">
                 <a href = "/home">   <button class="btn btn-primary submit-btn btn-block">CONTINUE</button></a>
                  </div>
                  
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      <!-- page-body-wrapper ends -->
    </div>
    
  @endsection