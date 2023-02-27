create VIEW vista_notas as
SELECT a.id_asig_mat_est,a.id_asig_mat,am.id_doc,am.id_carre,g.periodo_gestion,g.anio_gestion,
am.id_turno,t.desc_turno,concat(d.nombre_doc,' ',d.ape_p_doc,' ',d.ape_m_doc) as 
docente,d.cod_doc,d.ci,c.nombre_carre,c.sigla_carre,
a.`id_est`, e.cod_est,concat(e.nombre_est,' ',e.ape_p_est,' ',e.ape_m_est) as estudiante,
e.ci_est,`eval_p1`,`eval_p2`,`eval_fin`,`eval_2t`
FROM tb_asignacion_mat_ests a 
JOIN tb_estudiantes e on e.id_est=a.id_est
JOIN tb_asignacion_mats am on am.id_asig_mat=a.id_asig_mat
JOIN tb_materias m on m.id_materia=am.id_materia 
JOIN tb_docentes d on d.id_doc=am.id_doc 
join tb_turnos t on t.id_turno=am.id_turno
join tb_carreras c on c.id_carre=am.id_carre
JOIN tb_gestiones g on am.id_gestion=g.id_gestion;

CREATE VIEW vista_nota_apros as
SELECT v1.cod_est,v1.`estudiante`,v1.`docente`,v1.eval_p1,v1.eval_p2,v1.eval_fin,v1.eval_2t,
(v1.eval_p1*0.35+v1.eval_p2*0.35+v1.eval_fin*0.30) as NotaFinal,
(
 IF( v1.eval_p1*0.35+v1.eval_p2*0.35+v1.eval_fin*0.30 >=51,"Aprobado","Reprobado") ) as 

NotaEstado,v1.anio_gestion
from vista_notas v1;

-- Vista de estudiante con materias asignadas
CREATE VIEW vista_mat_estudiantes AS
SELECT e.id_est, e.cod_est, e.nombre_est, e.ape_p_est,e.ape_m_est,e.ci_est,m.id_materia,m.codigo_mat,m.nombre_mat,asm.paralelo_asig_mat, t.desc_turno,d.id_doc, d.nombre_doc, d.ape_p_doc,d.ape_m_doc,c.id_carre,c.nombre_carre,g.periodo_gestion,g.anio_gestion
FROM tb_asignacion_mat_ests ame,tb_asignacion_mats asm,tb_estudiantes e, tb_docentes d,tb_materias m,
tb_carreras c, tb_turnos t,tb_gestiones g
WHERE ame.id_asig_mat=asm.id_asig_mat 
AND ame.id_est=e.id_est 
AND asm.id_materia=m.id_materia
AND asm.id_carre=c.id_carre 
AND asm.id_doc=d.id_doc 
AND asm.id_turno=t.id_turno  
AND asm.id_gestion=g.id_gestion;


-- Vista de un estudiante con materia asignadas y notas
CREATE VIEW vista_mat_nota_estudiantes AS
SELECT e.cod_est,e.nombre_est,e.ape_p_est,e.ape_m_est,e.ci_est,m.codigo_mat,m.nombre_mat, 
asi.eval_p1,asi.eval_p2,asi.eval_fin,asi.eval_2t,asi.obs_asig,g.periodo_gestion,g.anio_gestion
, IF( asi.eval_p1*0.35+asi.eval_p2*0.35+asi.eval_fin*0.30 >=51,"Aprobado","Reprobado")  as NotaEstado,
(asi.eval_p1*0.35+asi.eval_p2*0.35+asi.eval_fin*0.30) as NotaFinal
FROM tb_asignacion_mat_ests asi,tb_asignacion_mats asm, tb_estudiantes e,tb_turnos t, 
tb_carreras c,tb_materias m,tb_gestiones g
WHERE asi.id_asig_mat=asm.id_asig_mat AND asi.id_est=e.id_est AND asm.id_materia=m.id_materia AND 
asm.id_carre=c.id_carre AND asm.id_turno=t.id_turno AND 
asm.id_gestion=g.id_gestion;

-- Vista de Docente para ver sus materias asignadas o dictadas
CREATE VIEW vista_mat_docentes AS 
SELECT d.id_doc, d.cod_doc, d.nombre_doc, d.ape_p_doc, d.ape_m_doc,asm.id_asig_mat,d.ci,m.id_materia,m.codigo_mat
,m.nombre_mat,c.id_carre,c.nombre_carre,asm.paralelo_asig_mat,t.desc_turno, g.periodo_gestion,g.anio_gestion 
FROM 
tb_asignacion_mats asm 
JOIN tb_docentes d ON asm.id_doc=d.id_doc 
JOIN tb_materias m ON asm.id_materia=m.id_materia 
JOIN tb_turnos t ON asm.id_turno=t.id_turno 
JOIN tb_gestiones g ON asm.id_gestion=g.id_gestion
JOIN tb_carreras c ON asm.id_carre=c.id_carre;

-- vista de docentes y materia asignada
CREATE VIEW vista_materias as
SELECT d.id_doc,d.cod_doc,d.nombre_doc,d.ape_p_doc,d.ape_m_doc,m.codigo_mat,m.nombre_mat,
asm.paralelo_asig_mat,asm.obs_asig_mat
FROM tb_asignacion_mats asm 
JOIN tb_materias m ON asm.id_materia=m.id_materia
JOIN tb_docentes d on asm.id_doc=d.id_doc 
JOIN tb_turnos t ON asm.id_turno=t.id_turno 
JOIN tb_carreras c ON asm.id_carre=c.id_carre

-- vista de estudiante que muestra sus materias 
CREATE VIEW estudiante_materias as
SELECT ame.id_asig_mat,ame.id_est,m.codigo_mat,m.nombre_mat,c.nombre_carre,d.id_doc,d.cod_doc,d.nombre_doc,d.ape_p_doc,d.ape_m_doc,t.desc_turno
FROM tb_asignacion_mat_ests ame 
JOIN tb_asignacion_mats asm ON ame.id_asig_mat=asm.id_asig_mat
JOIN tb_materias m ON asm.id_materia=m.id_materia
JOIN tb_carreras c ON asm.id_carre=c.id_carre
JOIN tb_docentes d ON asm.id_doc=d.id_doc
JOIN tb_turnos t ON asm.id_turno=t.id_turno
JOIN tb_estudiantes e ON ame.id_est=e.id_est  


--vista de estudiante, carrera, turno y plan de inscripcion
CREATE VIEW vista_est_ci_carrs as
SELECT e.id_est,c.id_carre,t.id_turno,p.id_pl,
e.cod_est,e.nombre_est,e.ape_p_est,e.ape_m_est,e.ci_est,e.fec_nac_est,e.dir_est,e.tel_dom_est,e.cel_est,
c.nombre_carre, c.sigla_carre, 
t.desc_turno, p.nombre_plan, p.cuotas, p.monto
FROM tb_est_carr ec
JOIN tb_estudiantes e ON ec.id_est=e.id_est 
JOIN tb_turnos t ON ec.id_turno=t.id_turno 
JOIN tbplanes p ON ec.id_pl=p.id_pl 
JOIN tb_carreras c ON ec.id_carre=c.id_carre