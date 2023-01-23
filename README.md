# ![EPICOS](https://user-images.githubusercontent.com/95140308/213947586-f3296450-1e42-4096-9cb2-2537c9af6a75.png)
ecip-OS (Or EPIC-OS) Is a Open Source Web OS Built in PHP, CSS and MySQL
# <font color="red">DISCLAIMER</font> ecip-OS will work better in self-hosted servers, Web Hosting Providers may cause ecip-OS Accounts to crash
# Features
- Personal Folder to store your files
- Create Accounts so others can also access to ecip-OS
- Includes a Music Player so you can hear your MP3 Files from Your Folder
- Includes a Modified Version of <a href="https://github.com/PressTpro/PressCalc">PressCalc</a> to make calcs on  ecip-OS
- Includes a Small Browser to search small Websites
- Includes a Text Editor To Write Notes, These will be not saved
# Setup
1. Download the Repository, Delete this file if is not necesary
2. Setup the Database, Create a Database named ecipos and run this SQL Query

<code>CREATE TABLE `accounts` (
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
ALTER TABLE `accounts`
  ADD UNIQUE KEY `username` (`username`);
COMMIT;</code>
3. Insert a User with the name "Administrator" and the Password "Password" or just run
<code>INSERT into accounts (username, password) VALUES (Administrator, password)</code>
4. Done! Enjoy ECIP-OS, You can also install Modified versions using the same process
# Screenshots
![](https://user-images.githubusercontent.com/95140308/213948290-9c776e74-c0e8-4782-9989-531533f365e7.png)
![](https://user-images.githubusercontent.com/95140308/213948235-bdb3a15e-c99c-474c-94dd-3ee20fdace1f.png)![](https://user-images.githubusercontent.com/95140308/213948264-024a57d0-f510-418e-8603-821ca20f74eb.png)

