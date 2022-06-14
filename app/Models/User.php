<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Link;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'slug',
        'description',
        'name_color',
        'description_color',
        'verify_color',
        'banner',
        'avatar',
        'is_active',
        'locale',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function links() {
        return $this->hasMany(Link::class);
    }

    protected static function editUserProfile(User $user, $request) : void
    {
        self::where('id', $user->id)
            ->update([
                'name' => $request->name,
                'description' => $request->description,
                'background_color' => isset($request->background_color) ? $request->background_color : $user->background_color,
                'name_color' => isset($request->name_color) ? $request->name_color : $user->name_color,
                'description_color' => isset($request->description_color) ? $request->description_color : $user->description_color,
                'verify_color' => isset($request->verify_color) ? $request->verify_color : $user->verify_color,
                'slug' => isset($request->slug) ? $request->slug : $user->slug,
                'avatar' => isset($request->avatar) ? self::addPhotos($request->avatar) : $user->avatar,
                'banner' => isset($request->banner) ? self::addPhotos($request->banner) : $user->banner,
            ]);
    }

    public static function addPhotos($img) {
        $path = Storage::putFile('public/' . Auth::user()->id . '/profile', $img);
        $strpos = strpos($path, '/');
        $mb_substr = mb_substr($path, $strpos);
        $url = '../storage/app/public'.$mb_substr;
        return $url;
    }
}
