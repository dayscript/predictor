<?php

namespace App\Predictor;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id'];
    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = ['short'];
    /**
     * Fix team name
     */
    public function fixName()
    {
        if (starts_with($this->name, 'Semi-Final ') && ends_with($this->name, ' Winner')) $this->name = 'Ganador Semi-Final ' . substr($this->name, 11, 1);
        elseif (starts_with($this->name, 'Semi-Final ') && ends_with($this->name, ' Loser')) $this->name = 'Perdedor Semi-Final ' . substr($this->name, 11, 1);
        elseif (starts_with($this->name, 'Group ') && ends_with($this->name, ' Winner')) $this->name = 'Ganador Grupo ' . substr($this->name, 6, 1);
        elseif (starts_with($this->name, 'Group ') && ends_with($this->name, ' Second Place')) $this->name = 'Segundo Lugar Grupo ' . substr($this->name, 6, 1);
        elseif (starts_with($this->name, 'Semi-Finalist ')) $this->name = str_replace('Semi-Finalist', 'Semi-Finalista', $this->name);
        elseif (starts_with($this->name, 'Quarter-Finalist ')) $this->name = str_replace('Quarter-Finalist', 'Cuartos-Finalista', $this->name);
        $this->save();
    }

    /**
     * Short name
     * @return string
     */
    public function getShortAttribute()
    {
        return strtoupper(substr($this->name,0,3));   
    }
    /**
     * Groups list
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function groups()
    {
        return $this->belongsToMany(Group::class)->withPivot('order')->withTimestamps();
    }
}
