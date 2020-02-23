INSERT INTO Customer(CEmail, CName, CAddress) VALUES 
('ben@gmail.com', 'ben','8888 48th Ave'), 
('minh@gmail.com', 'minh','7777 47th Ave'), 
('lin@gmail.com', 'lin', '6789 01 Ave'), 
('guest@gmail.com','guest','5478 104th Ave'),
('steven@gmail.com','steven', '4120 49th Ave');

INSERT INTO Customer_postal(CEmail, PostalCode) VALUES 
('ben@gmail.com', 'V6X1L3'), 
('minh@gmail.com', 'M1N2J4'),
('lin@gmail.com', 'J2W2U2'),
('guest@gmail.com','P2Q7J1'),
('steven@gmail.com','V2J8K9');

INSERT INTO City(PostalCode, City) VALUES 
('V6X1L3', 'Vancouver'),
('M1N2J4','Vancouver'),
('J2W2U2', 'Vancouver'),
('P2Q7J1','Richmond'),
('V2J8K9','Burnaby');

/*no single quote in string */

INSERT INTO Product_Details(PName, Price, ReleaseDate, Publisher) VALUES 
('Hitman 2', 29.99, '2018-12-2', 'Ubisoft'),
('Starcraft 2', 9.99, '2012-1-1', 'Blizzard' ),
('Shadow of Tombraider', 24.99, '2018-9-14','Ubisoft'),
('FIFA 19', 24.99, '2018-9-15','EA'),
('Diablo 3', 12.99, '2012-6-1', 'Blizzard' ),
('Life is Strange', 38.99, '2017-8-1', 'Ubisoft'),
('Assassin Creed Odyssey', 28.99, '2018-10-5', 'Ubisoft'),
('The Messenger', 10.99, '2018-8-30', 'Sabotage'),
('Below', 12.49, '2018-12-14', 'Indie'),
('Call Of Duty', 28.99, '2018-10-12', 'Ubisoft'),
('Super Mario Bros', 49.99, '2018-12-7','Nintedo'),
('Marvel SpiderMan', 28.45, '2018-12-7', 'Sony'),
('Red Dead Redemption 2', 68.99, '2018-10-26', 'RockStar Game'),
('GTA 5', 32.99, '2013-9-17','RockStar Game'),


('Playstation 4', 379, '2011-1-4', 'Sony'),
('Wii', 199, '2010-3-15', 'Foxconn'),
('Nintedo Switch', 377.99, '2017-8-2','Nintedo');




INSERT INTO Product_Stock(PID, PName, Quantity) VALUES 
(100, 'Hitman 2', 50), 
(101, 'Starcraft 2', 40), 
(102, 'Shadow of Tombraider', 50),
(103, 'FIFA 19', 65),
(104, 'Diablo 3', 50),
(105, 'Life is Strange', 49),
(106, 'Assassin Creed Odyssey', 0),
(107, 'The Messenger', 49),
(108, 'Below', 20),
(109, 'Call Of Duty', 0),
(110, 'Super Mario Bros', 25),
(111, 'Marvel SpiderMan', 102),
(112, 'Red Dead Redemption 2', 12),
(113, 'GTA 5', 10),


(901, 'Playstation 4', 203),
(902, 'Wii', 309),
(903, 'Nintedo Switch', 200);




INSERT INTO Supplier_Address(SName, SAddress, SPhone) VALUES
('Dailyjob', '8888 Avenue', 7789512929), 
('PlanetEarth', '2938 Granvill', 6049823932), 
('AmazingThing', '2901 Street', 2369321129), 
('Dancegood', '2030 Lily Street', 4162444444), 
('Daycare', '2000 Cowyao', 9050208932);

INSERT INTO Supplier_Email(SName, SEmail) VALUES 
('Dailyjob', 'ksjd@gmail.com'), 
('PlanetEarth', 'wekljsk@gmail.com'), 
('AmazingThing', 'woeius@gmail.com'), 
('Dancegood', 'xmcl@gmail.com'), 
('Daycare', 'pwejksd@gmail.com');

INSERT INTO Logistics_Address (LName, LAddress, LPhone) VALUES ('Firefire', '900 Street', 7981232343), 
('Givemesome', '1008 Avenue', 2049235934),
('Freesnack', '998 mountain', 1109902233), 
('Sneakdance', '882 Granville', 6820239987), 
('Keyboard', '9282 Skyhigh', 5869082737);

INSERT INTO Logistics_Email (LName, LEmail) VALUES 
('Firefire', 'weimsk@gmail.com'), 
('Givemesome', 'qqkwej@gmail.com'), 
('Freesnack', 'zzxm@gmail.com'), 
('Sneakdance', 'owpe@gmail.com'), 
('Keyboard', 'qidm@gmail.com');

INSERT INTO Orders (OID, CEmail, OrderQuantity) VALUES 
(10001, 'ben@gmail.com', 1), 
(10002, 'minh@gmail.com', 2), 
(10003, 'lin@gmail.com', 2), 
(10004, 'guest@gmail.com', 1), 
(10005, 'steven@gmail.com', 2),
(10006,'ben@gmail.com',1),
(10023,'minh@gmail.com',1),
(10024,'lin@gmail.com',1),
(10025,'steven@gmail.com',1);

INSERT INTO Purchase (CEmail, OID, PID) VALUES 
('ben@gmail.com', 10001, 100),
('minh@gmail.com', 10002, 101),
('lin@gmail.com', 10003, 102),
('guest@gmail.com',10004, 103),
('steven@gmail.com', 10005, 104),
('minh@gmail.com', 10022,101),
('ben@gmail.com', 10006,101),
('guest@gmail.com', 10023,101),
('lin@gmail.com', 10024,101),
('steven@gmail.com', 10025,101);

INSERT INTO Employee (EID, EName, ESalary, ERole) VALUES 
(9001, 'Jay', 5440, 'Supervisor'), 
(9002, 'Chow', 3880, 'Staff'), 
(9003, 'Jim', 4500, 'Manager'), 
(9004, 'Frank', 4200, 'Staff'), 
(9005, 'May', 4500, 'Operator');

INSERT INTO Verifies (EID, OID, DateVerified) VALUES 
(9001, 10001, '2012-2-20'), 
(9002, 10002, '2012-3-15'), 
(9003, 10003, '2013-3-3'), 
(9004,10004,'2013-5-13'), 
(9005, 10005, '2014-1-3');

INSERT INTO Offer (FirstProduct, SecondProduct) VALUES 
(00101, 00102), 
(00103, 00104), 
(00103, 00102), 
(00104, 00101), 
(00104, 00102);

INSERT INTO Delivery (TrackingNumber, CEmail, OID, LName) VALUES (0000000009, 'steven@gmail.com', 10001, 'Firefire'), 
(0000000008, 'ben@gmail.com', 10002, 'Givemesome'),
(0000000007, 'minh@gmail.com', 10002, 'Freesnack'),
(0000000006, 'lin@gmail.com', 10004,'Sneakdance'),
(0000000005, 'guest@gmail.com', 10005, 'Keyboard');
