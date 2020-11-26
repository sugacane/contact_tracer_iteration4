<?php

/**
 * This code is from "Cornel Verster" tutorial on "UUIDs in Laravel 7"
 * link to page: https://dev.to/cverster/uuids-in-laravel-7-4kke
 */



namespace App\Http\Traits;

use Illuminate\Support\Str;

trait UsesUuid
{
  protected static function bootUsesUuid() {
    static::creating(function ($model) {
      if (! $model->getKey()) {
        $model->{$model->getKeyName()} = (string) Str::uuid();
      }
    });
  }

  public function getIncrementing()
  {
      return false;
  }

  public function getKeyType()
  {
      return 'string';
  }
}