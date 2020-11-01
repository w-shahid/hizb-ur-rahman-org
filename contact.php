<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
    <title>Contact Us</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="robots" content="index,follow" />
    <link rel="shortcut icon" href="images/favicon.ico" />
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:400,700" type="text/css" />
    <link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" />
    <link rel="stylesheet" href="css/stratosfera.css" type="text/css" />
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <!--[if (gte IE 6)&(lte IE 8)]>
    <script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <script type="text/javascript" src="js/selectivizr-min.js"></script>
    <link rel="stylesheet" href="css/ie.css" type="text/css" />
    <![endif]-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.8.16.custom.min.js"></script>
    <script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="js/jquery.fitvids.js"></script>
    <script type="text/javascript" src="js/jquery.animate-colors-min.js"></script>
    <script type="text/javascript" src="js/jquery.backgroundPosition.js"></script>
    <script type="text/javascript" src="js/respond.min.js"></script>
    <script type="text/javascript" src="js/misc.js"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
    <script type="text/javascript">
        // <![CDATA[
        var TMap = {"zoom":12,"marker":{"latitude":
            30.666967 ,"longitude":72.688293,"description":"<b>Hizb-ur-Rahman Acadmey</b><br />Phone: +92321-5663512 <br />+92321-5372274 "}};


        $(document).ready(function() {

            $('#name').focus(function() {
                $(this).removeClass('error_class');
            });

            $('#email').focus(function() {
                $(this).removeClass('error_class');
            });

            $('#message').focus(function() {
                $(this).removeClass('error_class');
            });

            $('.contact_form').submit(function() {

                hasError = false;

                if($('#name').val() == '')
                {
                    $('#name').addClass('error_class');
                    hasError = true;
                }

                var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;

                var emailaddressVal = $('#email').val();
                if(emailaddressVal == '')
                {
                    $('#email').addClass('error_class');
                    hasError = true;
                }
                else if(!emailReg.test(emailaddressVal))
                {
                    $('#email').addClass('error_class');
                    hasError = true;
                }

                if($('#email').val() == '')
                {
                    $('#email').addClass('error_class');
                    hasError = true;
                }

                if($('#message').val() == '')
                {
                    $('#message').addClass('error_class');
                    hasError = true;
                }

                if( hasError == true)
                {
                    $('.info_box').hide();
                    $('.error_box').show();
                }
                else
                {
                    $.ajax({
                        type: 'POST',
                        url: 'contact_email.php',
                        cache: false,
                        data: $(".contact_form").serialize(),
                        success: function(data)
                        {
                            if(data == "error")
                            {
                                $('.success_box').hide();
                                $('.error_box').show();
                            }
                            else
                            {
                                $('#name').val('');
                                $('#email').val('');
                                $('#message').val('');
                                $('#phone').val('');
                                $('.error_box').hide();
                                $('.success_box').show();
                            }
                        }
                    });
                }

                return false;
            });
        });
        // ]]>	
    </script>

    <script src="js/map.js" type="text/javascript"></script>
</head>
<body>
<!-- START HEADER -->
<?php include_once("include/header.php"); ?>
<!-- END HEADER -->

<!-- START CONTENT -->
<section class="container clearfix">

    <div class="delimiter"></div>
    <!-- END PAGE INFO -->

    <div class="padding15"></div>

    <!-- START COL 1/3 -->
    <div class="col_1_3">
        <h1 class="red">Locate Us</h1>

        <p>
            <strong>Adress:</strong> Hizb-ur-Rahman Islamic Acadmey <br />
            <strong>Phone 1:</strong> +92-321-5663512 <br />
            <strong>Phone 2:</strong> +92-321-5372274 <br />
            <strong>Email:</strong> <a href="mailto:waqas.shahid@hizb-ur-rahman.org">waqas.shahid@hizb-ur-rahman.org</a> <br />
            <strong>Website:</strong> <a href="http://hizb-ur-rahman.org">http://hizb-ur-rahman.org/</a>
        </p>

        <div class="clear"></div>

        <!-- START GOOGLE MAPS -->
        <div class="contact_map">
            <div id="map_canvas" class="map_canvas"></div>
        </div>
        <!-- END GOOGLE MAPS -->

        <div class="clear"></div>
        <!-- END SOCIALS -->

    </div>
    <!-- END COL 1/3 -->
    <!-- START COL 2/3 LAST -->
    <div class="col_2_3 last">
        <h1 class="red">Contact Hizb-ur-Rahman Acadmey Islamic Scholars</h1>
        <p><font size="4">
                If u want to ask any question regarding Islam and Social issues email us.
        </p>

        <p><font size="4">
                اسلام کے مطابق کسی بھی سوال یا روز مرہ رہنمائ کے لۓ اسلامی سکالرز سے رابطہ کريں
        </p>

        <p class="required_info"><font size="1">Required fields are marked <span>*</span></p>

        <div class="line"></div>

        <div class="padding15"></div>

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

        <div class="padding15"></div>

        <!-- START CONTACT FORM -->
        <form action="#" class="contact_form">
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
            <p>
                <label for="message">Message <span>*</span></label>
                <textarea class="inputTextarea" cols="88" rows="6" id="message" name="message"></textarea>
            </p>
            <div class="clear"></div>
            <p class="submit">
                <a href="javascript:void(0);" class="button_small red" onclick="$('.contact_form').submit();"><span>Send Message</span></a>
            </p>
        </form>
        <!-- END CONTACT FORM -->

    </div>
    <!-- END COL 2/3 LAST -->

    <div class="clear padding20"></div>


</section>
<!-- END CONTENT -->
<!-- START FOOTER -->
<?php include_once("include/footer.php"); ?>
<!-- END FOOTER -->

</body>
</html>