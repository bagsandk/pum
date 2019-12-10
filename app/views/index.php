<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?= BASEURL; ?>/img/apple-icon.png">
    <link rel="icon" type="image/png" href="<?= BASEURL; ?>/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Aplikasi SKTLK Polsek Kedaton</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="<?= BASEURL; ?>/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?= BASEURL; ?>/css/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="<?= BASEURL; ?>/css/demo.css" rel="stylesheet" />
    <script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js"></script>
    <style>
        pre.prettyprint {
            background-color: #eee;
            border: 0px;
            margin-bottom: 60px;
            margin-top: 30px;
            padding: 20px;
            text-align: left;
        }

        .atv,
        .str {
            color: #05AE0E;
        }

        .tag,
        .pln,
        .kwd {
            color: #3472F7;
        }

        .atn {
            color: #2C93FF;
        }

        .pln {
            color: #333;
        }

        .com {
            color: #999;
        }

        .space-top {
            margin-top: 50px;
        }

        .btn-primary .caret {
            border-top-color: #3472F7;
            color: #3472F7;
        }

        .area-line {
            border: 1px solid #999;
            border-left: 0;
            border-right: 0;
            color: #666;
            display: block;
            margin-top: 20px;
            padding: 8px 0;
            text-align: center;
        }

        .area-line a {
            color: #666;
        }

        .container-fluid {
            padding-right: 15px;
            padding-left: 15px;
        }

        .table-shopping .td-name {
            min-width: 130px;
        }

        .pick-class-label {
            border-radius: 8px;
            border: 1px solid #E3E3E3;
            color: #ffffff;
            cursor: pointer;
            display: inline-block;
            font-size: 75%;
            font-weight: bold;
            line-height: 1;
            margin-right: 10px;
            padding: 23px;
            text-align: center;
            vertical-align: baseline;
            white-space: nowrap;
        }
    </style>
</head>

<body class="documentation">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg  navbar-transparent " color-on-scroll="500">
        <div class="  container-fluid ">
            <a class="navbar-brand" href="#" target="_blank">
                Aplikasi SKTLK
            </a>
            <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar burger-lines"></span>
                <span class="navbar-toggler-bar burger-lines"></span>
                <span class="navbar-toggler-bar burger-lines"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navigation">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tutorial</a>
                    </li>
                    <?php if (isset($_SESSION['user'])) { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= BASEURL; ?>/dashboard">Back to Dashboard</a>
                        </li>
                    <?php } ?>
                    <?php if (!isset($_SESSION['user'])) { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= BASEURL; ?>/login">Login/Daftar</a>
                        </li>
                    <?php } ?>
                    <?php if (isset($_SESSION['user'])) { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= BASEURL; ?>/login/keluar">Logout</a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="wrapper">
        <div class="page-header clear-filter" filter-color="purple">
            <div class="page-header-image" data-parallax="true" style="background-image: url('<?= BASEURL; ?>/img/polsek.jpg')">
                <div class="filter"></div>
                <div class="title-container text-center">
                    <h1>Aplikasi SKTLK</h1>
                    <?php var_dump($_SESSION['user']); ?>
                    <?php var_dump($_SESSION['admin']); ?>
                    <h3>Kepolisian Sektor Kedaton</h3>
                    <h4 class="description text-center">Jl. Soekarno Hatta No.14, Kp. Baru, Kec. Kedaton, Kota Bandar Lampung, Lampung 35245</h4>
                    <br />
                    <a <?php if (isset($_SESSION['user'])) {
                            echo 'href="' . BASEURL . '/dashboard"';
                        }
                        echo 'href="' . BASEURL . '/login"'; ?> class="btn btn-round btn-neutral btn-fill" target="_blank">Buat SKTLK</a>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="container-fluid">
                <nav>
                    <p class="copyright text-center">
                        ©
                        <script>
                            document.write(new Date().getFullYear())
                        </script>
                        <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
                    </p>
                </nav>
            </div>
        </footer>
    </div>
</body>
<!--   Core JS Files   -->
<script src="<?= BASEURL; ?>/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="<?= BASEURL; ?>/js/core/popper.min.js" type="text/javascript"></script>
<script src="<?= BASEURL; ?>/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="<?= BASEURL; ?>/js/plugins/bootstrap-switch.js"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!--  Chartist Plugin  -->
<script src="<?= BASEURL; ?>/js/plugins/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="<?= BASEURL; ?>/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="<?= BASEURL; ?>/js/light-bootstrap-dashboard.js?v=2.0.0 " type="text/javascript"></script>
<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
<script src="<?= BASEURL; ?>/js/demo.js"></script>
<script>
    var header_height;
    var fixed_section;
    var floating = false;

    $(document).ready(function() {
        suggestions_distance = $("#suggestions").offset();
        pay_height = $('.fixed-section').outerHeight();

    });
</script>

</html>