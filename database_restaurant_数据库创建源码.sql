/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     2022/5/18 17:40:49                           */
/*==============================================================*/


drop table if exists canteen;

drop table if exists cooker;

drop table if exists food;

drop table if exists records;

drop table if exists student;

drop table if exists window;

drop table if exists worker;

/*==============================================================*/
/* Table: canteen                                               */
/*==============================================================*/
create table canteen
(
   cant_name            varchar(255) not null,
   cant_location        varchar(255) not null,
   primary key (cant_name)
);

/*==============================================================*/
/* Table: window                                                */
/*==============================================================*/
create table window
(
   wd_id                int not null,
   cant_name            varchar(255),
   wd_name              varchar(255) not null,
   primary key (wd_id),
   constraint FK_belong foreign key (cant_name)
      references canteen (cant_name) ON UPDATE CASCADE ON DELETE SET NULL
);

/*==============================================================*/
/* Table: worker                                                */
/*==============================================================*/
create table worker
(
   wk_id                int not null,
   wd_id                int,
   wk_name              varchar(255) not null,
   primary key (wk_id),
   constraint FK_workson foreign key (wd_id)
      references window (wd_id) ON UPDATE CASCADE ON DELETE SET NULL
);

/*==============================================================*/
/* Table: cooker                                                */
/*==============================================================*/
create table cooker
(
    ck_id                int UNIQUE,
   /*primary key (ck_id),*/
   constraint FK_isa foreign key (ck_id)
      references worker (wk_id) ON UPDATE CASCADE ON DELETE SET NULL
);

/*==============================================================*/
/* Table: food                                                  */
/*==============================================================*/
create table food
(
   food_ID              int not null,
   wd_id                int,
   ck_id                int,
   food_name            varchar(255) not null,
   food_price           real not null,
   food_score           real,
   primary key (food_ID),
   constraint FK_make foreign key (ck_id)
      references cooker (ck_id) ON UPDATE CASCADE ON DELETE SET NULL,
   constraint FK_sell foreign key (wd_id)
      references window (wd_id) ON UPDATE CASCADE ON DELETE SET NULL
);

/*==============================================================*/
/* Table: student                                               */
/*==============================================================*/
create table student
(
   stu_name             varchar(255) not null,
   stu_id               int not null,
   stu_pwd              varchar(32) not null,
   primary key (stu_id)
);

/*==============================================================*/
/* Table: records                                               */
/*==============================================================*/
create table records
(
   rec_id               int not null,
   stu_id               int,
   food_ID              int,
   wd_id                int,
   rec_date             date not null,
   rec_comment          text,
   rec_score            real not null,
   primary key (rec_id),
   constraint FK_contain foreign key (food_ID)
      references food (food_ID) ON UPDATE CASCADE ON DELETE SET NULL,
   constraint FK_at foreign key (wd_id)
      references window (wd_id) ON UPDATE CASCADE ON DELETE SET NULL,
   constraint FK_eat foreign key (stu_id)
      references student (stu_id) ON UPDATE CASCADE ON DELETE SET NULL
);
