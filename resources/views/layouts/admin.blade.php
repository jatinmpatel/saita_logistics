<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Saita Logistics Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.png') }}">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fullcalendar.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/morris/morris.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datetimepicker/css/tempusdominus-bootstrap-4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datetimepicker/css/tempusdominus-bootstrap-4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> -->
  </head>
  
  <body>
    <div class="main-wrapper">
      <div class="header-outer">
        <div class="header">
          <a id="mobile_btn" class="mobile_btn float-left" href="#sidebar">
            <i class="fas fa-bars" aria-hidden="true"></i>
          </a>
          <a id="toggle_btn" class="float-left" href="javascript:void(0);">
            <img src="{{ asset('img/sidebar/icon-21.png') }}" alt="">
          </a>
          <ul class="nav float-left">
            <li>
              <div class="top-nav-search">
                <a href="javascript:void(0);" class="responsive-search">
                  <i class="fa fa-search"></i>
                </a>
                <form action="">
                  <input class="form-control" type="text" placeholder="Search here">
                  <button class="btn" type="submit">
                    <i class="fa fa-search"></i>
                  </button>
                </form>
              </div>
            </li>
            <li>
              <a href="{{ url('/') }}" class="mobile-logo d-md-block d-lg-none d-block">
                <img src="{{ asset('img/logo.png') }}" alt="" width="30" height="30">
              </a>
            </li>
          </ul>
          <ul class="nav user-menu float-right">
            <li class="nav-item dropdown d-none d-sm-block">
              <a href="javascript:void(0);" class="dropdown-toggle nav-link" data-toggle="dropdown">
                <img src="{{ asset('img/sidebar/icon-22.png') }}" alt="">
              </a>
              <div class="dropdown-menu notifications">
                <div class="topnav-dropdown-header">
                  <span>Notifications</span>
                </div>
                <div class="drop-scroll">
                  <ul class="notification-list">
                    <li class="notification-message">
                      <a href="javascript:void(0);">
                        <div class="media">
                          <span class="avatar">
                            <img alt="John Doe" src="{{ asset('img/user-06.jpg') }}" class="img-fluid rounded-circle">
                          </span>
                          <div class="media-body">
                            <p class="noti-details">
                              <span class="noti-title">John Doe</span> is now following you
                            </p>
                            <p class="noti-time">
                              <span class="notification-time">4 mins ago</span>
                            </p>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li class="notification-message">
                      <a href="javascript:void(0);">
                        <div class="media">
                          <span class="avatar">T</span>
                          <div class="media-body">
                            <p class="noti-details">
                              <span class="noti-title">Tarah Shropshire</span> sent you a message.
                            </p>
                            <p class="noti-time">
                              <span class="notification-time">6 mins ago</span>
                            </p>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li class="notification-message">
                      <a href="javascript:void(0);">
                        <div class="media">
                          <span class="avatar">L</span>
                          <div class="media-body">
                            <p class="noti-details">
                              <span class="noti-title">Misty Tison</span> like your photo.
                            </p>
                            <p class="noti-time">
                              <span class="notification-time">8 mins ago</span>
                            </p>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li class="notification-message">
                      <a href="javascript:void(0);">
                        <div class="media">
                          <span class="avatar">G</span>
                          <div class="media-body">
                            <p class="noti-details">
                              <span class="noti-title">Rolland Webber</span> booking appoinment for meeting.
                            </p>
                            <p class="noti-time">
                              <span class="notification-time">12 mins ago</span>
                            </p>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li class="notification-message">
                      <a href="javascript:void(0);">
                        <div class="media">
                          <span class="avatar">T</span>
                          <div class="media-body">
                            <p class="noti-details">
                              <span class="noti-title">Bernardo Galaviz</span> like your photo.
                            </p>
                            <p class="noti-time">
                              <span class="notification-time">2 days ago</span>
                            </p>
                          </div>
                        </div>
                      </a>
                    </li>
                  </ul>
                </div>
                <div class="topnav-dropdown-footer">
                  <a href="javascript:void(0);">View all Notifications</a>
                </div>
              </div>
            </li>
            <li class="nav-item dropdown d-none d-sm-block">
              <a href="javascript:void(0);" id="open_msg_box" class="hasnotifications nav-link">
                <img src="{{ asset('img/sidebar/icon-23.png') }}" alt="">
              </a>
            </li>
            <li class="nav-item dropdown has-arrow">
              <a href="javascript:void(0);" class=" nav-link user-link" data-toggle="dropdown">
                <span class="user-img">
                  <img class="rounded-circle" src="{{ asset('img/user-06.jpg') }}" width="30" alt="Admin">
                  <span class="status online"></span>
                </span>
                <span>Admin</span>
              </a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="javascript:void(0);">My Profile</a>
                <a class="dropdown-item" href="javascript:void(0);">Edit Profile</a>
                <a class="dropdown-item" href="javascript:void(0);">Settings</a>
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
              </form>
              </div>
            </li>
          </ul>
          <div class="dropdown mobile-user-menu float-right">
            <a href="javascript:void(0);" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
              <i class="fas fa-ellipsis-v"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="javascript:void(0);">My Profile</a>
                <a class="dropdown-item" href="javascript:void(0);">Edit Profile</a>
                <a class="dropdown-item" href="javascript:void(0);">Settings</a>
                <a class="dropdown-item" href="javascript:void(0);">Logout</a>
            </div>
          </div>
        </div>
      </div>

      <div class="sidebar" id="sidebar">
         <div class="sidebar-inner slimscroll">
           <div id="sidebar-menu" class="sidebar-menu">
             <div class="header-left">
               <a href="{{ url('/home') }}" class="logo">
                 <img src="{{ asset('img/logo.png') }}" width="auto" height="auto" alt="">
               </a>
             </div>
             <ul class="sidebar-ul">
               <li class="menu-title">Menu</li>

               <li class="active">
                 <a href="{{ url('/home') }}">
                   <i class="fa fa-th-large"></i>
                   <span>Dashboard</span>
                 </a>
               </li>

               <li class="submenu">
                 <a href="javascript:void(0);">
                  <i class="fa fa-cogs"></i>
                   <span> Operation Management</span>
                   <span class="menu-arrow"></span>
                 </a>
                 <ul class="list-unstyled" style="display: none;">
                    <li>
                        <a href="{{ url('packet-booking') }}">
                            <span>Packet Booking</span>
                        </a>
                    </li>
                    <li>
                      <a href="{{ url('import-packet') }}">
                          <span>Import Packet</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{ url('print-awb-document') }}">
                          <span>Print AWB Document</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{ url('vendor-manifest') }}">
                          <span>Manifest to Vendor</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{ url('shipment-movement') }}">
                          <span>Shipment Movement</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{ url('pod-upload') }}">
                          <span>POD Upload</span>
                      </a>
                    </li>
                 </ul>
               </li>

               <li class="submenu">
                 <a href="javascript:void(0);">
                  <i class="fa fa-database"></i>
                   <span> MASTER MANAGEMENT </span>
                   <span class="menu-arrow"></span>
                 </a>
                 <ul class="list-unstyled" style="display: none;">
                    <li>
                        <a href="{{ url('client-master') }}">
                            <span>Client Master</span>
                        </a>
                    </li>
                    <li>
                      <a href="{{ url('vendor-master') }}">
                          <span>Vendor Master</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{ url('vendor-account-detail') }}">
                          <span>Vendor Account Details</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{ url('zone-master') }}">
                          <span>Zone Master</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{ url('country-master') }}">
                          <span>Country Master</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{ url('reason-master') }}">
                          <span>Reason Master</span>
                      </a>
                    </li>
                 </ul>
               </li>

               <li class="submenu">
                 <a href="javascript:void(0);">
                  <i class="fa fa-retweet"></i>
                   <span> REPORTS MANAGEMENT </span>
                   <span class="menu-arrow"></span>
                 </a>
                 <ul class="list-unstyled" style="display: none;">
                    <li>
                        <a href="{{ url('booking-report') }}">
                            <span>Booking Report</span>
                        </a>
                    </li>
                    <li>
                      <a href="{{ url('manifest-report') }}">
                          <span>Manifest Report</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{ url('delivered-report') }}">
                          <span>Delivered Report</span>
                      </a>
                    </li>
                 </ul>
               </li>

               <li class="submenu">
                 <a href="javascript:void(0);">
                  <i class="fa fa-users"></i>
                   <span> USER MANAGEMENT </span>
                   <span class="menu-arrow"></span>
                 </a>
                 <ul class="list-unstyled" style="display: none;">
                    <li>
                        <a href="{{ url('manage-users') }}">
                            <span>Manage Users</span>
                        </a>
                    </li>
                    <li>
                      <a href="{{ url('change-password') }}">
                          <span>Change Password</span>
                      </a>
                    </li>
                 </ul>
               </li>

               <li class="submenu">
                 <a href="javascript:void(0);">
                  <i class="fa fa-users"></i>
                   <span> Accounts </span>
                   <span class="menu-arrow"></span>
                 </a>
                 <ul class="list-unstyled" style="display: none;">
                    <li>
                        <a href="{{ url('create-invoice') }}">
                            <span>Create Invoice</span>
                        </a>
                    </li>
                    <li>
                      <a href="{{ url('invoice') }}">
                          <span>Invoice</span>
                      </a>
                    </li>
                 </ul>
               </li>

               <li class="submenu">
                 <a href="javascript:void(0);">
                  <i class="fa fa-cog"></i>
                   <span> SETTINGS MANAGEMENT </span>
                   <span class="menu-arrow"></span>
                 </a>
                 <ul class="list-unstyled" style="display: none;">
                    <li>
                        <a href="{{ url('website-setting') }}">
                            <span>Website Setting </span>
                        </a>
                    </li>
                    <li>
                      <a href="{{ url('payment-history') }}">
                          <span>Payment History</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{ url('user-profile') }}">
                          <span>Your Profile</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{ url('vendor-api-configuration') }}">
                          <span>Vendor API Configuratio</span>
                      </a>
                    </li>
                 </ul>
               </li>

             </ul>
           </div>
         </div>
        </div>

      <div class="page-wrapper">
      @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block mb-0">
            <button type="button" class="close" data-dismiss="alert">×</button> 
                <strong>{{ $message }}</strong>
        </div>
      @endif
      @if ($message = Session::get('error'))
            <div class="alert alert-danger alert-block mb-0">
                <button type="button" class="close" data-dismiss="alert">×</button> 
                    <strong>{{ $message }}</strong>
            </div>
        @endif
        @yield('content')
      </div>
    </div>

      <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
      <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
      <script src="{{ asset('js/jquery.slimscroll.js') }}"></script>
      <script src="{{ asset('js/select2.min.js') }}"></script>
      <script src="{{ asset('js/moment.min.js') }}"></script>
      <script src="{{ asset('js/fullcalendar.min.js') }}"></script>
      <script src="{{ asset('js/jquery.fullcalendar.js') }}"></script>
      <script src="{{ asset('plugins/morris/morris.min.js') }}"></script>
      <script src="{{ asset('plugins/raphael/raphael-min.js') }}"></script>
      <script src="{{ asset('js/apexcharts.js') }}"></script>
      <script src="{{ asset('js/chart-data.js') }}"></script>
      <script src="{{ asset('plugins/datetimepicker/js/tempusdominus-bootstrap-4.min.js') }}"></script>
      <script src="{{ asset('js/app.js') }}"></script>
      <script>

        $('#otherCheckbox').on('click',function() {
            var cb = $('#otherCheckbox').is(':checked');
            $('#other').prop('disabled', !cb);  
        });
  
      </script>

        <script>
            function valueChanged() {
              if($('.coupon_question').is(":checked"))   
                $(".answer").show();
              else
                $(".answer").hide();
            };
        </script>

  </body>
</html>