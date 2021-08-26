<?php
    include_once("assets/imports/header.php");
?>        
        
<main class="main contato">
    <section class="section-container container">
        <article class="formulario">
            <h2>Formulário de Contato</h2>
            
            <form 
                action="https://formsubmit.co/sobrinhosergio00@gmail.com"   
                method="POST" 
                class="form"
            >

                <div class="name">
                    <label for="name">Nome:</label>
                    <input type="text" name="name" id="name" required placeholder="José Dev." />
                </div>

                <div class="email">
                    <label for="email">E-mail:</label>
                    <input type="email" name="email" id="email" required placeholder="jose.dev@gmail.com" />
                </div>

                <div class="mensagem">
                    <label for="message">Mensagem:</label>
                    <textarea name="message" id="message" required placeholder="Olá, gostei do site. Gostaria.."></textarea>
                </div>

                <input type="hidden" name="_captcha" value="false" />

                <input
                type="hidden"
                name="_next"
                value="https://portifolio-dev-sergio.herokuapp.com/index.php"
                />
                
                <input
                    type="hidden"
                    name="_next"
                    value="https://yourdomain.co/thanks.html"
                />

                <button type="submit" class="btn-enviar">Enviar</button>
            </form>
        </article>

        <iframe class="localizacao" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3692.870827108848!2d-42.524797485577366!3d-22.244979320181358!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x97f53b7d1d661d%3A0x8546df88b7f17ffd!2sCEFET%20-%20Nova%20Friburgo!5e0!3m2!1spt-BR!2sbr!4v1628698012006!5m2!1spt-BR!2sbr" width="500" height="400" style="border:0; border-radius: 15px;" allowfullscreen="" loading="lazy"></iframe>
    </section>
</main>

<?php
    include_once("assets/imports/footer.php");
?>