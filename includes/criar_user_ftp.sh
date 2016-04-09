#!/bin/bash
ftp_user=$1
user='cyberpanel'
shell='/sbin/nologin'
ftp_path_a=$3
password=$2
# Adicionar utilizador ftp
sudo /usr/sbin/useradd $ftp_user \
    -s $shell \
    -o -u $(id -u $user) \
    -g $(id -u $user) \
    -M -d "$ftp_path_a"  > /dev/null 2>&1

# Configurar password
echo "$ftp_user:$password" | sudo /usr/sbin/chpasswd
ftp_md5=$(awk -v user=$ftp_user -F : 'user == $1 {print $2}' /etc/shadow)

# Criar pasta principal do utilizador
    if [ ! -e "$ftp_path_a" ]; then
        mkdir -p $ftp_path_a
        chown $user:$user "$ftp_path_a"
        chmod 751 "$ftp_path_a"
    fi


/bin/chown $ftp_user:$user "$ftp_path_a"
/bin/chmod 751 "$ftp_path_a"