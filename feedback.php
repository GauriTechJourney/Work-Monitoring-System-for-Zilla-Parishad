<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>

<head>
    <title>Setu</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- bootstrap-css -->

    <script type="text/javascript">
        var domain = window.location.hostname
    </script>
    <script type="text/javascript">
        domain
    </script>
    <link rel="stylesheet" href="https://setuonline.com/css/bootstrap.min.css">
    <!-- //bootstrap-css -->
    <!-- Custom CSS -->
    <link href="https://setuonline.com/css/style.css" rel='stylesheet' type='text/css' />

    <!-- font CSS -->
    <!-- font-awesome icons -->


    <link href="https://setuonline.com/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://setuonline.com/css/font.css" type="text/css" />
    <link href="https://setuonline.com/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="https://setuonline.com/css/morris.css" type="text/css" />
    <!-- calendar -->
    <link rel="stylesheet" href="https://setuonline.com/css/monthly.css">
    <!-- //calendar -->
    <!-- //font-awesome icons -->
    <script src="https://setuonline.com/js/jquery2.0.3.min.js"></script>
    <script src="https://setuonline.com/js/raphael-min.js"></script>
    <script src="https://setuonline.com/js/morris.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <style>
        .nicescroll-rails>div {
            width: 15px !important;
        }
        
        .merge-left {
            margin-left: 0px !important;
        }
        
        .Help {
            color: white;
            font-size: 150%;
        }
        
        .helpmar {
            margin-left: 25%;
        }
        
        @media only screen and (max-width: 600px) {
            .brand {
                width: 142px !important;
                height: 58px !important;
            }
            .Help {
                color: white;
                font-size: 119%;
            }
            .helpmar {
                margin-left: 1%;
            }
            .logo {
                font-size: 15px !important;
            }
        }
        
        .buttonCls {
            border-radius: 4px;
            background-color: #f4511e;
            border: none;
            color: #FFFFFF;
            text-align: center;
            font-size: 16px;
            padding-top: -20px;
            width: auto;
            height: 30px;
            transition: all 0.5s;
            cursor: pointer;
            margin-top: -7px;
        }
    </style>


</head>

<body>

    <!--header start-->
    <header class="header fixed-top clearfix" style="background-color: #E69303 !important">
        <!--logo start-->
        <div class="" style="background-color: #E69303 !important;">
            <a href="/ShowForms/Public" class="logo" style="color: white !important">
Public Setu            </a>

        </div>
        <!--logo end-->


        <div class="top-nav clearfix">
            <div class="helpmar">


                <label class="Help"> Help Line :Aurangabad:8080530987  Time : 10am To 06pm </label>

            </div>
            <!--search & user info start-->
            <ul class="nav pull-right top-menu">
            <?php
            // Include navbar.php
            include 'navbar.php';
            // or require 'navbar.php';
        ?>
                <!-- user login dropdown end -->

            </ul>
            <!--search & user info end-->
        </div>
    </header>


    <!-- end: sidebar -->
    <section id="main-content" class="merge-left">
        <section class="wrapper">



            <html>

            <head>
                <meta name="viewport" content="width=device-width" />
                <title>Data Entry</title>
                <style type="text/css">
                    .form-control {
                        width: 75%;
                    }
                    
                    .ui-datepicker select.ui-datepicker-month {
                        color: black !important;
                    }
                    
                    .ui-datepicker select.ui-datepicker-year {
                        color: black !important;
                    }
                </style>
                <style>
                    body {
                        font-family: Arial, Helvetica, sans-serif;
                    }
                    /* The Modal (background) */
                    
                    .modal {
                        display: none;
                        /* Hidden by default */
                        position: fixed;
                        /* Stay in place */
                        z-index: 1;
                        /* Sit on top */
                        padding-top: 100px;
                        /* Location of the box */
                        left: 0;
                        top: 0;
                        width: 100%;
                        /* Full width */
                        height: 100%;
                        /* Full height */
                        overflow: auto;
                        /* Enable scroll if needed */
                        background-color: rgb(0, 0, 0);
                        /* Fallback color */
                        background-color: rgba(0, 0, 0, 0.4);
                        /* Black w/ opacity */
                    }
                    /* Modal Content */
                    
                    .modal-content {
                        position: relative;
                        background-color: #fefefe;
                        margin: auto;
                        padding: 0;
                        border: 1px solid #888;
                        width: 80%;
                        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
                        -webkit-animation-name: animatetop;
                        -webkit-animation-duration: 0.4s;
                        animation-name: animatetop;
                        animation-duration: 0.4s
                    }
                    /* Add Animation */
                    
                    @-webkit-keyframes animatetop {
                        from {
                            top: -300px;
                            opacity: 0
                        }
                        to {
                            top: 0;
                            opacity: 1
                        }
                    }
                    
                    @keyframes animatetop {
                        from {
                            top: -300px;
                            opacity: 0
                        }
                        to {
                            top: 0;
                            opacity: 1
                        }
                    }
                    /* The Close Button */
                    
                    .close {
                        color: white;
                        float: right;
                        font-size: 28px;
                        font-weight: bold;
                    }
                    
                    .close:hover,
                    .close:focus {
                        color: #000;
                        text-decoration: none;
                        cursor: pointer;
                    }
                    
                    .modal-header {
                        padding: 2px 16px;
                        background-color: #5cb85c;
                        color: white;
                    }
                    
                    .modal-body {
                        padding: 2px 16px;
                    }
                    
                    .modal-footer {
                        padding: 2px 16px;
                        background-color: #d19a98;
                        color: white;
                    }
                </style>
                <script src="/Scripts/jquery-3.3.1.min.js"></script>
                <script type="text/javascript" src="http://ajax.cdnjs.com/ajax/libs/json2/20110223/json2.js"></script>
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />

                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
                <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


                <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" />
                <link href="/js/bootstrap-datepicker.min.css" rel="stylesheet" />
                <script src="/js/bootstrap-datepicker.min.js"></script>

                <script type="text/javascript">
                </script>
                <style>
                    nav ul {
                        list-style: none;
                        padding: 0;
                        margin: 0;
                    }
                    
                    nav li {
                        display: inline;
                        border: solid;
                        /*border-width: 1px 1px 0 1px;*/
                        margin: 0 5px 0 0;
                        margin: 9px 5px 0 4px;
                        padding: 7px 0px 6px 5px;
                        cursor: pointer;
                    }
                    
                    nav li a {
                        padding: 0 10px;
                    }
                    
                    #content {
                        border: 1px solid;
                    }
                    
                    #selected {
                        padding-bottom: 1px;
                        background: white;
                    }
                    
                    #header li {
                        float: left;
                        border: 1px solid;
                        border-bottom-width: 0;
                        margin: 0 5px 0 0;
                    }
                    
                    #content {
                        border: 1px solid;
                        clear: both;
                    }
                    
                    h1 {
                        margin: 0;
                        padding: 0 0 10px 0;
                    }
                    
                    #selected {
                        position: relative;
                        top: 1px;
                        background: white;
                    }
                </style>
            </head>

            <body>
            
                

                       
<form  method='POST' id='frm'>
    <section class='body'>
        <div class='inner-wrapper' style='padding-top: 0px;'>
            <div class='col-md-12'>
                <div>
                    <section class='panel'>
                        <header class='panel-heading' style='background:transparent'>
                            <div class='panel-actions'>
                                <a href='#' class=''></a>
                            </div>
                            <h2 class='panel-title'>Feed Back</h2>
                        </header>
                        <div class='panel-body '>
                            <div class='col-sm-4 panel-body' id='Name11'>
                                <div class=''>
                                    <label for="Name" class="control-label" id="lblName">Name</label>
                                    <span style=color:red class='control-label'>*</span>
                                    <input name="Name" class="form-control" id="Name" required type="text">
                                </div>
                            </div>
                            <div class='col-sm-4 panel-body' id='Mobile11'>
                                <div class=''>
                                    <label for="Mobile" class="control-label" id="lblMobile">Mobile</label>
                                    <span style=color:red class='control-label'>*</span>
                                    <input name="Mobile" class="form-control" id="Mobile" required type="number">
                                </div>
                            </div>
                            <div class='row' id='Email1112'>
                                <div class='col-sm-4 panel-body' id='Email11'>
                                    <div class=''></div>
                                    <label for="Email" class="control-label" id="lblEmail">Email</label>
                                    <span style=color:red class='control-label'></span>
                                    <input name="Email" class="form-control" required id="Email" type="text">
                                </div>
                            </div>
                            <div class='col-sm-4 panel-body' id='Description11'>
                                <div class=''>
                                    <label for="Description" class="control-label" id="lblDescription">Description</label>
                                    <span style=color:red class='control-label'>*</span>
                                    <textarea name="Description" required class="req form-control" id="Description" rows="4" style="width:100%;"></textarea>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class='row'>
                    <div class='form-group col-sm-12 panel-body' style='text-align: center;'>
                        <button id="jj"  type="submit">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</form>
                       


                      

        



            </section>
            <div class="footer" style="background-color: #E69303 !important">
                <div class="wthree-copyright">
                    <p style="color: Yellow !important">&copy; 2024 - &#169; 2020 - All Rights Reserved.</p>

                    <div class="logo">
                        <u><a href="/ShowForms/Public" style="color: black;">Home</a></u>&nbsp;&nbsp;
                        <u><a href="/Privacy/AboutUs" style="color: black;">About US</a></u>&nbsp;&nbsp;
                        <u><a href="/Privacy/ContactUs" style="color: black;">Contact US</a></u>&nbsp;&nbsp;
                        <u><a href="/OtherGenricInsert/Index?Formid=2523&ID=0" style="color: black;">Feedback</a></u>&nbsp;&nbsp;
                        <u><a href="/Privacy/PrivacyPolicy" style="color: black;">Privacy Policy</a></u>&nbsp;&nbsp;
                        <u><a href="/Privacy/Refund" style="color: black;">Refund and Cancellation Policy</a></u>&nbsp;&nbsp;
                        <u><a href="/Privacy/TermsAndConditions" style="color: black;">Terms And Conditions</a></u>&nbsp;&nbsp;
                    </div>
                </div>
            </div>
        </section>



        <script src="https://setuonline.com/js/jquery.dcjqaccordion.2.7.js"></script>
        <script src="https://setuonline.com/js/scripts.js"></script>
        <script src="https://setuonline.com/js/jquery.slimscroll.js"></script>
        <script src="https://setuonline.com/js/jquery.nicescroll.js"></script>
        <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
        <script src="https://setuonline.com/js/jquery.scrollTo.js"></script>
        <script src="https://setuonline.com/assets/javascripts/dashboard/examples.dashboard.js"></script>
        <script src="https://gisttrans.maharashtra.gov.in/Transliteration/js/CDAC-Typing.min.js" type="text/javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.2/rollups/aes.js"></script>
       
        <!-- calendar -->
        <script type="text/javascript" src="/js/monthly.js"></script>
        <script>
    document.getElementById('frm').addEventListener('submit', function(event) {
        // Prevent the form from submitting
        event.preventDefault();
        
        // Display the alert
        alert('Form submitted successfully!');
    });
</script>


      
        <!-- //calendar -->
</body>

</html>