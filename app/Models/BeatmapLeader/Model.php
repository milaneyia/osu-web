<?php

/**
 *    Copyright 2015 ppy Pty. Ltd.
 *
 *    This file is part of osu!web. osu!web is distributed with the hope of
 *    attracting more community contributions to the core ecosystem of osu!.
 *
 *    osu!web is free software: you can redistribute it and/or modify
 *    it under the terms of the Affero GNU General Public License version 3
 *    as published by the Free Software Foundation.
 *
 *    osu!web is distributed WITHOUT ANY WARRANTY; without even the implied
 *    warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *    See the GNU Affero General Public License for more details.
 *
 *    You should have received a copy of the GNU Affero General Public License
 *    along with osu!web.  If not, see <http://www.gnu.org/licenses/>.
 */
namespace App\Models\BeatmapLeader;

use App\Models\Beatmap;
use App\Models\User;
use Illuminate\Database\Eloquent\Model as BaseModel;

abstract class Model extends BaseModel
{
    protected $primaryKey = 'beatmap_id';

    protected $casts = [
        'beatmap_id' => 'integer',
        'user_id' => 'integer',
        'score_id' => 'integer',
    ];

    public $timestamps = false;

    public function beatmap()
    {
        return $this->belongsTo(Beatmap::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    abstract public function score();
}