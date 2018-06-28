


@section('content')
	
	<nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
	        <li class="active"><a href="{{ URL::to('/') }}"><span class='glyphicon glyphicon-home text-info'></span> Home<span class="sr-only">(current)</span></a></li>
	        <li><a href="{{ URL::to('bsi') }}"><span class='glyphicon glyphicon-file'></span> Blood Safety Indicator</a></li>
	        <li><a href="{{ URL::to('topten') }}"><span class='glyphicon glyphicon-tags' ></span> Top 10 Blood Donation</a></li>
	        <li><a href="{{ URL::to('checklist') }}"><span class='glyphicon glyphicon-pushpin'></span> BSF Checklist</a></li>
	        <li><a href="{{ URL::to('leadbsf') }}"><span class='glyphicon glyphicon-star-empty'></span> Lead BSF</a></li>
	        
	      </ul>
	      
	      <ul class="nav navbar-nav navbar-right">
	        <li><a href="{{ URL::to('login') }}"></a></li>
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>

	
	<div class="panel panel-default">
	  <div class="panel-heading"><p class='lavander'>GLOBAL DATABASE ON BLOOD SAFETY</p></div>
	  <div class="panel-body">
	    <p>
	    	The World Health Organization (WHO) programme on Blood Transfusion Safety would appreciate your kind cooperation in completing this questionnaire which has been designed to obtain information for the WHO Global Database on Blood Safety. 
	    	The GDBS was established by WHO to address global concerns about the availability, safety, and equitable accessibility of blood for transfusion. 
	    	It covers the four major components of the integrated strategy for blood safety advocated by WHO:
	    	<ul>
		    	<li>The establishment of well-organized, nationally-coordinated blood transfusion services with quality systems in all areas</li>
		    	<li>The collection of blood from voluntary non-remunerated blood donors from low-risk populations and the phasing out of family/replacement and paid donation</li>
		  		<li>The screening of all donated blood for transfusion-transmissible infections, including HIV, hepatitis B and C, syphilis and other infectious agents; blood grouping and compatibility testing</li>
		  		<li>A reduction in unnecessary transfusions through the effective clinical use of blood.</li>

	    	</ul>

	  		The objective of the GDBS is to collect and analyse data from all Member States of WHO in order to enable the Organization to:
	  		<ul>

		  		<li>Obtain the best available information on blood transfusion services in each Member State</li>
		  		<li>Assess the global situation on blood safety, availability and access and monitor trends and progress</li>
		  		<li>Identify priority countries for support and technical assistance</li>
		  		<li>Plan research and develop appropriate strategies to address specific needs.</li>
	  		</ul>

	  		The GDBS was initiated in 1998. GDBS reports are available on the WHO website (http://www.who.int/bloodsafety/global database/) and from WHO Headquarters and Regional Offices. Please contact WHO for further information or assistance on completing the GDBS
	  </div>
	</div>

	<div class="panel panel-default">
	  <div class="panel-heading"><p class='lavander'>DATA COLLECTION FOR THE PERIOD JANUARY - DECEMBER</p></div>
	  <div class="panel-body">
	  	<p>
	  		The GDBS questionnaire should be completed by an authorized person in the respective BSF. 
	  		Please provide details of the person who completes the questionnaire so that National Voluntary Blood Services Program - Information Management Unit can contact, if necessary, for clarification and further information.	
	  		The questionnaire should be completed with data for the period January to December 2010. 
	  		If calendar year information is not available, please provide information for the nearest 12-month period (e.g. April 2009 to March 2010),and indicate the period covered on the form.
	  	</p>
	  </div>
	</div>

	<div class="panel panel-default">
	  <div class="panel-heading"><p class='lavander'>DATA COLLECTION QUESTIONNAIRE</p></div>
	  <div class="panel-body">
	  	<p>
	  		You are requested to complete the electronic version of the questionnaire, if possible.	
	  		Please enter your responses only in the yellow boxes that are shown on the screen. 
	  		The questionnaire has been protected to prevent responses from being entered outside these boxes. 
	  		You will also find that some boxes are grey in colour. These boxes contain formulae and are also protected; 
	  		automatic calculations will be made in these boxes as the relevant data are entered. 
	  		Options of "Yes" and "No" are offered for responses to qualitative questions. <br><br>

	  		To answer this type of question, click on the box for your preferred answer; a black point will then appear in the centre of the box. 
	  		If you wish to change your answer, simply click on another box. 
	  		If you feel that a "Yes" or "No" answer alone is insufficient to capture some aspects of the situation in your country, 
	  		please provide further information in the "Comment" box at the bottom of each worksheet. 
	  		Information provided through the "Comment" boxes is an essential part of the data collected through this questionnaire. <br><br>

	  		If you inadvertently click on a "Yes" or "No" box and wish to revert to the previous setting where neither "Yes" nor "No" are selected, 
	  		click on the grey portion of the box beside the choices, press the "Del" (or "Delete") key (see figure below).	
	  		Automatic error checking has been incorporated into the electronic questionnaire. 
	  		This is designed to prevent the entry of data that are invalid or obviously incorrect. 
	  		When such an error occurs, a message will appear to indicate the error and the entry will be rejected.

		</p>
	  </div>
	</div>

	<div class="panel panel-default">
	  <div class="panel-heading"><p class='lavander'>RETURNING THE GDBS QUESTIONNAIRE</p></div>
	  <div class="panel-body">
	  	<p>
	  		NATIONAL VOLUNTARY BLOOD SERVICES PROGRAM - INFORMATION MANAGEMENT UNIT<br>
			Philippine Blood Disease and Transfusion Center, Bld. 1, 5th flr.,<br> 
			NVBSP-Info. Management Unit, Lung Center Comp., <br>
			Quezon Ave., Quezon City, Philippines<br>
			bsi@nbbnets.net / support@nbbnets.net
	  	</p>
	  </div>
	</div>

@stop
