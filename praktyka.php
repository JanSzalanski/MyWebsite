<?php

 session_start();



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

      case "projekty":
        unset($_SESSION['podstrona']);
        break;

      case "prywatnie":
        unset($_SESSION['podstrona']);
        break;

      default:
      $_SESSION['podstrona']="praktyka";
      break;

    }

  }

  $_SESSION['podstrona']="praktyka";

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
  <title>Praktyka</title>  
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

    <div class="PraktykaPicture"></div>

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
          <!--  sociale ostatecznie tutaj nie wykorzystane
                          <div class="Header__Logo-Right-Div1">

                              <a href="https://www.linkedin.com/in/jan-szalanski/">
                                  <div class="socialL"></div>
                              </a>

                              <a href="https://www.youtube.com/channel/UCY59lj5rPEpNdXwBlK7uMnQ/about?view_as=subscriber">
                                  <div class="socialY"></div>
                              </a>

                              <a href="https://facebook.com">
                                  <div class="socialF"></div>
                              </a>

                          </div> -->
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

              <input type="text" name="imie" placeholder="Imi?? *" maxlength="30" tabindex="1"
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
              
              <input type="submit" value="wy??lij" tabindex="4" autocomplete="off" />
  
            </div>

            <!-- ---------------------------------------------------WIADOMOSC *---------------------------------------------------------->
            <div class="Contact__Form-Area">

                 <?php  
                if (isset($_SESSION['e_message'] )){
                    echo '<div class="error-top">'.$_SESSION['e_message'].'</div>';   
                                  
                }
              ?> 
    
              <textarea class="Contact__Form-Textarea" name="message" id="message" cols="80" rows="5"
                placeholder="Tre???? wiadomo??ci *" maxlength="600" tabindex="5"><?php 
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

        <button class="Contact__Btn">Kontakt</button>
        <div class="Contact__Cross-V--Btn"></div>
        <div class="Contact__Cross-H--Btn"></div>
      </section>
 
      <section class="Menu">
        <div class="Menu__Left">
          <div class="Menu__Left-Left"></div>

          <nav class="Nav">
            <!-- Od tego momentu zaczyna sie w??a??ciwa nawigacja  zmieni??em Bem na komponent od tego momentu-->
 
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
          <h3>/ komunikacja kwantowa /</h3>
        </div>
      </section>
    </header>

    <div class="Troll">
      <div class="GreyMiddleB Praktyka">
        <div class="BackgroundGrey"></div>
        <div class="Miara"></div>
        <!-- <div class="LineHelp"></div> -->
        <!-- <div class="LineCross"></div> -->
        <aside class="BoardP">
          <div class="CanvasShadow"></div>
          <div class="CanvasB"></div>
          <div class="CanvasA"></div>
          <div class="Canvas"></div>

          <div class="Article">
            <h2 class="Article__TytulBoczny">Pierwiastek \ ??ywio?? - <b class="Article__TytulBoczny-B">03</b></h2>

            <header class="Article__Naglowek">
              <h2 class="Article__H2">Stabilno????<span class="Article__H2-Span">| ziemia</span></h2>
            </header>

            <div class="Article__Overflow">
              <article id="Article__Artykul-Two">
                <p id="Article__Artykul-Pro-Two">
                  Je??eli we wsp????czesnym ??wiecie stwierdzi??em, ??e brakuje mi harmonii ??? to co dopiero mo??na powiedzie?? o stabilno??ci - odk??d w 2020 roku pojawi?? si?? nam temat wirusa? Pandemia, kolejny kryzys finansowy. Rynek zostaje powywracany na r????ne strony podobnie jak, to mia??o miejsce 2008 roku, ale nie zupe??nie tak samo - bo obok zbli??onej narracji mamy obecnie nowo???? w postaci zamykania wszystkiego przed potencjalnym ??miertelnym zagro??eniem. No c????, chyba nawet najwi??kszy optymista mia??by problem z dopatrzeniem si?? stabilno??ci w takiej sytuacji. Osobi??cie uwa??am, ??e nie ma co si?? obra??a?? na rzeczywisto???? - jest taka, jaka jest, a jak ??piewa?? klasyk show must go on! Stabilno???? - co ja przez to rozumiem w odniesieniu do swojego biznesu, ale te?? czego sam by?? oczekiwa?? u innych? Po pierwsze stabilno???? wyra??ona przez uczciwe okre??lanie ceny sprzedawanego produktu czy us??ugi. 
                </p>
                <p id="Article__Artykul-Pro-Two-B">
                  Bez ukrytych koszt??w, bez wide??ek, bez ??ciemniania i sztucznego obni??ania ceny po to, ??eby tylko z??owi?? rybk?? i j?? potem ???umiej??tnie zagospodarowa?????. Wydaje mi si??, ??e lepiej jest si?? spotka??, przedstawi?? cen?? i ewentualnie nie doj???? do porozumienia i u??cisn???? sobie d??o?? na zako??czenie. Ni?? potem mie?? do siebie jakie?? ukryte pretensje czy ??al. Stabilizacja w uczciwym stawianiu sprawy, jak r??wnie?? niepodejmowanie na si???? tematu gdzie od pocz??tku wiemy, ??e co?? nie jest nasz?? mocn?? stron??. Zazwyczaj takie post??powanie ko??czy si?? kolejn?? dewastacj?? tej cechy w postaci niedotrzymanych termin??w czy ??enuj??cej jako??ci produktu ko??cowego, maj??cej si?? nijak do pocz??tkowych zapewnie??. O to jest skr??cona definicja stabilno??ci w relacjach firma-klient i vice versa, jak?? ja sobie wyobra??am i jakiej staram si?? trzyma??.
                </p>
              </article>
            </div>

            <footer class="Article__Stopka">
              <div class="Article__Corner">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 100 12">
                  <path d="M100,12H10C4.48,12,0,7.52,0,2V0h92L100,12z" />
                </svg>
              </div>
              <div class="Article__Buttons">
                <div data-index="" class="Article__Btn Article__Btn--active"></div>

                <div data-index="" class="Article__Btn-B Article__Btn--inactive"></div>
              </div>
            </footer>
          </div>

          <div class="DescryptionBtn">
            <span class="DescryptionBtn__Span">D</span>
            <p class="DescryptionBtn__P"><span>D</span>escription</p>
            <div class="DescryptionBtn__Border"></div>
          </div>

          <div class="InfoP">
            <header class="Info__Naglowek">
              <h2 class="Info__H2">Ziemia<span class="Info__H2-Span">| stabilno????</span></h2>
            </header>

            <article class="Info__Artykul">
              <p class="Info__Artykul-P">
                Ziemia jest fundamentem pod trwa??e osi??gni??cia to ??ywio?? potrzebny do realizacji plan??w. O osobach
                obdarzonych tym pierwiastkiem m??wi si??, ??e s?? ugruntowane i twardo st??paj?? po ziemi. Podobno, aby
                nada?? realny kszta??t naszym planom, projektom, marzeniom - potrzebujemy du??o tego sk??adnika w naszym
                usposobieniu. Ziemia sprowadza nas z powietrza i bujania w ob??okach. Odpowiada za zmys?? dotyku i
                ko??ci. Ziemia jest najbardziej fizycznym (namacalnym) z ??ywio????w jest zwi??zana ze zdrowiem i si????.
                Uto??samia solidno???? i wytrwa??o????, kojarzy si?? ze schronieniem (domem) i bezpiecze??stwem. Przyj??te
                jest, ??e Ziemia to domena kobiet.
              </p>
            </article>
          </div>

          <div class="Button">></div>
        </aside>

        <div class="WrapperTresc Opraktyce">
          <h1 class="Tresc__H1">
            PRA - 03 stabilno????
            <div class="Square"></div>
          </h1>

          <div class="CornerTop"></div>
          <div class="CornerTopIn"></div>
          <div class="CornerTopR"></div>
          <div class="LineCornerTR"></div>
          <div class="CornerBottom"></div>
          <div class="CornerBottomIn"></div>
          <div class="CornerBottomR"></div>
          <div class="Line"></div>
          <div class="LineIn"></div>
          <div class="LineLeft"></div>
          <div class="LineLeftIn"></div>
          <div class="LineRight"></div>

          <div class="ShapeA">
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

            <h3 class="NaglowekTresc">AAT Holding Sp.z.o.o.</h3>

            <div class="maska">
              <div class="ozdobnik">
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

            <p> 
             Po raz pierwszy podj????em zatrudnienie w polskiej firmie AAT Holding sp. z o.o. Jako m??ody ch??opak po technikum elektronicznym i student wieczorowy mog??em podj???? prac?? na pe??ny etat w sp????ce, gdzie szukano technika serwisu do naprawy wielu urz??dze?? elektronicznych. ??wietnie si?? sk??ada??o ja jeszcze ??wie??y adept technikum elektronicznego a tu od razu praca w zawodzie. Co prawda g????wnym powo??aniem, jakie mnie przywiod??o do owego technikum, by??a informatyka i taki te?? by?? kierunek moich studi??w. Natomiast uzna??em, ??e takie elektroniczne do??wiadczenie mo??e tylko zaprocentowa?? i sprawi??, ??e b??d?? jeszcze lepszym specjalist?? w przysz??ej dowolnej specjalizacji informatycznej. Firma zajmowa??a si?? dystrybucj?? urz??dze?? SSWiN czyli System??w Sygnalizacji W??amania i Napadu. W siostrzanej firmie mieszcz??cej si?? w tym samym budynku oferowano produkty pod mark?? w??asn?? z dziedziny CCTV, czyli na polski - telewizji dozorowej. Moim zadaniem postawionym przez Dyrektora mia??o by?? naprawianie asortymentu z jednej, jak i drugiej dziedziny. Oraz je??li podo??am - udzielanie porad technicznych na temat oferowanych rozwi??za?? tak??e najlepiej z obydwu obszar??w. Troch?? mnie zdziwi??o, ??e nikt z w??wczas pracuj??cych serwisant??w nie posiada?? tak szerokiego zakresu obowi??zk??w ??? nie zastanawia??em si?? jednak nad tym d??ugo i przeszed??em do dzia??ania. Mia??em to szcz????cie, ??e w serwisie, jak i w dziale technicznym pracowali zdolni ludzie daleko bardziej zaawansowani elektronicy ode mnie - m??odego adepta tej dziedziny. Jednak ta ??wiadomo???? tylko mnie mobilizowa??a do pracy nad swoimi umiej??tno??ciami tak, aby z czasem stra?? si?? dor??wnywa?? tym w??a??nie osobom. Takie okoliczno??ci dawa??y mo??liwo??ci uczenia si?? od lepszych od siebie, co jest bardzo efektywne i szalenie motywuj??ce. Nale??y powiedzie??, ??e asortyment firmy nie sprowadza?? si?? do jednej marki w??asnej telewizji i kilku marek z tzw. alarm??wki o nie??? cennik, kt??ry tak??e stosunkowo dobrze zna??em by?? ca??kiem opas??ym wydawnictwem w??asnym. Poza tym firma mia??a oddzia??y w Polsce, jaki poszerza??a swoje portfolio o rynki zagraniczne. Jednym s??owem z uwagi na wielko???? firmy brygada w serwisie nie narzeka??a na prac?? w tym i ja. Po dw??ch latach chyba na tyle dobrze wywi??zywa??em si?? z ambitnych za??o??e?? postawionych mojej osobie, ??e z technika serwisu sta??em si?? specjalist?? do spraw serwisu i z tego, co mi wiadomo ??aden z moich bardziej do??wiadczonych koleg??w ze specjalizacji SSWiN lub CCTV nie zg??osi?? zastrze??e?? do takiego ca??kiem szybkiego awansu.
            </p>

            <h3 class="NaglowekTresc">NSS Sp.z.o.o.</h3>

            <div class="maska">
              <div class="ozdobnik">
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
            <p>
                Po trzech i p???? roku przeszed??em do firmy o podobnym profilu produktowym na podobne stanowisko tj. specjalista ds. serwisu technicznego. Czyli znowu naprawa sprz??tu z dw??ch dziedzin SSWiN oraz CCTV. Tym razem inne marki z nieco mniej opas??ego cennika. Tak??e do moich obowi??zk??w nale??a??a pomoc techniczna na miejscu i przez telefon. W tej firmie by??o to nawet bardziej obci????aj??ce, gdy?? tutaj za moich czas??w dzia?? techniczny nie wyst??powa?? by?? tylko serwis. Firma by??a du??o mniejsza, je??li chodzi o sk??ad osobowy jednak nie wiele mniejsza, je??li chodzi o asortyment. Ekstremalnie ma??a, je??li chodzi o osoby techniczne. Do???? powiedzie??, ??e by??o ich w??wczas ze mn?? dok??adnie trzy. Je??li u os??b, kt??re by?? mo??e troch?? znaj?? si?? na pracy serwisowej czy elektronika w??a??nie zrodzi??a si?? taka my??l ?- ??e co ja tam si?? rozpisuje nad prostym zaj??ciem polegaj??c?? na demonta??ach i wymianach p??yt g????wnych czy ca??ych modu????w. Ot???? od samego pocz??tku w tej firmie, jak i opisywanej poprzednio by??o moim priorytetem (oraz niekt??rych koleg??w po fachu) - zdiagnozowanie usterki znalezienie uszkodzonych element??w i ich wymiana. M??wi??c kr??tko jak najefektywniejsze podej??cia do kwestii naprawy pod wzgl??dem koszt\efekt (a jeszcze kr??cej nie p??j??cie na ??atwizn??). Czyli robienie czego?? wi??cej ni?? tylko sprawny monta??-demonta?? wyuczonego asortymentu. Nie zra??a??a mnie nawet wymiana uk??ad??w scalonych bga. Rozpoznanie niekt??rych usterek z czasem dosz??o do takiego poziomu, ??e uszkodzone element\ty potrafili??my precyzyjnie rozpozna?? w danym produkcie na podstawie samego d??wi??ku, jaki si?? z niego wydobywa?? (taki by?? przer??b). A w niekt??rych przypadkach defekt rozpoznawali??my (z ca??kiem du??o doz?? prawdopodobie??stwa) po dochodz??cym z wn??trza przedmiotu zapachu tak, nie przewidzia??o si?? Tobie po zapachu... Lub co by??o ju?? sztuk?? prostsz?? na sam dotyk - bez patrzenia. Czyli, innymi s??owy, i z ma??ym przymru??eniem oka ??? w w??skim gronie mogli??my urz??dza?? zawody prestidigitatorskie z napraw elektroniki przy zas??oni??tych oczach :)  
            </p>

            <h3 class="NaglowekTresc">freelancer</h3>

            <div class="maska">  
              <div class="ozdobnik">
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
            <p>             
              Kolejny rok zwiastowa?? zmiany - niebawem mia??em zmierzy?? si?? tematem obrony pracy dyplomowej. Powoli wi??c obiera??em kierunek na stricte informatyczne klimaty. Tak wi??c kolejne 2 lata to praca g????wnie jako freelancer w grafice komputerowej, ale nie tylko. Troch?? to by?? czas chwytania si?? r????nych projekt??w, eksperymentowania co ostatecznie by??o dobr?? zapraw?? przed rozpocz??ciem dzia??alno??ci, na kt??r?? zdecyduje si?? w przeci??gu nast??pnych dw??ch lat. Mog?? tylko doda??, ??e w tym okresie zdarzy??o mi si?? pracowa?? jako grafik 3d przy reklamach do telewizji.
            </p>

            <div class="BorderPic">
              <div class="PicA">
                <div class="Scanline"></div>
                <div class="Winieta"></div>
              </div>
              <div class="UnderSvg"></div>
              <svg class="svgPic">
                <defs>
                  <mask id="mask">
                    <rect x="0" y="0" height="100%" width="100%" />
                    <text x="75%" y="50%" text-anchor="middle">KADR</text>
                  </mask>
                </defs>
                <rect x="0" y="0" height="100%" width="100%" />
              </svg>
              <h2>Skrzyde??ko czy n????ka</h2>
              <h1>Skrzyde??ko czy n????ka</h1>
            </div>

            <div class="ShapeB">
              <h3>sektor /// a</h3>
            </div>
          </div>

          <div class="ShapeC"></div>
          <div class="ShapeD"></div>
        </div>

        <div class="WrapperTrescB OpraktyceB">
          <div class="CornerTopB"></div>
          <div class="CornerTopInB"></div>
          <div class="CornerTopBL"></div>
          <div class="LineCornerTBL"></div>
          <div class="CornerBottomB"></div>
          <div class="CornerBottomInB"></div>
          <div class="CornerBottomBL"></div>
          <div class="LineB"></div>
          <div class="LineInB"></div>
          <div class="LineLeftB"></div>
          <div class="LineRightIn"></div>
          <div class="LineRightB"></div>

          <div class="ShapeBA">
            <div class="ShapeBARect"></div>
            <div class="ShapeBBRect"></div>
            <div class="ShapeBCRect"></div>
            <h3>Continued</h3>
          </div>

          <div class="RectangleA"></div>
          <div class="LinesA"></div>
          <div class="LinesB"></div>

          <div class="RectangleTresc">
            <div class="Background"></div>
            <div class="BackgroundNoise"></div>
            <div class="BackgroundGrid"></div>
            <div class="BackgroundGardient"></div>
            <h3 class="NaglowekTresc">S??d Rejonowy dla Warszawy ??oliborza</h3>

            <div class="maska">
              <div class="ozdobnik">
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
            <p>
              Jako ju?? ???dyplomowany??? informatyk zacz????em prac?? w S??dzie Rejonowym dla Warszawy ??oliborza. W obiegowej opinii funkcjonuje przekonanie, ??e praca w instytucji pa??stwowej to jedynie picie kawy od 8 do 16. Nie ko??czenie - a z pewno??ci?? nie dla osoby technicznej jednej z trzech lub cz????ciej dw??ch. Bo doko??a czekaj?? na ni?? takie atrakcje jak mi??dzy innymi ponad 400 u??ytkownik??w przesz??o 300 maszyn i ca??a infrastruktura, czyli sieci, bazy danych, serwery. O specjalizowanym oprogramowaniu resortowym nawet nie b??d?? wspomina??, bo mo??na by napisa?? na te temat powie???? i to nie koniecznie romantyczn??. W publicznym sektorze jest si?? specjalist?? od wszystkiego. Mo??na by rzec, ??e jest si?? cz??owiekiem od administrowania systemami Windows Server (ca??ego ich spektrum), zarz??dzania bazami SQL, poprzez nadzorowanie sieci a?? po bycie guru od Worda i Excela. Jedno, czego by?? mo??e by??o najmniej, je??li chodzi o informatyczne zaj??cia w takim miejscu jak S??dy to programowanie - przynajmniej nie w opisywanych przeze mnie (nie licz??c oczywi??cie zapyta?? SQL i okazjonalnego skryptowania). Cz??owiek orkiestra pierwsza, jaki druga linia wsparcia, informatyk z help desk, ??eby zaraz przemieni?? si?? w administratora system??w czy sieci, a w mi??dzyczasie robi si?? za admina od baz danych i tak  ca??y czas. Tu nie ma specjalist??w w bia??ych ko??nierzykach, tu trzeba by?? t??g?? g??ow?? (z grub?? sk??r??), kt??ra nie boi si?? zakasa?? r??kawy i czasami ubrudzi?? r??ce. Co dzie?? by??em na pierwszej linii frontu po to, aby ca??y ten niema??y przybytek spod znaku ?????lepej niewiasty???, jako tako funkcjonowa??. Dni spokojne by??y rzadko??ci?? i najcz????ciej oznacza??y przys??owiow?? cisz?? przed burz??. W 2012 roku przechodz?? na w??asn?? dzia??alno???? i od tej pory na podstawie faktur rozliczam moj?? wsp????prac?? z S??dem. W tym czasie zrealizowa??em na rzecz ??oliborskiego S??du sporo dodatkowych projekt??w, kt??re opisa??em na s??siedniej stronie i do lektury, kt??rych gor??co zach??cam.
            </p>

            <h3 class="NaglowekTresc">S??d Rejonowy dla Warszawy Woli</h3>

            <div class="maska">
              <div class="ozdobnik">
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
            <p>  
              Po oko??o 3 i p???? roku przechodz?? do s??siedniego S??du Rejonowego dla Warszawy Woli, kt??ry funkcjonowa?? w ramach tego samego obiektu. Nowe miejsce charakteryzowa??a nieco wi??ksza liczba u??ytkownik??w i sprz??tu oraz liczniejsza infrastruktura sieciowa i serwerowa. Skomplikowanie kt??rej by??o te?? minimalnie wi??ksze, chocia??by z uwagi na wyst??powanie UTM. Sprawy mia??y si?? dodatkowo utrudni??, bo ca??e s??downictwo czeka??o wdro??enie dodatkowego systemu informatycznego do rejestracji rozpraw, jak r??wnie?? wirtualizacja ju?? istniej??cego ??rodowiska za pomoc?? Vmware. Oczywi??cie p????niejsza wirtualizacja zasob??w serwerowych nie spowodowa??o, ??e serwery sprz??towe przesta??y by?? przydatne. Mo??e najstarsze egzemplarze czeka??a w ko??cu zas??u??ona emerytura, ale to, co reprezentowa??o sob?? jak??kolwiek moc obliczeniow??, zawsz?? mog??o liczy?? na znalezienie jakiego?? nowego i przydatnego zastosowania. Brygada t??gich g????w liczy??a tutaj stale cztery osoby (cho?? z pewnym zastrze??eniem). Mog?? napisa??, ??e obowi??zki i realia pracy tutaj by??y bli??niaczo podobne do tych ju?? opisanych w poprzednim s??dzie. Tyle tylko, ??e tutaj wszystkiego by??o ciut wi??cej, jak r??wnie?? sama sie?? by??a wed??ug mnie bardziej przekombinowana - ale spokojnie za mojego urz??dowania dosz??o do jej zast??pienia now?? ???lepsz?????. W tym s??dzie tak??e uda??o mi si?? zrealizowa?? kilka dodatkowych projekt??w. Ju?? na koniec, jako ciekawostk?? dla tego etapu mojej ??cie??ki zawodowej mog?? doda??, ??e w 2018 roku w Ministerstwie Sprawiedliwo??ci moja osoba zostaje wybrana na administratora us??ug sieciowych (Departament Informatyzacji i Rejestr??w S??dowych).
            </p> 

            <div class="BorderPic">
              <div class="PicB">
                <div class="Scanline"></div>
                <div class="Winieta"></div>
              </div>
              <div class="UnderSvgB"></div>
              <svg class="svgPic">
                <defs>
                  <mask id="mask">
                    <rect x="0" y="0" height="100%" width="100%" />
                    <text x="75%" y="50%" text-anchor="middle">KADR</text>
                  </mask>
                </defs>
                <rect x="0" y="0" height="100%" width="100%" />
              </svg>
              <h2>Mi??</h2>
              <h1>Mi??</h1>
            </div>

            <div class="ShapeBB">
              <h3>sektor /// b</h3>
            </div>
          </div>

          <div class="ShapeBC"></div>
          <div class="ShapeBD"></div>
        </div>

        <aside class="BoardMobo Praktyka">
          <div class="CanvasShadowM"></div>

          <div class="CanvasBM"></div>

          <div class="CanvasAM"></div>

          <div class="CanvasM Firma"></div>

          <div class="BMWrap__articles-container">
            <div class="BMWrap__article-container BMWrap__article-container--second">
              <div class="BMWrap__background--second Praktyka"></div>

              <h2 class="BMWrap__header BMWrap__header--second">Ziemia <span>| stabilno????</span></h2>

              <p class="BMWrap__Info">
                Ziemia jest fundamentem pod trwa??e osi??gni??cia to ??ywio?? potrzebny do realizacji plan??w. O osobach
                obdarzonych tym pierwiastkiem m??wi si??, ??e s?? ugruntowane i twardo st??paj?? po ziemi. Podobno, aby
                nada?? realny kszta??t naszym planom, projektom, marzeniom - potrzebujemy du??o tego sk??adnika w naszym
                usposobieniu. Ziemia sprowadza nas z powietrza i bujania w ob??okach. Odpowiada za zmys?? dotyku i
                ko??ci. Ziemia jest najbardziej fizycznym (namacalnym) z ??ywio????w jest zwi??zana ze zdrowiem i si????.
                Uto??samia solidno???? i wytrwa??o????, kojarzy si?? ze schronieniem (domem) i bezpiecze??stwem. Przyj??te
                jest, ??e Ziemia to domena kobiet.
              </p>
            </div>
            <div class="BMWrap__article-container BMWrap__article-container--first">
              <div class="BMWrap__background--first"></div>

              <h2 class="BMWrap__header BMWrap__header--first">Stabilno???? <span>| ziemia</span></h2>
              <div class="BMWrap__Overflow">
                <div class="BMWrap__paragraphs">
                  <p class="BMWrap__paragraphA">
                    Je??eli we wsp????czesnym ??wiecie stwierdzi??em, ??e brakuje mi harmonii ??? to co dopiero mo??na powiedzie?? o stabilno??ci - odk??d w 2020 roku pojawi?? si?? nam temat wirusa? Pandemia, kolejny kryzys finansowy. Rynek zostaje powywracany na r????ne strony podobnie jak, to mia??o miejsce 2008 roku, ale nie zupe??nie tak samo - bo obok zbli??onej narracji mamy obecnie nowo???? w postaci zamykania wszystkiego przed potencjalnym ??miertelnym zagro??eniem. No c????, chyba nawet najwi??kszy optymista mia??by problem z dopatrzeniem si?? stabilno??ci w takiej sytuacji. Osobi??cie uwa??am, ??e nie ma co si?? obra??a?? na rzeczywisto???? - jest taka, jaka jest, a jak ??piewa?? klasyk show must go on! Stabilno???? - co ja przez to rozumiem w odniesieniu do swojego biznesu, ale te?? czego sam by?? oczekiwa?? u innych? Po pierwsze stabilno???? wyra??ona przez uczciwe okre??lanie ceny sprzedawanego produktu czy us??ugi. 
                  </p>    

                  <p class="BMWrap__paragraphB">
                    Bez ukrytych koszt??w, bez wide??ek, bez ??ciemniania i sztucznego obni??ania ceny po to, ??eby tylko z??owi?? rybk?? i j?? potem ???umiej??tnie zagospodarowa?????. Wydaje mi si??, ??e lepiej jest si?? spotka??, przedstawi?? cen?? i ewentualnie nie doj???? do porozumienia i u??cisn???? sobie d??o?? na zako??czenie. Ni?? potem mie?? do siebie jakie?? ukryte pretensje czy ??al. Stabilizacja w uczciwym stawianiu sprawy, jak r??wnie?? niepodejmowanie na si???? tematu gdzie od pocz??tku wiemy, ??e co?? nie jest nasz?? mocn?? stron??. Zazwyczaj takie post??powanie ko??czy si?? kolejn?? dewastacj?? tej cechy w postaci niedotrzymanych termin??w czy ??enuj??cej jako??ci produktu ko??cowego, maj??cej si?? nijak do pocz??tkowych zapewnie??. O to jest skr??cona definicja stabilno??ci w relacjach firma-klient i vice versa, jak?? ja sobie wyobra??am i jakiej staram si?? trzyma??.
                  </p>
                </div>
              </div>

              <div class="BMWrap__Corner">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 100 12">
                  <path d="M100,12H10C4.48,12,0,7.52,0,2V0h92L100,12z" />
                </svg>
              </div>
              <div class="BMWrap__Buttons">
                <div data-index="" class="BMWrap__Btn BMWrap__Btn--active"></div>

                <div data-index="" class="BMWrap__Btn-B"></div>
              </div>
            </div>
            <div class="BMWrap__handle">
              <!-- <div class="BMWrap__handle-ArrowL">&lt;</div>

              <div class="BMWrap__handle-ArrowR">></div> -->
            </div>
          </div>

          <div class="BMWrap__divider">
            <div class="BMWrap__divider_outline"></div>
            <div class="BMWrap__divider_dot">D</div>
            <span class="BMWrap__divider_span">escription</span>
          </div>
        </aside>
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
          <div class="Footer__Nav-Right-Title">
            Panel dodatk??w
            <div class="Footer__Nav-Right-Arrow">></div>
          </div>

          <div class="Footer__Nav-Right-Bars">
            <div class="Footer__Nav-Right-Bar1"></div>

            <div class="Footer__Nav-Right-Bar2"></div>

            <div class="Footer__Nav-Right-Bar3"></div>

            <div class="Footer__Nav-Right-Bar4"></div>
          </div>

          <div class="Footer__Nav-Right-Space"></div>
        </div>

        <div class="ASMR">
          
          <div class="PanelWrapper RevB">

            <div class="Panel">
              <div class="Panel__Border1">
                <h3>Panel Dodatk??w</h3>  
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
                      <input type="checkbox" name="Panel__Sterowanie_btn" />
                      <h3 class="TrybNocny">Tryb Nocny</h3>
                    </div>

                    <div class="Panel__Btn">

                      <input type="checkbox" name="Panel__Sterowanie_btn" />
                      <h3 class="Dzwieki">D??wi??ki</h3>

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

                <div class="DecorLine"></div>

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

                <div class="DecorLine"></div>

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
            <h3 class="Footer__BottomSection-Left-h3">2012 - 2021 &copy; Wszelkie prawa zastrze??one.</h3>
          </div>

          <div class="Footer__BottomSection-Left-Div1">
            <h2 class="Footer__BottomSection-Left-h2">szalanski.eu</h2>
          </div>

          <div class="QRKode"></div>
        </div>

        <div class="Footer__BottomSection-Middle">
          <div class="Footer__BottomSection-Middle-Div1">
            <h2 class="Footer__BottomSection-Middle-h2">
              Informacja: Strona niniejsza wykorzystuje do prawid??owego dzia??ania pliki cookies
              <a class="Cookies" href="https://skrypt-cookies.pl/czym-sa-ciasteczka" target="_blank"
                  >[ Wi??cej informacji ]</a>
            </h2>
          </div>
        </div>

        <div class="Footer__BottomSection-Right">
          <div class="Footer__BottomSection-Right-P">
            <div class="Footer__BottomSection-Right-Div1">
              <!-- <h2 class="Footer__BottomSection-Right-h2">
                szalanski.eu <br />
                Jan Sza??a??ski
              </h2> -->
            </div>

            <div class="Footer__BottomSection-Right-Div2">
            </div>

            <div class="Footer__BottomSection-Right-Div3">
              <h3 class="Footer__BottomSection-Right-h3B">Polityka Prywatno??ci</h3>
            </div>
          </div>
        </div>

        <!-- <div class="Footer__BottomSection-MarginR"></div> -->
      </section>
    </footer>
  </div>

  <script src="~/../js/praktyka.js"></script>
  <script src="~/../js/boardMobo.js"></script>
  <script src="~/../js/board.js"></script>

  <script>
    grecaptcha.ready(function(){
      grecaptcha.execute('<?php echo SITE_KEY; ?>', {action: 'homepage'}).then(function(token){
        document.getElementById('g-recaptcha-response').value=token;
            
      });
    });
  </script>              

</body>

</html>