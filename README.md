# kb
Simple KnowledgeBase

Dit is een KB Systeem gemaakt in PHP

instalatie is gemakkelijk 

execute de SQL script en je kan beginnen 

gebruiker : admin 

wachtwoord : 123456


#RoadMap
+ volledig prive
+ Sidebar voor weergave folders
+ simpel admin
+ Zoekfunctie in header
+ login/logout
+ admin menu in header

+ 3 rechten , admin (3) staff (2) en gebruiker (1)
+ WYSIWIG editor
+ post editor
+ aangemaakt
+ Laatst gewijzigt

#BaseVieuw Sidebar
Aleen waneer ingelogt
 
###HoofdCategory
 * Sub Category
  * Pagina -> weergave in midden

  
###HoofdCategory
 * Sub Category
  * Pagina
  * Pagina
 


#Database opbouw

##gebruikers
| id |   naam 	 | wachtwoord | rechten |
|----|-----------|------------|---------|
| 1	 |	 Admin	 | 	  SHA1	  |    3  	|
| 15 | 	 User	 |    SHA1	  |	   1  	|
##hc
| id |		naam	 |
|----|---------------|
| 2	 | HoofdCategory |
##shc
| id | hc | naam |
|----|----|------|
| 3	 | 2  | Sub	 |
##post
| id | shc | naam | 	info   | cu | cts | eu | ets |
|----|-----|------|------------|----|-----|----|-----|
| 4	 |	3  | post | hello world| 1  |12345| 15 |12356|

