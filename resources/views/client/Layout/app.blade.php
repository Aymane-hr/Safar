<!doctype html>
<html class="no-js" lang="en">

<!--   03:20:39 GMT -->
@include("client.Layout.head")

<body>
   @include("client.Layout.header")
    <!--header area end-->


    <!--slider area start-->
    @include("client.Layout.main")
    <!--slider area end-->

    <!--footer area start-->
    @include("client.Layout.footer")
    <!--footer area end-->
<!-- JS
============================================ -->


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- Plugins JS -->
<script src="{{asset('assets/js/plugins.js')  }}"></script>

<!-- Main JS -->
<script src="{{asset('assets/js/main.js')}}"></script>



</body>

<!--   03:22:07 GMT -->
</html>
