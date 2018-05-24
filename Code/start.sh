#!/bin/sh

#every 5 minutes
FREQUENCY=5;

interpreter="/usr/bin/php"

if [ -e $interpreter ]; then

  tmpDir=$(mktemp --directory)
  #get the full path of the dir
  scriptPath="$( cd "$(dirname "$0")" ; pwd -P )"
  phpScript="$scriptPath/index.php"
  cronjob="*/$FREQUENCY * * * * $interpreter $phpScript"
  
  crontab -l > $tmpDir/crontab.backup
  echo "$cronjob" >> $tmpDir/crontab.backup

  crontab $tmpDir/crontab.backup

  echo "New crontab installed at $phpScript"
else
  echo "Error: PHP interpreter not found at $interpreter"
fi
