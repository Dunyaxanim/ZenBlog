<!DOCTYPE html>
<html lang="en">

<head>

    @include("front.partials._head")
    <!-- =======================================================
  * Template Name: ZenBlog
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/zenblog-bootstrap-blog-template/
  * Author: BootstrapMade.com
  * License: https:///bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    @include("front.partials._header")

    <main id="main">

    @yield('_content')

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->


    @include("front.partials._footer")

    @include("front.partials._scripts")
</body>
</html>