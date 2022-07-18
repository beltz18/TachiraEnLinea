DROP DATABASE IF EXISTS tachira_en_linea;
CREATE DATABASE IF NOT EXISTS tachira_en_linea;
USE tachira_en_linea;

/*
  TABLA datos => Se usa para almacenar los datos que se tienen de la encuesta de Richard

  idt_dat - identificador de data
  ubc_dat - UBCH
  jef_ubc - jefe de UBCH
  par_dat - parroquia
  rsp_dat - responsabilidad
  act_dat - si está activo
  nom_dat - nombre
  nac_dat - nacionalidad
  gnd_dat - género
  ema_dat - correo
  ced_dat - cédula
  nm1_dat - número fijo
  nm2_dat - número telefónico
  age_dat - edad
  com_raa - comunidad RAAS
  fch_nac - fecha de nacimiento
  trb_dat - si trabaja o no
  sec_trb - sector donde trabaja
  nom_emp - nombre de la empresa
  med_dat - medicamentos que toma
  viv_dat - vivienda
  tip_viv - tipo de vivienda
  num_per - número de personas que conviven en la vivienda
  veh_dat - si posee o no vehículo
  tip_veh - tipo de vehículo
  mod_veh - modelo del vehículo
  plc_veh - placa del vehículo
  est_civ - estado civil
  hij_dat - si tiene o no hijos
  hij_svi - hijos que si viven en la misma casa
  hij_nvi - hijos que no viven en la misma casa
  hij_mn3 - hijos menores de 3 años
  hij_3y6 - hijos entre 3 y 6 años
  hij_612 - hijos entre 6 y 12 años
  hij_12m - hijos entre 12 y 18 años
  hij_m18 - hijos mayores de 18 años
  age_cny - edad del conyuge
  trb_cny - si trabaja o no el conyuge
  emp_cny - empresa donde trabaja el conyuge
  ubc_cny - si pertenece o no el conyuge a la UBCH
  per_enf - si tiene o no personas con enfermedades crónicas
  par_enf - parentesco con la persona enferma
  per_dis - si o no posee familiares con discapacidad
  fch_reg - fecha en que fue registrado
*/

DROP TABLE IF EXISTS datos;
CREATE TABLE IF NOT EXISTS datos (
  idt_dat INT UNSIGNED,
  ubc_dat VARCHAR(99),
  jef_ubc TEXT,
  par_dat VARCHAR(99),
  rsp_dat VARCHAR(99),
  act_dat SET("SI", "NO"),
  nom_dat TEXT NOT NULL,
  nac_dat SET("V", "E") NOT NULL,
  gnd_dat SET("M", "F") NOT NULL,
  ema_dat VARCHAR(99),
  ced_dat INT UNSIGNED,
  nm1_dat VARCHAR(15),
  nm2_dat VARCHAR(15),
  age_dat INT UNSIGNED NOT NULL,
  com_raa VARCHAR(99),
  fch_nac VARCHAR(20),
  trb_dat SET("SI", "NO") NOT NULL,
  sec_trb TEXT NOT NULL,
  nom_emp VARCHAR(99),
  enf_crn SET("SI", "NO") NOT NULL,
  tip_enf VARCHAR(99),
  med_dat VARCHAR(99),
  viv_dat TEXT,
  tip_viv TEXT,
  num_per INT UNSIGNED,
  veh_dat SET("SI", "NO") NOT NULL,
  tip_veh VARCHAR(99),
  mod_veh VARCHAR(99),
  plc_veh VARCHAR(99),
  est_civ SET("SOLTERO", "SOLTERA", "CASADO", "CASADA", "CONCUBINATO", "VIUDA", "UNION LIBRE"),
  hij_dat SET("SI", "NO") DEFAULT "NO",
  hij_svi INT UNSIGNED,
  hij_nvi INT UNSIGNED,
  hij_mn3 INT UNSIGNED,
  hij_3y6 INT UNSIGNED,
  hij_612 INT UNSIGNED,
  hij_12m INT UNSIGNED,
  hij_m18 INT UNSIGNED,
  age_cny INT UNSIGNED,
  trb_cny SET("SI", "NO", "NO APLICA") DEFAULT "NO APLICA",
  emp_cny VARCHAR(99),
  ubc_cny SET("SI", "NO", "NO APLICA") DEFAULT "NO APLICA",
  per_enf SET("SI", "NO", "NO APLICA") DEFAULT "NO APLICA",
  par_enf TEXT,
  per_dis SET("SI", "NO", "NO APLICA") DEFAULT "NO APLICA",
  PRIMARY KEY (idt_dat),
  CONSTRAINT UNIQUE (ced_dat),
  CONSTRAINT UNIQUE (ema_dat)
);

/*
  TABLA usuario => Se usa para almacenar los datos de los usuarios que tenrán acceso al sistema

  idt_usr - identificador de usuario
  nom_usr - nombre completo
  ced_usr - cédula
  ema_usr - correo electrónico
  ema_vrf - correo verificado
  psw_usr - contraseña
  niv_acc - nivel de acceso
  fch_reg - fecha de registro
*/

DROP TABLE IF EXISTS usuario;
CREATE TABLE IF NOT EXISTS usuario (
  idt_usr INT UNSIGNED NOT NULL AUTO_INCREMENT,
  nom_usr TEXT NOT NULL,
  ced_usr VARCHAR(15) NOT NULL,
  ema_usr VARCHAR(80) NOT NULL,
  ema_vrf BOOLEAN DEFAULT false,
  psw_usr VARCHAR(32) NOT NULL,
  niv_acc SET('admin', 'jefe_ubch', 'jefe_comunidad', 'general') NOT NULL DEFAULT 'general',
  fch_reg TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (idt_usr),
  CONSTRAINT UNIQUE (ced_usr),
  CONSTRAINT UNIQUE (ema_usr)
);

-- Inserts by Default

INSERT INTO
  usuario
(nom_usr,ced_usr,ema_usr,ema_vrf,psw_usr,niv_acc)
  VALUES
("Andi Montilla", "V-26068764", "beltz.18kyodai@gmail.com", true, "81dc9bdb52d04dc20036dbd8313ed055", "admin"),
("Richard Perez", "V-14417475", "richard@gmail.com", true, "81dc9bdb52d04dc20036dbd8313ed055", "admin");