<h1>9Anime Website</h1>
<ul>
<li>Author : <span><strong><a href='https://github.com/OBrien-reece/'>Evans Indeche</a></strong></span></li>
<li>Twitter : <span><strong><a href='https://twitter.com/indeche_oj/'>@indeche_oj</a></strong></span></li>
</ul>
<h2>Usage</h2>
<span>Setup you coding environment</span>

````
git clone https://github.com/OBrien-reece/anime-blog.git
cd anime-blog
composer install
npm install
npm run dev
php artisan key:generate
php artisan cache:clear && php artisan config:clear 
php artisan serve 
````

<h1>Database setup</h1>

I have uploaded the sql file within this project ````9anime.sql````

You can simply create a database on your localhost called ````9anime````, then import the database using the sql file attached
