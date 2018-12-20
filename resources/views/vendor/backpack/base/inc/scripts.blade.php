
<script src="{{ mix('themes/rocker/js/jquery.min.js') }}"></script>


{{-- <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script>window.jQuery || document.write('<script src="{{ asset('vendor/adminlte') }}/bower_components/jquery/dist/jquery.min.js"><\/script>')</script> --}}

<script src="{{ mix('themes/rocker/js/bootstrap.min.js') }}"></script>
<script src="{{ mix('themes/rocker/js/pace.min.js') }}"></script>
<script src="{{ mix('themes/rocker/js/adminlte.js') }}"></script>
<script src="{{ mix('themes/rocker/js/jquery.slimscroll.min.js') }}"></script>
{{-- <script src="{{ asset('vendor/adminlte') }}/bower_components/fastclick/lib/fastclick.js"></script> --}}

<!-- page script -->
<script type="text/javascript">
    // To make Pace works on Ajax calls
    $(document).ajaxStart(function() { Pace.restart(); });

    // Ajax calls should always have the CSRF token attached to them, otherwise they won't work
    $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

    {{-- Enable deep link to tab --}}
    var activeTab = $('[href="' + location.hash.replace("#", "#tab_") + '"]');
    location.hash && activeTab && activeTab.tab('show');
    $('.nav-tabs a').on('shown.bs.tab', function (e) {
        location.hash = e.target.hash.replace("#tab_", "#");
    });
</script>
