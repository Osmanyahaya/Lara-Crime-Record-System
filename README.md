
<<<<<<< Updated upstream

<p align="center">
This Crime Record and Management System can help law enforcement agencies in many ways. For example, it can reduce paperwork, minimize data entry errors, and improve data accuracy. It can also help officers identify and track patterns of criminal activity and improve communication between departments and jurisdictions.
Moreover, it can provide officers with immediate access to critical information, such as criminal histories and outstanding warrants, which can help them make better-informed decisions and respond more effectively to emergency situations. Additionally, it can assist in resource allocation, budgeting, and planning by providing accurate and timely data on crime trends and patterns.
Overall, this Crime Record and Management System is a powerful tool that can help law enforcement agencies improve their operations, increase public safety, and reduce crime.
Contributions are welcome to make this system better

</p>
<p>
<h1>Note</h1>
The database can be set up using the sql database file  in the database directory. But you can still use to the db seeder

</p>

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

=======
This Crime Record and Management System can help law enforcement agencies in many ways. For example, it can reduce paperwork, minimize data entry errors, and improve data accuracy. It can also help officers identify and track patterns of criminal activity and improve communication between departments and jurisdictions. Moreover, it can provide officers with immediate access to critical information, such as criminal histories and outstanding warrants, which can help them make better-informed decisions and respond more effectively to emergency situations. Additionally, it can assist in resource allocation, budgeting, and planning by providing accurate and timely data on crime trends and patterns. Overall, this Crime Record and Management System is a powerful tool that can help law enforcement agencies improve their operations, increase public safety, and reduce crime. Contributions are welcome to make this system better

>>>>>>> Stashed changes

Features:
Admin
Admin Dashboard
View Staff List
Assign case to CID Officer
Has CRUD to cases Reported
Has CRUD to all type Of users
Has CRUD to Crime Types

CRIMINAL INVESTIGATION DEPARTMENT (CID)
CID Dashboard
View list of cases assigned Him/Her
View details of case being investigated
Write a report on the case being investigated

Noncommissioned Officer (NCO)
NCO Dashboard
Register a Complain at Police Station/Unit
View list of complains
View details of case investigated 
Assign a case CID Officer


Installation
Requirements
For system requirements you Check Laravel Requirement

Clone the repository from github.
git clone https://github.com/Osmanyahaya/Lara-Crime-Record-System.git [YourDirectoryName]
The command installs the project in a directory named YourDirectoryName. You can choose a different directory name if you want.

Install dependencies
Laravel utilizes Composer to manage its dependencies. So, before using Laravel, make sure you have Composer installed on your machine.

cd YourDirectoryName
composer install
Config file
Rename or copy .env.example file to .env 

1.php artisan key:generate to generate app key.

Set your database credentials in your .env file
Set your APP_URL in your .env file.

Database
Migrate database table php artisan migrate
php artisan db:seed, this will initialize Admin, Admin Roles and Permmisions, Crime Category 
admin user Credentials
 [email: admin@test.com 

  password: 12345678

Install Node Dependencies
npm install to install node dependencies
npm run dev for development or npm run build for production

Create storage link
php artisan storage:link

Run Server
php artisan serve or Laravel Homestead
Visit localhost:8000 in your browser.

Thank you.

