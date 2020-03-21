<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Watch extends Model {
    protected $guarded = [];

    public function path() {
        return route( 'watches.show', $this );
    }
}
