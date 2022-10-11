
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?=base_url('Admin')?>" class="brand-link ml-1">
      <span class="brand-text text-lg d-flex ml-3"><img src="<?=base_url('assets/images/logo_only.png')?>" alt="Logo" height="50px" class=""></span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url(); ?>assets/images/avatar5.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="<?=base_url('Admin/adminProfile')?>" class="d-block"> <?php echo $this->session->user->fname .'&nbsp;' . $this->session->user->lname ?> </a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

       <!-- <li class="nav-item">
            <a href="<?=base_url('Admin/Banner_images')?>" class="nav-link <?php if($this->uri->segment(2)=="Banner_images"){echo ' CustomActive';}?>">
              <i class="fa fa-images nav-icon"></i>
              <p>Banner</p>
            </a>
          </li> -->

          <li class="nav-item">
            <a href="<?=base_url('Admin')?>" class="nav-link <?php if($this->uri->segment(1)=="Admin" AND $this->uri->segment(2)=="" AND $this->uri->segment(3)==""){echo ' CustomActive';}?>">
              <i class="fa fa-list nav-icon"></i>
              <p>Enquiries</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?=base_url('Admin/HeroSlider')?>" class="nav-link <?php if($this->uri->segment(2)=="HeroSlider"){echo ' CustomActive';}?>">
              <i class="fa fa-images nav-icon"></i>
              <p>Hero Slider</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?=base_url('Admin/Header_images')?>" class="nav-link <?php if($this->uri->segment(2)=="Header_images"){echo ' CustomActive';}?>">
              <i class="fa fa-square nav-icon"></i>
              <p>Header images</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?=base_url('Admin/Reports')?>" class="nav-link <?php if($this->uri->segment(2)=="Reports"){echo ' CustomActive';}?>">
              <i class="fas fa-receipt nav-icon"></i>
              <p>Reports</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?=base_url('Admin/Careers')?>" class="nav-link <?php if($this->uri->segment(2)=="Careers"){echo ' CustomActive';}?>">
              <i class="fas fa-briefcase nav-icon"></i>
              <p>Careers</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?=base_url('Admin/Products')?>" class="nav-link <?php if($this->uri->segment(2)=="Products"){echo ' CustomActive';}?>">
              <i class="fa fa-cubes nav-icon"></i>
              <p>Products</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?=base_url('Admin/News')?>" class="nav-link <?php if($this->uri->segment(2)=="News"){echo ' CustomActive';}?>">
              <i class="fa fa-newspaper nav-icon"></i>
              <p>News & Events</p>
            </a>
          </li>

          <!-- <li class="nav-item">
            <a href="<?=base_url('Admin/Policies')?>" class="nav-link <?php if($this->uri->segment(2)=="Policies"){echo ' CustomActive';}?>">
              <i class="fa fa-file nav-icon"></i>
              <p>Policies</p>
            </a>
          </li> -->

          <li class="nav-item">
            <a href="<?=base_url('Admin/Clientele')?>" class="nav-link <?php if($this->uri->segment(2)=="Clientele"){echo ' CustomActive';}?>">
              <i class="fa fa-user nav-icon"></i>
              <p>Clientele</p>
            </a>
          </li>

          <li class="nav-item has-treeview <?= in_array($this->uri->segment(2) , ['Content', 'Directors']) ? ' menu-open' : ''?>">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-star"></i>
              <p>
                Page contents
                <i class="right fas fa-angle-down"></i>
              </p>
            </a>
            <ul class="nav nav-treeview ml-3">
              <li class="nav-item">
                <a href="<?=base_url('Admin/Content/about_us')?>" class="nav-link <?php if($this->uri->segment(3)=="about_us"){echo ' CustomActive';}?>">
                  <i class="fas fa-circle nav-icon"></i>
                  <p>About Us</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url('Admin/Directors')?>" class="nav-link <?php if($this->uri->segment(2)=="Directors"){echo ' CustomActive';}?>">
                  <i class="fas fa-circle nav-icon"></i>
                  <p>Board of directors</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url('Admin/Content/chairman_msg')?>" class="nav-link <?php if($this->uri->segment(3)=="chairman_msg"){echo ' CustomActive';}?>">
                  <i class="fas fa-circle nav-icon"></i>
                  <p>Chairmans message</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url('Admin/Content/t_c')?>" class="nav-link <?php if($this->uri->segment(3)=="t_c"){echo ' CustomActive';}?>">
                  <i class="fas fa-circle nav-icon"></i>
                  <p>T&C</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url('Admin/Content/privacy_policy')?>" class="nav-link <?php if($this->uri->segment(3)=="privacy_policy"){echo ' CustomActive';}?>">
                  <i class="fas fa-circle nav-icon"></i>
                  <p>Privacy Policy</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="<?=base_url('Admin/Applications')?>" class="nav-link <?php if($this->uri->segment(2)=="Applications"){echo ' CustomActive';}?>">
              <i class="fa fa-users nav-icon"></i>
              <p>Job Applications</p>
            </a>
          </li> 
          
          <li class="nav-item">
            <a href="<?=base_url('Admin/webProfile')?>" class="nav-link <?php if($this->uri->segment(2)=="webProfile"){echo ' CustomActive';}?>">
              <i class="fa fa-globe nav-icon"></i>
              <p>VIL Web profile</p>
            </a>
          </li>

          <li class="nav-item mt-4 mb-5" id="website-link">
            <a href="<?=base_url()?>" target=_blank class="nav-link">
              <i class="fas fa-external-link-alt nav-icon"></i>
              <p>Open Website</p>
            </a>
          </li>

        <!-- ============================================================== -->

        <!--<li class="nav-item">
            <a href="<?=base_url('Admin/Youtube')?>" class="nav-link <?php if($this->uri->segment(2)=="Youtube"){echo ' CustomActive';}?>">
              <i class="far fa-video nav-icon"></i>
              <p>Youtube</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?=base_url('Admin/Counters')?>" class="nav-link <?php if($this->uri->segment(2)=="Counters"){echo ' CustomActive';}?>">
              <i class="far fa-tag nav-icon"></i>
              <p>Counters</p>
            </a>
          </li>


          <li class="nav-item">
            <a href="<?=base_url('Admin/Feedbacks')?>" class="nav-link <?php if($this->uri->segment(2)=="Feedbacks"){echo ' CustomActive';}?>">
              <i class="far fa-comment-dots nav-icon"></i>
              <p>Feedbacks</p>
            </a>
          </li> -->
          
           
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>