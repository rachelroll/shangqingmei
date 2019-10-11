<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use ScoutElastic\Searchable;

class Project extends Model
{

    //use Searchable;

    protected $indexConfigurator = ProjectIndexConfigurator::class;
    protected $searchRules = [
        //
    ];
    protected $mapping = [
        'properties' => [
            'content' => [
                'type'            => 'text',
                'analyzer'        => 'ik_max_word',
                'search_analyzer' => 'ik_smart',
            ],
        ],
    ];

    /**
     * @return string
     */
    public function searchableAs()
    : string
    {
        return 'projects';
    }

    /**
     * Get the indexable data array for the model.
     *
     * @return array
     */
    public function toSearchableArray()
    {
        $array = $this->toArray();

        // Customize array...

        return $array;
    }

    /**
     * Get the value used to index the model.
     *
     * @return mixed
     */
    public function getScoutKey()
    {
        return $this->id;
    }




    public function category()
    {
        return $this->belongsTo(ProjectCategory::class);
    }

    public function setImagesAttribute($images)
    {
        if (is_array($images)) {
            $this->attributes['images'] = json_encode($images);
        }
    }

    public function getImagesAttribute($images)
    {
        return json_decode($images, true);
    }
}
