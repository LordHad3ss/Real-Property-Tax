<?php
    require_once '../App.php';
    require_once '../../store/connect.php';

    $qryConsumerList = "SELECT 
                            tbl_users_property.*,
                            tbl_rpt_consumer_details.firstname,
                            tbl_rpt_consumer_details.lastname,
                            tbl_rpt_consumer_details.email 
                        FROM 
                            `tbl_users_property` 
                        INNER JOIN 
                            tbl_rpt_consumer_details
                        ON
                            tbl_rpt_consumer_details.id = tbl_users_property.userid";
    $resConsumerList = mysqli_query($conn,$qryConsumerList);
    $cntConsumerList = mysqli_num_rows($resConsumerList);
?>

<body>
    <div class="row gx-0 g-0">
        <div class="col-lg-auto d-none d-md-none d-lg-block">
            <?php
                require_once '../../components/admin/Sidebar.php';
            ?>
        </div>
        <div class="col">
            <div class="row gx-0 g-0">
                <div class="col-12">
                    <?php
                        require_once '../../components/admin/Navbar.php';
                    ?>
                </div>
                <div class="col">
                    <div class="container-body">
                        <div class="pad-top-40p pad-x-20p">
                            <div class="card-box pad-y-20p">
                                <div class="title-2 pad-x-20p">Property Management</div>
                                <div class="sub-title-1 pad-x-20p">Manage property here.</div>
                                <div class="pad-top-40p pad-x-20p">
                                    <div class="row gx-0 g-0">
                                        <div class="col">
                                            <div class="search-container">
                                                <input type="text" class="search-input" placeholder="Search...">
                                                <i class="fas fa-search search-icon"></i>
                                            </div>
                                        </div>
                                        <div class="col justify-content-end d-flex">
                                            <div class="row gx-0 g-0">
                                                <div class="col-auto">
                                                    <button class="button-3" onclick="addProperty()">
                                                        <i class="fa fa-plus"></i>
                                                        Add
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pad-top-20p">
                                    <div class="table-responsive table-height-md scrollpink">
                                        <table id="example" class="table table-striped-row table-hover-item mb-0" style="width:100%">
                                            <thead>
                                                <tr class="table-title text-nowrap table-heading-fixed">
                                                    <th>
                                                        Tax Declaration Number
                                                    </th>
                                                    <th class="ps-3">
                                                        Declared Owner
                                                    </th>
                                                    <th class="ps-3">
                                                        PIN
                                                    </th>
                                                    <th class="ps-3">
                                                        Market Value
                                                    </th>
                                                    <th class="ps-3">
                                                        Assessed Value
                                                    </th>
                                                    <th class="ps-3">
                                                        Actual Use
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                                if ($cntConsumerList == 0 ) 
                                                {
                                            ?>
                                                <tr class="table-item text-nowrap">
                                                <td class="p-3 ps-0 ps-2 text-center" colspan="6">
                                                <?php echo "No Records Found"; ?>
                                                    </td>
                                                    
                                                </tr>
                                            <?php
                                            } 
                                            
                                            else
                                            {
                                            while ($rowConsumerList = mysqli_fetch_assoc($resConsumerList))
                                            {
                                                $propertyid = $rowConsumerList['id'];
                                                $tdn = $rowConsumerList['tdn'];
                                                $firstname = $rowConsumerList['firstname'];
                                                $lastname = $rowConsumerList['lastname'];
                                                $pin = $rowConsumerList['pin'];
                                                $market_value = $rowConsumerList['market_value'];
                                                $assessed_value = $rowConsumerList['assessed_value'];
                                                $actual_use = $rowConsumerList['actual_use'];
                                                $email = $rowConsumerList['email'];
                                                $name = $firstname . ' ' . $lastname;

                                                $qryListofreceipt = "SELECT 
                                                                        propertyid,
                                                                        GROUP_CONCAT(DISTINCT period_covered SEPARATOR ',') 
                                                                    FROM 
                                                                        tbl_property_reciept 
                                                                    WHERE 
                                                                        propertyid = $propertyid
                                                                    GROUP BY 
                                                                        propertyid";
                                                $resListofreceipt = mysqli_query($conn,$qryListofreceipt);
                                                $cnt = mysqli_num_rows($resListofreceipt);
                                                if ($cnt != 0)
                                                {
                                                    $row = mysqli_fetch_array($resListofreceipt);
                                                    $receipt = $row[1];
                                                }
                                                else
                                                {
                                                    $receipt = "";
                                                }
                                                

                                            ?>
                                            <tr class="table-item text-nowrap cursor-pointer"  onclick="openModal('<?php echo $email ?>','<?php echo $actual_use ?>','<?php echo $assessed_value ?>','<?php echo $tdn ?>','<?php echo $receipt ?>');">
                                                    <td class="p-3 ps-0 ps-2">
                                                    <?php echo $tdn; ?>
                                                    </td>
                                                    <td class="p-3 ps-0 ps-3">
                                                    <?php echo $name; ?>
                                                    </td>
                                                    <td class="p-3 ps-0 ps-3">
                                                    <?php echo $pin; ?>
                                                    </td>
                                                    <td class="p-3 ps-0 ps-3">
                                                    <?php echo $market_value; ?>
                                                    </td>
                                                    <td class="p-3 ps-0 ps-3">
                                                    <?php echo $assessed_value; ?>
                                                    </td>
                                                    <td class="p-3 ps-0 ps-3">
                                                    <!-- $actual_use; -->
                                                    <?php echo implode(' ', array_map('ucfirst',explode('_', $actual_use))) ?>
                                                    </td>
                                                </tr>
                                                <?php } }?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
            <div class="pad-top-40p">
                <?php
                    require_once '../../components/Footer.php';
                ?>
            </div>
        </div>
    </div>
   
</body>
</html>

<!-- Modal for sending email -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Deliquency</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Recipient:</label>
            <input type="text" class="form-control" id="recipient-name" disabled>
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Information:</label><br/>
            TDN: <input type="text" class="form-control" id="tdn" disabled>
            Actual Use: <input type="text" class="form-control" id="actual-use" disabled>
            Assessed Value: <input type="text" class="form-control" id="assessed-value" disabled>
            <div class="mb-3">
            <input type="checkbox" id="quarter1" name="quarter1" disabled>
            <label for="vehicle1">Q1</label>
            <input type="checkbox" id="quarter2" name="quarter2" disabled>
            <label for="vehicle1">Q2</label>
            <input type="checkbox" id="quarter3" name="quarter3" disabled>
            <label for="vehicle1">Q3</label>
            <input type="checkbox" id="quarter4" name="quarter4" disabled>
            <label for="vehicle1">Q4</label>
            </div>
            Tax Due: <input type="text" class="form-control" id="tax-due" disabled>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" id="sendEmail" class="btn btn-primary" onclick="sendMail();" hidden>Send Email</button>
      </div>
    </div>
  </div>
</div>



<script src="../../assets/js/addingproperty.js"></script>
<script >
    function addProperty() {
        window.location.assign("property_management/AddProperty.php");
    }
</script>



