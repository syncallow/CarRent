<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Dashboard - CarRental</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('admin/assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('admin/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('admin/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">
    <link href="{{ asset('fonts/icomoon/style.css') }}" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="{{ asset('admin/assets/css/style.css') }}" rel="stylesheet">

    <!-- =======================================================
    * Template Name: NiceAdmin
    * Updated: Aug 30 2023 with Bootstrap v5.3.1
    * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
    <style>
        .feature-ico {
            font-family: fontAwesome;
        }
    </style>
</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
        <a href="{{ route('admin.index') }}" class="logo d-flex align-items-center">
            <img src="{{ asset('assets/img/logo.png') }}" alt="">
            <span class="d-none d-lg-block">NiceAdmin</span>
        </a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
        <form class="search-form d-flex align-items-center" method="POST" action="#">
            <input type="text" name="query" placeholder="Search" title="Enter search keyword">
            <button type="submit" title="Search"><i class="bi bi-search"></i></button>
        </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">

            <li class="nav-item d-block d-lg-none">
                <a class="nav-link nav-icon search-bar-toggle " href="#">
                    <i class="bi bi-search"></i>
                </a>
            </li><!-- End Search Icon-->

            <li class="nav-item dropdown">

                <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                    <i class="bi bi-bell"></i>
                    <span class="badge bg-primary badge-number">4</span>
                </a><!-- End Notification Icon -->

                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
                    <li class="dropdown-header">
                        You have 4 new notifications
                        <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li class="notification-item">
                        <i class="bi bi-exclamation-circle text-warning"></i>
                        <div>
                            <h4>Lorem Ipsum</h4>
                            <p>Quae dolorem earum veritatis oditseno</p>
                            <p>30 min. ago</p>
                        </div>
                    </li>

                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li class="notification-item">
                        <i class="bi bi-x-circle text-danger"></i>
                        <div>
                            <h4>Atque rerum nesciunt</h4>
                            <p>Quae dolorem earum veritatis oditseno</p>
                            <p>1 hr. ago</p>
                        </div>
                    </li>

                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li class="notification-item">
                        <i class="bi bi-check-circle text-success"></i>
                        <div>
                            <h4>Sit rerum fuga</h4>
                            <p>Quae dolorem earum veritatis oditseno</p>
                            <p>2 hrs. ago</p>
                        </div>
                    </li>

                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li class="notification-item">
                        <i class="bi bi-info-circle text-primary"></i>
                        <div>
                            <h4>Dicta reprehenderit</h4>
                            <p>Quae dolorem earum veritatis oditseno</p>
                            <p>4 hrs. ago</p>
                        </div>
                    </li>

                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li class="dropdown-footer">
                        <a href="#">Show all notifications</a>
                    </li>

                </ul><!-- End Notification Dropdown Items -->

            </li><!-- End Notification Nav -->

            <li class="nav-item dropdown">

                <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                    <i class="bi bi-chat-left-text"></i>
                    <span class="badge bg-success badge-number">3</span>
                </a><!-- End Messages Icon -->

                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
                    <li class="dropdown-header">
                        You have 3 new messages
                        <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li class="message-item">
                        <a href="#">
                            <img src="{{ asset('admin/assets/img/messages-1.jpg') }}" alt="" class="rounded-circle">
                            <div>
                                <h4>Maria Hudson</h4>
                                <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                <p>4 hrs. ago</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li class="message-item">
                        <a href="#">
                            <img src="{{ asset('admin/assets/img/messages-2.jpg') }}" alt="" class="rounded-circle">
                            <div>
                                <h4>Anna Nelson</h4>
                                <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                <p>6 hrs. ago</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li class="message-item">
                        <a href="#">
                            <img src="{{ asset('admin/assets/img/messages-3.jpg') }}" alt="" class="rounded-circle">
                            <div>
                                <h4>David Muldon</h4>
                                <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                <p>8 hrs. ago</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li class="dropdown-footer">
                        <a href="#">Show all messages</a>
                    </li>

                </ul><!-- End Messages Dropdown Items -->

            </li><!-- End Messages Nav -->

            <li class="nav-item dropdown pe-3">

                <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                    <img src="{{ asset('/storage/' . Auth::user()->profile_image) }}" alt="{{ Auth::user()->name }}" class="rounded-circle">
                    <span class="d-none d-md-block dropdown-toggle ps-2">{{ Auth::user()->name }}</span>
                </a><!-- End Profile Iamge Icon -->

                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                    <li class="dropdown-header">
                        <h6>{{ Auth::user()->name }}</h6>
                        <span>{{ Auth::user()->job }}</span>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="{{ route('admin.user.show', Auth::user()->id) }}">
                            <i class="bi bi-person"></i>
                            <span>My Profile</span>
                        </a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="{{ route('logout') }}"  onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <i class="bi bi-box-arrow-right"></i>
                            <span>Sign Out</span>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>

                </ul><!-- End Profile Dropdown Items -->
            </li><!-- End Profile Nav -->

        </ul>
    </nav><!-- End Icons Navigation -->

</header><!-- End Header -->

<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link {{ \Illuminate\Support\Facades\Route::currentRouteNamed('admin.index') ? '' : 'collapsed' }}" href="{{ route('admin.index') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->
        <li class="nav-item">
            <a class="nav-link {{ \Illuminate\Support\Facades\Route::currentRouteNamed('admin.info.*') ? '' : 'collapsed' }}" href="{{ route('admin.info.index') }}">
                <i class="bi bi-info-circle-fill"></i>
                <span>Site Info</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ \Illuminate\Support\Facades\Route::currentRouteNamed('admin.pages.*') ? '' : 'collapsed' }}" href="{{ route('admin.pages.index') }}">
                <i class="bi bi-stickies-fill"></i>
                <span>Pages</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ \Illuminate\Support\Facades\Route::currentRouteNamed('admin.promo.*') ? '' : 'collapsed' }}" href="{{ route('admin.promo.index') }}">
                <i class="bi bi-file-richtext-fill"></i>
                <span>Promo</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ \Illuminate\Support\Facades\Route::currentRouteNamed('admin.cars.*') ? '' : 'collapsed' }}" href="{{ route('admin.cars.index') }}">
                <i class="bx bxs-car"></i>
                <span>Cars</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ \Illuminate\Support\Facades\Route::currentRouteNamed('admin.features.*') ? '' : 'collapsed' }}" href="{{ route('admin.features.index') }}">
                <i class="bi bi-card-checklist"></i>
                <span>Features</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ \Illuminate\Support\Facades\Route::currentRouteNamed('admin.propose.*') ? '' : 'collapsed' }}" href="{{ route('admin.propose.index') }}">
                <i class="bi bi-spellcheck"></i>
                <span>Propose</span>
            </a>
        </li>
        @can('view', auth()->user())
        <li class="nav-item">
            <a class="nav-link {{ \Illuminate\Support\Facades\Route::currentRouteNamed('admin.user.*') ? '' : 'collapsed' }}" href="{{ route('admin.user.index') }}">
                <i class="bi bi-people-fill"></i>
                <span>Users</span>
            </a>
        </li>
        @endcan
        <li class="nav-item">
            <a class="nav-link {{ \Illuminate\Support\Facades\Route::currentRouteNamed('admin.posts.*') ? '' : 'collapsed' }}" href="{{ route('admin.posts.index') }}">
                <i class="bi bi-file-earmark-post"></i>
                <span>Posts</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ \Illuminate\Support\Facades\Route::currentRouteNamed('admin.comments.*') ? '' : 'collapsed' }}" href="{{ route('admin.comments.index') }}">
                <i class="bi bi-chat-left-dots"></i>
                <span>Comments</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ \Illuminate\Support\Facades\Route::currentRouteNamed('admin.orders.*') ? '' : 'collapsed' }}" href="{{ route('admin.orders.index') }}">
                <i class="bi bi-cart"></i>
                <span>Orders</span>
            </a>
        </li>

    </ul>

</aside><!-- End Sidebar-->

@yield('content')<!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer" class="footer">
    <div class="copyright">
        &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{ asset('admin/assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ asset('admin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('admin/assets/vendor/chart.js/chart.umd.js') }}"></script>
<script src="{{ asset('admin/assets/vendor/echarts/echarts.min.js') }}"></script>
<script src="{{ asset('admin/assets/vendor/quill/quill.min.js') }}"></script>
<script src="{{ asset('admin/assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
<script src="{{ asset('admin/assets/vendor/tinymce/tinymce.min.js') }}"></script>
<script src="{{ asset('admin/assets/vendor/php-email-form/validate.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<!-- Template Main JS File -->
<script src="{{ asset('admin/assets/js/main.js') }}"></script>
<script type="text/javascript">
    tinymce.init({
        selector: 'textarea#default-editor'
    });

    /**
     *  Create order chose owner script
     *  */
    let oldGuestName, oldGuestLastName, oldGuestPhone
    function disableGuest (){
        let guestName = document.getElementById('guest_name');
        let guestLastName = document.getElementById('guest_lastname');
        let guestPhone = document.getElementById('guest_phone');
        let userId = document.getElementById('user_id');

        if(userId.value > 0){
            oldGuestName = guestName.value;
            oldGuestLastName = guestLastName.value;
            oldGuestPhone = guestPhone.value;

            guestName.value = "";
            guestLastName.value = "";
            guestPhone.value = "";

            guestName.setAttribute("disabled", "true");
            guestLastName.setAttribute("disabled", "true");
            guestPhone.setAttribute("disabled", "true");
            guestName.removeAttribute("required");
            guestLastName.removeAttribute("required");
            guestPhone.removeAttribute("required");
            userId.setAttribute('required', 'true');

        }else {
            guestName.value = oldGuestName;
            guestLastName.value = oldGuestLastName;
            guestPhone.value = oldGuestPhone;

            guestName.removeAttribute("disabled");
            guestLastName.removeAttribute("disabled");
            guestPhone.removeAttribute("disabled");
            guestName.setAttribute('required', 'true');
            guestLastName.setAttribute('required', 'true');
            guestPhone.setAttribute('required', 'true');
            userId.removeAttribute('required')
        }

    }

    /**
     *  Disable past dates in datepicker
     *  Можно сделать по другому, но я сделал так, лучше можно всегда, но не делать же всю жизнь выбор даты:D
     *  */


        $(document).ready(function (){

            let date = new Date();
            let minDate = date.toISOString().substr(0, 10); // Преобразовываем дату в строку такого вида "0000-00-00"(Y-m-d)
            let endMinDate = new Date (date.setDate(date.getDate() + 1)); //Получаем минимальную дату для окончания аренды

            endMinDate = endMinDate.toISOString().substr(0, 10); // Преобразовываем дату для окончания аренды в строку такого вида "0000-00-00"(Y-m-d)

                if(!$("#bookStartDate").val() && !$("#bookEndDate").val()){ //Проверяем есть ли пустые значения двух полей с датой одновременно
                    $("#bookStartDate").attr('min', minDate); //Ставим минимальную дату для выбора начала аренды
                    $("#bookEndDate").attr('min', endMinDate); //Ставим минимальную дату для выбора конца аренды
                }else{
                    let minBkEndDate = new Date($("#bookStartDate").val());
                    let maxBkStartDate = new Date($("#bookEndDate").val());
                    maxBkStartDate.setDate(maxBkStartDate.getDate() -1);
                    maxBkStartDate = maxBkStartDate.toISOString().substr(0, 10);
                    minBkEndDate.setDate(minBkEndDate.getDate() + 1);
                    minBkEndDate = minBkEndDate.toISOString().substr(0, 10);

                    $("#bookStartDate").attr('min', minDate);
                    $("#bookStartDate").attr('max', maxBkStartDate);
                    $("#bookEndDate").attr('min', minBkEndDate);
                }

            $("#bookStartDate").change(function (){ // При выборе даты начала аренды
                if($(this).val()){ // Если значение не пустое, ну это для кнопки очистить проверочка
                    let minBookEndDate = new Date($(this).val()); //Создаём переменную и даём значение даты начала чтобы получить минимальной даты для конца аренды
                    minBookEndDate.setDate(minBookEndDate.getDate() + 1); //Добавляем 1 день к взятой дате начала аренды чтобы нельзя было выбрать тот же день для конца аренды
                    minBookEndDate = minBookEndDate.toISOString().substr(0, 10); // Преобразовываем дату для окончания аренды в строку такого вида "0000-00-00"(Y-m-d)
                    $("#bookEndDate").attr('min', minBookEndDate);// Передаём значение полученной минимальной даты конца аренды
                    console.log(1);
                }else{ // Если всё же пустое

                    if($("#bookEndDate").val()){ // Проверяем наличие даты конца аренды
                        let maxBookStartDate = new Date($("#bookEndDate").val()); //Создаём переменную и даём значение даты начала чтобы получить максимальной даты для начала аренды
                        maxBookStartDate.setDate(maxBookStartDate.getDate() - 1); //Отнимаем 1 день от взятой даты конца аренды чтобы нельзя было выбрать тот же день для начала аренды
                        maxBookStartDate = maxBookStartDate.toISOString().substr(0, 10);// Преобразовываем дату для окончания аренды в строку такого вида "0000-00-00"(Y-m-d)
                        $("#bookStartDate").attr('max', maxBookStartDate);// Передаём значение полученной максимальной даты начала аренды
                        $("#bookEndDate").attr('min', endMinDate); //Ставим минимальную дату для выбора конца аренды
                    } else {
                        $("#bookStartDate").attr('max', 0); //Ставим минимальную дату для выбора начала аренды
                    }
                }

            });

            $("#bookEndDate").change(function (){ // При выборе даты конца аренды
                if($(this).val()){ // Если значение не пустое, ну это для кнопки очистить проверочка
                    let maxBookStartDate = new Date($(this).val()); //Создаём переменную и даём значение даты начала чтобы получить максимальной даты для начала аренды
                    maxBookStartDate.setDate(maxBookStartDate.getDate() - 1); //Отнимаем 1 день от взятой даты конца аренды чтобы нельзя было выбрать тот же день для начала аренды
                    maxBookStartDate = maxBookStartDate.toISOString().substr(0, 10);// Преобразовываем дату для окончания аренды в строку такого вида "0000-00-00"(Y-m-d)
                    $("#bookStartDate").attr('max', maxBookStartDate);// Передаём значение полученной максимальной даты начала аренды
                }else{ // Если всё же пустое
                    if($("#bookStartDate").val()){ // Проверяем наличие даты начала аренды
                        let minBookEndDate = new Date($("#bookStartDate").val()); //Создаём переменную и даём значение даты начала чтобы получить минимальной даты для конца аренды
                        minBookEndDate.setDate(minBookEndDate.getDate() + 1); //Добавляем 1 день к взятой дате начала аренды чтобы нельзя было выбрать тот же день для конца аренды
                        minBookEndDate = minBookEndDate.toISOString().substr(0, 10); // Преобразовываем дату для окончания аренды в строку такого вида "0000-00-00"(Y-m-d)
                        $("#bookEndDate").attr('min', minBookEndDate);// Передаём значение полученной минимальной даты конца аренды
                        $("#bookStartDate").attr('max', 0);
                    }else{ // Если его нету то ставим минимальную дату по умолчанию
                        $("#bookEndDate").attr('min', endMinDate); //Ставим минимальную дату для выбора конца аренды
                        $("#bookStartDate").attr('max', 0);
                    }

                }

            });

            /**
             * Count rent days on ready
             */

            let ctBookStartDate = new Date($("#bookStartDate").val());
            let ctBookEndDate = new Date($("#bookEndDate").val());

            let days = ctBookEndDate.getTime() - ctBookStartDate.getTime();
            days = days / (1000 * 3600 * 24);
            $('.ctDays').html(days);


            $(document).change(function (){
                /**
                 * Count rent days
                 */

                ctBookStartDate = new Date($("#bookStartDate").val());
                ctBookEndDate = new Date($("#bookEndDate").val());

                days = ctBookEndDate.getTime() - ctBookStartDate.getTime();
                days = days / (1000 * 3600 * 24);
                $('.ctDays').html(days);

                /**
                 * Count total price
                 */

                $('#totalPrice').val(days * $('#priceCar').val());
            });
        });
</script>
</body>

</html>
