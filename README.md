PHP Login Form 

## Getting Started

Clone the repository
```bash
git clone https://github.com/ERFouX/login-form.git
```

Move the project folder to your nginx directory (here it refers to the html folder). This requires root access!
The path where you need to copy the files may vary (you can edit it in the file located at /etc/nginx/nginx.conf).
```bash
sudo cp -r login-form /usr/share/nginx/html
```

Now, start the required services (nginx and mariadb)
```bash
sudo systemctl start nginx.service

sudo systemctl start mariadb.service
```

You can now view the project output. To do this, simply open your browser and go to the address localhost/login-form
```bash
firefox localhost/login-form
```

## I will add the database file soon and explain how to add it.
