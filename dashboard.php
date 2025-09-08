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
    background:rgba(255,255,255,1);
    box-shadow:0 2px 4px rgba(0,0,0,.08);
  }
  .logo-header{width:20%;height:auto;}

  .nav-actions{
    display:flex;
    align-items:center;
    gap:1rem;
  }

  .btn{
    display:inline-block;
    padding:.6rem 1.2rem;
    border-radius:4px;
    background:#0066ff;
    color:#fff;
    text-decoration:none;
    border:none;
    cursor:pointer;
    transition:background .2s ease-in-out;
    font-size:1rem;
  }
  .btn:hover{background:#004fcc;}

  /* ===== Dropdown ===== */
  .dropdown{position:relative;}
  .dropdown-menu{
    position:absolute;
    top:100%;
    left:0;
    display:none;
    flex-direction:column;
    background:#fff;
    border:1px solid #ccc;
    border-radius:4px;
    min-width:160px;
    box-shadow:0 4px 8px rgba(0,0,0,.1);
    z-index:10;
  }
  .dropdown:hover .dropdown-menu{display:flex;}
  .dropdown-menu a{
    padding:.75rem 1rem;
    text-decoration:none;
    color:#333;
    background:#fff;
    transition:background 0.2s ease-in-out;
  }
  .dropdown-menu a:hover{background:#f0f0f0;}

  /* ===== Principal ===== */
main{
  flex:1;
  display:flex;
  justify-content:center;
  align-items:center;
  padding:2rem;
  text-align:center;
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
    <div class="nav-actions">
      <a href="" class="btn">Cartera</a>
      <div class="dropdown">
        <button class="btn">Pérdidas</button>
        <div class="dropdown-menu">
          <a href="form1.php">Equipos de Medida Directa</a>
          <a href="form2.php">Equipos de Medida Semi Directa</a>
          <a href="form3.php">Equipos de Medida Indirecta</a>
          <a href="form4.php">Actividades Gestión Social</a>
          <a href="form5.php">Actividades HSE</a>
        </div>
      </div> &nbsp; &nbsp; &nbsp;
    </div>
  </header>

  <!-- ===== Sección principal ===== -->
  <main>
    <div class="panel">
      <img src="Screenshot 2025-07-04 181219.png" alt="Logo grande" class="logo-main">
      <h1>Proyectos con enfoque técnico y humano.</h1>
    </div>
  </main>

  <!-- ===== Pie de página ===== -->
  <footer>
    © 2025 OUTSOURCING ORIENTE S.A.S.
  </footer>

</body>
</html>
