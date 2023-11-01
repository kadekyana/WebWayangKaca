<body class="g-sidenav-show   bg-gray-100">
  <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-header">
    <div class="d-flex mt-5 align-items-center justify-content-center">
    <span class="font-weight-bold fs-4">Dashboard Admin</span>
  </div>
</div>

    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="/admin">
            <div class="icon icon-shape icon-sm text-center me-2 d-flex align-items-center justify-content-center">
            </div>
            <i class="bi bi-card-checklist"></i>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/users">
            <div class="icon icon-shape icon-sm text-center me-2 d-flex align-items-center justify-content-center">
            </div>
            <i class="bi bi-file-earmark-person"></i>
            <span class="nav-link-text ms-1">Users</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/products">
            <div class="icon icon-shape icon-sm text-center me-2 d-flex align-items-center justify-content-center">
            </div>
            <i class="bi bi-minecart-loaded"></i>
            <span class="nav-link-text ms-1">Products</span>
          </a>
        </li>
        <li class="nav-item">
          <div class="nav-link">
            <div class="icon icon-shape icon-sm text-center me-2 d-flex align-items-center justify-content-center">
            </div>
            <i class="bi bi-arrow-left-short"></i>
            <form action="/logout" method="post" class="d-flex">
              @csrf
              @method('DELETE')
              <button style="border: none; background:none;" type="submit">Logout</button>
            </form>
          </div>
        </li>
      </ul>
  </aside>