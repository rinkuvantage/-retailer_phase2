
This is retailer webstire.

#Global settings of website

The includes/head.php file contain all global info about website, you can change it as per your requirement. eg:

Database table prefix.

$prefix="ret_";

Salt using for creating password and activation key.

$salt='R{2dX8fi7SD#J(1f[Sus&&Q9dcAUUo:k,k@5I8rIdUh/:@O =^N[Y}aOD;l;jE6';

Website Name use for title in head tag

$sitname='Sigmaways Retail Analytics';

Global email for recieving and sending emails.

$owner_email='info@sigmaways.com';

#Database information

To use this you have to just need to change database configuration in includes/db_connection.php eg:

Host is using for database, by default it is localhost, but some hosting is not supporting localhost, then you can use host 

provided by the hosting company. You can get this when you will create database on server.

$hostname='localhost';

Username of database

$dbuser='root';

Password of database

$dbpass='';

database name

$dbname='retailernew';

#Sample database

sql/sql.sql file is for sample database.

#Server info:

PHP Version: 5.4 or greater

Mysql: 5.0 or greater

#New Updates 14 Jan, 2016

In includes/head.php we have defined file extensions and timezone.

#Updates 18 Jan, 2016

For to show user upload time we have added one more table in database with name ret_zone you can download it from sql/timezone.sql

#Update 29 Jan, 2016

add new field 'filecolumns' in table ret_files

Update the upload files and view files.

#Update 30 Jan, 2016

For notification we have to add one more table with name ret_usermeta, you can get it from sql/usermeta.sql

#Update 5 Feb, 2016

Delete records from table ret_files before 29 Jan, 2016 to avoid unwanted pagination on view files page.

#Update 25 Feb, 2016

=> Added a Button on manage users page to create new user/company if role is super admin, create new user if logged in as company role.

=> Added a new file name as "createuser.php"

=> Added new column as "parent_id" in "ret_users" table which maintain user parental role.

=> Added funcationality in manage user super admin/company can add user from dashboard.

=> Logged in company user list only show user list which are associated with company.

=> Set user notifications preferences Yes for email and web when any user created by admin/company or register.

make changes in createuser.php and register.php


=>Mantis intigration, hook user class and added a additional method add_user_mantis(), which allow to create mantis user automatically when any new account is registered or created by admin/company. and set mantis user role accordingly as if created user is user then mantis role will be viewer and if created user is any company then matis user role as manager.

=> Added functionality on dashboard manage user if any user account will be deleted from dashboard then it will also be automatically deleted from mantis.

#Update 1 March, 2016

=> Allow auto login of mantis user from comon website login

#Update 2 March, 2016

=> Added features in dashboard for super admin/company to add different email template for their own customers.
=> Super admin/Company has write to create own email template and can preview it or send sample emails.
=> Added additional table as "templates" which holds email template data.

