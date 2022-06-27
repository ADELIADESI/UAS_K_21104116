<h3>Ubah data dosen</h3>

<div class="alert alert-primary" role="alert" id="sukses">
  Data Berhasil diubah
</div>
<div class="alert alert-danger" role="alert" id="gagal">
  Data Gagal diubah
</div>

<form id="dsUpdate">
  <div class="mb-3">
    <label for="nim" class="form-label">NIDN</label>
    <input type="text" class="form-control" id="txnidn" disabled>
    <div id="nidhHelp" class="form-text">Ubah NIDN dosen.</div>
  </div>

  <div class="mb-3">
    <label for="nama" class="form-label">Nama Dosen</label>
    <input type="text" class="form-control" id="txnama">
    <div id="namaHelp" class="form-text">Ubah Nama dosen.</div>
  </div>

  <div class="mb-3">
    <label for="nama" class="form-label">Mata Kuliah</label>
    <input type="text" class="form-control" id="txmk">
    <div id="mkHelp" class="form-text">Ubah matakuliah.</div>
  </div>
  
  <div class="mb-3">
    <label for="nama" class="form-label">Jenis Kelamin</label>
    <select class="form-control" id="txjkel">
        <option value="-"> Pilih Jenis Kelamin </option>
        <option value="P"> Perempuan </option>
        <option value="L"> Laki-Laki </option>
        
    </select>    
    <div id="jkelHelp" class="form-text">Ubah Jenis Kelamin dosen.</div>
  </div>


  <button type="button" class="btn btn-primary" onclick="dsupdatedata()">Perbarui Data</button>
  <button type="button" class="btn btn-secondary" onclick="batal()"> Batal </button>
</form>

<script src="ds-caridata.js"></script>
<script src="ds-updatedata.js"></script>
<script>
  document.getElementById("sukses").style.display="none";
  document.getElementById("gagal").style.display="none";

  function batal(){
      location.replace("http://localhost/UASWEBK/webproK/client/index.php?pg=ds");
  }
</script>