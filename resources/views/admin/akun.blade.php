@extends('admin.layout')

@section('pageHeading')
  {{ __('Akun') }}
@endsection

@section('sidebar')
<li class="menu-item">
    <a href="/prodi/beranda" class="menu-link">
        <i class="menu-icon tf-icons bx bx-home-circle"></i>
        <div data-i18n="Beranda">Beranda</div>
    </a>
</li>
<li class="menu-item active">
    <a href="/prodi/akun" class="menu-link">
        <i class="menu-icon tf-icons bx bx-user"></i>
        <div data-i18n="Akun">Akun</div>
    </a>
</li>
<li class="menu-item">
    <a href="/prodi/" class="menu-link">
        <i class="menu-icon tf-icons bx bx-power-off"></i>
        <div data-i18n="Logout">Logout</div>
    </a>
</li>
@endsection

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
      <div class="col-lg-12">
        <div class="card mb-4">
          <h5 class="card-header">Akun Anda</h5>
          <div class="card-body pb-3">
            <form
              id="formAccountSettings"
              method="POST"
              onsubmit="return false"
            >
              <div class="row">
                <div class="mb-3 col-md-6">
                  <label for="nip" class="form-label"
                    >Nomor Induk Pegawai</label
                  >
                  <input
                    type="text"
                    class="form-control"
                    id="nip"
                    name="nip"
                    value="199008022019031006"
                    disabled
                  />
                </div>
                <div class="mb-3 col-md-6">
                  <label for="nama-lengkap" class="form-label"
                    >Nama Lengkap</label
                  >
                  <input
                    type="text"
                    class="form-control"
                    id="nama-lengkap"
                    name="nama-lengkap"
                    value="Dedy Kurniawan, M.Sc."
                    disabled
                  />
                </div>
                <div class="mb-3 col-md-6">
                  <label for="email" class="form-label">Email</label>
                  <input
                    type="email"
                    class="form-control"
                    id="email"
                    name="email"
                    value="dedy@unsri.ac.id"
                    disabled
                  />
                </div>
                <div class="mb-3 col-md-6">
                  <label for="posisi" class="form-label"
                    >Posisi</label
                  >
                  <input
                    type="text"
                    class="form-control"
                    id="posisi"
                    name="posisi"
                    value="Dosen Verifikator"
                    disabled
                  />
                </div>
              </div>
              <div class="mt-3 mb-1">
                <a
                  href="index.html"
                  class="btn btn-secondary me-2 text-white"
                  >Kembali</a
                >
              </div>
            </form>
          </div>
          <!-- /Account -->
        </div>
      </div>
      <div class="col-lg-12">
        <div class="card">
          <h5 class="card-header">Ubah Password</h5>
          <div class="card-body pb-3">
            <form
              id="formAccountSettings"
              method="POST"
              onsubmit="return false"
            >
              <div class="row">
                <div class="mb-3 col-md-6">
                  <label for="password-baru" class="form-label"
                    >Password Baru</label
                  >
                  <input
                    type="password"
                    class="form-control"
                    id="password-baru"
                    name="password-baru"
                    placeholder="Password Baru"
                  />
                </div>
                <div class="mb-3 col-md-6">
                  <label for="password-lama" class="form-label"
                    >Password Lama</label
                  >
                  <input
                    type="password"
                    class="form-control"
                    id="password-lama"
                    name="password-lama"
                    placeholder="Password Lama"
                  />
                </div>
                <div class="mb-3 col-md-6">
                  <label for="konfirmasi-password" class="form-label"
                    >Konfirmasi Password Baru</label
                  >
                  <input
                    type="password"
                    class="form-control"
                    id="konfirmasi-password"
                    name="konfirmasi-password"
                    placeholder="Konfirmasi Password Baru"
                  />
                </div>
              </div>
              <div class="mt-3 d-flex justify-content-between">
                <div class="me-2">
                  <a href="index.html" class="btn btn-secondary"
                    >Kembali</a
                  >
                </div>
                <div class="d-flex">
                  <button
                    type="reset"
                    class="btn btn-outline-primary me-2"
                  >
                    Reset
                  </button>
                  <a
                    href="login.html"
                    class="btn btn-primary text-white"
                    >Simpan</a
                  >
                </div>
              </div>
            </form>
          </div>
          <!-- /Account -->
        </div>
      </div>
    </div>
  </div>
@endsection
