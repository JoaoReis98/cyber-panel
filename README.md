# Cyber-Panel
Game Server - Control Panel

**REQUIREMENTS**:

Tested and working on: Ubuntu Server 14.04 64 bits

Probably works on most __Debian__ based systems, tell us your experience and we will put the Operative System that you used on the list.


**HOW TO INSTALL**:

We recommend you too install first [vesta-cp](http://vestacp.com), its very easy too use and haves some needed dependencies as:

1. Pure-FDP
2. Apache
3. Mysql-Server
4. PhpMyAdmin

Create a database and name it as  _cyberpanel_, go to _/home/admin/web/yourdomain.com/public_html/base_dados/_.

Copy the cyber-panel files too your webroot:
```bash
/home/admin/web/yourdomain.com/public_html
```
Is the default if you have [vesta-cp](http://vestacp.com) installed.
Then you need too import the database that is on _base_dados/cyberpanel.sql_.

Edit config.php database connection, you can also use email if you want too use crons:
```php
	$db_dbname = "cyberpanel";
	$db_hostname = "localhost";
	$db_username = "your_database_user";
	$db_password = "your_database_password";

	$email_host = "smtp.gmail.com";
	$email_port = 587;
	$email_user = "gmail_account@gmail.com";
	$email_pass = "your_password_here";
	$email_sec  = "tls";
``` 
After installing vestacp or installing each software listed on top run the following commands on your shell:
```bash
sudo apt-get install tmux
sudo adduser cyberpanel
sudo passwd cyberpanel
sudo mkdir /home/cyberpanel
sudo chown cyberpanel:cyberpanel /home/cyberpanel/ * -R 
```



Run this if you gonna use Steam Game-Servers
```bash
sudo su - cyberpanel
sudo apt-get install lib32gcc1
wget https://steamcdn-a.akamaihd.net/client/installer/steamcmd_linux.tar.gz
tar -xvzf steamcmd_linux.tar.gz
./steamcmd.sh +login anonymous +quit
exit
```

Because cyber-panel needs root permission too execute commands you need to do the following:
```bash
sudo visudo
admin (ALL)=(ALL) NOPASSWD:ALL
```
The user (admin) is the default user of [vesta-cp](http://vestacp.com) that runs the webserver (apache), if you dont have [vesta-cp](http://vestacp.com) use your webserver _user_ instead.



**DEFAULT USER AND PASSWORD**
email: admin@admin.com
password: admin


**INSTALLING CRON**

If you want too receive email notifications about your servers just copy the file.

**/home/admin/web/yourdomain.com/public_html/includes/cron.php** to **/home/admin/web/yourdomain.com/private/**.

You need to setup a cron job on [vesta-cp](http://vestacp.com), that is very easy just go on your [vesta-cp](http://vestacp.com) panel and on the tab (CRONS) add a cron too execute the php file example: 

**php -q /home/admin/web/yourdomain.com/private/cron.php**

And choose the timing that you want too run the cron.

You can also add the crontab manually using shell:

```bash
sudo crontab
* * * * * php -q /home/admin/web/yourdomain.com/private/cron.php
```

That will run the cron job every minute, if the user has cron option activated we will receive notifications every minute about the servers that he owns.

**IN DEVELOPMENT**
- Server Update button;
- Larger game server logs;
- Fixing some folders names and files paths;

## You can help us by commiting some changes
