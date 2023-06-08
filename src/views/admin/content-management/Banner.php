<?php
    require_once '../../App.php';
    require_once '../../../store/country.php';
    
?>

<body>
    <div class="row gx-0 g-0">
        <div class="col-lg-auto d-none d-md-none d-lg-block">
            <?php
                require_once '../../../components/admin/Sidebar.php';
            ?>
        </div>
        <div class="col">
            <div class="row gx-0 g-0">
                <div class="col-12">
                    <?php
                        require_once '../../../components/admin/Navbar.php';
                    ?>
                </div>
                <div class="container-body">
                    <div class="pad-top-40p pad-x-20p">
                        <div class="card-box pad-y-20p">
                            <div class="title-2 pad-x-20p">Content Management</div>
                            <div class="sub-title-1 pad-x-20p">Manage content here.</div>
                            <div class="pad-top-40p">
                                <div class="row gx-0 g-0">
                                    <div class="col pad-x-20p">
                                        <div class="search-container">
                                            <input type="text" class="search-input" placeholder="Search...">
                                            <i class="fas fa-search search-icon"></i>
                                        </div>
                                    </div>
                                    <div class="col justify-content-end d-flex pad-x-20p">
                                        <div class="row gx-0 g-0">
                                            <div class="col-auto">
                                                <button class="button-3" onclick="openBanner()">
                                                    <i class="fa fa-plus"></i>
                                                    Add Announcement
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pad-top-20p">
                                        <div class="table-responsive table-height-md scrollpink">
                                            <table id="example" class="table table-striped-row table-hover-item mb-0" style="width:100%">
                                                <thead>
                                                    <tr class="table-title text-nowrap table-heading-fixed">
                                                        <th>
                                                        Image
                                                        </th>
                                                        <th class="ps-3">
                                                            Title
                                                        </th>
                                                        <th class="ps-3">
                                                            Link
                                                        </th>
                                                        <th class="ps-3">
                                                        Button?
                                                        </th>
                                                        <th class="ps-3">
                                                        Active?
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="table-item text-nowrap">
                                                        <td class="p-3 ps-0 ps-2">
                                                            1
                                                        </td>
                                                        <td class="p-3 ps-0 ps-3">
                                                        2
                                                        </td>
                                                        <td class="p-3 ps-0 ps-3">
                                                            3
                                                        </td>
                                                        <td class="p-3 ps-0 ps-3">
                                                            4
                                                        </td>
                                                        <td class="p-3 ps-0 ps-3">
                                                            5
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="banner" tabindex="-1" aria-labelledby="bannerLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="bannerLabel">Add Announcement</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="col-12">
                        <div class="row gx-3 g-0">
                            <div class="col-auto">
                                <div class="input-title mb-2">Announcement Image</div>
                                <div class="file-container text-primary">
                                    <label id="file-label" for="file-input" class="file-label">
                                        <i class="fas fa-file me-1 fs-5"></i>
                                        <span>Choose File</span>
                                    </label>
                                    <div class="sub-title-2 mt-2" id="sub-title">PNG, JPG files up to 5 MB in size are available for download</div>
                                    <a id="uploaded-image-link" href="#" target="_blank" class="text-decoration-none text-primary text-truncate">
                                        <div class="d-flex">
                                            <i class="fas fa-file me-2 fs-5" style="display: none" id='icon'></i>
                                            <span id="file-list" class="truncate-text"></span>
                                        </div>
                                    </a>
                                    <div id="remove-file" class="sub-title-2 mt-2" style="display: none">Remove Image</div>
                                </div>
                                <input id="file-input" class="file-input" type="file" name="file-input"  accept="image/png, image/jpeg">
                            </div>
                        </div>
                        <div class="row gx-0 g-0 margin-top-20p">
                            <div class="col-12">
                                <div class="input-title mb-2">Announcement Title</div>
                                <input id="banner_title" class="form-control" type="text"/>
                            </div>
                        </div>
                        <div class="row gx-0 g-0 margin-top-20p">
                            <div class="col-12">
                                <div class="input-title mb-2">Announcement Link</div>
                                <input id="banner_link" class="form-control" type="text"/>
                            </div>
                        </div>
                        <div class="row gx-0 g-0 margin-top-20p">
                            <div class="col">
                                <div class="input-title mb-2">Button?</div>
                                <input id="banner_is_button" class="form-check-input" type="checkbox"/>
                            </div>
                            <div class="col">
                                <div class="input-title mb-2">Active?</div>
                                <input id="banner_is_active" class="form-check-input" type="checkbox"/>
                            </div>
                        </div>
                        <div class="row gx-0 g-0 margin-top-40p justify-content-end d-flex">
                            <div class="col-auto">
                                <button class="button-1" onclick="saveAnnouncement();">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>

</html>

<script src="../../../assets/js/addbanner.js"></script>
