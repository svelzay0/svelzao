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
define( 'DB_NAME', 'svelzao' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '10U:cHU|kDxTcrUGG>&R^5wT^-E 8DVF(0zc4njMd$o8&ocDn#@;bR!*R pS=CT,' );
define( 'SECURE_AUTH_KEY',  '^M Ol79 HU5{l<XAPBMzV*1bDt:Fb+lLi}{IJDhm8^)xS.ZyKw_d%3dFZ5JH[s4g' );
define( 'LOGGED_IN_KEY',    'Q|`6[$wdGNo.MW2w)lPW+K5}W|[)k[Xr?gNInJ`|8YW;[fy6[Jt0eu@_+Fg>_gqY' );
define( 'NONCE_KEY',        '^y6Ebl Mj3G=oj~UWJxixfeqtfk Qp91h*OpH[NX.;C}L/?~VSN.[bXB((`f(|KP' );
define( 'AUTH_SALT',        'Hk/(i5ca.&q*m_?:z+4&;=<-v=9(@IEWK#q1jYdERPMVIqu N&`oVwol&1lN9DF!' );
define( 'SECURE_AUTH_SALT', '-,L|FAe_HjLu,zFYwS J&tl5^^ErR {),9zBV99(hkIJ.WvcNAXJCxNJxf3avevy' );
define( 'LOGGED_IN_SALT',   's/Ol0}+,G9^lDVuR0zt$e C+T-c2aAmoXHixHE.<^dtkcj:!zb0wD^g-zrv,)w*A' );
define( 'NONCE_SALT',       'N_`zPMLwJ^ic6T/&zaZao8rrXQq8Wp2Pg3R_3VeIw(4<hdIQ.BK#ZjEui!ylqM@B' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
