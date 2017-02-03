<br/>
<br/>
<br/>
<style>
@media (min-width: 768px) { 
.logo-seperation{
	margin-left:100px;
}
}
</style>
<hr class="separation-line"/>
<div class="col-md-12 text-center" style=" padding: 20px 0 20px 0;">
	<a href="http://airavata.apache.org/" target="_blank">
		<img width="200px" src="{{URL::to('/')}}/themes/{{Session::get('theme')}}/assets/img/poweredby-airavata-logo.png">
	</a>
	<a href="http://www.nsf.gov/" target="_blank" class="logo-seperation">
		<img width="200px" src="{{URL::to('/')}}/themes/{{Session::get('theme')}}/assets/img/nsf-logo.png">
	</a>
	<a href="https://www.xsede.org/" target="_blank" class="logo-seperation">
		<img width="160px" src="{{ URL::to('/') }}/themes/{{Session::get('theme')}}/assets/img/powered-by-xsede.gif">
	</a>
</div>
<div class="col-md-12 text-center" style="background:rgba(125,165,175,0.4); padding: 20px 0 20px 0;">

	<a href="http://www.uthscsa.edu/" target="_blank">
		<img width="200px" src="{{URL::to('/')}}/themes/{{Session::get('theme')}}/assets/img/uthscsa-logo.png">
	</a>
	<a href="http://www.iu.edu/" target="_blank" class="logo-seperation">
        <img width="200px" src="{{ URL::to('/') }}/themes/{{Session::get('theme')}}/assets/img/iu-logo.png"/>
	</a>
	<a href="http://www.sdsc.edu/" target="_blank" class="logo-seperation">
		<img width="160px" src="{{URL::to('/')}}/themes/{{Session::get('theme')}}/assets/img/sdsc-logo.png">
	</a>
</div>


<!-- 

<div class="col-md-12">
<h3 class="text-center">Seagrid has evolved from previous invaluable collaborations.</h3>
</div>
<div class="blue-bg col-md-12 old-collaborators">
	<div class="col-md-2">
		<img src="https://gridchem.org/images/CCSlogo.gif">
	</div>
	<div class="col-md-2">
		<img src="https://gridchem.org/images/cctlogo_small.jpg">
	</div>
	<div class="col-md-2">
		<img src="https://gridchem.org/images/ncsalogo.gif">
	</div>
	<div class="col-md-2">
		<img src="https://gridchem.org/images/tacclogo_small.png">
	</div>
	<div class="col-md-2">
		<img src="https://gridchem.org/images/osclogo_small.gif">
	</div>
</div>

-->

<script type="text/javascript">
	if( bw > 767){
        $(".hero-unit").height( bw*0.50);
    }
</script>