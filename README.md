# Department Website with Laravel, Filament, Tailwind CSS, and JavaScript
This project is a web application for the Department of Computer Science & Information
Technology. It utilizes Laravel for the backend, Filament for the admin dashboard, Blade
templates for frontend views, Tailwind CSS for styling, and JavaScript for dynamic interactions.
The website provides information about the department and facilitates user interactions such
as contacting the department through a message form.
## Table of Contents
- [Features](#features)
- [Technologies Used](#technologies-used)
- [Installation](#installation)
- [Usage](#usage)
- [Folder Structure](#folder-structure)
- [License](#license)
## Features
- **Dynamic Frontend**: The frontend is built using Blade templates, providing a seamless and
dynamic user experience.
- **Admin Dashboard**: A powerful admin panel is integrated using Filament, allowing easy
management of the website's content and settings.
- **Responsive Design**: Tailwind CSS is used to ensure the site is responsive and looks great
on all devices.
- **Interactive Navigation**: A hamburger menu implemented in JavaScript for improved user
interaction on mobile and tablet views.
- **Contact Form**: Users can leave messages through a contact form. The form uses Laravel's
validation features and sends an email using the details provided by the user.
- **Error Handling and Success Messages**: Real-time feedback on form submissions,
displaying validation errors and success messages.

## Technologies Used
- **Backend**: [Laravel](https://laravel.com/) - A PHP framework for building robust web
applications.
- **Admin Panel**: [Filament](https://filamentphp.com/) - A Laravel admin panel frameworkmanaging the backend easily.
- **Frontend**: Blade templates are used for rendering dynamic views.
- **CSS Framework**: [Tailwind CSS](https://tailwindcss.com/) - A utility-first CSS framewfor designing clean and modern UI.
- **JavaScript**: Custom JavaScript for handling dynamic elements like the hamburger men- 
- **Database**: MySQL is used for storing data.
## Installation
To get a local copy of the project up and running, follow these simple steps:
1. **Clone the repository**:
   ```bash
   git clone https://github.com/gustonstomy/department-website.git
   ```
2. **Navigate to the project directory**:
   ```bash
   cd Dcit-wesite 
   ```
3. **Install the dependencies**:
   ```bash
   composer install
   npm install
   ```
4. **Set up environment variables**:
   - Copy `.env.example` to `.env`:
     ```bash
     cp .env.example .env
     ```
   - Update the `.env` file with your database and mail configurations.

   5. **Generate an application key**:
   ```bash
   php artisan key:generate
   ```
6. **Run database migrations**:
   ```bash
   php artisan migrate
   ```
7. **Compile the assets**:
   ```bash
   npm run dev
   ```
8. **Serve the application**:
   ```bash
   php artisan serve
   ```
   Visit `http://127.0.0.1:8000` in your browser to view the website.
## Usage
### Admin Dashboard
- Access the Filament admin dashboard by visiting `/admin1` (e.g., `http://127.0.0.1:8000/
admin1`).
- Log in using the admin credentials set during the Filament installation process.
- Use the dashboard to manage content, view messages, and update settings.
### Contact Form
- Users can access the contact form through the "Contact Us" page.
- Submitted messages are sent via email using the SMTP settings configured in the `.env` file.
### Navigation

- The website features a responsive hamburger menu for easy navigation on mobile devices.
The menu is implemented with JavaScript and styled using Tailwind CSS.
## Folder Structure
The key folders and files for this project are:
- **`app/Http/Controllers/MessageController.php`**: Handles contact form submissions and
sends emails.
- **`resources/views/`**: Contains Blade templates for the frontend.
  - `layouts/`: Shared layout files (header, footer, etc.).
  - `includes/`: Reusable components (navbar, etc.).
  - `emails/`: Email templates used for sending messages.
  - `contact.blade.php`: The contact form page.
- **`public/`**: Public assets (CSS, JavaScript, images).
- **`routes/web.php`**: Defines web routes for the application.
## License
This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for more
details.
---
