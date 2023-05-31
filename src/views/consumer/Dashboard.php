<?php
    session_start();
    require_once '../App.php';

    if (!isset($_SESSION['userid']))
    {
        echo "<script type='text/javascript'>alert('User already logout!');window.location = '../../store/logout.php'</script>";
    }
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
                        <div class="pad-top-20p pad-x-20p">
                            <div class="title-2">Dashboard</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      
    </div>
   
</body>
</html>