<h3>Tambah data matakuliah</h3>

<div class="alert alert-primary" role="alert" id="sukses">
  Data Berhasil ditambah
</div>
<div class="alert alert-danger" role="alert" id="gagal">
  Data Gagal ditambah
</div>

<form id="mkbaru">
  <div class="mb-3">
    <label for="nim" class="form-label">Kode MK</label>
    <input type="text" class="form-control" id="txkode">
    <div id="nidhHelp" class="form-text">isi kode MK.</div>
  </div>

  <div class="mb-3">
    <label for="nama" class="form-label">Mata Kuliah</label>
    <input type="text" class="form-control" id="txmatkul">
    <div id="namaHelp" class="form-text">isi Nama matakuliah.</div>
  </div>

  <div class="mb-3">
    <label for="nama" class="form-label">Dosen</label>
    <input type="text" class="form-control" id="txdosen">
    <div id="mkHelp" class="form-text">isi dosen.</div>
  </div>
  

  <button type="button" class="btn btn-primary" onclick="mkupdate()">Simpan</button>
</form>

<script src="mk-update.js"></script>
<script>
  document.getElementById("sukses").style.display="none";
  document.getElementById("gagal").style.display="none";
</script>