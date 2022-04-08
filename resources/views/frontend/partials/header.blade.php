<header>
    <div class="collapse bg-dark" id="navbarHeader">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-md-7 py-4">
            <h4 class="text-white">About</h4>
            <p class="text-muted">Add some information about the album below, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.</p>
          </div>
          <div class="col-sm-4 offset-md-1 py-4">
            <h4 class="text-white">Contact</h4>
            <ul class="list-unstyled">
              <li><a href="#" class="text-white">Follow on Twitter</a></li>
              <li><a href="#" class="text-white">Like on Facebook</a></li>
              <li><a href="#" class="text-white">Email me</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="navbar navbar-dark bg-dark shadow-sm">
      <div class="container">
        <a href="{{ route('website') }}" class="navbar-brand d-flex align-items-center">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2" viewBox="0 0 24 24"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/></svg>
            <strong>Online House Rental</strong>
        </a>



        <a href="{{ route('houseinfo.list') }}"class="btn btn-primary mr-2">For Tolet</a>

        {{-- <a href="{{route('house')  }}">Add_Houseownerinfo</a>
        <a href="{{route('tenant')  }}">Add_tenantinfo</a> --}}

           @auth()
           <li>
            <a href="#" style="position:relative; padding-left:50px;margin-right:20px"class="btn btn-primary mr-2">
                <img src="/uploads/user/{{ Auth::user()->image }}" style="width:32px; height:32px; position:absolute;left:10px; border-radius:50%">
                {{ Auth::user()->name }} <span class="Caret"></span>

            </a>

            <a href="{{route('logout')}}"class="btn btn-primary mr-2">logout</a>

            {{-- <ul class="dropdown-menu" role="menu">
                <li><a href="{{'#'}}"><i class="fa fa-btn fa-user"></i>Profile</a></li>
                <li><a href="{{ route('logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
            </ul> --}}
        </li>
           {{-- <li class="dropdown">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
            <span style="color:White">{{auth()->user()->name}}</span>
            <a>
           {{-- <img src="url('/uploads/user/')" >{{auth()->user()->image}} alt="abc"> --}}


             {{-- <ul classs="dropdown-menu" role="menu">
            <li style="display:inline"><a href="#"><i class="fa fa-btn fa-user"></i> profile image</a></li>
           <li style="display:inline"><a href="{{ route('logout') }}"><i class="fa fa-btn fa-sign-out"></i> logout</a></li>
             </ul>
             </li> --}} --}}

           @else

        <a href="{{route('login.form')}}"class="btn btn-primary mr-2">login</a>

        <a href="{{route('registration.form')}}"class="btn btn-primary mr-2">Registration</a>

        @endauth
         <div class="row">
             <div class="col-md-4"></div>
             <div class="col-md-4"></div>


           <form action="{{ route('houseinfo.search') }}" method="post">
            @csrf
        <input name="search" type="text" pleacholder="search" class="form-control">
        <div class="col-md-4">
        <button type="submit"class="btn btn-primary"> Search</button>
        </form>
        </div>





      </div>

      </div>
    </div>

  </header>
