<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Model;
use App\Transformers\User\UserScopeTransformer;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Scope extends Model
{

    use HasUuids, HasFactory;

    /**
     * The data type of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'string';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';


    /**
     * Table name
     * @var string
     */
    protected $table = 'scopes';

    public $timestamps = false;

    /**
     * Transformer of class
     * @var 
     */
    public $transformer = UserScopeTransformer::class;

    /**
     * Fillable attributes
     * @var array
     */
    public $fillable = [
        'gsr_id',
    ];


    /**
     * Belongs to 
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
