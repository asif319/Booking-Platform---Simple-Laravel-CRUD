<!DOCTYPE html>
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <title>Company</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/colors/main.css" id="colors">

</head>

<body>

<!-- Wrapper -->
<div id="wrapper">


    <!-- Content
    ================================================== -->

    <!-- Coming Soon Page -->
    <div class="coming-soon-page" style="background-image: url(images/main-search-background-01.jpg)">
        <div class="container">
            <!-- Search -->
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <img src="images/meeters.png" alt="">

                    <h3>We are launching Listings soon!</h3>

                    <!-- Countdown -->
                    <div id="countdown" class="margin-top-10 margin-bottom-35"></div>
                    <!-- Countdown / End -->

                    <br>

                    <div class="main-search-input gray-style margin-top-30 margin-bottom-10">
                        <div class="main-search-input-item">
                            <input type="text" placeholder="Your email address" value=""/>
                        </div>
                        <button class="button">Notify Me</button>
                    </div>

                </div>
            </div>
            <!-- Search Section / End -->
        </div>
    </div>
    <!-- Coming Soon Page / End -->

</div>
<!-- Wrapper / End -->



<!-- Scripts
================================================== -->
<script type="text/javascript" src="scripts/jquery-2.2.0.min.js"></script>
<script type="text/javascript" src="scripts/mmenu.min.js"></script>
<script type="text/javascript" src="scripts/chosen.min.js"></script>
<script type="text/javascript" src="scripts/slick.min.js"></script>
<script type="text/javascript" src="scripts/rangeslider.min.js"></script>
<script type="text/javascript" src="scripts/magnific-popup.min.js"></script>
<script type="text/javascript" src="scripts/waypoints.min.js"></script>
<script type="text/javascript" src="scripts/counterup.min.js"></script>
<script type="text/javascript" src="scripts/jquery-ui.min.js"></script>
<script type="text/javascript" src="scripts/tooltips.min.js"></script>
<script type="text/javascript" src="scripts/custom.js"></script>

<!-- Countdown Script -->
<script type="text/javascript" src="scripts/jquery.countdown.min.js"></script>
<script type="text/javascript">
    $("#countdown")
        .countdown('2019/12/12', function(event) {
            var $this = $(this).html(event.strftime(''
                + '<div><span>%D</span>  <i>Days</i></div>'
                + '<div><span>%H</span> <i>Hours</i></div> '
                + '<div><span>%M</span> <i>Minutes</i></div> '
                + '<div><span>%S</span> <i>Seconds</i></div>'
            ));
        });
</script>


</body>
</html>