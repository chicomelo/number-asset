<?php
/* Template Name: Canal de denúncias */ 
    get_header();
    the_content();
?>
<div class="denuncia__wrapper">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-10 offset-md-1">
                <h2 class="titulo">Canal de denúncias</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-5 offset-md-1">
                <p class="paragrafo">
                    O canal de denúncias da Number Asset Brasil foi criado com o intuito de atender ao Decreto n° 8420/15 que regulamenta a Lei Federal Anticorrupção nº 12.846/2013 e pode ser utilizado por qualquer pessoa que possua informações que possam auxiliar no combate à corrupção, fraudes, lavagem de dinheiro, ou quaisquer outras práticas criminosas e/ou desvios de conduta referentes a atividade do Grupo Empírica.
                </p>
                <p class="paragrafo">
                    <i>IMPORTANTE: Este canal não deve ser utilizado para assuntos diversos . Para sugestões e/ou reclamações, favor utilizar o canal “Contato”.</i>
                </p>
            </div>
            <div class="col-12 col-md-5 offset-md-1">
                
                <div class="form-denuncias"><?php echo apply_shortcodes('[contact-form-7 id="170a412" title="Canal de denúncias"]'); ?></div>
                <div class="msg-sucesso">
                    <div class="icone"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 93 93" xml:space="preserve"><circle cx="46.5" cy="46.5" r="46.5" fill="#e6e6e6"/><path d="M60.95 34.69 42.46 53.25l-9.41-9.45c-.92-.92-2.44-.92-3.36 0-.92.92-.92 2.44 0 3.37l11.06 11.1c.46.47 1.05.73 1.71.73s1.25-.26 1.71-.73l20.14-20.21c.92-.92.92-2.44 0-3.37-.92-.92-2.37-.92-3.36 0z" fill="#0042ad"/></svg></div>
                    <p class="titulo">Formulário enviado <br />com sucesso</p>
                    <p class="paragrafo">Agradecemos a sua mensagem.</p>
                    <p class="btn"><a href="javascript: void(0);" title="Nova mensagem">Nova mensagem</a></p>
                </div>
                
            </div>
        </div>
    </div>
</div>
<?php
    get_footer();
?>