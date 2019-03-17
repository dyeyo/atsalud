<?php

    namespace App;

    use Caffeinated\Shinobi\Traits\ShinobiTrait;
    use Illuminate\Notifications\Notifiable;
    use Illuminate\Foundation\Auth\User as Authenticatable;

    class User extends Authenticatable
    {
        use Notifiable, ShinobiTrait;

        protected $fillable = [
            'name', 'last_name' , 'doc_type', 'doc_number', 'address', 'phone_one', 'birthdate', 'sex', 'bank',
            'account_bank', 'account_number', 'email', 'username'];

        protected $hidden = [
            'password', 'remember_token',
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
