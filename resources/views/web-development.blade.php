@extends('layouts.app')

@section('content')
    <!-- Pre-loader -->
    <livewire:preloader />
    <!-- Pre-loader END -->

    <!-- Offcanvas end START -->
    <livewire:offcanvas />
    <!-- Offcanvas end END -->

    <!-- Search START -->
    <livewire:search />
    <!-- Search END -->

    <!-- Header START -->
    <livewire:header />
    <!-- Header END -->

    <!-- **************** MAIN CONTENT START **************** -->
    <main>

        <!-- Main Banner START-->
        <livewire:main-banner-typed>
            <!-- Main banner END-->

            <!-- About START -->
            <livewire:about-index7>
                <!-- About END -->

                <!-- Como lo hacemos START -->
                <livewire:how-do-dev-index>
                <!-- Como lo hacemos END -->

                <livewire:services-index6>

                    <!-- Gana dinero con nosotros START -->
                    <livewire:actionbox-index5>
                        <!-- Gana dinero con nosotros END -->

                        <!-- Blog START -->
                        <livewire:blog-fragment>
                            <!-- Blog END -->


    </main>
    <!-- **************** MAIN CONTENT END **************** -->

    <!-- Footer START -->
    <livewire:footer>
        <!-- Footer END -->

        <!-- Custom cursor -->
        <livewire:custom-cursor>
            <!-- Custom cursor END -->

            <!-- Back to top -->
            <livewire:backtotop>
                <!-- Back to top END -->
            @endsection
