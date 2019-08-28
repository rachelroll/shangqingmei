<?php

namespace App\Admin\Extensions;

use Encore\Admin\Form\Field;

class Simditor extends Field
{
    protected $view = 'admin.simditor';

    protected static $css = [
        '/vendor/simditor-2.3.28/lib/simditor.css',
    ];

    protected static $js = [
        '/vendor/simditor-2.3.28/lib/module.js',
        '/vendor/simditor-2.3.28/lib/hotkeys.js',
        '/vendor/simditor-2.3.28/lib/uploader.js',
        '/vendor/simditor-2.3.28/lib/simditor.js',
    ];

    public function render()
    {
        $token = csrf_token();
        $config = json_encode((array)config('admin.extensions.simditor.config'));
        $this->script = <<<EOT
        var config = {$config}
        config['textarea'] = $('#{$this->id}')
        config['upload']['params'] = {_token: '{$token}'}
$(document).ready(function(){
      var editor = new Simditor(config);
 });
EOT;
        return parent::render();
    }
}
