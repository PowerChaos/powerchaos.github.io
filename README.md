# kb
Simple KnowledgeBase

Dit is een KB Systeem gemaakt in PHP

instalatie is gemakkelijk 

execute de SQL script en je kan beginnen 

maak een gebruiker aan in database , Wachtwoorden zijn MD5 

voorbeeld wachtwoord generatie: 

gebruiker : user 

wachtwoord : pass 

md5 = ```php md5(user-pass-user);``` 

#RoadMap
+ volledig prive
+ Sidebar voor weergave folders
+ simpel admin
+ Zoekfunctie in header
+ login/logout
+ admin menu in header

+ 2 groepen , admin en geen admin
+ WYSIWIG editor
+ post editor
+ aangemaakt
+ Laatst gewijzigt

#BaseVieuw Sidebar
Aleen waneer ingelogt
 
##HoofdCategory
 * Sub Category
  * Pagina -> weergave in midden

  
##HoofdCategory
 * Sub Category
  * Pagina
  * Pagina
 


#Database opbouw

##gebruikers
| id | gebruiker | wachtwoord | groep |
|----|-----------|------------|-------|
| 1	 |	 Admin	 | 	MD5Hash	  |   1	  |
| 15 | 	 User	 |  MD5Hash   |	  2	  |
##hc
| id |		naam	 |
|----|---------------|
| 2	 | HoofdCategory |
##shc
| id | hc | naam |
|----|----|------|
| 3	 | 2  | Sub	 |
##post
| id | shc | naam | 	info   | cg | cts | eg | ets |
|----|-----|------|------------|----|-----|----|-----|
| 4	 |	3  | post | hello world| 1  |12345| 15 |12356|

