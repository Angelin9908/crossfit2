<div class="contenedorcabeza">
    <div class="ancho">
      <div class="cabecera">
        <div class="logo">
          <img src="recursos/img/logo.svg" alt="">
        </div>
        <div class="menu">
          <a href="index.php">Inicio</a>
          <a href="entrenamiento.php">Entrenamientos</a>
          <a href="planes.php">Planes y horarios</a>
          <a href="contactanos.php">Contáctanos</a>
        </div>
      </div>
    </div>
</div>
<div class="contenedorcabeza2">
  <div class="ancho">
    <div class="redes">
    <a href="https://www.facebook.com/" target="_Blank"><img src="recursos/img/face1.png" alt=""></a>
    <a href="mailto:gabo99prueba@gmail.com?Subject=Mayor%20información"><img src="recursos/img/correo.png" alt=""></a>  
    </div>
    <div class="bordefecha">    
          <p>
            <script type="text/javascript">
              var d = new Date();
              var mes, dia;
              if(d.getDate()<10){
                  dia = '0'+ (d.getDate());
                }else{
                  dia= (d.getDate());
                }

              if((d.getMonth())<9){
                mes = '0'+ (d.getMonth()+1);
              }else{
                mes= (d.getMonth()+1);
              }
              document.write((dia),'/'+(mes),'/'+d.         getFullYear());
            </script>
          </p>
          <p id="reloj">
          <script type="text/javascript">
                function startTime(){
                today=new Date();
                h=today.getHours();
                m=today.getMinutes();
                s=today.getSeconds();
                m=checkTime(m);
                s=checkTime(s);
                document.getElementById('reloj').innerHTML=h+":"+m+":"+s;
                t=setTimeout('startTime()',500);}
                function checkTime(i)
                {if (i<10) {i="0" + i;}return i;}
                window.onload=function(){startTime();}
          </script>
          </p>
    </div>
  </div>
</div>

