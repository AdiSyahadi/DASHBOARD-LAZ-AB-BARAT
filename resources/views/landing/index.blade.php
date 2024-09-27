<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Website Satu Data Al bahjah Barat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr@4.6.9/dist/flatpickr.min.css">
</head>

<body>
    @include('components.Navbar')
    <section class="header mb-70">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <h1 class="jumbo-header mb-30">
                        Satu Data <br>
                        Al-Bahjah Barat
                    </h1>
                    <p class="paragraph mb-30">
                        Official Website satu data Infaq Center <br>
                        Al Bahjah Barat
                        
                    </p>
                    <p class="mb-50"><a href="{{route('admin.formlaporan')}}" class="btn btn-primary">INPUT DATA BARU</a></p>
                    <div class="row stats text-center">
                        <div class="col-lg-5 item">
                            <h3 class="big-header" id="date"></h3>
                            <p class="paragraph">
                                Tanggal
                            </p>
                        </div>
                        <div class="col-lg-4 item">
                            <h3 class="big-header" id="time"></h3>
                            <p class="paragraph">
                                Jam
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <img src="images/banner-01.png" alt="" class="img-fluid mx-auto">
                </div>
            </div>
        </div>
    </section>
    <section class="best-items">
        <div class="container">
            <div class="row text-center mb-50">
                <div class="col-lg-12">
                    <img src="images/ic_best.svg" height="42" alt="" class="mb-16">
                    <h3 class="big-header">
                        Laporan Perolehan RealTime
                    </h3>
                    <p class="paragraph">
                        Program Infaq Center AL Bahjah Barat
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <div class="item">
                        <a href="details.html">
                            <img src="images/program1.jpeg" alt="" class="img-fluid">
                        </a>
                        <div class="info">
                            <a href="details.html">
                                <h3 class="small-header mb-2">
                                    Wakaf Pasir
                                </h3>
                            </a>
                            <div class="footer">
                                <div class="location d-flex flex-row ">
                                    <p class="small-paragraph mb-0">
                                        Terkumpul:
                                    </p>
                                </div>
                                <div class="price">
                                    <p class="mb-0">
                                        Rp.28.109.000<span class="extra-small-paragraph"></span>
                                    </p>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="item">
                        <a href="">
                            <img src="images/program2.jpeg" alt="" class="img-fluid">
                        </a>
                        <div class="info">
                            <a href="">
                                <h3 class="small-header mb-2">
                                    Puasa Senin
                                </h3>
                            </a>
                            <div class="footer">
                                <div class="location d-flex flex-row ">
                                    <p class="small-paragraph mb-0">
                                        Terkumpul:
                                    </p>
                                </div>
                                <div class="price">
                                    <p class="mb-0">
                                        Rp.28.109.000<span class="extra-small-paragraph"></span>
                                    </p>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="item">
                        <a href="">
                            <img src="images/program3.jpeg" alt="" class="img-fluid">
                        </a>
                        <div class="info">
                            <a href="">
                                <h3 class="small-header mb-2">
                                    Peduli Palestina
                                </h3>
                            </a>
                            <div class="footer">
                                <div class="location d-flex flex-row ">
                                    <p class="small-paragraph mb-0">
                                        Terkumpul:
                                    </p>
                                </div>
                                <div class="price">
                                    <p class="mb-0">
                                        Rp.28.109.000<span class="extra-small-paragraph"></span>
                                    </p>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="item">
                        <a href="">
                            <img src="images/program4.jpeg" alt="" class="img-fluid">
                        </a>
                        <div class="info">
                            <a href="">
                                <h3 class="small-header mb-2">
                                    Puasa Sunah
                                </h3>
                            </a>
                            <div class="footer">
                                <div class="location d-flex flex-row ">
                                    <p class="small-paragraph mb-0">
                                        Terkumpul:
                                    </p>
                                </div>
                                <div class="price">
                                    <p class="mb-0">
                                        Rp.28.109.000<span class="extra-small-paragraph"></span>
                                    </p>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="item">
                        <a href="">
                            <img src="images/program5.jpeg" alt="" class="img-fluid">
                        </a>
                        <div class="info">
                            <a href="">
                                <h3 class="small-header mb-2">
                                    Makan Santri
                                </h3>
                            </a>
                            <div class="footer">
                                <div class="location d-flex flex-row ">
                                    <p class="small-paragraph mb-0">
                                        Terkumpul:
                                    </p>
                                </div>
                                <div class="price">
                                    <p class="mb-0">
                                        Rp.28.109.000<span class="extra-small-paragraph"></span>
                                    </p>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="item">
                        <a href="">
                            <img src="images/program6.jpeg" alt="" class="img-fluid">
                        </a>
                        <div class="info">
                            <a href="">
                                <h3 class="small-header mb-2">
                                    Sedekah Ramadhan
                                </h3>
                            </a>
                            <div class="footer">
                                <div class="location d-flex flex-row ">
                                    <p class="small-paragraph mb-0">
                                        Terkumpul:
                                    </p>
                                </div>
                                <div class="price">
                                    <p class="mb-0">
                                        Rp.28.109.000<span class="extra-small-paragraph"></span>
                                    </p>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="item">
                        <a href="">
                            <img src="images/program7.jpeg" alt="" class="img-fluid">
                        </a>
                        <div class="info">
                            <a href="">
                                <h3 class="small-header mb-2">
                                    Rutin Senin Kamis
                                </h3>
                            </a>
                            <div class="footer">
                                <div class="location d-flex flex-row ">
                                    <p class="small-paragraph mb-0">
                                        Terkumpul:
                                    </p>
                                </div>
                                <div class="price">
                                    <p class="mb-0">
                                        Rp.28.109.000<span class="extra-small-paragraph"></span>
                                    </p>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="item">
                        <a href="">
                            <img src="images/program8.jpeg" alt="" class="img-fluid">
                        </a>
                        <div class="info">
                            <a href="">
                                <h3 class="small-header mb-2">
                                    Sedekah Subuh
                                </h3>
                            </a>
                            <div class="footer">
                                <div class="location d-flex flex-row ">
                                    <p class="small-paragraph mb-0">
                                        Terkumpul:
                                    </p>
                                </div>
                                <div class="price">
                                    <p class="mb-0">
                                        Rp.28.109.000<span class="extra-small-paragraph"></span>
                                    </p>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->
            <footer class="mb-40 navbar navbar-expand-lg" >
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; AL BAHJAH BARAT 2023</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr@4.6.9/dist/flatpickr.min.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script>
       // Function to update the element with current date and time
        // Function to update the elements with current date and time
            function updateDateTime() {
                var currentDate = new Date();
                var day = currentDate.getDate();
                var month = currentDate.getMonth() + 1; // Months are zero-based
                var year = currentDate.getFullYear();
                var hours = currentDate.getHours();
                var minutes = currentDate.getMinutes();
                var seconds = currentDate.getSeconds();

                // Format the date and time as needed
                var formattedDate = day + '/' + month + '/' + year;
                var formattedTime = hours + ':' + (minutes < 10 ? '0' : '') + minutes + ':' + (seconds < 10 ? '0' : '') + seconds;

                // Update the elements with the formatted date and time
                document.getElementById('date').innerText = formattedDate;
                document.getElementById('time').innerText = formattedTime;
            }

            // Call the function to update date and time on page load
            updateDateTime();

            // Set an interval to update date and time every second (adjust as needed)
            setInterval(updateDateTime, 1000);
    </script>
</body>

</html>