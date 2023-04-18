<?php

use Slowlyo\OwlTerminal\Http\Controllers;
use Illuminate\Support\Facades\Route;

// 终端
Route::get('dev_tool_terminal', [Controllers\OwlTerminalController::class, 'index']);
// artisan 信息查询
Route::post('dev_tool_terminal/artisan_schema', [Controllers\OwlTerminalController::class, 'artisanSchema']);
// composer options
Route::get('dev_tool_terminal/composer_options', [Controllers\OwlTerminalController::class, 'composerOptions']);
// 预加载
Route::post('dev_tool_terminal/preload', [Controllers\OwlTerminalController::class, 'preload']);
// 终端执行命令
Route::post('dev_tool_terminal/exec', [Controllers\OwlTerminalController::class, 'exec']);
