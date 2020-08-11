
## Section 6: Build Professional Ecommerce Project

	1.6.1.64. Build Professional Ecommerce Project

	2.6.2.65. Project Introduction : What you will build end of this course.

	3.6.3.66. Download Excies Files for Ecommerce Project

	4.6.4.67. Project Setup Ready for work (default by ka)
	> download exercise files
	> extract to root
	> setup db
	> run the scripts:http://localhost/KAZIARIYAN/lecom/
	> git status


## Section 7: Theme Admin Panel Customization

	1.7.1.68. Admin Panel Customization Part 1
	> Added default admin homepage with assets in public/backend

	2.7.2.69. (Create admin login page) Admin Panel Customization Part 2
	> Create admin login page
	> git status
		modified:   resources/views/admin/admin_layouts.blade.php
    modified:   resources/views/admin/auth/login.blade.php

	3.7.3.70. (Add admin homepage) Admin Panel Customization Part 3
	> Add admin home page template
	> git status
		modified:   resources/views/admin/admin_layouts.blade.php
    modified:   resources/views/admin/home.blade.php

	4.7.4.71. (Reset admin password) Setup Admin Password Change Option
	> Reset admin password
	> git status
		new file:   public/backend/img/anjel.JPG
    modified:   resources/views/admin/admin_layouts.blade.php
    modified:   resources/views/admin/auth/passwordchange.blade.php	

	5.7.5.72. (Create tables: categories, subcategories, brands) Laravel controller model and migration making Part 1
	> Create tables: categories, subcategories, brands
		> php artisan make:migration create_categories_table --create=categories
		> php artisan make:migration create_subcategories_table --create=subcategories
		> php artisan make:migration create_brands_table --create=brands
		> php artisan migrate
	>git status
		new file:   database/migrations/2020_08_11_085652_create_categories_table.php
		new file:   database/migrations/2020_08_11_085833_create_subcategories_table.php
		new file:   database/migrations/2020_08_11_085907_create_brands_table.php
		modified:   readme.md

	6.7.6.73. (Create CategoryContrller and Model for Category, Subcategory, and Brand) Laravel controller model and migration making Part 2
	> Create controlller: CategoryController
		> php artisan make:controller Admin/Category/CategoryController
	> Create model: Category, Subcategory, Brand
		> php artisan make:model Model/Admin/Category
		> php artisan make:model Model/Admin/Subcategory
		> php artisan make:model Model/Admin/Brand
	> make onle authenticated user can access the admin	
	> make fillable to those models	
	> git status
		new file:   app/Http/Controllers/Admin/Category/CategoryController.php
        new file:   app/Model/Admin/Brand.php
        new file:   app/Model/Admin/Category.php
        new file:   app/Model/Admin/Subcategory.php
        modified:   readme.md	
