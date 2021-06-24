-- DROPPING TABLES
DROP TABLE admin_login CASCADE CONSTRAINT;
DROP TABLE estate_admin_details CASCADE CONSTRAINT;
DROP TABLE user_login CASCADE CONSTRAINT;
DROP TABLE company_details CASCADE CONSTRAINT;
DROP TABLE available_commercial CASCADE CONSTRAINT;
DROP TABLE commercial_address CASCADE CONSTRAINT;
DROP TABLE commercial_occupied CASCADE CONSTRAINT;
DROP TABLE waiting_list CASCADE CONSTRAINT;
DROP TABLE civil_servant_details CASCADE CONSTRAINT;
DROP TABLE available_residentials CASCADE CONSTRAINT;
DROP TABLE residential_address CASCADE CONSTRAINT;
DROP TABLE residential_occupied CASCADE CONSTRAINT;

-- DROPPING SEQUENCES
DROP SEQUENCE admin_login_seq;
DROP SEQUENCE estate_admin_details_seq;
DROP SEQUENCE user_login_seq;
DROP SEQUENCE company_details_seq;
DROP SEQUENCE commercial_address_seq;
DROP SEQUENCE available_commercial_seq;
DROP SEQUENCE commercial_occupied_seq;
DROP SEQUENCE civil_servant_details_seq;
DROP SEQUENCE waiting_list_seq;
DROP SEQUENCE residential_address_seq;
DROP SEQUENCE available_residential_seq;
DROP SEQUENCE residential_occupied_seq;

-- ADMIN LOGIN SEQUENCE, TABLE & VALUES
CREATE TABLE admin_login
(
    id int,
    email varchar2(40),
    password varchar2(30),
    levels int,
    constraint adminid_pk primary key (id)
);

CREATE SEQUENCE admin_login_seq
minvalue 0
start with 0
INCREMENT BY 1;

INSERT INTO admin_login VALUES(admin_login_seq.NEXTVAL, 'i190417@nu.edu.pk','1234',1);
INSERT INTO admin_login VALUES(admin_login_seq.NEXTVAL, 'i190599@nu.edu.pk','1234',1);
INSERT INTO admin_login VALUES(admin_login_seq.NEXTVAL, 'i190641@nu.edu.pk','1234',1);


-- ESTATE ADMIN DETAILS SEQUENCE, TABLE & VALUES
CREATE TABLE estate_admin_details
(
    admin_id int,
    admin_Name varchar2(40),
    salary int,
    email varchar2(40),
    contact number(11),
    nic varchar2(15),
    constraint admin_id_pk primary key (admin_id)
);


CREATE SEQUENCE estate_admin_details_seq
minvalue 0
start with 0
INCREMENT BY 1;

INSERT INTO estate_admin_details VALUES(estate_admin_details_seq.NEXTVAL, 'Muhammad Ali','10000','i190417@nu.edu.pk',03335268745,'34111-1125635-1');
INSERT INTO estate_admin_details VALUES(estate_admin_details_seq.NEXTVAL, 'Saroosh Hammad','10000','i190599@nu.edu.pk',03335268746,'34111-1125635-2');
INSERT INTO estate_admin_details VALUES(estate_admin_details_seq.NEXTVAL, 'Muhammad Talha','10000','i190641@nu.edu.pk',03335268747,'34111-1125635-3');


-- USER LOGIN SEQUENCE, TABLE
CREATE TABLE user_login
(
    id int,
    email varchar2(40),
    password varchar2(30),
    levels int,
    constraint user_id_pk primary key (id)
);

CREATE SEQUENCE user_login_seq
minvalue 0
start with 0
INCREMENT BY 1;


-- COMPANY DETAILS TABLE, SEQUENCE
CREATE TABLE company_details
(
    company_id int,
    company_name varchar2(40),
    email varchar2(40),
    license_no varchar2(30),
    contact number(11),
    establish_date date,
    constraint company_id_pk primary key (company_id)
);

CREATE SEQUENCE company_details_seq
minvalue 0
start with 0
INCREMENT BY 1;

-- COMMERCIAL ADDRESS TABLE, SEQUENCE , VALUES
CREATE TABLE commercial_address
(
    address_id int,
    sector varchar2(5),
    area varchar2(5),
    address varchar2(50),
    constraint address_id_pk primary key (address_id)
);


CREATE SEQUENCE commercial_address_seq
minvalue 0
start with 0
INCREMENT BY 1;

INSERT INTO commercial_address VALUES(commercial_address_seq.NEXTVAL, 'F6','F6/1','Plot 55, Street 31, F6/1, Islamabad');
INSERT INTO commercial_address VALUES(commercial_address_seq.NEXTVAL, 'F5','F5/2','Plot 56, Street 32, F5/2, Islamabad');
INSERT INTO commercial_address VALUES(commercial_address_seq.NEXTVAL, 'F7','F7/3','Plot 57, Street 33, F7/3, Islamabad');



-- AVAILABLE COMMERCIAL TABLE, SEQUENCE , VALUES
CREATE TABLE available_commercial
(
    commercial_id int,
    address varchar2(50),
    category varchar2(20),
    total_squarefoot number(5),
    constraint commercial_id_pk primary key (commercial_id)
);

CREATE SEQUENCE available_commercial_seq
minvalue 0
start with 0
INCREMENT BY 1;

INSERT INTO available_commercial VALUES(available_commercial_seq.NEXTVAL,'Plot 55, Street 31, F6/1, Islamabad','grocery store',50000);
INSERT INTO available_commercial VALUES(available_commercial_seq.NEXTVAL,'Plot 56, Street 32, F5/2, Islamabad','petrol pump',60000);
INSERT INTO available_commercial VALUES(available_commercial_seq.NEXTVAL,'Plot 57, Street 33, F7/3, Islamabad','hotel',70000);


-- COMMERCIAL OCCUPIED TABLE, SEQUENCE
CREATE TABLE commercial_occupied
(
    commercial_id int,
    address varchar2(50),
    category varchar2(20),
    company_name varchar2(40),
    lease_time varchar2(30),
    rent number(8),
    constraint commercial_ids_pk primary key (commercial_id)
);


CREATE SEQUENCE commercial_occupied_seq
minvalue 0
start with 0
INCREMENT BY 1;

-- CIVIL SERVANT DETAILS TABLE, SEQUENCE
CREATE TABLE civil
(
    civil_servant_id int,
    name varchar2(30),
    gender varchar2(20),
    email varchar2(40),
    grade varchar2(10),
    dob date,
    contact number(11),
    nic varchar2(15),
    goverment_service_time int
);


CREATE SEQUENCE civil_seq
minvalue 0
start with 0
INCREMENT BY 1;

INSERT INTO civil VALUES(civil_seq.NEXTVAL, 'Ahmed Nawaz', 'M', 'ahmednawaz@gmail.com', 'BPS19', TO_DATE('17/12/1995', 'DD/MM/YYYY'), 03211253426, '323421435675456', 7);
INSERT INTO civil VALUES(civil_seq.NEXTVAL, 'Qasim Bashir', 'M', 'qasim@gmail.com', 'BPS20', TO_DATE('17/12/1994', 'DD/MM/YYYY'), 03211253428, '323421435675423', 8);
INSERT INTO civil VALUES(civil_seq.NEXTVAL, 'Junaid Ali', 'M', 'junaid@gmail.com', 'BPS20', TO_DATE('17/12/1994', 'DD/MM/YYYY'), 03211253429, '323421435675455', 8);
INSERT INTO civil VALUES(civil_seq.NEXTVAL, 'Rana Afzal', 'M', 'rana@gmail.com', 'BPS21', TO_DATE('17/12/1991', 'DD/MM/YYYY'), 03211253421, '323421435675478', 9);


-- WAITING LIST TABLE, SEQUENCE
CREATE TABLE waiting_list
(
    waitinglist_id int,
    civil_servant_id int,
    name varchar2(30),
    constraint waitinglist_id_pk primary key (waitinglist_id)
);


CREATE SEQUENCE waiting_list_seq
minvalue 0
start with 0
INCREMENT BY 1;

-- RESIDENTIAL ADDRESS TABLE, SEQUENCE, VALUES
CREATE TABLE residential_address
(
    address_id int,
    sector varchar2(5),
    area varchar2(5),
    address varchar2(50),
    constraint address_ids_pk primary key (address_id)
);


CREATE SEQUENCE residential_address_seq
minvalue 0
start with 0
INCREMENT BY 1;


INSERT INTO residential_address VALUES(residential_address_seq.NEXTVAL, 'G6','G6/1','Apartment 55, Street 31, G6/1, Islamabad');
INSERT INTO residential_address VALUES(residential_address_seq.NEXTVAL, 'G5','G5/2','Apartment 56, Street 32, G5/2, Islamabad');
INSERT INTO residential_address VALUES(residential_address_seq.NEXTVAL, 'G7','G7/3','Apartment 57, Street 33, G7/3, Islamabad');


-- AVAILABLE RESIDENTIAL TABLE , SEQUENCE , VALUES
CREATE TABLE available_residential
(
    apartment_id int,
    address varchar2(50),
    category varchar2(20),
    rooms number(2),
    grade varchar2(10),
    constraint apartment_id_pk primary key (apartment_id)
);

CREATE SEQUENCE available_residential_seq
minvalue 0
start with 0
INCREMENT BY 1;


INSERT INTO available_residential VALUES(available_residential_seq.NEXTVAL,'Apartment 55, Street 31, G6/1, Islamabad','A1',2,'BPS21');
INSERT INTO available_residential VALUES(available_residential_seq.NEXTVAL,'Apartment 56, Street 32, G5/2, Islamabad','A2',3,'BPS20');
INSERT INTO available_residential VALUES(available_residential_seq.NEXTVAL,'Apartment 57, Street 33, G7/3, Islamabad','A3',4,'BPS19');



-- RESIDENTIAL OCCUPIED TABLE, SEQUENCE
CREATE TABLE residential_occupied
(
    apartment_id int,
    address varchar2(50),
    civil_servant_id int,
    company_name varchar2(40),
    category varchar2(20),
    rooms number(2),
    rent number(8),
    last_renovated date,
    constraint apartments_id_pk primary key (apartment_id)
);


CREATE SEQUENCE residential_occupied_seq
minvalue 0
start with 0
INCREMENT BY 1;