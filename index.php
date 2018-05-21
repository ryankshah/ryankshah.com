<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">

        <title>Ryan Shah</title>
        <meta name="description" content="">
        <meta name="author" content="Ryan Shah">

        <link rel="stylesheet" href="css/style.css">
        <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.rawgit.com/konpa/devicon/df6431e323547add1b4cf45992913f15286456d3/devicon.min.css">

        <!--[if lt IE 9]>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="nav">
                        <ul>
                            <li><a href="about.html">About</a></li>
                            <li><a href="portfolio.html">Portfolio</a></li>
                            <li class="brand"><a href="index.html">RS</a></li>
                            <li><a href="resume.html">Resumé</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </nav>
                    <div class="hr-text-center nav-margin" style="width: 80%;">&middot;</div>
                </div>
            </div>
            <br />
            <div class="row" align="center" id="about">
                <div class="col-12">
                    <div class="intro">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vel ante purus. Vestibulum vel elit nec urna mollis fermentum. Mauris eget turpis odio. Quisque lectus tortor, viverra sit amet finibus ut, tincidunt in lorem. Nullam interdum dolor et sem pretium facilisis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean condimentum ut justo blandit pulvinar. Praesent at nibh vel enim pulvinar sodales. Vestibulum pellentesque iaculis risus vel feugiat. Vestibulum id arcu convallis augue accumsan facilisis et pellentesque sapien. Aliquam ut nisl urna.
                    </div>
                    <ul class="social">
                        <li><a href="https://github.com/ryankshah"><i class="fab fa-github"></i></a></li>
                        <li><a href="https://www.instagram.com/ryankshah/"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="https://www.linkedin.com/in/ryankshah"><i class="fab fa-linkedin"></i></a></li>
                        <li><a href="https://stackexchange.com/users/2598371/madcrazydrumma"><i class="fab fa-stack-exchange"></i></a></li>
                        <li><a href="https://twitter.com/ryankshah"><i class="fab fa-twitter-square"></i></a></li>
                    </ul>
                </div>
            </div>
            <br />
            <div class="row" id="portfolio">
                <div class="section">
                    <div class="gallery">
                        <div class="sizer"></div>
                        <?php
                            $access_token = "356117486.98e2bc4.4b6476bae97d4ad4966249072cfbf3b6";
                            $photo_count = 9;
                            $json_link = "https://api.instagram.com/v1/users/self/media/recent/?";
                            $json_link .="access_token={$access_token}&count={$photo_count}";
                            $json = file_get_contents($json_link);
                            $obj = json_decode(preg_replace('/("\w+"):(\d+)/', '\\1:"\\2"', $json), true);
                            foreach ($obj['data'] as $post) {
                                echo '<div class="item">';
                                    echo '<a href="https://instagram.com/ryankshah"><img src="'.$post['images']['standard_resolution']['url'].'" alt="" /></a>';
                                echo '</div>';
                            }
                        ?>
                    </div>
                </div>
            </div>
            <br /><br />
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
        <script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
        <script src="js/site.js"></script>
    </body>
</html>
