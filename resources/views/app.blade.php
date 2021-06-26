<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laravel test</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul style="margin: 0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="row justify-content-center col-md-12">
            <form class="mt-5 col-md-6" method="GET" action="/mains">
                <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">Search field</label>
                    <input name="search_field" type="text" id="disabledTextInput" class="form-control" placeholder="Search">
                </div>
                <div class="mb-3">
                    <label for="disabledSelect" class="form-label">Option field</label>
                    <select name="option_field" id="disabledSelect" class="form-select col-md-12">
                        <option value="null" selected>Choose...</option>
                        <option value="name">First name</option>
                        <option value="surname">Last name</option>
                        <option value="country">Country</option>
                        <option value="phone">Phone</option>
                        <option value="company">Company</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary col-md-12">Search</button>
            </form>
        </div>
    </div>

    @yield('table')

    <script src="{{ asset('js/app.js') }}" defer></script>
</body>

</html>