# login

1. Environment Setup:
Ensure that your development environment has a PHP server and a database (mariadb) installed.
If you're presenting this to others, set up a live server or use a platform like AWS(Apache Web Server), or similar services.

2. Database Preparation:
Create a test database with a users table.
Include some dummy data for testing the login functionality.

CREATE TABLE userinfo (
    id INTEGER NOT NULL  AUTO_INCREMENT PRIMARY KEY,
    account VARCHAR(30) NOT NULL UNIQUE,
    pwd VARCHAR(30) NOT NULL
);
insert into userinfo (account, pwd) value('linjie', '123')

3. Enter http://localhost/login/index.html in the browser to start running the web page
