<?php

    namespace App;

    use Caffeinated\Shinobi\Traits\ShinobiTrait;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
    use Illuminate\Auth\Authenticatable;

    class User extends Model implements AuthenticatableContract
    {
        use Authenticatable, ShinobiTrait;

        protected $fillable = [
            'name', 'last_name' , 'doc_type', 'doc_number', 'address', 'phone_one', 'birthdate', 'sex', 'bank',
            'account_bank', 'account_number', 'email', 'username', 'password'
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
