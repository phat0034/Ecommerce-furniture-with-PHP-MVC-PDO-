# Welcome to Ecommerce furniture with PHP(MVC,PDO) by Downii

The Ecommerce Furniture is my project to complete my Internship Course, and it is a free e-commerce website project for everyone to use. It is built using the pure PHP language. I have encountered some challenges with time and being my first project, so there may be some mistakes. However, I will work on fixing them soon
- Customers do not need to know much about technology.
- Powerful system, many useful functions.
- Easy to access, easy to use.

## Support the project
If you catch anything bug, please dm me:
>    - Instagram : [![Instagram]](https://www.instagram.com/babyamrius)
 >   - Facebook : [![Facebook]](https://www.facebook.com/braindoti)
# 1. Configuration requirements
> - Web Server: Apache
> - Version PHP >= 8.0
> - Version XAMPP =>8.0
> - Version Boostrap v5.3
# 2. Technology
- Pure PHP language
- HTML CSS JAVASCRIPT
- Boostrap V5.3
# 3. Feature

```
1. FRONT-END
    - Shopping cart
    - Save cart with Session
    - Customer login
    - Content: Page, Post, Product List, Product Details, Category,...
    - Product attributes: cost price, promotion price, detail,...
    - Feedback, Feedback for product, Feedback for order
    - Comment on Product, Post,...
    - Search, pagination,...
    - Checkout, PlaceOrder,...
    ...

=================================================================

2. BACKEND-ADMIN
    - Admin roles, permission
    - Product manager   (Create, delete, update)
    - Order management  (Create, delete, update)
    - Comment manager   (Create, delete, update)
    - User management   (Create, delete, update)
    - Support Ticket Manager(Update)
    ...
```
# 5. Installation instructions
## 5.1 Edit Connect Database

You need to change the connection information and import sql file to the database after you have cloned my repository so that the website can work.

This is the path to the sql file for you to import to your database:
[`/admin/database/***.sql`](https://github.com/TanHongIT/new-mvc-shop/tree/master/admin/database)

And change the connection information to match your database in .env file:

```dotenv
    $dsn = 'mysql:host=localhost;dbname=type_same_mysqldatabase';
    $user = 'root';
    $pass = '';
```

> **Note:**
>
> The path of the database config file that is using these environment variables is located at: [`/model/connect/connect.php`]

## 5.2 Edit SMTP Mail

> The third thing: 
You need to change the information about **SMTP Mail** to be able to use some functions about user account authentication, change passwords, notify users, ...

Update the following information in the **.env** file:

```dotenv
$mail->Username = "username@example.com";
// GMAIL password
$mail->Password = "password"; 
$mail->SMTPSecure = "tls";  // or ssl
// sets GMAIL as the SMTP server
$mail->Host = "smtp.gmail.com";
// set the SMTP port for the GMAIL server
$mail->Port = "587"; // 465
```

Change the value of the constant **SMTP_UNAME** and **SMTP_PWORD** to match the configuration you added on your Gmail.

Tips: https://support.google.com/accounts/answer/185833?hl=en

**Where SMTP_PWORD is the application password for your _gmail.com_ account.**

> **Note:**
>
> The path of the email config file that is using these environment variables is located at: [`/Model/forgetpw.php`]

# 6. Demo

> 
> 
> ```
> user :
>     username: test001         | email: test001@example.com	   | password: 123456
>     username: customer001     | email: customer001@example.com   | password: 123456
> Admin:
>     username: admin001        | email: admin001@gmail.com	       | password: 123456
> ```
