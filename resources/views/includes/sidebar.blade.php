@php
    $user = auth()->user();
    //User info
    $customer = \App\Models\Customer::where('user_id', $user->id)->first();
    $role = null;

    if ($user->hasRole('super-admin')) {
        $role = 'super-admin';
    } elseif ($user->hasRole('admin')) {
        $role = 'admin';
    } elseif ($user->hasRole('agent')) {
        $role = 'agent';
    } elseif ($user->hasRole('user')) {
        $role = 'user';
    }
@endphp

<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="{{ url($role) }}">
            <span class="sidebar-brand-text align-middle">
                {{ config('app.name') }}
                <sup>{{ $user->name }}</sup>
            </span>
            <svg class="sidebar-brand-icon align-middle" width="32px" height="32px" viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="1.5" stroke-linecap="square" stroke-linejoin="miter" color="#FFFFFF" style="margin-left: -3px">
                <path d="M12 4L20 8.00004L12 12L4 8.00004L12 4Z"></path>
                <path d="M20 12L12 16L4 12"></path>
                <path d="M20 16L12 20L4 16"></path>
            </svg>
        </a>

        <ul class="sidebar-nav">
            <li class="sidebar-item">
                <a class="sidebar-link {{ Route::is($role) ? 'active' : '' }}" href="{{ route($role) }}">
                    <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
                </a>
            </li>

            @if($role == 'super-admin')
                <li class="sidebar-header pt-0">Main</li>

                <li class="sidebar-item">
                    <a data-bs-target="#user" data-bs-toggle="collapse" class="sidebar-link {{ in_array(Route::currentRouteName(), ['admin.users.index', 'admin.customers.index', 'admin.agents.index', 'addresses.index', 'shipments.index', 'invoices.index']) ? 'show' : 'collapsed' }}">
                        <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">User</span>
                    </a>
                    <ul id="user" class="sidebar-dropdown list-unstyled collapse {{ in_array(Route::currentRouteName(), ['admin.users.index', 'admin.customers.index', 'admin.agents.index']) ? 'show' : '' }}" data-bs-parent="#sidebar">
                        <li class="sidebar-item {{ Route::is('admin.users.index') ? 'active' : '' }}">
                            <a class='sidebar-link' href='{{ route('admin.users.index') }}'>All Users</a>
                        </li>
                        <li class="sidebar-item  {{ Route::is('admin.customers.index') ? 'active' : '' }}">
                            <a class='sidebar-link' href='{{ route('admin.customers.index') }}'>Customers</a>
                        </li>
                        <li class="sidebar-item  {{ Route::is('admin.agents.index') ? 'active' : '' }}">
                            <a class='sidebar-link' href='{{ route('admin.agents.index') }}'>Agents</a>
                        </li>
                    </ul>
                </li>
                 <li class="sidebar-item  {{ Route::is('addresses.index') ? 'active' : '' }}">
                            <a class='sidebar-link' href='{{ route('addresses.index') }}'><i class="align-middle" data-feather="sliders"></i>  Addresses</a>
                        </li>
                        <li class="sidebar-item {{ Route::is('shipments.index') ? 'active' : '' }} ">
                            <a class='sidebar-link' href='{{ route('shipments.index') }}'><i class="align-middle" data-feather="sliders"></i>  Shipments</a>
                        </li>
                        <li class="sidebar-item {{ Route::is('invoices.index') ? 'active' : '' }}">
                            <a class='sidebar-link' href='{{ route('invoices.index') }}'> <i class="align-middle" data-feather="sliders"></i> Invoices</a>
                        </li>      
            @endif

            @if($role == 'user')
                <li class="sidebar-header pt-0">Main</li>

                <li class="sidebar-item">
                    <a data-bs-target="#Profile" data-bs-toggle="collapse" class="sidebar-link {{ in_array(Route::currentRouteName(), ['personal.info', 'profile.kyc', 'password.change']) ? '' : 'collapsed' }}">
                        <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Profile</span>
                    </a>
                    <ul id="Profile" class="sidebar-dropdown list-unstyled collapse {{ in_array(Route::currentRouteName(), ['personal.info', 'profile.kyc', 'password.change']) ? 'show' : '' }}" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a class='sidebar-link {{ Route::is('personal.info') ? 'active' : '' }}' href='{{ route('personal.info') }}'>Personal Info</a>
                        </li>
                        <li class="sidebar-item">
                            <a class='sidebar-link {{ Route::is('profile.kyc') ? 'active' : '' }}' href='{{ route('profile.kyc') }}'>Profile KYC</a>
                        </li>
                        <li class="sidebar-item">
                            <a class='sidebar-link {{ Route::is('password.change') ? 'active' : '' }}' href='{{ route('password.change') }}'>Password Change</a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-item">
                    <a class='sidebar-link' href='https://wa.me/+8801757760650'>Support</a>
                </li>

               
            @endif
                <li class="sidebar-item">
                    <a class='sidebar-link' href='{{ route('logout') }}'>Log out</a>
                </li>
        </ul>
    </div>
</nav>
