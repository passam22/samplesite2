<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">   
    <title>Customers</title>
	<link href="{{ asset('/assets/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="{{ asset('/assets/sidebars.css') }}" rel="stylesheet">
  </head>
  <body>
    
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">  
    <title>Customers</title>    
</svg>

<main>  

    

  <div class="p-3 text-white bg-dark col-sm-3" style="height: 100vh" >
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
      <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
      <span class="fs-4">ABC Company</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        @foreach($municipalities as $item)
            <li>
                <a href="{{ url('view_list/'.$item->municipality) }}" class="nav-link text-white">                
                    {{ $item->municipality }}
                </a>
            </li>
        @endforeach

    </ul>
    <hr>    
  </div>

 
  
  <div class="col-sm-9 p-4" style="">
    @yield('content')
   
  </div>

</main>


    <script src="{{ asset('/assets/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="/assets/sidebars.js"></script>

    <script>
        @if(Session::has('success_message'))           
            toastr.success("{{ Session::get('success_message') }}")           
        @endif    
       
    </script>
</body>
</html>
