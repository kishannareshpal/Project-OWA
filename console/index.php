<?php

  header('Location: pautas/');

// 
// #2a Classe
// CREATE TRIGGER `mediafinal7` AFTER UPDATE ON `port_2a`
// FOR EACH ROW
// REPLACE INTO medias_2a (identity, nome_id, year, media)
// VALUES ((NEW.nome_id+' '+NEW.year), NEW.nome_id, NEW.year, ((SELECT notafinal FROM port_2a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM mat_2a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM ing_2a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM artesvisuais_2a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM musica_2a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM edf_2a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM danca_2a WHERE nome_id=NEW.nome_id))/7);
//
// CREATE TRIGGER `mediafinal8` AFTER UPDATE ON `mat_2a`
// FOR EACH ROW
// REPLACE INTO medias_2a (identity, nome_id, year, media)
// VALUES ((NEW.nome_id+' '+NEW.year), NEW.nome_id, NEW.year, ((SELECT notafinal FROM port_2a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM mat_2a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM ing_2a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM artesvisuais_2a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM musica_2a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM edf_2a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM danca_2a WHERE nome_id=NEW.nome_id))/7);
//
// CREATE TRIGGER `mediafinal9` AFTER UPDATE ON `ing_2a`
// FOR EACH ROW
// REPLACE INTO medias_2a (identity, nome_id, year, media)
// VALUES ((NEW.nome_id+' '+NEW.year), NEW.nome_id, NEW.year, ((SELECT notafinal FROM port_2a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM mat_2a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM ing_2a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM artesvisuais_2a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM musica_2a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM edf_2a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM danca_2a WHERE nome_id=NEW.nome_id))/7);
//
// CREATE TRIGGER `mediafinal10` AFTER UPDATE ON `artesvisuais_2a`
// FOR EACH ROW
// REPLACE INTO medias_2a (identity, nome_id, year, media)
// VALUES ((NEW.nome_id+' '+NEW.year), NEW.nome_id, NEW.year, ((SELECT notafinal FROM port_2a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM mat_2a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM ing_2a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM artesvisuais_2a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM musica_2a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM edf_2a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM danca_2a WHERE nome_id=NEW.nome_id))/7);
//
// CREATE TRIGGER `mediafinal11` AFTER UPDATE ON `musica_2a`
// FOR EACH ROW
// REPLACE INTO medias_2a (identity, nome_id, year, media)
// VALUES ((NEW.nome_id+' '+NEW.year), NEW.nome_id, NEW.year, ((SELECT notafinal FROM port_2a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM mat_2a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM ing_2a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM artesvisuais_2a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM musica_2a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM edf_2a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM danca_2a WHERE nome_id=NEW.nome_id))/7);
//
// CREATE TRIGGER `mediafinal12` AFTER UPDATE ON `edf_2a`
// FOR EACH ROW
// REPLACE INTO medias_2a (identity, nome_id, year, media)
// VALUES ((NEW.nome_id+' '+NEW.year), NEW.nome_id, NEW.year, ((SELECT notafinal FROM port_2a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM mat_2a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM ing_2a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM artesvisuais_2a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM musica_2a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM edf_2a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM danca_2a WHERE nome_id=NEW.nome_id))/7);
//
// CREATE TRIGGER `mediafinal13` AFTER UPDATE ON `danca_2a`
// FOR EACH ROW
// REPLACE INTO medias_2a (identity, nome_id, year, media)
// VALUES ((NEW.nome_id+' '+NEW.year), NEW.nome_id, NEW.year, ((SELECT notafinal FROM port_2a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM mat_2a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM ing_2a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM artesvisuais_2a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM musica_2a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM edf_2a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM danca_2a WHERE nome_id=NEW.nome_id))/7);
//
//
//
// # 3a Classe
// CREATE TRIGGER `mediafinal14` AFTER UPDATE ON `port_3a`
// FOR EACH ROW
// REPLACE INTO medias_3a (identity, nome_id, year, media)
// VALUES ((NEW.nome_id+' '+NEW.year), NEW.nome_id, NEW.year, ((SELECT notafinal FROM port_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM mat_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM ing_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM artesvisuais_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM musica_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM edf_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM danca_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM cnaturais_3a WHERE nome_id=NEW.nome_id))/8);
//
// CREATE TRIGGER `mediafinal15` AFTER UPDATE ON `mat_3a`
// FOR EACH ROW
// REPLACE INTO medias_3a (identity, nome_id, year, media)
// VALUES ((NEW.nome_id+' '+NEW.year), NEW.nome_id, NEW.year, ((SELECT notafinal FROM port_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM mat_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM ing_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM artesvisuais_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM musica_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM edf_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM danca_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM cnaturais_3a WHERE nome_id=NEW.nome_id))/8);
//
// CREATE TRIGGER `mediafinal16` AFTER UPDATE ON `ing_3a`
// FOR EACH ROW
// REPLACE INTO medias_3a (identity, nome_id, year, media)
// VALUES ((NEW.nome_id+' '+NEW.year), NEW.nome_id, NEW.year, ((SELECT notafinal FROM port_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM mat_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM ing_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM artesvisuais_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM musica_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM edf_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM danca_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM cnaturais_3a WHERE nome_id=NEW.nome_id))/8);
//
// CREATE TRIGGER `mediafinal17` AFTER UPDATE ON `artesvisuais_3a`
// FOR EACH ROW
// REPLACE INTO medias_3a (identity, nome_id, year, media)
// VALUES ((NEW.nome_id+' '+NEW.year), NEW.nome_id, NEW.year, ((SELECT notafinal FROM port_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM mat_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM ing_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM artesvisuais_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM musica_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM edf_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM danca_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM cnaturais_3a WHERE nome_id=NEW.nome_id))/8);
//
// CREATE TRIGGER `mediafinal18` AFTER UPDATE ON `musica_3a`
// FOR EACH ROW
// REPLACE INTO medias_3a (identity, nome_id, year, media)
// VALUES ((NEW.nome_id+' '+NEW.year), NEW.nome_id, NEW.year, ((SELECT notafinal FROM port_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM mat_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM ing_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM artesvisuais_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM musica_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM edf_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM danca_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM cnaturais_3a WHERE nome_id=NEW.nome_id))/8);
//
// CREATE TRIGGER `mediafinal19` AFTER UPDATE ON `edf_3a`
// FOR EACH ROW
// REPLACE INTO medias_3a (identity, nome_id, year, media)
// VALUES ((NEW.nome_id+' '+NEW.year), NEW.nome_id, NEW.year, ((SELECT notafinal FROM port_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM mat_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM ing_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM artesvisuais_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM musica_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM edf_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM danca_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM cnaturais_3a WHERE nome_id=NEW.nome_id))/8);
//
// CREATE TRIGGER `mediafinal20` AFTER UPDATE ON `danca_3a`
// FOR EACH ROW
// REPLACE INTO medias_3a (identity, nome_id, year, media)
// VALUES ((NEW.nome_id+' '+NEW.year), NEW.nome_id, NEW.year, ((SELECT notafinal FROM port_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM mat_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM ing_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM artesvisuais_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM musica_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM edf_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM danca_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM cnaturais_3a WHERE nome_id=NEW.nome_id))/8);
//
// CREATE TRIGGER `mediafinal21` AFTER UPDATE ON `cnaturais_3a`
// FOR EACH ROW
// REPLACE INTO medias_3a (identity, nome_id, year, media)
// VALUES ((NEW.nome_id+' '+NEW.year), NEW.nome_id, NEW.year, ((SELECT notafinal FROM port_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM mat_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM ing_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM artesvisuais_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM musica_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM edf_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM danca_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM cnaturais_3a WHERE nome_id=NEW.nome_id))/8);
//
//
//
//
// # 4a Classe
// CREATE TRIGGER `mediafinal22` AFTER UPDATE ON `port_4a`
// FOR EACH ROW
// REPLACE INTO medias_4a (identity, nome_id, year, media)
// VALUES ((NEW.nome_id+' '+NEW.year), NEW.nome_id, NEW.year, ((SELECT notafinal FROM csociais_4a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM cnaturais_4a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM port_4a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM mat_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM ing_4a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM artesvisuais_4a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM musica_4a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM edf_4a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM danca_4a WHERE nome_id=NEW.nome_id))/9);
//
// CREATE TRIGGER `mediafinal23` AFTER UPDATE ON `mat_4a`
// FOR EACH ROW
// REPLACE INTO medias_4a (identity, nome_id, year, media)
// VALUES ((NEW.nome_id+' '+NEW.year), NEW.nome_id, NEW.year, ((SELECT notafinal FROM csociais_4a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM cnaturais_4a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM port_4a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM mat_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM ing_4a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM artesvisuais_4a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM musica_4a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM edf_4a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM danca_4a WHERE nome_id=NEW.nome_id))/9);
//
// CREATE TRIGGER `mediafinal24` AFTER UPDATE ON `ing_4a`
// FOR EACH ROW
// REPLACE INTO medias_4a (identity, nome_id, year, media)
// VALUES ((NEW.nome_id+' '+NEW.year), NEW.nome_id, NEW.year, ((SELECT notafinal FROM csociais_4a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM cnaturais_4a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM port_4a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM mat_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM ing_4a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM artesvisuais_4a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM musica_4a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM edf_4a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM danca_4a WHERE nome_id=NEW.nome_id))/9);
//
// CREATE TRIGGER `mediafinal25` AFTER UPDATE ON `artesvisuais_4a`
// FOR EACH ROW
// REPLACE INTO medias_4a (identity, nome_id, year, media)
// VALUES ((NEW.nome_id+' '+NEW.year), NEW.nome_id, NEW.year, ((SELECT notafinal FROM csociais_4a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM cnaturais_4a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM port_4a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM mat_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM ing_4a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM artesvisuais_4a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM musica_4a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM edf_4a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM danca_4a WHERE nome_id=NEW.nome_id))/9);
//
// CREATE TRIGGER `mediafinal26` AFTER UPDATE ON `musica_4a`
// FOR EACH ROW
// REPLACE INTO medias_4a (identity, nome_id, year, media)
// VALUES ((NEW.nome_id+' '+NEW.year), NEW.nome_id, NEW.year, ((SELECT notafinal FROM csociais_4a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM cnaturais_4a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM port_4a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM mat_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM ing_4a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM artesvisuais_4a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM musica_4a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM edf_4a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM danca_4a WHERE nome_id=NEW.nome_id))/9);
//
// CREATE TRIGGER `mediafinal27` AFTER UPDATE ON `edf_4a`
// FOR EACH ROW
// REPLACE INTO medias_4a (identity, nome_id, year, media)
// VALUES ((NEW.nome_id+' '+NEW.year), NEW.nome_id, NEW.year, ((SELECT notafinal FROM csociais_4a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM cnaturais_4a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM port_4a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM mat_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM ing_4a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM artesvisuais_4a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM musica_4a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM edf_4a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM danca_4a WHERE nome_id=NEW.nome_id))/9);
//
// CREATE TRIGGER `mediafinal28` AFTER UPDATE ON `danca_4a`
// FOR EACH ROW
// REPLACE INTO medias_4a (identity, nome_id, year, media)
// VALUES ((NEW.nome_id+' '+NEW.year), NEW.nome_id, NEW.year, ((SELECT notafinal FROM csociais_4a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM cnaturais_4a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM port_4a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM mat_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM ing_4a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM artesvisuais_4a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM musica_4a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM edf_4a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM danca_4a WHERE nome_id=NEW.nome_id))/9);
//
// CREATE TRIGGER `mediafinal29` AFTER UPDATE ON `cnaturais_4a`
// FOR EACH ROW
// REPLACE INTO medias_4a (identity, nome_id, year, media)
// VALUES ((NEW.nome_id+' '+NEW.year), NEW.nome_id, NEW.year, ((SELECT notafinal FROM csociais_4a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM cnaturais_4a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM port_4a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM mat_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM ing_4a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM artesvisuais_4a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM musica_4a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM edf_4a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM danca_4a WHERE nome_id=NEW.nome_id))/9);
//
// CREATE TRIGGER `mediafinal30` AFTER UPDATE ON `csociais_4a`
// FOR EACH ROW
// REPLACE INTO medias_4a (identity, nome_id, year, media)
// VALUES ((NEW.nome_id+' '+NEW.year), NEW.nome_id, NEW.year, ((SELECT notafinal FROM csociais_4a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM cnaturais_4a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM port_4a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM mat_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM ing_4a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM artesvisuais_4a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM musica_4a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM edf_4a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM danca_4a WHERE nome_id=NEW.nome_id))/9);

?>




<!--

CREATE TRIGGER `mediafinal1` BEFORE UPDATE ON `port_2a`
FOR EACH ROW
IF NEW.ter_trim <=> OLD.ter_trim THEN REPLACE INTO medias_2a (identity, classe, nome_id, year, media) VALUES ((NEW.nome_id+' '+NEW.year), '2a Classe', NEW.nome_id, NEW.year, ((SELECT notafinal FROM port_2a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM mat_2a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM ing_2a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM artesvisuais_2a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM musica_2a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM edf_2a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM danca_2a WHERE nome_id=NEW.nome_id))/7) END IF END;

CREATE TRIGGER `mediafinal2` BEFORE UPDATE ON `port_3a`
 FOR EACH ROW SET NEW.notafinal = (NEW.prim_trim + NEW.seg_trim + NEW.ter_trim)/3;

CREATE TRIGGER `mediafinal3` BEFORE UPDATE ON `port_4a`
 FOR EACH ROW SET NEW.notafinal = (NEW.prim_trim + NEW.seg_trim + NEW.ter_trim)/3;


 CREATE TRIGGER `mediafinal0` BEFORE UPDATE ON `artesvisuais_1a`
   FOR EACH ROW
   IF NEW.ter_trim <=> OLD.ter_trim THEN REPLACE INTO medias_1a (identity, classe, nome_id, year, media) VALUES ((NEW.nome_id+' '+NEW.year), '1a Classe', NEW.nome_id, NEW.year, ((SELECT notafinal FROM port_1a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM mat_1a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM ing_1a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM artesvisuais_1a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM musica_1a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM edf_1a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM danca_1a WHERE nome_id=NEW.nome_id))/7) END IF END;

CREATE TRIGGER `mediafinal5` BEFORE UPDATE ON `artesvisuais_2a`
FOR EACH ROW
IF NEW.ter_trim <=> OLD.ter_trim THEN REPLACE INTO medias_2a (identity, classe, nome_id, year, media) VALUES ((NEW.nome_id+' '+NEW.year), '2a Classe', NEW.nome_id, NEW.year, ((SELECT notafinal FROM port_2a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM mat_2a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM ing_2a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM artesvisuais_2a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM musica_2a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM edf_2a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM danca_2a WHERE nome_id=NEW.nome_id))/7) END IF END;

CREATE TRIGGER `mediafinal6` BEFORE UPDATE ON `artesvisuais_3a`
 FOR EACH ROW SET NEW.notafinal = (NEW.prim_trim + NEW.seg_trim + NEW.ter_trim)/3;

CREATE TRIGGER `mediafinal7` BEFORE UPDATE ON `artesvisuais_4a`
 FOR EACH ROW SET NEW.notafinal = (NEW.prim_trim + NEW.seg_trim + NEW.ter_trim)/3;


CREATE TRIGGER `mediafinal8` BEFORE UPDATE ON `cnaturais_3a`
 FOR EACH ROW SET NEW.notafinal = (NEW.prim_trim + NEW.seg_trim + NEW.ter_trim)/3;

CREATE TRIGGER `mediafinal9` BEFORE UPDATE ON `cnaturais_4a`
 FOR EACH ROW SET NEW.notafinal = (NEW.prim_trim + NEW.seg_trim + NEW.ter_trim)/3;


CREATE TRIGGER `mediafinal10` BEFORE UPDATE ON `csociais_4a`
 FOR EACH ROW SET NEW.notafinal = (NEW.prim_trim + NEW.seg_trim + NEW.ter_trim)/3;


CREATE TRIGGER `mediafinal11` BEFORE UPDATE ON `danca_1a`
FOR EACH ROW
IF NEW.ter_trim <=> OLD.ter_trim THEN REPLACE INTO medias_1a (identity, classe, nome_id, year, media) VALUES ((NEW.nome_id+' '+NEW.year), '1a Classe', NEW.nome_id, NEW.year, ((SELECT notafinal FROM port_1a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM mat_1a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM ing_1a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM artesvisuais_1a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM musica_1a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM edf_1a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM danca_1a WHERE nome_id=NEW.nome_id))/7) END IF END;

CREATE TRIGGER `mediafinal12` BEFORE UPDATE ON `danca_2a`
 FOR EACH ROW SET NEW.notafinal = (NEW.prim_trim + NEW.seg_trim + NEW.ter_trim)/3;

CREATE TRIGGER `mediafinal13` BEFORE UPDATE ON `danca_3a`
 FOR EACH ROW SET NEW.notafinal = (NEW.prim_trim + NEW.seg_trim + NEW.ter_trim)/3;

CREATE TRIGGER `mediafinal14` BEFORE UPDATE ON `danca_4a`
 FOR EACH ROW SET NEW.notafinal = (NEW.prim_trim + NEW.seg_trim + NEW.ter_trim)/3;


CREATE TRIGGER `mediafinal15` BEFORE UPDATE ON `edf_1a`
FOR EACH ROW
IF NEW.ter_trim <=> OLD.ter_trim THEN REPLACE INTO medias_1a (identity, classe, nome_id, year, media) VALUES ((NEW.nome_id+' '+NEW.year), '1a Classe', NEW.nome_id, NEW.year, ((SELECT notafinal FROM port_1a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM mat_1a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM ing_1a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM artesvisuais_1a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM musica_1a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM edf_1a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM danca_1a WHERE nome_id=NEW.nome_id))/7) END IF END;

CREATE TRIGGER `mediafinal16` BEFORE UPDATE ON `edf_2a`
 FOR EACH ROW SET NEW.notafinal = (NEW.prim_trim + NEW.seg_trim + NEW.ter_trim)/3;

CREATE TRIGGER `mediafinal17` BEFORE UPDATE ON `edf_3a`
 FOR EACH ROW SET NEW.notafinal = (NEW.prim_trim + NEW.seg_trim + NEW.ter_trim)/3;

CREATE TRIGGER `mediafinal18` BEFORE UPDATE ON `edf_4a`
 FOR EACH ROW SET NEW.notafinal = (NEW.prim_trim + NEW.seg_trim + NEW.ter_trim)/3;


CREATE TRIGGER `mediafinal19` BEFORE UPDATE ON `ing_1a`
FOR EACH ROW
IF NEW.ter_trim <=> OLD.ter_trim THEN REPLACE INTO medias_1a (identity, classe, nome_id, year, media) VALUES ((NEW.nome_id+' '+NEW.year), '1a Classe', NEW.nome_id, NEW.year, ((SELECT notafinal FROM port_1a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM mat_1a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM ing_1a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM artesvisuais_1a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM musica_1a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM edf_1a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM danca_1a WHERE nome_id=NEW.nome_id))/7) END IF END;

CREATE TRIGGER `mediafinal20` BEFORE UPDATE ON `ing_2a`
 FOR EACH ROW SET NEW.notafinal = (NEW.prim_trim + NEW.seg_trim + NEW.ter_trim)/3;

CREATE TRIGGER `mediafinal21` BEFORE UPDATE ON `ing_3a`
FOR EACH ROW SET NEW.notafinal = (NEW.prim_trim + NEW.seg_trim + NEW.ter_trim)/3;

CREATE TRIGGER `mediafinal22` BEFORE UPDATE ON `ing_4a`
 FOR EACH ROW SET NEW.notafinal = (NEW.prim_trim + NEW.seg_trim + NEW.ter_trim)/3;


CREATE TRIGGER `mediafinal23` BEFORE UPDATE ON `mat_1a`
FOR EACH ROW
IF NEW.ter_trim <=> OLD.ter_trim THEN REPLACE INTO medias_1a (identity, classe, nome_id, year, media) VALUES ((NEW.nome_id+' '+NEW.year), '1a Classe', NEW.nome_id, NEW.year, ((SELECT notafinal FROM port_1a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM mat_1a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM ing_1a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM artesvisuais_1a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM musica_1a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM edf_1a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM danca_1a WHERE nome_id=NEW.nome_id))/7) END IF END;

CREATE TRIGGER `mediafinal24` BEFORE UPDATE ON `mat_2a`
 FOR EACH ROW SET NEW.notafinal = (NEW.prim_trim + NEW.seg_trim + NEW.ter_trim)/3;

CREATE TRIGGER `mediafinal25` BEFORE UPDATE ON `mat_3a`
 FOR EACH ROW SET NEW.notafinal = (NEW.prim_trim + NEW.seg_trim + NEW.ter_trim)/3;

CREATE TRIGGER `mediafinal26` BEFORE UPDATE ON `mat_4a`
 FOR EACH ROW SET NEW.notafinal = (NEW.prim_trim + NEW.seg_trim + NEW.ter_trim)/3;


CREATE TRIGGER `mediafinal27` BEFORE UPDATE ON `musica_1a`
FOR EACH ROW
IF NEW.ter_trim <=> OLD.ter_trim THEN REPLACE INTO medias_1a (identity, classe, nome_id, year, media) VALUES ((NEW.nome_id+' '+NEW.year), '1a Classe', NEW.nome_id, NEW.year, ((SELECT notafinal FROM port_1a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM mat_1a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM ing_1a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM artesvisuais_1a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM musica_1a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM edf_1a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM danca_1a WHERE nome_id=NEW.nome_id))/7) END IF END;

CREATE TRIGGER `mediafinal28` BEFORE UPDATE ON `musica_2a`
 FOR EACH ROW SET NEW.notafinal = (NEW.prim_trim + NEW.seg_trim + NEW.ter_trim)/3;

CREATE TRIGGER `mediafinal29` BEFORE UPDATE ON `musica_3a`
 FOR EACH ROW SET NEW.notafinal = (NEW.prim_trim + NEW.seg_trim + NEW.ter_trim)/3;

CREATE TRIGGER `mediafinal30` BEFORE UPDATE ON `musica_4a`
 FOR EACH ROW SET NEW.notafinal = (NEW.prim_trim + NEW.seg_trim + NEW.ter_trim)/3;
 -->


















 <!--
 CREATE TRIGGER `mediafinal0` AFTER UPDATE ON port_1a FOR EACH ROW REPLACE INTO medias_1a (identity, classe, nome_id, year, media) VALUES ((NEW.nome_id+' '+NEW.year), '1a Classe', NEW.nome_id, NEW.year, ((SELECT notafinal FROM port_1a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM mat_1a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM ing_1a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM artesvisuais_1a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM musica_1a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM edf_1a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM danca_1a WHERE nome_id=NEW.nome_id))/7);

 CREATE TRIGGER `mediafinal1` AFTER UPDATE ON mat_1a FOR EACH ROW REPLACE INTO medias_1a (identity, classe, nome_id, year, media) VALUES ((NEW.nome_id+' '+NEW.year), '1a Classe', NEW.nome_id, NEW.year, ((SELECT notafinal FROM port_1a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM mat_1a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM ing_1a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM artesvisuais_1a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM musica_1a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM edf_1a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM danca_1a WHERE nome_id=NEW.nome_id))/7);

 CREATE TRIGGER `mediafinal2` AFTER UPDATE ON `ing_1a` FOR EACH ROW REPLACE INTO medias_1a (identity, classe, nome_id, year, media) VALUES ((NEW.nome_id+' '+NEW.year), '1a Classe', NEW.nome_id, NEW.year, ((SELECT notafinal FROM port_1a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM mat_1a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM ing_1a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM artesvisuais_1a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM musica_1a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM edf_1a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM danca_1a WHERE nome_id=NEW.nome_id))/7);

 CREATE TRIGGER `mediafinal3` AFTER UPDATE ON artesvisuais_1a FOR EACH ROW REPLACE INTO medias_1a (identity, classe, nome_id, year, media) VALUES ((NEW.nome_id+' '+NEW.year), '1a Classe', NEW.nome_id, NEW.year, ((SELECT notafinal FROM port_1a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM mat_1a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM ing_1a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM artesvisuais_1a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM musica_1a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM edf_1a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM danca_1a WHERE nome_id=NEW.nome_id))/7);

 CREATE TRIGGER `mediafinal4` AFTER UPDATE ON musica_1a FOR EACH ROW REPLACE INTO medias_1a (identity, classe, nome_id, year, media) VALUES ((NEW.nome_id+' '+NEW.year), '1a Classe', NEW.nome_id, NEW.year, ((SELECT notafinal FROM port_1a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM mat_1a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM ing_1a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM artesvisuais_1a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM musica_1a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM edf_1a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM danca_1a WHERE nome_id=NEW.nome_id))/7);

 CREATE TRIGGER `mediafinal5` AFTER UPDATE ON edf_1a FOR EACH ROW REPLACE INTO medias_1a (identity, classe, nome_id, year, media) VALUES ((NEW.nome_id+' '+NEW.year), '1a Classe', NEW.nome_id, NEW.year, ((SELECT notafinal FROM port_1a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM mat_1a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM ing_1a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM artesvisuais_1a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM musica_1a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM edf_1a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM danca_1a WHERE nome_id=NEW.nome_id))/7);

 CREATE TRIGGER `mediafinal6` AFTER UPDATE ON danca_1a FOR EACH ROW REPLACE INTO medias_1a (identity, classe, nome_id, year, media) VALUES ((NEW.nome_id+' '+NEW.year), '1a Classe', NEW.nome_id, NEW.year, ((SELECT notafinal FROM port_1a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM mat_1a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM ing_1a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM artesvisuais_1a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM musica_1a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM edf_1a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM danca_1a WHERE nome_id=NEW.nome_id))/7);



 -->
