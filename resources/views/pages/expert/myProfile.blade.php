@extends ('layouts.main2')

@section ('content')
        
            <div class="main-panel">
          <div class="content-wrapper">
                  
                  

<div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog" alt=""/>
                            {{-- <div class="file btn btn-lg btn-primary">
                                Change Photo
                                <input type="file" name="file"/>
                            </div> --}}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>
                                        John Oye
                                    </h5>
                                    <h6>
                                        Physician Biologist
                                    </h6>
                                    <p class="proile-rating">RANKINGS : <span>9/10</span></p>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-3">
                                              <li>  <label>Expert Id</label></li>
                                            </div>
                                            <div class="col-md-3">
                                                <p>OyJn123</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                            <li>    <label>Name</label></li>
                                            </div>
                                            <div class="col-md-3">
                                                <p>John Oye</p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-3">
                                              <li>  <label>Profession</label></li>
                                            </div>
                                            <div class="col-md-3">
                                                <p>Physician Biologist</p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-3">
                                              <li>  <label>Experience</label></li>
                                            </div>
                                            <div class="col-md-3">
                                                <p>5 years</p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-3">
                                              <li>  <label>Level</label></li>
                                            </div>
                                            <div class="col-md-3">
                                                <p>Expert</p>
                                            </div>
                                        </div>


                                        
                                        
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <li><label>Email</label></li>
                                            </div>
                                            <div class="col-md-3">
                                                <p>OyeJohn@gmail.com</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                              <li>  <label>Phone</label></li>
                                            </div>
                                            <div class="col-md-3">
                                                <p>123 456 7890</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                               <li> <label>Website</label></li>
                                            </div>
                                            <div class="col-md-3">
                                                <a href="#" ><p>OyeJohn.com.ng</p></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                              <li>  <label>Total Projects</label></li>
                                            </div>
                                            <div class="col-md-3">
                                                <p>230</p>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-md-3">
                                               <li> <label>Availability</label></li>
                                            </div>
                                            <div class="col-md-3">
                                                <p>6 months</p>
                                            </div>
                                        </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </form>           
        </div>
@endsection