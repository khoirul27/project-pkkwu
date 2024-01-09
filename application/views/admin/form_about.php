<div class="container">
    <div class="card shadow mb-4">
        <div class="card-header">
            <strong class="card-title">Form About</strong>
        </div>
        <div class="card-body">
            <form Action="<?= base_url('admin/about/update_about') ?>" method="post" enctype="multipart/form-data">
                <input type="hidden" name="nama_foto" value="<?= $about->foto ?>">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Judul</label>
                        <input type="text" class="form-control" name="judul" placeholder="Judul" value="<?= $about->judul; ?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Foto</label>
                        <div class="custom-file">
                            <input type="file" name="foto" class="custom-file-input" id="customFile">
                            <label class="custom-file-label" for="customFile" accept="image/png, image/jpeg">Foto</label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputAddress">Keterangan</label>
                    <textarea name="keterangan" class="form-control" id="example-textarea" rows="12"><?= $about->keterangan; ?></textarea>
                </div>
                <button type="submit" class="btn btn-primary" fdprocessedid="8wkfz">Submit</button>
            </form>
        </div>
    </div>
</div>
<div class="col-md-12 mb-4">
    <div class="card profile shadow rounded">
        <div class="card-body my-4">
            <div class="row align-items-center">
                <div class="col-md-3 text-center mb-5">
                    <a href="#!" class="avatar avatar-xl">
                        <img src="<?= base_url('aset/temadmin/img/about/' . $about->foto) ?>" alt="..." class="avatar-img">
                    </a>
                </div>
                <div class="col">
                    <div class="row align-items-center">
                        <div class="col-md-7">
                            <h4 class="mb-1">
                                <?= $about->judul; ?>
                            </h4>
                        </div>
                        <div class="col">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-md-7">
                            <p class="text-muted">
                                <?= $about->keterangan; ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div> <!-- / .row- -->
        </div> <!-- / .card-body - -->
    </div> <!-- / .card- -->
</div>