<header class="header">
            <div class="header__container">
               

                <a href="#" class="header__logo"></a>
    
                <div class="header__search">
                
                 
                </div>
    
                <div class="header__toggle">
                    <i class='bx bx-menu' id="header-toggle"></i>
                </div>
            </div>
        </header>

        <!--========== NAV ==========-->
        <div class="nav" id="navbar">
            <nav class="nav__container">
                <div>
                    <a href="#" class="nav__link nav__logo">
                    <i class='bx bxs-user-voice' style="font-size:2rem;"></i>
                        <span class="nav__logo-name">SK ADMINISTRATOR</span>
                    </a>
    
                    <div class="nav__list">
                        <div class="nav__items">
                            <h3 class="nav__subtitle"></h3>
    
                            <a href="../index.php" class="nav__link active">
                                <i class='bx bx-home nav__icon' ></i>
                                <span class="nav__name">Home</span>
                            </a>
                            <a href="./contact.php" class="nav__link">
                                <i class='bx bx-user-pin nav__icon' ></i>
                                <span class="nav__name">Contacts</span>
                            </a>
                            
                            <div class="nav__dropdown">
                                <a href="#" class="nav__link">
                                    <i class='bx bx-notification nav__icon' ></i>
                                    <span class="nav__name">Request</span>
                                    <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
                                </a>

                                <div class="nav__dropdown-collapse">
                                    <div class="nav__dropdown-content">
                                        <a href="request.php?source=add_request" class="nav__dropdown-item">Add Request</a>
                                        <a href="request.php" class="nav__dropdown-item">View Request</a>
                                    </div>
                                </div>
                            </div>

                            <a href="./appointment.php" class="nav__link">
                                <i class='bx bx-calendar nav__icon' ></i>
                                <span class="nav__name">Appointment</span>
                            </a>
                            <a href="./categories.php" class="nav__link">
                                <i class='bx bxs-spreadsheet nav__icon' ></i>
                                <span class="nav__name">Categories</span>
                            </a>
                        </div>
    
                        <div class="nav__items">
                            <h3 class="nav__subtitle">Menu</h3>
                            <a href="./donations.php" class="nav__link">
                                <i class='bx bx-coin-stack nav__icon' ></i>
                                <span class="nav__name">Donations</span>
                            </a>
    
                            <div class="nav__dropdown">
                                <a href="#" class="nav__link">
                                    <i class='bx bx-calendar-event nav__icon' ></i>
                                    <span class="nav__name">Event</span>
                                    <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
                                </a>

                                <div class="nav__dropdown-collapse">
                                    <div class="nav__dropdown-content">
                                    <a href="events.php" class="nav__dropdown-item">View All events</a>
                                        <a href="events.php?source=add_event" class="nav__dropdown-item">Add Events</a>
                                      
                                    </div>
                                </div>

                            </div>

                            <a href="./volunteerview.php"" class="nav__link">
                                <i class='bx bx-compass nav__icon' ></i>
                                <span class="nav__name">Be a Volunteer</span>
                            </a>
                            <a href="./helpdeskview.php" class="nav__link">
                                <i class='bx bx-bookmark nav__icon' ></i>
                                <span class="nav__name">Health desk </span>
                            </a>
                            <div class="nav__dropdown">
                                <a href="#" class="nav__link">
                                    <i class='bx bxs-user-circle nav__icon' ></i>
                                    <span class="nav__name">Users</span>
                                    <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
                                </a>

                                <div class="nav__dropdown-collapse">
                                    <div class="nav__dropdown-content">
                                        <a href="users.php" class="nav__dropdown-item">View All Users</a>
                                        <a href="users.php?source=add_user" class="nav__dropdown-item">Add User</a>
                                      
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <a href="../includes/logout.php" class="nav__link nav__logout">
                    <i class='bx bx-log-out nav__icon' ></i>
                    <span class="nav__name">Log Out</span>
                </a>
            </nav>
        </div>

        