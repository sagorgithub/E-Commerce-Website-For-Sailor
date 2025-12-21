<!-- Customer Auth Box -->
<div class="d-flex align-items-center p-3 rounded mb-3" style="background-color: #fce4ec;">
    <img src="{{ asset(Auth::guard('customer')->user()->image) ?? 'https://placehold.co/60x60/E52E8A/white?text=User' }}"
         class="rounded-circle" width="60" height="60" alt="User Image">
    <div class="ms-3">
        <p class="small mb-0 text-muted">Hello,</p>
        <p class="fw-bold mb-0">{{ Auth::guard('customer')->user()->name }}</p>
    </div>
</div>

<!-- Sidebar Menu -->
<div class="list-group beauty-sidebar-menu">
    <a href="{{ route('customer.account') }}"
       class="list-group-item list-group-item-action {{ request()->is('customer/account') ? 'active' : '' }}">
       <i class="bi bi-person me-2"></i> My Account
    </a>

    <a href="{{ route('customer.orders') }}"
       class="list-group-item list-group-item-action {{ request()->is('customer/orders') ? 'active' : '' }}">
       <i class="bi bi-box-seam me-2"></i> My Order
    </a>

    <a href="{{ route('customer.profile_edit') }}"
       class="list-group-item list-group-item-action {{ request()->is('customer/profile-edit') ? 'active' : '' }}">
       <i class="bi bi-pencil-square me-2"></i> Profile Edit
    </a>

    <a href="{{ route('customer.change_pass') }}"
       class="list-group-item list-group-item-action {{ request()->is('customer/change-password') ? 'active' : '' }}">
       <i class="bi bi-lock me-2"></i> Change Password
    </a>

    <form id="logout-form" action="{{ route('customer.logout') }}" method="POST" class="d-none">
        @csrf
    </form>
    <a href="{{ route('customer.logout') }}"
       onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
       class="list-group-item list-group-item-action text-danger">
       <i class="bi bi-box-arrow-right me-2"></i> Logout
    </a>
</div>
