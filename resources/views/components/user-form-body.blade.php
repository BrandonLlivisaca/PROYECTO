@csrf 
    <div class="row">
            <div class="col-sm-12">
                <label for="InputName" class="form-label">* Usuario</label>
                <input type="text" class="form-control" id="InputName" name="name"  value="{{ old('name')}}"></input>
            </div>

            <div class="col-sm-12">
                <label for="InputEmail" class="form-label">* Email</label>
                <input type="email" class="form-control" id="InputEmail" name="email"  value="{{ old('email')}}"></input>
            </div>

            <div class="col-sm-12">
                <label for="InputPassword" class="form-label">* Password</label>
                <input type="password" class="form-control" id="InputPassword" name="password"  value="{{ old('password')}}"></input>
            </div>


            
            <div class="col-sm-4">
                <label for="SelectRol" class="form-label">* Rol</label>
                <select name="role_id" id="SelectRol" class="form-select">
                    {{-- @for($i = 0; $i < count($roles); $i++) --}}
                        {{-- <option value="{{ $i }}" @selected( old('role_id'))>{{ $roles[$i] }}</option> --}}
                        <option value="ADMIN">ADMIN</option>
                        <option value="PUBLICADOR">PUBLICADOR</option>
                            <option value="VISITANTE">VISITANTE</option>
                   {{--  @endfor --}}
                </select>
            </div>


            {{-- <div class="col-sm-4">
                <div class="form-check">
                    <input type="checkbox" name="finalizado" id="InputFinalizada" class="form-check-input" value='1' @checked( old('finalizada', $tarea -> finalizada) )>
                    <label for="InputFinalizada" class="form-check-label">Finalizada</label>
                </div>
            </div>

            <div class="col-sm-4">
                <label for="SelectUrgencia" class="form-label">* Urgencia</label>
                <select name="urgencia" id="SelectUrgencia" class="form-select">
                    @for($i = 0; $i < count($urgencias); $i++)
                        <option value="{{ $i }}" @selected( old('urgencia', $tarea->urgencia))>{{ $urgencias[$i] }}</option>
                        
                    @endfor
                </select>
                <script>
                    document.getElementById('SelectUrgecia').value = "{{ old('urgencia') }}";
                </script>
            </div>

            <div class="col-sm-4">
                <label for="InputFechaLimite" class="form-label">* Fecha Limite</label>
                <input type="datetime-local" name="fecha_limite" id="InputFechaLimite" class="form-control" value="{{ old('fecha_limite',  $tarea -> fecha_limite->format('Y-m-d\TH:i')) }}">
                 --}}{{--                 <input type="datetime-local" name="fecha_limite" id="InputFechaLimite" class="form-control" value="{{ old('fecha_limite', is_null($tarea->fecha_limite) ? '' : $tarea -> fecha_limite->format('Y-m-d\TH:i')) }} ">
 --}}            
            {{-- </div>

            <div class="col-sm-12">
                <label for="TextAreaDescripcion" class="form-label">Descripcion</label>
                <textarea name="descripcion" id="TextAreaDescripcion" cols="30" rows="10" class="form-control">{{ old('descripcion', $tarea->descripcion) }}</textarea>
            </div>
 --}}
            <div class="col-sm-12 text-end my-2">
                <button type="submit" class="btn btn-primary">
                    Guardar
                </button>
            </div>
        </div>
</div>