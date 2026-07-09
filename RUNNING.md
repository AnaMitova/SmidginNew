# Running Smidgin locally

This is a **Laravel 13** app, which requires **PHP 8.3+**. This machine's XAMPP PHP is
8.2, so a portable **PHP 8.4** was installed at `%USERPROFILE%\php84` (i.e.
`C:\Users\<you>\php84`) just for running the site. It does not touch XAMPP or your PATH.

## Quick start

Double-click **`serve.bat`**, then open:

> http://127.0.0.1:8000

Press `Ctrl+C` in the window to stop the server.

## Manual commands (equivalent)

```powershell
$php = "$env:USERPROFILE\php84\php.exe"
& $php artisan serve --host=127.0.0.1 --port=8000
```

## First-time setup (already done, for reference)

```powershell
$php = "$env:USERPROFILE\php84\php.exe"
$composer = "$env:ProgramData\ComposerSetup\bin\composer.phar"

& $php $composer install          # install PHP dependencies -> vendor/
Copy-Item .env.example .env        # create env file
& $php artisan key:generate        # set APP_KEY
New-Item database\database.sqlite  # create the SQLite DB file
& $php artisan migrate             # create tables (stores, recipes, etc.)
```

The `.env` uses SQLite (`database/database.sqlite`) with file-based
sessions/cache, so no external database server is needed.

## Long-term recommendation

For a cleaner permanent setup, install **[Laravel Herd](https://herd.laravel.com)**
(free, bundles PHP 8.3+ and a local server) or upgrade XAMPP to PHP 8.3+. Then you can
use plain `php artisan serve` without the portable PHP.

## Restoring the portable PHP (if `%USERPROFILE%\php84` is deleted)

Download `php-8.4.x-nts-Win32-vs17-x64.zip` from <https://windows.php.net/download/>,
extract to `%USERPROFILE%\php84`, copy `php.ini-development` to `php.ini`, and enable
these extensions in `php.ini` (uncomment `extension_dir = "ext"` and the lines):
`curl, fileinfo, gd, intl, mbstring, openssl, pdo_sqlite, sqlite3, zip`.
