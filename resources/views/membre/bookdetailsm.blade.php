<!DOCTYPE html>
<html lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>LMS</title>
        <link type="text/css" href="/front_assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="/front_assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="/front_assets/css/theme.css" rel="stylesheet">
        <link type="text/css" href="/front_assets/images/icons/css/font-awesome.css" rel="stylesheet">
       
    </head>
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="indexm">LMS </a>
                    <div class="nav-collapse collapse navbar-inverse-collapse">
                        <ul class="nav pull-right">
                            <li class="nav-user dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="/front_assets/images/user.png" class="nav-avatar" />
                                <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="indexm">Your Profile</a></li>
                                    <!--li><a href="#">Edit Profile</a></li>
                                    <li><a href="#">Account Settings</a></li-->
                                    <li class="divider"></li>
                                    <li><a href="logout.html">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- /.nav-collapse -->
                </div>
            </div>
            <!-- /navbar-inner -->
        </div>
        <!-- /navbar -->
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="span3">
                    <div class="sidebar">
                        <ul class="widget widget-menu unstyled">
                                <li class="active"><a href="indexm"><i class="menu-icon icon-home"></i>Home
                                </a></li>
                                 <li><a href="messagem"><i class="menu-icon icon-inbox"></i>Messages</a>
                                </li>
                                <li><a href="bookm"><i class="menu-icon icon-book"></i>All Books </a></li>
                                <li><a href="historym"><i class="menu-icon icon-tasks"></i>Previously Borrowed Books </a></li>
                                <li><a href="recommendationsm"><i class="menu-icon icon-list"></i>Recommend Books </a></li>
                                <li><a href="currentm"><i class="menu-icon icon-list"></i>Currently Issued Books </a></li>
                            </ul>
                            <ul class="widget widget-menu unstyled">
                                <li><a href="logout"><i class="menu-icon icon-signout"></i>Logout </a></li>
                            </ul>
                        </div>
                        <!--/.sidebar-->
                    </div>
                    <!--/.span3-->
                    
                    <div class="span9">
                        <div class="content">

                        <div class="module">
                            <div class="module-head">
                                <h3>Book Details</h3>
                            </div>
                            <div class="module-body">
                                <a href="/membre/allbookm" class="btn btn-primary">Go Back</a>     
                                <table class="table" id = "tables">
                                  <thead>
                                    <tr>
                                      <th>Book id</th>
                                      <th>Book name</th>
                                      <th>Availability</th>
                                      <th>author</th>
                                      <th>publisher</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    @foreach($book as $bk)
                                    <tr>
                                        <td>{{$bk -> id}}</td>
                                        <td>{{$bk -> titre}}</td>
                                        <td>{{$bk -> Availability}}</td>
                                        <?php
                                        $val;
                                        $val1;
                                            foreach($authors as $a) {
                                                if ($a['id'] === $bk -> authors_id) {
                                                    $val = $a['author'];
                                                }
                                            }
                                            foreach($publishers as $pb) {
                                                if ($pb['id'] == $bk -> publishers_id) {
                                                    $val1 =  $pb['nom'];
                                                }
                                            }
                                        ?>
                                        <td><?php echo $val?></td>
                                        <td><?php echo $val1;?></td>
                                    </tr>
                                    @endforeach
                                 </tbody>
                                  </table>                        
                               </div>
                           </div>
                            </div>
                    <!--/.span3-->
                    <!--/.span9-->
                
                    <!--/.span3-->
                    <!--/.span9-->
                </div>
                    
                    <!--/.span9-->
                </div>
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
<div class="footer">
            <div class="container">
           
            </div>
        </div>
        
        <!--/.wrapper-->
            <script src="/front_assets/scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
            <script src="/front_assets/scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
            <script src="/front_assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
            <script src="/front_assets/scripts/flot/jquery.flot.js" type="text/javascript"></script>
            <script src="/front_assets/scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
            <script src="/front_assets/scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
            <script src="/front_assets/scripts/common.js" type="text/javascript"></script>
         
    </body>

</html>