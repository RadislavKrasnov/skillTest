# skillTest
This is test task for PHP Trainee vacancy 


Installation documentation

1. If you want to download this application you need to clone this repository into folder where installed you local machine.

2. Please, set up folder of you server like this App_name/web for convenient use.

3. You could to download this repository in two ways:
- git clone https://github.com/RadislavKrasnov/skillTest.git
- download archive file

4. After download this app on you computer make 
 composer update command in command line (for this step you need have downloaded Composer - https://getcomposer.org/).
 
5. Since, you have installed this app already, you could create database tables with this command in command line 
(./yii migrate), or import sql dump file of database (mysql -u username -p database_name < skillTest_dump.sql). This file
 you will find in project folder.
 
6. Your could to connect application with database in config/db.php file. 
 
7. If you want to use admin panel, you need create super admin.
This possible with command (./yii admin email password).

8. This application is available by address like this http://localhost/.

9. If you want to login in admin panel, you need follow it address http://localhost/auth/login.


 

