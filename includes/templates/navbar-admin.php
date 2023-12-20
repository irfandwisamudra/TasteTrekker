<div class="nav-header">
  <a href="<?= BASEURL ?>/admin/index.php" class="brand-logo">
    <img class="logo-abbr" src="<?= BASEURL ?>/assets/img/logo/TasteTrekker-square.svg" alt="Logo TasteTrekker-square" height="45">
    <img class="brand-title" src="<?= BASEURL ?>/assets/img/logo/TasteTrekker.svg" alt="Logo TasteTrekker" height="45">
  </a>

  <div class="nav-control">
    <div class="hamburger">
      <span class="line"></span><span class="line"></span><span class="line"></span>
    </div>
  </div>
</div>

<div class="header">
  <div class="header-content">
    <nav class="navbar navbar-expand">
      <div class="collapse navbar-collapse justify-content-between">
        <div class="header-left">
          <div class="search_bar dropdown show">
            <div class="dropdown-menu p-0 m-0 show">
              <form>
                <input class="form-control" type="search" placeholder="Pencarian di sini" aria-label="Search">
              </form>
            </div>
            <span class="search_icon p-3 c-pointer" data-toggle="dropdown">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M23.7871 22.7761L17.9548 16.9437C19.5193 15.145 20.4665 12.7982 20.4665 10.2333C20.4665 4.58714 15.8741 0 10.2333 0C4.58714 0 0 4.59246 0 10.2333C0 15.8741 4.59246 20.4665 10.2333 20.4665C12.7982 20.4665 15.145 19.5193 16.9437 17.9548L22.7761 23.7871C22.9144 23.9255 23.1007 24 23.2816 24C23.4625 24 23.6488 23.9308 23.7871 23.7871C24.0639 23.5104 24.0639 23.0528 23.7871 22.7761ZM1.43149 10.2333C1.43149 5.38004 5.38004 1.43681 10.2279 1.43681C15.0812 1.43681 19.0244 5.38537 19.0244 10.2333C19.0244 15.0812 15.0812 19.035 10.2279 19.035C5.38004 19.035 1.43149 15.0865 1.43149 10.2333Z" fill="#A4A4A4" />
              </svg>
            </span>
          </div>
        </div>

        <ul class="navbar-nav header-right">
          <li class="nav-item dropdown notification_dropdown">
            <a class="nav-link dz-fullscreen primary" href="#">
              <svg id="Capa_1" enable-background="new 0 0 482.239 482.239" height="22" viewBox="0 0 482.239 482.239" width="22" xmlns="http://www.w3.org/2000/svg">
                <path d="m0 17.223v120.56h34.446v-103.337h103.337v-34.446h-120.56c-9.52 0-17.223 7.703-17.223 17.223z" fill="" />
                <path d="m465.016 0h-120.56v34.446h103.337v103.337h34.446v-120.56c0-9.52-7.703-17.223-17.223-17.223z" fill="" />
                <path d="m447.793 447.793h-103.337v34.446h120.56c9.52 0 17.223-7.703 17.223-17.223v-120.56h-34.446z" fill="" />
                <path d="m34.446 344.456h-34.446v120.56c0 9.52 7.703 17.223 17.223 17.223h120.56v-34.446h-103.337z" fill="" />
              </svg>
            </a>
          </li>
          <li class="nav-item dropdown header-profile">
            <a class="nav-link" href="#" role="button" data-toggle="dropdown">
              <div class="header-info">
                <span>Halo, <strong><?= $user["username"]; ?></strong></span>
              </div>
              <img src="<?= BASEURL ?>/assets/img/default.png" width="20" alt="" />
            </a>
            <div class="dropdown-menu dropdown-menu-right">
              <a href="<?= BASEURL ?>/admin/profile.php" class="dropdown-item ai-icon">
                <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                  <circle cx="12" cy="7" r="4"></circle>
                </svg>
                <span class="ml-2">Profile</span>
              </a>
              <a href="<?= BASEURL ?>/logout.php" class="dropdown-item ai-icon">
                <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                  <polyline points="16 17 21 12 16 7"></polyline>
                  <line x1="21" y1="12" x2="9" y2="12"></line>
                </svg>
                <span class="ml-2">Logout</span>
              </a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
  </div>
</div>