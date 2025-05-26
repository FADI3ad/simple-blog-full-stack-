<!DOCTYPE html>
<html lang="en">
    @include('theme.parts.head')

<body>
  <!--================Header Menu Area =================-->
  @include('theme.parts.header')

  <!--================Header Menu Area =================-->

  <main class="site-main">
    <!--================Hero Banner start =================-->
    @include('theme.parts.hero')
    <!--================Hero Banner end =================-->


    @yield('content')



  </main>

  <!--================ Start Footer Area =================-->
  @include('theme.parts.footer')
  <!--================ End Footer Area =================-->
  @include('theme.parts.scripts')


</body>
</html>
