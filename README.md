# Patient Record Management

Patient Record management is a web app created as a project for the CSE311(Database Systems) course. This web app stores patient's medical history. A registered doctor only can enter and retrieve a patient's information. The web app creates a flow of patient medical information among doctors from different hospitals. For more details, check out the [proposal, use-case and, ERD ](Report-UseCase-Erd)

## Installation

XAMPP a cross-platform web-server that is used to manage databases and create a local server using apache. [Download XAMPP](https://www.apachefriends.org/index.html). MySQL workbench can also be used for database management.

## Usage
After installing XAMPP, head to the default installation directory and delete existing files from htdocs folder. Download the repository and place the files inside the htdocs folder. Then start the Apache, MySQL and, Filezilla using XAMPP control panel and go to [localhost/phpmyadmin/](http://localhost/phpmyadmin/) to create a new database named test_project [Other names may show error and need edit in the source code]. Import the mysql database from [Database](Database) folder available in the repository. After that, head on to [localhost](http://localhost/) and the homepage will be loaded.

### Note
There are no **direct access** to signup for the webapp. Since doctors, patients and medical staffs must be verified by an administration official, there is an admin page that is **intentionally isolated** from the main webapp. The admin page can be accessed using [localhost/admin.login.php](http://localhost/admin.login.php) . The default id and password for the admin page is **admin**. New doctors, patients, medical staff, and hospitals can be registered using the admin page.


## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

## Screenshots
![s1](https://user-images.githubusercontent.com/73390535/181583060-81f3358d-2a27-4388-afb1-8b2e82bd321b.png)
![s2](https://user-images.githubusercontent.com/73390535/181583072-e83a50bf-4ea8-40ee-915f-1d503bc37fc0.png)
![s3](https://user-images.githubusercontent.com/73390535/181583081-15935a9b-8525-4992-a77c-cf951930bd31.png)
![s4](https://user-images.githubusercontent.com/73390535/181583099-165fdef1-2079-4c66-a0d2-da5a87a832a8.png)
