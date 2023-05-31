<?php
    session_start();
    require_once '../../App.php';

    if (!isset($_SESSION['userid']))
    {
        echo "<script type='text/javascript'>alert('User already logout!');window.location = '../../store/logout.php'</script>";
    }
    $PropertyId = $_GET['property'];
?>

<body>
    <div class="row gx-0 g-0">
        <div class="col-lg-auto d-none d-md-none d-lg-block">
            <?php
                require_once '../../../components/consumer/Sidebar.php';
            ?>
        </div>
        <div class="col">
            <div class="row gx-0 g-0">
                <div class="col-12">
                    <?php
                        require_once '../../../components/consumer/Navbar.php';
                    ?>
                </div>
                <div class="col">
                    <div class="container-body">
                        <div class="pad-top-20p pad-x-20p">
                            <div class="title-2">Assessment</div>
                            <div class="sub-title-1">Lorem ipsum dolor sit amet.</div>
                            <div class="font-roboto fw-bold margin-top-40p">TN: 00001</div>
                            <div class="row gx-0 g-0">
                                <div class="col-12">
                                    <div class="title-4 margin-top-20p">Real Property Tax Official</div>
                                    <div class="font-roboto fw-400">Status: <span class="font-roboto badge bg-secondary mt-2">Unassigned</span></div>
                                </div>
                            </div>
                            <div class="card-box pad-xy-20p margin-top-20p">
                                <div class="font-gotham text-muted">Remarks:</div>
                                <div class="font-roboto text-muted mt-1">Message</div>
                            </div>
                            <div class="row gx-0 g-0 margin-top-20p justify-content-end">
                                <div class="col-auto">
                                    <button class="button-1">Download Clearance</button>
                                </div>
                            </div>
                            <div class="row gx-0 g-0 margin-top-20p justify-content-end">
                                <div class="col-auto">
                                    <button class="button-1" onclick="goToStep2(<?php echo $PropertyId; ?>)">Next / Finish</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
</body>
</html>
<script>
    function goToStep2(id) {
        var url = `Payment.php?property=${id}`;
        var lowercaseUrl = url.toLowerCase();
        window.location.assign(lowercaseUrl);
    }
</script>