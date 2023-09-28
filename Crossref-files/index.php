<?php
session_start();
?>
<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <title>Sepehr's Portfolio</title>
    <link rel="icon" type="image/x-icon" href="./img/favicon.png">
    <link rel="stylesheet" href="./css/main-mobile.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000&family=Roboto+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/db175ee71a.js" crossorigin="anonymous"></script>
    <script defer src="./js/dropdownToggle.js"></script>
</head>

<body>
    <div class="page-container">
        <header>
            <div class="header-container">
                <div class="header-home-container">
                    <div class="header-home-img">
                        <figure><a href="index.php"><img src="./img/CWS-2.png"></a></figure>
                    </div>
                    <div class="header-home-logotext">
                        <p>By Sepehr Shamloo</p>
                    </div>
                </div>

                <div class="header-nav">
                    <nav>
                        <ul>
                            <a href="experience.php">
                                <li>Experience</li>
                            </a>
                            <a href="expertise.php">
                                <li>Expertise</li>
                            </a>
                            <a href="education.php">
                                <li>Education</li>
                            </a>
                            <a href="blog-post.php">
                                <li>Blog</li>
                            </a>
                        </ul>
                    </nav>
                </div>

                <div class="toggle-btn" id="toggle-btn">
                    <i class="fa-solid fa-bars fa-2xl"></i>
                </div>

                <div class="close-btn" id="close-btn">
                    <i class="fa-solid fa-xmark fa-2xl"></i>
                </div>

                <div class="header-login-buttons">
                    <div class="header-login-btn">
                        <a href="./login-page.php"><span>Login</span></a>
                    </div>

                    <?php
                    if ($_SESSION['isLogged'] === true) { ?>

                        <div class="header-signup-btn">
                            <a href="logout.php"><span>Log out</span></a>
                        </div>
                    <?php } ?>

                </div>
            </div>

            <div class="dropdown-menu" id="dropdownNav">
                <nav>
                    <ul>
                        <a href="experience.php">
                            <li>Experience</li>
                        </a>
                        <a href="expertise.php">
                            <li>Expertise</li>
                        </a>
                        <a href="education.php">
                            <li>Education</li>
                        </a>
                        <a href="blog-post.php">
                            <li>Blog</li>
                        </a>

                        <div class="header-login-btn">
                            <a href="./login-page.php"><span>Login</span></a>
                        </div>

                        <?php
                        if ($_SESSION['isLogged'] === true) { ?>

                            <div class="header-signup-btn">
                                <a href="logout.php"><span>Log out</span></a>
                            </div>
                        <?php } ?>
                    </ul>
                </nav>
            </div>
        </header>

        <article>
            <section>
                <div class="homepage-content-container">
                    <div class="welcome-txt-top">
                        <p>
                            <span id="code">Code &nbsp;</span>
                            <span id="with">with &nbsp;</span>
                            <span id="sep">Sep</span>
                        </p>
                    </div>
                    <div class="welcome-txt-bottom">
                        <div id="home-first-msg">
                            <div class="pfp-container"><img class="msg-pfp" src="./img/me.jpeg" width="65" height="65">
                            </div>
                            <div>
                                <span>Hi 👋 I'm Sepehr</span>
                            </div>
                        </div>
                        <div id="home-second-msg">
                            <p>Welcome to my Portfolio!</p>
                            <br>
                            <p>This website was developed to showcase my abilities to implement Web Technologies! 😎</p>
                        </div>
                        <div class="learn-more-btn">
                            <a href="./experience.php"><span>Learn More &nbsp;&nbsp;→</span></a>
                        </div>
                    </div>

                </div>
            </section>
        </article>

        <footer>
            <div class="footer-container">
                <div class="footer-links">
                    <span>Relevant Links:</span>
                    <nav>
                        <ul>
                            <a href="">
                                <li><img src="./img/iconmonstr-github-2.svg" width="40" height="40"><span id="inside">GitHub</span></li>
                            </a>
                            <a href="">
                                <li><img src="./img/iconmonstr-linkedin-2.svg" width="40" height="40"><span id="inside">LinkedIn</span></li>
                            </a>
                            <a href="">
                                <li><img src="./img/iconmonstr-instagram-12.svg" width="40" height="40"><span id="inside">Instagram</span></li>
                            </a>
                            <a href="">
                                <li><img src="./img/iconmonstr-email-13.svg" width="40" height="40"><span id="inside">Email</span></li>
                            </a>
                        </ul>
                    </nav>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>