# Prinsweb Project

This project is a responsive, feature-rich website built with **PHP**, **Bootstrap 5**, and modern web technologies. It demonstrates core web development concepts and best practices in a structured, modular way.

## 🧰 Technologies Used

*   **Backend:** PHP 7.4+
*   **Frontend:**
    *   HTML5
    *   CSS3
    *   JavaScript (Vanilla)
    *   Bootstrap 5.3 ([https://getbootstrap.com/](https://getbootstrap.com/))
    *   Bootstrap Icons 1.13 ([https://icons.getbootstrap.com/](https://icons.getbootstrap.com/))
*   **Structure:** Modular PHP includes
*   **Offline Support:** Service Worker API

## 🌟 Key Features

1.  **Modular PHP Structure:**
    *   Clean separation of concerns using `header.php`, `footer.php`, and `config.php`.
    *   Easy to maintain and scale.
2.  **Responsive Design:**
    *   Fully responsive layout using Bootstrap 5's grid system and components.
    *   Works on mobiles, tablets, and desktops.
3.  **Multi-Language Support:**
    *   Automatically detects browser language (defaults to English/Hindi).
    *   Manual language switching via dropdown.
    *   Language files stored in `lang/` directory (`lang_en.php`, `lang_hi.php`).
4.  **Auto Light/Dark Mode:**
    *   Automatically adapts to the user's system theme preference (`prefers-color-scheme`).
    *   Manual theme toggle (Light, Dark, Auto) with preference saved in `localStorage`.
5.  **Advanced Splash Screen:**
    *   Animated loading screen that fades out once the page content is loaded.
6.  **Offline Support:**
    *   Displays a "No Internet Connection" message when the user goes offline.
    *   Includes a basic Service Worker (`assets/js/service-worker.js`) for caching critical assets.
7.  **Strict Content Protection:**
    *   Disables page zooming.
    *   Prevents right-click context menu.
    *   Blocks copy, cut, and paste actions.
8.  **Bootstrap Icons Integration:**
    *   Uses the official Bootstrap Icons library via CDN for scalable vector graphics.

## ▶️ Getting Started

1.  **Prerequisites:**
    *   A local web server environment (like XAMPP, WAMP, MAMP, or LAMP).
    *   PHP 7.4 or higher installed and configured.
2.  **Setup:**
    *   Clone or download this project repository.
    *   Place the project folder in your web server's document root (e.g., `htdocs` for XAMPP).
    *   Ensure your web server (Apache/Nginx) is running.
3.  **Accessing the Site:**
    *   Open your web browser.
    *   Navigate to the project URL (e.g., `http://localhost/your-project-name`).

## 🛠️ Customization

*   **Adding Languages:**
    1.  Create a new file in the `lang/` directory named `lang_{code}.php` (e.g., `lang_fr.php`).
    2.  Define all necessary `TXT_*` constants within that file for the new language.
    3.  Add a link to the new language in the language dropdown menu in `@/header.php`.
*   **Adding Pages:**
    1.  Create a new `.php` file (e.g., `services.php`).
    2.  Include the core files at the top:
        ```php
        <?php
        include('./@/config.php');
        include('./@/header.php');
        ?>
        ```
    3.  Add your page content.
    4.  Include the footer at the bottom:
        ```php
        <?php
        include('./@/footer.php');
        ?>
        ```
*   **Styling (CSS):**
    *   Add custom styles to `assets/css/custom.css`.
*   **Scripting (JavaScript):**
    *   Add custom JavaScript logic to `assets/js/main.js`.

## 📝 Notes

*   This project uses CDNs for Bootstrap CSS, Bootstrap Icons, and Bootstrap JS to simplify setup. For production, consider downloading and hosting these files locally or using a package manager.
*   The Service Worker provides basic caching. Depending on your needs, you might want to expand its scope and caching strategy.
*   The content protection measures (disable right-click, copy/paste) offer basic deterrence but can be bypassed by users with technical knowledge.

## 🤝 Contributing

Contributions are welcome! Feel free to fork the repository and submit pull requests for improvements, bug fixes, or new features.

