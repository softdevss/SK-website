<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header"><button type="button" class="navbar-toggle" data-toggle="collapse"
                data-target=".navbar-ex1-collapse"><span class="sr-only">Toggle navigation</span><span
                    class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a
                class="navbar-brand" href="../admin">SK SAN ISIDRO ADMINISTRATOR</a></div>
        <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
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
                    <ul class="nav navbar-nav side-nav">
                        <li><a href="index.php"><i class="fa fa-home fa-fw"></i>Home</a></li>
                        <!-- <li><a href="charts.html"><i class="fa fa-fw fa-bar-chart-o"></i>Charts</a></li> -->
                        <li><a href="./contact.php"><i class="fas fa-pencil fa-fw"></i> Contacts</a></li>
                        <li><a href="./requestletter.php"><i class="fas fa-pencil fa-fw"></i> Request letter</a></li>
                        <li><a href="./donations.php"><i class="fa fa-book fa-fw"></i>Donations</a></li>
                        <li><a href="./volunteerview.php"><i class="fa fa-book fa-fw"></i>Be A Volunteer</a></li>
                        <li><a href="./helpdeskview.php"><i class="fa fa-book fa-fw"></i>Online Help Desk</a></li>
                        <li><a href="javascript:;" data-toggle="collapse" data-target="#demo"><i
                                    class="fa fa-fw fa-arrows-v"></i> Users <i class="fa fa-fw fa-caret-down"></i></a>
                            <ul id="demo" class="collapse">
                                <li><a href="users.php"><i class="fa fa-user fa-fw"></i> View Users</a></li>
                                <li><a href="users.php?source=add_users"><i class="fa fa-user fa-fw"></i> Add user</a></li>
                            </ul>
                        </li>
                        <li><a href="request.php"><i class="fa fa-fw fa-dashboard"></i> Make Request</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
</nav>