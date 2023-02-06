create VIEW vista_notas as
SELECT id_asig_mat_est ,am.id_doc,am.id_carre,am.id_sem ,am.gestion_asig_mat,am.periodo_asig_mat,
am.id_turno,t.desc_turno,concat(d.nombre_doc,' ',d.ape_p_doc,' ',d.ape_m_doc) as docente,d.cod_doc,d.ci,c.nombre_carre,c.sigla_carre,
a.`id_est`, e.cod_est,concat(e.nombre_est,' ',e.ape_p_est,' ',e.ape_m_est) as estudiante,
e.ci_est,`eval_p1`,`eval_p2`,`eval_fin`,`eval_2t`
FROM tb_asignacion_mat_ests a JOIN tb_estudiantes e on e.id_est=a.id_est
JOIN tb_asignacion_mats am on am.id_asig_mat=a.id_asig_mat
JOIN tb_materias m on m.id_materia=am.id_materia JOIN
tb_docentes d on d.id_doc=am.id_doc join tb_turnos t on t.id_turno=am.id_turno
join tb_carreras c on c.id_carre=am.id_carre;


CREATE VIEW VistaNotaApro as
SELECT v1.cod_est,v1.`estudiante`,
(v1.eval_p1*0.35+v1.eval_p2*0.35+v1.eval_fin*0.30) as NotaFinal,
(
 IF( v1.eval_p1*0.35+v1.eval_p2*0.35+v1.eval_fin*0.30 >=51,"Aprobado","Reprobado") ) as NotaEstado
from vista_notas v1
