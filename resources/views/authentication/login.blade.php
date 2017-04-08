<div class="login-page">
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                {{ $errors }}
            </ul>
        </div>
    @endif
    <div class="form">
        <div class="panel-body">
        <form class="login-form" method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}
            <input type="text" name="email" placeholder="name"/>
            <input type="password" name="password" placeholder="password"/>
            <button type="submit">login</button>
            <p class="message">Not Register? <a href="{{ route('register') }}">Create an Account</a></p>
        </form>
    </div>
</div>



