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
define('DB_NAME', 'new');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'U|LD/`39Unfr@}-Bgst0lc3e6ef0{Sc/0pnog6Y<!~5t8{Y}.#4lzy?40^xv:*qn');
define('SECURE_AUTH_KEY',  'p?|Z,c.?26<91?S52hAG0wxJ& 2<z,{P8i.Z(CEZA`E>ly0wjC3B]2R%65.(g<B!');
define('LOGGED_IN_KEY',    'C#8#bY&VHC*B`$aaYQX?Ha^p]#5j&ePGU?S@qyo`xESh:$iy]BE$;8DvFcn3*[Sm');
define('NONCE_KEY',        'D-o:ntDurlgaMJ UFDtb0lxYRDVy^wd05_2s5]@f;>/6.PJFpq?,ZX,=#Q?<JjWm');
define('AUTH_SALT',        'o:CIF1r]WJPIL]~v8bp7D|>PrQ_*g8; kjm|2ut8cOEMBo}Fu8|b&ZG|*0:m>u-_');
define('SECURE_AUTH_SALT', 'sXOyq^@IE~b9+4STs+EAqnd,yGG-Sw5X^Mceu2Vr`ks:Rw/FmWHoILX0GP4HVITT');
define('LOGGED_IN_SALT',   'qMXsi-4e%AYetq9_de=Ae0x841TDgYM2N*fNBVDf[7*6^B{SO?y@X^9+^AlnU9di');
define('NONCE_SALT',       '5/KBHH/,*R)|e%p{3F=/,G4dBG5(SeH{w7cY]Y5Z/]JOOrG`fS)P5y?RX{tbSJi`');

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
