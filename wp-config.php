<?php
/**
 * Konfigurasi dasar WordPress.
 *
 * Berkas ini berisi konfigurasi-konfigurasi berikut: Pengaturan MySQL, Awalan Tabel,
 * Kunci Rahasia, Bahasa WordPress, dan ABSPATH. Anda dapat menemukan informasi lebih
 * lanjut dengan mengunjungi Halaman Codex {@link http://codex.wordpress.org/Editing_wp-config.php
 * Menyunting wp-config.php}. Anda dapat memperoleh pengaturan MySQL dari web host Anda.
 *
 * Berkas ini digunakan oleh skrip penciptaan wp-config.php selama proses instalasi.
 * Anda tidak perlu menggunakan situs web, Anda dapat langsung menyalin berkas ini ke
 * "wp-config.php" dan mengisi nilai-nilainya.
 *
 * @package WordPress
 */

// ** Pengaturan MySQL - Anda dapat memperoleh informasi ini dari web host Anda ** //
/** Nama basis data untuk WordPress */
define('DB_NAME', 'ngodingdb');

/** Nama pengguna basis data MySQL */
define('DB_USER', 'root');

/** Kata sandi basis data MySQL */
define('DB_PASSWORD', '');

/** Nama host MySQL */
define('DB_HOST', 'localhost');

/** Set Karakter Basis Data yang digunakan untuk menciptakan tabel basis data. */
define('DB_CHARSET', 'utf8');

/** Jenis Collate Basis Data. Jangan ubah ini jika ragu. */
define('DB_COLLATE', '');

define('WP_HOME','http://localhost:8080/mobilo');
define('WP_SITEURL','http://localhost:8080/mobilo');

/**#@+
 * Kunci Otentifikasi Unik dan Garam.
 *
 * Ubah baris berikut menjadi frase unik!
 * Anda dapat menciptakan frase-frase ini menggunakan {@link https://api.wordpress.org/secret-key/1.1/salt/ Layanan kunci-rahasia WordPress.org}
 * Anda dapat mengubah baris-baris berikut kapanpun untuk mencabut validasi seluruh cookies. Hal ini akan memaksa seluruh pengguna untuk masuk log ulang.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ';:~f!FMT,5AY#|m_FEO**pS;wfo1HbeNn.u6/P5ffp8MA5#HY=W=;HtE!]:2}x~Q');
define('SECURE_AUTH_KEY',  '+SXhewtN}pg|E2+q0^}NmK |*aHWYakxS7xz4cTkaZ?2/DM<NK-zehO1?D>Y.T,h');
define('LOGGED_IN_KEY',    '0cogIYE-f_d23-_.*lqlvp6j.Q;IIrJTkza1)|W5wnQjeYtP%2OSO)Xf!d5TpgrE');
define('NONCE_KEY',        'X2t<5!zIhr.oB(x(3x!tkas<C.7Z28/]EtTNF= ^CGz~+3;k#4^i}pFj(o$ieLs)');
define('AUTH_SALT',        'N||x&ymYc79_&c/2^tw4v7JIciX|OFj%||<JoJ|JeVC`FVi)2%Rx?^S=L9x*XlL?');
define('SECURE_AUTH_SALT', 'OV>,6l!PPi6!5C|KSZ<&*8>K@!sL[yytxq#e?-1trpFn8%H=[zwe2$2+/PQ`|54{');
define('LOGGED_IN_SALT',   'ZsRaK+)DjZTh_oYI.1!rMbCCE-iho11+y-6<Tnxd#zt/:.Y<!dtoE(+y8NXm_xb]');
define('NONCE_SALT',       'wf4})b|jm@R$9$BqXP*+]6=NGYk9wQ(F]GwB/}gsO$AuTI&49jbU<R|i3|*LHp:N');

/**#@-*/

/**
 * Awalan Tabel Basis Data WordPress.
 *
 * Anda dapat memiliki beberapa instalasi di dalam satu basis data jika Anda memberikan awalan unik
 * kepada masing-masing tabel. Harap hanya masukkan angka, huruf, dan garis bawah!
 */
$table_prefix  = 'tbl_';

/**
 * Untuk pengembang: Moda pengawakutuan WordPress.
 *
 * Ubah ini menjadi "true" untuk mengaktifkan tampilan peringatan selama pengembangan.
 * Sangat disarankan agar pengembang plugin dan tema menggunakan WP_DEBUG
 * di lingkungan pengembangan mereka.
 */
define('WP_DEBUG', false);

/* Cukup, berhenti menyunting! Selamat ngeblog. */

/** Lokasi absolut direktori WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Menentukan variabel-variabel WordPress berkas-berkas yang disertakan. */
require_once(ABSPATH . 'wp-settings.php');
