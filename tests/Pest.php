<?php

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(TestCase::class, DatabaseMigrations::class, RefreshDatabase::class)->in('Feature');
