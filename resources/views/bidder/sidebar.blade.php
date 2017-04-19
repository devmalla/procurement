<div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">

    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="{{ url('/') }}" class="simple-text">
                Procurement System
            </a>
        </div>
        <ul class="nav">
            <li>
                <a href="{{ route('bidder.dashboard') }}">
                    <p>Bidder Dashboard</p>
                </a>
            </li>
            <li>
                <a href="{{ route('bidder.view.mpp') }}">
                    <p>View MPP</p>
                </a>
            </li>

            <li>
                <a href="{{ route('bidder.view.app') }}">
                    <p>View APP</p>
                </a>
            </li>

            <li>
                <a href="{{ route('bidder.view.bid') }}">
                    <p>View Bid</p>
                </a>
            </li>

        </ul>
    </div>
</div>