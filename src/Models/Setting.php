<?php

namespace Sinevia\Settings\Models;

class Setting extends \AdvancedModel {

    protected $table = 'snv_settings_setting';
    protected $primaryKey = 'Id';
    public $timestamps = true;
    public $useUniqueId = true;

    public static function tableCreate() {
        $o = new Setting;
        return \Schema::connection($o->connection)->create($o->table, function (\Illuminate\Database\Schema\Blueprint $table) use ($o) {
                    $table->engine = 'InnoDB';
                    $table->string($o->primaryKey, 40)->primary();
                    $table->string('Key', 255);
                    $table->text('Value');
                    $table->datetime('CreatedAt')->nullable()->default(null);
                    $table->datetime('UpdatedAt')->nullable()->default(null);
                    $table->datetime('DeletedAt')->nullable()->default(null);
                });
    }

    public static function tableDelete() {
        $o = new Setting;
        return \Schema::connection($o->connection)->drop($o->table);
    }

}
