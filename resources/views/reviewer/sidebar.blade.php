<div class="sidebar">

    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="{{ url('/') }}" class="simple-text">
                Procurement System
            </a>
        </div>
        <ul class="nav">
            <li>
                <a href="{{ route('reviewer.dashboard') }}">
                    <p>Reviewer Dashboard</p>
                </a>
            </li>

            <li>
                <a href="{{ route('reviewer.view.mpp') }}">
                    <p>View MPP</p>
                </a>
            </li>

            <li>
                <a href="{{ route('reviewer.view.app') }}">
                    <p>View APP</p>
                </a>
            </li>
        </ul>
    </div>
</div>