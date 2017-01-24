# Ultimate Sweet Alert Messages for Laravel

## Installation

First, pull the package through composer

```
composer require tareqmahmud/sweet
```

If you use laravel 5 then include SweetServiceProvider within config/app.php

```php
'providers' => [
    Tareqmahmud\Sweet\SweetServiceProvider::class,
];
```

If you want to use facade then add Sweet facade within alias array to config/app.php

```php
'Sweet' => Tareqmahmud\Sweet\Facades\Sweet::class,
```

After add sweet package go to your project root directory and run this to your terminal

```basic
php artisan vendor:publish --tag=sweet_assets
```

>   It'll copy sweetalert.css and sweetalert.js to your public/css/libs/sweetalert.css & public/css/libs/sweetalert.js

Then add this to your main HTML layout file

```html
<link rel="stylesheet" href="css/libs/sweetalert.css">
<script src="js/libs/sweetalert.js"></script>
```

Installation done now you can use sweet alert package.

#### View Sweet Message

For view sweet message add sweet_message to your main layout file

```php
@include(sweet::flash_message)
```

>   You must need to add this after sweetalert.js. Otherwise, you can't show any sweet message

## Usage

### With the helper function

Within you controllers, before redirect, you can add sweet notification

```php
public function update()
{
    sweet("New User", "Successfully new user created");

    return back();
}
```

>   Or you can only pass message like sweet("Successfully New user created")

##### If you want you can add label also.

-   ```sweet("New User", "Successfully new user created", "info")```


-   ```sweet("New User", "Successfully new user created", "success")```


-   ```sweet("New User", "Successfully new user created", "error")```


-   ```sweet("New User", "Successfully new user created", "warning")```

##### You can call label method like this:

-   ```sweet()->info("New User", "Successfully new user created")```


-   ```sweet()->success("New User", "Successfully new user created")```


-   ```sweet()->error("New User", "Successfully new user created")```


-   ```sweet()->warning("New User", "Successfully new user created")```

If you want to auto-hide alert then you can add autoHide() method

```php
public function update()
{
    sweet("New User", "Successfully new user created", "success")->autoHide();

    return back();
}
```

##### Or

```php
public function update()
{
    sweet()->success("New User", "Successfully new user created")->autoHide();

    return back();
}
```

### With the Facade

First import Sweet facade in your controller.

```php
use Sweet;
```

Within you controllers, before redirect, you can add sweet notification

```php
public function update()
{
    Sweet::message("New User", "Successfully new user created");

    return back();
}
```

>   Or you can pass only 

##### If you want you can add label also.

-   ```Sweet::message("New User", "Successfully new user created", "info")```


-   ```Sweet::message("New User", "Successfully new user created", "success")```


-   ```Sweet::message("New User", "Successfully new user created", "error")```


-   ```Sweet::message("New User", "Successfully new user created", "warning")```

##### You can call label method like this:

-   ```Sweet::info("New User", "Successfully new user created")```


-   ```Sweet::success("New User", "Successfully new user created")```


-   ```Sweet::error("New User", "Successfully new user created")```


-   ```Sweet::warning("New User", "Successfully new user created")```

If you want to auto-hide alert then you can add autoHide() method

```php
public function update()
{
    Sweet::message("New User", "Successfully new user created", "success")->autoHide();

    return back();
}
```

##### Or

```php
public function update()
{
    Sweet::success("New User", "Successfully new user created")->autoHide();

    return back();
}
```

##### Sweet alert with options

You can pass all sweet alert options like this

```php
public function update()
{
    sweet()->success("New User", "Successfully new user created", [
        "confirmButtonText"  => "Cool",
        "confirmButtonColor" => "#AEDEF4"
    ]);

    return back();
}
```

##### Or

```php
public function update()
{
    Sweet::success("New User", "Successfully new user created", [
        "confirmButtonText"  => "Cool",
        "confirmButtonColor" => "#AEDEF4"
    ]);

    return back();
}
```

>   You can get all sweet alert options in this link [Sweet Options](http://t4t5.github.io/sweetalert/)

### Example

PostController.php

```php
<?php

namespace App\Http\Controllers;

class PostController extends Controller
{
    public function store()
    {
    	sweet("Successfully new user created");

    	return view("index");
    }
}

```

index.blade.php

```html
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sweet Alert</title>
	<link rel="stylesheet" href="css/libs/sweetalert.css">
</head>
<body>
	<h2>Sweet Alert Notification</h2>
	
	<script src="js/libs/sweetalert.js"></script>
	@include("sweet::sweet_message")
</body>
</html>
```

![sweet](https://cloud.githubusercontent.com/assets/4035645/22215598/f6903920-e169-11e6-8a25-dedea4b942e8.png)

## Credits

### [Sweet Alert](Sweet Alert) - Beautiful Sweet Alert JS