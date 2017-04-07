@echo off
set loopcount=13
:loop
"C:\Program Files (x86)\GnuWin32\bin\"wget http://0v.hu/apps/pasziansz/img/cards/s%loopcount%.png -P d:\k
set /a loopcount=loopcount-1
if %loopcount%==0 goto exitloop
goto loop
:exitloop