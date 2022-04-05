<div class="container p-5">
    <a href="<?= base_url('pelanggan');?>" class="btn btn-secondary mb-2">Kembali</a>
    <div class="card">
        <div class="card-header bg-info text-white">
            <h4 class="card-title">Tambah Data Barang</h4>
        </div>
        <div class="card-body">
            
                <form method="post" action="<?= base_url('pelanggan/add');?>">
            <div class="mb-3">
    <label for="" class="form-label">Nama Pelanggan</label>
    <input type="text" class="form-control" name="nama" autocomplete="off" required>
        </div>
        <div class="mb-3">
    <label for="" class="form-label">No Telpon</label>
    <input type="number" class="form-control" name="telpon" autocomplete="off" required>
        </div>
        <div class="mb-3">
    <label for="" class="form-label">Status</label>
       <input type="text" class="form-control" name="telpon" autocomplete="off" required>
        </div>

                <button class="btn btn-success">Tambah Data</button>
            </form>
            
        </div>
    </div>
</div>
