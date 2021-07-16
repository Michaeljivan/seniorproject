CREATE TABLE users(
	user_id int NOT NULL AUTO_INCREMENT,
	first_name varchar(30),
	last_name varchar(35),
	username varchar(32),	
	password varchar(32),
	email varchar(200),
	phone int(10),
	class varchar(25),
	semester varchar(25),
	role varchar(25),
	approved int,
	primary key (user_id)
);

CREATE TABLE student(
	student_id int NOT NULL AUTO_INCREMENT,
	first_name varchar(30),
	last_name varchar(35),
	username varchar(32),
	password varchar(32),
	email varchar(200),
	phone int(10),
	class varchar(25),
	semester varchar(25),
	role varchar(25),
	approved int,
	primary key (student_id)
);

CREATE TABLE instructor(
	instructor_id int NOT NULL AUTO_INCREMENT,
	first_name varchar(30),
	last_name varchar(35),
	username varchar(32),
	password varchar(32),
	email varchar(200),
	phone int(10),
	class varchar(25),
	semester varchar(25),
	primary key (instructor_id)
);

CREATE TABLE client(
	client_id int NOT NULL AUTO_INCREMENT,
	first_name varchar(30),
	last_name varchar(35),
	username varchar(32),
	password varchar(32),
	email varchar(200),
	phone int(10),
	role varchar(25),
	approved int,
	primary key (client_id)
);

CREATE TABLE advisor(
	advisor_id int NOT NULL AUTO_INCREMENT,
	first_name varchar(30),
	last_name varchar(35),
	username varchar(32),
	password varchar(32),
	email varchar(200),
	phone int(10),
	role varchar(25),
	approved int,
	primary key (advisor_id)
);

CREATE TABLE projects(
	project_id int NOT NULL AUTO_INCREMENT,
	username varchar(32),
	pname varchar(255),
	description text,
	phone int(10),
	email varchar(100),
	approved int,
	team_working varchar(75),
	primary key(project_id)
);

CREATE TABLE teams(
	team_id int NOT NULL AUTO_INCREMENT,
	tname varchar(75),
	class varchar(10),
	semester varchar(10),
	num_members int(10),
	motto text,
	approved int,
	primary key (team_id)
);

CREATE TABLE messages(
	from_username varchar(32),
	message text(9999),
	to_username varchar(32),
	rating int,
	sent_time text
);