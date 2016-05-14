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
define('DB_NAME', 'avantage');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'i.<cO%u:8p5jY0P7tw =;{u6ROXkXEnO[_y=fpQAqDvH$Gd[i?fM8<`L$GgjCpF#');
define('SECURE_AUTH_KEY',  'xGsSc%r6h!Ei8&%R=Eg 4ZHwU4m (pZ)3D@5aCFL|EGZEwA?n|xCicz1lG+7StDH');
define('LOGGED_IN_KEY',    '[)NEbQw[n;(N)*M)sJfPfXxDBDLI[P$.@ey!Ki4Tr>gYm!8]&z@GDj+6V[J`V3Pn');
define('NONCE_KEY',        't*S#1d%cE@r|5hRT)gw.M:)k[&>Hjk6C0R8|X7DGxM3S.xTE13Z(Ww{-9VmB^`Du');
define('AUTH_SALT',        'Ka844<TtB><,U7z;I, Z_GR@7|Ypk-lSp.irpnv4S_C[C}Ir@aUvYS v}_,Rj^A?');
define('SECURE_AUTH_SALT', '?gYI6]t,|Rucaa)yIZiIFxk}BnHk:HYOoK#Q9+_hbwPdb&HQ2?vq^3;<jcr/b:8x');
define('LOGGED_IN_SALT',   '/.uU>9Umi^1ux&35PH8mj6LrV7T7<92){?(`3g~x-;YzwA25ML0L$ OdJcXyGD)m');
define('NONCE_SALT',       '&pBu$p#1IecCqn?`^B&7eC,!Slw_1[}/0.43!*fC:wkYK<Za}xgbBsKRV%-I0QxH');

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
