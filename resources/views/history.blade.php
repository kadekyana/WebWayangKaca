@include('header')

<div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <video controls class="w-100">
                    <source src="{{ asset('video/landing.mp4') }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
    </div>
    
@include('footer')