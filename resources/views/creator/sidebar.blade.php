<div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">

    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="{{ url('/') }}" class="simple-text">
                Procurement System
            </a>
        </div>
        <ul class="nav">
            <li>
                <a href="{{ route('creator.dashboard') }}">
                    <p>Creator Dashboard</p>
                </a>
            </li>
            <li>
                <a href="{{ route('creator.add.mpp') }}">
                    <p>Add MPP</p>
                </a>
            </li>
            <li>
                <a href="{{ route('creator.view.mpp') }}">
                    <p>View MPP</p>
                </a>
            </li>
            <li>
                <a href="{{ route('creator.add.app') }}">
                    <p>Add APP</p>
                </a>
            </li>
            <li>
                <a href="{{ route('creator.view.app') }}">
                    <p>View APP</p>
                </a>
            </li>
        </ul>
    </div>
</div>