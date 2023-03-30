<div>
    <div class="search-full collapse bg-dark p-3 pb-lg-0" id="search-open">
        <div class="container position-relative">
            <h2 class="position-absolute start-0 bottom-0 mb-n5 display-1 text-white-stroke opacity-1">
                <span class="d-block">{{ __('Buscar') }}</span>
            </h2>
            <div class="row vh-100">
                <div class="d-flex flex-column my-auto py-5 w-100">
                    <!-- Search form START -->
                    <form class="form-dark form-line position-relative w-100">
                        <div class="mb-3 input-group-lg input-text-white-stroke mb-0">
                            <!-- Search input -->
                            <input class="form-control font-heading caret-primary mb-0 pe-6" type="text" name="search"
                                placeholder="{{ __('Que estas buscando?') }}">
                            <span class="focus-border"></span>
                        </div>
                        <!-- Search button -->
                        <button type="button" class="position-absolute end-0 top-0 btn pb-3 text-primary-hover h-100">
                            <i class="fa fi-search display-8"></i>
                        </button>
                    </form>
                    <!-- Search form END -->
                    <p class="small mt-2 mb-0">{{ __('Por ejemplo: sitios web, plataformas, comercio electrónico etc...') }}</p>
                </div>

                <!-- Search button close START -->
                <a class="position-fixed top-0 end-0 m-3 m-md-5 btn btn-white btn-round zoom-hover"
                    data-bs-toggle="collapse" href="javascript:void(0)" data-bs-target="#search-open"
                    aria-expanded="true">
                    <i class="fas fa-times p-0"></i>
                </a>
                <!-- Search button close END -->
            </div>
        </div>
    </div>
</div>
