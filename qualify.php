<?php 

    session_start();
    ob_start();

    if(isset($_POST['mail'])){

        if(empty($_POST['one']) || empty($_POST['two']) || empty($_POST['three']) || empty($_POST['four']) || empty($_POST['five']) || empty($_POST['six']) ||empty($_POST['seven']) ||empty($_POST['eight']) || empty($_POST['nine']) || empty($_POST['twelve'])){
            $_SESSION['msg'] = "Please Answer All the Questions";
        }
        else if(empty($_POST['full_name']) || empty($_POST['address']) || empty($_POST['email']) || empty($_POST['phone'])){
            $_SESSION['msg'] = "Please Provide Your Complete Personal Details";
        }
        else{
            $one = $_POST['one'];
            $two = $_POST['two'];
            $three = $_POST['three'];
            $four = $_POST['four'];
            $five = $_POST['five'];
            $six = $_POST['six'];
            $seven = $_POST['seven'];
            $eight = $_POST['eight'];
            $nine = $_POST['nine'];
            $twelve = $_POST['twelve'];
            $name = $_POST['full_name'];
            $address = $_POST['address'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];

            if($one == 'Yes' && $seven == 'Yes' && $twelve == 'Yes' && $two == 'No' && $three == 'No' && $four == 'No' && $five == 'No' && $six == 'No' && $nine == 'No' ){
                $to = "info@veteransconsultants.us";
                $subject = "Aid & Attendance Form";
                $from = $email;
                $txt = "Qualified for the Aid and Attendance Benefit";
                $msg = "Name = $name\r\n" . "Phone Number = $phone\r\n" . "Address = $address\r\n" . "Sender = $from\r\n" . "Message = $txt\r\n";
                $headers = "From: mailing@veteransconsultants.us";
                
                if(mail($to,$subject,$msg,$headers)){
                    $_SESSION['success'] = 1;
                }
                else{
                    $_SESSION['msg'] = "Something Went Wrong";
                }
                
                
            }else if($one != 'Yes' || $seven != 'Yes' || $twelve != 'Yes' || $two != 'No' || $three != 'No' || $four != 'No' || $five != 'No' || $six != 'No' || $nine != 'No'){
                $_SESSION['error'] = 1;
            }
            else{
                $_SESSION['error'] = 1;
            }
        }
    }
?>
<!DOCTYPE html>
<html data-wf-page="603c082516b10d0226609223" data-wf-site="5a990039a301900001617fce">
<head>
<meta charset="utf-8">
<title>Do I Qualify?</title>
<meta content="Contact Us" property="og:title">
<meta content="Contact Us" property="twitter:title">
<meta content="width=device-width, initial-scale=1" name="viewport">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/normalize.css" rel="stylesheet" type="text/css">
<link href="css/components.css" rel="stylesheet" type="text/css">
<link href="css/vet-a7adba.css" rel="stylesheet" type="text/css">
<script src="../ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
<script type="text/javascript">WebFont.load({  google: {    families: ["Montserrat:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic","PT Sans:400,400italic,700,700italic","Varela:400","Varela Round:400"]  }});</script>
<script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
<link href="images/favicon.png" rel="shortcut icon" type="image/x-icon">
<link href="images/webclip.png" rel="apple-touch-icon">
<style>
body { -webkit-font-smoothing: antialiased; }
</style>
<link rel="canonical" href="https://www.veteransconsultants.us/contact-us">
<link rel='stylesheet' href='css/style.css'>
</head>
<body class="body">
<!--<header class="nav-bar wf-section">-->

<div id="top" class="nav-bar">
<div class="w-container">
<div data-collapse="medium" data-animation="default" data-duration="400" bind="a56bcf7b-b5da-ecbf-e4ed-61091be426a0" data-easing="ease" data-easing2="ease" role="banner" class="navbar w-nav">
<div class="container-2 w-container">
<div class="div-block-2">
<a href="index-2.html" aria-current="page" class=""><img src="images/Veterans-Consultants-Logo-559x88.png" width="auto"  alt="We Help Veterans" class=""></a>
<nav id='menu' style="clear: both;">
  <input type='checkbox' id='responsive-menu' onclick='updatemenu()'><label></label>
  <ul>
    <li><a href='https://veteransconsultants.us/index-2.html'>Home</a></li>
    <li><a href='https://veteransconsultants.us/eligibility.html'>Eligibility</a></li>
    <li><a class='dropdown-arrow' href='#'>Resources</a>
      <ul class='sub-menus'>
        <li><a href='https://veteransconsultants.us/testimonials.html'>Testimonials</a></li>
        <li><a href='https://veteransconsultants.us/meet-our-team.html'>Meet Our Team</a></li>
        <li><a href='https://veteransconsultants.us/faq.html'>FAQ</a></li>
      </ul>
    </li>
    <li><a href='https://veteransconsultants.us/working-for-you.html'>Working For You</a></li>
    <!--<li><a href='https://veteransconsultants.us/contact-us.html'>Contact</a></li>-->
    <li><a href='qualify.php'>Do I Qualify?</a></li>
  </ul>
</nav>

</div>
</div>
</div>
</div>
</div>



<!--</header>-->
<div class="section header wf-section">
<div class="w-container">
<h1 class="hero-heading">Do I Qualify?<a href="" class="banner"></a>
</h1>
</div>
</div>
<div id="mobile" class="section wf-section">
<div class="w-container">
<p class="paragraph-3">If you or your loved one is in need of the Aid &amp; Attendance pension or assistance with Medicaid planning, then we are here to help you.  Please DO NOT WAIT until you or someone you love is in Crisis.  Pre-Planning is the Key!</p>
<p class="paragraph-4">Please complete and submit the Information Form below and we will be in contact with you.<br></p>
</div>
</div>


<!-- CONTAINER -->
    <div class="container d-flex align-items-center min-vh-100">
        <div class="row g-0 justify-content-center">
            <!-- TITLE -->
            <div class="col-lg-4 offset-lg-1 mx-0 px-0">
                <div id="title-container">
                    <img class="covid-image" src="images/covid-check.png">
                    <h2>Do You Qualify?</h2>
                    <h3>Aid and Attendance Form</h3>
                    <p>Please answer the questions to see if you qualify for the Aid and Attendance benefit.</p>
                </div>
            </div>
            <!-- FORMS -->
            <div class="col-lg-7 mx-0 px-0">
                <div class="progress">
                    <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="50" class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" style="width: 0%"></div>
                </div>
                <div id="qbox-container">
                    <form class="needs-validation" id="form-wrapper" method="POST" name="form-wrapper" novalidate="">
                        <?php if(isset($_SESSION['msg'])){?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo $_SESSION['msg'];?>
                            </div>
                        <?php }unset($_SESSION['msg']);?>
                        <div id="steps-container">
                            <div class="step">
                                <h5>1. Is the Veteran at least 65 years old and served one day of active during the following war times?<br><br>
                                    (Eligible war dates below) <br><br>
                                    * WWII – December 7, 1941 – December 31, 1946 <br>
                                    * Korean Conflict – June 27, 1950 – January 31, 1955 <br>
                                    * Vietnam – August 5, 1964- May 7, 1975 (February 28, 1961- May 7, 1975 for Veterans who
                                    served in the Republic of Vietnam during that period) <br>
                                    * Persian Gulf War – August 2, 1990 – a date to be prescribed by presidential proclamation
                                </h5>
                                <div class="form-check ps-0 q-box">
                                    <div class="q-box__question">
                                        <input class="form-check-input question__input" id="q_1_yes" name="one" type="radio" value="Yes"> 
                                        <label class="form-check-label question__label" for="q_1_yes">Yes</label>
                                    </div>
                                    <div class="q-box__question">
                                        <input class="form-check-input question__input" id="q_1_no" name="one" type="radio" value="No"> 
                                        <label class="form-check-label question__label" for="q_1_no">No</label>
                                    </div>
                                </div>
                            </div>
                            <div class="step">
                                <h5>2. Does the Veteran and/or surviving spouse (combined assets for VA purposes) have assets that
                                    add up to over $134,000? These assets include savings/checking, annuities, deferred annuities,
                                    money markets, CD’s, Life Insurance cash value, brokerage accounts, stocks/bonds. (cars and
                                    primary house excluded)</h5>
                                <div class="form-check ps-0 q-box">
                                    <div class="q-box__question">
                                        <input class="form-check-input question__input" id="q_2_yes" name="two" type="radio" value="Yes"> 
                                        <label class="form-check-label question__label" for="q_2_yes">Yes</label>
                                    </div>
                                    <div class="q-box__question">
                                        <input class="form-check-input question__input" id="q_2_no" name="two" type="radio" value="No"> 
                                        <label class="form-check-label question__label" for="q_2_no">No</label>
                                    </div>
                                </div>
                            </div>
                            <div class="step">
                                <h5>3. Does the Veteran and/or surviving spouse have assets in a trust that when combined with the
                                    assets listed above will be greater than $134,000 (cars and primary house excluded)</h5>
                                <div class="form-check ps-0 q-box">
                                    <div class="q-box__question">
                                        <input class="form-check-input question__input" id="q_3_yes" name="three" type="radio" value="Yes"> 
                                        <label class="form-check-label question__label" for="q_3_yes">Yes</label>
                                    </div>
                                    <div class="q-box__question">
                                        <input class="form-check-input question__input" id="q_3_no" name="three" type="radio" value="No"> 
                                        <label class="form-check-label question__label" for="q_3_no">No</label>
                                    </div>
                                </div>
                            </div>
                            <div class="step">
                                <h5>4. Does the Veteran and/or surviving spouse own over an acre of land? If so, does the value of
                                    the land greater than one acre combined with the assets in #2 exceed $134,000? (cars and
                                    primary house excluded)</h5>
                                    <div class="q-box__question">
                                        <input class="form-check-input question__input" id="q_4_yes" name="four" type="radio" value="Yes"> 
                                        <label class="form-check-label question__label" for="q_4_yes">Yes</label>
                                    </div>
                                    <div class="q-box__question">
                                        <input class="form-check-input question__input" id="q_4_no" name="four" type="radio" value="No"> 
                                        <label class="form-check-label question__label" for="q_4_no">No</label>
                                    </div>
                            </div>
                            <div class="step">
                                <h5>5. Does the Veteran and/or surviving spouse own a second home such as a vacation or rental
                                    property? If so, does the value of the home combined with the assets listed in #2 exceed
                                    $134,000 (cars and primary house excluded)?</h5>
                                    <div class="q-box__question">
                                        <input class="form-check-input question__input" id="q_5_yes" name="five" type="radio" value="Yes"> 
                                        <label class="form-check-label question__label" for="q_5_yes">Yes</label>
                                    </div>
                                    <div class="q-box__question">
                                        <input class="form-check-input question__input" id="q_5_no" name="five" type="radio" value="No"> 
                                        <label class="form-check-label question__label" for="q_5_no">No</label>
                                    </div>
                            </div>
                            <div class="step">
                                <h5>6.  Has the Veteran or Surviving Spouse purchased an annuity or sold, conveyed or traded any
                                    assets away in the previous 3 years? If yes, would that amount, combined with assets listed
                                    above in # 2-5 exceed $134,000 (cars and primary house excluded)?</h5>
                                    <div class="q-box__question">
                                        <input class="form-check-input question__input" id="q_6_yes" name="six" type="radio" value="Yes"> 
                                        <label class="form-check-label question__label" for="q_6_yes">Yes</label>
                                    </div>
                                    <div class="q-box__question">
                                        <input class="form-check-input question__input" id="q_6_no" name="six" type="radio" value="No"> 
                                        <label class="form-check-label question__label" for="q_6_no">No</label>
                                    </div>
                            </div>
                            <div class="step">
                                <h5>7. Would your doctor fill out a VA form saying that the Veteran and/or surviving spouse needs
                                    help with two of the following activities of living: bathing, dressing, toileting, transferring,
                                    eating, continence, meal preparation, medicine management, or is legally blind? </h5>
                                    <div class="q-box__question">
                                        <input class="form-check-input question__input" id="q_7_yes" name="seven" type="radio" value="Yes"> 
                                        <label class="form-check-label question__label" for="q_7_yes">Yes</label>
                                    </div>
                                    <div class="q-box__question">
                                        <input class="form-check-input question__input" id="q_7_no" name="seven" type="radio" value="No"> 
                                        <label class="form-check-label question__label" for="q_7_no">No</label>
                                    </div>
                            </div>
                            <div class="step">
                                <h5>8. Would the veteran or surviving spouse be willing to pay a family member or company to help with the activities of daily living listed above, if they receive the benefit?</h5>
                                    <div class="q-box__question">
                                        <input class="form-check-input question__input" id="q_8_yes" name="eight" type="radio" value="Yes"> 
                                        <label class="form-check-label question__label" for="q_8_yes">Yes</label>
                                    </div>
                                    <div class="q-box__question">
                                        <input class="form-check-input question__input" id="q_8_no" name="eight" type="radio" value="No"> 
                                        <label class="form-check-label question__label" for="q_8_no">No</label>
                                    </div>
                            </div>
                            <div class="step">
                                <h5>9. Is the veteran or surviving spouse receiving any monthly compensation, either service
                                    connected disability or retirement pay, that is greater than $1880/month for a Veteran or
                                    $1300/month for a surviving spouse? </h5>
                                    <div class="q-box__question">
                                        <input class="form-check-input question__input" id="q_9_yes" name="nine" type="radio" value="Yes"> 
                                        <label class="form-check-label question__label" for="q_9_yes">Yes</label>
                                    </div>
                                    <div class="q-box__question">
                                        <input class="form-check-input question__input" id="q_9_no" name="nine" type="radio" value="No"> 
                                        <label class="form-check-label question__label" for="q_9_no">No</label>
                                    </div>
                            </div>
                            <div class="step">
                                <h5>10. What is the veterans and/or surviving spouse current gross monthly income? This would
                                    include: Pensions, Social Security, Annuity Income, Long Term Care Income, RMD, Interest, Dividends,
                                    Rental Income, Brokerage account Income</h5>
                                    <div class="q-box__question">
                                        <input class="form-check-input question__input" id="q_10_one" name="ten" type="radio" value="Yes"> 
                                        <label class="form-check-label question__label" for="q_10_one">0-$2000</label>
                                    </div>
                                    <div class="q-box__question">
                                        <input class="form-check-input question__input" id="q_10_two" name="ten" type="radio" value="No"> 
                                        <label class="form-check-label question__label" for="q_10_two">$2000-$3000</label>
                                    </div>
                                    <div class="q-box__question">
                                        <input class="form-check-input question__input" id="q_10_three" name="ten" type="radio" value="Yes"> 
                                        <label class="form-check-label question__label" for="q_10_three">$3000-$4000</label>
                                    </div>
                                    <div class="q-box__question">
                                        <input class="form-check-input question__input" id="q_10_four" name="ten" type="radio" value="No"> 
                                        <label class="form-check-label question__label" for="q_10_four">$4000-$5000</label>
                                    </div>
                                    <div class="q-box__question">
                                        <input class="form-check-input question__input" id="q_10_five" name="ten" type="radio" value="No"> 
                                        <label class="form-check-label question__label" for="q_10_five">$5000-higher</label>
                                    </div>
                            </div>
                            <div class="step">
                                <h5>11. What is the Veterans and/or surviving spouses current monthly medical expenses? This ONLY
                                    INCLUDES THE FOLLOWING MEDICAL EXPENSES: assisted living care, home health care, nursing
                                    home care, Medicare supplement, Medicare Part B, Medicare Part D, long term care monthly
                                    premium, monthly recurring prescriptions</h5>
                                    <div class="q-box__question">
                                        <input class="form-check-input question__input" id="q_11_one" name="eleven" type="radio" value="Yes"> 
                                        <label class="form-check-label question__label" for="q_11_one">0-$2000</label>
                                    </div>
                                    <div class="q-box__question">
                                        <input class="form-check-input question__input" id="q_11_two" name="eleven" type="radio" value="No"> 
                                        <label class="form-check-label question__label" for="q_11_two">$2000-$3000</label>
                                    </div>
                                    <div class="q-box__question">
                                        <input class="form-check-input question__input" id="q_11_three" name="eleven" type="radio" value="Yes"> 
                                        <label class="form-check-label question__label" for="q_11_three">$3000-$4000</label>
                                    </div>
                                    <div class="q-box__question">
                                        <input class="form-check-input question__input" id="q_11_four" name="eleven" type="radio" value="No"> 
                                        <label class="form-check-label question__label" for="q_11_four">$4000-$5000</label>
                                    </div>
                            </div>
                            <div class="step">
                                <h5>12. Is the monthly medical expense amount in #11 greater than the income amount in #10? </h5>
                                    <div class="q-box__question">
                                        <input class="form-check-input question__input" id="q_12_yes" name="twelve" type="radio" value="Yes"> 
                                        <label class="form-check-label question__label" for="q_12_yes">Yes</label>
                                    </div>
                                    <div class="q-box__question">
                                        <input class="form-check-input question__input" id="q_12_no" name="twelve" type="radio" value="No"> 
                                        <label class="form-check-label question__label" for="q_12_no">No</label>
                                    </div>
                            </div>
                            <div class="step">
                                <h5>Provide us with your personal information</h5>
                                <div class="mt-1">
                                    <label class="form-label">Complete Name:</label> 
                                    <input class="form-control" id="full_name" name="full_name" type="text">
                                </div>
                                <div class="mt-2">
                                    <label class="form-label">Complete Address:</label> 
                                    <input class="form-control" id="address" name="address" type="text">
                                </div>
                                <div class="mt-2">
                                    <label class="form-label">Email:</label> 
                                    <input class="form-control" id="email" name="email" type="email">
                                </div>
                                <div class="mt-2">
                                    <label class="form-label">Phone / Mobile Number:</label> 
                                    <input class="form-control" id="phone" name="phone" type="text">
                                </div>
                            </div>
                            <div id="success">
                                <div class="mt-5">
                                    <h4>Success!</h4>
                                    <p>Based on your answers, it appears that you qualify for the Aid and Attendance Benefit..</p>
                                </div>
                            </div>
                            <div id="errorr" class="d-none">
                                <div class="mt-5">
                                    <h4>Sorry!</h4>
                                    <p>Based on your answers, it appears that you are not qualified for the Aid and Attendance Benefit.</p>
                                </div>
                            </div>
                        </div>
                        <div id="q-box__buttons">
                            <button id="prev-btn" type="button">Previous</button> 
                            <button id="next-btn" type="button">Next</button> 
                            <button id="submit-btn" type="submit" name="mail">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div><!-- PRELOADER -->
    <div id="preloader-wrapper">
        <div id="preloader"></div>
        <div class="preloader-section section-left"></div>
        <div class="preloader-section section-right"></div>
    </div>



<footer bind="e2c35cf2-ff81-d654-09cc-bc09780be521" class="section footer wf-section">
<div class="div-block-5"></div>
<div class="w-container">
<div class="footer-row w-row">
<div class="w-col w-col-6">
<div class="footer-text align">Copyright 2022 Veterans Consultants, Inc</div>
</div>
<div class="right-footer-col w-col w-col-6">
<a href="#" class="button w-button">Back to Top</a>
<a href="mailto: info@veteransconsultants.us" class="social-icon w-inline-block"><img src="images/14-social-email.png" width="20" data-sizes="[{&quot;max&quot;:479,&quot;size&quot;:&quot;23vw&quot;},{&quot;max&quot;:10000,&quot;size&quot;:&quot;20px&quot;}]" alt=""></a>
<a target="_blank" href="https://facebook.com/" class="social-icon w-inline-block"><img src="images/14-social-facebook.png" width="20" data-sizes="[{&quot;max&quot;:479,&quot;size&quot;:&quot;23vw&quot;},{&quot;max&quot;:10000,&quot;size&quot;:&quot;20px&quot;}]" alt=""></a>
</div>
</div>
</div>
</footer>
<?php 
        if(isset($_SESSION['success'])){
            echo "<script>
            let stepCount = 12;
            let step = document.getElementsByClassName('step');
            let submitBtn = document.getElementById('submit-btn');
            document.querySelector('body').classList.add('loaded');
            step[stepCount].classList.remove('d-block');
            step[stepCount].classList.add('d-none');
            document.getElementById('prev-btn').classList.remove('d-inline-block');
            document.getElementById('prev-btn').classList.add('d-none');
            document.getElementById('next-btn').classList.remove('d-inline-block');
            document.getElementById('next-btn').classList.add('d-none');
            document.getElementById('success').classList.remove('d-none');
            document.getElementById('success').classList.add('d-block');
            submitBtn.classList.remove('d-inline-block');
            submitBtn.classList.add('d-none');
            </script>";
        }
    ?>
    <?php 
        if(isset($_SESSION['error'])){
            echo "<script>
            let stepCount = 12;
            let step = document.getElementsByClassName('step');
            let submitBtn = document.getElementById('submit-btn');
            document.querySelector('body').classList.add('loaded');
            step[stepCount].classList.remove('d-block');
            step[stepCount].classList.add('d-none');
            document.getElementById('prev-btn').classList.remove('d-inline-block');
            document.getElementById('prev-btn').classList.add('d-none');
            document.getElementById('next-btn').classList.remove('d-inline-block');
            document.getElementById('next-btn').classList.add('d-none');
            document.getElementById('errorr').classList.remove('d-none');
            document.getElementById('errorr').classList.add('d-block');
            submitBtn.classList.remove('d-inline-block');
            submitBtn.classList.add('d-none');
            </script>";
        }
    ?>
<script src="js/vet-a7adba.js" type="text/javascript"></script>
<script src="js/script.js"></script>
<!-- Static App Form Collection Script -->
<script src="https://static.app/js/static-forms.js" type="text/javascript"></script>
</body>
</html>