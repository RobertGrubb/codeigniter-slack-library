<?php defined('BASEPATH') OR exit('No direct script access allowed');
/*
|--------------------------------------------------------------------------
| Slack Webhook Endpoint
|--------------------------------------------------------------------------
|
| Place your Webhook Endpoint here. Don't know where to get one? Simply
| Go to https://iratetech.slack.com/services and setup a custom webhook.
|
*/
$config['endpoint'] = 'PLACE_ENDPOINT_HERE';

/*
|--------------------------------------------------------------------------
| Default Bot Username
|--------------------------------------------------------------------------
|
| Name of your bot's default username.
|
*/
$config['username'] = 'config-slack-bot';

/*
|--------------------------------------------------------------------------
| Default Bot Icon
|--------------------------------------------------------------------------
|
| Your bot's default icon.
|
*/
$config['icon'] = ':ghost:';

/*
|--------------------------------------------------------------------------
| Default channels the bot will post to.
|--------------------------------------------------------------------------
|
| For multiple, use array (ex. ['channel1', 'channel2'])
|
*/
$config['channel'] = 'general';
