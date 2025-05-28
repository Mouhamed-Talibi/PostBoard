<?php

    namespace App\Models;

    use Illuminate\Contracts\Auth\MustVerifyEmail;
    use Illuminate\Foundation\Auth\User as Authenticatable;
    use Illuminate\Notifications\Notifiable;
    use Illuminate\Database\Eloquent\SoftDeletes;
    use Illuminate\Database\Eloquent\Factories\HasFactory;

    class Creator extends Authenticatable implements MustVerifyEmail
    {
        use HasFactory, Notifiable, SoftDeletes;

        protected $fillable = [
            'name', 'email', 'password', 'role', 'status', 'image', 'bio',
        ];

        protected $hidden = ['password', 'remember_token'];

        protected $casts = [
            'email_verified_at' => 'datetime',
        ];
    }
