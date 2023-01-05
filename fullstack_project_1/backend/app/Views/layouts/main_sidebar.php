<?php
// Add active class to active link
function isActive($param)
{
  $page = basename($_SERVER['PHP_SELF']);
  return ($page == $param) ? 'active' : '';
}

// Add menu-open class
function isOpen($param)
{
  $url_array = explode('/', uri_string());
  $url_group = $url_array[0];

  return ($url_group == $param) ? 'menu-open' : '';
}

?>

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="<?= base_url(); ?>" class="brand-link">
    <img src="/assets/dist/img/big-cow.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">DairyFarm</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="/assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block"><?= session()->get('name') . " - (" . session()->get('role') . ")"; ?></a>
      </div>
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="<?= site_url(); ?>" class="nav-link <?= isActive('index.php'); ?>">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="pages/widgets.html" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Widgets
              <span class="right badge badge-danger">New</span>
            </p>
          </a>
        </li>
        <li class="nav-item <?= isOpen('products'); ?>">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-cheese"></i>
            <p>
              Product Management
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= site_url('products'); ?>" class="pl-5 nav-link <?= isActive('products'); ?>">
                <i class="fa fa-solid fa-list mr-2"></i>
                <p>All Products</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= site_url('products/new'); ?>" class="pl-5 nav-link <?= isActive('new'); ?>">
                <i class="fas fa-plus-square mr-2"></i>
                <p>New Product</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item <?= isOpen('categories'); ?>">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-project-diagram"></i>
            <p>
              Category Management
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= site_url('categories'); ?>" class="pl-5 nav-link <?= isActive('categories'); ?>">
                <i class="fa fa-solid fa-list mr-2"></i>
                <p>All Categories</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= site_url('categories/new'); ?>" class="pl-5 nav-link <?= isActive('new'); ?>">
                <i class="fas fa-plus-square mr-2"></i>
                <p>New Category</p>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>