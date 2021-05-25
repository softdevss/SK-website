<nav  class="navbar navbar-inverse navbar-fixed-top " role="navigation" style="background:#fff; border:none;">
    <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header" ><button style="border:none; background-color:#2d6cdf;" type="button" class="navbar-toggle" data-toggle="collapse"
                data-target=".navbar-ex1-collapse"><span class="sr-only">Toggle navigation</span><span
                    class="icon-bar" style="background-color:#fff;"></span><span class="icon-bar"style="background-color:#fff;"></span><span class="icon-bar" style="background-color:#fff;"></span></button><a
                class="navbar-brand" href="../admin" style="color:#364f6b;">SK SAN ISIDRO ADMINISTRATOR</a></div>
        <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav"  >
                <li><a href="../index.php"></i>Home</a></li>
                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                            class="fa fa-user"></i>
                           
                            <?php
                        if(isset( $_SESSION['username'])){
                        
                        echo $_SESSION['username'];
                            
                        }
                        
                        ?>
 <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><i class="fa fa-fw fa-user"></i>Profile</a></li>
                       
                        <li class="divider"></li>

                        <li><a href="../includes/logout.php"><i class="fa fa-fw fa-power-off"></i>Log Out</a></li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav side-nav" style="background:#ffff;">
                        <li><a href="index.php"><i class="fa fa-home fa-fw"></i>Home</a></li>
                        <!-- <li><a href="charts.html"><i class="fa fa-fw fa-bar-chart-o"></i>Charts</a></li> -->
                        <li ><a href="./contact.php"><i class='bx bxs-user'></i> Contacts</a></li>

                            <li><a href="javascript:;" data-toggle="collapse" data-target="#demo1">
                            <i class="fa fa-fw fa-arrows-v"></i> Request <i class="fa fa-fw fa-caret-down"></i></a>
                                <ul id="demo1" class="collapse">
                                    <li><a href="request.php"><i class='bx bx-user-circle' ></i> View Request</a></li>
                                    <li><a href="request.php?source=add_request"><i class='bx bx-user-plus' ></i> Add request</a></li>
                                </ul>
                            </li>

                        <li><a href="./appointment.php"><i class='bx bxs-donate-heart' ></i>Appointments</a></li>
                        <li><a href="./donations.php"><i class='bx bxs-donate-heart' ></i>Donations</a></li>
                        <li><a href="./volunteerview.php"><i class='bx bxs-user-voice'></i>Be A Volunteer</a></li>
                        <li><a href="./helpdeskview.php"><i class='bx bx-bookmark'></i>Online Help Desk</a></li>

                        <li><a href="javascript:;" data-toggle="collapse" data-target="#demo"><i
                                    class="fa fa-fw fa-arrows-v"></i> Users <i class="fa fa-fw fa-caret-down"></i></a>
                            <ul id="demo" class="collapse">
                                <li><a href="users.php"><i class='bx bx-user-circle' ></i> View Users</a></li>
                                <li><a href="users.php?source=add_users"><i class='bx bx-user-plus' ></i> Add user</a></li>
                            </ul>
                        </li>
                       
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
</nav>