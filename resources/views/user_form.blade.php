<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
<div class="container mt-4">
    <div class="row">
        <div class="col-md-7">
        <div class="card text-center">
                <div class="card-header">
                    Registraton Form
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        @csrf
                        <div class="row m-3">
                            
                                <input type="text" name="fullname" class="form_control" placeholder="Full Name">
                                <input type="text" name="username" class="form_control mt-3" placeholder="User Name">
                                <input type="password" name="userpass" class="form_control mt-3" placeholder="Password">
                                <button type="submit" class="btn btn-primary btn-sm mt-3 form_control">Save</button>
                            
                        </div>
                    </form>
                </div>
                <div class="card-footer text-body-secondary">
                    
                </div>
                </div>
            
        </div>
        <div class="col-md-5">frewreww</div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>