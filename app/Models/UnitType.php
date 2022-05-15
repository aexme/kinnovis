<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

/**
 * @property int $id
 * @property string $name
 * @property float $size
 * @property string|null $short_description
 * @property string|null $description
 * @property bool $is_archived
 * @property int $location_id
 * @property Carbon $created_at
 * @property Carbon|null $updated_at
 *
 * @property Location $location

 */
class UnitType extends Model
{
    public function location(): BelongsTo
    {
        return $this->belongsTo(Location::class, 'location_id', 'id');
    }
}
