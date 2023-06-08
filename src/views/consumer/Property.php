<?php
    session_start();
    $email = $_SESSION['email'];
    if (!isset($_SESSION['userid']))
    {
        echo "<script type='text/javascript'>alert('User already logout!');window.location = '../../store/logout.php'</script>";
    }
    require_once '../App.php';
    require_once '../../store/connect.php';

    $qryConsumerList = "SELECT 
                            tbl_users_property.*,
                            tbl_rpt_consumer_details.firstname,
                            tbl_rpt_consumer_details.lastname 
                        FROM 
                            `tbl_users_property` 
                        INNER JOIN 
                            tbl_rpt_consumer_details
                        ON
                            tbl_rpt_consumer_details.id = tbl_users_property.userid
                        WHERE
                        	tbl_rpt_consumer_details.email =  '$email'";
    $resConsumerList = mysqli_query($conn, $qryConsumerList);
    $cntConsumerList = mysqli_num_rows($resConsumerList);
?>

<body>
    <div class="row gx-0 g-0">
        <div class="col-lg-auto d-none d-md-none d-lg-block">
            <?php
                require_once '../../components/consumer/Sidebar.php';
            ?>
        </div>
        <div class="col">
            <div class="row gx-0 g-0">
                <div class="col-12">
                    <?php
                        require_once '../../components/consumer/Navbar.php';
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
                                        <!-- <div class="col justify-content-end d-flex">
                                            <div class="row gx-0 g-0">
                                                <div class="col-auto">
                                                    <button class="button-1" onclick="goToTransactionTypes()">
                                                        Apply
                                                    </button>
                                                </div>
                                            </div>
                                        </div> -->
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
                                                        $id = $rowConsumerList['id'];
                                                        $tdn = $rowConsumerList['tdn'];
                                                        $firstname = $rowConsumerList['firstname'];
                                                        $lastname = $rowConsumerList['lastname'];
                                                        $pin = $rowConsumerList['pin'];
                                                        $market_value = $rowConsumerList['market_value'];
                                                        $assessed_value = $rowConsumerList['assessed_value'];
                                                        $actual_use = $rowConsumerList['actual_use'];
                                                        $name = $firstname . ' ' . $lastname;
                                                    ?>
                                                    <tr class="table-item text-nowrap cursor-pointer" onclick="goToTransactionTypes(<?php echo $id ?>)">
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

<script >
    function goToTransactionTypes(id) {
        var url = `transactions/TransactionTypes.php?property=${id}`;
        var lowercaseUrl = url.toLowerCase();
        window.location.assign(lowercaseUrl);
    }
</script>

