
@include('theme.parts.head')

<body>
  <!--================Header Menu Area =================-->
  @include('theme.parts.header')

  <!--================Header Menu Area =================-->


    <!--================Hero Banner start =================-->
    @include('theme.parts.hero')
    <!--================Hero Banner end =================-->


    @yield('content')





  <!--================ Start Footer Area =================-->
  @include('theme.parts.footer')
  <!--================ End Footer Area =================-->
  @include('theme.parts.scripts')

</body>
</html>
