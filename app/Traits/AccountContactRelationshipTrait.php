<?php



namespace App\Traits;

use Illuminate\Database\Eloquent\Factories\Relationship;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Config;

trait AccountContactRelationshipTrait
{
    protected static function bootTraitUuid()
    {

        static::saved(function ($model) {

            $modeldata = class_basename($model);
            $modeld = "relationship." . $modeldata;
            $var = Config::get($modeld);
            $arr = array_column($var, 'table_name');
            $arr = request()->all();

            if (isset($arr['relationshipmodulename'])) {

                $data = ($arr['relationshipmodulename']);

                if (isset($arr['checkbox'])) {

                    $data1 = ($arr['relationshipmodulename']);

                    foreach ($data1 as $data) {

                        $datalow = strtolower($data);
                        $relationdef = $modeld . ".relationship";
                        $relation = Config::get($relationdef);
                        $datalows = $datalow . "s";
                        $data_id = $datalow . "_id";
                        $fill = $model::find($model->getkey());
                        $fill->$datalows()->detach(request()->all($data_id));
                    }
                } else {
                    foreach ($data as $data) {
                        $datalow = strtolower($data);

                        $relationdef = $modeld . ".relationship";

                        $relation = Config::get($relationdef);


                        if ($relation == "one to one") {
                            $datalows = $datalow;
                        } else {
                            $datalows = $datalow . "s";
                        }
                        $data_id = $datalow . "_id";

                        $fill = $model::find($model->getkey());
                        $fill->$datalows()->attach(request()->all($data_id));
                    }
                }
            }







            // }
            // if ($model->table == 'accounts') {


            //     $account = $model::find($model->getkey());
            //     $account->contacts()->attach(request()->all('contact_id'));
            // }
        });
    }
}