<?php
 
    $baseURL = '/real-property-tax/src/views/admin/';
    
?>
<nav class="navbar navbar-expand-lg navbar-light p-lg-3 box-shadow fixed-top">
  <div class="container-fluid">
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="col-auto d-lg-none">
      <span class="text-font-roboto">Real Property Tax</span>  
    </div>
    <a class="navbar-brand d-block d-md-block d-lg-none" href="/real-property-tax/src/views/admin/Profile.php" onclick="disableLink(event)">
        <i class="fa fa-user cursor-pointer opacity-50 remove-hover"></i>
    </a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 pad-top-20p">
        <div class="row gx-0 g-0 sidebar-item pad-end-20p d-block d-md-block d-lg-none">
            <a href="<?php echo $baseURL . 'Dashboard.php'; ?>" class="text-decoration-none">
                <div class="col-auto p-3 text-gray sidebar-item">
                    <i class="fa fa-home pad-start-10p"></i>
                    <span class="ms-2">Dashboard </span>
                </div>
            </a>
        </div>
        <div class="row gx-0 g-0 sidebar-item pad-end-20p d-block d-md-block d-lg-none">
            <div class="col-auto text-gray">
                <div class="col-auto p-3 text-gray">
                    <div class="accordion-header ">
                        <div data-bs-toggle="collapse" type="button" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo" class="sidebar-item accordion-button collapsed" id="property_management">
                            <i class="fa fa-building pad-start-10p"></i>
                            <span class="ms-2">Property Management</span>
                            <i class="fa fa-angle-down pad-start-10p"></i>
                        </div>
                    </div>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <div class="row gx-0 g-0">
                                <a href="<?php echo $baseURL . 'PropertyManagement.php'; ?>" class="text-decoration-none">
                                    <div class="col-auto">
                                        <div class="pad-x-20p margin-start-10p margin-y-20p sidebar-item">Property</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row gx-0 g-0 sidebar-item pad-end-20p d-block d-md-block d-lg-none">
            <a href="<?php echo $baseURL . 'ContentManagement.php'; ?>" class="text-decoration-none">
                <div class="col-auto p-3 text-gray sidebar-item">
                    <i class="fa fa-book-open pad-start-10p"></i>
                    <span class="ms-2">Content Management</span>
                </div>
            </a>
        </div>
        <div class="row gx-0 g-0 sidebar-item pad-end-20p d-block d-md-block d-lg-none">
            <a href="<?php echo $baseURL . 'Users.php'; ?>" class="text-decoration-none opacity-50 remove-hover" onclick="disableLink(event)">
                <div class="col-auto p-3 text-gray sidebar-item">
                    <i class="fa fa-users pad-start-10p"></i>
                    <span class="ms-2">Users</span>
                </div>
            </a>
        </div>
        <div class="row gx-0 g-0 sidebar-item pad-end-20p d-block d-md-block d-lg-none">
            <a href="<?php echo $baseURL . 'Settings.php'; ?>" class="text-decoration-none opacity-50 remove-hover" onclick="disableLink(event)">
                <div class="col-auto p-3 text-gray sidebar-item">
                    <i class="fa fa-gear pad-start-10p"></i>
                    <span class="ms-2">Settings</span>
                </div>
            </a>
        </div>
        <div class="row gx-0 g-0 sidebar-item pad-end-20p d-block d-md-block d-lg-none">
            <a href="<?php echo $baseURL . 'Logout.php'; ?>" class="text-decoration-none">
                <div class="col-auto p-3 text-gray sidebar-item">
                    <i class="fa fa-sign-out-alt pad-start-10p"></i>
                    <span class="ms-2">Logout</span>
                </div>
            </a>
        </div>
      </ul>
      <div class="col-auto d-none d-md-none d-lg-block">
        <a href="/real-property-tax/src/views/Profile.php" onclick="disableLink(event)">
            <i class="fa fa-user text-black fs-4 opacity-50 remove-hover"></i>
        </a>
      </div>
    </div>
  </div>
</nav>

<script>
    function disableLink(event) {
        event.preventDefault();
    }
</script>

