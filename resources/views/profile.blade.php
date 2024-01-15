<!--
=========================================================
* Material Dashboard 2 - v3.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard
* Copyright 2023 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="http://localhost/nutech_integrasi_dio_wijaya_putra/public/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="http://localhost/nutech_integrasi_dio_wijaya_putra/public/assets/img/favicon.png">
    <title>
        Material Dashboard 2 by Creative Tim
    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="http://localhost/nutech_integrasi_dio_wijaya_putra/public/assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="http://localhost/nutech_integrasi_dio_wijaya_putra/public/assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="http://localhost/nutech_integrasi_dio_wijaya_putra/public/assets/css/material-dashboard.css?v=3.1.9" rel="stylesheet" />
    <!-- Nepcha Analytics (nepcha.com) -->
    <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
    <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
</head>

<body class="g-sidenav-show  bg-gray-200">
    <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 fixed-start bg-gradient-dark" id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0 d-flex justify-content-center align-items-center" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
                <img src="http://localhost/nutech_integrasi_dio_wijaya_putra/public/assets/img/Handbag.png" alt="">
                <span class="text-white logo-position ms-2">SIMS Web App</span>
            </a>
        </div>
        <hr class="horizontal light mt-0 mb-2">
        <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a onclick="indexNav()" class="nav-link text-white">
                        <img src="http://localhost/nutech_integrasi_dio_wijaya_putra/public/assets/img/Package.png" alt="">
                        <span class="nav-link-text text-white fs-16 ms-2">Produk</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a onclick="profileNav()" class="nav-link text-white active bg-red-transparent">
                        <img src="http://localhost/nutech_integrasi_dio_wijaya_putra/public/assets/img/User.png" alt="">
                        <span class="nav-link-text text-white fs-16 ms-2">Profile</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a onclick="logoutNav()" class="nav-link text-white">
                        <img src="http://localhost/nutech_integrasi_dio_wijaya_putra/public/assets/img/SignOut.png" alt="">
                        <span class="nav-link-text text-white fs-16 ms-2">Logout</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <div class="container-fluid py-4">
            <!-- CONTENT FROM EACH PAGE -->
            <div class="row">
                <div class="col-12">
                    <img id="profile-image" alt="" width="100" height="100">
                </div>
                <div class="col-12 mt-3">
                    <span id="nama-kandidat"></span>
                </div>
                <div class="col-8 mt-3">
                    <span class="cb">Nama Kandidat</span>
                    <input id="input-nama-kandidat" class="form-control mt-2" type="text" readonly>
                </div>
                <div class="col-4 mt-3">
                    <span class="cb">Posisi Kandidat</span>
                    <input id="input-posisi-kandidat" class="form-control mt-2" type="text" readonly>
                </div>
            </div>
            <!-- END OF CONTENT FROM EACH PAGE -->
        </div>
    </main>
    <!--   Core JS Files   -->
    <script src="http://localhost/nutech_integrasi_dio_wijaya_putra/public/assets/js/core/popper.min.js"></script>
    <script src="http://localhost/nutech_integrasi_dio_wijaya_putra/public/assets/js/core/bootstrap.min.js"></script>
    <script src="http://localhost/nutech_integrasi_dio_wijaya_putra/public/assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="http://localhost/nutech_integrasi_dio_wijaya_putra/public/assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script src="http://localhost/nutech_integrasi_dio_wijaya_putra/public/assets/js/plugins/chartjs.min.js"></script>
    <script>
        var ctx = document.getElementById("chart-bars").getContext("2d");

        new Chart(ctx, {
            type: "bar",
            data: {
                labels: ["M", "T", "W", "T", "F", "S", "S"],
                datasets: [{
                    label: "Sales",
                    tension: 0.4,
                    borderWidth: 0,
                    borderRadius: 4,
                    borderSkipped: false,
                    backgroundColor: "rgba(255, 255, 255, .8)",
                    data: [50, 20, 10, 22, 50, 10, 40],
                    maxBarThickness: 6
                }, ],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false,
                    }
                },
                interaction: {
                    intersect: false,
                    mode: 'index',
                },
                scales: {
                    y: {
                        grid: {
                            drawBorder: false,
                            display: true,
                            drawOnChartArea: true,
                            drawTicks: false,
                            borderDash: [5, 5],
                            color: 'rgba(255, 255, 255, .2)'
                        },
                        ticks: {
                            suggestedMin: 0,
                            suggestedMax: 500,
                            beginAtZero: true,
                            padding: 10,
                            font: {
                                size: 14,
                                weight: 300,
                                family: "Roboto",
                                style: 'normal',
                                lineHeight: 2
                            },
                            color: "#fff"
                        },
                    },
                    x: {
                        grid: {
                            drawBorder: false,
                            display: true,
                            drawOnChartArea: true,
                            drawTicks: false,
                            borderDash: [5, 5],
                            color: 'rgba(255, 255, 255, .2)'
                        },
                        ticks: {
                            display: true,
                            color: '#f8f9fa',
                            padding: 10,
                            font: {
                                size: 14,
                                weight: 300,
                                family: "Roboto",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                },
            },
        });


        var ctx2 = document.getElementById("chart-line").getContext("2d");

        new Chart(ctx2, {
            type: "line",
            data: {
                labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                datasets: [{
                    label: "Mobile apps",
                    tension: 0,
                    borderWidth: 0,
                    pointRadius: 5,
                    pointBackgroundColor: "rgba(255, 255, 255, .8)",
                    pointBorderColor: "transparent",
                    borderColor: "rgba(255, 255, 255, .8)",
                    borderColor: "rgba(255, 255, 255, .8)",
                    borderWidth: 4,
                    backgroundColor: "transparent",
                    fill: true,
                    data: [50, 40, 300, 320, 500, 350, 200, 230, 500],
                    maxBarThickness: 6

                }],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false,
                    }
                },
                interaction: {
                    intersect: false,
                    mode: 'index',
                },
                scales: {
                    y: {
                        grid: {
                            drawBorder: false,
                            display: true,
                            drawOnChartArea: true,
                            drawTicks: false,
                            borderDash: [5, 5],
                            color: 'rgba(255, 255, 255, .2)'
                        },
                        ticks: {
                            display: true,
                            color: '#f8f9fa',
                            padding: 10,
                            font: {
                                size: 14,
                                weight: 300,
                                family: "Roboto",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                    x: {
                        grid: {
                            drawBorder: false,
                            display: false,
                            drawOnChartArea: false,
                            drawTicks: false,
                            borderDash: [5, 5]
                        },
                        ticks: {
                            display: true,
                            color: '#f8f9fa',
                            padding: 10,
                            font: {
                                size: 14,
                                weight: 300,
                                family: "Roboto",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                },
            },
        });

        var ctx3 = document.getElementById("chart-line-tasks").getContext("2d");

        new Chart(ctx3, {
            type: "line",
            data: {
                labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                datasets: [{
                    label: "Mobile apps",
                    tension: 0,
                    borderWidth: 0,
                    pointRadius: 5,
                    pointBackgroundColor: "rgba(255, 255, 255, .8)",
                    pointBorderColor: "transparent",
                    borderColor: "rgba(255, 255, 255, .8)",
                    borderWidth: 4,
                    backgroundColor: "transparent",
                    fill: true,
                    data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
                    maxBarThickness: 6

                }],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false,
                    }
                },
                interaction: {
                    intersect: false,
                    mode: 'index',
                },
                scales: {
                    y: {
                        grid: {
                            drawBorder: false,
                            display: true,
                            drawOnChartArea: true,
                            drawTicks: false,
                            borderDash: [5, 5],
                            color: 'rgba(255, 255, 255, .2)'
                        },
                        ticks: {
                            display: true,
                            padding: 10,
                            color: '#f8f9fa',
                            font: {
                                size: 14,
                                weight: 300,
                                family: "Roboto",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                    x: {
                        grid: {
                            drawBorder: false,
                            display: false,
                            drawOnChartArea: false,
                            drawTicks: false,
                            borderDash: [5, 5]
                        },
                        ticks: {
                            display: true,
                            color: '#f8f9fa',
                            padding: 10,
                            font: {
                                size: 14,
                                weight: 300,
                                family: "Roboto",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                },
            },
        });
    </script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="http://localhost/nutech_integrasi_dio_wijaya_putra/public/assets/js/material-dashboard.min.js?v=3.1.0"></script>
</body>

</html>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    var id_user = new URLSearchParams(window.location.search).get('id_user');

    function getRandomNumber(min, max) {
        return Math.floor(Math.random() * (max - min + 1)) + min;
    }

    var version = getRandomNumber(100000, 999999);

    $("#pagestyle").attr("href", "http://localhost/nutech_integrasi_dio_wijaya_putra/public/assets/css/material-dashboard.css?v=" + version);

    function fillData() {
        var formData = new FormData();

        $.ajax({
            type: "GET",
            url: "/profileData/" + id_user,
            data: formData,
            enctype: 'multipart/form-data',
            cache: false,
            processData: false,
            async: false,
            contentType: false,
            success: function(response) {
                console.log(response.profile_picture);

                $("#profile-image").attr('src', 'http://localhost/nutech_integrasi_dio_wijaya_putra/public/uploads/' + response.profile_picture);
                $("#nama-kandidat").text(response.name);
                $("#input-nama-kandidat").val(response.name);
                $("#input-posisi-kandidat").val(response.position);
            },
            error: function(response) {
                alert("GET DATA FAILED!");
            }
        });
    }

    fillData();

    function indexNav() {
        window.location.href = "/index?id_user=" + id_user;
    }

    function profileNav() {
        window.location.href = "/profile?id_user=" + id_user;
    }

    function logoutNav() {
        Swal.fire({
            icon: "warning",
            title: "Do you want to logout?",
            showCancelButton: true,
            confirmButtonText: "Yes",
            cancelButtonText: `No`
        }).then((result) => {
            if (result.isConfirmed) {
                var formData = new FormData();

                $.ajax({
                    type: "GET",
                    url: "/endSession",
                    data: formData,
                    enctype: 'multipart/form-data',
                    cache: false,
                    processData: false,
                    async: false,
                    contentType: false,
                    success: function(response) {
                        window.location.href = "/login";
                    },
                    error: function(response) {
                        alert("LOGOUT FAILED!");
                    }
                });
            }
        });
    }
</script>