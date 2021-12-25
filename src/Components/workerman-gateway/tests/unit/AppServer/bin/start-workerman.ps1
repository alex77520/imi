$__DIR__ = $(Split-Path -Parent $MyInvocation.MyCommand.Definition)

& $__DIR__\stop-workerman.ps1

$procss = Start-Process -PassThru -FilePath "php" -ArgumentList "$__DIR__\workerman workerman/start --name register"
$procss.Id | Out-File $__DIR__/register.pid
Start-Sleep -m 1000

$procss = Start-Process -PassThru -FilePath "php" -ArgumentList "$__DIR__\workerman workerman/start --name gateway"
$procss.Id | Out-File $__DIR__/gateway.pid
Start-Sleep -m 1000

$procss = Start-Process -PassThru -FilePath "php" -ArgumentList "$__DIR__\workerman workerman/start --name websocket"
$procss.Id | Out-File $__DIR__/websocket.pid
Start-Sleep -m 3000

$procss = Start-Process -PassThru -FilePath "php" -ArgumentList "$__DIR__\workerman workerman/start --name http"
$procss.Id | Out-File $__DIR__/http.pid
