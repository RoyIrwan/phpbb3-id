<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'CLI_CONFIG_CANNOT_CACHED'			=> 'Aktifkan opsi ini jika opsi konfigurasi berubah terlalu sering, agar dapat di-cache lebih efisien.', //'Set this option if the configuration option changes too frequently to be efficiently cached.',
	'CLI_CONFIG_CURRENT'				=> 'Nilai konfigurasi yang aktif, gunakan 0 dan 1 untuk menentukan nilai boolean', //'Current configuration value, use 0 and 1 to specify boolean values',
	'CLI_CONFIG_DELETE_SUCCESS'			=> 'Konfig %s berhasil dihapus.', //'Successfully deleted config %s.',
	'CLI_CONFIG_NEW'					=> 'Nilai konfigurasi baru, gunakan 0 dan 1 untuk menentukan nilai boolean', //'New configuration value, use 0 and 1 to specify boolean values',
	'CLI_CONFIG_NOT_EXISTS'				=> 'Konfig %s tidak ditemukan', //'Config %s does not exist',
	'CLI_CONFIG_OPTION_NAME'			=> 'Nama opsi konfigurasi', //'The configuration option’s name',
	'CLI_CONFIG_PRINT_WITHOUT_NEWLINE'	=> 'Aktifkan opsi ini jika nilai harus dicetak tanpa baris baru di akhir.', //'Set this option if the value should be printed without a new line at the end.',
	'CLI_CONFIG_INCREMENT_BY'			=> 'Jumlah penambahan', //'Amount to increment by',
	'CLI_CONFIG_INCREMENT_SUCCESS'		=> 'Konfig %s berhasil ditambahkan', //'Successfully incremented config %s',
	'CLI_CONFIG_SET_FAILURE'			=> 'Konfig %s gagal diaktifkan', //'Could not set config %s',
	'CLI_CONFIG_SET_SUCCESS'			=> 'Konfig %s berhasil diaktifkan', //'Successfully set config %s',

	'CLI_DESCRIPTION_CRON_LIST'					=> 'Menampilkan daftar semua cron job baik yang sudah maupun yang belum siap.', //'Prints a list of ready and unready cron jobs.',
	'CLI_DESCRIPTION_CRON_RUN'					=> 'Menjalankan semua cron task yang sudah siap.', //'Runs all ready cron tasks.',
	'CLI_DESCRIPTION_CRON_RUN_ARGUMENT_1'		=> 'Nama cron task yang akan dijalankan', //'Name of the task to be run',
	'CLI_DESCRIPTION_DB_LIST'					=> 'Daftar semua migrasi yang sudah terpasang dan tersedia.', //'List all installed and available migrations.',
	'CLI_DESCRIPTION_DB_MIGRATE'				=> 'Perbarui basis data dengan menerapkan semua migrasi.', //'Updates the database by applying migrations.',
	'CLI_DESCRIPTION_DB_REVERT'					=> 'Membatalkan satu migrasi.', //'Revert a migration.',
	'CLI_DESCRIPTION_DELETE_CONFIG'				=> 'Menghapus satu opsi pada konfigurasi', //'Deletes a configuration option',
	'CLI_DESCRIPTION_DISABLE_EXTENSION'			=> 'Menonaktifkan ekstensi yang dipilih.', //'Disables the specified extension.',
	'CLI_DESCRIPTION_ENABLE_EXTENSION'			=> 'Mengaktifkan ekstensi yang dipilih.', //'Enables the specified extension.',
	'CLI_DESCRIPTION_FIND_MIGRATIONS'			=> 'Menemukan semua migrasi yang tidak tergantung/berhubungan.', //'Finds migrations that are not depended upon.',
	'CLI_DESCRIPTION_FIX_LEFT_RIGHT_IDS'		=> 'Memperbaiki struktur forum dan modul.', //'Repairs the tree structure of the forums and modules.',
	'CLI_DESCRIPTION_GET_CONFIG'				=> 'Mendapatkan nilai satu opsi pada konfigurasi', //'Gets a configuration option’s value',
	'CLI_DESCRIPTION_INCREMENT_CONFIG'			=> 'Menambahkan nilai satu opsi bertipe integer pada konfigurasi', //'Increments a configuration option’s integer value',
	'CLI_DESCRIPTION_LIST_EXTENSIONS'			=> 'Menampilkan daftar semua ekstensi dalam basis data dan pada sistem berkas (filesystem).', //'Lists all extensions in the database and on the filesystem.',

	'CLI_DESCRIPTION_OPTION_ENV'				=> 'Nama Environment.', //'The Environment name.',
	'CLI_DESCRIPTION_OPTION_SAFE_MODE'			=> 'Jalankan dalam Mode Aman (tanpa semua ekstensi).', //'Run in Safe Mode (without extensions).',
	'CLI_DESCRIPTION_OPTION_SHELL'				=> 'Jalankan shell.', //'Launch the shell.',

	'CLI_DESCRIPTION_PURGE_EXTENSION'			=> 'Membersihkan ekstensi yang dipilih.', //'Purges the specified extension.',

	'CLI_DESCRIPTION_REPARSER_LIST'						=> 'Menampilan daftar semua tipe text yang bisa di reparse.', //'Lists the types of text that can be reparsed.',
	'CLI_DESCRIPTION_REPARSER_AVAILABLE'				=> 'Reparser yang tersedia:', //'Available reparsers:',
	'CLI_DESCRIPTION_REPARSER_REPARSE'					=> 'Me-reparse text yang disimpan dengan servis text_formatter yang aktif.', //'Reparses stored text with the current text_formatter services.',
	'CLI_DESCRIPTION_REPARSER_REPARSE_ARG_1'			=> 'Tipe text yang akan di-reparse. Kosongkan untuk me-reparse semua tipe.', //'Type of text to reparse. Leave blank to reparse everything.',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_DRY_RUN'		=> 'Jangan simpan perubahan apapun; hanya tampilkan apa yang akan terjadi', //'Do not save any changes; just print what would happen',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_MIN'	=> 'ID paling rendah yang diproses', //'Lowest record ID to process',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_MAX'	=> 'ID paling tinggi yang diproses', //'Highest record ID to process',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_SIZE'	=> 'Perkiraan jumlah record yang diproses pada satu saat', //'Approximate number of records to process at a time',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RESUME'		=> 'Mulai proses reparse lagi, melanjutkan proses terakhir', //'Start reparsing where the last execution stopped',

	'CLI_DESCRIPTION_RECALCULATE_EMAIL_HASH'			=> 'Menghitung ulang kolom user_email_hash pada tabel users.', //'Recalculates the user_email_hash column of the users table.',

	'CLI_DESCRIPTION_SET_ATOMIC_CONFIG'					=> 'Menentukan satu nilai opsi pada konfigurasi, jika hanya nilai lama sama dengan yang sekarang', //'Sets a configuration option’s value only if the old matches the current value',
	'CLI_DESCRIPTION_SET_CONFIG'						=> 'Menetapkan satu nilai opsi pada konfigurasi', //'Sets a configuration option’s value',

	'CLI_DESCRIPTION_THUMBNAIL_DELETE'					=> 'Hapus semua thumbnail eksisting.', //'Delete all existing thumbnails.',
	'CLI_DESCRIPTION_THUMBNAIL_GENERATE'				=> 'Generate semua thumbnail yang tidak ditemukan.', //'Generate all missing thumbnails.',
	'CLI_DESCRIPTION_THUMBNAIL_RECREATE'				=> 'Buat ulang semua thumbnail.', //'Recreate all thumbnails.',

	'CLI_DESCRIPTION_UPDATE_CHECK'					=> 'Periksa apakah forum sudah versi mutakhir.', //'Check if the board is up to date.',
	'CLI_DESCRIPTION_UPDATE_CHECK_ARGUMENT_1'		=> 'Nama ekstensi yang akan diperiksa (jika all, semua ekstensi akan diperiksa)', //'Name of the extension to check (if all, checks all the extensions)',
	'CLI_DESCRIPTION_UPDATE_CHECK_OPTION_CACHE'		=> 'Jalankan pemeriksaan menggunakan cache.', //'Run check command with cache.',
	'CLI_DESCRIPTION_UPDATE_CHECK_OPTION_STABILITY'	=> 'Jalankan perintah menggunakan pilihan periksa hanya versi stabil atau tidak stabil saja.', //'Run command choosing to check only stable or unstable versions.',

	'CLI_DESCRIPTION_UPDATE_HASH_BCRYPT'		=> 'Perbarui hash kata sandi yang sudah kadaluwarsa dengan hash menggunakan bcrypt.', //'Updates outdated password hashes to be hashed with bcrypt.',

	'CLI_ERROR_INVALID_STABILITY' => '"%s" perlu ditetapkan menjadi "stable" (stabil) atau "unstable" (tidak stabil).', //'"%s" needs to be set to "stable" or "unstable".',

	'CLI_DESCRIPTION_USER_ACTIVATE'				=> 'Mengaktifkan (atau menonaktifkan) satu aun pengguna.', //'Activate (or deactivate) a user account.',
	'CLI_DESCRIPTION_USER_ACTIVATE_USERNAME'	=> 'Username dari pengguna yang akan diaktifkan.', //'Username of the account to activate.',
	'CLI_DESCRIPTION_USER_ACTIVATE_DEACTIVATE'	=> 'Non aktifkan akun pengguna', //'Deactivate the user’s account',
	'CLI_DESCRIPTION_USER_ACTIVATE_ACTIVE'		=> 'Pengguna sudah aktif.', //'The user is already active.',
	'CLI_DESCRIPTION_USER_ACTIVATE_INACTIVE'	=> 'Pengguna sudah tidak aktif.', //'The user is already inactive.',
	'CLI_DESCRIPTION_USER_ADD'					=> 'Tambah pengguna baru.', //'Add a new user.',
	'CLI_DESCRIPTION_USER_ADD_OPTION_USERNAME'	=> 'Username pengguna baru', //'Username of the new user',
	'CLI_DESCRIPTION_USER_ADD_OPTION_PASSWORD'	=> 'Kata sandi pengguna baru', //'Password of the new user',
	'CLI_DESCRIPTION_USER_ADD_OPTION_EMAIL'		=> 'Alamat e-mail pengguna baru', //'E-mail address of the new user',
	'CLI_DESCRIPTION_USER_ADD_OPTION_NOTIFY'	=> 'Kirim e-mail aktifasi ke pengguna baru (secara default tidak dikirim)', //'Send account activation email to the new user (not sent by default)',
	'CLI_DESCRIPTION_USER_DELETE'				=> 'Hapus akun pengguna.', //'Delete a user account.',
	'CLI_DESCRIPTION_USER_DELETE_USERNAME'		=> 'Username pengguna yang akan dihapus', //'Username of the user to delete',
	'CLI_DESCRIPTION_USER_DELETE_OPTION_POSTS'	=> 'Hapus semua postingan pengguna. Tanpa opsi ini, semua postingan tidak akan dihapus.', //'Delete all posts by the user. Without this option, the user’s posts will be retained.',
	'CLI_DESCRIPTION_USER_RECLEAN'				=> 'Bersihkan semua username.', //'Re-clean usernames.',

	'CLI_EXTENSION_DISABLE_FAILURE'		=> 'Tidak dapat menonaktifkan ekstensi %s', //'Could not disable extension %s',
	'CLI_EXTENSION_DISABLE_SUCCESS'		=> 'Ekstensi %s berhasil dinonaktifkan', //'Successfully disabled extension %s',
	'CLI_EXTENSION_DISABLED'			=> 'Ekstensi %s tidak aktif', //'Extension %s is not enabled',
	'CLI_EXTENSION_ENABLE_FAILURE'		=> 'Gagal mengkaktifkan ekstensi %s', //'Could not enable extension %s', 
	'CLI_EXTENSION_ENABLE_SUCCESS'		=> 'Ekstensi %s berhasil diaktifkan', //'Successfully enabled extension %s',
	'CLI_EXTENSION_ENABLED'				=> 'Ekstensi %s sudah aktif', //'Extension %s is already enabled',
	'CLI_EXTENSION_NOT_EXIST'			=> 'Ekstensi %s tidak ditemukan', //'Extension %s does not exist',
	'CLI_EXTENSION_NAME'				=> 'Nama ekstensi', //'Name of the extension',
	'CLI_EXTENSION_PURGE_FAILURE'		=> 'Gagal membersihkan ekstensi %s', //'Could not purge extension %s',
	'CLI_EXTENSION_PURGE_SUCCESS'		=> 'Sukses membersihkan ekstensi %s', //'Successfully purged extension %s',
	'CLI_EXTENSION_UPDATE_FAILURE'		=> 'Gagal memperbarui ekstensi %s', //'Could not update extension %s',
	'CLI_EXTENSION_UPDATE_SUCCESS'		=> 'Sukses memperbarui ekstensi %s', //'Successfully updated extension %s',
	'CLI_EXTENSION_NOT_FOUND'			=> 'Tidak ada ekstensi satupun.', //'No extensions were found.',
	'CLI_EXTENSION_NOT_ENABLEABLE'		=> 'Ekstensi %s tidak dapat diaktifkan.', //'Extension %s is not enableable.',
	'CLI_EXTENSIONS_AVAILABLE'			=> 'Tersedia', //'Available',
	'CLI_EXTENSIONS_DISABLED'			=> 'Tidak aktif', //'Disabled',
	'CLI_EXTENSIONS_ENABLED'			=> 'Aktif', //'Enabled',

	'CLI_FIXUP_FIX_LEFT_RIGHT_IDS_SUCCESS'		=> 'Sukses memperbaiki struktur semua forum dan modul.', //'Successfully repaired the tree structure of the forums and modules.',
	'CLI_FIXUP_RECALCULATE_EMAIL_HASH_SUCCESS'	=> 'Sukses menghitung ulang semua hash e-mail.', //'Successfully recalculated all email hashes.',
	'CLI_FIXUP_UPDATE_HASH_BCRYPT_SUCCESS'		=> 'Sukses memperbarui hash kata sandi lama menggunakan bcrypt.', //'Successfully updated outdated password hashes to bcrypt.',

	'CLI_MIGRATION_NAME'					=> 'Nama migrasi, termasuk namespace (jangan menggunakan "\", tapi gunakan "/" untuk menghindari masalah).', //'Migration name, including the namespace (use forward slashes instead of backslashes to avoid problems).',
	'CLI_MIGRATIONS_AVAILABLE'				=> 'Migrasi yang tersedia', //'Available migrations',
	'CLI_MIGRATIONS_INSTALLED'				=> 'Migrasi yang terpasang', //'Installed migrations',
	'CLI_MIGRATIONS_ONLY_AVAILABLE'		    => 'Tampilkan hanya migrasi yang tersedia', //'Show only available migrations',
	'CLI_MIGRATIONS_EMPTY'                  => 'Tidak ada migrasi.', //'No migrations.',

	'CLI_REPARSER_REPARSE_REPARSING'		=> 'Proses reparse %1$s (antara %2$d..%3$d)', //'Reparsing %1$s (range %2$d..%3$d)',
	'CLI_REPARSER_REPARSE_REPARSING_START'	=> 'Proses reparse %s...', //'Reparsing %s...',
	'CLI_REPARSER_REPARSE_SUCCESS'			=> 'Proses reparse selesai dengan sukses', //'Reparsing ended with success',

	// In all the case %1$s is the logical name of the file and %2$s the real name on the filesystem
	// eg: big_image.png (2_a51529ae7932008cf8454a95af84cacd) generated.
	'CLI_THUMBNAIL_DELETED'		=> '%1$s (%2$s) sudah dihapus.', //'%1$s (%2$s) deleted.',
	'CLI_THUMBNAIL_DELETING'	=> 'Menghapus thumbnail', //'Deleting thumbnails',
	'CLI_THUMBNAIL_SKIPPED'		=> '%1$s (%2$s) diabaikan.', //'%1$s (%2$s) skipped.',
	'CLI_THUMBNAIL_GENERATED'	=> '%1$s (%2$s) dibuat.', //'%1$s (%2$s) generated.',
	'CLI_THUMBNAIL_GENERATING'	=> 'Membuat thumbnail', //'Generating thumbnails',
	'CLI_THUMBNAIL_GENERATING_DONE'	=> 'Semua thumbnail sudah dibuat ulang.', //'All thumbnails have been regenerated.',
	'CLI_THUMBNAIL_DELETING_DONE'	=> 'Semua thumbnail sudah dihapus.', //'All thumbnails have been deleted.',

	'CLI_THUMBNAIL_NOTHING_TO_GENERATE'	=> 'Tidak ada thumbnail untuk dibuat.', //'No thumbnails to generate.',
	'CLI_THUMBNAIL_NOTHING_TO_DELETE'	=> 'Tidak ada thumbnails untuk dihapus.', //'No thumbnails to delete.',

	'CLI_USER_ADD_SUCCESS'		=> 'Sukses menambahkan pengguna %s.', //'Successfully added user %s.',
	'CLI_USER_DELETE_CONFIRM'	=> 'Anda yakin akan menghapus pengguna ‘%s’? [y/N]', //'Are you sure you want to delete ‘%s’? [y/N]',
	'CLI_USER_RECLEAN_START'	=> 'Membersihkan ulang semua username', //'Re-cleaning usernames',
	'CLI_USER_RECLEAN_DONE'		=> [
		0	=> 'Membersihkan ulang selesai. Tidak ada username yang harus dibersihkan.', //'Re-cleaning complete. No usernames needed to be cleaned.',
		1	=> 'Membersihkan ulang selesai. Username sebanyak %d yang dibersihkan.', //'Re-cleaning complete. %d username was cleaned.',
		2	=> 'Membersihkan ulang selesai. Username sebanyak %d yang dibersihkan.', //'Re-cleaning complete. %d usernames were cleaned.',
	],
));

// Additional help for commands.
$lang = array_merge($lang, array(
	'CLI_HELP_CRON_RUN'			=> $lang['CLI_DESCRIPTION_CRON_RUN'] . ' Secara opsional, anda dapat satu nama cron task untuk hanya menjalankan cron task tersebut.', //' Optionally you can specify a cron task name to run only the specified cron task.',
	'CLI_HELP_USER_ACTIVATE'	=> 'Aktifkan akun pengguna, atau non-aktifkan suatu akun menggunakan opsi <info>--deactivate</info>. 
Untuk mengirim e-mail aktivasi ke pengguna, gunakan opsi <info>--send-email</info>.', //'Activate a user account, or deactivate an account using the <info>--deactivate</info> option. 
//To optionally send an activation email to the user, use the <info>--send-email</info> option.',
	'CLI_HELP_USER_ADD'			=> 'Perintah <info>%command.name%</info>, menambah satu pengguna baru:
Apabila perintah ini dijalankan tanpa opsi apapun, anda akan diminta memasukkannya.
Untuk mengirim e-mail aktivasi ke pengguna, gunakan opsi <info>--send-email</info>.', //'The <info>%command.name%</info> command adds a new user:
//If this command is run without options, you will be prompted to enter them.
//To optionally send an email to the new user, use the <info>--send-email</info> option.',
	'CLI_HELP_USER_RECLEAN'		=> 'Membersihkan ulang seluruh username akan memeriksa semua username yang tersimpan dan memastikan versi yang sudah bersih juga tersimpan. Username yang sudah bersih tidak sensitif terhadap huruf besar/kecil, NFC dinormalisasi dan ditransformasi ke ASCII.', //'Re-clean usernames will check all stored usernames and ensure clean versions are also stored. Cleaned usernames are a case insensitive form, NFC normalized and transformed to ASCII.',
));
