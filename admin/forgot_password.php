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
              <h3 class="card-title"><i class="fas fa-key"></i> Forgot Password</h3>
            </div>
            <form id="forgot-form" method="post" action="#">
              <div class="card-body">
                <p class="text-muted">Enter your registered email (and optionally username). We’ll send reset instructions.</p>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com" required>
                </div>
                <div class="form-group">
                  <label for="username">Username (optional)</label>
                  <input type="text" class="form-control" id="username" name="username" placeholder="your_username">
                </div>
              </div>
              <div class="card-footer d-flex justify-content-between">
                <a href="login.php" class="btn btn-secondary"><i class="fas fa-sign-in-alt"></i> Back to Login</a>
                <button type="submit" class="btn btn-primary"><i class="fas fa-paper-plane"></i> Send Reset Link</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<?php require_once('inc/footer.php'); ?>