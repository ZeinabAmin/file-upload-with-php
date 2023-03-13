<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form file</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title mb-3  text-center">form file</h5>

                        <form class="w-50 border p-3 m-auto" method="POST" action="handle-file.php" enctype="multipart/form-data">
<!-- //encoding type -->
                            <div class="mb-3">
                                <label class="form-label" for="name">name</label>
                                <input type="txet" name="name" id="name" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="img">img</label>
                                <input type="file" name="img" id="img" class="form-control" >
                            </div>

                            <button type="submit" name="submit" class="btn btn-primary mb-3" value="submit">upload</button>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>