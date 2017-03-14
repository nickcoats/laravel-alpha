@extends('app')
@section('content')
<section id="home-parallax" class="parallax" data-stellar-background-ratio="0.5" style="background-position: 0% 0%;">
  <div class="container">
    <div class="center-heading">
      <h1 class="white">{{ $active_page }}</h1>
    </div>
  </div>
</section>
<div class="divide40 hidden-xs hidden-sm"></div>
<div class="divide10 hidden-md hidden-lg hidden-xl"></div>
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="center-heading">
        <p class="lead justify">
          Alpha Capital Management Group has the experience and industry insight to tailor retirement plans to our clients’ specific needs. We provide our clients with a process and procedures that is built on industry best practices. Our goal is to offer access to investments that help our plan participants reach their ultimate goal of preparing for a stable retirement. We contribute our experience in financial aspects so that you can focus on your expertise in the field that has made you successful.
          In these times of change, it is important to have a firm that understands the design and operational features of your company’s plan. As a partner of Alpha Capital Management Group, your retirement plan advisor will take the time to get to know your company and employees, providing assistance with designing a plan that fits their specific needs.
        </p>
      </div>
    </div>
  </div>
</div>
<div class="divide20 hidden-xs hidden-sm"></div>
<div class="divide10 hidden-md hidden-lg hidden-xl"></div>
<div class="container hidden-xs hidden-sm">
  <div class="row">
    <div class="col-md-5">
      <div class="tabs-container">
        <div class="tabs-left">
          <ul class="nav nav-tabs services-toggle">
            <li class="active"><a class="serv-tog" data-toggle="tab" href="#tab-1" aria-expanded="true">Service, Provider & Vendor Plan Benchmarking</a></li>
            <li class=""><a class="serv-tog" data-toggle="tab" href="#tab-2" aria-expanded="false">Fee Disclosure & Analysis</a></li>
            <li class=""><a class="serv-tog" data-toggle="tab" href="#tab-3" aria-expanded="false">Plan Design Services</a></li>
            <li class=""><a class="serv-tog" data-toggle="tab" href="#tab-4" aria-expanded="false">Investment Review & Due Diligence</a></li>
            <li class=""><a class="serv-tog" data-toggle="tab" href="#tab-5" aria-expanded="false">Employee Education & Communication Services</a></li>
            <li class=""><a class="serv-tog" data-toggle="tab" href="#tab-6" aria-expanded="false">Fiduciary Vault & Document Storage</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-md-7 tab-content ">
      <div id="tab-1" class="tab-pane active">
        <h6>Service, Provider & Vendor Plan Benchmarking</h6>
        <p class="justify">Do you know if the fees you are paying to your investment and service providers are above average? We can compare your plan's expenses to industry norms. If you are paying too much, we can represent you in the negotiation of fees and, if necessary, develop recommendations for more cost-efficient providers. There is much more than just comparing fees to do a full comprehensive benchmark.</p>
        <h6>Benchmarking Checklist:</h6>
        <ul>
          <li>Plan Assets</li>
          <li>Number Of Participants</li>
          <li>Last Date Plan Was Quoted</li>
          <li>Company Industry</li>
          <li>Plan Type</li>
          <li>Auto Enrollment</li>
          <li>Employee Match</li>
          <li>Percent Of Plan Asset In Index Funds/Percent Of Plan Assets In Managed Funds</li>
        </ul>
        <p class="justify">Our extensive knowledge and expertise in retirement plan services can help you evaluate your plan’s service providers for effectiveness and cost efficiency. As plan fiduciaries, you are responsible for ongoing monitoring of vendor relationships as one of your fiduciary duties, a responsibility you may delegate to us. We can also assist in searching for new service providers, negotiating with existing service providers, and developing RFPs.</p>
        <p class="justify">Department of Labor regulations under ERISA, and specifically section 408(b)(2), require that plan sponsors know how much they are paying, if it is "reasonable", and how you came to the conclusion.  It can be hard to do that on your own, team up with Alpha Capital Management Group to help you!</p>
      </div>
      <div id="tab-2" class="tab-pane">
        <h6>Fee Disclosure & Analysis</h6>
        <p class="justify">In order to determine how “Competitive or Reasonable” your plans fees are, it is important to understand how to compare your plan to the market.</p>
        <h6>Things to Consider:</h6>
        <ul>
          <li>Plan and participant level services provided</li>
          <li>How well the plan is preforming – participants success measures</li>
          <li>Plan size and participants demographics</li>
          <li>Benchmark fees relative to peer groups</li>
          <li>Uncover hidden fees in your current plan</li>
          <li>Assist in fee negotiation</li>
        </ul>
        <p class="justify">As part of our services, we will help you review your investment expenses, record-keeping fees and administrative fees.</p>
        <p class="justify">Learn how managing fees and regular benchmarking will improve your plan, <a href="{{ url('contact') }}">contact us.</a></p>
      </div>
      <div id="tab-3" class="tab-pane">
        <h6>Plan Design Services</h6>
        <p class="justify">Keeping up with changes in the retirement plan industry can be daunting. Our job is to keep you informed of changes in legislation, best practices and industry regulation so you can review any impact they may have on your plan. We can also assist with plan compliance and perform essential ongoing review of your plan.</p>
      </div>
      <div id="tab-4" class="tab-pane">
        <h6>Investment Review & Due Diligence</h6>
        <p class="justify">Fulfilling your fiduciary responsibilities properly is key to managing liability. It’s important for your investment committee to understand their fiduciary duties and Alpha Capital Management Group LLC can educate the members on how to manage those obligations.</p>
        <h6>Investment policy statement review</h6>
        <p class="justify">Have you established goals for your plan? Is the plan designed to attain those goals? Our advisors assist you in developing an outline for your investment program that includes identifying allowable investments for the plan, establishing goals and objectives, determining risk parameters and setting service expectations.</p>
      </div>
      <div id="tab-5" class="tab-pane">
        <h6>Employee Education & Communication Services - Individual & Group Education</h6>
        <p class="justify">The best measure of the success of your retirement plan is how well it helps your employees prepare for retirement. Increasing plan utilization helps you address your fiduciary responsibilities while also helping your participants get “retirement ready.” To gauge how your plan measures up, we can perform a comparative analysis to determine its competiveness and overall effectiveness. Employee education is a key element in empowering your participants to be better prepared for retirement. We can assist in the development of strategies to help drive participation, encourage healthy deferral rates and drive overall appreciation for the plan.</p>
        <p class="justify">Sponsoring a successful retirement plan is an ongoing commitment. Helping your employees become financially healthy can make a real and lasting difference in their lives. Studies have shown a correlation between financial wellness and overall wellness, so it’s important to offer your participants the right tools, education and resources. We can help you maximize your plan design and investment offerings so your employees can participate in their retirement planning with confidence.</p>
        <h6>A Process, Not a Product.</h6>
      </div>
      <div id="tab-6" class="tab-pane">
        <h6>Fiduciary Vault & Document Storage</h6>
        <p class="justify">Alpha Capital Management Group LLC provides the expertise and specialized tools and resources to assist you in managing your fiduciary obligations, and assist your employees with retirement planning. Work With An Experienced Fiduciary Partner!</p>
        <p class="justify">Alpha Capital Management Group Fiduciary Vault is a proprietary documentation system to help plan sponsors. Fiduciary Vault is an electronic library for all of your plan-related documents that we would expect to be requested in an Internal Revenue Service or Department of Labor audit.</p>
        <p class="justify">We believe you will come to rely on Fiduciary Vault as an invaluable source of organization, efficiency and guidance as you manage your retirement plan on a daily basis. No longer will you need to track and file signed documents, or endlessly sift through folders to find a single needed document.</p>
        <p class="justify">We organize and securely archive all of your documents, even handling all necessary labeling or filing. Alpha Capital will also provide your company with electronic reminders and clear guidance on any needed participant notices and plan amendments.</p>
        <p class="justify">Alpha Capital Management Group Compliance Support Service help prepares your firm for an audit from the Internal Revenue Service or the Department of Labor. Working with your human resources team, we scrutinize your retirement plan procedures and your compliance with all regulations relating to plan documents, fiduciary requirements, participant notifications and employee education.</p>
        <p class="justify">We also provide you with a written report identifying best practices that may help improve your plan's compliance.</p>
        <p class="justify">Please contact us with any questions or if you would like help setting up a fiduciary vault. <a href="{{ url('contact') }}">Contact us today!</a></p>
      </div>
    </div>
  </div>
</div>
<div class="divide20 hidden-xs hidden-sm"></div>
<div class="container hidden-md hidden-lg hidden-xl">
  <div class="row">
    <div class="col-md-7 margin20 justify">
      <div class="panel-group" id="accordion">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#PLE">
                <i class="fa fa-plus-circle"></i> Plan Benchmarking
              </a>
            </h4>
          </div>
          <div id="PLE" class="panel-collapse collapse in">
            <div class="panel-body">
              <h6>Service, Provider & Vendor Plan Benchmarking</h6>
              <p>Do you know if the fees you are paying to your investment and service providers are above average? We can compare your plan's expenses to industry norms. If you are paying too much, we can represent you in the negotiation of fees and, if necessary, develop recommendations for more cost-efficient providers. There is much more than just comparing fees to do a full comprehensive benchmark.</p>
              <h6>Benchmarking Checklist:</h6>
              <ul>
                <li>Plan Assets</li>
                <li>Number Of Participants</li>
                <li>Last Date Plan Was Quoted</li>
                <li>Company Industry</li>
                <li>Plan Type</li>
                <li>Auto Enrollment</li>
                <li>Employee Match</li>
                <li>Percent Of Plan Asset In Index Funds/Percent Of Plan Assets In Managed Funds</li>
              </ul>
              <p>Our extensive knowledge and expertise in retirement plan services can help you evaluate your plan’s service providers for effectiveness and cost efficiency. As plan fiduciaries, you are responsible for ongoing monitoring of vendor relationships as one of your fiduciary duties, a responsibility you may delegate to us. We can also assist in searching for new service providers, negotiating with existing service providers, and developing RFPs.</p>
              <p>Department of Labor regulations under ERISA, and specifically section 408(b)(2), require that plan sponsors know how much they are paying, if it is "reasonable", and how you came to the conclusion.  It can be hard to do that on your own, team up with Alpha Capital Management Group to help you!</p>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#EP">
                <i class="fa fa-plus-circle"></i> Fee Disclosure & Analysis
              </a>
            </h4>
          </div>
          <div id="EP" class="panel-collapse collapse">
            <div class="panel-body">
              <p>In order to determine how “Competitive or Reasonable” your plans fees are, it is important to understand how to compare your plan to the market.</p>
              <h6>Things to Consider:</h6>
              <ul>
                <li>Plan and participant level services provided</li>
                <li>How well the plan is preforming – participants success measures</li>
                <li>Plan size and participants demographics</li>
                <li>Benchmark fees relative to peer groups</li>
                <li>Uncover hidden fees in your current plan</li>
                <li>Assist in fee negotiation</li>
              </ul>
              <p>As part of our services, we will help you review your investment expenses, record-keeping fees and administrative fees.</p>
              <p>Learn how managing fees and regular benchmarking will improve your plan, <a href="{{ url('contact') }}">contact us.</a></p>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordian" href="#LIPMET">
                <i class="fa fa-plus-circle"></i> Plan Design Services
              </a>
            </h4>
          </div>
          <div id="LIPMET" class="panel-collapse collapse">
            <div class="panel-body">
              <p>Keeping up with changes in the retirement plan industry can be daunting. Our job is to keep you informed of changes in legislation, best practices and industry regulation so you can review any impact they may have on your plan. We can also assist with plan compliance and perform essential ongoing review of your plan.</p>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#BLI">
                <i class="fa fa-plus-circle"></i> Review & Due Diligence
              </a>
            </h4>
          </div>
          <div id="BLI" class="panel-collapse collapse">
            <div class="panel-body">
              <h6>Investment Review & Due Diligence</h6>
              <p>Fulfilling your fiduciary responsibilities properly is key to managing liability. It’s important for your investment committee to understand their fiduciary duties and Alpha Capital Management Group LLC can educate the members on how to manage those obligations.</p>
              <h6>Investment policy statement review</h6>
              <p>Have you established goals for your plan? Is the plan designed to attain those goals? Our advisors assist you in developing an outline for your investment program that includes identifying allowable investments for the plan, establishing goals and objectives, determining risk parameters and setting service expectations.</p>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#LCNC">
                <i class="fa fa-plus-circle"></i> Individual & Group Education
              </a>
            </h4>
          </div>
          <div id="LCNC" class="panel-collapse collapse">
            <div class="panel-body">
              <h6>Employee Education & Communication Services - Individual & Group Education</h6>
              <p>The best measure of the success of your retirement plan is how well it helps your employees prepare for retirement. Increasing plan utilization helps you address your fiduciary responsibilities while also helping your participants get “retirement ready.” To gauge how your plan measures up, we can perform a comparative analysis to determine its competiveness and overall effectiveness. Employee education is a key element in empowering your participants to be better prepared for retirement. We can assist in the development of strategies to help drive participation, encourage healthy deferral rates and drive overall appreciation for the plan.</p>
              <p>Sponsoring a successful retirement plan is an ongoing commitment. Helping your employees become financially healthy can make a real and lasting difference in their lives. Studies have shown a correlation between financial wellness and overall wellness, so it’s important to offer your participants the right tools, education and resources. We can help you maximize your plan design and investment offerings so your employees can participate in their retirement planning with confidence.</p>
              <h6>A Process, Not a Product.</h6>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#LTC">
                <i class="fa fa-plus-circle"></i> Fiduciary & Document Storage
              </a>
            </h4>
          </div>
          <div id="LTC" class="panel-collapse collapse">
            <div class="panel-body">
              <h6>Fiduciary Vault & Document Storage</h6>
              <p>Alpha Capital Management Group LLC provides the expertise and specialized tools and resources to assist you in managing your fiduciary obligations, and assist your employees with retirement planning. Work With An Experienced Fiduciary Partner!</p>
              <p>Alpha Capital Management Group Fiduciary Vault is a proprietary documentation system to help plan sponsors. Fiduciary Vault is an electronic library for all of your plan-related documents that we would expect to be requested in an Internal Revenue Service or Department of Labor audit.</p>
              <p>We believe you will come to rely on Fiduciary Vault as an invaluable source of organization, efficiency and guidance as you manage your retirement plan on a daily basis. No longer will you need to track and file signed documents, or endlessly sift through folders to find a single needed document.</p>
              <p>We organize and securely archive all of your documents, even handling all necessary labeling or filing. Alpha Capital will also provide your company with electronic reminders and clear guidance on any needed participant notices and plan amendments.</p>
              <p>Alpha Capital Management Group Compliance Support Service help prepares your firm for an audit from the Internal Revenue Service or the Department of Labor. Working with your human resources team, we scrutinize your retirement plan procedures and your compliance with all regulations relating to plan documents, fiduciary requirements, participant notifications and employee education.</p>
              <p>We also provide you with a written report identifying best practices that may help improve your plan's compliance.</p>
              <p>Please contact us with any questions or if you would like help setting up a fiduciary vault. <a href="{{ url('contact') }}">Contact us today!</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="divide20"></div>
</div>
<!-- Services Bar -->
@include('partials._services_bar')
@endSection
