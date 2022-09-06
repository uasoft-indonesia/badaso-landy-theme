---
sidebar_position: 5
---

# Manage Contact 

To manage your menu contact content view on the landy theme, you can follow the step :
1. You can open `Content Manager` in your badaso dashboard
2. Select item `Landy Theme` and choise `Fill Content' in Action button
3. You can edit text of contact content in item title,subtitle and description
<p align="center">
  <a href="https://badaso-docs.uatech.co.id/">
    <img src="http://localhost:3000/img/contact-teks.png" alt="screencapture-badaso-dashboard-uatech-co-id-dashboard-crud-2021-03-17-09-57-08-1" />
  </a>
</p>

4. Input your logo image and text contact  content to the contact content form
<p align="center">
  <a href="https://badaso-docs.uatech.co.id/">
    <img src="http://localhost:3000/img/contact-content.png" alt="screencapture-badaso-dashboard-uatech-co-id-dashboard-crud-2021-03-17-09-57-08-1" />
  </a>
</p>

5. Set your email address as email receiver to get message from visitor your website. You can set in `.env` on `LANDY_MAIL_RECEIVER`
6. This step to configuration email testing use smtp in `.env` file.

```php
MAIL_MAILER=smtp
MAIL_HOST=smtp_server_address 
MAIL_PORT=smtp_port
MAIL_USERNAME=smtp_username
MAIL_PASSWORD=smtp_password
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS="your_email_account_smtp"
MAIL_FROM_NAME="${APP_NAME}"

```

