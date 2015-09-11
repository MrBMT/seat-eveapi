<?php
/*
The MIT License (MIT)

Copyright (c) 2015 Leon Jacobs
Copyright (c) 2015 eveseat

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
*/

namespace Seat\Eveapi\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EveCharacterInfo
 * @package Seat\Eveapi\Models
 */
class EveCharacterInfo extends Model
{

    /**
     * @var string
     */
    protected $primaryKey = 'characterID';

    /**
     * @var array
     */
    protected $fillable = [
        'characterID', 'characterName', 'race', 'bloodline', 'bloodlineID',
        'ancestry', 'ancestryID', 'corporationID', 'corporation', 'corporationDate',
        'securityStatus',

        // Nullable values
        'accountBalance', 'skillPoints', 'nextTrainingEnds', 'shipName', 'shipTypeID',
        'shipTypeName', 'allianceID', 'alliance', 'allianceDate', 'lastKnownLocation'
    ];

    /**
     * Returns the characters employment history
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function employment_history()
    {

        return $this->hasMany(
            'Seat\Eveapi\Models\EveCharacterInfoEmploymentHistory', 'characterID', 'characterID');
    }
}