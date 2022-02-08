<?php
include './config.php';
include(ROOT_PATH . '/includes/header.php')
?>
<link rel="stylesheet" href="<?php echo BASE_URL ?>/css/main.css">
<title>Home</title>
</head>

<body>
    <main>
        <div id="main-page-nav">
            <nav class="navbar">
                <div class="logo-brand">
                    <div class="logo">
                        <a href="">
                            <img src="<?php echo BASE_URL . "/assets/static/logo.png" ?>" alt="logo">
                        </a>
                    </div>
                    <span>
                        <!-- JOMO KENYATTA UNIVERSITY OF AGRICULTURE AND TECHNOLOGY
                        <br /> -->
                        <h5>JKUAT ATTACHMENT PORTAL</h5>
                    </span>
                </div>
                <div class="nav-buttons">
                    <button>Register</button>
                    <button class="login-button">Sign In</button>

                </div>
            </nav>
        </div>
        <header class="showcase">
            <div class="hero-text">
                <h1>Find Attachment Opportunites</h1>
            </div>
        </header>
        <section class="search-section">
            <div class="search-form">
                <form action="">
                    <div>
                        <input type="text" placeholder="Search for attachment">
                    </div>
                    <div class="college-filter">
                        <label class="filter-dropdown" for="filter-drop">
                            <select class="" id="styledSelect1" name="options">
                                <option value="">
                                    Select College
                                </option>
                                <option value="1">
                                    Option 1
                                </option>
                                <option value="2">
                                    Option 2
                                </option>
                                <option value="3">
                                    Option 3
                                </option>
                                <option value="4">
                                    Option 4
                                </option>
                            </select>
                            
                        </label>
                    </div>
                    <button class="search-button">Search</button>
                </form>
            </div>
            <div class="container-fluid search-display">
                <div class="" style="display: flex;">
                    <div class="box search-filters">
                        <div class="selected-filters">
                            <p>Search filters</p>
                            <div>
                                <p>No selected filters</p>
                            </div>
                        </div>
                        <div>
                            <p>Filter by school</p>
                            <div class="school-filter-list">
                                <?php for ($i = 0; $i < 15; $i++) : ?>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Default checkbox
                                        </label>
                                    </div>
                                <?php endfor; ?>
                            </div>
                        </div>
                        <div class="filters-reset">
                            <button>Reset filters</button>
                        </div>
                    </div>
                    <div class="content-display">
                        <div class="box search-results">
                            <p>No search results</p>
                        </div>
                        <div class="job-posts">
                            <h3>Featured Opportunities</h3>
                            <div class="job-list">
                                <?php for ($i = 0; $i < 15; $i++) : ?>
                                    <div class="job-item">
                                        <div class="organization-details">
                                            <div class="organization-logo">
                                                <img src="<?php echo BASE_URL . "/assets/static/logo.png" ?>" alt="logo">
                                            </div>
                                            <div>
                                                <p>ICT Diretorate</p>
                                                <p class="sm-text"><span>JKUAT</span><span>Juja</span></p>
                                            </div>
                                        </div>
                                        <div class="post-action">
                                            <button>View</button>
                                            <p class="sm-text">01 - jan-2020</p>
                                        </div>
                                    </div>
                                <?php endfor; ?>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php include './includes/footer.php' ?>
    </main>
</body>

</html>