<?php

namespace Slowlyo\OwlTerminal;

use Slowlyo\OwlAdmin\Extend\ServiceProvider;

class OwlTerminalServiceProvider extends ServiceProvider
{
    protected $menu = [
        [
            'title' => '终端',
            'url'   => '/dev_tool_terminal',
            'icon'  => 'teenyicons:terminal-outline',
        ],
    ];

    public function settingForm()
    {
        return $this->baseSettingForm()->body([
            amisMake()->Alert()->showIcon(true)->body("有可能你的命令会有其他名称, 比如 php80 / composer80 等等, 你可以在这里设置别名, 以便在终端中使用"),
            amisMake()->TextControl()->name('php_alias')->label('PHP别名')->value('php'),
            amisMake()->TextControl()->name('composer_alias')->label('Composer别名')->value('composer'),
        ]);
    }
}
