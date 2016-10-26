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
/** Имя базы данных для WordPress */
define('DB_NAME', 'mybattery');

/** Имя пользователя MySQL */
define('DB_USER', 'admin_admin');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '123');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'RfB mz<<}J#YT?UR#|cR/E !|}&<.U*xBLybYa+w.4Zgjl#R>EOEw#3n_0?GM)]$');
define('SECURE_AUTH_KEY',  'Z_1.f[q3|32$6c Bz?E&eS|8$AcpxstSHlSx,!t4)@i!ps~eI:>`J%H61)Fit7Po');
define('LOGGED_IN_KEY',    'x4*ikPRR`fq-:dK.(cgI6:qX<Zd+OE++CQ7Fx<mM ^6ZE;3Fc%ER bES_Fni+,.(');
define('NONCE_KEY',        'J^;-<c}r5RdBxq??y<OfLa:~<R[b2qb8hfF:2,Wi~f%1EFCUb{ y_Dm]$f/i_({Z');
define('AUTH_SALT',        'pbpd*tBf^f@-T#2blvX4W({U/A4N)cXJf-q;M]a9%IxI<A6e[J*iN|8/P8)DwWb ');
define('SECURE_AUTH_SALT', ';*.W#Dz@d,s{0gbG&R]2t3Oe$s//Xz%YH`QD!qtOpZFylY$pr j)4kp0>94S! h-');
define('LOGGED_IN_SALT',   '?e9D1+x$k}c;l}D~x_-Cl$ri7P;4(]_E}g,kcEAb!F2816dtV:=oK#Bc})h.h,*s');
define('NONCE_SALT',       'O$=N&_YS1toP}r+siT/=Ba^:SsR~c!tnaE8{0]}ATh5V{S}C4aacERW *s6UmU ~');
define( 'WPCF7_VALIDATE_CONFIGURATION', false );
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
