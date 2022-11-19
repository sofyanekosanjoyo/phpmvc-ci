<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Tambah Data Mahasiswa
                </div>
                <div class="card-body">
                    <?php if (validation_errors()) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= validation_errors(); ?>
                        </div>
                    <?php endif; ?>
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama">
                        </div>
                        <div class="form-group">
                            <label for="nip" class="form-label">NIP</label>
                            <input type="text" name="nip" class="form-control" id="nip">
                        </div>
                        <div class="form-group">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" name="email" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                            <label for="jurusan" class="form-label">Jurusan</label>
                            <select class="form-select" size="1" id="jurusan" name="jurusan">
                                <option value="Teknik Informatika">Teknik Informatika</option>
                                <option value="Teknik Sipil">Teknik Sipil</option>
                                <option value="Teknik Asitektur">Teknik Asitektur</option>
                                <option value="Teknik Planologi">Teknik Planologi</option>
                                <option value="Administrasi Publik">Administrasi Publik</option>
                            </select>
                        </div>
                        <br>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
                    </form>
                </div>
            </div>



        </div>
    </div>
</div>