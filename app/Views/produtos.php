<?=$this->extend('main_layout')?>
<?=$this->section('content')?>
<section class="container">
<div class="col">

   <div class=" row mb-5 curso-box ">
        <div class="col-5 text-center">
            <img class="img-fluid" src=<?=base_url('recursos/imagens/1.png')?>>
        </div>
        
        <div class="col-7 p-5">
            <h1 class="mb-3 curso-color"> Curso 01 </h1>
            <p class="mb-3"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, pariatur repellat. Rem ipsa repellendus dolor nemo nihil vitae. Neque non ipsa, sed maiores voluptatem quasi at voluptatum adipisci quidem nobis. </p>
            <h2 class="mt-3 curso-color"> R$ 159.90</h2>
        </div>
    </div>
    <!-- CURSO 02 -->
    <div class=" row mb-5 curso-box ">
               
        <div class="col-7 p-5">
            <h1 class="mb-3 curso-color"> Curso 01 </h1>
            <p class="mb-3"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, pariatur repellat. Rem ipsa repellendus dolor nemo nihil vitae. Neque non ipsa, sed maiores voluptatem quasi at voluptatum adipisci quidem nobis. </p>
            <h2 class="mt-3 curso-color"> R$ 159.90</h2>
        </div>

        <div class="col-5 text-center">
            <img class="img-fluid" src=<?=base_url('recursos/imagens/2.png')?>>
        </div>
    </div>
</div>
</section>
<?=$this->endSection()?>