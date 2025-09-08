<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Formulario de Seguridad</title>
  <style>
    body {
      margin: 0;
      padding: 2em;
      display: flex;
      justify-content: center;
      background-color: #f4f4f4;
    }
    .a4-container {
      width: 21cm;
      min-height: 29.7cm;
      background: white;
      padding: 2em;
      box-shadow: 0 0 10px rgba(0,0,0,0.2);
      box-sizing: border-box;
    }
    fieldset {
      border: 1px solid #999;
      padding: 1em;
    }
    legend h1 {
      margin: 0;
      font-size: 1.2em;
    }
    label {
      display: block;
      margin-bottom: 0.5em;
    }
  </style>
</head>
<body>
  <fieldset>
    <legend><h1>Formulario de Seguridad</h1></legend>
    <form>

      <!-- CONDICIONES GENERALES -->
      <fieldset>
      <legend>1. CONDICIONES GENERALES</legend>
      <label>Fecha: <input type="date" name="fecha"></label><br>
      <label>Hora: <input type="time" name="hora"></label><br>
      <label>Ciudad: <input type="text" name="ciudad"></label><br>
      <label>Actividad a Realizar:
        <select name="act_1">
          <option value="Revisión e Instalación de Equipos de Medida Semidirecta">Revisión e Instalación de Equipos de Medida Semidirecta</option>
        </select>
      </label><br>
      <label>Número de Evento u Orden de Trabajo: <input type="text" name="numero_evento"></label><br>
      <label>Municipio Donde se Realiza: <input type="text" name="municipio"></label><br>
      <label>Barrio/Vereda: <input type="text" name="barrio_vereda"></label>
      <p>De acuerdo a la actividad a realizar, se debe cumplir con la información solicitada de lo contrario debe verificarse para poder continuar.</p>
      </fieldset><br>
      
      <!-- IDENTIFIQUE EL PROCESO AL CUAL PERTENECE LA ACTIVIDAD A DESARROLLAR -->
      <fieldset>
      <legend>2. IDENTIFIQUE EL PROCESO AL CUAL PERTENECE LA ACTIVIDAD A DESARROLLAR</legend>
      <label>Proceso de Generación 
          <select name="cert_1">
          <option value="">NA</option>
          <option value="SI">SI</option>
          <option value="NO">NO</option>
          </select>
      </label><br>
      <label>Proceso de Distribución - Energizadas 
          <select name="cert_2">
          <option value="">NA</option>
          <option value="SI">SI</option>
          <option value="NO">NO</option>
          </select>
      </label><br>
      <label>Proceso de Distribución - Desenergizadas 
          <select name="cert_3">
          <option value="">NA</option>
          <option value="SI">SI</option>
          <option value="NO">NO</option>
          </select>
      </label><br>
      <label>Proceso de Transmisión 
          <select name="cert_4">
          <option value="">NA</option>
          <option value="SI">SI</option>
          <option value="NO">NO</option>
          </select>
      </label><br>
      <label>Proceso Comercial 
          <select name="cert_5">
          <option value="">NA</option>
          <option value="SI">SI</option>
          <option value="NO">NO</option>
          </select>
      </label><br>
      <label>Área Almacén 
          <select name="cert_6">
          <option value="">NA</option>
          <option value="SI">SI</option>
          <option value="NO">NO</option>
          </select>
      </label><br>
      <label>Otro: 
          <h2>Proyecto PERPE</h2>
      </label>
      <p>El grupo de trabajo debe identificar el proceso al cual pertenece la actividad que se va a desarrollar. Tenga en cuenta que este análisis es para actividades consideradas como CRITICAS, o donde se involucren tareas como: Trabajo en alturas, exposición a energía eléctrica, transporte en vehículos o motocicletas, entre otros.</p>
      </fieldset><br>
      
      <!-- UBICACIÓN DE LOS CIRCUITOS Y EQUIPOS A INTERVENIR -->
      <fieldset>
      <legend>3. UBICACIÓN DE LOS CIRCUITOS Y EQUIPOS A INTERVENIR</legend>
      <p>Solo aplica cuando se plantea realizar una actividad donde se intervienen redes o equipos eléctricos.</p><br>
      <label>Subestación: <input type="text" name="subestacion"></label><br>
      <label>Circuito: <input type="text" name="circuito"></label><br>
      <label>Nodo Transformador: <input type="text" name="nodo_transformador"></label><br>
      <label>Nivel de Tensión: <input type="text" name="nivel_tension"></label><br>
      <label>Número de Cuentas: <input type="text" name="numero_cuentas"></label><br>
      <button type="submit" value="rutograma">Cargar el Diagrama del Circuito</button>
      </fieldset><br>

      <!-- CERTIFICACION DE INFORMACION PRELIMINAR -->
      <fieldset>
      <legend>4. CERTIFICACION DE INFORMACION PRELIMINAR</legend>
      <label>¿Se definió y suministró la cantidad de material, herramientas y equipos de seguridad críticos para el desarrollo del trabajo? 
          <select name="cert_8">
          <option value="">NA</option>
          <option value="SI">SI</option>
          <option value="NO">NO</option>
          </select>
      </label><br>
      <label>¿Se definió, alistó, revisó y verificó el equipo de protección personal y de protección contra caídas necesario para el desarrollo del trabajo? 
          <select name="cert_9">
          <option value="">NA</option>
          <option value="SI">SI</option>
          <option value="NO">NO</option>
          </select>
      </label><br>
      <label>¿Para las condiciones del trabajo es suficiente el personal asignado? 
          <select name="cert_10">
          <option value="">NA</option>
          <option value="SI">SI</option>
          <option value="NO">NO</option>
          </select>
      </label><br>
      <label>¿Todos los integrantes del grupo de trabajo están enterados del trabajo programado y sus riesgos? 
          <select name="cert_11">
          <option value="">NA</option>
          <option value="SI">SI</option>
          <option value="NO">NO</option>
          </select>
      </label><br>
      <label>¿El vehículo o motocicleta cuenta con la planilla de alistamiento correctamente diligenciada? 
          <select name="cert_12">
          <option value="">NA</option>
          <option value="SI">SI</option>
          <option value="NO">NO</option>
          </select>
      </label><br>
      <label>¿Se cuenta con permisos ambientales para realizar la actividad? 
          <select name="cert_13">
          <option value="">NA</option>
          <option value="SI">SI</option>
          <option value="NO">NO</option>
          </select>
      </label><br>
      <label>¿Se cuenta con elementos para el manejo de contingencias ambientales (kit de derrames, señalización, bandejas, tarjetas de emergencia, etc)? 
          <select name="cert_14">
          <option value="">NA</option>
          <option value="SI">SI</option>
          <option value="NO">NO</option>
          </select>
      </label><br>
      <label>¿Se cuenta con contenedores y bolsas para el manejo de residuos (incluidos los del COVID)? 
          <select name="cert_15">
          <option value="">NA</option>
          <option value="SI">SI</option>
          <option value="NO">NO</option>
          </select>
      </label><br>
      <label>¿Se dispone de elementos o equipo básico para atención de Primeros Auxilios (botiquín, camillas, canguro del liniero, etc)? 
          <select name="cert_16">
          <option value="">NA</option>
          <option value="SI">SI</option>
          <option value="NO">NO</option>
          </select>
      </label><br><br>
      <label>En caso de emergencia médica o ambiental comunicarse a estos números:</label>
      <h3>&nbsp; &nbsp; 3228126264</h3>
      <h3>&nbsp; &nbsp; #888</h3><br>
      <label>¿Los trabajadores están afiliados al sistema de Seguridad Social?</label><br>
      <label>ARL: 
          <select name="cert_17">
          <option value="">NA</option>
          <option value="SI">SI</option>
          <option value="NO">NO</option>
          </select>
      </label><br>
      <label>PENSIÓN: 
          <select name="cert_18">
          <option value="">NA</option>
          <option value="SI">SI</option>
          <option value="NO">NO</option>
          </select>
      </label><br>
      <label>SALUD: 
          <select name="cert_19">
          <option value="">NA</option>
          <option value="SI">SI</option>
          <option value="NO">NO</option>
          </select>
      </label>
      <p>Identifique todas las condiciones anteriores diligenciando SI o NA (no aplica) dependiendo la actividad a realizar. Si es un requisito para esa tarea y NO se tiene, el grupo de trabajo no puede salir y debe reportarse esa condición al Jefe Inmediato.</p>
      </fieldset><br>
      
      <!-- RUTOGRAMA -->
      <fieldset>
      <legend>5. RUTOGRAMA</legend>
      <p>Identifique el origen , destino la ruta y condiciones de riesgo para hacer la actividad.</p>
      <button type="submit" value="rutograma">Cargar el Rutograma</button>
      </fieldset><br>

      <!-- FUNCIONARIOS AUTORIZADOS PARA REALIZAR LA LABOR -->
      <fieldset>
      <legend>6. FUNCIONARIOS AUTORIZADOS PARA REALIZAR LA LABOR</legend>
      <p>Esta sección debe ser diligenciada antes de salir de la sede de trabajo y firmada por los que participan en ella.</p><br>
      <div class="firma-container">
        <div class="firma-entry">
          <label>Nombres: <input type="text" name="nombres[]" disabled></label><br>
          <label>Firma: <input type="text" name="firma[]" disabled></label><br>
          <a href="login.php">Firmar</a>
          <button type="button" onclick="eliminarFirma(this)">Quitar</button>
          <hr>
        </div>
      </div>
      <button type="button" onclick="agregarFirma(this)">Agregar</button>
      </fieldset><br>

      <p>Si antes de salir de la sede se realiza una actividad que pueda generar un RIESGO ALTO, se debe identificar, analizar e implementar las barreras de control, de seguridad o de soporte necesarias y diligenciar la sección 8 de este formato.</p><br>
      
      <!-- PLANIFICACION DIARIA DE SEGURIDAD Y AMBIENTE -->
      <fieldset>
      <legend>7. PLANIFICACION DIARIA DE SEGURIDAD Y AMBIENTE</legend>
      <p>Esta sección debe ser diligenciado en el sitio trabajo y firmado por el personal autorizado para esta labor.</p><br>
      <label>Actividad a Realizar:
        <select name="act_1">
          <option value="Revisión e Instalación de Equipos de Medida Semidirecta">Revisión e Instalación de Equipos de Medida Semidirecta</option>
        </select>
      </label><br>
      <label>Hora: <input type="time" name="hora2"></label><br>
      <fieldset>
      <p>Si la actividad a realizar se considera trabajo en alturas confirme:</p><br>
      <label>¿Cuentan con certificación para trabajo seguro en alturas? 
          <select name="cert_20">
          <option value="">NA</option>
          <option value="SI">SI</option>
          <option value="NO">NO</option>
          </select>
      </label><br>
      <label>Altura aproximada a la cual se va a desarrollar la actividad: <input type="text" name="cert_21"></label><br>
      <label>Urbano/Rural 
          <select name="cert_21">
          <option value="">NA</option>
          <option value="URBANO">Urbano</option>
          <option value="RURAL">Rural</option>
          </select>
      </label><br>
      <fieldset>
      <p>Sistema de acceso a utilizar:</p><br>
      <label>Grúa con Canasta 
          <select name="cert_22">
          <option value="">NA</option>
          <option value="SI">SI</option>
          <option value="NO">NO</option>
          </select>
      </label><br>
      <label>Escalera Dieléctrica 
          <select name="cert_23">
          <option value="">NA</option>
          <option value="SI">SI</option>
          <option value="NO">NO</option>
          </select>
      </label><br>
      <label>Pretales 
          <select name="cert_24">
          <option value="">NA</option>
          <option value="SI">SI</option>
          <option value="NO">NO</option>
          </select>
      </label><br>
      <label>Otro: <input type="text" name="cert_25"></label>
      </fieldset>
      <p>IMPORTANTE: SI LA ACTIVIDAD SE CONSIDERA COMO TRABAJO EN ALTURAS (1,5 METROS) Y NO HAY POR LO MENOS DOS TRABAJADORES CERTIFICADOS Y CON TODOS SUS EQUIPOS DE PROTECCION CONTRA CAIDAS, ACORDE AL SISTEMA DE ACCESO A UTILIZAR (ARNES, ESLINGA DE POSICIONAMIENTO, ESLINGA DE RESTRICCION O ESLINGA EN Y) PARA HACER ESTA ACTIVIDAD, ABSTENGASE DE REALIZAR EL TRABAJO Y REPORTE AL JEFE INMEDIATO.</p>
      </fieldset>
      </fieldset><br>

      <!-- ANALISIS DEL RIESGO SEGURIDAD Y AMBIENTE -->
      <fieldset>
      <legend>8. ANALISIS DEL RIESGO SEGURIDAD Y AMBIENTE</legend>
      <fieldset>
      <legend>BARRERAS A IMPLEMENTAR</legend>
      <div class="firma-container">
        <div class="firma-entry">
          <label>Paso a Paso de la Actividad:
              <select name="act_2">
                <option value="">NA</option>
                <option value="Planeación de Actividad. Alistamiento de Herramienta y Vehículo">1. Planeación de Actividad. Alistamiento de Herramienta y Vehículo</option>
                <option value="Desplazamiento en Vehículo. De Oficina a Sitio de Trabajo">2. Desplazamiento en Vehículo. De Oficina a Sitio de Trabajo</option>
                <option value="Acta de Verificación e Instalación CTA">3. Acta de Verificación e Instalación CTA</option>
                <option value="Desplazamiento Peatonal. Verificación Visual">4. Desplazamiento Peatonal. Verificación Visual</option>
                <option value="Inspección Visual de Área de Trabajo en Cuadrilla. Presentación al Usuario y Señalización Área de Trabajo">5. Inspección Visual de Área de Trabajo en Cuadrilla. Presentación al Usuario y Señalización Área de Trabajo</option>
                <option value="Revisión a Grupo de Medida. Verificación de Tensión y Retiro de Sellos">6. Revisión a Grupo de Medida. Verificación de Tensión y Retiro de Sellos</option>
                <option value="Instalación de Equipo Patrón y Pruebas de Medidor y TCs">7. Instalación de Equipo Patrón y Pruebas de Medidor y TCs</option>
                <option value="Desplazamiento en Vehículo. De Sitio de Trabajo a Oficina">8. Desplazamiento en Vehículo. De Sitio de Trabajo a Oficina</option>
              </select><br><br>
              &nbsp; &nbsp; Otra Actividad: <input type="text" name="b_control[]">
          </label><br>
          <fieldset>
          <div class="firma-container">
            <div class="firma-entry">
              <label>Riesgo Potencial en Seguridad y Ambiente:
                <select name="riesgo">
                  <option value="">NA</option>
                  <option value="Raspón">Raspón</option>
                  <option value="Caida al Mismo Nivel">Caida al Mismo Nivel</option>
                  <option value="Caida de Objetos">Caida de Objetos</option>
                  <option value="Golpe o Contusión">Golpe o Contusión</option>
                  <option value="Laceración o Corte">Laceración o Corte</option>
                  <option value="Machucón">Machucón</option>
                  <option value="Tropezón">Tropezón</option>
                  <option value="Atropellamiento">Atropellamiento</option>
                  <option value="Colisión">Colisión</option>
                  <option value="Derrumbe">Derrumbe</option>
                  <option value="Emisión de Gases">Emisión de Gases</option>
                  <option value="Choque">Choque</option>
                  <option value="Volcamiento">Volcamiento</option>
                  <option value="Fatiga">Fatiga</option>
                  <option value="Insolación o Deshidratación">Insolación o Deshidratación</option>
                  <option value="Mordedura Canina">Mordedura Canina</option>
                  <option value="Mordedura de Serpiente">Mordedura de Serpiente</option>
                  <option value="Picadura de Insecto">Picadura de Insecto</option>
                  <option value="Picadura de abeja">Picadura de abeja</option>
                  <option value="Robo o Atraco">Robo o Atraco</option>
                  <option value="Apatía o Desinterés">Apatía o Desinterés</option>
                  <option value="Usuario Conflictivo">Usuario Conflictivo</option>
                  <option value="Molestias o Irritación">Molestias o Irritación</option>
                  <option value="Riesgo Psicosocial">Riesgo Psicosocial</option>
                  <option value="Orden publico">Orden publico</option>
                  <option value="Caida a diferente nivel">Caida a diferente nivel</option>
                  <option value="Lesiones Osteomusculares">Lesiones Osteomusculares</option>
                  <option value="Golpes">Golpes</option>
                  <option value="Raspon">Raspon</option>
                  <option value="Arco Eléctrico">Arco Eléctrico</option>
                  <option value="Contacto Eléctrico">Contacto Eléctrico</option>
                  <option value="Electrocución">Electrocución</option>
                  <option value="Quemadura Solar">Quemadura Solar</option>
                  <option value="Quemadura por riesgo electrico">Quemadura por riesgo electrico</option>
                  <option value="Aplastamiento">Aplastamiento</option>
                  <option value="Atrapamiento">Atrapamiento</option>
                  <option value="Fractura">Fractura</option>
                  <option value="Lesión de Columna">Lesión de Columna</option>
                  <option value="Lesión en Articulación">Lesión en Articulación</option>
                  <option value="Lesión en Tendón o Ligamento">Lesión en Tendón o Ligamento</option>
                  <option value="Muerte">Muerte</option>
                  <option value="Quemadura de Segundo Grado">Quemadura de Segundo Grado</option>
                  <option value="Quemadura de Tercer Grado">Quemadura de Tercer Grado</option>
                  <option value="Trauma Craneoencefálico">Trauma Craneoencefálico</option>
                </select><br><br>
                &nbsp; &nbsp; Otro Riesgo: <input type="text" name="b_control[]">
              </label><br><br>
              <label>Nivel (A, M):  
                <select name="nivel[]">
                  <option value="">NA</option>
                  <option value="A">A</option>
                  <option value="M">M</option>
                </select>
              </label><br><br>
              <label>Barreras de Control: <input type="text" name="b_control[]"></label><br><br>
              <label>Barreras de Seguridad:
                <select name="seguridad">
                  <option value="">NA</option>
                  <option value="Ropa Operativa">Ropa Operativa</option>
                  <option value="Botas dieléctricas y antideslizantes">Botas dieléctricas y antideslizantes</option>
                  <option value="Guantes de vaqueta">Guantes de vaqueta</option>
                  <option value="Vista panorámica">Vista panorámica</option>
                  <option value="Uso de cinturón de seguridad">Uso de cinturón de seguridad</option>
                  <option value="Uso de luces altas bajas, estacionarias, direccionales">Uso de luces altas bajas, estacionarias, direccionales</option>
                  <option value="Velocidad moderada">Velocidad moderada</option>
                  <option value="Respeto de señales de tránsito">Respeto de señales de tránsito</option>
                  <option value="Preoperacional de vehículo">Preoperacional de vehículo</option>
                  <option value="Planificación de desplazamiento">Planificación de desplazamiento</option>
                  <option value="Casco, balaclava, guantes de vaqueta">Casco, balaclava, guantes de vaqueta</option>
                  <option value="Bloqueador solar">Bloqueador solar</option>
                  <option value="Repelente">Repelente</option>
                  <option value="Distanciamiento con (perros, abejas y serpientes)">Distanciamiento con (perros, abejas y serpientes)</option>
                  <option value="Usar cebra peatonal">Usar cebra peatonal</option>
                  <option value="Hidratación con agua o suero">Hidratación con agua o suero</option>
                  <option value="Distanciamiento con (usuario agresivo, perros, abejas y serpientes)">Distanciamiento con (usuario agresivo, perros, abejas y serpientes)</option>
                  <option value="Comunicación asertiva">Comunicación asertiva</option>
                  <option value="Ubicación de vehículo en zona segura">Ubicación de vehículo en zona segura</option>
                  <option value="Uso visible de carné de identificación">Uso visible de carné de identificación</option>
                  <option value="Conos y cinta de señalización">Conos y cinta de señalización</option>
                  <option value="Respeto hacia el usuario">Respeto hacia el usuario</option>
                  <option value="Uso de kit de guantes clase 0, pantalla protección facial">Uso de kit de guantes clase 0, pantalla protección facial</option>
                  <option value="Balaclava, guantes de vaqueta">Balaclava, guantes de vaqueta</option>
                  <option value="Detector de ausencia de tensión">Detector de ausencia de tensión</option>
                  <option value="Casco con barbuquejo">Casco con barbuquejo</option>
                  <option value="Uso de recipiente para almacenamiento de residuos">Uso de recipiente para almacenamiento de residuos</option>
                  <option value="Herramientas manuales en buen estado">Herramientas manuales en buen estado</option>
                  <option value="Recipiente para residuos disposición final">Recipiente para residuos disposición final</option>
                  <option value="Gafas de seguridad">Gafas de seguridad</option>
                  <option value="Contenedor de residuos">Contenedor de residuos</option>
                  <option value="Revisión de estructura (Poste)">Revisión de estructura (Poste)</option>
                  <option value="Revisión de estado de sistema de acceso (Escalera, Pretales)">Revisión de estado de sistema de acceso (Escalera, Pretales)</option>
                  <option value="Revisión de equipos contra caídas (Tie off, Eslinga de posicionamiento, Mosquetón)">Revisión de equipos contra caídas (Tie off, Eslinga de posicionamiento, Mosquetón)</option>
                  <option value="Uso de kit de guantes clase 0, protección facial">Uso de kit de guantes clase 0, protección facial</option>
                  <option value="Gafas de protección">Gafas de protección</option>
                </select><br><br>
                &nbsp; &nbsp; Otra Barrera de Seguridad: <input type="text" name="b_control[]">
              </label><br><br>
              <label>Barreras de Soporte:
                <select name="capacitacion">
                  <option value="">NA</option>
                  <option value="Capacitación en Autocuidado">Capacitación en Autocuidado</option>
                  <option value="Capacitación en Brigadas de Emergencia">Capacitación en Brigadas de Emergencia</option>
                  <option value="Capacitación en Caídas al Mismo Nivel">Capacitación en Caídas al Mismo Nivel</option>
                  <option value="Capacitación en Caídas a Diferente Nivel">Capacitación en Caídas a Diferente Nivel</option>
                  <option value="Capacitación en Inspección y Verificación de Elementos de Trabajo">Capacitación en Inspección y Verificación de Elementos de Trabajo</option>
                  <option value="Capacitación en Primeros Auxilios">Capacitación en Primeros Auxilios</option>
                  <option value="Capacitación en Riesgo Mecánico">Capacitación en Riesgo Mecánico</option>
                  <option value="Capacitación en Riesgo Biomecánico">Capacitación en Riesgo Biomecánico</option>
                  <option value="Capacitación en Riesgo Ergonómico">Capacitación en Riesgo Ergonómico</option>
                  <option value="Capacitación en Riesgo Biológico">Capacitación en Riesgo Biológico</option>
                  <option value="Capacitación en Riesgo Público">Capacitación en Riesgo Público</option>
                  <option value="Capacitación en Riesgo Eléctrico">Capacitación en Riesgo Eléctrico</option>
                  <option value="Capacitación en Riesgo Psicosocial y Comunicación Asertiva">Capacitación en Riesgo Psicosocial y Comunicación Asertiva</option>
                  <option value="Capacitación en Manejo Defensivo">Capacitación en Manejo Defensivo</option>
                  <option value="Capacitación en Normas de Tránsito">Capacitación en Normas de Tránsito</option>
                  <option value="Capacitación en Señales de Tránsito">Capacitación en Señales de Tránsito</option>
                  <option value="Capacitación en Seguridad Vial">Capacitación en Seguridad Vial</option>
                  <option value="Capacitación en Pausas Activas">Capacitación en Pausas Activas</option>
                  <option value="Capacitación en Mordedura Canina">Capacitación en Mordedura Canina</option>
                  <option value="Capacitación en Manejo de Equipos de Medida Directa y Semidirecta">Capacitación en Manejo de Equipos de Medida Directa y Semidirecta</option>
                  <option value="Capacitación en Manejo de Residuos Sólidos">Capacitación en Manejo de Residuos Sólidos</option>
                  <option value="Capacitación en Montaje de Cargas">Capacitación en Montaje de Cargas</option>
                  <option value="Capacitación en Medio Ambiente">Capacitación en Medio Ambiente</option>
                  <option value="Capacitación en Trabajo en Alturas">Capacitación en Trabajo en Alturas</option>
                </select><br><br>
                &nbsp; &nbsp; Otra Barrera de Soporte: <input type="text" name="b_control[]">
              </label><br><br>
              <button type="button" onclick="eliminarFirma(this)">Quitar</button>
              <hr>
            </div>
          </div>
          <button type="button" onclick="agregarFirma(this)">Agregar</button>
          </fieldset><br>
          <button type="button" onclick="eliminarFirma(this)">Quitar</button>
          <hr>
        </div>
      </div>
      <button type="button" onclick="agregarFirma(this)">Agregar</button><br><br>
      </fieldset><br>
      <fieldset>
      <p>SI SE LLEGASE A PRESENTAR UNA EMERGENCIA DE SEGURIDAD O AMBIENTE EN SITIO IDENTIFIQUE EL ENCARGADO DE:</p><br>
      <label>Primeros Auxilios: <input type="text" name="auxilios[]"></label><br>
      <label>Rescate y Camillaje: <input type="text" name="rescate[]"></label><br>
      <label>Prevención y Control de Incendios y/o Derrames: <input type="text" name="prevencion[]"></label>
      </fieldset>
      </fieldset><br>

      <!-- EQUIPO QUE PARTICIPA, ANALIZA Y DIFUNDE LA IDENTIFICACION DE LOS RIESGOS DE SEGURIDAD Y AMBIENTE -->
      <fieldset>
      <legend>10. EQUIPO QUE PARTICIPA, ANALIZA Y DIFUNDE LA IDENTIFICACION DE LOS RIESGOS DE SEGURIDAD Y AMBIENTE</legend>
      <p>Esta sección debe ser diligenciado en el sitio trabajo y firmado por el personal autorizado para esta labor.</p><br>
      <fieldset>
        <div class="firma-container">
          <div class="firma-entry">
            <label>Cargo: <input type="text" name="cargo[]" disabled></label><br>
            <label>Nombres: <input type="text" name="nombres[]" disabled></label><br>
            <label>Firma: <input type="text" name="firma[]" disabled></label><br>
            <a href="login.php">Firmar</a>
            <button type="button" onclick="eliminarFirma(this)">Quitar</button>
            <hr>
          </div>
        </div>
        <button type="button" onclick="agregarFirma(this)">Agregar</button>
      </fieldset><br>
      <label>Hora Finalización Actividad: <input type="time" name="hora_fin"></label>
      </fieldset><br>

      <p>Este documento y su contenido es propiedad intelectual de la Empresa de Energía de Boyacá S.A. E.S.P. EBSA; se prohíbe su reproducción parcial o total sin autorización escrita.</p><br>
      <input type="submit" value="Guardar">

      <script>
        function agregarFirma(button) {
          const container = button.closest('fieldset').querySelector('.firma-container');
          if (!container) {
            alert('No se encontró un contenedor de firmas.');
            return;
          }

          const entradaOriginal = container.querySelector('.firma-entry');
          if (!entradaOriginal) {
            alert('No se encontró una entrada de firma para clonar.');
            return;
          }

          const nuevaEntrada = entradaOriginal.cloneNode(true);

          nuevaEntrada.querySelectorAll('input, select, textarea').forEach(element => {
            if (element.type === 'checkbox' || element.type === 'radio') {
              element.checked = false;
            } else {
              element.value = '';
            }
          });

          container.appendChild(nuevaEntrada);
        }

        function eliminarFirma(button) {
          const entryToRemove = button.closest('.firma-entry');
          const container = entryToRemove.closest('.firma-container');
          const totalEntradas = container.querySelectorAll('.firma-entry').length;

          if (totalEntradas > 1) {
            container.removeChild(entryToRemove);
          } else {
            alert('Debe haber al menos una entrada de firma.');
          }
        }
      </script>

    </form>
  </fieldset>
</body>
</html>
