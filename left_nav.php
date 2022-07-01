<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link img">
      <img src="img/112-1124337_logo-ticket-png-transparent-png1.png" alt="">
      <span class="brand-text font-weight-light"><?php
        if($_SESSION['user_type']=="1"){
          echo"Admin";

        }elseif($_SESSION['user_type']=="2"){
          echo"Employee User";

        }elseif($_SESSION['user_type']=="3"){
          echo"Service Staf";

        }
      
      ?></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="theme/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $_SESSION['login_username'];?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          
          <li class="nav-header">LABELS</li>
          <li class="nav-item">
            <a href="user.php" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p class="text">All User</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="profile.php" class="nav-link">
              <i class="nav-icon far fa-circle text-warning"></i>
              <p>Profile</p>
            </a>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
