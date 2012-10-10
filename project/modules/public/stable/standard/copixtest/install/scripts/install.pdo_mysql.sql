CREATE TABLE copixtestforeignkeytype (
  type_test int(11) NOT NULL auto_increment,
  caption_typetest varchar(255) NOT NULL default '',
  PRIMARY KEY  (type_test)
) CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB;

CREATE TABLE copixtestmain (
  id_test int(11) NOT NULL auto_increment,
  type_test int(11) NOT NULL default '0',
  titre_test varchar(255) NOT NULL default '',
  description_test text NOT NULL,
  date_test varchar(8) NOT NULL default '',
  version_test int NOT NULL,
  PRIMARY KEY  (id_test)
) CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB;

CREATE TABLE copixtestautodao (
  id_test int(11) NOT NULL auto_increment,
  type_test int(11) NOT NULL default '0',
  titre_test varchar(255) NOT NULL default '',
  description_test text NOT NULL,
  date_test varchar(8) NOT NULL default '',
  nullable_test int(11),
  PRIMARY KEY  (id_test)
) CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB;