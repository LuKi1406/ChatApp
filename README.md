# ChatApp
Chat app using JavaScript,Bootstrap,Ajax,PHP,MySQLi and JQuery

# Opis

## Chat aplikacija
Na početnoj stranici aplikacije nalazi se kratak opis aplikacije te poveznice na login i sign up.
Ukoliko želite koristiti aplikaciju potrebna je registracija, ukoliko u bazi već postoji korisnik pod tim korisničkim imenom aplikacija prikazuje poruku da se ne možete registrirati pod tim korisničkim imenom.
Nakon registracije aplikacija vas vodi na login stranicu kako bi se ulogirali u aplikaciju, ukoliko je login uspješan dolazite na početnu stranicu svog računa na kojoj se nalaze poveznice:
1.Ulazak u chat
2.Promjena lozinke
3.Log out
Ulaskom u chat pojavljuje vam se polje za unos poruke koja može sadržavati do 140 znakova, ime chat sobe te poveznice za povratak na početnu stranicu računa ili log out.
Svi uneseni podaci spremaju se u bazu podataka.
Baza se sastoji od 3 tablice, users(sprema username i password, password je kriptiran), users_chat(sprema poruke,datum i korisnika), chat_rooms(ime chat sobe).

#Instalacija
1.Instalirajte XAMPP ili neki sličan PHP develepment enviroment(ja sam koristila XAMPP)
2.Uđite u XAMPP Control Panel te za Apache i MySQL kliknite Start
2.Folder ChatApp kopirajte u XAMPP folder htdocs
3.Download phpMyAdmin
4.U browser upišite http://localhost/phpmyadmin
5.Kreirajte novu bazu imena Database
6.Copy paste koda za kreiranje baze iz file-a Database.sql koji se nalazi u folderu ChatApp
7.U browser unesite http://localhost/ChatApp/ i otvoriti će vam se aplikacija







