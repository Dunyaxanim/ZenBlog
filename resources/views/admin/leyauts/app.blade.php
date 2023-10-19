<!DOCTYPE html>
<html lang="en">
<head>
    @include("admin.partials._head")
    <!-- =======================================================
  * Template Name: ZenBlog
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/zenblog-bootstrap-blog-template/
  * Author: BootstrapMade.com
  * License: https:///bootstrapmade.com/license/
  ======================================================== -->
</head>
<body>
  <div class="wrapper">
    <!-- ======= Header ======= -->
    @include("admin.partials._header")
    @include("admin.partials._aside")
    @yield('_content')
    <!-- ======= Footer ======= -->
    @include("admin.partials._footer")

    @include("admin.partials._scripts") 
  </div>
</body>
</html>