<!doctype html>
  <html class="no-js" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <base href="{{url('/')}}"/>
        <title>{{ $title }} | {{$set->site_name}}</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
        <meta name="robots" content="index, follow">
        <meta name="apple-mobile-web-app-title" content="{{$set->site_name}}"/>
        <meta name="application-name" content="{{$set->site_name}}"/>
        <meta name="msapplication-TileColor" content="#ffffff"/>
        <meta name="description" content="{{$set->site_desc}}" />
        <link rel="shortcut icon" href="{{url('/')}}/asset/{{$logo->image_link2}}" />
        <link rel="stylesheet" href="{{url('/')}}/asset/dashboard/vendor/nucleo/css/nucleo.css" type="text/css">
        <link rel="stylesheet" href="{{url('/')}}/asset/dashboard/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
        <link rel="stylesheet" href="{{url('/')}}/asset/dashboard/vendor/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="{{url('/')}}/asset/dashboard/vendor/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">
        <link rel="stylesheet" href="{{url('/')}}/asset/dashboard/vendor/datatables.net-select-bs4/css/select.bootstrap4.min.css">
        <link rel="stylesheet" href="{{url('/')}}/asset/dashboard/css/argon.css?v=1.1.0" type="text/css">
        <link rel="stylesheet" href="{{url('/')}}/asset/css/toast.css" type="text/css">
        <link href="{{url('/')}}/asset/fonts/fontawesome/styles.min.css" rel="stylesheet" type="text/css">
        <link href="{{url('/')}}/asset/fonts/fontawesome/css/all.css" rel="stylesheet" type="text/css">
         @yield('css')
         @include('partials.font')
    </head>
  <body>
    <nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-dark {{$set->default_color}}" id="sidenav-main">
      <div class="scrollbar-inner">
        <div class="sidenav-header d-flex align-items-center mt-3">
          <a class="navbar-brand" href="{{url('/')}}">
            <img src="{{url('/')}}/asset/{{$logo->image_link}}" class="navbar-brand-img" alt="...">
          </a>
          <div class="ml-auto">
            <!-- Sidenav toggler -->
            <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
              <div class="sidenav-toggler-inner">
                <i class="sidenav-toggler-line bg-white"></i>
                <i class="sidenav-toggler-line bg-white"></i>
                <i class="sidenav-toggler-line bg-white"></i>
              </div>
            </div>
          </div>
        </div>
        <div class="navbar-inner">
          <div class="collapse navbar-collapse" id="sidenav-collapse-main">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link @if(route('user.dashboard')==url()->current()) active @endif" href="{{route('user.dashboard')}}">
                  <i class="fal fa-house-user"></i>
                  <span class="nav-link-text">{{__('Overview')}}</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link @if(route('user.withdraw')==url()->current()) active @endif" href="{{route('user.withdraw')}}">
                  <i class="fal fa-calendar"></i>
                  <span class="nav-link-text">{{__('Payouts')}}</span>
                </a>
              </li>
              @if($set->s_inv==1)
              <li class="nav-item">
                <a class="nav-link @if(route('user.plans')==url()->current() || route('user.trades')==url()->current()) active @endif" href="#standard" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="standard">
                  <i class="fal fa-spa"></i>
                  <span class="nav-link-text">{{__('Standard Investment')}}</span>
                </a>
                <div class="collapse @if(route('user.plans')==url()->current() || route('user.trades')==url()->current()) show @endif" id="standard">
                  <ul class="nav nav-sm flex-column">
                    <li class="nav-item @if(route('user.plans')==url()->current()) active @endif text-default">
                      <a class="nav-link" href="{{route('user.plans')}}">
                        {{__('All Plans')}}
                      </a>
                    </li>
                    <li class="nav-item @if(route('user.trades')==url()->current()) active @endif text-default">
                      <a class="nav-link" href="{{route('user.trades')}}">
                        {{__('Activity')}}
                      </a>
                    </li>                             
                  </ul>
                </div>
              </li> 
              @endif
              @if($set->p_inv==1)
              <li class="nav-item">
                <a class="nav-link @if(route('user.sandplans')==url()->current() || route('user.sandfollowed')==url()->current() || route('user.sandtrades')==url()->current()) active @endif" href="#navbar-examples2" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-examples2">
                  <i class="fal fa-globe"></i>
                  <span class="nav-link-text">{{__('Project Investment')}}</span>
                </a>
                <div class="collapse @if(route('user.sandplans')==url()->current() || route('user.sandfollowed')==url()->current() || route('user.sandtrades')==url()->current()) show @endif" id="navbar-examples2">
                  <ul class="nav nav-sm flex-column">
                    <li class="nav-item @if(route('user.sandplans')==url()->current() || route('user.sandfollowed')==url()->current() ) active @endif">
                      <a href="{{route('user.sandplans')}}" class="nav-link">{{__('All Plans')}}</a>
                    </li>                    
                    <li class="nav-item @if(route('user.sandtrades')==url()->current()) active @endif">
                      <a href="{{route('user.sandtrades')}}" class="nav-link">{{__('Activity')}}</a>
                    </li>                                                                
                  </ul>
                </div>
              </li> 
              @endif
              @if($set->savings==1)
              <li class="nav-item">
                <a class="nav-link @if(route('user.savings')==url()->current()) active @endif" href="{{route('user.savings')}}">
                  <i class="fal fa-piggy-bank"></i>
                  <span class="nav-link-text">{{__('Save & Earn')}}</span>
                </a>
              </li>    
              @endif  
              @if($set->transfer==1)   
              <li class="nav-item">
                <a class="nav-link @if(route('user.ownbank')==url()->current()) active @endif" href="{{route('user.ownbank')}}">
                  <i class="fal fa-random"></i>
                  <span class="nav-link-text">{{__('Transfer Money')}}</span>
                </a>
              </li> 
              @endif                              
              <li class="nav-item">
                <a class="nav-link @if(route('user.ticket')==url()->current()) active @endif" href="{{route('user.ticket')}}">
                  <i class="fal fa-user-headset"></i>
                  <span class="nav-link-text">{{__('Disputes')}}</span>
                </a>
              </li>              
              @if($set->referral==1)
              <li class="nav-item">
                <a class="nav-link @if(route('user.referral')==url()->current()) active @endif" href="{{route('user.referral')}}">
                  <i class="fal fa-share"></i>
                  <span class="nav-link-text">{{__('Affiliate System')}}</span>
                </a>
              </li> 
              @endif   
              <li class="nav-item">
                <a class="nav-link" href="#set" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="set">
                  <i class="fal fa-cog"></i>
                  <span class="nav-link-text">{{__('Settings')}}</span>
                </a>
                <div class="collapse" id="set">
                  <ul class="nav nav-sm flex-column">
                    <li class="nav-item text-default">
                      <a class="nav-link" href="{{route('user.profile')}}">
                        {{__('Profile')}}
                      </a>
                    </li>             
                    <li class="nav-item text-default">
                      <a class="nav-link" href="{{route('user.audit')}}">
                        {{__('Audit Logs')}}
                      </a>
                    </li>                  
                    <li class="nav-item text-default">
                      <a class="nav-link" href="{{route('user.password')}}">
                        {{__('Password & Devices')}}
                      </a>
                    </li>                   
                    <li class="nav-item text-default">
                      <a class="nav-link" href="{{route('user.2fa')}}">
                        {{__('2FA Security')}}
                      </a>
                    </li>                  
                    <li class="nav-item text-default">
                      <a class="nav-link" href="{{route('user.kyc')}}">
                        {{__('Know Your Customer')}}
                      </a>
                    </li>                             
                  </ul>
                </div>
              </li>  
              <li class="nav-item">
                <a class="nav-link" href="{{route('user.logout')}}">
                  <i class="fal fa-sign-out"></i>
                  <span class="nav-link-text">{{__('Sign out')}}</span>
                </a>
              </li>     
            </ul>
          </div>
        </div>
        <div class="sidenav-header align-items-center">
          <div class="navbar-brand">
            <!-- Sidenav toggler -->
            <div class="card">
              <div class="card-body py-2">
                <div class="row align-items-center">
                  <div class="col-12">
                    <span class="text-sm text-dark">{{__('Merchant ID')}}: {{$user->merchant_id}} <span class="input-group-text btn-icon-clipboard text-xs" data-clipboard-text="{{$user->merchant_id}}" title="Copy to clipboard"><i class="fal fa-copy"></i></span></span>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </nav>
    <div class="main-content" id="panel">
      <nav class="navbar navbar-top navbar-expand navbar-light">
        <div class="container-fluid">
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav align-items-center ml-md-auto">
              <li class="nav-item d-xl-none">
                <div class="pr-3 sidenav-toggler sidenav-toggler-light" data-action="sidenav-pin" data-target="#sidenav-main">
                  <div class="sidenav-toggler-inner">
                    <i class="sidenav-toggler-line"></i>
                    <i class="sidenav-toggler-line"></i>
                    <i class="sidenav-toggler-line"></i>
                  </div>
                </div>
              </li>
            </ul>
            @if($set->language==1)
            <ul class="navbar-nav align-items-center">
              <li class="nav-item dropdown">
              @php $locale = session()->get('locale');
              if($locale==null){
                $locale="en";
              } 
              $dd=App\Models\Language::wherecode($locale)->first();
              @endphp
                <a class="nav-link"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <div class="media align-items-center">
                    <div class="media-body d-lg-block">
                      <span class="mb-0 text-sm"><img class="dropdown-item-icon" src="{{url('/')}}/asset/images/flags/{{$dd->code}}.svg" alt="{{$dd->name}} Flag">{{$dd->name}}</span>
                    </div>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                  @foreach($lang as $val)
                    <a href="{{url('/')}}/lang/{{$val->code}}" class="dropdown-item">
                      <span  class="mb-0 text-sm"><img class="dropdown-item-icon" src="{{url('/')}}/asset/images/flags/{{$val->code}}.svg" alt="{{$val->name}} Flag">{{$val->name}}</span>
                    </a>
                  @endforeach
                </div>
              </li>
            </ul>
            @endif
            <ul class="navbar-nav align-items-center ml-auto ml-md-0">
              <li class="nav-item">
                <a href="{{route('user.logout')}}" class="nav-link pr-0">
                  <i class="fal fa-sign-out text-danger"></i>
                </a>
              </li>   
            </ul>
          </div>
        </div>
      </nav>
      <div class="header pb-6">
        <div class="container-fluid">
        </div>
      </div>
        @yield('content')
      </div>
    </div>
    {!!$set->livechat!!}
    <script>
      "use strict";
      var urx='{{$currency->name}}';
    </script>
    <script src="{{url('/')}}/asset/dashboard/vendor/jquery/dist/jquery.min.js"></script>
    <script src="{{url('/')}}/asset/dashboard/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{url('/')}}/asset/dashboard/vendor/js-cookie/js.cookie.js"></script>
    <script src="{{url('/')}}/asset/dashboard/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
    <script src="{{url('/')}}/asset/dashboard/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
    <script src="{{url('/')}}/asset/dashboard/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{url('/')}}/asset/dashboard/vendor/chart.js/dist/Chart.extension.js"></script>
    <script src="{{url('/')}}/asset/dashboard/vendor/jvectormap-next/jquery-jvectormap.min.js"></script>
    <script src="{{url('/')}}/asset/dashboard/js/vendor/jvectormap/jquery-jvectormap-world-mill.js"></script>
    <script src="{{url('/')}}/asset/dashboard/vendor/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="{{url('/')}}/asset/dashboard/vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{url('/')}}/asset/dashboard/vendor/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="{{url('/')}}/asset/dashboard/vendor/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="{{url('/')}}/asset/dashboard/vendor/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="{{url('/')}}/asset/dashboard/vendor/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="{{url('/')}}/asset/dashboard/vendor/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="{{url('/')}}/asset/dashboard/vendor/datatables.net-select/js/dataTables.select.min.js"></script>
    <script src="{{url('/')}}/asset/dashboard/vendor/clipboard/dist/clipboard.min.js"></script>
    <script src="{{url('/')}}/asset/dashboard/vendor/select2/dist/js/select2.min.js"></script>
    <script src="{{url('/')}}/asset/dashboard/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <script src="{{url('/')}}/asset/dashboard/vendor/nouislider/distribute/nouislider.min.js"></script>
    <script src="{{url('/')}}/asset/dashboard/vendor/quill/dist/quill.min.js"></script>
    <script src="{{url('/')}}/asset/dashboard/vendor/dropzone/dist/min/dropzone.min.js"></script>
    <script src="{{url('/')}}/asset/dashboard/vendor/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
    <script src="{{url('/')}}/asset/dashboard/js/argon.js?v=1.1.0"></script>
    <script src="{{url('/')}}/asset/dashboard/js/demo.min.js"></script>
    <script src="{{url('/')}}/asset/js/toast.js"></script>
  </body>
</html>
@yield('script')
@if (session('success'))
    <script>
      "use strict";
      toastr.success("{{ session('success') }}");
    </script>    
@endif

@if (session('alert'))
    <script>
      "use strict";
      toastr.warning("{{ session('alert') }}");
    </script>
@endif
@foreach($xplan as $vplan)
<script>
  "use strict";
  function planamount(){
    var amount@php echo $vplan->id; @endphp = $("#buyplan{{$vplan->id}}").val();
    var cur = '{{$currency->symbol}}';
    var bonus@php echo $vplan->id; @endphp = '{{$vplan->bonus}}/100';
    var answer@php echo $vplan->id; @endphp =parseFloat(amount@php echo $vplan->id; @endphp)*(Number($("#duration{{$vplan->id}}").val())/100);
    var compound@php echo $vplan->id; @endphp =parseFloat(answer@php echo $vplan->id; @endphp.toFixed(2))*parseFloat(bonus@php echo $vplan->id; @endphp)/100;
    $("#profit{{$vplan->id}}").text(cur+' '+answer@php echo $vplan->id; @endphp.toFixed(2));
    $("#bonus{{$vplan->id}}").text('+'+cur+' '+compound@php echo $vplan->id; @endphp.toFixed(2)+' bonus');
  }  
  $("#buyplan{{$vplan->id}}").keyup(planamount);
</script>
@endforeach 
@if($set->recaptcha==1)
  {!! NoCaptcha::renderJs() !!}
@endif