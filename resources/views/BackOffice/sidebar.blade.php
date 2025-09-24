  <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="index.html" class="app-brand-link">
              <span class="app-brand-logo demo">
                <img alt="icon"  src="../assets/img/libroLogo.png" style="width:40px; height:40px; margin-right:10px;" >
              </span>
              <span class="app-brand-text demo menu-text fw-bolder ms-2">LibroLink</span>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

       <ul class="menu-inner py-1">
    <!-- Dashboard -->
    <li class="menu-item {{ request()->routeIs('dashboard') ? 'active' : '' }}">
        <a href="{{ route('dashboard') }}" class="menu-link">
            <i class="menu-icon tf-icons bx bx-home-circle"></i>
            <div data-i18n="Analytics">Dashboard</div>
        </a>
    </li>
    <li class="menu-header small text-uppercase">
        <span class="menu-header-text">Accounts</span>
    </li>
    <li class="menu-item {{ request()->routeIs('users') ? 'active' : '' }}">
        <a href="{{ route('users') }}" class="menu-link">
            <i class="menu-icon tf-icons bx bx-user"></i>
            <div data-i18n="Account Settings">Users</div>
        </a>
    </li>

    <li class="menu-item {{ request()->routeIs('authors') ? 'active' : '' }}">
        <a href="{{ route('authors') }}" class="menu-link">
            <i class="menu-icon tf-icons bx bx-edit-alt"></i>
            <div data-i18n="Account Settings">Authors</div>
        </a>
    </li>

    <li class="menu-item {{ request()->routeIs('stores') ? 'active' : '' }}">
        <a href="{{ route('stores') }}" class="menu-link">
            <i class="menu-icon tf-icons bx bx-store"></i>
            <div data-i18n="Account Settings">Stores</div>
        </a>
    </li>
    <li class="menu-header small text-uppercase">
        <span class="menu-header-text">Managements</span>
    </li>
    <li class="menu-item {{ request()->routeIs('books') ? 'active' : '' }}">
        <a href="{{ route('books') }}" class="menu-link">
            <i class="menu-icon tf-icons bx bx-book"></i>
            <div data-i18n="Account Settings">Books</div>
        </a>
    </li>

    <li class="menu-item {{ request()->routeIs('categories') ? 'active' : '' }}">
        <a href="{{ route('categories') }}" class="menu-link">
            <i class="menu-icon tf-icons bx bx-category"></i>
            <div data-i18n="Account Settings">Categories</div>
        </a>
    </li>

    <li class="menu-item {{ request()->routeIs('borrows') ? 'active' : '' }}">
        <a href="{{ route('borrows') }}" class="menu-link">
            <i class="menu-icon tf-icons bx bx-book-reader"></i>
            <div data-i18n="Account Settings">Borrows</div>
        </a>
    </li>

    <li class="menu-item {{ request()->routeIs('blogs') ? 'active' : '' }}">
        <a href="{{ route('blogs') }}" class="menu-link">
            <i class="menu-icon tf-icons bx bx-news"></i>
            <div data-i18n="Account Settings">Blogs</div>
        </a>
    </li>

    <li class="menu-item {{ request()->routeIs('transaction') ? 'active' : '' }}">
        <a href="{{ route('transactions') }}" class="menu-link">
            <i class="menu-icon tf-icons bx bx-money"></i>
            <div data-i18n="Account Settings">Transactions</div>
        </a>
    </li>
</ul>

</aside>