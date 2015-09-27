### Simple Codeigniter Slack Notification Library

Looking to send Slack notifications from your CodeIgniter application, yet every library you found is bulky and includes a bunch of functionality that your're not going to use? No problem! This library is used for one thing, and one thing only; Sending a notification to your Slack channel(s).

#### Installation:

 1. Copy items from **src** to  your applications *root directory*.
 2. Check "Example Usage" below for how to use this library.

#### Supported Variables:

 - **$username** - Sets the username of the bot.
 - **$icon** - Sets the icon/avatar of the bot.
 - **$channel** - Sets the channel you will send the message to. (Can support multiple channels by using an array. See FAQS below).
 - **$endpoint** - Slack Webhook Endpoint URL.
 - **$output** - Holds the response from Slack after sending a notification. (In ARRAY format).
 - **$error** - In case of an error, you can check what the error is by access this variable after sent.

#### Config File:

This library also comes with a config file that can be used for this library if you are looking towards using this library for more "static" messages. (ex. Same channel(s) at all times, same bot name, and icon). You can simply edit this config file (**application/config/slack.php**) and then use the following code to send your message:

    $this->Slack->send("Message to send to your channel);

#### Example Usage:

		// Load the slack library:
		$this->load->library('Slack');

        // Setup the configuration for the slack notification.
        $this->Slack->username = 'CodeIgniter Test Bot';
        $this->Slack->channel  = ['general', 'random'];

        // Send the notification
        if ($this->Slack->send('This is a test notification from the CI Slack Bot.')) {
            print_r($this->Slack->output); // Print the response from Slack if you want.
        } else {
            print_r($this->Slack->error); // This will output the error.
        }

#### FAQS:

 - Does this library support the ability to send messages to multiple channels? **Yes, you can easily send the same message to multiple channels by setting the $channel variable within the library to an array. The below code example will send the message "Your message goes here" to both the general channel, and the random channel.**

        $this->Slack->channel = ['general', 'random'];

        $this->Slack->send('Your message goes here.');

 - How do I set the username of the bot? **Simply set the username variable. See code example below:**

    `$this->Slack->username = 'Bot Name';`

 - How do I set the icon for the bot? **You can set the icon by setting the icon variable. See code example below: **

    `$this->Slack->icon = ':ghost:'; //You may use a URL as well.`
