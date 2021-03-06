UPDATE `inai-kg`.`pages` SET `title`='{\"ru\":\"\\u041f\\u043e\\u0440\\u0442\\u0430\\u043b \\u043f\\u0440\\u0430\\u043a\\u0442\\u0438\\u043a\\u0430\\u043d\\u0442\\u043e\\u0432\",\"en\":\"Internship Portal\"}' WHERE `id`='73';



INSERT INTO `inai-kg`.`programms` (`label`, `licensed`, `degree`) VALUES ('Informatics', '2018-01-01', 'Master of Science');

UPDATE `inai-kg`.`programms` SET `licensed`='2020-07-23 00:00:00' WHERE `id`='1';
UPDATE `inai-kg`.`programms` SET `licensed`='2018-06-27 00:00:00' WHERE `id`='2';


ALTER TABLE `inai-kg`.`modules` DROP COLUMN `duration`;
ALTER TABLE `inai-kg`.`modules` DROP COLUMN `rotation`;
ALTER TABLE `inai-kg`.`modules` DROP COLUMN `mediaform`;
ALTER TABLE `inai-kg`.`modules` DROP COLUMN `con_possib`;
ALTER TABLE `inai-kg`.`modules` DROP COLUMN `assign_curric`;
ALTER TABLE `inai-kg`.`modules` DROP COLUMN `duration_ru`;
ALTER TABLE `inai-kg`.`modules` DROP COLUMN `rotation_ru`;
ALTER TABLE `inai-kg`.`modules` DROP COLUMN `mediaform_ru`;
ALTER TABLE `inai-kg`.`modules` DROP COLUMN `con_possib_ru`;
ALTER TABLE `inai-kg`.`modules` DROP COLUMN `assign_curric_ru`;

UPDATE `inai-kg`.`modules` SET `nr`='MOD_CAT_1_2018', `label`='module  catalogue Nr. 1 (2018)' WHERE `id`='207';
UPDATE `inai-kg`.`modules` SET `nr`='MOD_CAT_2_2018', `label`='module  catalogue Nr. 2 (2018)' WHERE `id`='208';

INSERT INTO `inai-kg`.`specialisations` (`label`, `programm_id`) VALUES ('International Software System Engineering', '2');
INSERT INTO `inai-kg`.`specialisations` (`label`, `programm_id`) VALUES ('Software Entrepreneurship', '2');
UPDATE `inai-kg`.`specialisations` SET `slug`='ISSE' WHERE `id`='4';
UPDATE `inai-kg`.`specialisations` SET `slug`='SWEPS' WHERE `id`='5';


INSERT INTO `inai-kg`.`modules` (`nr`, `label`, `ects`) VALUES ('MOD_CAT_1_Master1', 'module  catalogue Nr. 1 Master', '4');
INSERT INTO `inai-kg`.`modules` (`nr`, `label`, `ects`) VALUES ('MOD_CAT_1_Master2', 'module  catalogue Nr. 2 Master', '4');

INSERT INTO `inai-kg`.`obligatory_catalogues` (`placeholder_module_id`, `obligatory_module_id`) VALUES ((SELECT id FROM `inai-kg`.`modules` WHERE nr='MOD_CAT_1_Master1' LIMIT 1),(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN2-018' LIMIT 1));
INSERT INTO `inai-kg`.`obligatory_catalogues` (`placeholder_module_id`, `obligatory_module_id`) VALUES ((SELECT id FROM `inai-kg`.`modules` WHERE nr='MOD_CAT_1_Master1' LIMIT 1),(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN2-019' LIMIT 1));
INSERT INTO `inai-kg`.`obligatory_catalogues` (`placeholder_module_id`, `obligatory_module_id`) VALUES ((SELECT id FROM `inai-kg`.`modules` WHERE nr='MOD_CAT_1_Master1' LIMIT 1),(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN2-010' LIMIT 1));

INSERT INTO `inai-kg`.`obligatory_catalogues` (`placeholder_module_id`, `obligatory_module_id`) VALUES ((SELECT id FROM `inai-kg`.`modules` WHERE nr='MOD_CAT_1_Master2' LIMIT 1),(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN2-009' LIMIT 1));
INSERT INTO `inai-kg`.`obligatory_catalogues` (`placeholder_module_id`, `obligatory_module_id`) VALUES ((SELECT id FROM `inai-kg`.`modules` WHERE nr='MOD_CAT_1_Master2' LIMIT 1),(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN2-021' LIMIT 1));
INSERT INTO `inai-kg`.`obligatory_catalogues` (`placeholder_module_id`, `obligatory_module_id`) VALUES ((SELECT id FROM `inai-kg`.`modules` WHERE nr='MOD_CAT_1_Master2' LIMIT 1),(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN2-022' LIMIT 1));

INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('1', '4','53');
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('1', '5','53');
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('1', '4','56');
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('1', '5','56');
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('1', '4','198');
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('1', '5','198');
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('1', '4','209');
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('1', '5','209');
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('1', '4','57');
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('1', '5','57');
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('1', '4','199');
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('1', '5','199');
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('1', '4','58');
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('1', '5','200');

INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('2', '4','54');
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('2', '5','54');
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('2', '4','59');
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('2', '5','59');
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('2', '4','60');
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('2', '5','60');
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('2', '4','210');
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('2', '5','210');
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('2', '4','62');
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('2', '4','63');
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('2', '5','201');
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('2', '5','203');

INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('3', '4','55');
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('3', '5','55');
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('3', '4','64');
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('3', '5','64');
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('3', '4','65');
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('3', '5','65');
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('3', '4','203');
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('3', '5','203');
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('3', '4','66');
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('3', '4','67');
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('3', '5','204');
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('3', '5','205');
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('3', '5','206');

INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('4', '4','68');
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('4', '5','68');
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('4', '4','69');
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('4', '5','69');

CREATE UNIQUE INDEX modules_nr_index
ON `inai-kg`.`modules`(nr);

INSERT INTO `inai-kg`.`modules`(nr,label,label_ru,ects) VALUES ('AIN1-001','Mathematics 1','???????????????????? 1',5) ON DUPLICATE KEY update ects=5;
INSERT INTO `inai-kg`.`modules`(nr,label,label_ru,ects) VALUES ('AIN1-002','Mathematics 2','???????????????????? 2',5) ON DUPLICATE KEY update ects=5;
INSERT INTO `inai-kg`.`modules`(nr,label,label_ru,ects) VALUES ('AIN1-007','Programming Languages 1','?????????? ???????????????????????????????? 1',5) ON DUPLICATE KEY update ects=5;
INSERT INTO `inai-kg`.`modules`(nr,label,label_ru,ects) VALUES ('AIN1-008','Programming Languages 2','?????????? ???????????????????????????????? 2',5) ON DUPLICATE KEY update ects=5;
INSERT INTO `inai-kg`.`modules`(nr,label,label_ru,ects) VALUES ('AIN1-010','Object Oriented Programming','????????????????-??????????????????????????????  ????????????????????????????????',5) ON DUPLICATE KEY update ects=5;
INSERT INTO `inai-kg`.`modules`(nr,label,label_ru,ects) VALUES ('AIN1-011','Database 1','???????? ???????????? 1',5) ON DUPLICATE KEY update ects=5;
INSERT INTO `inai-kg`.`modules`(nr,label,label_ru,ects) VALUES ('AIN1-012','Database 2','???????? ???????????? 2',5) ON DUPLICATE KEY update ects=5;
INSERT INTO `inai-kg`.`modules`(nr,label,label_ru,ects) VALUES ('AIN1-013','Software Engineering','?????????????????? ???????????????????????? ??????????????????????',5) ON DUPLICATE KEY update ects=5;
INSERT INTO `inai-kg`.`modules`(nr,label,label_ru,ects) VALUES ('AIN1-015','Computer Networks & Telecomunications','???????????????????????? ???????? ?? ????????????????????????????????',5) ON DUPLICATE KEY update ects=5;
INSERT INTO `inai-kg`.`modules`(nr,label,label_ru,ects) VALUES ('AIN1-016','Operating Systems & Computer Architecture','???????????????????????? ?????????????? ?? ???????????????????????? ??????????????????????',5) ON DUPLICATE KEY update ects=5;
INSERT INTO `inai-kg`.`modules`(nr,label,label_ru,ects) VALUES ('AIN1-018','Mobile App Development','???????????????????? ?????????????????? ????????????????????',5) ON DUPLICATE KEY update ects=5;
INSERT INTO `inai-kg`.`modules`(nr,label,label_ru,ects) VALUES ('AIN1-020','Artificial Intelligence','?????????????????????????? ??????????????????',5) ON DUPLICATE KEY update ects=5;
INSERT INTO `inai-kg`.`modules`(nr,label,label_ru,ects) VALUES ('AIN1-021','Theoretical Informatics','?????????????????????????? ??????????????????????',5) ON DUPLICATE KEY update ects=5;
INSERT INTO `inai-kg`.`modules`(nr,label,label_ru,ects) VALUES ('AIN1-022','Human Computer Interaction (HCI)','???????????????????????????? ???????????????? ?? ??????????????????????',5) ON DUPLICATE KEY update ects=5;
INSERT INTO `inai-kg`.`modules`(nr,label,label_ru,ects) VALUES ('AIN1-023','System Programming','?????????????????? ????????????????????????????????',5) ON DUPLICATE KEY update ects=5;
INSERT INTO `inai-kg`.`modules`(nr,label,label_ru,ects) VALUES ('AIN1-024','Technical English 1','?????????????????????? ???????????????????? ???????? 1',5) ON DUPLICATE KEY update ects=5;
INSERT INTO `inai-kg`.`modules`(nr,label,label_ru,ects) VALUES ('AIN1-025','Technical English 2','?????????????????????? ???????????????????? ???????? 2',5) ON DUPLICATE KEY update ects=5;
INSERT INTO `inai-kg`.`modules`(nr,label,label_ru,ects) VALUES ('AIN1-026','German 1','???????????????? ???????? 1',5) ON DUPLICATE KEY update ects=5;
INSERT INTO `inai-kg`.`modules`(nr,label,label_ru,ects) VALUES ('AIN1-027','German 2','???????????????? ???????? 2',5) ON DUPLICATE KEY update ects=5;
INSERT INTO `inai-kg`.`modules`(nr,label,label_ru,ects) VALUES ('AIN1-028','German 3','???????????????? ???????? 3',5) ON DUPLICATE KEY update ects=5;
INSERT INTO `inai-kg`.`modules`(nr,label,label_ru,ects) VALUES ('AIN1-029','German 4','???????????????? ???????? 4',5) ON DUPLICATE KEY update ects=5;
INSERT INTO `inai-kg`.`modules`(nr,label,label_ru,ects) VALUES ('AIN1-030','German 5','???????????????? ???????? 5',5) ON DUPLICATE KEY update ects=5;
INSERT INTO `inai-kg`.`modules`(nr,label,label_ru,ects) VALUES ('AIN1-031','German 6','???????????????? ???????? 6',5) ON DUPLICATE KEY update ects=5;
INSERT INTO `inai-kg`.`modules`(nr,label,label_ru,ects) VALUES ('AIN1-034','Philosophy','??????????????????',5) ON DUPLICATE KEY update ects=5;
INSERT INTO `inai-kg`.`modules`(nr,label,label_ru,ects) VALUES ('AIN1-035','History (State Examination)','?????????????? (?????????????????????????????? ??????????????)',4) ON DUPLICATE KEY update ects=4;
INSERT INTO `inai-kg`.`modules`(nr,label,label_ru,ects) VALUES ('AIN1-039','Internship 1','???????????????????????????????? ????????????????  1',10) ON DUPLICATE KEY update ects=10;
INSERT INTO `inai-kg`.`modules`(nr,label,label_ru,ects) VALUES ('AIN1-040','Internship 2','???????????????????????????????? ????????????????  2',18) ON DUPLICATE KEY update ects=18;
INSERT INTO `inai-kg`.`modules`(nr,label,label_ru,ects) VALUES ('AIN1-041','Object Oriented System Development','???????????????????? ????????????????-?????????????????????????????? ??????????????',5) ON DUPLICATE KEY update ects=5;
INSERT INTO `inai-kg`.`modules`(nr,label,label_ru,ects) VALUES ('AIN1-042','Introduction to Cloud Computing','???????????????? ?? ???????????????? ????????????????????',5) ON DUPLICATE KEY update ects=5;
INSERT INTO `inai-kg`.`modules`(nr,label,label_ru,ects) VALUES ('AIN1-043','Microprocessors & Microcontrollers','?????????????????????????????? ?? ????????????????????????????????',5) ON DUPLICATE KEY update ects=5;
INSERT INTO `inai-kg`.`modules`(nr,label,label_ru,ects) VALUES ('AIN1-044','Software Architecture & Design patterns','?????????????????????? ?? ???????????????? ???????????????? ???????????????????????? ??????????????????????',5) ON DUPLICATE KEY update ects=5;
INSERT INTO `inai-kg`.`modules`(nr,label,label_ru,ects) VALUES ('AIN1-045','Introduction to Data Mining','???????????????? ?? ???????????????????????????????? ???????????? ????????????',5) ON DUPLICATE KEY update ects=5;
INSERT INTO `inai-kg`.`modules`(nr,label,label_ru,ects) VALUES ('AIN1-046','Number Theory','???????????? ??????????',5) ON DUPLICATE KEY update ects=5;
INSERT INTO `inai-kg`.`modules`(nr,label,label_ru,ects) VALUES ('AIN1-047','Machine Learning','???????????????? ????????????????',5) ON DUPLICATE KEY update ects=5;
INSERT INTO `inai-kg`.`modules`(nr,label,label_ru,ects) VALUES ('AIN1-048','System Programming 2','?????????????????? ???????????????????????????????? 2',5) ON DUPLICATE KEY update ects=5;
INSERT INTO `inai-kg`.`modules`(nr,label,label_ru,ects) VALUES ('AIN1-049','Robotics','??????????????????????????',5) ON DUPLICATE KEY update ects=5;
INSERT INTO `inai-kg`.`modules`(nr,label,label_ru,ects) VALUES ('AIN1-051','C# Programming','???????????????????????????????? ???? C #',5) ON DUPLICATE KEY update ects=5;
INSERT INTO `inai-kg`.`modules`(nr,label,label_ru,ects) VALUES ('AIN1-052','Geographical Information Systems','?????????????????????????????????? ??????????????',5) ON DUPLICATE KEY update ects=5;
INSERT INTO `inai-kg`.`modules`(nr,label,label_ru,ects) VALUES ('AIN1-053','Bachelor thesis & colloquim','?????????????????? ???????????? ??????????????????',12) ON DUPLICATE KEY update ects=12;
INSERT INTO `inai-kg`.`modules`(nr,label,label_ru,ects) VALUES ('AIN1-054','Kyrgyz Language and Literature 1','???????????????????? ????????  ?? ???????????????????? 1',4) ON DUPLICATE KEY update ects=4;
INSERT INTO `inai-kg`.`modules`(nr,label,label_ru,ects) VALUES ('AIN1-055','Manas Studies','??????????????????????????',2) ON DUPLICATE KEY update ects=2;
INSERT INTO `inai-kg`.`modules`(nr,label,label_ru,ects) VALUES ('AIN1-036','Introduction to Enterpreunership','???????????? ??????????????????????????????????????',3) ON DUPLICATE KEY update ects=3;

INSERT INTO `inai-kg`.`modules`(nr,label,label_ru,ects) VALUES ('AIN1-057','Algorithms and Data Structures','?????????????????? ?? ?????????????????? ????????????',5) ON DUPLICATE KEY update ects=5;
INSERT INTO `inai-kg`.`modules`(nr,label,label_ru,ects) VALUES ('AIN1-058','Geography of Kyrgyzstan','???????????????? ?? ?????????????????? ??????????????????????',2) ON DUPLICATE KEY update ects=2;
INSERT INTO `inai-kg`.`modules`(nr,label,label_ru,ects) VALUES ('AIN1-059','Applied Mathematics','???????????????????? ????????????????????',5) ON DUPLICATE KEY update ects=5;
INSERT INTO `inai-kg`.`modules`(nr,label,label_ru,ects) VALUES ('AIN1-060','Logic','????????????',5) ON DUPLICATE KEY update ects=5;
INSERT INTO `inai-kg`.`modules`(nr,label,label_ru,ects) VALUES ('AIN1-061','Programming Languages 3','?????????? ???????????????????????????????? 3',5) ON DUPLICATE KEY update ects=5;
INSERT INTO `inai-kg`.`modules`(nr,label,label_ru,ects) VALUES ('AIN1-062','Development of  distributed applications','???????????????????? ???????????????????????????? ????????????????????',5) ON DUPLICATE KEY update ects=5;
INSERT INTO `inai-kg`.`modules`(nr,label,label_ru,ects) VALUES ('AIN1-063','IT Security','IT ????????????????????????',5) ON DUPLICATE KEY update ects=5;
INSERT INTO `inai-kg`.`modules`(nr,label,label_ru,ects) VALUES ('AIN1-064','Application systems','?????????????? ????????????????????',5) ON DUPLICATE KEY update ects=5;
INSERT INTO `inai-kg`.`modules`(nr,label,label_ru,ects) VALUES ('AIN1-065','Computer Graphics','???????????????????????? ??????????????',5) ON DUPLICATE KEY update ects=5;
INSERT INTO `inai-kg`.`modules`(nr,label,label_ru,ects) VALUES ('WIN1-001','Web Technologies','??????-????????????????????',5) ON DUPLICATE KEY update ects=5;
INSERT INTO `inai-kg`.`modules`(nr,label,label_ru,ects) VALUES ('WIN1-002','Web Programming','??????-????????????????????????????????',5) ON DUPLICATE KEY update ects=5;
INSERT INTO `inai-kg`.`modules`(nr,label,label_ru,ects) VALUES ('WIN1-003','Content Management Systems','?????????????? ???????????????????? ??????????????????',5) ON DUPLICATE KEY update ects=5;
INSERT INTO `inai-kg`.`modules`(nr,label,label_ru,ects) VALUES ('WIN1-004','Development of Samrtphone User Interfaces','???????????????????? ???????????????????????????????? ?????????????????????? ????????????????????',5) ON DUPLICATE KEY update ects=5;
INSERT INTO `inai-kg`.`modules`(nr,label,label_ru,ects) VALUES ('WIN1-005','Management of Webservers','???????????????????? ??????-??????????????????',5) ON DUPLICATE KEY update ects=5;
INSERT INTO `inai-kg`.`modules`(nr,label,label_ru,ects) VALUES ('MIN1-008','Health and Health Care','???????????????????? ?? ??????????????????????????????',5) ON DUPLICATE KEY update ects=5;
INSERT INTO `inai-kg`.`modules`(nr,label,label_ru,ects) VALUES ('MIN1-009','Medical Informatics and Statistics','?????????????????????? ?????????????????????? ?? ????????????????????',5) ON DUPLICATE KEY update ects=5;
INSERT INTO `inai-kg`.`modules`(nr,label,label_ru,ects) VALUES ('MIN1-011','Obtaining and Processing of Medical Data','?????????????????? ?? ?????????????????? ?????????????????????? ??????????????????????',5) ON DUPLICATE KEY update ects=5;
INSERT INTO `inai-kg`.`modules`(nr,label,label_ru,ects) VALUES ('MIN1-013','Hardware of Medical Information Systems','???????????????????? ?????????????????????? ?????????????????????? ???????????????????????????? ????????????',5) ON DUPLICATE KEY update ects=5;
INSERT INTO `inai-kg`.`modules`(nr,label,label_ru,ects) VALUES ('MIN1-014','Signal Processing of Medical Devices','?????????????????? ???????????????? ?? ?????????????????????? ????????????????',5) ON DUPLICATE KEY update ects=5;
INSERT INTO `inai-kg`.`modules`(nr,label,label_ru,ects) VALUES ('MIN1-015','Fundemantals of medical sciences','???????????? ?????????????????????? ????????',5) ON DUPLICATE KEY update ects=5;
INSERT INTO `inai-kg`.`modules`(nr,label,label_ru,ects) VALUES ('MIN1-016','Digtal Health / eHealth','???????????????? ???????????????? / eHealth',5) ON DUPLICATE KEY update ects=5;
INSERT INTO `inai-kg`.`modules`(nr,label,label_ru,ects) VALUES ('MIN1-017','Telemedizin','????????????????????????',5) ON DUPLICATE KEY update ects=5;


INSERT INTO `inai-kg`.`modules` (`nr`, `label`, `ects`) VALUES ('MOD_CAT_2018', 'election module catalogue (2018)', '5');
INSERT INTO `inai-kg`.`obligatory_catalogues` (`placeholder_module_id`, `obligatory_module_id`) VALUES ((SELECT id FROM `inai-kg`.`modules` WHERE nr='MOD_CAT_2018' LIMIT 1),(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN1-042' LIMIT 1));
INSERT INTO `inai-kg`.`obligatory_catalogues` (`placeholder_module_id`, `obligatory_module_id`) VALUES ((SELECT id FROM `inai-kg`.`modules` WHERE nr='MOD_CAT_2018' LIMIT 1),(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN1-043' LIMIT 1));
INSERT INTO `inai-kg`.`obligatory_catalogues` (`placeholder_module_id`, `obligatory_module_id`) VALUES ((SELECT id FROM `inai-kg`.`modules` WHERE nr='MOD_CAT_2018' LIMIT 1),(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN1-044' LIMIT 1));
INSERT INTO `inai-kg`.`obligatory_catalogues` (`placeholder_module_id`, `obligatory_module_id`) VALUES ((SELECT id FROM `inai-kg`.`modules` WHERE nr='MOD_CAT_2018' LIMIT 1),(SELECT id FROM `inai-kg`.`modules` WHERE nr='MIN1-014' LIMIT 1));
INSERT INTO `inai-kg`.`obligatory_catalogues` (`placeholder_module_id`, `obligatory_module_id`) VALUES ((SELECT id FROM `inai-kg`.`modules` WHERE nr='MOD_CAT_2018' LIMIT 1),(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN1-045' LIMIT 1));
INSERT INTO `inai-kg`.`obligatory_catalogues` (`placeholder_module_id`, `obligatory_module_id`) VALUES ((SELECT id FROM `inai-kg`.`modules` WHERE nr='MOD_CAT_2018' LIMIT 1),(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN1-046' LIMIT 1));
INSERT INTO `inai-kg`.`obligatory_catalogues` (`placeholder_module_id`, `obligatory_module_id`) VALUES ((SELECT id FROM `inai-kg`.`modules` WHERE nr='MOD_CAT_2018' LIMIT 1),(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN1-047' LIMIT 1));
INSERT INTO `inai-kg`.`obligatory_catalogues` (`placeholder_module_id`, `obligatory_module_id`) VALUES ((SELECT id FROM `inai-kg`.`modules` WHERE nr='MOD_CAT_2018' LIMIT 1),(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN1-048' LIMIT 1));
INSERT INTO `inai-kg`.`obligatory_catalogues` (`placeholder_module_id`, `obligatory_module_id`) VALUES ((SELECT id FROM `inai-kg`.`modules` WHERE nr='MOD_CAT_2018' LIMIT 1),(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN1-049' LIMIT 1));
INSERT INTO `inai-kg`.`obligatory_catalogues` (`placeholder_module_id`, `obligatory_module_id`) VALUES ((SELECT id FROM `inai-kg`.`modules` WHERE nr='MOD_CAT_2018' LIMIT 1),(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN1-051' LIMIT 1));
INSERT INTO `inai-kg`.`obligatory_catalogues` (`placeholder_module_id`, `obligatory_module_id`) VALUES ((SELECT id FROM `inai-kg`.`modules` WHERE nr='MOD_CAT_2018' LIMIT 1),(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN1-052' LIMIT 1));


DELETE FROM `inai-kg`.`curricula` WHERE specialisation_id=1 OR specialisation_id=2 OR specialisation_id=3;

INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('1', '1',(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN1-026' LIMIT 1));
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('1', '1',(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN1-024' LIMIT 1));
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('1', '1',(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN1-001' LIMIT 1));
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('1', '1',(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN1-057' LIMIT 1));
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('1', '1',(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN1-022' LIMIT 1));
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('1', '1',(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN1-007' LIMIT 1));

INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('1', '2',(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN1-026' LIMIT 1));
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('1', '2',(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN1-024' LIMIT 1));
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('1', '2',(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN1-001' LIMIT 1));
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('1', '2',(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN1-057' LIMIT 1));
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('1', '2',(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN1-022' LIMIT 1));
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('1', '2',(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN1-007' LIMIT 1));

INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('1', '3',(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN1-026' LIMIT 1));
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('1', '3',(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN1-024' LIMIT 1));
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('1', '3',(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN1-001' LIMIT 1));
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('1', '3',(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN1-057' LIMIT 1));
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('1', '3',(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN1-022' LIMIT 1));
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('1', '3',(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN1-007' LIMIT 1));

INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('2', '1',(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN1-025' LIMIT 1));
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('2', '1',(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN1-002' LIMIT 1));
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('2', '1',(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN1-060' LIMIT 1));
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('2', '1',(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN1-008' LIMIT 1));
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('2', '1',(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN1-013' LIMIT 1));
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('2', '1',(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN1-027' LIMIT 1));

INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('2', '2',(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN1-025' LIMIT 1));
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('2', '2',(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN1-002' LIMIT 1));
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('2', '2',(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN1-060' LIMIT 1));
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('2', '2',(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN1-008' LIMIT 1));
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('2', '2',(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN1-013' LIMIT 1));
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('2', '2',(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN1-027' LIMIT 1));

INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('2', '3',(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN1-025' LIMIT 1));
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('2', '3',(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN1-002' LIMIT 1));
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('2', '3',(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN1-060' LIMIT 1));
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('2', '3',(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN1-008' LIMIT 1));
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('2', '3',(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN1-013' LIMIT 1));
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('2', '3',(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN1-027' LIMIT 1));

INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('3', '1',(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN1-059' LIMIT 1));
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('3', '1',(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN1-011' LIMIT 1));
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('3', '1',(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN1-061' LIMIT 1));
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('3', '1',(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN1-028' LIMIT 1));
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('3', '1',(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN1-016' LIMIT 1));
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('3', '1',(SELECT id FROM `inai-kg`.`modules` WHERE nr='WIN1-001' LIMIT 1));

INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('3', '2',(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN1-059' LIMIT 1));
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('3', '2',(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN1-011' LIMIT 1));
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('3', '2',(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN1-061' LIMIT 1));
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('3', '2',(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN1-028' LIMIT 1));
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('3', '2',(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN1-016' LIMIT 1));
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('3', '2',(SELECT id FROM `inai-kg`.`modules` WHERE nr='WIN1-001' LIMIT 1));

INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('3', '3',(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN1-059' LIMIT 1));
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('3', '3',(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN1-011' LIMIT 1));
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('3', '3',(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN1-061' LIMIT 1));
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('3', '3',(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN1-028' LIMIT 1));
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('3', '3',(SELECT id FROM `inai-kg`.`modules` WHERE nr='MIN1-015' LIMIT 1));
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('3', '3',(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN1-016' LIMIT 1));

INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('4', '1',(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN1-012' LIMIT 1));
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('4', '1',(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN1-010' LIMIT 1));
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('4', '1',(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN1-018' LIMIT 1));
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('4', '1',(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN1-029' LIMIT 1));
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('4', '1',(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN1-015' LIMIT 1));
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('4', '1',(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN1-065' LIMIT 1));

INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('4', '2',(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN1-012' LIMIT 1));
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('4', '2',(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN1-010' LIMIT 1));
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('4', '2',(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN1-018' LIMIT 1));
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('4', '2',(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN1-029' LIMIT 1));
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('4', '2',(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN1-015' LIMIT 1));
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('4', '2',(SELECT id FROM `inai-kg`.`modules` WHERE nr='WIN1-002' LIMIT 1));

INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('4', '3',(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN1-012' LIMIT 1));
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('4', '3',(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN1-010' LIMIT 1));
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('4', '3',(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN1-018' LIMIT 1));
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('4', '3',(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN1-029' LIMIT 1));
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('4', '3',(SELECT id FROM `inai-kg`.`modules` WHERE nr='MIN1-013' LIMIT 1));
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('4', '3',(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN1-015' LIMIT 1));

INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('5', '1',(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN1-020' LIMIT 1));
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('5', '1',(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN1-030' LIMIT 1));
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('5', '1',(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN1-023' LIMIT 1));
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('5', '1',(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN1-041' LIMIT 1));
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('5', '1',(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN1-064' LIMIT 1));
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('5', '1',(SELECT id FROM `inai-kg`.`modules` WHERE nr='MOD_CAT_2018' LIMIT 1));

INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('5', '2',(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN1-020' LIMIT 1));
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('5', '2',(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN1-030' LIMIT 1));
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('5', '2',(SELECT id FROM `inai-kg`.`modules` WHERE nr='WIN1-003' LIMIT 1));
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('5', '2',(SELECT id FROM `inai-kg`.`modules` WHERE nr='WIN1-004' LIMIT 1));
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('5', '2',(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN1-065' LIMIT 1));
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('5', '2',(SELECT id FROM `inai-kg`.`modules` WHERE nr='MOD_CAT_2018' LIMIT 1));

INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('5', '3',(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN1-020' LIMIT 1));
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('5', '3',(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN1-030' LIMIT 1));
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('5', '3',(SELECT id FROM `inai-kg`.`modules` WHERE nr='MIN1-011' LIMIT 1));
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('5', '3',(SELECT id FROM `inai-kg`.`modules` WHERE nr='MIN1-016' LIMIT 1));
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('5', '3',(SELECT id FROM `inai-kg`.`modules` WHERE nr='MIN1-017' LIMIT 1));
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('5', '3',(SELECT id FROM `inai-kg`.`modules` WHERE nr='MOD_CAT_2018' LIMIT 1));

INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('6', '1',(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN1-062' LIMIT 1));
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('6', '1',(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN1-063' LIMIT 1));
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('6', '1',(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN1-031' LIMIT 1));
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('6', '1',(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN1-021' LIMIT 1));
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('6', '1',(SELECT id FROM `inai-kg`.`modules` WHERE nr='MOD_CAT_2018' LIMIT 1));
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('6', '1',(SELECT id FROM `inai-kg`.`modules` WHERE nr='MOD_CAT_2018' LIMIT 1));

INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('6', '2',(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN1-062' LIMIT 1));
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('6', '2',(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN1-063' LIMIT 1));
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('6', '2',(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN1-031' LIMIT 1));
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('6', '2',(SELECT id FROM `inai-kg`.`modules` WHERE nr='WIN1-005' LIMIT 1));
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('6', '2',(SELECT id FROM `inai-kg`.`modules` WHERE nr='MOD_CAT_2018' LIMIT 1));
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('6', '2',(SELECT id FROM `inai-kg`.`modules` WHERE nr='MOD_CAT_2018' LIMIT 1));

INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('6', '3',(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN1-062' LIMIT 1));
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('6', '3',(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN1-063' LIMIT 1));
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('6', '3',(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN1-031' LIMIT 1));
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('6', '3',(SELECT id FROM `inai-kg`.`modules` WHERE nr='MIN1-008' LIMIT 1));
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('6', '3',(SELECT id FROM `inai-kg`.`modules` WHERE nr='MOD_CAT_2018' LIMIT 1));
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('6', '3',(SELECT id FROM `inai-kg`.`modules` WHERE nr='MOD_CAT_2018' LIMIT 1));

INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('7', '1',(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN1-054' LIMIT 1));
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('7', '1',(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN1-055' LIMIT 1));
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('7', '1',(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN1-058' LIMIT 1));
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('7', '1',(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN1-035' LIMIT 1));
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('7', '1',(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN1-034' LIMIT 1));
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('7', '1',(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN1-036' LIMIT 1));
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('7', '1',(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN1-039' LIMIT 1));

INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('7', '2',(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN1-054' LIMIT 1));
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('7', '2',(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN1-055' LIMIT 1));
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('7', '2',(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN1-058' LIMIT 1));
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('7', '2',(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN1-035' LIMIT 1));
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('7', '2',(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN1-034' LIMIT 1));
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('7', '2',(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN1-036' LIMIT 1));
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('7', '2',(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN1-039' LIMIT 1));

INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('7', '3',(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN1-054' LIMIT 1));
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('7', '3',(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN1-055' LIMIT 1));
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('7', '3',(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN1-058' LIMIT 1));
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('7', '3',(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN1-035' LIMIT 1));
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('7', '3',(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN1-034' LIMIT 1));
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('7', '3',(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN1-036' LIMIT 1));
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('7', '3',(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN1-039' LIMIT 1));

INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('8', '1',(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN1-040' LIMIT 1));
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('8', '1',(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN1-053' LIMIT 1));

INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('8', '2',(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN1-040' LIMIT 1));
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('8', '2',(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN1-053' LIMIT 1));

INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('8', '3',(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN1-040' LIMIT 1));
INSERT INTO `inai-kg`.`curricula` (`semester`, `specialisation_id`, `module_id`) VALUES ('8', '3',(SELECT id FROM `inai-kg`.`modules` WHERE nr='AIN1-053' LIMIT 1));

