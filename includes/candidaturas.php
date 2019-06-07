<div id="wrapper">
            <div class="topbar">
                <div class="topbar-left">
                    <a href="index.php" class="logo"><img src="<? echo $logodacomunidade ?>" width="180" height="100"></a>
                </div>
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <ul class="nav navbar-nav navbar-left">
                            <li>
                                <button class="button-menu-mobile open-left">
                                    <i class="zmdi zmdi-menu"></i>
                                </button>
                            </li>
                            <li>
                                <h4 class="page-title"><?php echo CONTENT_INICIO; ?>  /  My VIP  /  </h4>
                            </li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <div style="padding-top: 15px; padding-right: 5px;">
                                    <a href="?l=pt"><span class="flag-icon flag-icon-pt flag-icon"></span></a>
                                </div>                                
                                <div style="padding-top: 5px; padding-right: 5px;">
                                    <a href="?l=en"><span class="flag-icon flag-icon-gb flag-icon"></span></a>
                                </div>                                                                
                            </ul>
                        </div>
                    </div>
            </div>
            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">
                    <div class="user-box">
                        <div class="user-img">
                            <img src="<?php echo $steamprofile['avatarmedium'] ?>" alt="<?php echo $steamprofile['personaname'] ?>" title="<?php echo $steamprofile['personaname'] ?>" class="img-circle img-thumbnail img-responsive">
                            <h5><a href="<?php echo $steamprofile['profileurl'] ?>"><? echo $steamprofile['personaname'] ?></a> </h5>                            
                        </div>
                        <div style="padding-top: 15px;">
                        <?php 
                                if($steamprofile['personastate'] == 0) {
                                    echo '<span class="label label-danger">Offline</span>';
                                } elseif ($steamprofile['personastate'] == 1) {
                                    echo '<span class="label label-primary">Online</span>';
                                } elseif ($steamprofile['personastate'] == 2) {
                                    echo '<span class="label label-danger">' . CONTENT_OCUPADO . '</span>';
                                } elseif ($steamprofile['personastate'] == 3) {
                                    echo '<span class="label label-warning">' . CONTENT_AUSENTE . '</span>';
                                } elseif ($steamprofile['personastate'] == 4) {
                                    echo '<span class="label label-primary">' . CONTENT_ADORMIR . '</span>';
                                }
                            ?>                        
                        </div>
                        <ul class="list-inline" style="padding-top: 5px;">
                            <li>
                                <a href="profile.php" >
                                    <i class="zmdi zmdi-settings"></i>
                                </a>
                            </li>

                            <li>
                                <a href="?logout" class="text-custom">
                                    <i class="zmdi zmdi-power"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div id="sidebar-menu">
                        <ul>
                            <li>
                                <a href="index.php" class="waves-effect"><i class="zmdi zmdi-home zmdi-hc-fw"></i> <span> <?php echo CONTENT_INICIO; ?> </span> </a>
                            </li>

                            <li>
                                <a href="https://tugaarmy.pt/bans/index.php?p=servers" class="waves-effect"><i class="zmdi zmdi-dns"></i> <span> <?php echo CONTENT_SERVIDORES; ?> </span> </a>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect active"><i class="fas fa-award"></i> <span> VIP </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href=""><?php echo CONTENT_COMPRARVIP; ?>    <span class="label label-danger"><?php echo CONTENT_SOON; ?></span></a></li>
                                    <li><a href=""><?php echo CONTENT_OFERECERVIP; ?>    <span class="label label-danger"><?php echo CONTENT_SOON; ?></span></a></li>
                                    <li><a href="myvip.php">My VIP    </a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="fas fa-user"></i> <span> <?php echo CONTENT_CONTA; ?> </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href=""><?php echo CONTENT_AMINHACONTA; ?>    <span class="label label-danger"><?php echo CONTENT_SOON; ?></span></a></li>
                                    <li><a href=""><?php echo CONTENT_DEFINIÇÕES; ?>    <span class="label label-danger"><?php echo CONTENT_SOON; ?></span></a></li>
                                    <li><a href="?logout"><?php echo CONTENT_MUDARDECONTA; ?>    </a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="https://discord.gg/mMhtxnr" class="waves-effect"><i class="fab fa-discord"></i> <span> Discord </span></a>
                            </li>                            

                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="content-page">
                <div class="content">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card-box">
                        			<h4 class="header-title m-t-0 m-b-30"><?php echo CONTENT_COMPRAS; ?></h4>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th><?php echo CONTENT_COMPRASNR; ?></th>
                                                <th><?php echo CONTENT_COMPRASNM; ?></th>
                                                <th><?php echo CONTENT_COMPRASD; ?></th>
                                                <th><?php echo CONTENT_COMPRASDD; ?></th>
                                                <th><?php echo CONTENT_COMPRASS; ?></th>
                                                <th><?php echo CONTENT_COMPRAST; ?></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>VIP</td>
                                                    <td><? echo '<time datetime="'.date('c').'">'.date('d / m / Y').'</time>'; ?></td>
                                                    <td>-- / -- / ----</td>
                                                    <td><span class="label label-success"><?php echo CONTENT_COMPRADO; ?></span></td>
                                                    <td>VIP</td>
                                                </tr>
                                                <tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>VIP</td>
                                                    <td>-- / -- / ----</td>
                                                    <td>-- / -- / ----</td>
                                                    <td><span class="label label-danger"><?php echo CONTENT_EXPIRADO; ?></span></td>
                                                    <td>VIP</td>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <center><p>Members panel made by <a href="https://steamcommunity.com/id/ShutAP1337">ShutAP</a></p></center>
        <script>
            var resizefunc = [];
        </script>
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>
        <!--[if IE]>
        <script type="text/javascript" src="assets/plugins/jquery-knob/excanvas.js"></script>
        <![endif]-->
        <script src="assets/plugins/jquery-knob/jquery.knob.js"></script>
		<script src="assets/plugins/morris/morris.min.js"></script>
		<script src="assets/plugins/raphael/raphael-min.js"></script>
        <script src="assets/pages/jquery.dashboard.js"></script>
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>
