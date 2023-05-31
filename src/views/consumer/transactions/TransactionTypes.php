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
                            <div class="title-3">Transactions</div>
                            <div class="sub-title-1">Lorem ipsum dolor sit amet.</div>
                            <div class="row gx-0 g-0 margin-top-40p">
                                <div class="col-4">
                                    <div class="card-box pad-x-20p pad-y-20p cursor-pointer" onclick="goToStep1(<?php echo $PropertyId ?>)">
                                        <div class="font-gotham fw-bold fs-5"><i class="fa fa-file me-2"></i>Tax Clearance</div>
                                        <div class="sub-title-1">Lorem ipsum dolor sit amet.</div>
                                    </div>
                                </div>
                                <div class="col justify-content-center d-flex">
                                    <img src="../../../../src/assets/media/engineer.svg" width="66%">
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
    function goToStep1(id) {
        var url = `Assessment.php?property=${id}`;
        var lowercaseUrl = url.toLowerCase();
        window.location.assign(lowercaseUrl);
    }
</script>