<div id="header">
<nav class="navbar navbar-expand-lg navbar-light ">
  <a class="navbar-brand" href="index.php">
    <img src="images/icons/log/favicon.ico" alt="" width="30" height="24" class="d-inline-block align-text-top">
    MozNova
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbar">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
     <li class="nav-item active">
        <a class="nav-link" href="#">Home   <span class="sr-only">(current)</span></a>
      </li> 
  
    
      <div id="menu">
        <ul>
            <li class="nav-item">
              <a class="nav-link" href="#">Categorias</a>       
             <!-- <?php include("inc/cat_menu.php"); ?> -->
          </li>
        </ul>

      </div>
 
      <li>
        <div class="input-group  ml-6">
            <input class="form-control mr-sm-2  form-inline my-2 my-lg-0 " style="min-width:400px;" type="search" placeholder="Procurar cursos">
            <button type="button" class="btn btn-outline-secondary"><i class="bi bi-search"></i></button>
        </div>
      </li>
   
    </ul>

    <form id="frm-login" class="form-inline my-2 my-lg-0  ">

      <div id="shopcart">
        <a class="mr-sm-4" href="cart.php">  <i class="bi bi-cart4" style="font-size: 2rem; color: #4285F4"></i>0</a>
      </div>    

    </form>

    <button class="btn btn-outline-primary btn-sm mr-sm-2" data-toggle="modal" data-target="#mylogin">Entrar</button>
    <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#mycadastro">Cadastrar</button>

  </div>
</nav>
</div>
