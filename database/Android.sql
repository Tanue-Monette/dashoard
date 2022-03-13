/*==============================================================*/
/* Nom de SGBD :  MySQL 5.0                                     */
/* Date de cr�ation :  17/02/2022 02:16:07                      */
/*==============================================================*/


drop table if exists Classes;

drop table if exists Courses;

drop table if exists Role;

drop table if exists Students;

drop table if exists Teachers;

drop table if exists Users;

/*==============================================================*/
/* Table : Classes                                              */
/*==============================================================*/
create table Classes
(
   idclass              int not null,
   startTime            datetime,
   endTime              datetime,
   primary key (idclass)
);

/*==============================================================*/
/* Table : Courses                                              */
/*==============================================================*/
create table Courses
(
   idcourse             int not null,
   idclass              int not null,
   iduser               int not null,
   courseName           varchar(254),
   startTime            datetime,
   endTime              datetime,
   primary key (idcourse)
);

/*==============================================================*/
/* Table : Role                                                 */
/*==============================================================*/
create table Role
(
   idrole               int not null,
   iduser               int not null,
   roleName             varchar(254),
   primary key (idrole),
   key AK_id_role (idrole)
);

/*==============================================================*/
/* Table : Students                                             */
/*==============================================================*/
create table Students
(
   iduser               int not null,
   idstudent            int not null,
   idclass              int not null,
   studMatricle         varchar(254),
   primary key (iduser, idstudent)
);

/*==============================================================*/
/* Table : Teachers                                             */
/*==============================================================*/
create table Teachers
(
   iduser               int not null,
   idteach              int,
   teachMatricle        varchar(254),
   status               bool,
   primary key (iduser),
   key AK_idteach (idteach)
);

/*==============================================================*/
/* Table : Users                                                */
/*==============================================================*/
create table Users
(
   iduser               int not null,
   firstName            varchar(254),
   lastName             varchar(254),
   address              varchar(254),
   email                varchar(254),
   phone                varchar(254),
   town                 varchar(254),
   password             varchar(254),
   isChanged            bool,
   primary key (iduser),
   key AK_Identifiant_1 (iduser) 
);

alter table Courses add constraint FK_association3 foreign key (iduser)
      references Teachers (iduser) on delete restrict on update restrict;

alter table Courses add constraint FK_association4 foreign key (idclass)
      references Classes (idclass) on delete restrict on update restrict;

alter table Role add constraint FK_association1 foreign key (iduser)
      references Users (iduser) on delete restrict on update restrict;

alter table Students add constraint FK_Generalisation_2 foreign key (iduser)
      references Users (iduser) on delete restrict on update restrict;

alter table Students add constraint FK_belongsTo foreign key (idclass)
      references Classes (idclass) on delete restrict on update restrict;

alter table Teachers add constraint FK_Generalisation_1 foreign key (iduser)
      references Users (iduser) on delete restrict on update restrict;

