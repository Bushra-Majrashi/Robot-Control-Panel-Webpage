# Robot-Control-Panel-Webpage
This project provides a web interface for controlling a robot and storing movement data in a database. The control panel allows users to give movement commands to the robot (forward, left, right, backward, and stop). The movement record is saved in a MySQL database for future analysis.

## Getting Started

**Requirements:**
PHP 7.2 or later and MySQL database server.

**Installation:**
1. Clone this repository.
2. Create a MySQL database and import the 'schema.sql' file to generate the required tables.
3. Replace the database connection information in 'index.php', 'insert.php', and 'view_movements.php' with your details.

**Running the Project:**
1. Launch your local web server (such as Apache) and point it to the project directory.
2. Go to 'http://localhost/[your_project_directory]/index.php' in your web browser.

**Note:** Replace '[your_project_directory]' with the actual directory name for your project.


## Usage
- The control panel has buttons for forward, left, right, backward, and stop movements.
- Clicking a button sends the associated movement command to the robot (implementation details depend on your specific robot communication method).
- The movement data (direction) is kept in the database table table1.
- The "View Latest Movements" page displays the most recent movement record.

### Control Panel Page
  <img width="1440" alt="Screenshot 2024-07-04 at 1 07 23 AM" src="https://github.com/Bushra-Majrashi/Robot-Control-Panel-Webpage/assets/121359904/97a746b6-56b2-4b8f-8e47-768832ad3955">

 ### View Latest Movements Page
<img width="1440" alt="Screenshot 2024-07-04 at 1 11 17 AM" src="https://github.com/Bushra-Majrashi/Robot-Control-Panel-Webpage/assets/121359904/2bc14831-1ab8-4640-805d-7ca84ad7a836">


