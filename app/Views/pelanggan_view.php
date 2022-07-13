<?php
$koneksi = mysqli_connect("localhost","root","naryono1","uas_pemerograman");
$borrow = mysqli_query($koneksi,'select * from borrows');
while ($borrow_data = mysqli_fetch_array($borrow)){
    
    $siswa = mysqli_query($koneksi,"select * from students where studentid = $borrow_data[studentid]");
    $data_siswa = mysqli_fetch_array($siswa);
    $nama_siswa[] = $data_siswa['name'];

    $buku = mysqli_query($koneksi,"select * from books where bookid = $borrow_data[bookid]");
    $data_buku = mysqli_fetch_array($buku);
    $nama_buku[] = $data_buku['name'];
    $jumlah_halaman[] = $data_buku['pagecount'];
    $author = $data_buku['authorid'];
    $type = $data_buku['typeid'];

    $penulis = mysqli_query($koneksi,"select * from authors where authorid = $author");
    $data_penulis = mysqli_fetch_array($penulis);
    $nama_penulis[] = $data_penulis['name'];

    $type_buku = mysqli_query($koneksi,"select * from types where typeid = $type");
    $data_type = mysqli_fetch_array($type_buku);
    $nama_type[] = $data_type['name']; 
}
?>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<div class="container pt-5">
    <a href="#" class="btn btn-success mb-2"  data-bs-toggle="modal" data-bs-target="#staticBackdrop">Tambah Data</a>
    <div class="card">
        <div class="card-header bg-primary text-white">
            <div class="row"> 
            <div class="col-6">
            <h4 class="card-title">Data Peminjam Buku</h4>
        </div>
        <div class="col-6">
            <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" id="filter" name="search" >
        
      </form>
        </div></div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped" >
                    <thead>
                        <b>
                            <th>No.</th>
                            <th>Siswa</th>
                            <th>Meminjam</th>
                            <th>Kembali</th>
                            <th>buku</th> 
                            <th>Jumlah Halaman</th> 
                            <th>Penulis</th>  
                            <th>Type</th>                            
                        </b> 
                    </thead>
                    <tbody>
                        <?php $no=1; $arr = 0; foreach($getPelanggan as $isi){?>
                            <tr>
                                <td><?= $no;?></td>
                                <td><?= $nama_siswa[$arr];?></td>
                                <td><?= $isi['takenDate'];?></td>
                                <td><?= $isi['broughtDate'];?></td>
                                <td><?= $nama_buku[$arr];?></td>
                                <td><?= $jumlah_halaman[$arr];?></td>
                                <td><?= $nama_penulis[$arr];?></td>
                                <td><?= $nama_type[$arr];?></td>
                                
                            </tr>
                        <?php $no++;
                        $arr++;}?>
                    </tbody>  

                </table>
            </div>
        </div>
    </div>
</div>



  <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script type="text/javascript">
   
    $(document).ready(function(){
    $("#filter").keyup(function(){
        var filter = $(this).val(), count = 0;
 
        // Loop through the comment list
        $("tbody tr").each(function(){
 
            // If the list item does not contain the text phrase fade it out
            if ($(this).text().search(new RegExp(filter, "i")) < 0) {
                $(this).fadeOut();
 
            // Show the list item if the phrase matches and increase the count by 1
            } else {
                $(this).show();
                count++;
            }
        });
 
        // Update the count
        var numberItems = count;
        
    });
});
    
</script>
