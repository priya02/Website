<?php
  include('../VR_scripts/helper_modules.php');

  session_start();

    if(!isset($_SESSION['_house_owner_name_']))
    header("Location: ../dashboard/courses.php");

?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> Talpuri International Colony RWA </title>

    <!-- Bootstrap -->
    <link href="../../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="../../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- PNotify -->
    <link href="../../vendors/pnotify/dist/pnotify.css" rel="stylesheet">
    <link href="../../vendors/pnotify/dist/pnotify.buttons.css" rel="stylesheet">
    <link href="../../vendors/pnotify/dist/pnotify.nonblock.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../../build/css/custom.min.css" rel="stylesheet">



    <!-- Select2 -->
    <link href="../../vendors/select2/dist/css/select2.min.css" rel="stylesheet">
    <!-- Switchery -->
    <link href="../../vendors/switchery/dist/switchery.min.css" rel="stylesheet">



  </head>

  <body class="nav-md">



  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


    <script type="text/javascript">
    // A $( document ).ready() block.
    $( document ).ready(function() {
        PNotify.removeAll();
    });
    window.onload = function() {
        PNotify.removeAll();
    };
  </script>


    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-tumblr-square"></i> <span> Talpuri RWA </span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="../images/user.png" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2> <?php echo $_SESSION['_house_owner_name_']; ?> </h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <?php
            echo_Admin_sideBar_Menu();
            ?>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="../login.php">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="../images/user.png" alt=""> <?php $_SESSION['_house_owner_name_'] ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="../login.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="../images/user.png" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="../images/user.png" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="../images/user.png" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="../images/user.png" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3> Colony Statistics  </h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="">





                              <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="x_panel">
                                  <div class="x_title">
                                    <h2><i class="fa fa-bars"></i> View All the Registered Talpuri Society Members <small> in a Tabular Format  </small></h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                      </li>
                                      <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                        <ul class="dropdown-menu" role="menu">
                                          <li><a href="#">Settings 1</a>
                                          </li>
                                          <li><a href="#">Settings 2</a>
                                          </li>
                                        </ul>
                                      </li>
                                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                                      </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                  </div>
                                  <div class="x_content">



                                              <div class="col-md-12 col-sm-6 col-xs-12">
                                                  <div class="x_panel">
                                                    <div class="x_title">
                                                      <h2> Tabulated View <small>Talpuri Members whose Registration has been approved by Administrator</small></h2>
                                                      <ul class="nav navbar-right panel_toolbox">
                                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                                        </li>
                                                        <li class="dropdown">
                                                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                                          <ul class="dropdown-menu" role="menu">
                                                            <li><a href="#">Settings 1</a>
                                                            </li>
                                                            <li><a href="#">Settings 2</a>
                                                            </li>
                                                          </ul>
                                                        </li>
                                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                                        </li>
                                                      </ul>
                                                      <div class="clearfix"></div>
                                                    </div>
                                                    <div class="x_content">

                                                      <table class="table table-bordered">
                                                        <thead>
                                                          <tr>
                                                            <th>#</th>
                                                            <th>House ID</th>
                                                            <th>Owner Name</th>
                                                            <th>Admin Rights</th>
                                                            <th>Hand Over Date</th>
                                                            <th>Occupancy Date</th>
                                                            <th>Contact Email</th>
                                                            <th>Contact Mobile</th>
                                                            <th>Send a Message</th>
                                                            <th>Kick member Out</th>

                                                          </tr>
                                                        </thead>
                                                        <tbody>

                                                             <?php 

                                                            $all_members = fetchAllMembersfromDatabase();


                                                            $counter = 0;
                                                            foreach ($all_members as $memb) {
                                                              $counter = $counter + 1;

                                                               // display ONLY unapproved members
                                                              if($memb->approved)
                                                                {
                                                                  if($memb->admin_rights)
                                                                    $admin_bool_mssg = "YES";
                                                                  else
                                                                    $admin_bool_mssg = "NO";

                                                                    echo
                                                                    "
                                                                     <tr>

                                                                      <th>#</th>
                                                                      <td>".$memb->house_id."</td>
                                                                      <td>".$memb->owner_name."</td>
                                                                      <td>".$admin_bool_mssg."</td>
                                                                      <td>".$memb->handovr_date."</td>
                                                                      <td>".$memb->occupancy_date."</td>
                                                                      <td>".$memb->email."</td>
                                                                      <td>".$memb->mobile."</td>
                                                                      <td>
                                                                      <button data-toggle='modal' data-target='.bs-example-modal-lg' type='button' class='btn btn-round btn-primary'>Send a Message</button>
                                                                      </td>
                                                                      <td> <button type='button' class='btn btn-round btn-danger'> Kick Out </button> </td>

                                                                    </tr>
                                                                    ";
                                                                }

                                                          
                                                              }

                                                                ?>


                                                         


                                                          
                                                        </tbody>
                                                      </table>

                                                    </div>
                                                  </div>
                                                </div>



                                    

                                  </div>
                                </div>
                              </div>



                          <!-- modals -->
                          <!-- Large modal -->

                          <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content">

                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                  </button>
                                  <h4 class="modal-title" id="myModalLabel"> Send Message To Member  </h4>
                                </div>
                                <div class="modal-body">
                                  <h4>  Please Enter a Message to be Sent to This Member </h4>
                                 
                                  <textarea class="form-control" rows="3" placeholder='Enter message'></textarea>
                                     
                                </div>

                                <div class="modal-footer">
                                  <button type="button" class="btn btn-success" onclick="ajaxSendMessageToUser('\<userIDhere\>')"> Send </button>
                                  
                                  <button id='btn_close_cmpnt_title_modal' type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>

                              </div>
                            </div>
                          </div>



                              <script type="text/javascript">


                                function activateTab1()
                                {

                                     $(document).ready()
                                    { 


                                        $('#tab_content1').attr('class', "tab-pane fade active in" );
                                        $('#tab_select_1').attr('class', "active");
                                        $('#tab_content2').attr('class', "tab-pane fade" );
                                        $('#tab_select_2').attr('class', "");
                                        $('#tab_content3').attr('class', "tab-pane fade" );
                                        $('#tab_select_3').attr('class', "");
                                      
                                    }

                                } 

                                function activateTab2()
                                {

                                    $(document).ready()
                                    { 

                                        $('#tab_content2').attr('class', "tab-pane fade active in" );
                                        $('#tab_select_2').attr('class', "active");
                                        $('#tab_content1').attr('class', "tab-pane fade" );
                                        $('#tab_select_1').attr('class', "");
                                        $('#tab_content3').attr('class', "tab-pane fade" );
                                        $('#tab_select_3').attr('class', "");
                                    }
                                }

                                function activateTab3()
                                {

                                    $(document).ready()
                                    { 

                                      $('#tab_content3').attr('class', "tab-pane fade active in" );
                                      $('#tab_select_3').attr('class', "active");
                                      $('#tab_content2').attr('class', "tab-pane fade" );
                                      $('#tab_select_2').attr('class', "");
                                      $('#tab_content1').attr('class', "tab-pane fade" );
                                      $('#tab_select_1').attr('class', "");
                                    }
                                }
                              </script>




              </div>
            </div>


            <div class="clearfix"></div>


        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <div id="custom_notifications" class="custom-notifications dsp_none">
      <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
      </ul>
      <div class="clearfix"></div>
      <div id="notif-group" class="tabbed_notifications"></div>
    </div>

    <!-- jQuery -->
    <script src="../../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../../vendors/nprogress/nprogress.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../../vendors/iCheck/icheck.min.js"></script>


        <!-- PNotify -->
    <script src="../../vendors/pnotify/dist/pnotify.js"></script>
    <script src="../../vendors/pnotify/dist/pnotify.buttons.js"></script>
    <script src="../../vendors/pnotify/dist/pnotify.nonblock.js"></script>


     <!-- Loading Blocking  -->
    <script src="../../build/js/bootstrap-waitingfor.js"></script>
    <script src="../../build/js/bootstrap-waitingfor.min.js"></script>


        <!-- Switchery -->
    <script src="../../vendors/switchery/dist/switchery.min.js"></script>
    <!-- Select2 -->
    <script src="../../vendors/select2/dist/js/select2.full.min.js"></script>



    <!-- Custom Theme Scripts -->
    <script src="../../build/js/custom.min.js"></script>
	
  </body>
</html>