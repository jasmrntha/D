<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="shortcut icon" href="assets\Honkai-Star-Rail.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
    <title>Honkai Star-Rail</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
        <div class="container-fluid">
            <img src="assets/Honkai-Star-Rail_copy.png" alt="" width="110px">
            <div id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="navbar-links" href="">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="navbar-links" href="#news">News</a>
                    </li>
                </ul>
            </div>
            <div id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <button class="sign-up-button">
                            <a href="{{url('/uts-validation')}}">Sign Up</a>
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="video-container">
        <video src="assets/hsr.mp4" loop="true" autoplay="autoplay" controls muted></video>
    </div>

    <div class="container-md" id="news">
        <h1 style="text-align: center; padding: 10px; margin-bottom: 40px;">NEWS</h1>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="assets\StarRail_Image_1696083020.png" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Xianzhou Luofu</h5>
                        <p class="card-text">The Trailblazer and Welt Yang, accompanied by March 7th are on a mission to help The Xianzhou Luofu from The Stellaron.</p>
                        <a href="https://www.youtube.com/watch?v=XPYqvSRWkx4" class="btn btn-info">Cutscenes</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="assets\StarRail_Image_1696138917.png" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Dan Heng Imbibitor Lunae</h5>
                        <p class="card-text">Upon accepting the majestic horns atop his crown, he must accept all the merits and faults attributed to that sinner.
                        </p>
                        <a href="https://www.youtube.com/watch?v=qWXPNyt6oTE" class="btn btn-info">About Imbibitor Lunae</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="assets\StarRail_Image_1696139297.png" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Welt Yang</h5>
                        <p class="card-text">The wise and sophisticated former Anti-Entropy Sovereign who inherits the name of the world and the hero that saved Earth.</p>
                        <a href="https://www.youtube.com/watch?v=xcemHtaqCws" class="btn btn-info">About Welt Yang</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="changing-img">
        <img src="assets/StarRail_Image_1696141531.png" id="changeable_img" class="changeable-img">
        <h4 id="changeable_text" class="changeable-text">This is the Trailblazer.</h4>
        <img src="assets/icons/icons8-less-than-50.png" alt="" width="20px" height="20px" onclick="changeContent('prev')">
        <img src="assets/icons/icons8-greater-than-50.png" alt="" width="20px" height="20px" onclick="changeContent('next')">
    </div>

    <div class="validation">
        <div class="validation-bg">
            <img src="assets\StarRail_Image_1696141615.png" class="validation-img">
        </div>
        <div class="validation-content">
            <h3>Contact us for further information!</h3>
            <div class="mb-3 col-md-4 mt-2">
                <input type="email" class="form-control" id="email" placeholder="name@example.com">
            </div>
            <div class="mb-3 col-md-4">
                <textarea class="form-control" id="textarea" rows="3"  placeholder="Type something here.."></textarea>
            </div>
            <button class="sign-up-button-validation" onclick="alert('Submitted!')">Send</button>
        </div>
    </div>

    <div class="footer">
        <footer class="text-center text-lg-start text-white bg-dark">

            <section class="d-flex justify-content-between p-4 bg-info">
                <div class="me-5">
                    <span style="color: black;">Get connected with us on social networks:</span>
                </div>
                <div class="px-5 d-flex align-items-center">
                    <a href="https://www.hoyolab.com/accountCenter/postList?id=172534910" target="_blank">
                        <img src="assets/icons/icons8-hoyolab-64.png" alt="" width="43px" height="43px" style="margin-right: 10px;">
                    </a>
                    <a href="https://www.facebook.com/HonkaiStarRail/" target="_blank">
                        <img src="assets\icons\icons8-facebook-50.png" alt="" width="43px" height="43px" style="margin-right: 10px;">
                    </a>
                    <a href="https://www.instagram.com/honkaistarrail/" target="_blank">
                        <img src="assets/icons/icons8-instagram-50.png" alt="" width="43px" height="43px" style="margin-right: 10px;">
                    </a>
                    <a href="https://twitter.com/honkaistarrail" target="_blank">
                        <img src="assets/icons/icons8-twitter-50.png" alt="" width="43px" height="43px" style="margin-right: 10px;">
                    </a>
                    <a href="https://www.youtube.com/channel/UC2PeMPA8PAOp-bynLoCeMLA" target="_blank">
                        <img src="assets/icons/icons8-youtube-50.png" alt="" width="43px" height="43px" style="margin-right: 10px;">
                    </a>
                </div>
            </section>

            <section class="">
                <div class="container text-center text-md-start mt-5">
                    <div class="row mt-3">
                        <div class="col-md-4 col-lg-4 col-xl-3 mx-auto mb-4">
                            <img src="assets/Honkai-Star-Rail_copy.png" alt="">
                        </div>
                        <div class="col-md-3 col-lg-4 col-xl-3 ml-0 mr-auto mb-4">
                            <p>
                                Honkai: Star Rail is a turn-based space fantasy RPG developed and published by HoYoverse for PC, PS5, and iOS/Android platforms.
                                Come aboard with us on the Astral Express, Trailblazers!
                            </p>
                        </div>
                        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                            <img src="assets/icons/Teen.svg" alt="" width="100%" height="90%">
                        </div>
                    </div>
                </div>
            </section>
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
                © 2023 Copyright:
                <a class="text-white" href="https://hsr.hoyoverse.com/en-us/home?utm_source=hsrofficialweb&utm_medium=fab&utm_campaign=button">HoYoverse</a>
            </div>
        </footer>
    </div>
</body>

</html>
