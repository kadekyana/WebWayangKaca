@include('adminPage.template.header')
@include('adminPage.template.sidebar')
@include('adminPage.template.navbar')

    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-md">
          <div class="card">
            <div class="card-body">
              <form action="/edit/{{ $user -> id }}/up" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <p class="text-uppercase text-bold text-md">Tambah user</p>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="example-text-input" class="form-control-label">Nama</label>
                      <input class="form-control" type="text" name="nama" value="{{ $user -> name }}" placeholder="Nama user" required>
                    </div>
                  </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="example-text-input" class="form-control-label">Email</label>
                      <input class="form-control" type="text" name="deskripsi" value="{{ $user -> email }}" placeholder="Deskripsi user" required>
                    </div>
                  </div>
                  <div class="col-md-4">
                      <label for="example-text-input" class="form-control-label">Jenis</label>
                    <div class="form-group">
                        <input type="radio" id="admin"  name="jenis" required>
                        <label for="admin" class="form-control-label">Admin</label>
                        <input type="radio" id="admin"  name="jenis" required>
                        <label for="admin" class="form-control-label">User</label>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="example-text-input" class="form-control-label">Gambar</label>
                      <input class="form-control" name="gambar" value="{{ $user -> gambar }}" type="file">
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
              <div class="nav-wrapper position-relative end-0">
                <ul class="nav nav-pills nav-fill p-1">
                  <li class="nav-item">
                    <button class="nav-link mb-0 px-0 py-1 active d-flex align-items-center justify-content-center " data-bs-toggle="tab" type="submit">
                      <i class="ni ni-app"></i>
                      <span class="ms-2">Edit user</span>
                    </button>
                  </li>
                </ul>
              </div>
            </div>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div> 