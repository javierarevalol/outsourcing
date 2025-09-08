<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Outsourcing</title>

<style>
  /* ===== Reset & Tema ===== */
  *{margin:0;padding:0;box-sizing:border-box;font-family:Arial,Helvetica,sans-serif;}
  body{
    display:flex;
    flex-direction:column;
    min-height:100vh;
    background: url("WhatsApp Image 2025-07-28 at 09.20.39_f84f6a2b.jpg") no-repeat center center fixed;
    background-size: cover;
    color:#333;
  }

  /* ===== Encabezado ===== */
  header{
    display:flex;
    justify-content:space-between;
    align-items:center;
    padding:1rem 2rem;
    background:rgba(255,255,255,1); /* Transparente para que se vea el fondo */
    box-shadow:0 2px 4px rgba(0,0,0,.08);
  }
  .logo-header{width:20%;height:auto;}

  /* Botón-enlace Planillas */
  .btn-link{
    display:inline-block;
    padding:.6rem 1.2rem;
    border-radius:4px;
    background:#0066ff;
    color:#fff;
    text-decoration:none;
    transition:background .2s ease-in-out;
  }
  .btn-link:hover{background:#004fcc;}

  /* ===== Principal ===== */
main{
  flex:1;
  display:flex;
  flex-direction:column;   /* stack panel and mv-section vertically */
  align-items:center;
  justify-content:flex-start;
  padding:2rem 1rem;
  text-align:center;
  gap:2rem;                /* spacing between panel and section */
}

.panel{
  background:rgba(255,255,255,0.85);
  border-radius:8px;
  box-shadow:0 3px 6px rgba(0,0,0,.1);
  padding:1.5rem 2rem;
  display:inline-block;
  text-align:center;
}

.logo-main{
  width:95%;         /* takes almost the whole panel width */
  max-width:1000px;  /* larger cap so it doesn’t shrink too much on desktops */
  height:auto;       /* keeps original aspect ratio */
  margin:0 auto 1rem;
}

  /* ===== Misión / Visión ===== */
  .mv-section{
    width:100%;
    max-width:1200px;
    margin:2.5rem auto;
    padding:0 1rem;
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(300px,1fr));
    gap:2rem;
  }
  .mv-card{
    background:rgba(255,255,255,0.9);
    border-radius:8px;
    padding:1.75rem 2rem;
    box-shadow:0 3px 6px rgba(0,0,0,.08);
  }
  .mv-card h2{margin-bottom:1rem;color:#0066ff;}
  .mv-card p{line-height:1.6;text-align:justify;}

  /* ===== Pie de página ===== */
  footer{
    margin-top:auto;
    padding:1rem 0;
    text-align:center;
    font-size:.875rem;
    color:#333;
    background:rgba(255,255,255,0.85);
  }
</style>

</head>
<body>

  <!-- ===== Encabezado ===== -->
  <header>
    <img src="Screenshot 2025-07-04 181302.png" alt="Logo" class="logo-header">
    <a href="login.php" class="btn-link">Planillas</a>
  </header>

  <!-- ===== Sección principal ===== -->
  <main>
    <div class="panel">
      <img src="Screenshot 2025-07-04 181219.png" alt="Logo grande" class="logo-main">
      <h1>Proyectos con enfoque técnico y humano.</h1>
    </div>
    
      <!-- ===== Misión y Visión ===== -->
      <section class="mv-section">
        <article class="mv-card">
          <h2>Misión</h2>
          <p>
            OUTSOURCING ORIENTE S.A.S., en ejecución de proyectos a través de un enfoque técnico
            y humano, acorde a las actuales políticas de globalización, mediante gestión de recursos
            financieros y humanos, formulación y evaluación de proyectos que permitan un desarrollo
            en la modernización de la empresa y el progreso del país.
          </p>
        </article>
    
        <article class="mv-card">
          <h2>Visión</h2>
          <p>
            OUTSOURCING ORIENTE S.A.S. quiere ser reconocida a nivel nacional como una empresa líder
            en ejecución de proyectos con producción de obras de excelente calidad, protegiendo el
            medio ambiente y satisfaciendo las necesidades de nuestro cliente, con un alto grado de
            organización y posicionamiento en el mercado nacional.
          </p>
        </article>
      </section>
  </main>

  <!-- ===== Pie de página ===== -->
  <footer>
    © 2025 OUTSOURCING ORIENTE S.A.S.
  </footer>

</body>
</html>
