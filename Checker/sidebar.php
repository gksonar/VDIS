 <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="profile-image">
                <img src="images/faces/face5.jpg" alt="image"/>
              </div>
              <div class="profile-name">
                <p class="name">
                  <a href="#">Hello <?php echo $_SESSION['c_email'];?></a>
                </p>
                <p class="designation">
                  Checker
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
              <i class="fab fa-trello menu-icon"></i>
              <span class="menu-title">Search Vehicle </span>
               <i class="menu-arrow"></i>
             
            </a>
          <div class="collapse" id="page-layouts">
             <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="search_vehicle.php">Search Vehicle</a></li>
              </ul>
             
          </div>
          </li>


          
    
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#settings" aria-expanded="false" aria-controls="settings">
              <i class="fab fa-wpforms menu-icon"></i>
              <span class="menu-title">Settings</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="settings">
              <ul class="nav flex-column sub-menu">
                 <li class="nav-item"><a class="nav-link" href="view_profile.php">View Profile</a></li> 
                <li class="nav-item"><a class="nav-link" href="checker_change_password.php">Change Password</a></li>                
                <li class="nav-item"><a class="nav-link" href="checker_logout.php">Logout</a></li>
              </ul>
            </div>
          </li>
          
        </ul>
      </nav>