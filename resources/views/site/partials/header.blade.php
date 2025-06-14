<header class="header header-fixed sticky-bar">
    <div class="top-bar top-bar-2 top-bar-3 bg-transparent">
        <div class="container-fluid">
            <div class="text-header-info">
                <a class="phone-head text-white" href="#">
                    <svg width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13.656 2.34229C10.5314 -0.781426 5.46601 -0.780676 2.34229 2.34401C-0.781426 5.4687 -0.780676 10.534 2.34401 13.6577C5.4687 16.7814 10.534 16.7807 13.6577 13.656C15.1579 12.1554 16.0005 10.1202 16 7.99829C15.9996 5.87673 15.1564 3.84223 13.656 2.34229ZM12.1157 11.1439C12.1154 11.1443 12.115 11.1446 12.1147 11.145V11.1423L11.7093 11.545C11.1851 12.0758 10.4216 12.2942 9.69598 12.121C8.96489 11.9253 8.26989 11.6138 7.63732 11.1983C7.04964 10.8227 6.50501 10.3837 6.01332 9.88898C5.56092 9.43989 5.15448 8.94676 4.79998 8.41698C4.41223 7.84692 4.10532 7.22592 3.88798 6.57164C3.63882 5.80301 3.84529 4.95961 4.42132 4.39298L4.89598 3.91832C5.02795 3.78576 5.24239 3.78529 5.37492 3.91726C5.37526 3.91761 5.37564 3.91795 5.37598 3.91832L6.87464 5.41698C7.0072 5.54895 7.00767 5.76339 6.8757 5.89592C6.87536 5.89626 6.87501 5.89661 6.87464 5.89698L5.99464 6.77698C5.74214 7.02673 5.71039 7.42361 5.91998 7.71032C6.23826 8.14714 6.59048 8.55817 6.97332 8.93967C7.40017 9.36835 7.8642 9.75832 8.35998 10.105C8.64645 10.3048 9.03482 10.2711 9.28264 10.025L10.1333 9.16101C10.2653 9.02845 10.4797 9.02798 10.6122 9.15995C10.6126 9.16029 10.6129 9.16064 10.6133 9.16101L12.1146 10.665C12.2472 10.7969 12.2477 11.0114 12.1157 11.1439Z" fill=""></path>
                    </svg>
                    <span class="d-none d-lg-inline-block"> {{ $config->hotline }} </span>
                </a>
                <a class="email-head text-white" href="#">
                    <svg width="16" height="12" viewbox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M1.96372 1.07378L6.28622 5.39816C7.22897 6.33909 8.77003 6.33991 9.71356 5.39816L14.0361 1.07378C14.0796 1.03025 14.0732 0.958563 14.0227 0.923344C13.5819 0.615875 13.0455 0.433594 12.4677 0.433594H3.53216C2.95431 0.433594 2.41791 0.615906 1.97703 0.923344C1.92653 0.958563 1.92019 1.03025 1.96372 1.07378ZM0.808594 3.15713C0.808594 2.70275 0.92125 2.27344 1.11969 1.89609C1.15072 1.83706 1.22938 1.82513 1.27653 1.87228L5.54431 6.14006C6.89578 7.4935 9.10322 7.49428 10.4555 6.14006L14.7233 1.87228C14.7704 1.82513 14.8491 1.83706 14.8801 1.89609C15.0785 2.27344 15.1912 2.70278 15.1912 3.15713V8.84266C15.1912 10.3456 13.9687 11.5662 12.4677 11.5662H3.53216C2.03116 11.5662 0.808594 10.3456 0.808594 8.84266V3.15713Z" fill=""></path>
                    </svg>
                    <span class="d-none d-lg-inline-block">{{ $config->email }}</span>
                </a>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="main-header">
            <div class="header-left">
                <div class="header-logo">
                    <a class="d-flex" href="#">
                        <img class="light-mode" alt="" src="{{ $config->image->path ?? '' }}" />
                        <img class="dark-mode" alt="" src="{{ $config->image->path ?? '' }}" />
                    </a>
                </div>
                <div class="header-nav">
                    <nav class="nav-main-menu">
                        <ul class="main-menu">
                            <li><a class="color-white" href="#">Trang chủ</a></li>
                            <li><a class="color-white" href="#">Giới thiệu</a></li>
                            <li class="mega-li-small has-children arrow-white">
                                <a class="color-white" href="#">Sản phẩm</a>
                                <div class="mega-menu">
                                    <div class="mega-menu-inner mega-menu-inner-small">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <h6 class="text-lg-bold neutral-1000">Laptop</h6>
                                                <ul class="sub-menu">
                                                    <li><a href="#">Laptop văn phòng</a></li>
                                                    <li><a href="#">Laptop gaming</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-4">
                                                <h6 class="text-lg-bold neutral-1000">Máy in</h6>
                                                <ul class="sub-menu">
                                                    <li><a href="#">Máy in laser</a></li>
                                                    <li><a href="#">Máy in phun</a></li>
                                                    <li><a href="#">Máy in nhiệt</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-4">
                                                <h6 class="text-lg-bold neutral-1000">Xe máy</h6>
                                                <ul class="sub-menu">
                                                    <li><a href="#">Xe ga</a></li>
                                                    <li><a href="#">Xe số</a></li>
                                                    <li><a href="#">Phân khối lớn</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-4">
                                                <h6 class="text-lg-bold neutral-1000">Ô tô</h6>
                                                <ul class="sub-menu">
                                                    <li><a href="#">Ô tô 4 chỗ</a></li>
                                                    <li><a href="#">Ô tô SUV</a></li>
                                                    <li><a href="#">Ô tô du lịch</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-4">
                                                <h6 class="text-lg-bold neutral-1000">Thiết bị khác</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li><a class="color-white" href="#">Chính sách điều khoản</a></li>
                            <li class="has-children arrow-white">
                                <a class="color-white" href="#">Blog</a>
                                <ul class="sub-menu">
                                    <li><a href="#">Tin tức mới nhất</a></li>
                                    <li><a href="#">Về chúng tôi</a></li>
                                </ul>
                            </li>
                            <li><a class="color-white" href="#">Liên hệ</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="header-right">
                    <div class="d-none d-xxl-inline-block align-middle mr-15">
                        <a class="btn btn-signin" href="#">
                            <svg class="mb-1" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <path d="M3 14C3 14 2 14 2 13C2 12 3 9 8 9C13 9 14 12 14 13C14 14 13 14 13 14H3ZM8 8C8.79565 8 9.55871 7.68393 10.1213 7.12132C10.6839 6.55871 11 5.79565 11 5C11 4.20435 10.6839 3.44129 10.1213 2.87868C9.55871 2.31607 8.79565 2 8 2C7.20435 2 6.44129 2.31607 5.87868 2.87868C5.31607 3.44129 5 4.20435 5 5C5 5.79565 5.31607 6.55871 5.87868 7.12132C6.44129 7.68393 7.20435 8 8 8Z" fill="white" />
                            </svg>
                            Đăng nhập
                        </a>
                    </div>
                    <div class="burger-icon-2 burger-icon-white">
                        <img src="/site/imgs/template/icons/menu.svg" alt="Carento" />
                    </div>
                    <div class="burger-icon burger-icon-white">
                        <span class="burger-icon-top"></span>
                        <span class="burger-icon-mid"> </span>
                        <span class="burger-icon-bottom"> </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- prettier-ignore -->
<div class="mobile-header-active mobile-header-wrapper-style perfect-scrollbar button-bg-2">
    <div class="mobile-header-wrapper-inner">
        <div class="mobile-header-logo">
            <a class="d-flex" href="#"><img class="light-mode" alt="Carento" src="{{ $config->image->path ?? '' }}" />
                <img class="dark-mode" alt="Carento" src="{{ $config->image->path ?? '' }}" /></a>
            <div class="burger-icon burger-icon-white"></div>
        </div>

        <div class="mobile-header-content-area">
            <div class="perfect-scroll">
                <div class="mobile-menu-wrap mobile-header-border">
                    <nav>
                        <ul class="mobile-menu font-heading">
                            <li><a href="#">Trang chủ</a></li>
                            <li><a href="#">Giới thiệu</a></li>
                            <li class="has-children">
                                <a href="#">Sản phẩm</a>
                                <ul class="sub-menu">
                                    <li><a href="#">Laptop văn phòng</a></li>
                                    <li><a href="#">Laptop gaming</a></li>
                                    <li><a href="#">Xe ga</a></li>
                                    <li><a href="#">Xe số</a></li>
                                    <li><a href="#">Phân khối lớn</a></li>
                                    <li><a href="#">Ô tô 4 chỗ</a></li>
                                    <li><a href="#">Ô tô SUV</a></li>
                                    <li><a href="#">Ô tô du lịch</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Chính sách điều khoản</a></li>
                            <li class="has-children">
                                <a href="#">Blog</a>
                                <ul class="sub-menu">
                                    <li><a href="#">Tin tức mới nhất</a></li>
                                    <li><a href="#">Về chúng tôi</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Liên hệ</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- offCanvas Sidebar -->
<div class="sidebar-canvas-wrapper perfect-scrollbar button-bg-2">
    <div class="sidebar-canvas-container">
        <div class="sidebar-canvas-head">
            <div class="sidebar-canvas-logo">
                <a class="d-flex" href="#">
                    <img class="light-mode" alt="Carento" src="{{ $config->image->path ?? '' }}" />
                    <img class="dark-mode" alt="Carento" src="{{ $config->image->path ?? '' }}" />
                </a>
            </div>
            <div class="sidebar-canvas-lang">
                <a class="close-canvas" href="#"> <img alt="Carento" src="/site/imgs/template/icons/close.png" /></a>
            </div>
        </div>

        <div class="sidebar-canvas-content">
            <div class="box-author-profile">
                <div class="card-author">
                    <div class="card-image"><img src="/site/imgs/page/homepage1/author2.png" alt="Carento" /></div>
                    <div class="card-info">
                        <p class="text-md-bold neutral-1000">Nguyễn Trường</p>
                        <p class="text-xs neutral-1000">25 Tháng 12 2025</p>
                    </div>
                </div>
                <a class="btn btn-black" href="#">Đăng xuất</a>
            </div>

            <style>
                #recent-products .thumb {
                    width: 50px;
                    height: 50px;
                    overflow: hidden;
                    border: 1px solid #eee;
                    border-radius: 8px;
                    flex: 0 0 auto;
                }
                #recent-products .thumb img {
                    width: 100%;
                    height: 100%;
                    object-fit: cover;
                }
            </style>
            <div class="sidebar-banner">
                <div class="position-relative">
                    <p class="text-xl-bold neutral-1000 mb-4">Sản phẩm đã xem</p>
                    <div id="recent-products">
                        <div class="d-flex align-items-center mb-3">
                            <div class="me-3 border rounded-3 overflow-hidden mw-65">

                                <a href="#">
                                    <img src="/site/imgs/noibat/i1.jpg" style="width: 100px" alt="Carento" />
                                </a>
                            </div>
                            <div class="position-relative">
                                <a href="#" class="text-md-bold neutral-1000">Sony PlayStation 5</a>
                                <p class="text-md-bold text-success">19,000,000đ</p>
                            </div>
                        </div>

                        <div class="d-flex align-items-center mb-3">
                            <div class="me-3 border rounded-3 overflow-hidden mw-65">

                                <a href="#">
                                    <img src="/site/imgs/noibat/i1.jpg" style="width: 100px" alt="Carento" />
                                </a>
                            </div>
                            <div class="position-relative">
                                <a href="#" class="text-md-bold neutral-1000">Sony PlayStation 5</a>
                                <p class="text-md-bold text-success">19,000,000đ</p>
                            </div>
                        </div>

                        <div class="d-flex align-items-center mb-3">
                            <div class="me-3 border rounded-3 overflow-hidden mw-65">

                                <a href="#">
                                    <img src="/site/imgs/noibat/i1.jpg" style="width: 100px" alt="Carento" />
                                </a>
                            </div>
                            <div class="position-relative">
                                <a href="#" class="text-md-bold neutral-1000">Sony PlayStation 5</a>
                                <p class="text-md-bold text-success">19,000,000đ</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="box-contactus">
                <h6 class="title-contactus neutral-1000">Liên hệ với chúng tôi</h6>
                <div class="contact-info">
                    <p class="address-2 text-md-medium neutral-1000"> {{ $config->address_company }} </p>
                    <p class="hour-work-2 text-md-medium neutral-1000">Giờ làm việc: 8:00 - 17:00, T2 - T7</p>
                    <p class="email-2 text-md-medium neutral-1000">{{ $config->email }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
