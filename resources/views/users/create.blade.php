<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </head>
    <body>
        <form class="m-5" method="post" action="/users">
            @csrf
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name"  class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email"  class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" name="password"  class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Add</button>
        </form>
    </body>
</html>
