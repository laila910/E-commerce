# E-Commerce using Laravel,php and vuejs

## steps

1. Via Composer Create-Project `composer create-project --prefer-dist laravel/laravel:^7.0 Ecommerce`

2. installing laravel/ui package `composer require laravel/ui:^2.4`

3. Once the laravel/ui package has been installed, you may install the frontend scaffolding using the ui Artisan command:
// Generate login / registration scaffolding...
`php artisan ui vue --auth`

4. for compile Your fresh scaffolding run this command and run all mix tasks... `npm run dev`

5. should install laravel-mix package `npm install laravel-mix@latest` and re-run step 4

6. I have a problem that Node_Modules doesn't exist so I had to run this command `npm install --save-dev webpack webpack-cli webpack-dev-server` and re-run step 4

7. I got this error `i Compiling Mix √ Mix: Compiled with some errors in 2.74s 1 WARNING in child compilations (Use 'stats.children: true' resp. '--stats-children' for more details) ERROR in ./resources/js/components/ExampleComponent.vue 1:0 Module parse failed: Unexpected token (1:0) You may need an appropriate loader to handle this file type, currently no loaders are configured to process this file. See https://webpack.js.org/concepts#loaders <template> <div class="container">  <div class="row justify-content-center"> webpack compiled with 1 error and 1 warning`

8. to solve it open file webpack.mix.js : and add this `mix.js('resources/js/app.js', 'public/js').vue().sass('resources/sass/app.scss', 'public/css');`

9. Additional dependencies must be installes `npm install vue-loader@^15.9.7 --save-dev --legacy-peer-deps` and re-run `npm run dev`

10. I got this error : `cannot find module 'webpack/lib/rules/descriptiondatamatcherruleplugin'`

11. to solve it Run this command `npm update vue-loader` and re-run `npm run dev`

12. finally Laravel Mix is compliled Successfully with `1 warning in child compilations (Use 'stats.children: true' resp. '--stats-children' for more details) webpack compiled with 1 warning`

13. you can keep going or try to fix this warning  by adding this to webpack.mix.js: `mix.webpackConfig({ stats: { children: true }});`

14. Run migrations `php artisan migrate`

15. register with any data :) . thats work 

16. rename welcome blade to product blade & in web.php change view welcome to view product 

17. write our product blade as we want :) as our assets in public folder :)

18. Now , we should create Product Model `php artisan make:model Product -mfs` m for migration ,f for factory, s for seeder :) 

19. Now, we need to create model for Cart `php artisan make:model Cart -m` 

20. create the field of Product Table and Cart Table

21. Now, We can run Migration :) `php artisan migrate`

22. lets use the factory to Generate some products :) . Open Product factory and in defintion function specify the type and  number of faker data you want in details with the help of this [FakerLibrary](https://github.com/fzaninotto/Faker)

23. in the product seeder , run factory to create products :)

24. in the database seeder file , we call the product seeder :) 

25. Now, create fillables in Product Model

26. run the seed `php artisan migrate:fresh --seed`

27. When I run the previous command , Error is found `Illuminate\Database\Eloquent\Factories\HasFactory not found`