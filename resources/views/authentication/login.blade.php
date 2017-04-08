<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
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
        <form class="login-form" method="POST" action="{{ route('organizer.login') }}">
            {{ csrf_field() }}
            <input type="text" name="email" placeholder="name"/>
            <input type="password" name="password" placeholder="password"/>
            <button type="submit">login</button>
            <p class="message">Not Register? <a href="{{ route('register') }}">Create an Account</a></p>
        </form>
    </div>
</div>



