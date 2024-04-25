Welkom!
Als je geinterresseerd bent in mijn setup?.. Dan heb ik hier een volledige omschrijving om mijn setUp te COPY&PASTE. en voor het geval ik zelf mijn setUp weer eens opnieuw 
wil installeren want dat gaat nog welleens fout. dan heb ik hier mijn geheugensteuntje om op weg te helpen.




Mijn onderdelen
Moederbord: MSI UNIFY-X-MAX 570
AMD RYZEN 9 5900X
32 GB RAM MEMORY 4DDR
GRAPHICS CARD REDEON RX 6700X 
SSD 2TBx1 firecuda 540 | 1TBx2 firecuda 530 | 1TBx1 WD black | 500GBx1 samsung 970
PURE LOOP 360 WATERCOOLED



Ik heb meedere ssd om meerdere OS te kunnen installeren zonder me druk te hoeven maken dat ik mijn partitie beschadig.

Ik gebruik als mijn OS Garuda.

Dit is een easy to work with distro van arch Linux
Ook Als 2e stabiele versie om te programmeren daarvoor gebruik ik Ubuntu
en om te gamen, Windows.


Het beste om mee te beginnen is voor mij gebleken om met windows te beginenn en daarna al je drivers te installeren. 
dit zodat je met up to date drivers je andere OS installeerd(Maar dit is niet noodzakkelijk)
Voor nieuwere hardware is het vaak heel makkelijk om een drivers te installeren. Vaak kun je een Package manager vinden om de 
site van je hardware.

Windows installeren from scratch.

Zorg er voor dat je een backup computer hebt of gewoon toegang tot internet. een usb. en belangrijk vrij schema!

download officiele release van windows. download rufus en maak een 

bootable usb,
met rufus heb je de mogelijkheid om de verplichte login, bitlocker, TPM2.0 te disable. 
Klik die opties aan. 

Ga naar je Bios settings op mijn computer is dat del 
zoek naar de boot opties! selecteer de optie usb als 1e opstart optie. zet secure boot uit en Select eufi move_uploaded_file

Na de installatie kom je bij de 1e configuratie als je toch bij account login komt druk dan SHIFT+F10 om CMD te openen en type

eboo\bypassnro. 

Dit is het proberen waard. het heeft wel gewerkt een x denk ik

belangrijk ook vooraf handig om je tijdens het installeren je internet uit te zetten.

Na de windows installatie kan je beter Ubuntu installeren en daarna pas Garuda omdat je dan al een terminal beschikbaar hebt voor 
het maken van een bootable garuda iso.

Ubuntu installatie.

Wanneer je de optie krijgt om  te kiezen hoe je ubuntu wilt installeren, kies dan niet voor allong_side windows maar 
ga naar custom settup en kies de schijf op welke je deze wilt installeren.

als het niet mogelijk is om verder te gaan na een schijf selectie ga dan naar de partities op de desbetreffende schijf en verwijder de partities
na verwijdering van de partities zou het als het goed is mogelijk moeten zijn om te installeren maar zo niet creeer dan een nieuwe partitie met de volgende settings
kies 
formattype EXT4
en bij mount options typ je / 
eventueel swap with hiberanation kiezen.


maken van garuda iso.

open een terminal en 

sudo dd if="garuda iso file path" of="usb_dev_filePath" LET OP!! DIT IS NIET DE COMMAND DIE JE MOET UITVOEREN.


deze paths kan je vinden door in je terminal de command lsblk 





dus de volledige command als je ubuntu gebruikt.








