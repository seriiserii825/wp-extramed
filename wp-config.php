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
define( 'DB_NAME', 'extramed' );

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
define( 'AUTH_KEY',         '0MvkDFK<jG,kPFL,$hBBiHziNsu[hbQ;(d0P,lQNsyo<|K*qj1oOU^>!oC*E(bFS' );
define( 'SECURE_AUTH_KEY',  'l0416u3Odi-jd/k13n:3@b|Em_L0pATkzv]X]_3+U{,xwbtk@*>E,WABh6)8~MJb' );
define( 'LOGGED_IN_KEY',    'TgO2<#13dWq_4 ZrQKv3])fi-5/QB@>Q.Wd=ug9DUB{ugIz`WPY0((TMc=229~N6' );
define( 'NONCE_KEY',        'pdl>lSwk3gE#Jw(S5x()%pkh}</9D?U}^H`3>&7GB!e_3FW[Q9jtZ )5s9=4&H=O' );
define( 'AUTH_SALT',        'h)=j*kXDG_^jjG*z#|myCR:d% (kuJK>R,,S0O@ei;Q&{Y|OB*`P,@KqRcw?q$&2' );
define( 'SECURE_AUTH_SALT', 'cqoiCkRLik|HBt/1`TXeEGy,u+[8bIW :-NcC](@epHt[A{%%y$aOpXBDd;<l+Wx' );
define( 'LOGGED_IN_SALT',   '<Vb4$u54Z]KO0d,uA=]3TWIRIrUm6ltZ:z<VKu]5g.}aQ(Zp`lv?SK<Oil5qMbY7' );
define( 'NONCE_SALT',       '{nHB$7 >v7pEQS?ev1~&7ukAPj]8bh9V>GtV/jz##{^ xc,THpeP,OmKB4-dLOEl' );

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
