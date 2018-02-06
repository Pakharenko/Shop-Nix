<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin | Shop-NIX</title>

    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <link rel="stylesheet" href="/public/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/public/css/main.css">
    <link rel="stylesheet" href="/public/assets/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/public/assets/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="/public/assets/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="/public/assets/dist/css/skins/_all-skins.min.css">

    <link rel="stylesheet" href="/public/assets/plugins/datatables/dataTables.bootstrap.css">


    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>


    <style>
        table.table form
        {
            display: inline-block;
        }
        button.delete
        {
            background: transparent;
            border: none;
            color: #337ab7;
            padding: 0;
        }
        button.delete:hover
        {
            color: red;
        }
    </style>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

    <header class="main-header">

        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Messages: style can be found in dropdown.less-->
                    <li class=" messages-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            Админка для интернет магазина
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <aside class="main-sidebar">

        <section class="sidebar">

            <div class="user-panel">
                <div class="pull-left image">
                    <img src="/public/assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>Pakharenko Evgene</p>
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>

            <ul class="sidebar-menu">
                <li><a href="/admin/post"><i class="fa fa-sticky-note-o"></i> <span>Посты</span></a></li>
                <li><a href="/admin/category"><i class="fa fa-list-ul"></i> <span>Категории</span></a></li>
                <li><a href="/admin/product"><i class="fa fa-tags"></i> <span>Продукты</span></a></li>
                <li><a href="/admin/user"><i class="fa fa-users"></i> <span>Пользователи</span></a></li>
                <li><a href="/admin/order"><i class="fa fa-commenting"></i> <span>Заказы</span></a></li>
            </ul>
        </section>
    </aside>

    <div class="content-wrapper">

        <section class="content-header">
            <h1>
                Привет! Это админка
            </h1>
        </section>

        <section class="content">

                <?= $content; ?>

        </section>

    </div>

    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Пахаренко Евгений</b>
        </div>
        <strong>Copyright &copy; <?= date("Y");?> <a href="">Разработка интернет магазина</a>.</strong>
    </footer>

</div>

<script src="/public/assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="/public/assets/bootstrap/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="/public/assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="/public/assets/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="/public/assets/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/public/assets/dist/js/demo.js"></script>



<!-- DataTables -->
<script src="/public/assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/public/assets/plugins/datatables/dataTables.bootstrap.min.js"></script>




<script>
    $(function () {
        $("#example1").DataTable();
    });
</script>

</body>
</html>
