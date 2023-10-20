# Custom PHP Error Handler for Asana & Slack Integration

This PHP application serves as a custom error handler to monitor exceptions and syntax errors in your codebase. In the event of an error, it automates the creation of a task in Asana and sends a message to a designated Slack channel. The integration ensures that your team stays updated and can act quickly upon any issues that arise.

## Table of Contents
- [Features](#features)
- [Installation](#installation)
- [Configuration](#configuration)
- [Contributing](#contributing)
- [License](#license)

## Features
1. **Custom Error Handling**: Captures both exceptions and syntax errors.
2. **Asana Integration**: Automatically creates tasks in Asana with relevant error details.
3. **Slack Integration**: Sends an instant notification to a Slack channel with concise error information.

## Installation
1. Clone the repository to your project directory.
2. Navigate to the cloned directory and include the files in your project.

## Configuration and setup

### Asana - open `create_asana_task.php` and edit:
1. Set up an Asana Access Token and create an ENV variable to host it.
2. Provide the Asana workspace ID where tasks should be created.
3. Add a task name.
4. Add the assignee ID.
5. Add the project ID.
6. Set a custom due date.
7. Download the latest cainfo and store as `cacert.pem`. See [cURL CA Extract](https://curl.se/docs/caextract.html) for more details.

### Slack - open `send_slack_message.php` and edit:
1. Set up a custom slack webhook and create a slack app.
2. Edit the webhook details.
3. Download the latest cainfo and store as `cacert.pem`. See [cURL CA Extract](https://curl.se/docs/caextract.html).

### Error Handler - open `error_handler.php` and edit:
1. Change the payload to Slack messenger. You can modify the emojis and text as needed.
2. Remember to include `set_error_handler` and `set_exception_handler` in your files.

## Contributing
Contributions are welcome!.

## License
This project is licensed under the MIT License. See the `LICENSE` file for details.
