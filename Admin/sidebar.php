 <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="profile-image">
                <img src="images/faces/face5.jpg" alt="image"/>
              </div>
              <div class="profile-name">
                <p class="name">
                  Welcome Admin
                </p>
                <p class="designation">
                  Super Admin
                </p>
              </div>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="dashboard.php">
              <i class="fa fa-home menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
         
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#page-layouts" aria-expanded="false" aria-controls="page-layouts">
              <i class="fas fa-copy menu-icon"></i>
              <span class="menu-title">RC Registrations</span>
              <i class="menu-arrow"></i>
            </a>
          <div class="collapse" id="page-layouts">
             <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="requested_rc.php">Requested RC</a></li>
              </ul>
               <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="accepted_rc.php">Accepted RC</a></li>
              </ul>
               <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="rejected_rc.php">Rejected RC</a></li>
              </ul>
           </div>
          </li>
          <li class="nav-item d-none d-lg-block">
            <a class="nav-link" data-toggle="collapse" href="#sidebar-layouts" aria-expanded="false" aria-controls="sidebar-layouts">
              <i class="fas fa-file menu-icon"></i>
              <span class="menu-title">PUC</span>
              <i class="menu-arrow"></i>
            </a>
          <div class="collapse" id="sidebar-layouts">
             <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="requested_puc.php">Requested PUC</a></li>
              </ul>
               <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="accepted_puc.php">Accepted PUC</a></li>
              </ul>
               <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="rejected_puc.php">Rejected PUC</a></li>
              </ul>
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="paid_puc.php">Paid PUC</a></li>
              </ul>
            </div>
          </li>
<!--           <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="far fa-compass menu-icon"></i>
              <span class="menu-title">Insurance</span>
              <i class="menu-arrow"></i>
            </a>
           <div class="collapse" id="ui-basic">
             <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="requested_insurance.php">View Insurance</a></li>
              </ul>
               
            </div>
          </li>
           <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui1-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="far fa-compass menu-icon"></i>
              <span class="menu-title">License</span>
              <i class="menu-arrow"></i>
            </a>
           <div class="collapse" id="ui1-basic">
             <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="requested_insurance.php">View License</a></li>
              </ul>
               
            </div> -->
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-advanced" aria-expanded="false" aria-controls="ui-advanced">
              <i class="fas fa-users menu-icon"></i>
              <span class="menu-title">User</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-advanced">
           
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="view_user.php">View User</a></li>                
              
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
              <i class="fas fa-user menu-icon"></i>
              <span class="menu-title">Checker</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="add_checker.php">Add Checker</a></li>               
                <li class="nav-item"><a class="nav-link" href="view_checker.php">View Checker</a></li>
              </ul>
            </div>
          </li>



          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#form1-elements" aria-expanded="false" aria-controls="form-elements">
              <i class="fas fa-building menu-icon"></i>
              <span class="menu-title">Fine</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form1-elements">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="add_fine.php">Add Fine</a></li>               
                <li class="nav-item"><a class="nav-link" href="view_fine.php">View Fine</a></li>
              </ul>
            </div>
          </li>

          




          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#Feedback" aria-expanded="false" aria-controls="Feedback">
              <i class="fas fa-comments menu-icon"></i>
              <span class="menu-title">Feedback</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="Feedback">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="view_feedback.php">View Feedbacks</a></li>                
              </ul>
            </div>
          </li>

          
      
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#settings" aria-expanded="false" aria-controls="settings">
              <i class="fas fa-cogs menu-icon"></i>
              <span class="menu-title">Settings</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="settings">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="admin_change_password.php">Change Password</a></li>                
                <li class="nav-item"><a class="nav-link" href="indexs.php">Logout</a></li>
              </ul>
            </div>
          </li>

        </ul>
      </nav>