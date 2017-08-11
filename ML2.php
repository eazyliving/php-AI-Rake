
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
   <meta name="description" content="Bootstrap Admin App + jQuery">
   <meta name="keywords" content="app, responsive, jquery, bootstrap, dashboard, admin">
   <title>BIDxprt</title>
   <!-- =============== ../vendor STYLES ===============-->
   <!-- FONT AWESOME-->
   <link rel="stylesheet" href="../vendor/fontawesome/css/font-awesome.min.css">
   <!-- SIMPLE LINE ICONS-->
   <link rel="stylesheet" href="../vendor/simple-line-icons/css/simple-line-icons.css">
   <!-- ANIMATE.CSS-->
   <link rel="stylesheet" href="../vendor/animate.css/animate.min.css">
   <!-- WHIRL (spinners)-->
   <link rel="stylesheet" href="../vendor/whirl/dist/whirl.css">
   <!-- =============== PAGE ../vendor STYLES ===============-->
   <!-- =============== BOOTSTRAP STYLES ===============-->
   <link rel="stylesheet" href="../css/bootstrap.css" id="bscss">
   <!-- =============== APP STYLES ===============-->
   <link rel="stylesheet" href="../css/app.css" id="maincss">
</head>
<body onload="chkLogin2(); security();">
   <div class="wrapper">
      <!-- top navbar-->
      <header class="topnavbar-wrapper">
         <!-- START Top Navbar-->
         <nav role="navigation" class="navbar topnavbar">
            <!-- START navbar header-->
            <div class="navbar-header">
               <a href="../home.html" class="navbar-brand">
                  <div class="brand-logo">
                     <img  src="../img/BIDxprt.png" alt="App Logo" class="img-responsive">
                  </div>
                 </a>
            </div>
            <!-- END navbar header-->
            <!-- START Nav wrapper-->
            <div class="nav-wrapper">
               <!-- START Left navbar-->
               <ul class="nav navbar-nav">
                  <li>
                     <!-- Button used to collapse the left sidebar. Only visible on tablet and desktops-->
                     <a href="#" data-trigger-resize="" data-toggle-state="aside-collapsed" class="hidden-xs">
                        <em class="fa fa-navicon"></em>
                     </a>
                     <!-- Button to show/hide the sidebar on mobile. Visible on mobile only.-->
                     <a href="#" data-toggle-state="aside-toggled" data-no-persist="true" class="visible-xs sidebar-toggle">
                        <em class="fa fa-navicon"></em>
                     </a>
                  </li>
                  <!-- START User avatar toggle-->
                  <li>
                     <!-- Button used to collapse the left sidebar. Only visible on tablet and desktops-->
                     <a id="user-block-toggle" href="#user-block" data-toggle="collapse">
                        <em class="icon-user"></em>
                     </a>
                  </li>
               </ul>
               <!-- END Left navbar-->
               <!-- START Right Navbar-->
               <ul class="nav navbar-nav navbar-right">
                  <li class="dropdown dropdown-list">
                     <a href="../home.html" data-toggle="dropdown">
                        <em class="icon-bell"></em>
                        <div class="label label-danger"></div>
                     </a>
                     <!-- START Dropdown menu-->
                     <ul class="dropdown-menu animated flipInX">
                        <li>
                           <!-- START list group-->
                           <div class="list-group">
                              <!-- list item-->
									  <div class="form-group">
					<div class="col-sm-10" style="padding: 7px;">
			<textarea id="feedback"  name="feedback" class="form-control" style="width: 420px; height: 110px;" placeholder="Enter your feedback.."></textarea>
			<span style="color:red" id="feedback1"></span>
					</div>
				 </div>
					<div class="h4 text-center" >
					  <button  style="align:center" class="mb-sm btn btn-primary" onclick="feedback();" type="button" >Submit</button>

					</div>
                           </div>
                           <!-- END list group-->
                        </li>
                     </ul>
                     <!-- END Dropdown menu-->
                  </li>
                  <!-- END Alert menu-->
                 <!-- Search icon-->
                  <li>
                     <a href="#" data-search-open="">
                        <em class="icon-magnifier"></em>
                     </a>
                  </li>
									<li>
                     <a title="Logout" onclick="logoutRake();">
                        <em class="icon-logout"></em>
                     </a>

                  </li>
               </ul>
               <!-- END Right Navbar-->
            </div>
            <!-- END Nav wrapper-->
            <!-- START Search form-->
            <form role="search" action="search.html" class="navbar-form">
               <div class="form-group has-feedback">
                  <input type="text" placeholder="Type and hit enter ..." class="form-control">
                  <div data-search-dismiss="" class="fa fa-times form-control-feedback"></div>
               </div>
               <button type="submit" class="hidden btn btn-default">Submit</button>
            </form>
            <!-- END Search form-->
         </nav>
         <!-- END Top Navbar-->
      </header>
      <!-- sidebar-->
      <aside class="aside">
         <!-- START Sidebar (left)-->
         <div class="aside-inner">
            <nav data-sidebar-anyclick-close="" class="sidebar">
               <!-- START sidebar nav-->
               <ul class="nav">
                  <!-- START user info-->
                  <li class="has-user-block">
                     <div id="user-block" class="collapse">
                        <div class="item user-block">
                           <!-- User picture-->
                           <div class="user-block-picture">
                              <div class="user-block-status">
                                 <img src="img/user/pb.jpg" alt="Avatar" width="60" height="60" class="img-thumbnail img-circle">
                                 <div class="circle circle-success circle-lg"></div>
                              </div>
                           </div>
                           <!-- Name and Job-->
                           <div class="user-block-info">
                              <span class="user-block-name">
                              <span class="user-block-role">Developer</span>
                           </div>
                        </div>
                     </div>
                  </li>
                  <!-- END user info-->
                  <!-- Iterates over all sidebar items-->
                                    <li class=" ">
                 <a href="#dashboard" title="Dashboard" data-toggle="collapse">
                    <em class="icon-plus"></em>
                    <span data-localize="sidebar.nav.DASHBOARD">Dashboard</span>
                 </a>
                 <ul id="dashboard" class="nav sidebar-subnav collapse">
                    <li class="sidebar-subnav-header">Dashboard</li>
                    <li class="">
                       <a href="../Dashboard.html" title="Dashboard">
                          <span>Dashboard</span>
                       </a>
                     </ul>
                      </li>
				  <li class=" ">
                     <a href="#Opportunities" title="Opportunities" data-toggle="collapse">
                        <em class="icon-plus"></em>
                        <span data-localize="sidebar.nav.Opportunities">Opportunities</span>
                     </a>
                     <ul id="Opportunities" class="nav sidebar-subnav collapse">
                        <li class="sidebar-subnav-header">Opportunities</li>
                        <li class="">
                           <a href="../NewBid.html" title="Create new bids">
                              <span>Create new bids</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="../ViewBids.html" title="View bids">
                              <span>View bids</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="../SearchBids.html" title="Search all bids">
                              <span>Search bids</span>
                           </a>
                        </li>
						<li class=" ">
                           <a href="../BidDocumentUpload.html" title="Document Manager">
                              <span>Document Manager</span>
                           </a>
                        </li>
                     </ul>
                  </li>
				  <li class=" ">
                     <a href="#BidPlanning" title="Bid Planning" data-toggle="collapse">
                        <em class="icon-plus"></em>
                        <span data-localize="sidebar.nav.BidPlanning">Bid Planning</span>
                     </a>
                     <ul id="BidPlanning" class="nav sidebar-subnav collapse">
                        <li class="sidebar-subnav-header">Bid Planning</li>

                        <li class="">
                           <a href="../BidTeamPlanner.html" title="Bid Team Planner">
                              <span>Bid Team Planner</span>
                           </a>
                        </li>
                        <li class="">
                           <a href="../BidActivityPlanner.html" title="Bid Activity Planner">
                              <span>Bid Activity Planner</span>
                           </a>
                        </li>
						<li class=" ">
                           <a href="../ProposalDocumentPlanner.html" title="Proposal Planner">
                              <span>Proposal Planner</span>
                           </a>
                        </li>
						<li class=" ">
                           <a href="../BidBudgetPlanner.html" title="Bid Budget Planner">
                              <span>Bid Budget Planner</span>
                           </a>
                        </li>
						<li class=" ">
                           <a href="../BidTransfer.html" title="Bid Transfer">
                              <span>Bid Transfer</span>
                           </a>
                        </li>
						<li class=" ">
                           <a href="../BidAnalysis.html" title="Bid Analysis">
                              <span>Bid Analysis</span>
                           </a>
                        </li>
                     </ul>
                  </li>
				  <li class=" ">
                     <a href="#Schedule" title="Schedule" data-toggle="collapse">
                        <em class="icon-plus"></em>
                        <span data-localize="sidebar.nav.BidNetwork">Bid Scheduler</span>
                     </a>
                     <ul id="Schedule" class="nav sidebar-subnav collapse">
                        <li class="sidebar-subnav-header">Bid Scheduler</li>
                         <li class=" ">
                           <a href="../Scheduler.html" title="Schedule">
                              <span>Schedule</span>
                           </a>
                        </li>
						<li class="">
                           <a href="../ViewSchedule.html" title="View Schedule">
                              <span>View Schedule</span>
                           </a>
                        </li>
                     </ul>
                  </li>
				  <li class=" ">
                     <a href="#Review" title="Review" data-toggle="collapse">
                        <em class="icon-plus"></em>
                        <span data-localize="sidebar.nav.Review">Review</span>
                     </a>
                     <ul id="Review" class="nav sidebar-subnav collapse">
                        <li class="sidebar-subnav-header">Review</li>
                        <li class="">
                           <a href="../PlanReviewSceen.html" title="Plan Review">
                              <span>Plan Review</span>
                           </a>
                        </li>
                        <li class="">
                           <a href="../ReviewStatusScreen.html" title="Review Status">
                              <span>Review Status Screen</span>
                           </a>
                        </li>
						<li class="">
                           <a href="../ReviewerPendingScreen.html" title="Reviewer">
                              <span>Reviewer</span>
                           </a>
                        </li>
                     </ul>
                  </li>
				  <li class=" ">
                     <a href="#Analysis" title="Analysis" data-toggle="collapse">
                        <em class="icon-plus"></em>
                        <span data-localize="sidebar.nav.Analysis">Analysis</span>
                     </a>
                     <ul id="Analysis" class="nav sidebar-subnav collapse">
                        <li class="sidebar-subnav-header">Analysis</li>
                        <li class="">
                           <a href="../OpportunitiesQualifier.html" title="Opportunity Qualifier">
                              <span>Opportunity Qualifier</span>
                           </a>
                        </li>
                        <li class="">
                           <a href="../TopDrivers.html" title="Top Drivers">
                              <span>Top Drivers</span>
                           </a>
                        </li>
                        <li class="">
                           <a href="../CompetitiveAnalysis.html" title="Competitive Analysis">
                              <span>Competitive Analysis</span>
                           </a>
                        </li>
						<li class=" ">
                           <a href="../WinThemes.html" title="Win Loss Analysis">
                              <span>Win Loss Analysis</span>
                           </a>
                        </li>
                     </ul>
                  </li>
				  <li class=" ">
                     <a href="#Price" title="Price" data-toggle="collapse">
                        <em class="icon-plus"></em>
                        <span data-localize="sidebar.nav.Price">Price</span>
                     </a>
                     <ul id="Price" class="nav sidebar-subnav collapse">
                        <li class="sidebar-subnav-header">Price</li>
                        <li class="">
                           <a href="../TimeAndMaterial.html" title="T&M(Time & Material">
                              <span>T&M(Time & Material)</span>
                           </a>
                        </li>

						<li class=" ">
                           <a href="../SaaS.html" title="SaaS">
                              <span>SaaS</span>
                           </a>
                        </li>
                     </ul>
                  </li>
				  <li class=" ">
                     <a href="#Reporting" title="Reporting" data-toggle="collapse">
                        <em class="icon-plus"></em>
                        <span data-localize="sidebar.nav.Reporting">Reporting</span>
                     </a>
                     <ul id="Reporting" class="nav sidebar-subnav collapse">
                        <li class="sidebar-subnav-header">Reporting</li>
                        <li class="">
                           <a href="../ReportsOnBids.html" title="Reports New Bids">
                              <span>Reports New Bids</span>
                           </a>
                        </li>
                        <li class="">
                           <a href="../TopAccountAndTCV.html" title="Account And TCV">
                              <span>Account And TCV</span>
                           </a>
                        </li>
                        <li class="">
                           <a href="../SalesLeadAndBidManager.html" title="Sales Lead And Bid Manager">
                              <span>Sales Lead And Bid Manager</span>
                           </a>
                        </li>
                        <li class="">
                           <a href="../CountryAndVerticals.html" title="Country And Verticals">
                              <span>Country And Verticals</span>
                           </a>
                        </li>
                        <li class="">
                           <a href="../ContractTypeAndDealStage.html" title="Contract And Deal Stage">
                              <span>Contract And Deal Stage</span>
                           </a>
                        </li>
                        <li class="">
                           <a href="../ServicesAndTechnology.html" title="Services And Technology">
                              <span>Services And Technology</span>
                           </a>
                        </li>
						<li class="">
                           <a href="../MasterReportSearch.html" title="Master Search">
                              <span>Master Search</span>
                           </a>
                        </li>
						<li class="">
                           <a href="../TopAnalysis.html" title="Competitive Insight">
                              <span>Competitive Insight</span>
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class=" ">
                             <a href="#MachineLearning" title="MachineLearning" data-toggle="collapse">
                                <em class="icon-plus"></em>
                                <span data-localize="sidebar.nav.Price">Machine Learning</span>
                             </a>
                             <ul id="MachineLearning" class="nav sidebar-subnav collapse">
                                <li class="sidebar-subnav-header">Machine Learning</li>
                                <li class="">
                                   <a href="../MachineLearning.html" title="MachineLearning">
                                      <span>Machine Learning</span>
                                   </a>
                                </li>
                             </ul>
                          </li>
                          <li class=" ">
					 <a href="#HelpVedios" title="HelpVedios" data-toggle="collapse">
							<em class="icon-plus"></em>
							<span data-localize="sidebar.nav.Reporting">Help Videos</span>
					 </a>
					 <ul id="HelpVedios" class="nav sidebar-subnav collapse">
							<li class="sidebar-subnav-header">Help Videos</li>
							<li class="">
								 <a href="../HelpVideos.html" title="Help Videos">
										<span>Help Videos</span>
								 </a>
							</li>
							<li class="">
							 <a href="../QuickGuide.html" title="Quick Guide">
									<span>Quick Guide</span>
							</a>
						</li>
					 </ul>
				</li>
						<li class=" ">
							 <a href="#ContactUs" title="ContactUs" data-toggle="collapse">
									<em class="icon-plus"></em>
									<span data-localize="sidebar.nav.Reporting">Contact Us</span>
							 </a>
							 <ul id="ContactUs" class="nav sidebar-subnav collapse">
									<li class="sidebar-subnav-header">Contact Us</li>
									<li class="">
										 <a href="../ContactUs.html" title="Contact Us">
												<span>Contact Us</span>
										 </a>
									</li>
							 </ul>
						</li>
               <!-- END sidebar nav-->
            </nav>
         </div>
         <!-- END Sidebar (left)-->
      </aside>
      <section>
        <div id="panelDemo8"  class="panel panel-primary">
                     <div class="panel-heading">Text Output</div>
                     <div class="panel-body">

                       <script>
                       var text1 = localStorage.getItem("MachineLearingText");
                       var test2 = JSON.stringify(text1);
                       document.cookie = "text3 = " + test2;
                       </script>
                       <?php
                       include('rake.php');
                       $MLTeXt= $_COOKIE["text3"];
                       $rake = new Rake('stoplist_smart.txt');
                       $phrases = $rake->extract($MLTeXt);
                       foreach($phrases as $key => $value) {
                        echo "$key <br>";
                      }
                       ?>
                     </div>
                  </div>
         </section>
</body>
</html>
      <!-- Page footer-->
      <footer id="footer">
    <div class="copy_area">
      <div class="container">
        <div class="row">
          <div id="footer_copyright" class="col-sm-12 text-center">
            <p>&copy; 2017 BIDxprt. ALL RIGHTS RESERVED</p>
          </div>
        </div>
      </div>
      <!-- End container -->
      <div class="clear"></div>
    </div>
  </footer>
  <script>
  function logoutRake()
{
	var x=confirm("Do you want to logout ?");
	if(x == true)
	{
		window.localStorage.removeItem('Email');
		window.localStorage.clear();
		setTimeout(function() { document.location.href="../Login.html"; }, 500);
	}
}
  </script>
   </div>
   <!-- =============== ../vendor SCRIPTS ===============-->
   <!-- MODERNIZR-->
   <script src="../vendor/modernizr/modernizr.custom.js"></script>
   <!-- MATCHMEDIA POLYFILL-->
   <script src="../vendor/matchMedia/matchMedia.js"></script>
   <!-- JQUERY-->
   <script src="../vendor/jquery/dist/jquery.js"></script>
   <!-- BOOTSTRAP-->
   <script src="../vendor/bootstrap/dist/js/bootstrap.js"></script>
   <!-- STORAGE API-->
   <script src="../vendor/jQuery-Storage-API/jquery.storageapi.js"></script>
   <!-- JQUERY EASING-->
   <script src="../vendor/jquery.easing/js/jquery.easing.js"></script>
   <!-- ANIMO-->
   <script src="../vendor/animo.js/animo.js"></script>
   <!-- SLIMSCROLL-->
   <script src="../vendor/slimScroll/jquery.slimscroll.min.js"></script>
   <!-- SCREENFULL-->
   <script src="../vendor/screenfull/dist/screenfull.js"></script>
   <!-- LOCALIZE-->
   <script src="../vendor/jquery-localize-i18n/dist/jquery.localize.js"></script>
   <!-- RTL demo-->
   <script src="../js/demo/demo-rtl.js"></script>
   <!-- =============== PAGE ../vendor SCRIPTS ===============-->
   <!-- =============== APP SCRIPTS ===============-->
   <script src="../js/app.js"></script>
    <script src="../js/jquery.min.js"></script>
  <script src="../js/bid_api.js"> </script>
  <script type="text/javascript">
   if(window.location.href.substr(-2) !== "?r") {
      window.location = window.location.href + "?r";
    }
</script>
</body>

</html>
