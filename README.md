# Custom PHP Error Handler for Asana & Slack Integration
a PHP application that monitors for php errors and creates Asana tasks to action

This PHP application serves as a custom error handler to monitor exceptions and syntax errors in your codebase. In the event of an error, it automates the creation of a task in Asana and sends a message to a designated Slack channel. The integration ensures that your team stays updated and can act quickly upon any issues that arise.

## Table of Contents
- [Features](#features)
- [Installation](#installation)
- [Configuration](#configuration)
- [Usage](#usage)
- [Contributing](#contributing)
- [License](#license)

## Features

1. **Custom Error Handling**: Captures both exceptions and syntax errors.
2. **Asana Integration**: Automatically creates tasks in Asana with relevant error details.
3. **Slack Integration**: Sends an instant notification to a Slack channel with concise error information.

## Installation

1. Clone the repository to your project directory:
```bash
2. Navigate to the cloned directory and include the files in your project

## Configuration

# Asana - open create_asana_task.php and edit
1. Set up an Asana Access Token and create a ENV cariable to host
2. Provide the Asana workspace ID where tasks should be created.
3. Add a task name.
4. Add the assignee ID.
5. Add the project ID.
6. Set a custom due date.
7. download the latest cainfo and store as cacert.pem see https://curl.se/docs/caextract.html

# Slack - open send_slack_message.php and edit
1. Set up a custom slack webhook and create a slack app.
2. edit the webhook details.
3. download the latest cainfo and store as cacert.pem see https://curl.se/docs/caextract.html

# Error Handler - open error_handler.php and edit
1. change the payload to slack messanger, you can edit the emojis and text as needed
2. remember to include set_error_handler and set_exception_handler in your files

# Contributing
Contributions, issues, and feature requests are welcome! For major changes, please open an issue first to discuss what you would like to change. Ensure to update tests as appropriate.

# License
This project is licensed under the MIT License. See the LICENSE file for details.