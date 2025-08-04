<?php

namespace App\Models\Subscription;
 
use App\Models\User\User;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
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

    public $table = "groups";

    public $timestamps = false;

    protected $fillable = [
        'slug',
    ];

    /**
     * Users
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany<User, Group>
     */
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
