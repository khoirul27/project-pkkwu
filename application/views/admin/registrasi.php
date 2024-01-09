<div class="container">
    <div class="card shadow col- h-100 mb-4">
        <div class="card-header">
            <strong class="card-title">Registrasi akun admin</strong>
        </div>
        <div class="card-body">
            <form Action="<?= base_url('admin/admin/registrasi') ?>" method="post">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Username</label>
                        <input type="text" class="form-control" name="username" placeholder="Username"
                            fdprocessedid="bxptc9">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Password"
                            fdprocessedid="pdkyh">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputAddress">Fullname</label>
                    <input type="text" class="form-control" name="nama" placeholder="Fullname" fdprocessedid="3hp6to">
                </div>
                <button type="submit" class="btn btn-primary" fdprocessedid="8wkfz">Submit</button>
            </form>
        </div>
    </div>
    <div class="">
        <div class="card shadow">
            <div class="card-header">
                <strong class="card-title">Data akun admin</strong>
                <a class="float-right small text-muted" href="#!">View all</a>
            </div>
            <div class="card-body my-n2">
                <table class="table table-striped table-hover table-borderless" id="example">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Username</th>
                            <th>Log login</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($regis as $p) { ?>
                            <tr>
                                <td>
                                    <?= $no; ?>
                                </td>
                                <td>
                                    <?= $p['nama']; ?>
                                </td>
                                <td>
                                    <?= $p['username']; ?>
                                </td>
                                <td>
                                    <?= $p['log_login'] ?>
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-sm dropdown-toggle more-vertical" type="button" id="dr2"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="text-muted sr-only">Action</span>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dr2">
                                            <a class="dropdown-item" type="button" data-toggle="modal"
                                                data-target="#edit<?= $p['id_admin'] ?>" data-whatever="@mdo">edit</a>
                                            <a class="dropdown-item"
                                                href="<?= base_url('admin/admin/hapus/' . $p['id_admin']) ?>">hapus</a>

                                        </div>
                                        <div class="modal fade" id="edit<?= $p['id_admin'] ?>" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Edit admin</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form Action="<?= base_url('admin/admin/update') ?>" method="post">
                                                            <input type="hidden" name="id_admin"
                                                                value="<?= $p['id_admin'] ?>">
                                                            <div class="form-group">
                                                                <label for="recipient-name" class="col-form-label">Username
                                                                    :</label>
                                                                <input type="text" name="username" class="form-control"
                                                                    id="recipient-name" value="<?= $p['username']; ?>">
                                                            </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Edit</button>
                                                    </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <?php $no++;
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script>
    new DataTable('#example');
</script>
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap4.min.js"></script>