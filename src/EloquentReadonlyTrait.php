<?php

namespace Kanekescom\LaravelEloquentReadonly;

use Illuminate\Database\Eloquent\Builder;
use Kanekescom\LaravelEloquentReadonly\EloquentReadonlyException;

trait EloquentReadonlyTrait
{
    /**
     * Throws EloquentReadonlyException on create
     * @param array $attributes
     * @throws EloquentReadonlyException
     */
    public static function create(array $attributes = [])
    {
        throw new EloquentReadonlyException(__FUNCTION__, get_called_class());
    }

    /**
     * Throws EloquentReadonlyException on forceCreate
     * @param array $attributes
     * @throws EloquentReadonlyException
     */
    public static function forceCreate(array $attributes)
    {
        throw new EloquentReadonlyException(__FUNCTION__, get_called_class());
    }

    /**
     * Throws EloquentReadonlyException on save
     * @param array $options
     * @throws EloquentReadonlyException
     */
    public function save(array $options = [])
    {
        throw new EloquentReadonlyException(__FUNCTION__, get_called_class());
    }

    /**
     * Throws EloquentReadonlyException on update
     * @param array $attributes
     * @param array $options
     * @throws EloquentReadonlyException
     */
    public function update(array $attributes = [], array $options = [])
    {
        throw new EloquentReadonlyException(__FUNCTION__, get_called_class());
    }

    /**
     * Throws EloquentReadonlyException on firstOrCreate
     * @param  array  $attributes
     * @param  array  $values
     * @throws EloquentReadonlyException
     */
    public static function firstOrCreate(array $attributes, array $values = [])
    {
        throw new EloquentReadonlyException(__FUNCTION__, get_called_class());
    }

    /**
     * Throws EloquentReadonlyException on firstOrNew
     * @param  array  $attributes
     * @param  array  $values
     * @throws EloquentReadonlyException
     */
    public static function firstOrNew(array $attributes, array $values = [])
    {
        throw new EloquentReadonlyException(__FUNCTION__, get_called_class());
    }

    /**
     * Throws EloquentReadonlyException on updateOrCreate
     * @param  array  $attributes
     * @param  array  $values
     * @throws EloquentReadonlyException
     */
    public static function updateOrCreate(array $attributes, array $values = [])
    {
        throw new EloquentReadonlyException(__FUNCTION__, get_called_class());
    }

    /**
     * Throws EloquentReadonlyException on delete
     * @throws EloquentReadonlyException
     */
    public function delete()
    {
        throw new EloquentReadonlyException(__FUNCTION__, get_called_class());
    }

    /**
     * Throws EloquentReadonlyException on destroy
     * @param mixed $ids
     * @throws EloquentReadonlyException
     */
    public static function destroy($ids)
    {
        throw new EloquentReadonlyException(__FUNCTION__, get_called_class());
    }

    /**
     * Throws EloquentReadonlyException on restore
     * @throws EloquentReadonlyException
     */
    public function restore()
    {
        throw new EloquentReadonlyException(__FUNCTION__, get_called_class());
    }

    /**
     * Throws EloquentReadonlyException on forceDelete
     * @throws EloquentReadonlyException
     */
    public function forceDelete()
    {
        throw new EloquentReadonlyException(__FUNCTION__, get_called_class());
    }

    /**
     * Throws EloquentReadonlyException on performDeleteOnModel
     * @throws EloquentReadonlyException
     */
    public function performDeleteOnModel()
    {
        throw new EloquentReadonlyException(__FUNCTION__, get_called_class());
    }

    /**
     * Throws EloquentReadonlyException on push
     * @throws EloquentReadonlyException
     */
    public function push()
    {
        throw new EloquentReadonlyException(__FUNCTION__, get_called_class());
    }

    /**
     * Throws EloquentReadonlyException on finishSave
     * @param array $options
     * @throws EloquentReadonlyException
     */
    public function finishSave(array $options)
    {
        throw new EloquentReadonlyException(__FUNCTION__, get_called_class());
    }

    /**
     * Throws EloquentReadonlyException on performUpdate
     * @param Builder $query
     * @param array $options
     * @throws EloquentReadonlyException
     */
    public function performUpdate(Builder $query, array $options = [])
    {
        throw new EloquentReadonlyException(__FUNCTION__, get_called_class());
    }

    /**
     * Throws EloquentReadonlyException on touch
     * @throws EloquentReadonlyException
     */
    public function touch()
    {
        throw new EloquentReadonlyException(__FUNCTION__, get_called_class());
    }

    /**
     * Throws EloquentReadonlyException on insert
     * @throws EloquentReadonlyException
     */
    public function insert()
    {
        throw new EloquentReadonlyException(__FUNCTION__, get_called_class());
    }

    /**
     * Throws EloquentReadonlyException on truncate
     * @throws EloquentReadonlyException
     */
    public function truncate()
    {
        throw new EloquentReadonlyException(__FUNCTION__, get_called_class());
    }
}
