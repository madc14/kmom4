<?php

$output = <<<EOD

<h3>Kmom1</h3>

<h4>Vilken utvecklingsmiljö använder du?</h4>
<p>
Windows 8.1 som operativsystem, med Sublime Text, Visual Studio 2013 och Adobe Dreamweaver som editorer (omväxling förnöjer!).
<br>
Har en lokal utvecklingsserver baserad på IIS under Windows Server 2013R2, med PHP och MySQL-databas.
</p>

<h4>Berätta hur det gick att jobba igenom guiden “20 steg för att komma igång PHP”, var något nytt eller kan du det?</h4>
<p>Har arbetat lite med PHP sedan tidigare, så det mesta var repetition. Men jag märkte under arbetets gång att jag "fulkodat" väldigt mycket - fallit tillbaks
på fungerande kodsnuttar, utan att egentligen tänka på hur man ska göra egentligen - så det var en nyttig repetition! Mycket bra sätt att inleda en kurs på måste jag säga. 
Ett starkt "rude awakening" över hur kass jag faktiskt är på att koda PHP också... :-)
</p>
<p>Det svåraste steget med att komma in i kursen tycker jag nog var att hitta runt. Själv kursmiljön är lite rörig, och att hitta information hur man tex ansluter på studenternas 
FTP-server tog en hel del tid i letande. Men nu (tror jag) att jag vet var alla bitar finns.</p>

<h4>Vad döpte du din webbmall Anax till?</h4>
<p>Kort och gott "Gnarp", efter min lilla hemby.</p>

<h4>Vad anser du om strukturen i Anax, gjorde du några egna förbättringar eller något du hoppade över?</h4>
<p>Mitt första försök på att lösa uppgiften gick i lättjans tecken. Kopierade i princip Aanax rakt av, med ytterst små förändringar.
<br>Sen skämdes jag lite, slängde allting och började om från början...
</p>
<p>Gjorde om filstrukturen så att alla filer ligger under webbroten, vilket kändes mer naturligt. Strukturerade även om i vilken ordning filer laddas, så funktioner och liknande finns 
tillgängliga redan innan sidorna ska renderas ut, vilket gav lite mer möjligheter vid skapandet av själva undersidorna.<br>
Delade upp tema-filen till flera delar (header, main och footer) för att det ska bli lite mer överskådligt att underhålla och uppdatera.<br>
Gjorde även om temat till HTML5, med responsiv design.</p>
Använde guiden för att skapa dynamiska menyer, men gjorde om funktionen för att kontrollera aktiv sida. Nu gör jag en kontroll om filnamnet på den sidan man för stunden är detsamma
som det element som laddas i menyn, såhär:
<pre>
if(&#36;item&#91;'url'&#93; == basename(&#36;_SERVER&#91;'PHP_SELF'&#93;)) {
	&#36;html .= " class='current'";
}
</pre>
<p>För att få undermenyn att fungera på liknande sätt satte jag ett värde för ID i arrayen, vilket kontrolleras från GET om dessa överensstämmer.
<br>Labbmomenten laddas in med en switch-sats som läser in externa PHP-filer för varje laboration.</p>
<p>Jag gjorde även om hur laddandet av JavaScript-filer fungerade i Anax - till ett lite enklare system. Har en flagga (0 eller 1) i config-filen som sätter om
externa JavaScript-filer ska laddas automagiskt eller ej. Är denna funktion aktiverad behöver man bara spara JS-filer i någon av mapparna "top" eller "bottom" i tema-katalogen.
Lägger man ex. en fil i "top"-katalogen laddas denna fil automatiskt in till head-sektionen på webbsidorna. Lägger man i "bottom" laddas de in i slutet av sidorna.<br>
Följande funktion löser detta:<br>
<pre>
function loadJavaScriptHead() {
&#36;file_string = &quot;&quot;;
foreach (glob(&quot;includes/theme/js/top/&quot; . &quot;*.js&quot;) as &#36;filename) {
&#36;file_string .= &quot;&lt;script src='&quot; . &#36;filename . &quot;'&gt;&lt;/script&gt;&quot;;
}
return &#36;file_string;
}
</pre>
<p>Har även gjort samma lösning för att ladda CSS-filer. Det är bara att spara filer med filändelsen .css i css-katalogen under themes, så laddas dessa automagiskt till head-sektionen på webbsidorna. CSS-koden för Mikael Roos source.php laddas på detta vis - liksom jQuery och Lightbox. Dessa filer sorteras dock i bokstavsordning, så man får tänkt på namngivningen för att eventuella beroende laddas i rätt ordning, ex. 1_jquery.js -> 2_lightbox.js.</p>
<p>Tipset om dump-funktionen från uppgiftsbeskrivningen var briljant - och har sparat mig massor med huvudkliande under arbetets gång. <strong>Toppen!</strong></p>

<h4>Gick det bra att inkludera source.php? Gjorde du det som en modul i ditt Anax?</h4>
<p>Efter lite trixande gick det bra. Ja, inkluderade den som en klassfil med hjälp av Anax klassladdare. Funderade alldeles ypperligt.</p>

<h4>Gjorde du extrauppgiften med GitHub?</h4>
<p>Ja, földe den eminenta guiden på kurswebbplatsen. Skapade konto på githubb, och publicerade mitt <a href="https://github.com/madc14/kmom1.git" target="_blank">repository</a>. Fungerade bra.</p>

EOD;
	
return $output;