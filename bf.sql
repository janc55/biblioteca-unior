create VIEW vista_notas as
SELECT a.id_asig_mat_est,a.id_asig_mat,am.id_doc,am.id_carre,am.id_sem ,am.gestion_asig_mat,am.periodo_asig_mat,
am.id_turno,t.desc_turno,concat(d.nombre_doc,' ',d.ape_p_doc,' ',d.ape_m_doc) as docente,d.cod_doc,d.ci,c.nombre_carre,c.sigla_carre,
a.`id_est`, e.cod_est,concat(e.nombre_est,' ',e.ape_p_est,' ',e.ape_m_est) as estudiante,
e.ci_est,`eval_p1`,`eval_p2`,`eval_fin`,`eval_2t`
FROM tb_asignacion_mat_ests a JOIN tb_estudiantes e on e.id_est=a.id_est
JOIN tb_asignacion_mats am on am.id_asig_mat=a.id_asig_mat
JOIN tb_materias m on m.id_materia=am.id_materia JOIN
tb_docentes d on d.id_doc=am.id_doc join tb_turnos t on t.id_turno=am.id_turno
join tb_carreras c on c.id_carre=am.id_carre;


CREATE VIEW vista_nota_apros as
SELECT v1.cod_est,v1.`estudiante`,v1.`docente`,v1.eval_p1,v1.eval_p2,v1.eval_fin,v1.eval_2t,
(v1.eval_p1*0.35+v1.eval_p2*0.35+v1.eval_fin*0.30) as NotaFinal,
(
 IF( v1.eval_p1*0.35+v1.eval_p2*0.35+v1.eval_fin*0.30 >=51,"Aprobado","Reprobado") ) as NotaEstado,v1.gestion_asig_mat
from vista_notas v1

-- Vista de estudiante con materias asignadas
CREATE VIEW vista_mat_estudiantes AS
SELECT e.cod_est,e.nombre_est,e.ape_p_est,e.ape_m_est,e.ci_est,m.codigo_mat,asm.paralelo_asig_mat,
m.nombre_mat,t.desc_turno,s.desc_sem,d.nombre_doc,d.ape_p_doc,d.ape_m_doc,c.nombre_carre,asm.periodo_asig_mat,asm.gestion_asig_mat
FROM tb_asignacion_mat_ests ame,tb_asignacion_mats asm,tb_estudiantes e, tb_docentes d,tb_materias m, tb_carreras c, tb_semestres s, tb_turnos t
WHERE ame.id_asig_mat=asm.id_asig_mat AND ame.id_est=e.id_est AND 
asm.id_materia AND asm.id_carre=c.id_carre AND asm.id_sem=s.id_sem AND 
asm.id_doc=d.id_doc AND asm.id_turno=t.id_turno AND e.cod_est='1999';

-- Vista de un estudiante con materia asignadas y notas
CREATE VIEW vista_mat_nota_estudiantes AS
SELECT e.cod_est,e.nombre_est,e.ape_p_est,e.ape_m_est,e.ci_est,m.codigo_mat,m.nombre_mat, asi.eval_p1,asi.eval_p2,asi.eval_fin,asi.eval_2t,asi.apro_rep_con_est,asm.periodo_asig_mat,asm.gestion_asig_mat,
IF( asi.eval_p1*0.35+asi.eval_p2*0.35+asi.eval_fin*0.30 >=51,"Aprobado","Reprobado")  as NotaEstado,(asi.eval_p1*0.35+asi.eval_p2*0.35+asi.eval_fin*0.30) as NotaFinal
FROM tb_asignacion_mat_ests asi,tb_asignacion_mats asm, tb_estudiantes e,tb_turnos t,tb_semestres s, tb_carreras c,tb_materias m
WHERE asi.id_asig_mat=asm.id_asig_mat AND asi.id_est=e.id_est AND asm.id_materia=m.id_materia AND asm.id_carre=c.id_carre AND asm.id_turno=t.id_turno AND asm.id_sem=s.id_sem; 

-- Vista de Docente para ver sus materias asignadas o dictadas
CREATE VIEW vista_mat_docentes AS SELECT d.id_doc,d.cod_doc,d.nombre_doc,d.ape_p_doc,d.ape_m_doc,asm.id_asig_mat,d.ci,m.id_materia,m.codigo_mat,m.nombre_mat,asm.paralelo_asig_mat,t.desc_turno, asm.periodo_asig_mat,asm.gestion_asig_mat FROM tb_asignacion_mats asm JOIN tb_docentes d ON asm.id_doc=d.id_doc JOIN tb_materias m ON asm.id_materia=m.id_materia JOIN tb_turnos t ON asm.id_turno=t.id_turno JOIN tb_semestres s ON asm.id_sem=s.id_sem;