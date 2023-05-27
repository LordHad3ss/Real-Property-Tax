<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="src/assets/media/logo.png" class="img img-fluid" width="40">
            Real Property Tax
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item me-2">
                <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item me-2">
                <a class="nav-link" href="#">About Us</a>
                </li>
                <li class="nav-item me-2">
                <a class="nav-link" href="#">Contact Us</a>
                </li>
            </ul>
            <div class="row gx-2 g-0">
                <div class="col-auto">
                    <button class="button-2" onclick="goToRegister()">Signup</button>
                </div>
                <div class="col-auto">
                    <button class="button-1" onclick="goToLogin()">Login</button>
                </div>
            </div>
        </div>
    </div>
</nav>

<script>
    function goToRegister() {
        window.location.assign("./register.php");
    }
    
    function goToLogin() {
        window.location.assign("./index.php");
    }
</script>