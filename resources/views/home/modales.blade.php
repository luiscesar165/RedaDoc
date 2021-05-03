<!-- Modal de contratar Ahora-->
<div class="modal fade" id="modal-contratar-ahora" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{route('Lead.store')}}" method="post" id='form-contratar'> 
                @csrf
                @method('post')
                <input type="hidden" name="funnel_type" value="contratar-ahora">
                <div class="modal-header">
                    <h5 class="modal-title">Contratar ahora</h5>
                </div>
                <div class="modal-body py-0">
                    <p class="text-pretty-content text-dark">
                        Dejanos tu correo y nosotros te contactaremos lo mas pronto posible...
                    </p>
                  <div class="form-group">
                    <label for="">Nombre</label>
                    <input type="text"
                      class="form-control" name="nombre" id="nombre"  placeholder="Nombre" required>
                  </div>
                  <div class="form-group">
                    <label for="">Correo</label>
                    <input type="email"
                      class="form-control" name="correo" id="correo"  placeholder="Correo" required>
                  </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Contratar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal de Agendar cita-->
<div class="modal fade" id="modal-agendar-cita" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{route('Lead.store')}}" method="post" id='form-agendar'> 
                @csrf
                @method('post')
            <input type="hidden" name="funnel_type" value="agendar-cita">
            <div class="modal-header">
                <h5 class="modal-title">Agenda una cita</h5>
            </div>
            <div class="modal-body py-0">
                <p class="text-pretty-content text-dark">
                    Dejanos tu correo y una Hora sugerida. Nosotros te contactaremos lo mas pronto posible...
                </p>
                    <div class="form-group">
                        <label for="">Nombre</label>
                        <input type="text"
                          class="form-control" name="nombre" id="nombre"  placeholder="Nombre" required>
                      </div>
                      <div class="form-group">
                        <label for="">Correo</label>
                        <input type="email"
                          class="form-control"  name="correo" id="correo"  placeholder="Correo" required>
                      </div>
                      <div class="form-group">
                        <label for="">Horario sugerido</label>
                        <input type="text"
                          class="form-control"  name="hora" id="hora"  placeholder="Ej:Lunes, 8:00 AM - Mexico" required>
                      </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Agendar</button>
                    </div>
                </form>
        </div>
    </div>
</div>


<!-- Modal de Consultar-->
<div class="modal fade" id="modal-consultar" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{route('Lead.store')}}" method="post" id='form-consultar'> 
                @csrf
                @method('post')
            <input type="hidden" name="funnel_type" value="consultar">
            <div class="modal-header">
                <h5 class="modal-title">Consultar</h5>
            </div>
            <div class="modal-body py-0">
                <p class="text-pretty-content text-dark">
                    Dejanos tu correo y nosotros te contactaremos lo mas pronto posible...
                </p>
                <div class="form-group">
                    <label for="">Nombre</label>
                    <input type="text"
                      class="form-control" name="nombre" id="nombre"  placeholder="Nombre" required>
                  </div>
                  <div class="form-group">
                    <label for="">Correo</label>
                    <input type="email"
                      class="form-control"  name="correo" id="correo"  placeholder="Correo" required>
                  </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Consultar</button>
                </div>
            </form>
        </div>
    </div>
</div>