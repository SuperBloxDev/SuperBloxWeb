<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/reactor.php';
?>

<!DOCTYPE html>
<!--[if IE 8]><html class="ie8" ng-app="robloxApp"><![endif]-->
<!--[if gt IE 8]><!-->
<html>
<!--<![endif]-->
    <title><?= name; ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,requiresActiveX=true"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="<?= name; ?>"/>
    <meta name="description" content="<?= name; ?> is powered by a growing community of over 300,000 creators who produce an infinite variety of highly immersive experiences. These experiences range from 3D multiplayer games and competitions, to interactive adventures where friends can take on new personas imagining what it would be like to be a dinosaur, a miner in a quarry or an astronaut on a space exploration."/>
    <meta name="keywords" content="free games, online games, building games, virtual worlds, free mmo, gaming cloud, physics engine"/>
    <meta name="apple-itunes-app" content="app-id=431946152"/>
    <meta name="google-site-verification" content="KjufnQUaDv5nXJogvDMey4G-Kb7ceUVxTdzcMaP9pCY"/>

    <link href="https://images.rbxcdn.com/7aee41db80c1071f60377c3575a0ed87.ico" rel="icon"/>
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,500,600,700" rel="stylesheet" type="text/css">
    <link rel="canonical" href="https://www.roblox.com/"/>
    <link rel="stylesheet" href="https://static.rbxcdn.com/css/leanbase___93015a16b8a3f8daa68875a4bcf0b0bf_m.css/fetch"/>
    <link rel="stylesheet" href="https://static.rbxcdn.com/css/page___8da1536fdd0a008b03efd093aa526c3b_m.css/fetch"/>

    <script type="text/javascript" src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.11.1.min.js"></script>
    <script type="text/javascript">window.jQuery || document.write("<script type='text/javascript' src='/js/jquery/jquery-1.11.1.js'><\/script>")</script>
    <script type="text/javascript" src="https://ajax.aspnetcdn.com/ajax/jquery.migrate/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript">window.jQuery || document.write("<script type='text/javascript' src='/js/jquery/jquery-migrate-1.2.1.js'><\/script>")</script>
    <script type="text/javascript" src="https://js.rbxcdn.com/3546f3053a4d1804430cfda9ebfe98f5.js"></script>

    <meta property="og:site_name" content="<?= name; ?>"/>
    <meta property="og:title" content="<?= name; ?>"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="https://www.roblox.com/"/>
    <meta property="og:description" content="<?= name; ?> is powered by a growing community of over 300,000 creators who produce an infinite variety of highly immersive experiences. These experiences range from 3D multiplayer games and competitions, to interactive adventures where friends can take on new personas imagining what it would be like to be a dinosaur, a miner in a quarry or an astronaut on a space exploration."/>
    <meta property="og:image" content="https://images.rbxcdn.com/fb70fd2b56107a0d43f2f98658885702.jpg"/>
    <meta property="fb:app_id" content="190191627665278">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@ idk"> <!-- REPLACE!!! -->
    <meta name="twitter:title" content="<?= name; ?>">
    <meta name="twitter:description" content="<?= name; ?> is powered by a growing community of over 300,000 creators who produce an infinite variety of highly immersive experiences. These experiences range from 3D multiplayer games and competitions, to interactive adventures where friends can take on new personas imagining what it would be like to be a dinosaur, a miner in a quarry or an astronaut on a space exploration.">
    <meta name="twitter:creator">
    <meta name="twitter:image1" content="https://images.rbxcdn.com/fb70fd2b56107a0d43f2f98658885702.jpg"/>
    <meta name="twitter:app:country" content="US">
    <meta name="twitter:app:name:iphone" content="<?= name; ?> Mobile">
    <meta name="twitter:app:id:iphone" content="431946152">
    <meta name="twitter:app:url:iphone">
    <meta name="twitter:app:name:ipad" content="<?= name; ?> Mobile">
    <meta name="twitter:app:id:ipad" content="431946152">
    <meta name="twitter:app:url:ipad">
    <meta name="twitter:app:name:googleplay" content="<?= name; ?>">
    <meta name="twitter:app:id:googleplay" content="com.roblox.client">
    <meta name="twitter:app:url:googleplay"/>

    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="rbx-body" class="" data-performance-relative-value="0.5" data-internal-page-name="RollerCoaster" data-send-event-percentage="0">
    
<style type="text/css">
    .coverSprite {
        background-repeat: no-repeat;
        background-image: url('https://images.rbxcdn.com/20e7d1543d2c5caf201184d86530fc35.png');
    }
    #RollerContainer {
        background-image: url('https://images.rbxcdn.com/dcbdfaf1c08058e71f65c09f7b98ff04.jpg');
        background-repeat: no-repeat;
        background-size: cover;
    }
    .special-dropdown select {
        border: 0 !important;
        -webkit-appearance: none;
        -moz-appearance: none;
        background: url('https://images.rbxcdn.com/379f4f1018f31cbb62ef52a22d9f2118.png') no-repeat;
        background-position: 92% 40%;
        width: 100px;
        text-indent: 0.01px;
        text-overflow: "";
    }
    #InnerWhatsRobloxContainer1 {
        height: 70%;
        background-image: url('https://images.rbxcdn.com/cca69eca62f23ca413fc920549e936ea.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        background-position: 30% center;
        color: white;
    }
    #GameImage1 {
        background-image: url('https://images.rbxcdn.com/42268b6264d89827401ef912f174f288.jpg');
        margin-right: 5px;
    }

    #GameImage2 {
        background-image: url('https://images.rbxcdn.com/04baeb33ef66ef1395cd5464309fece6.jpg');
        margin-right: 5px;
    }

    #GameImage3 {
        background-image: url('https://images.rbxcdn.com/e8b89d14690203420d64b5b2fda0b461.jpg');
        margin-right: -10px;
        width: calc(33.333333% - 10px);
    }

    .alert-info {
    background-color: #F68802;
    border: 0 none;
    margin: 0;
    text-align: center;
    color: #fff;
    font-size: 18px;
    line-height: 1em;
    padding: 12px 0;
}
</style>
<div class="navbar navbar-landing navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="row">
            <div class="navbar-header col-md-6">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#LandingNavbar">
                    Log In
                </button>
                <div class="navbar-brand hidden-xs"><img alt="Roblox Logo" class="robloxLogo" src="https://images.rbxcdn.com/e870a0b9bcd987fbe7f730c8002f8faa.png"/></div>
                <ul id="TopLeftNavLinks" class="nav navbar-nav">
                    <li id="PlayLink" class="pull-left"><a href="#RollerContainer" onclick="return scrollTo(1, '#RollerContainer');">Play</a></li>
                    <li id="AboutLink" class="pull-left"><a href="#WhatsRobloxContainer" onclick="return scrollTo(2, '#WhatsRobloxContainer');">About</a></li>
                    <li id="PlatformLink" class="pull-left"><a href="#RobloxDeviceText" onclick="return scrollTo(3, '#RobloxDeviceText');">Platforms</a></li>
                    <li id="magic-line"></li>
                </ul>
            </div>

<div class="collapse navbar-collapse col-sm-6" id="LandingNavbar" ng-modules="roblox.formEvents">
    <form name="loginForm" action="/newlogin" id="LogInForm" class="navbar-form form-inline navbar-right" method="post" role="form" rbx-form-context context="RollerCoaster" novalidate>
        <div class="form-group" id="LoginUsernameParent">
            <input id="LoginUsername" type="text" placeholder="Username" class="form-control" name="username" rbx-form-interaction/>
        </div>
        <div class="form-group" id="LoginPasswordParent">
            <input id="LoginPassword" type="password" placeholder="Password" class="form-control" name="password" rbx-form-interaction/>
        </div>
        <div class="form-group">
            <input type="submit" id="LoginButton" class="form-control" value="Log In" rbx-form-interaction name="submitLogin"/>
        </div>
        <a id="HeaderForgotPassword" class="navbar-link" href="/Login/ResetPasswordRequest.aspx">Forgot Username/Password?</a>
        <input id="ReturnUrl" name="ReturnUrl" type="hidden" value=""/>
    </form>
</div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <!-- Roller Coaster-->
    <section class="row full-height-section" id="RollerContainer">
        <div class="col-md-12 inner-full-height-section" id="InnerRollerContainer">
            <div id="MainCenterContainer" class="row">
                <div class="col-xs-12 col-md-6">
                    <div id="MainLogo" class="text-right">
                        <div id="LogoAndSlogan" class="text-center">
                            <img id="MainLogoImage" title="<?= name; ?>" class="center-block img-responsive" src="/assets/logo/landing_full.png"/> <!-- https://images.rbxcdn.com/39ae3ca577c8488487ef492031b8e264.png -->
                            <div class="clearfix"></div>
                            <h1>Powered by <i style="font-family:Comic Sans MS;">supper</i><span> &#8482; </span></h1>
                        </div>
                    </div>
                </div>

                <div class="clearfix visible-sm"></div>
                <div class="col-xs-12 col-md-6">
                    <div id="SignUpFormContainer" data-return-url="">
                         
    <div class="" data-parent-url="" data-is-from-studio="false" data-is-facebook-button-shown="false">
        <div class="rbx-login-partial-legacy">
                <h3 class="text-center signup-header">
                    Sign up and start having fun!
                </h3>
                <h3 class="text-center login-header" style="display: none;">
                    Log in and start having fun!
                </h3>

<style type="text/css">
    .male {
        background-image: url('https://images.rbxcdn.com/856241927a2ac609e3033feada3ef9f9.png');
        background-repeat: no-repeat;
    }
    .female {
        background-image: url('https://images.rbxcdn.com/a0afd0556163477e1023c5aa55d1b9f6.png');
        background-repeat: no-repeat;
    }
</style>

<div class="signup-or-log-in new-username-pwd-rule" ng-modules="SignupOrLogin" ng-controller="SignupOrLoginController" data-metadata-params="{&quot;isEligibleForHideAdsAbTest&quot;:&quot;True&quot;}" data-v2-username-password-rules-enabled="1" data-is-login-default-section="false">

    <div class="signup-container" ng-controller="SignupController" ng-show="isSectionShown">
        <div class="signup-input-area" ng-form name="signupForm" rbx-form-context context="RollerCoaster">
             
<img src="/timg/rbx.png" style="position: absolute"/>
<!-- BACKEND HERE!!! u can get rid of the ng- stuff cuz thats not rly needed -->
            <div class="form-group" ng-class="{'has-error' : (badSubmit || signupForm.username.$dirty) &amp;&amp; signupForm.username.$invalid, 'has-success': (signupForm.username.$dirty &amp;&amp; signupForm.username.$valid) }">
                <input id="signup-username" ng-trim="false" ng-change="onChange()" name="username" class="form-control input-field" type="text" tabindex="1" rbx-valid-username rbx-form-interaction rbx-form-validation placeholder="Username (length 3-20, _ is allowed)" ng-model="signup.username"/>
                <p id="signup-usernameInputValidation" class="form-control-label input-validation text-error" ng-bind="(badSubmit || signupForm.username.$dirty) ? signupForm.username.$validationMessage : ''"></p>
            </div>
            <div class="form-group" ng-class="{'has-error' : (badSubmit || signupForm.password.$dirty) &amp;&amp; signupForm.password.$invalid, 'has-success': (signupForm.password.$dirty &amp;&amp; signupForm.password.$valid) }">
                <input id="signup-password" ng-trim="false" name="password" class="form-control input-field" type="password" tabindex="2" rbx-valid-password rbx-form-interaction rbx-form-validation rbx-form-validation-redact-input placeholder="Password (minimum length 8)" ng-model="signup.password">
                <p id="signup-passwordInputValidation" class="form-control-label input-validation text-error" ng-bind="(badSubmit || signupForm.password.$dirty) ? signupForm.password.$validationMessage : ''"></p>
            </div>
            <div class="form-group" ng-class="{'has-error' : (badSubmit || signupForm.passwordConfirm.$dirty) &amp;&amp; signupForm.passwordConfirm.$invalid, 'has-success': (signupForm.passwordConfirm.$dirty &amp;&amp; signupForm.passwordConfirm.$valid) }">
                <input id="signup-password-confirm" ng-trim="false" name="passwordConfirm" class="form-control input-field" match="signup.password" rbx-valid-password-confirm rbx-form-interaction rbx-form-validation rbx-form-validation-redact-input type="password" tabindex="3" placeholder="Confirm Password" ng-model="signup.passwordConfirm"/>
                <p id="signup-passwordConfirmInputValidation" class="form-control-label input-validation text-error" ng-bind="(badSubmit || signupForm.passwordConfirm.$dirty) ? signupForm.passwordConfirm.$validationMessage : ''"></p>
            </div>
            <div class="birthday-container">
                <div class="form-group" ng-class="{'has-error' : showBirthdayValidation(), 'has-success' : signupForm.birthdayMonth.$dirty &amp;&amp; signupForm.birthdayDay.$dirty &amp;&amp; signupForm.birthdayYear.$dirty &amp;&amp; !showBirthdayValidation() }">
                    <div class="form-control fake-input-lg">
                        <label class="birthday-label">Birthday</label>
                        <div class="rbx-select-group month">
                                <select class="input-field rbx-select" id="MonthDropdown" tabindex="4" rbx-valid-birthday rbx-form-interaction rbx-form-validation name="birthdayMonth" ng-model="signup.birthdayMonth">
                                    <option value="" disabled selected>Month</option>
                                    <option value="Jan">January</option>
                                    <option value="Feb">February</option>
                                    <option value="Mar">March</option>
                                    <option value="Apr">April</option>
                                    <option value="May">May</option>
                                    <option value="Jun">June</option>
                                    <option value="Jul">July</option>
                                    <option value="Aug">August</option>
                                    <option value="Sep">September</option>
                                    <option value="Oct">October</option>
                                    <option value="Nov">November</option>
                                    <option value="Dec">December</option>
                                </select>
                        </div>
                        <div class="rbx-select-group day">
                            <select class="input-field rbx-select" id="DayDropdown" tabindex="5" rbx-valid-birthday rbx-form-interaction rbx-form-validation name="birthdayDay" ng-model="signup.birthdayDay">
                                <option value="" disabled selected>Day</option>
                                    <?= implode("\n", array_map(fn($d) => "<option value=\"$d\">$d</option>", range(1, 31))); ?>
                            </select>
                        </div>
                        <div class="rbx-select-group year">
                            <select class="input-field rbx-select" id="YearDropdown" rbx-valid-birthday rbx-form-interaction rbx-form-validation tabindex="6" name="birthdayYear" ng-model="signup.birthdayYear">
                                <option value="" disabled selected>Year</option>
                                    <?= implode("\n", array_map(fn($y) => "<option value=\"$y\">$y</option>", range(date("Y"), 1913))); ?>
                            </select>
                        </div>
                    </div>
                    <p id="signup-BirthdayInputValidation" class="form-control-label input-validation text-error" ng-bind="showBirthdayValidation() ? 'Invalid birthday' : ''"></p>
                </div>

            </div>
            <div class="gender-container">
                <div class="form-group" ng-class="{'has-error' : (badSubmit &amp;&amp; !(signup.gender == 2 || signup.gender == 3)), 'has-success': signup.gender == 2 || signup.gender == 3 }">
                    <div class="form-control fake-input-lg">
                        <label>Gender</label>
                        <!-- BACKEND HERE!!! transgender pls.. -->
                            <div id="FemaleButton" class="gender-circle" tabindex="7" rbx-form-interaction name="genderFemale" ng-class="{ 'selected-gender': signup.gender == 3 }" ng-click="setGender($event, 3)" ng-keypress="setGender($event, 3)">
                                <div class="cover-sprite gender female"></div>
                            </div>
                            <div id="MaleButton" class="gender-circle" tabindex="8" rbx-form-interaction name="genderMale" ng-class="{ 'selected-gender': signup.gender == 2 }" ng-click="setGender($event, 2)" ng-keypress="setGender($event, 2)">
                                <div class="cover-sprite gender male"></div>
                            </div>
                    </div>
                    <p id="signup-GenderInputValidation" class="form-control-label input-validation text-error" ng-bind="(badSubmit &amp;&amp; !(signup.gender == 2 || signup.gender == 3)) ? 'Gender is required' : ''"></p>
                </div>
            </div>
            <button id="signup-button" type="submit" tabindex="9" class="btn-primary-md signup-submit-button" rbx-form-interaction name="signupSubmit" ng-disabled="isSubmitting" data-signup-api-url="https://api.roblox.com/signup/v1" ng-click="submitSignup($event)" ng-keypress="submitSignup($event)">Sign Up</button>
            <noscript>
                <div class="text-danger">
                    <strong>JavaScript is required to submit this form.</strong>
                </div>
            </noscript>
            <div id="GeneralErrorText" class="input-validation-large rbx-alert-warning font-bold" ng-cloak ng-show="signupForm.$generalError" ng-bind="signupForm.$generalErrorText" ng-click="signupForm.$generalError=false"></div>
        </div>
    </div>

    <div class="captcha-container" ng-controller="CaptchaController" ng-form name="captchaForm" rbx-form-context context="RollerCoaster" ng-cloak ng-show="isSectionShown">
        <div class="captcha-response-message text-error" ng-bind="$validationMessage"></div>
        <script type="text/javascript">
		var RecaptchaOptions = {
			theme : 'white',
			tabindex : 0
		};

</script><!-- CAPTCHA HERE!!! -->
    </div>
</div>
        </div>
    </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="attribution hidden-xs">
            <span class="notranslate">Game: ROBLOX Point</span><br>
            Developer: <span class="notranslate">StarMarine614</span>
        </div>
    </section>

    <!-- What is Roblox -->
    <section class="row full-height-section" id="WhatsRobloxContainer">

        <div class="col-md-12 inner-full-height-section">

            <div class="row" id="InnerWhatsRobloxContainer1">
                <div id="WhatIsRobloxTextBg" class="col-sm-5 col-sm-offset-6 col-xs-8 col-xs-offset-2">
                    <h1 class="text-center">WHAT IS <?= name; ?>?</h1>
                    <p class="lead text-justify">
                        <?= name; ?> is the best place to Imagine with Friends™. With the largest user-generated online gaming platform, and over 15 million games created by users, <?= name; ?> is the #1 gaming site for kids and teens (comScore). Every day, virtual explorers come to <?= name; ?> to create adventures, play games, role play, and learn with their friends in a family-friendly, immersive, 3D environment.
                    </p>
                </div>
            </div>

            <div class="row" id="InnerWhatsRobloxContainer2">
                <div id="GameImage1" class="col-sm-4 col-xs-12 game-image"></div>
                <div id="GameImage2" class="hidden-xs col-sm-4 game-image"></div>
                <div id="GameImage3" class="col-sm-4 hidden-xs game-image"></div>
            </div>

        </div>
    </section>
    <div class="clearfix"></div>

    <!-- Roblox on your device -->
    <section id="DeviceSection">
        <div class="row" id="RobloxDeviceText">
            <div class="col-md-6 col-md-offset-3 text-center">
                <h2><?= name; ?> ON YOUR DEVICE</h2>
                <p class="lead center-block">
                    You can access <?= name; ?> on PC and Android. <?= name; ?> adventures are accessible from any device, so players can imagine with their friends regardless of where they are.
                </p>
            </div>
        </div>

        <div class="row" id="DeviceImageContainer">
            <div class="col-md-12">
                <div class="row text-center">
                    <img id="ComputerImgSmall" class="center-block img-responsive hidden-lg ComputerImg" src="https://images.rbxcdn.com/0ad1ae4bf929fb82cad6f30fdf03b6db.png"/>
                    <img class="center-block img-responsive visible-lg-block ComputerImg" src="https://images.rbxcdn.com/9edeef823842e76479587a57c05cb5bc.png"/>

                </div>
            </div>
        </div>
    </section>

<footer class="container-footer">
    <div class="footer">
        <div class="alert-container">
          	<div class="alert-info" role="alert">these links go to roblox.com so like do something pls</div>
        </div>
        <ul class="row footer-links">
                <li class="col-4 col-xs-2 footer-link">
                    <a href="https://corp.roblox.com/" class="text-footer-nav roblox-interstitial" target="_blank">
                        About Us
                    </a>
                </li>
                <li class="col-4 col-xs-2 footer-link">
                    <a href="https://corp.roblox.com/jobs" class="text-footer-nav roblox-interstitial" target="_blank">
                        Jobs
                    </a>
                </li>
            <li class="col-4 col-xs-2 footer-link">
                <a href="https://blog.roblox.com/" class="text-footer-nav" target="_blank">
                    Blog
                </a>
            </li>
            <li class="col-4 col-xs-2 footer-link">
                <a href="https://www.roblox.com/Info/Privacy.aspx" class="text-footer-nav" target="_blank">
                    Privacy
                </a>
            </li>
            <li class="col-4 col-xs-2 footer-link">
                <a href="https://corp.roblox.com/parents" class="text-footer-nav roblox-interstitial" target="_blank">
                    Parents
                </a>
            </li>
            <li class="col-4 col-xs-2 footer-link">
                <a href="https://en.help.roblox.com/" class="text-footer-nav roblox-interstitial" target="_blank">
                    Help
                </a>
            </li>
        </ul>
        <p class="text-footer footer-note">
            <?= name; ?> is an independent project and is not affiliated with, sponsored by, or endorsed by Roblox Corporation. 
            All characters, logos, names, and related indicia used here are trademarks of their respective owners.  ©2025 <?= name; ?>.
            Use of this site signifies your acceptance of the <a href="/info/terms-of-service" target="_blank" class="text-link">Terms and Conditions</a>.
        </p>
    </div>
</footer>
</div>

<img src="/timg/rbx.png" style="position: absolute"/>
    
<script type="text/javascript" src="https://js.rbxcdn.com/a29db588a0856ac878b3848fd0fd308e.js"></script>
<script type="text/javascript" src="https://js.rbxcdn.com/5f2b6fcc9bed78d8c184c449ca7fb2a1.js"></script>
<script type="text/javascript" src="https://js.rbxcdn.com/aa4d4a4424edc810767185b31deb938c.js"></script>
</body>
</html>