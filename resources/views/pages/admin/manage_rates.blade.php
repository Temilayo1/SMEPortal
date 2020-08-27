

@extends ('layouts.main')

@section ('content')
        
        
           <div class="main-panel">
          <div class="content-wrapper"> 
          <h4 class="card-title">Active Subscriptions</h4>
                    <div class="containerr">
  <div class="row">
    <div class="col-12">
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">S/N</th>
            <th scope="col">Sub Name</th>
            <th scope="col">Duration</th>
            <th scope="col">Rate</th>
            
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Static</td>
            <td>6 Months</td>
            <td>2,846</td>
            <td>
           <button type="button" class="btn btn-primary2"><i class="fa fa-eye"></i></button>
             <a href ="/new_request">    <button type="button" class="btn btn-success"><i class="fa fa-edit"></i></button></a>
            <button type="button" class="btn btn-danger2"><i class="fa fa-trash"></i></button>
            </td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Dynamic</td>
            <td>12 Months </td>
            <td>3,417</td>
            <td>
              <button type="button" class="btn btn-primary2"><i class="fa fa-eye"></i></button>
            <a href ="/new_request">   <button type="button" class="btn btn-success"><i class="fa fa-edit"></i></button>
            <button type="button" class="btn btn-danger2"><i class="fa fa-trash"></i></button>
            </td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Platinum</td>
            <td>18 Months</td>
            <td>1,234</td>
            <td>
              <button type="button" class="btn btn-primary2"><i class="fa fa-eye"></i></button>
             <a href ="/new_request">  <button type="button" class="btn btn-success"><i class="fa fa-edit"></i></button>
            <button type="button" class="btn btn-danger2"><i class="fa fa-trash"></i></button>
            </td>
          </tr>
          <tr>
            <th scope="row">4</th>
            <td>Gold</td>
            <td>24 Months</td>
            <td>3,417</td>
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
   <a href= "#"> <button type="submit" class="btn btn-success mr-2">Add New </button>
   
</div>
@endsection