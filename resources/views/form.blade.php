<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Demo Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
    <form method="post" action="{{url('client')}}">
                @csrf
                <h3 class="mb-3 text-center">Registration Form</h3>
                <div class="mb-3">
                    <label class="form-label fs-4">First Name</label>
                    <input type="text" name="fname" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label fs-4">List Name</label>
                    <input type="text" name="lname" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label fs-4">Mobile</label>
                    <input type="number" name="number" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label fs-4">Gmail</label>
                    <input type="gmail" name="gmail" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label fs-4">Address</label>
                    <input type="text" name="address" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label fs-4">Password</label>
                    <input type="passwrod" name="password" class="form-control">
                </div>

            <button class="btn btn-primary">Submit</button>
    </form>
    </div>

</div>
</body>

</html>
