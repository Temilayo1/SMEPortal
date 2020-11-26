@extends ('layouts.main1')

@section ('content')
        
            <div class="main-panel">
          <div class="content-wrapper">
                  <div class="card-body">
                  
                  
                  
                    <h1 class="card-title">New Event</h1>
                    
                    <form class="forms-sample">
                
                     

                      <div class="form-group">
                        <label for="title">Subscription Name</label>
                        <input type="text" class="form-control" id="InputName" placeholder="Title">
                      </div>

                       

                       <div class="form-group">
                        <label for="description">Duration</label>
                        <input type="text" class="form-control" id="exampleInputCity1" placeholder="Description">
                      </div>
                      
                        

                      <div class="form-group">
                        <label for="description">Default Rate</label>
                        <input type="text" class="form-control" id="exampleInputCity1" placeholder="Description">
                      </div>

                            

                        <div class="form-group row">
                      
                        
                        
                        
                        

                        
                          
                        </div>
                        </div>
                        

                        


                    
                <br>
                
                      <button type="submit" class="btn btn-success mr-2">SAVE</button>
                      <button class="btn btn-light">CANCEL</button>
                    </form>
                  </div>
                </div>
              </div>
              
@endsection