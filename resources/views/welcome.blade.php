<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            <br />
            <div class="container">
                <div class="col-md-12">
                    <h1 class="lead">Task</h1>
                </div>
            </div>
            <br />
            <div class="container">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <div class="mx-5">
                            <a href="{{ url('process/bill') }}" class="btn btn-primary"> Process Billing </a>
                        </div>
                        <br />
                        <table class="table table-bordered">
                            <thead>
                                <tr valign="middle">
                                    <th>Username</th>
                                    <th>Mobile</th>
                                    <th>Amount</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($bills as $bill)
                                <tr>
                                    <td>{{ $bill->username }}</td>
                                    <td>{{ $bill->mobile_number }}</td>
                                    <td>&#8358; {{ number_format($bill->amount, 2) }}</td>
                                    <td>{{ $bill->created_at->toDateTimeString() }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        {{ $bills->links() }}
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
