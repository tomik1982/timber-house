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
define( 'DB_NAME', 'timber-house' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '{f!@bP2Y_RxY(6l&h2S3)`(l|cu7gOR<mcic:$`jd1:`dmO8Y|xtRm8J+j|VJuvD' );
define( 'SECURE_AUTH_KEY',  'H}D+&RrTYGMl`k,+:Oxbk 9Ot1f}4U;C2kY<f(-,vjA 8[b2q,|^$5Af7t](:1DS' );
define( 'LOGGED_IN_KEY',    ';FJM/$@q`i:`t@^+l U?`DUt=qy V]8qrVFD8H/z/;,9=yinslt5Y6E:8q$NqQ~]' );
define( 'NONCE_KEY',        '-uyZTRz7lb^8?UA[}2UvAQ_9M!rP]C[yr4<BE)SHAWqR1@sbG`#s`k]FNpigv(k=' );
define( 'AUTH_SALT',        '&gx6Jo=}]Qnu|-vkk|o~WZ1X*k?pJCCb8>6D-)gm%$4By~vng !i}!e$o8z-r8A)' );
define( 'SECURE_AUTH_SALT', 'kq=VI? ysP!D.`KW[QXnLofsAhkLd$E0uoiAD`H_74(?iWqeWy7fk:n9?2TNK[F1' );
define( 'LOGGED_IN_SALT',   '(GwVu1;4ru C.-kC>>B#&;Uwgrcfow},i>0C/g|:|%/GK |Zz8u7b1t:v;>b$LH{' );
define( 'NONCE_SALT',       '*xr&W<rXuh_mj&GH9N+r]&t0>=m5YBS+r*?[xQK$2~xDj<2~![giHG2 (Ym/+!GE' );

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
