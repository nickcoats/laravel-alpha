<footer id="footer">
  <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-6 margin30">
          <div class="footer-col">
            <h3>Alpha Capital</h3>
            <p class="white">
                We embrace the wealth management process as we focus on your financial needs and goals - then map a strategy with the goal to help get you to your destination.
            </p>
            <a target="_blank" href="http://brokercheck.finra.org" style="display:inline-block">
              <img style="border:none;min-width:150px;max-width:300px;width:100%;height:100%;" src="http://cdn.finra.org/brokercheck2210/images/bc-box-check_xxsm_k.svg"/>
            </a>
          </div>
        </div><!--footer col-->
        <div class="hidden-xs hidden-s hidden-m col-md-6 col-sm-12 margin30">
          <div class="footer-col" style="margin-left: 20%;">
            <a href="{{ url('/') }}"><img src="{{ asset('img/white_alpha_logo.png') }}" class="img-responsive" alt="Alpha Capital Management" style="width: 300px; height: auto;"></a>
          </div>
        </div><!--footer col-->
        <div class="col-md-3 col-sm-6 margin30">
          <div class="footer-col">
            <h3>Contact</h3>
            <ul class="list-unstyled contact">
              <li>
              	<p>
              	<strong><i class="fa fa-map-marker"></i> Address:</strong>
              	<a href="https://www.google.com/maps/place/6465+Greenwood+Plaza+Blvd+%23625,+Centennial,+CO+80111/@39.5993503,-104.8957791,17z/data=!3m1!4b1!4m2!3m1!1s0x876c868890cb86a5:0x9f1405fe30b669e1" target="_blank">6465 Greenwood Plaza Blvd. Suite 625 Centennial, CO 80111</a>
              	</p>
              </li>
              <li>
              	<p><strong><i class="fa fa-envelope"></i> Mail Us:</strong>
              	<a href="mailto:iancampbell.kw@gmail.com">Info@AlphaCMG.com</a>
              	</p>
              </li>
              <li>
              	<p><strong><i class="fa fa-phone"></i> Phone:</strong>
              	<a href="tel://303-900-1919">(303) 900-1919</a>
              	</p>
              </li>
              <li>
              	<p><strong><i class="fa fa-print"></i> Fax</strong>
              	 (303) 600-0276
              	</p>
              </li>
            </ul>
          </div>
        </div><!--footer col-->
      </div>
      <div class="row">
        <div class="col-md-12 text-center">
          <div class="footer-btm">
            <a href="#" data-toggle="modal" data-target=".alpha_adv">To view ADV 2A Brochure click here.</a>
            Securities offered through LPL Financial, Member <a href="{{ url('http://www.finra.org') }}" target="_blank">FINRA</a>/<a href="{{ url('http://www.sipc.org') }}" target="_blank">SIPC</a>. Investment advice offered through Alpha Capital Management Group, LLC, a registered investment advisor and separate entity from LPL Financial.
            <a href="#" data-toggle="modal" data-target=".alpha_disclosures">Disclosures.</a>
            <br>
            <span>&copy; Alpha Capital Management Group.</span>
          </div>
        </div>
      </div>
    </div>
</footer><!--default footer end here-->

<!-- ADV Modal -->
<div class="modal fade alpha_adv" tabindex="-1" role="dialog" aria-labelledby="alpha_adv">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-content">
        <iframe src="{{ asset('pdf/alpha_capital_ADV.pdf#page=1&zoom=100') }}" width="800px" height="500px" ></iframe>
      </div>
    </div>
  </div>
</div>

<!-- Disclosures Modal -->
<div class="modal fade alpha_disclosures" tabindex="-1" role="dialog" aria-labelledby="alpha_adv">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="font-size: 32px; margin-top: -4px;"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Disclosures</h4>
        </div>
      <div class="modal-body">
          <p>
              Alpha Capital Management Group, LLC is a SEC registered investment advisor located in CO. Alpha Capital Management Group, LLC and its representatives are in compliance with the current filing requirements imposed upon registered investment advisors by those jurisdictions in which Alpha Capital Management Group, LLC maintains clients. Alpha Capital Management Group, LLC may only transact business in those states in which it is registered, or qualifies for an exemption or exclusion from registration requirements. Alpha Capital Management Group, LLC’s web site is limited to the dissemination of general information pertaining to its advisory services, together with access to additional investment related information, publications, and links. Accordingly, the publication of Alpha Capital Management Group, LLC’s web site on the Internet should not be construed by any consumer and/or prospective client as Alpha Capital Management Group, LLC’s solicitation to effect, or attempt to effect transactions in securities, or the rendering of personalized investment advice for compensation, over the Internet. Any subsequent, direct communication by Alpha Capital Management Group, LLC with a prospective client shall be conducted by a representative that is either registered or qualifies for an exemption or exclusion from registration in the state where the prospective client resides. For information pertaining to the registration status of Alpha Capital Management Group, LLC, please contact the SEC, FINRA or the state securities regulators for those states in which Alpha Capital Management Group, LLC maintains a filing. A copy of Alpha Capital Management Group, LLC’s current written disclosure statement discussing Alpha Capital Management Group, LLC’s business operations, service, and fees is available from Alpha Capital Management Group, LLC upon written request. Alpha Capital Management Group, LLC does not make any representations or warranties as to the accuracy, timeliness, suitability, completeness, or relevance of any information prepared by any unaffiliated third party, whether linked to Alpha Capital Management Group, LLC’s web site or incorporated herein, and takes no responsibility therefor. All such information is provided solely for convenience purposes only and all users thereof should be guided accordingly.
              <br><br>Past performance may not be indicative of future results. Therefore, no current or prospective client should assume that future performance of any specific investment or investment strategy (including the investments and/or investment strategies recommended or undertaken by Alpha Capital Management Group, LLC made reference to directly or indirectly by Alpha Capital Management Group, LLC in its web site, or indirectly by a link to an unaffiliated third party web site, will be profitable or equal the corresponding indicated performance level(s). Different types of investments involve varying degrees of risk, and there can be no assurance that any specific investment will either be suitable or profitable for a client or prospective client’s investment portfolio. Historical performance results for investment indices and/or categories generally do not reflect the deduction of transaction and/or custodial charges, the deductions of an investment management fee, nor the impact of taxes, the incurrence of which would have the effect of decreasing historical performance results. Certain portions of Alpha Capital Management Group, LLC’s web site (i.e. newsletters, articles, commentaries, etc.) may contain a discussion of, and/or provide access to, Alpha Capital Management Group, LLC’s (and those of other investment and non-investment professionals) positions and/or recommendations of a specific prior date. Due to various factors, including changing market conditions, such discussion may no longer be reflective of current position(s) and/or recommendations(s). Moreover, no client or prospective client should assume that any such discussion serves as the receipt of, or a substitute for, personalized advice from Alpha Capital Management Group, LLC, or form any other investment professional. Alpha Capital Management Group, LLC is neither an attorney nor an accountant, and no portion of the web site content should be interpreted as legal, accounting or tax advice.
              <br><br>To the extent that any client or prospective client utilizes any economic calculator or similar device contained within or linked to Alpha Capital Management Group, LLC’s web site, the client and/or prospective client acknowledges and understands that the information resulting from the use of any such calculator/device, is not, and should not be construed, in any manner whatsoever, as the receipt of, or a substitute for, personalized individual advice Alpha Capital Management Group, LLC, or from any other investment professional.
          </p>
          <p>
              <strong>Website Links</strong>
              <br><br>PLEASE NOTE: The information being provided is strictly as a courtesy. When you link to any of these web-sites provided here, you are leaving this site. Alpha Capital Management Group, LLC makes no representation as to the completeness or accuracy of information provided at these sites. Nor is the company liable for any direct or indirect technical or system issues or any consequences arising out of your access to or your use of third-party technologies, sites, information and programs made available through this site. When you access one of these sites, you are leaving Alpha Capital Management Group, LLC’s web-site and assume total responsibility and risk for your use of the sites you are linking to.
              <br><br>Alpha Capital Management Group, LLC is a state registered investment adviser.  Alpha Capital Management Group, LLC may only transact business or render personalized investment advice in those states and international jurisdictions where we are registered/filed notice or otherwise excluded or exempted from registration requirements. The purpose of this web site is for information distribution on products and services. Any communications with prospective clients residing in states or international jurisdictions where Alpha Capital Management Group, LLC and Registered Advisers are not registered or licensed shall be limited so as not to trigger registration or licensing requirements. Nothing on this web site should be construed as personalized investment advice, which can be provided only in one-on-one communications.
          </p>
      </div>
    </div>
  </div>
</div>
<!--scripts and plugins -->
<!--must need plugin jquery-->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<!--bootstrap js plugin-->
<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
<!--easing plugin for smooth scroll-->
<script src="{{ asset('js/jquery.easing.1.3.min.js') }}" type="text/javascript"></script>
<!--sticky header-->
<script type="text/javascript" src="{{ asset('js/jquery.sticky.js') }}"></script>
<!--flex slider plugin-->
<script src="{{ asset('js/jquery.flexslider-min.js') }}" type="text/javascript"></script>
<!--parallax background plugin-->
<script src="{{ asset('js/jquery.stellar.min.js') }}" type="text/javascript"></script>
<!--digit countdown plugin-->
<script src="{{ url('http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js') }}"></script>
<!--digit countdown plugin-->
<script src="{{ asset('js/jquery.counterup.min.js') }}" type="text/javascript"></script>
<!--on scroll animation-->
<script src="{{ asset('js/wow.min.js') }}" type="text/javascript"></script>
<!--owl carousel slider-->
<script src="{{ asset('js/owl.carousel.min.js') }}" type="text/javascript"></script>
<!--popup js-->
<script src="{{ asset('js/jquery.magnific-popup.min.js') }}" type="text/javascript"></script>
<!--you tube player-->
<script src="{{ asset('js/jquery.mb.YTPlayer.min.js') }}" type="text/javascript"></script>
<!--customizable plugin edit according to your needs-->
<script src="{{ asset('js/custom.js') }}" type="text/javascript"></script>
<!--sky form plugin js-->
<script src="{{ asset('sky-form/js/jquery.form.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('sky-form/js/jquery.validate.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/sky-forms-custom.js') }}" type="text/javascript"></script>

@if ($active_page == "News & Education")

<script type="text/javascript">
    $(document).ready( function(){
        // News & Education Filter Controls
        $(".posts-filter").click(function(event) {
            var category = "." + event.target.id;
            $(".blog-post").hide();
            $(category).show();
        });
        $("#all-posts").click(function() {
            $(".blog-post").show();
        });
    });
</script>

@endif

<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-66627492-1', 'auto');
	ga('send', 'pageview');
</script>
