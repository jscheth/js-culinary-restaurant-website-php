# Culinary PHP Website

A simple, elegant, and dynamic restaurant website template built with PHP and styled with Tailwind CSS. This project is designed to be a starting point for small restaurants or a learning resource for those looking to practice their PHP skills.

<img width="1570" height="844" alt="Screenshot 2025-08-07 at 3 19 21 PM" src="https://github.com/user-attachments/assets/7c048a45-e2a7-4042-8efd-6e8b8b6edd00" />
<img width="1567" height="846" alt="Screenshot 2025-08-07 at 3 19 34 PM" src="https://github.com/user-attachments/assets/ae87ecd0-ebbb-46ac-b9f8-17931fdb9f1a" />
<img width="1566" height="845" alt="Screenshot 2025-08-07 at 3 19 45 PM" src="https://github.com/user-attachments/assets/b07db91e-12f3-4428-8d9f-a4b7e40284cd" />


---

## About This Project

This project provides a clean, multi-page website structure that is easy to customize and deploy. It uses PHP includes to manage repeatable content like headers and footers, making the site efficient and easy to maintain. The design is fully responsive and modern, thanks to the utility-first approach of Tailwind CSS.

This is a sample project intended for **learning and refreshing PHP skills**. While it is ready to be adapted for a real small restaurant, its primary purpose is educational.

---

## Features

* **Dynamic Pages**: The site includes three main pages: Our Menu, Our Mission, and Our Ingredients.
* **PHP Includes**: Utilizes `header.inc.php` and `footer.inc.php` for modular and maintainable code.
* **Dynamic Header Backgrounds**: Each page features a unique, beautiful background image in the header, controlled by a simple PHP variable.
* **Responsive Design**: Styled with Tailwind CSS for a seamless experience on desktops, tablets, and mobile devices.
* **Easy to Customize**: Content, images, and styling variables are straightforward to change.
* **No Database Required**: The website is file-based, making it incredibly simple to set up and run on any server with PHP support.

---

## Technology Stack

* **Backend**: PHP
* **Frontend**: HTML5, Tailwind CSS (via CDN)
* **Fonts**: Google Fonts (Inter & Playfair Display)

---

## Getting Started

To get this project up and running on your local machine, you'll need a local server environment with PHP support, such as XAMPP, MAMP, or WAMP.

1.  **Clone the repository:**
    ```bash
    git clone [https://github.com/jscheth/js-culinary-restaurant-website-php.git](https://github.com/jscheth/js-culinary-restaurant-website-php.git)
    ```

2.  **Place the files in your server's root directory:**
    * Move the cloned project folder into your server's `htdocs` (for XAMPP) or `www` (for WAMP/MAMP) directory.

3.  **Start your local server:**
    * Open your XAMPP/MAMP/WAMP control panel and start the Apache server.

4.  **Access the website:**
    * Open your web browser and navigate to `http://localhost/js-culinary-restaurant-website-php/` (or whatever you named the project folder).

---

## How to Customize

This project is designed to be easily customized.

### Changing Page Content

To change the text on any page, simply open the corresponding `.php` file (`index.php`, `mission.php`, `ingredients.php`) and edit the HTML content within the `<main>` tags.

### Changing Header Images

The background images for the header banners are controlled in the `includes/header.inc.php` file within the `<style>` block.

```css
/* Specific background images for each page */
.bg-menu {
    background-image: url('...new-menu-image-url...');
}
.bg-mission {
    background-image: url('...new-mission-image-url...');
}
.bg-ingredients {
    background-image: url('...new-ingredients-image-url...');
}
```

Simply replace the URLs with links to your own images.

---

## License

This project is open-source and available under the MIT License. Feel free to use it, modify it, and learn from it.
