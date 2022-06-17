<h3 align="center">T2F - Api et Back Office</h3>

---


## 📝 Table of Contents

- [About](#about)
- [Getting Started](#getting_started)
- [Built Using](#built_using)
- [TODO](../TODO.md)
- [Authors](#authors)

## 🧐 About <a name = "about"></a>

A projet which includes a Back Office and an API. 
The Back Office is used to register products and categories and see the data, and the API to connect to a mobile app or a front-end.

## 🏁 Getting Started <a name = "getting_started"></a>
````bash
git clone https://github.com/vbaumes/api-platform-festival.git
````
### Prerequisites

I used XAMPP as a server and to create the database in local.
To install XAMP a on your device [here](https://www.apachefriends.org/fr/index.html)

### Installing

In the directory where you cloned the project :

```
cd api-platform-festival
composer install
php -S localhost:8000 -t public
```

If you want to install the project and connect it to a mobile app then you'll need to run on your computer terminal "ipconfig" and replace the localhost part with the "Adresse IPv4".

You will need a .env file with these environment keys that follows:

```
JWT_SECRET_KEY=%kernel.project_dir%/config/jwt/private.pem
JWT_PUBLIC_KEY=%kernel.project_dir%/config/jwt/public.pem
JWT_PASSPHRASE=
DATABASE_URL=
```

## ⛏️ Built Using <a name = "built_using"></a>

- [Symfony](https://symfony.com/doc/current/setup.html) - PHP Framework
- [API Platform](https://api-platform.com/docs/core/getting-started/) - PHP Framework


## ✍️ Authors <a name = "authors"></a>
- [@vbaumes](https://github.com/vbaumes)