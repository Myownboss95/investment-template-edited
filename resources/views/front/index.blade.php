@extends('layout')
@section('css')

@stop
@section('content')
    <div style="margin-bottom: 90px;" class="position-relative bg-img-hero">
        <div class="container space-top-3 space-top-lg-4 position-relative z-index-2">
            <div class="row justify-content-lg-between mb-5">
                <div class="col-md-6 col-lg-6">
                <!-- Info -->
                <div class="mb-5">
                    <h1 class="strong">{{$ui->header_title}}</h1>
                    <p>{{$ui->header_body}}</p>
                </div>

                <!--<div class="mb-3">
                    <a class="btn btn-primary btn-wide transition-3d-hover mb-2 mb-sm-0 mr-3" href="{{route('register')}}">Get Started</a>
                    <a class="btn btn-link mb-2 mb-sm-0" href="{{route('contact')}}">Let's Talk <i class="fal fa-angle-right fa-sm ml-1"></i></a>
                </div>-->
                @if($set->ns==1)
                <p class="small">{{__('Next Settlement')}} {{date("M j, Y", strtotime($set->next_settlement))}}</p>
                @endif
                <!-- End Info -->
                </div>

                <div class="col-md-6 d-none d-md-inline-block">
                <!-- SVG Illustration -->
                <figure class="w-100">
                    <img class="img-fluid" src="{{url('/')}}/asset/images/{{$ui->image1}}" alt="Image Description">
                </figure>
                <!-- End SVG Illustration -->
                </div>
            </div>
        </div>
    </div>

<div style="background-color: #f2f2f2; border-top: 1px solid black; border-bottom: 1px solid black;">    
    <div class="container">
      <div class="w-lg-85 mx-lg-auto">
        <!-- Card -->
{{-- <video style="margin-top: -80px;" width="100%" poster="https://paviliumglobal.com/core/public/94751182.webp" controls>
  <source src="https://paviliumglobal.com/core/public/paviliumglobal.mp4" type="video/mp4">
  <source src="paviliumglobal.ogg" type="video/ogg">
  Your browser does not support HTML video.
</video> --}}
<div style="text-align: center; margin-top: 15px; padding-bottom: 30px;">
<p style="">Extensive experience in commercial and multifamily acquisitions, development, redevelopment, value-add, and distressed asset opportunities. With these capabilities, we are positioned to capitalize on dislocations and inefficiencies that are inherent in real estate investing.</p>
<div class="mb-3">
                    <a class="btn btn-primary btn-wide transition-3d-hover mb-2 mb-sm-0 mr-3" href="{{route('register')}}">Get Started</a>
                    
                </div>
</div>
        <!-- End Card -->
      </div>
    </div>
</div>
    
    <div class="container space-2 space-bottom-lg-3">
      <div class="row justify-content-lg-center">
        <div class="col-lg-8">
                <div id="cat" class="space-bottom-1">
                    <h1>Why Platinum Wealth Trade?</h1>
                    <div id="basicsAccordion">
                            <!-- Card -->
                                <div class="card shadow-none mb-3">
                                    <div class="card-header card-collapse" id="basicsHeadingOne">
                                        <a class="btn btn-link btn-block d-flex justify-content-between card-btn collapsed bg-white px-0" href="javascript:;" role="button" data-toggle="collapse" data-target="#basicsCollapseOne" aria-expanded="false" aria-controls="basicsCollapseOne">
                                            We go where the opportunity is
                                            <span class="card-btn-toggle">
                                            <span class="card-btn-toggle-default">&plus;</span>
                                            <span class="card-btn-toggle-active">&minus;</span>
                                            </span>
                                        </a>
                                    </div>
                                    <div id="basicsCollapseOne" class="collapse" aria-labelledby="basicsHeadingOne" data-parent="#basicsAccordion">
                                        <div class="card-body px-0">
                                            <p>We spend considerable time understanding the macro landscape including GDP growth, employment-population ratio, population growth (Echo and Baby Boom), income growth, occupancy, inventory under construction, relative pricing by market and in relation to replacement costs, etc. We use the data in our algorithm to inform what markets we should target for investment. We are experienced and nimble as investors and invest in our targeted markets and property types, using capital structures to better position ourselves within a region, property sector, and investment, from a risk and return perspective. This is in stark contrast to other real estate investors who box themselves into investing in a handful of states, a couple of property types, and without flexibility to invest across the capital structure.</p>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="card shadow-none mb-3">
                                    <div class="card-header card-collapse" id="basicsHeadingTwo">
                                        <a class="btn btn-link btn-block d-flex justify-content-between card-btn collapsed bg-white px-0" href="javascript:;" role="button" data-toggle="collapse" data-target="#basicsCollapseTwo" aria-expanded="false" aria-controls="basicsCollapseTwo">
                                            We compete where the competition is limited
                                            <span class="card-btn-toggle">
                                            <span class="card-btn-toggle-default">&plus;</span>
                                            <span class="card-btn-toggle-active">&minus;</span>
                                            </span>
                                        </a>
                                    </div>
                                    <div id="basicsCollapseTwo" class="collapse" aria-labelledby="basicsHeadingTwo" data-parent="#basicsAccordion">
                                        <div class="card-body px-0">
                                            <p>We are disciplined lower middle market real estate investors that focus on deals that we believe are too small for institutions and too large for individuals. This greatly increases deal flow and decreases competition. The lower middle market represents 80% of the market and only 20% of the capital. In contrast, the market above the lower middle market (where most real estate investors compete) encompasses 20% of transactions and 80% of the capital.</p>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="card shadow-none mb-3">
                                    <div class="card-header card-collapse" id="basicsHeadingThree">
                                        <a class="btn btn-link btn-block d-flex justify-content-between card-btn collapsed bg-white px-0" href="javascript:;" role="button" data-toggle="collapse" data-target="#basicsCollapseThree" aria-expanded="false" aria-controls="basicsCollapseThree">
                                            We require a wide margin of safety
                                            <span class="card-btn-toggle">
                                            <span class="card-btn-toggle-default">&plus;</span>
                                            <span class="card-btn-toggle-active">&minus;</span>
                                            </span>
                                        </a>
                                    </div>
                                    <div id="basicsCollapseThree" class="collapse" aria-labelledby="basicsHeadingThree" data-parent="#basicsAccordion">
                                        <div class="card-body px-0">
                                            <p>Margin of safety has long been ingrained in our culture. Our Founder was entrusted by his family and given the responsibility of managing the family’s wealth, with the goal of replicating a cash flow stream in perpetuity. His father told him “don’t lose your brother’s money” when they began to invest in real estate, and to this day capital preservation remains deeply ingrained in our Firm philosophy and investment process. We underwrite properties to deliver investors’ preferred rate of return under downside stressed scenarios. This is a higher level of safety compared to other real estate investors who may only require a 0% return in their downside risk analysis or only look at the upside. Additionally, we are an operator as well as an allocator, so we require control rights to remediate underperforming properties in joint ventures which we are equipped to handle directly. Other real estate investors don’t require these control rights and/or don’t have the expertise to execute them if something goes wrong.</p>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="card shadow-none mb-3">
                                    <div class="card-header card-collapse" id="basicsHeadingFour">
                                        <a class="btn btn-link btn-block d-flex justify-content-between card-btn collapsed bg-white px-0" href="javascript:;" role="button" data-toggle="collapse" data-target="#basicsCollapseFour" aria-expanded="false" aria-controls="basicsCollapseFour">
                                            We invest like an owner, not an allocator
                                            <span class="card-btn-toggle">
                                            <span class="card-btn-toggle-default">&plus;</span>
                                            <span class="card-btn-toggle-active">&minus;</span>
                                            </span>
                                        </a>
                                    </div>
                                    <div id="basicsCollapseFour" class="collapse" aria-labelledby="basicsHeadingFour" data-parent="#basicsAccordion">
                                        <div class="card-body px-0">
                                            <p>Other real estate investors allocate capital to deal sponsors or, if investing direct, are highly reliant on property managers. Therefore, the success of these real estate investors relies heavily on the success of a third-party sponsor or property manager. Our experience and expertise as an owner-operator enables us to create our own success and not be reliant on third parties even if they are used to execute on a daily basis.</p>
                                        </div>
                                    </div>
                                </div>
                            <!-- End Card -->
                    </div>
                </div>
        </div>
      </div>
    </div>
    
    @if($set->savings==1)
    <!--<div class="container">
      <div class="w-lg-85 mx-lg-auto">
        
        <div class="card p-5 bg-light">
          <div class="row align-items-md-center">
            <div class="col-md-9 mb-5 mb-md-0">
              <h3>{{__('Save for your future')}}</h3>
              <p>{{__('Plan ahead for miscelleanous expenses.')}}</p>

              
              <div class="row">
                <div class="col-sm-6">
                  <div class="media font-size-1 text-body mb-2">
                    <i class="fal fa-check-circle text-success mt-1 mr-2"></i>
                    <div class="media-body">
                    {{__('Birthday')}}
                    </div>
                  </div>
                  <div class="media font-size-1 text-body mb-2">
                    <i class="fal fa-check-circle text-success mt-1 mr-2"></i>
                    <div class="media-body">
                    {{__('Birth of Child')}}
                    </div>
                  </div>                  
                  <div class="media font-size-1 text-body mb-2">
                    <i class="fal fa-check-circle text-success mt-1 mr-2"></i>
                    <div class="media-body">
                    {{__('Rent')}}
                    </div>
                  </div>                  
                  <div class="media font-size-1 text-body mb-2">
                    <i class="fal fa-check-circle text-success mt-1 mr-2"></i>
                    <div class="media-body">
                    {{__('School fees')}}
                    </div>
                  </div>                  
                </div>

                <div class="col-sm-6">
                  <div class="media font-size-1 text-body mb-2">
                    <i class="fal fa-check-circle text-success mt-1 mr-2"></i>
                    <div class="media-body">
                    {{__('Christmas')}}
                    </div>
                  </div>
                  <div class="media font-size-1 text-body mb-2">
                    <i class="fal fa-check-circle text-success mt-1 mr-2"></i>
                    <div class="media-body">
                    {{__('Holiday')}}
                    </div>
                  </div>                  
                  <div class="media font-size-1 text-body mb-2">
                    <i class="fal fa-check-circle text-success mt-1 mr-2"></i>
                    <div class="media-body">
                    {{__('Salah')}}
                    </div>
                  </div>                  
                  <div class="media font-size-1 text-body mb-2">
                    <i class="fal fa-check-circle text-success mt-1 mr-2"></i>
                    <div class="media-body">
                    {{__('Wedding')}}
                    </div>
                  </div>
                </div>
              </div>
              
            </div>

            <div class="col-md-3 column-divider-md">
              <div class="pl-md-2">
                <h4>{{__('Interest Rates')}}</h4>
                <small class="mb-0">{{__('3 Months')}} - {{$set->s_3m}}%</small><br>
                <small class="mb-0">{{__('6 Months')}} - {{$set->s_6m}}%</small><br>
                <small class="mb-0">{{__('9 Months')}} - {{$set->s_9m}}%</small><br>
                <small class="mb-2">{{__('12 Months')}} - {{$set->s_12m}}%</small><br>
                <a class="font-size-1 font-weight-bold" href="{{route('user.savings')}}">{{__('Apply Now')}} <i class="fal fa-angle-right fa-sm ml-1"></i></a>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </div>-->
    @endif
<div style="background-color: #f2f2f2; border-top: 1px solid black; border-bottom: 1px solid black;">
    <div class="container space-2">
      <div class="row align-items-lg-center">
        <div class="col-lg-5 order-lg-2 mb-7 mb-lg-0">
          <div class="mb-5">
            <h2 class="mb-3">{{$ui->s2_title}}</h2>
            <p>{{$ui->s2_body}}</p>
          </div>
          @foreach($service as $val)
            <div class="media mb-4">
                <span class="icon icon-xs icon-soft-indigo icon-circle mr-3">
                    <i class="fal fa-check"></i>
                </span>
                <div class="media-body text-dark">
                    {{$val->title}}
                </div>
            </div>
          @endforeach
        </div>
        <div class="col-lg-7 order-lg-1">
            <div class="position-relative">
              <figure class="w-100">
                <img class="img-fluid" src="{{url('/')}}/asset/images/{{$ui->image4}}" alt="Image Description">
              </figure>
            </div>
          </div>
      </div>
    </div>
</div>
    
    <div style="margin-top: 80px;" class="container">
      <div class="w-lg-50 text-center mx-lg-auto mb-5">
        <span class="d-block small font-weight-bold text-cap mb-2"><h2>{{__('how it works')}}</h2></span>
      </div>
      <div class="row justify-content-lg-between align-items-lg-center">
        <div class="col-lg-4">
          <!-- Icon Block -->
          <ul class="step step-dashed mb-7">
            <li class="step-item">
              <div class="step-content-wrapper">
                <div class="step-content">
                  <h3 class="h4">{{$ui->h1_t}}</h3>
                  <p>{{$ui->h1_b}}</p>
                </div>
                </div>
            </li>
            <li class="step-item mb-0">
              <div class="step-content-wrapper">
                <div class="step-content">
                  <h3 class="h4">{{$ui->h2_t}}</h3>
                  <p>{{$ui->h2_b}}</p>
                </div>
              </div>
            </li>
          </ul>
          <!-- End Icon Block -->
        </div>
        <div class="col-lg-4 mb-9 mb-lg-0">
          <!-- Mockups -->
          <div class="position-relative max-w-100rem mx-auto">
            <div class="device device-iphone-x w-100 mx-auto">
              <img class="device-iphone-x-frame" src="{{url('/')}}/asset/images/{{$ui->image2}}" alt="Image Description">
            </div>
          </div>
          <!-- End Mockups -->
        </div>

        <div class="col-lg-4">
          <!-- Icon Block -->
          <ul class="step step-dashed mb-7">
            <li class="step-item">
              <div class="step-content-wrapper">
                <div class="step-content">
                  <h3 class="h4">{{$ui->h3_t}}</h3>
                  <p>{{$ui->h3_b}}</p>
                </div>
                </div>
            </li>
            <li class="step-item mb-0">
              <div class="step-content-wrapper">
                <div class="step-content">
                  <h3 class="h4">{{$ui->h4_t}}</h3>
                  <p>{{$ui->h4_b}}</p>
                </div>
              </div>
            </li>
          </ul>
          <!-- End Icon Block -->
        </div>
      </div>
    </div>
    @if($set->plan==1)
      @if($set->s_inv==1)
      <!--<div class="overflow-hidden" id="plans">
        <div class="container space-top-2 space-bottom-2 space-bottom-lg-2">
          <div class="w-md-80 w-lg-60 text-center mx-auto mb-9">
            <h2>{{$ui->plan_title}}</h2>
            <p>{{$ui->plan_body}}</p>
          </div>
        </div>
        <div class="container mt-n10">
          <div class="w-lg-100 mx-lg-auto position-relative">
            <div class="text-center">
              <ul class="nav nav-segment nav-pills scrollbar-horizontal mb-7" role="tablist">
                @foreach($category as $val)
                <li class="nav-item">
                  <a class="nav-link @if($loop->first) active @endif" id="pills-{{$val->id}}-code-features-tab" data-toggle="pill" href="#pills-{{$val->id}}-code-features" role="tab" aria-controls="pills-{{$val->id}}-code-features" aria-selected="true">{{$val->name}}</a>
                </li>
                @endforeach
              </ul>
            </div>
            <div class="tab-content pr-lg-4">
              @foreach($category as $val)
                <div class="tab-pane fade @if($loop->first)show active @endif" id="pills-{{$val->id}}-code-features" role="tabpanel" aria-labelledby="pills-{{$val->id}}-code-features-tab">
                  <div class="row position-relative z-index-2 mx-n2 mb-5 space-bottom-1">
                    @php
                      $plan=App\Models\Plans::whereStatus(1)->wherecat_id($val->id)->orderBy('min_deposit', 'DESC')->paginate(6);
                    @endphp
                    @if(count($plan)>0)
                      @foreach($plan as $val)
                        <div class="col-sm-6 col-md-4 px-6 mb-3">
                            <div class="card h-100">
                                <div class="card-header border-0 mb-0 text-center">
                                    <span class="d-block h3">{{$val->name}}</span>
                                </div>
                                <div class="card-body">
                                    @if($val->popular==1)
                                    <div class="media font-size-1 mb-3">
                                        <i class="fal fa-star icon-soft-warning mt-1 mr-2"></i>
                                        <div class="media-body">
                                        {{__('Most popular')}}
                                        </div>
                                    </div> 
                                    @endif                         
                                    <div class="media font-size-1 mb-3">
                                        <i class="fal fa-check text-success mt-1 mr-2"></i>
                                        <div class="media-body">
                                        {{$currency->symbol.number_format($val->min_deposit)}} {{__('Minimum Deposit')}}
                                        </div>
                                    </div>                              
                                    <div class="media font-size-1 mb-3">
                                        <i class="fal fa-check text-success mt-1 mr-2"></i>
                                        <div class="media-body">
                                        {{$currency->symbol.number_format($val->amount)}} {{__('Maximum Deposit')}}
                                        </div>
                                    </div>
                                    <div class="media font-size-1 mb-3">
                                        <i class="fal fa-check text-success mt-1 mr-2"></i>
                                        <div class="media-body">
                                        Runs for {{$val->duration}} {{$val->period}}@if($val->duration>1)s @endif
                                        </div>
                                    </div>                            
                                    <div class="media font-size-1 mb-3">
                                        <i class="fal fa-check text-success mt-1 mr-2"></i>
                                        <div class="media-body">
                                        {{$val->interest}}% {{__('Return on Investment')}}
                                        </div>
                                    </div>
                                    <div class="media font-size-1 mb-3">
                                        <i class="fal fa-check text-success mt-1 mr-2"></i>
                                        <div class="media-body">
                                        @if($val->ref_percent!=null){{$val->ref_percent}}% @else {{__('No')}} @endif{{__('Referral Bonus')}}
                                        </div>
                                    </div>
                                    <div class="media font-size-1 mb-3">
                                        <i class="fal fa-check text-success mt-1 mr-2"></i>
                                        <div class="media-body">
                                        @if($val->bonus!=null){{$val->bonus}}% @else {{__('No')}} @endif{{__('Investment Bonus')}}
                                        </div>
                                    </div>
                                    <div class="media font-size-1 mb-3">
                                        <i class="fal fa-check text-success mt-1 mr-2"></i>
                                        <div class="media-body">
                                        @if($val->claim==1) {{__('Access to Profit anytime')}} @else {{__('Access to profit at end of plan')}} @endif
                                        </div>
                                    </div>                               
                                    <div class="media font-size-1 mb-3">
                                        <i class="fal fa-check text-success mt-1 mr-2"></i>
                                        <div class="media-body">
                                        @if($val->recurring==1) {{__('Recurring capital investment')}} @else {{__('No recurring capital investment')}} @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer border-0">
                                  <a href="{{route('register')}}" class="btn btn-soft-primary btn-block transition-3d-hover">{{__('Get Started')}}</a>
                                </div>
                            </div>
                        </div>
                      @endforeach
                    @else
                    <div class="col-md-12 col-lg-12 mb-3 mb-md-5 mb-lg-0">
                        <span class="d-block small text-dark-70 font-weight-bold text-center text-cap mb-2">Nothing Found</span>
                    </div>
                    @endif
                  </div>
                </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>-->
      @endif
      @if($set->p_inv==1)
      <!--<div class="card {{$set->default_color}} rounded mx-3 mx-xl-10 space-bottom-3">
          <div class="container-xl container-fluid space-1 space-md-2 px-4 px-md-8 px-lg-10">
              <div class="px-3">
              
              <div class="w-md-80 w-lg-50 text-center mx-md-auto mb-5 mb-md-9">
                  <span class="d-block small text-light font-weight-bold text-cap mb-2">{{__('INVEST IN COMPANIES')}}</span>
                  <h2 class="text-light">{{__('See how')}} {{$set->site_name}} {{__('is helping people get organized and work smarter')}}</h2>
              </div>
              
              <div class="text-center">
                <ul class="nav nav-segment nav-pills scrollbar-horizontal mb-7" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="pills-one-code-features-tab" data-toggle="pill" href="#pills-one-code-features" role="tab" aria-controls="pills-one-code-features" aria-selected="true">Running</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="pills-two-code-features-tab" data-toggle="pill" href="#pills-two-code-features" role="tab" aria-controls="pills-two-code-features" aria-selected="false">Coming Soon</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="pills-three-code-features-tab" data-toggle="pill" href="#pills-three-code-features" role="tab" aria-controls="pills-three-code-features" aria-selected="false">Matured</a>
                  </li>
                </ul>
              </div>
              
              <div class="tab-content pr-lg-4">
                <div class="tab-pane fade show active" id="pills-one-code-features" role="tabpanel" aria-labelledby="pills-one-code-features-tab">
                  <div class="row">
                    @if(count($open)>0)
                      @foreach($open as $val)
                        <div class="col-md-6 col-lg-4 mb-3 mb-md-5 mb-lg-5">
                          <a href="{{route('check.plan', ['id' => $val->slug])}}">
                            <div class="card h-100">
                              <div class="card-body">
                                <h5 class="card-title mb-2">{{$val->name}}</h5>
                                <small class="card-text">{!!  str_limit($val->description, 100);!!}</small>
                                <small class="card-text"><span class="text-success">{{$val->interest}}%</span> {{__('Returns in')}} {{$val->duration.' '.$val->period}}</small>
                                <small class="card-text"><span class="text-success">{{$currency->symbol.$val->price}}</span> {{__('per Unit')}}</small>
                              </div>
                            </div>
                          </a>
                        </div>
                      @endforeach
                      @else
                      <div class="col-md-12 col-lg-12 mb-3 mb-md-5 mb-lg-0">
                          <span class="d-block small text-dark-70 font-weight-bold text-center text-cap mb-2">Nothing Found</span>
                      </div>
                      @endif
                  </div> 
                </div>                  
                <div class="tab-pane fade" id="pills-two-code-features" role="tabpanel" aria-labelledby="pills-two-code-features-tab">
                  <div class="row">
                    @if(count($coming)>0)
                      @foreach($coming as $val)
                        <div class="col-md-6 col-lg-4 mb-3 mb-md-5 mb-lg-5">
                          <a href="{{route('check.plan', ['id' => $val->slug])}}">
                            <div class="card h-100">
                              <div class="card-body">
                                <h5 class="card-title mb-2">{{$val->name}}</h5>
                                <small class="card-text">{!!  str_limit($val->description, 100);!!}</small>
                                <small class="card-text"><span class="text-success">{{$val->interest}}%</span> {{__('Returns in')}} {{$val->duration.' '.$val->period}}</small>
                                <small class="card-text"><span class="text-success">{{$currency->symbol.$val->price}}</span> {{__('per Unit')}}</small>
                              </div>
                            </div>
                          </a>
                        </div>
                      @endforeach
                      @else
                      <div class="col-md-12 col-lg-12 mb-3 mb-md-5 mb-lg-0">
                          <span class="d-block small text-dark-70 font-weight-bold text-center text-cap mb-2">Nothing Found</span>
                      </div>
                      @endif
                  </div> 
                </div>                  
                <div class="tab-pane fade" id="pills-three-code-features" role="tabpanel" aria-labelledby="pills-three-code-features-tab">
                  <div class="row">
                    @if(count($closed)>0)
                    @foreach($closed as $val)
                      <div class="col-md-6 col-lg-4 mb-3 mb-md-5 mb-lg-5">
                        <a href="{{route('check.plan', ['id' => $val->slug])}}">
                          <div class="card h-100">
                            <div class="card-body">
                              <h5 class="card-title mb-2">{{$val->name}}</h5>
                              <small class="card-text">{!!  str_limit($val->description, 100);!!}</small>
                              <small class="card-text"><span class="text-success">{{$val->interest}}%</span> {{__('Returns in')}} {{$val->duration.' '.$val->period}}</small>
                              <small class="card-text"><span class="text-success">{{$currency->symbol.$val->price}}</span> {{__('per Unit')}}</small>
                            </div>
                          </div>
                        </a>
                      </div>
                    @endforeach
                    @else
                    <div class="col-md-12 col-lg-12 mb-3 mb-md-5 mb-lg-0">
                        <span class="d-block small text-dark-70 font-weight-bold text-center text-cap mb-2">Nothing Found</span>
                    </div>
                    @endif
                  </div> 
                </div>
              </div>
              
              </div>
          </div>
      </div>-->
      @endif
    @endif
    @if($set->review==1)
      @if(count($review)>0)
<div style="background-color: #f2f2f2; border-top: 1px solid black; border-bottom: 1px solid black;">
        <div class="container space-top-2 space-top-lg-3">
          <!-- Title -->
          <div class="w-md-80 w-lg-50 text-center mx-md-auto mb-5 mb-md-9">
              <span class="d-block small text-dark-70 font-weight-bold text-cap mb-2">{{__('Reviews')}}</span>
              <h2 class="text-dark">{{__('VALUE ADD REAL ESTATE INVESTING')}}</h2>
          </div>
          <!-- End Title -->

          <!-- Testimonials Section -->
          <div class="">
            <!-- Testimonials -->
            <div class="js-slick-carousel slick slick-equal-height ie-slick-equal-height slick-gutters-3"
              data-hs-slick-carousel-options='{
                  "prevArrow": "<span class=\"fal fa-arrow-left slick-arrow slick-arrow-primary-white slick-arrow-left slick-arrow-centered-y shadow-soft rounded-circle ml-n2\"></span>",
                  "nextArrow": "<span class=\"fal fa-arrow-right slick-arrow slick-arrow-primary-white slick-arrow-right slick-arrow-centered-y shadow-soft rounded-circle mr-n2\"></span>",
                  "slidesToShow": 3,
                  "infinite": true,
                  "dots": true,
                  "dotsClass": "slick-pagination slick-pagination-white d-none mt-5",
                  "responsive": [{
                  "breakpoint": 992,
                  "settings": {
                      "slidesToShow": 3
                      }
                  }, {
                  "breakpoint": 768,
                  "settings": {
                      "slidesToShow": 1
                      }
                  }, {
                  "breakpoint": 554,
                  "settings": {
                      "slidesToShow": 1
                  }
                  }]
              }'>
              @foreach($review as $val)
                <div class="js-slide mb-4">
                  <div class="card h-100">
                    <div class="card-body">
                      <div class="mb-auto">
                        <p class="text-dark mb-0">{{$val->review}}</p>
                      </div>
                    </div>

                    <div class="card-footer border-0 bg-transparent pt-0 px-5 pb-5">
                      <div class="media align-items-center">
                        <div class="avatar avatar-circle mr-3">
                          <img class="avatar-img" src="{{url('/')}}/asset/review/{{$val->image_link}}" alt="Image Description">
                        </div>
                        <div class="media-body">
                          <h4 class="mb-0">{{$val->name}}</h4>
                          <small class="d-block text-body">{{$val->occupation}}</small>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              @endforeach
              <!-- End Testimonials -->
            </div>
          </div>
        </div>
      @endif
    @endif
    @if($set->stat==1)
      <div style="margin-bottom: 100px;" class="container space-top-1 space-top-md-2">
        <div class="row justify-content-lg-center">
          <div class="col-md-4 mb-7 mb-lg-0">
            <div data-aos="fade-up" data-aos-delay="100" class="aos-init aos-animate">
              <!-- Stats -->
              <div class="text-center px-md-3 px-lg-7">
                <figure class="mb-3">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"  width="71" height="64"><path d="M32 0C14.3 0 0 14.3 0 32S14.3 64 32 64V448c-17.7 0-32 14.3-32 32s14.3 32 32 32H208V448h96v64H480c17.7 0 32-14.3 32-32s-14.3-32-32-32V64c17.7 0 32-14.3 32-32s-14.3-32-32-32H32zm80 96h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H112c-8.8 0-16-7.2-16-16V112c0-8.8 7.2-16 16-16zm112 16c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H240c-8.8 0-16-7.2-16-16V112zM368 96h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H368c-8.8 0-16-7.2-16-16V112c0-8.8 7.2-16 16-16zM96 208c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H112c-8.8 0-16-7.2-16-16V208zm144-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H240c-8.8 0-16-7.2-16-16V208c0-8.8 7.2-16 16-16zm112 16c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H368c-8.8 0-16-7.2-16-16V208zm-3 152.2c3.3 12.8-7.8 23.8-21 23.8H184c-13.3 0-24.3-10.9-21-23.8c10.6-41.5 48.2-72.2 93-72.2s82.5 30.7 93 72.2z"/></svg>
                </figure>
                <span class="text-dark font-weight-bold"><h3>{{__('About Platinum Wealth Trade')}}</h3></span> <p class="mb-0">{{__('Disciplined investment underwriting focused on properties below the institutional range in growing markets across the United States')}}</p>
              </div>
              <!-- End Stats -->
            </div>
          </div>

          <div class="col-md-4 mb-7 mb-lg-0">
            <div data-aos="fade-up" class="aos-init aos-animate">
              <!-- Stats -->
              <div class="text-center column-divider-md column-divider-20deg px-md-3 px-lg-7">
                <figure class="mb-3">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" width="71" height="64"><path d="M9.4 9.4C21.9-3.1 42.1-3.1 54.6 9.4L160 114.7V96c0-17.7 14.3-32 32-32s32 14.3 32 32v96c0 4.3-.9 8.5-2.4 12.2c-1.6 3.7-3.8 7.3-6.9 10.3l-.1 .1c-3.1 3-6.6 5.3-10.3 6.9c-3.8 1.6-7.9 2.4-12.2 2.4H96c-17.7 0-32-14.3-32-32s14.3-32 32-32h18.7L9.4 54.6C-3.1 42.1-3.1 21.9 9.4 9.4zM384 256c0 35.3-28.7 64-64 64s-64-28.7-64-64s28.7-64 64-64s64 28.7 64 64zM114.7 352H96c-17.7 0-32-14.3-32-32s14.3-32 32-32h96 0l.1 0c8.8 0 16.7 3.6 22.5 9.3l.1 .1c3 3.1 5.3 6.6 6.9 10.3c1.6 3.8 2.4 7.9 2.4 12.2v96c0 17.7-14.3 32-32 32s-32-14.3-32-32V397.3L54.6 502.6c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L114.7 352zM416 96c0-17.7 14.3-32 32-32s32 14.3 32 32v18.7L585.4 9.4c12.5-12.5 32.8-12.5 45.3 0s12.5 32.8 0 45.3L525.3 160H544c17.7 0 32 14.3 32 32s-14.3 32-32 32H448c-8.8 0-16.8-3.6-22.6-9.3l-.1-.1c-3-3.1-5.3-6.6-6.9-10.3s-2.4-7.8-2.4-12.2l0-.1v0V96zM525.3 352L630.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L480 397.3V416c0 17.7-14.3 32-32 32s-32-14.3-32-32V320v0c0 0 0-.1 0-.1c0-4.3 .9-8.4 2.4-12.2c1.6-3.8 3.9-7.3 6.9-10.4c5.8-5.8 13.7-9.3 22.5-9.4c0 0 .1 0 .1 0h0 96c17.7 0 32 14.3 32 32s-14.3 32-32 32H525.3z"/></svg>
                </figure>
                <span class="text-dark font-weight-bold"><h3>{{__('Strategies')}}</h3></span> <p class=" mb-0">{{__('Platinum Wealth Trade was established with a long-term orientation to focus on value-based real estate investments with favorable risk/reward characteristics.')}}</p>
              </div>
              <!-- End Stats -->
            </div>
          </div>

          <div class="col-md-4">
            <div data-aos="fade-up" data-aos-delay="100" class="aos-init aos-animate">
              <!-- Stats -->
              <div class="text-center column-divider-md column-divider-20deg px-md-3 px-lg-7">
                <figure class="mb-3">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" width="71" height="64"><path d="M408 120c0 54.6-73.1 151.9-105.2 192c-7.7 9.6-22 9.6-29.6 0C241.1 271.9 168 174.6 168 120C168 53.7 221.7 0 288 0s120 53.7 120 120zm8 80.4c3.5-6.9 6.7-13.8 9.6-20.6c.5-1.2 1-2.5 1.5-3.7l116-46.4C558.9 123.4 576 135 576 152V422.8c0 9.8-6 18.6-15.1 22.3L416 503V200.4zM137.6 138.3c2.4 14.1 7.2 28.3 12.8 41.5c2.9 6.8 6.1 13.7 9.6 20.6V451.8L32.9 502.7C17.1 509 0 497.4 0 480.4V209.6c0-9.8 6-18.6 15.1-22.3l122.6-49zM327.8 332c13.9-17.4 35.7-45.7 56.2-77V504.3L192 449.4V255c20.5 31.3 42.3 59.6 56.2 77c20.5 25.6 59.1 25.6 79.6 0zM288 152c22.1 0 40-17.9 40-40s-17.9-40-40-40s-40 17.9-40 40s17.9 40 40 40z"/></svg>
                </figure>
                <span class="text-dark font-weight-bold"><h3>{{__('Portfolio')}}</h3></span> <p class=" mb-0">{{__('Platinum Wealth Trade and its affiliates have invested over $2.7 billion in more than 17 million square feet, including 19,000 multifamily units.')}}</p>
              </div>
              <!-- End Stats -->
            </div>
          </div>
        </div>
      </div>
</div>
    @endif
    @if($set->team==1)
        @if(count($team)>0)
            <div class="container space-2">
                <!-- Title -->
                <div class="w-md-80 w-lg-50 text-center mx-md-auto mb-5 mb-md-9">
                    <span class="d-block small font-weight-bold text-cap mb-2">{{__('Our Team')}}</span>
                    <h2>{{$ui->team}}</h2>
                </div>
                <!-- End Title -->

                <!-- Team Carousel -->
                <div class="js-slick-carousel slick slick-gutters-3 mb-5 mb-lg-3"
                    data-hs-slick-carousel-options='{
                        "slidesToShow": 4,
                        "dots": true,
                        "dotsClass": "slick-pagination d-lg-none",
                        "responsive": [{
                        "breakpoint": 1200,
                            "settings": {
                            "slidesToShow": 3
                            }
                        }, {
                        "breakpoint": 992,
                        "settings": {
                            "slidesToShow": 2
                            }
                        }, {
                        "breakpoint": 768,
                        "settings": {
                            "slidesToShow": 2
                            }
                        }, {
                        "breakpoint": 554,
                        "settings": {
                            "slidesToShow": 1
                        }
                        }]
                    }'>
                    @foreach($team as $val)
                    <div class="js-slide pb-6">
                    <!-- Team -->
                    <img class="img-fluid w-100 rounded" src="{{url('/')}}/asset/review/{{$val->image}}" alt="Image Description">
                    <div class="card mt-n7 mx-3">
                        <div class="card-body text-center">
                        <h4 class="mb-1">{{$val->name}}</h4>
                        <p class="font-size-1 mb-0">{{$val->position}}</p>
                        </div>
                    </div>
                    <!-- End Team -->
                    </div>
                    @endforeach
                </div>
                <!-- End Team Carousel -->
            </div>
        @endif
    @endif

@stop