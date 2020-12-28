<!-- SweetAlert2 -->
<link rel="stylesheet" href="{{asset('plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')}}">

@if(session('success'))
    <div id="success" message="{{session('success')}}"></div>
@endif

<!-- SweetAlert2 -->
<script src="{{asset('plugins/sweetalert2/sweetalert2.min.js')}}"></script>

<script>
    $(function() {
        var Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
        });
        if ($("#success").length) {
            Toast.fire({
                icon: 'success',
                title: $("#success").attr('message')
            })
        }
    })
</script>