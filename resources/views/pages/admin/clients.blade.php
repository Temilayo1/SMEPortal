

@extends ('layouts.main1')

@section ('content')
        
        
           <div class="main-panel">
          <div class="content-wrapper"> 
          <h4 class="card-title"> List Of Clients</h4>
                    <div class="containerr">
  <div class="row">
    <div class="col-12">
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">S/N</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Requests</th>
            
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Olaoluwa John</td>
            <td>home@gmail.com</td>
            <td>28</td>
            
            <td>
           <button type="button" class="btn btn-primary2"><i class="fa fa-eye"></i></button>
             <a href ="/new_request">    <button type="button" class="btn btn-success"><i class="fa fa-edit"></i></button></a>
            <button type="button" class="btn btn-danger2"><i class="fa fa-trash"></i></button>
            </td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Modupe Naomi</td>
            <td>naom@gmail.com </td>
            <td>31</td>
            
            <td>
              <button type="button" class="btn btn-primary2"><i class="fa fa-eye"></i></button>
            <a href ="/new_request">   <button type="button" class="btn btn-success"><i class="fa fa-edit"></i></button>
            <button type="button" class="btn btn-danger2"><i class="fa fa-trash"></i></button>
            </td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Edwood Mike</td>
            <td>kike@gmal.com</td>
            <td>10</td>
            <td>
              <button type="button" class="btn btn-primary2"><i class="fa fa-eye"></i></button>
             <a href ="/new_request">  <button type="button" class="btn btn-success"><i class="fa fa-edit"></i></button>
            <button type="button" class="btn btn-danger2"><i class="fa fa-trash"></i></button>
            </td>
          </tr>
          <tr>
            <th scope="row">4</th>
            <td>Victor Oshimen</td>
            <td>men@mail.com</td>
            <td>30</td>
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
   
   
</div>
@endsection