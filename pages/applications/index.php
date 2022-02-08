<?php
include '../../config.php';
include_once(ROOT_PATH . '/includes/header.php');
?>
<title>Applications</title>
</head>

<body>
    <main class="">
        <div class="wrapper">
            <!-- Sidebar  -->
            <?php
            include(ROOT_PATH . '/includes/sidebar-nav.php')
            ?>

            <!-- Page Content  -->
            <div id="content">
                <?php
                include(ROOT_PATH . '/includes/navbar.php')
                ?>
                <div id="main-content">
                    <div class="page-title">
                        <h2>Applications</h2>
                    </div>
                    <section>
                        <div class="container mt-3">
                            <div class="mb-3 d-flex align-items-center justify-content-between shadow p-3 mb-5 bg-body rounded">
                                <div class="d-flex">
                                    <img src="<?php echo BASE_URL . "/assets/static/logo.png" ?>" alt="JKUAT Logo" style="width: 70px" />
                                    <div class="container align-middle mx-3">
                                        <div class="row">ICT Directorate : Bsc Computer Technology</div>
                                        <div class="row">
                                            <div class="col text-left"><p>JKUAT</p></div>
                                            <div class="col text-right"><p>Juja</p></div>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    Status : <span class="text-danger">Pending</span>
                                </div>
                            </div>

                            <div class="mb-3 d-flex align-items-center justify-content-between shadow p-3 mb-5 bg-body rounded">
                                <div class="d-flex">
                                    <img src="<?php echo BASE_URL . "/assets/static/logo.png" ?>" alt="JKUAT Logo" style="width: 70px" />
                                    <div class="container align-middle mx-3">
                                        <div class="row">ICT Directorate : Bsc Computer Technology</div>
                                        <div class="row">
                                            <div class="col text-left"><p>JKUAT</p></div>
                                            <div class="col text-right"><p>Juja</p></div>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    Status : <span class="text-success">Approved</span>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <?php
                include(ROOT_PATH . '/includes/footer.php')
                ?>
            </div>

        </div>
    </main>

</body>

</html>