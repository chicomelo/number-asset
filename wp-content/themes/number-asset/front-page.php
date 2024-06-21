<?php
/* Template Name: Home page */ 
get_header();
the_content();
?>


<!-- <section class="food-service">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <picture>
                    <source media="(max-width: 799px)" srcset="<?php echo do_shortcode("[img-url]"); ?>img-food-service-mobile.jpg" />
                    <img class="img-fluid" src="<?php echo do_shortcode("[img-url]"); ?>img-food-service.jpg" alt="Somos especialistas em Food Service" />
                </picture>
            </div>
            <div class="col-12 col-md-6">
                <h1 class="titulo mt-4 mt-md-0">Somos especialistas em <br /><b class="red">Food Service</b></h1>
                <p class="paragrafo mb-5">Identificamos as dificuldades nas rotinas das principais cozinhas profissionais do Brasil e investimos no desenvolvimento de soluções completas em proteína animal: produtos que facilitam a operação, simplificam processos, reduzem custos e garantem qualidade e sabor às suas receitas.</p>
                <a href="/sobre-a-alfama/" class="btn btn-outline" title="Saiba mais">Saiba mais</a>
            </div>
        </div>
    </div>
</section> -->

<section class="banner">
    <div class="info">
        <p class="titulo-grande">Entregamos números que impulsionam</p>
    </div>
    <picture>
        <source media="(max-width: 799px)" srcset="<?php echo do_shortcode("[img-url]"); ?>banner-topo-mobile.jpg">
            <img class="img-fluid" src="<?php echo do_shortcode("[img-url]"); ?>banner-topo.jpg" alt="" />
        </source>
    </picture>
    
</section>

<section class="quem-somos">
    <img class="img-fluid d-md-none" src="<?php echo do_shortcode("[img-url]"); ?>quem-somos-bg-mobile.png" alt="" />
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <h2 class="titulo">Quem somos</h2>
                <p class="paragrafo">A NUMBER nasce em fevereiro de 2024 fundada por profissionais experientes do mercado financeiro nas áreas de crédito, distribuição e gestão de recursos contando com um time que acumula mais de <b>20 anos de conhecimento</b>.</p>
                <p class="paragrafo">Ainda em 2024, após publicação do Ato Declaratório no Diário Oficial e filiação à Anbima, iniciará as operações de gestão de fundos como uma ASSET INDEPENDENTE especializada nos segmentos de operações estruturadas, fundos de crédito privado e gestão de carteiras.</p>
                <p class="paragrafo">Nosso compromisso pauta-se pela transparência e pela seriedade em todos os aspectos de atuação. Cada decisão que tomamos passa por processos dinâmicos que estão em constante aperfeiçoamento e por uma criteriosa validação por meio dos departamentos de Gestão, Risco e Compliance.</p>
            </div>
        </div>
    </div>
</section>

<section class="nossos-produtos">
    <div class="container">
        <h2 class="titulo">Nossos produtos e serviços</h2>
    </div>
</section>


<?php
get_footer();
?>