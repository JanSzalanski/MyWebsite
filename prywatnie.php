<?php

 session_start();

 define('SITE_KEY', '6LebJj4cAAAAANAWmxMIJzZZHrZwe7hkiMmngexV'); #gitignore

  if(isset($_SESSION['podstrona']))
  {
      switch ($_SESSION['podstrona'])
      {
        case "index":
          unset($_SESSION['podstrona']);
          break;

        case "firma":
          unset($_SESSION['podstrona']);
          break;

        case "praktyka":
          unset($_SESSION['podstrona']);
          break;

        case "projekty":
          unset($_SESSION['podstrona']);
          break;

        default:
          $_SESSION['podstrona']="prywatnie";
          break;
      }
 
  }

  $_SESSION['podstrona']="prywatnie";
  
?>




<!DOCTYPE html>
<html lang="pl">

<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-9V3BR8P7WK"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-9V3BR8P7WK');
  </script>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Prywatnie</title> 
  <link
    href="https://fonts.googleapis.com/css2?family=Audiowide&family=Baloo+2&family=Libre+Barcode+128+Text&family=Montserrat:wght@500;600;700;900&family=Source+Sans+Pro:wght@300;400&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="~/../scss/main.css" />
  <script src="https://www.google.com/recaptcha/api.js?render=<?PHP echo SITE_KEY; ?>"></script>
</head>

<body>
  <div class="WrapperBorder1"></div>
  <div class="Wrapper">
    <div class="GridHelper"></div>

    <div class="PrywatniePicture"></div>

    <div class="GreyTop"></div>

    <header class="Header">
      <section class="Header__Logo">
        <div class="Header__Logo-Left">
        </div> 

        <div class="Header__Logo-Middle">

          <a href="index.php">

            <div class="Header__Logo-Middle-Div">szalanski.eu</div>

          </a>

          <h1 class="Header__Logo-Middle-H1">szalanski<b>.</b>eu</h1>

        </div>

        <div class="Header__Logo-Right">

          <div class="ornament1"></div>
          <div class="ornament2"></div>
          <div class="ornament3"></div>
          <div class="ornament4"></div>

        </div>
      </section>

      <section class="Contact">
        <div class="Contact__Board">
          <h2 class="Contact__Board-H2">kontakt</h2>

          <form class="Contact__Form" method="post" action="kontakt.php">

            <!-- ---------------------------------------------------IMIE *------------------------------------------------------------->
            <div class="Contact__Form-Name">

              <?php  
              if (isset($_SESSION['e_imie'] )){
                    echo '<div class="error-top">'.$_SESSION['e_imie'].'</div>';                      
              }
              ?>   

              <input type="text" name="imie" placeholder="Imię *" maxlength="30" tabindex="1"
                autocomplete="off" value="<?php 
                if(isset($_SESSION['fr_imie']))
                {
                  echo $_SESSION['fr_imie'];
                  
                }
                ?>"/> 
            </div>
            <!-- ---------------------------------------------------EMAIL *------------------------------------------------------------->
            <div class="Contact__Form-Email">

              <?php  
                if (isset($_SESSION['e_email'] )){
                    echo '<div class="error-top">'.$_SESSION['e_email'].'</div>';                     
                } 
              ?> 

              <input type="email" name="email" placeholder="E-mail *" maxlength="40"  tabindex="2"
                autocomplete="off" value="<?php 
                if(isset($_SESSION['fr_email']))
                {
                  echo $_SESSION['fr_email'];
                  
                }
                ?>"/>   
            </div>
            <!-- ---------------------------------------------------TEMAT------------------------------------------------------------->
            <div class="Contact__Form-Topic">
              <input type="topic" name="temat" placeholder="Temat" maxlength="30" tabindex="3" tabindex="3"
                autocomplete="off" value="<?php 
                if(isset($_SESSION['fr_temat']))
                {
                  echo $_SESSION['fr_temat'];    
                }
                ?>"/>
            </div>
            <!-- ---------------------------------------------------Captcha respnse---------------------------------------------------------->    

            <div class="captcha-response">
              <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response"/> 
            </div>


            <!-- ---------------------------------------------------SUBMIT *---------------------------------------------------------->      
            <div class="Contact__Form-Submit">
              <?php 
              if(isset($_SESSION['sukces']))
              {
                
                echo '<div class="error-topB">'.$_SESSION['sukces'].'</div>';   
                unset($_SESSION['sukces']);               
              } 
              else if(isset($_SESSION['e_boot']))
              {
                echo '<div class="error-topB">'.$_SESSION['e_boot'].'</div>';   
                unset($_SESSION['e_boot']);               
                } 
              ?> 
              
              <input type="submit" value="wyślij" tabindex="4" autocomplete="off" />
  
            </div>

            <!-- ---------------------------------------------------WIADOMOSC *---------------------------------------------------------->
            <div class="Contact__Form-Area">

                 <?php  
                if (isset($_SESSION['e_message'] )){
                    echo '<div class="error-top">'.$_SESSION['e_message'].'</div>';   
                                  
                }
              ?> 
    
              <textarea class="Contact__Form-Textarea" name="message" id="message" cols="80" rows="5"
                placeholder="Treść wiadomości *" maxlength="600" tabindex="5"><?php 
                if(isset($_SESSION['fr_wiadomosc']))
                {
                  echo $_SESSION['fr_wiadomosc'];
                  
                }?></textarea>  

            </div>  

            <div class="Captcha">
              This site is protected by reCAPTCHA and the Google
              <a href="https://policies.google.com/privacy">Privacy Policy</a> and
              <a href="https://policies.google.com/terms">Terms of Service</a> apply.
            </div> 

          </form>
        </div>

        <button class="Contact__BtnP">Kontakt</button>
        <div class="Contact__Cross-V--BtnP"></div>
        <div class="Contact__Cross-H--BtnP"></div>
      </section>

      <section class="Menu">
        <div class="Menu__Left">
          <div class="Menu__Left-Left"></div>
 
          <nav class="Nav">
            <!-- Od tego momentu zaczyna sie właściwa nawigacja  zmieniłem Bem na komponent od tego momentu-->

            <ul class="Nav__List">
              <li class="Nav__Item">
                <a href="firma.php" class="Nav__Link">
                    <p class="Nav__Title">O Firmie</p>
                  </a>
              </li>

              <li class="Nav__Item">
                <a href="praktyka.php" class="Nav__Link">
                    <p class="Nav__Title">Praktyka</p>
                  </a>
              </li>

              <li class="Nav__Item">
                <a href="projekty.php" class="Nav__Link">
                    <p class="Nav__Title">Projekty</p>
                  </a>
              </li>

              <li class="Nav__Item">
                <a href="prywatnie.php" class="Nav__Link">
                    <p class="Nav__Title">Prywatnie</p>
                  </a>
              </li>
            </ul>
          </nav>
        </div>

        <div class="Menu__Middle">
          <svg class="Menu__Middle-Svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 20" width="60px"
            height="20px">
            <path class="cls-1" d="M0,0H60V5A22.26,22.26,0,0,0,47,9c-3,2-7,5-11,7a42.56,42.56,0,0,1-17,4H0Z" />
          </svg>
        </div>

        <div class="Menu__Right"></div>

        <div class="StripeGrey"></div>

        <div class="Menu__Svg">
          <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 40 20">
            <polygon class="cls-2" points="40,0 0,0 0,20 27,20 	" />
          </svg>
        </div>

        <div class="Menu__Skew"></div>

        <div class="Menu__SkewB">
          <h3><b>/ komunikacja kwantowa /</b></h3> 
        </div>
      </section>
    </header>

    <div class="Troll">
      <div class="GreyMiddleB Priv">

        <div class="BackgroundGrey Priv"></div>
        <div class="RedMask">
          <h2>デーモン</h2>
        </div>
        <div class="Miara"></div>
        <div class="WrapperTresc OMnie">
          <h1 class="Tresc__H1 Priv">
            PRIV - 05 o mnie / <span class="JapanFont">こじんてきにし</span>
            <div class="Square Priv"></div>
          </h1>

          <div class="CornerTop Priv"></div>
          <div class="CornerTopIn Priv"></div>
          <div class="CornerBottomIn Priv"></div>
          <div class="LineIn Priv"></div>
          <div class="LineLeftIn Priv"></div>
          <div class="CornerTopR Priv"></div>
          <div class="LineCornerTR Priv"></div>
          <div class="CornerBottom Priv"></div>
          <div class="CornerBottomR Priv"></div>
          <div class="Line Priv"></div>
          <div class="LineLeft Priv"></div>
          <div class="LineRight Priv"></div>
          <div class="ShapeA Priv">
            <div class="ShapeARect"></div>
            <div class="ShapeBRect"></div>
            <div class="ShapeCRect"></div>
            <h3>|Description</h3>
          </div> 
          <div class="RectangleA"></div>
          <div class="LinesA"></div>
          <div class="LinesB"></div>
          <div class="RectangleTresc">
            <div class="Background"></div>
            <div class="BackgroundNoise"></div>
            <div class="BackgroundGrid"></div>
            <div class="BackgroundGardient"></div>
            <div class="wrapperMnie">
              <h3 class="NaglowekTresc Mnie">O mnie</h3>

              <div class="maska Mnie">
                <div class="ozdobnik Edu">
                  <div class="geo begining"></div>
                  <div class="geo"></div>
                  <div class="geo"></div>
                  <div class="geo"></div>
                  <div class="geo"></div>
                  <div class="geo"></div>
                  <div class="geo"></div>
                  <div class="geo"></div>
                  <div class="geo"></div>
                  <div class="geo"></div> 
                  <div class="geo"></div>
                  <div class="geo"></div>
                  <div class="geo"></div>
                  <div class="geo"></div>
                  <div class="geo end"></div>
                </div>
              </div>
            </div>

            <p class="OMnieP">
              <br /><br /><br /><br />
                  Jest całkiem prawdopodobne, że jeśli przechodzisz tutaj na sam koniec. I w dodatku ma to miejsce po przeczytaniu poprzednich działów - to możesz się zastanawiać, po co jeszcze rubryka o mnie? Mogłeś\aś bowiem odnieść wrażenie, że napisałem o sobie dużo, co więcej to poczucie może być spotęgowane o to, że nie miałeś\aś do czynienia ze stroną firmową? Zdecydowanie poprzednie cztery działy starałem się, aby dotyczyły mojej osoby prowadzącej działalność gospodarczą i z tym związane zagadnienia. Przekaz miał być inny niż to, co ja sam znajduję na podobnych stronach. Osobiście czasem odczuwam delikatny zawód - kiedy po raz kolejny widzę niemal te same teksty nic niewnoszące a będące pasmem spektakularnych sukcesów i samospełniających się wróżb. Często z przekazów takich nie dowiaduje się nic, co by mnie tak naprawdę interesowało - nie kryje się za tym ani człowiek, ani bardzo często prawdziwa historia. Kolejna kalka kalki opowieści z niby-landii za siedmiu wzgórz. Ja tutaj tego schematu nie chciałem powielać. Sporo się już naoglądałem takich historii gdzie malutkie biznesy bardzo często jednoosobowe lub kilkuosobowe prężyło swoje wizerunkowe muskuły na swoich stronach www i materiałach reklamowych na nie wiadomo jakie korporacje. Z ich stron wybijało szkło, chrom i marmury, wielkie biura, strzeliste wieżowce. Uśmiechnięty personel na stokowych zdjęciach. Ponieważ ja mam nieco inne podejście do takich spraw i staram się trzeźwo patrzeć na rzeczywistość i jej nie upiększać. Dlatego postanowiłem, że w zasadzie cała strona będzie w pewnym sensie na mój temat, przedstawiona w możliwie szczery i obiektywny sposób. Co do konceptu samej strony. To jest to takie zestawienie wydawać by się mogło przypadkowego wątku niezwiązanego z biznesem z całą resztą. Stąd koncepcja żywiołów, jako spoiwo zagadnień, nazw podstron oraz wglądu strony – jakaś luźna anegdota plus obok artykuł już dotykający konkretów, ale dalej w formie raczej dialogu z Tobą (twarzą w twarz). Takiego jakbyśmy spotkali się na kawie lub na ławce na przystanku autobusowym bez zbędnego napięcia i formalizmu. Tu, jeśli się jeszcze Tobie nie skojarzyło czy pamiętasz taką scenę z filmu „Forest Gump”, jak tytułowy bohater siedział na ławeczce i rozmawiał ze starszą Panią? Dobrze chyba wypadałoby powiedzieć kilka słów o sobie po powyższym przy długim wstępie. Wątek żywiołów nie jest tak zupełnie „luźno” związany, kryję się za nim pewna anegdota, ale nie będę jej teraz opisywał. Mimo że symbolika zawarta na stronie ma pewne znaczenie, to muszę powiedzieć, że nie należę do grona osób, które zaczytują się w horoskopach. Ja zwyczajnie lubię delikatne odniesienia czy nawet ukryte przekazy, ale na zasadzie ciekawostki i elementu dodającego jakiegoś dodatkowego kolorytu. Podobnie jak w naukach ścisłych, jakimi są elektronika i informatyka tak w życiu prywatnym mam sporo różnych zainteresowań. Jedną z nich jest jedzenie. A konkretniej to gotowanie i oczywiście wynikający z niego późniejszy rytuał celebrujący włożony wcześniej wysiłek, czyli spożywanie ze smakiem. To czy smacznie gotuję to już muszą wypowiedzieć się inni – ja natomiast to, co ugotuję zjadam z zadowoleniem. Od dziecka obok zaciekawienia komputerami cały czas niesłabnące było zainteresowanie kosmosem, gdzieś tam sympatia dla tej tematyki tliła się w podświadomości – nie była ona aż tak dominująca, jak ta komputerowa, ale występowała. Tak, więc nie powinien nikogo dziwić fakt, że na moim YouTube nie mogło zabraknąć subskrypcji takich kanałów jak Astrofaza czy Astronarium. Jednak nie samym Internetem człowiek żyję czasem nie zbyt często, co prawda, ale jakaś książka z danej dziedziny wpadnie na warsztat. Nawet tę formę nauki czy też relaksu zaczynam bardzo mocno obecnie doceniać. Z całej tej fascynacji kosmosem a uściślając astrofizyki zagadnieniami, które po prostu mnie zadziwiają - są te do opisu, których używane są zasady mechaniki kwantowej. I to, że mamy w informatyce całą nową gałąź związana z pojęciami kwantowymi chyba niemusze Tobie mówić, że sprawy nie ułatwia w tym, aby dać sobie spokój z choćby hobbistycznym eksplorowaniem tych tematów. Jedynym biegunem, który mógłby w najbliższej przyszłości zmienić kierunek tego zainteresowania, jest inny równie abstrakcyjny byt. Tym razem tematyka nie ma źródeł „kosmicznych”, jest pewną ewolucją i mariażem zagadnień ze świata finansów i informatyki a mowa oczywiście o technologiach blockchain i NFT. Tak więc to są takie tematy, które rozpalają moją wyobraźnię. No, ale dobra, żeby nie wyjść na totalnego nerda (choć myślę, że bliskim znajomym nie kojarzę się w ten sposób?) poza opisanymi „technologicznymi” dziedzinami lubię jeszcze odskocznię w postaci wyjścia na łono natury, pochodzenie po lesie w górach czy nad morzem nie ma znaczenie gdzie i w jakich warunkach - czy świeci słońce i jest ciepło, czy może jednak pada i jest chłodniej. Może być śnieżna zima nawet trochę mroźna w lesie, który wygląda jak ten z „Opowieści z Narni”, to jest to co ładuje moje baterie, co kręci równie mocno, co cała wymieniona technika. Może z wyjątkiem sytuacji, kiedy jestem wyrwany ze strefy komfortu i muszę w trybie pilnym opuszczać dany rejon lasu, bo stado dzików postanowiło, że się ze mną „zaprzyjaźni”. Dlatego zagadnienia z tak zwanego bushcraftu czy nawet surviwalu nie są mi obce, gdyż one w naturalny sposób wplatają się w czas spędzany na wolnym powietrzu pośród przyrody. Jak widzisz, jest tego całkiem sporo i nie o wszystkim też tu napisałem wiadomo jakiegoś asa w rękawie należy zawsze sobie pozostawić. Na sam koniec nie mogłem nie pozwolić sobie na umieszczenie małego wycinka ze strefy twórczości. Bo jako taki komputerowiec w pewnym etapie mojej przygody z multimediami bardzo dużo frajdy sprawiało mi tworzenie własnej muzyki. I pisząc tworzenie, mam na myśli faktycznie tworzenie. Czyli niemiksowanie czy aranżowanie nawet na zaawansowanych narzędziach i z gotowych sampli. Tylko komponowanie melodii przekładanie tego na różne brzmienia stworzone na rozmaitych syntezatorach. A następnie robienie całkowicie własnego utworu. Bardzo często przy tym wzorowałem się na moich ulubionych wykonawcach. Dlatego pod spodem zamieszczam kilka moich utworów pochodzących z tego okresu. Uff, jeśli dobrnęłaś albo dobrnołeś do tego momentu to chce Ci podziękować za spędzony tutaj ze mną czas - na tej wirtualnej „ławeczce”. Pozdrawiam i trzymaj się!  
              <br><br> 

              <span>P.S. Jeśli znalazłeś jakieś błędy czy masz jakieś uwagi, to proszę daj mi o tym znać.</span>

              <br><br>

            </p>  
            <div class="Ekstra">
              <iframe width="100%" height="400" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/1264092838&color=%23e90505&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe>

              <div style="font-size: 10px; color: #cccccc;line-break: anywhere;word-break: normal;overflow: hidden;white-space: nowrap;text-overflow: ellipsis; font-family: Interstate,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Garuda,Verdana,Tahoma,sans-serif;font-weight: 100;">
                <a href="https://soundcloud.com/user-495341203" title="JMS" target="_blank" style="color: #cccccc; text-decoration: none;">JMS</a> · 
                <a href="https://soundcloud.com/user-495341203/sets/main-list" title="Main List" target="_blank" style="color: #cccccc; text-decoration: none;">Main List</a>
              </div> 
            </div>
            <div class="ShapeB Priv">
              <h3>sektor /// a</h3>
            </div>
          </div>
          <div class="ShapeC Priv"></div>
          <div class="ShapeD Priv"></div>
        </div>

        <div class="WrapperTresc OMnie Edu">
          <h1 class="Tresc__H1 Priv">
            PRIV - 06 wykształcenie /
            <span class="JapanFont">エディケー</span>
            <div class="Square Priv"></div>
          </h1>

          <div class="CornerTop Priv"></div>
          <div class="CornerTopIn Priv"></div>
          <div class="CornerBottomIn Priv"></div>
          <div class="LineIn Priv"></div>
          <div class="LineLeftIn Priv"></div>
          <div class="CornerTopR Priv"></div>
          <div class="LineCornerTR Priv"></div>
          <div class="CornerBottom Priv"></div>
          <div class="CornerBottomR Priv"></div>
          <div class="Line Priv Edu"></div>
          <div class="LineLeft Priv"></div>
          <div class="LineRight Priv"></div>
          <div class="ShapeA Priv">
            <div class="ShapeARect"></div>
            <div class="ShapeBRect"></div>
            <div class="ShapeCRect"></div>
            <h3>|Description</h3>
          </div>
          <div class="RectangleA"></div>
          <div class="LinesA"></div>
          <div class="LinesB"></div>
          <div class="RectangleTresc Edu">
            <div class="Background"></div>
            <div class="BackgroundNoise"></div>
            <div class="japanlogo">
              <svg viewBox="0 0 150 150">
                <path class="logoPath"
                  d="M74.9 135.4c-33.1 0-60-26.9-60-60s26.9-60 60-60c14.4 0 27.6 5.1 38 13.5 4.6 3.8 8.6 8.4 12 13.3 5.4 7.8 10 20.9 10 33.1 0 33-26.7 59.8-59.6 60"
                  id="obrecz" transform="rotate(135 75 75)" />

                <path class="logoPath"
                  d="M74.9 135.4c-33.1 0-60-26.9-60-60s26.9-60 60-60c14.4 0 27.6 5.1 38 13.5 4.6 3.8 8.6 8.4 12 13.3 5.4 7.8 10 20.9 10 33.1 0 33-26.7 59.8-59.6 60"
                  id="obrecz2" transform="rotate(230 75 75)" />

                <circle cx="74.9" cy="75.4" r="52" fill="#d51309" />
                <path class="japanWhite" d="M118.9 76.1v-.7c0-24.3-19.7-44-44-44s-44 19.7-44 44v.7h88z" />
                <text y="0">
                  <textPath class="textLogo" href="#obrecz">pjatk</textPath>
                </text>
                <text y="0">
                  <textPath class="textLogo2" href="#obrecz2">ポーランド日本情報工科大学</textPath>
                </text>
              </svg>
            </div>
            <div class="BackgroundGrid"></div>
            <div class="BackgroundGardient"></div>

            <h2 class="HeaderStudia">POLSKO-JAPONSKA AKADEMIA TECHNIK KOMPUTEROWYCH</h2>
            <h3 class="HeaderStudiaPod">Poprzednio: Polsko-Japońska Wyższa Szkoła Technik komputerowych</h3>
            <p class="Studia">
              Studia Inżynierskie (wieczorowe) - Wydział Informatyki - Katedra Multimediów <br />
              Specjalizacja: Multimedia - Animacja 3D. <br />
              <a class="linkdyplomowa" href="/assets/praca.pdf">Praca dyplomowa \</a>
              <a class="linkdyplomowa" href="https://vimeo.com/szalanski">suplement</a>
            </p>
            <div class="maska Edu">
              <div class="ozdobnik Edu">
                <div class="geo begining"></div>
                <div class="geo"></div>
                <div class="geo"></div>
                <div class="geo"></div>
                <div class="geo"></div>
                <div class="geo"></div>
                <div class="geo"></div>
                <div class="geo"></div>
                <div class="geo"></div>
                <div class="geo"></div>
                <div class="geo"></div>
                <div class="geo"></div>
                <div class="geo"></div>
                <div class="geo"></div>
                <div class="geo end"></div>
              </div>
            </div>
            <h3 class="HeaderStudiaPod Tech">ZSEiL Technikum Elektroniczne Nr.3</h3>
            <p class="Studia Tech">Specjalizacja: Systemy i sieci komputerowe. <br /></p>
            <div class="maska Edu">
              <div class="ozdobnik Edu">
                <div class="geo begining"></div>
                <div class="geo"></div>
                <div class="geo"></div>
                <div class="geo"></div>
                <div class="geo"></div>
                <div class="geo"></div>
                <div class="geo"></div>
                <div class="geo"></div>
                <div class="geo"></div>
                <div class="geo"></div>
                <div class="geo"></div>
                <div class="geo"></div>
                <div class="geo"></div>
                <div class="geo"></div>
                <div class="geo end"></div>
              </div>
            </div>
            <h3 class="HeaderStudiaPod Tech">Kursy i certyfikaty</h3>
            <p class="Studia Kursy">
              MCSA: Windows Server 2012. <br /><br />
              70-412: Configuring Advanced Windows Server 2012.
              <br />
              70-411: Administering Windows Server 2012.<br />
              70-410: Installing and Configuring Windows Server 2012.<br />
              <br />
              Kaspersky Advnced Security For Windows Server.
            </p>

            <div class="maska Edu">
              <div class="ozdobnik Edu">
                <div class="geo begining"></div>
                <div class="geo"></div>
                <div class="geo"></div>
                <div class="geo"></div>
                <div class="geo"></div>
                <div class="geo"></div>
                <div class="geo"></div>
                <div class="geo"></div>
                <div class="geo"></div>
                <div class="geo"></div>
                <div class="geo"></div>
                <div class="geo"></div>
                <div class="geo"></div>
                <div class="geo"></div>
                <div class="geo end"></div>
              </div>
            </div>

            <h3 class="HeaderStudiaPod Tech">Języki obce</h3>

            <p class="Studia Jezyk">
              Język angielski - zaawansowany. <br />
              Język rosyjski - podstawy. <br />
              Język niemiecki - podstawy. <br />
            </p>

            <div class="ShapeB Priv">
              <h3>sektor /// b</h3>
            </div>
          </div>
          <div class="ShapeC Priv"></div>
          <div class="ShapeD Priv"></div>
        </div>
      </div>
    </div>

    <footer class="Footer">
      <section class="Footer__Nav">
        <div class="Footer__Nav-Left"></div>

        <div class="Footer__Nav-Middle">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 20" width="60px" height="20px">
            <path class="cls-2" d="M0,0H60V5A22.26,22.26,0,0,0,47,9c-3,2-7,5-11,7a42.56,42.56,0,0,1-17,4H0Z" />
          </svg>
        </div>

        <div class="Footer__Nav-Right">
          <div class="Footer__Nav-Right-TitleP">
            Panel dodatków
            <div class="Footer__Nav-Right-ArrowP">></div>
          </div>

          <div class="Footer__Nav-Right-BarsP">
            <div class="Footer__Nav-Right-Bar1"></div>

            <div class="Footer__Nav-Right-Bar2"></div>

            <div class="Footer__Nav-Right-Bar3"></div>

            <div class="Footer__Nav-Right-Bar4"></div>
          </div>

          <div class="Footer__Nav-Right-Space"></div>
        </div>

        <div class="ASMR">
          
          <div class="PanelWrapper RevC">

            <div class="Panel RevPriv"> 
              <div class="Panel__Border1">
                <h3>Panel Dodatków</h3>  
            </div> 
            
            <div class="PanelBorderShadow"></div> 
            
            <div class="ScrewA"> 
              
              <div class="ScrewA__Head"></div>

              <div class="SvgwrapperA">
                <svg version="1.1" id="Layer_1" x="0px" y="0px" 
                  viewBox="0 0 20 20" xml:space="preserve">
                  <defs> 
                    <linearGradient id="grad1" x1="0%" y1="0%" x2="100%" y2="0%">
                      <stop offset="0%" style="stop-color:#000;stop-opacity:1" />
                      <stop offset="55%" style="stop-color:rgb(22, 21, 21);stop-opacity:1" />
                      <stop offset="100%" style="stop-color:#000;stop-opacity:1" />
                    </linearGradient>
                  </defs>
                  <path id="XMLID_1144_" d="M3.8,8.4L5.5,10c0.6,0.5,0.7,1.3,0.5,2l-0.8,2.2c-0.7,1.9,1.7,3.5,3.2,2l1.6-1.7
                  c0.5-0.6,1.3-0.7,2-0.5l2.2,0.8c1.9,0.7,3.5-1.7,2-3.2L14.5,10c-0.6-0.5-0.7-1.3-0.5-2l0.8-2.2c0.7-1.9-1.7-3.5-3.2-2L10,5.5
                  C9.5,6.1,8.7,6.3,8,6L5.8,5.2C3.9,4.5,2.3,6.9,3.8,8.4z" fill="url(#grad1)"/>
                </svg>
              </div>

            </div>
            
            <div class="ScrewB">

             <div class="ScrewB__Head"></div>

              <div class="SvgwrapperB">
                <svg version="1.1" id="Layer_1" x="0px" y="0px" 
                  viewBox="0 0 20 20" xml:space="preserve">
                  <defs> 
                    <linearGradient id="grad1" x1="0%" y1="0%" x2="100%" y2="0%">
                      <stop offset="0%" style="stop-color:#000;stop-opacity:1" />
                      <stop offset="55%" style="stop-color:rgb(22, 21, 21);stop-opacity:1" />
                      <stop offset="100%" style="stop-color:#000;stop-opacity:1" />
                    </linearGradient>
                  </defs>
                  <path id="XMLID_1144_" d="M3.8,8.4L5.5,10c0.6,0.5,0.7,1.3,0.5,2l-0.8,2.2c-0.7,1.9,1.7,3.5,3.2,2l1.6-1.7
                  c0.5-0.6,1.3-0.7,2-0.5l2.2,0.8c1.9,0.7,3.5-1.7,2-3.2L14.5,10c-0.6-0.5-0.7-1.3-0.5-2l0.8-2.2c0.7-1.9-1.7-3.5-3.2-2L10,5.5
                  C9.5,6.1,8.7,6.3,8,6L5.8,5.2C3.9,4.5,2.3,6.9,3.8,8.4z" fill="url(#grad1)"/>
                </svg>
              </div>

            </div>

            <div class="ScrewC">

             <div class="ScrewC__Head"></div>

              <div class="SvgwrapperC">
                <svg version="1.1" id="Layer_1" x="0px" y="0px" 
                  viewBox="0 0 20 20" xml:space="preserve">
                  <defs> 
                    <linearGradient id="grad1" x1="0%" y1="0%" x2="100%" y2="0%">
                      <stop offset="0%" style="stop-color:#000;stop-opacity:1" />
                      <stop offset="55%" style="stop-color:rgb(22, 21, 21);stop-opacity:1" />
                      <stop offset="100%" style="stop-color:#000;stop-opacity:1" />
                    </linearGradient>
                  </defs>
                  <path id="XMLID_1144_" d="M3.8,8.4L5.5,10c0.6,0.5,0.7,1.3,0.5,2l-0.8,2.2c-0.7,1.9,1.7,3.5,3.2,2l1.6-1.7
                  c0.5-0.6,1.3-0.7,2-0.5l2.2,0.8c1.9,0.7,3.5-1.7,2-3.2L14.5,10c-0.6-0.5-0.7-1.3-0.5-2l0.8-2.2c0.7-1.9-1.7-3.5-3.2-2L10,5.5
                  C9.5,6.1,8.7,6.3,8,6L5.8,5.2C3.9,4.5,2.3,6.9,3.8,8.4z" fill="url(#grad1)"/>
                </svg>
              </div>

            </div>

            <div class="ScrewD">
              
              <div class="ScrewD__Head"></div>

              <div class="SvgwrapperD">
                <svg version="1.1" id="Layer_1" x="0px" y="0px" 
                  viewBox="0 0 20 20" xml:space="preserve">
                  <defs> 
                    <linearGradient id="grad1" x1="0%" y1="0%" x2="100%" y2="0%">
                      <stop offset="0%" style="stop-color:#000;stop-opacity:1" />
                      <stop offset="55%" style="stop-color:rgb(22, 21, 21);stop-opacity:1" />
                      <stop offset="100%" style="stop-color:#000;stop-opacity:1" />
                    </linearGradient>
                  </defs>
                  <path id="XMLID_1144_" d="M3.8,8.4L5.5,10c0.6,0.5,0.7,1.3,0.5,2l-0.8,2.2c-0.7,1.9,1.7,3.5,3.2,2l1.6-1.7
                  c0.5-0.6,1.3-0.7,2-0.5l2.2,0.8c1.9,0.7,3.5-1.7,2-3.2L14.5,10c-0.6-0.5-0.7-1.3-0.5-2l0.8-2.2c0.7-1.9-1.7-3.5-3.2-2L10,5.5
                  C9.5,6.1,8.7,6.3,8,6L5.8,5.2C3.9,4.5,2.3,6.9,3.8,8.4z" fill="url(#grad1)"/>
                </svg>
              </div>

            </div>

            <div class="PanelInnerShadow">

              <div class="Panel__Sterowanie"> 

                    <h2 class="Sterowanie">Sterowanie</h2> 

                    <div class="Panel__Btn">
                      <input type="checkbox" name="Panel__Sterowanie_btn" class="BtnTrybNocny"/>
                      <h3 class="TrybNocny">Tryb Nocny</h3>
                    </div>

                    <div class="Panel__Btn">

                      <input type="checkbox" name="Panel__Sterowanie_btn" class="BtnDzwieki"/>
                      <h3 class="Dzwieki">Dźwięki</h3>

                    </div>

              </div>

              <div class="Panel__Sociale"> 

                <h2 class="Sociale">Sociale</h2> 
                    
                <div class="GitHub">
                        <svg version="1.1" id="Layer_1"  x="0px" y="0px"
                          viewBox="0 0 388.3 105" xml:space="preserve">
                          <a href="https://github.com/JanSzalanski">
                            <path class="logo1" d="M83.4,45.5H53.1c-0.8,0-1.4,0.6-1.4,1.4v14.8c0,0.8,0.6,1.4,1.4,1.4H65v18.4c0,0-2.7,0.9-10,0.9
                              c-8.6,0-20.7-3.2-20.7-29.7c0-26.6,12.6-30.1,24.4-30.1c10.2,0,14.6,1.8,17.4,2.7c0.9,0.3,1.7-0.6,1.7-1.4l3.4-14.3
                              c0-0.4-0.1-0.8-0.5-1.1C79.5,7.7,72.5,3.8,55,3.8C34.8,3.8,14,12.4,14,53.7c0,41.3,23.7,47.5,43.7,47.5c16.6,0,26.6-7.1,26.6-7.1
                              c0.4-0.2,0.5-0.8,0.5-1.1V46.9C84.8,46.1,84.2,45.5,83.4,45.5z"/>
                            <path class="logo1" d="M239.4,8.7c0-0.8-0.6-1.4-1.4-1.4h-17c-0.8,0-1.4,0.6-1.4,1.4c0,0,0,32.9,0,32.9H193V8.7c0-0.8-0.6-1.4-1.4-1.4
                              h-17c-0.8,0-1.4,0.6-1.4,1.4v89.2c0,0.8,0.6,1.4,1.4,1.4h17c0.8,0,1.4-0.6,1.4-1.4V59.8h26.6c0,0,0,38.1,0,38.1
                              c0,0.8,0.6,1.4,1.4,1.4H238c0.8,0,1.4-0.6,1.4-1.4V8.7z"/>
                            <g>
                              <g>
                                <path class="logo1" d="M115.6,20.5c0-6.1-4.9-11.1-11-11.1c-6.1,0-11,5-11,11.1c0,6.1,4.9,11.1,11,11.1
                                  C110.7,31.6,115.6,26.6,115.6,20.5z"/>
                                <path class="logo1" d="M114.4,79.1c0-2.3,0-41.2,0-41.2c0-0.8-0.6-1.4-1.4-1.4H96c-0.8,0-1.5,0.8-1.5,1.6c0,0,0,49.5,0,59
                                  c0,1.7,1.1,2.2,2.5,2.2c0,0,7.3,0,15.3,0c1.7,0,2.1-0.8,2.1-2.3C114.4,93.9,114.4,81.5,114.4,79.1z"/>
                              </g>
                            </g>
                            <path class="logo1" d="M304.2,36.7h-16.9c-0.8,0-1.4,0.6-1.4,1.4v43.7c0,0-4.3,3.1-10.4,3.1c-6.1,0-7.7-2.8-7.7-8.7c0-6,0-38.1,0-38.1
                              c0-0.8-0.6-1.4-1.4-1.4h-17.2c-0.8,0-1.4,0.6-1.4,1.4c0,0,0,23.3,0,41c0,17.7,9.9,22.1,23.5,22.1c11.2,0,20.1-6.2,20.1-6.2
                              s0.4,3.2,0.6,3.6c0.2,0.4,0.7,0.8,1.2,0.8l10.9,0c0.8,0,1.4-0.6,1.4-1.4l0-59.9C305.6,37.3,304.9,36.7,304.2,36.7z"/>
                            <path class="logo1" d="M350.4,34.7c-9.6,0-16.1,4.3-16.1,4.3V8.7c0-0.8-0.6-1.4-1.4-1.4h-17.1c-0.8,0-1.4,0.6-1.4,1.4v89.2
                              c0,0.8,0.6,1.4,1.4,1.4c0,0,11.9,0,11.9,0c0.5,0,0.9-0.3,1.2-0.8c0.3-0.5,0.7-4.1,0.7-4.1s7,6.6,20.2,6.6c15.5,0,24.4-7.9,24.4-35.4
                              C374.2,38.3,360,34.7,350.4,34.7z M343.7,84.9c-5.9-0.2-9.8-2.8-9.8-2.8V53.8c0,0,3.9-2.4,8.7-2.8c6.1-0.5,12,1.3,12,15.8
                              C354.6,82.1,351.9,85.2,343.7,84.9z"/>
                            <path class="logo1" d="M163.3,36.5h-12.8c0,0,0-16.9,0-16.9c0-0.6-0.3-1-1.1-1H132c-0.7,0-1,0.3-1,0.9v17.5c0,0-8.7,2.1-9.3,2.3
                              c-0.6,0.2-1,0.7-1,1.4v11c0,0.8,0.6,1.4,1.4,1.4h8.9c0,0,0,11.5,0,26.4c0,19.6,13.7,21.5,23,21.5c4.2,0,9.3-1.4,10.1-1.7
                              c0.5-0.2,0.8-0.7,0.8-1.3l0-12.1c0-0.8-0.7-1.4-1.4-1.4c-0.7,0-2.7,0.3-4.6,0.3c-6.3,0-8.4-2.9-8.4-6.7c0-3.8,0-25.1,0-25.1h12.8
                              c0.8,0,1.4-0.6,1.4-1.4V37.9C164.7,37.2,164.1,36.5,163.3,36.5z"/>
                          </a>
                        </svg>
                </div> 

                <div class="DecorLineB"></div>

                <div class="Linked">
                      <svg version="1.1" id="Layer_1" x="0px" y="0px"
                        viewBox="0 0 400 97.6" xml:space="preserve">
                        <a href="https://www.linkedin.com/in/jan-szalanski/">
                        <path class="logo2" d="M365.3,2.8c0.4,0.1,0.7,0.2,1.1,0.3c3,0.8,5,3.3,5,6.6c0,19.8,0,39.6,0,59.4c0,6,0,12,0,18c0,3.2-2,5.8-5.2,6.5
                          c-0.4,0.1-0.8,0.1-1.3,0.1c-26.1,0-52.1,0-78.2,0c-3.5,0-6.3-2.8-6.4-6.3c0-0.2,0-0.3,0-0.5c0-25.7,0-51.5,0-77.2
                          c0-3.2,1.9-5.8,4.9-6.6c0.4-0.1,0.9-0.2,1.3-0.3C312.9,2.8,339.1,2.8,365.3,2.8z M328.9,42.5c0-1.5,0-3.1,0-4.6c0-0.7-0.2-1-1-1
                          c-3.7,0-7.5,0-11.2,0c-0.8,0-1,0.2-1,1c0,13.9,0,27.7,0,41.6c0,0.8,0.3,1.1,1.1,1.1c3.8,0,7.7,0,11.5,0c1.1,0,1.1,0,1.1-1.1
                          c0-6.9,0-13.8,0-20.7c0-1.4,0.1-2.9,0.3-4.3c0.6-3.8,2.7-6.7,7.7-6.6c3.6,0.1,5.8,1.8,6.4,5.3c0.3,1.9,0.5,3.9,0.5,5.8
                          c0.1,6.8,0,13.6,0,20.4c0,0.9,0.2,1.1,1.1,1.1c3.8,0,7.7,0,11.5,0c0.8,0,1.1-0.2,1.1-1.1c0-8.4,0.1-16.9-0.1-25.3
                          c0-2.6-0.4-5.3-1-7.9c-1.1-4.7-3.9-8.2-8.8-9.6c-1.5-0.4-3.2-0.6-4.8-0.8c-2.6-0.3-5.2,0-7.7,1C333,38.1,330.7,40,328.9,42.5z
                          M307.4,58.7c0-6.9,0-13.9,0-20.8c0-0.8-0.2-1-1-1c-3.9,0-7.8,0-11.7,0c-0.9,0-1.1,0.2-1.1,1.1c0,13.8,0,27.7,0,41.5
                          c0,0.9,0.3,1.1,1.1,1.1c3.8,0,7.7,0,11.5,0c1.1,0,1.1,0,1.1-1.2C307.4,72.5,307.4,65.6,307.4,58.7z M308.5,23.2
                          c0-4.4-3.5-7.9-7.9-7.9s-7.9,3.5-7.9,7.9c0,4.3,3.5,7.9,7.9,7.9S308.5,27.6,308.5,23.2z"/>
                        <path class="logo2" d="M254.2,74.6c-0.2,0.2-0.4,0.4-0.6,0.7c-3.5,4.1-7.9,6.2-13.3,6.1c-5.8-0.1-10.9-1.9-15-6.1
                          c-3-3.1-4.8-6.9-5.5-11.1c-1-5.8-0.5-11.4,2-16.8c2.7-5.7,6.9-9.8,13.2-11.2c4.6-1,9.2-0.6,13.5,1.4c1.6,0.8,3,1.9,4.1,3.2
                          c0.2,0.2,0.3,0.4,0.7,0.7c0-0.5,0.1-0.8,0.1-1.2c0-7.7,0-15.3,0-23c0-0.8,0.2-1,1-1c3.8,0,7.5,0,11.3,0c0.8,0,1.1,0.2,1.1,1
                          c0,20.6,0,41.3,0,61.9c0,0.7-0.2,1-0.9,1c-3.5,0-6.9,0-10.4,0c-0.7,0-0.9-0.2-0.9-0.9c0-1.3,0-2.6,0-3.8c0-0.3,0-0.6,0-0.9
                          C254.3,74.7,254.3,74.6,254.2,74.6z M243.6,69.7c0.6-0.1,1.3-0.1,1.9-0.2c2.6-0.4,4.8-1.4,6.5-3.5c1.5-1.9,2.2-4.1,2.4-6.4
                          c0.2-3.6-0.5-6.9-3.3-9.5c-1.8-1.8-4.1-2.5-6.6-2.7c-3.3-0.2-6.4,0.5-8.8,3c-2.8,2.9-3.5,6.5-2.9,10.3
                          C233.7,66.4,237.8,69.7,243.6,69.7z"/>
                        <path class="logo2" d="M141.4,59c0,0.3,0,0.7,0,1c0,6.5,0,12.9,0,19.4c0,0.7-0.2,1-0.9,1c-3.8,0-7.7,0-11.5,0c-0.7,0-0.9-0.2-0.9-0.9
                          c0-20.7,0-41.4,0-62.1c0-0.8,0.2-1,1-0.9c3.8,0,7.6,0,11.4,0c0.8,0,1,0.3,1,1c0,12,0,23.9,0,35.9c0,0.4,0,0.7,0,1.4
                          c0.5-0.5,0.8-0.7,1-1c4.6-5.3,9.2-10.6,13.7-15.9c0.4-0.5,0.9-0.7,1.6-0.7c4.8,0,9.5,0,14.3,0c0.3,0,0.6,0,1,0
                          c-0.2,0.3-0.3,0.5-0.4,0.6c-5.5,6.2-11,12.5-16.5,18.7c-0.5,0.5-0.4,0.9,0,1.4c5.4,7.2,10.7,14.4,16,21.6c0.2,0.3,0.4,0.5,0.6,0.9
                          c-0.4,0-0.7,0-1,0c-4.9,0-9.9,0-14.8,0c-0.7,0-1.1-0.2-1.4-0.8c-4.4-6.6-8.8-13.3-13.3-19.9c-0.2-0.3-0.4-0.5-0.6-0.8
                          C141.6,58.9,141.5,59,141.4,59z"/>
                        <path class="logo2" d="M203.9,66.1c3.1,2.3,6.1,4.5,9.4,6.9c-1.3,1.2-2.4,2.4-3.7,3.4c-4,3.2-8.6,4.9-13.8,5
                          c-7.1,0.2-13.4-1.7-18.6-6.6c-3.6-3.5-5.7-7.8-6.3-12.7c-0.6-4.5-0.2-8.9,1.7-13c3-6.6,8.3-10.6,15.3-12.4c4.6-1.2,9.3-1.3,13.9,0.2
                          c6.4,2.1,10.2,6.6,12.2,12.8c0.8,2.4,1.2,4.8,1.2,7.3c0,1.6,0,3.2,0.1,4.8c0.1,0.8-0.2,1-1.1,1c-9.7,0-19.3,0-29,0
                          c-0.4,0-0.8,0-1.2,0.1c-0.2,2,2,6.1,5.7,7.7C193.8,72.3,200.1,71.5,203.9,66.1z M184,53.7c0.5,0,0.8,0,1.1,0c3.6,0,7.2,0,10.8,0
                          c1.8,0,3.5,0,5.3,0c0.5,0,0.9-0.2,0.7-0.8c-0.3-1.2-0.5-2.6-1.2-3.7c-3-5.2-11-5.5-14.8-0.7C184.8,50.1,184.1,51.7,184,53.7z"/>
                        <path class="logo2" d="M91.9,43.1c0.3-0.3,0.5-0.5,0.6-0.6c3-4.5,7.3-6.6,12.7-6.5c2.9,0.1,5.7,0.4,8.3,1.7c3.5,1.8,5.4,4.8,6.4,8.5
                          c0.8,3,1.1,6.1,1.1,9.2c0,8,0,15.9,0,23.9c0,1.1,0,1.1-1.1,1.1c-3.7,0-7.3,0-11,0c-1.2,0-1.2,0-1.2-1.1c0-6.9,0-13.8,0-20.7
                          c0-1.9-0.2-3.9-0.6-5.8c-0.9-4.1-4-5.4-7.8-5c-4.7,0.5-6.1,3.7-6.6,6.9c-0.3,1.7-0.3,3.4-0.3,5.2c0,6.5,0,13,0,19.5c0,0.8-0.2,1-1,1
                          c-3.8,0-7.6,0-11.4,0c-0.7,0-0.9-0.2-0.9-0.9c0-13.8,0-27.7,0-41.5c0-0.7,0.2-0.9,0.8-0.9c3.7,0,7.4,0,11.2,0c0.6,0,0.9,0.2,0.8,0.8
                          c0,1.4,0,2.8,0,4.2C91.9,42.3,91.9,42.6,91.9,43.1z"/>
                        <path class="logo2" d="M11.7,48.4c0-10.3,0-20.6,0-30.9c0-1.1,0-1.1,1.1-1.1c3.9,0,7.8,0,11.7,0c0.9,0,1.1,0.2,1.1,1.1
                          c0,16.2,0,32.5,0,48.7c0,1.3,0,1.3,1.3,1.3c7.9,0,15.8,0,23.8,0c0.8,0,1.1,0.2,1,1c0,3.6,0,7.3,0,10.9c0,0.7-0.2,0.9-0.9,0.9
                          c-12.7,0-25.4,0-38.1,0c-0.8,0-0.9-0.3-0.9-1C11.8,69,11.7,58.7,11.7,48.4z"/>
                        <path class="logo2" d="M71.4,58.7c0,6.9,0,13.8,0,20.7c0,0.7-0.2,1-0.9,1c-3.8,0-7.7,0-11.5,0c-0.8,0-0.9-0.2-0.9-1
                          c0-13.8,0-27.5,0-41.3c0-0.8,0.2-1,1-1c3.8,0,7.6,0,11.4,0c0.8,0,1,0.3,1,1C71.4,44.9,71.4,51.8,71.4,58.7z"/>
                        <path class="logo2" d="M72.5,23.2c0.2,3.5-2.6,7.8-7.7,7.8s-7.7-4.2-7.7-7.7c0-4.3,3.4-7.8,7.8-7.7C69.1,15.5,72.5,18.9,72.5,23.2z"/>
                        <path class="logo2" d="M381.7,88.2c-0.4-0.1-1-0.1-1-0.3c-0.1-0.6,0-1.3,0-1.9v-0.1c0.7,0,1.4-0.2,2.1-0.1c0.3,0,0.7,0.5,0.8,0.8
                          c0.3,0.6-0.2,1.3-0.9,1.4c-0.3,0-0.6,0-0.9,0C381.7,88.1,381.7,88.1,381.7,88.2z"/>
                        <circle class="logo2" cx="381.8" cy="88.3" r="5.7"/>
                        <text transform="matrix(1 0 0 1 379.057 91.2305)" class="logo2 logo2font logo2font">R</text>
                        </a>
                      </svg>
                </div>

                <div class="DecorLineB"></div>

                <div class="vimeo">
                      
                          <svg version="1.1" id="Layer_1"   x="0px" y="0px"
                        viewBox="0 0 848.9 240" xml:space="preserve">
                        <a href="https://vimeo.com/szalanski">
                      <g>
                        <path class="logo3" d="M237.1,54.4c10.2,0,19-3.5,26.5-10.7c6.7-6.3,10.1-12.9,10.4-19.8c0.3-4.7-1.5-9.3-5.4-13.8
                          c-3.9-4.5-8.7-6.8-14.5-6.8c-10,0-19,3.3-27.2,9.9c-8.1,6.6-12.3,13.4-12.6,20.6C213.7,47.5,221.3,54.4,237.1,54.4z"/>
                        <path class="logo3" d="M824.4,97.4c-10-13-24.7-19.5-44-19.5c-30.2,0-55.2,11-75.1,33.1c-18.5,19.8-27.1,41.7-25.7,65.4
                          c0.1,1.7,0.2,3.3,0.4,5c-1,0.4-2.1,0.9-3.1,1.3c-23.5,10.1-45.2,15.2-65.1,15.2c-10,0-17.4-3.4-22.4-10.3
                          c26.8-4.4,49.1-14.7,66.8-31c16.6-14.9,24.3-29.3,23.2-43.4c-1.6-22.1-16-33.1-43.1-33.1c-29.3,0-54.7,11.1-76.3,33.2
                          c-19.7,20.2-29.6,41.5-29.9,63.9c-0.1,3.7,0.1,7.3,0.6,10.8c-4.6,3-8.1,4.6-10.5,4.6c-5.3,0-8.6-1.1-10-3.3s-2-6.2-1.7-12
                          c0-2.2,1.7-10.7,5.2-25.4c3.5-14.8,5.3-26,5.6-33.7c0.6-11.3-1.6-19.9-6.6-26c-5.8-7.4-15.3-10.6-28.6-9.5
                          c-11,0.8-21.7,4.9-31.9,12.4c-6.1,4.4-12.3,10.3-18.7,17.8c-2.2,1.9-4.3,3.8-6.2,5.4c0.3-11.3-1.9-20-6.6-26.1
                          c-5.8-7.4-15.4-10.6-29-9.5c-15.7,1.4-30,7.6-42.7,18.7c-5.5,4.7-10.4,10.2-14.5,16.6c0.5-2.5,0.8-5.1,0.8-7.9
                          c0-8.6-2.2-16.1-6.6-22.6c-4.4-6.5-10.2-9.5-17.4-8.9c-4.1,0.3-12,5.8-23.6,16.6c-16,15-24.7,23-26.1,24.1l10,11.2
                          c7.7-5.6,12.4-8.4,14.1-8.4c3,0,4.2,2.4,3.7,7.4c-0.2,7.2-1.5,17.2-3.8,30c-1.4,7.8-2.4,14.5-3,20.2c-0.2,0.2-0.4,0.3-0.6,0.5
                          c-9.9,8.2-16.8,12.3-20.7,12.3c-8.9,0-13.2-5.9-12.9-17.8c4.1-25.9,8-47.3,11.6-64.1c1.1-9.9-0.5-18-4.8-24.2
                          c-4.3-6.2-11-8.9-20.1-8.1c-5.9,0.6-14.7,6.1-26.6,16.6c-4.1,3.8-8.2,7.5-12.4,11.3c-0.8-19.5-9.8-29.5-26.9-30
                          c-25.6-0.8-42.9,13.7-52,43.4c4.7-2,9.3-3,13.7-3c9.4,0,13.5,5.3,12.4,15.8c-0.5,6.4-4.7,15.7-12.4,27.9
                          c-7.7,12.2-13.5,18.3-17.4,18.3c-5,0-9.6-9.4-13.7-28.2c-1.4-5.6-3.9-19.7-7.5-42.4C89,86.9,80.2,77.1,65.8,78.5
                          c-6.1,0.6-15.2,6.1-27.4,16.6c-8.9,8.1-17.9,16.1-27,24.1l8.7,11.2c8.3-5.8,13.1-8.7,14.5-8.7c6.3,0,12.3,9.9,17.8,29.8
                          c5,18.2,9.9,36.5,14.9,54.7c7.4,19.9,16.5,29.8,27.3,29.8c17.4,0,38.7-16.3,63.8-49c17.7-22.8,29.2-42.1,34.4-57.8
                          c6.9-5.1,11.2-7.7,12.8-7.7c5,0,7.5,3.6,7.5,10.8c0,1.4-2.7,11.6-8.1,30.7c-5.4,19.1-8.2,33.2-8.5,42.3c-0.3,8.9,1.8,16.1,6.4,21.6
                          c4.5,5.5,11.1,8.3,19.7,8.3c18.5,0,37.1-8,55.6-24c1.7-1.5,3.4-3,5-4.6c1.5,6.4,4,11.5,7.7,15.6c7.9,8.6,21.4,12.6,40.4,12
                          c-2.6-6.1-3.6-16.9-3-32.4c0.8-17.2,5.3-33.6,13.3-49.4c8-15.7,15.5-23.6,22.4-23.6c8,0,11.8,5.1,11.2,15.3
                          c-0.3,7-1.7,14.9-4.1,23.7c-2.5,8.8-3.8,17.7-4.1,26.5c-0.6,14.1,2.6,24.2,9.5,30.3c7.7,6.9,21.2,10.1,40.5,9.5
                          c-2.9-6.4-4.1-15.5-3.5-27.4c0.9-16.9,6.6-34.3,17.1-52.3c10-17.1,18.6-25.7,25.8-25.7c6.7,0,9.9,5.3,9.6,15.8
                          c-0.3,6.9-2,16.6-5.2,29c-3.2,12.4-4.9,23.1-5.2,31.9c-0.6,19.9,8.1,29.8,26.1,29.8c18.5,0,37.1-8,55.6-24c0.3-0.2,0.5-0.5,0.8-0.7
                          c0.6,1.1,1.3,2.2,2,3.2c9.6,14.9,25.7,22.4,48.1,22.4c30.2,0,59.9-8.5,89.2-25.3c3.3-1.8,6.3-3.7,9.3-5.5c1.8,3.7,4,7.2,6.6,10.4
                          c11.4,14.1,28,21.1,49.8,21.1c26.3,0,48.3-9.2,66-27.7s27.1-40.5,28.2-65.9C838.2,124.4,833.9,109.1,824.4,97.4z M583,171.8
                          c-0.2-3.6-0.2-5.4,0-5.4c0.2-10.4,4.6-21.4,13.2-32.8c8.6-11.4,17-17.1,25.3-17.1c6.3,0,9.4,3.7,9.1,11.1
                          c-0.3,5.6-4.5,12.7-12.4,21.5C608.3,159.3,596.5,166.9,583,171.8z M790.5,141.6c-0.6,13.3-4.6,26-12.1,38.2
                          c-8.8,14.7-19.5,22-31.9,22c-5.6,0-9.9-3-12.9-9.1c-2.7-5.3-4-11.4-3.7-18.3c0.6-14.1,4.7-27.4,12.5-39.9
                          c9.1-15.3,20.7-22.9,34.8-22.9c4.5,0,7.8,3.2,10.2,9.4C789.7,127.3,790.8,134.1,790.5,141.6z"/>
                      </g>
                      </a>
                      </svg>
                </div>

              </div>

            </div>

          </div>
  
        </div> 

      </section>

      <section class="Footer__BottomSection">
        <!-- <div class="Footer__BottomSection-MarginL"></div> -->

        <div class="Footer__BottomSection-Left">
          <div class="Footer__BottomSection-Left-Div2">
            <h3 class="Footer__BottomSection-Left-h3P">2012 -2021 &copy; Wszelkie prawa zastrzeżone.</h3>
          </div>

          <div class="Footer__BottomSection-Left-Div1">
            <h2 class="Footer__BottomSection-Left-h2P">szalanski.eu</h2>
          </div>

          <div class="QRKode Dark"></div>
        </div>

        <div class="Footer__BottomSection-Middle">
          <div class="Footer__BottomSection-Middle-Div1">
            <h2 class="Footer__BottomSection-Middle-h2P">
              Informacja: Strona niniejsza wykorzystuje do prawidłowego działania pliki cookies
              <a class="CookiesP" href="https://skrypt-cookies.pl/czym-sa-ciasteczka" target="_blank"
                  >[ Więcej informacji ]</a>
            </h2>
          </div>
        </div>

        <div class="Footer__BottomSection-Right">
          <div class="Footer__BottomSection-Right-P">
            <div class="Footer__BottomSection-Right-Div1">
              <h2 class="Footer__BottomSection-Right-h2P">
                szalanski.eu <br />
                Jan Szałański
              </h2>
            </div>

            <div class="Footer__BottomSection-Right-Div2">
              <h3 class="Footer__BottomSection-Right-h3P">
                02-285 Warszawa <br />
                Szyszkowa 46\13<br />
                NIP: 5222739323 <br />REGON :1462757
              </h3>
            </div>

            <div class="Footer__BottomSection-Right-Div3">
              <h3 class="Footer__BottomSection-Right-h3BP">Polityka Prywatności</h3>
            </div>
          </div>
        </div>

        <!-- <div class="Footer__BottomSection-MarginR"></div> -->
      </section>
    </footer>
  </div>

  <script src="~/../js/prywatnie.js"></script>
  <!-- <script src="~/../js/board.js"></script> -->

  <script>
    grecaptcha.ready(function(){
      grecaptcha.execute('<?php echo SITE_KEY; ?>', {action: 'homepage'}).then(function(token){
        document.getElementById('g-recaptcha-response').value=token;
            
      });
    });
  </script> 
  
</body>

</html>