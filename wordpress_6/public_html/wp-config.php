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
define( 'DB_NAME', 'cx22770_6' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'cx22770_6' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'Q90V1W3T' );

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
define( 'AUTH_KEY',         's2`M vo(oJY3lbe^6d2xf@hxWWeXndYBe2U1<Gmlp>oOUN;Raj0A@ih&&r_s6cae' );
define( 'SECURE_AUTH_KEY',  '^U?8q(To:!!nDt>b3:OFTnQu:!WV}td-dc=:-+PEHuo@rvcCQ9/mrvHyLpbw%2-8' );
define( 'LOGGED_IN_KEY',    'H3%P!ml)F@0Y;++T14uB()p1>y,e5<[#<asexYIIAkm}XpZ}W;8,tC70{,[W{SDe' );
define( 'NONCE_KEY',        '.h=*dWqogYy3zcH/4c`bRB$2)]?dtdb3QCGc:WX|{&j_zR=S]r%bbce}HUy?YXmK' );
define( 'AUTH_SALT',        '/?:ad;3$7%kaQmKp6ua#JNO>] I0`/{ -Vi&GJ+URe3i]]Tx+06SEl%<KO4NF&u`' );
define( 'SECURE_AUTH_SALT', '!}!%@h4u p0a=9J6~W:mmg<:QVd54rrr7_P1.!!!gu~gJ1^%:$;%e2F<&E<el[<m' );
define( 'LOGGED_IN_SALT',   '``/!ELwV9j|&`*;RYp:mLv&D#Tax#pOXaZBcc@vNvy@@{Khu#}9e1M] [VR?Vb7%' );
define( 'NONCE_SALT',       'qpy2pR*$MS]QyuQp5wg{Idf/^[0FF$c0cyk K_ZfNQ-@}by}jQ+p<:v:!0q_bJNT' );

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
