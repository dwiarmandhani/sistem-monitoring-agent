<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIMONA | Ubah Agent</title>

    <!-- Google Font: Source Sans Pro -->
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
                            <h1 class="m-0">Ubah Agent</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Simona</a></li>
                                <li class="breadcrumb-item active">Agent</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-header">
                            <h2>Ubah Agent</h2>
                        </div>

                        <div class="card-body">
                            <form action="" method="post">

                                <input type="hidden" value="<?php echo $agent['agent_id'] ?>" name="agent_id" id="agent_id">
                                <div class="form-group">
                                    <label for="agent_name">Nama Agent</label>
                                    <select class="form-control" name="agent_name" id="agent_name">
                                        <option value="">Pilih Agent</option>
                                        <?php foreach ($dataagent as $key => $value) {
                                        ?>
                                            <option value="<?php echo $value['user_namalengkap'] ?>" data-value="<?php echo $value['user_id']; ?>"><?php echo $value['user_namalengkap'] ?></option>
                                        <?php } ?>
                                    </select>
                                    <?= form_error('agent_name', '<small class="pl-3 text-danger">', '</small>'); ?>
                                </div>


                                <div class="form-group">
                                    <label for="agent_grade">Grade</label>
                                    <select class="form-control" name="agent_grade" id="agent_grade">
                                        <option value="">Pilih Grade</option>
                                        <?php foreach ($datagrade as $key => $value) {
                                        ?>
                                            <option value="<?php echo $value['grade_name'] ?>"><?php echo $value['grade_name'] ?></option>
                                        <?php } ?>
                                    </select>
                                    <?= form_error('agent_grade', '<small class="pl-3 text-danger">', '</small>'); ?>
                                </div>


                                <button type="submit" class="btn btn-primary float-right" name="tambah">Tambah</button>
                            </form>
                        </div>
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
        $(document).ready(function() {
            $('#agent_name').on('click', function() {
                var selectedOption = $(this).find("option:selected");
                var dataValue = selectedOption.attr("data-value");
                document.getElementById('agent_user_id').value = dataValue;

            });
        });
    </script>
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
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