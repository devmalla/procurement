<div class="sidebar" >

    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="{{ url('/') }}" class="simple-text">
                Procurement System
            </a>
        </div>
        <ul class="nav">
            <li>
                <a href="{{ route('admin.dashboard') }}">
                    <p>Admin Dashboard</p>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.add.organization') }}">
                    <p>Add Organizations</p>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.view.organization') }}">
                    <p>View Organizations</p>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.add.user') }}">
                    <p>Add users</p>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.view.user') }}">
                    <p>View Users</p>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.view.bid') }}">
                    <p>View Bids</p>
                </a>
            </li>

        </ul>
    </div>
</div>