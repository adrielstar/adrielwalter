<?php
include 'includes/overall/header.php';
?>
<section id="informatica">
        <div class="container">
            <div class="row">
                    <div class="media contact-info wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="media-body">
                            <center><h2>River Blindness</h2></center>
                            	<p>De opdracht voor dit project was het maken van een eenvoudige HTML pagina met enkele inputs (textbox “inputfile”,“aantal runs”, button “start”, progress bar). Na het submitten van deze HTML pagina moet op de webserver een (Java) command-line applicatie gestart worden, met oa als command-line argumenten de inhoud van de textboxen. Na elke run (dwz aanroepen van de Java applicatie) moet de progress bar in de browser worden bijgewerkt.</p>
    							<p>
									Als programmeertaal moeten we gebruiken <a target="blank" href="https://www.rstudio.com/">RStudio.</a>
								</p> 
								<p>
									Het is de bedoeling dat het huidige simulatieprogramma (nu een Java applicatie met Swing GUI) als 
									een browser kan instellen en vervolgens een aantal simulatieruns kan laten doen (die op de server 
									worden uitgevoerd). Het resultaat (tabellen en grafieken) moet weer in de browser beschikbaar 
									komen. </p>
								<p>
									Het belangrijk van dit project is dat het geconfigureerd kan worden welke parameters gewijzigd kunnen worden (zodat er een ‘basic’, ‘standard’ en ‘expert’ variant kan worden gekozen). </p>
								<p>
									De parameters hebben we gekregen van onze docent in een XML bestand met bijbehorend XML Schema. 
									Bij deze project moesten we ook een onderzoek doen om te kijken welke bestaande technieken en/of standaard software geschikt zijn om een web UI te genereren uit een XML Schema. Waarbij de UI ook moet afdwingen dat alleen de juiste data typen en ranges kunnen worden ingevuld. 
								</p>
								<p>
									Helaas is mijn webhost momenteel geen ondersteuning voor de RStudio versie die nodig is voor dit project ontwikkelde oplossingen. Daarom is er geen werkende versie van het eindresultaat op het moment van de uitputting.
								</p>

								<p> 
									Je kan een beeld krijgen van de website zonder werkende Rstudio door hier op te <a target="blank" href="projecten/www/index.html">kliken</a>.
								</p>
									<img src="images/portfolio/pro/river_blind.png" width="680" height="400" />
                        </div>
             		</div>
            </div>
        </div><!--/.container-->    
    </section><!-- /#conatcat-info- -->
<?php include 'includes/projecten_bottom.php'; ?>
<?php include 'includes/overall/footer.php'; ?>