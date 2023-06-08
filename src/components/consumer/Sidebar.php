<?php
    
    $baseURL = '/real-property-tax/src/views/consumer/';
?>
<div class="sidebar-container">
    <div class="pad-xy-20p">
    <img src="/real-property-tax/src/assets/media/logo.png" class="img img-fluid" width="50">
    <span class="text-nowrap fw-bolder text-roboto-bold">Real Property Tax</span>
    </div>
    <div class="row gx-0 g-0 sidebar-item pad-end-20p">
        <a href="<?php echo $baseURL . 'Dashboard.php'; ?>" class="text-decoration-none">
            <div class="col-auto p-3 text-gray sidebar-item">
                <i class="fa fa-home pad-start-10p"></i>
                <span class="ms-2">Home </span>
            </div>
        </a>
    </div>
    <div class="row gx-0 g-0 sidebar-item pad-end-20p">
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
                            <a href="<?php echo $baseURL . 'Property.php'; ?>" class="text-decoration-none">
                                <div class="col-auto">
                                    <div class="pad-x-20p margin-start-10p margin-top-20p sidebar-item">Property</div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row gx-0 g-0 sidebar-item pad-end-20p">
        <a href="<?php echo $baseURL . 'Settings.php'; ?>" class="text-decoration-none">
            <div class="col-auto p-3 text-gray sidebar-item">
                <i class="fa fa-gear pad-start-10p"></i>
                <span class="ms-2">Settings</span>
            </div>
        </a>
    </div>
    <div class="row gx-0 g-0 sidebar-item pad-end-20p">
        <a href="<?php echo '/real-property-tax/src/store/logout.php'; ?>" class="text-decoration-none">
            <div class="col-auto p-3 text-gray sidebar-item">
                <i class="fa fa-sign-out-alt pad-start-10p"></i>
                <span class="ms-2">Logout</span>
            </div>
        </a>
    </div>
</div>


