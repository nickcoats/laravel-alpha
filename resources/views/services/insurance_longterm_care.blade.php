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
                  Alpha Capital Insurance Group specializes in Personal/Business Life insurance and Long Term Care Solutions. We focus specifically on the needs of our client and provide tailored cost effective solutions with thoughtful strategic planning.
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
                      <li class="active"><a class="serv-tog" data-toggle="tab" href="#tab-1" aria-expanded="true">Personal Life Insurance</a></li>
                      <li class=""><a class="serv-tog" data-toggle="tab" href="#tab-4" aria-expanded="false">Business Life Insurance</a></li>
                      <li class=""><a class="serv-tog" data-toggle="tab" href="#tab-5" aria-expanded="false">Life Changes. Needs Change.</a></li>
                      <li class=""><a class="serv-tog" data-toggle="tab" href="#tab-6" aria-expanded="false">Long Term Care</a></li>
                      <li class=""><a class="serv-tog" data-toggle="tab" href="#tab-3" aria-expanded="false">Use Life Insurance Proceeds To Minimize Estate Taxes</a></li>
                  </ul>
            </div>
          </div>
      </div>
      <div class="col-md-7 tab-content ">
          <div id="tab-1" class="tab-pane active">
            <h6>Personal Life Insurance</h6>
            <p class="justify">Personal insurance solutions are designed with the goal to provide protection and a benefit to clients and their families to maintain the standard of living they are accustomed to or to possibly provide a legacy for later generations.</p>
            <h6>These solutions may entail:</h6>
            <ul>
              <li>In force Policy Review</li>
              <li>Income Protection/Disability Insurance</li>
              <li>Supplemental Retirement Funding</li>
              <li>Wealth Transfer</li>
              <ul>
                <li>Charitable Planning</li>
                <li>Legacy Planning</li>
              </ul>
            </ul>
          </div>
          <div id="tab-2" class="tab-pane">
            <h6>Estate Planning</h6>
            <p class="justify">Proper Estate planning can get more to your family.</p>
            <p class="justify">What will happen to your estate at death?</p>
            <h6>Estate Assets could include the following:</h6>
            <ul>
              <li>Personal Property</li>
              <li>Real Estate</li>
              <li>Business Interest</li>
              <li>Life Insurance</li>
            </ul>
            <h6>In most cases your estate assets will be subject to Estate Settlement Costs such as:</h6>
            <ul>
              <li>Death Taxes</li>
              <li>Accounting Fees</li>
              <li>Appraiser's Fees</li>
              <li>Income Taxes</li>
              <li>Probate Taxes</li>
              <li>Attorney Fees</li>
              <li>Executor's Commission</li>
              <li>Court Costs</li>
            </ul>
            <p class="justify">After all the Estate Settlement Costs are taken out, remain assets will be proceeds to your family.</p>
            <p class="justify">How do you get more to your family? Use Life Insurance Proceeds to Minimize Estate Taxes.</p>
          </div>
          <div id="tab-3" class="tab-pane">
            <h6>Use Life Insurance Proceeds To Minimize Estate Taxes</h6>
            <p class="justify">Death taxes are due and payable in cash within nine months after a tax payer’s death.</p>
            <p class="justify">How are the death taxes paid?</p>
            <h6>Five tax payment options:</h6>
            <ul>
              <li>Borrow cash</li>
              <li>Pay cash</li>
              <li>Liquidate assets</li>
              <li>Use life insurance proceeds- The taxpayer can pay his or her estate settlement costs with life insurance.</li>
            </ul>
            <h6>Life insurance considerations:</h6>
            <ul>
              <li>Dollars are “discounted”. The taxpayer’s heirs get back more through the death benefit than the amount paid in.</li>
              <li>Payment of benefit is prompt.</li>
              <li>There is no income tax or capital gain on the proceeds.</li>
              <li>It can be estate tax free or capital gain on proceeds.</li>
              <li>Payments can be spread out rather than made all at once.</li>
              <li>It avoids al the disadvantages of the other four methods set forth above.</li>
              <li>The taxpayer must provide evidence of insurability to quality for a life insurance policy.</li>
              <li>Cost of insurance.</li>
            </ul>
            <h6>Next Steps</h6>
            <ul>
                <li>Project Potential Estate Taxes</li>
                <li>Consider Potential Liquidity Needs</li>
                <li>Lock In Insurability</li>
                <li>Review Wills And Trusts</li>
                <li>Review Existing Life Insurance Policies</li>
                <li>Review Existing Wealth Transfer Strategies</li>
                <li>Business Owners – Obtain Updated Business Valuation</li>
            </ul>
             <p class="justify">While some riders are part of an existing contract, many others may carry additional fees, charges and restrictions, and the policy holder should review their contract carefully before purchasing. Guarantees are based on the claims paying ability of the issuing insurance company.</p>
          </div>
          <div id="tab-4" class="tab-pane">
            <h6>Business Life Insurance</h6>
            <p class="justify">Individual products owned or provided by a business can prove to be powerful tools for the transfer of ownership by business owners as well as the recruitment, retention, and reward of influential individuals in an organization.</p>
            <h6>Some of the most common solutions include:</h6>
            <ul>
              <li>Buy/Sell Review</li>
              <li>Succession planning</li>
              <li>Key Person coverage</li>
              </li>Executive benefits, i.e. Non-Qualified Deferred Compensation Plans</li>
            </ul>
          </div>
          <div id="tab-5" class="tab-pane">
            <h6>Life Changes. Needs Change.</h6>
            <p class="justify">Life insurance Policy Reviews can protect what is really important to you. Events in life may create a need for additional insurance or current policies to be reviewed.</p>
            <h6>Business/career change</h6>
            <ul>
              <li>Career Change</li>
              <li>Business Start-up/Business Ownership</li>
              <li>Key man/ Buy-Sell Agreements</li>
            </ul>
            <h6>Health/aging</h6>
            <ul>
              <li>Positive change in health</li>
              <li>Term policies approaching expiration</li>
              <li>A need for more living benefits</li>
              <ul>
                <li>Critical illness</li>
                <li>Long term care</li>
              </ul>
            </ul>
            <h6>Family</h6>
            <ul>
              <li>Special Needs children/Parent Care</li>
              <li>College Savings</li>
              <li>Beneficiary updates</li>
              <li>Marriage or Divorce</li>
              <li>Home purchase</li>
              <li>New children/new adult children</li>
            </ul>
            <h6>Policy Features</h6>
            <ul>
              <li>Mortality improvements, changes in medical treatments, innovations in pharmaceuticals and new insurance products with a focus on living benefits</li>
              <li>Changes in tax law</li>
              <li>Trust owned policies never reviewed</li>
              <li>Policy performance</li>
              <li>Policy loans/withdrawal options</li>
              <li>100% return of premium option</li>
            </ul>
          </div>
          <div id="tab-6" class="tab-pane">
            <h6>Long Term Care</h6>
            <p class="justify">Approximately 70% of people over age 65 will require long term care. The average U.S. annual nursing home cost is $85,000 annually with an average of 3.95% annual increase*. This is a critical and often overlooked piece to a person’s estate and financial planning. You can reposition assets today to help protect your assets in the future.</p>
            <ul>
              <li>Consider the option to self-insure by repositioning current assets over 1,5,7 or 10 years and maintain control of your assets</li>
              <li>No restrictions on how you use your money – you choose the care you want</li>
              <li>Benefits are accessed tax free</li>
              <li>Concierge level claim service</li>
              <li>If you never need long term care:</li>
              <ul>
                <li>100% money back option</li>
                <li>Death proceeds to beneficiaries go tax free to a named beneficiary</li>
              </ul>
            </ul>
            <p class="justify">While some benefits of an Asset Based LTC policy are part of an existing contract, many others may carry additional fees, charges and restrictions, and the policy holder should review their contract carefully before purchasing. Guarantees are based on the claims paying ability of the issuing insurance company.</p>
            <p class="justify"><strong>*Sources:</strong> U.S. Administration on Aging, Department of Health and Human Services, Dec. 2012; Average annual U.S. nursing home costs in 2011 and in 20 years (1994 to 2011).Source: 2012 Sourcebook for Long-Term Care Insurance, American Association for Long-Term Care Insurance; 2012 Sourcebook for Long-Term Care Insurance, American Association for Long-Term Care Insurance.</p>
          </div>
        </div>
      </div>
    <div>
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
                <i class="fa fa-plus-circle"></i> Personal Life Insurance
              </a>
            </h4>
          </div>
          <div id="PLE" class="panel-collapse collapse in">
            <div class="panel-body">
              <p>Personal insurance solutions are designed with the goal to provide protection and a benefit to clients and their families to maintain the standard of living they are accustomed to or to possibly provide a legacy for later generations.</p>
              <h6>These solutions may entail:</h6>
              <ul>
                <li>In force Policy Review</li>
                <li>Income Protection/Disability Insurance</li>
                <li>Supplemental Retirement Funding</li>
                <li>Wealth Transfer</li>
                <ul>
                  <li>Charitable Planning</li>
                  <li>Legacy Planning</li>
                </ul>
              </ul>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#EP">
                <i class="fa fa-plus-circle"></i> Estate Planning
              </a>
            </h4>
          </div>
          <div id="EP" class="panel-collapse collapse">
            <div class="panel-body">
              <p>Proper Estate planning can get more to your family.</p>
              <p>What will happen to your estate at death?</p>
              <h6>Estate Assets could include the following:</h6>
              <ul>
                <li>Personal Property</li>
                <li>Real Estate</li>
                <li>Business Interest</li>
                <li>Life Insurance</li>
              </ul>
              <h6>In most cases your estate assets will be subject to Estate Settlement Costs such as:</h6>
              <ul>
                <li>Death Taxes</li>
                <li>Accounting Fees</li>
                <li>Appraiser's Fees</li>
                <li>Income Taxes</li>
                <li>Probate Taxes</li>
                <li>Attorney Fees</li>
                <li>Executor's Commission</li>
                <li>Court Costs</li>
              </ul>
              <p>After all the Estate Settlement Costs are taken out, remain assets will be proceeds to your family.</p>
              <p>How do you get more to your family? Use Life Insurance Proceeds to Minimize Estate Taxes.</p>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordian" href="#LIPMET">
                <i class="fa fa-plus-circle"></i> Minimize Estate Taxes
              </a>
            </h4>
          </div>
          <div id="LIPMET" class="panel-collapse collapse">
            <div class="panel-body">
              <h6>Use Life Insurance Proceeds To Minimize Estate Taxes</h6>
              <p>Death taxes are due and payable in cash within nine months after a tax payer’s death.</p>
              <p>How are the death taxes paid?</p>
              <h6>Five tax payment options:</h6>
              <ul>
                <li>Borrow cash</li>
                <li>Pay cash</li>
                <li>Liquidate assets</li>
                <li>Use life insurance proceeds- The taxpayer can pay his or her estate settlement costs with life insurance.</li>
              </ul>
              <h6>Life insurance considerations:</h6>
              <ul>
                <li>Dollars are “discounted”. The taxpayer’s heirs get back more through the death benefit than the amount paid in.</li>
                <li>Payment of benefit is prompt.</li>
                <li>There is no income tax or capital gain on the proceeds.</li>
                <li>It can be estate tax free or capital gain on proceeds.</li>
                <li>Payments can be spread out rather than made all at once.</li>
                <li>It avoids al the disadvantages of the other four methods set forth above.</li>
                <li>The taxpayer must provide evidence of insurability to quality for a life insurance policy.</li>
                <li>Cost of insurance.</li>
              </ul>
              <h6>Next Steps</h6>
              <ul>
                  <li>Project Potential Estate Taxes</li>
                  <li>Consider Potential Liquidity Needs</li>
                  <li>Lock In Insurability</li>
                  <li>Review Wills And Trusts</li>
                  <li>Review Existing Life Insurance Policies</li>
                  <li>Review Existing Wealth Transfer Strategies</li>
                  <li>Business Owners – Obtain Updated Business Valuation</li>
              </ul>
              <p class="justify">While some benefits of an Asset Based LTC policy are part of an existing contract, many others may carry additional fees, charges and restrictions, and the policy holder should review their contract carefully before purchasing. Guarantees are based on the claims paying ability of the issuing insurance company.</p>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#BLI">
                <i class="fa fa-plus-circle"></i> Business Life Insurance
              </a>
            </h4>
          </div>
          <div id="BLI" class="panel-collapse collapse">
            <div class="panel-body">
              <p>Individual products owned or provided by a business can prove to be powerful tools for the transfer of ownership by business owners as well as the recruitment, retention, and reward of influential individuals in an organization.</p>
              <h6>Some of the most common solutions include:</h6>
              <ul>
                <li>Buy/Sell Review</li>
                <li>Succession planning</li>
                <li>Key Person coverage</li>
                </li>Executive benefits, i.e. Non-Qualified Deferred Compensation Plans</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#LCNC">
                <i class="fa fa-plus-circle"></i> Life Changes. Needs Change.
              </a>
            </h4>
          </div>
          <div id="LCNC" class="panel-collapse collapse">
            <div class="panel-body">
              <p>Life insurance Policy Reviews can protect what is really important to you. Events in life may create a need for additional insurance or current policies to be reviewed.</p>
              <h6>Business/career change</h6>
              <ul>
                <li>Career Change</li>
                <li>Business Start-up/Business Ownership</li>
                <li>Key man/ Buy-Sell Agreements</li>
              </ul>
              <h6>Health/aging</h6>
              <ul>
                <li>Positive change in health</li>
                <li>Term policies approaching expiration</li>
                <li>A need for more living benefits</li>
                <ul>
                  <li>Critical illness</li>
                  <li>Long term care</li>
                </ul>
              </ul>
              <h6>Family</h6>
              <ul>
                <li>Special Needs children/Parent Care</li>
                <li>College Savings</li>
                <li>Beneficiary updates</li>
                <li>Marriage or Divorce</li>
                <li>Home purchase</li>
                <li>New children/new adult children</li>
              </ul>
              <h6>Policy Features</h6>
              <ul>
                <li>Mortality improvements, changes in medical treatments, innovations in pharmaceuticals and new insurance products with a focus on living benefits</li>
                <li>Changes in tax law</li>
                <li>Trust owned policies never reviewed</li>
                <li>Policy performance</li>
                <li>Policy loans/withdrawal options</li>
                <li>100% return of premium option</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#LTC">
                <i class="fa fa-plus-circle"></i> Long Term Care
              </a>
            </h4>
          </div>
          <div id="LTC" class="panel-collapse collapse">
            <div class="panel-body">
              <p>Approximately 70% of people over age 65 will require long term care. The average U.S. annual nursing home cost is $85,000 annually with an average of 3.95% annual increase*. This is a critical and often overlooked piece to a person’s estate and financial planning. You can reposition assets today to help protect your assets in the future.</p>
              <ul>
                <li>Consider the option to self-insure by repositioning current assets over 1,5,7 or 10 years and maintain control of your assets</li>
                <li>No restrictions on how you use your money – you choose the care you want</li>
                <li>Benefits are accessed tax free</li>
                <li>Concierge level claim service</li>
                <li>If you never need long term care:</li>
                <ul>
                  <li>100% money back option</li>
                  <li>Death proceeds to beneficiaries go tax free to a named beneficiary</li>
                </ul>
              </ul>
              <p>While some benefits of an Asset Based LTC policy are part of an existing contract, many others may carry additional fees, charges and restrictions, and the policy holder should review their contract carefully before purchasing. Guarantees are based on the claims paying ability of the issuing insurance company.</p>
              <p><strong>*Sources:</strong> U.S. Administration on Aging, Department of Health and Human Services, Dec. 2012; Average annual U.S. nursing home costs in 2011 and in 20 years (1994 to 2011).Source: 2012 Sourcebook for Long-Term Care Insurance, American Association for Long-Term Care Insurance; 2012 Sourcebook for Long-Term Care Insurance, American Association for Long-Term Care Insurance.</p>
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
<div class="row">
    <div class="col-md-12 text-center">
        <div class="divide10"></div>
        <p style="font-size: 12px;">Insurance products offered through Alpha Capital Insurance Group, an affiliated and separate entity of Alpha Capital Management Group. Licensed in CA,CO,FL,ID,NC,NV,OR,VA,WA.</p>
        <div class="divide10"></div>
    </div>
</div>
@endSection
