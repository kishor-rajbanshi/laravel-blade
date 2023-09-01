# Laravel Blade

A convenient Artisan command for effortlessly creating custom Blade files in Laravel.

## Table of Contents

- [Installation](#installation)
- [Usage](#usage)
  - [Creating Blade Templates](#creating-blade-templates)
    - [Basic Usage](#basic-usage)
    - [Using Subfolders](#using-subfolders)
  - [Example](#example)
- [License](#license)
- [Support and Issues](#support-and-issues)
- [Contributing](#contributing)
- [Author](#author)

## Installation

You can install this package via Composer:

```bash
composer require kishor-rajbanshi/laravel-blade
```

After installation, the Artisan command `make:blade` will be available in your Laravel application.

## Usage

### Creating Blade Templates

#### Basic Usage

To create a new Blade file in the default `resources/views` directory, use the following Artisan command:

```bash
php artisan make:blade {template-name}
```

Replace `{template-name}` with the name of your Blade file.

#### Using Subfolders

You can create Blade files within subfolders using either slashes or dots as separators. For example:

```bash
php artisan make:blade folder/folder/blade
```

This command will create a Blade file named `blade.blade.php` within the `folder/folder` subdirectory.

You can use dots as separators as well:

```bash
php artisan make:blade folder.folder.blade
```

This command will achieve the same result, creating the Blade file in the `folder/folder` subdirectory.

If the specified subfolder does not exist, it will be created automatically.

### Example

Let's create a Blade template named `welcome` in a subfolder:

```bash
php artisan make:blade subfolder/welcome
```

This command will create a Blade file named `welcome.blade.php` within the `resources/views/subfolder` directory, and it will create the `subfolder` directory if it doesn't exist.

## License

This package is open-source software licensed under the [MIT License](LICENSE.md).

## Support and Issues

If you encounter any issues or have questions about this package, please feel free to [open an issue](https://github.com/kishor-rajbanshi/laravel-blade-generator/issues) on GitHub.

## Contributing

Contributions are welcome! If you'd like to improve this package or report any bugs, please fork the repository and create a pull request.

## Author

This Laravel Blade package is developed by [Kishor Rajbanshi](https://github.com/kishor-rajbanshi).

Thank you for using Laravel Blade! We hope it enhances your Laravel development experience.