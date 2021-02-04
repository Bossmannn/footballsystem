<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use \DateTimeInterface;

class Game extends Model
{
    use SoftDeletes;

    public $table = 'games';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'team_1_id',
        'team_2_id',
        'result_1',
        'result_2',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
    
    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
    public function setTeam1IdAttribute($input)
    {
        $this->attributes['team_1_id'] = $input ? $input : null;
    }

    public function setTeam2IdAttribute($input)
    {
        $this->attributes['team_2_id'] = $input ? $input : null;
    }

    public function setResult1Attribute($input)
    {
        $this->attributes['result_1'] = $input ? $input : null;
    }

    public function setResult2Attribute($input)
    {
        $this->attributes['result_2'] = $input ? $input : null;
    }
    

    public function team_1()
    {
        return $this->belongsTo(Team::class, 'team_1_id');
    }

    public function team_2()
    {
        return $this->belongsTo(Team::class, 'team_2_id');
    }
}
