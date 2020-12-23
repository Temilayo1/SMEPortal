@extends ('layouts.main')

@section ('content')
        
            <div class="main-panel">
          <div class="content-wrapper">
                  <div class="card-body">
                  
                  
                  
                    <h1 class="card-title">Rate Our Service</h1>
                    
                    <p class="card-description">Please complete your details below</p>
                    <form class="forms-sample">
                
                     

                      <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="InputName" placeholder="Loan Repayment" disabled>
                      </div>

                       

                       <div class="form-group">
                        <label for="description">Description</label>
                        <input type="text" class="form-control" id="exampleInputCity1" placeholder="" >
                      </div>
                      
                      <div class="col-md-3">
                          <div class="form-group column">
                          
                            <label class="col-sm-1 col-form-label">Category</label>
                            <div class="col-sm-0">
                              <select class="form-control">
                                <option>NOT SATISFIED</option>
                                <option>SATISFIED</option>
                                <option>HIGHLY SATISFIED</option>
                              </select>
                            </div>
                          </div>
                          
                        </div> 
                         </div>   
                      <div class="form-group">
                        <label for="details">Details</label>
                        <textarea class="form-control" id="article-ckeditor" rows="4"></textarea>
                      </div>

                            

                        <div class="form-group row">
                      

                        
                          
                        </div>
                        </div>
                        

                        


                    
                <br>
                
                      <button type="submit" class="btn btn-success mr-2">submit</button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
              
@endsection