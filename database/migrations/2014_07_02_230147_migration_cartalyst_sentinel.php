<?php

/**
 * Part of the Sentinel package.
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the 3-clause BSD License.
 *
 * This source file is subject to the 3-clause BSD License that is
 * bundled with this package in the LICENSE file.
 *
 * @package    Sentinel
 * @version    2.0.15
 * @author     Cartalyst LLC
 * @license    BSD License (3-clause)
 * @copyright  (c) 2011-2017, Cartalyst LLC
 * @link       http://cartalyst.com
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class MigrationCartalystSentinel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('code');
            $table->boolean('completed')->default(0);
            $table->timestamp('completed_at')->nullable();
            $table->timestamps();

            $table->engine = 'InnoDB';
        });

        Schema::create('persistences', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('code');
            $table->timestamps();

            $table->engine = 'InnoDB';
            $table->unique('code');
        });

        Schema::create('reminders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('code');
            $table->boolean('completed')->default(0);
            $table->timestamp('completed_at')->nullable();
            $table->timestamps();

            $table->engine = 'InnoDB';
        });

        Schema::create('roles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slug');
            $table->string('name');
            $table->text('permissions')->nullable();
            $table->timestamps();

            $table->engine = 'InnoDB';
            $table->unique('slug');
        });

        Schema::create('role_users', function (Blueprint $table) {
            $table->integer('user_id')->unsigned();
            $table->integer('role_id')->unsigned();
            $table->nullableTimestamps();

            $table->engine = 'InnoDB';
            $table->primary(['user_id', 'role_id']);
        });

        Schema::create('throttle', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->nullable();
            $table->string('type');
            $table->string('ip')->nullable();
            $table->timestamps();

            $table->engine = 'InnoDB';
            $table->index('user_id');
        });

        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('admin_id')->unsigned()->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('email');
            $table->string('password');
            $table->string('designation')->nullable();
            $table->string('officer_class')->nullable();
            $table->integer('contact_one')->nullable();
            $table->integer('contact_two')->nullable();

            $table->text('permissions')->nullable();
            $table->timestamp('last_login')->nullable();
            $table->timestamps();

            $table->engine = 'InnoDB';
            $table->unique('email');
        });

        Schema::create('organizations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('name')->nullable();
            $table->string('acronym')->nullable();
            $table->string('description')->nullable();
            $table->string('office_category')->nullable();
            $table->string('website')->nullable();
            $table->string('email')->nullable();
            $table->string('address_one')->nullable();
            $table->string('address_two')->nullable();
            $table->string('address_three')->nullable();
            $table->string('city')->nullable();
            $table->string('district')->nullable();
            $table->string('municipality')->nullable();
            $table->string('vdc')->nullable();
            $table->unsignedInteger('contact_one')->nullable();
            $table->unsignedInteger('contact_two')->nullable();
            $table->timestamps();
        });

        Schema::create('mpps', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('name')->nullable();
            $table->string('project_name')->nullable();
            $table->integer('fiscal_year')->nullable();
            $table->integer('budget_sub_head_no')->nullable();
            $table->string('procurement_description')->nullable();
            $table->string('procurement_category')->nullable();
            $table->string('contract_type')->nullable();
            $table->integer('duration')->nullable();
            $table->integer('status')->default(0)->nullable();
            $table->timestamps();
        });

        Schema::create('apps', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('fiscal_year')->nullable();
            $table->string('procurement_description')->nullable();
            $table->string('procurement_category')->nullable();
            $table->string('contract_type')->nullable();
            $table->integer('estimated_cost')->nullable();
            $table->date('date_for_tender')->nullable();
            $table->date('date_of_agreement')->nullable();
            $table->date('bid_invitation_date')->nullable();
            $table->date('date_of_consent')->nullable();
            $table->date('bid_opening_date')->nullable();
            $table->date('bid_evalutaion_completion_date')->nullable();
            $table->date('date_of_approval')->nullable();
            $table->date('loi_issue_date')->nullable();
            $table->date('contract_signing_date')->nullable();
            $table->date('work_initiation_date')->nullable();
            $table->date('work_completion_date')->nullable();
            $table->integer('status')->default(0)->nullable();
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('activations');
        Schema::drop('persistences');
        Schema::drop('reminders');
        Schema::drop('roles');
        Schema::drop('role_users');
        Schema::drop('throttle');
        Schema::drop('users');
        Schema::drop('organizations');
        Schema::drop('mpps');
        Schema::drop('apps');
    }
}
