<!doctype html>
<html class="no-js" lang="en">
    <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <base href="{{url('/')}}"/>
        <title>{{ $title }} | {{$set->site_name}}</title>
        
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
        <meta name="description" content="{{$set->site_desc}}" />
        <link rel="shortcut icon" href="{{asset($logo->image_link2)}}" />
        <link rel="stylesheet" href="{{asset('asset/dashboard/vendor/@fortawesome/fontawesome-free/css/all.min.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('asset/dashboard/vendor/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}">
        <link rel="stylesheet" href="{{asset('asset/dashboard/vendor/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}}">
        <link rel="stylesheet" href="{{asset('asset/dashboard/vendor/datatables.net-select-bs4/css/select.bootstrap4.min.css')}}">
		    <link rel="stylesheet" href="{{asset('asset/dashboard/vendor/quill/dist/quill.core.css')}}">
        <link rel="stylesheet" href="{{asset('asset/dashboard/css/argon.css?v=1.1.0" type="text/css')}}">
        <link rel="stylesheet" href="{{asset('asset/css/toast.css')}}" type="text/css">
        <link href="{{asset('asset/fonts/fontawesome/styles.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('asset/fonts/fontawesome/css/all.css')}}" rel="stylesheet" type="text/css">
         @yield('css')
         @include('partials.font')
    </head>
<!-- header begin-->
<body class="bg-white">
<div class="preloader"></div>
  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-dark {{$set->default_color}}" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header d-flex align-items-center">
        <a class="navbar-brand" href="{{url('/')}}">
          <img src="{{asset('asset/'.$logo->image_link)}}" class="navbar-brand-img" alt="...">
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
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link @if(route('admin.dashboard')==url()->current()) active @endif" href="{{route('admin.dashboard')}}">
                <i class="fal fa-house-user"></i>
                <span class="nav-link-text">{{__('Summary')}}</span>
              </a>
            </li>         
            @if($admin->profile==1)                                    
            <li class="nav-item">
              <a class="nav-link @if(route('admin.users')==url()->current()) active @endif" href="{{route('admin.users')}}">
                <i class="fal fa-users"></i>
                <span class="nav-link-text">{{__('Clients')}}</span>
              </a>
            </li>   
            @endif       
            @if($admin->id==1) 
            <li class="nav-item">
              <a class="nav-link @if(route('admin.staffs')==url()->current()) active @endif" href="{{route('admin.staffs')}}">
                <i class="fal fa-user"></i>
                <span class="nav-link-text">{{__('Staffs')}}</span>
              </a>
            </li>   
            @endif 
            @if($admin->support==1)          
            <li class="nav-item">
              <a class="nav-link @if(route('admin.ticket')==url()->current()) active @endif" href="{{route('admin.ticket')}}">
                <i class="fal fa-user-headset"></i>
                <span class="nav-link-text">{{__('Support ticket')}}</span>
              </a>
            </li> 
            @endif   
            @if($admin->promo==1)           
            <li class="nav-item">
              <a class="nav-link @if(route('admin.promo')==url()->current()) active @endif" href="{{route('admin.promo')}}">
                <i class="fal fa-envelope"></i>
                <span class="nav-link-text">{{__('Promotional Emails')}}</span>
              </a>
            </li> 
            @endif  
            @if($admin->message==1)           
            <li class="nav-item">
              <a class="nav-link @if(route('admin.message')==url()->current()) active @endif" href="{{route('admin.message')}}">
                <i class="fal fa-inbox"></i>
                <span class="nav-link-text">{{__('Messages')}}</span>
              </a>
            </li>  
            @endif
            @if($admin->deposit==1)  
			      <li class="nav-item">
              <a class="nav-link @if(route('admin.deposit.method')==url()->current() || route('admin.banktransfer')==url()->current() || route('admin.deposit.log')==url()->current()) active @endif" href="#card" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-examples">
                <i class="fal fa-money-bill-wave-alt"></i>
                <span class="nav-link-text">{{__('Deposit')}}
                @if(count($pdeposit)>0 || count($pbank)>0)
                <span class="badge badge-sm badge-circle badge-floating badge-danger border-white">
                {{count($pdeposit) + count($pbank)}}
                </span>
                @endif</span>
              </a>
              <div class="collapse @if(route('admin.deposit.method')==url()->current() || route('admin.banktransfer')==url()->current() || route('admin.deposit.log')==url()->current()) show @endif" id="card">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item @if(route('admin.deposit.method')==url()->current()) active @endif">
                    <a href="{{route('admin.deposit.method')}}" class="nav-link">{{__('Settings')}}</a>
                  </li>                  
                  <li class="nav-item @if(route('admin.deposit.log')==url()->current()) active @endif">
                    <a href="{{route('admin.deposit.log')}}" class="nav-link">{{__('Transactions')}}
                      @if(count($pdeposit)>0 || count($pbank)>0)
                      <span class="ml-1 badge badge-sm badge-circle badge-floating badge-danger border-white">
                      {{count($pdeposit) + count($pbank)}}
                      </span>
                      @endif
                      </a>
                  </li>                          
                </ul>
              </div>
            </li>
            @endif
            @if($admin->settlement==1)    
			      <li class="nav-item">
              <a class="nav-link @if(route('admin.withdraw.method')==url()->current() || route('admin.withdraw.log')==url()->current()) show @endif" href="#xcard" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-examples">
                <i class="fal fa-calendar"></i>
                  <span class="nav-link-text">{{__('Payout')}}
                  @if(count($pwithdraw)>0)
                    <span class="badge badge-sm badge-circle badge-floating badge-danger border-white">
                    {{count($pwithdraw)}}
                    </span>
                  @endif
					      </span>
              </a>
              <div class="collapse @if(route('admin.withdraw.method')==url()->current() || route('admin.withdraw.log')==url()->current()) show @endif" id="xcard">
                <ul class="nav nav-sm flex-column">
				  		    <li class="nav-item @if(route('admin.withdraw.method')==url()->current()) active @endif"><a href="{{route('admin.withdraw.method')}}" class="nav-link">{{__('Settings')}}</a></li>
                  <li class="nav-item @if(route('admin.withdraw.log')==url()->current()) active @endif">
                    <a href="{{route('admin.withdraw.log')}}" class="nav-link">{{__('Transactions')}}
                      @if(count($pwithdraw)>0)
                        <span class="ml-1 badge badge-sm badge-circle badge-floating badge-danger border-white">
                        {{count($pwithdraw)}}
                        </span>
                      @endif
                    </a>
                  </li>                       
                </ul>
              </div>
			      </li>
            @endif	
            @if($admin->savings==1)  	
            <li class="nav-item">
              <a class="nav-link @if(route('admin.saving')==url()->current()) active @endif" href="{{route('admin.saving')}}">
                <i class="fal fa-piggy-bank"></i>
                <span class="nav-link-text">{{__('Savings')}}</span>
              </a>
            </li>	
            @endif
            @if($admin->s_inv==1)  
			      <li class="nav-item">
              <a class="nav-link @if(route('admin.py.pending')==url()->current() ||route('admin.py.running')==url()->current() || route('admin.py.completed')==url()->current() || route('admin.py.plans')==url()->current()|| route('admin.py.coupon')==url()->current() || route('admin.py.category')==url()->current()) show @endif" href="#tcard" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-examples">
                <i class="fal fa-spa"></i>
                  <span class="nav-link-text">{{__('Standard Investment')}}
                  @if(count($pprofit)>0)
                    <span class="badge badge-sm badge-circle badge-floating badge-danger border-white">
                    {{count($pprofit)}}
                    </span>
                  @endif
                  </span>
              </a>
              <div class="collapse @if(route('admin.py.pending')==url()->current() ||route('admin.py.running')==url()->current() || route('admin.py.completed')==url()->current() || route('admin.py.plans')==url()->current()|| route('admin.py.coupon')==url()->current() || route('admin.py.category')==url()->current()) show @endif" id="tcard">
                <ul class="nav nav-sm flex-column">
					 	      <li class="nav-item @if(route('admin.py.pending')==url()->current()) active @endif"><a href="{{route('admin.py.pending')}}" class="nav-link">Pending Investment
                    @if(count($pprofit)>0)
                      <span class="ml-1 badge badge-sm badge-circle badge-floating badge-danger border-white">
                      {{count($pprofit)}}
                      </span>
                    @endif
                   </a></li>
					 	      <li class="nav-item @if(route('admin.py.running')==url()->current()) active @endif"><a href="{{route('admin.py.running')}}" class="nav-link">Running Investment</a></li>
					 	      <li class="nav-item @if(route('admin.py.completed')==url()->current()) active @endif"><a href="{{route('admin.py.completed')}}" class="nav-link">Matured Investment</a></li>
						      <li class="nav-item @if(route('admin.py.plans')==url()->current()) active @endif"><a href="{{route('admin.py.plans')}}" class="nav-link">Investment Plans</a></li>                    
						      <li class="nav-item @if(route('admin.py.coupon')==url()->current()) active @endif"><a href="{{route('admin.py.coupon')}}" class="nav-link">Coupons</a></li>              
                  <li class="nav-item @if(route('admin.sand.py.category')==url()->current()) active @endif"><a href="{{route('admin.py.category')}}" class="nav-link">{{__('Plan Category')}}</a></li>       
                </ul>
              </div>
			      </li>	
            @endif
            @if($admin->p_inv==1)  
            <li class="nav-item">
              <a class="nav-link @if(route('admin.sand.py.pending')==url()->current() || route('admin.sand.py.completed')==url()->current() || route('admin.sand.py.plans')==url()->current()|| route('admin.sand.py.category')==url()->current()) show @endif" href="#fcard" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-examples">
                <i class="fal fa-globe"></i>
                  <span class="nav-link-text">{{__('Project Investment')}}</span>
              </a>
              <div class="collapse @if(route('admin.sand.py.pending')==url()->current() || route('admin.sand.py.completed')==url()->current() || route('admin.sand.py.plans')==url()->current()|| route('admin.sand.py.category')==url()->current()) show @endif" id="fcard">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item @if(route('admin.sand.py.pending')==url()->current()) active @endif"><a href="{{route('admin.sand.py.pending')}}" class="nav-link">{{__('Running Investment')}}</a></li>
                  <li class="nav-item @if(route('admin.sand.py.completed')==url()->current()) active @endif"><a href="{{route('admin.sand.py.completed')}}" class="nav-link">{{__('Matured Investment')}}</a></li>
                  <li class="nav-item @if(route('admin.sand.py.plans')==url()->current()) active @endif"><a href="{{route('admin.sand.py.plans')}}" class="nav-link">{{__('Investment Plans')}}</a></li>                    
                  <li class="nav-item @if(route('admin.sand.py.category')==url()->current()) active @endif"><a href="{{route('admin.sand.py.category')}}" class="nav-link">{{__('Plan Category')}}</a></li>                    
                </ul>
              </div>
            </li>	
            @endif
            @if($admin->transfer==1)  
            <li class="nav-item">
              <a class="nav-link @if(route('admin.transfers')==url()->current()) active @endif" href="{{route('admin.transfers')}}">
                <i class="fal fa-exchange-alt"></i>
                <span class="nav-link-text">{{__('Transfer logs')}}</span>
              </a>
            </li>	
            @endif
            @if($admin->referral==1)  
            <li class="nav-item">
              <a class="nav-link @if(route('admin.referrals')==url()->current()) active @endif" href="{{route('admin.referrals')}}">
                <i class="fal fa-share"></i>
                <span class="nav-link-text">{{__('Referral earnings')}}</span>
              </a>
            </li>	
            @endif	    
            @if($admin->blog==1)    
		  	    <li class="nav-item">
                <a class="nav-link @if(route('admin.blog')==url()->current() || route('admin.cat')==url()->current()) show @endif" href="#brcard" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-examples">
                  <i class="fal fa-newspaper"></i>
                  	<span class="nav-link-text">{{__('Blog')}}</span>
                </a>
                <div class="collapse @if(route('admin.blog')==url()->current() || route('admin.cat')==url()->current()) show @endif" id="brcard">
                  <ul class="nav nav-sm flex-column">
                    <li class="nav-item @if(route('admin.blog')==url()->current()) active @endif"><a href="{{route('admin.blog')}}" class="nav-link">{{__('Articles')}}</a></li>
					 	        <li class="nav-item @if(route('admin.cat')==url()->current()) active @endif"><a href="{{route('admin.cat')}}" class="nav-link">{{__('Category')}}</a></li>
                  </ul>
                </div>
			      </li> 
            @endif
            @if($admin->id==1)  
            <li class="nav-item">
              <a class="nav-link  @if(route('homepage')==url()->current() || route('admin.team')==url()->current() || route('admin.service')==url()->current() || route('admin.logo')==url()->current() || route('admin.review')==url()->current() || route('admin.page')==url()->current() || route('admin.faq')==url()->current() || route('admin.terms')==url()->current() || route('privacy-policy')==url()->current() || route('about-us')==url()->current() || route('social-links')==url()->current()) active @endif" href="#xx" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-examples">
                <i class="fal fa-desktop"></i>
                <span class="nav-link-text">{{__('Website design')}}</span>
              </a>
              <div class="collapse @if(route('homepage')==url()->current() || route('admin.team')==url()->current() || route('admin.service')==url()->current() || route('admin.logo')==url()->current() || route('admin.review')==url()->current() || route('admin.page')==url()->current() || route('admin.faq')==url()->current() || route('admin.terms')==url()->current() || route('privacy-policy')==url()->current() || route('about-us')==url()->current() || route('social-links')==url()->current()) show @endif " id="xx">
                <ul class="nav nav-sm flex-column">
                    <li class="nav-item @if(route('homepage')==url()->current()) active @endif"><a href="{{route('homepage')}}" class="nav-link">{{__('Homepage')}}</a></li>
                    <li class="nav-item @if(route('admin.logo')==url()->current()) active @endif"><a href="{{route('admin.logo')}}" class="nav-link">{{__('Logo & Favicon')}}</a></li>	
                    <li class="nav-item @if(route('admin.review')==url()->current()) active @endif"><a href="{{route('admin.review')}}"class="nav-link">{{__('Platform Review')}}</a></li>
					          <li class="nav-item @if(route('admin.service')==url()->current()) active @endif"><a href="{{route('admin.service')}}"class="nav-link">Services</a></li>
					          <li class="nav-item @if(route('admin.team')==url()->current()) active @endif"><a href="{{route('admin.team')}}"class="nav-link">Team</a></li>
                    <li class="nav-item @if(route('admin.page')==url()->current()) active @endif"><a href="{{route('admin.page')}}" class="nav-link">{{__('Webpages')}}</a></li>
                    <li class="nav-item @if(route('admin.faq')==url()->current()) active @endif"><a href="{{route('admin.faq')}}" class="nav-link">{{__('FAQs')}}</a></li>
                    <li class="nav-item @if(route('admin.terms')==url()->current()) active @endif"><a href="{{route('admin.terms')}}" class="nav-link">{{__('Terms & Condition')}}</a></li>
                    <li class="nav-item @if(route('privacy-policy')==url()->current()) active @endif"><a href="{{route('privacy-policy')}}" class="nav-link">{{__('Privacy policy')}}</a></li>
                    <li class="nav-item @if(route('about-us')==url()->current()) active @endif"><a href="{{route('about-us')}}" class="nav-link">{{__('About us')}}</a></li>
                    <li class="nav-item @if(route('social-links')==url()->current()) active @endif"><a href="{{route('social-links')}}" class="nav-link">{{__('Social Links')}}</a></li>                           
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link @if(route('admin.currency')==url()->current()) active @endif" href="{{route('admin.currency')}}">
                <i class="fal fa-money-bill-wave-alt"></i>
                <span class="nav-link-text">{{__('Currency')}}</span>
              </a>
            </li>            
            <li class="nav-item">
              <a class="nav-link @if(route('admin.language')==url()->current()) active @endif" href="{{route('admin.language')}}">
                <i class="fal fa-language"></i>
                <span class="nav-link-text">{{__('Language')}}</span>
              </a>
            </li>       
            <li class="nav-item">
              <a class="nav-link @if(route('admin.setting')==url()->current()) active @endif" href="{{route('admin.setting')}}">
                <i class="fal fa-cog"></i>
                <span class="nav-link-text">{{__('Settings')}}</span>
              </a>
            </li> 
            @endif
            <li class="nav-item">
              <a class="nav-link" href="{{route('admin.logout')}}">
                <i class="fal fa-power-off"></i>
                <span class="nav-link-text">{{__('Log out')}}</span>
              </a>
            </li>            
          </ul>
          <div class="py-5 text-center font-weight-bold">
              <span class="text-light"> Flutter v1.3.0</span>
          </div>
        </div>
      </div>
    </div>
  </nav>
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Search form -->
            
          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center ml-md-auto">
            <li class="nav-item d-xl-none">
              <!-- Sidenav toggler -->
              <div class="pr-3 sidenav-toggler sidenav-toggler-light" data-action="sidenav-pin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </li>
          </ul>
          <ul class="navbar-nav align-items-center ml-auto ml-md-0">
            <li class="nav-item">
              <a class="nav-link pr-0" href="javascript:void" role="button" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                  <span class="avatar avatar-sm rounded-circle">
                    <img alt="Image placeholder" src="{{asset('asset/profile/personx.jpg')}}">
                  </span>
                  <div class="media-body ml-2 d-none d-lg-block">
                      <span class="mb-0 text-sm text-default">{{Auth::guard('admin')->user()->username}}</span>
                    </div>
                </div>
              </a>
            </li> 
            <li class="nav-item">
              <a href="{{route('admin.logout')}}" class="nav-link pr-0">
                <i class="fal fa-power-off"></i>
              </a>
            </li>             
          </ul>
        </div>
      </div>
    </nav>
    <div class="header pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center">
            <div class="col-lg-6 col-7">
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">

              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>

@yield('content')
  </div>
</div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="{{asset('asset/dashboard/vendor/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{asset('asset/dashboard/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('asset/dashboard/vendor/js-cookie/js.cookie.js')}}"></script>
  <script src="{{asset('asset/dashboard/vendor/jquery.scrollbar/jquery.scrollbar.min.js')}}"></script>
  <script src="{{asset('asset/dashboard/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js')}}"></script>
  <!-- Optional JS -->
  <script src="{{asset('asset/dashboard/vendor/chart.js/dist/Chart.min.js')}}"></script>
  <script src="{{asset('asset/dashboard/vendor/chart.js/dist/Chart.extension.js')}}"></script>
  <script src="{{asset('asset/dashboard/vendor/jvectormap-next/jquery-jvectormap.min.js')}}"></script>
  <script src="{{asset('asset/dashboard/js/vendor/jvectormap/jquery-jvectormap-world-mill.js')}}"></script>
  <script src="{{asset('asset/dashboard/vendor/datatables.net/js/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('asset/dashboard/vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
  <script src="{{asset('asset/dashboard/vendor/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
  <script src="{{asset('asset/dashboard/vendor/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')}}"></script>
  <script src="{{asset('asset/dashboard/vendor/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
  <script src="{{asset('asset/dashboard/vendor/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
  <script src="{{asset('asset/dashboard/vendor/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
  <script src="{{asset('asset/dashboard/vendor/datatables.net-select/js/dataTables.select.min.js')}}"></script>
  <script src="{{asset('asset/dashboard/vendor/clipboard/dist/clipboard.min.js')}}"></script>
  <script src="{{asset('asset/dashboard/vendor/select2/dist/js/select2.min.js')}}"></script>
  <script src="{{asset('asset/dashboard/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
  <script src="{{asset('asset/dashboard/vendor/nouislider/distribute/nouislider.min.js')}}"></script>
  <script src="{{asset('asset/dashboard/vendor/quill/dist/quill.min.js')}}"></script>
  <script src="{{asset('asset/dashboard/vendor/dropzone/dist/min/dropzone.min.js')}}"></script>
  <script src="{{asset('asset/dashboard/vendor/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js')}}"></script>
  <!-- Argon JS -->
  <script src="{{asset('asset/dashboard/js/argon.js?v=1.1.0')}}"></script>
  <!-- Demo JS - remove this in your project -->
  <script src="{{asset('asset/dashboard/js/demo.min.js')}}"></script>
  <script src="{{asset('asset/js/toast.js')}}"></script>
  <script src="{{asset('asset/tinymce/tinymce.min.js')}}"></script>
	<script src="{{asset('asset/tinymce/init-tinymce.js')}}"></script>
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
