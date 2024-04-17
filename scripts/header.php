      <div class="header">
        <div class="header-left">
          <a href="#" class="logo">
            <img src="assets/img/stock.png" style="width: 201px;" alt="">
 
          </a>
        </div>
        <a id="toggle_btn" href="javascript:void(0);">
          <img src="assets/img/icons/bar-icon.svg" alt="">
        </a>
        <a id="mobile_btn" class="mobile_btn float-start" href="#sidebar">
          <img src="assets/img/icons/bar-icon.svg" alt="">
        </a>
        <ul class="nav user-menu float-end">
          <li class="nav-item dropdown has-arrow user-profile-list">
            <a href="#" class="dropdown-toggle nav-link user-link" data-bs-toggle="dropdown">
              <div class="user-names">
                <h5> <?php echo $_SESSION['name'];?> </h5> <?php
				if($_SESSION['role'] == 1)
				{
				?> <span>Admin</span> <?php
				}
				else
				{
				?> <span>Employee</span> <?php
				}	
				?>
              </div>
              <span class="user-img">
                <img src="assets/img/logo.png" alt="Admin">
              </span>
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="scripts/logout">Logout</a>
            </div>
          </li>
        </ul>
        <div class="dropdown mobile-user-menu float-end">
          <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa-solid fa-ellipsis-vertical"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-end">
            <a class="dropdown-item" href="scripts/logout">Logout</a>
          </div>
        </div>
      </div>
