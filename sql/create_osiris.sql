CREATE TABLE osiris (
id INTEGER NOT NULL AUTO_INCREMENT,
page VARCHAR(36),
views INTEGER NOT NULL,
timest TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
PRIMARY KEY (id)
);

INSERT INTO osiris (page, views)	VALUES ("01-KiKi-dans-le-desert", 0);
INSERT INTO osiris (page, views)	VALUES ("02-KiKi-sacrifia-Jesus", 0);
INSERT INTO osiris (page, views)	VALUES ("03-KiKi-dans-le-Monde", 0);
INSERT INTO osiris (page, views)	VALUES ("04-KiKi-rouge", 0);
INSERT INTO osiris (page, views)	VALUES ("05-KiKi-plan-demasque", 0);
INSERT INTO osiris (page, views)	VALUES ("06-KiKi-a-Francfort", 0);
INSERT INTO osiris (page, views)	VALUES ("07-KiKi-nombre-magique", 0);
INSERT INTO osiris (page, views)	VALUES ("08-KiKi-pan-pan", 0);
INSERT INTO osiris (page, views)	VALUES ("09-KiKi-a-Nuremberg", 0);
INSERT INTO osiris (page, views)	VALUES ("10-KiKi-fait-son-show", 0);
INSERT INTO osiris (page, views)	VALUES ("11-KiKi-et-Internet", 0);
INSERT INTO osiris (page, views)	VALUES ("12-KiKi-et-le-virus", 0);