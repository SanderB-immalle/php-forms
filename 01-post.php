

<!-- Pas formulier en php-code aan zodat een POST wordt gebruikt i.p.v. GET. -->
<!-- Druk alle binnengekomen informatie (NAAM en GESLACHT) af! -->


<form method="get">
    Nickname: <input type="text" name="naam">
    Geslacht:
    <input type="radio" name="geslacht" value="mannelijk">Mannelijk</input>
    <input type="radio" name="geslacht" value="vrouwelijk">Vrouwelijk</input>
    <input type="submit">
</form>

<ul>
<?php


echo "<li>" . $_GET[] . "</li>";
echo "<li>" . $_GET[] . "</li>";


/*
 * Wanneer GET of POST gebruiken?
 *
 * - GET : informatie opvragen, geen verandering bij server (tenzij misschien een logging) of in de database
 * - POST : nieuwe data toevoegen, b.v. aan een databank
 */
?>
</ul>

<h2>Na SUBMIT: Check de <em>BODY</em> van het <em>HTTP</em>-response!</h2>
<p>Daar is de form-data!</p>


<!--
 * Hoewel POST-variabelen niet zichtbaar zijn in de URL,
 * kan je ze gemakkelijk opsporen met de juiste tools (browser devtools, proxy, wireshark, ...),
 * omdat ze CLEARTEXT in de HTTP-header staan.
 
* POST biedt dus GEEN echte extra security!
*
* Naast POST en GET bestaan nog andere HTTP verbs die weinig gebruikt worden (PUT, PATCH, DELETE).
* 
-->
