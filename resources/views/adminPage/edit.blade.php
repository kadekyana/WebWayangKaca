@include('adminPage.template.header')
@include('adminPage.template.sidebar')
@include('adminPage.template.navbar')

    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-md">
          <div class="card">
            <div class="card-body">
              <form action="/edit/{{ $product -> id }}/up" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <p class="text-uppercase text-bold text-md">Tambah Product</p>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="example-text-input" class="form-control-label">Nama</label>
                      <input class="form-control" type="text" name="nama" value="{{ $product -> nama }}" placeholder="Nama Product" required>
                    </div>
                  </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="example-text-input" class="form-control-label">Deskripsi</label>
                      <input class="form-control" type="text" name="deskripsi" value="{{ $product -> deskripsi }}" placeholder="Deskripsi Product" required>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="example-text-input" class="form-control-label">Harga</label>
                      <input class="form-control" type="number" name="harga" value="{{ $product -> harga }}" placeholder="Rp.123456" required>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="example-text-input" class="form-control-label">Stok</label>
                      <input class="form-control" type="number" name="stok" value="{{ $product -> stok }}" placeholder="Rp.123456" required>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="example-text-input" class="form-control-label">Gambar</label>
                      <input class="form-control" name="gambar" value="{{ $product -> gambar }}" type="file">
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
              <div class="nav-wrapper position-relative end-0">
                <ul class="nav nav-pills nav-fill p-1">
                  <li class="nav-item">
                    <button class="nav-link mb-0 px-0 py-1 active d-flex align-items-center justify-content-center " data-bs-toggle="tab" type="submit">
                      <i class="ni ni-app"></i>
                      <span class="ms-2">Edit Product</span>
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