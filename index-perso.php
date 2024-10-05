<!DOCTYPE HTML>
<html>
	<head>
		<title>perso</title>
		<meta charset="utf8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
	</head>
	<body onload="cacher();">

		<h1>Page d'accueil perso</h1>
        <p class="localisation"><?php echo $_SERVER['DOCUMENT_ROOT'] ?></p>
        <div id="reseau_maison">
            Élement réseau :
            <ul class="list-group">
                <li>Livebox-9DE2 : <a href="http://192.168.1.1/" target="_blank" title="Livebox">ici</a></li>
                <li>Routeur TrendNet : <a href="http://192.168.10.1" target="_blank" title="TrendNet">ici</a></li>
                <li>Raspberry en local : <a href="" target="_blank" title="Raspberry en local">ici</a></li>
                <li>Raspberry de l'extérieur : <a href="http://90.126.47.95" target="_blank" title="Raspberry Pi">ici</a></li>
            </ul>
        </div>

        <div id="toDoListe" class="bord">
            <ul class="list-group-item">
                <li class="enLigne">
                    <a href="https://desktop.any.do/tasks/all" target="_blank">
                        <img src="images/todoliste_favicon.png" alt="ToDoListe" title="ToDoListe" width="30"></a></li>
                <li class="enLigne">
                    <a href="https://www.fitbit.com/activities" target="_blank">
                        <img src="images/fitbit.png" alt="Fitbit" width="30" title="Fitbit"></a></li>
            </ul>
        </div>
        <div id="bnu" class="bord">
            <ul>
                <li class="enLigne">BNU :
                    <ul>
                        <li style="display:inline">Wifi : <a href="https://pcap.u-strasbg.fr/?switch_url=https://wifi-pcap.u-strasbg.fr/login.html&ap_mac=88:f0:31:da:86:60&client_mac=88:e9:fe:85:96:8c&wlan=osiris&redirect=detectportal.firefox.com/success.txt" target="_blank">
                            <img src="images/BNU-Wifi-Osiris.png" alt="Wifi Osiris" title="wifi Osiris" width="30"></a>
                        </li>
                        <li style="display:inline">info : <a href="https://www.unistra.fr/index.php?id=19720" target="_blank">
                        <img src="images/unistra.png" alt="Université de Strasbourg" width="100"></a>
                        </li>
                <!--<li style="display:inline">prêt : <a href="http://opac.bnu.fr/Vubis.csp?OpacLanguage=fre&Profile=Default&EncodedRequest=*E4*5C*28y*A1*D8*25*04*C1*04*D1*F2*B8*29r*A0&Module=Vubis&ExtraInfo=&SearchMethod=Find_2" target="_blank">ici</a></li>-->
                    </ul>
                </li>
            </ul>
        </div>

        <nav>

            Menu :
            <a href="https://onedrive.live.com/edit.aspx?resid=393F95A0B4E4B4D9%21627&nd=1" target="_blank">Office en ligne</a><br>
            <ul class="list-group">
                <li class="list-group-item"><a href="#auto-formation">Auto-formation</a></li>
                <li class="list-group-item"><a href="#banque">banque</a></li>
                <li class="list-group-item"><a href="#mail">mail</a></li>
                <li class="list-group-item"><a href="#communication">communication</a></li>
                <li class="list-group-item"><a href="#le-cnam">Le CNAM</a></li>
                <li class="list-group-item"><a href="#Franck-NICOLAS">Franck NICOLAS</a></li>
                <li class="list-group-item"><a href="#mm">Miracle Morning</a></li>
                <li class="list-group-item"><a href="#facebook">Facebook</a></li>
                <li class="list-group-item"><a href="#google">google</a></li>
                <li class="list-group-item"><a href="#magazines-informatiques">magazines informatiques</a></li>
                <li class="list-group-item"><a href="#mensa">mensa</a></li>
                <li class="list-group-item"><a href="#reseaux-voisins">Réseaux-voisins</a></li>
                <li class="list-group-item"><a href="#driveAutres">Drive autres</a></li>
                <li class="list-group-item"><a href="#divers">divers</a></li>
                <li class="list-group-item"><a href="#loisirs">loisirs</a></li>
                <li class="list-group-item"><a href="#télé">télé</a></li>
                <li class="list-group-item"><a href="#apple">APPLE</a></li>
                <li class="list-group-item"><a href="#calendrier">Calendrier</a></li>
            </ul>
        </nav>

        <div id="contenu">
            <div id="auto-formation">
            <h3>Auto-formation</h3>
            <h4>OpenClassrooms</h4>
            <ul class="list-group">
                <li class="list-group-item">OpenClassroom : <a href="https://openclassrooms.com/fr/dashboard" target="_blank">Dashboard</a></li>
                <h5>Le parcours Java : <a href="https://openclassrooms.com/fr/paths/191-developpeur-dapplication-java" target="_blank">Le Parcours sur OC</a></h5>
                <ul class="list-group">
                    <li class="list-group-item">
                        <h6>Projet 1 : Démarrer votre formation - F - <a href="javascript:showHide('jp1');" id="lien_jp1">Montre / cache</a></h6>
                        <ul class="list-group" id="jp1">
                            <li class="list-group-item">Apprenez à apprendre : F <a href="https://openclassrooms.com/fr/courses/4312781-apprenez-a-apprendre" target="_blank">ici</a></li>
                            <li class="list-group-item">Comprendre le web : F <a href="https://openclassrooms.com/fr/courses/1946386-comprendre-le-web" target="_blank">ici</a></li>
                            <li class="list-group-item">Apprenez à créer votre site web avec HTML5 et CSS3 : F <a href="https://openclassrooms.com/fr/courses/1603881-apprenez-a-creer-votre-site-web-avec-html5-et-css3" target="_blank">ici</a></li>
                            <li class="list-group-item">Découpez et intégrez une maquette : F <a href="https://openclassrooms.com/fr/courses/3504431-decoupez-et-integrez-une-maquette/3605756-decouvrir-le-concept-de-maquette" target="_blank">ici</a></li>
                            <li class="list-group-item">Découvrez les métiers de Développeur : F <a href="https://openclassrooms.com/fr/courses/6817086-decouvrez-les-metiers-de-developpeur" target="_blank">ici</a></li>
                        </ul>
                        <h6>Projet 2 : Débuggez une application Java - F - <a href="javascript:showHide('jp2');" id="lien_jp2">Montre / cache</a></h6>
                        <ul class="list-group" id="jp2">
                            <li class="list-group-item">Apprenez à utiliser la ligne de commande dans un terminal : F <a href="https://openclassrooms.com/fr/courses/6173491-apprenez-a-utiliser-la-ligne-de-commande-dans-un-terminal" target="_blank">ici</a></li>
                            <li class="list-group-item">Utilisez Git et GitHub pour vos projets de développement : F <a href="https://openclassrooms.com/fr/courses/5641721-utilisez-git-et-github-pour-vos-projets-de-developpement" target="_blank">ici</a></li>
                            <li class="list-group-item">Installer vote environnement de développement Java avec Eclipse : F <a href="https://openclassrooms.com/fr/courses/6106191-installez-votre-environnement-de-developpement-java-avec-eclipse" target="_blank">ici</a></li>
                            <li class="list-group-item">Débuter la programmation avec Java : F <a href="https://openclassrooms.com/fr/courses/6173501-debutez-la-programmation-avec-java" target="_blank">ici</a></li>
                        </ul>
                        <h6>Projet 3 : Identifiez les besoin de votre client pour concevoir l'application de se rêves - F - <a href="javascript:showHide('jp3');" id="lien_jp3">Montre / cache</a></h6>
                        <ul class="list-group" id="jp3">
                            <li class="list-group-item">
                                Gérer votre projet avec une équipe Scrum : F <a href="https://openclassrooms.com/fr/courses/4511226-gerez-votre-projet-avec-une-equipe-scrum" target="_blank">ici</a>
                            </li>
                            <li class="list-group-item">
                                Concevoir une interface cliquable : F <a href="https://openclassrooms.com/fr/courses/5249006-concevez-une-interface-cliquable"  target="_blank">ici</a>
                            </li>
                            <li class="list-group-item">
                                Appliquez le principe du domain-Driven Design  : F <a href="https://openclassrooms.com/fr/courses/5647281-appliquez-le-principe-du-domain-driven-design-a-votre-application" target="_blank">ici</a>
                            </li>
                        </ul>
                        <h6>Projet 4 : Testez l'implémentation d'une nouvelle fonctionnalité Java - F - <a href="javascript:showHide('jp4');" id="lien_jp4">Montre / cache</a></h6>
                        <ul class="list-group" id="jp4">
                            <li class="list-group-item">
                                Testez vos applications Java pour réalisez des applications de qualité : F <a href="https://openclassrooms.com/fr/courses/6100311-testez-votre-code-java-pour-realiser-des-applications-de-qualite/6440036-tirez-un-maximum-de-ce-cours"
                                                                                                                                     target="_blank">ici</a></li>
                            <li class="list-group-item">
                                Débuggez votre appplication Java : F <a href="https://openclassrooms.com/fr/courses/6692416-debuggez-votre-application-java"
                                                                                              target="_blank">ici</a></li>
                        </ul>
                        <h6>Projet 5 : Créer votre première application web avec Spring - F - <a href="javascript:showHide('jp5');" id="lien_jp5">Montre / cache</a></h6>
                        <ul class="list-group" id="jp5">
                            <li class="list-group-item">
                                Ecrivez du code Java maintenable : F <a href="https://openclassrooms.com/fr/courses/6810956-ecrivez-du-code-java-maintenable" target="_blank">ici</a>
                            </li>
                            <li class="list-group-item">
                                Simplifier le développement d'applications Java avec Spring : F <a href="https://openclassrooms.com/fr/courses/4504771-simplifiez-le-developpement-dapplications-java-avec-spring" target="_blank">ici</a>
                            </li>
                            <li class="list-group-item">
                                Adoptez les API REST pour vos projets WEB : F <a href="https://openclassrooms.com/fr/courses/6573181-adoptez-les-api-rest-pour-vos-projets-web" target="_blank">ici</a>
                            </li>

                            <li class="list-group-item">
                                Construisez des MicroServices : F <a href="https://openclassrooms.com/fr/courses/4668056-construisez-des-microservices" target="_blank">ici</a>
                            </li>
                        </ul>
                        <h6>Projet 6 : Concevez une application web Java de A à Z - F - <a href="javascript:showHide('jp6');" id="lien_jp6">Montre / cache</a></h6>
                        <ul class="list-group" id="jp6">
                            <li class="list-group-item">
                                Administrez vos base de données avec <b>MySQL</b> : F <a href="https://openclassrooms.com/fr/courses/1959476-administrez-vos-bases-de-donnees-avec-mysql" target="_blank">ici</a>
                            </li>
                            <li class="list-group-item">
                                Modélisez et implémentez une base de données relationnelles avac UML : F <a href="https://openclassrooms.com/fr/courses/4055451-modelisez-et-implementez-une-base-de-donnees-relationnelle-avec-uml" target="_blank">ici</a>
                            </li>
                        </ul>
                        <H6>Projet 7 : Trasnformez votre backend en API pour rendre votre application pour flexible - F - <a href="javascript:showHide('jp7');" id="lien_jp7">Montre / cache</a></H6>
                        <ul class="list-group" id="jp7">
                            <li class="list-group-item">
                                Adoptez les API REST pour vos projets webs : F <a href="https://openclassrooms.com/fr/courses/6573181-adoptez-les-api-rest-pour-vos-projets-web" target="_blank">ici</a>
                            </li>
                        </ul>
                        <h6>Projet 8 : Améliorez votre application avec des systèmes distribués - F - <a href="javascript:showHide('jp8');" id="lien_jp8">Montre / cache</a></h6>
                        <ul class="list-group" id="jp8">
                            <li class="list-group-item">
                                Ecrivez la documentation technique de votre projet : F <a href="https://openclassrooms.com/fr/courses/6398056-ecrivez-la-documentation-technique-de-votre-projet" target="_blank">ici</a>
                            </li>
                        </ul>

                        <h6>Projet 9 : Développez une solution en microservices pour votre client - F - <a href="javascript:showHide('jp9');" id="lien_jp9">Montre / cache</a></h6>
                        <ul class="list-group" id="jp9">
                            <li class="list-group-item">
                                Optimisez votre architecture MicroServices : F <a href="https://openclassrooms.com/fr/courses/4668216-optimisez-votre-architecture-microservices" target="_blank">ici</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <h5>Ecosystème Java</h5>
                <ul class="list-group">
                    <li class="list-group-item">
                        Organisez et packagez une application Java avec Apache <b>Maven</b> (F) : <img src="images/maven-logo-black-on-white.png" height="25px" alt="Organisez et packagez une application Java avec Apache Maven"> : <a href="https://openclassrooms.com/fr/courses/4503526-organisez-et-packagez-une-application-java-avec-apache-maven" target="_blank">ici</a>
                    </li>
                    <li class="list-group-item">
                        Développez des sites web avec <b>Java EE</b> (F) : <a href="https://openclassrooms.com/fr/courses/2434016-developpez-des-sites-web-avec-java-ee" target="_blank">ici</a>
                    </li>    
                    <li class="list-group-item">
                        Créer une application Jaba avec <b>Spring Boot</b> : <a href="https://openclassrooms.com/fr/courses/6900101-creez-une-application-java-avec-spring-boot" target="_blank">ici</a>
                    </li>
                    <li class="list-group-item">
                        Apprenez à programmer en <b>Java</b> (plus à jour) : <a href="https://openclassrooms.com/fr/courses/26832-apprenez-a-programmer-en-java" target="_blank">ici</a>
                    </li>
                </ul>
                <h5>Kotlin</h5>
                    <ul class="list-group">
                        <li class="list-group-item">Initiez-vous à Kotlin (OC) : <a href="https://openclassrooms.com/fr/courses/5353106-initiez-vous-a-kotlin" target="_blank">ici</a></li>
                    </ul>
                <h5>Pro</h5>
                <ul class="list-group">
                    <li class="list-group-item">
                        Préparez-vous aux tests techniques pour devenir développeur : <a href="https://openclassrooms.com/fr/courses/6045521-preparez-vous-aux-tests-techniques-pour-devenir-developpeur" target="_blank">ici</a>
                    </li>
                </ul>
                <h5>Front</h5>
                <ul class="list-group">
                    <li class="list-group-item">
                        Développez des appplications web avec <b>Angular</b> : <a href="https://openclassrooms.com/fr/courses/4668271-developpez-des-applications-web-avec-angular" target="_blank">ici</a>
                    </li>
                </ul>
            </ul>
            <hr>
            </div>




            <div id="mail">
                <h3>Mail</h3>
                <h4>Perso</h4>
                <ul class="list-group">
                    <li class="list-group-item">dominique21000@gmail.com : <a href="https://mail.google.com/mail/u/0/#inbox" target="_blank" title="Gmail perso">
                        <img src="images/logo_gmail_lockup_dark_1x.png" alt="Gmail perso" width="100"></a></li>
                </ul>

                <h4>pro</h4>
                <ul class="list-group">
                    <li class="list-group-item">dominique.sauvignon@outlook.fr : <a href="https://outlook.live.com/mail/inbox" target="_blank" title="Outlook"><img src="images/outlook_logo.png" alt="Outlook" width="50px"></a>
                    <li class="list-group-item">dominique21000.pro@gmail.com : <a href="https://mail.google.com/mail/u/1/#inbox" target="_blank" title="Gmail pro"><img src="images/logo_gmail_lockup_dark_1x.png" alt="Gmail pro" width="100"></a></li></a></li>
                </ul>
                <h4>autres</h4>
                <ul class="list-group">
                    <li class="list-group-item">dominique.sauvignon.auditeur@lecnam.net (cnam) : <a href="https://outlook.office.com/owa/?realm=lecnam.net&modurl=0" target="_blank">
                                <span style="background-color:red"><img src="images/cnam_main-logo.png" alt="le cnam" width="100"></span></a>
                    </li>
                    <!--<li>Yahoo : <a href="https://mail.yahoo.com/d/folders/1?reason=norrinuser" target="_blank">
                        <img src="images/yahoo_mail_fr-FR_s_f_p_bestfit_mail" alt="Yahoo mail" width="100"></a>
                    </li>-->
                    <!--<li>mail pro : <a href="https://kerio.osmozware.fr/webmail/login/" target="_blank">LDE</a></li>-->
                    <li class="list-group-item">d-sauvignon@alwaysdata.net (alwaysdata) : <a href="https://webmail.alwaysdata.com" target="_blank">
                                    <img src="images/alwaysdata.png" alt="alwaysdata" width="100"></a>
                    </li>
                    <li class="list-group-item">contact@dominiquesauvignon.eu (Mail RoundCube) : <a href="https://mail.ovh.net/roundcube/" target="_blank" title="Mail site OVH">ici</a>
                    </li>
                    <li class="list-group-item">dominique-sauvignon@protonmail.com (Proton mail) : <a href="https://mail.protonmail.com/inbox" target="_blank"><img src="images/protonMail.png" alt="dominique-sauvignon@protonmail.com" width="30"></a>
                    </li>
                            <li class="list-group-item">sauvignon.dominique@orange.fr (Orange) : <a href="https://webmail22.orange.fr/webmail/fr_FR/inbox.html?FOLDER=SF_INBOX" target="_blank" title="Mail Orange">ici</a>
                            </li>
                            <!--<li>contact@dominiquesauvignon.eu (Mail ovh) : <a href="https://webmail.mail.ovh.net/owa/#path=/mail/inbox" target="_blank">ici</a>-->
                        </ul>
                    </li>
                </ul>
            </div>

            <div id="calendrier">
                <h3>Calendrier</h3>
                <ul class="list-group">
                    <li class="list-group-item">calendly : <a href="https://calendly.com/event_types/user/me" target="_blank">ici</a></li>
                    <li class="list-group-item">Google perso : <a href="https://calendar.google.com/calendar/r?tab=mc" target="_blank">ici</a></li>
                    <li class="list-group-item">google pro : <a href="https://calendar.google.com/calendar/b/1/r?tab=mc" target="_blank">ici</a></li>

                </ul>
                <hr>
            </div>


            <div id="google">
                <h3>Google</h3>
                <ul class="list-group">
                    <li class="list-group-item">Messages : <a href="https://messages.google.com/web/conversations" target="_blank"><img src="images/G-Messages.webp" width="50" alt="Google Messages"></a></li>
                    <li class="list-group-item">Drive : <a href="https://drive.google.com/drive/u/0/my-drive" target="_blank"><img src="images/g_drive.jpeg" width="50"></a></li>
                    <li class="list-group-item">Hangout : <a href="https://hangouts.google.com/" target="_blank"><img src="images/logo_G-hangouts.jpeg" alt="Google Hangouts" width="50"></a></li>
                    <li class="list-group-item">Calendrier : <a href="https://calendar.google.com/calendar/r?tab=mc" target="_blank"><img src="images/calendar_7_2x.png" width="50"></a></li>
                    <li class="list-group-item">Photos : <a href="https://photos.google.com/?tab=mq&pageId=none" target="_blank"><img src="images/logo_G-photos.jpg" width="50" alt="Google Photos"></a></li>
                </ul>
                <hr>
            </div>

            <div id="communication">
                <ul class="list-group-item" id="communication">
                    <li class="list-group-item">Messages : <a href="https://messages.google.com/web/conversations" target="_blank"><img src="images/G-Messages.webp" width="50" alt="Google Messages"></a></li>
                    <li class="list-group-item">Messenger : <a href="https://www.facebook.com/messages/t/" target="_blank">
                            <img src="images/Messenger.png" alt="Messenger" title="Messenger" width="50">
                            </a>
                    </li>
                    <li class="list-group-item">WhatsApp Web : <a href="https://web.whatsapp.com/" target="_blank">ici</a></li>

                    <li class="list-group-item">Hangout : <a href="https://hangouts.google.com/?authuser=1" target="_blank">ici</a></li>
                </ul>
            <hr>
            </div>

            <div id="le-cnam">
                <ul class="list-group">
                <li>Le Cnam : <a href="https://sts.lecnam.net/" target="_blank">
                    <span style="background-color:red;height:auto"><img src="images/cnam_main-logo.png" alt="le cnam" width="100"></span></a>
                </li>
            </ul>
            <hr>
        </div>

        <div id="chaine-youtube">
            <h3>Chaine youtube</h3>
            <ul class="list-group">
                <li class="list-group-item">Ma chaine Youtube : <a href="https://www.youtube.com/channel/UCkdXFdloogDS06_8qFjR3eA?view_as=subscriber" target="_blank">ici</a></li>
                <li class="list-group-item">Le studio <a href="https://studio.youtube.com/channel/UCa-x8ePx9dMiaF2PNn37aIw/videos/upload?utm_campaign=upgrade&utm_medium=redirect&utm_source=%2Fanalytics" target="_blank">ici</a></li>
            </ul>
            <hr>
        </div>

        <div id="magazines-informatiques">
            <h3>Magazines informatiques</h3>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="https://www.programmez.com/user/23299/archives" target="_blank">
                    <img src="images/Programmez_logo.png" alt="Programmez" title="Programmez" width="100"></a></li>
                <li class="list-inline-item"><a href="https://www.developpez.com/" target="_blank">
                    <img src="images/Developpez.png" alt="Developpez.com" title="Developpez.com" width="50"></a></li>
            </ul>
            <hr>
        </div>

        <div id="banque">
            <h3>Banque</h3>
                <ul class="list-inline">
			        <li class="list-inline-item"><a href="https://www.alsace-g3-enligne.credit-agricole.fr/stb/entreeBam" target="_blank">
                        <img src="images/logo_creditagricole_V16.png" alt="Credit Agricole" title="Credit Agricole" width="50"></a></li>
			        <li class="list-inline-item"><a href="https://www.caisse-epargne.fr/particuliers" target="_blank">
                        <img src="images/CE_national_logo.png" alt="Caisse d'Epargne" title="Caisse d'Epargne" width="50"></a></li>
                    <li class="list-inline-item"><a href="https://www.labanquepostale.fr/" target="_blank">
                        <img src="images/LBP_logo-lbp.png" alt="La Banque Postale" title="La Banque Postale" width="50"></a></li>
		        </ul>
			    <hr>
        </div>

            <div id="mensa">
                <ul class="list-group">
                    <li class="list-group-item">Mensa : <a href="https://mensa-france.net/membres/#" target="_blank">
                        <img src="images/Mensa_logo.png" alt="Mensa" title="Mensa" width="50"></a></li>
                </ul>
                <hr>
            </div>


            <div id="facebook">
                <h3>Facebook</h3>
                <ul class="list-inline">
                    <li class="list-inline-item"><a href="https://www.facebook.com/messages/t/" target="_blank">
                        <img src="images/Messenger.png" alt="Messenger" title="Messenger" width="50">
                        </a>
                    </li>
                    <li class="list-inline-item"><a href="https://www.facebook.com/" target="_blank">
                        <img src="images/facebook-770688_1280.png" title="Facebook" alt="Facebook" width="50">
                        </a>
                    </li>
                </ul>
                <hr>
            </div>

            <div id="Franck-NICOLAS">
                <h3>Franck NICOLAS</h3>
                <ul class="list-inline">
                    <li class="list-inline-item">
                        <a href="https://www.youtube.com/channel/UCOPYmqe_bNzjYErvNEGJ5og"
                           target="_blank"
                           title="Chaine Youtube">Chaine Youtube</a>
                    </li>
                    <li class="list-inline-item"><a href="http://www.glob.cc" target="_blank" title="Glob"><img src="images/cropped-GlobFranckNicolas-1-180x180.png" alt="Glob" width="50" title="Glob"></a></li>
                    <li class="list-inline-item"><a href="https://itunes.apple.com/fr/podcast/le-podcast-de-franck-nicolas/id1178464223?mt=2"
                                                    target="_blank"
                                                    title="itunes">
                        <img src="images/Franck_Nicolas-itunes.png" alt="Le podcast de Franck Nicolas" width="50" title="Franck Nicolas sur iTunes"></a></li>                </li>
                    <li class="list-inline-item"><a href="https://soundcloud.com/francknicolasofficiel" target="_blank">
                        <img src="images/Franck_NICOLAS-soundCloud.png" alt="50" width="50" title="Franck NICOLAS sur soundCloud"></a></li>
                    <li class="list-inline-item"><a href="https://glob.cc/mon-compte/mes-formations/" target="_blank">
                        <img src="images/Franck_NICOLAS-formationsEnLigne.png" alt="Franck Nicolas Formation en ligne" width="100" title="Mes formations chez glob"></a></li>
                    <li class="list-inline-item"><a href="https://www.facebook.com/francknicolasofficiel/" target="_blank">Facebook lui</a></li>
                    <li class="list-inline-item"><a href="https://www.facebook.com/groups/GroupeFranckNicolas/" target="_blank">Facebook : Communauté internationale</a></li>
                    <li class="list-inline-item">WES Virtuel : ici <a href="https://glob.cc/mon-compte/mes-billets/informations/?event_id=333517" target="_blank">ici</a></li>
                    <li>Groupe WES Virtuel 2021 : <a href="https://www.facebook.com/groups/WESvirtuel2021.FranckNicolas/" target="_blank">ici</a></li>
                    <li>Portail WES 2021 Virtuel : <a href="https://glob.cc/portail-wes-2021-virtuel/" target="_blank">ici</a></li>
                </ul>
                <hr>
            </div>

            <div id="mm">
                <h3>MM</h3>
                <ul class="list-group">
                    <li class="list-group-item">Petit Bambou (méditation) : <a href="https://www.petitbambou.com/fr/home" target="_blank">ici</a></li>
                </ul>
                <hr>
            </div>

            <div id="télé">
                <h3>Télé</h3>
                <ul class="list-inline">
                    <li class="list-inline-item">Télé Orange : <a href="https://chaines-tv.orange.fr/#live/home" target="_blank">
                        <img src="images/Orange_tv.png" alt="Orange TV" width="50"></a></li>
                    <li class="list-inline-item"><a href="https://chaines-tv.orange.fr/#live/liveChannel/19" target="_blank">
                        <img src="images/BBC_WN.png" alt="BBC World News" width="50"></a></li>
                    <li class="list-inline-item"><a href="https://chaines-tv.orange.fr/#live/liveChannel/53" target="_blank">
                        <img src="images/CNN.png" alt="CNN" width="50"></a></li>
                </ul>
                <hr>
            </div>


            <div id="loisirs">
                <h3>Loisirs</h3>
                <ul class="list-group">
                    <li class="list-group-item">Youtube Music : <a href="https://music.youtube.com/" target="_blank">ici</a></li>
                </ul>
                <hr>
            </div>

            <div id="apple">
                <h3>APPLE</h3>
                <ul class="list-group">
                <li class="list-group-item">Today At Apple : <a href="https://www.apple.com/fr/retail/strasbourg/" target="_blank">ici</a></li>
                </ul>
                <hr>
            </div>

            <div id="reseaux-voisins">
                <h3>Réseaux voisins</h3>
                <ul class="list-group">
                    <li class="list-group-item">nextdoor : <a href="https://fr.nextdoor.com/news_feed/" target="_blank">ici</a></li>
                    <li class="list-group-item">MesVoisins.fr : <a href="https://mesvoisins.fr/feed" target="_blank">ici</a></li>
                </ul>
                <hr>
            </div>

            <div id="divers">
                <h3>Divers</h3>
                <ul class="list-group">
                    <li class="list-group-item">téléchargements ebooks
    				    <ul class="list-group">
    					    <li class="list-group-item">ebook-gratuit : <a href="https://www.ebook-gratuit.co" target="_blank">ici</a></li>
    					    <li class="list-group-item">libertyvf : <a href="http://libertyvf.com/v2/ebooks/" target="_blank">ici</a></li>
    				    </ul>
    			    </li>
                    <li class="list-group-item">Youtube -> mp3 : <a href="https://mp3-youtube.download/fr/faster-audio-converter" target="_blank">ici</a></li>
                    <li class="list-group-item">Pour différents liens en une page : <a href="https://linktr.ee/admin" target="_blank">ici</a></li>
                    <li class="list-group-item">Mes notes : <a href="https://www.scribzee.com/fr/Note/NoteDetail?noteId=8fe68bc5-3c02-409a-a96a-eac28af88a83#page1" title="Mes Notes">ici</a></li>
                </ul>
                <hr>
            </div>

            <div id="driveAutres">
                <h3>Drive autres</h3>
                <ul class="list-group">
                    <li class="list-group-item">Node.js : <a href="https://oncletom.io/node.js/#chapitres" target="_blank">ici</a></li>
                    <li class="list-group-item">Angular : <a href="https://www.eni-training.com/client_net/mediabook.aspx?idR=216440" target="_blank">ici</a></li>
                    <li class="list-group-item"><a href="https://ppp.woelkli.com/apps/files/?dir=/&fileid=8575490" target="_blank" title="Drive Woelkli">Drive Woelkli</a></li>
                </ul>
                <hr>
            </div>



        </div>
        <link href="css/perso_position.css" rel="stylesheet" media="all" type="text/css">
        <link href="css/perso_style.css" rel="stylesheet" media="all" type="text/css">

    <script>
        function showHide(div){
            let elt = document.getElementById(div);
            let lien = document.getElementById("lien_" + div);
            if (elt.style.display != "none") {
                elt.style.display = "none"
                lien.innerHTML = "Montrer";
            } else{
                elt.style.display = "block";
                lien.innerHTML = "Cacher";
            }
        }


        function cacher(){
            for (let compteur = 1; compteur <= 9; compteur ++){
                let lien = document.getElementById("lien_jp" + compteur);
                let div = document.getElementById("jp" + compteur);
                div.style.display = "none";
                lien.innerHTML = "Montrer";
            }

        }
    </script>
	</body>
</html>
