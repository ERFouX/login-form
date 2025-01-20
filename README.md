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


## FA :

## شروع کنید 

مخزن را دریافت کنید
```bash
git clone https://github.com/ERFouX/login-form.git
```

فولدر پروژه را به دایرکتوری nginx خود (در اینجا منظور پوشه‌ی html است) منتقل کنید. اینکار نیاز به دسترسی root‌ دارد!
مسیری که باید فایل را به آنجا کپی کنید ممکن است متفاوت باشد (میتوانید آنرا در فایل قرار گرفته در مسیر /etc/nginx/nginx.conf ویرایش کنید.)
```bash
sudo cp -r login-form /usr/share/nginx/html
```

حال سرویس های مورد نیاز را اجرا کنید (nginx و mariadb)
```bash
sudo systemctl start nginx.service

sudo systemctl start mariadb.service
```

حالا میتوانید خروجی پروژه را مشاهده کنید برای اینکار کافی است مرورگر خود را باز کنید و وارد آدرس localhost/login-form
```bash
firefox localhost/login-form
```
## به زودی فایل دیتابیس را اضافه می کنم و نحوه اضافه کردن آن را توضیح می دهم.
