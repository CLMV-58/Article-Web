<?php

namespace App\Laravel\Models\CMS;

use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class CMSAbout extends Authenticatable
{
    use HasFactory;

    use Notifiable;

    protected $table = "cms_about";

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'title1',
        'content1',
        'title2',
        'content2',
        'title3',
        'content3',
    ];

    public static function about(): ?CMSAbout
    {
        return (new CMSAbout())->newQuery()->first();
    }
}