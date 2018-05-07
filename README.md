# faq1

To run the FAQ project :

1.git clone:https://github.com/SharanGopigiri/faq1.git
2.CD into FAQ and run composer install
3.cp .env.example to .env
4.Setup database / with sqlite or other (https://laravel.com/docs/5.6/database)
5.Setup notifications to notify the user / (https://laravel.com/docs/5.6/notifications)
6.Setup basic access control / (https://laravel.com/docs/5.6/authorization)

User Stories:

1.When a user registers and logs in, he/she should be redirected to the page which says "Your logged in as customer"
2. When an admin logs in, he should be redirected to the page which says "Your logged in as admin"
3.When a agent registers and logs in, he/she should be redirected to the page which says "Your logged in as agent"

4. When a user answers a question, a mail is sent to the user who asked the question
5. when a user/admin logs in, he should be able to view his/her profile picture on the top of the page and can also change the profile picture.