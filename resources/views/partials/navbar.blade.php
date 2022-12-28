
<nav class=" navbar navbar-expand-lg navbar-light bg-light justify-content-between">
    <div class=" container collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link {{ ($title === "Dosen") ? 'active' : '' }}" href="/dosen">Dosen</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === "Mahasiswa") ? 'active' : '' }}" href="/mahasiswa">Mahasiswa</a>
        </li>
        <li class="nav-item" >
          <a class="nav-link {{ ($title === "Mata Kuliah") ? 'active' : '' }}" href="/matakuliah">Mata Kuliah</a>
        </li>
    </div>
</nav>