<?php

    namespace App;

    use Caffeinated\Shinobi\Traits\ShinobiTrait;
    use Illuminate\Notifications\Notifiable;
    use Illuminate\Foundation\Auth\User as Authenticatable;
    use Illuminate\Support\Facades\DB;

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
        public static function queryusers(){
            return DB::table('users')
                ->join('municipalities', 'users.municipality_id', '=', 'municipalities.id')
                ->join('departaments', 'municipalities.departament_id', '=', 'departaments.id')
                ->join('role_user', 'role_user.user_id', '=', 'users.id')
                ->join('roles', 'role_user.role_id', '=', 'roles.id')
                ->select(
                    'users.id AS user_id',
                    'users.name AS user_name',
                    'users.last_name AS user_last_name',
                    'users.address AS user_address',
                    'users.phone_one AS user_phone_one',
                    'departaments.name AS departament_name',
                    'municipalities.name AS municipality_name',
                    'roles.name AS role_name'
                    )
                ->get();
        }
    }
