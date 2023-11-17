//student and competition are related with many to many relationship.
//for creating it into RDB in 3NF 
//create third table venue(give oun_name) with attribute rank and  year. 
//and referecne the primary key stud_id, c_no of student, competition in venue respectively. 


//if you have pgAdmin 4 then ignore below sql commands prefer Slip26Q1_db_creation.mp4(video) using below link 
https://drive.google.com/file/d/1d4H9ZBj5bcg8DjNgprneoKxCEe3yjzRh/view?usp=drivesdk

//create your database first
//creation of student table
CREATE TABLE public.student
(
    stud_id integer NOT NULL,
    name text,
    class text,
    PRIMARY KEY (stud_id)
);

ALTER TABLE IF EXISTS public.student
    OWNER to postgres;

//insertion in student
INSERT INTO public.student(
	stud_id, name, class)
	VALUES (1, 'chetan', 'tybcs');


//creation of competition table
CREATE TABLE public.competititon
(
    c_no integer NOT NULL,
    c_name text,
    type text,
    PRIMARY KEY (c_no)
);

ALTER TABLE IF EXISTS public.competition
    OWNER to postgres;

//insertion in competition
INSERT INTO public.competition(
	c_no, c_name, type)
	VALUES (1, 'ascend', 'codefest');


//creation of venue table
CREATE TABLE public.venue
(
    stud_id integer NOT NULL,
    c_no integer NOT NULL,
    rank integer,
    year integer,
    CONSTRAINT stud_id FOREIGN KEY (stud_id)
        REFERENCES public.student (stud_id) MATCH SIMPLE
        ON UPDATE NO ACTION
        ON DELETE NO ACTION
        NOT VALID,
    CONSTRAINT c_no FOREIGN KEY (c_no)
        REFERENCES public.competition (c_no) MATCH SIMPLE
        ON UPDATE NO ACTION
        ON DELETE NO ACTION
        NOT VALID
);

ALTER TABLE IF EXISTS public.venue
    OWNER to postgres;

//insertion in venue
INSERT INTO public.venue(
	stud_id, c_no, rank, year)
	VALUES (1, 5, 1, 2022);