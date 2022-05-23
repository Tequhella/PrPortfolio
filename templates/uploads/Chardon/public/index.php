<!DOCTYPE html>

<html>
    
    <head>
        <meta charset='utf-8'>
        <title>Magnifique page</title>
        <link rel="stylesheet" href="/templates/uploads/Chardon/style.css"/>
        
        
    </head>
    
    <body>
<!--------------------HEADER-------------------->
        
        <header>
            
            <div class="nheader"></div>
            <nav>
                <div>
                    <div><img src="../file/CHATBAKA.jpg" height="77px"></div>
                    <div class="portfolio">Lilian Chardon</div>
                </div>
                <div>
                    <a href="#">À propos</a>
                    <a href="#mes_projets">Mes projets</a>
                    <div id="bouton">
                        <a href="#" class="link">
                        Liens externes</a>
                        <a href="https://github.com/Tequhella" target="_blank" class="link">Github</a>
                        <a href="https://stackoverflow.com/users/14360364/tequhella" target="_blank" class="link">Stack Overflow</a>
                    </div>
                </div>
            </nav>
            
            
        </header>
        
        <br/>
        
<!----------------------MOI---------------------->
        
        <section id="me">
            
            <? require_once("../sendmail/sendemail.php");?>
            
            <div class="contact_me" id="contact_me2">
                <center><h1>Me contacter :</h1></center>
                <a href="mailto:&#108;&#105;&#108;&#105;&#97;&#110;&#46;&#99;&#104;&#97;&#114;&#100;&#111;&#110;&#64;&#103;&#109;&#97;&#105;&#108;&#46;&#99;&#111;&#109;">lilian.chardon@gmail.com</a>
                <br>
                <form action="../sendmail/sendemail.php" method="post">
                    <label>Votre email : <input type="email" name="email"/></label>
                    <label class="obj">L'objet :     <input class="obj" type="text" name="obj"/></label>
                    <textarea id="mots" class="text" cols="36" rows ="7" name="txt"></textarea>
                    <input type="submit" name="Envoyer"/>
                </form>
                <br>
                <h3>Ou</h3>
                <br>
                <p>Tel : 07 86 75 91 41</p>
            </div>
            
            <a class="CV" href="../file/CV%20CHARDON.pdf" target="_blank">
                <center>
                    <h2>Mon CV</h2>
                    <img src="../file/portfolio.png"/>
                </center>
            </a>

                <article class="about_me">
                    <h1>A propos de moi :</h1>
                    <p>Je suis étudiant en première année à Sophia Ynov Campus. Etant passionné de jeux vidéo depuis mon enfance, je m’étais toujours posé
                        cette question : comment les jeux vidéo sont-ils faits ? C’est en découvrant leurs
                        origines que j’ai pu m’intéresser autant à l’informatique. Aujourd’hui, j'ai d'autant plus envie de mieux comprendre les machines en cherchant dans les langages les plus bas niveau. J'aimerais donc travailler dans les domaines de la programmation embarqué, ainsi que l'IA ou les logiciels.</p>
                </article>
        </section>
        
<!----------------MES COMPETENCE----------------->
        
        <section id="competence">
            <center>
                <h1>Mes compétences :</h1>
                <div id="compet">
                    <img src="../file/c-programming.png" width="100px" height="100px"/>
                    <div id="myProgress">
                        <div class="progressBar C">90%</div>
                    </div>
                </div>
                <div id="compet">
                    <img src="../file/html-programming.png" width="100px" height="100px"/>
                    <div id="myProgress">
                        <div class="progressBar html">100%</div>
                    </div>
                </div>
                <div id="compet">
                    <img class="css" src="../file/css-programming.png" width="100px" height="100px"/>
                    <div id="myProgress">
                        <div class="progressBar CSS">90%</div>
                    </div>
                </div>
                <div id="compet">
                    <img class="css" src="../file/js-programming.png" width="100px" height="100px"/>
                    <div id="myProgress">
                        <div class="progressBar JS">60%</div>
                    </div>
                </div>
                <div id="compet">
                    <img class="css" src="../file/php-programming.png" width="100px" height="100px"/>
                    <div id="myProgress">
                        <div class="progressBar PHP">50%</div>
                    </div>
                </div>
                
            </center>
        </section>
        
<!-----------------MON PARCOURS------------------>
        
        <section id="parcours">
            <center>
            <h1>Mon parcours :</h1>
            <article>
                <div class="content">
                    <div class="dates"><h2>2020/21</h2></div>
                    <div class="formations">
                        <h2>Bachelor 1  – Software Development Specialist</h2>
                        <h3>Sophia Ynov Campus</h3>
                        <h3>Place Sophie Laffite Immeuble AGORA – Valbonne – 06560</h3>
                    </div>
                </div>

                <div class="content">
                    <div class="dates"><h2>2019/20</h2></div>
                    <div class="formations">
                        <h2>Terminale STI2D</h2>
                        <h3>Lycée Alexis de Tocqueville</h3>
                        <h3>22 Chemin de l'Orme – Grasse – 06130</h3>
                    </div>
                </div>

                <div class="content">
                    <div class="dates"><h2>2018/19</h2></div>
                    <div class="formations">
                        <h2>1ère STI2D</h2>
                        <h3>Lycée Alexis de Tocqueville</h3>
                        <h3>22 Chemin de l'Orme – Grasse – 06130</h3>
                    </div>
                </div>

                <div class="content">
                    <div class="dates">
                        <center><h2 class="stage">2015</h2></center>
                    </div>
                    <div class="formations">
                        <h2>Stagiaire - Orange Business Services</h2>
                        <h3>Durée : 1 semaine</h3>
                        <h3>Héraklion – Sophia Antipolis – 06560</h3>
                    </div>
                </div>
            </article>
            </center>
                
        </section>
        
<!------------------MES PROJETS------------------>
        
        <section id="mes_projets">
            
            <center>
                <h1>Mes projets :</h1>
                <div id="projet">
                    <a target="_blank" href="https://github.com/Tequhella/Kur-p-w-rudo"><img src="../file/Kuripawarudo.png" width="500px" height="585px"/></a>
                    <div class="descript">
                        <h1>Kuripawarudo</h1>
                        <p>Il s'agit d'une copie du jeu Creeper World 2 en cours de développement. C'est un Tower Defense, où le principe, ici, est de défendre son vaisseau en fabriquant des installations qui nous aideront à combattre ce qu'on appelle des creepers (sous forme de liquide).</p>
                    </div>
                </div>
                
                <div id="projet">
                    <img src="../file/Projet_Web.png" width="500px" height="320px"/>
                    <div class="descript">
                        <h1>Site de transaction : Gestion Utilisateur</h1>
                        <p>Projet Web de fin d'année, le principe étant de pouvoir faire de la transaction d'argent avec de la fausse monnaie (un échange de nombre entier pour faire simple). Ma partie consiste à faire une page de profil avec différente possibilité d'action concernant ce dernier (se connecter, s'inscrire, changer de mot de passe, de pseudo et ajouter retirer dans la listes de contacts.</p>
                    </div>
                </div>
            </center>
            
        </section>
        
<!--------------------FOOTER-------------------->
        
        <footer></footer>
        
        <script src="../js/onclick.js"></script>
        
        
    </body>
    
</html>