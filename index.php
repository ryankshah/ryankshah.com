<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">

        <title>Ryan Shah</title>
        <meta name="description" content="A web portfolio with the aim of showcasing how amazing I am.">
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
                            <li><a href="about.php">About</a></li>
                            <li><a href="portfolio.php">Portfolio</a></li>
                            <li class="brand"><a href="">RS</a></li>
                            <li><a href="resume.php">Resumé</a></li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </nav>
                    <div class="hr-text-center nav-margin" style="width: 80%;">&middot;</div>
                </div>
            </div>
            <br />
            <div class="row" align="center" id="about">
                <div class="col-12">
                    <div class="intro">
                        My name is Ryan Shah, and I am an avid computer scientist. Currently finishing my Bachelors of Science in Computer Science at <a href="https://www.hw.ac.uk/">Heriot-Watt University</a>, my current ambition is to progress towards doing a PhD in the field of Cyber Security. The areas of research most pertinent to myself are Network Security and Machine Learning, while also having interest and experience in other fields including - but not limited to - Software Engineering and Web Design/Development.
                        <br /><br />
                        Aside from computer science, I enjoy a multitude of activities such as swimming, running and travelling to explore places I find amusing. I also enjoy taking photographs of anything that my brain considers fascinating, as well as playing acoustic and bass guitar, with a touch of what some may call <em>"singing"</em>.
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
