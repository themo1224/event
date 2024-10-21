# Russian Event Landing Page

This project is a simple single-page website for a Russian event. The website includes a form where users can submit their email addresses, and the admin will receive an email notification with a template.

## Features

- **Event Landing Page:** A clean and responsive single-page layout tailored for an event.
- **Email Form:** A form for collecting user emails.
- **Email Notification:** Sends a templated email to the admin when a user submits their email.

## Technologies Used

- **Laravel 10.x**: The core framework for the backend and email functionality.
- **HTML/CSS**: For building the front-end structure and design.
- **Blade Templating**: Used for rendering the form and email templates.
- **SwiftMailer / Laravel Mail**: For sending email notifications.

## Installation

Follow these steps to install and run the project locally:

1. Clone the repository:
    ```bash
    git clone https://github.com/your-username/russian-event-landing.git
    cd russian-event-landing
    ```

2. Install dependencies:
    ```bash
    composer install
    ```

3. Configure environment variables:
    - Copy the `.env.example` to `.env`:
      ```bash
      cp .env.example .env
      ```
    - Set up your `APP_URL`, `MAIL_HOST`, `MAIL_USERNAME`, `MAIL_PASSWORD`, and other mail configuration options in the `.env` file.

4. Generate application key:
    ```bash
    php artisan key:generate
    ```

5. Run the development server:
    ```bash
    php artisan serve
    ```

## Email Configuration

Ensure you have properly set up your email configuration in the `.env` file. Example for SMTP:

```env
MAIL_MAILER=smtp
MAIL_HOST=smtp.your-email-provider.com
MAIL_PORT=587
MAIL_USERNAME=your-email@example.com
MAIL_PASSWORD=your-email-password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=your-email@example.com
MAIL_FROM_NAME="${APP_NAME}"
