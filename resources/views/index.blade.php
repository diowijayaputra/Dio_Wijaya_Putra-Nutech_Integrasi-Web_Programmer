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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
                    <a onclick="indexNav()" class="nav-link text-white active bg-red-transparent">
                        <img src="http://localhost/nutech_integrasi_dio_wijaya_putra/public/assets/img/Package.png" alt="">
                        <span class="nav-link-text text-white fs-16 ms-2">Produk</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a onclick="profileNav()" class="nav-link text-white">
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
            <div class="row ps-2 pe-2">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <h6 class="font-weight-bolder fs-18 mb-0">Daftar Produk</h6>
                    </nav>
                </div>
                <div class="col-3 mt-4">
                    <input id="search-produk" type="text" class="form-control" placeholder="Search">
                </div>
                <div class="col-3 mt-4">
                    <select id="select-category" class="form-select" aria-label="Default select example">
                        <option selected value="0">Semua</option>
                        <!-- APPEND BY JS -->
                    </select>
                </div>
                <div class="col-6 d-flex justify-content-end mt-4">
                    <button onclick="exportExcel()" class="btn btn-success"><img src="http://localhost/nutech_integrasi_dio_wijaya_putra/public/assets/img/MicrosoftExcelLogo.png" alt="" class="mb-1 me-2" width="15" height="15">Export Excel</button> <button onclick="tambahProduk()" class="btn btn-red ms-3 text-white"><img src="http://localhost/nutech_integrasi_dio_wijaya_putra/public/assets/img/PlusCircle.png" alt="" class="mb-1 me-2" width="18" height="18">Tambah Produk</button>
                </div>
            </div>
            <div id="tablehead" class="row p-4">
                <div class="col-1 d-flex justify-content-center align-items-center b">
                    <span class="fw-600">No</span>
                </div>
                <div class="col-1 d-flex justify-content-center align-items-center b">
                    <span class="fw-600">Image</span>
                </div>
                <div class="col-2 d-flex justify-content-center align-items-center b">
                    <span class="fw-600">Nama Produk</span>
                </div>
                <div class="col-2 d-flex justify-content-center align-items-center b">
                    <span class="fw-600">Kategori Produk</span>
                </div>
                <div class="col-2 d-flex justify-content-center align-items-center b">
                    <span class="fw-600">Harga Beli (Rp)</span>
                </div>
                <div class="col-2 d-flex justify-content-center align-items-center b">
                    <span class="fw-600">Harga Jual (Rp)</span>
                </div>
                <div class="col-1 d-flex justify-content-center align-items-center b">
                    <span class="fw-600">Stok Produk</span>
                </div>
                <div class="col-1 d-flex justify-content-center align-items-center b">
                    <span class="fw-600">Aksi</span>
                </div>
                <div id="body-barang">
                    <!-- APPEND BY JS -->
                </div>
                <div class="row gx-0 p-0 mt-3">
                    <div class="col-6 d-flex align-items-center">
                        <p id="produk-data" class="mb-0">Show <span id="current-data"></span> from <span id="total-data"></span></p>
                    </div>
                    <div id="pagination" class="col-6 pagination justify-content-end p-0">
                        <!-- PAGINATION -->
                    </div>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.3/xlsx.full.min.js"></script>
<script src="export.js"></script>

<script>
    var num = 1;
    var id_user = new URLSearchParams(window.location.search).get('id_user');

    function getRandomNumber(min, max) {
        return Math.floor(Math.random() * (max - min + 1)) + min;
    }

    var version = getRandomNumber(100000, 999999);

    $("#pagestyle").attr("href", "http://localhost/nutech_integrasi_dio_wijaya_putra/public/assets/css/material-dashboard.css?v=" + version);

    function indexNav() {
        window.location.href = "/index?id_user=" + id_user;
    }

    function profileNav() {
        window.location.href = "/profile?id_user=" + id_user;
    }

    function tambahProduk() {
        window.location.href = "/tambah_produk?id_user=" + id_user;
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

    function category() {
        var formData = new FormData();

        $.ajax({
            type: "GET",
            url: "/getCategory",
            data: formData,
            enctype: 'multipart/form-data',
            cache: false,
            processData: false,
            async: false,
            contentType: false,
            success: function(response) {
                for (var i = 0; i <= response.length; i++) {
                    var html = `<option value="` + response[i].id + `">` + response[i].kategori + `</option>`;

                    $("#select-category").append(html);
                }
            },
            error: function(response) {
                alert("GET CATEGORY FAILED!");
            }
        });
    }

    var each_data = "";

    function getData() {
        var formData = new FormData();

        $.ajax({
            type: "GET",
            url: "/getProduk",
            data: formData,
            enctype: 'multipart/form-data',
            cache: false,
            processData: false,
            async: false,
            contentType: false,
            success: function(response) {
                each_data = response;
                console.log(each_data);

                $("#pagination").removeClass('d-none');
                $("#produk-data").removeClass('d-none');

                var itemsPerPage = 10;
                var currentPage = 1;
                var totalPages = Math.ceil(response.length / itemsPerPage);
                number = 1;

                function showPage(page) {
                    currentPage = page;
                    var startIndex = (currentPage - 1) * itemsPerPage;
                    var endIndex = currentPage * itemsPerPage;
                    var pageData = response.slice(startIndex, endIndex);
                    var html = '';

                    if (currentPage == 1) {
                        $("#current-data").text(pageData.length);
                    } else {
                        var currentData = (currentPage - 1) * itemsPerPage + pageData.length;
                        $("#current-data").text(currentData);
                    }

                    $("#total-data").text(response.length);

                    for (var i = 0; i < pageData.length; i++) {
                        if (pageData[i].kategori == 1) {
                            var categories = "Alat Olahraga";
                        } else if (pageData[i].kategori == 2) {
                            var categories = "Alat Musik";
                        }

                        html += `<div class="row">
                            <div class="col-1 d-flex justify-content-center align-items-center b p-1">
                                <span class="fw-600">` + number + `</span>
                            </div>
                            <div class="col-1 d-flex justify-content-center align-items-center b p-1">
                                <span class="fw-600"><img src="http://localhost/nutech_integrasi_dio_wijaya_putra/public/upload_produk/` + pageData[i].foto_produk + `" width="35" height="35" class="produk-image"></span>
                            </div>
                            <div class="col-2 d-flex justify-content-center align-items-center b p-1">
                                <span class="fw-600">` + pageData[i].nama_produk + `</span>
                            </div>
                            <div class="col-2 d-flex justify-content-center align-items-center b p-1">
                                <span class="fw-600">` + categories + `</span>
                            </div>
                            <div class="col-2 d-flex justify-content-center align-items-center b p-1">
                                <span class="fw-600">` + pageData[i].harga_beli + `</span>
                            </div>
                            <div class="col-2 d-flex justify-content-center align-items-center b p-1">
                                <span class="fw-600">` + pageData[i].harga_jual + `</span>
                            </div>
                            <div class="col-1 d-flex justify-content-center align-items-center b p-1">
                                <span class="fw-600">` + pageData[i].stok_produk + `</span>
                            </div>
                            <div class="col-1 d-flex justify-content-center align-items-center b p-1">
                                <img onclick="editProduk(` + pageData[i].id + `)" src="http://localhost/nutech_integrasi_dio_wijaya_putra/public/assets/img/edit.png" alt="" width="15" height="15" class="me-2">
                                <img onclick="deleteProduk(` + pageData[i].id + `)" src="http://localhost/nutech_integrasi_dio_wijaya_putra/public/assets/img/delete.png" alt="" width="15" height="15">
                            </div>
                        </div>`;

                        number = number + 1;
                    }

                    $("#body-barang").html(html);
                    createPaginationLinks();
                }

                function createPaginationLinks() {
                    var visiblePages = 4
                    var links = '';
                    var startPage = currentPage;
                    var endPage = startPage + visiblePages - 1;

                    if (endPage > totalPages) {
                        endPage = totalPages;
                    }

                    if (startPage > 1) {
                        links += '<a href="#" class="page-link text-grey" data-page="' + (startPage - 1) + '"><i class="fa fa-angle-left fs-18"></i></a>';
                    }

                    for (var i = startPage; i <= endPage; i++) {
                        links += '<a href="#" class="page-link text-dark" data-page="' + i + '">' + i + '</a>';
                    }

                    if (startPage < totalPages) {
                        links += '<a href="#" class="page-link text-grey" data-page="' + (startPage + 1) + '"><i class="fa fa-angle-right fs-18"></i></a>';
                    }

                    $("#pagination").html(links);

                    $("#pagination").on("click", ".page-link", function(e) {
                        e.preventDefault();
                        var page = parseInt($(this).data("page"));
                        if (isNaN(page)) {
                            page = parseInt($(this).text());
                        }
                        showPage(page);

                        number = itemsPerPage * page - 9;
                    });
                }

                showPage(currentPage);
                createPaginationLinks();
            },
            error: function(response) {
                alert("GET PRODUK FAILED!");
            }
        });
    }

    function getCat(catType) {
        var formData = new FormData();

        $.ajax({
            type: "GET",
            url: "/getCat/" + catType,
            data: formData,
            enctype: 'multipart/form-data',
            cache: false,
            processData: false,
            async: false,
            contentType: false,
            success: function(response) {
                each_data = response;
                console.log(each_data);

                $("#pagination").removeClass('d-none');
                $("#produk-data").removeClass('d-none');

                var itemsPerPage = 5;
                var currentPage = 1;
                var totalPages = Math.ceil(response.length / itemsPerPage);
                num = 1;

                function showPage(page) {
                    currentPage = page;
                    var startIndex = (currentPage - 1) * itemsPerPage;
                    var endIndex = currentPage * itemsPerPage;
                    var pageData = response.slice(startIndex, endIndex);
                    var html = '';

                    if (currentPage == 1) {
                        $("#current-data").text(pageData.length);
                    } else {
                        var currentData = (currentPage - 1) * itemsPerPage + pageData.length;
                        $("#current-data").text(currentData);
                    }

                    $("#total-data").text(response.length);

                    for (var i = 0; i < pageData.length; i++) {
                        if (pageData[i].kategori == 1) {
                            var categories = "Alat Olahraga";
                        } else if (pageData[i].kategori == 2) {
                            var categories = "Alat Musik";
                        }

                        html += `<div class="row">
                            <div class="col-1 d-flex justify-content-center align-items-center b p-1">
                                <span class="fw-600">` + num + `</span>
                            </div>
                            <div class="col-1 d-flex justify-content-center align-items-center b p-1">
                                <span class="fw-600"><img src="http://localhost/nutech_integrasi_dio_wijaya_putra/public/upload_produk/` + pageData[i].foto_produk + `" width="35" height="35" class="produk-image"></span>
                            </div>
                            <div class="col-2 d-flex justify-content-center align-items-center b p-1">
                                <span class="fw-600">` + pageData[i].nama_produk + `</span>
                            </div>
                            <div class="col-2 d-flex justify-content-center align-items-center b p-1">
                                <span class="fw-600">` + categories + `</span>
                            </div>
                            <div class="col-2 d-flex justify-content-center align-items-center b p-1">
                                <span class="fw-600">` + pageData[i].harga_beli + `</span>
                            </div>
                            <div class="col-2 d-flex justify-content-center align-items-center b p-1">
                                <span class="fw-600">` + pageData[i].harga_jual + `</span>
                            </div>
                            <div class="col-1 d-flex justify-content-center align-items-center b p-1">
                                <span class="fw-600">` + pageData[i].stok_produk + `</span>
                            </div>
                            <div class="col-1 d-flex justify-content-center align-items-center b p-1">
                                <img onclick="editProduk(` + pageData[i].id + `)" src="http://localhost/nutech_integrasi_dio_wijaya_putra/public/assets/img/edit.png" alt="" width="15" height="15" class="me-2">
                                <img onclick="deleteProduk(` + pageData[i].id + `)" src="http://localhost/nutech_integrasi_dio_wijaya_putra/public/assets/img/delete.png" alt="" width="15" height="15">
                            </div>
                        </div>`;

                        num = num + 1;
                    }

                    $("#body-barang").html(html);
                    createPaginationLinks();
                }

                function createPaginationLinks() {
                    var visiblePages = 4;
                    var links = '';
                    var startPage = currentPage;
                    var endPage = startPage + visiblePages - 1;

                    if (endPage > totalPages) {
                        endPage = totalPages;
                    }

                    if (startPage > 1) {
                        links += '<a href="#" class="page-link text-grey" data-page="' + (startPage - 1) + '"><i class="fa fa-angle-left fs-18"></i></a>';
                    }

                    for (var i = startPage; i <= endPage; i++) {
                        links += '<a href="#" class="page-link text-dark" data-page="' + i + '">' + i + '</a>';
                    }

                    if (startPage < totalPages) {
                        links += '<a href="#" class="page-link text-grey" data-page="' + (startPage + 1) + '"><i class="fa fa-angle-right fs-18"></i></a>';
                    }

                    $("#pagination").html(links);

                    $("#pagination").on("click", ".page-link", function(e) {
                        e.preventDefault();
                        var page = parseInt($(this).data("page"));
                        if (isNaN(page)) {
                            page = parseInt($(this).text());
                        }
                        showPage(page);

                        num = itemsPerPage * page - 4;
                    });
                }

                showPage(currentPage);
                createPaginationLinks();
            },
            error: function(response) {
                alert("GET PRODUK CATEGORY FAILED!");
            }
        });
    }

    function search() {
        var num = 1;
        var keyword = $("#search-produk").val();
        var produkCategory = $("#select-category").val();

        var fd = new FormData();

        if (produkCategory == 0) {
            $.ajax({
                type: "GET",
                url: "/searchProduct/" + keyword,
                data: fd,
                enctype: 'multipart/form-data',
                cache: false,
                processData: false,
                async: false,
                contentType: false,
                success: function(response) {
                    console.log(response);

                    $("#body-barang").html('');
                    $("#pagination").addClass('d-none');
                    $("#produk-data").addClass('d-none');
                    num = 1;

                    for (var i = 0; i <= response.length; i++) {
                        if (response[i].kategori == 1) {
                            var categories = "Alat Olahraga";
                        } else if (response[i].kategori == 2) {
                            var categories = "Alat Musik";
                        }

                        var html = `<div class="row">
                            <div class="col-1 d-flex justify-content-center align-items-center b p-1">
                                <span class="fw-600">` + num + `</span>
                            </div>
                            <div class="col-1 d-flex justify-content-center align-items-center b p-1">
                                <span class="fw-600"><img src="http://localhost/nutech_integrasi_dio_wijaya_putra/public/upload_produk/` + response[i].foto_produk + `" width="35" height="35" class="produk-image"></span>
                            </div>
                            <div class="col-2 d-flex justify-content-center align-items-center b p-1">
                                <span class="fw-600">` + response[i].nama_produk + `</span>
                            </div>
                            <div class="col-2 d-flex justify-content-center align-items-center b p-1">
                                <span class="fw-600">` + categories + `</span>
                            </div>
                            <div class="col-2 d-flex justify-content-center align-items-center b p-1">
                                <span class="fw-600">` + response[i].harga_beli + `</span>
                            </div>
                            <div class="col-2 d-flex justify-content-center align-items-center b p-1">
                                <span class="fw-600">` + response[i].harga_jual + `</span>
                            </div>
                            <div class="col-1 d-flex justify-content-center align-items-center b p-1">
                                <span class="fw-600">` + response[i].stok_produk + `</span>
                            </div>
                            <div class="col-1 d-flex justify-content-center align-items-center b p-1">
                                <img onclick="editProduk(` + response[i].id + `)" src="http://localhost/nutech_integrasi_dio_wijaya_putra/public/assets/img/edit.png" alt="" width="15" height="15" class="me-2">
                                <img onclick="deleteProduk(` + response[i].id + `)" src="http://localhost/nutech_integrasi_dio_wijaya_putra/public/assets/img/delete.png" alt="" width="15" height="15">
                            </div>
                        </div>`;

                        $("#body-barang").append(html);
                        num = num + 1;
                    }
                },
                error: function(response) {
                    alert("GAGAL MENAMPILKAN DATA DENGAN SEARCH!");
                }
            });
        } else {
            $.ajax({
                type: "GET",
                url: "/searchProduk/" + keyword + "/" + produkCategory,
                data: fd,
                enctype: 'multipart/form-data',
                cache: false,
                processData: false,
                async: false,
                contentType: false,
                success: function(response) {
                    console.log(response);

                    $("#body-barang").html('');
                    $("#pagination").addClass('d-none');
                    $("#produk-data").addClass('d-none');
                    num = 1;

                    for (var i = 0; i <= response.length; i++) {
                        if (response[i].kategori == 1) {
                            var categories = "Alat Olahraga";
                        } else if (response[i].kategori == 2) {
                            var categories = "Alat Musik";
                        }

                        var html = `<div class="row">
                            <div class="col-1 d-flex justify-content-center align-items-center b p-1">
                                <span class="fw-600">` + num + `</span>
                            </div>
                            <div class="col-1 d-flex justify-content-center align-items-center b p-1">
                                <span class="fw-600"><img src="http://localhost/nutech_integrasi_dio_wijaya_putra/public/upload_produk/` + response[i].foto_produk + `" width="35" height="35" class="produk-image"></span>
                            </div>
                            <div class="col-2 d-flex justify-content-center align-items-center b p-1">
                                <span class="fw-600">` + response[i].nama_produk + `</span>
                            </div>
                            <div class="col-2 d-flex justify-content-center align-items-center b p-1">
                                <span class="fw-600">` + categories + `</span>
                            </div>
                            <div class="col-2 d-flex justify-content-center align-items-center b p-1">
                                <span class="fw-600">` + response[i].harga_beli + `</span>
                            </div>
                            <div class="col-2 d-flex justify-content-center align-items-center b p-1">
                                <span class="fw-600">` + response[i].harga_jual + `</span>
                            </div>
                            <div class="col-1 d-flex justify-content-center align-items-center b p-1">
                                <span class="fw-600">` + response[i].stok_produk + `</span>
                            </div>
                            <div class="col-1 d-flex justify-content-center align-items-center b p-1">
                                <img onclick="editProduk(` + response[i].id + `)" src="http://localhost/nutech_integrasi_dio_wijaya_putra/public/assets/img/edit.png" alt="" width="15" height="15" class="me-2">
                                <img onclick="deleteProduk(` + response[i].id + `)" src="http://localhost/nutech_integrasi_dio_wijaya_putra/public/assets/img/delete.png" alt="" width="15" height="15">
                            </div>
                        </div>`;

                        $("#body-barang").append(html);
                        num = num + 1;
                    }
                },
                error: function(response) {
                    alert("GAGAL MENAMPILKAN DATA DENGAN SEARCH!");
                }
            });
        }
    }

    category();
    getData();

    $("#select-category").on("click", function() {
        var catType = $(this).val();

        if (catType == 0) {
            getData();
        } else {
            getCat(catType);
        }
    });

    $("#search-produk").bind("change space keyup", function() {
        var keyword = $(this).val();
        var produkCategory = $("#select-category").val();

        if (keyword == "") {
            if (produkCategory == 0) {
                getData();
            } else {
                var fd = new FormData();

                $.ajax({
                    type: "GET",
                    url: "/searchkategoriProduk/" + produkCategory,
                    data: fd,
                    enctype: 'multipart/form-data',
                    cache: false,
                    processData: false,
                    async: false,
                    contentType: false,
                    success: function(response) {
                        console.log(response);

                        $("#pagination").removeClass('d-none');
                        $("#produk-data").removeClass('d-none');

                        var itemsPerPage = 5;
                        var currentPage = 1;
                        var totalPages = Math.ceil(response.length / itemsPerPage);
                        num = 1;

                        function showPage(page) {
                            currentPage = page;
                            var startIndex = (currentPage - 1) * itemsPerPage;
                            var endIndex = currentPage * itemsPerPage;
                            var pageData = response.slice(startIndex, endIndex);
                            var html = '';

                            if (currentPage == 1) {
                                $("#current-data").text(pageData.length);
                            } else {
                                var currentData = (currentPage - 1) * itemsPerPage + pageData.length;
                                $("#current-data").text(currentData);
                            }

                            $("#total-data").text(response.length);

                            for (var i = 0; i < pageData.length; i++) {
                                if (pageData[i].kategori == 1) {
                                    var categories = "Alat Olahraga";
                                } else if (pageData[i].kategori == 2) {
                                    var categories = "Alat Musik";
                                }

                                html += `<div class="row">
                                    <div class="col-1 d-flex justify-content-center align-items-center b p-1">
                                        <span class="fw-600">` + num + `</span>
                                    </div>
                                    <div class="col-1 d-flex justify-content-center align-items-center b p-1">
                                        <span class="fw-600"><img src="http://localhost/nutech_integrasi_dio_wijaya_putra/public/upload_produk/` + pageData[i].foto_produk + `" width="35" height="35" class="produk-image"></span>
                                    </div>
                                    <div class="col-2 d-flex justify-content-center align-items-center b p-1">
                                        <span class="fw-600">` + pageData[i].nama_produk + `</span>
                                    </div>
                                    <div class="col-2 d-flex justify-content-center align-items-center b p-1">
                                        <span class="fw-600">` + categories + `</span>
                                    </div>
                                    <div class="col-2 d-flex justify-content-center align-items-center b p-1">
                                        <span class="fw-600">` + pageData[i].harga_beli + `</span>
                                    </div>
                                    <div class="col-2 d-flex justify-content-center align-items-center b p-1">
                                        <span class="fw-600">` + pageData[i].harga_jual + `</span>
                                    </div>
                                    <div class="col-1 d-flex justify-content-center align-items-center b p-1">
                                        <span class="fw-600">` + pageData[i].stok_produk + `</span>
                                    </div>
                                    <div class="col-1 d-flex justify-content-center align-items-center b p-1">
                                        <img onclick="editProduk(` + pageData[i].id + `)" src="http://localhost/nutech_integrasi_dio_wijaya_putra/public/assets/img/edit.png" alt="" width="15" height="15" class="me-2">
                                        <img onclick="deleteProduk(` + pageData[i].id + `)" src="http://localhost/nutech_integrasi_dio_wijaya_putra/public/assets/img/delete.png" alt="" width="15" height="15">
                                    </div>
                                </div>`;

                                num = num + 1;
                            }

                            $("#body-barang").html(html);
                            createPaginationLinks()
                        }

                        function createPaginationLinks() {
                            var visiblePages = 4;
                            var links = '';
                            var startPage = currentPage;
                            var endPage = startPage + visiblePages - 1;

                            if (endPage > totalPages) {
                                endPage = totalPages;
                            }

                            if (startPage > 1) {
                                links += '<a href="#" class="page-link text-grey" data-page="' + (startPage - 1) + '"><i class="fa fa-angle-left fs-18"></i></a>';
                            }

                            for (var i = startPage; i <= endPage; i++) {
                                links += '<a href="#" class="page-link text-dark" data-page="' + i + '">' + i + '</a>';
                            }

                            if (startPage < totalPages) {
                                links += '<a href="#" class="page-link text-grey" data-page="' + (startPage + 1) + '"><i class="fa fa-angle-right fs-18"></i></a>';
                            }

                            $("#pagination").html(links);

                            $("#pagination").on("click", ".page-link", function(e) {
                                e.preventDefault();
                                var page = parseInt($(this).data("page"));
                                if (isNaN(page)) {
                                    page = parseInt($(this).text());
                                }
                                showPage(page);

                                num = itemsPerPage * page - 4;
                            });
                        }

                        showPage(currentPage);
                        createPaginationLinks();
                    },
                    error: function(response) {
                        alert("SEARCH DAN KATEGORI DATA FAILED!");
                    }
                });
            }
        } else {
            search();
        }
    });

    function editProduk(id) {
        console.log(id);
        window.location.href = "/edit_produk?id_user=" + id_user + "&id_produk=" + id;
    }

    function deleteProduk(id) {
        console.log(id);

        Swal.fire({
            icon: "warning",
            title: "Do you want to delete this item?",
            showCancelButton: true,
            confirmButtonText: "Yes",
            cancelButtonText: `No`
        }).then((result) => {
            if (result.isConfirmed) {
                var tokenVal = $('meta[name="csrf-token"]').attr('content');
                var fd = new FormData();

                fd.append("id", id);
                fd.append("_token", tokenVal);

                $.ajax({
                    type: "POST",
                    url: "/deleteProduct/" + id,
                    data: fd,
                    enctype: 'multipart/form-data',
                    cache: false,
                    processData: false,
                    async: false,
                    contentType: false,
                    success: function(response) {
                        Swal.fire({
                            title: 'Produk Berhasil Dihapus!',
                            icon: 'success',
                            timer: '2000',
                            showConfirmButton: false,
                        }).then((result) => {
                            if (result.dismiss === Swal.DismissReason.timer) {
                                window.location.reload();
                            }
                        });
                    },
                    error: function(response) {
                        alert("DELETE PRODUCT FAILED!");
                    }
                });
            }
        });
    }

    function exportExcel() {
        const new_datas = each_data.map((user, index) => ({
            ...user,
            no: index + 1
        }));

        const excel_data = [
            ['No', 'Nama Produk', 'Kategori', 'Harga Beli (Rp)', 'Harga Jual (Rp)', 'Stok'],
            ...new_datas.map(data => [data.no, data.nama_produk, data.kategori, data.harga_beli, data.harga_jual, data.stok_produk]),
        ];

        const workbook = XLSX.utils.book_new();
        const worksheet = XLSX.utils.aoa_to_sheet(excel_data);

        XLSX.utils.book_append_sheet(workbook, worksheet, 'Sheet1');

        const excelBuffer = XLSX.write(workbook, {
            bookType: 'xlsx',
            type: 'array'
        });

        const blob = new Blob([excelBuffer], {
            type: 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'
        });

        const url = URL.createObjectURL(blob);

        const link = document.createElement('a');
        link.href = url;
        link.download = 'data_barang.xlsx';

        link.click();

        setTimeout(() => {
            URL.revokeObjectURL(url);
        }, 0);
    }
</script>