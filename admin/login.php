<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/wtlogo.png" type="image/ico"/>

    <title>World Talent | </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="../vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
</head>

<body class="login">
<div>
    <a class="hiddenanchor" id="signup"></a>
    <a class="hiddenanchor" id="signin"></a>

    <div class="login_wrapper">
        <div class="animate form login_form">
            <section class="login_content">
                <form action="lgn.php" method="post">
                    <h1>Administrator Login</h1>
                    <div>
                        <input type="text" name="email" class="form-control" placeholder="Enter Email Address"
                               required=""/>
                    </div>
                    <div>
                        <input type="password" name="password" class="form-control" placeholder="Enter Password"
                               required=""/>
                    </div>
                    <div>
                        <input type="submit" class="btn btn-primary" name="login" Value="Login"/>
                        <a class="reset_pass" href="#">Lost your password?</a>
                    </div>

                    <div class="clearfix"></div>

                    <div class="separator">
                        <p class="change_link">New to site?
                            <a href="#signup" class="to_register"> Create Account </a>
                        </p>

                        <div class="clearfix"></div>
                        <br/>

                        <div>
                            <h1>World Talent Federation</h1>
                        </div>
                    </div>
                </form>
            </section>
        </div>

        <div id="register" class="animate form registration_form">
            <section class="login_content">
                <form method="post" action="signup.php">
                    <h1>Create Account</h1>
                    <div>
                        <input type="text" name="token" class="form-control" placeholder="Confirm Account Token.." required=""/>
                    </div>
                    <div>
                        <div>
                            <select class="form-control" name="title" reguired>
                                <option>Select Title</option>
                                <option value="Mr.">Mr.</option>
                                <option value="Mrs.">Mrs.</option>
                                <option value="Miss">Ms.</option>
                                <option value="Dr.">Dr.</option>
                                <option value="Prof.">Prof.</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div>
                        <input type="text" name="firstName" class="form-control" placeholder="First Name.." required=""/>
                    </div>
                    <div>
                        <input type="text" name="middleName" class="form-control" placeholder="Middle Name.." required=""/>
                    </div>
                    <div>
                        <input type="text" name="lastName" class="form-control" placeholder="Last Name.." required=""/>
                    </div>
                    <div hidden>
                        <input type="text" name="username" value="Administrator" class="form-control" placeholder="Username.." required=""/>
                    </div>
                    <div>
                        <input type="email" name="email" class="form-control" placeholder="Email.." required=""/>
                    </div>
                    <div>
                        <input type="text" name="phone" class="form-control" placeholder="Phone Number.." required=""/>
                    </div>
                    <div>
                        <input type="password" value="Gnt792" class="form-control" name="password" required=""/>
                    </div>
                    <div hidden>
                        <input type="text" value="superAdmin" class="form-control" name="role" required=""/>
                    </div>
                    <div>
                        <input type="submit" class="btn btn-info" name="register" value="Submit"/>
                    </div>

                    <div class="clearfix"></div>

                    <div class="separator">
                        <p class="change_link">Already created Account?
                            <a href="#signin" class="to_register"> Log in </a>
                        </p>

                        <div class="clearfix"></div>
                        <br/>

                        <div>
                            <h1>World Talent Federation</h1>
                        </div>
                    </div>
                </form>
            </section>
        </div>
    </div>
</div>
</body>
</html>
