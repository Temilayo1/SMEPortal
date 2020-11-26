@extends ('layouts.nofooter')

@section ('content')


           <div class="main-panel">
          <div class="content-wrapper"> 
          <h4 class="card-title">Expert Profiles</h4>
                    <nav class="expert-filter">

  

  <div class="sort">

    <div class="collection-sort">
      <label>Filter by:</label>
      <select>
        <option value="/">Profession</option>
        <option value="/">Experience</option>
        <option value="/">Qualification</option>
      </select>
      
    </div>
   &nbsp;
   &nbsp;
    <div class="collection-sort">
      <label>Sort by:</label>
      <select>
        <option value="/">Id</option>
        <option value="/">Area</option>
        <option value="/">Name</option>
      </select>
    </div>

  </div>

</nav>
<br>
<br>
<div class="main-panell">
          <div class="content-wrapper">
          <div style="display: flex">
<div class="cardd">
  
  <h4>John Oye</h4>
  <p class="titlee">CEO & Founder, Example</p>
  <p>Harvard University</p>
 
  <p><a href = "/profile"><button>Check Profile</button></a></p>
</div>
&nbsp;&nbsp;
<div class="cardd">
  
  <h4>Segun Olabode</h4>
  <p class="titlee">CEO & Founder, Egzample</p>
  <p>Harvard </p>
 
  <p><a href = "/profile"><button>Check Profile</button></a></p>
</div>
&nbsp;&nbsp;
<div class="cardd">
  
  <h4>Kunmi Ade</h4>
  <p class="titlee">CEO & Founder, Example</p>
  <p>Harvard University</p>
 
  <p><a href = "/profile"><button>Check Profile</button></a></p>
</div>
&nbsp;&nbsp;
<div class="cardd">
  
  <h4>Gbenga Olabode</h4>
  <p class="titlee"> Founder, Example</p>
  <p> University</p>
 
  <p><a href = "/profile"><button>Check Profile</button></a></p>
</div>
&nbsp;&nbsp;
<div class="cardd">
  
  <h4>Wunmi Segun</h4>
  <p class="titlee">CEO & Founder, Example</p>
  <p>Harvard University</p>
 
  <p><a href = "/profile"><button>Check Profile</button></a></p>
</div>
&nbsp;&nbsp;

    </div>
    </div>
    </div>
    <div class="main-panell">
          <div class="content-wrapper">
          <div style="display: flex">
<div class="cardd">
  
  <h4>Kim Modupe</h4>
  <p class="titlee">CEO & Founder, Example</p>
  <p>Harvard University</p>
 
  <p><a href = "/profile"><button>Check Profile</button></a></p>
</div>
&nbsp;&nbsp;
<div class="cardd">
  
  <h4>Yinka Dennis</h4>
  <p class="titlee">CEO & Founder, Example</p>
  <p>Harvard University</p>
 
  <p><a href = "/profile"><button>Check Profile</button></a></p>
</div>
&nbsp;&nbsp;
<div class="cardd">
  
  <h4>Rachel Oje</h4>
  <p class="titlee">CEO & Founder, Example</p>
  <p>Harvard University</p>
 
  <p><a href = "/profile"><button>Check Profile</button></a></p>
</div>
&nbsp;&nbsp;
<div class="cardd">
  
  <h4>Ade Boye</h4>
  <p class="titlee">CEO & Founder, Example</p>
  <p>Harvard University</p>
 
  <p><a href = "/profile"><button>Check Profile</button></a></p>
</div>
&nbsp;&nbsp;
<div class="cardd">
  
  <h4>Boye Don</h4>
  <p class="titlee">CEO & Founder, Example</p>
  <p>Harvard University</p>
 
  <p><a href = "/profile"><button>Check Profile</button></a></p>
</div>
&nbsp;&nbsp;
</div>
</div>
</div>
<div class="main-panell">
          <div class="content-wrapper">
          <div style="display: flex">
<div class="cardd">
  
 
              </div>    
              </div>
                        
      <br>
<div class="pagination">
  {{-- <a href="#">&laquo;</a> --}}
  
  <a class="active" href="#">1</a>
  <a href="#">2</a>
  <a href="#">3</a>
  {{-- <a href="#">4</a>
  <a href="#">5</a>
  <a href="#">6</a> --}}
  {{-- <a href="#">&raquo;</a> --}}
</div>
@endsection








