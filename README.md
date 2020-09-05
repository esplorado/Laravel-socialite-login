# Laravel (6.X) Socialite login

This repo shows how to login in web app via third party app like Google,Facebook,Twitter,Github,LinkedIn. 

## Follow bellow instructions after cloning repo in your system. 
1. Set database credentials in .env file. 
2. Run "php artisan key:generate" command from project root directory. 
3. Run "php artisan migrate --seed" command. This command will create users table and also add admin details in database. 
4. Select any third party for login medium. 
5. Put Client id, Secret key,Callback url in config/services.php file.
6. Thats it you're good to go.
7. Admin Credentials :- 
    1. Email : admin@gmail.com 
    2. Password : 123456

