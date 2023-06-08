<?php include("session.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Sign Up Signin Form </title>
  <link rel="stylesheet" href="style1.css">

</head>

<body>
  <!-- partial:index.partial.html -->
  <html lang="en">

  <head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  </head>

  <body>
    <?php
    include('alert.php');
    ?>
    <div id="form">

      <div class="container">
        <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-md-8 col-md-offset-2">
          <div id="userform">
            <ul class="nav nav-tabs nav-justified" role="tablist">
              <li class="active"><a href="#signup" role="tab" data-toggle="tab">Sign up</a></li>
              <li><a href="#login" role="tab" data-toggle="tab">Log in</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane fade active in" id="signup">
                <h2 class="text-uppercase text-center"> Sign Up for Free</h2>
                <form id="signup" action="register.php" method="post">
                  <div class="form-group">
                    <label>Name<span class="req">*</span></label>
                    <input type="text" class="form-control" id="name" name="name" required
                      data-validation-required-message="Please enter your name." autocomplete="off">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <label>Email<span class="req">*</span></label>
                    <input type="email" class="form-control" id="email" name="email" required
                      data-validation-required-message="Please enter your email address." autocomplete="off">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <label>Phone Number<span class="req">*</span></label>
                    <input type="tel" class="form-control" id="phone" name="phoneno" required
                      data-validation-required-message="Please enter your phone number." autocomplete="off">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <label>Company Name</label>
                    <input type="text" class="form-control" id="company" name="cmp" autocomplete="off">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <label>Position</label>
                    <input type="text" class="form-control" id="position" name="pos" autocomplete="off">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <label>Password<span class="req">*</span></label>
                    <input type="password" class="form-control" id="password" name="password" required
                      data-validation-required-message="Please enter your password" autocomplete="off">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <label>Feedback</label>
                    <textarea class="form-control" id="feedback" name="Feedback" rows="4" name="fdbk"></textarea>
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="mrgn-30-top">
                    <button type="submit" class="btn btn-larger btn-block">Sign up</button>
                  </div>
                </form>

              </div>
              <div class="tab-pane fade in" id="login">
                <h2 class="text-uppercase text-center"> Log in</h2>
                <form id="login" action="login.php" method="post">
                  <div class="form-group">
                    <label> Your Email<span class="req">*</span> </label>
                    <input type="email" class="form-control" id="email" name="email" required
                      data-validation-required-message="Please enter your email address." autocomplete="off">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <label> Password<span class="req">*</span> </label>
                    <input type="password" class="form-control" id="password" name="psw" required
                      data-validation-required-message="Please enter your password" autocomplete="off">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="mrgn-30-top">
                    <input type="submit" class="btn btn-larger btn-block" value="Log in" />

                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      </form>
      <!-- /.container -->
    </div>
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
  <!-- partial -->
  <script src="./script.js"></script>

</body>

</html>
