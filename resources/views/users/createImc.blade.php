@extends('layouts.master')

@section('content')
        <!-- Register -->
        <div class="col l5 push-l3">
            <div class="card">
                <div class="card-content">
                    <span class="card-title">@lang('user.imcTitle')</span>

                    <div class="row">
                        <form class="col l12" method="POST" action="{{ route('register') }}">
                            {{ csrf_field() }}

                            <!-- weight -->
                            <div class="input-field col l12 form-group{{ $errors->has('weight') ? ' has-error' : '' }}">
                                <i class="material-icons prefix">account_box</i>
                                <input id="weight" name="weight" type="number" class="validate" value="{{ old('weight') }}" required>
                                <label for="weight">@lang('user.weight')</label>
                            </div>

                            <!-- height -->
                            <div class="input-field col l12 form-group{{ $errors->has('height') ? ' has-error' : '' }}">
                                <i class="material-icons prefix">account_box</i>
                                <input id="height" name="height" type="number" class="validate" value="{{ old('height') }}" required>
                                <label for="height">@lang('user.height')</label>
                            </div>

                            <!-- Botones Register -->
                            <button class="btn waves-effect waves-light " type="submit" name="action" id="submitForm">@lang('register.submit')</button>
                        </form>
                    </div>
            
                </div>
            </div>
        </div>
@endsection

@section('script')


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script type="text/javascript">

   $(document).ready(function() {
        $("#submitForm").click(function(e){
            e.preventDefault();

            var _token = $("input[name='_token']").val();
            var weight = $("input[name='weight']").val();
            var height = $("input[name='height']").val();



            $.ajax({
                url: "/save",
                type:'POST',
                data: {
                    _token:_token, 
                    weight:weight, 
                    height:height
                },
                success: function(data) {
                    Swal.fire({
                        title: 'Success',
                        text: "BMI calculated successfully, you will be redirect to historicals",
                        confirmButtonText: 'Ok',
                        icon: 'success'
                        }).then((result) => {
                        if (result.value) {
                            window.location.href = '/historical-imc';
                        }
                    })
                }
            });


        }); 

       /** 
        * Muestra los mensajes de error
        * @param msg son los mensajes de error
       */
        function printErrorMsg (msg) {
            $(".print-error-msg").find("ul").html('');
            $(".print-error-msg").css('display','block');
            
            $.each( msg, function( key, value ) {
                if( key == 'firstName' ) {
                    
                    $(".print-error-msg").find("ul").append('<li>'+'The first name is required'+'</li>');
                }
                if( key == 'email' && value == 'validation.required') {
                    
                    $(".print-error-msg").find("ul").append('<li>'+'The email is required'+'</li>');
                } else if (  key == 'email' && value == 'validation.email' ){
                    
                    $(".print-error-msg").find("ul").append('<li>'+'The email must be a valid email address'+'</li>');
                }
                
                if( key == 'g-recaptcha-response' ) {
                    
                    $(".print-error-msg").find("ul").append('<li>'+'The reCaptcha is required'+'</li>');
                }
                
            });
        }
    });

</script>

@endsection