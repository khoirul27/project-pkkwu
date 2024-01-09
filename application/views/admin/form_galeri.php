<div class="row">
    <div class="container mb-4">
        <div class="card shadow col- h-100 mb-4">
            <div class="card-header">
                <strong class="card-title">Galeri</strong>
            </div>
            <div class="card-body">
                <form Action="<?= base_url('admin/galeri/simpan') ?>" method="post" enctype="multipart/form-data">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Judul</label>
                            <input type="text" class="form-control" name="judul" placeholder="Masukkan Judul" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Foto</label>
                            <div class="custom-file">
                                <input type="file" name="foto" class="custom-file-input" id="customFile" accept="image/png, image/jpeg" required>
                                <label class="custom-file-label" for="customFile">Masukkan Foto</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail4">Keterangan</label>
                        <input type="text" class="form-control" name="keterangan" placeholder="Masukkan keterangan" value="">
                    </div>
                    <button type="submit" class="btn btn-primary" fdprocessedid="8wkfz">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <!-- <div id="carouselExampleIndicators" class="carousel slide w-50 col-12 rounded " data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <?php $no = 1;
            foreach ($galeri as $a) { ?>
                <div class="carousel-item <?php if ($no == 1) {
                                                echo 'active';
                                            } ?> ">
                    <img class="d-block w-100" src="<?= base_url('aset/temadmin/img/galeri/' . $a['foto']) ?>"
                        target="_blank" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="text-light">
                            <?= $a['judul'] ?>
                        </h5>
                        <p>
                            <?= $a['keterangan'] ?>
                        </p>
                        <a class="btn btn-sm btn-danger" href="<?= base_url('admin/galeri/hapus/' . $a['foto']) ?>"><span
                                class="text-danger">hapus</span></a>
                    </div>
                </div>
                <?php $no++;
            } ?>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div> -->
</div>

<div class="row">
    <?php $no = 1;
    foreach ($galeri as $a) { ?>
        <div class="col-3 card shadow mb-1">
            <div class="card-body text-center">
                <a href="<?= base_url('aset/temadmin/img/galeri/' . $a['foto']) ?>" target="_blank" class="avatar avatar-xl">
                    <img src="<?= base_url('aset/temadmin/img/galeri/' . $a['foto']) ?>" alt="..." class="img rounded">
                </a>
                <div class="card-text my-2">
                    <strong class="card-title my-0"><?= $a['judul'] ?></strong>
                    <p class="small text-muted mb-0"><?= $a['keterangan'] ?></p>

                </div>
            </div>
            <div class="card-footer">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto">
                        <a href="<?= base_url('admin/galeri/hapus/' . $a['foto']) ?>" class="btn btn-sm btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5" />
                            </svg></a>
                    </div>
                </div>
            </div>
        </div>
    <?php $no++;
    } ?>
</div>