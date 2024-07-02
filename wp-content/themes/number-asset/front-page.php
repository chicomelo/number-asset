<?php
/* Template Name: Home page */ 
get_header();
the_content();
?>

<section class="banner">
    <div class="info">
        <p class="titulo-grande">Entregamos números que impulsionam</p>
    </div>
    <picture>
        <source media="(max-width: 799px)" srcset="<?php echo do_shortcode("[img-url]"); ?>banner-topo-mobile.jpg">
            <img class="img-fluid" src="<?php echo do_shortcode("[img-url]"); ?>banner-topo.jpg" alt="Entregamos números que impulsionam" />
        </source>
    </picture>
    
</section>

<section class="quem-somos" id="quem-somos">
    <img class="img-fluid d-md-none" src="<?php echo do_shortcode("[img-url]"); ?>quem-somos-bg-mobile.png" alt="Quem somos" />
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <h2 class="titulo">Quem somos</h2>
                <p class="paragrafo">A NUMBER nasce em fevereiro de 2024 fundada por profissionais do mercado financeiro que atuam nas áreas de crédito, operações estruturadas, distribuição e gestão de recursos contando com um time que acumula <b>mais de 20 anos de experiência e conhecimento de mercado</b>.</p>
                <p class="paragrafo">Ainda em 2024, após publicação do Ato Declaratório no Diário Oficial e filiação à Anbima, iniciará as operações de gestão de fundos como uma ASSET INDEPENDENTE especializada nos segmentos de operações estruturadas, fundos de crédito privado e gestão de carteiras.</p>
                <p class="paragrafo">Nosso compromisso pauta-se pela transparência e pela seriedade em todos os aspectos de atuação. Cada decisão que tomamos passa por processos dinâmicos que estão em constante aperfeiçoamento e por uma criteriosa validação por meio dos departamentos de Gestão, Risco e Compliance.</p>
            </div>
        </div>
    </div>
</section>

<section class="nossas-solucoes" id="nossas-solucoes">

    <div class="container">
        <div class="row">
            <div class="col-12 col-md-5">
                <h2 class="titulo">Soluções únicas, números exclusivos.</h2>
                <p class="sub-titulo">Fundos de Investimentos em Direitos Creditórios, Situações Especiais</p>
                <a class="btn" href="#contato" title="Entrar em contato">Entrar em contato</a>
            </div>
        </div>
    </div>
    <img class="img-fluid d-md-none" src="<?php echo do_shortcode("[img-url]"); ?>nossas-solucoes-mobile.jpg" alt="Soluções únicas, números exclusivos." />
</section>

<!-- 
<section class="nossos-produtos" id="nossas-solucoes">
    <div class="container">
        <h2 class="titulo">Nossos produtos e serviços</h2>

        <div class="slider-produtos">
            <div>
                <div class="icone">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 47.19" xml:space="preserve"><path d="M50.89 47.19H1.11C.5 47.19 0 46.68 0 46.07s.5-1.12 1.11-1.12h1.83v-16.5c0-.62.5-1.12 1.11-1.12h7.8c.61 0 1.11.5 1.11 1.12v16.5h7.93V23.22c0-.62.5-1.12 1.11-1.12h7.8c.61 0 1.11.5 1.11 1.12v21.72h8.11V17.13c0-.62.5-1.12 1.11-1.12h7.8c.61 0 1.11.5 1.11 1.12v27.82h1.83c.61 0 1.11.5 1.11 1.12.02.61-.48 1.12-1.09 1.12zm-40.14-2.24V29.57H5.17v15.38h5.58zm17.95 0v-20.6h-5.58v20.6h5.58zm18.13 0v-26.7h-5.58v26.7h5.58zm2.93-41.13-7.94 8c-.11.11-.23.19-.36.24-.13.06-.28.09-.43.09H26.37L14.6 24.01c-.11.11-.23.19-.37.25-.13.05-.27.08-.42.08H1.11c-.61 0-1.11-.5-1.11-1.12 0-.62.5-1.12 1.11-1.12h12.24l11.77-11.86c.11-.11.23-.19.37-.25.13-.05.27-.08.42-.08h14.66l7.61-7.67h-6.03c-.61 0-1.11-.5-1.11-1.12S41.55 0 42.16 0h8.71c.16 0 .31.03.44.09.12.05.24.13.34.24.1.1.18.22.23.35.06.14.09.29.09.45V9.9c0 .62-.5 1.12-1.11 1.12-.61 0-1.11-.5-1.11-1.12l.01-6.08z" fill-rule="evenodd" clip-rule="evenodd" fill="#0056D3"/></svg>
                </div>
                <p class="sub-titulo">Fundo de Investimento Financeiro Multimercado</p>
                <p class="topico">Público-alvo</p>
                <p>Investidor Profissional e Qualificado</p>
                <p class="topico">Tipo de ativo/estratégia</p>
                <p>Renda fixa, ações, crédito privado, etc.</p>
                <p class="topico">Ticket mínimo previsto para os investimentos</p>
                <p>R$ 10.000,00</p>
            </div>
            <div>
                <div class="icone">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 44.89" xml:space="preserve"><path d="M24.89 37.73v-3.06H1.11c-.61 0-1.11-.5-1.11-1.12v-3.67c0-.61.5-1.11 1.11-1.11h.56V5.89h-.56C.5 5.89 0 5.39 0 4.78V1.11C0 .5.5 0 1.11 0h49.78C51.5 0 52 .5 52 1.11v3.67c0 .61-.5 1.11-1.11 1.11h-.56v22.89h.56c.61 0 1.11.5 1.11 1.11v3.67c0 .61-.5 1.11-1.11 1.11H27.11v3.06c1.48.47 2.56 1.86 2.56 3.5 0 2.02-1.64 3.67-3.67 3.67s-3.67-1.64-3.67-3.67c0-1.64 1.08-3.03 2.56-3.5zm-21-31.84v22.89h44.22V5.89H3.89zm34.27 8.26-5.32 5.32c.24.48.38 1.02.38 1.59 0 1.95-1.58 3.54-3.54 3.54s-3.54-1.58-3.54-3.54c0-.66.18-1.28.5-1.81l-2.57-2.57c-.52.29-1.11.46-1.75.46-.57 0-1.11-.14-1.59-.38l-5.32 5.32c.24.48.38 1.02.38 1.59 0 1.95-1.58 3.54-3.54 3.54-1.95 0-3.54-1.58-3.54-3.54s1.58-3.54 3.54-3.54c.57 0 1.11.14 1.59.38l5.32-5.32c-.24-.48-.38-1.02-.38-1.59 0-1.95 1.58-3.54 3.54-3.54s3.54 1.58 3.54 3.54c0 .5-.11.99-.3 1.42l2.77 2.77c.42-.17.87-.27 1.35-.27.57 0 1.11.14 1.59.38l5.32-5.32c-.24-.48-.38-1.02-.38-1.59 0-1.95 1.58-3.54 3.54-3.54 1.95 0 3.54 1.58 3.54 3.54 0 1.95-1.58 3.54-3.54 3.54-.57 0-1.11-.14-1.59-.38zm.67-2.22c.24.23.56.37.92.37.72 0 1.31-.59 1.31-1.31 0-.72-.59-1.31-1.31-1.31-.72 0-1.31.59-1.31 1.31 0 .36.14.68.37.92l.01.01.01.01zm-8.23 8.19c-.24-.23-.56-.37-.92-.37-.31 0-.59.11-.82.28-.01.01-.02.02-.03.02-.29.24-.47.6-.47 1.01 0 .72.59 1.31 1.31 1.31.72 0 1.31-.59 1.31-1.31 0-.36-.14-.68-.37-.92-.01 0-.01-.01-.01-.01s-.01 0 0-.01zm-7.27-5.67c.19-.23.31-.53.31-.85 0-.72-.59-1.31-1.31-1.31-.72 0-1.31.59-1.31 1.31 0 .36.14.68.37.92.01 0 .01.01.01.01l.01.01c.24.23.56.37.92.37.39 0 .74-.17.98-.44l.02-.02zm-10.16 8.28c-.24-.23-.56-.37-.92-.37-.72 0-1.31.59-1.31 1.31 0 .72.59 1.31 1.31 1.31.72 0 1.31-.59 1.31-1.31 0-.36-.14-.68-.37-.92-.01 0-.01-.01-.01-.01-.01 0-.01-.01-.01-.01zM26 39.78c-.8 0-1.44.65-1.44 1.44s.65 1.44 1.44 1.44c.8 0 1.44-.65 1.44-1.44s-.65-1.44-1.44-1.44zm0-7.34h23.78V31H2.22v1.44H26zM2.22 3.67h47.56V2.22H2.22v1.45z" fill-rule="evenodd" clip-rule="evenodd" fill="#0056D3"/></svg>
                </div>
                <p class="sub-titulo">Fundo de Investimento em Direitos Creditórios</p>
                <p class="topico">Público-alvo</p>
                <p>Investidor Profissional e Qualificado</p>
                <p class="topico">Tipo de ativo/estratégia</p>
                <p>Direitos creditórios, conforme previsto na regulamentação em vigor.</p>
                <p class="topico">Ticket mínimo previsto para os investimentos</p>
                <p>R$ 10.000,00</p>
            </div>
            <div>
                <div class="icone">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52.3" xml:space="preserve"><path d="M23.07 48.7c-9.59-1.3-17.28-8.56-19.21-17.93-.13-.09-.24-.21-.32-.35L.15 24.54c-.2-.35-.2-.77 0-1.12.2-.35.57-.56.97-.56h2.51c1.42-9.8 9.08-17.58 18.82-19.17.06-.06.13-.11.2-.15L28.53.15c.35-.2.77-.2 1.12 0s.56.57.56.97v2.63c9.56 1.72 17.05 9.41 18.46 19.08l3.18 5.51c.2.35.2.77 0 1.12-.2.35-.57.56-.97.56h-2.3c-1.56 9.14-8.57 16.41-17.57 18.37-.09.15-.23.28-.39.37l-5.88 3.39c-.35.2-.77.2-1.12 0-.35-.2-.56-.57-.56-.97V48.7zm6.74-2.35c8.33-1.5 14.92-8.03 16.5-16.33H44.1c-.4 0-.77-.21-.97-.56-.2-.35-.2-.77 0-1.12l3.26-5.64c-1.41-8.37-7.9-15.01-16.18-16.67V7.9c0 .4-.21.77-.56.97-.35.2-.77.2-1.12 0l-5.27-3.04c-8.89 1.25-15.95 8.2-17.37 17.03H7.9c.4 0 .77.21.97.56.2.35.2.77 0 1.12l-2.95 5.1c1.49 8.67 8.42 15.49 17.15 16.8V44.4c0-.4.21-.77.56-.97.35-.2.77-.2 1.12 0l5.06 2.92zm11.65-20.2c0 8.45-6.86 15.3-15.3 15.3-8.45 0-15.3-6.86-15.3-15.3s6.86-15.3 15.3-15.3c8.44 0 15.3 6.86 15.3 15.3zm-2.24 0c0-7.21-5.86-13.07-13.07-13.07s-13.07 5.86-13.07 13.07 5.86 13.07 13.07 13.07 13.07-5.86 13.07-13.07zm-13.07-5.64c-1.25 0-2.26 1.01-2.26 2.26 0 1.25 1.01 2.26 2.25 2.26h.16c2.42.08 4.35 2.06 4.35 4.5 0 2.1-1.44 3.86-3.38 4.36v1.72c0 .62-.5 1.12-1.12 1.12-.62 0-1.12-.5-1.12-1.12v-1.72c-.89-.23-1.67-.72-2.25-1.38-.41-.46-.36-1.17.1-1.58.46-.41 1.17-.36 1.58.1.41.47 1.02.77 1.7.77 1.25 0 2.26-1.01 2.26-2.26 0-1.25-.99-2.24-2.22-2.26h-.03c-2.49 0-4.5-2.01-4.5-4.5 0-2.1 1.44-3.86 3.38-4.36V16.7c0-.62.5-1.12 1.12-1.12.62 0 1.12.5 1.12 1.12v1.72c.94.24 1.76.78 2.36 1.5.39.48.32 1.18-.15 1.57-.48.39-1.18.32-1.57-.15-.44-.51-1.07-.83-1.78-.83zm21.48 7.27h1.31l-1.46-2.52-1.46 2.52h1.61zM4.61 25.1H3.05l1.46 2.52 1.46-2.52H4.61zM27.97 4.69V3.05l-2.52 1.46 2.52 1.46V4.69zm-2.66 43.02v1.53l2.52-1.46-2.52-1.46V47.71z" fill-rule="evenodd" clip-rule="evenodd" fill="#0056D3"/></svg>
                </div>
                <p class="sub-titulo">Fundo de Investimento em Participações</p>
                <p class="topico">Público-alvo</p>
                <p>Investidor Profissional</p>
                <p class="topico">Tipo de ativo/estratégia</p>
                <p>Participação em empresas.</p>
                <p class="topico">Ticket mínimo previsto para os investimentos</p>
                <p>R$ 100.000,00</p>
            </div>
            <div>
                <div class="icone">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52.05" xml:space="preserve"><path d="M38.25 25.22c2.47 2.85 3.96 6.56 3.96 10.62 0 8.96-7.26 16.22-16.22 16.22S9.78 44.8 9.78 35.84c0-4.06 1.49-7.77 3.96-10.62L.15 1.67c-.2-.35-.2-.77 0-1.11C.35.21.71 0 1.11 0h17.33c.4 0 .77.21.96.56L26 11.98 32.6.56c.19-.35.56-.56.96-.56h17.33c.4 0 .77.21.96.56.2.34.2.77 0 1.11l-13.6 23.55zm-14.16-5.48c.27-.03.54-.06.81-.07.36-.03.73-.04 1.09-.04 1.72 0 3.37.27 4.92.76 1.48.47 2.86 1.15 4.12 1.99.56.37 1.08.78 1.59 1.21 2.31-4.01 9.68-16.77 12.34-21.37H34.2l-7.24 12.54-2.87 4.98zm.63-5.53L17.8 2.22H3.04l12.34 21.37c1.12-.97 2.38-1.8 3.73-2.43.66-.31 1.35-.58 2.06-.8l3.55-6.15zm11.34 11.91c-.68-.71-1.44-1.34-2.26-1.9-1.08-.73-2.28-1.31-3.55-1.71-1.34-.43-2.77-.66-4.25-.66-.31 0-.62.01-.93.03h-.01c-1.78.12-3.47.57-5 1.29-1.55.73-2.94 1.73-4.12 2.95l-.03.03c-2.41 2.51-3.89 5.93-3.89 9.68 0 7.73 6.26 13.99 13.99 13.99S40 43.56 40 35.83c0-3.75-1.48-7.17-3.89-9.68-.03 0-.04-.02-.05-.03zm.6 9.72c0 5.88-4.78 10.66-10.66 10.66s-10.66-4.78-10.66-10.66S20.12 25.18 26 25.18s10.66 4.78 10.66 10.66zm-2.23 0c0-4.65-3.78-8.43-8.43-8.43s-8.43 3.78-8.43 8.43 3.78 8.43 8.43 8.43c4.66 0 8.43-3.78 8.43-8.43z" fill-rule="evenodd" clip-rule="evenodd" fill="#0056D3"/></svg>
                </div>
                <p class="sub-titulo">Situações Especiais</p>
                <p class="topico">Público-alvo</p>
                <p>Investidor Profissional e Qualificado.</p>
                <p class="topico">Tipo de ativo/estratégia</p>
                <p>Estruturação de produtos personalizados para demandas específicas.</p>
                <p class="topico">Ticket mínimo previsto para os investimentos</p>
                <p>Não há</p>
            </div>
        </div>

    </div>
</section> -->

<section class="nossa-equipe" id="equipe">
    <div class="container">
        <h2 class="titulo">Nossa equipe</h2>

        <div class="slider-equipe">
            <div>
                <div class="icone">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 55.89" xml:space="preserve"><path d="M49.42 42.33c-.4-.64-1.21-2.01-12.82-4.9l-3.42-3.29c1.71-1.75 3.09-4.06 4.03-6.68 1.68-.81 2.89-2.69 3.12-4.87.17-1.75-.27-3.42-1.24-4.6.27-7.35-.94-12.29-3.66-15.14-3.09-3.26-7.96-3.66-14.8-1.28-.57-.03-1.01-.07-1.41-.07-1.14 0-2.79.17-4.06 1.51-1.98 2.08-2.69 6.58-2.28 14.97-.97 1.21-1.41 2.89-1.24 4.6.23 2.18 1.44 4.1 3.12 4.87.94 2.65 2.35 4.93 4.06 6.68l-3.42 3.29c-11.58 2.89-12.42 4.26-12.82 4.9C1.21 44.65.07 54.11 0 54.52c-.03.34.07.7.3.97.23.27.57.4.91.4h49.55c.34 0 .67-.13.91-.4s.34-.6.3-.97c-.31-2.35-1.31-10.11-2.55-12.19zm-25.69-.54h-.07c-.24 0-.4-.2-.4-.4v-1.17c0-.24.2-.4.4-.4h4.63c.23 0 .4.2.4.4v1.17c0 .24-.2.4-.5.4h-4.5.04zm1.01 2.46h2.48l.78 3.76h-4.06l.77-3.76h.03zm5.34 1.67-.4-2.01c.94-.5 1.51-1.48 1.51-2.52v-1.17c0-1.58-1.28-2.85-2.85-2.85h-.54c1.21-.27 2.38-.81 3.52-1.61l3.12 2.99-4.36 7.17zm-5.88-8.56h-.54c-1.58 0-2.85 1.28-2.85 2.85v1.17c0 1.04.57 2.01 1.51 2.52l-.4 2.05-4.33-7.18 3.12-2.99c1.14.81 2.32 1.34 3.52 1.61l-.03-.03zm11.72-12.05c-.4.1-.7.4-.84.81-1.78 5.37-5.44 9-9.1 9-3.66 0-7.32-3.63-9.1-9-.13-.4-.44-.67-.84-.77-1.01-.3-1.85-1.54-1.98-3.02-.1-1.11.2-2.22.81-2.92 1.17-.54 4.83-2.48 6.38-6.01 2.25 1.31 7.79 4.2 15.91 6.11.57.7.84 1.75.74 2.82-.17 1.48-.97 2.72-1.98 3.02v-.04zm-13.6 25.11s.1.03.13.03H29.57c.4 0 .77-.24.97-.57l6.01-9.94c9.74 2.45 10.74 3.63 10.74 3.66.64 1.07 1.48 5.67 2.05 9.84H2.62c.54-4.03 1.41-8.76 2.05-9.84.03-.03 1.01-1.21 10.78-3.69l6.01 9.94c.2.3.5.5.91.54l-.05.03zm-1.04-39.91c-.2-.13-.44-.23-.7-.23-.17 0-.3 0-.44.1-.37.13-.67.47-.74.91-.5 2.45-2.65 4.2-4.1 5.1-.2-6.48.34-10.31 1.64-11.72.5-.54 1.17-.74 2.28-.74.47 0 .94.03 1.44.07.17 0 .37 0 .54-.07 5.98-2.15 10.07-1.95 12.45.57 2.08 2.18 3.09 6.34 2.99 12.35-9.68-2.45-15.29-6.31-15.36-6.34z" fill="#0056D3"/></svg>
                </div>
                <p class="nome">Rodrigo Beresca, CGA</p>
                <p class="paragrafo">Co-fundador&Partner, Portfolio Manager e Diretor CVM responsável pela gestão dos fundos e  operações estruturadas. Profissional com 12 anos de experiência no mercado financeiro com passagem pela mesa proprietária da Tesouraria do Banco Santander e corretoras de Investimentos. Formado em Engenharia Civil pela Escola Politécnica da Universidade de São Paulo, possui as certificações CPA20, CEA, CGA e CGE da Anbima e aprovado na prova CFA Nível 1.</p>
            </div>
            <div>
                <div class="icone">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 55.89" xml:space="preserve"><path d="M49.42 42.33c-.4-.64-1.21-2.01-12.82-4.9l-3.42-3.29c1.71-1.75 3.09-4.06 4.03-6.68 1.68-.81 2.89-2.69 3.12-4.87.17-1.75-.27-3.42-1.24-4.6.27-7.35-.94-12.29-3.66-15.14-3.09-3.26-7.96-3.66-14.8-1.28-.57-.03-1.01-.07-1.41-.07-1.14 0-2.79.17-4.06 1.51-1.98 2.08-2.69 6.58-2.28 14.97-.97 1.21-1.41 2.89-1.24 4.6.23 2.18 1.44 4.1 3.12 4.87.94 2.65 2.35 4.93 4.06 6.68l-3.42 3.29c-11.58 2.89-12.42 4.26-12.82 4.9C1.21 44.65.07 54.11 0 54.52c-.03.34.07.7.3.97.23.27.57.4.91.4h49.55c.34 0 .67-.13.91-.4s.34-.6.3-.97c-.31-2.35-1.31-10.11-2.55-12.19zm-25.69-.54h-.07c-.24 0-.4-.2-.4-.4v-1.17c0-.24.2-.4.4-.4h4.63c.23 0 .4.2.4.4v1.17c0 .24-.2.4-.5.4h-4.5.04zm1.01 2.46h2.48l.78 3.76h-4.06l.77-3.76h.03zm5.34 1.67-.4-2.01c.94-.5 1.51-1.48 1.51-2.52v-1.17c0-1.58-1.28-2.85-2.85-2.85h-.54c1.21-.27 2.38-.81 3.52-1.61l3.12 2.99-4.36 7.17zm-5.88-8.56h-.54c-1.58 0-2.85 1.28-2.85 2.85v1.17c0 1.04.57 2.01 1.51 2.52l-.4 2.05-4.33-7.18 3.12-2.99c1.14.81 2.32 1.34 3.52 1.61l-.03-.03zm11.72-12.05c-.4.1-.7.4-.84.81-1.78 5.37-5.44 9-9.1 9-3.66 0-7.32-3.63-9.1-9-.13-.4-.44-.67-.84-.77-1.01-.3-1.85-1.54-1.98-3.02-.1-1.11.2-2.22.81-2.92 1.17-.54 4.83-2.48 6.38-6.01 2.25 1.31 7.79 4.2 15.91 6.11.57.7.84 1.75.74 2.82-.17 1.48-.97 2.72-1.98 3.02v-.04zm-13.6 25.11s.1.03.13.03H29.57c.4 0 .77-.24.97-.57l6.01-9.94c9.74 2.45 10.74 3.63 10.74 3.66.64 1.07 1.48 5.67 2.05 9.84H2.62c.54-4.03 1.41-8.76 2.05-9.84.03-.03 1.01-1.21 10.78-3.69l6.01 9.94c.2.3.5.5.91.54l-.05.03zm-1.04-39.91c-.2-.13-.44-.23-.7-.23-.17 0-.3 0-.44.1-.37.13-.67.47-.74.91-.5 2.45-2.65 4.2-4.1 5.1-.2-6.48.34-10.31 1.64-11.72.5-.54 1.17-.74 2.28-.74.47 0 .94.03 1.44.07.17 0 .37 0 .54-.07 5.98-2.15 10.07-1.95 12.45.57 2.08 2.18 3.09 6.34 2.99 12.35-9.68-2.45-15.29-6.31-15.36-6.34z" fill="#0056D3"/></svg>
                </div>
                <p class="nome">Deib Otoch Neto</p>
                <p class="paragrafo">Co-fundador & Partner, Diretor de Risco e Compliance. Profissional com 7 anos de experiência no mercado financeiro em estruturação e avalição de risco de crédito, de liquidez e de mercado em FIDC, Direito Creditório, Butique de Crédito, Agronegócio, e Exportação. Formado em economia, teve passagem por áreas de risco, controles internos e Business Partner na Lockton Corretora de Seguros, Grupo Multiplica e Lako Capital.</p>
            </div>
            <div>
                <div class="icone">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 56.87" xml:space="preserve"><path d="M49.42 43.31c-.37-.6-1.34-2.18-14.77-5.37l-1.28-.34v-2.69c1.61-1.75 2.92-3.96 3.83-6.51 1.68-.77 2.89-2.69 3.12-4.87.17-1.75-.27-3.42-1.24-4.63.17-9-3.86-12.79-7.32-14.37C31.25 1.88 28.87 0 26.02 0s-5.24 1.91-5.74 4.53c-3.46 1.58-7.49 5.37-7.32 14.37-.97 1.21-1.44 2.89-1.24 4.63.24 2.18 1.44 4.1 3.12 4.87.91 2.52 2.22 4.77 3.83 6.51v2.69l-1.28.34c-13.46 3.19-14.44 4.8-14.77 5.37C1.17 45.62 0 55.39 0 55.49c-.03.34.07.7.3.97.23.27.57.4.91.4h49.55c.34 0 .67-.13.91-.4.23-.27.34-.6.3-.97-.31-2.35-1.31-10.14-2.55-12.18zm-34.88 5.3c-.1.5.13 1.04.57 1.31.47.27 1.01.2 1.41-.13l2.28-1.98 6.38 5.47c.47.4 1.14.4 1.61 0l6.38-5.47 2.28 1.98c.4.34.97.4 1.41.13.44-.27.67-.81.57-1.31l-1.54-7.89c8.33 2.05 11.11 3.42 11.41 3.83.64 1.07 1.48 5.67 2.05 9.84H2.62c.54-4.06 1.41-8.76 2.05-9.84.3-.44 3.12-1.78 11.45-3.86l-1.54 7.89-.04.03zm16.38-10.34-4.93 11.08-4.93-11.08v-1.38c1.68 1.07 3.36 1.61 4.93 1.61 1.58 0 3.26-.54 4.93-1.61v1.38zm3.05 6.98c-.47-.4-1.14-.4-1.61 0l-3.05 2.62 3.52-7.89.44.1 1.07 5.51-.4-.34h.03zm1.95-18.96c-.4.1-.71.4-.84.81-.84 2.55-2.18 4.83-3.76 6.45 0 0-2.55 2.52-5.27 2.52s-5.27-2.48-5.3-2.52c-1.61-1.61-2.95-3.89-3.79-6.45-.13-.4-.44-.67-.84-.81-1.01-.27-1.81-1.51-1.98-2.99-.1-1.11.2-2.25.81-2.92l11.08-5.04 11.11 5.04c.6.7.94 1.81.81 2.92-.17 1.48-.97 2.72-1.98 2.99h-.05zM19.13 39.98l3.52 7.89-3.05-2.62c-.24-.2-.5-.3-.81-.3-.3 0-.57.1-.81.3l-.37.34 1.07-5.51.45-.1zm7.39-27.12c-.3-.13-.67-.13-1.01 0l-10.1 4.6c.27-7.05 3.63-9.84 6.45-10.91h.03c.3-.13 1.98-.74 4.13-.74s3.83.6 4.16.77c2.79 1.07 6.14 3.86 6.45 10.91l-10.1-4.6v-.03zm-3.12-9.3c.64-.7 1.58-1.11 2.58-1.11 1.01 0 1.95.4 2.58 1.11-1.75-.34-3.42-.34-5.2 0h.04z" fill="#0056D3"/></svg>
                </div>
                <p class="nome">Debora Donato</p>
                <p class="paragrafo">Profissional com 19 anos de experiência no mercado financeiro na área de crédito privado. Atuou em empresas como AdValorem Fomento, Apollo FIDC e Sinai Brasil Serviços Financeiros onde foi responsável  pela gestãi de área operacional, risco e análise de crédito. Graduada em Gestão Financeira pela Universidade Santo Amaro.</p>
            </div>
            <div>
                <div class="icone">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 56.87" xml:space="preserve"><path d="M49.42 43.31c-.37-.6-1.34-2.18-14.77-5.37l-1.28-.34v-2.69c1.61-1.75 2.92-3.96 3.83-6.51 1.68-.77 2.89-2.69 3.12-4.87.17-1.75-.27-3.42-1.24-4.63.17-9-3.86-12.79-7.32-14.37C31.25 1.88 28.87 0 26.02 0s-5.24 1.91-5.74 4.53c-3.46 1.58-7.49 5.37-7.32 14.37-.97 1.21-1.44 2.89-1.24 4.63.24 2.18 1.44 4.1 3.12 4.87.91 2.52 2.22 4.77 3.83 6.51v2.69l-1.28.34c-13.46 3.19-14.44 4.8-14.77 5.37C1.17 45.62 0 55.39 0 55.49c-.03.34.07.7.3.97.23.27.57.4.91.4h49.55c.34 0 .67-.13.91-.4.23-.27.34-.6.3-.97-.31-2.35-1.31-10.14-2.55-12.18zm-34.88 5.3c-.1.5.13 1.04.57 1.31.47.27 1.01.2 1.41-.13l2.28-1.98 6.38 5.47c.47.4 1.14.4 1.61 0l6.38-5.47 2.28 1.98c.4.34.97.4 1.41.13.44-.27.67-.81.57-1.31l-1.54-7.89c8.33 2.05 11.11 3.42 11.41 3.83.64 1.07 1.48 5.67 2.05 9.84H2.62c.54-4.06 1.41-8.76 2.05-9.84.3-.44 3.12-1.78 11.45-3.86l-1.54 7.89-.04.03zm16.38-10.34-4.93 11.08-4.93-11.08v-1.38c1.68 1.07 3.36 1.61 4.93 1.61 1.58 0 3.26-.54 4.93-1.61v1.38zm3.05 6.98c-.47-.4-1.14-.4-1.61 0l-3.05 2.62 3.52-7.89.44.1 1.07 5.51-.4-.34h.03zm1.95-18.96c-.4.1-.71.4-.84.81-.84 2.55-2.18 4.83-3.76 6.45 0 0-2.55 2.52-5.27 2.52s-5.27-2.48-5.3-2.52c-1.61-1.61-2.95-3.89-3.79-6.45-.13-.4-.44-.67-.84-.81-1.01-.27-1.81-1.51-1.98-2.99-.1-1.11.2-2.25.81-2.92l11.08-5.04 11.11 5.04c.6.7.94 1.81.81 2.92-.17 1.48-.97 2.72-1.98 2.99h-.05zM19.13 39.98l3.52 7.89-3.05-2.62c-.24-.2-.5-.3-.81-.3-.3 0-.57.1-.81.3l-.37.34 1.07-5.51.45-.1zm7.39-27.12c-.3-.13-.67-.13-1.01 0l-10.1 4.6c.27-7.05 3.63-9.84 6.45-10.91h.03c.3-.13 1.98-.74 4.13-.74s3.83.6 4.16.77c2.79 1.07 6.14 3.86 6.45 10.91l-10.1-4.6v-.03zm-3.12-9.3c.64-.7 1.58-1.11 2.58-1.11 1.01 0 1.95.4 2.58 1.11-1.75-.34-3.42-.34-5.2 0h.04z" fill="#0056D3"/></svg>
                </div>
                <p class="nome">Fernanda Donato</p>
                <p class="paragrafo">Advogada com Pós-Graduação em Direito Empresarial contando com 10 anos de experiência no mercado financeiro em Banco, Fomento Mercantil, FIDC, FIDC-NP e Securitizadora. Ao longo da carreira atuou nas áreas de Análise de Crédito, Compliance e Risco, Antecipação de Recebíveis, Negociações e Operações Estruturadas.</p>
            </div>
            <div>
                <div class="icone">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 56.87" xml:space="preserve"><path d="M49.42 43.31c-.37-.6-1.34-2.18-14.77-5.37l-1.28-.34v-2.69c1.61-1.75 2.92-3.96 3.83-6.51 1.68-.77 2.89-2.69 3.12-4.87.17-1.75-.27-3.42-1.24-4.63.17-9-3.86-12.79-7.32-14.37C31.25 1.88 28.87 0 26.02 0s-5.24 1.91-5.74 4.53c-3.46 1.58-7.49 5.37-7.32 14.37-.97 1.21-1.44 2.89-1.24 4.63.24 2.18 1.44 4.1 3.12 4.87.91 2.52 2.22 4.77 3.83 6.51v2.69l-1.28.34c-13.46 3.19-14.44 4.8-14.77 5.37C1.17 45.62 0 55.39 0 55.49c-.03.34.07.7.3.97.23.27.57.4.91.4h49.55c.34 0 .67-.13.91-.4.23-.27.34-.6.3-.97-.31-2.35-1.31-10.14-2.55-12.18zm-34.88 5.3c-.1.5.13 1.04.57 1.31.47.27 1.01.2 1.41-.13l2.28-1.98 6.38 5.47c.47.4 1.14.4 1.61 0l6.38-5.47 2.28 1.98c.4.34.97.4 1.41.13.44-.27.67-.81.57-1.31l-1.54-7.89c8.33 2.05 11.11 3.42 11.41 3.83.64 1.07 1.48 5.67 2.05 9.84H2.62c.54-4.06 1.41-8.76 2.05-9.84.3-.44 3.12-1.78 11.45-3.86l-1.54 7.89-.04.03zm16.38-10.34-4.93 11.08-4.93-11.08v-1.38c1.68 1.07 3.36 1.61 4.93 1.61 1.58 0 3.26-.54 4.93-1.61v1.38zm3.05 6.98c-.47-.4-1.14-.4-1.61 0l-3.05 2.62 3.52-7.89.44.1 1.07 5.51-.4-.34h.03zm1.95-18.96c-.4.1-.71.4-.84.81-.84 2.55-2.18 4.83-3.76 6.45 0 0-2.55 2.52-5.27 2.52s-5.27-2.48-5.3-2.52c-1.61-1.61-2.95-3.89-3.79-6.45-.13-.4-.44-.67-.84-.81-1.01-.27-1.81-1.51-1.98-2.99-.1-1.11.2-2.25.81-2.92l11.08-5.04 11.11 5.04c.6.7.94 1.81.81 2.92-.17 1.48-.97 2.72-1.98 2.99h-.05zM19.13 39.98l3.52 7.89-3.05-2.62c-.24-.2-.5-.3-.81-.3-.3 0-.57.1-.81.3l-.37.34 1.07-5.51.45-.1zm7.39-27.12c-.3-.13-.67-.13-1.01 0l-10.1 4.6c.27-7.05 3.63-9.84 6.45-10.91h.03c.3-.13 1.98-.74 4.13-.74s3.83.6 4.16.77c2.79 1.07 6.14 3.86 6.45 10.91l-10.1-4.6v-.03zm-3.12-9.3c.64-.7 1.58-1.11 2.58-1.11 1.01 0 1.95.4 2.58 1.11-1.75-.34-3.42-.34-5.2 0h.04z" fill="#0056D3"/></svg>
                </div>
                <p class="nome">Amanda Vargas</p>
                <p class="paragrafo">Formada em ciências contábeis, profissional com 10 anos de experiência em Family office e consultoria especializada para FIDC. Atua em gestão societária e paralegal, administrativo, financeiro, Governance office e operações de FIDC.</p>
            </div>
            <div>
                <div class="icone">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 55.89" xml:space="preserve"><path d="M49.42 42.33c-.4-.64-1.21-2.01-12.82-4.9l-3.42-3.29c1.71-1.75 3.09-4.06 4.03-6.68 1.68-.81 2.89-2.69 3.12-4.87.17-1.75-.27-3.42-1.24-4.6.27-7.35-.94-12.29-3.66-15.14-3.09-3.26-7.96-3.66-14.8-1.28-.57-.03-1.01-.07-1.41-.07-1.14 0-2.79.17-4.06 1.51-1.98 2.08-2.69 6.58-2.28 14.97-.97 1.21-1.41 2.89-1.24 4.6.23 2.18 1.44 4.1 3.12 4.87.94 2.65 2.35 4.93 4.06 6.68l-3.42 3.29c-11.58 2.89-12.42 4.26-12.82 4.9C1.21 44.65.07 54.11 0 54.52c-.03.34.07.7.3.97.23.27.57.4.91.4h49.55c.34 0 .67-.13.91-.4s.34-.6.3-.97c-.31-2.35-1.31-10.11-2.55-12.19zm-25.69-.54h-.07c-.24 0-.4-.2-.4-.4v-1.17c0-.24.2-.4.4-.4h4.63c.23 0 .4.2.4.4v1.17c0 .24-.2.4-.5.4h-4.5.04zm1.01 2.46h2.48l.78 3.76h-4.06l.77-3.76h.03zm5.34 1.67-.4-2.01c.94-.5 1.51-1.48 1.51-2.52v-1.17c0-1.58-1.28-2.85-2.85-2.85h-.54c1.21-.27 2.38-.81 3.52-1.61l3.12 2.99-4.36 7.17zm-5.88-8.56h-.54c-1.58 0-2.85 1.28-2.85 2.85v1.17c0 1.04.57 2.01 1.51 2.52l-.4 2.05-4.33-7.18 3.12-2.99c1.14.81 2.32 1.34 3.52 1.61l-.03-.03zm11.72-12.05c-.4.1-.7.4-.84.81-1.78 5.37-5.44 9-9.1 9-3.66 0-7.32-3.63-9.1-9-.13-.4-.44-.67-.84-.77-1.01-.3-1.85-1.54-1.98-3.02-.1-1.11.2-2.22.81-2.92 1.17-.54 4.83-2.48 6.38-6.01 2.25 1.31 7.79 4.2 15.91 6.11.57.7.84 1.75.74 2.82-.17 1.48-.97 2.72-1.98 3.02v-.04zm-13.6 25.11s.1.03.13.03H29.57c.4 0 .77-.24.97-.57l6.01-9.94c9.74 2.45 10.74 3.63 10.74 3.66.64 1.07 1.48 5.67 2.05 9.84H2.62c.54-4.03 1.41-8.76 2.05-9.84.03-.03 1.01-1.21 10.78-3.69l6.01 9.94c.2.3.5.5.91.54l-.05.03zm-1.04-39.91c-.2-.13-.44-.23-.7-.23-.17 0-.3 0-.44.1-.37.13-.67.47-.74.91-.5 2.45-2.65 4.2-4.1 5.1-.2-6.48.34-10.31 1.64-11.72.5-.54 1.17-.74 2.28-.74.47 0 .94.03 1.44.07.17 0 .37 0 .54-.07 5.98-2.15 10.07-1.95 12.45.57 2.08 2.18 3.09 6.34 2.99 12.35-9.68-2.45-15.29-6.31-15.36-6.34z" fill="#0056D3"/></svg>
                </div>
                <p class="nome">Luiz Guilherme Camasmie</p>
                <p class="paragrafo">Profissional com 20 anos de experiência no mercado financeiro nas áreas de Sales e Relacionamento com Investidores. Foi cofundador da Perfin Investimentos e teve passagem pelas gestoras W7 Venture Capital e Grupo Multiplica.</p>
            </div>
        </div>
    </div>
</section>

<section class="valores">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <picture>
                    <source media="(max-width: 799px)" srcset="<?php echo do_shortcode("[img-url]"); ?>valores-diretrizes-img-mobile.jpg">
                        <img class="img-fluid" src="<?php echo do_shortcode("[img-url]"); ?>valores-diretrizes-img.jpg" alt="Valores e diretrizes de Gestão" />
                    </source>
                </picture>
            </div>
            <div class="col-12 col-md-6 ">
                <h2 class="titulo">Valores e diretrizes de Gestão</h2>

                <p class="topico">Excelência</p>
                <p class="paragrafo">Nossa equipe é comprometida e formada por profissionais experientes no mercado. O alinhamento de interesses garante que todos trabalhem juntos, movendo-se na mesma direção.</p>

                <p class="topico">Pessoas</p>
                <p class="paragrafo">Nosso maior ativo são as pessoas. Valorizamos atitude, proatividade e espírito empreendedor, com o desafio de atrair, treinar e reter bons talentos para um crescimento mútuo.</p>

                <p class="topico">Filosofia</p>
                <p class="paragrafo">Através de um modelo de partnership e gestão meritocrática, buscamos atrair e reter excelentes profissionais do mercado. Essa filosofia estimula o trabalho em equipe e premiando os a excelência nos resultados.</p>

                <p class="topico">Propósito e Crença</p>
                <p class="paragrafo">O crédito impulsiona conexões, transforma vidas e realiza sonhos. Nosso objetivo é expandir o crédito com soluções inovadoras, facilitando as conexões entre investidores e tomadores de crédito.</p>

                <p class="topico">Resultados</p>
                <p class="paragrafo">Com um capital humano de alta qualidade e valores éticos, empenhamo-nos constantemente em gerar resultados diferenciados para os nossos clientes.</p>
            </div>

        </div>
    </div>
</section>
<section class="estrutura">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-7 ">
                
                <h2 class="titulo">Estrutura organizacional</h2>
                <div class="slider-estrutura">
                    <div>
                    <p class="topico">Comitê de Investimentos</p>
                    <p class="paragrafo">Reunião mensal para discutir o cenário macroeconômico e de crédito nacional, avaliando os impactos em nossos ativos e ajustando nossas estratégias de acordo com as mudanças no mercado.</p>
                    </div>
                    <div>
                    <p class="topico">Comitê de Crédito</p>
                    <p class="paragrafo">Reunião quinzenal, composta pela equipe de gestão, risco e consultorias especializadas para deliberar sobre novas operações, cedentes/sacados e exposição de crédito das carteiras.</p>
                    </div>
                    <div>
                    <p class="topico">Relação com investidor</p>
                    <p class="paragrafo">Responsável pela comunicação e transparência com os clientes, o RI, fornece informações relevantes e mantém um canal de relacionamento aberto com os investidores.</p>
                    </div>
                    <div>
                    <p class="topico">Risco</p>
                    <p class="paragrafo">Reuniões da equipe de Risco e Operações discutem ações para grandes oscilações de risco. Operações são monitoradas continuamente, com relatórios diários para a gestão e o Comitê Executivo.</p>
                    </div>
                    <div>
                    <p class="topico">Compliance</p>
                    <p class="paragrafo">Reunião mensal composta pela equipe de Compliance e Risco. Delibera e define as regras, procedimentos e controles internos para mitigação de risco institucional, regulatório, operacional e de imagem.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-5 d-none d-md-block">
                <picture>
                    <img class="img-fluid" src="<?php echo do_shortcode("[img-url]"); ?>estrutura-organizacional-img.jpg" alt="Estrutura organizacional" />
                </picture>
            </div>
        </div>
    </div>
</section>

<section class="processo-investimento" id="processo-de-investimento">

    <div class="container">

        <h2 class="titulo">Processo de Investimento</h2>

        <div class="slider-equipe">
            <div>
                <div class="icone">
                    1
                </div>
                <p class="paragrafo">O time de gestão de crédito e risco é responsável por conduzir, com o auxílio das consultoras especializadas, o processo de pesquisa, atribuição de Rating Interno e monitoramento dos cedentes/sacados e emissões.</p>
            </div>
            <div>
                <div class="icone">
                    2
                </div>
                <p class="paragrafo">Todas as operações adquiridas e mantidas nos fundos são submetidas a um ranking definido pelo Rating Interno e a um rigoroso monitoramento de crédito.</p>
            </div>
            <div>
                <div class="icone">
                    3
                </div>
                <p class="paragrafo">O <i>Rating Interno</i> é uma ferramenta utilizada para determinar a capacidade e disposição de um emissor de cumprir as obrigações assumidas em um instrumento de dívida.</p>
            </div>
            <div>
                <div class="icone">
                    4
                </div>
                <p class="paragrafo">A nota do <i>Rating Interno</i> de uma determinada emissão também pode variar em relação a nota do emissor por características específicas como senioridade/subordinação e garantias atreladas.</p>
            </div>
            <div>
                <div class="icone">
                    5
                </div>
                <p class="paragrafo">As equipes de compliance e jurídico trabalham em conjunto verificando as condições precedentes, documentos de formalização, relatórios externos, legal Opinion e mandato dos fundos investidores.</p>
            </div>
            <div>
                <div class="icone">
                    6
                </div>
                <p class="paragrafo">A área de risco tem atuação independente da equipe de gestão. Reporta diretamente ao comitê os eventos de violação de limites de risco e mandatos. Tem como responsabilidade a execução de reenquadramento quando houver necessidade.</p>
            </div>
        </div>
    </div>
</section>


<!-- <section class="parcerias">
    <div class="container">
        <h2 class="titulo">Parcerias e Sistemas</h2>
        <div class="slider-parcerias">
            <div><img class="img-fluid" src="<?php echo do_shortcode("[img-url]"); ?>parcerias-logo-1.png" alt="Darmont" /></div>
            <div><img class="img-fluid" src="<?php echo do_shortcode("[img-url]"); ?>parcerias-logo-2.png" alt="Alfama" /></div>
            <div><img class="img-fluid" src="<?php echo do_shortcode("[img-url]"); ?>parcerias-logo-3.png" alt="Sinai" /></div>
            <div><img class="img-fluid" src="<?php echo do_shortcode("[img-url]"); ?>parcerias-logo-4.png" alt="Vaju" /></div>
            <div><img class="img-fluid" src="<?php echo do_shortcode("[img-url]"); ?>parcerias-logo-5.png" alt="Planner" /></div>
            <div><img class="img-fluid" src="<?php echo do_shortcode("[img-url]"); ?>parcerias-logo-6.png" alt="Sinqia" /></div>
            <div><img class="img-fluid" src="<?php echo do_shortcode("[img-url]"); ?>parcerias-logo-7.png" alt="Lote 45" /></div>
        </div>
    </div>
</section> -->

<?php
    get_footer();
?>