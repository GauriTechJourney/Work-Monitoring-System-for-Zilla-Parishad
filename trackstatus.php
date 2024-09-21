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




            <!DOCTYPE html>

            <html>

            <head>
                <meta name="viewport" content="width=device-width" />
                <title>Track Application</title>
            </head>

            <body>
                <div class="panel-heading">
                    Track Application Details
                </div>
                <div class="form-horizontal">
                    <div class="form-group">
                        <div class="col-md-12">
                            <div class="col-md-6">

                                <label style="color:#000;font-size:140%;">Token No/Registration No:</label>
                                <input type="text" id="Receipt" name="Receipt" class="form-control" />
                            </div>
                            <div class="col-md-12" style="margin-left:0%;margin-top:2%">
                                <input type="submit" id="search" name="search" class="btn btn-primary" value="Search" style="background:#33669E;color:white;" />
                            </div>

                        </div>

                    </div>
                </div>
                <div class="main">
                    <div class="form-group">
                        <div style="text-align: right;margin-right: 20%"><button style="display:none;" id="paynow1" name="paynow1"><a href="/Payment/Amount/" class="btn btn-primary" target="_blanck">Pay Now</a></button></div>

                        <table class="table" id="mytable" name="mytable"></table>
                        <div style="text-align: right;margin-right: 20%"> <button style="display:none;" id="paynow2" name="paynow2"><a href="/Payment/Amount/" class="btn btn-primary" target="_blanck">Pay Now</a></button></div>
                    </div>
                </div>
            </body>

            </html>
            <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
            <link rel="stylesheet" href="/resources/demos/style.css">
            <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
            <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


            <script type="text/javascript">
                $('#search').click(function() {
                    Getdata();
                });

                function Getdata() {
                    debugger;
                    var Recipt = $("#Receipt").val();
                    var uid = "0";
                    $.ajax({
                        type: "GET",
                        url: "/TrackStatus/GetDataUpdate",
                        contentType: "application/json; charset=utf-8",
                        dataType: 'json',
                        data: {
                            UID: uid,
                            ReciptNo: Recipt
                        },
                        success: function(result) {
                            var pay = 0;
                            $("#mytable").empty();
                            $("#mytable").append("<tr style='font-size: 23px;'><th>Application Name</th><th>Update Application</th><th>Update Document</th><th>MOID</th><th>Downlaod Receipt</th></tr>");
                            // if (data.length > 0) {
                            var json = JSON.parse(result.Result1);
                            var json1 = result.MID;
                            $.each(json, function(index, optiondata) {
                                var form = optiondata.form;

                                var Status = optiondata.Status;
                                var formid = optiondata.formid;
                                var ID = optiondata.ID1;
                                var tokenno = optiondata.ID;
                                var doc = optiondata.Doc;
                                var Status1 = optiondata.Status1;
                                var MOID = optiondata.MOID;
                                var Village = optiondata.Village;
                                var comt = optiondata.Comment;
                                var DownloadPaths = optiondata.DownloadPath;
                                var PhotoDocs = optiondata.PhotoDoc;
                                var mids = 0;
                                var alldata = "";

                                var tr1 = "<tr style='font-size: 146%;'>";

                                alldata += "<td>" + form + "</td>";
                                //alldata += "<td>" + Status + "</td>";

                                if ((Status == "paid" || Status == "Verifypending") && (Status1 == "pending" || Status1 == "downloading")) {
                                    alldata += "<td>Your Application Complete</td>";
                                    if (pay == 1) {
                                        $("#paynow1").show();
                                        $("#paynow2").show();
                                    } else {
                                        $("#paynow1").hide();
                                        $("#paynow2").hide();
                                    }
                                    //alldata += "<td><button><a href='/TrackStatus/ReceiptPrint?ID=" + ID + "&frmid=" + formid + "' class='btn btn-primary' target='_blanck'>Downlaod Receipt</a></button></td>";
                                } else if (Status == "Rejected") {
                                    alldata += "<td>Reject Resone :  " + comt + " </td>";
                                    //alldata += "<td><button><a href='/Generic/Index?Formid=" + formid + "&ID=" + ID + "' class='btn btn-primary' target='_blanck'>Update Application</a></button></td>";
                                    if (PhotoDocs == "UploadPhoto") {
                                        alldata += "<td><button><a href='/Generic/Index?Formid=2522&ID=" + ID + "' class='btn btn-primary' target='_blanck'>Update Document</a></button></td>";
                                    } else {
                                        alldata += "<td><button><a href='/UploadDocuments/Index?Formid=" + doc + "&Id=" + ID + "&Documentid=" + Village + "' class='btn btn-primary' target='_blanck'>Update Document</a></button></td>";
                                    }

                                    $("#paynow1").hide();
                                    $("#paynow2").hide();
                                    //alldata += "<td><button><a href='/TrackStatus/ReceiptPrint?ID=" + ID + "&frmid=" + formid + "' class='btn btn-primary' target='_blanck'>Downlaod Receipt</a></button></td>";
                                } else if (Status == "Docpending") {
                                    alldata += "<td><button><a href='/Generic/Index?Formid=" + formid + "&ID=" + ID + "' class='btn btn-primary' target='_blanck'>Update Application</a></button></td>";
                                    alldata += "<td><button><a href='/UploadDocuments/Index?Formid=" + doc + "&Id=" + ID + "&Documentid=" + Village + "' class='btn btn-primary' target='_blanck'>Update Document</a></button></td>";

                                    $("#paynow1").hide();
                                    $("#paynow2").hide();
                                    mids = 1;
                                } else if (Status == "Paymentpending") {
                                    alldata += "<td><button><a href='/Generic/Index?Formid=" + formid + "&ID=" + ID + "' class='btn btn-primary' target='_blanck'>Update Application</a></button></td>";
                                    alldata += "<td><button><a href='/UploadDocuments/Index?Formid=" + doc + "&Id=" + ID + "&Documentid=" + Village + "' class='btn btn-primary' target='_blanck'>Update Document</a></button></td>";

                                    $("#paynow1").show();
                                    $("#paynow2").show();
                                    mids = 1;
                                    pay = 1;
                                } else if (Status1 == "downloaded" && Status == "paid") {

                                    if (DownloadPaths == "") {
                                        alldata += "<td>Your Application Completed</td>";
                                    } else {
                                        alldata += "<td><button><a href='/TrackStatus/download?ID=" + tokenno + "&Filepaths=" + DownloadPaths + "' target='_self'>Download Certificate</a></button></td>";
                                    }


                                    if (pay == 1) {
                                        $("#paynow1").show();
                                        $("#paynow2").show();
                                    } else {
                                        $("#paynow1").hide();
                                        $("#paynow2").hide();
                                    }
                                } else {
                                    if (Status == "" || Status == null) {

                                        alldata += "<td>In  Progress.....</td>";
                                        alldata += "<td></<td>";
                                        $("#paynow1").hide();
                                        $("#paynow2").hide();
                                    } else {
                                        alldata += "<td>" + Status + "</td>";
                                        alldata += "<td></<td>";
                                    }


                                    //alldata += "<td><button><a href='/Generic/Index?Formid=" + formid + "&ID=" + ID + "' class='btn btn-primary' target='_blanck'>Update Application</a></button></td>";
                                    //alldata += "<td><button><a href='/UploadDocuments/Index?Formid=" + doc + "&Id=" + ID + "' class='btn btn-primary' target='_blanck'>Update Document</a></button></td>";
                                    mids = 2;
                                }
                                if (mids == "0") {
                                    alldata += "<td></td>";
                                    alldata += "<td>" + MOID + "</td>";
                                    alldata += "<td></td>";
                                    if (Status != "Rejected") {
                                        alldata += "<td><button><a href='/TrackStatus/ReceiptPrint?ID=" + ID + "&frmid=" + formid + "' class='btn btn-primary' target='_blanck'>Downlaod Receipt</a></button></td>";
                                    }
                                }
                                if (mids == "2") {


                                    alldata += "<td>" + MOID + "</td>";
                                    if (Status != "Rejected") {
                                        alldata += "<td><button><a href='/TrackStatus/ReceiptPrint?ID=" + ID + "&frmid=" + formid + "' class='btn btn-primary' target='_blanck'>Downlaod Receipt</a></button></td>";
                                    }
                                }

                                var tr2 = "</tr>";

                                $("#mytable").append(tr1 + alldata + tr2);
                            });

                            // }
                        },
                        error: function(xhr, ajaxOptions, thrownError) {

                        }
                    });
                }
            </script>

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
    <script>
        $(document).ready(function() {


            var counter = 0;
            debugger;
            //if (userid != null) {

            //if (userid == 'SAdmin') {
            //   var i = 1;
            //   counter = ($("li").length);
            //   for (var i = 0; i < counter; i++) {
            //       $(".page_" + i).css("display", "block");
            //   }

            //  }
            //   else {


            //BOX BUTTON SHOW AND CLOSE
            jQuery('.small-graph-box').hover(function() {
                jQuery(this).find('.box-button').fadeIn('fast');
            }, function() {
                jQuery(this).find('.box-button').fadeOut('fast');
            });
            jQuery('.small-graph-box .box-close').click(function() {
                jQuery(this).closest('.small-graph-box').fadeOut(200);
                return false;
            });

            //CHARTS
            function gd(year, day, month) {
                return new Date(year, month - 1, day).getTime();
            }

            graphArea2 = Morris.Area({
                element: 'hero-area',
                padding: 10,
                behaveLikeLine: true,
                gridEnabled: false,
                gridLineColor: '#dddddd',
                axes: true,
                resize: true,
                smooth: true,
                pointSize: 0,
                lineWidth: 0,
                fillOpacity: 0.85,
                data: [{
                    period: '2015 Q1',
                    iphone: 2668,
                    ipad: null,
                    itouch: 2649
                }, {
                    period: '2015 Q2',
                    iphone: 15780,
                    ipad: 13799,
                    itouch: 12051
                }, {
                    period: '2015 Q3',
                    iphone: 12920,
                    ipad: 10975,
                    itouch: 9910
                }, {
                    period: '2015 Q4',
                    iphone: 8770,
                    ipad: 6600,
                    itouch: 6695
                }, {
                    period: '2016 Q1',
                    iphone: 10820,
                    ipad: 10924,
                    itouch: 12300
                }, {
                    period: '2016 Q2',
                    iphone: 9680,
                    ipad: 9010,
                    itouch: 7891
                }, {
                    period: '2016 Q3',
                    iphone: 4830,
                    ipad: 3805,
                    itouch: 1598
                }, {
                    period: '2016 Q4',
                    iphone: 15083,
                    ipad: 8977,
                    itouch: 5185
                }, {
                    period: '2017 Q1',
                    iphone: 10697,
                    ipad: 4470,
                    itouch: 2038
                }, ],
                lineColors: ['#eb6f6f', '#926383', '#eb6f6f'],
                xkey: 'period',
                redraw: true,
                ykeys: ['iphone', 'ipad', 'itouch'],
                labels: ['All Visitors', 'Returning Visitors', 'Unique Visitors'],
                pointSize: 2,
                hideHover: 'auto',
                resize: true
            });


        });
    </script>
    <!-- calendar -->
    <script type="text/javascript" src="/js/monthly.js"></script>


    <!-- //calendar -->
</body>

</html>