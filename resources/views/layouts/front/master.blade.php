<!DOCTYPE html>
<html lang="en">
<head>

    @include('layouts.front._head')

</head>

<body class="common-home res layout-home1">



<div id="wrapper" class="wrapper-full banners-effect-7">

    <!-- Header Container  -->
    <header id="header" class=" variantleft type_1">

        @include('layouts.front._header')

    </header>
    <!-- //Header Container  -->

    <!-- Block Spotlight1  -->
    @yield('spotlight-1')
    <!-- //Block Spotlight1  -->

<!-- Main Container  -->
    <div class="main-container container">

        @yield('content')

    </div>

</div>
<!-- //Main Container -->
<!-- Block Spotlight3  -->
@yield('spotlight-2')

<!-- //Block Spotlight3  -->
<script type="text/javascript"><!--
    var $typeheader = 'header-home1';
    //-->
</script>

<!-- Footer Container -->
<footer class="footer-container type_footer1">
    @include('layouts.front._footer')
</footer>
<!-- //end Footer Container -->


<!-- Include Libs & Plugins
	============================================ -->
@include('layouts.front._scripts')

</body>
</html>
