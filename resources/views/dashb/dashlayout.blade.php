
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="">

    <title>User</title>

	<!-- Bootstrap 4.0-->
	<link rel="stylesheet" href="dashb/assets/vendor_components/bootstrap/dist/css/bootstrap.min.css">

	<!-- Bootstrap extend-->
	<link rel="stylesheet" href="dashb/src/css/bootstrap-extend.css">

	<!-- Theme style -->
	<link rel="stylesheet" href="dashb/src/css/master_style.css">

	<!-- Crypto_Admin skins -->
	<link rel="stylesheet" href="dashb/src/css/skins/_all-skins.css">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<!--<script src="//code-eu1.jivosite.com/widget/mymXg53yvA" async></script>-->
	
	<script src="//code.tidio.co/tpac1y4t3n45aiih3j5hdgc0aq76tbwd.js" async></script>

</head>
<body class="hold-transition skin-yellow sidebar-mini">
    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="{{route('userdashb')}}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
	  <b class="logo-mini">
		  <span class="light-logo"><img src="{{asset('nexusassets/Axiarslogo.png') }}" width="50%" alt="logo"></span>
		  <span class="dark-logo"><img src="{{asset('nexusassets/Axiarslogo.png') }}" width="50%" alt="logo"></span>
	  </b>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">
		  <img src="{{asset('nexusassets/Axiarslogo.png') }}" alt="logo" width="30%" class="light-logo">
	  	  <img src="{{asset('nexusassets/Axiarslogo.png') }}" alt="logo" width="30%" class="dark-logo">

        
	  </span>
    </a>
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

		  <li class="search-box">
            <a class="nav-link hidden-sm-down" href="javascript:void(0)"><i class="mdi mdi-magnify"></i></a>
            <form class="app-search" style="display: none;">
                <input type="text" class="form-control" placeholder="Search &amp; enter"> <a class="srh-btn"><i class="ti-close"></i></a>
			</form>
          </li>

          <!-- Messages -->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="mdi mdi-email"></i>
            </a>
            <ul class="dropdown-menu scale-up">
              <li class="header">No messages</li>
              <li class="footer"><a href="{{route('userdashb_message')}}">Check all messages</a></li>
            </ul>
          </li>
          <!-- Notifications -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="mdi mdi-bell"></i>
            </a>
            <ul class="dropdown-menu scale-up">
              <li class="header">No notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->

              </li>
              <li class="footer"><a href="#">View all Notification</a></li>
            </ul>
          </li>
          <!-- Tasks -->
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="mdi mdi-message"></i>
            </a>
            <ul class="dropdown-menu scale-up">
              <li class="header">No Task</li>
              <li>

              </li>
              <li class="footer">
                <a href="{{route('userdashb_notification')}}">View all tasks</a>
              </li>
            </ul>
          </li>
		  <!-- User Account -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="@if (Auth::user()->profilepic != "")
              storage/profile/{{Auth::user()->profilepic}}
              @else
              dashb/images/user2-160x160.jpg
              @endif" class="user-image rounded-circle" alt="User Image">
            </a>
            <ul class="dropdown-menu scale-up">
              <!-- User image -->
              <li class="user-header">
                <img src="@if (Auth::user()->profilepic != "")
                storage/profile/{{Auth::user()->profilepic}}
                @else
                dashb/images/user2-160x160.jpg
                @endif" class="float-left rounded-circle" alt="User Image">

                <p>
                  {{Auth::user()->name}}
                  <small class="mb-5">{{Auth::user()->email}}</small>
                  <a href="#" class="btn btn-danger btn-sm btn-rounded">User</a>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row no-gutters">
                  
                  
                  
				<div role="separator" class="divider col-12"></div>
				  
				<div role="separator" class="divider col-12"></div>
				  <div class="col-12 text-left">
                    <a href="{{route('logout')}}"><i class="fa fa-power-off"></i> Logout</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <!-- <a href="#" data-toggle="control-sidebar"><i class="fa fa-cog fa-spin"></i></a> -->
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
<div>

</div>
      <div class="user-panel">
		 <div class="ulogo">
      
			 <a href="/">
			  <!-- logo for regular state and mobile devices -->
			  <span>                 <img src="{{asset('nexusassets/Axiarslogo.png') }}" alt="logo" width="90%" margin="auto" class="dark-logo">
</span>
			</a>
		</div>
        
        <div class="info">
          <p>HI, {{Auth::user()->name}} </p>
			<!-- <a href="{{route('userdashb_profile')}}" class="link" data-toggle="tooltip" title="" data-original-title="Settings"><i class="ion ion-gear-b"></i></a>
            <a href="{{route('userdashb_message')}}" class="link" data-toggle="tooltip" title="" data-original-title="Email"><i class="ion ion-android-mail"></i></a>
            <a href="{{route('logout')}}" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i class="ion ion-power"></i></a> -->
        </div>
      </div>

      <!-- sidebar menu -->
      <ul class="sidebar-menu" data-widget="tree">
		<li class="nav-devider"></li>
        <li>
          <a href="{{route('userdashb')}}">
            <i class="icon-wallet"></i> <span>Account Summary</span>
            <span class="pull-right-container">
              <!-- <i class="fa fa-angle-right pull-right"></i> -->
            </span>
          </a>
        </li>

        <li>
          <a href="{{route('mycollection')}}">
            <i class="fa fa-book"></i> <span>My Collection</span>
            <span class="pull-right-container">
              <!-- <i class="fa fa-angle-right pull-right"></i> -->
            </span>
          </a>
        </li>

        <li>
          <a href="{{route('createnft')}}">
            <i class="fa fa-file"></i> <span> Create NFT</span>
            <span class="pull-right-container">
              <!-- <i class="fa fa-angle-right pull-right"></i> -->
            </span>
          </a>
        </li>

         <li>
          <a href="{{route('transactions')}}">
            <i class="icon-chart"></i> <span> Transactions </span>
            <span class="pull-right-container">
              <!-- <i class="fa fa-angle-right pull-right"></i> -->
            </span>
          </a>
        </li>

       

       
        <!-- <li class="treeview">
          <a href="{{route('createnft')}}">
            <i class="fa fa-file"></i>
            <span>Create NFT</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('userdashb_deposit')}}">Make  Deposit</a></li>

            <li><a href="{{route('userdashb_tranfer')}}">Transfer</a></li>

          </ul>
        </li> -->



        <!-- <li>
          <a href="{{route('userdashb_withdrawal')}}">
            <i class="icon-refresh"></i> <span>Withdrawal</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
        </li> -->
        <!-- <li class="treeview">
          <a href="#">
            <i class="icon-people"></i>
            <span>Referrals</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('userdashb_referrals')}}">All referrals</a></li>
            <li><a href="{{route('userdashb_active_referrals')}}">Active referrals</a></li>
            <li><a href="{{route('userdashb_inactive_referrals')}}">Inactive Referrals</a></li>
          </ul>
        </li> -->

        <!-- <li class="treeview">
          <a href="#">
            <i class="icon-chart"></i>
            <span>Transactions</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('userdash_pending_deposit')}}">Pending Deposits</a></li>
            <li><a href="{{route('userdash_approved_deposit')}}">Approved Deposits</a></li>
            <li><a href="{{route('userdash_pedinging_withdrawal')}}">Pending Withdrawal</a></li>
            <li ><a href="{{route('userdashb_approved_withdrawal')}}">Approved Withdrawals</a></li>
          </ul>
        </li> -->
        

        

	

		<li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i> <span>Authentication</span>
            <span class="pull-right-container">
              <!-- <i class="fa fa-angle-right pull-right"></i> -->
            </span>
          </a>
          <ul class="treeview-menu">

			<li><a href="{{route('userdashb_password_reset')}}">Reset pasword</a></li>
      <li><a href="{{route('logout')}}">Log out</a></li>
          

          </ul>
        </li>
       
       
          </ul> 



      </ul>
    </section>
  </aside>




  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    @include("flash-message")

@yield('dashbody')

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <footer class="main-footer">
  <!--  <div class="pull-right d-none d-sm-inline-block">-->
  <!--      <ul class="nav nav-primary nav-dotted nav-dot-separated justify-content-center justify-content-md-end">-->
		<!--  <li class="nav-item">-->
		<!--	<a class="nav-link" href="javascript:void(0)">FAQ</a>-->
		<!--  </li>-->
		<!--  <li class="nav-item">-->
		<!--	<a class="nav-link" href="#">Purchase Now</a>-->
		<!--  </li>-->
		<!--</ul>-->
  <!--  </div>-->
	  &copy; 2025 <a href="#">NFT AXIARS</a>. All Rights Reserved.
  </footer>
  <!-- Control Sidebar -->

  <!-- /.control-sidebar -->

  <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->


	<!-- jQuery 3 -->
	<script src="dashb/assets/vendor_components/jquery/dist/jquery.min.js"></script>

	<!-- popper -->
	<script src="dashb/assets/vendor_components/popper/dist/popper.min.js"></script>

	<!-- Bootstrap 4.0-->
	<script src="dashb/assets/vendor_components/bootstrap/dist/js/bootstrap.min.js"></script>

	<!-- SlimScroll -->
	<script src="dashb/assets/vendor_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>

	<!-- FastClick -->
	<script src="dashb/assets/vendor_components/fastclick/lib/fastclick.js"></script>

	<!-- Countdown JavaScript -->
    <script src="dashb/assets/vendor_components/countdown/countdown.js"></script>

	<!-- Crypto_Admin App -->
	<script src="dashb/src/js/template.js"></script>

	<!-- Crypto_Admin for demo purposes -->
	<script src="dashb/src/js/demo.js"></script>
	<script>
        $('.count').each(function () {
			$(this).prop('Counter',0).animate({
				Counter: $(this).text()
			}, {
				duration: 4000,
				easing: 'swing',
				step: function (now) {
					$(this).text(Math.ceil(now));
				}
			});
		});
      </script>


</body>
</html>


