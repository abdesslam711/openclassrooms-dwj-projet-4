<?php

/* variables à remplir */
$title = 'Contact';
$metaDescription = '';

/* début de la variable $content */
ob_start();
?>

<header id="contact-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="display-4 main-title text-center text-white d-inline-block position-relative">Contactez-moi</h1>
            </div>
            <div class="col-lg-8 offset-2 text-center">
                <p id="text-form" class="text-center text-white">Adressez votre demande via le formulaire de contact ci-dessous et je vous répondrai dans les plus brefs délais !</p>
            </div>
        </div>
    </div>
</header>

<section id="contact-form">
    <div class="container bg-dark">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 mb-5 mt-5">
                <h5 class="text-center mt-4 mb-5 text-white">Formulaire de contact</h5>
                <form action="index.php?action=contact" method="post">
                    <div class="form-row">
                        <div class="form-group col-6">
                            <label for="form-firstname" class="text-white">Votre prénom</label>
                            <input type="text" class="form-control" name="form-firstname" id="form-firstname" placeholder="Prénom" required>
                        </div>
                        <div class="form-group col-6">
                            <label for="form-name" class="text-white">Votre nom</label>
                            <input type="text" class="form-control" name="form-name" id="form-name" placeholder="Nom" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="form-mail" class="text-white">Votre adresse e-mail</label>
                        <input type="email" class="form-control" name="form-mail" id="form-mail" placeholder="votre_adresse@mail.com" required>
                    </div>
                    <div class="form-group">
                        <label for="form-subject" class="text-white">Objet du message <span>(en moins de 255 caractères)</span></label>
                        <input type="text" class="form-control" name="form-subject" id="form-subject" placeholder="Objet du message" required>
                    </div>
                    <div class="form-group">
                        <label for="form-message" class="text-white mt-2">Votre message</label>
                        <textarea class="form-control" name="form-message" id="form-message" rows="3" placeholder="Votre message" required></textarea>
                    </div>
                    <div class="form-check text-center mt-4">
                        <input class="form-check-input" type="checkbox" name="request-check" id="request-check">
                        <label class="form-check-label text-white" for="request-check">
                            Je ne suis pas un Robot ♪
                        </label>
                    </div>
                    <div class="col-lg-12 text-center">
                        <button type="submit" class="btn btn-primary mt-4 px-4">Envoyer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php
$content = ob_get_clean(); // fin du contenu de la variable $content 
// appel du template
require('view/frontend/templateFrontend.php');
?>