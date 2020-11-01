<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Upload Content Hizb-ur-Rahman</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="playlist.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
    <meta name="robots" content="index,follow"/>
    <link rel="shortcut icon" href="../images/favicon.ico"/>
    <link rel="stylesheet" href="../fonts.googleapis.com/css@family=Lato_3A400,700" type="text/css"/>
    <link rel="stylesheet" href="../css/prettyPhoto.css" type="text/css"/>
    <link rel="stylesheet" href="../css/stratosfera.css" type="text/css"/>
    <link rel="stylesheet" href="../css/style.css" type="text/css"/>
    <!--[if (gte IE 6)&(lte IE 8)]>
    <script src="../https@html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <script type="text/javascript" src="js/selectivizr-min.js"></script>
    <link rel="stylesheet" href="css/ie_7.css" type="text/css"/>
    <![endif]-->
    <script src="../ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
    <script type="text/javascript" src="../js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="../js/jquery-ui-1.8.16.custom.min.js"></script>
    <script type="text/javascript" src="../js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="../js/slides.min.jquery.js"></script>
    <script type="text/javascript" src="../js/jquery.fitvids.js"></script>
    <script type="text/javascript" src="../js/slides.min.jquery.js"></script>
    <script type="text/javascript" src="../js/jquery.animate-colors-min.js"></script>
    <script type="text/javascript" src="../js/jquery.backgroundPosition.js"></script>
    <script type="text/javascript" src="../js/respond.min.js"></script>
    <script type="text/javascript" src="../js/misc.js"></script>
    <script type="text/javascript" src="../js/jquery.quicksand.js"></script>
    <script type="text/javascript" src="../js/quick.js"></script>


    <style>
        .plist-img {
            margin-bottom: 10px;
            max-height: 120px;
            width: 100%;
            height: 120px;
        }

        .foo {
            text-align: center;
        }

        .activepl {
            background-color: #448267 !important;
            color: #fefeff !important;
        }
    </style>

</head>

<body>

<!--BEGIN HEADER-->
<?php include_once("include/header.php"); ?>
<!--EOF HEADER-->

<!-- START CONTENT -->
<section class="container clearfix">
    <!-- START PAGE INFO -->
    <header class="container page_info clearfix">
        <div class="text">
            <h1>Upload Content</h1>
        </div>
        <div class="clear"></div>
    </header>
    <div class="delimiter"></div>
    <!-- END PAGE INFO -->
    <div class="recent_works_left">
        <h2 class="red">Hizb-ur-rahman Content Gallery</h2>
    </div>

</section>


<br><br><br>
<section class="container clearfix"><div class="delimiter"></div></section>

<div class="clearfix">
    <div class="container">
        <div class="recent_works_left">
            <h3 class="blue">اگر آپ کے پاس حضرت پیر سید محمد عبداللہ شاہ قادری ، دربار قادر بخش شریف کے متعلق کوئ وڈیو، تصویر، واقعہ، کتاب، آڈیو کلپ ہو۔ اسے آپلوڈ کریں</h3>
            <h3 class="blue">If you have any video, audio clip, book or story about Darbar Qadar Bakhsh Sharif, please upload</h3>
        </div>
    </div>

    <!-- SUCCESS MESSAGE -->
    <div class="success_box none">
        Email successfully sent. Thank you!
    </div>
    <!-- END SUCCESS MESSAGE -->

    <!-- ERROR MESSAGE -->
    <div class="error_box none">
        Please complete all required fields.
    </div>
    <!-- END ERROR MESSAGE -->


    <div class="container">

        <!-- START CONTACT FORM -->
        <form action="upload.php" class="upload_form" method="post" enctype="multipart/form-data">
            <p>
                <label for="name">Name <span>*</span></label>
                <input class="inputText" type="text" id="name" name="name" />
            </p>
            <div class="clear"></div>
            <p>
                <label for="email">E-mail <span>*</span></label>
                <input class="inputText" type="text" id="email" name="email" />
            </p>
            <div class="clear"></div>
            <p>
                <label for="phone">Phone #</label>
                <input class="inputText" type="text" id="phone" name="phone" />
            </p>
            <div class="clear"></div>
            
            <p class="submit">    
                Select File to Upload:
                <input type="file" name="fileToUpload" id="fileToUpload">
                <input class="button_small red" type="submit" value="Upload File" name="submit">
            </p>
            <div class="clear"></div>

            <p>
                <label for="message">Message <span>*</span></label>
                <textarea class="inputTextarea" rows="3" cols="80" id="message" name="message"></textarea>
            </p>
            <div class="clear"></div>

        </form>
        <!-- END CONTACT FORM -->

    </div>
</div>




<!--BEGIN FOOTER-->
<?php include_once("include/footer.php"); ?>
<!--EOF FOOTER-->
</body>

</html>
