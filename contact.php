<?php
require_once 'header.php';
?>
    
    <main>
        <div id="container">
            <div class="main-left">
                <h1>Contact :</h1>
                <div class="main-left-el1 main-el">
                    <form action="#">
                        <label for="name">Votre nom : </label>
                        <input class="form-contact" type="text" name="name" placeholder="Nom">
                        <label for="name">Votre prénom : </label>
                        <input class="form-contact" type="text" name="prenom" placeholder="Prénom">
                        <label for="name">Votre email : </label>
                        <input class="form-contact" type="text" name="email" placeholder="Email">
                        <label for="name">Votre message : </label>
                        <textarea class="form-contact" name="message" id="" cols="30" rows="10" placeholder="Message"></textarea>
                        <input class="submit" type="submit" value="Envoyer">
                    </form>
                </div>
            </div>
            <div class="main-right">
                <h2>Actualités :</h2>
                <div class="main-right-el1 main-el">
                    <img src="img/actu.jpg" alt="photo enfant dans jardin" class="img-recyclage">
                    <p class="aside-recyblage">Le plan national santé environnement et les plans régionaux santé environnement</p>
                </div>
                <div class="main-right-el2 main-el">
                    <img src="img/ushuaia.png" alt="fondation pour la nature et l'homme" class="img-recyclage">
                </div>
                <div class="main-right-el3 main-el">
                    <img src="img/wwf.jpg" alt="logo wwf" class="img-recyclage">
                </div>
            </div>
        </div>
    </main>

<?php
    require_once 'footer.php';
?>