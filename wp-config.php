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
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'my_theme' );

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
define( 'AUTH_KEY',         'Ns)z^?Mj}_p+Ss4|/C/VDO?^aka3xAzQ1TG6K0:eF[SiyiT Ru}?`G~.Go{;tZ[8' );
define( 'SECURE_AUTH_KEY',  '6dxSXmAQs(?MHxd5N#wvE vwfv ;C>JJWcylmD*Nj7a;pxDT/$1jDd9 8X^b!^S)' );
define( 'LOGGED_IN_KEY',    '{[?/-#V@#N>Ks3C/uP9KbKC_ZHL82d+u+5vDYx+fylJB~lPtFq-pE{*M7<(;GrP*' );
define( 'NONCE_KEY',        '$BF7/p7M;zsrS)tQ+dK4WN3G{T<x1R q:&L=i-D%,;qAch[q3IyzkMD0Zr_O^d_q' );
define( 'AUTH_SALT',        'qe%PE3D>dZQkT_~GJ~F{)ukA%=4qWs;AEo1/cn1?;g2)uyOn/!r?7@}hAFh}%sb9' );
define( 'SECURE_AUTH_SALT', 'qD@k[btn;+&Oh$^~!mTO<$}7Gt%U5_CmEIk4;]{^,kD03YjEI|7r2-7#wK S;2e2' );
define( 'LOGGED_IN_SALT',   'hgN!7%5@g9IN)J<ePV}3L]/`qtTB*)naT+|W?bw{TdJeo_[yVm L,)Q?]L^@#J18' );
define( 'NONCE_SALT',       'lS(W{1x7C6?($;QN9:6H@Is|91W;a/-FS9tIQA44s-Y%iAkSDjuETLk;JD _o@Z~' );

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
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
