

@extends ('layouts.main')

@section ('content')
        
        
           <div class="main-panel">
          <div class="content-wrapper"> 
          <h4 class="card-title">My Requests</h4>
                    <div class="containerr">
  <div class="row">
    <div class="col-12">
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">S/N</th>
            <th scope="col">Details</th>
            <th scope="col">Subject</th>
            <th scope="col">Views</th>
            <th scope="col">Stautus</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Who is this?</td>
            <td>Bugging</td>
            <td>2,846</td>
            <td>
                            <label class="badge badge-danger">Pending</label>
                          </td>
            <td>
           <button type="button" class="btn btn-primary2"><i class="fa fa-eye"></i></button>
             <a href ="/new_request">    <button type="button" class="btn btn-success"><i class="fa fa-edit"></i></button></a>
            <button type="button" class="btn btn-danger2"><i class="fa fa-trash"></i></button>
            </td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Review needed on my latest building project</td>
            <td>Review </td>
            <td>3,417</td>
            <td>
                            <label class="badge badge-warning">In progress</label>
                          </td>
            <td>
              <button type="button" class="btn btn-primary2"><i class="fa fa-eye"></i></button>
            <a href ="/new_request">   <button type="button" class="btn btn-success"><i class="fa fa-edit"></i></button>
            <button type="button" class="btn btn-danger2"><i class="fa fa-trash"></i></button>
            </td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Need a police report for a car crash</td>
            <td>Suggestions</td>
            <td>1,234</td>
            <td>
                            <label class="badge badge-info">Fixed</label>
                          </td>
            <td>
              <button type="button" class="btn btn-primary2"><i class="fa fa-eye"></i></button>
             <a href ="/new_request">  <button type="button" class="btn btn-success"><i class="fa fa-edit"></i></button>
            <button type="button" class="btn btn-danger2"><i class="fa fa-trash"></i></button>
            </td>
          </tr>
          <tr>
            <th scope="row">4</th>
            <td>Business Loan needed</td>
            <td>Loan</td>
            <td>3,417</td>
            <td>
                            <label class="badge badge-success">Completed</label>
                          </td>
            <td>
              <button type="button" class="btn btn-primary2"><i class="fa fa-eye"></i></button>
            <a href ="/new_request">   <button type="button" class="btn btn-success"><i class="fa fa-edit"></i></button>
            <button type="button" class="btn btn-danger2"><i class="fa fa-trash"></i></button>
            </td>
          </tr>
        </tbody>
      </table>
      
    </div>
   
  </div>
  
   <br>
   <br>
   <a href= "/new_request"> <button type="submit" class="btn btn-success mr-2">New Request</button>
   
</div>
@endsection