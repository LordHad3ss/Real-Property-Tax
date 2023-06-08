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
                        <div class="pad-top-20p pad-x-20p">
                            <div class="title-2">Dashboard</div>
                        </div>
                        <div class="pad-x-20p pad-top-20p">
                            <div class="row gx-3 g-0 gy-3">
                                <div class="col-6 col-md col-lg">
                                    <div class="row gx-0 g-0">
                                        <div class="card-box pad-xy-20p">
                                            <div class="col">
                                                <div class="row gx-2 g-0">
                                                    <div class="col-auto">
                                                        <i class="fa fa-bank fs-20p"></i>
                                                    </div>
                                                    <div class="col-auto">
                                                        Total Properties
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="title-1 text-primary mt-2">23</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md col-lg">
                                    <div class="row gx-0 g-0">
                                        <div class="card-box pad-xy-20p">
                                            <div class="col">
                                                <div class="row gx-2 g-0">
                                                    <div class="col-auto">
                                                        <i class="fa fa-ticket fs-20p"></i>
                                                    </div>
                                                    <div class="col-auto">
                                                        Total Assessment
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="title-1 text-primary mt-2">15</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md col-lg">
                                    <div class="card-box pad-xy-20p h-100">
                                        <div class="row gx-0 g-0">
                                            <div class="col">
                                                <i class="fa fa-clock fs-1"></i>
                                            </div>
                                            <div class="col">
                                                <div class="row gx-0 gy-3 g-0">
                                                    <div class="col-12 text-end">
                                                        <div class="text-primary">
                                                            <span class="fw-bold">Date:</span>
                                                            <?php echo date("M-d-Y")  ; ?>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 text-end">
                                                        <div class="text-primary">
                                                            <span class="fw-bold">Time:</span>
                                                            <span id="current-time"></span>
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
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
        function updateTime() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState === 4 && this.status === 200) {
                    var time = this.responseText;
                    document.getElementById("current-time").textContent = time;
                }
            };
            xhttp.open("GET", "real_time.php", true);
            xhttp.send();
        }

        // Update the time every second
        setInterval(updateTime, 1000);
    </script>
</html>