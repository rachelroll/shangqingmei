@if (session('success'))
    <div class="container">
        <div class="alert alert-success alert-dismissible" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="width: 24px; position: absolute; top: -2px; right: 7px">
                <span aria-hidden="true">x</span>
            </button>
        </div>
    </div>
@elseif(session('error'))
    <div class="container">
        <div class="alert alert-warning" role="alert">
            {{ session('error') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="width: 24px; position: absolute; top: -2px; right: 7px">
                <span aria-hidden="true">x</span>
            </button>
        </div>
    </div>
@endif

<script>
    $(function () {
        $('.close').click(function () {
            $('.container').css('display','none');
        });
    });
</script>
