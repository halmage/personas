<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card card-style">
            <div class="card-header card-header-style py-2">
                <h5 class="card-title mt-3 text-uppercase text-style text-light">{{ __($title) }}</h5>
            </div>
            <div class="card-body">
                {{ $slot }}
            </div>
        </div>
    </div>
</div>