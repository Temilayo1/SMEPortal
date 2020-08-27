

@extends ('layouts.main1')

@section ('content')
        
        
           <div class="main-panel">
          <div class="content-wrapper"> 
          <h4 class="card-title">Lists Of Experts</h4>
                    <div class="containerr">
  <div class="row">
    <div class="col-12">
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">S/N</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Profession</th>
            <th scope="col">Completed </th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Olaleke Ajoke</td>
            <td>Jokky@mail.com</td>
            <td>Doctor</td>
            <td>
               30            
            <td>
          <a href="/expertProfile"> <button type="button" class="btn btn-primary2"><i class="fa fa-eye"></i></button>
             
            <button type="button" class="btn btn-danger2"><i class="fa fa-trash"></i></button>
            </td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Sewa Marr</td>
            <td>marr@mail.com</td>
            <td>Grapher</td>
            <td>
               120            
            <td>
           <button type="button" class="btn btn-primary2"><i class="fa fa-eye"></i></button>
             
            <button type="button" class="btn btn-danger2"><i class="fa fa-trash"></i></button>
            </td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Sewa Marr</td>
            <td>marr@mail.com</td>
            <td>Grapher</td>
            <td>
               10            
            <td>
           <button type="button" class="btn btn-primary2"><i class="fa fa-eye"></i></button>
             
            <button type="button" class="btn btn-danger2"><i class="fa fa-trash"></i></button>
            </td>
          </tr>
          <tr>
            <th scope="row">4</th>
            <td>Mike Dave</td>
            <td>dave@mail.com</td>
            <td>Geolgist</td>
            <td>
               12            
            <td>
           <button type="button" class="btn btn-primary2"><i class="fa fa-eye"></i></button>
             
            <button type="button" class="btn btn-danger2"><i class="fa fa-trash"></i></button>
            </td>
          </tr>
        </tbody>
      </table>
      
    </div>
   
  </div>
  
   <br>
   <br>
   <a href= "/new_request"> <button type="submit" class="btn btn-success mr-2">Add New </button>
   
</div>
@endsection