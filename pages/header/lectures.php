<nav class="navbar navbar-expand-lg fixed" id="nav">
    <div class="container-fluid">
        <!--Logo-->
        <a class="navbar-brand" href="#">
            <img src="img/TĐT_logo-removebg.png" alt="Logo" width="80em">
        </a>
        <a class="navbar-brand" href="#">Đăng nhập</a>
        <!--ToggleBtn-->
        <button class="navbar-toggler shadow-none border-0" type="button" data-bs-toggle="offcanvas"
            data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!--SideBar-->
        <div class="sidebar offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
            aria-labelledby="offcanvasNavbarLabel">
            <!--SideBar Header-->
            <div class="offcanvas-header text-black border-bottom border-dark">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Dzoãn Xuân Thanh</h5>
                <button type="button" class="btn-close shadow-none  " data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <!--SideBar Body-->
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a class="nav-link mx-2" href="index.php?user=introduce">Giới thiệu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active mx-2" href="index.php?user=lectures">Tài liệu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2" href="index.php?user=annoucements">Thông báo - Tin tức</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2" href="index.php?user=jobs">Thông tin việc làm</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2" href="index.php?user=contact">Liên hệ</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </div>
</nav>