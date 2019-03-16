<?php

    namespace App;

    use Illuminate\Notifications\Notifiable;
    use Illuminate\Contracts\Auth\MustVerifyEmail;
    use Illuminate\Foundation\Auth\User as Authenticatable;

    class User extends Authenticatable
    {
        use Notifiable, ShinobiTrait;

        protected $fillable = [
            'name', 'email', 'password',
        ];

        protected $hidden = [
            'password', 'remember_token',
        ];

        protected $casts = [
            'email_verified_at' => 'datetime',
        ];

        public function municipality()
        {
            return $this->belongsTo(Municipality::class);
        }
        public function affiliations ()
        {
            return $this->hasMany(Affiliation::class);
        }
        public function healthTeams ()
        {
            return $this->belongsToMany(HealthTeam::class);
        }
        public function socialSecurity ()
        {
            return $this->belongsToMany(SocialSecurity::class);
        }
        public function risksCapture()
        {
            return $this->hasMany(RiskCapture::class);
        }
    }
