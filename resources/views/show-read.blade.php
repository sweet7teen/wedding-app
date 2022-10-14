<div class="show-guest-book px-2 mt-5">
    <div class="container text-left shadow">
        <div class="row justify-content-md-center layout-komen">
            @foreach ($ucapan as $data)
            <div class="col-md-12 mb-3 komen">
                <div class="media px-3 media-comment">
                    <img class="rounded-circle mr-3 d-sm-block d-md-block d-lg-block"
                        src=https://na.ui-avatars.com/api/?name={{ substr($data -> nama, 0,1)
                    }}&length=1&size=50&background=bf616b&color=ffffff alt="Image Avatar">

                    <div class="media-body">
                        <div class="mb-2">
                            <h5 class="h5 mb-0 text-secondary">{{ $data -> nama }}</h5>
                            <h6 class="h6 mt-1 text-secondary"><i>{{ $data -> created_at }}</i></h6>
                        </div>
                        {{-- <div class="mb-2">
                            <h5 class="h6 mb-0 text-secondary"><i>{{ $data -> created_at }}</i></h5>
                        </div> --}}
                        <p>{{ $data -> ucapan }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>