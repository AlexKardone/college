<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
if (file_exists(dirname(__FILE__) . '/local.php')) {
	// Local database settings
	define('DB_NAME', 'college');
	define('DB_USER', 'admin');
	define('DB_PASSWORD', 'admin');
	define('DB_HOST', 'localhost');
} else {
	// Live database settings
	define('DB_NAME', 'alex6010_universitydata');
	define('DB_USER', 'alex6010_wp521');
	define('DB_PASSWORD', 'Matskevich123-');
	define('DB_HOST', 'localhost');
}




/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '}?::({Y`/rp+i>(j/BCBG 3tHxSxz@Rf0nVJYl$#s348wk(ly*-{!f-9<v4[.hIb');
define('SECURE_AUTH_KEY',  'lw>-4{u9JcUq2.13FH{)TMNaJ?rvGh-r>s/~g?@Xj_P([0]Q!zVH`A.f(_z(M;<a');
define('LOGGED_IN_KEY',    'Ef{Z+n~ dG.9;u@?Yc+9d&L_yr9P|KF_&gy9/,b4vX076qC_[A,|qLHN-`oj;`v)');
define('NONCE_KEY',        'IU$(1@{,#hsk=b6~o:~D-Xk>V+&@PUjfcu$`_9p]Tm5uCGe-^OV][CvQ|(Bo8$N{');
define('AUTH_SALT',        ';(,*CE2hb4E=?~o9~]u1b-Wc`MPrM$qUj&<a2:D;-,nK[oQ5QYB#SVc.c+,iz:jI');
define('SECURE_AUTH_SALT', 'E-MTm=F-0QVy35wv[YMc++)i qG%d0?`;Y01Pr)#}&$8E?42xm+/kRm*{(yGnUCE');
define('LOGGED_IN_SALT',   'u?U*S;o-&ze|nZon|,}7-ib)j+QLuE-f+s`:@ss>hfKY=/5[}J@YD%khcF@*Enr-');
define('NONCE_SALT',       'Gn1,|-z)pDuJUFxkP&`|J_SczilR/5Ys-.+gzW#+lvStXiqeDnUb?}#eQ9dkeo3s');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');

define('FS_METHOD','direct');
