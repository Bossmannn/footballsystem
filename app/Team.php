<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use \DateTimeInterface;



class Team extends Model
{
    use SoftDeletes;

    public $table = 'teams';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'teams',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
    
public function getPlayedAttribute()
    {
        return Game::where(function($query) {
            $query->where('team_1_id', $this->attributes['id'])->orWhere('team_2_id', $this->attributes['id']);
        })
        ->whereNotNull('result_1')
        ->count();
    }

    public function getWonAttribute()
    {
        return Game::whereNotNull('result_1')
            ->where(function($query) {
                $query->where(function($query2) {
                    $query2->where('team_1_id', $this->attributes['id'])->whereRaw('result_1 > result_2');
                })->orWhere(function($query2) {
                    $query2->where('team_2_id', $this->attributes['id'])->whereRaw('result_1 < result_2');
                });
            })
            ->count();
    }
    public function getTiedAttribute()
    {
        return Game::whereNotNull('result_1')
            ->whereRaw('result_1 = result_2')
            ->where(function($query) {
                $query->where('team_1_id', $this->attributes['id'])
                    ->orWhere('team_2_id', $this->attributes['id']);
            })
            ->count();
    }

    public function getLostAttribute()
    {
        return Game::whereNotNull('result_1')
            ->where(function($query) {
                $query->where(function($query2) {
                    $query2->where('team_1_id', $this->attributes['id'])->whereRaw('result_1 < result_2');
                })->orWhere(function($query2) {
                    $query2->where('team_2_id', $this->attributes['id'])->whereRaw('result_1 > result_2');
                });
            })
            ->count();
    }


public function getPointsAttribute(){
        
        return $this->getWonAttribute() * (3) + $this->getTiedAttribute() * (1); 
    }
}


