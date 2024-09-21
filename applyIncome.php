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

            
            </head>

            <body>
           
                    <div class="form-horizontal">

                        <hr />


                        <div id="alert" class="alert alert-danger" style="display:none">
                            <strong id="strongError">Error!</strong><br />
                            <h4 id="h4d" class="manager"> </h4>
                        </div>
                      

 <form action='' method='POST' id='formData'>
    
    <section class='body'>
        <div class='inner-wrapper' style='padding-top: 0px;'>
            <div class='col-md-12'>
                <div>
                    <section class='panel'>
                        <header class='panel-heading' style='background:transparent'>
                            <div class='panel-actions'>
                                <a href='#' class=''></a>
                            </div>
                            <h2 class='panel-title'>Income certificate</h2>
                        </header>
                        <div class='panel-body '>
                            <div class='col-sm-4 panel-body' id='BenificiaryUID11'>
                                <div class=''>
                                    <Lable Name="lbl________________________" class="control-label" id="lbl________________________">लाभार्थीचा आधार क्रमांक </Lable><span style=color:red class='control-label'></span><input required Name="BenificiaryUID" class="form-control" id="BenificiaryUID" type="number"></input>
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
                                    <Lable Name="lbl________________________________________3___________" class="control-label " id="lbl________________________________________3___________">मिळकत प्रमाणपत्र (१ वर्षासाठी) / (मागिल 3 वर्षासाठी)</Lable><span style=color:red class='control-label'>*</span><select required  Name="IncomeCeritificate" class="form-control" id="IncomeCeritificate"><option value=''> Select </option><option value='१ वर्षासाठी'> १ वर्षासाठी</option><option value='३ वर्षांसाठी'> ३ वर्षांसाठी</option></select>                                                            </div>
                            </div>
                            <div class='col-sm-4 panel-body' id='Salutation11'>
                                <div class=''>
                                    <Lable Name="lbl_________________" class="control-label " id="lbl_________________">अर्जदाराचे संबोधन</Lable><span style=color:red class='control-label'>*</span><select  required Name="Salutation" class="form-control" id="Salutation"><option value=''> Select </option><option value='18F35DF6-5CC1-4F80-873E-81C13677D0DD'> कुमार</option><option value='64AA5BDE-4204-4EF5-9071-DDDF5E5032F5'> कुमारी</option><option value='5FD0E1A4-BCA8-4422-9832-D8B11BFEFEDE'> श्री.</option><option value='D58217BD-AA54-4626-9C41-96C5F328E5C6'> श्रीमती</option><option value='035E0D79-B308-4220-8FF4-500C7F07A2CE'> सौ</option></select>                                                            </div>
                            </div>
                            <div class='col-sm-4 panel-body' id='FullNameEnglish11'>
                                <div class=''>
                                    <Lable Name="lbl______________________________" class="control-label" id="lbl______________________________">अर्जदाराचे पूर्ण नाव (इंग्रजी)</Lable><span style=color:red class='control-label '>*</span><input required Name="FullNameEnglish" class="form-control" id="FullNameEnglish" type="text" required></input>
                                </div>
                            </div>
                            <div class='row' id='FullNameMarathi1112'>
                                <div class='col-sm-4 panel-body' id='FullNameMarathi11'>
                                    <div class=''></div>
                                    <Lable Name="lbl____________________________" class="control-label" id="lbl____________________________">अर्जदाराचे पूर्ण नाव (मराठी)</Lable><span style=color:red class='control-label '>*</span><input required Name="FullNameMarathi" class="form-control" id="FullNameMarathi" type="text"></input>
                                </div>
                            </div>
                            <div class='col-sm-4 panel-body' id='SalutationFather11'>
                                <div class=''>
                                    <Lable Name="lbl____________________________" class="control-label " id="lbl____________________________">अर्जदाराच्या वडिलांचे संबोधन</Lable><span style=color:red class='control-label'>*</span><select required Name="SalutationFather" class="form-control" id="SalutationFather"><option value=''> Select </option><option value='18F35DF6-5CC1-4F80-873E-81C13677D0DD'> कुमार</option><option value='64AA5BDE-4204-4EF5-9071-DDDF5E5032F5'> कुमारी</option><option value='5FD0E1A4-BCA8-4422-9832-D8B11BFEFEDE'> श्री.</option><option value='D58217BD-AA54-4626-9C41-96C5F328E5C6'> श्रीमती</option><option value='035E0D79-B308-4220-8FF4-500C7F07A2CE'> सौ</option></select>                                                            </div>
                            </div>
                            <div class='col-sm-4 panel-body' id='FatherNameEnglish11'>
                                <div class=''>
                                    <Lable Name="lbl___________________________________" class="control-label" id="lbl___________________________________">अर्जदाराच्या वडिलांचे नाव (इंग्रजी)</Lable><span style=color:red class='control-label '>*</span><input required Name="FatherNameEnglish" class="form-control" id="FatherNameEnglish" type="text"></input>
                                </div>
                            </div>
                            <div class='row' id='FatherNameMarathi1112'>
                                <div class='col-sm-4 panel-body' id='FatherNameMarathi11'>
                                    <div class=''></div>
                                    <Lable Name="lbl_________________________________" class="control-label" id="lbl_________________________________">अर्जदाराच्या वडिलांचे नाव (मराठी)</Lable><span style=color:red class='control-label '>*</span><input required Name="FatherNameMarathi" class="form-control" id="FatherNameMarathi" type="text"></input>
                                </div>
                            </div>
                            <div class='col-sm-4 panel-body' id='DOB11'>
                                <div class=''>
                                    <Lable Name="lbl____________________" class="control-label" id="lbl____________________">अर्जदाराची जन्मतारीख (dd/mm/yyyy)</Lable><span style=color:red class='control-label '>*</span><input Name="DOB" required class="form-control" id="DOB" type="text"></input>
                                </div>
                            </div>
                            <div class='col-sm-4 panel-body' id='age11'>
                                <div class=''>
                                    <Lable Name="lbl_____________" class="control-label" id="lbl_____________">अर्जदाराचे वय</Lable><span style=color:red class='control-label'></span><input Name="age" class="form-control" id="age" type="number" required ></input>
                                </div>
                            </div>
                            <div class='row' id='Gender1112'>
                                <div class='col-sm-4 panel-body' id='Gender11'>
                                    <div class=''></div>
                                    <Lable Name="lbl_______________" class="control-label " id="lbl_______________">अर्जदाराचे लिंग</Lable><span style=color:red class='control-label'>*</span><select required Name="Gender" class="form-control" id="Gender"><option value=''> Select </option><option value='4738A78E-A3B7-4E4D-8707-2545E49A9BFC'> इतर </option><option value='11D79D04-3BCF-4389-9466-7E4AC80A5F5D'> पुरुष</option><option value='3665F1DA-CDC8-4443-8649-C70563EC758F'> स्त्री</option></select>                                                            </div>
                            </div>
                            <div class='col-sm-4 panel-body' id='Occupation11'>
                                <div class=''>
                                    <Lable Name="lbl_______" class="control-label " id="lbl_______">व्यवसाय</Lable><span style=color:red class='control-label'>*</span><select required Name="Occupation" class="form-control" id="Occupation"><option value=''> Select </option><option value='AB4F763C-08C4-46B7-99DC-EF4E77ADD0F2'> १० वी  खालील</option><option value='D8409F74-A231-447A-916F-7F8270CD9352'> १२ वी </option><option value='E54281B4-CDBC-4F05-ACFA-F8C0D2B924D9'> अभियंता</option><option value='878EFEBD-EC3D-49C6-9892-520989878677'> इतर</option><option value='23DACB05-EA28-45F1-94DF-16CA2CA6894A'> उद्योग</option><option value='3D978679-5376-4DE8-A3AB-95B0C61CFDC6'> कामगार</option><option value='AC00272B-5F8E-4D26-97A9-1661DDAB8567'> खाजगी सेवक</option><option value='86142741-BFFC-46E4-8969-1C9D12E092EC'> गृहिणी</option><option value='DAD745E9-63AC-4F8B-A3F2-B60AE065432E'> प्राध्यापक</option><option value='03693E5C-7511-4A1C-A9DC-B6DEEBB84C3D'> परिचारिका</option><option value='FF10B161-47C3-431F-A7DA-4D1AF8BD0A8A'> मोलमजूरी</option><option value='24A5A2A4-E712-4F02-831B-46552731B1EA'> लेखक</option><option value='2D907A52-E04F-4B20-A2FE-71C9DCA6A767'> वकील</option><option value='E6211AF3-C38A-454D-8F86-7877B8CA10F1'> वैद्य</option><option value='F35DD9C7-A91F-4959-B391-43C0B9722F22'> विद्यार्थी</option><option value='B452F2C1-2416-4DB9-B44F-4EA83CA78614'> शेतकरी</option><option value='1C039BA2-0001-4898-970C-ACEDD439D2DE'> शेतमजुरी</option><option value='CC605D45-5B22-4B46-A80A-F14F5A372D75'> शासकीय कर्मचारी</option><option value='36AF2F4C-4364-4182-AD2D-A006B77B5732'> शिक्षक</option><option value='432C9823-419A-453B-A977-D2B6E001EF50'> सॉफ्टवेयर व्यावसायिक</option><option value='30644AC0-602C-40DC-8742-46C1436E2902'> हार्डवेयर व्यावसायिक</option></select>                                                            </div>
                            </div>
                            <div class='col-sm-4 panel-body' id='Mobile11'>
                                <div class=''>
                                    <Lable Name="lbl______" class="control-label" id="lbl______">मोबाईल</Lable><span style=color:red class='control-label '>*</span><input Name="Mobile" class="form-control" id="Mobile" type="number" required ></input>
                                </div>
                            </div>
                            <div class='row' id='Address1112'>
                                <div class='col-sm-4 panel-body' id='Address11'>
                                    <div class=''></div>
                                    <Lable Name="lbl_______________" class="control-label" id="lbl_______________">पत्ता (इंग्रजी)</Lable><span style=color:red class='control-label '>*</span><input Name="Address" class="form-control" id="Address" type="text" required></input>
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
                                    <Lable Name="lbl______" class="control-label " id="lbl______">तालुका</Lable><span style=color:red class='control-label'>*</span><select Name="Taluka" class="form-control" id="Taluka" required><option value=''> Select </option><option value='515'> nagpur</option></select> </div>
                            </div>
                            <div class='col-sm-4 panel-body' id='Village11'>
                                <div class=''>
                                    <Lable Name="lbl___" class="control-label " id="lbl___">गाव</Lable><span style=color:red class='control-label'>*</span><select required Name="Village" class="form-control" id="Village"><option value=''> Select </option><option value='515'> nagpur</option></select> </div>
                            </div>
                            <div class='col-sm-4 panel-body' id='Pincode11'>
                                <div class=''>
                                    <Lable Name="lbl___________" class="control-label" id="lbl___________">पिनकोड क्र.</Lable><span style=color:red class='control-label '>*</span><input Name="Pincode" class="form-control" id="Pincode" type="number" required></input>
                                </div>
                            </div>
                            <div class='row' id='Relation1112'>
                                <div class='col-sm-4 panel-body' id='Relation11'>
                                    <div class=''></div>
                                    <Lable Name="lbl____________________________________" class="control-label " id="lbl____________________________________">लाभार्थीचा व्यक्तीचे अर्जदाराशी नाते</Lable><span style=color:red class='control-label'>*</span><select required Name="Relation" class="form-control" id="Relation"><option value=''> Select </option><option value='94C24C99-CB26-4179-9C6E-0CF97FD3037C'> स्वतः</option><option value='53F890CF-7B69-42E4-A7B9-3CDD8C8F771B'> नातू</option><option value='838611CB-7D62-462D-A03B-3D836B0A36C8'> पत्नी</option><option value='59A9C583-A698-4E6F-A790-3E1BA1B09E1F'> भाऊ  </option><option value='08BA8F44-910A-4C45-9FF1-440568A16D47'> सून</option><option value='0327ECB8-9AA8-4DCC-B0C9-444E4B6545D8'> पुतण्या</option><option value='D2255DB9-019B-4560-92C1-570C75F1116A'> सासरे</option><option value='CFD7FC5B-0108-4660-8994-593D2D8D8EB0'> काकी</option><option value='2EE177C8-65FA-4530-9C7C-691AAD8937BD'> मुलगी</option><option value='DEEFBBAF-4ABB-4C9A-84D1-73FF59145BF1'> वडील </option><option value='E6039FB4-BC9C-435C-8FCB-836543238727'> पुतणी</option><option value='BE499B32-C3CD-4E22-88FB-0DB0EFC17AFB'> आजोबा</option><option value='25B56D4D-8FF7-4C61-9B05-83EF20C838F4'> आई</option><option value='1D1B2701-DE1B-41A2-84CF-87AE7616DE9A'> आजी</option><option value='1C15F6BC-AB1F-4164-99DD-B7FA7C21BD6C'> मुलगा</option><option value='EF893A15-34DE-40EC-85E0-F278EFE067CF'> बहिण</option><option value='B85AF18B-DD88-48B3-918D-1669C3AF283B'> सासू</option><option value='6F49972E-EE85-4540-9B8E-25B1B9BE32F6'> पालक</option><option value='D408322C-7100-423C-BD67-2B527D78903A'> नात</option><option value='82D5DD6F-79BB-468B-A20F-2FD786D4EA09'> वहिणी</option><option value='99EEC32E-ABF6-4BAC-ADB0-30089459810B'> पती</option><option value='A0EB566F-DDBB-4E62-B43B-36AEE0CC4362'> दिर</option><option value='1130147F-B456-44BE-9180-39C60EB77C70'> काका</option></select>                                                            </div>
                            </div>
                            <div class='col-sm-4 panel-body' id='BeneficiarySalutaion11'>
                                <div class=''>
                                    <Lable Name="lbl_________________" class="control-label " id="lbl_________________">लाभार्थीचे संबोधन</Lable><span style=color:red class='control-label'>*</span><select required Name="BeneficiarySalutaion" class="form-control" id="BeneficiarySalutaion"><option value=''> Select </option><option value='18F35DF6-5CC1-4F80-873E-81C13677D0DD'> कुमार</option><option value='64AA5BDE-4204-4EF5-9071-DDDF5E5032F5'> कुमारी</option><option value='5FD0E1A4-BCA8-4422-9832-D8B11BFEFEDE'> श्री.</option><option value='D58217BD-AA54-4626-9C41-96C5F328E5C6'> श्रीमती</option><option value='035E0D79-B308-4220-8FF4-500C7F07A2CE'> सौ</option></select>                                                            </div>
                            </div>
                            <div class='col-sm-4 panel-body' id='BeneficiaryNameEnglish11'>
                                <div class=''>
                                    <Lable Name="lbl______________________________" class="control-label" id="lbl______________________________">लाभार्थीचे पूर्ण नाव (इंग्रजी)</Lable><span style=color:red class='control-label '>*</span><input required Name="BeneficiaryNameEnglish" class="form-control" id="BeneficiaryNameEnglish" type="text"></input>
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
                                    <Lable Name="lbl_________2020-2021" class="control-label" id="lbl_________2020-2021">उत्पन्न 2022-2023</Lable><span style=color:red class='control-label'></span><input Name="Income_2022_2023" class="form-control" id="Income_2016_2017" type="text"></input>
                                </div>
                            </div>
                            <div class='col-sm-4 panel-body' id='Income_2017_201811'>
                                <div class=''>
                                    <Lable Name="lbl_________2021_-_2022" class="control-label" id="lbl_________2021_-_2022">उत्पन्न 2023 - 2024</Lable><span style=color:red class='control-label'></span><input Name="Income_2023_2024" class="form-control" id="Income_2017_2018" type="text"></input>
                                </div>
                            </div>
                            <div class='row' id='Income_2018_20191112'>
                                <div class='col-sm-4 panel-body' id='Income_2018_201911'>
                                    <div class=''></div>
                                    <Lable Name="lbl_________2022_-_2023" class="control-label" id="lbl_________2022_-_2023">उत्पन्न 2024 - 2025</Lable><span style=color:red class='control-label '>*</span><input required Name="Income_2024_2025" class="form-control" id="Income_2018_2019" type="text"></input>
                                </div>
                            </div>
                            <div class='col-sm-4 panel-body' id='Resone11'>
                                <div class=''>
                                    <Lable Name="lbl______________________________________________" class="control-label" id="lbl______________________________________________">उत्पन्नाचे प्रमाणपत्र कशासाठी हवे त्याचा तपशील</Lable><span style=color:red class='control-label '>*</span><input Name="Resone" class="form-control" id="Resone" type="text" required></input>
                                </div>
                            </div>
                            <div class='col-sm-4 panel-body' id='MOID11'>
                                <div class=''>
                                    <Lable Name="lblMOID" class="control-label" id="lblMOID">MOID</Lable><span style=color:red class='control-label'></span><input Name="MOID" class="form-control" id="MOID" type="text"></input>
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
                        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>

                        <script type="text/javascript">
                            $('#BenificiaryUID').keypress(function(event) {
                                if (event.keyCode == 13) {
                                    event.preventDefault();
                                }
                            });
                            $('#BenificiaryUID').keypress(function(event) {
                                if (event.keyCode == 13) {
                                    event.preventDefault();
                                }
                            });

                            $("#Salutation").change(function() {
                                debugger;

                                var Salutation = $("#Salutation").val();

                                if (Salutation == "18F35DF6-5CC1-4F80-873E-81C13677D0DD" || Salutation == "5FD0E1A4-BCA8-4422-9832-D8B11BFEFEDE") {
                                    $("#Gender").val("11D79D04-3BCF-4389-9466-7E4AC80A5F5D"); //M
                                } else if (Salutation == "64AA5BDE-4204-4EF5-9071-DDDF5E5032F5" || Salutation == "D58217BD-AA54-4626-9C41-96C5F328E5C6" || Salutation == "035E0D79-B308-4220-8FF4-500C7F07A2CE") {
                                    $("#Gender").val("3665F1DA-CDC8-4443-8649-C70563EC758F"); //F
                                } else {
                                    $("#Gender").val("");

                                }
                            });
                        </script>

                        <script type="text/javascript">
                            var $jqDate = jQuery('#DOB');

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
                            $("#Relation").change(function() {


                                if ($("#Relation").val() == '94C24C99-CB26-4179-9C6E-0CF97FD3037C') {
                                    //self
                                    $("#BeneficiarySalutaion").val($('#Salutation').val());
                                    $("#BeneficiaryNameEnglish").val($('#Full_Name_English_').val());
                                    $("#BeneficiaryNameMarathi").val($('#Full_Name_Marathi_').val());
                                    $("#BeneficiaryNameEnglish").val($('#FullNameEnglish').val());
                                    $("#BeneficiaryNameMarathi").val($('#FullNameMarathi').val());


                                    $("#BeneficiarySalutaion").attr("disabled", true);
                                    $("#BeneficiaryNameEnglish").attr("disabled", true);
                                    $("#BeneficiaryNameMarathi").attr("disabled", true);
                                    $("#BeneficiaryNameEnglish").attr("disabled", true);
                                    $("#BeneficiaryNameMarathi").attr("disabled", true);

                                } else if ($("#Relation").val() == 'DEEFBBAF-4ABB-4C9A-84D1-73FF59145BF1') {
                                    //father
                                    $("#BeneficiarySalutaion").val($('#Salutation_Father').val());
                                    $("#BeneficiaryNameEnglish").val($('#Father_Name__English_').val());
                                    $("#BeneficiaryNameMarathi").val($('#Father_Name__Marathi_').val());

                                    $("#BeneficiarySalutaion").attr("disabled", true);
                                    $("#BeneficiaryNameEnglish").attr("disabled", true);
                                    $("#BeneficiaryNameMarathi").attr("disabled", true);

                                } else {
                                    $("#BeneficiarySalutaion").val("");
                                    $("#BeneficiaryNameEnglish").val("");
                                    $("#BeneficiaryNameMarathi").val("");
                                    $("#BeneficiarySalutaion").attr("disabled", false);
                                    $("#BeneficiaryNameEnglish").attr("disabled", false);
                                    $("#BeneficiaryNameMarathi").attr("disabled", false);
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
                            $("#DOB").change(function() {

                                var age = handleDOBChanged($("#DOB").val());
                                $("#age").val(age);

                            });
                            $("#Age").val(age);

                            $("#IncomeCeritificate").change(function() {

                                $('#Income_2016-2017').css("display", "none");
                                $('#Income_2017-2018').css("display", "none");
                                $('#Income_2018-2019').css("display", "none");

                                $('#lblIncome_2016-2017').css("display", "none");
                                $('#lblIncome_2017-2018').css("display", "none");
                                $('#lblIncome_2018-2019').css("display", "none");
                                var Income_Ceritificate = $("#IncomeCeritificate").val();

                                if (Income_Ceritificate == "6") { //१ वर्षासाठी

                                    $('#Income_2017_2018').fadeOut('slow');
                                    //  $('#Income_2018_2019').fadeOut('slow');
                                    $('#Income_2016_2017').fadeOut('slow');

                                    $('#lblIncome_2017_-_2018').fadeOut('slow');
                                    // $('#lblIncome_2018_-_2019').fadeOut('slow');
                                    $('#lblIncome_2016_-_2017').fadeOut('slow');




                                    $('#Income_2018_2019').fadeIn('slow');
                                    $('#lblIncome_2018_-_2019').fadeIn('slow');
                                    $('#Income_2018_2019').addClass('req');



                                    $('#Income_2017_2018').removeClass('req');
                                    $('#Income_2016_2017').removeClass('req');




                                } else if (Income_Ceritificate == "7") { //३ वर्षांसाठी


                                    $('#Income_2018_2019').removeClass('req');

                                    $('#Income_2017_2018').fadeIn('slow');
                                    $('#Income_2018_2019').fadeIn('slow');


                                    $('#lblIncome_2017_-_2018').fadeIn('slow');

                                    $('#lblIncome_2018_-_2019').fadeIn('slow');

                                    $('#Income_2016_2017').fadeIn('slow');

                                    $('#lblIncome_2016_-_2017').fadeIn('slow');

                                    $('#Income_2016_2017').addClass('req');
                                    $('#Income_2017_2018').addClass('req');
                                    $('#Income_2018_2019').addClass('req');




                                }


                            });
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

                                if ($("#IncomeCeritificate").val().length == 0) {
                                    $("#IncomeCeritificate").css('border-color', 'Red');
                                    req = 0;
                                    $("#IncomeCeritificate").focus();


                                } else {
                                    $("#IncomeCeritificate").css('border-color', '');
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

                                if ($("#DOB").val().length == 0) {
                                    $("#DOB").css('border-color', 'Red');
                                    req = 0;
                                    $("#DOB").focus();


                                } else {
                                    $("#DOB").css('border-color', '');
                                }
                                var date_regex = /^(0[1-9]|1\d|2\d|3[01])\/(0[1-9]|1[0-2])\/(19|20)\d{2}$/;
                                if (!(date_regex.test($("#DOB").val()))) {
                                    $("#DOB").css('border-color', 'Red');
                                    req = 0;
                                } else {
                                    $("#DOB").css('border-color', '');
                                }
                                if (/[^0-9]/.test($("#age").val())) {
                                    $("#age").css('border-color', 'Red');
                                    req = 0;
                                } else {
                                    $("#age").css('border-color', '');
                                }
                                if ($("#age").val().length > 0) {
                                    if ($("#age").val() < 18) {
                                        $("#age").css('border-color', 'Red');
                                        req = 0;
                                        $("#age").focus();

                                    } else if ($("#age").val() > 100) {
                                        $("#age").css('border-color', 'Red');
                                        req = 0;
                                        $("#age").focus();
                                    } else {
                                        $("#age").css('border-color', '');
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

                                if ($("#Relation").val().length == 0) {
                                    $("#Relation").css('border-color', 'Red');
                                    req = 0;
                                    $("#Relation").focus();


                                } else {
                                    $("#Relation").css('border-color', '');
                                }

                                if ($("#BeneficiarySalutaion").val().length == 0) {
                                    $("#BeneficiarySalutaion").css('border-color', 'Red');
                                    req = 0;
                                    $("#BeneficiarySalutaion").focus();


                                } else {
                                    $("#BeneficiarySalutaion").css('border-color', '');
                                }

                                if ($("#BeneficiaryNameEnglish").val().length == 0) {
                                    $("#BeneficiaryNameEnglish").css('border-color', 'Red');
                                    req = 0;
                                    $("#BeneficiaryNameEnglish").focus();


                                } else {
                                    $("#BeneficiaryNameEnglish").css('border-color', '');
                                }

                                if ($("#BeneficiaryNameMarathi").val().length == 0) {
                                    $("#BeneficiaryNameMarathi").css('border-color', 'Red');
                                    req = 0;
                                    $("#BeneficiaryNameMarathi").focus();


                                } else {
                                    $("#BeneficiaryNameMarathi").css('border-color', '');
                                }

                                if ($("#Income_2018_2019").val().length == 0) {
                                    $("#Income_2018_2019").css('border-color', 'Red');
                                    req = 0;
                                    $("#Income_2018_2019").focus();


                                } else {
                                    $("#Income_2018_2019").css('border-color', '');
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
                            $("#IncomeCeritificate").keypress(function(event) {
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
                            $("#DOB").keypress(function(event) {
                                if (event.keyCode == 13) {
                                    event.preventDefault();
                                }
                            });
                            $("#DOB").keypress(function(event) {
                                if (event.keyCode == 13) {
                                    event.preventDefault();
                                }
                            });
                            $("#age").keypress(function(event) {
                                if (event.keyCode == 13) {
                                    event.preventDefault();
                                }
                            });
                            $("#age").keypress(function(event) {
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
                            $("#Relation").keypress(function(event) {
                                if (event.keyCode == 13) {
                                    event.preventDefault();
                                }
                            });
                            $("#BeneficiarySalutaion").keypress(function(event) {
                                if (event.keyCode == 13) {
                                    event.preventDefault();
                                }
                            });
                            $("#BeneficiaryNameEnglish").keypress(function(event) {
                                if (event.keyCode == 13) {
                                    event.preventDefault();
                                }
                            });
                            $("#BeneficiaryNameMarathi").keypress(function(event) {
                                if (event.keyCode == 13) {
                                    event.preventDefault();
                                }
                            });
                            $("#Income_2016_2017").keypress(function(event) {
                                if (event.keyCode == 13) {
                                    event.preventDefault();
                                }
                            });
                            $("#Income_2017_2018").keypress(function(event) {
                                if (event.keyCode == 13) {
                                    event.preventDefault();
                                }
                            });
                            $("#Income_2018_2019").keypress(function(event) {
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
                                enableTyping(new Array('FullNameEnglish', 'FullNameMarathi', 'FatherNameEnglish', 'FatherNameMarathi', 'Address', 'MRAddress', 'BeneficiaryNameEnglish', 'BeneficiaryNameMarathi', 'Resone'), new Array('FullNameMarathi', 'FullNameMarathi', 'FatherNameMarathi', 'FatherNameMarathi', 'MRAddress', 'MRAddress', 'BeneficiaryNameMarathi', 'BeneficiaryNameMarathi', 'Resone'), 'NAME', 'mr_in');
                            })
                        </script>

                        <input type="hidden" id="photo1" />

                        <input type="hidden" id="uploadForm1" />

                    </div>
                   






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
                    $("#btnAdd").click(function() {
                        var Flag = true


                        var name = "",
                            relation = "",
                            age = "",
                            changereason = "",
                            adharcard = "",
                            photo = "",
                            salutationd = "";
                        relation = $("#Relationship_with_the_applicantAdd").val();
                        salutationd = $("#SalutationAdd").val();
                        name = $("#Name_Add").val();
                        age = $("#AgeAdd").val();
                        changereason = $("#ddlChangeTypeAdd").val();

                        adharcard = $("#AadharCardAdd").val();
                        photo = $("#PhotoAdd").val();
                        var mainindexid = $("#BenificiaryUID").val();
                        if (adharcard != null && adharcard != "") {
                            if (adharcard.length != 12) {
                                Flag = false;
                                $("#AadharCardAdd").css("border-color", "red");
                            } else {
                                $("#AadharCardAdd").css("border-color", "");
                            }
                        }
                        if ((relation == null || relation == "") || (salutationd == null || salutationd == "") || (name == null || name == "") || (age == null || age == "") ||
                            (changereason == null || changereason == "")) {
                            Flag = false;
                        }

                        //if (parseInt(age) < 18) {
                        //    Flag = false;
                        //    $("#AgeAdd").css("border-color", "red");
                        //} else{

                        //    $("#AgeAdd").css("border-color", "");
                        //}
                        if (Flag == true) {
                            $.ajax({
                                type: "POST",
                                url: "/Generic/BindDataTable",
                                data: {
                                    Name: name,
                                    Relation: relation,
                                    Age: age,
                                    ChangeReason: changereason,
                                    Adharcard: adharcard,

                                    Photo: photo,
                                    Salutation: salutationd,
                                    Main_indexID: mainindexid
                                },

                                success: function(data) {
                                    if (data.length > 2) {
                                        if (photo != null && photo != "") {
                                            var files = $("#PhotoAdd").get(0).files;
                                            var filedata = new FormData();
                                            filedata.append("img", files[0]);
                                            $.ajax({
                                                type: "POST",
                                                url: "/Generic/saveimge",
                                                contentType: false,
                                                processData: false,
                                                data: filedata,
                                                success: function(data) {

                                                }
                                            })
                                        }
                                        var json = JSON.parse(data)
                                        $("#tdBenFamilymemberList").empty();
                                        $("#tdBenFamilymemberList").append("<tbody id='Tablehead'>" +
                                            "    <tr>" +
                                            "        <th style='width:5%; text-align: center;'>अ.क्र </th>" +
                                            "        <th style='width:25%; text-align: center;'>नाव  </th>" +
                                            "        <th style='width:15%; text-align: center;'>अर्जदाराशी नाते</th>" +
                                            "        <th style='width:20%; text-align: center;'>वय </th>" +
                                            "        <th style='width:20%; text-align: center;'>बदलाचा प्रकार</th>" +
                                            "        <th style='width:20%; text-align: center;'>आधार क्रमांक</th>" +

                                            "        <th style='width:10%; text-align: center;'>वगळा</th>" +
                                            "    </tr>" +
                                            "</tbody>");
                                        $.each(json, function(key, optiondata) {

                                            var RelationText = "";

                                            var Relation = optiondata.Relation;
                                            if (Relation == '25') { // Brother
                                                RelationText = " आई";
                                            } else if (Relation == '22') { //Daoughter
                                                RelationText = " आजी";
                                            } else if (Relation == '3') { // Father
                                                RelationText = " आजोबा";
                                            } else if (Relation == '10') { //grand dougher
                                                RelationText = " काका";
                                            } else if (Relation == '18') { // Grand Son
                                                RelationText = " काकी";
                                            } else if (Relation == '8') {
                                                RelationText = " दिर";
                                            } else if (Relation == '4') { //Mother
                                                RelationText = " नात";
                                            } else if (Relation == '12') {
                                                RelationText = " नातू";
                                            } else if (Relation == '16') {
                                                RelationText = " पुतण्या";
                                            } else if (Relation == '20') {
                                                RelationText = " पुतणी";
                                            } else if (Relation == '13') {
                                                RelationText = " पत्नी";
                                            } else if (Relation == '9') {
                                                RelationText = " पती";
                                            } else if (Relation == '7') {
                                                RelationText = " बहिण";
                                            } else if (Relation == '14') {
                                                RelationText = "  भाऊ  ";
                                            } else if (Relation == '21') {
                                                RelationText = "  मुलगा";
                                            } else if (Relation == '19') {
                                                RelationText = "  मुलगी";
                                            } else if (Relation == '11') {
                                                RelationText = "  वडील ";
                                            } else if (Relation == '23') {
                                                RelationText = "  वहिणी";
                                            } else if (Relation == '15') {
                                                RelationText = "  सून";
                                            } else if (Relation == '5') {
                                                RelationText = "  सासू";
                                            } else if (Relation == '17') {
                                                RelationText = "  सासरे";
                                            }


                                            var ChangeReasonText = "";
                                            if (optiondata.ChangeReason == "6") {
                                                ChangeReasonText = "बदल नाही";
                                            } else if (optiondata.ChangeReason == "7") {
                                                ChangeReasonText = "समावेश";
                                            } else if (optiondata.ChangeReason == "8") {
                                                ChangeReasonText = "वगळले";
                                            }
                                            var salu = "";

                                            if (optiondata.salutation == '2') { // Kumar
                                                salu = " कुमार";
                                            } else if (optiondata.salutation == '6') { // Kumari
                                                salu = " कुमारी";
                                            } else if (optiondata.salutation == '10') { // Mr.
                                                salu = " वकील";
                                            } else if (optiondata.salutation == '5') { // Mrs
                                                salu = " श्री.";
                                            } else if (optiondata.salutation == '8') { // Ms
                                                salu = " श्रीमती";
                                            } else if (optiondata.salutation == '9') { // Shri
                                                salu = " सौ";

                                            }



                                            $("#tdBenFamilymemberList").css("display", "block");
                                            $("#tdBenFamilymemberList").append("<tr><td>" + optiondata.ID + "</td><td>" + salu + " " + optiondata.Name + "</td><td>" + RelationText + "</td><td>" + optiondata.age + "</td><td>" + ChangeReasonText + "</td><td>" + optiondata.AadharCard + "</td><td><input type='button'  value='&#10006;' id='btnDelete_" + optiondata.ID + "' onclick='Delete(" + optiondata.ID + ")' ></td></tr>");
                                        });
                                    }
                                },
                                error: function(xhr, ajaxOptions, thrownError) {
                                    alert(xhr.responseText);
                                    alert(thrownError);
                                }
                            });
                        } else {
                            alert('Please fill mandetory (*) fields !!!');
                        }
                    });

                    function Delete(ID) {
                        $.ajax({
                            type: "POST",
                            url: "/Generic/DeleteRow",
                            data: {
                                id: ID
                            },

                            success: function(data) {
                                if (data == "Fail") {
                                    alert('deletion failed');

                                } else {
                                    var json = JSON.parse(data)
                                    $("#tdBenFamilymemberList").empty();
                                    $("#tdBenFamilymemberList").append("<tbody id='Tablehead'>" +
                                        "    <tr>" +
                                        "        <th style='width:5%; text-align: center;'>अ.क्र </th>" +
                                        "        <th style='width:25%; text-align: center;'>नाव  </th>" +
                                        "        <th style='width:15%; text-align: center;'>अर्जदाराशी नाते</th>" +
                                        "        <th style='width:20%; text-align: center;'>वय </th>" +
                                        "        <th style='width:20%; text-align: center;'>बदलाचा प्रकार</th>" +
                                        "        <th style='width:20%; text-align: center;'>आधार क्रमांक</th>" +

                                        "        <th style='width:10%; text-align: center;'>वगळा</th>" +
                                        "    </tr>" +
                                        "</tbody>");
                                    $.each(json, function(key, optiondata) {

                                        var RelationText = "";

                                        var Relation = optiondata.Relation;
                                        if (Relation == '25') { // Brother
                                            RelationText = " आई";
                                        } else if (Relation == '22') { //Daoughter
                                            RelationText = " आजी";
                                        } else if (Relation == '3') { // Father
                                            RelationText = " आजोबा";
                                        } else if (Relation == '10') { //grand dougher
                                            RelationText = " काका";
                                        } else if (Relation == '18') { // Grand Son
                                            RelationText = " काकी";
                                        } else if (Relation == '8') {
                                            RelationText = " दिर";
                                        } else if (Relation == '4') { //Mother
                                            RelationText = " नात";
                                        } else if (Relation == '12') {
                                            RelationText = " नातू";
                                        } else if (Relation == '16') {
                                            RelationText = " पुतण्या";
                                        } else if (Relation == '20') {
                                            RelationText = " पुतणी";
                                        } else if (Relation == '13') {
                                            RelationText = " पत्नी";
                                        } else if (Relation == '9') {
                                            RelationText = " पती";
                                        } else if (Relation == '7') {
                                            RelationText = " बहिण";
                                        } else if (Relation == '14') {
                                            RelationText = "  भाऊ  ";
                                        } else if (Relation == '21') {
                                            RelationText = "  मुलगा";
                                        } else if (Relation == '19') {
                                            RelationText = "  मुलगी";
                                        } else if (Relation == '11') {
                                            RelationText = "  वडील ";
                                        } else if (Relation == '23') {
                                            RelationText = "  वहिणी";
                                        } else if (Relation == '15') {
                                            RelationText = "  सून";
                                        } else if (Relation == '5') {
                                            RelationText = "  सासू";
                                        } else if (Relation == '17') {
                                            RelationText = "  सासरे";
                                        }
                                        var ChangeReasonText = "";
                                        if (optiondata.ChangeReason == "6") {
                                            ChangeReasonText = "बदल नाही";
                                        } else if (optiondata.ChangeReason == "7") {
                                            ChangeReasonText = "समावेश";
                                        } else if (optiondata.ChangeReason == "8") {
                                            ChangeReasonText = "वगळले";
                                        }
                                        var salu = "";

                                        if (optiondata.salutation == '2') { // Kumar
                                            salu = " कुमार";
                                        } else if (optiondata.salutation == '6') { // Kumari
                                            salu = " कुमारी";
                                        } else if (optiondata.salutation == '10') { // Mr.
                                            salu = " वकील";
                                        } else if (optiondata.salutation == '5') { // Mrs
                                            salu = " श्री.";
                                        } else if (optiondata.salutation == '8') { // Ms
                                            salu = " श्रीमती";
                                        } else if (optiondata.salutation == '9') { // Shri
                                            salu = " सौ";

                                        }
                                        $("#tdBenFamilymemberList").css("display", "block");
                                        $("#tdBenFamilymemberList").append("<tr><td>" + optiondata.ID + "</td><td>" + salu + " " + optiondata.Name + "</td><td>" + RelationText + "</td><td>" + optiondata.age + "</td><td>" + ChangeReasonText + "</td><td>" + optiondata.AadharCard + "</td><td><input type='button'  value='&#10006;' id='btnDelete_" + optiondata.ID + "' onclick='Delete(" + optiondata.ID + ")' ></td></tr>");
                                    });
                                }
                            },
                            error: function(xhr, ajaxOptions, thrownError) {
                                alert(xhr.responseText);
                                alert(thrownError);
                            }
                        });
                    }
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


                    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#formData').submit(function(e) {
                e.preventDefault();
                var formData = $(this).serialize();
                $.ajax({
                    type: 'POST',
                    url: 'save_form.php',
                    data: formData,
                    success: function(response) {
                        $('#response').html(response);
                        alert(response);
                    }
                });
            });
        });
    </script>

                   
        <script type="text/javascript" src="/js/monthly.js"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
       
      

        <!-- //calendar -->
</body>

</html>