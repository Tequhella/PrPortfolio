<!DOCTYPE html>

<html>
    
    <head>
        <meta charset='utf-8'>
        <title>Magnifique page</title>
        <link rel="stylesheet" href="../style.css"/>

        <style>

            *
            {
                margin: 0;
                padding: 0; 
            }

            body
            {
                height: 100%;
                width: 100%;
                
                background-color: rgb(30, 30, 36);
                background-size: cover;
                background-repeat: no-repeat;
                background-attachment: fixed;
                
                font-size: 16px;
                font-family: "Arial";
            }
            .nheader
            {
                width: 100%;
                height: 77px;
                position: fixed;
                background-color: rgb(28, 28, 30);
            }
            nav
            {
                position: fixed;
                width: 100%;
                height: inherit;
                
                display: flex;
                flex-wrap: nowrap;
                justify-content: space-between;
                
            }
            nav div
            {
                overflow: hidden;
                display: flex;
                flex-wrap: nowrap;
                justify-content: center;
            }
            nav div.portfolio
            {
                color: white;
                font-size: 2rem;
                
                padding-top: 20px;
                padding-left: 5px;
            }
            nav div a
            {
                text-decoration: none;
                color: white;
                text-align: center;
                
                padding: 20px 30px;
                width: 60px;
            }
            nav a:hover
            {
                border-top: 5px solid darkred;
                padding: 15px 30px 20px 30px;
                
                background-color: azure;
                color: black;
                
                transition: linear 0.3s;
            }
            #bouton
            {
                display: flex;
                flex-wrap: wrap;
                background-color: rgb(28, 28, 30);
            }
            #bouton:hover
            {
                display: flex;
                flex-wrap: wrap;
                flex-direction: column;
            }
            .link:nth-child(2)
            {
                position: fixed;
                display: none;
            }
            .link:nth-child(3)
            {
                position: fixed;
                display: none;
            }
            #bouton:hover .link:nth-child(2)
            {
                position: relative;
                display: block;
            }
            #bouton:hover .link:nth-child(3)
            {
                position: relative;
                display: block;
            }

            #me
            {
                padding-bottom: 10vh;
            }

            #me::after 
            {
                content: "";
                background: url(file/20210703_143102.jpg);
                background-size: cover;
                background-repeat: no-repeat;
                opacity: 0.6;
                top: 0;
                left: 0;
                bottom: 30vh;
                right: 0;
                position: absolute;
                z-index: -1;   
            }

            div h1
            {
                color: aliceblue;
            }
            div p
            {
                color:aliceblue;
                text-align: justify;
            }

            /************************************************/
            /*--------------Section Personnelle-------------*/
            /************************************************/

            /*---------Me contacter---------*/

            #me
            {
                display: flex;
                flex-wrap: nowrap;
                justify-content: space-around;
                
                padding-top: 17em;
                padding-bottom: 20em;

            }

            div.contact_me
            {
                display: flex;
                flex-wrap: nowrap;
                flex-direction: column;
                overflow: hidden;
                
                
                background-color: rgba(28, 28, 30, 1);
                width: 200px;
                height: 1.7rem;
                padding: 1.5rem;
                
                transition: 0.5s;
            }
            div.contact_me:hover, div.contact_me--active
            {
                background-color: aliceblue;
                border: 3px solid darkred;
                
                width: 30rem;
                height: 22rem;
                
                color: black;
                
                transition: 0.5s;
            }
            div.contact_me h1
            {
                padding-bottom: 1em;
                font-size: 1.5em;
            }
            div.contact_me a
            {
                margin-top: 8px;
                margin-left: 5px;
                
                font-size: 1em;
                color: aliceblue;
                text-decoration: none;
            }
            div.contact_me form
            {
                display: flex;
                flex-direction: column;
            }
            div.contact_me form label.obj
            {
                margin-top: 0.2rem;
                margin-bottom: 1rem;
            }
            div.contact_me form input.obj
            {
                margin-left: 2.06rem;
            }
            div.contact_me:hover h1, div.contact_me--active h1
            {
                color: black;
            }
            div.contact_me:hover a, div.contact_me--active a
            {
                color: black;
            }
            div.contact_me:hover p,div.contact_me--active p
            {
                color: black;
            }

            /*--------------CV--------------*/

            .CV
            {
                overflow: hidden;
                background-color: rgba(28, 28, 30, 1);
                padding: 1.5em;
                
                width: 150px;
                height: 1.7em;
                
                color: aliceblue;
                text-decoration: none;
                
                font-size: 15px;
                
                transition: 0.5s;
            }

            .CV:hover
            {
                background-color: aliceblue;
                border: 3px solid darkred;
                
                width: 550px;
                height: 760px;
                
                color: black;
                
                transition: 0.5s;
            }
            .CV h2
            {
                padding-bottom: 1em;
            }

            /*-------A propos de moi--------*/

            .about_me
            {
                display: flex;
                flex-wrap: wrap;
                overflow: hidden;
                justify-content: center;
                
                background-color: rgba(28, 28, 30, 1);
                width: 210px;
                height: 1.7em;
                padding: 1.5em;
                
                color: aliceblue;
                
                transition: 0.5s;
            }
            .about_me:hover
            {
                background-color: aliceblue;
                border: 3px solid darkred;
                
                width: 40em;
                height: 9em;
                
                color: black;
                text-align: justify;
                
                transition: 0.5s;
            }

            .about_me h1
            {
                font-size: 1.5em;
                padding-bottom: 1em;
            }

            /************************************************/
            /*---------------Section Compétence-------------*/
            /************************************************/

            #competence
            {
                padding: 10em;
                
                background-color: aliceblue;
                border-top: 5px solid rgb(255, 171, 17);
                
                display: flex;
                flex-wrap: wrap;
                flex-direction: column;
            }
            #compet
            {
                display: flex;
                justify-content: center;
                margin: 1em;
            }

            div#myProgress
            {
                margin-top: 2em;
                margin-left: 2em;
                
                text-align: center;
                line-height: 2em;
                
                width: 20em;
                height: 2em;
                border: 2px solid rgb(255, 171, 17);
                border-radius: 1em;
            }
            div.progressBar
            {
                height: 2em;
                border-radius: 0.6em;
                background-color: rgb(255, 171, 17);
            }

            .C
            {
                width: 90%;
            }
            .HTML
            {
                width: 100%;
            }
            .CSS
            {
                width: 90%;
            }
            .JS
            {
                width: 60%;
            }
            .PHP
            {
                width: 50%;
            }

            /************************************************/
            /*---------------Section Parcours---------------*/
            /************************************************/

            #parcours
            {
                padding: 10em;
                
                background-color: rgb(221, 221, 221);
                
                display: flex;
                flex-wrap: wrap;
                flex-direction: column;
            }
            #parcours h1
            {
                color: black;
                padding-bottom: 2vh;
            }
            .content
            {
                display: flex;
                overflow: hidden;
                
                padding-top: 10px;
                padding-bottom: 10px;
                
                width: 100px;
                
                transition: 0.5s linear;
            }
            .content:hover
            {
                width: 43em;
                transition: 0.5s linear;
            }

            /*-------------Date-------------*/
            .dates
            {
                background-color: brown;
                color: rgb(255, 200, 17);
                
                margin-right: 10px;
                border-radius: 50%;
                width: 100px;
                height: 100px;
            }
            .dates h2
            {
                padding: 1.5em 0.3em;
            }
            .content:nth-child(4) .dates h2
            {
                padding: 1.5em 0.3em;
                padding-left: 0.90em;
                padding-right: 0.90em;
            }
            .content:nth-child(4):hover .dates h2
            {
                padding-left: 0.86em;
                padding-right: 0.86em;
            }

            /*----------Formations----------*/

            .formations
            {
                height: 100px;
                overflow: hidden;
                background-color: rgba(0, 0, 0, 0.5);
                color: azure;
                margin-left: 10px;
            }
            .formations h2
            {
                display: flex;
                flex-wrap: nowrap;
                padding: 5px;
            }
            .formations h3
            {
                display: flex;
                flex-wrap: nowrap;
                padding: 5px;
                color: antiquewhite;
            }

            /************************************************/
            /*----------------Section Projet----------------*/
            /************************************************/

            #mes_projets
            {
                display: flex;
                flex-direction: column;
                padding: 10em;
                background-color: aliceblue;
            }
            #mes_projets h1
            {
                padding-bottom: 1em;
            }
            #projet
            {
                display: flex;
                padding: 2em;
                width: 500px;
                overflow: hidden;
                
                background-color: rgb(221, 221, 221);
                
                transition: 0.3s;
            }
            #projet:hover
            {
                width: 1000px;
                transition: 0.3s;
            }
            div.descript h1, div.descript p
            {
                color: black;
                font-size: 1px;
                padding: 40em;
                transition: 0.3s;
            }
            div#projet:hover div.descript h1
            {
                font-size: 24px;
                padding: 2em;
            }
            div#projet:hover div.descript p
            {
                font-size: 16px;
                padding: 2em;
            }





            footer
            {
                font-family: "Arial";
                background-color: rgba(28, 28, 30, 1);
                bottom: 0;
                width: 100%;
                height: 4.5rem;
            }


        </style>
        
        
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