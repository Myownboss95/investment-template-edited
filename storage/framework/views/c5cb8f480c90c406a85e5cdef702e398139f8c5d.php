<!doctype html>
<html class="no-js" lang="en">
    <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <base href="<?php echo e(url('/')); ?>"/>
        <title><?php echo e($title); ?> | <?php echo e($set->site_name); ?></title>
        
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
        <meta name="description" content="<?php echo e($set->site_desc); ?>" />
        <link rel="shortcut icon" href="<?php echo e(asset($logo->image_link2)); ?>" />
        <link rel="stylesheet" href="<?php echo e(asset('asset/dashboard/vendor/@fortawesome/fontawesome-free/css/all.min.css')); ?>" type="text/css">
        <link rel="stylesheet" href="<?php echo e(asset('asset/dashboard/vendor/datatables.net-bs4/css/dataTables.bootstrap4.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('asset/dashboard/vendor/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('asset/dashboard/vendor/datatables.net-select-bs4/css/select.bootstrap4.min.css')); ?>">
		    <link rel="stylesheet" href="<?php echo e(asset('asset/dashboard/vendor/quill/dist/quill.core.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('asset/dashboard/css/argon.css?v=1.1.0" type="text/css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('asset/css/toast.css')); ?>" type="text/css">
        <link href="<?php echo e(asset('asset/fonts/fontawesome/styles.min.css')); ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo e(asset('asset/fonts/fontawesome/css/all.css')); ?>" rel="stylesheet" type="text/css">
         <?php echo $__env->yieldContent('css'); ?>
         <?php echo $__env->make('partials.font', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </head>
<!-- header begin-->
<body class="bg-white">
<div class="preloader"></div>
  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-dark <?php echo e($set->default_color); ?>" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header d-flex align-items-center">
        <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
          <img src="<?php echo e(asset('asset/'.$logo->image_link)); ?>" class="navbar-brand-img" alt="...">
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
              <a class="nav-link <?php if(route('admin.dashboard')==url()->current()): ?> active <?php endif; ?>" href="<?php echo e(route('admin.dashboard')); ?>">
                <i class="fal fa-house-user"></i>
                <span class="nav-link-text"><?php echo e(__('Summary')); ?></span>
              </a>
            </li>         
            <?php if($admin->profile==1): ?>                                    
            <li class="nav-item">
              <a class="nav-link <?php if(route('admin.users')==url()->current()): ?> active <?php endif; ?>" href="<?php echo e(route('admin.users')); ?>">
                <i class="fal fa-users"></i>
                <span class="nav-link-text"><?php echo e(__('Clients')); ?></span>
              </a>
            </li>   
            <?php endif; ?>       
            <?php if($admin->id==1): ?> 
            <li class="nav-item">
              <a class="nav-link <?php if(route('admin.staffs')==url()->current()): ?> active <?php endif; ?>" href="<?php echo e(route('admin.staffs')); ?>">
                <i class="fal fa-user"></i>
                <span class="nav-link-text"><?php echo e(__('Staffs')); ?></span>
              </a>
            </li>   
            <?php endif; ?> 
            <?php if($admin->support==1): ?>          
            <li class="nav-item">
              <a class="nav-link <?php if(route('admin.ticket')==url()->current()): ?> active <?php endif; ?>" href="<?php echo e(route('admin.ticket')); ?>">
                <i class="fal fa-user-headset"></i>
                <span class="nav-link-text"><?php echo e(__('Support ticket')); ?></span>
              </a>
            </li> 
            <?php endif; ?>   
            <?php if($admin->promo==1): ?>           
            <li class="nav-item">
              <a class="nav-link <?php if(route('admin.promo')==url()->current()): ?> active <?php endif; ?>" href="<?php echo e(route('admin.promo')); ?>">
                <i class="fal fa-envelope"></i>
                <span class="nav-link-text"><?php echo e(__('Promotional Emails')); ?></span>
              </a>
            </li> 
            <?php endif; ?>  
            <?php if($admin->message==1): ?>           
            <li class="nav-item">
              <a class="nav-link <?php if(route('admin.message')==url()->current()): ?> active <?php endif; ?>" href="<?php echo e(route('admin.message')); ?>">
                <i class="fal fa-inbox"></i>
                <span class="nav-link-text"><?php echo e(__('Messages')); ?></span>
              </a>
            </li>  
            <?php endif; ?>
            <?php if($admin->deposit==1): ?>  
			      <li class="nav-item">
              <a class="nav-link <?php if(route('admin.deposit.method')==url()->current() || route('admin.banktransfer')==url()->current() || route('admin.deposit.log')==url()->current()): ?> active <?php endif; ?>" href="#card" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-examples">
                <i class="fal fa-money-bill-wave-alt"></i>
                <span class="nav-link-text"><?php echo e(__('Deposit')); ?>

                <?php if(count($pdeposit)>0 || count($pbank)>0): ?>
                <span class="badge badge-sm badge-circle badge-floating badge-danger border-white">
                <?php echo e(count($pdeposit) + count($pbank)); ?>

                </span>
                <?php endif; ?></span>
              </a>
              <div class="collapse <?php if(route('admin.deposit.method')==url()->current() || route('admin.banktransfer')==url()->current() || route('admin.deposit.log')==url()->current()): ?> show <?php endif; ?>" id="card">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item <?php if(route('admin.deposit.method')==url()->current()): ?> active <?php endif; ?>">
                    <a href="<?php echo e(route('admin.deposit.method')); ?>" class="nav-link"><?php echo e(__('Settings')); ?></a>
                  </li>                  
                  <li class="nav-item <?php if(route('admin.deposit.log')==url()->current()): ?> active <?php endif; ?>">
                    <a href="<?php echo e(route('admin.deposit.log')); ?>" class="nav-link"><?php echo e(__('Transactions')); ?>

                      <?php if(count($pdeposit)>0 || count($pbank)>0): ?>
                      <span class="ml-1 badge badge-sm badge-circle badge-floating badge-danger border-white">
                      <?php echo e(count($pdeposit) + count($pbank)); ?>

                      </span>
                      <?php endif; ?>
                      </a>
                  </li>                          
                </ul>
              </div>
            </li>
            <?php endif; ?>
            <?php if($admin->settlement==1): ?>    
			      <li class="nav-item">
              <a class="nav-link <?php if(route('admin.withdraw.method')==url()->current() || route('admin.withdraw.log')==url()->current()): ?> show <?php endif; ?>" href="#xcard" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-examples">
                <i class="fal fa-calendar"></i>
                  <span class="nav-link-text"><?php echo e(__('Payout')); ?>

                  <?php if(count($pwithdraw)>0): ?>
                    <span class="badge badge-sm badge-circle badge-floating badge-danger border-white">
                    <?php echo e(count($pwithdraw)); ?>

                    </span>
                  <?php endif; ?>
					      </span>
              </a>
              <div class="collapse <?php if(route('admin.withdraw.method')==url()->current() || route('admin.withdraw.log')==url()->current()): ?> show <?php endif; ?>" id="xcard">
                <ul class="nav nav-sm flex-column">
				  		    <li class="nav-item <?php if(route('admin.withdraw.method')==url()->current()): ?> active <?php endif; ?>"><a href="<?php echo e(route('admin.withdraw.method')); ?>" class="nav-link"><?php echo e(__('Settings')); ?></a></li>
                  <li class="nav-item <?php if(route('admin.withdraw.log')==url()->current()): ?> active <?php endif; ?>">
                    <a href="<?php echo e(route('admin.withdraw.log')); ?>" class="nav-link"><?php echo e(__('Transactions')); ?>

                      <?php if(count($pwithdraw)>0): ?>
                        <span class="ml-1 badge badge-sm badge-circle badge-floating badge-danger border-white">
                        <?php echo e(count($pwithdraw)); ?>

                        </span>
                      <?php endif; ?>
                    </a>
                  </li>                       
                </ul>
              </div>
			      </li>
            <?php endif; ?>	
            <?php if($admin->savings==1): ?>  	
            <li class="nav-item">
              <a class="nav-link <?php if(route('admin.saving')==url()->current()): ?> active <?php endif; ?>" href="<?php echo e(route('admin.saving')); ?>">
                <i class="fal fa-piggy-bank"></i>
                <span class="nav-link-text"><?php echo e(__('Savings')); ?></span>
              </a>
            </li>	
            <?php endif; ?>
            <?php if($admin->s_inv==1): ?>  
			      <li class="nav-item">
              <a class="nav-link <?php if(route('admin.py.pending')==url()->current() ||route('admin.py.running')==url()->current() || route('admin.py.completed')==url()->current() || route('admin.py.plans')==url()->current()|| route('admin.py.coupon')==url()->current() || route('admin.py.category')==url()->current()): ?> show <?php endif; ?>" href="#tcard" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-examples">
                <i class="fal fa-spa"></i>
                  <span class="nav-link-text"><?php echo e(__('Standard Investment')); ?>

                  <?php if(count($pprofit)>0): ?>
                    <span class="badge badge-sm badge-circle badge-floating badge-danger border-white">
                    <?php echo e(count($pprofit)); ?>

                    </span>
                  <?php endif; ?>
                  </span>
              </a>
              <div class="collapse <?php if(route('admin.py.pending')==url()->current() ||route('admin.py.running')==url()->current() || route('admin.py.completed')==url()->current() || route('admin.py.plans')==url()->current()|| route('admin.py.coupon')==url()->current() || route('admin.py.category')==url()->current()): ?> show <?php endif; ?>" id="tcard">
                <ul class="nav nav-sm flex-column">
					 	      <li class="nav-item <?php if(route('admin.py.pending')==url()->current()): ?> active <?php endif; ?>"><a href="<?php echo e(route('admin.py.pending')); ?>" class="nav-link">Pending Investment
                    <?php if(count($pprofit)>0): ?>
                      <span class="ml-1 badge badge-sm badge-circle badge-floating badge-danger border-white">
                      <?php echo e(count($pprofit)); ?>

                      </span>
                    <?php endif; ?>
                   </a></li>
					 	      <li class="nav-item <?php if(route('admin.py.running')==url()->current()): ?> active <?php endif; ?>"><a href="<?php echo e(route('admin.py.running')); ?>" class="nav-link">Running Investment</a></li>
					 	      <li class="nav-item <?php if(route('admin.py.completed')==url()->current()): ?> active <?php endif; ?>"><a href="<?php echo e(route('admin.py.completed')); ?>" class="nav-link">Matured Investment</a></li>
						      <li class="nav-item <?php if(route('admin.py.plans')==url()->current()): ?> active <?php endif; ?>"><a href="<?php echo e(route('admin.py.plans')); ?>" class="nav-link">Investment Plans</a></li>                    
						      <li class="nav-item <?php if(route('admin.py.coupon')==url()->current()): ?> active <?php endif; ?>"><a href="<?php echo e(route('admin.py.coupon')); ?>" class="nav-link">Coupons</a></li>              
                  <li class="nav-item <?php if(route('admin.sand.py.category')==url()->current()): ?> active <?php endif; ?>"><a href="<?php echo e(route('admin.py.category')); ?>" class="nav-link"><?php echo e(__('Plan Category')); ?></a></li>       
                </ul>
              </div>
			      </li>	
            <?php endif; ?>
            <?php if($admin->p_inv==1): ?>  
            <li class="nav-item">
              <a class="nav-link <?php if(route('admin.sand.py.pending')==url()->current() || route('admin.sand.py.completed')==url()->current() || route('admin.sand.py.plans')==url()->current()|| route('admin.sand.py.category')==url()->current()): ?> show <?php endif; ?>" href="#fcard" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-examples">
                <i class="fal fa-globe"></i>
                  <span class="nav-link-text"><?php echo e(__('Project Investment')); ?></span>
              </a>
              <div class="collapse <?php if(route('admin.sand.py.pending')==url()->current() || route('admin.sand.py.completed')==url()->current() || route('admin.sand.py.plans')==url()->current()|| route('admin.sand.py.category')==url()->current()): ?> show <?php endif; ?>" id="fcard">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item <?php if(route('admin.sand.py.pending')==url()->current()): ?> active <?php endif; ?>"><a href="<?php echo e(route('admin.sand.py.pending')); ?>" class="nav-link"><?php echo e(__('Running Investment')); ?></a></li>
                  <li class="nav-item <?php if(route('admin.sand.py.completed')==url()->current()): ?> active <?php endif; ?>"><a href="<?php echo e(route('admin.sand.py.completed')); ?>" class="nav-link"><?php echo e(__('Matured Investment')); ?></a></li>
                  <li class="nav-item <?php if(route('admin.sand.py.plans')==url()->current()): ?> active <?php endif; ?>"><a href="<?php echo e(route('admin.sand.py.plans')); ?>" class="nav-link"><?php echo e(__('Investment Plans')); ?></a></li>                    
                  <li class="nav-item <?php if(route('admin.sand.py.category')==url()->current()): ?> active <?php endif; ?>"><a href="<?php echo e(route('admin.sand.py.category')); ?>" class="nav-link"><?php echo e(__('Plan Category')); ?></a></li>                    
                </ul>
              </div>
            </li>	
            <?php endif; ?>
            <?php if($admin->transfer==1): ?>  
            <li class="nav-item">
              <a class="nav-link <?php if(route('admin.transfers')==url()->current()): ?> active <?php endif; ?>" href="<?php echo e(route('admin.transfers')); ?>">
                <i class="fal fa-exchange-alt"></i>
                <span class="nav-link-text"><?php echo e(__('Transfer logs')); ?></span>
              </a>
            </li>	
            <?php endif; ?>
            <?php if($admin->referral==1): ?>  
            <li class="nav-item">
              <a class="nav-link <?php if(route('admin.referrals')==url()->current()): ?> active <?php endif; ?>" href="<?php echo e(route('admin.referrals')); ?>">
                <i class="fal fa-share"></i>
                <span class="nav-link-text"><?php echo e(__('Referral earnings')); ?></span>
              </a>
            </li>	
            <?php endif; ?>	    
            <?php if($admin->blog==1): ?>    
		  	    <li class="nav-item">
                <a class="nav-link <?php if(route('admin.blog')==url()->current() || route('admin.cat')==url()->current()): ?> show <?php endif; ?>" href="#brcard" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-examples">
                  <i class="fal fa-newspaper"></i>
                  	<span class="nav-link-text"><?php echo e(__('Blog')); ?></span>
                </a>
                <div class="collapse <?php if(route('admin.blog')==url()->current() || route('admin.cat')==url()->current()): ?> show <?php endif; ?>" id="brcard">
                  <ul class="nav nav-sm flex-column">
                    <li class="nav-item <?php if(route('admin.blog')==url()->current()): ?> active <?php endif; ?>"><a href="<?php echo e(route('admin.blog')); ?>" class="nav-link"><?php echo e(__('Articles')); ?></a></li>
					 	        <li class="nav-item <?php if(route('admin.cat')==url()->current()): ?> active <?php endif; ?>"><a href="<?php echo e(route('admin.cat')); ?>" class="nav-link"><?php echo e(__('Category')); ?></a></li>
                  </ul>
                </div>
			      </li> 
            <?php endif; ?>
            <?php if($admin->id==1): ?>  
            <li class="nav-item">
              <a class="nav-link  <?php if(route('homepage')==url()->current() || route('admin.team')==url()->current() || route('admin.service')==url()->current() || route('admin.logo')==url()->current() || route('admin.review')==url()->current() || route('admin.page')==url()->current() || route('admin.faq')==url()->current() || route('admin.terms')==url()->current() || route('privacy-policy')==url()->current() || route('about-us')==url()->current() || route('social-links')==url()->current()): ?> active <?php endif; ?>" href="#xx" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-examples">
                <i class="fal fa-desktop"></i>
                <span class="nav-link-text"><?php echo e(__('Website design')); ?></span>
              </a>
              <div class="collapse <?php if(route('homepage')==url()->current() || route('admin.team')==url()->current() || route('admin.service')==url()->current() || route('admin.logo')==url()->current() || route('admin.review')==url()->current() || route('admin.page')==url()->current() || route('admin.faq')==url()->current() || route('admin.terms')==url()->current() || route('privacy-policy')==url()->current() || route('about-us')==url()->current() || route('social-links')==url()->current()): ?> show <?php endif; ?> " id="xx">
                <ul class="nav nav-sm flex-column">
                    <li class="nav-item <?php if(route('homepage')==url()->current()): ?> active <?php endif; ?>"><a href="<?php echo e(route('homepage')); ?>" class="nav-link"><?php echo e(__('Homepage')); ?></a></li>
                    <li class="nav-item <?php if(route('admin.logo')==url()->current()): ?> active <?php endif; ?>"><a href="<?php echo e(route('admin.logo')); ?>" class="nav-link"><?php echo e(__('Logo & Favicon')); ?></a></li>	
                    <li class="nav-item <?php if(route('admin.review')==url()->current()): ?> active <?php endif; ?>"><a href="<?php echo e(route('admin.review')); ?>"class="nav-link"><?php echo e(__('Platform Review')); ?></a></li>
					          <li class="nav-item <?php if(route('admin.service')==url()->current()): ?> active <?php endif; ?>"><a href="<?php echo e(route('admin.service')); ?>"class="nav-link">Services</a></li>
					          <li class="nav-item <?php if(route('admin.team')==url()->current()): ?> active <?php endif; ?>"><a href="<?php echo e(route('admin.team')); ?>"class="nav-link">Team</a></li>
                    <li class="nav-item <?php if(route('admin.page')==url()->current()): ?> active <?php endif; ?>"><a href="<?php echo e(route('admin.page')); ?>" class="nav-link"><?php echo e(__('Webpages')); ?></a></li>
                    <li class="nav-item <?php if(route('admin.faq')==url()->current()): ?> active <?php endif; ?>"><a href="<?php echo e(route('admin.faq')); ?>" class="nav-link"><?php echo e(__('FAQs')); ?></a></li>
                    <li class="nav-item <?php if(route('admin.terms')==url()->current()): ?> active <?php endif; ?>"><a href="<?php echo e(route('admin.terms')); ?>" class="nav-link"><?php echo e(__('Terms & Condition')); ?></a></li>
                    <li class="nav-item <?php if(route('privacy-policy')==url()->current()): ?> active <?php endif; ?>"><a href="<?php echo e(route('privacy-policy')); ?>" class="nav-link"><?php echo e(__('Privacy policy')); ?></a></li>
                    <li class="nav-item <?php if(route('about-us')==url()->current()): ?> active <?php endif; ?>"><a href="<?php echo e(route('about-us')); ?>" class="nav-link"><?php echo e(__('About us')); ?></a></li>
                    <li class="nav-item <?php if(route('social-links')==url()->current()): ?> active <?php endif; ?>"><a href="<?php echo e(route('social-links')); ?>" class="nav-link"><?php echo e(__('Social Links')); ?></a></li>                           
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php if(route('admin.currency')==url()->current()): ?> active <?php endif; ?>" href="<?php echo e(route('admin.currency')); ?>">
                <i class="fal fa-money-bill-wave-alt"></i>
                <span class="nav-link-text"><?php echo e(__('Currency')); ?></span>
              </a>
            </li>            
            <li class="nav-item">
              <a class="nav-link <?php if(route('admin.language')==url()->current()): ?> active <?php endif; ?>" href="<?php echo e(route('admin.language')); ?>">
                <i class="fal fa-language"></i>
                <span class="nav-link-text"><?php echo e(__('Language')); ?></span>
              </a>
            </li>       
            <li class="nav-item">
              <a class="nav-link <?php if(route('admin.setting')==url()->current()): ?> active <?php endif; ?>" href="<?php echo e(route('admin.setting')); ?>">
                <i class="fal fa-cog"></i>
                <span class="nav-link-text"><?php echo e(__('Settings')); ?></span>
              </a>
            </li> 
            <?php endif; ?>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo e(route('admin.logout')); ?>">
                <i class="fal fa-power-off"></i>
                <span class="nav-link-text"><?php echo e(__('Log out')); ?></span>
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
                    <img alt="Image placeholder" src="<?php echo e(asset('asset/profile/personx.jpg')); ?>">
                  </span>
                  <div class="media-body ml-2 d-none d-lg-block">
                      <span class="mb-0 text-sm text-default"><?php echo e(Auth::guard('admin')->user()->username); ?></span>
                    </div>
                </div>
              </a>
            </li> 
            <li class="nav-item">
              <a href="<?php echo e(route('admin.logout')); ?>" class="nav-link pr-0">
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

<?php echo $__env->yieldContent('content'); ?>
  </div>
</div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="<?php echo e(asset('asset/dashboard/vendor/jquery/dist/jquery.min.js')); ?>"></script>
  <script src="<?php echo e(asset('asset/dashboard/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')); ?>"></script>
  <script src="<?php echo e(asset('asset/dashboard/vendor/js-cookie/js.cookie.js')); ?>"></script>
  <script src="<?php echo e(asset('asset/dashboard/vendor/jquery.scrollbar/jquery.scrollbar.min.js')); ?>"></script>
  <script src="<?php echo e(asset('asset/dashboard/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js')); ?>"></script>
  <!-- Optional JS -->
  <script src="<?php echo e(asset('asset/dashboard/vendor/chart.js/dist/Chart.min.js')); ?>"></script>
  <script src="<?php echo e(asset('asset/dashboard/vendor/chart.js/dist/Chart.extension.js')); ?>"></script>
  <script src="<?php echo e(asset('asset/dashboard/vendor/jvectormap-next/jquery-jvectormap.min.js')); ?>"></script>
  <script src="<?php echo e(asset('asset/dashboard/js/vendor/jvectormap/jquery-jvectormap-world-mill.js')); ?>"></script>
  <script src="<?php echo e(asset('asset/dashboard/vendor/datatables.net/js/jquery.dataTables.min.js')); ?>"></script>
  <script src="<?php echo e(asset('asset/dashboard/vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js')); ?>"></script>
  <script src="<?php echo e(asset('asset/dashboard/vendor/datatables.net-buttons/js/dataTables.buttons.min.js')); ?>"></script>
  <script src="<?php echo e(asset('asset/dashboard/vendor/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')); ?>"></script>
  <script src="<?php echo e(asset('asset/dashboard/vendor/datatables.net-buttons/js/buttons.html5.min.js')); ?>"></script>
  <script src="<?php echo e(asset('asset/dashboard/vendor/datatables.net-buttons/js/buttons.flash.min.js')); ?>"></script>
  <script src="<?php echo e(asset('asset/dashboard/vendor/datatables.net-buttons/js/buttons.print.min.js')); ?>"></script>
  <script src="<?php echo e(asset('asset/dashboard/vendor/datatables.net-select/js/dataTables.select.min.js')); ?>"></script>
  <script src="<?php echo e(asset('asset/dashboard/vendor/clipboard/dist/clipboard.min.js')); ?>"></script>
  <script src="<?php echo e(asset('asset/dashboard/vendor/select2/dist/js/select2.min.js')); ?>"></script>
  <script src="<?php echo e(asset('asset/dashboard/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')); ?>"></script>
  <script src="<?php echo e(asset('asset/dashboard/vendor/nouislider/distribute/nouislider.min.js')); ?>"></script>
  <script src="<?php echo e(asset('asset/dashboard/vendor/quill/dist/quill.min.js')); ?>"></script>
  <script src="<?php echo e(asset('asset/dashboard/vendor/dropzone/dist/min/dropzone.min.js')); ?>"></script>
  <script src="<?php echo e(asset('asset/dashboard/vendor/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js')); ?>"></script>
  <!-- Argon JS -->
  <script src="<?php echo e(asset('asset/dashboard/js/argon.js?v=1.1.0')); ?>"></script>
  <!-- Demo JS - remove this in your project -->
  <script src="<?php echo e(asset('asset/dashboard/js/demo.min.js')); ?>"></script>
  <script src="<?php echo e(asset('asset/js/toast.js')); ?>"></script>
  <script src="<?php echo e(asset('asset/tinymce/tinymce.min.js')); ?>"></script>
	<script src="<?php echo e(asset('asset/tinymce/init-tinymce.js')); ?>"></script>
</body>

</html>
<?php echo $__env->yieldContent('script'); ?>
<?php if(session('success')): ?>
    <script>
      "use strict";
      toastr.success("<?php echo e(session('success')); ?>");
    </script>    
<?php endif; ?>

<?php if(session('alert')): ?>
    <script>
      "use strict";
      toastr.warning("<?php echo e(session('alert')); ?>");
    </script>
<?php endif; ?>
<?php /**PATH /Users/mac/Downloads/paviliumglobal/resources/views/master.blade.php ENDPATH**/ ?>