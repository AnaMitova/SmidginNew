@echo off
REM ============================================================
REM  Smidgin - start the local Laravel dev server
REM  Double-click this file, then open http://127.0.0.1:8000
REM  (Uses the portable PHP 8.4 in %USERPROFILE%\php84, because
REM   this project needs PHP 8.3+ and system XAMPP is 8.2.)
REM ============================================================
setlocal
set PHP=%USERPROFILE%\php84\php.exe

if not exist "%PHP%" (
  echo ERROR: PHP 8.4 not found at "%PHP%".
  echo See RUNNING.md for how to restore it.
  pause
  exit /b 1
)

cd /d "%~dp0"

if not exist "vendor\autoload.php" (
  echo Installing PHP dependencies (first run)...
  "%PHP%" "%ProgramData%\ComposerSetup\bin\composer.phar" install --no-interaction --prefer-dist
)

echo.
echo Starting Smidgin at http://127.0.0.1:8000  (press Ctrl+C to stop)
echo.
"%PHP%" artisan serve --host=127.0.0.1 --port=8000
endlocal
