

<?php
const PAGE_NAME = 'Catalog';
require_once ('views/page_top.php'); // Includes the defines
?>
        <div id="content">
            <h2>Bienvenue !</h2>
            <p id="intro">
                This is catalog page.
            </p>
            <p id="avertissement">
                Attention! Nos produits sont éco-responsables.
            </p>

            <div id="nouvelles">
                <h2>Dernières nouvelles</h2>
                <p class="info">
                    La saison hivernale s'est révélée très froide et peu propice à la croissance des <em>épicéas</em> qui
                    sont très fragiles au niveau des <em>système racinaire</em>. Avez-vous pensé, ... ?
                    <span class="annonce">Oui ! Celà prouve l'importance du <em>paillage automnale</em>!</span>
                </p>
                <p class="info produit">Avez-vous entendu parler du <span class="arbuste fruitier">Cassis</span> ?. Cet
                    arbre originaire de .....</p>
            </div>

            <form id="contact" name="contact">
                <h2>Laisser un commentaire</h2>
                <label for="nom">Nom:</label><br/>
                <input type="text" name="nom" id="nom"/><br/>
                <label for="commentaire">Commentaire:</label><br/>
                <textarea rows="5" cols="30" name="commentaire" id="commentaire"></textarea>
            </form>

            <h2>Nos partenaires régionnaux</h2>
            <p id="fine_print">
                La vallée de Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                deserunt mollit anim id est laborum.
            </p>

        </div>
        <?php
require_once ('views/page_bottom.php'); // Includes the defines