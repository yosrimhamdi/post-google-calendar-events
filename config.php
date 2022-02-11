<?php

define('DB_HOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'google_clendar_api');
 
define('GOOGLE_CLIENT_ID', '773010438034-f7scq65794ircgbmkh6qdkauq93bjrfi.apps.googleusercontent.com');
define('GOOGLE_CLIENT_SECRET', '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');
define('GOOGLE_OAUTH_SCOPE', 'https://www.googleapis.com/auth/calendar');
define('REDIRECT_URI', 'http://localhost:3000/google_calendar_event_sync.php');
 
if(!session_id()) {
    session_start(); 
}
 
$googleOauthURL = 
    'https://accounts.google.com/o/oauth2/auth?scope=' . urlencode(GOOGLE_OAUTH_SCOPE) .
    '&redirect_uri=' . REDIRECT_URI .
    '&response_type=code&client_id=' . GOOGLE_CLIENT_ID .
    '&access_type=online';
