<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container">
        <form action="<?php echo base_url('home/save_update_record/').$user->id?>" method="POST">
            <div class="row mt-3">

                <div class="col">
                    <label for="id">Id</label>
                    <input type="text" class="form-control" name="id" value="<?php echo $user->id ?>">
                </div>
                <div class="col">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" value="<?php echo $user->name ?>">
                </div>
                <div class="col">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" value="<?php echo $user->email ?>">
                </div>
                <div class="col">
                    <label for="phone">Phone</label>
                    <input type="text" class="form-control" name="phone" value="<?php echo $user->phone ?>">
                </div>
                <div class="col mt-">
                    <input type="submit" class="btn btn-primary btn-lg mt-3" value="Update">
                </div>
            </div>
        </form>
    </div>
</body>

</html>
