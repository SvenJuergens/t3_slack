=========
TYPO3 to Slack
=========

This is a small wrapper Extension for "Slack for PHP" from Regan McEntyre (https://github.com/maknz/slack)

**Slack for PHP**

A simple PHP package for sending messages to Slack with incoming webhooks...

Just Install and configure it in the ExtensionManager, there is a small Scheduler CommandController Task with a simple "Hello World" for testing and an own extension (t3_slack_examples) with some coding examples.

**Requirements**

Create an incoming webhook https://my.slack.com/services/new/incoming-webhook on your Slack account and put in the configuration in Extensionmanager as "webHookUrl".

Settings and using examples you can find at https://github.com/maknz/slack/ or in the code of EXT:t3_slack_examples



