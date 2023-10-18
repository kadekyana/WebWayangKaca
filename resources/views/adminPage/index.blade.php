@include('adminPage.template.header')
@include('adminPage.template.sidebar')
@include('adminPage.template.navbar')

<div class="container-fluid py-4">
    <div class="row">
        <div class="col-3">
            <div class="card mb-4">
                <div class="card-body pb-3">
                    <h6 class="text text-center">Welcome Admin</h6>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-3">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6 class="text text-center">Total Users</h6>
                </div>
                <div class="card-body px-0 pt-0 pb-3">
                    <div class="d-flex justify-content-center">
                        <div class="text-center">
                            <h1>{{ $users }}</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6 class="text text-center">Total Products</h6>
                </div>
                <div class="card-body px-0 pt-0 pb-3">
                    <div class="d-flex justify-content-center">
                        <div class="text-center">
                            <h1>{{ $products }}</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
