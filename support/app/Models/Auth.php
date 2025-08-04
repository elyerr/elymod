<?php

namespace App\Models;

use App\Models\User\Scope;
use LogicException;
use App\Models\Subscription\Group;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Auth extends Authenticatable
{
    use HasUuids, HasFactory, Notifiable;

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
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
    ];

    /**
     * Check the admin user
     * @return bool
     */
    public function isAdmin()
    {
        $user = auth()->user();


        return in_array($this->adminScopeName(), 'dd');
    }

    /**
     * Name of admin scope
     * @return string
     */
    public function adminScopeName()
    {
        return "administrator:admin:full";
    }

    public function scopes()
    {
        return $this->belongsToMany(Scope::class);
    }


    /**
     * Check if the user has a group
     * @param mixed $group
     */
    public function canAccessMenu($group): bool
    {
        if (!auth()->check()) {
            return false;
        }

        if ($this->isAdmin()) {
            return true;
        }

        $groups = $this->listUserGroups();

        return count($groups) ? $groups->pluck('slug')->contains($group) : false;
    }


    /**
     * List the all active groups for user
     */
    public function listUserGroups(): mixed
    {
        if (!auth()->check()) {
            return [];
        }

        $user = auth()->user();




        if ($user->isAdmin()) {
            $groups = Group::get()->unique()->values();

        } else {

        }


        return $groups;
    }


    /**
     * Return the groups 
     */
    public function myGroups()
    {
        $groups = $this->listUserGroups();

        if (!count($groups)) {
            return [];
        }

        return $groups->map(fn($group) => [
            'name' => $group->name,
            'slug' => $group->slug,
        ])->toArray();
    }


}
