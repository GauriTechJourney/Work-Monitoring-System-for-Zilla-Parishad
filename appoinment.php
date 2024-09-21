<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">


<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <link href="frontpanel/boot/css/Container.css" rel="stylesheet" type="text/css" />
    <!-- Bootstrap core CSS -->
    <link href="frontpanel/boot/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Custom fonts for this template -->
    <link href="frontpanel/boot/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Plugin CSS -->
    <link href="frontpanel/boot/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="frontpanel/boot/css/sb-admin.css" rel="stylesheet" />

    <script src="frontpanel/boot/vendor/jquery/jquery.min.js"></script>

    <script src="frontpanel/boot/vendor/popper/popper.min.js"></script>

    <script src="frontpanel/boot/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->

    <script src="frontpanel/boot/vendor/jquery-easing/jquery.easing.min.js"></script>

    <script src="frontpanel/boot/vendor/chart.js/Chart.min.js"></script>

    <script src="frontpanel/boot/vendor/datatables/jquery.dataTables.js"></script>

    <script src="frontpanel/boot/vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for this template -->

    <script src="frontpanel/boot/js/sb-admin.min.js"></script>
    <style>
        .button {
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
            margin: 2px;
        }
        
        .button span {
            cursor: pointer;
            display: inline-block;
            position: relative;
            transition: 0.5s;
        }
        
        .button span:after {
            content: '\00bb';
            position: absolute;
            opacity: 0;
            top: 0;
            right: -20px;
            transition: 0.5s;
        }
        
        .button:hover span {
            padding-right: 25px;
        }
        
        .button:hover span:after {
            opacity: 1;
            right: 0;
        }
    </style>
    <style>
        .main-container {
            display: flex;
            width: 100%;
            justify-content: center;
        }
        
        .main-container div {
            padding: 10px;
        }
    </style>
    <style type="text/css">
        body {
            font-family: Arial;
            font-size: 10pt;
        }
        
        .modalBackground {
            background-color: Black;
            filter: alpha(opacity=60);
            opacity: 0.6;
        }
        
        .modalPopup {
            background-color: #FFFFFF;
            width: 500px;
            border: 3px solid #0DA9D0;
            padding: 0;
        }
        
        .modalPopup .header {
            background-color: #2FBDF1;
            height: 30px;
            color: White;
            line-height: 30px;
            text-align: center;
            font-weight: bold;
        }
        
        .modalPopup .body {
            min-height: 50px;
            padding: 5px;
            line-height: 30px;
            text-align: center;
            font-weight: bold;
        }
        
        .buttonClass {
            padding: 2px 20px;
            text-decoration: none;
            border: solid 1px Green;
            background-color: #2FBDF1;
        }
        
        .buttonClass:hover {
            border: solid 1px Black;
            background-color: #ffffff;
        }
    </style>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }
        
        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        /*tr:nth-child(even) {
  background-color: #dddddd;
}*/
    </style>
    <title>

    </title>
</head>

<body class="fixed-nav" id="page-top">
    <form name="form1" method="post" action="./" id="form1">
        <div>
            <input type="hidden" name="ScriptManager1_HiddenField" id="ScriptManager1_HiddenField" value="" />
            <input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="" />
            <input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="" />
            <input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwUKMTc4MDk3Mzc3MQ9kFgICAw9kFgICAw9kFgJmD2QWBAIFDxYCHgdWaXNpYmxlaGQCBw9kFgQCAg9kFgICAQ9kFgICAQ8QDxYGHg1EYXRhVGV4dEZpZWxkBQhMb2NhdGlvbh4ORGF0YVZhbHVlRmllbGQFAklkHgtfIURhdGFCb3VuZGdkEBUdABtDb2xsZWN0b3IgT2ZmaWNlIEF1cmFuZ2FiYWQGSGF2ZWxpBEJob3IGSnVubmFyBFBDTUMGS2FubmFkCWtodWx0YWJhZAlQaHVsYW1icmkPZ2xvYmFsIGludGVybmV0CkNTQyBDRU5URVIKQ1NDIENFTlRFUgAAABJtYXJhdGhpIHRlY2hub2xvZ3kKQ1NDIENFTlRFUgtTRVZBIEtFTkRSQQhBZHZvY2F0ZQNDc3AOZGljZSBpbmZvc2VydmUSS3J1c2huYSBFbnRlcnByaXNlA0NzYxZqYWdhZGFtYiBtdWx0aXNlcnZpY2VzJlNBVlRBIElOVEVSTkVUIENBRkUgQU5EIE1VTFRJIFNFUlZJQ0VTFVJhaGl2YXNoaSBpbmNvbWUgY2FzdApDU0MgQ0VOVEVSE1NldHUgU3V2aWRoYSBLZW5kcmEAFR0AATEBMgMxMDcDMTA4AzEwOQMxMTADMTExAzExMgMxMjADMTIxAzEyMgMxMjMDMTI0AzEyNQMxMjYDMTI3AzEyOAMxMjkDMTMwAzEzMQMxMzIDMTMzAzEzNAMxMzUDMTM2AzEzNwMxMzgDMTM5FCsDHWdnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnFgFmZAIDD2QWAgIBD2QWAgIBDxBkZBYAZGSze/cFzBo3KtLun7+TT0VXKscOLy70byLjXErd3IziKg=="
            />
        </div>

        <script type="text/javascript">
            //<![CDATA[
            var theForm = document.forms['form1'];
            if (!theForm) {
                theForm = document.form1;
            }

            function __doPostBack(eventTarget, eventArgument) {
                if (!theForm.onsubmit || (theForm.onsubmit() != false)) {
                    theForm.__EVENTTARGET.value = eventTarget;
                    theForm.__EVENTARGUMENT.value = eventArgument;
                    theForm.submit();
                }
            }
            //]]>
        </script>


        <script src="/WebResource.axd?d=emmV1F3z4Zk8O01sb4TnkCKtODXRWcYdhOB-3YTUD7pObJSHbHgmr4-1pi4GPccRSDYybB73AhiXqskdkgiKDHVUQRANcKAFsDd6UJrqiU41&amp;t=637819135893505278" type="text/javascript"></script>


        <script src="/ScriptResource.axd?d=eviLZkCC0S3nILljttThuTHl-eZj8h5Ez2LYq8UqYCaFM7gW_ikxQ96-E_EOgiwHareyqycuRtBXrZzq42UjiHS6SpPFMVaVvs7NK0VSwenu4dL84R6O3cxEeT42mjuQmlyDEGFRLLUjDwkvdj4CUw2&amp;t=ffffffffecf8d3f2" type="text/javascript"></script>
        <script type="text/javascript">
            //<![CDATA[
            if (typeof(Sys) === 'undefined') throw new Error('ASP.NET Ajax client-side framework failed to load.');
            //]]>
        </script>

        <script src="/ScriptResource.axd?d=JdNOl1jZ_mixZ3u3ZhBbEyki7aV4JCk7GDHSW5uPsSNo98PRcL-8glMZe6FTuw56MqN3_fz9Njwz5ofLPo5Tkh3PcePvJjJD5SQEQAYVX1DZI67Kt_PUUjiHD9x76pBBEWPEOJ1zzttZUaZ1Vjp_pQ2&amp;t=ffffffffecf8d3f2" type="text/javascript"></script>
        <script src="/Appointmentpaytm.aspx?_TSM_HiddenField_=ScriptManager1_HiddenField&amp;_TSM_CombinedScripts_=%3b%3bAjaxControlToolkit%2c+Version%3d3.5.7.123%2c+Culture%3dneutral%2c+PublicKeyToken%3d28f01b0e84b6d53e%3aen-US%3a5a4df314-b4a2-4da2-a207-9284f1b1e96c%3ade1feab2%3af2c8e708%3a720a52bf%3af9cec9bc%3a589eaa30%3aa67c2700%3aab09e3fe%3a87104b7c%3a8613aea7%3a3202a5a2%3abe6fb298"
            type="text/javascript"></script>
        <div>

            <input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="F378A46D" />
            <input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="/wEdAAZIMtuwqWlexf9Kck8A3QiCFcTd2TBrVxEAJVrcwengG834O/GfAV4V4n0wgFZHr3eqCc1W4fbkY2rSDvI+toBFuqJzdLRkOMLOoT0zZmF15JmFg26DMpPKL0WJ8OiMOk7SY/xBrHTMqtHcSWMergh+BJpR63/cqm+m04shwp2opg=="
            />
        </div>

        <link href="http://cdn.rawgit.com/davidstutz/bootstrap-multiselect/master/dist/css/bootstrap-multiselect.css" rel="stylesheet" type="text/css" />
        <script src="http://cdn.rawgit.com/davidstutz/bootstrap-multiselect/master/dist/js/bootstrap-multiselect.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(function() {
                $('[id*=ddlcerti2]').multiselect({
                    includeSelectAllOption: true
                });
            });
        </script>




        <script type="text/javascript">
            //<![CDATA[
            Sys.WebForms.PageRequestManager._initialize('ScriptManager1', 'form1', ['tupdatepnl', ''], [], ['lnkPay', ''], 90, '');
            //]]>
        </script>

        <div id="updatepnl">

            <center>
                <div class="jumbotron" style="padding:0px !important">
                    <h1>Appointment Booking </h1>
                    <div style="margin-left:75%">
                        <a id="HyperLink1" href="Login.aspx">Login</a>

                        <input type="button" class="button" value="Download Certificate" onclick="window.open('https://setuonline.com/TrackStatus/UpdateDetails')" />
                    </div>

                </div>
            </center>
            <div class="row">
                <div class="col-md-2">
                    <img src="images/lef.jpg" class="img-rounded" alt="Cinque Terre" width="100%" />
                </div>
                <div class="col-md-8">
                    <div class="container-fluid">


                        <div class="card mb-3">
                            <div class="card-header">
                                <i></i>Setu Appointment Booking
                            </div>

                            <div class="card-header" style="background-color: #E69303">
                                <i class="fa fa-bell-o" style="color: White">&nbsp;Mobile Verification</i>
                                <br />
                                <br />
                            </div>
                            <div>
                                <table id="tblmobile" style="width: 100%; background-color: White;">
                                    <tr>
                                        <td>
                                            <label for="first_name">
                                                Mobile Number</label>
                                            <input name="txtMobile" type="text" id="txtMobile" class="form-control" placeholder="Enter Mobile No" required="required" pattern="[789][0-9]{9}" title="Enter valid number" />



                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span id="lblMessage" style="color: Green; font-size: 18px; font-weight: bold;"></span>
                                            <input type="submit" name="Button1" value="Get OTP" onclick="txtMobile;" id="Button1" class="btn btn-primary pull-right" />


                                        </td>
                                    </tr>
                                </table>






                            </div>
                        </div>
                        <div class="card-header" style="background-color: #E69303">
                            <i class="fa fa-table" style="color: White">&nbsp;booking Details</i>
                        </div>
                        <br />
                        <br />




                        <div class="main-container">
                            <div>
                                <img class="d-block img-fluid" src="images/Appointment-1.jpg" alt="First slide">
                            </div>
                            <div>
                                <img class="d-block img-fluid" src="images/Appointment-2.jpg" alt="First slide">
                            </div>
                        </div>

                        <div class="row">
                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active">
                                        <img class="d-block img-fluid" src="images/SLIDE-01.jpg" alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block img-fluid" src="images/SLIDE-02.jpg" alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block img-fluid" src="images/SLIDE-03.jpg" alt="Third slide">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">
                                        Previous</span> </a><a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next"><span class="carousel-control-next-icon" aria-hidden="true">
                                            </span><span class="sr-only">Next</span> </a>
                            </div>
                        </div>
                        <!-- Example Tables Card -->




                    </div>
                    <div class="card-footer small text-muted">
                    </div>
                </div>
                <div class="col-md-2">
                    <img src="images/right.jpg" class="img-rounded" alt="Cinque Terre" width="100%" />
                </div>
            </div>


            <input type="hidden" name="lnkDummy" id="lnkDummy" />


            <div id="pnlPopup" class="modalPopup" style="display: none">

                <div class="header">
                    Appointment Payment
                    <a id="btnClose" href="javascript:__doPostBack(&#39;btnClose&#39;,&#39;&#39;)" style="vertical-align:top; float:right"><img src="images/Cancel.png" /></a>
                </div>
                <div class="body">



                    <div style="text-align:center"> <span id="Total">Total</span>:<span id="lblTotalAmt"></span></div>






                    <br />

                    <a id="lnkPay" class="buttonClass" href="javascript:__doPostBack(&#39;lnkPay&#39;,&#39;&#39;)" style="color:Red;">Pay</a>




                </div>

            </div>



        </div>
        <div style="background-color: #E69303;height:40px;">
            <center>
                <div style="padding-top:10px;color:White">
                    <b>  <a href="FooterPages/PrivacyPolicy.htm" target="_blank">Privacy Policy</a></b> &nbsp;&nbsp;&nbsp
                    <b>  <a href="FooterPages/TermAndCondition.htm" target="_blank">Terms and Conditions</a></b> &nbsp;&nbsp;&nbsp
                    <b>  <a href="FooterPages/Services offered.htm" target="_blank">Services</a></b> &nbsp;&nbsp;&nbsp
                    <b>  <a href="FooterPages/CancellationPolicy.htm" target="_blank">Cancellation Policy</a> </b>&nbsp;&nbsp;&nbsp
                    <b>  <a href="FooterPages/Disclaimer.aspx.htm" target="_blank">Disclaimer</a></b>
                </div>


            </center>

        </div>




        <script type="text/javascript">
            //<![CDATA[
            (function() {
                var fn = function() {
                    $get("ScriptManager1_HiddenField").value = '';
                    Sys.Application.remove_init(fn);
                };
                Sys.Application.add_init(fn);
            })();
            Sys.Application.add_init(function() {
                $create(Sys.Extended.UI.ModalPopupBehavior, {
                    "BackgroundCssClass": "modalBackground",
                    "CancelControlID": "btnClose",
                    "PopupControlID": "pnlPopup",
                    "dynamicServicePath": "/Appointmentpaytm.aspx",
                    "id": "mpe"
                }, null, null, $get("lnkDummy"));
            });
            //]]>
        </script>
    </form>
</body>

</html>