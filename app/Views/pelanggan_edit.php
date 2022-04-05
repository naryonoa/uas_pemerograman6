<div class="container p-5">
    <a href="<?= base_url('Pelanggan');?>" class="btn btn-secondary mb-2">Kembali</a>
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h4 class="card-title">Edit Pelanggan : <?= $pelanggan->nama_pelanggan?></h4>
        </div>
        <div class="card-body">
            <form method="post" action="<?= base_url('pelanggan/update');?>">
                <div class="form-group">
                    <label for="">Nama Pelanggan</label>
                    <input type="text" value="<?= $pelanggan->nama_pelanggan;?>" name="nama" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="">NO Telpon</label>
                    <input type="number" value="<?= $pelanggan->no_telpon;?>" name="telpon" required class="form-control">
                </div>
                <div class="form-group mb-2">
                    <label for="">Status</label>
                    <input type="text" value="<?=$pelanggan->status;?>" name="status" required class="form-control">
                </div>
                
                <input type="hidden" value="<?= $pelanggan->id_pelanggan;?>" name="id_pelanggan">
                <button class="btn btn-success">Edit Data</button>
            </form>
            
        </div>
    </div>
</div>