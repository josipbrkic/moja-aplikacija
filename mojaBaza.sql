drop database if exists mojaBaza;
create database mojaBaza charset utf8;
use mojaBaza;

create table kupac (
	sifra 		int 			not null primary key auto_increment,
	email 		varchar(100)	not null,
	lozinka 	varchar(100)	not null,
	ime 		varchar(50)		not null,
	prezime 	varchar(50)		not null,
	adresa 		varchar(100)	not null,
	telefon 	int 			not null
);

create table dostava (
	sifra 		int 			not null primary key auto_increment,
	kupac		int				not null,
	adresa 		varchar(100),
	datum		datetime
);

create table racun (
	proizvod 	int 			not null,
	kolicina	int				not null,
	cijena 		decimal(18,2)	not null,
	dostava 	int				not null
);

create table proizvod (
	sifra 		int 			not null primary key auto_increment,
	ime 		varchar(50)		not null,
	cijena 		decimal(18,2)	not null,
	opis		text,
	slika		varchar(100),
	kategorija	int				not null
);

create table kategorija (
	sifra		int 			not null primary key auto_increment,
	ime 		varchar(50)		not null,
	opis		text
);

alter table dostava add foreign key (kupac) references kupac(sifra);
alter table racun add foreign key (dostava) references dostava(sifra);
alter table racun add foreign key (proizvod) references proizvod(sifra);
alter table proizvod add foreign key (kategorija) references kategorija(sifra);

insert into kupac (sifra, email, lozinka, ime, prezime, adresa, telefon) 
	values 	(null, 	'leon@mail.com', 	'lozinka1', 	'Leon', 	'Brkic', 	'Kolodvorska 434, Osijek', 			0919897969),
			(null, 	'josip@mail.com', 	'lozinka2',		'Josip',	'Brkic',	'Brkićev arman 100, Feričanci,', 	0915555555),
			(null, 	'ivana@mail.com', 	'lozinka3',		'Ivana',	'Brkic',	'Ružina 789, Osijek', 				0912345678),
			(null, 	'ana@mail.com', 	'lozinka4',		'Ana',		'Brkic',	'Dubrovačka 321, Osijek', 			0919999999);
			
insert into kategorija (sifra, ime, opis)
	values	(null, 'Juice', '100% svježe cijeđeni sok...'),
			(null, 'Milkshake', 'Uz sladoled sve je bolje...'),
			(null, 'Smoothie', 'Izuzetno hranjiv obrok, kušaj...'),
			(null, 'Frappcafe', 'Osvježavajuće piće na bazi kave...');
			
insert into proizvod (sifra, ime, cijena, opis, slika, kategorija) 
	values 	(null, 	'Limunada', 	10.00, 	null, 	null, 	1),
			(null, 	'Naranča', 	10.00, 	null, 	null, 	1),
			(null, 	'Jabuka', 	12.00, 	null, 	null, 	1),
			(null, 	'Grejp', 	12.00, 	null, 	null, 	1),
			(null, 	'Kruška', 	15.00, 	null, 	null, 	1),
			(null, 	'Banana Shake', 	25.00, 	null, 	null, 	2),
			(null, 	'Malina Shake', 	25.00, 	null, 	null, 	2),
			(null, 	'Berry Queen', 	30.00, 	null, 	null, 	3),
			(null, 	'Aronia Apple', 	30.00, 	null, 	null, 	3),
			(null, 	'Raspberry Refreshener', 	50.00, 	null, 	null, 	3);
			
insert into dostava (sifra, kupac, adresa, datum)
	values	(null, 1, 'Dubrovačka 999, Osijek' , '2016-08-29'),
			(null, 2, null, '2016-09-09'),
			(null, 4, 'Zagrebačka 888, Osijek', '2016-09-09'),
			(null, 1, null, '2016-09-10'),
			(null, 3, null, '2016-09-10'),
			(null, 3, null, '2016-09-11');

insert into racun (proizvod, kolicina, cijena, dostava)
	values	(1, 1, 55.00,1),
			(6, 3, 18.00,1),
			(6, 6, 66.00,2),
			(4, 4, 89.00,3),
			(1, 1, 12.00,4),
			(6, 3, 18.00,5),
			(5, 12, 9.00,6);

				

