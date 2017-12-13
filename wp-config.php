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
define('DB_NAME', 'imperfect');

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
define('AUTH_KEY',         '$t TXts~uuZFn)`l1QWQ;Z?eT;TZ5oB)a|J=A_vpn>ahMQCR&x>Q,+YbDhdQ{gT/');
define('SECURE_AUTH_KEY',  '%G|H}Pp0m4^2#$udc/IA:NmE$w[aALT){pb@AWmrN03c>tu1K.%T<EM@es<VQw}4');
define('LOGGED_IN_KEY',    '~)PZWPSWX{u}lBS)M%w@p-BF:?*8=HRVZsKan:Ja;q/~mG#`N9le&+HgI%xH>gQ ');
define('NONCE_KEY',        '>_:=S^&}zrYR~RIZ;q3e^x)b|u$Ih9xl&]|;f@}o!!HJ2hH]$fGH!@RF.o*H4b`$');
define('AUTH_SALT',        '!4i``|,WOGuGH;W&NRuVA1q79N:3dR&?6 BI2UmF*2TY:{6d,dAMnXvbXfBjq5pm');
define('SECURE_AUTH_SALT', 'jL~.!7)ETjl1mo@D^(]h-aw=iI;uP,qdgRZ@}f&W?FPObAUkzT[x*ZG{o923p(Q8');
define('LOGGED_IN_SALT',   '}<oaO{xw/]xt%-hEe[=99U+VhZ!.I@V0oXMN/kvu^5DsEY2$Euu=ai1F4[uB)lJp');
define('NONCE_SALT',       'WMnI^dvk[cS|:k[xsTgqyN9kAny>I02,~7U)e|=Yh&(;o@5OFK(Exq(I8!x!,BF-');

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
