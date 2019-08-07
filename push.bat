@echo off
color e
cd C:/xampp/htdocs/preskok
git add -A
set /P text=Enter reason for change: 
git commit -m "%text%"
git push
pause