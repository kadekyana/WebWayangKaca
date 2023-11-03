@include('adminPage.template.header')
@include('adminPage.template.sidebar')
@include('adminPage.template.navbar')
<div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
                <h3>Data User</h3>
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
                          <p class="text-lg text-center font-weight-bold mb-0 ms-3">{{ $no++ }}</p>
                        </td>
                      <td>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm text-center">{{ $u -> name }}</h6>
                          </div>
                    </td>
                      <td>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm text-center">{{ $u -> email }}</h6>
                          </div>
                    </td>
                      <td >
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm text-center">{{ $u -> jenis }}</h6>
                        </div>
                    </td>
                      <td class="d-flex justify-content-center gap-1">
                        <form action="/users/{{ $u -> id }}" method="post">
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