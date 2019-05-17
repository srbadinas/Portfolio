<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Bootstrap -->
{{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> --}}
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>

@yield('scripts')

<script>
    $(document).ready(function() {
        $('#navigation-small-trigger-button').on('click', function() {
            $('.navigation-small').show();
            $('.overlay').addClass('active');
        });

        $('.overlay').on('click', function() {
            $('.navigation-small').hide();
            $('.overlay').removeClass('active');
        });
    });
</script>

