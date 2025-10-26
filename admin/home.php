<div class="container-fluid">
  <div class="row mb-3">
    <div class="col-12">
      <div class="card">
        <div class="card-header d-flex align-items-center justify-content-between">
          <h3 class="card-title mb-0"><i class="fas fa-tachometer-alt"></i> Dashboard</h3>
          <span class="badge badge-primary">Welcome</span>
        </div>
        <div class="card-body">
          <p class="mb-2">Welcome to <?php echo $_settings->info('name') ?>. Use the quick links below to manage your content.</p>
          <div class="row dashboard-widgets mt-3">
            <div class="col-md-4 mb-3">
              <div class="widget">
                <div class="icon"><i class="fas fa-user"></i></div>
                <div>
                  <div class="label">Users</div>
                  <div class="value">Manage admin users</div>
                </div>
                <div class="ml-auto">
                  <a href="user/" class="btn btn-sm btn-primary">Open</a>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <div class="widget">
                <div class="icon"><i class="fas fa-briefcase"></i></div>
                <div>
                  <div class="label">Projects</div>
                  <div class="value">Add and update portfolio projects</div>
                </div>
                <div class="ml-auto">
                  <a href="project/" class="btn btn-sm btn-primary">Open</a>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <div class="widget">
                <div class="icon"><i class="fas fa-graduation-cap"></i></div>
                <div>
                  <div class="label">Education</div>
                  <div class="value">Edit education history</div>
                </div>
                <div class="ml-auto">
                  <a href="education/" class="btn btn-sm btn-primary">Open</a>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <div class="widget">
                <div class="icon"><i class="fas fa-briefcase"></i></div>
                <div>
                  <div class="label">Work</div>
                  <div class="value">Update work experience</div>
                </div>
                <div class="ml-auto">
                  <a href="work/" class="btn btn-sm btn-primary">Open</a>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <div class="widget">
                <div class="icon"><i class="fas fa-handshake"></i></div>
                <div>
                  <div class="label">Volunteer</div>
                  <div class="value">Manage volunteering entries</div>
                </div>
                <div class="ml-auto">
                  <a href="volunteringexperience/" class="btn btn-sm btn-primary">Open</a>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <div class="widget">
                <div class="icon"><i class="fas fa-cogs"></i></div>
                <div>
                  <div class="label">System Info</div>
                  <div class="value">Update site details</div>
                </div>
                <div class="ml-auto">
                  <a href="system_info/" class="btn btn-sm btn-primary">Open</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>