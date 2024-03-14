CREATE TABLE Departments(
 departmentID INT AUTO_INCREMENT PRIMARY KEY,
 departmentName VARCHAR(50) NOT NULL,
 address varchar(100) NOT null,
 email CHAR(30) NOT null,
 phone CHAR(10) NOT null,
 logo CHAR(50),
 website CHAR(100),
 parentDepartmentID INT,
 FOREIGN KEY (parentDepartmentID) REFERENCES Departments (departmentID)
);

project32CREATE TABLE Employees(
	employeeID INT AUTO_INCREMENT PRIMARY KEY,
	fullname VARCHAR(30) NOT NULL,
	address VARCHAR(50) NOT NULL,
	email CHAR(30) NOT NULL,
	mobilePhone CHAR(10) NOT NULL,
	positionn VARCHAR(50) NOT NULL,
	avatar CHAR(30) NOT null,
	departmentID INT,
	FOREIGN KEY (departmentID) REFERENCES departments (departmentID)
);

insert into Departments (departmentID, departmentName, address, email, phone, logo, website) values (1, 'Freeman Pearcy', '109 Rusk Hill', 'fpearcy0@merriam-webster.com', '5068115247', 'pede', 'nibh');
insert into Departments (departmentID, departmentName, address, email, phone, logo, website) values (2, 'Rube Bourdice', '2 Sunbrook Hill', 'rbourdice1@amazon.co.uk', '3475382362', 'ante', 'vel');
insert into Departments (departmentID, departmentName, address, email, phone, logo, website) values (3, 'Leeann Symson', '1 Parkside Street', 'lsymson2@clickbank.net', '7353718402', 'in', 'vestibulum');
insert into Departments (departmentID, departmentName, address, email, phone, logo, website) values (4, 'Nicolas Fucher', '8 Lawn Court', 'nfucher3@themeforest.net', '4271594295', 'turpis', 'sit');
insert into Departments (departmentID, departmentName, address, email, phone, logo, website) values (5, 'Kin Bamlett', '85171 Mitchell Point', 'kbamlett4@spiegel.de', '4565445109', 'tincidunt', 'aliquam');
insert into Departments (departmentID, departmentName, address, email, phone, logo, website) values (6, 'Kế toán', 'C2 175 Tay son', 'rsalvidge5@ehow.com', '4942748281', 'congue', 'nisi');
insert into Departments (departmentID, departmentName, address, email, phone, logo, website) values (7, 'Y tế ', '06705 Sunfield Terrace', 'msowten6@cloudflare.com', '7727962002', 'nisi', 'leo');
insert into Departments (departmentID, departmentName, address, email, phone, logo, website) values (8, 'Răng Hàm Mặt''Leahy', '515 Karstens Circle', 'roleahy7@wikipedia.org', '1075209136', 'quis', 'volutpat');
insert into Departments (departmentID, departmentName, address, email, phone, logo, website) values (9, 'Điều dưỡng', '2 Michigan Trail', 'wdurnian8@nih.gov', '9186573095', 'primis', 'nunc');
insert into Departments (departmentID, departmentName, address, email, phone, logo, website) values (10, 'Tim mạch', '6045 Heath Pass', 'pdoveston9@examiner.com', '9652090977', 'a', 'facilisi');

insert into Employees (employeeID, fullname, address, email, mobilePhone, positionn, avatar) values (1, 'Lesly Dicty', '1 Melvin Alley', 'ldicty0@ezinearticles.com', '8876098713', 'nunc', 'laoreet');
insert into Employees (employeeID, fullname, address, email, mobilePhone, positionn, avatar) values (2, 'Sharity Thoday', '3889 Vernon Way', 'sthoday1@ft.com', '3609175057', 'sapien', 'quis');
insert into Employees (employeeID, fullname, address, email, mobilePhone, positionn, avatar) values (3, 'Andrey Catterick', '3759 Almo Center', 'acatterick2@ezinearticles.com', '1554003001', 'sed', 'condimentum');
insert into Employees (employeeID, fullname, address, email, mobilePhone, positionn, avatar) values (4, 'Jessi Motto', '7 East Plaza', 'jmotto3@lycos.com', '8459780249', 'in', 'sed');
insert into Employees (employeeID, fullname, address, email, mobilePhone, positionn, avatar) values (5, 'Calhoun Owens', '65342 Luster Trail', 'cowens4@smh.com.au', '4593872662', 'eget', 'lacus');
insert into Employees (employeeID, fullname, address, email, mobilePhone, positionn, avatar) values (6, 'Baily Rooper', '98 Melrose Alley', 'brooper5@blinklist.com', '3406657337', 'tellus', 'lacus');
insert into Employees (employeeID, fullname, address, email, mobilePhone, positionn, avatar) values (7, 'Catha Fewkes', '671 Buena Vista Road', 'cfewkes6@spotify.com', '5494391413', 'odio', 'ut');
insert into Employees (employeeID, fullname, address, email, mobilePhone, positionn, avatar) values (8, 'Elli Cloy', '49 Morrow Pass', 'ecloy7@homestead.com', '1411788596', 'enim', 'aliquet');
insert into Employees (employeeID, fullname, address, email, mobilePhone, positionn, avatar) values (9, 'Gabby Bendall', '33696 Sachs Avenue', 'gbendall8@studiopress.com', '8178207145', 'donec', 'tristique');
insert into Employees (employeeID, fullname, address, email, mobilePhone, positionn, avatar) values (10, 'Nyssa Stuckow', '21531 Mendota Alley', 'nstuckow9@youtube.com', '3845804346', 'tincidunt', 'sapien');
insert into Employees (employeeID, fullname, address, email, mobilePhone, positionn, avatar) values (11, 'Edithe Leon', '9 Westridge Road', 'eleona@over-blog.com', '6162215417', 'sed', 'pellentesque');
insert into Employees (employeeID, fullname, address, email, mobilePhone, positionn, avatar) values (12, 'Audry Wardington', '15789 Ruskin Court', 'awardingtonb@mysql.com', '2624399565', 'erat', 'adipiscing');
insert into Employees (employeeID, fullname, address, email, mobilePhone, positionn, avatar) values (13, 'Selina Capron', '39 Homewood Pass', 'scapronc@shinystat.com', '6419981503', 'adipiscing', 'volutpat');
insert into Employees (employeeID, fullname, address, email, mobilePhone, positionn, avatar) values (14, 'Broddie Maypole', '8118 Ryan Center', 'bmaypoled@newyorker.com', '5438431622', 'suspendisse', 'nulla');
insert into Employees (employeeID, fullname, address, email, mobilePhone, positionn, avatar) values (15, 'Izabel Gagie', '6144 Hauk Drive', 'igagiee@vimeo.com', '5738371025', 'pellentesque', 'in');
insert into Employees (employeeID, fullname, address, email, mobilePhone, positionn, avatar) values (16, 'Putnam Meddemmen', '6244 Esker Park', 'pmeddemmenf@tiny.cc', '4256712742', 'elementum', 'vulputate');
insert into Employees (employeeID, fullname, address, email, mobilePhone, positionn, avatar) values (17, 'Ricard Cousens', '24 Pleasure Avenue', 'rcousensg@constantcontact.com', '4893390942', 'blandit', 'platea');
insert into Employees (employeeID, fullname, address, email, mobilePhone, positionn, avatar) values (18, 'Caitrin Stairmand', '5969 Hollow Ridge Park', 'cstairmandh@walmart.com', '5213889546', 'sollicitudin', 'sodales');
insert into Employees (employeeID, fullname, address, email, mobilePhone, positionn, avatar) values (19, 'Nicky Willson', '61070 Sunfield Alley', 'nwillsoni@soundcloud.com', '5903339743', 'penatibus', 'turpis');
insert into Employees (employeeID, fullname, address, email, mobilePhone, positionn, avatar) values (20, 'Warner Rhodes', '4 Shasta Court', 'wrhodesj@fda.gov', '7754799417', 'ipsum', 'vivamus');

insert into Users (username, passwordd, rolee) values ('Jonell Risso', 'aL0#.3tTqe@@*d"MH?<2/''7\Gn"$A', 'admin');
insert into Users (username, passwordd, rolee) values ('Hatti Stalman', 'fU4#$,K@,f69d$T|AlFzR}d8%AV}s|', 'admin');
insert into Users (username, passwordd, rolee) values ('Eal Bellison', 'cG6&Q__/zeh&)yFlb")+z(MA''sIKQkt', 'admin');
insert into Users (username, passwordd, rolee) values ('Reggi Allabarton', 'tH2=n"q%oB"$Jgr|dZnt>gjSoi~%', 'rengular');
insert into Users (username, passwordd, rolee) values ('Lorenzo Georgeot', 'yI1?6+F!fI1KF`*e3', 'rengular');
insert into Users (username, passwordd, rolee) values ('Ashbey Scutching', 'pI5<FqlXk$v/7*%nRo\_{', 'rengular');
insert into Users (username, passwordd, rolee) values ('Lacy Buzine', 'vJ2)M4M)R.7!ygTpB?I', 'rengular');
insert into Users (username, passwordd, rolee) values ('Brandice Busst', 'tM2<GDSp73vGC045(', 'rengular');
insert into Users (username, passwordd, rolee) values ('Correy Depke', 'vE7*0j}QHvIPCA(fycZZh!(Yq>', 'rengular');
insert into Users (username, passwordd, rolee) values ('Rogers Craighall', 'eQ1,jz5?6j0vah''.Ci19aw0', 'rengular');
insert into Users (username, passwordd, rolee) values ('Minny Cohani', 'fY8''UUMl_''H6QG_v|%JckWFsB&53}n', 'rengular');
insert into Users (username, passwordd, rolee) values ('Cammy Placstone', 'bD2#/GnmGX=)9wBlTt`&', 'rengular');
insert into Users (username, passwordd, rolee) values ('Cynthea McGarva', 'xC3*Wat(F|gI`HN>a', 'rengular');
insert into Users (username, passwordd, rolee) values ('Melisandra Jeenes', 'mR1?Z#l''`=MT!=x''5Nfo?l\N2?j}(0', 'rengular');
insert into Users (username, passwordd, rolee) values ('Lyndsay Assender', 'wU0~#g9#*tmsuGqf3v\,tZl', 'rengular');
insert into Users (username, passwordd, rolee) values ('Marianne Piscopello', 'uB9+SM*?=pR+Y!w}@4Zf@&LKmM*%E#', 'rengular');
insert into Users (username, passwordd, rolee) values ('Wells Orhtmann', 'tV2/@,P3J,PNNM*q<}}D', 'rengular');
insert into Users (username, passwordd, rolee) values ('Maxim Hegges', 'dU9<+70eg7JenNJwn{r1FcK>', 'rengular');
insert into Users (username, passwordd, rolee) values ('Jenifer Sherwood', 'oS4''pCtdm\gazV@N@hfHt*36T*hJ$IW', 'rengular');
insert into Users (username, passwordd, rolee) values ('Humphrey McGilvary', 'oB1''H~5ZKeYorw\i!1_zg', 'rengular');
insert into Users (username, passwordd, rolee) values ('Nguyen Dinh Lam', 'oB1''H~5ZKeYorw\i!1_zg', 'rengular');