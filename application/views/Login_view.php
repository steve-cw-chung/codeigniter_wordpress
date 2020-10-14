<?php get_header(); ?>
<!DOCTYPE html>
<html lang="en" class="body-full-height">
    <head>
        <!-- META SECTION -->
        <title>COINTREE Login</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->

        <!-- CSS INCLUDE -->
        <!-- <link rel="stylesheet" type="text/css" id="theme" href="/include/css/main.css"/> -->
        <link rel="stylesheet" type="text/css" id="theme" href="/include/css/login.css?version=<?php echo date("YmdHis"); ?>" />
        <link rel="stylesheet" type="text/css" id="theme" href="/include/css/util.css"/>
        <!-- EOF CSS INCLUDE -->
    </head>
    <body>

        <div class="login-container lightmode">

            <div class="login-box">                
                <div class="login-body">
                    
                    <div class="limiter">
                  		<div class="container-login100" style="min-height: 70vh;">
                  			<div class="wrap-login100 p-b-70">                  					
                                <div class="login-logo">
                                    <img src="/include/images/cointree-logo.png" width="343px" height="232px">
                                </div>
                                <form action="login/doLogin" class="login100-form validate-form" method="post">
                    					<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Enter username">
                    						<input class="input100" type="text" name="username">
                    						<span class="focus-input100" data-placeholder="Username"></span>
                    					</div>

                    					<div class="wrap-input100 validate-input m-b-50" data-validate="Enter password">
                    						<input class="input100" type="password" name="password">
                    						<span class="focus-input100" data-placeholder="Password"></span>
                    					</div>

                    					<div class="container-login100-form-btn">
                    						<button class="login100-form-btn">
                    							Login
                    						</button>
                    					</div>
                  				</form>
                  			</div>
                  		</div>
                  	</div>

                </div>
                <div class="login-footer" align="center">
                    <div class="pull-left">
                        Copyright &copy; <?php echo date('Y'); ?>, Lukiu Media, Inc. All Rights Reserved
                    </div>
                    <div class="pull-right">
                        <!-- <a href="#">About</a> |
                        <a href="#">Privacy</a> |
                        <a href="#">Contact Us</a> -->
                    </div>
                </div>
            </div>

        </div>

        <!-- START PAGE Javascript for Lukiu Media -->
        <script type="text/javascript" src="/include/vendor/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="/include/js/login.js?version=<?php echo date("YmdHis"); ?>" ></script>
        <!-- END PAGE Javascript for Lukiu Media -->

    </body>
</html>
