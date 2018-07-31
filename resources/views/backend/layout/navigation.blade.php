
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="{{route('home')}}">Welcome To Admin Panel</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Reports">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#Reports" data-parent="#exampleAccordion">
                    <i class="fa fa-fw fa-wrench"></i>
                    <span class="nav-link-text">Reports</span>
                </a>
                <ul class="sidenav-second-level collapse" id="Reports">
                    <li><a href="mainstock.php">Main Stock Book</a></li>
                    <li><a href="issubook.php">All Issued Books</a></li>
                    <li><a href="availablebook.php">All Available Books</a></li>
                    <li><a href="#">Specific Book Search</a></li>
                    <li><a href="#">Subject Based Book List</a></li>
                    <li><a href="allmember.php">All Members Information</a></li>
                    <li><a href="#">Specific Member Information</a></li>
                    <li><a href="#"> Total Numbers of Member</a></li>
                    <li><a href="#"> Total Numbers of Book</a></li>
                    <li><a href="#">Total Numbers of Issued Book</a></li>
                </ul>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Student">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
                    <i class="fa fa-fw fa-wrench"></i>
                    <span class="nav-link-text">Student</span>
                </a>
                <ul class="sidenav-second-level collapse" id="collapseComponents">
                    <li>
                        <a href="navbar.html">Add  Information</a>
                    </li>

                    <li>
                        <a href="cards.html">Search  Information</a>
                    </li>
                    <li>
                        <a href="cards.html">Edit  Information</a>
                    </li>
                    <li>
                        <a href="cards.html">Delete  Information</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Teacher">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponentsteacher" data-parent="#exampleAccordion">
                    <i class="fa fa-fw fa-wrench"></i>
                    <span class="nav-link-text">Teacher's</span>
                </a>
                <ul class="sidenav-second-level collapse" id="collapseComponentsteacher">
                    <li>
                        <a href="navbar.html">Add  Information</a>
                    </li>

                    <li>
                        <a href="cards.html">Search  Information</a>
                    </li>
                    <li>
                        <a href="cards.html">Edit  Information</a>
                    </li>
                    <li>
                        <a href="cards.html">Delete  Information</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Staff">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponentsstaff" data-parent="#exampleAccordion">
                    <i class="fa fa-fw fa-wrench"></i>
                    <span class="nav-link-text">Staff</span>
                </a>
                <ul class="sidenav-second-level collapse" id="collapseComponentsstaff">
                    <li>
                        <a href="navbar.html">Add  Information</a>
                    </li>

                    <li>
                        <a href="cards.html">Search  Information</a>
                    </li>
                    <li>
                        <a href="cards.html">Edit  Information</a>
                    </li>
                    <li>
                        <a href="cards.html">Delete  Information</a>
                    </li>
                </ul>
            </li>

            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Books">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#Aqusion" data-parent="#exampleAccordion">
                    <i class="fa fa-fw fa-wrench"></i>
                    <span class="nav-link-text">Books</span>
                </a>
                <ul class="sidenav-second-level collapse" id="Aqusion">
                    <li><a href="addbook.php">Add Book</a></li>
                    <li><a href="srcbook.php">Search Book</a></li>
                    <li><a href="editbook.php">Edit Book</a></li>
                    <li><a href="deletebook.php">Delete Book</a></li>
                </ul>
            </li>

            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Circulation">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#Circulation" data-parent="#exampleAccordion">
                    <i class="fa fa-fw fa-wrench"></i>
                    <span class="nav-link-text">Circulation</span>
                </a>
                <ul class="sidenav-second-level collapse" id="Circulation">
                    <li><a href="landing.php">Lending</a></li>
                    <li><a href="returning.php">Returning</a></li>
                </ul>
            </li>

            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Admin">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#Admin" data-parent="#exampleAccordion">
                    <i class="fa fa-fw fa-wrench"></i>
                    <span class="nav-link-text">Admin</span>
                </a>
                <ul class="sidenav-second-level collapse" id="Admin">
                    <li><a href="#">Add Admin</a></li>
                    <li><a href="#">Search Admin</a></li>
                    <li><a href="#">Edit Admin</a></li>
                    <li><a href="#">Delete Admin</a></li>
                </ul>
            </li>

        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-fw fa-envelope"></i>
                    <span class="d-lg-none">Messages
              <span class="badge badge-pill badge-primary">12 New</span>
            </span>
                    <span class="indicator text-primary d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
                </a>
                <div class="dropdown-menu" aria-labelledby="messagesDropdown">
                    <h6 class="dropdown-header">New Messages:</h6>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
                        <strong>David Miller</strong>
                        <span class="small float-right text-muted">11:21 AM</span>
                        <div class="dropdown-message small">Hey there! This new version of SB Admin is pretty awesome! These messages clip off when they reach the end of the box so they don't overflow over to the sides!</div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
                        <strong>Jane Smith</strong>
                        <span class="small float-right text-muted">11:21 AM</span>
                        <div class="dropdown-message small">I was wondering if you could meet for an appointment at 3:00 instead of 4:00. Thanks!</div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
                        <strong>John Doe</strong>
                        <span class="small float-right text-muted">11:21 AM</span>
                        <div class="dropdown-message small">I've sent the final files over to you for review. When you're able to sign off of them let me know and we can discuss distribution.</div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item small" href="#">View all messages</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-fw fa-bell"></i>
                    <span class="d-lg-none">Alerts
              <span class="badge badge-pill badge-warning">6 New</span>
            </span>
                    <span class="indicator text-warning d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
                </a>
                <div class="dropdown-menu" aria-labelledby="alertsDropdown">
                    <h6 class="dropdown-header">New Alerts:</h6>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
              </span>
                        <span class="small float-right text-muted">11:21 AM</span>
                        <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
              <span class="text-danger">
                <strong>
                  <i class="fa fa-long-arrow-down fa-fw"></i>Status Update</strong>
              </span>
                        <span class="small float-right text-muted">11:21 AM</span>
                        <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
              </span>
                        <span class="small float-right text-muted">11:21 AM</span>
                        <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item small" href="#">View all alerts</a>
                </div>
            </li>
            <li class="nav-item">
                <form class="form-inline my-2 my-lg-0 mr-lg-2">
                    <div class="input-group">
                        <input class="form-control" type="text" placeholder="Search for...">
                        <span class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fa fa-search"></i>
                </button>
              </span>
                    </div>
                </form>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
                    <i class="fa fa-fw fa-sign-out"></i> Logout</a>

            </li>
        </ul>
        <ul class="navbar-nav sidenav-toggler">
            <li class="nav-item">
                <a class="nav-link text-center" id="sidenavToggler">
                    <i class="fa fa-fw fa-angle-left"></i>
                </a>

            </li>
        </ul>
    </div>

</nav>