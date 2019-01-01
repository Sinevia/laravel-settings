<?php
class PackageSineviaSettingsTablesCreate extends Illuminate\Database\Migrations\Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Sinevia\Tasks\Models\Settings::tableCreate();
    }
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {        
        Sinevia\Tasks\Models\Setting::tableDelete();
    }
}
