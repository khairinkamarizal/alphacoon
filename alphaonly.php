<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>AlphaCoon - Music Never Dies</title>
    <meta name="description" content="Unleash Your Inner Alpha with AlphaCoon!" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-barstyle" content="black-translucent">
    <link rel="apple-touch-icon" href="images/favicon.png">
    <meta name="apple-mobile-web-app-title" content="AlphaCoon">
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="shortcut icon" sizes="196x196" href="images/favicon.png">
    <link rel="stylesheet" href="css/material-design-icons/material-design-icons.css" type="text/css" />
    <link rel="stylesheet" href="css/bootstrap/dist/css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="css/styles/app.css" type="text/css" />
    <link rel="stylesheet" href="css/styles/style.css" type="text/css" />
    <link rel="stylesheet" href="css/styles/font.css" type="text/css" />
    <link rel="stylesheet" href="libs/owl.carousel/dist/assets/owl.carousel.min.css" type="text/css" />
    <link rel="stylesheet" href="libs/owl.carousel/dist/assets/owl.theme.css" type="text/css" />
    <link rel="stylesheet" href="libs/mediaelement/build/mediaelementplayer.min.css" type="text/css" />
    <link rel="stylesheet" href="libs/mediaelement/build/mep.css" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
</head>
<div class="app black" id="app">
    <div id="schedule" class="modal fade animate" data-backdrop="true">
        <div class="modal-dialog" id="animate">
            <div class="modal-content box-shadow-md black ">
                <div class="modal-header">
                    <h5 class="modal-title">Schedule</h5>
                </div>
                <div class="padding-x">
                    <ul class="timeline-center">
                        <li class="tl-item">
                            <div class="tl-wrap b-danger">
                                <span class="tl-date text-muted">8.00AM - 12.00PM</span>
                                <div class="tl-content">
                                    Pagi Santai
                                </div>
                            </div>
                        </li>
                        <li class="tl-item">
                            <div class="tl-wrap b-danger">
                                <span class="tl-date text-muted">12.00PM - 6.00PM</span>
                                <div class="tl-content">
                                    Kehidupan Bahagia
                                </div>
                            </div>
                        </li>
                        <li class="tl-item">
                            <div class="tl-wrap b-danger">
                                <span class="tl-date text-muted">6.00PM - 12.00AM</span>
                                <div class="tl-content">
                                    Malaikat Malam
                                </div>
                            </div>
                        </li>
                        <li class="tl-item">
                            <div class="tl-wrap b-danger">
                                <span class="tl-date text-muted">12.00AM - 8.00AM</span>
                                <div class="tl-content">
                                    Burung Hantu
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
    <div id="m-a-a" class="modal fade animate" data-backdrop="true">
        <div class="modal-dialog" id="animate">
            <div class="modal-content box-shadow-md black ">
                <div class="modal-header">
                    <h5 class="modal-title">Request a Song!</h5>
                </div>
                <div class="center-block w-xxl w-auto-xs text-center">
                    <form method="post" action="submit_song_request.php">
                        <div class="modal-body text-center p-lg">
                            <p>Enter your song and title information, your name and your email and make a request.</p>

                            <div class="form-group">
                                <input type="text" class="form-control" id="song_name" name="song_name" placeholder="Song Name" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="artist_name" name="artist_name" placeholder="Artist Name" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="requester_name" name="requester_name" placeholder="Your Name" required>
                            </div>

                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn white p-x-md" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn danger p-x-md">Submit Request</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <div id="aside" class="app-aside modal fade nav-dropdown">
        <div class="left navside grey dk" data-layout="column">
            <div class="navbar no-radius">
                <a href="index.php" class="navbar-brand md">
                    <img src="images/logo.svg" alt="AlphaCoon">
                </a>
            </div>
            <div data-flex class="hide-scroll">
                <nav class="scroll nav-stacked nav-active-primary">

                    <ul class="nav" data-ui-nav>
                        <li class="nav-header hidden-folded">
                            <span class="text-xs text-muted">Main</span>
                        </li>
                        <li>
                            <a href="index.php">
                                <span class="nav-icon">
                                    <i class="material-icons">
                                        home
                                    </i>
                                </span>
                                <span class="nav-text">Home</span>
                            </a>
                        </li>
                        <li>
                            <a href="#schedule" data-toggle="modal" data-target="#schedule" data-ui-toggle-class="fade-up" data-ui-target="#animate">
                                <span class="nav-icon">
                                    <i class="material-icons">
                                        schedule
                                    </i>
                                </span>
                                <span class="nav-text">Schedule</span>
                            </a>
                        </li>
                        <li>
                            <a href="#m-a-a" data-toggle="modal" data-target="#m-a-a" data-ui-toggle-class="fade-up" data-ui-target="#animate">
                                <span class="nav-icon">
                                    <i class="material-icons">
                                        library_music
                                    </i>
                                </span>
                                <span class="nav-text">Request a song</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://paypal.me/khairinkamarizal" target="_blank">
                                <span class="nav-icon">
                                    <i class="material-icons">
                                        payment
                                    </i>
                                </span>
                                <span class="nav-text">Donate</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav" data-ui-nav>
                        <li class="nav-header hidden-folded">
                            <span class="text-xs text-muted">Community</span>
                        </li>
                        <li>
                            <a href="team.php" target="_blank">
                                <span class="nav-icon">
                                    <i class="fa fa-people-group"></i>
                                </span>
                                <span class="nav-text">Our Teams</span>
                            </a>
                        </li>
                        <li>
                            <a href="shop.php" target="_blank">
                                <span class="nav-icon">
                                    <i class="fa fa-shopping-bag"></i>
                                </span>
                                <span class="nav-text">Shop</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://discordapp.com/users/398058083496230935" target="_blank">
                                <span class="nav-icon">
                                    <i class="fa fa-newspaper"></i>
                                </span>
                                <span class="nav-text">Advertise</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav" data-ui-nav>
                        <li class="nav-header hidden-folded">
                            <span class="text-xs text-muted">Socials</span>
                        </li>
                        <li>
                            <a href="https://discord.gg/NVZtmNm3nJ" target="_blank">
                                <span class="nav-icon">
                                    <i class="fab fa-discord"></i>
                                </span>
                                <span class="nav-text">Discord</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.tiktok.com/@alphacoon" target="_blank">
                                <span class="nav-icon">
                                    <i class="fab fa-tiktok"></i>
                                </span>
                                <span class="nav-text">TikTok</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://open.spotify.com/playlist/4OYvlLEd35NrvS2BIEo1tY?si=a42688155342415b" target="_blank">
                                <span class="nav-icon">
                                    <i class="fab fa-spotify"></i>
                                </span>
                                <span class="nav-text">Spotify</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <div id="content" class="app-content white bg box-shadow-z2" role="main">
        <div class="app-header hidden-lg-up white lt box-shadow-z1">
            <div class="navbar">
                <a href="index.php" class="navbar-brand md">
                    <img src="images/logo.svg" width="115px" height="auto" alt="." class="show">
                </a>
                <ul class="nav navbar-nav pull-right">
                    <li class="nav-item">
                        <a data-toggle="modal" data-target="#aside" class="nav-link">
                            <i class="material-icons">menu</i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="app-body" id="view">

            <div class="page-bg" data-stellar-ratio="2" style="background-image: url('images/bg.png');"></div>
            <div class="page-content">
                <div class="row-col">
                    <div class="col-lg-9 b-r no-border-md">
                        <div class="padding">
                            <div class="row-col">
                                <div class="col-xs-6 col-sm-4">
                                    <h2 class="widget-title h2">Activities</h2>
                                    <p>Enter your Title with description and image URL</p>
                                    <p><b>Tutorial: </b><a href="#">COMING SOON</a></p>
                                    <div class="p-r-lg">
                                        <form method="post" action="submit_activities.php">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Title" id="title" name="title" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Description" id="description" name="description" required>
                                            </div>
                                            <div class="form-group m-b-md">
                                                <input type="text" class="form-control" placeholder="Image URL" id="image_url" name="image_url" required>
                                            </div>
                                            <button type="submit" class="btn danger p-x-lg">Submit</button>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-4">
                                    <h2 class="widget-title h2">Products</h2>
                                    <p>Enter the products information</p>
                                    <p><b>Tutorial: </b><a href="#">COMING SOON</a></p>
                                    <div class="p-r-lg">
                                        <form method="post" action="submit_product.php">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Title" id="title" name="title" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Collection" id="collection" name="collection" required>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group">
                                                        <input type="number" class="form-control" placeholder="Price" id="price" name="price" min="50" max="1500" required>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    <div class="form-group m-b-md">
                                                        <input type="text" class="form-control" placeholder="Image URL" id="image_url" name="image_url" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn danger p-x-lg">Submit</button>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-4">
                                    <h2 class="widget-title h2 ">Favourites</h2>
                                    <p>Enter the Spotify Track URL</p>
                                    <p><b>Tutorial: </b><a href="#">COMING SOON</a></p>
                                    <div class="p-r-lg">
                                        <form method="post" action="submit_favourites.php">
                                            <div class="form-group m-b-md">
                                                <input type="text" class="form-control" placeholder="Track URL" id="track_url" name="track_url" required>
                                            </div>
                                            <button type="submit" class="btn danger p-x-lg">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 w-xxl w-auto-md">
                        <div class="padding" style="bottom: 60px;" data-ui-jp="stick_in_parent">
                            <h6 class="text text-muted">Schedule</h6>
                            <div class="row item-list item-list-sm m-b">
                                <div class="col-xs-12">
                                    <div class="item r" data-id="item-1">
                                        <div class="item-media ">
                                            <a href="#" class="item-media-content" style="background-image: url('images/b8.jpg');"></a>
                                        </div>
                                        <div class="item-info">
                                            <div class="item-title text-ellipsis">
                                                <a href="#">8.00AM - 12.00PM</a>
                                            </div>
                                            <div class="item-author text-sm text-ellipsis ">
                                                <a href="#" class="text-muted">Pagi Santai</a>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="item r" data-id="item-10">
                                        <div class="item-media ">
                                            <a href="#" class="item-media-content" style="background-image: url('images/b8.jpg');"></a>
                                        </div>
                                        <div class="item-info">
                                            <div class="item-title text-ellipsis">
                                                <a href="#">12.00PM - 6.00PM</a>
                                            </div>
                                            <div class="item-author text-sm text-ellipsis ">
                                                <a href="#" class="text-muted">Kehidupan Bahagia</a>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="item r" data-id="item-4">
                                        <div class="item-media ">
                                            <a href="#" class="item-media-content" style="background-image: url('images/b8.jpg');"></a>
                                        </div>
                                        <div class="item-info">
                                            <div class="item-title text-ellipsis">
                                                <a href="#">6.00PM - 12.00AM</a>
                                            </div>
                                            <div class="item-author text-sm text-ellipsis ">
                                                <a href="#" class="text-muted">Malaikat Malam</a>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="item r" data-id="item-9">
                                        <div class="item-media ">
                                            <a href="#" class="item-media-content" style="background-image: url('images/b8.jpg');"></a>
                                        </div>
                                        <div class="item-info">
                                            <div class="item-title text-ellipsis">
                                                <a href="#">12.00AM - 8.00AM</a>
                                            </div>
                                            <div class="item-author text-sm text-ellipsis ">
                                                <a href="#" class="text-muted">Burung Hantu</a>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div style="margin-top: 20px;">
                                <div class="playlist"></div>
                            </div>
                            <div class="b-b m-y"></div>
                            <p class="text-muted text-xs p-b-lg">2023 &copy; AlphaCoon. All right reserved.</p>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <script src="libs/jquery/dist/jquery.js"></script>
    <script src="libs/tether/dist/js/tether.min.js"></script>
    <script src="libs/bootstrap/dist/js/bootstrap.js"></script>
    <script src="libs/jQuery-Storage-API/jquery.storageapi.min.js"></script>
    <script src="libs/jquery.stellar/jquery.stellar.min.js"></script>
    <script src="libs/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="libs/PACE/pace.min.js"></script>
    <script src="libs/jquery-pjax/jquery.pjax.js"></script>

    <script src="libs/mediaelement/build/mediaelement-and-player.min.js"></script>
    <script src="libs/mediaelement/build/mep.js"></script>
    <script src="scripts/player.js"></script>

    <script src="scripts/config.lazyload.js"></script>
    <script src="scripts/ui-load.js"></script>
    <script src="scripts/ui-jp.js"></script>
    <script src="scripts/ui-include.js"></script>
    <script src="scripts/ui-device.js"></script>
    <script src="scripts/ui-nav.js"></script>
    <script src="scripts/ui-toggle-class.js"></script>
    <script src="scripts/ui-taburl.js"></script>
    <script src="scripts/app.js"></script>
    <script src="scripts/ajax.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/js/all.min.js"></script>
</body>

</html>