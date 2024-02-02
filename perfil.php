<?php include "head.php" ?>

<div class="container">
    <div class="row PokemonPerfil mt-4">
        <div class="col-md-4 imgContentPok">
            <img src="" alt="" srcset="" id="imgPoke" class="mx-auto d-block">
        </div>
        <div class="col-md-8">
            <div id="accordion">
                <div class="mt-4 p-5 bg-dark text-white rounded">
                    <h1 id="name">Jumbotron Example</h1>
                </div>
                <div class="card">
                    <div class="card-header">
                        <a class="btn" data-bs-toggle="collapse" href="#collapseOne">
                           <strong> Habilidades</strong>
                        </a>
                    </div>
                    <div id="collapseOne" class="collapse show" data-bs-parent="#accordion">
                        <div class="card-body" id="abilities">
                            
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <a class="collapsed btn" data-bs-toggle="collapse" href="#collapseTwo">
                           <strong>Tipos</strong>
                        </a>
                    </div>
                    <div id="collapseTwo" class="collapse" data-bs-parent="#accordion">
                        <div class="card-body" id="types">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<script src="js/perfil.js"></script>
<?php include "fotter.php" ?>