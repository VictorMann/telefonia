<!--[if lt IE 9]>
<script src="../assets/global/plugins/respond.min.js"></script>
<script src="../assets/global/plugins/excanvas.min.js"></script>
<![endif]-->

<!-- BEGIN CORE PLUGINS -->

<script src="{{ asset('/plugins/bootstrap-sweetalert/sweetalert.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('/pages/ui-sweetalert.min.js') }}" type="text/javascript"></script>

<script>

    @if (session('message_ERROR'))
        swal({"title":"Ops","text":"{!! session('message_ERROR') !!}","showConfirmButton":true,"type":"error","html":true});
    @endif

    @if (session('message_SUCCESS'))
        swal({"title":"","text":"{!! session('message_SUCCESS') !!}","showConfirmButton":true,"type":"success","html":true});
    @endif

    @if (session('message_WARNING'))
        swal({"title":"Atenção","text":"{!! session('message_WARNING') !!}","showConfirmButton":true,"type":"warning","html":true});
    @endif

    @if (session('message'))
        swal("{!! session('message') !!}");
    @endif

    function removeRegistro(destino,id) {             
    swal({
      title: "Deseja excluir esse registro?",
      text: "Você não poderá mais recuperar essa informação!",
      type: "warning",
      showCancelButton: true,
      confirmButtonClass: "btn-danger",
      confirmButtonText: "Sim!",
      cancelButtonText: "Não",
      closeOnConfirm: false,
      closeOnCancel: true
    },
    function(isConfirm) {
        if (isConfirm) {
            //alert(destino+id);
            window.location = destino+id;
        }else{
            return false;
        } 
    });
}
</script>