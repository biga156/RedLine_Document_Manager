
create database if not exists document_db default character set utf8 collate utf8_general_ci;
use document_db;

set foreign_key_checks =0;

drop table if exists documents;
create table documents (
	doc_id int not null auto_increment primary key,
	doc_label varchar(50) not null, 
	doc_note varchar(250),	
    doc_audio_src varchar(250),
  	doc_date datetime not null DEFAULT current_timestamp,
    doc_private varchar(15),
    doc_validation date,
	doc_user int not null

)engine=innodb;


drop table if exists files;
create table files (
	fil_id int not null auto_increment primary key,
	fil_name varchar(50) not null,
	fil_extension varchar(5) not null,
	fil_size int not null,
	fil_type varchar(50),
	fil_src varchar(250) not null,
	fil_documents int  
)engine=innodb;

drop table if exists keywords;
create table keywords (
	key_id int not null auto_increment primary key,
	key_label varchar(20) not null 
)engine=innodb;


drop table if exists user;
create table user (
	use_id int auto_increment primary key,
	use_nom varchar(50) not null,
	use_prenom varchar(50) not null,
	use_email varchar(50),
    use_username varchar(50) not null,
    use_passw varchar(500) not null,
	use_profil int not null
	
)engine=innodb;


drop table if exists profil;
create table profil (
	pro_id int not null auto_increment primary key,
	pro_nom varchar(20) not null,
	pro_validity date
	
)engine=innodb;


drop table if exists search;
create table search (
	sea_id int not null auto_increment primary key,
	sea_documents int not null,
	sea_keywords int not null
)engine=innodb;


drop table if exists acces;
create table acces (
	acc_id int not null auto_increment primary key,
	acc_documents int not null,
	acc_user int not null
)engine=innodb;



set foreign_key_checks =1;

-- contraintes

alter table documents add constraint cs1 foreign key (doc_user) references user(use_id);
alter table user add constraint cs2 foreign key (use_profil) references profil(pro_id);
alter table search add constraint cs3 foreign key (sea_documents) references documents(doc_id);
alter table search add constraint cs4 foreign key (sea_keywords) references keywords(key_id);
alter table acces add constraint cs5 foreign key (acc_documents) references documents(doc_id);
alter table acces add constraint cs6 foreign key (acc_user) references user(use_id);
alter table files add constraint cs7 foreign key (fil_documents) references documents(doc_id);