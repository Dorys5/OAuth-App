# PHP Authentication and Social Login

This project is a PHP-based authentication system that supports social login using GitHub, Google, and Facebook. It leverages Laravel Livewire for a component-based architecture, providing a flexible and modern approach to building authentication systems.

---

## Features

- **User Authentication**: Secure login with form validation and session management.
- **Social Login**: Integrate with GitHub, Google, and Facebook for seamless user authentication.
- **Responsive Design**: Tailwind CSS for a modern and responsive user interface.
- **Component-Based Architecture**: Utilizes Laravel Livewire for dynamic components.
- **Extensible**: Easily add new features or modify existing ones due to the modular structure.

---

## Table of Contents

1. [Installation](#installation)
2. [Configuration](#configuration)
3. [Database Setup](#database-setup)
4. [Usage](#usage)
5. [Social Login Setup](#social-login-setup)
6. [Code Snippets](#code-snippets)
7. [Contributing](#contributing)
8. [License](#license)
9. [Contact](#contact)

---

## Installation

Follow these steps to set up the project on your local machine:

### Step 1: Clone the Repository

```bash
git clone https://github.com/Dorys5/OAuth-App.git
cd your-repo-name
---



## Configuration

Update the following environment variables in your .env file:

APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:generated_app_key
APP_DEBUG=true
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database
DB_USERNAME=your_username
DB_PASSWORD=your_password

BROADCAST_DRIVER=log
CACHE_DRIVER=file
FILESYSTEM_DRIVER=local
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120

GITHUB_CLIENT_ID=your_github_client_id
GITHUB_CLIENT_SECRET=your_github_client_secret
GITHUB_REDIRECT=http://localhost:8000/auth/github/callback

GOOGLE_CLIENT_ID=your_google_client_id
GOOGLE_CLIENT_SECRET=your_google_client_secret
GOOGLE_REDIRECT=http://localhost:8000/auth/google/callback

FACEBOOK_CLIENT_ID=your_facebook_client_id
FACEBOOK_CLIENT_SECRET=your_facebook_client_secret
FACEBOOK_REDIRECT=http://localhost:8000/auth/facebook/callback
---

## Database Setup

php artisan migrate

----

## usage
Login: Use the login form to authenticate using your credentials or choose one of the social login options.
Session Management: Sessions are managed securely using Laravel's session handling features.
Component Interaction: Utilize Livewire components for a seamless user experience.
To start the development server, run:
php artisan serve

