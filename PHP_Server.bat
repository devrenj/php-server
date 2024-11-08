title PHP Explorer by @devrenj
:: PHP Explorer
:: Author: Roberto Nóbrega Jr.
:: Github: @devrenj
:: Linkedin: https://linkedin.com/in/devrenj

@echo off
:: Set a custom port here (default 8000)
set port=8000
echo [ Starting PHP server ]
echo Stop server by closing the window.
start /B php -S localhost:%port%
timeout /t 1 >nul
echo [ Opening localhost on default browser @ port %port% ]
echo Note: please, set 'index.php' on each sub-directory
start http://localhost:%port%