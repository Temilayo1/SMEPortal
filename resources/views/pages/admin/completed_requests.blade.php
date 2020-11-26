

@extends ('layouts.main1')

@section ('content')
        
        
           <div class="main-panel">
          <div class="content-wrapper"> 
          <h4 class="card-title">Lists OF Completed Requests</h4>
                    <div class="containerr">
  <div class="row">
    <div class="col-12">
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Subject</th>
            <th scope="col">Views</th>
            <th scope="col">Stautus</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>John Snow</td>
            <td>snow@gmail.com</td>
            <td>Loan Request</td>
            <td>2</td>
            <td>
                            <label class="badge badge-success">Completed</label>
                          </td>
            <td>
           <a href ="/expert/view"><button type="button" class="btn btn-primary2"><i class="fa fa-eye"></i></button>
             
            <button type="button" class="btn btn-danger2"><i class="fa fa-trash"></i></button>
            </td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Faith kajola</td>
            <td>kjmill@gmail </td>
            <td>Buisness Advise</td>
            <td>6</td>
            <td>
                            <label class="badge badge-success">Completed</label>
                          </td>
            <td>
              <a href ="/expert/view"><button type="button" class="btn btn-primary2"><i class="fa fa-eye"></i></button>
            
            <button type="button" class="btn btn-danger2"><i class="fa fa-trash"></i></button>
            </td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Ola Fernadez</td>
            <td>fdnrzzz@gmail.com</td>
            <td>Loan Request</td>
            <td>4</td>
            <td>
                            <label class="badge badge-success">Completed</label>
                          </td>
            <td>
              <a href ="/expert/view"><button type="button" class="btn btn-primary2"><i class="fa fa-eye"></i></button>
             
            <button type="button" class="btn btn-danger2"><i class="fa fa-trash"></i></button>
            </td>
          </tr>
          <tr>
            <th scope="row">4</th>
            <td>Bailly josh</td>
            <td>Jshbailly@gmail.com</td>
            <td>Loan Request</td>
            <td>3</td>
            <td>
                            <label class="badge badge-success">Completed</label>
                          </td>
            <td>
              <a href ="/expert/view"><button type="button" class="btn btn-primary2"><i class="fa fa-eye"></i></button>
            
            <button type="button" class="btn btn-danger2"><i class="fa fa-trash"></i></button>
            </td>
          </tr>
        </tbody>
      </table>
      
    </div>
   
  </div>
  
   <br>
   <br>
   
   
</div>
@endsection