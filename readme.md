# Simple PHP Login Script

A lightweight, single-file PHP script featuring basic form handling, input sanitization, and credential validation with JavaScript alert notifications.

## Features

- **Single-File Architecture:** Combines both frontend HTML form and backend PHP logic in one file.
- **Input Sanitization:** Uses `htmlspecialchars()` on the email input to help protect against basic XSS.
- **Basic Validation:**
  - Checks if the email field is empty.
  - Validates that the password length is greater than 6 characters.
- **Feedback Mechanism:** Uses JavaScript `alert()` popups to display success or error messages to the user.

## File Structure

```text
├── index.php      # Main login form and PHP authentication logic
├── style.css      # External stylesheet (referenced in HTML head)
└── README.md      # Project documentation
```
