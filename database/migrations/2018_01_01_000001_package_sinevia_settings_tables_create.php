<?php

class PackageSineviaSettingsTablesCreate extends Illuminate\Database\Migrations\Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        \Sinevia\Settings\Models\Setting::tableCreate();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        \Sinevia\Settings\Models\Setting::tableDelete();
    }

}
