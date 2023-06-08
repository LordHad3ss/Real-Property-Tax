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
                            <div class="title-2">Announcement</div>
                        </div>
                        <div class="pad-x-20p pad-y-20p">
                            <div style="height: 400px;">
                                <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel" style="height: 100%;">
                                    <div class="carousel-indicators">
                                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                    </div>
                                    <div class="carousel-inner" style="height: 100%;">
                                        <div class="carousel-item active" data-bs-interval="10000" style="height: 100%;">
                                            <img src="../../assets/media/banner1.jpeg" class="d-block w-100 h-100 object-fit-contain rounded" alt="...">
                                            <div class="carousel-caption">
                                                <!-- <h5 class="text-white">First slide label</h5>
                                                <p class="text-white">Some representative placeholder content for the first slide.</p> -->
                                                <div class="row gx-0 g-0 justify-content-end">
                                                    <div class="col-auto">
                                                        <button class="button-3">Click Here</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item" data-bs-interval="10000" style="height: 100%;">
                                            <img src="../../assets/media/banner2.jpeg" class="d-block w-100 h-100 object-fit-contain rounded" alt="...">
                                            <div class="carousel-caption">
                                                <!-- <h5 class="text-white">First slide label</h5>
                                                <p class="text-white">Some representative placeholder content for the first slide.</p> -->
                                                <div class="row gx-0 g-0 justify-content-end">
                                                    <div class="col-auto">
                                                        <button class="button-3">Click Here</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item" data-bs-interval="10000" style="height: 100%;">
                                            <img src="../../assets/media/logo.png" class="d-block w-100 h-100 object-fit-contain rounded" alt="...">
                                            <div class="carousel-caption">
                                                <!-- <h5 class="text-white">First slide label</h5>
                                                <p class="text-white">Some representative placeholder content for the first slide.</p> -->
                                                <div class="row gx-0 g-0 justify-content-end">
                                                    <div class="col-auto">
                                                        <button class="button-3">Click Here</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
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