<!-- Para mostrar los errores -->
@if (count($errors) > 0)
        <div class="col l12">
            <div class="card indigo lighten-5">
                <div class="card-content">
                <span class="card-title">@lang('register.error')</span>
                    <ul>
                        @foreach ($errors->all() as $message)
                            <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
@endif
