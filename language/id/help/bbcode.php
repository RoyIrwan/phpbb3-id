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

/**
 * DO NOT CHANGE
 */
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'HELP_BBCODE_BLOCK_IMAGES'	=> 'Menampilkan gambar pada post', // 'Showing images in posts',
	'HELP_BBCODE_BLOCK_INTRO'	=> 'Pengenalan', //'Introduction',
	'HELP_BBCODE_BLOCK_LINKS'	=> 'Membuat Pranala', // 'Creating Links',
	'HELP_BBCODE_BLOCK_LISTS'	=> 'Membuat list', // 'Generating lists',
	'HELP_BBCODE_BLOCK_OTHERS'	=> 'Hal lain', //'Other matters',
	'HELP_BBCODE_BLOCK_QUOTES'	=> 'Mengutip dan menampilkan teks fixed-width', // 'Quoting and outputting fixed-width text',
	'HELP_BBCODE_BLOCK_TEXT'	=> 'Memformat Teks', //'Text Formatting',

	'HELP_BBCODE_IMAGES_ATTACHMENT_ANSWER'	=> 'Lampiran sekarang bisa ditempatkan di bagian manapun dari posting dengan menggunakan BBCode baru <strong>[attachment=][/attachment]</strong>, jika fungsi lampiran sudah diaktifkan oleh administrator dan jika pengguna sudah diberi hak akses yang cukup untuk membuat lampiran. Dalam layar posting ada kotak drop-down (dan masing-masing ada tombol) untuk menempatkan lampiran pada baris yang sama.', //'Attachments can now be placed in any part of a post by using the new <strong>[attachment=][/attachment]</strong> BBCode, if the attachments functionality has been enabled by a board administrator and if you are given the appropriate permissions to create attachments. Within the posting screen is a drop-down box (respectively a button) for placing attachments inline.',
	'HELP_BBCODE_IMAGES_ATTACHMENT_QUESTION'	=> 'Menambahkan lampiran ke satu post', //'Adding attachments into a post',
	'HELP_BBCODE_IMAGES_BASIC_ANSWER'	=> 'phpBB BBCode menambahkan satu tag untuk menampilkan gambar pada postingan. Dua hal yang sangat penting untuk diingat, ketika menggunakan tag ini: banyak pengguna yang tidak suka banyak gambar ditampilkan pada post, dan kedua, gambar yang ingin ditampilkan harus sudah tersedia di internet (tidak bisa menggunakan gambar dari komputer misalnya, kecuali komputer tersebut juga merupakan webserver!). Untuk menampilkan satu gambar, tutup URL gambar dengan tag <strong>[img][/img]</strong>. Contohnya:<br /><br /><strong>[img]</strong>https://www.phpbb.com/theme/images/logos/blue/160x52.png<strong>[/img]</strong><br /><br />Seperti disebutkan pada bagian URL di atas, jika diinginkan dapat menggunakan tag <strong>[url][/url]</strong>, sebagai contoh, <br /><br /><strong>[url=https://www.phpbb.com/][img]</strong>https://www.phpbb.com/theme/images/logos/blue/160x52.png<strong>[/img][/url]</strong><br /><br />akan menjadi:<br /><br /><a href="https://www.phpbb.com/"><img src="https://www.phpbb.com/theme/images/logos/blue/160x52.png" alt="" /></a>',
		//'phpBB BBCode incorporates a tag for including images in your posts. Two very important things to remember when using this tag are: many users do not appreciate lots of images being shown in posts and secondly the image you display must already be available on the internet (it cannot exist only on your computer for example, unless you run a webserver!). To display an image you must surround the URL pointing to the image with <strong>[img][/img]</strong> tags. For example:<br /><br /><strong>[img]</strong>https://www.phpbb.com/theme/images/logos/blue/160x52.png<strong>[/img]</strong><br /><br />As noted in the URL section above you can wrap an image in a <strong>[url][/url]</strong> tag if you wish, e.g.<br /><br /><strong>[url=https://www.phpbb.com/][img]</strong>https://www.phpbb.com/theme/images/logos/blue/160x52.png<strong>[/img][/url]</strong><br /><br />would generate:<br /><br /><a href="https://www.phpbb.com/"><img src="https://www.phpbb.com/theme/images/logos/blue/160x52.png" alt="" /></a>',
	'HELP_BBCODE_IMAGES_BASIC_QUESTION'	=> 'Menambahkan satu gambar ke post', //'Adding an image to a post',

	'HELP_BBCODE_INTRO_BBCODE_ANSWER'	=> 'BBCode adalah implementasi khusus dari HTML. BBCode dapat digunakan dalam postingan atau tidak ditentukan oleh administrator. BBCode bisa dinonaktifkan pada satuan posting tertentu melalui formulir postingan. Format BBCode sendiri mirip dengan HTML, tag diletakkan dalam kurung siku [ dan ] bukan menggunakan &lt; dan &gt; dan ini memberikan kontrol lebih pada apa dan bagaimana sesuatu ditampilkan. Tergantung pada template yang digunakan, menambahkan BBCode pada postingan akan lebih mudah dengan mengklik tampilan di atas area pesan editor pada formulir postingan. Walaupun demikian, panduan berikutnya mungkin tetap bermanfaat.',
										// 'BBCode is a special implementation of HTML. Whether you can actually use BBCode in your posts on the forum is determined by the administrator. In addition you can disable BBCode on a per post basis via the posting form. BBCode itself is similar in style to HTML, tags are enclosed in square brackets [ and ] rather than &lt; and &gt; and it offers greater control over what and how something is displayed. Depending on the template you are using you may find adding BBCode to your posts is made much easier through a clickable interface above the message area on the posting form. Even with this you may find the following guide useful.',
	'HELP_BBCODE_INTRO_BBCODE_QUESTION'	=> 'Apa itu BBCode?', //'What is BBCode?',

	'HELP_BBCODE_LINKS_BASIC_ANSWER'	=> 'phpBB BBCode mendukung beberapa cara untuk membuat URI (Uniform Resource Indicators) yang lebih dikenal dengan URL.<ul><li>Yang pertama menggunakan tag <strong>[url=][/url]</strong>, apapun yang diketik setelah tanda = akan membuat isi tag tersebut menjadi URL. Contohnya untuk membuat tautan (link) ke phpBB.com, bisa menggunakan:<br /><br /><strong>[url=https://www.phpbb.com/]</strong>Kunjungi phpBB!<strong>[/url]</strong><br /><br />Ini akan menjadi tautan berikut ini, <a href="https://www.phpbb.com/">Kunjungi phpBB!</a> Mohon diingat, tautan apabila diklik akan dibuka pada jendela yang sama atau jendela baru, tergantung pada opsi pada browser pengguna.</li><li>Jika URL tersebut ditampilkan sebagai tautan, bisa menggunakan:<br /><br /><strong>[url]</strong>https://www.phpbb.com/<strong>[/url]</strong><br /><br />Ini akan menjadi tautan berikut, <a href="https://www.phpbb.com/">https://www.phpbb.com/</a></li><li>Sebagai tambahan, phpBB juga dapat melakukan apa yang disebut <i>Magic Links</i>, ini akan membuat URL, yang secara sintaksis sudah benar, otomatis menjadi tautan tanpa harus menggunakan tag apapun bahkan walau tanpa awalan http://. Sebagai contoh, mengetik www.phpbb.com pada pesan, akan otomatis ditampilkan sebagai <a href="http://www.phpbb.com/">www.phpbb.com</a> pada tampilan pesan.</li><li>Hal yang sama juga berlaku untuk alamat e-mail. Bisa secara eksplisit seperti contoh:<br /><br /><strong>[email]</strong>no.one@domain.adr<strong>[/email]</strong><br /><br />yang akan menjadi <a href="mailto:no.one@domain.adr">no.one@domain.adr</a> atau cukup diketik no.one@domain.adr pada pesan dan akan dikonversi otomatis setelah pesan ditampilkan.</li></ul>Seperti semua tag BBCode, tag URL dapat ditutup oleh tag lainnya seperti <strong>[img][/img]</strong> (lihat entri selanjutnya), <strong>[b][/b]</strong>, dan seterusnya. Pastikan format tag sesuai urutan buka dan tutupnya, seperti contoh:<br /><br /><strong>[url=https://www.phpbb.com/][img]</strong>https://www.phpbb.com/theme/images/logos/blue/160x52.png<strong>[/url][/img]</strong><br /><br />adalah <span style="text-decoration: underline">tidak</span> benar yang dapat menyebabkan pesan terhapus, hati-hati.',
										// 'phpBB BBCode supports a number of ways of creating URIs (Uniform Resource Indicators) better known as URLs.<ul><li>The first of these uses the <strong>[url=][/url]</strong> tag, whatever you type after the = sign will cause the contents of that tag to act as a URL. For example to link to phpBB.com you could use:<br /><br /><strong>[url=https://www.phpbb.com/]</strong>Visit phpBB!<strong>[/url]</strong><br /><br />This would generate the following link, <a href="https://www.phpbb.com/">Visit phpBB!</a> Please notice that the link opens in the same window or a new window depending on the users browser preferences.</li><li>If you want the URL itself displayed as the link you can do this by simply using:<br /><br /><strong>[url]</strong>https://www.phpbb.com/<strong>[/url]</strong><br /><br />This would generate the following link, <a href="https://www.phpbb.com/">https://www.phpbb.com/</a></li><li>Additionally, phpBB features something called <i>Magic Links</i>, this will turn any syntactically correct URL into a link without you needing to specify any tags or even the leading http://. For example typing www.phpbb.com into your message will automatically lead to <a href="http://www.phpbb.com/">www.phpbb.com</a> being output when you view the message.</li><li>The same thing applies equally to email addresses, you can either specify an address explicitly for example:<br /><br /><strong>[email]</strong>no.one@domain.adr<strong>[/email]</strong><br /><br />which will output <a href="mailto:no.one@domain.adr">no.one@domain.adr</a> or you can just type no.one@domain.adr into your message and it will be automatically converted when you view.</li></ul>As with all the BBCode tags you can wrap URLs around any of the other tags such as <strong>[img][/img]</strong> (see next entry), <strong>[b][/b]</strong>, etc. As with the formatting tags it is up to you to ensure the correct open and close order is following, for example:<br /><br /><strong>[url=https://www.phpbb.com/][img]</strong>https://www.phpbb.com/theme/images/logos/blue/160x52.png<strong>[/url][/img]</strong><br /><br />is <span style="text-decoration: underline">not</span> correct which may lead to your post being deleted so take care.',
	'HELP_BBCODE_LINKS_BASIC_QUESTION'	=> 'Tautan ke situs lain', // 'Linking to another site',

	'HELP_BBCODE_LISTS_ORDERER_ANSWER'	=> 'List jenis kedua, list numbering, memberikan kontrol apa yang ditampilkan tiap awal baris. Untuk membuat list numbering, gunakan <strong>[list=1][/list]</strong> untuk membuat list dengan angka atau dengan cara <strong>[list=a][/list]</strong> untuk list dengan huruf abjad. Sama seperti list bullet, tiap item menggunakan <strong>[*]</strong>. Contohnya:<br /><br /><strong>[list=1]</strong><br /><strong>[*]</strong>Pergi berbelanja<br /><strong>[*]</strong>Beli komputer baru<br /><strong>[*]</strong>Ngomel ke komputer kalau nge-hang<br /><strong>[/list]</strong><br /><br />akan digenerate menjadi:<ol style="list-style-type: decimal;"><li>Pergi berbelanja</li><li>Beli komputer baru</li><li>Ngomel ke komputer kalau nge-hang</li></ol>Di mana jika list alfabetikal, menggunakan:<br /><br /><strong>[list=a]</strong><br /><strong>[*]</strong>Jawaban paling mungkin pertama<br /><strong>[*]</strong>Jawaban paling mungkin kedua<br /><strong>[*]</strong>Jawaban paling mungkin ketiga<br /><strong>[/list]</strong><br /><br />akan menjadi<ol style="list-style-type: lower-alpha"><li>Jawaban paling mungkin pertama</li><li>Jawaban paling mungkin kedua</li><li>Jawaban paling mungkin ketiga</li></ol><br /><strong>[list=A]</strong><br /><strong>[*]</strong>Jawaban paling mungkin pertama<br /><strong>[*]</strong>Jawaban paling mungkin kedua<br /><strong>[*]</strong>Jawaban paling mungkin ketiga<br /><strong>[/list]</strong><br /><br />akan menjadi<ol style="list-style-type: upper-alpha"><li>Jawaban paling mungkin pertama</li><li>Jawaban paling mungkin kedua</li><li>Jawaban paling mungkin ketiga</li></ol><br /><strong>[list=i]</strong><br /><strong>[*]</strong>Jawaban paling mungkin pertama<br /><strong>[*]</strong>Jawaban paling mungkin kedua<br /><strong>[*]</strong>Jawaban paling mungkin ketiga<br /><strong>[/list]</strong><br /><br />akan menjadi<ol style="list-style-type: lower-roman"><li>Jawaban paling mungkin pertama</li><li>Jawaban paling mungkin kedua</li><li>Jawaban paling mungkin ketiga</li></ol><br /><strong>[list=I]</strong><br /><strong>[*]</strong>Jawaban paling mungkin pertama<br /><strong>[*]</strong>Jawaban paling mungkin kedua<br /><strong>[*]</strong>Jawaban paling mungkin ketiga<br /><strong>[/list]</strong><br /><br />akan menjadi<ol style="list-style-type: upper-roman"><li>Jawaban paling mungkin pertama</li><li>Jawaban paling mungkin kedua</li><li>Jawaban paling mungkin ketiga</li></ol>',
										// 'The second type of list, an ordered list, gives you control over what is output before each item. To create an ordered list you use <strong>[list=1][/list]</strong> to create a numbered list or alternatively <strong>[list=a][/list]</strong> for an alphabetical list. As with the unordered list, items are specified using <strong>[*]</strong>. For example:<br /><br /><strong>[list=1]</strong><br /><strong>[*]</strong>Go to the shops<br /><strong>[*]</strong>Buy a new computer<br /><strong>[*]</strong>Swear at computer when it crashes<br /><strong>[/list]</strong><br /><br />will generate the following:<ol style="list-style-type: decimal;"><li>Go to the shops</li><li>Buy a new computer</li><li>Swear at computer when it crashes</li></ol>Whereas for an alphabetical list you would use:<br /><br /><strong>[list=a]</strong><br /><strong>[*]</strong>The first possible answer<br /><strong>[*]</strong>The second possible answer<br /><strong>[*]</strong>The third possible answer<br /><strong>[/list]</strong><br /><br />giving<ol style="list-style-type: lower-alpha"><li>The first possible answer</li><li>The second possible answer</li><li>The third possible answer</li></ol><br /><strong>[list=A]</strong><br /><strong>[*]</strong>The first possible answer<br /><strong>[*]</strong>The second possible answer<br /><strong>[*]</strong>The third possible answer<br /><strong>[/list]</strong><br /><br />giving<ol style="list-style-type: upper-alpha"><li>The first possible answer</li><li>The second possible answer</li><li>The third possible answer</li></ol><br /><strong>[list=i]</strong><br /><strong>[*]</strong>The first possible answer<br /><strong>[*]</strong>The second possible answer<br /><strong>[*]</strong>The third possible answer<br /><strong>[/list]</strong><br /><br />giving<ol style="list-style-type: lower-roman"><li>The first possible answer</li><li>The second possible answer</li><li>The third possible answer</li></ol><br /><strong>[list=I]</strong><br /><strong>[*]</strong>The first possible answer<br /><strong>[*]</strong>The second possible answer<br /><strong>[*]</strong>The third possible answer<br /><strong>[/list]</strong><br /><br />giving<ol style="list-style-type: upper-roman"><li>The first possible answer</li><li>The second possible answer</li><li>The third possible answer</li></ol>',
	'HELP_BBCODE_LISTS_ORDERER_QUESTION'	=> 'Membuat List Numbering', //'Creating an Ordered list',
	'HELP_BBCODE_LISTS_UNORDERER_ANSWER'	=> 'BBCode mendukung dua jenis list, list bullet dan numbering. Pada dasarnya kedua jenis list ini sama dengan padanan tag HTML masing-masing. List bullet akan menampilkan tiap baris dalam list numbering diawali dan di-indent dengan karakter bullet. Untuk membuat list bullet, gunakan <strong>[list][/list]</strong> dan definisikan tiap baris dalam list menggunakan <strong>[*]</strong>. Sebagai contoh untuk list warna favorit, dapat menggunakan:<br /><br /><strong>[list]</strong><br /><strong>[*]</strong>Merah<br /><strong>[*]</strong>Biru<br /><strong>[*]</strong>Kuning<br /><strong>[/list]</strong><br /><br />Ini akan di-generate menjadi list sebagai berikut:<ul><li>Merah</li><li>Biru</li><li>Kuning</li></ul><br />List juga bisa dibuat dengan berbagai jenis karakter bullet <strong>[list=disc][/list]</strong>, <strong>[list=circle][/list]</strong>, atau <strong>[list=square][/list]</strong>.',
											// 'BBCode supports two types of lists, unordered and ordered. They are essentially the same as their HTML equivalents. An unordered list outputs each item in your list sequentially one after the other indenting each with a bullet character. To create an unordered list you use <strong>[list][/list]</strong> and define each item within the list using <strong>[*]</strong>. For example to list your favourite colours you could use:<br /><br /><strong>[list]</strong><br /><strong>[*]</strong>Red<br /><strong>[*]</strong>Blue<br /><strong>[*]</strong>Yellow<br /><strong>[/list]</strong><br /><br />This would generate the following list:<ul><li>Red</li><li>Blue</li><li>Yellow</li></ul><br />Alternatively you can specify the list’s bullet style using <strong>[list=disc][/list]</strong>, <strong>[list=circle][/list]</strong>, or <strong>[list=square][/list]</strong>.',
	'HELP_BBCODE_LISTS_UNORDERER_QUESTION'	=> 'Membuat List Bullet', // 'Creating an Unordered list',

	'HELP_BBCODE_OTHERS_CUSTOM_ANSWER'	=> 'Seorang administrator pada forum dan memiliki hak akses yang cukup, dapat menambahkan BBCode lebih banyak melalui bagian Custom BBCode.',
										// 'If you are an administrator on this board and have the proper permissions, you can add further BBCodes through the Custom BBCodes section.',
	'HELP_BBCODE_OTHERS_CUSTOM_QUESTION'	=> 'Dapatkah menambahkan tag buatan sendiri?', //'Can I add my own tags?',

	'HELP_BBCODE_QUOTES_CODE_ANSWER'	=> 'Jika dibutuhkan untuk menampilkan potongan skrip atau teks dengan font yg memiliki sama lebar (fixed width), contohnya font Courier, tutup teks tersebut menggunakan tag <strong>[code][/code]</strong>, contoh<br /><br /><strong>[code]</strong>echo &quot;Skrip yang sama&quot;;<strong>[/code]</strong><br /><br />Semua format teks dalam tag <strong>[code][/code]</strong> akan tetap bertahan ketika posting ditampilkan.',
										// 'If you want to output a piece of code or in fact anything that requires a fixed width, e.g. Courier type font you should enclose the text in <strong>[code][/code]</strong> tags, e.g.<br /><br /><strong>[code]</strong>echo &quot;This is some code&quot;;<strong>[/code]</strong><br /><br />All formatting used within <strong>[code][/code]</strong> tags is retained when you later view it.',
	'HELP_BBCODE_QUOTES_CODE_QUESTION'	=> 'Menampilkan code/skrip atau data fixed width (sama lebar)', //'Outputting code or fixed width data',
	'HELP_BBCODE_QUOTES_TEXT_ANSWER'	=> 'Ada dua cara mengutip teks, dengan atau tanpa referensi.<ul><li>Apabila menggunakan tombol Kutip untuk membalas suatu posting dalam forum, teks pada posting tersebut akan ditambahkan pada jendela pesan ditutup oleh blok <strong>[quote=&quot;&quot;][/quote]</strong>. Cara ini akan mengutip dan menampilkan tautan referensi ke pengguna atau apapun! Contohnya, untuk mengutip potongan teks yang Pak Budi tulis, dapat menggunakan:<br /><br /><strong>[quote=&quot;Pak Budi&quot;]</strong>Teks yang Pak Budi tulis ada di sini<strong>[/quote]</strong><br /><br />Pada output tampilan pesan akan otomatis ditambahkan &quot;Pak Budi menulis:&quot; sebelum teks yang dikutip. Ingat, <strong>wajib</strong> untuk menyertakan tanda kutip &quot;&quot; pada nama yang dikutio, tanda kutip bukan opsional, tapi wajib.</li><li>Cara kedua adalah mengutip tanpa menyertakan referensi apa-apa. Gunakan tag in <strong>[quote][/quote]</strong>. Pada saat pesan ditampilkan, akan terlihat teks dalam blok kutipan/kuotasi.</li></ul>',
										// 'There are two ways you can quote text, with a reference or without.<ul><li>When you utilise the Quote function to reply to a post on the board you should notice that the post text is added to the message window enclosed in a <strong>[quote=&quot;&quot;][/quote]</strong> block. This method allows you to quote with a reference to a person or whatever else you choose to put! For example to quote a piece of text Mr. Blobby wrote you would enter:<br /><br /><strong>[quote=&quot;Mr. Blobby&quot;]</strong>The text Mr. Blobby wrote would go here<strong>[/quote]</strong><br /><br />The resulting output will automatically add &quot;Mr. Blobby wrote:&quot; before the actual text. Remember you <strong>must</strong> include the quotation marks &quot;&quot; around the name you are quoting, they are not optional.</li><li>The second method allows you to blindly quote something. To utilise this enclose the text in <strong>[quote][/quote]</strong> tags. When you view the message it will simply show the text within a quotation block.</li></ul>',
	'HELP_BBCODE_QUOTES_TEXT_QUESTION'	=>  'Mengutip teks pada posting jawaban', // 'Quoting text in replies',

	'HELP_BBCODE_TEXT_BASIC_ANSWER'	=> 'BBCode menyertakan beberapa tag yang dapat dengan mudah merubah style dasar teks. Dengan beberapa cara berikut: <ul><li>Untuk membuat huruf tebal, gunakan tag <strong>[b][/b]</strong>, contoh, <br /><br /><strong>[b]</strong>Halo<strong>[/b]</strong><br /><br />akan menjadi <strong>Halo</strong></li><li>Untuk garis bawah, gunakan <strong>[u][/u]</strong>, contoh:<br /><br /><strong>[u]</strong>Selamat Pagi<strong>[/u]</strong><br /><br />akan menjadi <span style="text-decoration: underline">Selamat Pagi</span></li><li>Untuk huruf miring, gunakan <strong>[i][/i]</strong>, contoh,<br /><br />Ini <strong>[i]</strong>bagus sekali!<strong>[/i]</strong><br /><br />akan menjadi Ini <i>bagus sekali!</i></li></ul>',
									// 'BBCode includes tags to allow you to quickly change the basic style of your text. This is achieved in the following ways: <ul><li>To make a piece of text bold enclose it in <strong>[b][/b]</strong>, e.g. <br /><br /><strong>[b]</strong>Hello<strong>[/b]</strong><br /><br />will become <strong>Hello</strong></li><li>For underlining use <strong>[u][/u]</strong>, for example:<br /><br /><strong>[u]</strong>Good Morning<strong>[/u]</strong><br /><br />becomes <span style="text-decoration: underline">Good Morning</span></li><li>To italicise text use <strong>[i][/i]</strong>, e.g.<br /><br />This is <strong>[i]</strong>Great!<strong>[/i]</strong><br /><br />would give This is <i>Great!</i></li></ul>',
	'HELP_BBCODE_TEXT_BASIC_QUESTION'	=> 'Bagaimana cara membuat huruf tebal, miring dan bergaris bawah', //'How to create bold, italic and underlined text',
	'HELP_BBCODE_TEXT_COLOR_ANSWER'	=> 'Untuk mengganti warna atau ukuran teks, dapat menggunakan beberapa tag berikut. Perlu diingat bahwa tampilan akhir akan tergantung dari browser dan sistem yang digunakan: <ul><li>Mengganti warna teks menggunakan tag <strong>[color=][/color]</strong>. Bisa menggunakan nama warna dalam bahasa Inggris (seperti red, blue, yellow dan seterusnya) atau dengan nilai RGB triplet heksadesimal, misalnya, #FFFFFF, #000000. Sebagai contoh, untuk membuat teks dengan warna merah:<br /><br /><strong>[color=red]</strong>Halo!<strong>[/color]</strong><br /><br />atau<br /><br /><strong>[color=#FF0000]</strong>Halo!<strong>[/color]</strong><br /><br />Keduanya akan menjadi <span style="color:red">Halo!</span></li><li>Merubah ukuran huruf juga dapat dilakukan dengan cara yang hampir sama, menggunakan <strong>[size=][/size]</strong>. Tag ini tergantung dari template forum yang digunakan, tapi disanrankan untuk menggunakan format nilai numerik dalam persen, mulai dari ukuran standar 20 (sangat kecil) sampai dengan 200 (sangat besar). Contoh:<br /><br /><strong>[size=30]</strong>KECIL<strong>[/size]</strong><br /><br />akan menjadi <span style="font-size:30%;">KECIL</span><br /><br />sementara:<br /><br /><strong>[size=200]</strong>RAKSASA!<strong>[/size]</strong><br /><br />akan menjadi <span style="font-size:200%;">RAKSASA!</span></li></ul>',
									// 'To alter the colour or size of your text the following tags can be used. Keep in mind that how the output appears will depend on the viewers browser and system: <ul><li>Changing the colour of text is achieved by wrapping it in <strong>[color=][/color]</strong>. You can specify either a recognised colour name (eg. red, blue, yellow, etc.) or the hexadecimal triplet alternative, e.g. #FFFFFF, #000000. For example, to create red text you could use:<br /><br /><strong>[color=red]</strong>Hello!<strong>[/color]</strong><br /><br />or<br /><br /><strong>[color=#FF0000]</strong>Hello!<strong>[/color]</strong><br /><br />Both will output <span style="color:red">Hello!</span></li><li>Changing the text size is achieved in a similar way using <strong>[size=][/size]</strong>. This tag is dependent on the template the user has selected but the recommended format is a numerical value representing the text size in percent, starting at 20 (very small) through to 200 (very large) by default. For example:<br /><br /><strong>[size=30]</strong>SMALL<strong>[/size]</strong><br /><br />will generally be <span style="font-size:30%;">SMALL</span><br /><br />whereas:<br /><br /><strong>[size=200]</strong>HUGE!<strong>[/size]</strong><br /><br />will be <span style="font-size:200%;">HUGE!</span></li></ul>',
	'HELP_BBCODE_TEXT_COLOR_QUESTION'	=> 'Bagaimana cara mengganti warna atau ukuran teks', //'How to change the text colour or size',
	'HELP_BBCODE_TEXT_COMBINE_ANSWER'	=> 'Ya, tentu bisa, untuk dapat perhatian lebih dari pembaca, dapat ditulis:<br /><br /><strong>[size=200][color=red][b]</strong>BACA AKU!<strong>[/b][/color][/size]</strong><br /><br />outputnya akan menjadi <span style="color:red;font-size:200%;"><strong>BACA AKU!</strong></span><br /><br />Tidak disarankan menggunakan ukuran teks ini terlalu sering! Namun pastikan semua tag tertutup sesuai urutan dan benar. Berikut contoh yang salah:<br /><br /><strong>[b][u]</strong>Ini salah<strong>[/b][/u]</strong>',
										// 'Yes, of course you can, for example to get someones attention you may write:<br /><br /><strong>[size=200][color=red][b]</strong>LOOK AT ME!<strong>[/b][/color][/size]</strong><br /><br />this would output <span style="color:red;font-size:200%;"><strong>LOOK AT ME!</strong></span><br /><br />We don’t recommend you output lots of text that looks like this though! Remember it is up to you, the poster, to ensure tags are closed correctly. For example the following is incorrect:<br /><br /><strong>[b][u]</strong>This is wrong<strong>[/b][/u]</strong>',
	'HELP_BBCODE_TEXT_COMBINE_QUESTION'	=> 'Dapatkan tag dikombinasikan?', //'Can I combine formatting tags?',
));