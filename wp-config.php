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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'gW*msP5KIB^gUQ-,L>+7k?7mv&pFQ*_4],C]P3!u=GN <?jV_4#qD{-H6po:UgIh' );
define( 'SECURE_AUTH_KEY',  '];|oBftz2*%L.#*.<Vh=EfX0Ha``f:@RM>i.c75bTn0V%Zz6g&U`PQm5CJP>d[}D' );
define( 'LOGGED_IN_KEY',    'PT2[{rA&<5pQO|#1Ws{i^?lMKM~CTxi;wu|--7DRKwL0y.{-k9-p8^X^35ly;w!Q' );
define( 'NONCE_KEY',        'M2Sr&<5CjqVLJb2!Ji/.,9imGiQ:D,6(XLxf-f?/YqvM<:<Jsgmzb[|4yp^XdzJV' );
define( 'AUTH_SALT',        ';::33@n`F^zV(=MiTiYQf$6S@xj_!8LZ[qh<Xp.a#[3H>|(f9]eE7^l(gS=G8JRA' );
define( 'SECURE_AUTH_SALT', 'z]_!LsIf>Qp>z{{,`$x<4TV%hPb3Wj0 +7hEpIlRc,q!s-moiJC3jq#Tgg(D*pDf' );
define( 'LOGGED_IN_SALT',   '/<.h$aGDScq5=HR&~?{(ZUg5P*0*v}nl{6J@}UW`pV-5ZcGOkgA88cib_H68*:_)' );
define( 'NONCE_SALT',       'adZ%#W:T/}FAybZX4B!ig;/(g!|.u@bP!6e-yn*6wB|PxJ`Md[nQzkqIu(|l1UP2' );

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

define('FS_METHOD','direct');

define( 'AUTOMATIC_UPDATER_DISABLED', true );
