<div>
    <div class="row column_title">
        <div class="col-md-12">
            <div class="page_title">
                <div class="row">
                    <div class="col-md-6">
                        <h2>Input Data</h2>
                    </div>
                    <div class="col-md-6 text-right">
                        

                        <button class="btn btn-info">Tambah Data</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <form method="post" action="<?php echo e(route('siswa.store')); ?>">
                <?php echo csrf_field(); ?>

                <div class="form-group row">
                    <label for="" class="col-md-3">
                        Nomor Induk
                    </label>
                    <div class="col-md-5">
                        <input type="text" class="form-control" name="nis">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-md-3">
                        Nama Siswa
                    </label>
                    <div class="col-md-7">
                        <input type="text" class="form-control" name="nama">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-md-3">
                        Jenis Kelamin
                    </label>
                    <div class="col-md-6">
                        <select id="" class="form-control" name="jk">
                            <option value="">Pilih</option>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempunan">Perempunan</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-md-3">
                        Kelas
                    </label>
                    <div class="col-md-5">
                        <input type="text" class="form-control" name="kelas">
                    </div>
                </div>

                <a href="<?php echo e(route('siswa')); ?>" class="btn btn-info">List Siswa</a>

                <button class="btn btn-primary">Simpan Baru</button>
            </form>
        </div>
    </div>
</div>
<?php /**PATH C:\laragon\www\pro-naira\resources\views/livewire/siswa/csiswa.blade.php ENDPATH**/ ?>