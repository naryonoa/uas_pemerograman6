<div class="container pt-5">
    <a href="#" class="btn btn-success mb-2"  data-bs-toggle="modal" data-bs-target="#staticBackdrop">Tambah Data</a>
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h4 class="card-title">Data Pelanggan</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Pelanggan</th>
                            <th>No Telpon</th>
                            <th>Status</th>
                            <th>Aksi</th>                            
                        </tr> 
                    </thead>
                    <tbody>
                        <?php $no=1; foreach($getPelanggan as $isi){?>
                            <tr>
                                <td><?= $no;?></td>
                                <td><?= $isi['nama_pelanggan'];?></td>
                                <td><?= $isi['no_telpon'];?></td>
                                <td><?= $isi['status'];?></td>
                                <td>
                                    <a href="<?= base_url('pelanggan/edit/'.$isi['id_pelanggan']);?>" 
                                    class="btn btn-success">
                                    Edit</a>
                                    <button 
                                    onclick="hapus('<?= base_url('pelanggan/hapus/'.$isi['id_pelanggan']);?>')"
                                    class="btn btn-danger">
                                    Hapus</a>

                                </td>
                            </tr>
                        <?php $no++;}?>
                    </tbody>  

                </table>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Tambah Pelanggan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?= base_url('pelanggan/add');?>" id="kirim">
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
        <select class="form-select" required name="status">
  <option selected>Pilih Status</option>
  <option value="Agen">Agen</option>
  <option value="Pelanggan">Pelanggan</option>
  
</select>
</div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" onclick="tambah()" class="btn btn-primary">Simpan Pelanggan</button>
        
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
    function hapus(id){
        Swal.fire({
  title: 'Apakah Yakin Akan Menghapus Pelanggan ini?',
  showDenyButton: true,
  showCancelButton: false,
  confirmButtonText: 'Hapus',
  denyButtonText: `Batal`,
}).then((result) => {
  /* Read more about isConfirmed, isDenied below */
  if (result.isConfirmed) {
    window.location = id;
  } else if (result.isDenied) {
    Swal.fire('Pelanggan Tidak Jadi Dihapus', '', 'info')
  }
})
    }

    function tambah(){
        Swal.fire({
  title: 'Simpan Data Pelanggan?',
  showDenyButton: true,
  showCancelButton: false,
  confirmButtonText: 'Simpan',
  denyButtonText: `Batal`,
}).then((result) => {
  /* Read more about isConfirmed, isDenied below */
  if (result.isConfirmed) {
    document.getElementById('kirim').submit();
  } else if (result.isDenied) {
    Swal.fire('Data Tidak Ditambahkan', '', 'info')
  }
})
    }
</script>