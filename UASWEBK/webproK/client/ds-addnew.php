<h3>Tambah data dosen</h3>

<div class="alert alert-primary" role="alert" id="sukses">
  Data Berhasil ditambah
</div>
<div class="alert alert-danger" role="alert" id="gagal">
  Data Gagal ditambah
</div>

<form id="dsbaru">
  <div class="mb-3">
    <label for="nim" class="form-label">NIDN</label>
    <input type="text" class="form-control" id="txnidn">
    <div id="nidhHelp" class="form-text">isi NIDN dosen.</div>
  </div>

  <div class="mb-3">
    <label for="nama" class="form-label">Nama Dosen</label>
    <input type="text" class="form-control" id="txnama">
    <div id="namaHelp" class="form-text">isi Nama dosen.</div>
  </div>

  <div class="mb-3">
    <label for="nama" class="form-label">Mata Kuliah</label>
    <input type="text" class="form-control" id="txmk">
    <div id="mkHelp" class="form-text">isi matakuliah.</div>
  </div>
  
  <div class="mb-3">
    <label for="nama" class="form-label">Jenis Kelamin</label>
    <select class="form-control" id="txjkel">
        <option value="-"> Pilih Jenis Kelamin </option>
        <option value="P"> Perempuan </option>
        <option value="L"> Laki-Laki </option>
        
    </select>    
    <div id="jkelHelp" class="form-text">Pilih Jenis Kelamin dosen.</div>
  </div>


  <button type="button" class="btn btn-primary" onclick="dsupdate()">Simpan</button>
</form>

<script src="ds-update.js"></script>
<script>
  document.getElementById("sukses").style.display="none";
  document.getElementById("gagal").style.display="none";
</script>