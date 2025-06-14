<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    @include('site.partials.head')
    @yield('css')
</head>

<body>
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="text-center">
                    <div class="page-loader"></div>
                </div>
            </div>
        </div>
    </div>

    @include('site.partials.header')

    <main class="main">
        @yield('content')
    </main>

    @include('site.partials.footer')

    <style>
        /* thành phần overlay */
        .city-modal-overlay {
            position: fixed;
            inset: 0;               /* top/left/right/bottom = 0 */
            background: rgba(0,0,0,0.5);
            display: none;          /* ẩn mặc định */
            align-items: center;
            justify-content: center;
            z-index: 10000;
        }

        /* box chính */
        .city-modal-box {
            background: #fff;
            border-radius: 8px;
            width: 90%;
            max-width: 360px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.2);
            overflow: hidden;
            font-family: sans-serif;
        }

        /* header / body / footer */
        .city-modal-header,
        .city-modal-body,
        .city-modal-footer {
            padding: 16px;
        }
        .city-modal-header { border-bottom: 1px solid #eee; text-align: center; }
        .city-modal-body select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            appearance: none;
            background: url("data:image/svg+xml;charset=US-ASCII,<svg xmlns='http://www.w3.org/2000/svg' width='10' height='5'><polygon points='0,0 10,0 5,5' fill='%23666'/></svg>") no-repeat right 12px center;
            background-size: 10px 5px;
        }
        .city-modal-footer { border-top: 1px solid #eee; text-align: center; }
        .city-modal-footer button {
            padding: 8px 24px;
            border: none;
            border-radius: 4px;
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
        }
        .city-modal-footer button:hover {
            background-color: #0056b3;
        }




        /* ==== 1. Keyframes cho animation ==== */
        @keyframes fadeInOverlay {
            from { opacity: 0; }
            to   { opacity: 1; }
        }

        @keyframes slideDown {
            from {
                transform: translateY(-20px) scale(0.9);
                opacity: 0;
            }
            to {
                transform: translateY(0) scale(1);
                opacity: 1;
            }
        }

        /* ==== 2. Overlay với blur + fade-in ==== */
        .city-modal-overlay {
            /* Glassmorphism: blur nền sau */
            backdrop-filter: blur(4px);
            background: rgba(0, 0, 0, 0.25);
            /* animation fade-in */
            animation: fadeInOverlay 0.4s ease-out forwards;
        }

        /* ==== 3. Box chính: nền mờ + border + slide-down ==== */
        .city-modal-box {
            background: rgba(255, 255, 255, 0.75);
            backdrop-filter: blur(8px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            /* hiệu ứng slide + zoom */
            animation: slideDown 0.4s ease-out forwards;
        }

        /* ==== 4. Header gradient cho nổi bật ==== */
        .city-modal-header {
            background: linear-gradient(135deg, #5edd5b, #75b353);
            color: #fff;
            border-bottom: none;
        }

        /* ==== 5. Nút hover bóng bẩy ==== */
        .city-modal-footer button {
            transition: background-color 0.3s, transform 0.2s, box-shadow 0.2s;
        }
        .city-modal-footer button:hover {
            background-color: #0056b3;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
        }

    </style>
    <!-- Popup overlay -->
    <div class="city-modal-overlay" id="cityModal">
        <div class="city-modal-box">
            <div class="city-modal-header">
                <h6>Vui lòng chọn thành phố</h6>
            </div>
            <div class="city-modal-body">
                <select id="citySelect">
                    <option value="">-- Chọn thành phố của bạn --</option>
                    <option value="hanoi">Hà Nội</option>
                    <option value="hcm">Tp. Hồ Chí Minh</option>
                    <option value="danang">Đà Nẵng</option>
                </select>
            </div>
            <div class="city-modal-footer">
                <div class="d-flex justify-content-center">
                    <button class="btn btn-primary" id="confirmBtn">
                        Xác nhận
                    </button>
                </div>

{{--                <button id="confirmBtn">Xác nhận</button>--}}
            </div>
        </div>
    </div>

    <!--Vendors Scripts-->
    <script src="/site/js/jquery-3.7.1.min.js"></script>
    <script src="/site/js/jquery-migrate-3.3.0.min.js"></script>
    <script src="/site/js/bootstrap.bundle.min.js"></script>
    <!--Other-->
    <script src="/site/js/magnific-popup.js"></script>
    <script src="/site/js/perfect-scrollbar.min.js"></script>
    <script src="/site/js/swiper-bundle.min.js"></script>
    <script src="/site/js/slick.js"></script>
    <script src="/site/js/jquery.carouselTicker.js"></script>
    <script src="/site/js/masonry.min.js"></script>
    <script src="/site/js/scrollup.js"></script>
    <script src="/site/js/wow.js"></script>
    <script src="/site/js/waypoints.js"></script>
    <script src="/site/js/jquery.appear.js"></script>
    <script src="/site/js/jquery.odometer.min.js"></script>
    <script src="/site/js/bootstrap-datepicker.js"></script>
    <script src="/site/js/dark.js"></script>
    <!-- Count down-->
    <script src="/site/js/jquery.countdown.min.js"></script>
    <script src="/site/js/noUISlider.js"></script>
    <script src="/site/js/slider.js"></script>
    <!--Custom script for this template-->
    <script src="/site/js/maine209.js?v=1.0.0"></script>

    <script>
        var CSRF_TOKEN = "{{ csrf_token() }}";
    </script>

    <script>
        window.addEventListener('DOMContentLoaded', function() {
            console.log('Popup script chạy rồi');  // kiểm tra xem có tới đây không
            var modal  = document.getElementById('cityModal');
            var btn    = document.getElementById('confirmBtn');
            var select = document.getElementById('citySelect');

            // Hiện popup
            modal.style.display = 'flex';

            btn.addEventListener('click', function(e) {
                e.preventDefault();
                if (!select.value) {
                    alert('Vui lòng chọn một thành phố.');
                    return;
                }
                // nếu cần lưu localStorage: localStorage.setItem('userCity', select.value);
                modal.style.display = 'none';
            });
        });
    </script>


    @stack('scripts')

</body>

</html>
