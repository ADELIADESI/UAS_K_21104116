<h3>Tambah data Mahasiswa</h3>

<div class="alert alert-primary" role="alert" id="sukses">
  Data Berhasil ditambah
</div>
<div class="alert alert-danger" role="alert" id="gagal">
  Data Gagal ditambah
</div>

<form id="mhsbaru">
  <div class="mb-3">
    <label for="nim" class="form-label">NIM</label>
    <input type="text" class="form-control" id="txnim">
    <div id="nimHelp" class="form-text">isi NIM mahasiswa.</div>
  </div>

  <div class="mb-3">
    <label for="nama" class="form-label">Nama Mahasiswa</label>
    <input type="text" class="form-control" id="txnama">
    <div id="namaHelp" class="form-text">isi Nama mahasiswa.</div>
  </div>

  <div class="mb-3">
    <label for="talag" class="form-label">Tgl Lahir</label>
    <input type="date" class="form-control" id="txtgl">
    <div id="talagHelp" class="form-text">isi Tanggal Lahir mahasiswa.</div>
  </div>
  
  <div class="mb-3">
    <label for="nama" class="form-label">Jenis Kelamin</label>
    <select class="form-control" id="txjkel">
        <option value="-"> Pilih Jenis Kelamin </option>
        <option value="P"> Perempuan </option>
        <option value="L"> Laki-Laki </option>
        
    </select>    
    <div id="jkelHelp" class="form-text">Pilih Jenis Kelamin mahasiswa.</div>
  </div>

  <div class="mb-3">
    <label for="jurusan" class="form-label">Jurusan</label>
    <select class="form-control" id="txjur">
        <option value="-"> Pilih Jurusan </option>
        <option value="DGM"> DGM </option>
        <option value="SK"> SK </option>
        <option value="MTI"> MTI </option>
        <option value="KAB"> KAB </option>
    </select>    
    <div id="jkelHelp" class="form-text">Pilih Jurusan mahasiswa.</div>
  </div>
  
  <button type="button" class="btn btn-primary" onclick="mhsupdate()">Simpan</button>
</form>

<script src="mhs-update.js"></script>
<script>
  document.getElementById("sukses").style.display="none";
  document.getElementById("gagal").style.display="none";
</script>