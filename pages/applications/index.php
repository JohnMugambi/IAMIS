<?php
include '../../config.php';
include_once (ROOT_PATH.'/includes/header.php');
?>
<title>Applications</title>
</head>

<body>
    <main class="">
        <div class="wrapper">
            <!-- Sidebar  -->
            <?php
            include (ROOT_PATH.'/includes/sidebar-nav.php')
            ?>

            <!-- Page Content  -->
            <div id="content">
                <?php
                include (ROOT_PATH.'/includes/navbar.php')
                ?>
                <div id="main-content">
                    <section>
                        Application page
                    </section>
                </div>
                <?php
                include (ROOT_PATH.'/includes/footer.php')
                ?>
            </div>

        </div>
    </main>

    <script src="js/scripsts.js" async defer></script>
</body>

</html>