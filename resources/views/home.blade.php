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
    <livewire:main-banner>
        <!-- Main banner END-->

        <!-- About START -->
        <livewire:about-one>
            <!-- About END -->

            <!-- Services START -->
            <livewire:service-one>
                <!-- Services END -->

                <!-- Portfolio START -->
                <livewire:portafolio-one>
                    <!-- Portfolio END -->

                    <!-- Work Process START -->
                    <livewire:work-process>
                        <!-- Work Process END -->

                        <!-- Blog START -->
                        <livewire:blog-fragment>
                            <!-- Blog END -->

                            <!-- About Fun fact START -->
                            <livewire:about-fun>
                                <!-- About Fun fact END -->

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
