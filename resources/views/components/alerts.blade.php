@if ($errors->any())
    <div id="message" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
        <div class="modal-dialog" id="centrar" role="document">
            <div class="modal-content">
                <div class="modal-header danger-color white-text" id="centrar">
                    <div>
                        <h4 class="modal-title mplus"><i class="fas fa-exclamation-circle"></i> Ups! algo ha salido mal</h4>
                    </div>                    
                </div>
                <div class="modal-body pb-0" id="centrar">
                    <div>

                    <div>
                        <p>El formulario posee los siguientes errores:</p>                        
                    </div>  
                    <div>
                        <ul>
                            @foreach($errors->all() as $error)
                                <li class="my-0">{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>

                    </div>                                      
                </div>
                <div class="modal-footer py-2" id="centrar">
                    <div>
                        <button type="button" class="btn btn-rounded danger-color white-text" data-dismiss="modal">Cerrar</button>
                    </div>                    
                </div>
            </div>
        </div>
    </div>
@endif
@if(session()->has('message'))
    <div id="message" class="modal fade right" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
        <div class="modal-dialog modal-side modal-top-right" role="document">
            <div class="modal-content">
                <div class="modal-header success-color">
                    <h4 class="modal-title white-text"><i class="fas fa-check-circle"></i> {{ session()->get('message.title') }}</h4>
                </div>
                <div class="modal-body">
                    <p>{{ session()->get('message.body') }}</p>
                </div>
                <div class="modal-footer">            
                    <button type="button" class="btn success-color white-text" data-dismiss="modal">Aceptar</button>
                </div>
            </div>
        </div>
    </div>
@endif