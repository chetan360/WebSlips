//doctor and hospital are related with many to-one relationship.
//for creating it into RDB in 3NF referecne the primary key of doctor in hospital.

//if you have pgAdmin 4 then ignore below sql commands prefer Slip26Q1_db_creation.mp4(video) using below link 
https://drive.google.com/file/d/1d3FaHkshpBx9PyHOGHk0wiqd9DHN4b0y/view?usp=drivesdk

//create your database first
//creation of doctor table
CREATE TABLE public."doctor"
(
    dno_no integer NOT NULL,
    dname text,
    address text,
    city text,
    area text,
    PRIMARY KEY (dno_no)
);

ALTER TABLE IF EXISTS public."doctor"
    OWNER to postgres;

//insertion  in doctor table
INSERT INTO public."doctor"(
	dno_no, dname, address, city, area)
	VALUES (1, 'sachin jain', 'xyz', 'malegoan', 'xyz');


//creation of hospital table
CREATE TABLE public."hospital"
(
    doc_no integer NOT NULL,
    hosp_no integer NOT NULL,
    hname text,
    hcity text,
    PRIMARY KEY (hosp_no),
    FOREIGN KEY (doc_no)
        REFERENCES public."doctor" (dno_no) MATCH SIMPLE
        ON UPDATE NO ACTION
        ON DELETE NO ACTION
        NOT VALID
);

ALTER TABLE IF EXISTS public."hospital"
    OWNER to postgres;

//insertion  in doctor table
INSERT INTO public."hospital"(
	doc_no, hosp_no, hname, hcity)
	VALUES (1, 1, 'abhinandan', 'malegoan');