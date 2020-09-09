# INSTRUCTIONS:
1. Open visual studio and run a new terminal.
2. Use the cd command in the terminal to change the working directory to your desired project placement folder. 
3. Clone the project with the following terminal command: git clone https://github.com/eimantaspav/staff_management_laravel.git
4. Use the following commands in the terminal (one by one, make sure you are in the "staff_management_laravel" project directory):

	composer install
	npm install
	cp .env.example .env
	php artisan key:generate

5. Open the .env file via your editor and change the following info:

DB_DATABASE=staff_management
DB_PASSWORD=mysql

4. 

# DATABASE IMPORT:

Open Mysql and make sure you have a connection with the following info (connection name can differ):

	Hostname: 127.0.0.1 
	Username: root

Once connected, select "Server" -> "Data Import".
Change the path of "Import from Dump Project Folder" to the path of "sql_files" folder stored in the cloned "staff_management_laravel" folder.
Press the "Start Import" button at the bottom right.

5. Open command terminal in your "staff_management_laravel" folder and enter "php artisan serve".
6. Browse to your localhost server (it will be displayed in the terminal, or just enter localhost:8000 in your browser) to view the website.


# FEATURES

1. Create/delete employees.
2. Asign project to employees by project ID.
3. Create new projects.
4. Edit project names.
5. Edit employee names and their asigned projects.



