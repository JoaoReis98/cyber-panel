# Cyber-Panel
Game Server - Control Panel

**REQUIREMENTS**

Tested and working on: Ubuntu Server 14.04 64 bits

Probably works on most __Debian__ based systems, tell us your experience and we will put the Operative System that you used on the list.


**HOW TO INSTALL**

We recommend you too install first [vesta-cp](http://vestacp.com), its very easy too use and haves some needed dependencies as:
1. Pure-FDP
2. Apache
3. Mysql-Server
4. PhpMyAdmin

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

```