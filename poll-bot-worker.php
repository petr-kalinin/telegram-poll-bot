<?php

set_time_limit(0);

require_once 'PollBot.php';

define('BOT_TOKEN', getenv("TOKEN"));

$bot = new PollBot(BOT_TOKEN, 'PollBotChat');
$bot->runLongpoll();
