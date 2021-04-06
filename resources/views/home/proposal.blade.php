<section class="bg-proposal pb-0 pt-5">
    <div class="container px-2" >
        <div class="row">
            <div class="col">
                <h2 class="text-pretty-title">
                    ¿Tienes una página web, pero sin contenido y pocas conversiones? 
                </h2>
                <p class="text-pretty-content text-dark">Crear contenido para la web de salud Para las web de salud puede ser complejo por dos razones. Existen términos o palabras que no todos manejan y dos verificar que la información sea real.</p>
                <p class="text-pretty-content text-dark">A esto se le suma que dependiendo del público objetivo (pacientes o personal de salud) la terminología y el tono va a variar.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <h3 class="text-pretty-title">Ya tengo contenido y visitas pero no convierto</h3>
                <p class="text-pretty-content text-dark"> Está generando contenido pero el mensaje no está llegando a tu cliente. Aquí es donde entra la magia del copywriting o redacción persuasiva.</p>
            </div>
            <div class="col-md-4 text-center">
                <img src="{{ asset('/imagen/svg/wordpress.svg') }}" alt="wordpress">
            </div>
        </div>
    </div>
</section>
{{-- cta --}}
<section class="bg-proposal pb-0 pt-5" >
    <div class="container p-3">
        <div class="row cta-agenda p-3">
            <div class="col-md-8">
                <h4>Pero tranquilo que todo tiene solución...</h4>
                <p>Agenda una cita para asesoría o para que nosotros nos encargamos del contenido. </p>
            </div>
            <div class="col-md-4">
                  <!-- Button trigger modal -->
                <button type="button"  data-toggle="modal" data-target="#modal-agendar-cita">
                    Agendar
                </button>
            </div>
        </div>
    </div>
</section>

{{-- cta dirigidos --}}
<section class="bg-proposal  pb-2 pt-5" id="servicios">
    <div class="container">
        <div class="row p-2 ">
            <div class="col text-center">
                <h2 class="text-pretty-title">Tus textos pueden ser creativos, pero nosotros haremos que ellos empiecen a generar ingresos</h2>
            </div>
        </div>
        <div class="row ">
            {{-- card CTA --}}
           <div class="col-md-6">
               <div class="card">
                   <div class="title-card">
                       <h5>Quiero crear contenido para médicos</h5>
                       <p>Entre colegas la información se transmite mejor. Deja que nosotros nos comuniquemos por tu empresa. </p>
                   </div>
                   <div class="boton-card">
                    <!-- Button trigger modal -->
                    <button type="button" data-toggle="modal" data-target="#modal-consultar">
                        Consultar
                    </button>
                   </div>
                   <div class="icono-card">
                       <img src="/imagen/svg/cta-medicos.svg" alt="cta medicos">
                   </div>
               </div>
           </div>    
            {{-- card CTA --}}
            <div class="col-md-6">
                <div class="card">
                    <div class="title-card">
                        <h5>Quiero crear contenido para pacientes</h5>
                        <p>Un paciente que entienda lo que tiene que hacer tomará decisiones más acertadas. 
                            Nuestra experiencia tratando pacientes a diario, nos permite transmitir un mensaje claro y confiable que impulsará tus ventas.</p>
                    </div>
                    <div class="boton-card">
                          <!-- Button trigger modal -->
                        <button type="button" data-toggle="modal" data-target="#modal-consultar">
                            Consultar
                        </button>
                    </div>
                    <div class="icono-card">
                        <img src="/imagen/svg/cta-pacientes.svg" alt="cta pacientes">
                    </div>
                </div>
            </div>    
        </div>        
    </div>
</section>