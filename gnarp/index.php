<?php 
/* Page controller */
include(__DIR__ . "/includes/config.php");

$settings['page_title'] = "Startsida";

/* Main Page Content */
$settings['page_content'] = <<<EOD

<a href="images/mattias_stor.jpg" data-lightbox="example-1"><img src="images/mattias.jpg" alt="Bild på mig" class="mattias" /></a>
<h1>Om mig</h1>
<p><strong>Hejsan!</strong> 
<p>Det här är en webbsida för kursen <a href="http://edu.bth.se/utbildning/utb_kurstillfalle.asp?KtAnmKod=C5404&KtTermin=20142&lang=sv" target="_blan">"DV1485 H14 Lp12 Databaser och objektorienterad prog i PHP"</a>.</p>
<p>Jag heter Mattias Dahlgren och kommer från en (väldigt) liten by strax norr om Hudiksvall som heter Gnarp - där jag bor tillsammans med fru, son, fyra hästar och 11 katter.
<br>
Är utbildad nätverkstekniker (MCSE) men är intresserad av webbutveckling, så ser detta som ett utmärkt tillfälle att lära mig mer om detta.
<br>Har läst en del kurser inom webbutveckling sedan tidigare, men inga mer djuplodande i ämnet objektorienterad PHP.
</p>
<p>Har pysslat en del med responsiv design, och appar för Android/iOS/Windows Phone utvecklade med webbteknik - kompilerade till fristående appar mha PhoneGap.</p>
<p>På friten sitter jag gärna, även då, och kodar på diverse små projekt så som spel i Unity eller kodade med HTML5/JavaScript. Håller även på lite med musik, och fuskar mig fram på diverse
olika instrument. Hem och djur tar också upp mycket av min tid. 
</p>
<p>Är ny är på Blekinge tekniska högskola. Vill ni kontakta mig så skicka gärna ett mail till adressen i sidfoten.</p>
<p>Du kan läsa mer om denna sida under kursmomentet <a href="http://localhost/gnarp/redovisningar.php?id=1">Kmom1</a>
<p><strong>/Mattias</strong></p>



EOD;

/* Render page */
include(GNARP_THEME_PATH);