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
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css" type="text/css" />
    <link rel="stylesheet" href="css/material-design-icons/material-design-icons.css" type="text/css" />
    <link rel="stylesheet" href="css/bootstrap/dist/css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="css/styles/app.css" type="text/css" />
    <link rel="stylesheet" href="css/styles/style.css" type="text/css" />
    <link rel="stylesheet" href="css/styles/font.css" type="text/css" />
    <link rel="stylesheet" href="libs/owl.carousel/dist/assets/owl.carousel.min.css" type="text/css" />
    <link rel="stylesheet" href="libs/owl.carousel/dist/assets/owl.theme.css" type="text/css" />
    <link rel="stylesheet" href="libs/mediaelement/build/mediaelementplayer.min.css" type="text/css" />
    <link rel="stylesheet" href="libs/mediaelement/build/mep.css" type="text/css" />
</head>

<body>
    <div class="app black dk" id="app">
        <div id="content" class="app-content" role="main">
            <div class="app-header black dk box-shadow-z1">
                <div class="navbar">
                    <a data-toggle="collapse" data-target="#navbar" class="navbar-item pull-right hidden-md-up m-r-0 m-l">
                        <i class="material-icons">menu</i>
                    </a>

                    <a href="index.php" class="navbar-brand md">
                        <img src="images/logo.svg" height="50px" width="auto" alt="AlphaCoon">
                    </a>

                    <ul class="nav navbar-nav pull-right">
                        <li class="nav-item">
                            <a href="#contact" class="nav-link">
                                Contact us
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="https://discord.com/api/oauth2/authorize?client_id=1076482080348844123&permissions=8&scope=bot%20applications.commands" class="nav-link">
                                <span class="btn btn-sm rounded primary _600">
                                    Invite
                                </span>
                            </a>
                        </li>
                    </ul>

                    <div class="collapse navbar-toggleable-sm l-h-0 text-center" id="navbar">
                        <ul class="nav navbar-nav nav-md inline text-primary-hover">
                            <li class="nav-item">
                                <a href="index.php" class="nav-link">
                                    <span class="nav-text">Home</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#activities" class="nav-link">
                                    <span class="nav-text">Activities</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#favourites" class="nav-link">
                                    <span class="nav-text">Favourites</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#teams" class="nav-link">
                                    <span class="nav-text">Teams</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
			<div class="app-footer app-player black dk bg">
			  <div class="playlist" style="width:100%"></div>
			</div>
            <div class="app-body black">
                <div class="page-bg" data-stellar-ratio="2" style="background-image: url('images/bg.png')"></div>
                <div class="page-content">
                    <div class="row-col">
                        <div class="col-lg-2"></div>
                        <div class="col-lg-8 text-center">
                            <div class="p-a-lg">
                                <h2 class="display-4 m-t-lg">Music Never Dies!</h2>
                                <p class="text-muted m-b">Discover endless musical excitement on AlphaCoon! A diverse mix of global genres including indie,<br>alternative, electronic, and hip hop. Join the journey of musical discovery with AlphaCoon.</p><br>
                                <a href="https://discord.com/api/oauth2/authorize?client_id=1076482080348844123&permissions=8&scope=bot%20applications.commands" class="btn circle btn-outline b-primary m-b p-x-md">Invite our bot</a>
                            </div>
                        </div>
                        <div class="col-lg-2"></div>
                    </div>
                    <div class="p-x">
                        <div class="row-col">
                            <div class="col-lg-9 b-r no-border-md">
                                <div class="padding">
                                    <h2 id="activities" class="widget-title h2 m-b">Activities</h2>
                                    <div class="owl-carousel owl-theme owl-dots-center" data-ui-jp="owlCarousel" data-ui-options="{
											margin: 20,
											responsiveClass:true,
											responsive:{
												0:{
													items: 2
												},
												543:{
													items: 4
												}
											}
										}">
                                        <?php
												// Connect to the database
												$servername = "localhost";
												$username = "root";
												$password = "";
												$dbname = "alpha";

												$conn = mysqli_connect($servername, $username, $password, $dbname);
												if (!$conn) {
												  die("Connection failed: " . mysqli_connect_error());
												}

												$sql = "SELECT title, description, image_url FROM activities ORDER BY id DESC";
												$result = mysqli_query($conn, $sql);

												if (mysqli_num_rows($result) > 0) {
													while($row = mysqli_fetch_assoc($result)) {
														echo "<div class='item r' data-id='item-5'>";
														echo "<div class='item-media item-media-4by3'>";
														echo "<a href='#' class='item-media-content' style='background-image: url(".$row['image_url'].");'></a>";
														
														echo "</div>";
														echo "<div class='item-info'>";
														echo "<div class='item-title text-ellipsis'>";
														echo "<a href='#'>".$row['title']."</a>";
														echo "</div>";
														echo "<div class='item-author text-sm text-ellipsis'>";
														echo "<a href='#' class='text-muted'>".$row['description']."</a>";
														echo "</div>";
														echo "</div>";
														echo "</div>";
													}
												} else {
													echo "0 results";
												}


												mysqli_close($conn);
										?>
                                        <div class="">
                                            <div class="item r" data-id="item-11">
                                                <div class="item-media item-media-4by3">
                                                    <a href="#" class="item-media-content" style="background-image: url('images/b1.jpg');"></a>

                                                </div>
                                                <div class="item-info">
                                                    <div class="item-title text-ellipsis">
                                                        <a href="#">Pertama kali Deana di Habcoon</a>
                                                    </div>
                                                    <div class="item-author text-sm text-ellipsis ">
                                                        <a href="#" class="text-muted">Kayi nervous</a>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>

                                    <h2 id="favourites" class="widget-title h4 m-b">Our Favourites</h2>
                                    <div class="row item-list item-list-md m-b">
                                        <?php
													// Connect to the database
													$servername = "localhost";
													$username = "root";
													$password = "";
													$dbname = "alpha";

													$conn = mysqli_connect($servername, $username, $password, $dbname);
													if (!$conn) {
													  die("Connection failed: " . mysqli_connect_error());
													}
													
													$sql = "SELECT * FROM tracks ORDER BY id DESC LIMIT 10";
													$result = mysqli_query($conn, $sql);

													if (mysqli_num_rows($result) > 0) {
														while ($row = mysqli_fetch_assoc($result)) {
														$id = $row["id"];
														$title = $row["title"];
														$artist = $row["artist"];
														$artwork = $row["artwork"];

														echo "<div class=\"col-sm-6\">
															<div class=\"item r\" data-id=\"item-$id\">
																<div class=\"item-media\">
																	<a href=\"#\" target=\"_blank\" class=\"item-media-content\" style=\"background-image: url('$artwork');\"></a>
																</div>
																<div class=\"item-info\">
																	<div class=\"item-overlay bottom text-right\">
																		<a href=\"#\" class=\"btn-favorite\"><i class=\"fa fa-heart\"></i></a>
																	</div>
																	<div class=\"item-title text-ellipsis\">
																		<a href=\"#\">$title</a>
																	</div>
																	<div class=\"item-author text-sm text-ellipsis \">
																		<a href=\"#\" class=\"text-muted\">$artist</a>
																	</div>
																</div>
															</div>
														</div>";
													}
													} else {
														echo "0 results";
													}


													mysqli_close($conn);
										?>
                                    </div>
                                    <br><br>
                                    <h2 id="teams" class="widget-title h4">Our Teams</h2>
                                    <p class="item-desc text-ellipsis text-muted m-b" data-ui-toggle-class="text-ellipsis">Introducing the talented and dedicated team that brings AlphaCoon to life!</p>
                                    <div class="row item-list m-b">
                                        <div class="col-xs-6 col-md-4">
                                            <div class="box text-center">
                                                <div class="p-a-md">
                                                    <p><img src="https://i.imgur.com/IFFtmjY.jpg" alt="." class="img-circle w-56"></p>
                                                    <a href="https://habcoon.com/profile/khai" class="text-md block">Alpha Khai</a>
                                                    <span class="label blue-grey primary">Staff</span>
                                                    <small class="text-muted">Perak, Malaysia</small>
                                                    <br><br>
                                                    <small>e s c a p i s m</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-md-4">
                                            <div class="box text-center">
                                                <div class="p-a-md">
                                                    <p><img src="https://i.imgur.com/UJlJeZF.gif" alt="." class="img-circle w-56"></p>
                                                    <a href="https://habcoon.com/profile/chan" class="text-md block">Alpha Chan</a>
                                                    <span class="label blue-grey primary">Staff</span>
                                                    <small class="text-muted">Perak, Malaysia</small>
                                                    <br><br>
                                                    <small>anti ti ti fragile</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-md-4">
                                            <div class="box text-center">
                                                <div class="p-a-md">
                                                    <p><img src="https://i.imgur.com/UJlJeZF.gif" alt="." class="img-circle w-56"></p>
                                                    <a href="https://habcoon.com/profile/miso" class="text-md block">Alpha Miso</a>
                                                    <span class="label blue-grey primary">Staff</span>
                                                    <small class="text-muted">Selangor, Malaysia</small>
                                                    <br><br>
                                                    <small>how's your lungs?</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-md-4">
                                            <div class="box text-center">
                                                <div class="p-a-md">
                                                    <p><img src="https://i.imgur.com/UJlJeZF.gif" alt="." class="img-circle w-56"></p>
                                                    <a href="https://habcoon.com/profile/weng" class="text-md block">Alpha Aweng</a>
                                                    <span class="label blue-grey primary">Staff</span>
                                                    <small class="text-muted">Sabah, Malaysia</small>
                                                    <br><br>
                                                    <small>saya suka hijau</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-md-4">
                                            <div class="box text-center">
                                                <div class="p-a-md">
                                                    <p><img src="../images/shak.png" alt="." class="img-circle w-56"></p>
                                                    <a href="https://habcoon.com/profile/appacem" class="text-md block">Alpha Shak</a>
                                                    <span class="label blue-grey primary">Staff</span>
                                                    <small class="text-muted">Johor, Malaysia</small>
                                                    <br><br>
                                                    <small>Shak buat je!</small>
                                                </div>
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
                                    <h6 class="text text-muted">Request a song</h6>
                                    <form method="post" action="submit_song_request.php">
                                        <p class="text-sm text-muted">Enter your song and title information, your name and your email and make a request.</p>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="song_name" name="song_name" placeholder="Song Name" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="artist_name" name="artist_name" placeholder="Artist Name" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="requester_name" name="requester_name" placeholder="Your Name" required>
                                        </div>
                                        <button type="submit" class="btn danger p-x-md">Submit Request</button>
                                    </form>
									<div class="b-b m-y"></div>
										<p class="text-muted text-xs p-b-lg">2023 &copy; AlphaCoon. All right reserved.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="black dk pos-rlt">
                <div class="p-y-md text-primary-hover">
                    <div class="row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-8">
                            <div class="text-sm-center text-xs-center">
                                <small class="text-muted">2023 &copy; AlphaCoon. All right reserved.</small>
                            </div>
                        </div>
                        <div class="col-sm-2"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="libs/jquery/dist/jquery.js"></script>
    <script src="libs/tether/dist/js/tether.min.js"></script>
    <script src="libs/bootstrap/dist/js/bootstrap.js"></script>
    <script src="libs/jQuery-Storage-API/jquery.storageapi.min.js"></script>
    <script src="libs/jquery.stellar/jquery.stellar.min.js"></script>
    <script src="libs/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="libs/PACE/pace.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/smooth-scroll/16.1.3/smooth-scroll.min.js"></script>

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
    <script src="scripts/app.js"></script>
    <script src="scripts/ajax.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/js/all.min.js"></script>
</body>

</html>