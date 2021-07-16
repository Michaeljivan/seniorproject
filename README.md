# seniorproject

Quick Setup Guide in 5 Steps!
Setting up Senior Project Management on your local machine

1)
Download XAMPP on your Windows or Mac machine here https://www.apachefriends.org/download.html

2)
Open the XAMPP Control panel and,
	Start the Apache server
	Start the MySQL server

3)
Go to your localhost http://localhost/phpmyadmin/

Create a new database called “spm”

Then run the script that is provided “all_tables_spms.sql”
*If tables already exist and would like to start over run the “all_tables_drop.sql”

Then simply insert an admin user by running the script called “admin_insert.sql”

4)
Drag the folder with the correct version  into the following path:
 	C:\xampp\htdocs
Rename the folder to “seniorproject”

5)
Go to the URL http://localhost/seniorproject/

Additional Notes:
Admin user must accept all create users through the “manage” tab upon login.
Create multiple test accounts to begin using and testing the system in which way you may like.

