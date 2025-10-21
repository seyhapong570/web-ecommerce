<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
  <div class="container-fluid py-1 px-3">

    <!-- Left side (optional: logo or brand) -->
    <a class="navbar-brand fw-bold" href="index.html">Dashboard</a>

    <!-- Right side -->
    <div class="collapse navbar-collapse justify-content-end" id="navbar">
      <ul class="navbar-nav d-flex align-items-center">

        <!-- Profile Dropdown -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="assets/img/avatars/avatar.jpg" alt="User Avatar" class="avatar img-fluid rounded me-2" width="35" height="35">
            <span class="text-dark fw-semibold">Admin</span>
          </a>

          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
            <li>
              <a class="dropdown-item" href="pages-profile.html">
                <i class="align-middle me-2" data-feather="user"></i> Profile
              </a>
            </li>
            <li>
              <a class="dropdown-item" href="#">
                <i class="align-middle me-2" data-feather="pie-chart"></i> Analytics
              </a>
            </li>
            <li><hr class="dropdown-divider"></li>
            <li>
              <a class="dropdown-item" href="index.html">
                <i class="align-middle me-2" data-feather="settings"></i> Settings & Privacy
              </a>
            </li>
            <li>
              <a class="dropdown-item" href="#">
                <i class="align-middle me-2" data-feather="help-circle"></i> Help Center
              </a>
            </li>
            <li><hr class="dropdown-divider"></li>
            <li>
              <a class="dropdown-item text-danger" href="../logout.php">
                <i class="align-middle me-2" data-feather="log-out"></i> Log out
              </a>
            </li>
          </ul>
        </li>

      </ul>
    </div>
  </div>
</nav>
