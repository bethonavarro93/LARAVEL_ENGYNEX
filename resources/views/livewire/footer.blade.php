<div>
    <footer class="bg-dark pt-7 pattern-overlay-6">
        <div class="container">
            <!-- NewsLetter -->
            <div class="row pb-5 justify-content-center">
                <div class="col-md-7">
                    <h3 class="text-white text-center">{{ __('Suscríbase a nuestro') }} newsletter o siganos en nuestras
                        redes sociales como @engynex para conocer las
                        últimas novedades y noticias</h3>
                    <form class="p-0 px-xl-8 my-4">
                        <div class="input-group">
                            <input class="form-control border-0 h-auto" type="email"
                                placeholder="{{ __('Su dirección de correo electrónico') }}">
                            <button type="button" class="btn btn-primary btn-lg mb-0">{{ __('Suscribir') }}</button>
                        </div>
                        <div class="text-center mt-3"><span class="text-danger">*</span> {{ __('No compartiremos su
                            información personal con nadie') }}</div>
                    </form>
                </div>
            </div>
            <!-- Divider -->
            <div class="divider-light opacity-1"></div>
            <!-- Clients -->
            <div class="row py-4 justify-content-center">
                <div class="col-12">
                    <div class="tiny-slider">
                        <div class="tiny-slider-inner" data-arrow="false" data-dots="false" data-gutter="80"
                            data-items-xl="6" data-items-lg="5" data-items-md="5" data-items-sm="4" data-items-xs="2"
                            data-autoplay="3800">
                            <!-- Slide items START -->
                            <div class="item"> <img class="opacity-5" src="{{ asset('images/clients/light/01.svg') }}"
                                    alt="">
                            </div>
                            <div class="item"> <img class="opacity-5" src="{{ asset('images/clients/light/02.svg') }}"
                                    alt="">
                            </div>
                            <div class="item"> <img class="opacity-5" src="{{ asset('images/clients/light/03.svg') }}"
                                    alt="">
                            </div>
                            <div class="item"> <img class="opacity-5" src="{{ asset('images/clients/light/04.svg') }}"
                                    alt="">
                            </div>
                            <div class="item"> <img class="opacity-5" src="{{ asset('images/clients/light/05.svg') }}"
                                    alt="">
                            </div>
                            <div class="item"> <img class="opacity-5" src="{{ asset('images/clients/light/06.svg') }}"
                                    alt="">
                            </div>
                            <div class="item"> <img class="opacity-5" src="{{ asset('images/clients/light/07.svg') }}"
                                    alt="">
                            </div>
                            <!-- Slide items END -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Divider -->
            <div class="divider-light opacity-1"></div>
            <!-- Main Footer -->
            <div class="row pb-4 pt-6">
                <!-- Footer widget item -->
                <div class="col-md-4 mb-4">

                    <img src="{{ asset('images/logo-white.png') }}" alt="logo de engynex"
                        style="width: 20em; margin-bottom:2em;">

                    <p>
                        {{ __('Somos una empresa tecnológica que ofrece soluciones integrales la cual se basa en la
                        innovación y la tecnología para la creación de productos y servicios que satisfagan las
                        necesidades de nuestros clientes.') }}
                    </p>
                    <!-- Social icons -->
                    <ul class="list-unstyled list-group-inline display-9">
                        <li> <a class="text-facebook me-2" href="#"><i class="fab fa-facebook"></i></a> </li>
                        <li> <a class="text-instagram mx-2" href="#"><i class="fab fa-instagram"></i></a> </li>
                        <li> <a class="text-linkedin mx-2" href="#"><i class="fab fa-linkedin"></i></a> </li>
                    </ul>
                    <div class="my-4">© @php echo date('Y'); @endphp <a href="https://www.engynex.com/"
                            target="_blank">engynex</a>. All
                        rights reserved
                    </div>
                </div>
                <!-- Footer widget item -->
                <div class="col-sm-6 col-md-2 offset-lg-1 mb-5">
                    <h5 class="mb-4 text-white">{{ __('Acerca de') }}</h5>
                    <ul class="nav flex-column text-primary-hover">
                        <li class="nav-item"><a class="nav-link pt-0" href="#">{{ __('Sobre engynex') }}</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">{{ __('Términos & condiciones') }}</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">{{ __('Políticas de privacidad') }}</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">{{ __('Preguntas frecuentes') }}</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">{{ __('Sugerencias e ideas') }}</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">{{ __('Quejas y reclamos') }}</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">{{ __('Gestión de incidencia') }}</a></li>
                    </ul>
                </div>
                <!-- Footer widget item -->
                <div class="col-sm-6 col-md-2 mb-5">
                    <h5 class="mb-4 text-white">{{ __('Descubrir') }}</h5>
                    <ul class="nav flex-column text-primary-hover">
                        <li class="nav-item"><a class="nav-link pt-0" href="#">{{ __('Programa de revendedor') }}</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#">{{ __('Trabaja con nosotros') }}</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">{{ __('Nuestro blog') }}</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">{{ __('Herramientas para desarrollador')
                                }}</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">{{ __('Buscador de dominio web') }}</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">{{ __('Mapa del sitio') }}</a></li>
                    </ul>
                </div>
                <!-- Footer widget item -->
                <div class="col-md-3">
                    <h5 class="mb-3 text-white">{{ __('Contactenos') }}</h5>
                    <ul class="nav flex-column text-primary-hover">
                        <li class="nav-item"><a class="nav-link text-primary-hover" href="#">{{ __('+57 (315) 503-0401')
                                }}</a></li>
                        <li class="nav-item"><a class="nav-link text-primary-hover" href="#">{{
                                __('contacto@engynex.com') }}</a></li>
                        <li class="nav-item"><a class="nav-link text-primary-hover" href="#">{{ __('Centro de ayuda')
                                }}</a></li>
                    </ul>
                    {{-- <address>1421 Coburn Hollow Road Metamora, Near Center Point, IL 61548.</address> --}}

                    <h5 class="mt-3 mb-3 text-white">{{ __('Horarios de atención') }}</h5>
                    <ul class="nav flex-column text-primary-hover">
                        <li class="nav-item">{{ __('Lunes a Viernes')}} : {{ __('7:30 am - 6:00 pm')}}</li>
                        <li class="nav-item">{{ __('Sábados')}} : {{ __('8:30 am - 5:00 pm') }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</div>
