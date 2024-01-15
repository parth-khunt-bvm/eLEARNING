 <!-- JavaScript Libraries -->
 <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
 <script src="{{  asset('frontend/lib/wow/wow.min.js') }}"></script>
 <script src="{{  asset('frontend/lib/easing/easing.min.js') }}"></script>
 <script src="{{  asset('frontend/lib/waypoints/waypoints.min.js') }}"></script>
 <script src="{{  asset('frontend/lib/owlcarousel/owl.carousel.min.js') }}"></script>

 <!-- Template Javascript -->
 <script src="{{  asset('frontend/js/main.js') }}"></script>
<!--end::Page Scripts-->
@if (!empty($pluginjs))
@foreach ($pluginjs as $value)
    <script src="{{ asset('frontend/js/'.$value) }}" type="text/javascript"></script>
@endforeach
@endif


@if (!empty($js))
    @foreach ($js as $value)
        <script src="{{ asset('frontend/js/customjs/'.$value) }}" type="text/javascript"></script>
    @endforeach
@endif

<script>
jQuery(document).ready(function () {
    @if (!empty($funinit))
            @foreach ($funinit as $value)
                {{  $value }}
            @endforeach
    @endif
});
</script>
