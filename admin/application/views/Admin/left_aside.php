<body class="hold-transition skin-blue sidebar-mini box">
  <div class="overlay" style="display: none;">
    <i class="fa fa-refresh fa-spin"></i>
  </div>
  <div class="wrapper">
    <header class="main-header">
      <a href="<?php echo base_url(); ?>" class="logo">
        <span class="logo-mini"><?php echo $this->session->portal_config['short_name']; ?></span>
        <span class="logo-lg"><?php echo $this->session->portal_config['club_name']; ?></span>
      </a>
      <nav class="navbar navbar-static-top">
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="<?php echo base_url('assets/dist/img/f000-icon.png'); ?>" class="user-image" alt="User Image">
                <span class="hidden-xs"><?php echo $this->session->login_data['user_id']; ?></span>
              </a>
              <ul class="dropdown-menu">
                <li class="user-header">
                  <img src="<?php echo base_url('assets/dist/img/dfd1-icon.png'); ?>" class="img-circle" alt="User Image">
                  <p>
                    <?php echo $this->session->login_data['user_id']; ?>
                    <small><?php echo $this->session->login_data['user_id']; ?></small>
                  </p>
                </li>
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="<?php echo site_url('admin/admin/setting'); ?>" class="btn btn-default btn-flat">Profile</a>
                  </div>
                  <div class="pull-right">
                    <a href="<?php echo site_url('login/logout'); ?>" class="btn btn-default btn-flat">Sign out</a>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
    </header>

    <aside class="main-sidebar">
      <?php
      if(($this->session->login_data))
      {
        ?>
        <section class="sidebar">


          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
          </form>

          <ul class="sidebar-menu">
            <li class="header">
              MAIN NAVIGATION
            </li>

            <li>
              <a href="<?php echo base_url(); ?>">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
              </a>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-cog"></i>
                <span>Academic Setup</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">

                <li class="treeview">
                  <a href="#">
                    <i class="fa fa-ge"></i> <span>Academic Year</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="<?php echo site_url('Admin/academic/add'); ?>"><i class="fa fa-plus-circle"></i>Add Academic Year</a></li>
                    <li><a href="<?php echo site_url('Admin/academic'); ?>"><i class="ion ion-clipboard"></i>View All Academic Year</a></li>
                  </ul>
                </li>

                <li class="treeview">
                  <a href="#">
                    <i class="fa fa-ge"></i> <span>Stream</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="<?php echo site_url('Admin/stream/add'); ?>"><i class="fa fa-plus-circle"></i>Add Stream</a></li>
                    <li><a href="<?php echo site_url('Admin/stream'); ?>"><i class="ion ion-clipboard"></i>View All Stream</a></li>
                  </ul>
                </li>

                <li class="treeview">
                  <a href="#">
                    <i class="fa fa-gg"></i> <span>Courses</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="<?php echo site_url('Admin/course/add'); ?>"><i class="fa fa-window-close-o"></i>Add course</a></li>
                    <li><a href="<?php echo site_url('Admin/course'); ?>"><i class="fa fa-window-close-o"></i>View Courses</a></li>
                  </ul>
                </li>

                <li class="treeview">
                  <a href="#">
                    <i class="fa fa-gitlab"></i> <span>Semester</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="<?php echo site_url('Admin/semester/add'); ?>"><i class="fa fa-window-close-o"></i>Add Semester</a></li>
                    <li><a href="<?php echo site_url('Admin/semester'); ?>"><i class="fa fa-window-close-o"></i>View Semesters</a></li>
                  </ul>
                </li>

                <li class="treeview">
                  <a href="#">
                    <i class="fa fa-connectdevelop"></i> <span>Subject</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="<?php echo site_url('Admin/subject'); ?>"><i class="fa fa-window-close-o"></i>Add Subjects</a></li>
                    <li><a href="<?php echo site_url('Admin/subject/detail'); ?>"><i class="fa fa-window-close-o"></i>View Subjects</a></li>
                  </ul>
                </li>

                <li class="treeview">
                  <a href="#">
                    <i class="fa fa-connectdevelop"></i> <span>Assign Subject</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="<?php echo site_url('Admin/subject_assign/'); ?>"><i class="fa fa-window-close-o"></i>Assign Subject to Faculty</a></li>
                    <li><a href="<?php echo site_url('Admin/subject_assign/detail'); ?>"><i class="fa fa-window-close-o"></i>View Assigned Subjects</a></li>
                  </ul>
                </li>

              </ul>          
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-user"></i>
                <span>Student</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <!--   <li><a href="<?php echo site_url('student/add'); ?>"><i class="fa fa-plus"></i>Add Student</a></li> -->
                <li><a href="<?php echo site_url('student'); ?>"><i class="fa fa-user"></i>View Students</a></li>

                <li class="treeview">
                  <a href="#">
                    <i class="fa fa-bullseye"></i> <span>Student Action</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="<?php echo site_url('student/student_request'); ?>"><i class="fa fa-circle-o"></i>Request From Students</a></li>
                    <li><a href="<?php echo site_url('student/student_feedback'); ?>"><i class="fa fa-circle-o"></i>Feedback From Students</a></li>
                  </ul>
                </li>
              </ul>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-group"></i>
                <span>Faculty</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo site_url('admin/Faculty/test'); ?>"><i class="fa fa-user-plus"></i>Add Faculty</a></li>
                <li><a href="<?php echo site_url('admin/Faculty/Faculty'); ?>"><i class="ion ion-clipboard"></i>View Faculty</a></li>
                <li><a href="<?php echo site_url('admin/Faculty/FacultyLeave/leaves'); ?>"><i class="ion ion-clipboard"></i>Faculty Leave</a></li>
                <li class="treeview">
                  <a href="#">
                    <i class="fa fa-bullseye"></i> <span>Teacher Reports</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="<?php echo site_url('admin/Faculty/lecturereport/reports'); ?>"><i class="fa fa-window-close-o"></i>Lecture Reports</a></li>
                    <li><a href="<?php echo site_url('Faculty/ckeck_loan'); ?>"><i class="fa fa-window-close-o"></i>Attendence Repot</a></li>
                    <li><a href="<?php echo site_url('Faculty/ending_loan_statment'); ?>"><i class="fa fa-circle-o"></i>Syllabus Report</a></li>
                  </ul>
                </li>
              </ul>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-bandcamp"></i>
                <span>Admin Task</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">

               <li class="treeview">
                <a href="#">
                  <i class="fa fa-bullseye"></i> <span>Gallery</span>
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu">
                  <li><a href="<?php echo site_url('Admin/gallery/'); ?>"><i class="fa fa-window-close-o"></i>Upload Pictures</a></li>
                  <li><a href="<?php echo site_url('Admin/gallery/view'); ?>"><i class="fa fa-window-close-o"></i>View Pictures</a></li>
                </ul>
              </li>

              <li class="treeview">
                <a href="#">
                  <i class="fa fa-bullseye"></i> <span>Events</span>
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu">
                  <li><a href="<?php echo site_url('Admin/events/'); ?>"><i class="fa fa-window-close-o"></i>Add Events</a></li>
                  <li><a href="<?php echo site_url('Admin/events/view'); ?>"><i class="fa fa-window-close-o"></i>View Events</a></li>
                </ul>
              </li>

              <li class="treeview">
                <a href="#">
                  <i class="fa fa-bullseye"></i> <span>Notice</span>
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu">
                  <li><a href="<?php echo site_url('Admin/document_exp'); ?>"><i class="fa fa-window-close-o"></i>Add Notice</a></li>
                  <li><a href="<?php echo site_url('Admin/ckeck_loan'); ?>"><i class="fa fa-window-close-o"></i>View Notice</a></li>
                </ul>
              </li>
            </ul>          
          </li>


          <li>
            <a href="<?php echo site_url('Admin/subject/allot'); ?>"><i class="ion ion-clipboard"></i>Allot Subjects</a>
          </li>

        </ul>
      </ul>
    </section>
    <!-- /.sidebar -->
    <?php } ?>
  </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?php
        if (isset($title)) 
        {
          echo $title;          
        }
        else
        {
          $title = " ";
          echo $title;
        }

        ?>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url(); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><?php  echo $title; ?></li>
      </ol>
    </section>