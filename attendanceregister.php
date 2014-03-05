<?PHP

$string['modulename'] = 'Attendance Register';
$string['modulenameplural'] = 'Attendance Registers';
$string['modulename_help'] = 'Attendance Register calcula el tiempo invertido por los usuarios en cursos online.<br />
    Opcionalmente permite registrar actividades offline.<br />
    Dependiendo del modo, Attendance Register puede registrar actividades en un único curso, en todos los cursos de la misma categoría
    o en todos los cursos "Meta linked" al curso donde está instalado.<br />
    Las sesiones online son calculadas según los resgistros de Moodle.<br />
    <b>Las nuevas sesiones son añadidas con algún retraso por el cron trás la salida del usuario.</b>';
$string['pluginname'] = 'Attendance Register';
$string['pluginadministration'] = 'Administración de Attendance Register';

// Mod instance form
$string['registername'] = 'Nombre para Attendance Register';
$string['registertype'] = 'Modo de registro';
$string['registertype_help'] = 'El modo de registro determina como se realiza el seguimiento de los cursos (p.e. donde se registrará la actividad):
* _Solo este curso_: Solo en el curso donde está instalado.
* _Todos los cursos de la categoría_: Se registra la actividad en todos los cursos de la misma categoría del curso donde está instalado.
* _Todos los cursos con el mismo meta link_: Se registra la actividad del curso y todos los cursos qeue comparte el mismo meta link.
    ';
$string['sessiontimeout'] = 'Duración de sesión online';
$string['sessiontimeout_help'] = 'La duración de la sesión online se usa para estimar la duración de las sesiones online.<br />
    Las sesiones Online deben tener al menos <b>la mitad</b> de la duración de la sesión.<br />
    Tenga en cuenta que si la duración de la sesión es muy largo, el sistema tenderá sobrevalorar la duración de las sesiones online.<br />
    Si es muy corto las sesiones reales se dividirán en otras más cortas.<br />
    <h3>Ampliación</h3>
    Las sesiones online son <b>calculadas</b> mirando las entradas del usuario en el Log de los cursos seguidos
    (ver <i>Modo de registro</i>).<br/>
    Si hay varios registros separados por menor tiempo que la duración de la sesión,
    el sistema considera que el usuario sigue trabajando online (p.e. continúa la sesión).<br />
    Si el tiempo que separa dos sesiones es mayor de la duración de la sesión, el sistema considera que el usuario dejó de trabajar online
    <b>la mitad</b> de la duración de la sesión tras la última entrada (p.e. finaliza la sesión) y regresa
    en la siguiente sesión (i.e. inicia una nueva sesión)';

$string['offline_sessions_certification'] = 'Sesiones Offline';
$string['enable_offline_sessions_certification'] = 'Activar sesiones Offline';
$string['offline_sessions_certification_help'] = 'Permite a los usuarios agregar sesiones offline.<br />
    Esta es una forma de <i>Auto certificar</i> el trabajo realizado.<br />
    Esto puede ser útil si la  "burocracia" requiere mantener un registro de cada actividad de todos los estudiantes.<br />
    Solo usuarios reales pueden añadir sesiones offline: ¡Administradores <i>registrados como...</i> no pueden!';
$string['dayscertificable'] = 'Días permitidos';
$string['dayscertificable_help'] = 'Limita cuantos días atras pueden se añadidas sesiones offline.<br />
    Un alumno no puede añadir sesiones online anteriores a este número de días.';
$string['offlinecomments'] = 'Comentarios de usuarios';
$string['offlinecomments_help'] = 'Permite añadir comentarios a las sesiones offline';
$string['mandatory_offline_sessions_comments'] = 'Comentarios obligatorios';
$string['offlinespecifycourse'] = 'Especificar cursos en sesiones offline';
$string['offlinespecifycourse_help'] = 'Permite al usuario seleccionar el curso al que se refiere la sesión offline.<br />
    Esto es útil solo si el sistema registra en más de un curso (p.e. Modo de registroe por "Categoría" o "Meta-linked")';
$string['mandatoryofflinespecifycourse'] = 'Obligado seleccionar curso';
$string['mandatoryofflinespecifycourse_help'] = 'Indica que es obligatorio seleccionar un curso para la sesión online';


$string['type_course'] = 'Solo este curso';
$string['type_category'] = 'Todos los cursos de la categoría';
$string['type_meta'] = 'Todos los cursos con el mismo meta link';

$string['maynotaddselfcertforother'] = 'No puedes registrar sesiones offline para otros usuarios.';
$string['onlyrealusercanaddofflinesessions'] = 'Solo usuarios reales pueden agregar sesiones offline';
$string['onlyrealusercandeleteofflinesessions'] = 'Solo usuarios reales pueden eliminar sesiones Offline';

// Capabilities
$string['attendanceregister:tracked'] = "Seguido por Attendance Register";
$string['attendanceregister:viewownregister'] = "Puede ver sus propios registros";
$string['attendanceregister:viewotherregisters'] = "Puede ver registros de otros usuarios";
$string['attendanceregister:addownofflinesess'] = "Puede añadir sesiones offline a sus propios registros";
$string['attendanceregister:addotherofflinesess'] = "Puede añadir sesiones offline a registros de otros usuarios";
$string['attendanceregister:deleteownofflinesess'] = "Puede borrar sesiones offline de su propio registro";
$string['attendanceregister:deleteotherofflinesess'] = "Puede borrar sesiones offline de registros de otros usuarios";
$string['attendanceregister:recalcsessions'] = "Puede forzar el recálculo de la sesiones";
$string['attendanceregister:addinstance'] = "Agregar nuevo attendance register";

// Buttons & Links labels
$string['force_recalc_user_session'] = 'Recalcular sesiones de este usuario';
$string['force_recalc_all_session'] = 'Recalcular todas las sesiones';
$string['force_recalc_all_session_now'] = 'Recalcular sesiones, ahora';
$string['schedule_reclalc_all_session'] = 'Programar recálculo';
$string['recalc_scheduled_on_next_cron'] = 'El recálculo de las sesiones se ejecutará en la ejecución del siguiente cron';
$string['recalc_already_pending'] = '(Pendiente de ejecutarse en el siguiente cron)';
$string['first_calc_at_next_cron_run'] = 'Cualquier sesión pasada se mostrará tras el siguiente cron';
$string['back_to_tracked_user_list'] = 'Lista de usuarios';
$string['recalc_complete'] = 'Recálculo completo';
$string['recalc_scheduled'] = 'Recálculo programado. Se ejecutará en el siguiente cron';
$string['offline_session_deleted'] = 'Sesión offline eliminada';
$string['offline_session_saved'] = 'Sesión offline guardada';
$string['show_printable'] = 'Versión imprimible';
$string['show_my_sessions'] = 'Ver mis sesiones';
$string['back_to_normal'] = 'Versión normal';
$string['force_recalc_user_session_help'] = 'Borrar y recalcular todas las sesiones online de este usuario.<br />
    ¡Normalmente <b>no necesitas hacer esto</b>!<br />
    Las nuevas sesiones se calculan en segundo plano (tras algún retraso).<br />
    Esta operación puede ser útil <b>solo</b>:
    <ul>
      <li>Después de cambiar el Rol del usuario, y actuó en algún curso con el rol diferente
      (p.e. Cambio de profesor a alumno, el alumno es registrado y el profesor no).</li>
      <li>Tras modificar la configuración de Attendant Register que afecte al cálculo de las sesiones
      (p.e. <i>Modo de registro</i>, <i>Duración de la sesión</i>)</li>
    </ul>';
$string['force_recalc_all_session_help'] = 'Borrar y recalcular todas las sesiones online de todos los alumnos.<br />
    ¡Normamente <b>no necesitas hacer esto</b>!<br />
    Las nuevas sesiones se calculan en segundo plano (tras algún retraso).<br />
    Esta operación puede ser útil <b>solo</b>:
    <ul>
      <li>Después de cambiar el Rol del usuario, y actuó en algún curso con el rol diferente
      (p.e. Cambio de profesor a alumno, el alumno es registrado y el profesor no).</li>
      <li>Tras modificar la configuración de Attendant Register que afecte al cálculo de las sesiones
      (p.e. <i>Modo de registro</i>, <i>Duración de la sesión</i>)</li>
    </ul>
    ¡<b>No es necesario recalcular cuando matriculamos nuevos alumno</b>!<br /><br />
    El recálculo puede realizarse inmediatamente o programado en la ejecución de cron.
    La ejecución programada es más eficiente para cursos muy activos.';


// Table columns
$string['count'] = '#';
$string['start'] = 'Inicio';
$string['end'] = 'Fin';
$string['duration'] = 'Duración';
$string['online_offline'] = 'Online/Offline';
$string['ref_course'] = 'Ref.Curso';
$string['comments'] = 'Comentarios';
$string['fullname'] = 'Nombre';
$string['click_for_detail'] = 'pulse para detalles';
$string['total_time_online'] = 'Tiempo Total Online';
$string['total_time_offline'] = 'Tiempo Total Offline';
$string['grandtotal_time'] = 'Tiempo Total';

$string['online'] = 'Online';
$string['offline'] = 'Offline';
$string['not_specified'] = '(no especificado)';
$string['never'] = '(nunca)';
$string['session_added_by_another_user'] = 'Agregado por: {$a}';
$string['unknown'] = '(Desconocido)';

$string['are_you_sure_to_delete_offline_session'] = '¿Realmente desea eliminar esta sesión offline?';
$string['online_session_updated'] = "Sesiones Online actualizadas";
$string['updating_online_sessions_of'] = 'Actualizando sesiones online de {$a}';
$string['online_session_updated_report'] = '{$a->fullname} Sesiones online actualizadas: {$a->numnewsessions} nuevas';

$string['user_sessions_summary'] = 'Sesiones online del usuario';
$string['online_sessions_total_duration'] = 'Tiempo total Online';
$string['offline_refcourse_duration'] = 'Tiempo Offline, Curso:';
$string['no_refcourse'] = '(Curso no indicado)';
$string['offline_sessions_total_duration'] = 'Tiempo total Offline';
$string['sessions_grandtotal_duration'] = 'Grand Total Time';
$string['last_session_logout'] = 'Última sesión';
$string['last_calc_online_session_logout'] = 'Fin de la última sesión online (excl. la actual)';
$string['last_site_login'] = 'Último acceso';
$string['prev_site_login'] = 'Acceso anterior';
$string['last_site_access'] = 'Última actividad';

$string['no_session_for_this_user'] = '- Todavía no hay sesiones de este usuario -';
$string['no_tracked_user'] = '- Attendance Register no ha seguido a nadie -';
$string['no_session'] = 'Sin sesiones';

$string['tracked_courses'] = 'Cursos seguidos';
$string['duration_hh_mm'] = '{$a->hours} h, {$a->minutes} min';
$string['duration_mm'] = '{$a->minutes} min';

// Offline Session form
$string['select_a_course_if_any'] = '- Selecciona un curso, si hay -';
$string['select_a_course'] = '- Selecciona un curso -';
$string['insert_new_offline_session'] = 'Agrega una sesión de trabajo offline';
$string['insert_new_offline_session_for_another_user'] = 'Agrega una sesión de trabajo offline para {$a->fullname}';
//$string['offline_session_form_explain'] = 'You may enter an offline session of work.<br/>
//    The offline work time will be added to the online sessions automatically recorded by the Attendance Register.<br/>
//    The new session may not overlap with any existing work session, either online or offline, nor it may be more than {$a->dayscertificable} days ago.<br/>
//    You may delete any offline session later.';
$string['offline_session_start'] = 'Inicio';
$string['offline_session_start_help'] = 'Indica inicio y final de la sesión offline que deseas enviar.<br />
    La sesión offline no puede solaparse sobre una sesión anterior, sea online u offline, o la actual.';
$string['offline_session_end'] = 'Fin';
$string['offline_session_comments'] = 'Comentarioss';
$string['offline_session_comments_help'] = 'Indica el título de la sesión offline.';
$string['offline_session_ref_course'] = 'Ref.Curso';
$string['offline_session_ref_course_help'] = 'Indica el curso en el que se realizó la sesión offline o el curso referido al título.';

// Offline Sessions validations
$string['login_must_be_before_logout'] = '¡Inicio posterior al final!';
$string['dayscertificable_exceeded'] = 'No puede ser más de {$a} días';
$string['overlaps_old_sessions'] = 'Solapa a otra sesión, online u offline';
$string['overlaps_current_session'] = 'Solapa a la sesión actual';
$string['unreasoneable_session'] = '¿Estás seguro? ¡Son más de {$a} horas!';
$string['logout_is_future'] = 'No puede ser en el futuro';

$string['tracked_users'] = 'Usuarios seguidos';

// Activity Completion tracking
$string['completiontotalduration'] = 'Tiempo necesario [minutos]';
$string['completiondurationgroup'] = 'Tiempo total';
