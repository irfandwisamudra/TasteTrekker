<style>
  .footer {
    height: 5rem;
    padding: 0rem;
    background-color: #fff;
    padding-left: 21.563rem;
    transition: all .2s ease;
    display: grid;
    align-items: center;
  }

  .footer .copyright .bi {
    font-size: 1.5rem;
  }

  @media only screen and (max-width: 1400px) {
    .footer {
      padding-left: 17rem;
    }
  }

  @media only screen and (max-width: 1199px) {
    .footer {
      height: 4rem;
    }
  }

  @media only screen and (max-width: 575px) {
    .footer {
      height: 5rem;
      font-size: small;
    }

    .footer .copyright .bi {
      font-size: 1rem;
    }
  }

  [data-header-position="fixed"] .footer {
    position: fixed;
    bottom: 0;
    width: 100%;
  }

  [data-sidebar-style="full"] .footer,
  [data-sidebar-style="overlay"] .footer {
    width: 100%;
  }

  [data-sidebar-style="full"][data-layout="vertical"] .menu-toggle .footer {
    padding-left: 5rem;
    width: 100%;
  }

  [direction="rtl"][data-sidebar-style="full"][data-layout="vertical"] .menu-toggle .footer {
    padding: 0 0.9375rem;
    padding-right: 5rem;
  }

  @media only screen and (min-width: 1200px) and (max-width: 1350px) {

    [data-sidebar-style="full"] .footer,
    [data-sidebar-style="overlay"] .footer {
      width: 100%;
      padding-left: 17rem;
    }
  }

  @media only screen and (max-width: 1199px) {

    [data-sidebar-style="full"] .footer,
    [data-sidebar-style="overlay"] .footer {
      width: 100%;
    }
  }

  @media (min-width: 992px) {
    [data-container="wide-boxed"][data-sidebar-style="full"] .footer {
      width: 100%;
    }

    [data-container="wide-boxed"][data-sidebar-style="full"] .menu-toggle .footer {
      width: 100%;
    }

    [data-header-position="fixed"][data-container="wide-boxed"][data-sidebar-style="full"] .footer {
      max-width: 1480px;
    }

    [data-header-position="fixed"][data-container="wide-boxed"][data-sidebar-style="full"] .menu-toggle .footer {
      max-width: 1480px;
    }
  }
</style>

<footer class="footer">
  <div class="copyright">
    <div class="container">
      <div class="col col-md-12 d-flex flex-column flex-sm-row justify-content-between align-items-center">
        <p class="text-light">&copy; 2023 TasteTrekker. All rights reserved.</p>
        <ul class="list-unstyled d-flex">
          <li class="ms-3"><a class="link-body-emphasis" href="#"><i class="bi bi-twitter"></i></a></li>
          <li class="ms-3"><a class="link-body-emphasis" href="#"><i class="bi bi-instagram"></i></a></li>
          <li class="ms-3"><a class="link-body-emphasis" href="#"><i class="bi bi-facebook"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
</footer>