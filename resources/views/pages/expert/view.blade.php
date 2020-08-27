@extends ('layouts.main2')

@section ('content')
        
            <div class="main-panel">
          <div class="content-wrapper">
                  <div class="card-body">
                  
                  
                  
                    <h1 class="card-title"></h1>
                    <p class="card-description"></p>
                    <form class="forms-sample">
                
                     

                      <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="InputName" placeholder="Loan Repayment" disabled>
                      </div>

                       

                       <div class="form-group">
                        <label for="description">Description</label>
                        <input type="text" class="form-control" id="exampleInputCity1" placeholder="How to repay loan" disabled>
                      </div>
                      
                        

                      <div class="form-group">
                        <label for="details">Details</label>
                        <textarea class="form-control" id="article-ckeditor" rows="4" disabled></textarea>
                      </div>

                            

                        <div class="form-group row">
                      

                        
                          
                        </div>
                        </div>
                        

                        


                    
    
                    </form>
                  </div>
                </div>
              </div>
              
@endsection