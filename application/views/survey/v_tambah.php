<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIMONA | Mulai Survey</title>

    <!-- Google Font: Source Sans Pro -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/adminLTE/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/adminLTE/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/adminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/adminLTE/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/adminLTE/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/adminLTE/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/adminLTE/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/adminLTE/plugins/summernote/summernote-bs4.min.css">
</head>

<!-- <?php // var_dump($data); 
        ?> -->
<style>
    .upload {


        &__img {
            &-wrap {
                display: flex;
                flex-wrap: wrap;
                margin: 0 -10px;
            }

            &-box {
                width: 200px;
                padding: 0 10px;
                margin-bottom: 12px;
            }

            &-close {
                width: 24px;
                height: 24px;
                border-radius: 50%;
                background-color: rgba(0, 0, 0, 0.5);
                position: absolute;
                top: 10px;
                right: 10px;
                text-align: center;
                line-height: 24px;
                z-index: 1;
                cursor: pointer;

                &:after {
                    content: '\2716';
                    font-size: 14px;
                    color: white;
                }
            }
        }
    }

    .img-bg {
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        position: relative;
        padding-bottom: 100%;
    }
</style>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="<?php echo base_url(); ?>assets/adminLTE/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
        </div>

        <?php $this->load->view('templates/navbar'); ?>
        <?php $this->load->view('templates/sidebar'); ?>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Simona</a></li>
                                <li class="breadcrumb-item"><a href="<?php echo base_url('survey/survey'); ?>">Daftar Survey</a></li>
                                <li class="breadcrumb-item active">Tambah Survey</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <h2 class="pl-4" id="judul_halaman">Form Survey - Halaman 1</h2>

                <div class="container-fluid pl-4 pr-4">
                    <div class="card">
                        <div class="card-header bg-primary text-white">
                            Form Survey
                        </div>
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class=" card-body" id="form_satu">
                                <div class="form-group">
                                    <label for="survey_date_visit">Waktu Kunjungan</label>
                                    <input class="form-control" type="date" id="survey_date_visit" name="survey_date_visit">
                                    <?= form_error('survey_date_visit', '<small class="pl-3 text-danger">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="survey_company_name">Perusahaan</label>
                                    <select class="form-control" name="survey_company_name" id="survey_company_name">
                                        <option value="">Pilih Perusahaan</option>
                                        <?php foreach ($company as $key => $value) {
                                        ?>
                                            <option value="<?php echo $value['company_name'] ?>"><?php echo $value['company_name'] ?></option>
                                        <?php } ?>
                                    </select>
                                    <?= form_error('survey_company_name', '<small class="pl-3 text-danger">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="survey_pic_name">PIC</label>
                                    <input type="text" class="form-control" id="survey_pic_name" name="survey_pic_name">
                                    <?= form_error('survey_pic_name', '<small class="pl-3 text-danger">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="survey_pic_phone">Nomor PIC</label>
                                    <input type="text" class="form-control" id="survey_pic_phone" name="survey_pic_phone">
                                    <?= form_error('survey_pic_phone', '<small class="pl-3 text-danger">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="survey_documentation">Dokumentasi</label>
                                    <div class="input-group mb-3">
                                        <div class="custom-file">
                                            <input type="file" name="survey_documentation[]" class="custom-file-input" id="survey_documentation" multiple>
                                            <label class="custom-file-label" for="survey_documentation">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="">Upload</span>
                                        </div>
                                        <?= form_error('survey_pic_phone', '<small class="pl-3 text-danger">', '</small>'); ?>

                                    </div>
                                    <div class="upload__img-wrap"></div>
                                </div>
                                <div class="form-group">
                                    <button type="button" id="go_form_2" class="btn btn-primary" onclick="pergikehaldua()">Selanjutnya</button>
                                </div>
                            </div>
                            <div class=" card-body" id="form_dua" style="display: none;">
                                <div class="form-group">
                                    <label for="survey_minat">APAKAH PIHAK YANG DIKUNJUNGI BERMINAT MENGAJUKAN KREDIT?</label>
                                    <div class="form-check" id="survey_minat">
                                        <input class="form-check-input" value="BERMINAT MENGAJUKAN" type="radio" name="survey_minat" id="survey_minat_3">
                                        <label class="form-check-label" for="survey_minat_3">
                                            BERMINAT MENGAJUKAN
                                        </label>
                                    </div>
                                    <div class="form-check" id="survey_minat">
                                        <input class="form-check-input" value="MASIH DIRUNDINGKAN" type="radio" name="survey_minat" id="survey_minat_2">
                                        <label class="form-check-label" for="survey_minat_2">
                                            MASIH DIRUNDINGKAN
                                        </label>
                                    </div>
                                    <div class="form-check" id="survey_minat">
                                        <input class="form-check-input" value="TIDAK BERMINAT" type="radio" name="survey_minat" id="survey_minat_1">
                                        <label class="form-check-label" for="survey_minat_1">
                                            TIDAK BERMINAT
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="survey_produk">NAMA PRODUK YANG DIMINNATI?</label>
                                    <select class="form-control" name="survey_produk" id="survey_produk">
                                        <option value="">Pilih Produk</option>

                                        <option value="KOMERSIAL">KOMERSIAL</option>
                                        <option value="UMKM">UMKM</option>

                                    </select>
                                    <?= form_error('survey_produk', '<small class="pl-3 text-danger">', '</small>'); ?>
                                </div>
                                <div class="form-group survey_sub_produk" id="subprodukkomersial" style="display:none">
                                    <label for="survey_sub_produk">KATEGORI PRODUK KOMERSIAL</label>
                                    <select class="form-control" id="sub_komersial">
                                        <option value="">Pilih Produk</option>
                                        <?php foreach ($komersial as $key => $value) {
                                        ?>
                                            <option value="<?php echo $value['produk_name'] ?>"><?php echo $value['produk_name'] ?></option>
                                        <?php } ?>
                                    </select>
                                    <?= form_error('survey_sub_produk', '<small class="pl-3 text-danger">', '</small>'); ?>
                                </div>
                                <div class="form-group survey_sub_produk" id="subprodukumkm" style="display: none;">
                                    <label for="survey_sub_produk">KATEGORI PRODUK UMKM</label>
                                    <select class="form-control" id="sub_umkm">
                                        <option value="">Pilih Produk</option>
                                        <?php foreach ($umkm as $key => $value) {
                                        ?>
                                            <option value="<?php echo $value['produk_name'] ?>"><?php echo $value['produk_name'] ?></option>
                                        <?php } ?>
                                    </select>
                                    <?= form_error('survey_sub_produk', '<small class="pl-3 text-danger">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="survey_plafond">PROYEKSI PLAFOND</label>
                                    <input type="text" class="form-control" id="survey_plafond" name="survey_plafond">
                                    <?= form_error('survey_plafond', '<small class="pl-3 text-danger">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="survey_place">APAKAH ASET TEMPAT USAHA MILIH SENDIRI?</label>
                                    <div class="form-check" id="survey_place">
                                        <input class="form-check-input" value="MILIK SENDIRI" type="radio" name="survey_place" id="survey_place_2">
                                        <label class="form-check-label" for="survey_place_2">
                                            MILIK SENDIRI
                                        </label>
                                    </div>
                                    <div class="form-check" id="survey_place">
                                        <input class="form-check-input" value="SEWA" type="radio" name="survey_place" id="survey_place_1">
                                        <label class="form-check-label" for="survey_place_1">
                                            SEWA
                                        </label>
                                    </div>
                                    <?= form_error('survey_place', '<small class="pl-3 text-danger">', '</small>'); ?>

                                </div>
                                <div class="form-group">
                                    <label for="survey_agunan">APAKAH SUDAH MENJADI AGUNAN?</label>
                                    <div class="form-check" id="survey_agunan">
                                        <input class="form-check-input" value="SUDAH" type="radio" name="survey_agunan" id="survey_agunan_2">
                                        <label class="form-check-label" for="survey_agunan_2">
                                            SUDAH
                                        </label>
                                    </div>
                                    <div class="form-check" id="survey_agunan">
                                        <input class="form-check-input" value="BELUM" type="radio" name="survey_agunan" id="survey_agunan_1">
                                        <label class="form-check-label" for="survey_agunan_1">
                                            BELUM
                                        </label>
                                    </div>
                                    <?= form_error('survey_agunan', '<small class="pl-3 text-danger">', '</small>'); ?>

                                </div>
                                <div class="form-group">
                                    <label for="survey_holding">PRODUK HOLDING YANG DITAWARKAN?</label>
                                    <div class="form-check" id="survey_holding">
                                        <input class="form-check-input" value="TABUNGAN" type="radio" name="survey_holding" id="survey_holding_3">
                                        <label class="form-check-label" for="survey_holding_3">
                                            TABUNGAN
                                        </label>
                                    </div>
                                    <div class="form-check" id="survey_holding">
                                        <input class="form-check-input" value="GIRO" type="radio" name="survey_holding" id="survey_holding_2">
                                        <label class="form-check-label" for="survey_holding_2">
                                            GIRO
                                        </label>
                                    </div>
                                    <div class="form-check" id="survey_holding">
                                        <input class="form-check-input" value="DEPOSITO" type="radio" name="survey_holding" id="survey_holding_1">
                                        <label class="form-check-label" for="survey_holding_1">
                                            DEPOSITO
                                        </label>
                                    </div>
                                    <?= form_error('survey_holding', '<small class="pl-3 text-danger">', '</small>'); ?>

                                </div>
                                <div class="form-group">
                                    <label for="survey_alasan">ALASAN TIDAK BERMINAT</label>
                                    <textarea type="text" class="form-control" id="survey_alasan" name="survey_alasan"></textarea>
                                    <?= form_error('survey_alasan', '<small class="pl-3 text-danger">', '</small>'); ?>
                                </div>
                                <div class="form-group" style="display: flex;">
                                    <div>
                                        <button onclick="pergikehalsatu()" type="button" id="go_form_1" class="btn btn-danger">Sebelumnya</button>
                                    </div>
                                    <div class=" pl-2 pr-2">
                                        <button onclick="pergikehaltiga()" type="button" id="go_form_3" class="btn btn-primary">Selanjutnya</button>
                                    </div>
                                </div>
                            </div>
                            <div class=" card-body" id="form_tiga" style="display: none;">
                                <div id="dataconfirmasi"></div>
                                <h5 class="card-title"><strong>APAKAH ANDA YAKIN DATANYA SUDAH BENAR?</strong></h5>
                                <p class="card-text">klik kirim untuk menyelesaikan</p>
                                <div class="form-group" style="display: flex;">
                                    <div>
                                        <button onclick="pergikehaldua()" type="button" id="go_form_2" class="btn btn-danger">Sebelumnya</button>
                                    </div>
                                    <div class=" pl-2 pr-2">
                                        <button type="submit" id="kirim" class="btn btn-primary">Kirim</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /.card -->
        </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <?php $this->load->view('templates/footer'); ?>

    </div>


    <!-- ./wrapper -->
    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>assets/adminLTE/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="<?php echo base_url(); ?>assets/adminLTE/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

    <script>
        $.widget.bridge('uibutton', $.ui.button);

        function pergikehalsatu() {
            var hal1 = document.getElementById('form_satu');
            var hal2 = document.getElementById('form_dua');
            var hal3 = document.getElementById('form_tiga');
            var judul_halaman = document.getElementById('judul_halaman');

            hal1.style.display = "block";
            hal2.style.display = "none";
            hal3.style.display = "none";
            judul_halaman.innerText = "Form Survey - Halaman 1";
        }

        function pergikehaldua() {
            var hal1 = document.getElementById('form_satu');
            var hal2 = document.getElementById('form_dua');
            var hal3 = document.getElementById('form_tiga');
            var judul_halaman = document.getElementById('judul_halaman');

            hal1.style.display = "none";
            hal2.style.display = "block";
            hal3.style.display = "none";
            judul_halaman.innerText = "Form Survey - Halaman 2";
        }

        function pergikehaltiga() {
            var hal1 = document.getElementById('form_satu');
            var hal2 = document.getElementById('form_dua');
            var hal3 = document.getElementById('form_tiga');
            var judul_halaman = document.getElementById('judul_halaman');

            hal1.style.display = "none";
            hal2.style.display = "none";
            hal3.style.display = "block";
            judul_halaman.innerText = "Form Survey - Halaman 3";

            var namaperusahaan = document.getElementById('survey_company_name').value;
            var waktukunjungan = document.getElementById('survey_date_visit').value;
            var surveypic = document.getElementById('survey_pic_name').value;
            var surveypicphone = document.getElementById('survey_pic_phone').value;
            // var minat = document.getElementsByTagName('survey_minat').value;
            var produk = document.getElementById('survey_produk').value;
            var plafond = document.getElementById('survey_plafond').value;
            var alasan = document.getElementById('survey_alasan').value;
            var surveyPlaceRadioButtons = document.querySelectorAll('input[name="survey_place"]');
            var surveyPlaceValue;
            for (var i = 0; i < surveyPlaceRadioButtons.length; i++) {
                if (surveyPlaceRadioButtons[i].checked) {
                    surveyPlaceValue = surveyPlaceRadioButtons[i].value;
                    break;
                }
            }
            var surveyminatRadioButtons = document.querySelectorAll('input[name="survey_minat"]');
            var surveyminatValue;
            for (var i = 0; i < surveyminatRadioButtons.length; i++) {
                if (surveyminatRadioButtons[i].checked) {
                    surveyminatValue = surveyminatRadioButtons[i].value;
                    break;
                }
            }
            var surveyagunanRadioButtons = document.querySelectorAll('input[name="survey_agunan"]');
            var surveyagunanValue;
            for (var i = 0; i < surveyagunanRadioButtons.length; i++) {
                if (surveyagunanRadioButtons[i].checked) {
                    surveyagunanValue = surveyagunanRadioButtons[i].value;
                    break;
                }
            }
            var surveyholdingRadioButtons = document.querySelectorAll('input[name="survey_holding"]');
            var surveyholdingValue;
            for (var i = 0; i < surveyholdingRadioButtons.length; i++) {
                if (surveyholdingRadioButtons[i].checked) {
                    surveyholdingValue = surveyholdingRadioButtons[i].value;
                    break;
                }
            }




            document.getElementById('dataconfirmasi').innerHTML = '<h5>Nama perusahaan : ' + (namaperusahaan == "" ? '<strong>Belum diisi</strong>' : namaperusahaan) + '</h5><br><h5>Waktu kunjungan : ' + (waktukunjungan == "" ? '<strong>Belum diisi</strong>' : waktukunjungan) + '</h5><br><h5>PIC : ' + (surveypic == "" ? '<strong>Belum diisi</strong>' : surveypic) + '</h5><br><h5>Kontak PIC : ' + (surveypicphone == "" ? '<strong>Belum diisi</strong>' : surveypicphone) + '</h5><br><h5>Apakah pihak yang dikunjungi berminat mengajukan kredit? ' + (surveyminatValue == undefined ? '<strong>Belum diisi</strong>' : surveyminatValue) + '</h5><br><h5>Nama Produk yang diminati? ' + (produk == "" ? '<strong>Belum diisi</strong>' : produk) + '</h5><br><br><h5>Plafond : ' + (plafond == "" ? '<strong>Belum diisi</strong>' : plafond) + '</h5><br><h5>Apakah aset milik sendiri? ' + (surveyPlaceValue == undefined ? '<strong>Belum diisi</strong>' : surveyPlaceValue) + '</h5><br><h5>Apakah sudah menjadi agunan? ' + (surveyagunanValue == undefined ? '<strong>Belum diisi</strong>' : surveyagunanValue) + '</h5><br><h5>Produk holding yang ditawarkan? ' + (surveyholdingValue == undefined ? '<strong>Belum diisi</strong>' : surveyholdingValue) + '</h5><br><h5>Alasan tidak berminat? ' + (alasan == "" ? '<strong>Belum diisi</strong>' : alasan) + '</h5><br><h5>Dokumentasi : </h5><br><div id="show_doc"></div>';
        }
        // name="survey_sub_produk"
        var survey_produk = document.getElementById("survey_produk");
        const umkm = document.getElementById('sub_umkm');
        const komersial = document.getElementById('sub_komersial');
        const komersialdiv = document.getElementById('subprodukkomersial');
        const umkmdiv = document.getElementById('subprodukumkm');
        survey_produk.addEventListener("change", function() {
            var selectedValue = survey_produk.value;

            if (selectedValue === 'KOMERSIAL') {
                komersialdiv.style.display = "block";
                komersial.setAttribute("name", "survey_sub_produk");
                umkm.setAttribute("name", "");
                umkmdiv.style.display = "none";
            } else if (selectedValue === 'UMKM') {
                umkmdiv.style.display = "block";
                umkm.setAttribute("name", "survey_sub_produk");
                komersial.setAttribute("name", "");
                komersialdiv.style.display = "none";
            } else {
                komersial.removeAttribute("name");
                umkm.removeAttribute("name");
                komersialdiv.style.display = "none";
                umkmdiv.style.display = "none";
            }
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo base_url(); ?>assets/adminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="<?php echo base_url(); ?>assets/adminLTE/plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="<?php echo base_url(); ?>assets/adminLTE/plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="<?php echo base_url(); ?>assets/adminLTE/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/adminLTE/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="<?php echo base_url(); ?>assets/adminLTE/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="<?php echo base_url(); ?>assets/adminLTE/plugins/moment/moment.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/adminLTE/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="<?php echo base_url(); ?>assets/adminLTE/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="<?php echo base_url(); ?>assets/adminLTE/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="<?php echo base_url(); ?>assets/adminLTE/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url(); ?>assets/adminLTE/dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <!-- <script src="<?php //echo base_url(); 
                        ?>assets/adminLTE/dist/js/demo.js"></script> -->
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="<?php echo base_url(); ?>assets/adminLTE/dist/js/pages/dashboard.js"></script>
</body>

</html>