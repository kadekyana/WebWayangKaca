@include('adminPage.template.header')
@include('adminPage.template.sidebar')
@include('adminPage.template.navbar')
<div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
                <a href="tambah_product" class="btn btn-primary">Tambah User</a>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-center text-uppercase text-secondary text-md font-weight-bolder opacity-7">No</th>
                      <th class="text-center text-uppercase text-secondary text-md font-weight-bolder opacity-7">Nama</th>
                      <th class="text-center text-uppercase text-secondary text-md font-weight-bolder opacity-7">Email</th>
                      <th class="text-center text-uppercase text-secondary text-md font-weight-bolder opacity-7">Role</th>
                      <th class="text-center text-uppercase text-secondary text-md font-weight-bolder opacity-7">Email Verified</th>
                      <th class="text-center text-uppercase text-secondary text-md font-weight-bolder opacity-7">Remember Token</th>
                      <th class="text-center text-uppercase text-secondary text-md font-weight-bolder opacity-7" colspan="2">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php
                      $no = 1;
                    @endphp
                    @foreach ($users as $u )
                    <tr>
                        <td>
                          <p class="text-lg font-weight-bold mb-0 ms-3">{{ $no++ }}</p>
                        </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{{ $u -> name }}</h6>
                          </div>
                        </div>
                    </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{{ $u -> email }}</h6>
                          </div>
                        </div>
                    </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{{ $u -> jenis }}</h6>
                          </div>
                        </div>
                    </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{{ $u -> email_verified_at }}</h6>
                          </div>
                        </div>
                    </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{{ $u -> remember_token }}</h6>
                          </div>
                        </div>
                    </td>
                      <td class="d-flex justify-content-center gap-1">
                        <a href="/edit/{{ $u ->id }}" class="btn btn-primary btn-sm mt-3">
                          Edit
                        </a>
                        <form action="/product/{{ $u -> id }}" method="post">
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