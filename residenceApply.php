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

        .boredr{
            border:1px solid black;
            margin:15px;
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
                <title>Setu</title>
                <style type="text/css">
                    .form-control {
                        width: 75%;
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

                <style>
                    .nav-tabs>li {
                        list-style-type: none;
                        width: 19%;
                        height: 40px;
                        display: inline-block;
                        margin-left: 2%;
                    }
                    
                    .nav-tabs>li>a {
                        /*background-color: #ffffff;*/
                        display: block;
                        height: 100%;
                        text-align: center;
                        line-height: 40px;
                        border: 1px solid #141414;
                        box-sizing: border-box;
                        /*color: orange;*/
                    }
                    
                    .nav-tabs>li:nth-child(2)>a {
                        /*color: blue;*/
                    }
                    
                    .nav-tabs>li:nth-child(3)>a {
                        /*color: green;*/
                    }
                    
                    .nav-tabs>li.active>a {
                        /*background-color: #7f7fff;*/
                        background-color: blue;
                        /*color: #ffffff;*/
                    }
                    
                    .nav-tabs>li.deactive>a {
                        background-color: red;
                        /*color: #ffffff;*/
                    }
                    
                    .nav-tabs>li>a:hover,
                    .nav-tabs>li>a:focus,
                    .nav-tabs>li.active>a:hover,
                    .nav-tabs>li.active>a:focus {
                        background-color: #E69303;
                        color: #fff;
                    }
                    
                    .back {
                        background-color: green;
                    }
                    
                </style>
                <script src="/Scripts/jquery-3.3.1.min.js"></script>
                <script type="text/javascript" src="https://ajax.cdnjs.com/ajax/libs/json2/20110223/json2.js"></script>
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />

                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
                <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

                <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

                <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
                </script>

                <script type="text/javascript">
                    $("#District").change(function() {
                        debugger;
                        var DistrictID = $("#District").val();
                        var Url = "/api/AllDropFillApi/Taluka";
                        $.ajax({
                            url: Url,
                            type: "GET",
                            dataType: 'json',
                            data: {
                                countryId: DistrictID
                            },
                            success: function(data) {
                                var json = JSON.parse(data)

                                $("#Talukaid").empty();
                                $("#Talukaid").append("<option value=''>Select</option>");

                                $.each(json, function(index, optiondata) {
                                    $("#Talukaid").append("<option value='" + optiondata.id + "'>" + optiondata.name + "</option>");
                                });


                            }
                        });
                    });
                </script>
             
                <script type="text/javascript">
                    $(document).ready(function() {
                        var DD = GetParameterValues('id');
                        var FID = GetParameterValues('Formid');
                        if (FID == "2525") {
                            $("#btnSaveDraft").fadeOut();
                        }
                        if (DD == undefined) {
                            DD = "0";
                        } else {
                            DD = DD;
                        }
                        gettabs(DD);
                        //  getdata(DD, FID);


                    });

                    function GetParameterValues(param) {
                        var url = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
                        for (var i = 0; i < url.length; i++) {
                            var urlparam = url[i].split('=');
                            if (urlparam[0] == param) {
                                return urlparam[1];
                            }
                        }
                    }

                  
                </script>
            </head>

            <body>





<form action='' method='POST' id='formresidence'>
    
    <section class='body'>
        <div class='inner-wrapper' style='padding-top: 0px;'>
            <div class='col-md-12'>
                <div>
                    <section class='panel'>
                        <header class='panel-heading' style='background:transparent'>
                            <div class='panel-actions'>
                                <a href='#' class=''></a>
                            </div>
                            <h2 class='panel-title'>Residence Form</h2>
                        </header>
                        <div class='panel-body '>
                            <div class='col-sm-4 panel-body' id='BenificiaryUID11'>
                                <div class=''>
                                    <Lable Name="lbl________________________" class="control-label" id="lbl________________________">लाभार्थीचा आधार क्रमांक </Lable><span style=color:red class='control-label'></span><input required Name="BenificiaryUID" class="form-control" id="BenificiaryUID" type="number" required></input>
                                </div>
                            </div>
                            <div class='col-sm-4 panel-body' id='ApplicantUID11'>
                                <div class=''>
                                    <Lable Name="lbl_______________________" class="control-label" id="lbl_______________________">अर्जदाराचा आधार क्रमांक</Lable><span style=color:red class='control-label'></span><input required Name="ApplicantUID" class="form-control" id="ApplicantUID" type="number" required></input>
                                </div>
                            </div>
                            <div class='row' id='IncomeCeritificate1112'>
                                <div class='col-sm-4 panel-body' id='IncomeCeritificate11'>
                                    <div class=''></div>
                                    <Lable Name="lbl___________________" class="control-label " id="lbl___________________">रहिवासी च्या प्रकार</Lable><span style=color:red class='control-label'>*</span><select required Name="IncomeCeritificate" class="form-control" id="IncomeCeritificate"><option value=''> Select </option><option value='तात्पुरता रहिवास दाखला'> तात्पुरता रहिवास दाखला</option><option value='रहिवास प्रमाणपत्र'> रहिवास प्रमाणपत्र</option><option value='स्थानिक वास्तव्याचा दाखला'> स्थानिक वास्तव्याचा दाखला</option></select>                                                            </div>
                                                
                                </div>
                            <div class='col-sm-4 panel-body' id='Salutation11'>
                                <div class=''>
                                    <Lable Name="lbl_________________" class="control-label " id="lbl_________________">अर्जदाराचे संबोधन</Lable><span style=color:red class='control-label'>*</span><select required Name="Salutation" class="form-control" id="Salutation"><option value=''> Select </option><option value='18F35DF6-5CC1-4F80-873E-81C13677D0DD'> कुमार</option><option value='64AA5BDE-4204-4EF5-9071-DDDF5E5032F5'> कुमारी</option><option value='5FD0E1A4-BCA8-4422-9832-D8B11BFEFEDE'> श्री.</option><option value='D58217BD-AA54-4626-9C41-96C5F328E5C6'> श्रीमती</option><option value='035E0D79-B308-4220-8FF4-500C7F07A2CE'> सौ</option></select>                                                            </div>
                            </div>
                            <div class='col-sm-4 panel-body' id='FullNameEnglish11'>
                                <div class=''>
                                    <Lable Name="lbl______________________________" class="control-label" id="lbl______________________________">अर्जदाराचे पूर्ण नाव (इंग्रजी)</Lable><span style=color:red class='control-label '>*</span><input required Name="FullNameEnglish" class="form-control" id="FullNameEnglish" type="text"></input>
                                </div>
                            </div>
                            <div class='row' id='FullNameMarathi1112'>
                                <div class='col-sm-4 panel-body' id='FullNameMarathi11'>
                                    <div class=''></div>
                                    <Lable Name="lbl____________________________" class="control-label" id="lbl____________________________">अर्जदाराचे पूर्ण नाव (मराठी)</Lable><span style=color:red class='control-label '>*</span><input  Name="FullNameMarathi" class="form-control" id="FullNameMarathi" type="text"></input>
                                </div>
                            </div>
                            <div class='col-sm-4 panel-body' id='SalutationFather11'>
                                <div class=''>
                                    <Lable Name="lbl____________________________" class="control-label " id="lbl____________________________">अर्जदाराच्या वडिलांचे संबोधन</Lable><span style=color:red class='control-label'>*</span><select required  Name="SalutationFather" class="form-control" id="SalutationFather"><option value=''> Select </option><option value='18F35DF6-5CC1-4F80-873E-81C13677D0DD'> कुमार</option><option value='64AA5BDE-4204-4EF5-9071-DDDF5E5032F5'> कुमारी</option><option value='5FD0E1A4-BCA8-4422-9832-D8B11BFEFEDE'> श्री.</option><option value='D58217BD-AA54-4626-9C41-96C5F328E5C6'> श्रीमती</option><option value='035E0D79-B308-4220-8FF4-500C7F07A2CE'> सौ</option></select>                                                            </div>
                            </div>
                            <div class='col-sm-4 panel-body' id='FatherNameEnglish11'>
                                <div class=''>
                                    <Lable Name="lbl___________________________________" class="control-label" id="lbl___________________________________">अर्जदाराच्या वडिलांचे नाव (इंग्रजी)</Lable><span style=color:red class='control-label '>*</span><input required Name="FatherNameEnglish" class="form-control" id="FatherNameEnglish" type="text"></input>
                                </div>
                            </div>
                            <div class='row' id='FatherNameMarathi1112'>
                                <div class='col-sm-4 panel-body' id='FatherNameMarathi11'>
                                    <div class=''></div>
                                    <Lable Name="lbl_________________________________" class="control-label" id="lbl_________________________________">अर्जदाराच्या वडिलांचे नाव (मराठी)</Lable><span style=color:red class='control-label '>*</span><input Name="FatherNameMarathi" class="form-control" id="FatherNameMarathi" type="text"></input>
                                </div>
                            </div>
                            <div class='col-sm-4 panel-body' id='DOB11'>
                                <div class=''>
                                    <Lable Name="lbl____________________" class="control-label" id="lbl____________________">अर्जदाराची जन्मतारीख (dd/mm/yyyy)</Lable><span style=color:red class='control-label '>*</span><input required Name="DOB" class="form-control" id="DOB" type="text"></input>
                                </div>
                            </div>
                            <div class='col-sm-4 panel-body' id='age11'>
                                <div class=''>
                                    <Lable Name="lbl_____________" class="control-label" id="lbl_____________">अर्जदाराचे वय</Lable><span style=color:red class='control-label'></span><input  Name="age" class="form-control" id="age" type="number"></input>
                                </div>
                            </div>
                            <div class='row' id='Gender1112'>
                                <div class='col-sm-4 panel-body' id='Gender11'>
                                    <div class=''></div>
                                    <Lable Name="lbl_______________" class="control-label " id="lbl_______________">अर्जदाराचे लिंग</Lable><span style=color:red class='control-label'>*</span><select Name="Gender" class="form-control" id="Gender" required><option value=''> Select </option><option value='4738A78E-A3B7-4E4D-8707-2545E49A9BFC'> इतर </option><option value='11D79D04-3BCF-4389-9466-7E4AC80A5F5D'> पुरुष</option><option value='3665F1DA-CDC8-4443-8649-C70563EC758F'> स्त्री</option></select>                                                            </div>
                            </div>
                            <div class='col-sm-4 panel-body' id='Occupation11'>
                                <div class=''>
                                    <Lable Name="lbl_______" class="control-label " id="lbl_______">व्यवसाय</Lable><span style=color:red class='control-label'>*</span><select  required Name="Occupation" class="form-control" id="Occupation"><option value=''> Select </option><option value='AB4F763C-08C4-46B7-99DC-EF4E77ADD0F2'> १० वी  खालील</option><option value='D8409F74-A231-447A-916F-7F8270CD9352'> १२ वी </option><option value='E54281B4-CDBC-4F05-ACFA-F8C0D2B924D9'> अभियंता</option><option value='878EFEBD-EC3D-49C6-9892-520989878677'> इतर</option><option value='23DACB05-EA28-45F1-94DF-16CA2CA6894A'> उद्योग</option><option value='3D978679-5376-4DE8-A3AB-95B0C61CFDC6'> कामगार</option><option value='AC00272B-5F8E-4D26-97A9-1661DDAB8567'> खाजगी सेवक</option><option value='86142741-BFFC-46E4-8969-1C9D12E092EC'> गृहिणी</option><option value='DAD745E9-63AC-4F8B-A3F2-B60AE065432E'> प्राध्यापक</option><option value='03693E5C-7511-4A1C-A9DC-B6DEEBB84C3D'> परिचारिका</option><option value='FF10B161-47C3-431F-A7DA-4D1AF8BD0A8A'> मोलमजूरी</option><option value='24A5A2A4-E712-4F02-831B-46552731B1EA'> लेखक</option><option value='2D907A52-E04F-4B20-A2FE-71C9DCA6A767'> वकील</option><option value='E6211AF3-C38A-454D-8F86-7877B8CA10F1'> वैद्य</option><option value='F35DD9C7-A91F-4959-B391-43C0B9722F22'> विद्यार्थी</option><option value='B452F2C1-2416-4DB9-B44F-4EA83CA78614'> शेतकरी</option><option value='1C039BA2-0001-4898-970C-ACEDD439D2DE'> शेतमजुरी</option><option value='CC605D45-5B22-4B46-A80A-F14F5A372D75'> शासकीय कर्मचारी</option><option value='36AF2F4C-4364-4182-AD2D-A006B77B5732'> शिक्षक</option><option value='432C9823-419A-453B-A977-D2B6E001EF50'> सॉफ्टवेयर व्यावसायिक</option><option value='30644AC0-602C-40DC-8742-46C1436E2902'> हार्डवेयर व्यावसायिक</option></select>                                                            </div>
                            </div>
                            <div class='col-sm-4 panel-body' id='Mobile11'>
                                <div class=''>
                                    <Lable Name="lbl______" class="control-label" id="lbl______">मोबाईल</Lable><span style=color:red class='control-label '>*</span><input required Name="Mobile" class="form-control" id="Mobile" type="number"></input>
                                </div>
                            </div>
                            <div class='row' id='Address1112'>
                                <div class='col-sm-4 panel-body' id='Address11'>
                                    <div class=''></div>
                                    <Lable Name="lbl_______________" class="control-label" id="lbl_______________">पत्ता (इंग्रजी)</Lable><span style=color:red class='control-label '>*</span><input required  Name="Address" class="form-control" id="Address" type="text"></input>
                                </div>
                            </div>
                            <div class='col-sm-4 panel-body' id='MRAddress11'>
                                <div class=''>
                                    <Lable Name="lbl_____________" class="control-label" id="lbl_____________">पत्ता (मराठी)</Lable><span style=color:red class='control-label '>*</span><input Name="MRAddress" class="form-control" id="MRAddress" type="text"></input>
                                </div>
                            </div>
                            <div class='col-sm-4 panel-body' id='District11'>
                                <div class=''>
                                    <Lable Name="lbl______" class="control-label " id="lbl______">जिल्हा</Lable><span style=color:red class='control-label'>*</span><select Name="District" class="form-control" id="District" required ><option value=''> Select </option><option value='515'> Chhatrapati Sambhajinagar</option></select>                                                            </div>
                            </div>
                            <div class='row' id='Taluka1112'>
                                <div class='col-sm-4 panel-body' id='Taluka11'>
                                    <div class=''></div>
                                    <Lable Name="lbl______" class="control-label " id="lbl______">तालुका</Lable><span style=color:red class='control-label'>*</span><select required Name="Taluka" class="form-control" id="Taluka"><option value=''> Select </option><option value='515'> nagpur</option></select> </div>
                            </div>
                            <div class='col-sm-4 panel-body' id='Village11'>
                                <div class=''>
                                    <Lable Name="lbl___" class="control-label " id="lbl___">गाव</Lable><span style=color:red class='control-label'>*</span><select  required Name="Village" class="form-control" id="Village"><option value=''> Select </option><option value='515'> nagpur</option></select> </div>
                            </div>
                            <div class='col-sm-4 panel-body' id='Pincode11'>
                                <div class=''>
                                    <Lable Name="lbl___________" class="control-label" id="lbl___________">पिनकोड क्र.</Lable><span style=color:red class='control-label '>*</span><input required  Name="Pincode" class="form-control" id="Pincode" type="number"></input>
                                </div>
                            </div>
                            <div class='row' id='Relation1112'>
                                <div class='col-sm-4 panel-body' id='Relation11'>
                                    <div class=''></div>
                                    <Lable Name="lbl________________________________" class="control-label" id="lbl________________________________">या पत्त्यावर केव्हापासून राहतात?</Lable><span style=color:red class='control-label '>*</span><input Name="Relation" class="form-control" id="Relation"
                                                                type="number" required></input>   
                                </div>
                            <div class='col-sm-4 panel-body' id='BeneficiarySalutaion11'>
                                <div class=''>
                                <Lable Name="lbl______________________________________________" class="control-label" id="lbl______________________________________________">सध्याच्या पत्त्यावर केव्हापासून राहता ?(वर्ष )</Lable><span style=color:red class='control-label '>*</span><input Name="BeneficiarySalutaion" class="form-control" id="ResidingatpresentaddresssinceEnter_Yearyyyy"
                                                                type="number" required></input>
                                                              
                            </div>
                        <div class="boredr">   
                            <div class='col-sm-4 panel-body' id='BeneficiaryNameEnglish11'>
                                <div class=''>
                                    <Lable Name="lbl______________________________" class="control-label" id="lbl______________________________">लाभार्थीचे पूर्ण नाव (इंग्रजी)</Lable><span style=color:red class='control-label '>*</span><input required Name="BeneficiaryNameEnglish" class="form-control"  class="form-control" id="BeneficiaryNameEnglish" type="text"></input>
                                </div>
                            </div>
                            <div class='row' id='BeneficiaryNameMarathi1112'>
                                <div class='col-sm-4 panel-body' id='BeneficiaryNameMarathi11'>
                                    <div class=''></div>
                                    <Lable Name="lbl________________________________" class="control-label" id="lbl________________________________">लाभार्थीचे नाव पूर्ण नाव (मराठी)</Lable><span style=color:red class='control-label '>*</span><input Name="BeneficiaryNameMarathi" class="form-control" id="BeneficiaryNameMarathi" type="text"></input>
                                </div>
                            </div>
                            <div class='col-sm-4 panel-body' id='Income_2016_201711'>
                                <div class=''>
                                    <Lable Name="lbl_________2020-2021" class="control-label" id="lbl_________2020-2021">उत्पन्न 2022-2023</Lable><span style=color:red class='control-label'></span><input Name="Income_2022_2023" value="699" class="form-control" id="Income_2016_2017" type="text"></input>
                                </div>
                            </div>
                            <div class='col-sm-4 panel-body' id='Income_2017_201811'>
                                <div class=''>
                                    <Lable Name="lbl_________2021_-_2022" class="control-label" id="lbl_________2021_-_2022">उत्पन्न 2023 - 2024</Lable><span style=color:red class='control-label'></span><input value="699" Name="Income_2023_2024" class="form-control" id="Income_2017_2018" type="text" required></input>
                                </div>
                            </div>
                            <div class='col-sm-4 panel-body' id='Resone11'>
                                <div class=''>
                                    <Lable Name="lbl______________________________________________" class="control-label" id="lbl______________________________________________">प्रमाणपत्र कशासाठी हवे त्याचा तपशील</Lable><span style=color:red class='control-label '>*</span><input required Name="Resone" class="form-control" id="Resone" type="text"></input>
                                </div>
                            </div>
                            <div class='col-sm-4 panel-body' id='MOID11'>
                                <div class=''>
                                    <Lable Name="lblMOID" class="control-label" id="lblMOID">MOID</Lable><span style=color:red class='control-label'></span><input Name="MOID" class="form-control" id="MOID" type="text"></input>
                                </div>
                            </div>
                            <div class='row' id='Income_2018_20191112'>
                                <div class='col-sm-4 panel-body' id='Income_2018_201911'>
                                    <div class=''></div>
                                    <Lable Name="lbl_________2022_-_2023" class="control-label" id="lbl_________2022_-_2023">उत्पन्न 2024 - 2025</Lable><span style=color:red class='control-label '>*</span><input value="699" Name="Income_2024_2025" class="form-control" id="Income_2018_2019" type="text"></input>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class='row'>
                    <div class='form-group col-sm-12 panel-body' style='text-align: center;'>
                        <Button  type="submit">Submit</Button>
                    </div>
                </div>
</form>

    <div id="response"></div>
    
                        </div>
                        </section>
                        </div>
                        <script src='https://code.jquery.com/jquery-1.9.1.js'></script>
                        <script type='text/javascript'>
                            $('#District').change(function() {

                                debugger;
                                var countryID = $('#District').val();

                                var Url = "/api/AllDropFillApi/Taluka";
                                $.ajax({
                                    url: Url,
                                    type: "GET",
                                    dataType: 'json',
                                    data: {
                                        countryId: countryID
                                    },
                                    success: function(data) {
                                        var json = JSON.parse(data)
                                        $("#Taluka").empty();

                                        $("#Taluka").append("<option value=''>Select</option>");

                                        $.each(json, function(index, optiondata) {


                                            $("#Taluka").append("<option value='" + optiondata.id + "'>" + optiondata.name + "</option>");
                                        });
                                    }
                                });
                            });
                            $('#Taluka').change(function() {

                                debugger;
                                var countryID = $('#Taluka').val();

                                var Url = "/api/AllDropFillApi/Village";
                                $.ajax({
                                    url: Url,
                                    type: "GET",
                                    dataType: 'json',
                                    data: {
                                        countryId: countryID
                                    },
                                    success: function(data) {
                                        var json = JSON.parse(data)
                                        $("#Village").empty();

                                        $("#Village").append("<option value=''>Select</option>");

                                        $.each(json, function(index, optiondata) {


                                            $("#Village").append("<option value='" + optiondata.id + "'>" + optiondata.name + "</option>");
                                        });
                                    }
                                });
                            });
                        </script>


                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

                        <script type="text/javascript" language="javascript">
                            $(document).ready(function() {
                                $("#ApplicantsresidenceinMaharashtraState_3_years_required").val('15')
                            });


                            $("#Yearsofresidenceatcurrentaddress").blur(function() {


                                if ($("#Yearsofresidenceatcurrentaddress").val().length > 0) {
                                    if ($("#DateofBirth").length > 0) {
                                        var addressyear = $("#Yearsofresidenceatcurrentaddress").val();
                                        var dob = $("#DateofBirth").val().split('/');
                                        var currentYear = (new Date).getFullYear();
                                        if (dob.length > 1) {
                                            if (parseInt(addressyear) >= parseInt(dob[2]) && parseInt(addressyear) <= currentYear) {

                                            } else {
                                                alert('Please Enter valid Year Of residance current Address');
                                                $("#Yearsofresidenceatcurrentaddress").val("");

                                            }
                                        }
                                    } else {
                                        alert('Plase enter Date Of birth');
                                    }
                                }

                            });


                            $("#ResidingatpresentaddresssinceEnter_Yearyyyy").blur(function() {


                                if ($("#ResidingatpresentaddresssinceEnter_Yearyyyy").val().length > 0) {
                                    if ($("#DateofBirth").length > 0) {

                                        var addressyear = $("#ResidingatpresentaddresssinceEnter_Yearyyyy").val();
                                        var dob = $("#DateofBirth").val().split('/');
                                        var currentYear = (new Date).getFullYear();
                                        if (dob.length > 1) {
                                            if (parseInt(addressyear) >= parseInt(dob[2]) && parseInt(addressyear) <= currentYear) {

                                            } else {
                                                $("#ResidingatpresentaddresssinceEnter_Yearyyyy").val('');
                                                alert('Please Enter valid Year Of Residing Present Address');
                                            }
                                        }
                                    } else {
                                        alert('Plase enter Date Of birth');
                                    }
                                }

                            });
                            $("#ApplicantsresidenceinMaharashtraState_3_years_required").blur(function() {
                                var Year15 = $("#ApplicantsresidenceinMaharashtraState_3_years_required").val();
                                debugger;
                                if (Year15 >= 15) {
                                    $("#btnSaveEmp").prop('disabled', false);
                                    $("#ApplicantsresidenceinMaharashtraState_3_years_required").css('border', '1px solid #cccccc');
                                    $('.manager').text('');
                                } else {
                                    $("#ApplicantsresidenceinMaharashtraState_3_years_required").val('');
                                    $("#btnSaveEmp").prop('disabled', true);
                                    $("#ApplicantsresidenceinMaharashtraState_3_years_required").css('border-color', 'Red');
                                    alert("Enter Value equal or greater than 15 years");
                                }
                            });
                            $("#DateofBirth").change(function() {
                                debugger;
                                var age = handleDOBChanged($("#DateofBirth").val());
                                $("#Age").val(age);
                                $("#Age").attr("disabled", true);
                                var year = isDateYear($("#DateofBirth").val());
                                $("#Yearsofresidenceatcurrentaddress").val(year);
                                $("#ResidingatpresentaddresssinceEnter_Yearyyyy").val(year);


                            });

                            function isDateYear(txtDate) {
                                var currVal = txtDate;
                                if (currVal == '')
                                    return true;

                                //Declare Regex
                                var rxDatePattern = /^(\d{1,2})(\/|-)(\d{1,2})(\/|-)(\d{4})$/;
                                var dtArray = currVal.match(rxDatePattern); // is format OK?

                                if (dtArray == null) {
                                    return false;
                                }
                                //Checks for dd/mm/yyyy format.

                                var dtYear = dtArray[5];


                                return dtYear;
                            }
                        </script>


                        <script type="text/javascript">
                            $("#Salutation").change(function() {
                                debugger;
                                var Salutation = $("#Salutation").val().toUpperCase();

                                if (Salutation == "18F35DF6-5CC1-4F80-873E-81C13677D0DD" || Salutation == "5FD0E1A4-BCA8-4422-9832-D8B11BFEFEDE") {
                                    var ddd = "11D79D04-3BCF-4389-9466-7E4AC80A5F5D";
                                    $("#Gender").val(ddd.toLowerCase()); //M
                                } else if (Salutation == "64AA5BDE-4204-4EF5-9071-DDDF5E5032F5" || Salutation == "D58217BD-AA54-4626-9C41-96C5F328E5C6" || Salutation == "035E0D79-B308-4220-8FF4-500C7F07A2CE") {
                                    var ddd = "3665F1DA-CDC8-4443-8649-C70563EC758F";
                                    $("#Gender").val(ddd.toLowerCase()); //F
                                } else {
                                    $("#Gender").val("");

                                }
                            });
                        </script>
                        <script type="text/javascript">
                            var $jqDate = jQuery('#DateofBirth');

                            //Bind keyup/keydown to the input
                            $jqDate.bind('keyup', 'keydown', function(e) {

                                //To accomdate for backspacing, we detect which key was pressed - if backspace, do nothing:
                                if (e.which !== 8) {
                                    var numChars = $jqDate.val().length;
                                    if (numChars === 2 || numChars === 5) {
                                        var thisVal = $jqDate.val();
                                        thisVal += '/';
                                        $jqDate.val(thisVal);
                                    }
                                }
                            });
                        </script>


                        <script type="text/javascript">
                            $("#RelationofApplicantwithBeneficiary").change(function() {


                                if ($("#RelationofApplicantwithBeneficiary").val().toUpperCase() == '94C24C99-CB26-4179-9C6E-0CF97FD3037C') {
                                    //self
                                    $("#BeneficiarySalutation").val($('#Salutation').val());
                                    $("#BeneficiaryName").val($('#FullNameMarathi').val());
                                    //$("#Beneficiary_Name_Marathi_").val($('#Full_Name_Marathi_').val());
                                    $("#DateofBirthBeneficiary").val($('#DateofBirth').val());



                                    $("#BeneficiarySalutation").attr("disabled", true);
                                    $("#BeneficiaryName").attr("disabled", true);
                                    $("#DateofBirthBeneficiary").attr("disabled", true);

                                } else if ($("#RelationofApplicantwithBeneficiary").val().toUpperCase() == 'DEEFBBAF-4ABB-4C9A-84D1-73FF59145BF1') {
                                    //father
                                    $("#BeneficiarySalutation").val($('#SalutationFather').val());
                                    $("#BeneficiaryName").val($('#FullNameMarathi').val());
                                    //$("#Beneficiary_Name_Marathi_").val($('#Father_Name__Marathi_').val());

                                    $("#BeneficiarySalutation").attr("disabled", true);
                                    $("#BeneficiaryName").attr("disabled", true);


                                } else {
                                    $("#BeneficiarySalutation").val("");
                                    $("#BeneficiaryName").val("");
                                    //$("#Beneficiary_Name_Marathi_").val("");

                                    $("#BeneficiarySalutation").attr("disabled", false);
                                    $("#BeneficiaryName").attr("disabled", false);
                                    $("#DateofBirthBeneficiary").attr("disabled", false);
                                }
                            }

                            })
                        </script>




                        <script type="text/javascript">
                            function handleDOBChanged(date) {

                                if (isDate(date)) {
                                    var age = calculateAge(parseDate(date), new Date());
                                    return age;
                                } else {
                                    return age;
                                }

                            }
                            //convert the date string in the format of dd/mm/yyyy into a JS date object
                            function parseDate(dateStr) {
                                var dateParts = dateStr.split("/");
                                return new Date(dateParts[2], (dateParts[1] - 1), dateParts[0]);
                            }

                            //is valid date format
                            function calculateAge(dateOfBirth, dateToCalculate) {
                                var calculateYear = dateToCalculate.getFullYear();
                                var calculateMonth = dateToCalculate.getMonth();
                                var calculateDay = dateToCalculate.getDate();

                                var birthYear = dateOfBirth.getFullYear();
                                var birthMonth = dateOfBirth.getMonth();
                                var birthDay = dateOfBirth.getDate();

                                var age = calculateYear - birthYear;
                                var ageMonth = calculateMonth - birthMonth;
                                var ageDay = calculateDay - birthDay;

                                if (ageMonth < 0 || (ageMonth == 0 && ageDay < 0)) {
                                    age = parseInt(age) - 1;
                                }
                                return age;
                            }

                            function isDate(txtDate) {
                                var currVal = txtDate;
                                if (currVal == '')
                                    return true;

                                //Declare Regex
                                var rxDatePattern = /^(\d{1,2})(\/|-)(\d{1,2})(\/|-)(\d{4})$/;
                                var dtArray = currVal.match(rxDatePattern); // is format OK?

                                if (dtArray == null)
                                    return false;

                                //Checks for dd/mm/yyyy format.
                                var dtDay = dtArray[1];
                                var dtMonth = dtArray[3];
                                var dtYear = dtArray[5];

                                if (dtMonth < 1 || dtMonth > 12)
                                    return false;
                                else if (dtDay < 1 || dtDay > 31)
                                    return false;
                                else if ((dtMonth == 4 || dtMonth == 6 || dtMonth == 9 || dtMonth == 11) && dtDay == 31)
                                    return false;
                                else if (dtMonth == 2) {
                                    var isleap = (dtYear % 4 == 0 && (dtYear % 100 != 0 || dtYear % 400 == 0));
                                    if (dtDay > 29 || (dtDay == 29 && !isleap))
                                        return false;
                                }

                                return true;
                            }
                            $("#DateofBirth").change(function() {

                                var age = handleDOBChanged($("#DateofBirth").val());
                                $("#Age").val(age);
                                $("#Age").attr("disabled", true);


                            });
                            $("#Age").val(age);
                        </script>

                        <script type="text/javascript" language="javascript">
                            $("#RelationofApplicantwithBeneficiary").change(function() {

                                debugger;
                                var val = $("#RelationofApplicantwithBeneficiary").val().toUpperCase();
                                if (val == "1") {
                                    var fname = $("#FullNameEnglish").val();
                                    $("#FullNameEnglish").val(fname);
                                } else {
                                    var fnameq = $("#FullNameEnglish").val();
                                    $("#FullNameEnglish").val();
                                    $("#FullNameEnglish").val(fnameq);
                                }


                                if ($("#RelationofApplicantwithBeneficiary").val().toUpperCase() == '94C24C99-CB26-4179-9C6E-0CF97FD3037C') {
                                    //self
                                    $("#BeneficiarySalutation").val($('#Salutation').val());
                                    $("#BeneficiaryName").val($('#FullNameMarathi').val());
                                    $("#DateofBirthBeneficiary").val($('#DateofBirth').val());


                                    $("#BeneficiarySalutation").attr("disabled", true);
                                    $("#BeneficiaryName").attr("disabled", true);
                                    $("#DateofBirthBeneficiary").attr("disabled", true);
                                    //$("#Beneficiary_Name_Marathi_").val($('#Full_Name_Marathi_').val());

                                } else if ($("#RelationofApplicantwithBeneficiary").val().toUpperCase() == 'DEEFBBAF-4ABB-4C9A-84D1-73FF59145BF1') {
                                    //father
                                    $("#BeneficiarySalutation").val($('#SalutationFather').val());
                                    $("#BeneficiaryName").val($('#FatherNameEnglish').val());
                                    //$("#Beneficiary_Name_Marathi_").val($('#Father_Name__Marathi_').val());

                                    $("#BeneficiarySalutation").attr("disabled", true);
                                    $("#BeneficiaryName").attr("disabled", true);

                                } else {
                                    $("#BeneficiarySalutation").val("");
                                    $("#BeneficiaryName").val("");
                                    //$("#Beneficiary_Name_Marathi_").val("");
                                    $("#BeneficiarySalutation").attr("disabled", false);
                                    $("#BeneficiaryName").attr("disabled", false);
                                    $("#DateofBirthBeneficiary").attr("disabled", false);
                                }


                            });
                            //$("#Beneficiary_Caste_Category_Details").change(function () {
                            //
                            //    debugger;
                            //    var val = $("#Beneficiary_Caste_Category_Details").val();
                            //    $("#Beneficiary_s_Father_Caste").val(val);
                            //
                            //
                            //});
                        </script>

                        <script type="text/javascript" language="javascript">
                            $('#txtUAN').keypress(function(event) {
                                if (event.keyCode == 13) {
                                    event.preventDefault();
                                }
                            });
                            $('#UID').keypress(function(event) {
                                if (event.keyCode == 13) {
                                    event.preventDefault();
                                }
                            });

                            function handleDOBChanged(date) {

                                if (isDate(date)) {
                                    var age = calculateAge(parseDate(date), new Date());
                                    return age;
                                } else {
                                    return age;
                                }

                            }

                            //convert the date string in the format of dd/mm/yyyy into a JS date object
                            function parseDate(dateStr) {
                                var dateParts = dateStr.split("/");
                                return new Date(dateParts[2], (dateParts[1] - 1), dateParts[0]);
                            }

                            //is valid date format
                            function calculateAge(dateOfBirth, dateToCalculate) {
                                var calculateYear = dateToCalculate.getFullYear();
                                var calculateMonth = dateToCalculate.getMonth();
                                var calculateDay = dateToCalculate.getDate();

                                var birthYear = dateOfBirth.getFullYear();
                                var birthMonth = dateOfBirth.getMonth();
                                var birthDay = dateOfBirth.getDate();

                                var age = calculateYear - birthYear;
                                var ageMonth = calculateMonth - birthMonth;
                                var ageDay = calculateDay - birthDay;

                                if (ageMonth < 0 || (ageMonth == 0 && ageDay < 0)) {
                                    age = parseInt(age) - 1;
                                }
                                return age;
                            }

                            function isDate(txtDate) {
                                var currVal = txtDate;
                                if (currVal == '')
                                    return true;

                                //Declare Regex
                                var rxDatePattern = /^(\d{1,2})(\/|-)(\d{1,2})(\/|-)(\d{4})$/;
                                var dtArray = currVal.match(rxDatePattern); // is format OK?

                                if (dtArray == null)
                                    return false;

                                //Checks for dd/mm/yyyy format.
                                var dtDay = dtArray[1];
                                var dtMonth = dtArray[3];
                                var dtYear = dtArray[5];

                                if (dtMonth < 1 || dtMonth > 12)
                                    return false;
                                else if (dtDay < 1 || dtDay > 31)
                                    return false;
                                else if ((dtMonth == 4 || dtMonth == 6 || dtMonth == 9 || dtMonth == 11) && dtDay == 31)
                                    return false;
                                else if (dtMonth == 2) {
                                    var isleap = (dtYear % 4 == 0 && (dtYear % 100 != 0 || dtYear % 400 == 0));
                                    if (dtDay > 29 || (dtDay == 29 && !isleap))
                                        return false;
                                }

                                return true;
                            }

                            function ResDate(pdate1, p2) {
                                debugger;

                                var pdate12 = pdate1.getFullYear();
                                var pr2 = p2;
                                if (pdate12 > pr2) {
                                    return 'False';
                                } else {
                                    return 'True';
                                }


                            }
                        </script>
                        <script type='text/javascript' language='javascript'>
                            function Validation() {
                                debugger;
                                var req = 1;
                                var forms = '';
                                if (/[^0-9]/.test($("#BenificiaryUID").val())) {
                                    $("#BenificiaryUID").css('border-color', 'Red');
                                    req = 0;
                                } else {
                                    $("#BenificiaryUID").css('border-color', '');
                                }
                                if ($("#BenificiaryUID").val().length < 12) {
                                    $("#BenificiaryUID").css('border-color', 'Red');
                                    req = 0;
                                } else if ($("#BenificiaryUID").val().length > 12) {
                                    $("#BenificiaryUID").css('border-color', 'Red');
                                    req = 0;
                                } else {
                                    $("#BenificiaryUID").css('border-color', '');
                                }
                                if (/[^0-9]/.test($("#ApplicantUID").val())) {
                                    $("#ApplicantUID").css('border-color', 'Red');
                                    req = 0;
                                } else {
                                    $("#ApplicantUID").css('border-color', '');
                                }
                                if ($("#ApplicantUID").val().length < 12) {
                                    $("#ApplicantUID").css('border-color', 'Red');
                                    req = 0;
                                } else if ($("#ApplicantUID").val().length > 12) {
                                    $("#ApplicantUID").css('border-color', 'Red');
                                    req = 0;
                                } else {
                                    $("#ApplicantUID").css('border-color', '');
                                }

                                if ($("#CertificateName").val().length == 0) {
                                    $("#CertificateName").css('border-color', 'Red');
                                    req = 0;
                                    $("#CertificateName").focus();


                                } else {
                                    $("#CertificateName").css('border-color', '');
                                }

                                if ($("#Salutation").val().length == 0) {
                                    $("#Salutation").css('border-color', 'Red');
                                    req = 0;
                                    $("#Salutation").focus();


                                } else {
                                    $("#Salutation").css('border-color', '');
                                }

                                if ($("#FullNameEnglish").val().length == 0) {
                                    $("#FullNameEnglish").css('border-color', 'Red');
                                    req = 0;
                                    $("#FullNameEnglish").focus();


                                } else {
                                    $("#FullNameEnglish").css('border-color', '');
                                }

                                if ($("#FullNameMarathi").val().length == 0) {
                                    $("#FullNameMarathi").css('border-color', 'Red');
                                    req = 0;
                                    $("#FullNameMarathi").focus();


                                } else {
                                    $("#FullNameMarathi").css('border-color', '');
                                }

                                if ($("#SalutationFather").val().length == 0) {
                                    $("#SalutationFather").css('border-color', 'Red');
                                    req = 0;
                                    $("#SalutationFather").focus();


                                } else {
                                    $("#SalutationFather").css('border-color', '');
                                }

                                if ($("#FatherNameEnglish").val().length == 0) {
                                    $("#FatherNameEnglish").css('border-color', 'Red');
                                    req = 0;
                                    $("#FatherNameEnglish").focus();


                                } else {
                                    $("#FatherNameEnglish").css('border-color', '');
                                }

                                if ($("#FatherNameMarathi").val().length == 0) {
                                    $("#FatherNameMarathi").css('border-color', 'Red');
                                    req = 0;
                                    $("#FatherNameMarathi").focus();


                                } else {
                                    $("#FatherNameMarathi").css('border-color', '');
                                }

                                if ($("#DateofBirth").val().length == 0) {
                                    $("#DateofBirth").css('border-color', 'Red');
                                    req = 0;
                                    $("#DateofBirth").focus();


                                } else {
                                    $("#DateofBirth").css('border-color', '');
                                }
                                var date_regex = /^(0[1-9]|1\d|2\d|3[01])\/(0[1-9]|1[0-2])\/(19|20)\d{2}$/;
                                if (!(date_regex.test($("#DateofBirth").val()))) {
                                    $("#DateofBirth").css('border-color', 'Red');
                                    req = 0;
                                } else {
                                    $("#DateofBirth").css('border-color', '');
                                }
                                if (/[^0-9]/.test($("#Age").val())) {
                                    $("#Age").css('border-color', 'Red');
                                    req = 0;
                                } else {
                                    $("#Age").css('border-color', '');
                                }
                                if ($("#Age").val().length > 0) {
                                    if ($("#Age").val() < 18) {
                                        $("#Age").css('border-color', 'Red');
                                        req = 0;
                                        $("#Age").focus();

                                    } else if ($("#Age").val() > 100) {
                                        $("#Age").css('border-color', 'Red');
                                        req = 0;
                                        $("#Age").focus();
                                    } else {
                                        $("#Age").css('border-color', '');
                                    }



                                }

                                if ($("#Gender").val().length == 0) {
                                    $("#Gender").css('border-color', 'Red');
                                    req = 0;
                                    $("#Gender").focus();


                                } else {
                                    $("#Gender").css('border-color', '');
                                }

                                if ($("#Occupation").val().length == 0) {
                                    $("#Occupation").css('border-color', 'Red');
                                    req = 0;
                                    $("#Occupation").focus();


                                } else {
                                    $("#Occupation").css('border-color', '');
                                }

                                if ($("#Mobile").val().length == 0) {
                                    $("#Mobile").css('border-color', 'Red');
                                    req = 0;
                                    $("#Mobile").focus();


                                } else {
                                    $("#Mobile").css('border-color', '');
                                }
                                if (/[^0-9]/.test($("#Mobile").val())) {
                                    $("#Mobile").css('border-color', 'Red');
                                    req = 0;
                                } else {
                                    $("#Mobile").css('border-color', '');
                                }
                                if (!$('#Mobile').val().match('[0-9]{10}')) {
                                    $("#Mobile").css('border-color', 'Red');
                                    req = 0;
                                } else {
                                    $("#Mobile").css('border-color', '');
                                }
                                if ($("#Mobile").val().length < 10) {
                                    $("#Mobile").css('border-color', 'Red');
                                    req = 0;
                                } else if ($("#Mobile").val().length > 10) {
                                    $("#Mobile").css('border-color', 'Red');
                                    req = 0;
                                } else {
                                    $("#Mobile").css('border-color', '');
                                }
                                if ($("#Mobile").val().length > 0) {
                                    if ($("#Mobile").val() < 7000000000) {
                                        $("#Mobile").css('border-color', 'Red');
                                        req = 0;
                                        $("#Mobile").focus();

                                    } else if ($("#Mobile").val() > 9999999999) {
                                        $("#Mobile").css('border-color', 'Red');
                                        req = 0;
                                        $("#Mobile").focus();
                                    } else {
                                        $("#Mobile").css('border-color', '');
                                    }



                                }

                                if ($("#Address").val().length == 0) {
                                    $("#Address").css('border-color', 'Red');
                                    req = 0;
                                    $("#Address").focus();


                                } else {
                                    $("#Address").css('border-color', '');
                                }

                                if ($("#MRAddress").val().length == 0) {
                                    $("#MRAddress").css('border-color', 'Red');
                                    req = 0;
                                    $("#MRAddress").focus();


                                } else {
                                    $("#MRAddress").css('border-color', '');
                                }

                                if ($("#District").val().length == 0) {
                                    $("#District").css('border-color', 'Red');
                                    req = 0;
                                    $("#District").focus();


                                } else {
                                    $("#District").css('border-color', '');
                                }

                                if ($("#Taluka").val().length == 0) {
                                    $("#Taluka").css('border-color', 'Red');
                                    req = 0;
                                    $("#Taluka").focus();


                                } else {
                                    $("#Taluka").css('border-color', '');
                                }

                                if ($("#Village").val().length == 0) {
                                    $("#Village").css('border-color', 'Red');
                                    req = 0;
                                    $("#Village").focus();


                                } else {
                                    $("#Village").css('border-color', '');
                                }

                                if ($("#Pincode").val().length == 0) {
                                    $("#Pincode").css('border-color', 'Red');
                                    req = 0;
                                    $("#Pincode").focus();


                                } else {
                                    $("#Pincode").css('border-color', '');
                                }
                                if (/[^0-9]/.test($("#Pincode").val())) {
                                    $("#Pincode").css('border-color', 'Red');
                                    req = 0;
                                } else {
                                    $("#Pincode").css('border-color', '');
                                }
                                if ($("#Pincode").val().length < 6) {
                                    $("#Pincode").css('border-color', 'Red');
                                    req = 0;
                                } else if ($("#Pincode").val().length > 6) {
                                    $("#Pincode").css('border-color', 'Red');
                                    req = 0;
                                } else {
                                    $("#Pincode").css('border-color', '');
                                }

                                if ($("#Yearsofresidenceatcurrentaddress").val().length == 0) {
                                    $("#Yearsofresidenceatcurrentaddress").css('border-color', 'Red');
                                    req = 0;
                                    $("#Yearsofresidenceatcurrentaddress").focus();


                                } else {
                                    $("#Yearsofresidenceatcurrentaddress").css('border-color', '');
                                }
                                if (/[^0-9]/.test($("#Yearsofresidenceatcurrentaddress").val())) {
                                    $("#Yearsofresidenceatcurrentaddress").css('border-color', 'Red');
                                    req = 0;
                                } else {
                                    $("#Yearsofresidenceatcurrentaddress").css('border-color', '');
                                }

                                if ($("#ResidingatpresentaddresssinceEnter_Yearyyyy").val().length == 0) {
                                    $("#ResidingatpresentaddresssinceEnter_Yearyyyy").css('border-color', 'Red');
                                    req = 0;
                                    $("#ResidingatpresentaddresssinceEnter_Yearyyyy").focus();


                                } else {
                                    $("#ResidingatpresentaddresssinceEnter_Yearyyyy").css('border-color', '');
                                }
                                if (/[^0-9]/.test($("#ResidingatpresentaddresssinceEnter_Yearyyyy").val())) {
                                    $("#ResidingatpresentaddresssinceEnter_Yearyyyy").css('border-color', 'Red');
                                    req = 0;
                                } else {
                                    $("#ResidingatpresentaddresssinceEnter_Yearyyyy").css('border-color', '');
                                }

                                if ($("#ApplicantsresidenceinMaharashtraState_3_years_required").val().length == 0) {
                                    $("#ApplicantsresidenceinMaharashtraState_3_years_required").css('border-color', 'Red');
                                    req = 0;
                                    $("#ApplicantsresidenceinMaharashtraState_3_years_required").focus();


                                } else {
                                    $("#ApplicantsresidenceinMaharashtraState_3_years_required").css('border-color', '');
                                }

                                if ($("#RelationofApplicantwithBeneficiary").val().length == 0) {
                                    $("#RelationofApplicantwithBeneficiary").css('border-color', 'Red');
                                    req = 0;
                                    $("#RelationofApplicantwithBeneficiary").focus();


                                } else {
                                    $("#RelationofApplicantwithBeneficiary").css('border-color', '');
                                }

                                if ($("#BeneficiarySalutation").val().length == 0) {
                                    $("#BeneficiarySalutation").css('border-color', 'Red');
                                    req = 0;
                                    $("#BeneficiarySalutation").focus();


                                } else {
                                    $("#BeneficiarySalutation").css('border-color', '');
                                }

                                if ($("#BeneficiaryName").val().length == 0) {
                                    $("#BeneficiaryName").css('border-color', 'Red');
                                    req = 0;
                                    $("#BeneficiaryName").focus();


                                } else {
                                    $("#BeneficiaryName").css('border-color', '');
                                }

                                if ($("#DateofBirthBeneficiary").val().length == 0) {
                                    $("#DateofBirthBeneficiary").css('border-color', 'Red');
                                    req = 0;
                                    $("#DateofBirthBeneficiary").focus();


                                } else {
                                    $("#DateofBirthBeneficiary").css('border-color', '');
                                }
                                var date_regex = /^(0[1-9]|1\d|2\d|3[01])\/(0[1-9]|1[0-2])\/(19|20)\d{2}$/;
                                if (!(date_regex.test($("#DateofBirthBeneficiary").val()))) {
                                    $("#DateofBirthBeneficiary").css('border-color', 'Red');
                                    req = 0;
                                } else {
                                    $("#DateofBirthBeneficiary").css('border-color', '');
                                }

                                if ($("#Resone").val().length == 0) {
                                    $("#Resone").css('border-color', 'Red');
                                    req = 0;
                                    $("#Resone").focus();


                                } else {
                                    $("#Resone").css('border-color', '');
                                }
                                if (req == 0) {
                                    return false;
                                } else {
                                    return true;
                                }
                            }
                        </script>
                        <script type='text/javascript' language='javascript'>
                            $("#BenificiaryUID").keypress(function(event) {
                                if (event.keyCode == 13) {
                                    event.preventDefault();
                                }
                            });
                            $("#BenificiaryUID").keypress(function(event) {
                                if (event.keyCode == 13) {
                                    event.preventDefault();
                                }
                            });
                            $("#ApplicantUID").keypress(function(event) {
                                if (event.keyCode == 13) {
                                    event.preventDefault();
                                }
                            });
                            $("#ApplicantUID").keypress(function(event) {
                                if (event.keyCode == 13) {
                                    event.preventDefault();
                                }
                            });
                            $("#CertificateName").keypress(function(event) {
                                if (event.keyCode == 13) {
                                    event.preventDefault();
                                }
                            });
                            $("#Salutation").keypress(function(event) {
                                if (event.keyCode == 13) {
                                    event.preventDefault();
                                }
                            });
                            $("#FullNameEnglish").keypress(function(event) {
                                if (event.keyCode == 13) {
                                    event.preventDefault();
                                }
                            });
                            $("#FullNameMarathi").keypress(function(event) {
                                if (event.keyCode == 13) {
                                    event.preventDefault();
                                }
                            });
                            $("#SalutationFather").keypress(function(event) {
                                if (event.keyCode == 13) {
                                    event.preventDefault();
                                }
                            });
                            $("#FatherNameEnglish").keypress(function(event) {
                                if (event.keyCode == 13) {
                                    event.preventDefault();
                                }
                            });
                            $("#FatherNameMarathi").keypress(function(event) {
                                if (event.keyCode == 13) {
                                    event.preventDefault();
                                }
                            });
                            $("#DateofBirth").keypress(function(event) {
                                if (event.keyCode == 13) {
                                    event.preventDefault();
                                }
                            });
                            $("#DateofBirth").keypress(function(event) {
                                if (event.keyCode == 13) {
                                    event.preventDefault();
                                }
                            });
                            $("#Age").keypress(function(event) {
                                if (event.keyCode == 13) {
                                    event.preventDefault();
                                }
                            });
                            $("#Age").keypress(function(event) {
                                if (event.keyCode == 13) {
                                    event.preventDefault();
                                }
                            });
                            $("#Gender").keypress(function(event) {
                                if (event.keyCode == 13) {
                                    event.preventDefault();
                                }
                            });
                            $("#Occupation").keypress(function(event) {
                                if (event.keyCode == 13) {
                                    event.preventDefault();
                                }
                            });
                            $("#Mobile").keypress(function(event) {
                                if (event.keyCode == 13) {
                                    event.preventDefault();
                                }
                            });
                            $("#Mobile").keypress(function(event) {
                                if (event.keyCode == 13) {
                                    event.preventDefault();
                                }
                            });
                            $("#Address").keypress(function(event) {
                                if (event.keyCode == 13) {
                                    event.preventDefault();
                                }
                            });
                            $("#MRAddress").keypress(function(event) {
                                if (event.keyCode == 13) {
                                    event.preventDefault();
                                }
                            });
                            $("#District").keypress(function(event) {
                                if (event.keyCode == 13) {
                                    event.preventDefault();
                                }
                            });
                            $("#Taluka").keypress(function(event) {
                                if (event.keyCode == 13) {
                                    event.preventDefault();
                                }
                            });
                            $("#Village").keypress(function(event) {
                                if (event.keyCode == 13) {
                                    event.preventDefault();
                                }
                            });
                            $("#Pincode").keypress(function(event) {
                                if (event.keyCode == 13) {
                                    event.preventDefault();
                                }
                            });
                            $("#Pincode").keypress(function(event) {
                                if (event.keyCode == 13) {
                                    event.preventDefault();
                                }
                            });
                            $("#Yearsofresidenceatcurrentaddress").keypress(function(event) {
                                if (event.keyCode == 13) {
                                    event.preventDefault();
                                }
                            });
                            $("#Yearsofresidenceatcurrentaddress").keypress(function(event) {
                                if (event.keyCode == 13) {
                                    event.preventDefault();
                                }
                            });
                            $("#ResidingatpresentaddresssinceEnter_Yearyyyy").keypress(function(event) {
                                if (event.keyCode == 13) {
                                    event.preventDefault();
                                }
                            });
                            $("#ResidingatpresentaddresssinceEnter_Yearyyyy").keypress(function(event) {
                                if (event.keyCode == 13) {
                                    event.preventDefault();
                                }
                            });
                            $("#ApplicantsresidenceinMaharashtraState_3_years_required").keypress(function(event) {
                                if (event.keyCode == 13) {
                                    event.preventDefault();
                                }
                            });
                            $("#RelationofApplicantwithBeneficiary").keypress(function(event) {
                                if (event.keyCode == 13) {
                                    event.preventDefault();
                                }
                            });
                            $("#BeneficiarySalutation").keypress(function(event) {
                                if (event.keyCode == 13) {
                                    event.preventDefault();
                                }
                            });
                            $("#BeneficiaryName").keypress(function(event) {
                                if (event.keyCode == 13) {
                                    event.preventDefault();
                                }
                            });
                            $("#DateofBirthBeneficiary").keypress(function(event) {
                                if (event.keyCode == 13) {
                                    event.preventDefault();
                                }
                            });
                            $("#DateofBirthBeneficiary").keypress(function(event) {
                                if (event.keyCode == 13) {
                                    event.preventDefault();
                                }
                            });
                            $("#Resone").keypress(function(event) {
                                if (event.keyCode == 13) {
                                    event.preventDefault();
                                }
                            });
                            $("#MOID").keypress(function(event) {
                                if (event.keyCode == 13) {
                                    event.preventDefault();
                                }
                            });
                        </script>
                        <script type='text/javascript' language='javascript'>
                            $(document).ready(function() {
                                enableTyping(new Array('FullNameEnglish', 'FullNameMarathi', 'FatherNameEnglish', 'FatherNameMarathi', 'Address', 'MRAddress', 'BeneficiaryName', 'Resone'), new Array('FullNameMarathi', 'FullNameMarathi', 'FatherNameMarathi', 'FatherNameMarathi', 'MRAddress', 'MRAddress', 'BeneficiaryName', 'Resone'), 'NAME', 'mr_in');
                            })
                        </script>

                        <input type="hidden" id="photo1" />

                        <input type="hidden" id="uploadForm1" />

                    </div>
                    <div id="myModal" name="myModal" class="modal">

                        <!-- Modal content -->
                        <div class="modal-content">
                            <div class="modal-header">
                                <span class="close">&times;</span>
                                <h2>Confirmation</h2>
                            </div>
                            <div class="modal-body">
                                <div class="form-group col-sm-12 panel-body">
                                    <div class="col-sm-8" id="MBContent">

                                    </div>
                                    <div class="col-sm-4" id="MBImage">

                                    </div>

                                </div>
                            </div>
                            <div style="text-align: center;">
                                <button id="btnConfirm" class="btnConfirm btn btn-success">Confirm</button>
                                <button id="btnCancel" class="btnCancel btn btn-success">Cancel</button>
                            </div>
                            <div class="modal-footer">
                                <h3></h3>
                            </div>
                        </div>

                    </div>
                </form>





                <script src="/Scripts/jquery-3.3.1.min.js"></script>
                <script src="/Scripts/jquery.validate.unobtrusive.min.js"></script>
                <script src="/Scripts/jquery.validate.min.js"></script>
                <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
                <script type="text/javascript" src="https://ajax.cdnjs.com/ajax/libs/json2/20110223/json2.js"></script>

                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

                <script src="/Scripts/ccv.js"></script>
                <script src="/Scripts/face.js"></script>
                <script src="/Scripts/jquery.facedetecton.js"></script>

                <script type="text/javascript" src="/webcamjs/webcam.js"></script>

                <script src="/js/jquery.loading-indicator.js"></script>
                <script src="/js/jquery.loading-indicator.min.js"></script>
                <link href="/css/jquery.loading-indicator.css" rel="stylesheet" />


                <script type="text/javascript">
                    debugger;
                    $("#ApplicantUID").blur(function() {
                        var uid = $("#ApplicantUID").val();
                        if (uid.length != "12") {

                            $("#ApplicantUID").css("border-color", "Red");

                        } else {
                            $("#ApplicantUID").css("border-color", "");
                        }
                    });
                    $("#Mobile").blur(function() {
                        var Mobile = $("#Mobile").val();
                        if (Mobile.length != "10") {

                            $("#Mobile").css("border-color", "Red");

                        } else {
                            $("#Mobile").css("border-color", "");
                        }
                    });
                    $("#Mobile_No").blur(function() {
                        var Mobile_No = $("#Mobile_No").val();
                        if (Mobile_No.length != "10") {

                            $("#Mobile_No").css("border-color", "Red");

                        } else {
                            $("#Mobile_No").css("border-color", "");
                        }
                    });

                    $("#Mobile_No_Beneficiary").blur(function() {
                        var Mobile_No_Beneficiary = $("#Mobile_No_Beneficiary").val();
                        if (Mobile_No_Beneficiary.length != "10") {

                            $("#Mobile_No_Beneficiary").css("border-color", "Red");

                        } else {
                            $("#Mobile_No_Beneficiary").css("border-color", "");
                        }
                    });
                    $("#MobileNo").blur(function() {
                        var MobileNo = $("#MobileNo").val();
                        if (MobileNo.length != "10") {
                            //alert("Please check UID No.");
                            $("#MobileNo").css("border-color", "Red");

                        } else {
                            $("#MobileNo").css("border-color", "");
                        }
                    });
                </script>

           
                <script type="text/javascript">
                    $(function() {
                        //Reference the DropDownList.
                        var ddlYears = $("#AdminYear");
                        var CompletionYear = $("#CompletionYear");
                        //Determine the Current Year.
                        var currentYear = (new Date()).getFullYear();

                        //Loop and add the Year values to DropDownList.
                        for (var i = 1950; i <= currentYear; i++) {
                            var option = $("<option value=''>Select</option>");
                            option.html(i);
                            option.val(i);
                            ddlYears.append(option);
                        }
                        for (var i = 1950; i <= currentYear; i++) {
                            var option = $("<option value=''>Select</option>");
                            option.html(i);
                            option.val(i);
                            CompletionYear.append(option);
                        }
                    });
                </script>
                <script type="text/javascript">
                    var $jqDate = jQuery('#DOB');
                    var dd = jQuery('#Date_of_Birth');
                    //Bind keyup/keydown to the input
                    $jqDate.bind('keyup', 'keydown', function(e) {

                        //To accomdate for backspacing, we detect which key was pressed - if backspace, do nothing:
                        if (e.which !== 8) {
                            var numChars = $jqDate.val().length;
                            if (numChars === 2 || numChars === 5) {
                                var thisVal = $jqDate.val();
                                thisVal += '/';
                                $jqDate.val(thisVal);
                            }
                        }
                    });
                    dd.bind('keyup', 'keydown', function(e) {

                        //To accomdate for backspacing, we detect which key was pressed - if backspace, do nothing:
                        if (e.which !== 8) {
                            var numChars = dd.val().length;
                            if (numChars === 2 || numChars === 5) {
                                var thisVal = dd.val();
                                thisVal += '/';
                                dd.val(thisVal);
                            }
                        }
                    });

                    var vv = jQuery('#BeneficiaryDateofBirth');
                    //Bind keyup/keydown to the input
                    vv.bind('keyup', 'keydown', function(e) {

                        //To accomdate for backspacing, we detect which key was pressed - if backspace, do nothing:
                        if (e.which !== 8) {
                            var numChars = vv.val().length;
                            if (numChars === 2 || numChars === 5) {
                                var thisVal = vv.val();
                                thisVal += '/';
                                vv.val(thisVal);
                            }
                        }
                    });
                    var bb = jQuery('#Beneficiary_Date_of_Birth');
                    //Bind keyup/keydown to the input
                    bb.bind('keyup', 'keydown', function(e) {

                        //To accomdate for backspacing, we detect which key was pressed - if backspace, do nothing:
                        if (e.which !== 8) {
                            var numChars = bb.val().length;
                            if (numChars === 2 || numChars === 5) {
                                var thisVal = bb.val();
                                thisVal += '/';
                                bb.val(thisVal);
                            }
                        }
                    });
                    var fb = jQuery('#Beneficiary_Date_of_Birth_Father');
                    //Bind keyup/keydown to the input
                    fb.bind('keyup', 'keydown', function(e) {

                        //To accomdate for backspacing, we detect which key was pressed - if backspace, do nothing:
                        if (e.which !== 8) {
                            var numChars = fb.val().length;
                            if (numChars === 2 || numChars === 5) {
                                var thisVal = fb.val();
                                thisVal += '/';
                                fb.val(thisVal);
                            }
                        }
                    });
                    var dfddf = jQuery('#DateofBirth');
                    //Bind keyup/keydown to the input
                    dfddf.bind('keyup', 'keydown', function(e) {

                        //To accomdate for backspacing, we detect which key was pressed - if backspace, do nothing:
                        if (e.which !== 8) {
                            var numChars = dfddf.val().length;
                            if (numChars === 2 || numChars === 5) {
                                var thisVal = dfddf.val();
                                thisVal += '/';
                                dfddf.val(thisVal);
                            }
                        }
                    });
                    var ssss = jQuery('#DateofBirthBeneficiary');
                    //Bind keyup/keydown to the input
                    ssss.bind('keyup', 'keydown', function(e) {

                        //To accomdate for backspacing, we detect which key was pressed - if backspace, do nothing:
                        if (e.which !== 8) {
                            var numChars = ssss.val().length;
                            if (numChars === 2 || numChars === 5) {
                                var thisVal = ssss.val();
                                thisVal += '/';
                                ssss.val(thisVal);
                            }
                        }
                    });
                </script>
                <script type="text/javascript">
                    function handleDOBChanged(date) {

                        if (isDate(date)) {
                            var age = calculateAge(parseDate(date), new Date());
                            $("#Age").attr("disabled", true);
                            $("#age").attr("disabled", true);
                            return age;
                        } else {
                            $("#Age").attr("disabled", true);
                            $("#age").attr("disabled", true);
                            return age;
                        }


                    }
                    //convert the date string in the format of dd/mm/yyyy into a JS date object
                    function parseDate(dateStr) {
                        var dateParts = dateStr.split("/");
                        return new Date(dateParts[2], (dateParts[1] - 1), dateParts[0]);
                    }

                    //is valid date format
                    function calculateAge(dateOfBirth, dateToCalculate) {
                        var calculateYear = dateToCalculate.getFullYear();
                        var calculateMonth = dateToCalculate.getMonth();
                        var calculateDay = dateToCalculate.getDate();

                        var birthYear = dateOfBirth.getFullYear();
                        var birthMonth = dateOfBirth.getMonth();
                        var birthDay = dateOfBirth.getDate();

                        var age = calculateYear - birthYear;
                        var ageMonth = calculateMonth - birthMonth;
                        var ageDay = calculateDay - birthDay;

                        if (ageMonth < 0 || (ageMonth == 0 && ageDay < 0)) {
                            age = parseInt(age) - 1;
                        }
                        return age;
                    }

                    function isDate(txtDate) {
                        var currVal = txtDate;
                        if (currVal == '')
                            return true;

                        //Declare Regex
                        var rxDatePattern = /^(\d{1,2})(\/|-)(\d{1,2})(\/|-)(\d{4})$/;
                        var dtArray = currVal.match(rxDatePattern); // is format OK?

                        if (dtArray == null)
                            return false;

                        //Checks for dd/mm/yyyy format.
                        var dtDay = dtArray[1];
                        var dtMonth = dtArray[3];
                        var dtYear = dtArray[5];

                        if (dtMonth < 1 || dtMonth > 12)
                            return false;
                        else if (dtDay < 1 || dtDay > 31)
                            return false;
                        else if ((dtMonth == 4 || dtMonth == 6 || dtMonth == 9 || dtMonth == 11) && dtDay == 31)
                            return false;
                        else if (dtMonth == 2) {
                            var isleap = (dtYear % 4 == 0 && (dtYear % 100 != 0 || dtYear % 400 == 0));
                            if (dtDay > 29 || (dtDay == 29 && !isleap))
                                return false;
                        }

                        return true;
                    }

                    $("#Data_Entry").change(function() {
                        var vl = $(this).val();

                        //if (vl == "State Entry") {
                        //    $("#Beneficiary_Caste_Category_Details option[value='Maratha']").remove();
                        //    $("#Beneficiarys_Father_Caste option[value='Maratha']").remove();
                        //} else if (vl == "Central Entry") {
                        //    $("#Beneficiary_Caste_Category_Details").append('<option value="Maratha">Maratha</option>');
                        //    $("#Beneficiarys_Father_Caste").append('<option value="Maratha">Maratha</option>');
                        //} else {
                        //    //$("#Beneficiary_Caste_Category_Details").append('<option value="Maratha">Maratha</option>');
                        //    //$("#Beneficiarys_Father_Caste").append('<option value="Maratha">Maratha</option>');
                        //}
                    });
                    $("#DateOfBirth").change(function() {

                        var age = handleDOBChanged($("#DadatepickerteOfBirth").val());

                        $("#Age").val(age);

                    });



                    $("#IncomeCeritificate").change(function() {

                        var incme = $("#IncomeCeritificate").val();
                        if (incme == '१ वर्षासाठी') {
                            $("#Income_2016_201711").fadeOut();
                            $("#Income_2017_201811").fadeOut();
                            $("#Income_2016_201711").val('');
                            $("#Income_2017_201811").val('');

                            $("#Income_2018_201911").fadeIn();



                        } else if (incme == '३ वर्षांसाठी') {
                            $("#Income_2016_201711").fadeIn();
                            $("#Income_2017_201811").fadeIn();
                            $("#Income_2018_201911").fadeIn();


                            $("#Income_2016_2017").fadeIn();
                            $("#Income_2017_2018").fadeIn();
                            $("#Income_2018_2019").fadeIn();
                        }


                    });
                </script>
                <script type="text/javascript">
                    $("#FullNameEnglish").blur(function() {

                        var fther = "";
                        var spl = $("#FullNameEnglish").val().split(' ');
                        var ln = spl.length;

                        if (spl.length > 1) {
                            for (var i = 1; i < spl.length; i++) {

                                if (i == 1) {
                                    fther = fther + spl[i];
                                } else {
                                    fther = fther + " " + spl[i];
                                }

                            }

                            $("#FatherNameEnglish").val(fther);


                        }
                    });








                    //$("#Salutation").blur(function () {
                    //    var sal = $("#Salutation").val();
                    //    $("#SalutationFather").val(sal);

                    //});





                </script>

                <script type="text/javascript" language="javascript">
                    function GetParameterValues(param) {
                        var url = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
                        for (var i = 0; i < url.length; i++) {
                            var urlparam = url[i].split('=');
                            if (urlparam[0] == param) {
                                return urlparam[1];
                            }
                        }
                    }

                    $("#Beneficiary_Caste_Category_Details").change(function() {

                        var dl = $("#Beneficiary_Caste_Category_Details").val();
                        $("#Beneficiarys_Father_Caste").val(dl);

                        //if (dl == "Maratha") {
                        //    $("#Data_Entry").val("Central Entry");
                        //    $("#Data_Entry").attr("Disabled", true);
                        //} else { $("#Data_Entry").attr("Disabled", false); }
                    });
                    //$("#DataEntry").change(function () {
                    //    var dd = $("#DataEntry").val();
                    //    if (dd == "Buddhism Certificate") {
                    //        setTimeout(function () {
                    //            $("#Category").val('SC');
                    //        }, 1000);

                    //        var Url = "/api/AllDropFillApi/Beneficiary_Caste_Category_Details";
                    //        $.ajax({
                    //            url: Url,
                    //            type: "GET",
                    //            dataType: 'json',
                    //            data: { countryId: 'SC' },
                    //            success: function (data) {
                    //                var json = JSON.parse(data)
                    //                $("#Beneficiary_Caste_Category_Details").empty();

                    //                $("#Beneficiary_Caste_Category_Details").append("<option value=''>Select</option>");

                    //                $.each(json, function (index, optiondata) {


                    //                    $("#Beneficiary_Caste_Category_Details").append("<option value='" + optiondata.id + "'>" + optiondata.name + "</option>");
                    //                });
                    //            }
                    //        });
                    //        setTimeout(function () {
                    //            alert('hi');
                    //            $("#Beneficiary_Caste_Category_Details").val('25939665-6DB9-475E-AD2D-14F19B6F64D3');
                    //        })

                    //    }
                    //});



                    $(document).ready(function() {

                        var userid = '0';

                        if (userid == "0") {
                            $("#Birth_Country").attr("disabled", true);
                            $("#Birth_State").attr("disabled", true);
                        }
                        setTimeout(function() {
                            var countryID = $('#Birth_State').val();

                            var Url = "/api/AllDropFillApi/Birth_District";
                            $.ajax({
                                url: Url,
                                type: "GET",
                                dataType: 'json',
                                data: {
                                    countryId: countryID
                                },
                                success: function(data) {
                                    var json = JSON.parse(data)
                                    $("#Birth_District").empty();

                                    $("#Birth_District").append("<option value=''>Select</option>");

                                    $.each(json, function(index, optiondata) {


                                        $("#Birth_District").append("<option value='" + optiondata.id + "'>" + optiondata.name + "</option>");
                                    });
                                }
                            });

                            if (countryID != "27") {
                                debugger;
                                $('#Birth_District').fadeOut('slow');
                                $('#Birth_Tehsil').fadeOut('slow');
                                $('#Birth_Village').fadeOut('slow');

                                $('#lblBirth_District').fadeOut('slow');

                                $('#lblBirth_Tehsil').fadeOut('slow');

                                $('#lblBirth_Village').fadeOut('slow');



                                $('#Birth_Districttxt').fadeIn('slow');
                                $('#Birth_Tehsiltxt').fadeIn('slow');
                                $('#Birth_Villagetxt').fadeIn('slow');

                                $('#lblBirth_Districttxt').fadeIn('slow');

                                $('#lblBirth_Villagetxt').fadeIn('slow');

                                $('#lblBirth_Tehsiltxt').fadeIn('slow');

                                $('#Birth_District').removeAttr('required');
                                $('#Birth_Tehsil').removeAttr('required');
                                $('#Birth_Village').removeAttr('required');


                                $('#Birth_Districttxt').addClass('req');
                                $('#Birth_Tehsiltxt').addClass('req');
                                $('#Birth_Villagetxt').addClass('req');

                                $('#Birth_Districttxt').attr('required');
                                $('#Birth_Tehsiltxt').attr('required');
                                $('#Birth_Villagetxt').attr('required');
                                $('#Birth_Statetxt').fadeIn('slow');
                                $('#lblBirth_Statetxt').fadeIn('slow');
                                $('#lblBirth_Talukatxt').fadeIn('slow');

                            } else {

                                $('#Birth_Districttxt').text('');
                                $('#Birth_Districttxt').text('');
                                $('#Birth_Districttxt').text('');


                                $('#Birth_District').fadeIn('slow');
                                $('#Birth_Tehsil').fadeIn('slow');
                                $('#Birth_Village').fadeIn('slow');

                                $('#lblBirth_District').fadeIn('slow');

                                $('#lblBirth_Tehsil').fadeIn('slow');

                                $('#lblBirth_Village').fadeIn('slow');
                                $('#Birth_Districttxt').fadeOut('slow');
                                $('#Birth_Tehsiltxt').fadeOut('slow');
                                $('#Birth_Villagetxt').fadeOut('slow');

                                $('#lblBirth_Districttxt').fadeOut('slow');

                                $('#lblBirth_Villagetxt').fadeOut('slow');

                                $('#lblBirth_Tehsiltxt').fadeOut('slow');





                            }


                        }, 3000);








                        $("#BenificiaryUID").blur(function() {


                            var Formid = GetParameterValues('Formid');
                            if (Formid != "1012" && Formid != "6" && Formid != "7" && Formid != "1010") {

                                var uid = $("#BenificiaryUID").val();
                                if (uid.length != "12") {
                                    //alert("Please check UID No.");
                                    $("#BenificiaryUID").css("border-color", "Red");
                                } else {
                                    $("#BenificiaryUID").css("border-color", "");



                                    var homeLoader = $('body').loadingIndicator({
                                        useImage: false,
                                    }).data("loadingIndicator");
                                    homeLoader.show();

                                
                                    homeLoader.hide();


                                }
                            }

                        });


                    });

                    function Incomevalidation() {
                        debugger;


                        if ($("#First_Income_from_Salary_Wages").val() == "" && $("#Second_Income_from_Business_Enterprises").val() == "" && $("#Third_Income_from_Agriculture").val() == "") {
                            swal("Please Enter Any one Income");
                            //$("#First_Income_from_Salary_Wages").css('border-color', 'Red');

                            return false;
                        } else {
                            if ($("#First_Income_from_Salary_Wages").val() > 0) {
                                if ($("#First_Income_from_Salary_Wages").val() > 800000 || $("#First_Income_from_Salary_Wages").val() < 45000) {
                                    swal("Please Enter Amount Less Than 8000001 Or Greater Than 45000");
                                    $("#First_Income_from_Salary_Wages").css('border-color', 'Red');
                                    $("#First_Income_from_Salary_Wages").focus();
                                    return false;
                                } else {
                                    $("#First_Income_from_Salary_Wages").css('border-color', '');
                                    return true;
                                }

                            } else if ($("#Second_Income_from_Business_Enterprises").val() > 0) {
                                if ($("#Second_Income_from_Business_Enterprises").val() > 800000 || $("#Second_Income_from_Business_Enterprises").val() < 45000) {
                                    swal("Please Enter Amount Less Than 8000002 Or Greater Than 45000");
                                    $("#Second_Income_from_Business_Enterprises").css('border-color', 'Red');
                                    $("#Second_Income_from_Business_Enterprises").focus();
                                    return false;
                                } else {
                                    $("#First_Income_from_Salary_Wages").css('border-color', '');
                                    return true;
                                }
                            } else if ($("#Third_Income_from_Agriculture").val() > 0) {
                                if ($("#Third_Income_from_Agriculture").val() > 800000 || $("#Third_Income_from_Agriculture").val() < 45000) {
                                    swal("Please Enter Amount Less Than 8000003 Or Greater Than 45000");
                                    $("#Third_Income_from_Agriculture").css('border-color', 'Red');
                                    $("#Third_Income_from_Agriculture").focus();
                                    return false;
                                } else {
                                    $("#First_Income_from_Salary_Wages").css('border-color', '');
                                    return true;
                                }
                            }
                        }

                        //if ($("#First_Income_from_Salary_Wages").val() == 0) {
                        //    $("#First_Income_from_Salary_Wages").css('border-color', 'Red');
                        //    alert('first');
                        //    return false;
                        //}
                        //else
                        //{
                        //    $("#First_Income_from_Salary_Wages").css('border-color', '');

                        //}
                        //if ($("#First_Income_from_Salary_Wages").val() == "") {
                        //    alert('first');
                        //    $("#First_Income_from_Salary_Wages").css('border-color', 'Red');
                        //    return false;
                        //}
                        //else {
                        //    $("#First_Income_from_Salary_Wages").css('border-color', '');

                        //}

                        //if ($("#First_Income_from_Salary_Wages").val() < 45000) {
                        //    $("#First_Income_from_Salary_Wages").css('border-color', 'Red');
                        //    return false;
                        //} else {
                        //    $("#First_Income_from_Salary_Wages").css('border-color', '');

                        //}
                        //if ($("#First_Income_from_Salary_Wages").val() > 800000) {
                        //    $("#First_Income_from_Salary_Wages").css('border-color', 'Red');
                        //    return false;
                        //} else {
                        //    $("#First_Income_from_Salary_Wages").css('border-color', '');

                        //}



                        //if ($("#Second_Income_from_Business_Enterprises").val() == 0) {
                        //    $("#Second_Income_from_Business_Enterprises").val('0')
                        //} else {
                        //    $("#Second_Income_from_Business_Enterprises").css('border-color', '');

                        //}
                        //if ($("#Second_Income_from_Business_Enterprises").val() == "") {
                        //    alert('second');
                        //    $("#Second_Income_from_Business_Enterprises").val('0')
                        //} else {
                        //    $("#Second_Income_from_Business_Enterprises").css('border-color', '');

                        //}


                        //if ($("#Second_Income_from_Business_Enterprises").val() > 0) {

                        //    if ($("#Second_Income_from_Business_Enterprises").val() < 45000) {
                        //        $("#Second_Income_from_Business_Enterprises").css('border-color', 'Red');
                        //        return false;
                        //    } else {
                        //        $("#Second_Income_from_Business_Enterprises").css('border-color', '');

                        //    }
                        //    if ($("#Second_Income_from_Business_Enterprises").val() > 800000) {
                        //        $("#Second_Income_from_Business_Enterprises").css('border-color', 'Red');
                        //        return false;
                        //    } else {
                        //        $("#Second_Income_from_Business_Enterprises").css('border-color', '');

                        //    }
                        //}




                        //if ($("#Third_Income_from_Agriculture").val() == 0) {
                        //    $("#Third_Income_from_Agriculture").val('0')
                        //} else {
                        //    $("#Third_Income_from_Agriculture").css('border-color', '');

                        //}
                        //if ($("#Third_Income_from_Agriculture").val() == "") {
                        //    alert('third');
                        //    $("#Third_Income_from_Agriculture").val('0')
                        //} else {
                        //    $("#Third_Income_from_Agriculture").css('border-color', '');

                        //}

                        //if ($("#Third_Income_from_Agriculture").val() > 0) {
                        //    if ($("#Third_Income_from_Agriculture").val() < 45000) {
                        //        $("#Third_Income_from_Agriculture").css('border-color', 'Red');

                        //        return false;
                        //    } else {
                        //        $("#Third_Income_from_Agriculture").css('border-color', '');

                        //    }
                        //    if ($("#Third_Income_from_Agriculture").val() > 800000) {
                        //        $("#Third_Income_from_Agriculture").css('border-color', 'Red');
                        //        return false;
                        //    } else {
                        //        $("#Third_Income_from_Agriculture").css('border-color', '');
                        //    }
                        //}



                        //if (($("#Second_Income_from_Business_Enterprises").val() == 0 || $("#Second_Income_from_Business_Enterprises").val() != "")) {
                        //    $("#Second_Income_from_Business_Enterprises").val('0')

                        //}
                        //if ($("#Third_Income_from_Agriculture").val() == 0 || $("#Third_Income_from_Agriculture").val() != "") {
                        //    $("#Third_Income_from_Agriculture").val('0')
                        //}

                        return true;



                    };

                    //function Incomevalidation() {
                    //    debugger;


                    //    if ($("#First_Income_from_Salary_Wages").val() == "" && $("#Second_Income_from_Business_Enterprises").val() == "" && $("#Third_Income_from_Agriculture").val() == "") {
                    //        swal("Please Enter Any one Income");
                    //        //$("#First_Income_from_Salary_Wages").css('border-color', 'Red');
                    //        return false;
                    //    }

                    //    else
                    //    {
                    //        if ($("#First_Income_from_Salary_Wages").val() > 0) {
                    //            if ($("#First_Income_from_Salary_Wages").val() > 800000)
                    //            {
                    //                swal("Please Enter Amount Less Than 8000001");
                    //            }

                    //        }
                    //        else if ($("#Second_Income_from_Business_Enterprises").val() > 0) {
                    //            if ($("#Second_Income_from_Business_Enterprises").val() > 800000) {
                    //                swal("Please Enter Amount Less Than 8000002");
                    //            }
                    //        }
                    //        else if ($("#Third_Income_from_Agriculture").val() > 0)
                    //        {
                    //            if ($("#Third_Income_from_Agriculture").val() > 800000) {
                    //                swal("Please Enter Amount Less Than 8000003");
                    //            }
                    //        }
                    //    }

                    //    //if ($("#First_Income_from_Salary_Wages").val() == 0) {
                    //    //    $("#First_Income_from_Salary_Wages").css('border-color', 'Red');
                    //    //    alert('first');
                    //    //    return false;
                    //    //}
                    //    //else
                    //    //{
                    //    //    $("#First_Income_from_Salary_Wages").css('border-color', '');

                    //    //}
                    //    //if ($("#First_Income_from_Salary_Wages").val() == "") {
                    //    //    alert('first');
                    //    //    $("#First_Income_from_Salary_Wages").css('border-color', 'Red');
                    //    //    return false;
                    //    //}
                    //    //else {
                    //    //    $("#First_Income_from_Salary_Wages").css('border-color', '');

                    //    //}

                    //    //if ($("#First_Income_from_Salary_Wages").val() < 45000) {
                    //    //    $("#First_Income_from_Salary_Wages").css('border-color', 'Red');
                    //    //    return false;
                    //    //} else {
                    //    //    $("#First_Income_from_Salary_Wages").css('border-color', '');

                    //    //}
                    //    //if ($("#First_Income_from_Salary_Wages").val() > 800000) {
                    //    //    $("#First_Income_from_Salary_Wages").css('border-color', 'Red');
                    //    //    return false;
                    //    //} else {
                    //    //    $("#First_Income_from_Salary_Wages").css('border-color', '');

                    //    //}



                    //    //if ($("#Second_Income_from_Business_Enterprises").val() == 0) {
                    //    //    $("#Second_Income_from_Business_Enterprises").val('0')
                    //    //} else {
                    //    //    $("#Second_Income_from_Business_Enterprises").css('border-color', '');

                    //    //}
                    //    //if ($("#Second_Income_from_Business_Enterprises").val() == "") {
                    //    //    alert('second');
                    //    //    $("#Second_Income_from_Business_Enterprises").val('0')
                    //    //} else {
                    //    //    $("#Second_Income_from_Business_Enterprises").css('border-color', '');

                    //    //}


                    //    //if ($("#Second_Income_from_Business_Enterprises").val() > 0) {

                    //    //    if ($("#Second_Income_from_Business_Enterprises").val() < 45000) {
                    //    //        $("#Second_Income_from_Business_Enterprises").css('border-color', 'Red');
                    //    //        return false;
                    //    //    } else {
                    //    //        $("#Second_Income_from_Business_Enterprises").css('border-color', '');

                    //    //    }
                    //    //    if ($("#Second_Income_from_Business_Enterprises").val() > 800000) {
                    //    //        $("#Second_Income_from_Business_Enterprises").css('border-color', 'Red');
                    //    //        return false;
                    //    //    } else {
                    //    //        $("#Second_Income_from_Business_Enterprises").css('border-color', '');

                    //    //    }
                    //    //}




                    //    //if ($("#Third_Income_from_Agriculture").val() == 0) {
                    //    //    $("#Third_Income_from_Agriculture").val('0')
                    //    //} else {
                    //    //    $("#Third_Income_from_Agriculture").css('border-color', '');

                    //    //}
                    //    //if ($("#Third_Income_from_Agriculture").val() == "") {
                    //    //    alert('third');
                    //    //    $("#Third_Income_from_Agriculture").val('0')
                    //    //} else {
                    //    //    $("#Third_Income_from_Agriculture").css('border-color', '');

                    //    //}

                    //    //if ($("#Third_Income_from_Agriculture").val() > 0) {
                    //    //    if ($("#Third_Income_from_Agriculture").val() < 45000) {
                    //    //        $("#Third_Income_from_Agriculture").css('border-color', 'Red');

                    //    //        return false;
                    //    //    } else {
                    //    //        $("#Third_Income_from_Agriculture").css('border-color', '');

                    //    //    }
                    //    //    if ($("#Third_Income_from_Agriculture").val() > 800000) {
                    //    //        $("#Third_Income_from_Agriculture").css('border-color', 'Red');
                    //    //        return false;
                    //    //    } else {
                    //    //        $("#Third_Income_from_Agriculture").css('border-color', '');
                    //    //    }
                    //    //}



                    //    //if (($("#Second_Income_from_Business_Enterprises").val() == 0 || $("#Second_Income_from_Business_Enterprises").val() != "")) {
                    //    //    $("#Second_Income_from_Business_Enterprises").val('0')

                    //    //}
                    //    //if ($("#Third_Income_from_Agriculture").val() == 0 || $("#Third_Income_from_Agriculture").val() != "") {
                    //    //    $("#Third_Income_from_Agriculture").val('0')
                    //    //}

                    //    return true;



                    //};

                    function IncomeCeritificateNew() {
                        var IncomeCeritificate = $("#IncomeCeritificate").val();
                        var Income_2018_2019 = $("#Income_2018_2019").val();
                        var Income_2016_2017 = $("#Income_2016_2017").val();
                        var Income_2017_2018 = $("#Income_2017_2018").val();

                        if (IncomeCeritificate == "१ वर्षासाठी") {
                            if (Income_2018_2019.length > 0) {
                                if (Income_2018_2019 >= 21000 && Income_2018_2019 < 10000000) {
                                    $("#Income_2018_2019").css('border-color', '');
                                    return true;
                                } else {
                                    $("#Income_2018_2019").css('border-color', 'Red');
                                    $("#Income_2018_2019").focus();
                                    return false;
                                }
                            } else {
                                $("#Income_2018_2019").css('border-color', 'Red');
                                $("#Income_2018_2019").focus();
                                return false;
                            }
                        } else {
                            if (Income_2016_2017.length > 0 && Income_2017_2018.length > 0 && Income_2018_2019.length > 0) {
                                if (Income_2016_2017 >= 21000 && Income_2016_2017 <= 10000000 && Income_2017_2018 >= 21000 && Income_2017_2018 <= 10000000 && Income_2018_2019 >= 21000 && Income_2018_2019 <= 10000000) {
                                    $("#Income_2018_2019").css('border-color', '');
                                    $("#Income_2016_2017").css('border-color', '');
                                    $("#Income_2017_2018").css('border-color', '');
                                    return true;
                                } else {
                                    $("#Income_2018_2019").css('border-color', 'Red');
                                    $("#Income_2016_2017").css('border-color', 'Red');
                                    $("#Income_2017_2018").css('border-color', 'Red');
                                    $("#Income_2018_2019").focus();
                                    $("#Income_2016_2017").focus();
                                    $("#Income_2017_2018").focus();
                                    return false;
                                }
                            } else {
                                $("#Income_2018_2019").css('border-color', 'Red');
                                $("#Income_2016_2017").css('border-color', 'Red');
                                $("#Income_2017_2018").css('border-color', 'Red');
                                return false;
                            }
                        }
                    }


                    $("#btnSaveDraft").click(function(event) {
                        event.preventDefault();
                        var boolflag = true;
                        var BenificiaryUID = $("#BenificiaryUID").val();
                        var ApplicantUID = $("#ApplicantUID").val();
                        if (BenificiaryUID.length != "12") {
                            $("#BenificiaryUID").css("border-color", "Red");
                        } else if (ApplicantUID.length != "12") {
                            $("#ApplicantUID").css("border-color", "Red");
                        } else {
                            savedet("draft");
                        }

                    });

                    $("#btnSaveEmp").click(function(event) {


                        event.preventDefault();

                        var boolflag = true;

                        debugger;
                        var favorite = [];
                        $.each($("input[name='ChkSkills']:checked"), function() {
                            favorite.push($(this).val());
                        });
                        var Formids = '1015';
                        var ID = '';

                        if (Formids == 6) {
                            debugger;

                            if (Incomevalidation() == true) {


                                showpop();
                            } else {

                                Validation();
                            }
                        } else if (Formids == 1014) {
                            if (IncomeCeritificateNew() == true) {


                                showpop();
                            } else {

                                IncomeCeritificateNew();
                            }
                        } else if (Formids == 7) {

                            if (ValidBirth() == true) {

                                showpop();
                            } else {
                                showpop();
                            }
                        } else {

                            showpop();
                        }

                    });




                    //$("#").on('Click', function () {

                    $(document).on('click', '#btnConfirm', function() {
                        event.preventDefault();
                        $("#btnConfirm").attr("disabled", true);
                        var Formids = '1015';
                        var ID = '';
                        savedet("");

                    });

                    $("#btnCancel").click(function(event) {
                        event.preventDefault();
                        var modal = document.getElementById("myModal");
                        modal.style.display = "none";
                    });


                    function savedet(draft) {
                        //var homeLoader = $('body').loadingIndicator({
                        //    useImage: false,
                        //}).data("loadingIndicator");

                        //homeLoader.show();
                        var aptoken = ''; //GetParameterValues('ApToken');
                        var date = ''; //GetParameterValues('Date');
                        var listitem = [];
                  
                    }

                </script>
                <script language="JavaScript">
                    if ($("#my_camera").length > 0) {
                        Webcam.set({
                            // live preview size

                            width: 320,
                            height: 240,

                            // device capture size
                            dest_width: 640,
                            dest_height: 480,

                            // final cropped size
                            crop_width: 480,
                            crop_height: 480,

                            // format and quality
                            image_format: 'jpeg',
                            jpeg_quality: 90,

                            // flip horizontal (mirror mode)
                            flip_horiz: true

                        });

                        //if (Webcam.getCameraList().length == 0) {
                        //    alert('You don\'t have a web camera');
                        //} else { alert('done'); }

                        Webcam.attach('#my_camera');

                    }
                </script>
                <script type="text/javascript">
                    //function readFile() {

                    //    var size1 = 0;
                    //    if (this.files && this.files[0]) {
                    //        size1 = this.files[0].size;
                    //        size1 = size1 / 1024
                    //        var FR = new FileReader();
                    //        FR.addEventListener("load", function (e) {
                    //            document.getElementById('results').innerHTML =
                    //                '<img src="' + e.target.result + '" id="picture" name="filepath1" class="pull-right" style="height:200px;width:200px"/>';
                    //            $('#picture').attr('src', e.target.result);
                    //            var img = new Image;
                    //            img.src = e.target.result;
                    //            img.onload = function () {
                    //                var width = img.width;

                    //                var height = img.height;
                    //                var aspratio = parseInt(height) / parseInt(width);
                    //                if (width != 160) {
                    //                    document.getElementById('results').innerHTML =
                    //                        '<img src="" id="picture" name="filepath1" class="pull-right" style="height:200px;width:200px"/>';
                    //                    alert('The width of the photograph should be 160 pixels.');
                    //                }
                    //                else if (aspratio < 1.25 || aspratio > 1.33) {
                    //                    document.getElementById('results').innerHTML =
                    //                        '<img src="" id="picture" name="filepath1" class="pull-right" style="height:200px;width:200px"/>';
                    //                    alert('The height of the photograph should fall between 200 to 212 pixels.');
                    //                }
                    //                else {
                    //                    document.getElementById('results').innerHTML =
                    //                        '<img src="' + e.target.result + '" id="picture" name="filepath1" class="pull-right" style="height:200px;width:200px"/>';
                    //                }
                    //                //document.getElementById("img").src = e.target.result;



                    //                if ((size1 >= 5 && size1 <= 20) || width != 160 || (aspratio < 1.25 || aspratio > 1.33)) {
                    //                    setTimeout(function () { showfacedetect(); }, 1000);
                    //                } else {
                    //                    alert('Please upload image between 5kb to 20 kb only.');
                    //                    $('#btnSaveEmp').attr("disabled", true);
                    //                    document.getElementById('results').innerHTML =
                    //                        '<img src="" id="picture" name="filepath1" class="pull-right" style="height:200px;width:200px"/>';
                    //                }
                    //            }

                    //        });

                    //        FR.readAsDataURL(this.files[0]);

                    //    }


                    //}


                    function readURL(input, text) {


                        debugger;
                        var uploadImage;
                        var uploadFile;
                        uploadImage = document.getElementById("inFileUpload").files[0];
                        fileReader.readAsDataURL(uploadImage);



                    }


                    var fileReader = new FileReader();


                    fileReader.onload = function(event) {

                        //alert(event.target.fileName);
                        var image = new Image();

                        image.onload = function() {

                            //document.getElementById("original-Img").src = image.src;
                            var canvas = document.createElement("canvas");
                            var context = canvas.getContext("2d");
                            canvas.width = 160;
                            if ((image.width / image.height) >= 0.76 && (image.width / image.height) <= 0.80) {

                                canvas.height = image.height * canvas.width / image.width;
                            } else if (image.width / image.height < 0.76) {
                                canvas.height = 212;
                            } else {
                                canvas.height = 200;
                            }

                            //canvas.width = 160;
                            //canvas.height = 212;
                            //if (image.width > 500) {
                            //    canvas.width = 500;


                            //}
                            //canvas.height = image.height * canvas.width / image.width;
                            //// canvas.width = image.width / 4;
                            ////canvas.height = image.height / 4;
                            context.drawImage(image,
                                0,
                                0,
                                image.width,
                                image.height,
                                0,
                                0,
                                canvas.width,
                                canvas.height
                            );
                            var dataURL = canvas.toDataURL("image/jpeg");
                            document.getElementById('results').innerHTML = '<img src="" id="picture" name="filepath1" class="pull-right" style="height:200px;width:200px"/>'
                            document.getElementById("picture").src = dataURL;
                            setTimeout(function() {
                                showfacedetect();
                            }, 1000);
                        }
                        image.src = event.target.result;
                    };

                    $(document).ready(function() {


                        function GetParameterValues(param) {
                            var url = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
                            for (var i = 0; i < url.length; i++) {
                                var urlparam = url[i].split('=');
                                if (urlparam[0] == param) {
                                    return urlparam[1];
                                }
                            }
                        }
                        //var id = GetParameterValues('id');



                        //location.replace("/PrintReciepts/Index?MainIndexid&="+ main + "");
                    });


                    //function showfacedetect() {

                    //    var coords = $('#picture').faceDetection({
                    //        complete: function () {
                    //            //$this.text('Done!');
                    //        },
                    //        error: function (img, code, message) {
                    //            //$this.text('error!');
                    //            //alert(code);
                    //            //alert('Error: ' + message);
                    //            return false;
                    //        }
                    //    });
                    //    //alert('coords l : ' + coords.length);
                    //    if (coords.length == 1) {
                    //        alert(coords.length);
                    //        $('#btnSaveEmp').attr("disabled", false);
                    //        $('#btnSaveDraft').attr("disabled", false);
                    //        alert('Face Detected');
                    //        return true;
                    //    }
                    //    else {
                    //        $('#btnSaveEmp').attr("disabled", true);
                    //        $('#btnSaveDraft').attr("disabled", true);
                    //        alert('Face Detection Failed. Please upload proper image.');
                    //        return false;
                    //    }
                    //}


                    //function canvasimage() {

                    //    //alert(event.target.fileName);
                    //    var image = new Image();
                    //    image.src = $("#picture").attr('src');
                    //    image.onload = function () {
                    //        //document.getElementById("original-Img").src = image.src;
                    //        var canvas = document.createElement("canvas");
                    //        var context = canvas.getContext("2d");



                    //        canvas.width = 160;
                    //        canvas.height = 212;
                    //        alert(canvas.height);
                    //        context.drawImage(image,
                    //            0,
                    //            0,
                    //            image.width,
                    //            image.height,
                    //            0,
                    //            0,
                    //            canvas.width,
                    //            canvas.height
                    //        );





                    //        document.getElementById("picture").src = canvas.toDataURL("image/jpeg");

                    //        //var base64 = getBase64Image(document.getElementById("imgRationcardPhoto"));


                    //    }
                    //}


                    function ValidBirth() {
                        var stateid = $("#Birth_State").val();
                        if (stateid == "27") {


                            if ($("#Birth_District").val().length == 0) {
                                $("#Birth_District").css('border-color', 'Red');

                                $("#Birth_District").focus();
                                return false;


                            } else {
                                $("#Birth_District").css('border-color', '');
                            }

                            if ($("#Birth_Tehsil").val().length == 0) {
                                $("#Birth_Tehsil").css('border-color', 'Red');

                                $("#Birth_Tehsil").focus();
                                return false;


                            } else {
                                $("#Birth_Village").css('border-color', '');
                            }

                            if ($("#Birth_Village").val().length == 0) {
                                $("#Birth_Village").css('border-color', 'Red');

                                $("#Birth_Village").focus();
                                return false;


                            } else {
                                $("#Birth_Village").css('border-color', '');
                            }

                            return true;
                        }
                    }
                </script>
                <script type="text/javascript">
                    $("#Main_Index_ID").blur(function() {

                        var mid = $("#Main_Index_ID").val();
                        var from = $("#Form").val();
                        if (from == "EWS 10% certificate for Maharashtra government") {
                            from = "6";
                        } else if (from == "Age Nationality and Domicile") {
                            from = "7";
                        } else if (from == "Special Assistance Scheme") {
                            from = "1009";
                        } else if (from == "Non-Creamy Layer Renewal Certificate") {
                            from = "1010";
                        } else if (from == "Caste Certificate") {
                            from = "1012";
                        } else if (from == "Income certificate") {
                            from = "1014";
                        } else if (from == "Residence Certificate") {
                            from = "1015";
                        } else if (from == "Bhoomiheen Certificate") {
                            from = "2";
                        }


                        if (from != "") {
                            var Url = "/Report/ByMID?Formid=" + from + "&MID=" + mid + "";
                            $.ajax({
                                url: Url,
                                type: "GET",
                                dataType: 'json',
                                success: function(Data) {
                                    debugger;
                                    var json = JSON.parse(Data);


                                    $.each(json, function(index, optiondata) {

                                        $("#Name").val(optiondata.Name);
                                        $("#Mobile").val(optiondata.Mobile);
                                        $("#MOID").val(optiondata.MOID);
                                        $("#RecordID").val(optiondata.ID);
                                        $("#Date").val(optiondata.savedate);
                                        $("#Cast").val(optiondata.castt);
                                        $("#Sub_Cast").val(optiondata.subcaste);
                                        $("#AppID").val(optiondata.Recordid);

                                        var cs = optiondata.castt;
                                        var Url = "/api/AllDropFillApi/Beneficiary_Caste_Category_Details";
                                        $.ajax({
                                            url: Url,
                                            type: "GET",
                                            dataType: 'json',
                                            data: {
                                                countryId: cs
                                            },
                                            success: function(data) {
                                                var json = JSON.parse(data)

                                                $("#Sub_Cast").empty();

                                                $("#Sub_Cast").append("<option value=''>Select</option>");
                                                $.each(json, function(index, optiondata) {

                                                    $("#Sub_Cast").append("<option value='" + optiondata.id + "'>" + optiondata.name + "</option>");

                                                });
                                            }

                                        });
                                        setTimeout(function() {

                                            $("#Sub_Cast").val(optiondata.subcaste);

                                        }, 1000);

                                    });
                                }
                            });
                        } else {
                            $("#Form").css("border-color", "red");
                            $("#Form").focus();
                        }

                    });
                </script>
            </body>

            </html>





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


        <script>
        $(document).ready(function() {
            $('#formresidence').submit(function(e) {
                e.preventDefault();
                var formData = $(this).serialize();
                $.ajax({
                    type: 'POST',
                    url: 'save_residence.php',
                    data: formData,
                    success: function(response) {
                        $('#response').html(response);
                    }
                });
            });
        });
    </script>
        <!-- //calendar -->
</body>

</html>