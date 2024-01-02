<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>


      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <h2>User List</h2>
    <!-- Tampilkan data pengguna -->
    <?php foreach ($users as $user): ?>
        <div>

            <table class="table table-bordered">
                <tr>
                    <td>
                        <?= $user->nama_pengguna ?>
                    </td>
                    <td>
                        <button class="btn btn-primary" data-toggle="modal" data-target="#editModal<?= $user->id_user ?>">Edit</button>
                    </td>
                </tr>
            </table>
            <!-- Tampilkan data pengguna -->
            
        </div>
    <?php endforeach; ?>
</div>

<!-- Modal Edit -->
<?php foreach ($users as $user): ?>
    <div class="modal fade" id="editModal<?= $user->id_user ?>" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Form edit pengguna -->
                    <?php echo form_open('user/update'); ?>
                        <input type="hidden" name="id" value="<?= $user->id_user ?>">
                        <div class="form-group">
                            <label for="nama_pengguna">Nama Pengguna</label>
                            <input type="text" class="form-control" name="nama_pengguna" value="<?= $user->nama_pengguna ?>">
                        </div>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" name="username" value="<?= $user->username ?>">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password">
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <input type="text" class="form-control" name="status" value="<?= $user->status ?>">
                        </div>
                        <div class="form-group">
                            <label for="status_user">Status User</label>
                            <input type="text" class="form-control" name="status_user" value="<?= $user->status_user ?>">
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
