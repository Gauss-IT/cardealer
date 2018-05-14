<div class="content-wrapper">
  <div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="#">Dashboard</a>
      </li>
      <li class="breadcrumb-item active">
        @if(Request::is('admin'))
          <?php echo "Add Car"; ?>
        @endif
        @if(Request::is('admin/cars/all'))
          <?php echo "Manage Cars"; ?>
        @endif
        @if(Request::is('cars/edit/*'))
          <?php echo "Edit Car"; ?>
        @endif
        @if(Request::is('admin/brands'))
          <?php echo "Manage Brands"; ?>
        @endif
      </li>
    </ol>
