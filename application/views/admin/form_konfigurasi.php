<div class="container">
    <div class="card shadow col- h-100 mb-4">
        <div class="card-header">
            <strong class="card-title">Konfigurasi</strong>
        </div>
        <div class="card-body">
            <form Action="<?= base_url('admin/konfigurasi/update_konfigurasi') ?>" method="post" enctype="multipart/form-data">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">No Whatsapp</label>
                        <input type="text" class="form-control" name="wa" placeholder="Masukkan No whatsapp" value="<?= $konfig->wa; ?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Instagram</label>
                        <input type="text" class="form-control" name="ig" placeholder="Masukkan instagram" value="<?= $konfig->ig; ?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Masukkan email" value="<?= $konfig->email; ?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Tik tok</label>
                        <input type="text" class="form-control" name="tiktok" placeholder="Masukkan email" value="<?= $konfig->tiktok; ?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Alamat</label>
                        <textarea class="form-control" name="alamat" id="" cols="30" rows="5"><?= $konfig->alamat; ?></textarea>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Keterangan</label>
                        <textarea class="form-control" name="keterangan" id="" cols="30" rows="5"><?= $konfig->keterangan; ?></textarea>
                    </div>
                    <div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="customFile">Foto</label>
                        <br>
                        <img class="mb-3 rounded" src="<?= base_url('aset/temadmin/img/config/' . $konfig->foto) ?>" width="200" alt="">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="foto">
                            <label class="custom-file-label" for="customFile">Choose
                                file</label>
                        </div>

                    </div>
                </div>
                <button type="submit" class="btn btn-primary" fdprocessedid="8wkfz">Submit</button>
            </form>
        </div>
    </div>
</div>