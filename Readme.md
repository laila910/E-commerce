# E-Commerce using Laravel,php and vuejs

## steps

1. Via Composer Create-Project `composer create-project --prefer-dist laravel/laravel:^8.0 Ecommerce`

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

13. you can keep going or try to fix this warning  by adding this to webpack.mix.js: `mix.webpackConfig({ stats: { children: true }});` after That we create our database and assign it in .env file

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

27. Database seeding completed Successfully

28. create ProductsController `php artisan make:controller ProductsController --resource`

29. in web.php , use this controller to render product view :) 

30. make Add To Cart button Vue component ,use it in product.blade.php. 

31. we don't see the button because we need to compile it so you should run this command `npm run dev`

32. I get this error `WARNING in ./resources/sass/app.scss (./node_modules/css-loader/dist/cjs.js??clonedRuleSet-6[0].rules[0].use[1]!./node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-6[0].rules[0].use[2]!./node_modules/resolve-url-loader/index.js??clonedRuleSet-6[0].rules[0].use[3]!./node_modules/sass-loader/dist/cjs.js??clonedRuleSet-6[0].rules[0].use[4]!./resources/sass app.scss)Module Warning (from ./node_modules/postcss-loader/dist/cjs.js): Warning(3474:3) autoprefixer: Replace color-adjust to print-color-adjust. The color-adjust shorthand is currently deprecated.Child mini-css-extract-plugin C:\xampp\htdocs\E-commerce\node_modules\css-loader\dist\cjs.js??clonedRuleSet-6[0].rules[0].use[1]!C:\xampp\htdocs\E-commerce\node_modules\postcss-loader\dist\cjs.js??clonedRuleSet-6[0].rules[0].use[2]!C:\xampp\htdocs\E-commerce\node_modules\resolve-url-loader\index.js??clonedRuleSet-6[0].rules[0].use[3]!C:\xampp\htdocs\E-commerce\node_modules\sass-loader\dist\cjs.js??clonedRuleSet-6[0].rules[0].use[4]!C:\xampp\htdocs\E-commerce\resources\sass\app.scss compiled with 1 warning webpack compiled with 1 warning`

33. to solve this error, Irun this command `npm install autoprefixer@10.4.5 --save-exact` and re-run `npm run dev`

34. but still the button ddn't appear , because in app.js call app element , and if i search in product view, Cann't find this .

35. creating layout files 

36. after we pass userId and ProductId when the user click on Add To Cart button , we need to recompile `npm run dev`

37. install the toaster package to show the errors in smart way :) `npm install vue-toastr`

38. Every time I change in vue file , i need to recompile `npm run dev`

39. if the user is not logged in , show exception by toastr to make him login :) .

40. if the user is logged in, add product to cart by cart route

41. open web.php to add cart route :) 

42. add CartsController `php artisan make:controller CartsController --resource`

43. adding to cart processing using axios

44. add product in cart backend processing :) 

45. we have problem , the products don't added to cart even if user is logged in :(

46. The error was in the model, filables supposed to be fillable :)

47. Now, I can add product to card table and if the product exists before the quanity will increment :) 

48. Get number of product in user Cart and pass data from controller to add to cart component response by `this.$root.$emit('changeInCar',$response.data.items)`

49. we need to create new Cart vue component to display number of users' products in cart in the header with tab cart :)

50. I need to register Cart.vue component in app.js

51. start to transform client to the checkout page when he click on cart button in header :)

52. with help of [snippets](https://bootsnipp.com/snippets/5MyR8) to fill the content html and css  of checkout page Thus I can show my products details in cart :) 

53. make new vue component Checkout.vue and register this component in app.js :)

54. Display cart items in checkout page 

55. Now we place order with help of [snippets](https://bootsnipp.com/snippets/ypqoW)

56. add  address and payment form code in checkout component and checouk blade :) 

57. use Strip package with help of [stripe](https://cartalyst.com/manual/stripe-laravel/14.x) 

58. open composer.json add "cartalyst/stripe-laravel":"^13.0" to the require array 

59. run `composer install` 

60. I got this warning : `the lock file is not up to date with the latest changes in composer.json. you may be getting outdated dependencies. It is recommend that you run 'composer update' or ;'composer update <package name>'` so I had to run `composer update`

61. open config/app.php and add `Cartalyst\Stripe\Laravel\StripeServiceProvider::class,` in the providers array and add this `'Stripe' => Cartalyst\Stripe\Laravel\Facades\Stripe::class,` in the aliases array :) 

62. run `composer dump-autoload`

63. go to [stripeSite](https://stripe.com/) ,first you need to sign-up .. then dashboard to developers button and API Keys :) 

64. click on reveal test key and copy it :)

65. Open .env file and add stripe secret 

66. then with the help of [stripdoc](https://stripe.com/docs/testing) go to cartcontroller to start in the payment process :) 

67. use card number for testing `4242 4242 4242 4242`

68. after succeeded payment ... for this day, stop on error of payment order details on stripe dashboard . complete tommorow and try to solve it :(

69. this error because I'm not activate my payment account with my details in stripe dashboard

70. after make Successfull payment, we need to make processing model for details of the payment and its details :) `php artisan make:model Processing -m` and ProcessingsController `php artisan make:controller ProcessingsController --resource`

71. add foreign key in processing table to connect with details of products of user in cart table `php artisan make:migration add_client_id_processings_table`

72. after filling the relation data ,add `client_id` if filable in Processing mode and  run `php artisan optimize:clear`










