<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <div class="container">
        <a href="" class="navbar-brand">
         
          <span class="brand-text font-weight-light"></span>
        </a>

        <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse order-3" id="navbarCollapse">

     <!-- Left navbar links -->
     <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item">
                    {{-- <a href="{{url('home')}}" class="nav-link"> <i class="fas fa-home" style='font-size:20px;color:rgb(253, 77, 7)'></i></a> --}}
            </li>
           
            <li class="nav-item">          
                {{-- <a href="" class="nav-link"> <i class="fas fa-hospital-symbol" style='font-size:20px;color:rgb(253, 77, 7)'></i></a> --}}
               
            </li>
                   
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
             

      @guest
            <li class="nav-item">
              
                <a class="btn btn-sm btn-success shadow-lg" href="{{url('/')}}" ><i class="fas fa-upload fa-sm text-white-80" style="font-size:15px "></i>&nbsp;&nbsp;  นำเข้ารายชื่อเจ้าหน้าที่  </a> &nbsp;&nbsp;
            </li>
    
            <li class="nav-item">
                <a class="btn btn-sm btn-info shadow-lg" href="{{url('supplies')}}" ><i class="fas fa-upload fa-sm text-white-80" style="font-size:15px "></i>&nbsp;&nbsp;  นำเข้าข้อมูลคุรุภัณฑ์  </a>
            </li>
     
  @else
      <li class="nav-item dropdown">
          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              {{ Auth::user()->name }} <span class="caret"></span>
          </a>

          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
          </div>
      </li>
  @endguest

    </ul>
  </nav>
  <!-- /.navbar -->
