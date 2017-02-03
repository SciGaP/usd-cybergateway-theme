<div class="col-md-12 hero-unit scigap-top">
	<!--
	<h1>Hero Image</h1>
	<h2>This is a simple hero unit, a simple jumbotron-style component for calling extra 7
	attention to featured content or information.</h2>
	<p><a class="btn btn-primary btn-large">Learn more</a></p>
	-->
</div>

<div class="col-md-offset-2 col-md-8 breathing-space scigap-info">
	<h1 class="text-center">What is SciGaP?</h1>
	<p class="text-center" style="color:#cccccc;">
		Science Gateways are easy to build but hard to sustain. Key developers come and go. Scaling up to support growing user communities and more demanding usage takes a lot of work. Things go wrong at the worst times. SciGaP's goal is to help gateways address these problems.<br/>
	</p>
	<hr/>
	<div class="col-md-5">
	<p style="font-size:14px; margin-top:20px;">
		In SciGaP, we assume that gateway developers understand their user communities and know the scientific capabilities that they want to provide.  Underlying these specific gateway design features are generalized services for managing applications and workflows running on remote supercomputers, as well as other services. SciGaP is a hosted service with a public API that gateways can use to outsource these general capabilities.  Gateway developers can thus concentrate their efforts on building their scientific communities and not worry about operations.  We depict this goal in the image below.
	</p>
	</div>
	<div class="col-md-offset-1 col-md-5">
	<p style="font-size:14px; margin-top:20px;">
	Science Gateway Platform as a Service (SciGaP) provides application programmer interfaces (APIs) to hosted generic infrastructure services that can be used by domain science communities to create Science Gateways. The hosted services will support access to core infrastructure services required by Science Gateways, including: user identity, accounts, authorization, and access to multiple computational resources from campus, national, and international Grid and cloud efforts. Domain Gateway developers will be able to access these services via community-created interfaces.</p>

<p>You can read our official NSF abstract here. You can read more about our vision for  Science Gateway sustainability using SciGaP and related PaaS capabilities here.</p>
	</div>

</div>



<div class="col-md-12" style="background-color: #f5f7f9; padding-top:20px;">
	<div class="col-md-offset-2 col-md-8 text-center">
		<h1>Why use SciGaP?</h1>
		<p class="text-center"  style="color:#cccccc;">
			Science Gateways are virtual environments that dramatically accelerate scientific discovery by enabling scientific communities to utilize distributed computational and data resources (that is, cyberinfrastructure). Successful Science Gateways provide access to sophisticated and powerful resources, while shielding their users from the resources’ complexities.  
		</p>
		<hr/>
		<div class="row" style="margin:60px 0;">

			<div class="col-md-4">
				<span class="feature-icon-img"><img src="{{ URL::to('/') }}/themes/{{Session::get('theme')}}/assets/img/shield.png" width="60%"/></span>
				<h4>Shield from complexity <br/>of resources</h4>
			</div>
			<div class="col-md-4">
				<span class="feature-icon-img"><img src="{{ URL::to('/') }}/themes/{{Session::get('theme')}}/assets/img/fast.png"  width="60%"/></span>
				<h4>Accelerate scientific<br/> discovery</h4>
			</div>
			<div class="col-md-4">
				<span class="feature-icon-img"><img src="{{ URL::to('/') }}/themes/{{Session::get('theme')}}/assets/img/distributed.png" width="60%"/></span>
				<h4>Access distributed<br/> data resources </h4>
			</div>
		</div>
	</div>
</div>

<div class="col-md-offset-2 col-md-8 text-center" style="margin-top:50px;">
<h3>Create your Account Today!</h3>
<a href="{{ URL::to('/') }}/create">
<button class="btn btn-primary btn-lg" style="border-radius:0; background-color:#525760; margin-top:10px;">Create Account</button></a>
</div>

<div class="row">
    <div class="col-md-5 col-md-offset-1 text-center breathing-spaces" style="margin-top:50px; border-right: 1px solid #aaa;">
        <h3>Contact Us</h3>
        <div class="col-md-12">
            <span class="glyphicon glyphicon-envelope" style="font-size:6em;"></span><br/>
        You can contact Scigap by sending a mail to <a href="mailto:psd@scigap.atlassian.net">Scigap E-mail</a>
        </div>
        <div class="col-md-12">
            <span class="glyphicon glyphicon-edit" style="font-size:6em;"></span><br/>
            You can also create a <span id="serviceDeskHelp">JIRA ticket</span> by signing in <a href="https://scigap.atlassian.net/servicedesk/customer/portal/8" target="_blank">here</a>.
        </div>
    </div>
    <div class="col-md-5 text-center breathing-spaces" style="margin-top:50px;">
        <h3>Sponsorship</h3>
        <div class="col-md-12">                    
			<div class="textwidget"><img class="aligncenter" img width="200px" src="{{URL::to('/')}}/themes/{{Session::get('theme')}}/assets/img/nsf-logo.png" alt="">
			<p>SciGaP is funded by the National Science Foundation's Software Infrastructure for Sustained Innovation (SI2) program through award #'s 
<a href="http://www.nsf.gov/awardsearch/showAward?AWD_ID=1339774">1339774</a>, <a href="http://www.nsf.gov/awardsearch/showAward?AWD_ID=1339856">1339856</a>, and <a href="http://www.nsf.gov/awardsearch/showAward?AWD_ID=1339649">1339649</a>.</p></div>
		</div>            
    </div>
</div>
<!--
<div class="col-md-12 text-center blue-bg" style="padding:2.5%">
	<a href="https://seagrid.org/jnlp/seagrid.jnlp">
	<button style="padding:2.5%;" class="btn btn-primary col-md-offset-4 col-md-4">Download Desktop App</button>
	</a>
</div>
-->