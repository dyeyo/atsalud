<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;

    class Affiliation extends Model
    {
        protected $table = 'affiliations';
        protected $fillable = ['application_date', 'type_procedure', 'affiliation_type', 'affiliation_subtype',
            'regime', 'affiliated_type', 'contributing_type', 'code', 'user_id', 'status'];
        public $timestamps = true;

        public function user()
        {
            return $this->belongsTo(User::class);
        }
        public function affiliationDocuments()
        {
            return $this->hasMany(AffiliationDocument::class);
        }
        public function afiliatesInformation()
        {
            return $this->hasMany(Affiliation::class);
        }
        public  function reportsNovelty()
        {
            return $this->hasMany(ReportNovelty::class);
        }
        public  function selectables()
        {
            return $this->hasMany(Selectable::class);
        }
        public function terriorialEntity()
        {
            return $this->belongsTo(TerritorialEntity::class);
        }

    }
