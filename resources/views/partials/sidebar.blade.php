<nav id="sidebar" class="sidebar js-sidebar">
  <div class="sidebar-content js-simplebar">
    <a class='sidebar-brand' href='index.html'>
      <span class="sidebar-brand-text align-middle">
        AdminKit
      </span>
      <svg class="sidebar-brand-icon align-middle" width="32px" height="32px" viewBox="0 0 24 24" fill="none"
        stroke="#FFFFFF" stroke-width="1.5" stroke-linecap="square" stroke-linejoin="miter" color="#FFFFFF"
        style="margin-left: -3px">
        <path d="M12 4L20 8.00004L12 12L4 8.00004L12 4Z"></path>
        <path d="M20 12L12 16L4 12"></path>
        <path d="M20 16L12 20L4 16"></path>
      </svg>
    </a>

    <ul class="sidebar-nav">
      <li class="sidebar-header">
        Pages
      </li>
      {{-- <li class="sidebar-item active">
        <a data-bs-target="#dashboards" data-bs-toggle="collapse" class="sidebar-link">
          <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboards</span>
        </a>
        <ul id="dashboards" class="sidebar-dropdown list-unstyled collapse show" data-bs-parent="#sidebar">
          <li class="sidebar-item active"><a class='sidebar-link' href='index.html'>Analytics</a></li>
          <li class="sidebar-item"><a class='sidebar-link'
              href='https://demo.adminkit.io/dashboard-ecommerce'>E-Commerce <span
                class="sidebar-badge badge bg-primary">Pro</span></a></li>
          <li class="sidebar-item"><a class='sidebar-link' href='https://demo.adminkit.io/dashboard-crypto'>Crypto <span
                class="sidebar-badge badge bg-primary">Pro</span></a></li>
        </ul>
      </li> --}}
      <li class="sidebar-item">
        <a class='sidebar-link' href='https://demo.adminkit.io/pages-invoice'>
          <i class="align-middle" data-feather="credit-card"></i> <span class="align-middle">
            Tableau de bord
          </span>
        </a>
      </li>
      <li class="sidebar-item">
        <a class='sidebar-link' href='{{ route('products.index') }}'>
          <i class="align-middle" data-feather="credit-card"></i> <span class="align-middle">
            Produits
          </span>
        </a>
      </li>


    </ul>

    <div class="sidebar-cta">
      <div class="sidebar-cta-content">
        <strong class="d-inline-block mb-2">Weekly Sales Report</strong>
        <div class="mb-3 text-sm">
          Your weekly sales report is ready for download!
        </div>

        <div class="d-grid">
          <a href="https://adminkit.io/" class="btn btn-outline-primary" target="_blank">Download</a>
        </div>
      </div>
    </div>
  </div>
</nav>