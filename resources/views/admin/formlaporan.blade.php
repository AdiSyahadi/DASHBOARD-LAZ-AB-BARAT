<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Administrator</title>
    <!-- Custom fonts for this template -->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/sb-admin-2.css') }}" rel="stylesheet">
    <!-- Custom styles for this page -->
    <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
</head>
    <body>
        <div class="container">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                        <div class="col-lg-7">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Laporan Perolehan</h1>
                                </div>
                                <form method="POST" action="{{ route('admin.store')}}">
                                    @csrf
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label for="Tanggal">Tanggal:</label>
                                            <input type="date" class="form-control form-control-user" name="tanggal"
                                                placeholder="Tanggal">
                                        </div>
                                        <div class="col-sm-6">
                                        <label for="program">Program:</label>
                                        <select class="form-control form-control-user" name="program" id="program">
                                            <option value="">-- Program --</option>
                                            <option value="AB BARAT">AB BARAT</option>
                                            <option value="CABANG">CABANG</option>
                                            <option value="WAKAF">WAKAF</option>
                                            <option value="PRODUK">PRODUK</option>
                                        </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6">
                                        <label for="nama_cs">Nama CS:</label>
                                        <select class="form-control form-control-user" name="nama_cs" id="nama_cs">
                                            <option value="">-- Nama CS --</option>
                                            <option value="Mesir">Mesir</option>
                                            <option value="Samawa">Samawa</option>
                                            <option value="Madinah">Madinah</option>
                                            <option value="Mekah">Mekah</option>
                                            <option value="Damaskus">Damaskus</option>
                                            <option value="Erfan">Erfan</option>
                                            <option value="Nabawi">Nabawi</option>
                                            <option value="Palestina">Palestina</option>
                                            <option value="Yaman">Yaman</option>
                                            <option value="Bandung">Bandung</option>
                                            <option value="Wakaf Bandung">Wakaf Bandung</option>
                                            <option value="Gedung Forsil">Gedung Forsil</option>
                                            <option value="AB Chicken">AB Chicken</option>
                                            <option value="Berkah Box">Berkah Box</option>
                                            <option value="CS Produk">CS Produk</option>
                                            <option value="Wakaf AB Barat">Wakaf AB Barat</option>
                                            <option value="Sunan Ampel">Sunan Ampel</option>
                                            <option value="CS Tasikmalaya">CS Tasikmalaya</option>
                                            <option value="CS Batam">CS Batam</option>
                                            <option value="CS Bekasi">CS Bekasi</option>
                                            <option value="CS Kuningan">CS Kuningan</option>
                                            <option value="CS Cicalengka">CS Cicalengka</option>
                                            <option value="CS Cianjur 01">CS Cianjur 01</option>
                                            <option value="CS Cianjur 02">CS Cianjur 02</option>
                                            <option value="CS Tangerang">CS Tangerang</option>
                                            <option value="CS Bekasi 01">CS Bekasi 01</option>
                                            <option value="CS Panongan">CS Panongan</option>
                                            <option value="CS Panongan 01">CS Panongan 01</option>
                                            <option value="CS Panongan 02">CS Panongan 02</option>
                                            <option value="CS Ciamis">CS Ciamis</option>
                                            <option value="CS Pekanbaru">CS Pekanbaru</option>
                                        </select>
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="perolehan_jam">Perolehan Jam:</label>
                                            <select class="form-control form-control-user" name="perolehan_jam" id="perolehan_jam">
                                                <option value="">-- Perolehan Jam --</option>
                                                <option value="08.00-09.00 WIB">08.00-09.00 WIB</option>
                                                <option value="09.00-10.00 WIB">09.00-10.00 WIB</option>
                                                <option value="10.00-11.00 WIB">10.00-11.00 WIB</option>
                                                <option value="11.00-12.00 WIB">11.00-12.00 WIB</option>
                                                <option value="12.00-13.00 WIB">12.00-13.00 WIB</option>
                                                <option value="13.00-14.00 WIB">13.00-14.00 WIB</option>
                                                <option value="14.00-15.00 WIB">14.00-15.00 WIB</option>
                                                <option value="15.00-16.00 WIB">15.00-16.00 WIB</option>
                                                <option value="16.00-17.00 WIB">16.00-17.00 WIB</option>
                                                <option value="17.00-24.00 WIB">17.00-24.00 WIB</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label for="jml_database">Database yang digunakan:</label>
                                        <input type="text" class="form-control form-control-user" name="jml_database"
                                            placeholder="">
                                        </div>
                                        <div class="col-sm-6">
                                        <label for="jml_perolehan">Jumlah Perolehan:</label>
                                        <input type="text" class="form-control form-control-user" name="jml_perolehan" placeholder="" oninput="formatNumber(this)">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label for="nama_donatur">Nama Donatur:</label>
                                        <input type="text" class="form-control form-control-user" name="nama_donatur"
                                            placeholder="">
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="no_hp">Nomor HP:</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <select class="form-control" name="kode_negara">
                                                        <option value="62">ID +62</option>
                                                        <option value="966">ARB +966</option>
                                                        <option value="852">HK +852</option>
                                                        <option value="886">TWN +886</option>
                                                        <!-- Tambahkan opsi kode negara lain jika diperlukan -->
                                                    </select>
                                                </div>
                                                <input type="text" class="form-control form-control-user" name="no_hp" id="no_hp" placeholder="Masukkan sisa nomor HP" required>
                                            </div>
                                            <span id="error_message" class="text-danger"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6">
                                            <label for="hasil_dari">Hasil Dari:</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="hasil_dari" id="program_utama" value="Program Utama">
                                                <label class="form-check-label" for="program_utama">Program Utama</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="hasil_dari" id="cross_selling" value="Cross selling">
                                                <label class="form-check-label" for="cross_selling">Cross selling</label>
                                            </div>
                                             <!-- Popup/form pilihan selling (default hidden) -->
                                            <div id="sellingPopup" style="display: none;">
                                                <!-- Isi dengan elemen formulir atau informasi pilihan barang -->
                                                <label for="barang">Pilih Program Cross Selling:</label>
                                                <select class="form-control" name="prg_cross_selling" id="prg_cross_selling">
                                                    <option value="">-- Pilih Cross Selling --</option>
                                                    <option value="Produk">Produk</option>
                                                    <option value="Program AB Barat">Program AB Barat</option>
                                                    <option value="Program Cabang">Program Cabang</option>
                                                    <option value="Wakaf AB Barat">Wakaf AB Barat</option>
                                                    <option value="AB Chicken/Berkah Box">AB Chicken/Berkah Box</option>
                                                    <option value="Program Ramadhan">Program Ramadhan</option>
                                                    <option value="Wakaf Cabang">Wakaf Cabang</option>
                                                    <option value="Umroh/haji">Umroh/haji</option>
                                                    <option value="Qurban">Qurban</option>
                                                    <option value="Palestina">Palestina</option>
                                                </select>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="hasil_dari" id="zakat" value="Zakat">
                                                <label class="form-check-label" for="zakat">Zakat</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="hasil_dari" id="penjualan_barang" value="Penjualan Barang">
                                                <label class="form-check-label" for="penjualan_barang">Penjualan Barang(Khusus AB Store)</label>
                                            </div>
                                            
                                            <!-- Popup/form pilihan barang (default hidden) -->
                                            <div id="barangPopup" style="display: none;">
                                                <!-- Isi dengan elemen formulir atau informasi pilihan barang -->
                                                <label for="barang">Pilih Barang:</label>
                                                <select class="form-control" name="nama_produk" id="barang">
                                                    <option value="">-- Pilih Nama Produk/Program --</option>
                                                    <option value="Buku Buya Yahya">Buku Buya Yahya</option>
                                                    <option value="Rendang Santri">Rendang Santri</option>
                                                    <option value="Al-Quran">Al-Quran</option>
                                                    <option value="Madu ANH">Madu ANH</option>
                                                    <option value="Produk MH">Produk MH</option>
                                                    <option value="Wakaf Tasbih">Wakaf Tasbih</option>
                                                    <option value="Infaq Qurma">Infaq Qurma</option>
                                                    <option value="Mukenah">Mukenah</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="kat_donatur">Kategori Donatur:</label>
                                            <select class="form-control form-control-user" name="kat_donatur" id="kat_donatur">
                                                <option value="">-- Pilih Kategori --</option>
                                                <option value="Barokah">Barokah</option>
                                                <option value="Istiqomah">Istiqomah</option>
                                                <option value="Prospek">Prospek</option>
                                                <option value="Baru">Baru</option>
                                            </select>
                                            <label for="nama_platform">Nama Platform:</label>
                                            <select class="form-control form-control-user" name="nama_platform" id="nama_platform">
                                                <option value="">-- Pilih Platform --</option>
                                                <option value="KITA BISA">KITA BISA</option>
                                                <option value="AMAL SOLEH">AMAL SOLEH</option>
                                            </select>
                                        </div>
                                    </div><br>
                                        
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Kirim Laporan
                                    </button>
                                     <hr>
                                        <a href="#" class="btn btn-google btn-user btn-block">
                                            <i class="fab"></i> Kembali
                                        </a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- jQuery (pastikan Anda sudah memasukkan jQuery sebelum skrip ini) -->
            <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

            <script>
                function formatNumber(input) {
            // Mengambil nilai input tanpa koma
            let inputValue = input.value.replace(/\D/g, '');

            // Menggunakan fungsi Intl.NumberFormat untuk menambahkan format ribuan
            let formattedValue = new Intl.NumberFormat('id-ID').format(inputValue);

            // Menetapkan nilai yang telah diformat kembali ke input
            input.value = formattedValue;
        }

                $(document).ready(function () {
                    // Tanggapi pemilihan radio "Penjualan Barang"
                    $('#penjualan_barang').on('change', function () {
                        if ($(this).is(':checked')) {
                            // Tampilkan popup/form pilihan barang jika "Penjualan Barang" dipilih
                            $('#barangPopup').show();
                            // Sembunyikan popup/form pilihan "Selling"
                            $('#sellingPopup').hide();
                        }
                    });

                    // Tanggapi perubahan pada opsi "Hasil Dari" (misalnya, saat formulir direset)
                    $('input[name="hasil_dari"]').on('change', function () {
                        // Jika opsi selain "Penjualan Barang" dipilih, sembunyikan popup/form
                        if ($(this).val() !== 'Penjualan Barang') {
                            $('#barangPopup').hide();
                            // Sembunyikan popup/form pilihan "Selling"
                            $('#sellingPopup').hide();
                        }
                    });

                    // Tambahkan tanggapan untuk pemilihan radio "Cross Selling"
                    $('#cross_selling').on('change', function () {
                        if ($(this).is(':checked')) {
                            // Tampilkan popup/form pilihan "Selling" jika "Cross Selling" dipilih
                            $('#sellingPopup').show();
                            // Sembunyikan popup/form pilihan barang jika "Cross Selling" dipilih
                            $('#barangPopup').hide();
                        } else {
                            // Sembunyikan popup/form jika radio lain dipilih
                            $('#sellingPopup').hide();
                        }
                    });
                });
            </script>

        
        <!-- Bootstrap core JavaScript-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="js/sb-admin-2.min.js"></script>

    </body>


</html>