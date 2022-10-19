<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>BBC News</title>
    <link rel="icon" href="img/logo.png" type="image">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="style.css" type="text/css" rel="stylesheet" />
</head>

<body>
    <div class="body_wrapper">
        <div class="center">
            <div class="header_area">
                <div class="logo floatleft"><a href="#"><img src="img/logo1.png" alt="bbc-news" width="100px" /></a>
                </div>
                <div class="top_menu floatleft">
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Contact us</a></li>
                        <li><a href="#">Subscribe</a></li>
                        <li><a href="#">Login</a></li>
                    </ul>
                </div>
                <div class="social_plus_search floatright">
                    <div class="social">
                        <ul>
                            <li><a href="#"><i class="fa fa-instagram fa-2x"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook fa-2x"></i></a></li>
                            <li><a href="#"><i class="fa fa-envelope fa-2x"></i></a></li>
                        </ul>
                    </div>
                    <div class="search">
                        <form action="#" method="post">
                            <input type="text" placeholder="Search News"
                                style="margin-bottom: 15px; padding-right: 100px;" />
                        </form>
                    </div>
                </div>
            </div>
            <div class="main_menu_area">
                <ul id="nav">
                    <li><a href="#">National</a>
                        <ul>
                            <li><a href="#">Single item</a></li>
                            <li><a href="#">Single item</a></li>
                            <li><a href="#">Single item</a>
                        </ul>
                    </li>
                    <li><a href="#">International</a>
                        <ul>
                            <li><a href="#">Single item</a></li>
                            <li><a href="#">Single item</a></li>
                            <li><a href="#">Single item</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Economy</a>
                        <ul>
                            <li><a href="#">Single item</a></li>
                            <li><a href="#">Single item</a></li>
                            <li><a href="#">Single item</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Business</a>
                        <ul>
                            <li><a href="#">Single item</a></li>
                            <li><a href="#">Single item</a></li>
                            <li><a href="#">Single item</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Sports</a>
                        <ul>
                            <li><a href="#">Single item</a></li>
                            <li><a href="#">Single item</a></li>
                            <li><a href="#">Single item</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Technology</a>
                        <ul>
                            <li><a href="#">Single item</a></li>
                            <li><a href="#">Single item</a></li>
                            <li><a href="#">Single item</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Entertainment</a>
                        <ul>
                            <li><a href="#">Single item</a></li>
                            <li><a href="#">Single item</a></li>
                            <li><a href="#">Single item</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Lifestyle</a>
                        <ul>
                            <li><a href="#">Single item</a></li>
                            <li><a href="#">Single item</a></li>
                            <li><a href="#">Single item</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Culture</a>
                        <ul>
                            <li><a href="#">Single item</a></li>
                            <li><a href="#">Single item</a></li>
                            <li><a href="#">Single item</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Blogs</a>
                </ul>
            </div>

            <div class="content_area">
                <?php

                    $alamatAPI = "http://newsapi.org/v2/everything?sources=bbc-news&q=Indonesian&language=en&from=2022-10-01&sortBy=publishedAt&apiKey=880f57462f5a42088658170bc791eac8";

                    # ambil data json dari $alamatAPI
                    $data = file_get_contents($alamatAPI);
                    # parsing variabel $data ke dalam array
                    $dataBerita = json_decode($data);
                ?>
            <div class="single_left_coloum floatleft"> 
                <?php
                    if ($dataBerita->status === "ok") {
                        # tampilkan menggunakan perulangan
                        foreach ($dataBerita->articles as $berita) {
                            echo "<h1><a href='{$berita->url}'><font color='#CF0A0A'>{$berita->title}</font></a></h1>";
                            if ($berita->urlToImage) {
                                echo "<img style='width: 200rem' src='{$berita->urlToImage}'>";
                            }
                            echo "<h4>{$berita->description}</h4>";
                            echo "<h5><a href='{$berita->url}'><font color='#CF0A0A'>Readmore >></font></a></h5>";
                            echo "<hr />";
                        }
                    }
                ?>
            </div>
        </div>

        <div class="footer_bottom_area">
            <div class="footer_menu center">
                <ul id="f_menu">
                    <li><a href="#">National</a></li>
                    <li><a href="#">International</a></li>
                    <li><a href="#">Economy</a></li>
                    <li><a href="#">Business</a></li>
                    <li><a href="#">Sports</a></li>
                    <li><a href="#">Technology</a></li>
                    <li><a href="#">Entertainment</a></li>
                    <li><a href="#">Lifestyle</a></li>
                    <li><a href="#">Culture</a></li>
                </ul>
            </div>
            <div class="copyright_text">
                <p>Copyright &copy; 2022 BBC News | Design by <strong>Kiki Alfaini Nurrizki</strong></p>
                <p>The BBC is not responsible for the content of external sites. <a href="#">Read about our approach to
                        external linking.</a></p>
            </div>
        </div>
    </div>
</body>

</html>
