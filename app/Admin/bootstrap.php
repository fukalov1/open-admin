<?php

/**
 * Open-admin - admin builder based on Laravel.
 * @author z-song <https://github.com/z-song>
 *
 * Bootstraper for Admin.
 *
 * Here you can remove builtin form field:
 * OpenAdmin\Admin\Form::forget(['map', 'editor']);
 *
 * Or extend custom form field:
 * OpenAdmin\Admin\Form::extend('php', PHPEditor::class);
 *
 * Or require js and css assets:
 * Admin::css('/packages/prettydocs/css/styles.css');
 * Admin::js('/packages/prettydocs/js/main.js');
 *
 */

use OpenAdmin\Admin\Facades\Admin;

Admin::js('https://unpkg.com/vue@3/dist/vue.global.js');
Admin::js('https://cdn.jsdelivr.net/npm/chart.js@3.6.0/dist/chart.min.js');

Admin::js('/build/assets/app-DspuE8pW.js');
Admin::js('/build/assets/app-l0sNRNKZ.js');

OpenAdmin\Admin\Form::forget(['editor']);
