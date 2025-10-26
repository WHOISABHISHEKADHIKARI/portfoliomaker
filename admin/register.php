<?php
require_once('../config.php');
require_once('inc/header.php');
?>
<main class="content-wrapper">
  <section class="content">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="card card-primary mt-4">
            <div class="card-header">
              <h3 class="card-title"><i class="fas fa-user-plus"></i> Create Account</h3>
            </div>
            <form id="register-form" method="post" action="#">
              <div class="card-body">
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="first_name">First Name</label>
                    <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First name">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="last_name">Last Name</label>
                    <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last name">
                  </div>
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com">
                </div>
                <div class="form-group">
                  <label for="username">Username</label>
                  <input type="text" class="form-control" id="username" name="username" placeholder="Choose a username">
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Minimum 8 characters">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="confirm_password">Confirm Password</label>
                    <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Re-enter password">
                  </div>
                </div>
              </div>
              <div class="card-footer d-flex justify-content-between">
                <a href="login.php" class="btn btn-secondary"><i class="fas fa-sign-in-alt"></i> Back to Login</a>
                <button type="submit" class="btn btn-primary"><i class="fas fa-user-plus"></i> Create Account</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<?php require_once('inc/footer.php'); ?>