# kb
Simple KnowledgeBase

Dit is een KB Systeem gemaakt in PHP

instalatie is gemakkelijk
execute de SQL script en je kan beginnen
maak een gebruiker aan in database , Wachtwoorden zijn MD5
voorbeeld wachtwoord generatie:
gebruiker : user
wachtwoord : pass
md5 = md5(user-pass-user);

#RoadMap
*volledig prive
*Sidebar voor weergave folders
*simpel admin

#BaseVieuw Sidebar
Aleen waneer ingelogt
|
-> ##HoofdCategory
 |
 -> #Sub Category
  |
  -> Pagina -> weergave in midden
|
-> ##HoofdCategory
  |
  -> #Sub Category
    |
	->Pagina
	|
	->Pagina

Zoekfunctie in header
login/logout en admin menu in header

2 groepen , admin en geen admin
WYSIWIG editor
post editor
aangemaakt
Laatst gewijzigt

#Database opbouw
Gebruikers -> id - gebruiker - wachtwoord - groep
hc -> id - naam
shc -> id - hc - naam
post -> id - shc - naam - info - cg - cts- eg - ets
