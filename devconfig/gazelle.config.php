<?php
if (version_compare(PHP_VERSION, '7.0.0', '<')) {
  die("Gazelle requires PHP 7.0 or later to function properly");
}
date_default_timezone_set('EST');

// Main settings
define('SITE_NAME',     'Oppaitime'); //The name of your site
define('SITE_DOMAIN',   'localhost'); //The FQDN of your site
define('IMAGE_DOMAIN',  'img.oppaiti.me'); //The FQDN of your image host
define('SERVER_ROOT',   '/var/www'); //The root of the server, used for includes
define('TORRENT_STORE', '/var/torrents/'); //Where torrent files are stored

// Tracker urls to be added to torrent files ala bittorrent.org/beps/bep_0012.html
define('ANNOUNCE_URLS', [[
  'https://tracker.'.SITE_DOMAIN.':34001',
  'https://tracker2.'.SITE_DOMAIN.':34001',
  'https://tracker3.'.SITE_DOMAIN.':34001',
  'https://tracker4.'.SITE_DOMAIN.':34001'
]]);

// Name for bonus points currency
define('BONUS_POINTS', 'Nips');

// Don't hard code API keys for services
define('API_KEYS', ['ANIDB' => 'AAAAAAAAAAAAAAAA']);

// Allows you to run static content off another server. Default is usually what you want.
define('STATIC_SERVER', '/static/');

// The hashing algorithm used for SRI
define('INTEGRITY_ALGO', 'sha256');

// Keys
define('ENCKEY',       'FFDA48BDD7183F0A7A64DBA58508DA5'); // Random key. The key for encryption
define('IMAGE_PSK',    '62A71A8B9DF753DAA7F57FB9147A49B'); // Pre-shared key for generating hmacs for the image proxy
define('SCHEDULE_KEY', '08E2D97A8041BA364CE58C1DD486A4E19901D38C8A0E3B0CADE5A94C7200C3'); // Random key. This key must be the argument to schedule.php for the schedule to work.
define('RSS_HASH',     '66866AEC25E4D06910D7CA8B9BAEB67EDC12EBAA9D310BAED349C7E76BF13B'); // Random key. Used for generating unique RSS auth key.

// MySQL details
define('SQLHOST',  'mysql'); //The MySQL host ip/fqdn
define('SQLLOGIN', 'root');//The MySQL login
define('SQLPASS',  'toor'); //The MySQL password
define('SQLDB',    'gazelle'); //The MySQL database to use
define('SQLPORT',  3306); //The MySQL port to connect on
define('SQLSOCK',  '');

// Memcached details
define('MEMCACHED_SERVERS',
  [['host' => 'memcached', 'port' => 11211, 'buckets' => 1]]
);

// Sphinx details
define('SPHINX_HOST',        'sphinx');
define('SPHINX_PORT',        9312);
define('SPHINXQL_HOST',      'sphinx');
define('SPHINXQL_PORT',      9306);
define('SPHINXQL_SOCK',      false);
define('SPHINX_MIN_MAX_MATCHES', 2000); // Exclusively for fixing total number of default search results. Raise as necessary
define('SPHINX_INDEX',       'torrents');

// Ocelot details
define('TRACKER_HOST',      'ocelot');
define('TRACKER_PORT',      34000);
define('TRACKER_SECRET',    'E9B80DBB86FD60B3DCDE1B6F752451B'); // Must be 32 characters and match site_password in Ocelot's config.cpp
define('TRACKER_REPORTKEY', 'D0449EE72C42E6A6815C992726CC78C'); // Must be 32 characters and match report_password in Ocelot's config.cpp

// Site settings
define('DEBUG_MODE',        true); //Set to false if you dont want everyone to see debug information, can be overriden with 'site_debug'
define('DEBUG_WARNINGS',    true); //Set to true if you want to see PHP warnings in the footer
define('OPEN_REGISTRATION', true); //Set to false to disable open regirstration, true to allow anyone to register
define('USER_LIMIT',        0); //The maximum number of users the site can have, 0 for no limit
define('STARTING_INVITES',  0); //# of invites to give to newly registered users
define('BLOCK_TOR',         false); //Set to true to block Tor users
define('BLOCK_OPERA_MINI',  false); //Set to true to block Opera Mini proxy
define('DONOR_INVITES',     2);

// Features
define('FEATURE_EMAIL_REENABLE', true);

// User class IDs needed for automatic promotions. Found in the 'permissions' table
// Name of class  Class ID (NOT level)
define('ADMIN',          '1');
define('USER',           '2');
define('MEMBER',         '3');
define('POWER',          '4');
define('ELITE',          '5');
define('LEGEND',         '8');
define('MOD',            '11');
define('SYSOP',          '15');
define('ARTIST',         '19');
define('DONOR',          '20');
define('VIP',            '21');
define('TORRENT_MASTER', '23');
define('POWER_TM',       '24');
define('FLS_TEAM',       '9000');
define('FORUM_MOD',      '9001');

// Forums
define('STAFF_FORUM',           7);
define('DONOR_FORUM',           9);
define('TRASH_FORUM_ID',        4);
define('ANNOUNCEMENT_FORUM_ID', 10);

// Pagination
define('TORRENT_COMMENTS_PER_PAGE', 10);
define('POSTS_PER_PAGE',            25);
define('TOPICS_PER_PAGE',           50);
define('TORRENTS_PER_PAGE',         50);
define('REQUESTS_PER_PAGE',         25);
define('MESSAGES_PER_PAGE',         25);
define('LOG_ENTRIES_PER_PAGE',      50);

// Cache catalogues
define('THREAD_CATALOGUE', 500); // Limit to THREAD_CATALOGUE posts per cache key.

// IRC settings
define('BOT_NICK',              'bot');
define('BOT_SERVER',            'irc.'.SITE_DOMAIN); // IRC server address. Used for onsite chat tool.
define('BOT_PORT',              6667);
define('BOT_CHAN',              '#bot');
define('BOT_ANNOUNCE_CHAN',     '#announce');
define('BOT_REQUEST_CHAN',      '#requests');
define('BOT_STAFF_CHAN',        '#staff');
define('BOT_DISABLED_CHAN',     '#disabled'); // Channel to refer disabled users to.
define('BOT_HELP_CHAN',         '#help');
define('BOT_DEBUG_CHAN',        '#debug');
define('BOT_REPORT_CHAN',       '#report');
define('BOT_NICKSERV_PASS',     '');
define('BOT_INVITE_CHAN',       '#invites'); // Channel for non-members seeking an interview
define('BOT_INTERVIEW_CHAN',    '#interview'); // Channel for the interviews
define('BOT_INTERVIEW_NUM',     5);
define('BOT_INTERVIEW_STAFF',   '#interview-staff'); // Channel for the interviewers
define('SOCKET_LISTEN_PORT',    51010);
define('SOCKET_LISTEN_ADDRESS', '8.8.8.8');
define('ADMIN_CHAN',            '#admin');
define('LAB_CHAN',              '#lab');
define('STATUS_CHAN',           '#status');

// Miscellaneous values
define('RANK_ONE_COST',    5);
define('RANK_TWO_COST',    10);
define('RANK_THREE_COST',  15);
define('RANK_FOUR_COST',   20);
define('RANK_FIVE_COST',   30);
define('MAX_RANK',         6);
define('MAX_EXTRA_RANK',   8);
define('DONOR_FORUM_RANK', 6);
define('MAX_SPECIAL_RANK', 3);

define('FORUMS_TO_REVEAL_VOTERS',      []);
define('FORUMS_TO_ALLOW_DOUBLE_POST', []);

$Categories = array('Movies', 'Anime', 'Manga', 'Games', 'Other');
$GroupedCategories = $Categories;
$CategoryIcons = array('music.png', 'apps.png', 'ebook.png', 'audiobook.png', 'elearning.png', 'comedy.png', 'comics.png');

$Media = array('TV', 'DVD', 'Bluray', 'HD DVD', 'VHS', 'VCD', 'LD', 'Web');
$MediaManga = array('Scan', 'Web');
$Platform = array('Windows', 'OS X', 'Linux', 'BSD', 'Flash', 'Java', 'Android', 'iOS');
$Containers = array('AVI', 'MKV', 'MP4', 'OGM', 'WMV', 'ISO', 'VOB IFO', 'TS', 'M2TS');
$ContainersGames = array('ISO', 'BIN-CUE', 'Installer', 'Loose');
$Codecs = array('h264', '10-bit h264', 'XviD', 'DivX', 'WMV', 'DVD5', 'DVD9', 'HEVC', 'MPEG-2');
$Resolutions = array('SD', '480p', '720p', '1080i', '1080p', '4K', 'Other');
$AudioFormats = array('MP3', 'OGG', 'OGG 5.1', 'AAC', 'AAC 5.1', 'AC3', 'AC3 5.1', 'DTS 2.0', 'DTS 5.1', 'DTS-ES 6.1', 'FLAC 2.0', 'FLAC 5.1', 'FLAC 6.1', 'PCM 2.0', 'PCM 5.1', 'PCM 6.1', 'WMA', 'Real Audio', 'DTS-HD', 'DTS-HD MA');
$Subbing = array('Softsubs', 'Hardsubs', 'RAW');
$Languages = array('English', 'Japanese', 'Dual Language');
$Archives = array('7z', 'zip', 'rar');
$ArchivesManga = array('cbz', 'cbr', 'cb7');

$Formats = array('MP3', 'FLAC', 'Ogg Vorbis', 'AAC', 'AC3', 'DTS');
$Bitrates = array('192', 'APS (VBR)', 'V2 (VBR)', 'V1 (VBR)', '256', 'APX (VBR)', 'V0 (VBR)', 'q8.x (VBR)', '320', 'Lossless', '24bit Lossless', 'Other');

$CollageCats = array(0=>'Personal', 1=>'Theme', 2=>'Staff picks', 3=>'Artists');

$ReleaseTypes = array(1=>'Album', 3=>'Soundtrack', 5=>'EP', 6=>'Anthology', 7=>'Compilation', 9=>'Single', 11=>'Live album', 13=>'Remix', 14=>'Bootleg', 15=>'Interview', 16=>'Mixtape', 21=>'Unknown');

// Ratio requirements, in descending order
// Columns: Download amount, Req Ratio (0% seeded), Req Ratio (100% seeded)
define('RATIO_REQUIREMENTS', [
  [200 * 1024**3, 0.60, 0.60],
  [160 * 1024**3, 0.60, 0.50],
  [120 * 1024**3, 0.50, 0.40],
  [100 * 1024**3, 0.40, 0.30],
  [80  * 1024**3, 0.30, 0.20],
  [60  * 1024**3, 0.20, 0.10],
  [40  * 1024**3, 0.15, 0.00],
  [20  * 1024**3, 0.10, 0.00],
  [10  * 1024**3, 0.05, 0.00],
]);

define('TAG_NAMESPACES', ['male', 'female', 'parody', 'character']);

// God I wish I didn't have to do this but I just don't care anymore.
define('AUTOMATED_BADGE_IDS', [
  'DL' => [
    '8' => 10,
    '16' => 11,
    '32' => 12,
    '64' => 13,
    '128' => 14,
    '256' => 15,
    '512' => 16,
    '1024' => 17,
    '2048' => 18
  ],
  'UL' => [
    '16'   => 30,
    '32'   => 31,
    '64'   => 32,
    '128'  => 33,
    '256'  => 34,
    '512'  => 35,
    '1024' => 36,
    '2048' => 37,
    '4096' => 38
  ],
  'Posts' => [
    '25'    => 60,
    '50'    => 61,
    '100'   => 62,
    '250'   => 63,
    '500'   => 64,
    '1000'  => 65,
    '2500'  => 66,
    '5000'  => 67,
    '10000' => 68
  ]
]);
?>
