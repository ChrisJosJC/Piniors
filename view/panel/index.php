<?php include("view/panel/header.php"); ?>
<!-- ========== section start ========== -->
<section class="section">
    <div class="container-fluid">
        <!-- ========== title-wrapper start ========== -->
        <div class="title-wrapper pt-30">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="title mb-30">
                        <h2>Panel de administracion</h2>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-md-6">
                    <div class="breadcrumb-wrapper mb-30">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="#0">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Admin
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- ========== title-wrapper end ========== -->
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="icon-card mb-30">
                    <div class="icon purple">
                        <i class="lni lni-cart-full"></i>
                    </div>
                    <div class="content">
                        <h6 class="mb-10">Visitas de quiz</h6>
                        <h3 class="text-bold mb-10" id="visitas">
                            <h3>
                                <p class="text-sm text-success">
                                    <i class="lni lni-arrow-up"></i> +2.00%
                                    <span class="text-gray">(30 days)</span>
                                </p>
                    </div>
                </div>
                <!-- End Icon Cart -->
            </div>
            <!-- End Col -->
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="icon-card mb-30">
                    <div class="icon success">
                        <i class="lni lni-dollar"></i>
                    </div>
                    <div class="content">
                        <h6 class="mb-10">Editor</h6>
                        <h3 class="text-bold mb-10" id="editor"></h3>
                        <p class="text-sm text-success">
                            <i class="lni lni-arrow-up"></i> +5.45%
                            <span class="text-gray">Increased</span>
                        </p>
                    </div>
                </div>
                <!-- End Icon Cart -->
            </div>
            <!-- End Col -->
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="icon-card mb-30">
                    <div class="icon primary">
                        <i class="lni lni-credit-cards"></i>
                    </div>
                    <div class="content">
                        <h6 class="mb-10">Memoria</h6>
                        <h3 class="text-bold mb-10" id="memory"></h3>
                        <p class="text-sm text-danger">
                            <i class="lni lni-arrow-down"></i> -2.00%
                            <span class="text-gray">Expense</span>
                        </p>
                    </div>
                </div>
                <!-- End Icon Cart -->
            </div>
            <!-- End Col -->
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="icon-card mb-30">
                    <div class="icon orange">
                        <i class="lni lni-user"></i>
                    </div>
                    <div class="content">
                        <h6 class="mb-10">Usuarios registrados</h6>
                        <h3 class="text-bold mb-10" id="cantUsers"></h3>
                        <p class="text-sm text-danger">
                            <i class="lni lni-arrow-down"></i> -25.00%
                            <span class="text-gray"> Earning</span>
                        </p>
                    </div>
                </div>
                <!-- End Icon Cart -->
            </div>
            <!-- End Col -->
        </div>
        <!-- End Row -->
        <div class="row">
            <div class="col-lg-7">
                <div class="card-style mb-30">
                    <div class="title d-flex flex-wrap justify-content-between">
                        <div class="left">
                            <h6 class="text-medium mb-10">Total de visitas</h6>
                            <h3 class="text-bold" id="totalVisitas"></h3>
                        </div>
                        <div class="right">
                            <div class="select-style-1">
                                <div class="select-position select-sm">
                                    <select class="light-bg">
                                        <option value="">Total</option>
                                        <!-- <option value="">Monthly</option> -->
                                        <!-- <option value="">Weekly</option> -->
                                    </select>
                                </div>
                            </div>
                            <!-- end select -->
                        </div>
                    </div>
                    <!-- End Title -->
                    <div class="chart">
                        <canvas id="Chart1" style="width: 100%; height: 400px"></canvas>
                    </div>
                    <!-- End Chart -->
                </div>
            </div>
            <!-- End Col -->
            <div class="col-lg-5">
                <div class="card-style mb-30">
                    <div class="
                    title
                    d-flex
                    flex-wrap
                    align-items-center
                    justify-content-between
                  ">
                        <div class="left">
                            <h6 class="text-medium mb-30">Visitas</h6>
                        </div>
                        <div class="right">
                            <div class="select-style-1">
                                <div class="select-position select-sm">
                                    <select class="light-bg">
                                        <option value="">Yearly</option>
                                        <option value="">Monthly</option>
                                        <option value="">Weekly</option>
                                    </select>
                                </div>
                            </div>
                            <!-- end select -->
                        </div>
                    </div>
                    <!-- End Title -->
                    <div class="chart">
                        <canvas id="Chart2" style="width: 100%; height: 400px"></canvas>
                    </div>
                    <!-- End Chart -->
                </div>
            </div>
            <!-- End Col -->
        </div>
        <!-- ========== section end ========== -->

        <!-- ========== footer start =========== -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 order-last order-md-first">
                        <div class="copyright text-center text-md-start">
                            <p class="text-sm">
                                Designed and Developed by
                                <a href="https://Piniors.com" rel="nofollow" target="_blank">
                                    Piniors
                                </a>
                            </p>
                        </div>
                    </div>
                    <!-- end col-->
                    <div class="col-md-6">
                        <div class="
                  terms
                  d-flex
                  justify-content-center justify-content-md-end
                ">
                            <a href="#0" class="text-sm">Term & Conditions</a>
                            <a href="#0" class="text-sm ml-15">Privacy & Policy</a>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </footer>
        <!-- ========== footer end =========== -->
        </main>
        <!-- ======== main-wrapper end =========== -->

        <!-- ========= All Javascript files linkup ======== -->
        <script src="/public/script/bootstrap.bundle.min.js"></script>
        <script src="/public/script/Chart.min.js"></script>
        <script src="/public/script/dynamic-pie-chart.js"></script>
        <script src="/public/script/moment.min.js"></script>
        <script src="/public/script/fullcalendar.js"></script>
        <script src="/public/script/jvectormap.min.js"></script>
        <script src="/public/script/world-merc.js"></script>
        <script src="/public/script/polyfill.js"></script>
        <script src="/public/script/main.js"></script>

        <script>
            let cantUsers = document.getElementById("cantUsers")
            let visitas = document.getElementById("visitas")
            let memory = document.getElementById("memory")
            let editor = document.getElementById("editor")
            let total = document.getElementById("totalVisitas")
            let visits = []

            fetch("/panel/vars")
                .then(res => res.json())
                .then(data => {
                    cantUsers.textContent = data.Total
                    visitas.textContent = data.visitas
                })
                .catch(e => {
                    console.log(e)
                })

            // Visitas

            // ======== jvectormap activation
            var markers = [
                { name: "Egypt", coords: [26.8206, 30.8025] },
                { name: "Russia", coords: [61.524, 105.3188] },
                { name: "Canada", coords: [56.1304, -106.3468] },
                { name: "Greenland", coords: [71.7069, -42.6043] },
                { name: "Brazil", coords: [-14.235, -51.9253] },
            ];

            var jvm = new jsVectorMap({
                map: "world_merc",
                selector: "#map",
                zoomButtons: true,

                regionStyle: {
                    initial: {
                        fill: "#d1d5db",
                    },
                },

                labels: {
                    markers: {
                        render: (marker) => marker.name,
                    },
                },

                markersSelectable: true,
                selectedMarkers: markers.map((marker, index) => {
                    var name = marker.name;

                    if (name === "Russia" || name === "Brazil") {
                        return index;
                    }
                }),
                markers: markers,
                markerStyle: {
                    initial: { fill: "#4A6CF7" },
                    selected: { fill: "#ff5050" },
                },
                markerLabelStyle: {
                    initial: {
                        fontWeight: 400,
                        fontSize: 14,
                    },
                },
            });
            // ====== calendar activation
            document.addEventListener("DOMContentLoaded", function () {
                var calendarMiniEl = document.getElementById("calendar-mini");
                var calendarMini = new FullCalendar.Calendar(calendarMiniEl, {
                    initialView: "dayGridMonth",
                    headerToolbar: {
                        end: "today prev,next",
                    },
                });
                calendarMini.render();
            });

            // =========== chart one start
            fetch("/panel/visits")
                .then(res => res.json())
                .then(data => {
                    visits = data
                    editor.textContent = data[1]
                    memory.textContent = data[2]
                    const allVisits = data.reduce((a, b) => a + b, 0);
                    total.textContent = allVisits
                    const ctx1 = document.getElementById("Chart1").getContext("2d");
                    const chart1 = new Chart(ctx1, {
                        type: "line",
                        data: {
                            labels: [
                                "Quiz",
                                "Editor",
                                "Memoria",
                                "Adivina",
                            ],
                            // Information about the dataset
                            datasets: [
                                {
                                    label: "",
                                    data: visits,
                                    backgroundColor: "transparent",
                                    borderColor: "#4A6CF7",
                                    pointBackgroundColor: "transparent",
                                    pointHoverBackgroundColor: "#4A6CF7",
                                    pointBorderColor: "transparent",
                                    pointHoverBorderColor: "#fff",
                                    pointHoverBorderWidth: 5,
                                    pointBorderWidth: 5,
                                    pointRadius: 8,
                                    pointHoverRadius: 8,
                                },
                            ],
                        },
                        defaultFontFamily: "Inter",
                        options: {
                            tooltips: {
                                callbacks: {
                                    labelColor: function (tooltipItem, chart) {
                                        return {
                                            backgroundColor: "#ffffff",
                                        };
                                    },
                                },
                                intersect: false,
                                backgroundColor: "#f9f9f9",
                                titleFontFamily: "Inter",
                                titleFontColor: "#8F92A1",
                                titleFontColor: "#8F92A1",
                                titleFontSize: 12,
                                bodyFontFamily: "Inter",
                                bodyFontColor: "#171717",
                                bodyFontStyle: "bold",
                                bodyFontSize: 16,
                                multiKeyBackground: "transparent",
                                displayColors: false,
                                xPadding: 30,
                                yPadding: 10,
                                bodyAlign: "center",
                                titleAlign: "center",
                            },

                            title: {
                                display: false,
                            },
                            legend: {
                                display: false,
                            },

                            scales: {
                                yAxes: [
                                    {
                                        gridLines: {
                                            display: false,
                                            drawTicks: false,
                                            drawBorder: false,
                                        },
                                        ticks: {
                                            padding: 35,
                                            max: 200,
                                            min: 0,
                                        },
                                    },
                                ],
                                xAxes: [
                                    {
                                        gridLines: {
                                            drawBorder: false,
                                            color: "rgba(143, 146, 161, .1)",
                                            zeroLineColor: "rgba(143, 146, 161, .1)",
                                        },
                                        ticks: {
                                            padding: 20,
                                        },
                                    },
                                ],
                            },
                        },
                    });

                    // =========== chart one end

                    // =========== chart two start
                    const ctx2 = document.getElementById("Chart2").getContext("2d");
                    const chart2 = new Chart(ctx2, {
                        // The type of chart we want to create
                        type: "bar", // also try bar or other graph types
                        // The data for our dataset
                        data: {
                            labels: [
                                "Quiz",
                                "Editor",
                                "Memoria",
                                "Adivina",
                            ],
                            // Information about the dataset
                            datasets: [
                                {
                                    label: "",
                                    data: visits,
                                    backgroundColor: "#4A6CF7",
                                    barThickness: 6,
                                    maxBarThickness: 8,
                                },
                            ],
                        },
                        // Configuration options
                        options: {
                            borderColor: "#F3F6F8",
                            borderWidth: 15,
                            backgroundColor: "#F3F6F8",
                            tooltips: {
                                callbacks: {
                                    labelColor: function (tooltipItem, chart) {
                                        return {
                                            backgroundColor: "rgba(104, 110, 255, .0)",
                                        };
                                    },
                                },
                                backgroundColor: "#F3F6F8",
                                titleFontColor: "#8F92A1",
                                titleFontSize: 12,
                                bodyFontColor: "#171717",
                                bodyFontStyle: "bold",
                                bodyFontSize: 16,
                                multiKeyBackground: "transparent",
                                displayColors: false,
                                xPadding: 30,
                                yPadding: 10,
                                bodyAlign: "center",
                                titleAlign: "center",
                            },

                            title: {
                                display: false,
                            },
                            legend: {
                                display: false,
                            },

                            scales: {
                                yAxes: [
                                    {
                                        gridLines: {
                                            display: false,
                                            drawTicks: false,
                                            drawBorder: false,
                                        },
                                        ticks: {
                                            padding: 35,
                                            max: 200,
                                            min: 0,
                                        },
                                    },
                                ],
                                xAxes: [
                                    {
                                        gridLines: {
                                            display: false,
                                            drawBorder: false,
                                            color: "rgba(143, 146, 161, .1)",
                                            zeroLineColor: "rgba(143, 146, 161, .1)",
                                        },
                                        ticks: {
                                            padding: 20,
                                        },
                                    },
                                ],
                            },
                        },
                    });
                })
                .catch(e => {
                    console.log(e)
                })
        </script>
        </body>

        </html>