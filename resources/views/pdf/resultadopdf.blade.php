<!DOCTYPE>
<html>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reporte</title>
    <style>
        body {
       
        font-family: Arial, sans-serif;
        font-size: 14px;
        
        }
        #datos{
        float: left;
        margin-top: 0%;
        margin-left: 2%;
        margin-right: 2%;
        
        }
        #encabezado{
        text-align: left;
        margin-left: 0%;
        margin-right: 0%;
        font-size: 13px;
        }
        #encabezadoderecho{
            text-align: right;
        margin-left: 0%;
        margin-right: 0%;
        font-size: 13px;   
        }
        #encabezado1{
        text-align: right;
        margin-left: 0%;
        margin-right: 0%;
        font-size: 13px;
        }
        
        section{
          text-align: left;
        }
        #cliente{
        text-align: left;
        }
        #facliente{
        width: 40%;
        border-collapse: collapse;
        border-spacing: 0;
        margin-bottom: 15px;
        }
        #fac, #fv, #fa{
        color: #FFFFFF;
        font-size: 15px;
        }
        #facliente thead{
        padding: 20px;
        /* background: #2183E3; */
        text-align: left;
        border-bottom: 10px solid #FFFFFF;
        }
       
        #facarticulo{
        width: 100%;
        border-collapse: collapse;
        border-spacing: 0;
        margin-bottom: 15px;
        border:left;
        text-align: center;
        }
        #facarticulo thead{
        padding: 20px;
        background: #000000;
        text-align: center;
        border-bottom: 1px solid #FFFFFF;
        }
        #centro{
        text-align: center;
        margin-left: 12%;
        }
        .Titulo{
          text-align: center;
        }
        #total{
          color :black ;
          text-emphasis: solid;
        }
        #firmaizq{
            text-align: left;
            margin-left: 10%;
        }
        #firmcont{
            text-align: left;
            margin-left: 18%;
        }
        #firmadm{
        text-align: center;
        margin-left: 14%;
        }
        #subrayado{
            text-decoration: underline;
        }
    </style>
    <body>
        <header>
           
            <div id="datos">
                <p id="encabezado">
                          <img src="http://creadictivo.com/wp-content/uploads/2018/05/Escudo-de-Bolivia-Nuevo.jpg" width="80" class="" alt="">
                </p>     
            </div>
            <p id="centro">    
          
                Departamento {{departamento(provincia(municipio(establecimiento($orden->establecimiento_id)->municipio_id)->provincia_id)->departamento_id)->nombre}}
                <br>
                Provincia  {{provincia(municipio(establecimiento($orden->establecimiento_id)->municipio_id)->provincia_id)->nombre}}
                <br>  
                Municipio   {{municipio(establecimiento($orden->establecimiento_id)->municipio_id)->nombre}}
                <br> 
                Establecimiento   {{establecimiento($orden->establecimiento_id)->nombre}}
        
            </p>
          
            <div id="datos">
            <p id="encabezadoderecho">
                <img src="https://es.news-front.info/wp-content/uploads/2019/03/Bolivia-salud-SUS.jpg" width="80" class="" alt="">
      
            </p>
        </div>

            <h2 class="Titulo">RESULTADOS DE ANALISIS</h2>
            <h4 class="Titulo"></h4>
        </header>
        <br>
        <section>
            <div>
                <table id="facliente">
                    <thead>
                        <tr>
                            <th>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <br>
                        <br>
                        <br>
                        <br>
                        
                            <th><p id="cliente">Datos del Paciente : <br>
                               Nombre: {{paciente($orden->paciente_id)->nombre}} <br>
                               Paterno: {{paciente($orden->paciente_id)->paterno}} <br>
                               Materno: {{paciente($orden->paciente_id)->materno}} <br>
                                Edad: {{paciente($orden->paciente_id)->edad}} <br>
                                Fecha Nacimiento: {{paciente($orden->paciente_id)->fecha_nacimiento}} <br>
                                Sexo: {{paciente($orden->paciente_id)->sexo}} <br>
                                Telefono: {{paciente($orden->paciente_id)->telefono}} <br>
                                CI: {{paciente($orden->paciente_id)->ci}} <br>
                               
                               {{--     {{ $comprobante->canceladoa }}<br>
                              POR CONCEPTO DE :<br>
                              {{ $comprobante->glosa }} --}}
                            </p></th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>


        <section>
            <div>
                <table id="facarticulo" style="border: solid 1px rgb(0, 0, 0)">
                    <thead >
                        <tr id="fa">
                            <th>#</th>
                            <th>Servicio</th>
                            <th>Examen</th>
                            <th>Referencia</th>
                            <th>Resultado</th>
                           
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($collecion as $detalle)
                        <tr>
                          <td>{{$detalle->orden_id}}</td>
                          <td>{{$detalle->servicio_nombre}}</td>
                          <td>{{$detalle->examen_nombre }}</td>
                          <td>{{$detalle->rango_ini }}
                          --{{$detalle->rango_fin }}</td>
                          <td>{{$detalle->resultado }}</td>
                          
                          {{--
                               <td>{{$detalle->codigo}}</td>
                            <td><b id="subrayado">{{CuentaPlane($detalle->idCuentaPlan)->descripcion}}</b><br><b>{{$detalle->glosa}}</b></td>
                            <td>{{$detalle->debe}}</td>
                            <td>{{$detalle->haber}}</td>
                            <td>{{montoSus($comprobante->tc,$detalle->debe)}}</td>
                            <td>{{montoSus($comprobante->tc,$detalle->haber)}}</td> --}}
                            
                        </tr>
                    @endforeach
                    <br>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th></th>
                            
                           {{--  <td class="total">TOTALES : </td> --}}
               {{--              <td>{{detallecomprobante($comprobante->idComprobante)['total_debes']}}</td>
                            <td>{{detallecomprobante($comprobante->idComprobante)['total_habers']}}</td>
                            <td>{{montoSus($comprobante->tc,detallecomprobante($comprobante->idComprobante)['total_debes'])}}</td>
                            <td>{{montoSus($comprobante->tc,detallecomprobante($comprobante->idComprobante)['total_habers'])}}</td>
                  --}}      {{--  </tr> --}}
                    </tfoot>
                </table>
            </div>
        </section>
        <br>
        <br>
        <footer>
            <div id="cliente">
         {{--        <p><b>SON :  {{convertir(detallecomprobante($comprobante->idComprobante)['total_debes'])}} 00/100 BOLIVIANOS</b></p>
          --}}   </div>
        </footer>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
       
        <footer>
            <div id="cliente">
                <p><br>_____________________</b>
                    <br><h4 id="datos">Doctor(a) {{medico($orden->medico_id)->nombre}}
                     {{medico($orden->medico_id)->paterno}}
                    
                    
                    </h4></b>
                </p>
            </div>
        </footer>
       
            
            
    </body>
</html>
