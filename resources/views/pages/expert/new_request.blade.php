@extends ('layouts.main')

@section ('content')
        
            <div class="main-panel">
          <div class="content-wrapper">
                  <div class="card-body">
                  
                  
                  
                    <h1 class="card-title">New Request</h1>
                    <p class="card-description"> Please fill the form for a new request</p>
                    <form class="forms-sample">
                
                     

                      <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="InputName" placeholder="Title">
                      </div>

                       

                       <div class="form-group">
                        <label for="description">Description</label>
                        <input type="text" class="form-control" id="exampleInputCity1" placeholder="Description">
                      </div>
                      
                        

                      <div class="form-group">
                        <label for="details">Details</label>
                        <textarea class="form-control" id="article-ckeditor" rows="4"></textarea>
                      </div>

                            

                        <div class="form-group row">
                      <div class="col-md-2">
                          <div class="form-group column">
                          
                            <label class="col-sm-1 col-form-label">Category</label>
                            <div class="col-sm-0">
                              <select class="form-control">
                                <option>FINANCIAL</option>
                                <option>ADMINSTRATIVE</option>
                                <option>EMPLOYEE</option>
                              </select>
                            </div>
                          </div>
                          
                        </div>
                        
                        &nbsp;
                        &nbsp;
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
                        
                        <div class="col-md-2">
                                          <div class="form-group column">
                            <label class="col-sm-2 col-form-label">Priority</label>
                            <div class="col-sm-0">
                              <select class="form-control">
                                <option>HIGH</option>
                                <option>MEDIUM</option>
                                <option>LOW</option>
                              </select>
                            </div>
                          </div>
                        </div>
                        &nbsp;
                        
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        
                        
                        <div class="col-md-2">
                                          <div class="form-group column">
                            <label class="col-sm-1 col-form-label">Amount</label>
                              <div class="col-sm-0">
                                <input type="text" placeholder="Amount">
                            </div>
                          </div>
                        </div>

                        
                          
                        </div>
                        </div>
                        

                        


                    
                <br>
                
                      <button type="submit" class="btn btn-success mr-2">Submit</button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
              
@endsection