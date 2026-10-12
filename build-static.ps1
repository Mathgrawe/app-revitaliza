# Gera a versão estática da landing em dist/ (publicada pela Vercel).
# Rode sempre que alterar a view, o CSS ou o JS:  .\build-static.ps1
$ErrorActionPreference = 'Stop'
Set-Location $PSScriptRoot

New-Item -ItemType Directory -Force dist\assets | Out-Null
[Console]::OutputEncoding = [Text.Encoding]::UTF8
$html = docker exec -w /var/www/html/app-revitaliza www-php php index.php
[IO.File]::WriteAllText("$PWD\dist\index.html", ($html -join "`n"), (New-Object Text.UTF8Encoding $false))

if (Test-Path dist\assets\landing) { Remove-Item -Recurse -Force dist\assets\landing }
Copy-Item -Recurse assets\landing dist\assets\

Write-Host "dist/ atualizado. Faca commit e push para publicar na Vercel."
