<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;

    class AfiliateInformation extends Model
    {
        protected $table = 'afiliates_information';
        protected $fillable = ['firts_name', 'second_name', 'surename', 'second_surename', 'doc_type', 'doc_number', 'birthdate', 'sex', 'ethnic_group', 'disability', 'type_disability', 'condition', 'stratum', 'educative_level', 'civil_status', 'special_population', 'contribution_base', 'address', 'zone', 'location', 'neighborhood', 'landline', 'mobile_phone', 'email', 'family_nucleus_code', 'municipality_id', 'ips_id', 'affiliation_id'];
        public $timestamps = true;

        public function municipality()
        {
            return $this->belongsTo(Municipality::class);
        }
        public function ips ()
        {
            return $this->belongsTo(Ips::class);
        }
        public function affiliation()
        {
            return $this->belongsTo(Affiliation::class);
        }
        public function referencesPatient()
        {
            return $this->hasMany(PatientReference::class);
        }
        public function clinicHistories ()
        {
            return $this->hasMany(ClinicHistory::class);
        }
        public function socialSecurity ()
        {
            return $this->belongsToMany(SocialSecurity::class);
        }
        public  function reportsNovelty()
        {
            return $this->hasMany(ReportNovelty::class);
        }
        public function riskCapture()
        {
            return $this->hasMany(RiskCapture::class);
        }
    }
