/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     11/23/2017 2:27:54 PM                        */
/*==============================================================*/


drop table if exists ADMIN;

drop table if exists ANTRIAN;

drop table if exists PASIEN;

/*==============================================================*/
/* Table: ADMIN                                                 */
/*==============================================================*/
create table ADMIN
(
   ID_ADMIN             int not null,
   USERNAME             varchar(50),
   PASSWORD             varchar(50),
   NAMA_ADMIN           varchar(50),
   primary key (ID_ADMIN)
);

/*==============================================================*/
/* Table: ANTRIAN                                               */
/*==============================================================*/
create table ANTRIAN
(
   ID_ANTRIAN           varchar(50) not null,
   ID_PASIEN            int not null,
   ID_ADMIN             int,
   POLI                 varchar(50),
   JADWAL               datetime,
   STATUS               varchar(50),
   primary key (ID_ANTRIAN)
);

/*==============================================================*/
/* Table: PASIEN                                                */
/*==============================================================*/
create table PASIEN
(
   ID_PASIEN            int not null,
   ID_ADMIN             int,
   NIK                  int,
   NAMA_PASIEN          varchar(50),
   TGL_LAHIR            date,
   JENIS_KELAMIN        varchar(50),
   NO_TELP              int,
   ALAMAT               text,
   KECAMATAN            text,
   KABUPATEN            text,
   PROVINSI             text,
   primary key (ID_PASIEN)
);

alter table ANTRIAN add constraint FK_MEMILIKI foreign key (ID_PASIEN)
      references PASIEN (ID_PASIEN) on delete restrict on update restrict;

alter table ANTRIAN add constraint FK_MENGELOLA foreign key (ID_ADMIN)
      references ADMIN (ID_ADMIN) on delete restrict on update restrict;

alter table PASIEN add constraint FK_MELAYANI foreign key (ID_ADMIN)
      references ADMIN (ID_ADMIN) on delete restrict on update restrict;

