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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container mt-4">
        <h2>Codeigniter: Insert - Select - Delete - Update</h2>
        <form action="<?php echo base_url('home/insert_data');?>" method="POST">
            <div class="row">
                <div class="col">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" placeholder="Enter Name.." class="form-control">
                </div>
                <div class="col">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" placeholder="Enter Email.." class="form-control">
                </div>
                <div class="col">
                    <label for="phone">Phone:</label>
                    <input type="text" id="phone" name="phone" placeholder="Enter Phone.." class="form-control">
                </div>
                <div class="col mt-3">
                    <input type="submit" id="submit" name="submit" class="btn btn-primary btn-lg">
                </div>
            </div>
        </form>
        <p><?php echo $this->session->flashdata('resp_message');?></p>
    </div>
    </div>
    </div>
    </form>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Action</th>
                            <th>Update</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($users as $user)
                            {
                            ?>
                        <tr>
                            <td><?php echo $user['id']?></td>
                            <td><?php echo $user['name']?></td>
                            <td><?php echo $user['email']?></td>
                            <td><?php echo $user['phone']?></td>
                            <td><a href="<?php echo  base_url('home/delete_operation/').$user['id'];?>">Delete</a></td>
                            <td><a class="btn btn-primary"
                                    href="<?php echo  base_url('home/update_record/').$user['id'];?>">Update</a></td>

                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    </div>
    </div>
</body>


</html>
