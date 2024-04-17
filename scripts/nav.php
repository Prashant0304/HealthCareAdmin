<div class="sidebar" id="sidebar">
        <div class="sidebar-inner slimscroll">
          <div id="sidebar-menu" class="sidebar-menu">
            <ul>
              <li class="menu-title">Main</li>
            
            <?php
            if($_SESSION['role'] == 1)
            {
            ?>
            <li>
                <a href="dashboard">
                  <span class="menu-side">
                    <img src="assets/img/icons/menu-icon-01.svg" alt="">
                  </span>
                  <span>Dashboard</span>
                </a>
              </li>

              
			<li class="submenu">
			<a href="#"><span class="menu-side"><i class="fa fa-flag"></i></span> <span>Patients</span> <span class="menu-arrow"></span></a>
			<ul style="display: none;">
			<li><a href="add_patient">Add</a></li>
			<li><a href="list_patient">List</a></li>
			</ul>
			</li>
              
			<li class="submenu">
			<a href="#"><span class="menu-side"><i class="fa fa-flag"></i></span> <span>Doctors</span> <span class="menu-arrow"></span></a>
			<ul style="display: none;">
			<li><a href="add_doctor">Add</a></li>
			<li><a href="list_doctor">List</a></li>
			</ul>
			</li>

			<li class="submenu">
			<a href="#"><span class="menu-side"><i class="fa fa-flag"></i></span> <span>Disease</span> <span class="menu-arrow"></span></a>
			<ul style="display: none;">
			<li><a href="add_disease">Add</a></li>
			<li><a href="list_disease">List</a></li>
			</ul>
			</li>

			<li class="submenu">
			<a href="#"><span class="menu-side"><i class="fa fa-flag"></i></span> <span>Appointments</span> <span class="menu-arrow"></span></a>
			<ul style="display: none;">
			<li><a href="add_appointment">Add</a></li>
			<li><a href="list_appointment">List</a></li>
			</ul>
			</li>
              
<!--
            <li>
                <a href="print">
                  <span class="menu-side">
                    <img src="assets/img/icons/menu-icon-01.svg" alt="">
                  </span>
                  <span>Print Subscription</span>
                </a>
              </li>
-->
<!--
			<li class="submenu">
			<a href="#"><span class="menu-side"><img src="assets/img/icons/menu-icon-03.svg" alt=""></span> <span> Customer</span> <span class="menu-arrow"></span></a>
			<ul style="display: none;">
			<li><a href="customers">Add</a></li>
			<li><a href="list-customers">List</a></li>
			</ul>
			</li>
			<li class="submenu">
			<a href="#"><span class="menu-side"><img src="assets/img/icons/menu-icon-08.svg" alt=""></span> <span> Employees</span> <span class="menu-arrow"></span></a>
			<ul style="display: none;">
			<li><a href="add-employee">Add</a></li>
			<li><a href="list-employee">List</a></li>
			</ul>
			</li>
			<li class="submenu">
			<a href="#"><span class="menu-side"><i class="fa fa-cube"></i></span> <span>Tasks</span> <span class="menu-arrow"></span></a>
			<ul style="display: none;">
			<li><a href="tasks">Add</a></li>
			<li><a href="alltasks">List</a></li>
			<li><a href="dailytasks">Daily Tasks</a></li>
			</ul>
			</li>
			<li class="submenu">
			<a href="#"><span class="menu-side"><i class="fa fa-flag"></i></span> <span>Completed<br />Status</span> <span class="menu-arrow"></span></a>
			<ul style="display: none;">
			<li><a href="bussiness_completed">Add</a></li>
			<li><a href="bussiness">List</a></li>
			</ul>
			</li>
			<li class="submenu">
			<a href="#"><span class="menu-side"><img src="assets/img/icons/menu-icon-13.svg" alt=""></span> <span>Balance Sheet</span> <span class="menu-arrow"></span></a>
			<ul style="display: none;">
			<li><a href="balance_sheet">Add</a></li>
			<li><a href="list-bsheet">List</a></li>
			</ul>
			</li>
			<li class="submenu">
			<a href="#"><span class="menu-side"><img src="assets/img/icons/menu-icon-09.svg" alt=""></span> <span>Expenses</span> <span class="menu-arrow"></span></a>
			<ul style="display: none;">
			<li><a href="add_expenses">Add</a></li>
			<li><a href="expenses">List</a></li>
			</ul>
			</li>
-->
			


			

		
			<?php
			}
			else
			{
            ?>
			
			<?php
				
			}
			?>
	


            </ul>
            <div class="logout-btn">
              <a href="scripts/logout">
                <span class="menu-side">
                  <img src="assets/img/icons/logout.svg" alt="">
                </span>
                <span>Logout</span>
              </a>
            </div>
          </div>
        </div>
      </div>
