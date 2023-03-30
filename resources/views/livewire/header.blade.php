<div>
    <header class="navbar-light navbar-sticky">

        <!-- Logo Nav START -->
        <nav class="navbar navbar-expand-lg">
            <div class="container align-items-stretch">
                <!-- Logo START -->
                <a class="navbar-brand" href="index.html">
                    <img src="{{ asset('images/logo.png') }}" alt="logo de engynex"
                        style="width: 12em; position:relative; top: -5px;">
                </a>
                <!-- Logo END -->

                <!-- Responsive navbar toggler -->
                <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"> </span>
                </button>



                <!-- Main Menu START -->
                <div class="collapse navbar-collapse w-auto me-auto" id="navbarCollapse">
                    <ul class="navbar-nav navbar-nav-scroll me-auto ms-0 ms-xl-4">

                        <!-- Menu item 1 Demos -->
                        <li class="nav-item">
                            <a class="nav-link" href="./">
                                <strong>{{ __('INICIO') }}</strong>
                            </a>
                        </li>

                        <!-- Menu item 1 Demos -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="demosMenu" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <strong>{{ __('NUESTRAS SOLUCIONES') }}</strong>
                            </a>
                            <div class="dropdown-menu pb-3 pb-lg-0" aria-labelledby="demosMenu">
                                <div class="d-block d-sm-flex">
                                    <ul class="list-unstyled w-100 pe-0 pe-lg-2">
                                        <li class="dropdown-header">{{ __('Desarrollo web') }}</li>
                                        <li> <a class="dropdown-item" href="index.html">{{ __('Sitio web estaticos')
                                                }}</a> </li>
                                        <li> <a class="dropdown-item" href="index-2.html">{{ __('Sitio web dinamico')
                                                }}</a> </li>
                                        <li> <a class="dropdown-item" href="index-3.html">{{ __('Sitio web con
                                                wordpress') }}<span class="badge bg-primary ms-2">Popular</span></a>
                                        </li>

                                        <li class="dropdown-divider"></li>

                                        <li class="dropdown-header mt-3 mt-sm-0">{{ __('Tienda virtual') }}</li>
                                        <li> <a class="dropdown-item" href="index-6.html">{{ __('Con magento') }}</a>
                                        </li>
                                        <li> <a class="dropdown-item" href="index-7.html">{{ __('Con WooCommerce')
                                                }}</a> </li>
                                        <li> <a class="dropdown-item" href="index-8.html">{{ __('Con tecnologías puras')
                                                }}</a> </li>

                                    </ul>
                                    <ul class="list-unstyled w-100 pe-0 pe-lg-2">
                                        <li class="dropdown-header mt-3 mt-sm-0">{{ __('Plataformas') }}</li>
                                        <li> <a class="dropdown-item" href="index-6.html">{{ __('Fabrica de desarrollo')
                                                }}</a> </li>
                                        <li> <a class="dropdown-item" href="index-7.html">{{ __('Soluciones E-Learning')
                                                }}</a> </li>
                                        <li> <a class="dropdown-item" href="index-8.html">{{ __('Intranet corporativa')
                                                }}</a> </li>

                                        <li class="dropdown-divider"></li>

                                        <li class="dropdown-header mt-3 mt-sm-0">{{ __('Marketing digital') }}</li>
                                        <li> <a class="dropdown-item" href="index-6.html">{{ __('Publicidad')
                                                }}</a> </li>
                                        <li> <a class="dropdown-item" href="index-7.html">{{ __('Creación de marca')
                                                }}</a> </li>
                                        <li> <a class="dropdown-item" href="index-8.html">{{ __('SEO')
                                                }}</a> </li>

                                    </ul>

                                    <ul class="list-unstyled w-100 pe-0 pe-lg-2">
                                        <li class="dropdown-header mt-3 mt-sm-0">{{ __('Producción audiovisual') }}</li>
                                        <li> <a class="dropdown-item" href="index-6.html">{{ __('Publicidad')
                                                }}</a> </li>
                                        <li> <a class="dropdown-item" href="index-7.html">{{ __('Creación de marca')
                                                }}</a> </li>
                                        <li> <a class="dropdown-item" href="index-8.html">{{ __('SEO')
                                                }}</a> </li>

                                        <li class="dropdown-divider"></li>
                                        <li class="dropdown-header mt-3 mt-sm-0">{{ __('Seguridad') }}</li>
                                        <li> <a class="dropdown-item" href="index-6.html">{{ __('Publicidad')
                                                }}</a> </li>
                                        <li> <a class="dropdown-item" href="index-7.html">{{ __('Creación de marca')
                                                }}</a> </li>
                                        <li> <a class="dropdown-item" href="index-8.html">{{ __('SEO')
                                                }}</a> </li>
                                    </ul>

                                    <ul class="list-unstyled w-100 pe-0 pe-lg-2">
                                        <li class="dropdown-header mt-3 mt-sm-0">{{ __('Infraestructura') }}</li>
                                        <li> <a class="dropdown-item" href="index-6.html">{{ __('Publicidad')
                                                }}</a> </li>
                                        <li> <a class="dropdown-item" href="index-7.html">{{ __('Creación de marca')
                                                }}</a> </li>
                                        <li> <a class="dropdown-item" href="index-8.html">{{ __('SEO')
                                                }}</a> </li>
                                    </ul>
                                </div>
                                <!-- Nav action box -->
                                <div class="w-100 mt-4 d-none d-lg-flex">
                                    <div
                                        class="text-center bg-primary-multiply position-relative overflow-hidden px-3 py-5 w-100">
                                        <h4 class="mb-0 text-white">Get free quote today!</h4>
                                        <p class=" text-white">For quick response and more details, Feel free to contact
                                            us</p>
                                        <a class="btn btn-white btn-sm" target="_blank" href="landing/index.htm">Contact
                                            Us</a>
                                        <img class="bg-primary-multiply position-absolute top-50 start-50 translate-middle z-index-n9 w-100"
                                            src="{{ asset('images/bg/03.jpg') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </li>

                        <!-- Menu item 3 Portfolio -->
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <strong>{{ __('SOBRE NOSOTROS') }}</strong>
                            </a>
                        </li>

                        <!-- Menu item 5 Docs-->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="docMenu" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <strong>{{ __('AYUDA') }}</strong>
                            </a>
                            <ul class="dropdown-menu pb-0 dropdown-menu-sm-end" data-bs-popper="none"
                                aria-labelledby="docMenu">
                                <li>
                                    <a class="dropdown-item ps-4" href="https://support.webestica.com/" target="_blank">
                                        <div class="d-flex">
                                            <i class="display-8 mt-n1 me-3 text-primary fa-fw bi bi-headset
                                                "></i>
                                            <div>
                                                <h6 class="my-0">{{ __('Centro de ayuda') }}<i
                                                        class="fas fa-external-link-square-alt text-body ms-2"></i>
                                                </h6>
                                                <p class="small text-body d-none d-md-block mb-0">
                                                    {{ __('Ingresa a nuestro portal de ayuda por si necesitas algún
                                                    soporte') }}
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="dropdown-divider"></li>
                                <li>
                                    <div class="dropdown-item ps-4">
                                        <div class="d-flex "> {{-- mb-2 --}}
                                            <i
                                                class="display-8 mt-n1 me-3 text-primary fa-fw bi bi-question-circle"></i>
                                            <div>
                                                <h6 class="my-0">{{ __('Preguntas frecuentes') }}</h6>
                                                <p class="small text-body d-none d-md-block">
                                                    {{ __('Sal de cualquier duda que se te presente') }}
                                                </p>
                                                {{-- <a class="dropdown-item px-0"
                                                    href="docs/index.html">Introduction</a>
                                                <a class="dropdown-item px-0" href="docs/index.html">Directory
                                                    structure</a>
                                                <a class="dropdown-item px-0" href="docs/gulp.html">Gulp</a>
                                                <a class="dropdown-item px-0"
                                                    href="docs/customization.html">Customization</a>
                                                <a class="dropdown-item px-0" href="docs/color-scheme.html">Color
                                                    Scheme</a>
                                                <a class="dropdown-item px-0" href="docs/changelog.html">changelog</a>
                                                --}}
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="bg-light pt-3">
                                    <a class="dropdown-item ps-4" href="https://getbootstrap.com/docs" target="_blank">
                                        <div class="d-flex">
                                            <i class="display-8 mt-n2 me-3 text-primary fa-fw bi bi-bootstrap"></i>
                                            <div>
                                                <h6 class="my-0">{{ __('Documentación') }}<i
                                                        class="fas fa-external-link-square-alt text-body ms-2"></i>
                                                </h6>
                                                <p class="small text-body d-none d-md-block">
                                                    {{ __('Revisa la documentación de nuestras plataformas, servicio o
                                                    productos') }}
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- Main Menu END -->

                <!-- Nav right START -->
                <div class="nav flex-nowrap align-items-center bg-primary-end position-relative ps-4 ms-4">
                    <!-- Call -->
                    <div class="nav-item d-none d-lg-flex">
                        <div class="flex-row mb-n1">
                            <span class="me-2 text-white">{{ __('Llámanos') }}:</span>
                            <a href="#" class="text-white mb-0 h6">+(315) 503-0401</a>
                        </div>
                    </div>
                    <!-- Nav Search Opener-->
                    <div class="nav-item">
                        <a class="nav-link text-white ms-2" data-bs-toggle="collapse" href="javascript:void(0)"
                            data-bs-target="#search-open">
                            <i class="bi bi-search display-9 "> </i>
                        </a>
                    </div>
                    <!-- Nav Button -->
                    <div class="nav-item d-none d-xl-block">
                        <a href="#" class="btn btn-sm btn-dark mb-0 mx-2">
                            <strong>{{ __('Contactenos') }}</strong>
                        </a>
                    </div>
                    <!-- Nav side Opener -->
                    <div class="nav-item">
                        <a class="nav-link text-white pe-0" data-bs-toggle="offcanvas" href="#offcanvasEnd"
                            role="button" aria-controls="offcanvasEnd">
                            <i class="bi bi-text-right rtl-flip display-8" data-bs-target="#offcanvasEnd"></i>
                        </a>
                    </div>
                </div>
                <!-- Nav right END -->
            </div>
        </nav>
        <!-- Logo Nav END -->
    </header>
</div>
