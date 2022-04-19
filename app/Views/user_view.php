<div class="container pt-5">
    <a href="#" class="btn btn-success mb-2"  data-bs-toggle="modal" data-bs-target="#staticBackdrop">Tambah Data</a>
    <a href="#" class="btn btn-primary mb-2"  data-bs-toggle="modal" data-bs-target="#level">Tambah Level</a>
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h4 class="card-title">Data user</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama user</th>
                            <th>Level</th>
                            
                            <th>Aksi</th>                            
                        </tr> 
                    </thead>
                    <tbody>
                        <?php $no=1; foreach($getuser as $isi){?>
                            <tr>
                                <td><?= $no;?></td>
                                <td><?= $isi['nama'];?></td>
                                <td><?= $isi['level_id'];?></td>
                                
                                <td>
                                    <a href="<?= base_url('user/edit/'.$isi['id_user']);?>" 
                                    class="btn btn-success">
                                    Edit</a>
                                    <button 
                                    onclick="hapus('<?= base_url('user/hapus/'.$isi['id_user']);?>')"
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
        <h5 class="modal-title" id="staticBackdropLabel">Tambah user</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?= base_url('user/add');?>" id="kirim">
            <div class="mb-3">
    <label for="" class="form-label">Nama user</label>
    <input type="text" class="form-control" name="nama" autocomplete="off" required>
        </div>
        
        <div class="mb-3">
    <label for="" class="form-label">Level</label>
        <select class="form-select" required name="level">
  <option selected>Pilih Level</option>
  <?php  foreach($getlevel as $level){?>
  <option value="<?= $level['nama_level'];?>"><?= $level['nama_level'];?></option>
  <?php } ?>
  
</select>
</div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" onclick="tambah()" class="btn btn-primary">Simpan user</button>
        
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="level" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Tambah Level</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?= base_url('level/add');?>" id="kirim_level">
            <div class="mb-3">
    <label for="" class="form-label">Nama Level</label>
    <input type="text" class="form-control" name="nama" autocomplete="off" required>
        </div>
        
       
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" onclick="tambah_level()" class="btn btn-primary">Simpan </button>
        
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
    function hapus(id){
        Swal.fire({
  title: 'Apakah Yakin Akan Menghapus user ini?',
  showDenyButton: true,
  showCancelButton: false,
  confirmButtonText: 'Hapus',
  denyButtonText: `Batal`,
}).then((result) => {
  /* Read more about isConfirmed, isDenied below */
  if (result.isConfirmed) {
    window.location = id;
  } else if (result.isDenied) {
    Swal.fire('user Tidak Jadi Dihapus', '', 'info')
  }
})
    }

    function tambah(){
        Swal.fire({
  title: 'Simpan Data user?',
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

    function tambah_level(){
        Swal.fire({
  title: 'Simpan Data Level?',
  showDenyButton: true,
  showCancelButton: false,
  confirmButtonText: 'Simpan',
  denyButtonText: `Batal`,
}).then((result) => {
  /* Read more about isConfirmed, isDenied below */
  if (result.isConfirmed) {
    document.getElementById('kirim_level').submit();
  } else if (result.isDenied) {
    Swal.fire('Data Tidak Ditambahkan', '', 'info')
  }
})
    }
</script>