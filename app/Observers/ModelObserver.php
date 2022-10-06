<?php

namespace App\Observers;

use App\Enums\ActionType;
use App\Interfaces\LoggableInterface;
use Illuminate\Database\Eloquent\Model;

class ModelObserver
{
    /**
     * Handle the Model created event
     * 
     * @param LoggableInterface $model
     * @return void
     */
    public function created(LoggableInterface $model)
    {
        $data = [
            $model->getLogIdColumn()    => $model->id,
            'log'                       => json_encode($model),
            'type'                      => ActionType::CREATE,
            'created_by'                => 1,   // todo : use Auth id
        ];
        $model->getLogInstance()->create($data);
    }

    /**
     * Handle the Model updated event
     * 
     * @param LoggableInterface $model
     * @return void
     */
    public function updated(LoggableInterface $model)
    {
        $data = [
            $model->getLogIdColumn()    => $model->id,
            'log'                       => json_encode($model),
            'type'                      => ActionType::UPDATE,
            'created_by'                => 1,   // todo : use Auth id
        ];
        $model->getLogInstance()->create($data);
    }

    /**
     * Handle the Model deleted event
     * 
     * @param LoggableInterface $model
     * @return void
     */
    public function deleted(LoggableInterface $model)
    {
        $data = [
            $model->getLogIdColumn()    => $model->id,
            'log'                       => json_encode($model),
            'type'                      => ActionType::DELETE,
            'created_by'                => 1,   // todo : use Auth id
        ];
        $model->getLogInstance()->create($data);
    }

    /**
     * Handle the Model restored event
     * 
     * @param LoggableInterface $model
     * @return void
     */
    public function restored(LoggableInterface $model)
    {
        $data = [
            $model->getLogIdColumn()    => $model->id,
            'log'                       => json_encode($model),
            'type'                      => ActionType::RESTORE,
            'created_by'                => 1,   // todo : use Auth id
        ];
        $model->getLogInstance()->create($data);
    }

    /**
     * Handle the Model force deleted event
     * 
     * @param Model $model
     * @return void
     */
    public function forceDeleted(Model $model)
    {
        $model->where('id', $model->id)->delete();
    }
}
