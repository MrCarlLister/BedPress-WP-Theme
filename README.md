
# Getting Started #

+ Run ```npm install``` to get started


# Installing git on server #

* Clone repository ``` git clone https://github.com/account-name/88project.git ```
* Edit .git/config and change ```url``` to
``` ssh://git@88project.github.com/MrCarlLister/88project.git ```
* ```ssh-keygen``` create 88project.id_rsa
* In ~/.ssh edit or create `config` to include
```
Host 88project.github.com
HostName github.com
User git
IdentityFile home/username/.ssh/88project.id_rsa
IdentitiesOnly yes
```
* Then you can ```git pull origin master/staging```

# Server details #

### DEV ###

* accountname = 88project
* sitename  = 88project-dev.git
* foldername = public_html/88project.co.uk/dev

### LIVE ###

* accountname = 88project
* sitename  = 88project-live.git
* foldername = public_html/88project.co.uk/live


### USEFUL GIT COMMANDS ###

```ssh eightyei@77.104.134.123 -p18765```