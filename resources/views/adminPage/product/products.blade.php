@include('adminPage.template.header')
@include('adminPage.template.sidebar')
@include('adminPage.template.navbar')
<div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
                <a href="tambah_product" class="btn btn-primary">Tambah Product</a>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-center text-uppercase text-secondary text-md font-weight-bolder opacity-7">No</th>
                      <th class="text-center text-uppercase text-secondary text-md font-weight-bolder opacity-7">Gambar</th>
                      <th class="text-center text-uppercase text-secondary text-md font-weight-bolder opacity-7">Nama</th>
                      <th class="text-center text-uppercase text-secondary text-md font-weight-bolder opacity-7">Deskripsi</th>
                      <th class="text-center text-uppercase text-secondary text-md font-weight-bolder opacity-7">Harga</th>
                      <th class="text-center text-uppercase text-secondary text-md font-weight-bolder opacity-7">Stok</th>
                      <th class="text-center text-uppercase text-secondary text-md font-weight-bolder opacity-7" colspan="2">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php
                      $no = 1;
                    @endphp
                    @foreach ($products as $p )
                    <tr>
                        <td>
                          <p class="text-lg font-weight-bold mb-0 ms-3">{{ $no++ }}</p>
                        </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="uploads/{{ $p -> gambar }}" class="avatar avatar-lg me-3">
                          </div>
                        </div>
                    </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{{ $p -> nama }}</h6>
                          </div>
                        </div>
                    </td>
                      <td>
                          <div class="d-flex flex-column justify-content-center">
                            <p class="mb-0 text-sm" style="max-width: 200px; ; overflow:hidden; text-overflow:ellipsis">{{ $p -> deskripsi }}</p>
                          </div>
                    </td>
                      <td class="align-middle text-center text-md">
                        <span class="badge badge-md bg-gradient-primary">Rp.{{ number_format($p -> harga, 0 ,'.','.') }}</span>
                      </td>
                      <td class="align-middle text-center text-md">
                        <span class="badge badge-md bg-gradient-primary">{{ $p -> stok }}</span>
                      </td>
                      <td class="d-flex justify-content-center gap-2 me-2">
                        <a href="/edit/{{ $p ->id }}" class="btn btn-primary btn-sm mt-3">
                          Edit
                        </a>
                        <form action="/product/{{ $p -> id }}" method="post">
                        @method('DELETE')
                        @csrf
                        <input type="submit" value="Hapus" class="btn btn-warning btn-sm mt-3">
                        </form>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>