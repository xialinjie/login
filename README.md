# login

This project involves the development of a user authentication system, Utilizing a combination of HTML and CSS for the frontend design, PHP for server-side scripting, and a backend database for data storage and retrieval, the system is engineered to handle user credentials securely. The primary function is to validate user login credentials against stored data and provide appropriate feedback based on the authentication result.

## Environment Setup:
Ensure that your development environment has a PHP server and a database (mariadb) installed.
If you're presenting this to others, set up a live server or use a platform like AWS(Apache Web Server), or similar services.

## Database Preparation:
Create a test database with a users table.
Include some dummy data for testing the login functionality.

CREATE TABLE userinfo (
    id INTEGER NOT NULL  AUTO_INCREMENT PRIMARY KEY,
    account VARCHAR(30) NOT NULL UNIQUE,
    pwd VARCHAR(30) NOT NULL
);
insert into userinfo (account, pwd) value('linjie', '123');

## Start
Enter http://localhost/login/index.html in the browser to start running the web page
