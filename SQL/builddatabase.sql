CREATE TABLE Customer(
    CEmail CHAR(50),
    CName CHAR(50),
    CAddress CHAR(50),
    PRIMARY KEY (CEmail)
);



CREATE Table Customer_postal(
    CEmail CHAR(50),
    PostalCode CHAR(6),
    PRIMARY KEY(PostalCode),
    FOREIGN KEY(CEmail) REFERENCES Customer(CEmail)
        ON DELETE CASCADE
        ON UPDATE CASCADE
	
); 

CREATE TABLE City (
	PostalCode CHAR(6),
	City CHAR(50),
    PRIMARY KEY (PostalCode),
    FOREIGN KEY (PostalCode) REFERENCES Customer_postal(PostalCode)
        ON DELETE CASCADE
        ON UPDATE CASCADE
);

CREATE TABLE Product_Details(
    PName CHAR(50),
    Price DOUBLE,
    ReleaseDate DATE,
    Publisher CHAR(50),
    PRIMARY KEY (PName)
);

CREATE TABLE Product_Stock(
    PID INTEGER,
    PName CHAR(50),
    Quantity INTEGER,
    PRIMARY KEY (PID),
    FOREIGN KEY(PName) references Product_Details(PName)
	ON DELETE CASCADE
	ON UPDATE CASCADE
);


CREATE TABLE Supplier_Address(
    SName CHAR(50),
    SAddress CHAR(50),
    SPhone FLOAT,
    PRIMARY KEY (SName)
);

CREATE TABLE Supplier_Email(	
    SName CHAR(50),
    SEmail CHAR(50),
    PRIMARY KEY (SName),
    FOREIGN KEY(SName) references Supplier_Address(SName)
	ON DELETE Cascade
	ON UPDATE Cascade
);

CREATE TABLE Logistics_Address( 
    LName CHAR(50),
    LAddress CHAR(50),
    LPhone FLOAT,
    PRIMARY KEY (LName)
);

CREATE TABLE Logistics_Email(
    LName CHAR(50),
    LEmail CHAR(50),
    PRIMARY KEY (LName),
    FOREIGN KEY(LName) references Logistics_Address(LName)
	ON DELETE Cascade
	ON UPDATE Cascade
);

CREATE Table Orders(
    OID INTEGER,
    CEmail CHAR(50),
    OrderQuantity INTEGER,
    PRIMARY KEY (OID, CEmail),
    FOREIGN KEY (CEmail) REFERENCES Customer(CEmail)
        ON DELETE CASCADE
        ON UPDATE CASCADE
);

/*Connect customer table and order table*/
CREATE TABLE Purchase(
    CEmail CHAR(50),
    OID INTEGER,
    PID INTEGER,
    PRIMARY KEY (CEmail, OID),
    FOREIGN KEY (CEmail) REFERENCES Customer(CEmail)
		ON DELETE Cascade
		ON UPDATE Cascade,
    FOREIGN KEY(OID) REFERENCES Orders(OID)
        ON DELETE Cascade
        ON UPDATE Cascade,
    FOREIGN KEY(PID) REFERENCES Product_Stock(PID)
        ON DELETE Cascade
        ON UPDATE Cascade
);

CREATE TABLE Employee(		
    EID INTEGER,
    EName CHAR(50),
    ESalary INTEGER,
    ERole CHAR(10),
    Primary key(EID)
);

CREATE TABLE Verifies(
    EID INTEGER,
    OID INTEGER,
    DateVerified DATE, 
    PRIMARY KEY (EID, OID),
    FOREIGN KEY (EID) REFERENCES Employee (EID)
	ON DELETE CASCADE
    	ON UPDATE CASCADE,
    FOREIGN KEY (OID) REFERENCES Orders (OID)
    	ON DELETE CASCADE
	ON UPDATE CASCADE
);


CREATE Table Offer (
    FirstProduct INTEGER,
    SecondProduct INTEGER,
    PRIMARY KEY (FirstProduct, SecondProduct),
    FOREIGN KEY (FirstProduct) REFERENCES Product_Stock(PID)
		ON DELETE CASCADE
    	ON UPDATE CASCADE,
    FOREIGN KEY (SecondProduct) REFERENCES Product_Stock(PID)
    	ON DELETE CASCADE
    	ON UPDATE CASCADE
);

CREATE TABLE Delivery(
    TrackingNumber INTEGER,
    CEmail CHAR(50),
    OID INTEGER,
    LName CHAR(50),
    PRIMARY KEY (CEmail,OID,LName),
    FOREIGN KEY(CEmail) references Customer(CEmail)
	ON DELETE CASCADE
	ON UPDATE CASCADE,
    FOREIGN KEY(OID) references Orders(OID)
	ON DELETE CASCADE
	ON UPDATE CASCADE,
    FOREIGN KEY(LName) references Logistics_Address(LName)
	ON DELETE CASCADE
	ON UPDATE CASCADE
);
