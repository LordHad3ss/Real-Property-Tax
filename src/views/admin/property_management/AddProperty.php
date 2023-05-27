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
                        <div class="title-2">Add Property </div>
                        <div class="sub-title-1">Manage property here.</div>
                        <div class="card-box margin-bottom-20p pad-xy-20p margin-top-20p">
                            <div class="row gx-3 gy-3 g-0">
                                <div class="title-4">Property Details</div>
                                <!-- <div class="col-12">
                                    <div class="row gx-3 g-0">
                                        <div class="col-auto">
                                            <div class="input-title mb-2">Property Image</div>
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
                                            <input id="file-input" class="file-input" type="file" accept="image/png, image/jpeg">
                                        </div>
                                    </div>
                                </div> -->
                                <div class="col-12">
                                    <div class="row gx-3 g-0 gy-3">
                                        <div class="col-12 col-md-4 col-lg-4">
                                            <div class="input-container">
                                                <div class="input-title ms-2 ps-1">Tax Declaration No. </div>
                                                <input type="text" id="property_tdn" name="property_tdn" class="form-control input"  id="property_tdn" onkeydown="formatInput(event,'tax_declaration')">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-4 col-lg-4">
                                            <div class="input-container">
                                                <div class="input-title ms-2 ps-1">Location</div>
                                                <input type="text" id="property_location" name="property_location" class="form-control input">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-4 col-lg-4">
                                            <div class="input-container">
                                                <div class="input-title ms-2 ps-1">Area</div>
                                                <input type="number" id="property_area" name="property_area" class="form-control input no-number-scroll" min="0" onkeydown="validateNumber(event)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="row gx-3 g-0 gy-3">
                                        <div class="col-12 col-md-4 col-lg-4">
                                            <div class="input-container">
                                                <div class="input-title ms-2 ps-1">Market Value</div>
                                                <input type="number" id="property_market_value" name="property_market_value" class="form-control input no-number-scroll" onkeydown="validateNumber(event)">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-4 col-lg-4">
                                            <div class="input-container">
                                                <div class="input-title ms-2 ps-1">Assessed Value</div>
                                                <input type="number" id="property_assessed_value" name="property_assessed_value" class="form-control input no-number-scroll" onkeydown="validateNumber(event)">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-4 col-lg-4">
                                            <div class="input-container">
                                                <div class="input-title ms-2 ps-1">Actual Use</div>
                                                <select id ="property_actual_use" name="property_actual_use" class="form-select input">
                                                    <option selected disabled>Select</option>
                                                    <option value="residential_building">Residential Building</option>
                                                    <option value="residential_lot">Residential Lot</option>
                                                    <option value="commercial_building">Commercial Building</option>
                                                    <option value="commercial_lot">Commercial Lot</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="row gx-3 gy-3 g-0">
                                        <div class="col-12">
                                            <div class="row gx-3 g-0 gy-3">
                                                <div class="col-12 col-md-4 col-lg-4">
                                                    <div class="input-container">
                                                        <div class="input-title ms-2 ps-1">Declared Date</div>
                                                        <input type="date" id="property_declared_date" name="property_declared_date" class="form-control input no-number-scroll" max="9999-12-31">
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-4 col-lg-4">
                                                    <div class="input-container">
                                                        <div class="input-title ms-2 ps-1">Effectivity Date</div>
                                                        <input type="date" id="property_effective_date" name="property_effective_date" class="form-control input no-number-scroll" max="9999-12-31">
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-4 col-lg-4">
                                                    <div class="input-container">
                                                        <div class="input-title ms-2 ps-1">PIN</div>
                                                        <input type="text" id="property_pin" name="property_pin" class="form-control input no-number-scroll" onkeydown="formatInput(event,'property_pin')">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="row gx-3 gy-3 g-0 margin-top-20p">
                                <div class="title-4">Owner Details</div>
                                <div class="col-12">
                                    <div class="row gx-3 g-0 gy-3">
                                        <div class="col-12 col-md-4 col-lg-4">
                                            <div class="input-container">
                                                <div class="input-title ms-2 ps-1">First Name</div>
                                                <input type="text" id="owner_firstname" name="owner_firstname" class="form-control input">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-4 col-lg-4">
                                            <div class="input-container">
                                                <div class="input-title ms-2 ps-1">Last Name</div>
                                                <input type="text" id="owner_lastname" name="owner_lastname" class="form-control input">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-4 col-lg-4">
                                            <div class="input-container">
                                                <div class="input-title ms-2 ps-1">Middle Name <span>(Optional)</span></div>
                                                <input type="text" id="owner_middlename" name="owner_middlename" class="form-control input">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="row gx-3 g-0 gy-3">
                                        <div class="col-12 col-md-4 col-lg-4">
                                            <div class="input-container">
                                                <div class="input-title ms-2 ps-1">Unit/House/Bldg No. (optional)</div>
                                                <input type="number" id="owner_bldg_no" name="owner_bldg_no" class="form-control input no-number-scroll" onkeydown="validateNumber(event)">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-4 col-lg-4">
                                            <div class="input-container">
                                                <div class="input-title ms-2 ps-1">Street No. (optional)</div>
                                                <input type="numeric" id="owner_street_no" name="owner_street_no" class="form-control input no-number-scroll" onkeydown="validateNumber(event)">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-4 col-lg-4">
                                            <div class="input-container">
                                                <div class="input-title ms-2 ps-1">Street Name (optional)</div>
                                                <input type="text" id="owner_street_name" name="owner_street_name" class="form-control input">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="row gx-3 g-0 gy-3">
                                        <div class="col-12 col-md-4 col-lg-4">
                                            <div class="input-container">
                                                <div class="input-title ms-2 ps-1">Block No. (optional)</div>
                                                <input type="number" id="owner_block_no" name="owner_block_no" class="form-control input no-number-scroll" onkeydown="validateNumber(event)">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-4 col-lg-4">
                                            <div class="input-container">
                                                <div class="input-title ms-2 ps-1">Lot No. (optional)</div>
                                                <input type="numeric" id="owner_lot_no" name="owner_lot_no" class="form-control input no-number-scroll" onkeydown="validateNumber(event)">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-4 col-lg-4">
                                            <div class="input-container">
                                                <div class="input-title ms-2 ps-1">Phase No. (optional)</div>
                                                <input type="numeric" id="owner_phase_no" name="owner_phase_no" class="form-control input no-number-scroll" onkeydown="validateNumber(event)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="row gx-3 g-0 gy-3">
                                        <div class="col-12 col-md-4 col-lg-4">
                                            <div class="input-container">
                                                <div class="input-title ms-2 ps-1">Country</div>
                                                <input type="text" id="owner_country" name="owner_country" class="form-control input">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-4 col-lg-4">
                                            <div class="input-container">
                                                <div class="input-title ms-2 ps-1">Province/State</div>
                                                <input type="text" id="owner_province" name="owner_province" class="form-control input">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-4 col-lg-4">
                                            <div class="input-container">
                                                <div class="input-title ms-2 ps-1">City/Municpality</div>
                                                <input type="text" id="owner_municipality" name="owner_municipality" class="form-control input">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="row gx-3 g-0 gy-3">
                                        <div class="col-12 col-md-4 col-lg-4">
                                            <div class="input-container">
                                                <div class="input-title ms-2 ps-1">Barangay</div>
                                                <input type="text" id="owner_barangay" name="owner_barangay" class="form-control input">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-4 col-lg-4">
                                            <div class="input-container">
                                                <div class="input-title ms-2 ps-1">Zip Code</div>
                                                <input type="number" id="owner_zip_code" name="owner_zip_code" class="form-control input no-number-scroll" onkeydown="validateNumber(event)">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-4 col-lg-4">
                                            <div class="input-container">
                                                <div class="input-title ms-2 ps-1">Gender</div>
                                                <select id="owner_gender" name="owner_gender" class="form-select input">
                                                    <option selected disabled>Select</option>
                                                    <option value="male">Male</option>
                                                    <option value="female">Female</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="row gx-3 g-0 gy-3">
                                        <div class="col-12 col-md-4 col-lg-4">
                                            <div class="input-container">
                                                <div class="input-title ms-2 ps-1">Email</div>
                                                <input type="email" id="owner_email" name="owner_email" class="form-control input">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-4 col-lg-4">
                                            <div class="input-container">
                                                <div class="input-title ms-2 ps-1">Mobile No.</div>
                                                <input type="text" name="owner_contact_no" id="owner_contact_no" class="form-control input no-number-scroll"  onkeydown="formatInput(event,'pin')">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-4 col-lg-4">
                                            <div class="input-container">
                                                <div class="input-title ms-2 ps-1">Telephone No. (Optional)</div>
                                                <input type="number" id="owner_telephone_no" name="owner_telephone_no" class="form-control input no-number-scroll" onkeydown="validateNumber(event)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               
                                <div class="col-12 justify-content-end d-flex pad-top-20p">
                                    <div class="row gx-3 g-0">
                                        <div class="col-auto my-auto">
                                            <div class="text-primary text-primary-hover cursor-pointer" onclick="goToPropertyManagement()">Cancel</div>
                                        </div>
                                        <div class="col-auto">
                                            <button class="button-1" onclick="createProperty(owner_telephone_no.value)">Save</button>
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
    
</body>
<script src="../../../assets/js/addingproperty.js"></script>
 <script>
    var phoneInput = document.getElementById('owner_contact_no');
    // const fileInput = document.getElementById('file-input');
    // const fileList = document.getElementById('file-list');
    // const fileLabel = document.getElementById('file-label');
    // const removeFile = document.getElementById('remove-file');
    // const subTitle = document.getElementById('sub-title');
    // const uploadedImageLink = document.getElementById('uploaded-image-link');
    // const iconUploaded = document.getElementById('icon');


</script>

<script src="../../../assets/js/phone_masking.js"></script>
<script src="../../../assets/js/validate_number.js"></script>
<!-- <script src="../../../assets/js/simple_upload.js"></script> -->
<script src="../../../assets/js/input_validation.js"></script>


</html>