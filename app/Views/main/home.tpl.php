<section class="section-1">
    <h1 class="reveal-1">Le Labo de la Gaufre</h1>
    <span class="subtitle reveal-2">Fresh and Original Food</span>
</section>

<div class="btn">
    <i class="fa-solid fa-arrow-up fa-lg" style="color: #ffc800;"></i>
</div>

<section class="section-2">
    <div class="general_wrapper nav-section reveal" id="about">
        <div class="general_container reveal">
            <h2 class="reveal-1">A propos de nous</h2>
            <div class="wrapper_container">
                <div class="wrapper_left">
                    <p class="reveal-2">Bienvenue dans notre restaurant spécialisé dans les gaufres salées et sucrées. Découvrez notre menu original de gaufres salées, des classiques réinventés aux créations uniques, comme la Lasagne gratinée à l'emmental ou encore la Gaufre Burger généreusement garnie.
                    </p>
                    <img class="waffle_picture reveal-2" src="<?= $assetsBaseUri ?>images/thai.jpg" alt="gaufre thaï" />
                </div>
                <div class="wrapper_right">
                    <img class="waffle_picture reveal-3" src="<?= $assetsBaseUri ?>images/burger.jpg" alt="gaufre burger" />
                    <p class="reveal-3">Pour les gourmands, on a des gaufres sucrées avec Nutella, caramel, et bien plus. Nos Spéciales M&M's et Kinder Surprise vous surprendront ! Venez vous régaler dans une ambiance conviviale et découvrez le plaisir des gaufres revisitées ! 
                    </p>
                </div>
            </div>
            <div class="items reveal-4">
                <div class="item active">
                    <img src="<?= $assetsBaseUri ?>images/burger-raclette.png">
                </div>
                <div class=" item next">
                    <img src="<?= $assetsBaseUri ?>images/campagnarde.png">
                </div>
                <div class="item">
                    <img src="<?= $assetsBaseUri ?>images/oreo.png">
                </div>
                <div class="item">
                    <img src="<?= $assetsBaseUri ?>images/ete.png">
                </div>
                <div class="item">
                    <img src="<?= $assetsBaseUri ?>images/fish.png">
                </div>
                <div class="item">
                    <img src="<?= $assetsBaseUri ?>images/tagada.png">
                </div>
                <div class="item">
                    <img src="<?= $assetsBaseUri ?>images/grecque.png">
                </div>
                <div class="item">
                    <img src="<?= $assetsBaseUri ?>images/halloween.png">
                </div>
                <div class="item">
                    <img src="<?= $assetsBaseUri ?>images/noel.png">
                </div>
                <div class="item">
                    <img src="<?= $assetsBaseUri ?>images/normande.png">
                </div>
                <div class="item">
                    <img src="<?= $assetsBaseUri ?>images/raclette.png">
                </div>
                <div class="item">
                    <img src="<?= $assetsBaseUri ?>images/automne.png">
                </div>
                <div class="item">
                    <img src="<?= $assetsBaseUri ?>images/saumon.png">
                </div>
                <div class="item prev">
                    <img src="<?= $assetsBaseUri ?>images/kinder.png">
                </div>
                <div class="button-container">
                    <div class="button"><i class="fas fa-angle-left"></i></div>
                    <div class="button"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-3">
    <div class="general_wrapper nav-section reveal" id="menu">
        <div class="general_container reveal">
            <h2 class="reveal-1">Menu</h2>
            <div class="wrapper_container waffle">
                <div class="wrapper_left_waffle">
                    <h3 class="reveal-2">Les Gaufres salées</h3>
                    <ul class="waffle-list reveal-2">
                        <?php foreach ($waffleListSalted as $waffle) : ?>
                            <li class="waffle-item">
                                <div class="waffle-name"><?= htmlspecialchars($waffle['name']) ?></div>
                                <div class="waffle-description"><?= htmlspecialchars($waffle['description']) ?></div>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <div class="wrapper_right_waffle">
                    <h3 class="reveal-3">Les Gaufres sucrées</h3>
                    <ul class="waffle-list reveal-3">
                        <?php foreach ($waffleListSweet as $waffle) : ?>
                            <li class="waffle-item">
                                <div class="waffle-name"><?= htmlspecialchars($waffle['name']) ?></div>
                                <div class="waffle-description"><?= htmlspecialchars($waffle['description']) ?></div>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            <a href="<?= $assetsBaseUri ?>images/carteresto.pdf" download="menu-lelabodelagaufre">Télécharger le menu</a>
        </div>
    </div>
</section>


<section class="section-4">
<div class="general_wrapper nav-section reveal" id="gallerie">
    <h2 class="reveal-1">Gallerie</h2>
        <div id="gallery" class="container-fluid reveal-2">  
            <img src="<?= $assetsBaseUri ?>images/anniv.png" class="img-responsive" alt="anniversaire du labo">
            <img src="<?= $assetsBaseUri ?>images/burger2.png" class="img-responsive" alt="la best-seller">
            <img src="<?= $assetsBaseUri ?>images/tripadvisor" class="img-responsive" alt="récompense tripadvisor">
            <img src="<?= $assetsBaseUri ?>images/brunch" class="img-responsive" alt="brunch">
            <img src="<?= $assetsBaseUri ?>images/deco" class="img-responsive" alt="décoration noel">
            <img src="<?= $assetsBaseUri ?>images/fouet" class="img-responsive" alt="matériel">
            <img src="<?= $assetsBaseUri ?>images/gambas" class="img-responsive" alt="gaufre gambas">
            <img src="<?= $assetsBaseUri ?>images/gaufrier" class="img-responsive" alt="matériel">
            <img src="<?= $assetsBaseUri ?>images/gaufrite" class="img-responsive" alt="gaufrite">
            <img src="<?= $assetsBaseUri ?>images/huile" class="img-responsive" alt="huile">
            <img src="<?= $assetsBaseUri ?>images/mms" class="img-responsive" alt="gaufre mms">
            <img src="<?= $assetsBaseUri ?>images/oeuf" class="img-responsive" alt="oeuf">
            <img src="<?= $assetsBaseUri ?>images/surprise" class="img-responsive" alt="jouet surprise">
            <img src="<?= $assetsBaseUri ?>images/terrasse" class="img-responsive" alt="terrasse du labo">
            <img src="<?= $assetsBaseUri ?>images/toblerone" class="img-responsive" alt="gaufre toblerone">
            <img src="<?= $assetsBaseUri ?>images/verre" class="img-responsive" alt="verres">
        </div>
        <div class="modal-backdrop"></div>
        <div id="myModal" class="modal-dialog">           
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-body">
                </div>
            </div>
        </div>
</div>
</section>

<section class="section-5">
    <div class="general_wrapper nav-section reveal"  id="acces">
        <div class="general_container reveal">
            <h2 class="reveal-1">Informations</h2>
            <div class="wrapper_container">
                <div class="wrapper_left">
                    <h3 class="reveal-1">Accès</h2>
                    <div class="reveal-1"><iframe width="500" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=500&amp;height=400&amp;hl=fr&amp;q=25%20rue%20du%20pila%20st%20g%C3%A9ly+(Le%20labo%20de%20la%20gaufre)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                    </div>
                    <div class="access_info reveal-1">
                        <p>Situés dans l'une des rues les plus connues de Montpellier pour ses nombreux restaurants, Le Labo De la Gaufre est facilement accessible en voiture, en tram ou à pied.</p>
                        <p>Les parkings du corum ou de la Comédie ainsi que l'arrêt de tram du Corum se situent à quelques mètres.</p> 
                    </div>
                </div>
                <div class="wrapper_right">
                    <h3 class="reveal-2">Horaires d'ouverture</h3>
                        <div class="access_info reveal-2">
                            <div class="time_container">
                                <div class="jour1">Lundi</div>
                                <div class="jour2">Mardi</div>
                                <div class="jour3">Mercredi</div>
                                <div class="jour4">Jeudi</div>
                                <div class="jour5">Vendredi</div>
                                <div class="jour6">Samedi</div>
                                <div class="jour7">Dimanche</div>
                                <div class="horaire1">12h - 14h
                                    <div class="horaire1bis">19h - 22h30</div>
                                </div>
                                <div class="horaire2">12h - 14h
                                    <div class="horaire2bis">19h - 22h30</div>
                                </div>
                                <div class="horaire3">12h - 14h
                                    <div class="horaire3bis">19h - 22h30</div>
                                </div>
                                <div class="horaire4">12h - 14h
                                    <div class="horairebis">19h - 22h30</div>
                                </div>
                                <div class="horaire5">12h - 14h
                                    <div class="horaire5bis">19h - 22h30</div>
                                </div>
                                <div class="horaire6">12h - 14h
                                    <div class="horaire6bis">19h - 22h30</div>
                                </div>
                                <div class="horaire7">Fermé</div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-6">
    <div class="general_wrapper nav-section reveal" id="contact">
        <div class="general_container reveal">
            <h2 class="reveal-1">Contact</h2>
            <div class="wrapper_container">
                <div class="wrapper_left">
                    <h3 class="reveal-2">Une demande particulière ?</h3>
                    <div class="contact_container reveal-2">
                        <form action="" method="post">
                            <label for="fname">Nom & prénom</label>
                            <input type="text" id="fname" name="name" placeholder="Votre nom et prénom" required>

                            <label for="sujet">Sujet</label>
                            <input type="text" id="sujet" name="sujet" placeholder="L'objet de votre message" required>

                            <label for="email">Email</label>
                            <input id="email" type="email" name="email" placeholder="Votre email" required>


                            <label for="subject">Message</label>
                            <textarea id="subject" name="message" placeholder="Votre message" style="height:150px" required></textarea>

                            <input type="submit" value="Envoyer">
                        </form>
                        <div class="modal success modal-form">
                            <div class="modal-content">
                                Votre message a bien été envoyé.
                                <span class="modal-close">&times;</span>
                            </div>
                        </div>

                        <div class="modal error modal-form">
                            <div class="modal-content">
                                Une erreur s'est produite lors de l'envoi du message.
                                <span class="modal-close">&times;</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wrapper_right">
                    <h3 class="reveal-3">Réservation</h3>
                    <div class="access_info reveal-3">
                        <p>Pour toute demande de réservation, </p> 
                        <p>contactez-nous au 09.83.88.90.90.</p>
                        <img src="<?= $assetsBaseUri ?>images/resto.png" alt="le labo de la gaufre" id="resto_picture">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
