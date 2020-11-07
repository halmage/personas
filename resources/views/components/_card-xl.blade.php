<div class="row justify-content-center">
    <div class="col-md-10">
        <div class="card card-style">
            <div class="card-header card-header-style py-2">
                <h5 class="card-title mt-3 text-uppercase text-style text-dark">{{ __($title) }}</h5>
            </div>
            <div class="card-body">
                {{ $slot }}
            </div>
        </div>
    </div>
</div>